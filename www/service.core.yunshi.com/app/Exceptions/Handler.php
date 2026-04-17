<?php

namespace App\Exceptions;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Kernel\Traits\ApiResponseTrait;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiResponseTrait;

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * @var array
     */
    protected array $handles = [
        HttpException::class                 => 'handleHttpException',
        ModelNotFoundException::class        => 'handleModelNotFoundException',
        ValidationException::class           => 'handleValidationException',
        NotFoundHttpException::class         => 'handleNotFoundHttpException',
        MethodNotAllowedHttpException::class => 'handleMethodNotAllowedHttpException',
        AuthException::class                 => 'handleAuthException',
        AppException::class                  => 'handleAppException',
        ThrottleRequestsException::class     => 'handleThrottleRequestsException',
    ];
    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        if (config('app.env') != 'local') {
            if ($exception instanceof BaseException && !$exception->needReport()) {
                return;
            }
        }
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Throwable $e
     * @return Response|JsonResponse
     *
     */
    public function render($request, Throwable $e)
    {
        $previous = $e->getPrevious();

        foreach ($this->handles as $class => $func) {
            if (filled($previous) && get_class($previous) === $class) {
                return $this->$func($previous, $request);
            }

            if (get_class($e) === $class) {
                return $this->$func($e, $request);
            }

            if ($e instanceof BaseException) {
                return $this->handleBaseException($e, $request);
            }
        }

        if ($e instanceof BaseException && method_exists($e, 'render')) {
            return $e->render($request);
        }

        $data = (new AppException(100000))->all();

        return $this->error($data);
    }

    /**
     * Handle not found http exception response
     *
     * @param NotFoundHttpException $exception
     * @param $request
     * @return JsonResponse
     */
    private function handleNotFoundHttpException(NotFoundHttpException $exception, $request)
    {
        $data = (new AppException(100001))->all();

        return $this->error($data);
    }

    /**
     * handle http exception response
     * @param $exception
     * @param $request
     * @return JsonResponse
     */
    protected function handleHttpException($exception, $request)
    {
        $data = (new AppException(100000))->all();

        return $this->error($data);
    }

    /**
     * Handle model not found exception response
     * @param ModelNotFoundException $exception
     * @param $request
     * @return JsonResponse
     */
    protected function handleModelNotFoundException(ModelNotFoundException $exception, $request)
    {
        $data = (new AppException(100000))->all();

        return $this->error($data);
    }

    /**
     * Handle validation exception response
     * @param ValidationException $exception
     * @param $request
     * @return JsonResponse
     */
    protected function handleValidationException(ValidationException $exception, $request)
    {
        $errorMessages = $exception->errors();

        $data = (new AppException(
            100003,
            $errorMessages,
            "参数错误：" . implode(', ', array_flatten($errorMessages))
        )
        )->all();

        return $this->ok($data);
    }

    /**
     * @param ThrottleRequestsException $exception
     * @param $request
     * @return JsonResponse
     * @author leo 2023/5/4
     */
    private function handleThrottleRequestsException(ThrottleRequestsException $exception, $request)
    {
        $data = (new AppException(110015))->all();

        return $this->error($data);
    }

    /**
     * Handle method not allowed http exception response
     *
     * @param MethodNotAllowedHttpException $exception
     * @param $request
     * @return JsonResponse
     */
    protected function handleMethodNotAllowedHttpException(MethodNotAllowedHttpException $exception, $request): JsonResponse
    {
        $data = (new AppException(100007))->all();

        return $this->ok($data);
    }

    /**
     * @param BaseException $e
     * @param $request
     * @return JsonResponse
     * @author leo 2023/6/5
     */
    private function handleBaseException(BaseException $e, $request): JsonResponse
    {

        // info('Error Handle Render Start：' . date('Y-m-d H:i:s'));

        // info('ip : ' . get_real_ip());
        // info('full url : ' . $request->fullUrl());
        // info('method : ' . $request->method());
        // info($_REQUEST);
        // info($request->header());

        // info('Error Handle Render End：' . date('Y-m-d H:i:s'));

        return $this->ok($e->all());
    }

    /**
     * Handle validation exception response
     * @param AppException $exception
     * @param $request
     * @return JsonResponse
     */
    protected function handleAppException(AppException $exception, $request): JsonResponse
    {
        return $this->ok($exception->all());
    }
}
