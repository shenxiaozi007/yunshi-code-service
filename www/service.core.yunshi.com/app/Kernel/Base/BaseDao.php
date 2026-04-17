<?php

namespace App\Kernel\Base;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\FileUploadException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * 数据处理基类
 *
 */
abstract class BaseDao
{
    protected array $baseColumns = [];

    /**
     * @var array
     */
    protected array $selectColumns = ['*'];

    /**
     * 构造条件，忽略键
     * @var string[]
     */
    protected array $buildFiledConditionIgnore = [
        'page',
        'page_size',
        '_ts',
        '_rd',
        '_terminal',
        '_sign',
    ];

    /**
     * @return static
     */
    public static function getInstance(): BaseDao
    {
        return new static();
    }

    /**
     * 定义字段和模型的scope方法映射
     * @return array
     */
    protected function defineFieldQueryFuncMap(): array
    {
        return [];
    }

    /**
     * @return Model
     */
    abstract protected function getModel(): Model;

    /**
     * 获取查询构造器
     * @return Builder
     */
    protected function newBuilder()
    {
        return $this->getModel()->newQuery();
    }

    /**
     * @param $id
     * @param array $columns
     * @param array $relations
     * @return Builder|Collection|Model|static[]|null
     */
    public function find($id, array $columns = [], array $relations = [])
    {
        return $this
            ->getModel()
            ->newQuery()
            ->select($this->getSelectColumns($columns))
            ->with($relations)
            ->find($id);
    }

    /**
     * @param $id
     * @param array $columns
     * @param array $relations
     * @return Builder|Collection|Model|static[]
     * @throws AppException
     */
    public function findOrFail($id, array $columns = [], array $relations = [])
    {
        $model = $this->find($id, $columns, $relations);

        if (!$model) throw new AppException(110006);

        return $model;
    }

    /**
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        return $this->getModel()->destroy($id);
    }

    /**
     * @param array $columns
     * @return array
     */
    public function getSelectColumns(array $columns = []): array
    {
        return $columns ?: $this->selectColumns;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function insert(array $data): bool
    {
        return $this->getModel()->newQuery()->insert($data);
    }

    /**
     * Add data
     *
     * @param array $rows
     * @param $chunkSize
     * @return bool
     * @author 秦昊
     * Date: 2019-03-01 16:00
     */
    public function insertMulti(array $rows, $chunkSize = 200): bool
    {
        if (count($rows) > $chunkSize)
        {
            $chunkGroupRows = array_chunk($rows, $chunkSize);
        }
        else
        {
            $chunkGroupRows[] = $rows;
        }

        foreach ($chunkGroupRows as $groupRows)
        {
            // 存储解析后的数据
            $this->newBuilder()->insert($groupRows);
        }

        return true;
    }

    /**
     * Add data
     *
     * @param array $params
     * @param array $extra
     * @return Model
     */
    public function store(array $params, array $extra = [])
    {
        $model = $this->getModel();

        $model->fill($params);
        $model->forceFill($extra);
        $model->save();
        return $model;
    }

    /**
     * 强制写入
     * @param array $data
     * @return Model
     */
    public function forceStore(array $data)
    {
        $model = $this->getModel();

        $model->forceFill($data);
        $model->save();

        return $model;
    }

    /**
     * 更新或者新增
     * @param array $attributes
     * @param array $values
     * @return Builder|Model|mixed
     */
    public function updateOrCreate(array $attributes, array $values = [])
    {
        return $this->newBuilder()->updateOrCreate($attributes, $values);
    }

    /**
     * @param $id
     * @param array $params
     * @param array $extra
     * @return Model
     * @throws AppException
     */
    public function update($id, array $params = [], array $extra = []): Model
    {
        $model = $this->findOrFail($id, ['id']);

        $model->fill($params);
        $model->forceFill($extra);
        $model->save();

        return $model;
    }

    /**
     *
     * @param $id
     * @param array $params
     * @return mixed
     * @throws AppException
     */
    public function forceUpdate($id, array $params)
    {
        return $this->update($id, [], $params);
    }

    /**
     * 根据条件更新
     * @param array $params
     * @param array $attributes
     * @return int
     * @throws AppException
     */
    public function updateByParams(array $params, array $attributes)
    {
        $query = $this->doQuery($params);

        return $query->update($attributes);
    }

    /**
     * 构建查询条件
     * @param array $params
     * @param array $relations
     * @param array $columns
     * @return Builder
     * @throws AppException
     */
    public function doQuery(array $params, array $columns = [], array $relations = [])
    {
        $params = $this->buildOrderByConditions($params);

        $query = $this->newBuilder();

        if (filled($relations))
        {
            $query->with($relations);
        }

        if (filled($columns))
        {
            $query->select($this->getSelectColumns($columns));
        }

        $params = $this->beforeBuildFiled($query, $params);

        foreach ($params as $filed => $value)
        {
            if (!in_array($filed, $this->buildFiledConditionIgnore))
            {
                $this->buildFiledCondition($query, $filed, $value);
            }
        }

        return $query;
    }

    /**
     * 构建查询条件
     * @param Builder $query
     * @param array $params
     * @return Builder
     * @throws AppException
     */
    public function buildConditionsToQuery(Builder $query, array $params): Builder
    {
        $params = $this->beforeBuildFiled($query, $params);

        foreach ($params as $filed => $value)
        {
            if (!in_array($filed, $this->buildFiledConditionIgnore))
            {
                $this->buildFiledCondition($query, $filed, $value);
            }
        }

        return $query;
    }

    /**
     * 构建查询前对$params进行操作
     *
     * @param Builder $query
     * @param array $params
     * @return array
     */
    protected function beforeBuildFiled(Builder $query, array $params): array
    {
        return $params;
    }

    /**
     * 整理排序条件
     * @param array $params
     * @return array
     */
    private function buildOrderByConditions(array $params)
    {
        $orderBy = array_pull($params, 'order_by');

        if (filled($orderBy))
        {
            $orderBy = is_array($orderBy) ? $orderBy : [$orderBy];

            foreach ($orderBy as $item)
            {
                list($columnName, $sortDirection) = explode(',', $item);

                if (filled($columnName) && filled($sortDirection) && in_array(strtolower($sortDirection), ['asc', 'desc']))
                {
                    $queryName = camel_case("sort_by_{$columnName}");

                    $params[$queryName] = $sortDirection;
                }
            }
        }

        return $params;
    }

    /**
     * 构造字段查询条件
     * @param Builder $query
     * @param string $filed
     * @param $value
     * @throws AppException
     */
    private function buildFiledCondition(Builder $query, string $filed, $value): void
    {
        if (filled($value))
        {
            $queryFunc = array_get($this->defineFieldQueryFuncMap(), $filed);

            if (filled($queryFunc))
            {
                $queryFunc = $queryFunc . '_query';
            }
            else
            {
                $queryFunc = $filed . '_query';
            }

            $methodName   = camel_case('scope_' . $queryFunc);
            $model        = $this->getModel();
            $methodExists = method_exists($model, $methodName);

            if (
                true === env('WARNING_MODEL_METHOD_NOT_DEFINED', true)
                && !$methodExists
            ) {
                throw new AppException(
                    '100000',
                    [],
                    'method ' . $methodName . ' is not defined in ' . get_class($model)
                );
            }

            if ($methodExists)
            {
                $queryFunc = camel_case($queryFunc);
                $query->$queryFunc($value);
            }
        }
    }

    /**
     * 获取表名
     * @return string
     */
    public function getTableName(): string
    {
        return static::getModel()->getTable();
    }

    /**
     * 查询第一条或插入
     * @param array $attributes
     * @param array $values
     * @return mixed
     */
    public function firstOrCreate(array $attributes, array $values = [])
    {
        return $this->getModel()->newQuery()->firstOrCreate($attributes, $values);
    }

    /**
     * 查询或初始化模型实例
     * @param array $attributes
     * @param array $values
     * @return Model
     */
    public function firstOrNew(array $attributes, array $values = []): Model
    {
        return $this->getModel()->newQuery()->firstOrNew($attributes, $values);
    }

    /**
     * 插入一条数据
     * @param array $data
     * @return Builder|Model
     */
    public function create(array $data)
    {
        return $this->getModel()->newQuery()->create($data);
    }

    /**
     * @param array $columns
     * @return mixed
     */
    public function get(array $columns = ['*'])
    {
        return $this->newBuilder()->select($this->getSelectColumns($columns))->get();
    }

    /**
     * 获取列表
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getList(array $params = [], array $columns = [], array $relations = [])
    {
        $query = $this->doQuery($params, $columns, $relations);

        $page     = array_pull($params, 'page');
        $pageSize = array_pull($params, 'page_size');

        if ($page > 0 && $pageSize > 0)
        {
            $query->skip(($page - 1) * $pageSize);
            $query->take($pageSize);
        }

        return $query->get();
    }

    /**
     * 获取分页列表
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return LengthAwarePaginator
     * @throws AppException
     */
    public function getPageList(array $params = [], array $columns = [], array $relations = [])
    {
        $query = $this->doQuery($params, $columns, $relations);

        $page     = array_get($params, 'page');
        $pageName = 'page';
        $columns  = ['*'];
        $pageSize = array_get($params, 'page_size', get_page_size());

        return $query->paginate($pageSize, $columns, $pageName, $page);
    }

    /**
     * 计算数据条数
     * @param array $params
     * @return int
     * @throws AppException
     */
    public function count(array $params)
    {
        return $this->doQuery($params)->count();
    }

    /**
     * 统计总和
     *
     * @param array $params
     * @param string $column
     * @return int|mixed
     * @throws AppException
     * @author 秦昊
     * Date: 2021/11/9 16:43
     */
    public function sumByParams(array $params, string $column)
    {
        return $this->doQuery($params)->sum($column);
    }

    /**
     * 根据条件查找单条数据
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return Builder|Model|object|null
     * @throws AppException
     */
    public function findByParams(array $params, array $columns = [], array $relations = [])
    {
        $query = $this->doQuery($params, $columns, $relations);

        return $query->first();
    }

    /**
     * 根据条件查找单条数据，未找到抛出异常
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return Builder|Model|object|null
     * @throws AppException
     */
    public function findByParamsOrFail(array $params, array $columns = [], array $relations = [])
    {
        $query = $this->doQuery($params, $columns, $relations);

        $result = $query->first();

        if (blank($result))
        {
            throw new AppException(110006);
        }

        return $result;
    }

    /**
     * 通过唯一编号查找数据
     * @param string $mainNo
     * @param array $columns
     * @param array $relations
     * @return Builder|Model|object|null
     * @throws AppException
     */
    public function findByMainNo(string $mainNo, array $columns = [], array $relations = [])
    {
        $model = $this->getModel();

        if (!method_exists($model, 'mainNo') || blank($model->mainNo()))
        {
            throw new AppException(110008);
        }

        $params = [
            $model->mainNo() => $mainNo,
        ];

        if (method_exists($model, 'mainNo') && method_exists($model, 'getMainNoColumn'))
        {
            $params = [
                'main_no' => $mainNo,
            ];
        }

        return $this->doQuery($params, $columns, $relations)->first();
    }

    /**
     * 通过唯一编号查找数据，未找到抛出异常
     * @param string $mainNo
     * @param array $columns
     * @param array $relations
     * @return Builder|Model|object
     * @throws AppException
     */
    public function findByMainNoOrFail(string $mainNo, array $columns = [], array $relations = [])
    {
        $result = $this->findByMainNo($mainNo, $columns, $relations);

        if (blank($result))
        {
            throw new AppException(110006);
        }

        return $result;
    }

    /**
     * 获取列表
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return Builder
     * @throws AppException
     */
    public function getListBuilder(array $params = [], array $columns = [], array $relations = [])
    {
        return $this->doQuery($params, $columns, $relations);
    }

    /**
     * 通过唯一编号获取数据列表
     * @param array|string $mainNo
     * @param array $columns
     * @param array $relations
     * @return Builder|Collection
     * @throws AppException
     */
    public function getByMainNo(array|string $mainNo, array $columns = [], array $relations = [])
    {
        $model = $this->getModel();

        if (! method_exists($model, 'mainNo') || blank($model->mainNo()))
        {
            throw new AppException(110008);
        }

        $params = [
            $model->mainNo() => $mainNo,
        ];

        if (method_exists($model, 'mainNo') && method_exists($model, 'getMainNoColumn'))
        {
            $params = [
                'main_no' => $mainNo,
            ];
        }

        return $this->doQuery($params, $columns, $relations)->get();
    }

    /**
     * 构建查询条件
     * @param Builder $query
     * @param array $params
     * @return Builder
     * @throws AppException
     */
    public function buildQuery(Builder $query, array $params): Builder
    {
        $params = $this->beforeBuildFiled($query, $params);

        foreach ($params as $filed => $value)
        {
            if (!in_array($filed, $this->buildFiledConditionIgnore, true))
            {
                $this->buildFiledCondition($query, $filed, $value);
            }
        }

        return $query;
    }

    /**
     * 数据导出csv文件
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @param array $headers
     * @param callable|null $formatDataFunc
     * @param string|null $savePath
     * @param string|null $saveFileName
     * @param bool $retStream
     * @return string|BinaryFileResponse|null
     * @throws AppException
     * @throws FileUploadException
     */
    public function exportCsv(
        array $params,
        array $columns = [],
        array $relations = [],
        array $headers = [],
        callable $formatDataFunc = null,
        string $savePath = null,
        string $saveFileName = null,
        bool $retStream = false
    ): BinaryFileResponse|string|null
    {
//        set_time_limit(0);   // 设置脚本最大执行时间 为0
//
//        ini_set('memory_limit', '1024M');    // 临时设置最大内存占用

        // 未定义保存路径的情况 默认保存路径
        if (blank($savePath))
        {
            $savePath = storage_path('tmp_files');
        }

        // 未定义文件名 默认文件名
        $saveFileName = $saveFileName ?: get_now();

        $savePath = mk_dir($savePath) . '/' . $saveFileName . '.csv';

        $fp = fopen($savePath, 'w');

        if ($fp === false)
        {
            throw new FileUploadException(800005);
        }

        try
        {
            // 写入表头信息
            if (filled($headers))
            {
                fputcsv($fp, array_map(fn ($val) => iconv('utf-8', 'gbk//IGNORE', $val), $headers));
            }

            $listBuilder = $this->getListBuilder($params, $columns, $relations);

//            info($saveFileName . '导出处理总数：' . $listBuilder->count());

            // todo：chunkById 可能存在跳id的问题 数据丢失
            $listBuilder->chunk(1000, function ($results) use (
                $formatDataFunc,
                $fp,
            ) {
                foreach ($results as $result)
                {
                    $row = $formatDataFunc($result);

                    if (blank($row))
                    {
                        continue;
                    }

                    fputcsv($fp, array_map(fn ($val) => iconv('utf-8', 'gbk//IGNORE', $val), $row));

                }

                unset($results);
            });

            // 保存文件失败
            if (filesize($savePath) == 0)
            {
                throw new FileUploadException(800014);
            }

            return $retStream ? new BinaryFileResponse($savePath) : $savePath;
        }
        finally
        {
            // 关闭资源
            fclose($fp);
        }
    }

    /**
     * 强制删除数据
     * @param array $params
     * @throws AppException
     */
    public function forceDelete(array $params = [])
    {
        return $this->doQuery($params)->forceDelete();
    }

    /**
     * @param array $params
     * @return Collection
     * @throws AppException
     */
    public function options(array $params): Collection
    {
        return $this->getList($params, $this->getSelectColumns($this->baseColumns));
    }

}
