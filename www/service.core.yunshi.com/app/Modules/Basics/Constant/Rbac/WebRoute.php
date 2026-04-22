<?php

namespace App\Modules\Basics\Constant\Rbac;

use App\Kernel\Base\BaseConstant;

/**
 * 用户服务代理人状态
 * Class AgentStatus
 * @package App\Modules\User\Constant
 */
class WebRoute extends BaseConstant
{
    const AUTH_NEEDLESS = '`auth_needless`';

    // ========================================= 公司管理 =================================================== //
    /** 本部公司 **/
    /** 新增本部公司 **/
    const MANAGEMENT_COMPANY_CREATE_HEADQUARTERS = 'management.company.create_headquarters`log`';
    /** 本部公司详情 **/
    const MANAGEMENT_COMPANY_DETAIL_HEADQUARTERS = 'management.company.detail_headquarters';
    /** 更新本部公司 **/
    const MANAGEMENT_COMPANY_UPDATE_HEADQUARTERS = 'management.company.update_headquarters`log`';
    /** 删除本部公司 **/
    const MANAGEMENT_COMPANY_DELETE_HEADQUARTERS = 'management.company.delete_headquarters`log`';
    /** 本部公司列表（分页） **/
    const MANAGEMENT_COMPANY_GET_HEADQUARTERS_PAGE_LIST = 'management.company.get_headquarters_page_list';
    /** 本部公司列表（不分页） **/
    const MANAGEMENT_COMPANY_GET_HEADQUARTERS_LIST = 'management.company.get_headquarters_list`auth_needless`';
    // ========================================= 公司管理 =================================================== //

    // ========================================= CRM部门权限 =================================================== //
    /** 部门权限详情 **/
    const MANAGEMENT_COMPANY_CRM_DEPARTMENT_PERMISSION_DETAIL = 'management.company.crm_department_permission.detail';
    /** 编辑部门权限 **/
    const MANAGEMENT_COMPANY_CRM_DEPARTMENT_PERMISSION_UPDATE = 'management.company.crm_department_permission.update`log`';
    /** crm app部门权限详情 **/
    const MANAGEMENT_COMPANY_CRM_APP_DEPARTMENT_PERMISSION_DETAIL = 'management.company.crm_app_department_permission.detail';
    /** crm app编辑部门权限 **/
    const MANAGEMENT_COMPANY_CRM_APP_DEPARTMENT_PERMISSION_UPDATE = 'management.company.crm_app_department_permission.update`log`';
    // ========================================= CRM部门权限 =================================================== //

    // ========================================= CRM部门 =================================================== //
    /** 新增部门 **/
    const MANAGEMENT_COMPANY_DEPARTMENT_CREATE = 'management.company.department.create`log`';
    // 新增部门成员
    const MANAGEMENT_COMPANY_DEPARTMENT_CREATE_MEMBERS = 'management.company.department.create_members`log`';
    // 移除部门成员
    const MANAGEMENT_COMPANY_DEPARTMENT_REMOVE_MEMBERS = 'management.company.department.remove_members`log`';
    /** 部门详情 **/
    const MANAGEMENT_COMPANY_DEPARTMENT_DETAIL = 'management.company.department.detail';
    /** 更新部门 **/
    const MANAGEMENT_COMPANY_DEPARTMENT_UPDATE = 'management.company.department.update`log`';
    /** 部门列表（分页） **/
    const MANAGEMENT_COMPANY_DEPARTMENT_GET_PAGE_LIST = 'management.company.department.get_page_list';
    /** 部门列表（不分页） **/
    const MANAGEMENT_COMPANY_DEPARTMENT_GET_LIST = 'management.company.department.get_list`auth_needless`';
    /** 部门成员 **/
    const MANAGEMENT_COMPANY_DEPARTMENT_GET_DEPARTMENT_MEMBERS = 'management.company.department.get_department_members`auth_needless`';
    /** 部门解散 **/
    const MANAGEMENT_COMPANY_DEPARTMENT_DISBAND = 'management.company.department.disband`log`';
    /** 导出 **/
    const MANAGEMENT_COMPANY_DEPARTMENT_EXPORT = 'management.company.department.export';
    // ========================================= CRM部门 =================================================== //

    // ========================================= CRM员工 =================================================== //
    /** 员工详情 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_DETAIL = 'management.company.employee.detail';
    /** 更新员工 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_UPDATE = 'management.company.employee.update`log`';
    /** 员工异动列表 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_GET_CHANGE_LOG_LIST = 'management.company.employee.get_change_log_list';
    /** 员工列表（不分页） **/
    const MANAGEMENT_COMPANY_EMPLOYEE_GET_LIST = 'management.company.employee.get_list`auth_needless`';
    /** 可接客的员工列表 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_RECEPTION_LIST = 'management.company.employee.reception_list`auth_needless`';
    /** 获取公司员工列表 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_GET_COMPANY_EMPLOYEE_LIST = 'management.company.employee.get_company_employee_list`auth_needless`';
    // ========================================= CRM员工 =================================================== //

    // ========================================= rbac路由 =================================================== //
    /** 我的权限列表 **/
    const MANAGEMENT_SYS_PERMISSION_MY_PERMISSION_LIST = 'management.sys_permission.my_permission_list`auth_needless`';
    /** 角色权限详情 **/
    const MANAGEMENT_RBAC_SYS_PERMISSION_GROUP_DETAIL = 'management.rbac.sys_permission_group.detail';
    /** 角色权限详情 **/
    const MANAGEMENT_SYS_ROLE_PERMISSION_RELATION_UPDATE = 'management.sys_role_permission_relation.update`log`';
    /** 角色数据权限详情 **/
    const MANAGEMENT_RBAC_SYS_REPORT_PERMISSION_GROUP_DETAIL = 'management.rbac.sys_report_permission_group.detail';
    /** 角色数据权限更新 **/
    const MANAGEMENT_SYS_ROLE_REPORT_PERMISSION_RELATION_UPDATE = 'management.sys_role_report_permission_relation.update`log`';
    /** 登录 **/
    const MANAGEMENT_LOGIN = 'management.login`auth_needless,log`';
    /** 登出 **/
    const MANAGEMENT_LOGOUT = 'management.logout`auth_needless`';

    /** 系统用户 **/
    /** 修改个人密码 **/
    const MANAGEMENT_SYS_USER_CHANGE_PERSONAL_PASSWORD = 'management.sys_user.change_personal_password`auth_needless,log`';
    /** 更新头像 **/
    const MANAGEMENT_SYS_USER_CHANGE_PERSONAL_AVATAR = 'management.sys_user.change_personal_avatar`auth_needless,log`';
    /** 账号详情 **/
    const MANAGEMENT_SYS_USER_DETAIL = 'management.sys_user.detail`auth_needless`';
    /** 当前成员信息 **/
    const MANAGEMENT_SYS_USER_USER_INFO = 'management.sys_user.user_info`auth_needless`';
    /** 新增成员 **/
    const MANAGEMENT_SYS_USER_STORE = 'management.sys_user.store`log`';
    /** 更新成员 **/
    const MANAGEMENT_SYS_USER_UPDATE = 'management.sys_user.update`log`';
    /** 成员列表 **/
    const MANAGEMENT_SYS_USER_GET_PAGE_LIST = 'management.sys_user.get_page_list';
    /** 成员列表（不分页） **/
    const MANAGEMENT_SYS_USER_GET_LIST = 'management.sys_user.get_list';
    /** 更新成员状态 **/
    const MANAGEMENT_SYS_USER_UPDATE_ACCOUNT_STATUS = 'management.sys_user.update_account_status`log`';
    /** 修改成员密码 **/
    const MANAGEMENT_SYS_USER_UPDATE_PASSWORD = 'management.sys_user.update_password`log`';
    /** 绑定CRM **/
    const MANAGEMENT_SYS_USER_BIND_USER = 'management.sys_user.bind_user`log`';
    /** 解绑CRM **/
    const MANAGEMENT_SYS_USER_UNBIND_USER = 'management.sys_user.unbind_user`log`';
    /** 获取密码登录状态 **/
    const MANAGEMENT_SYS_USER_PASSWORD_EXPIRE_STATUS = 'management.sys_user.password_expire_status`auth_needless`';
    /** 强制退出 **/
    const MANAGEMENT_SYS_USER_FORCE_LOGOUT_BY_ACCOUNT = 'management.sys_user.force_logout_by_account`log`';

    /** 系统角色 **/
    /** 新增角色 **/
    const MANAGEMENT_RBAC_SYS_ROLE_STORE = 'management.rbac.sys_role.store`log`';
    /** 复制角色 **/
    const MANAGEMENT_RBAC_SYS_ROLE_COPY = 'management.rbac.sys_role.copy`log`';
    /** 更新角色 **/
    const MANAGEMENT_RBAC_SYS_ROLE_UPDATE = 'management.rbac.sys_role.update`log`';
    /** 删除角色 **/
    const MANAGEMENT_RBAC_SYS_ROLE_DELETE = 'management.rbac.sys_role.delete`log`';
    /** 角色详情 **/
    const MANAGEMENT_RBAC_SYS_ROLE_DETAIL = 'management.rbac.sys_role.detail';
    /** 角色列表 **/
    const MANAGEMENT_RBAC_SYS_ROLE_PAGE_LIST = 'management.rbac.sys_role.page_list';
    /** 角色下拉列表 **/
    const MANAGEMENT_RBAC_SYS_ROLE_SELECT_LIST = 'management.rbac.sys_role.select_list`auth_needless`';
    // ========================================= rbac路由 =================================================== //

    // ========================================= crm-rbac路由 =================================================== //
    /** 角色权限详情 **/
    const MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL = 'management.crm_rbac.permission_group.detail';
    /** CRM权限列表 **/
    const MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_LIST = 'management.crm_rbac.permission_group.list';
    /** CRM APP权限列表 **/
    const MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_LIST = 'management.crm_app_rbac.permission_group.list';
    /** 修改角色权限 **/
    const MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_UPDATE = 'management.crm_rbac.role_permission_relation.update`log`';
    /** 刷新角色权限 **/
    const MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_REFRESH = 'management.crm_rbac.role_permission_relation.refresh';
    /** 批量更新CRM角色权限 **/
    const MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE = 'management.crm_rbac.role_permission_relation.batch_update`log`';
    /** 批量新增CRM角色权限 **/
    const MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD = 'management.crm_rbac.role_permission_relation.batch_add`log`';
    /** 批量删除CRM角色权限 **/
    const MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE = 'management.crm_rbac.role_permission_relation.batch_delete`log`';
    /** 批量更新CRM APP角色权限 **/
    const MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE = 'management.crm_app_rbac.role_permission_relation.batch_update`log`';
    /** 批量新增CRM APP角色权限 **/
    const MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD = 'management.crm_app_rbac.role_permission_relation.batch_add`log`';
    /** 批量删除CRM APP角色权限 **/
    const MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE = 'management.crm_app_rbac.role_permission_relation.batch_delete`log`';
    /** 获取crm app权限详情 **/
    const MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_DETAIL = 'management.crm_app_rbac.permission_group.detail';
    /** 修改crm app角色权限 **/
    const MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_UPDATE = 'management.crm_app_rbac.role_permission_relation.update`log`';
    /** 角色数据权限详情 **/
    const MANAGEMENT_CRM_RBAC_REPORT_PERMISSION_GROUP_DETAIL = 'management.crm_rbac.report_permission_group.detail';
    /** 修改角色数据权限 **/
    const MANAGEMENT_CRM_RBAC_ROLE_REPORT_PERMISSION_RELATION_UPDATE = 'management.crm_rbac.role_report_permission_relation.update`log`';

    /** crm员工 **/
    /** 员工账号详情 **/
    const MANAGEMENT_CRM_USER_DETAIL = 'management.crm_user.detail';
    /** 新增员工 **/
    const MANAGEMENT_CRM_USER_STORE = 'management.crm_user.store`log`';
    /** 更新员工 **/
    const MANAGEMENT_CRM_USER_UPDATE = 'management.crm_user.update`log`';
    /** 员工列表 **/
    const MANAGEMENT_CRM_USER_GET_PAGE_LIST = 'management.crm_user.get_page_list';
    /** 员工下拉列表 **/
    const MANAGEMENT_CRM_USER_SELECT_LIST = 'management.crm_user.select_list`auth_needless`';
    /** 修改员工密码 **/
    const MANAGEMENT_CRM_USER_UPDATE_PASSWORD = 'management.crm_user.update_password`log`';
    /** 修改员工角色 **/
    const MANAGEMENT_CRM_USER_UPDATE_ROLE = 'management.crm_user.update_role`log`';
    /** 员工离职-更新账户状态 **/
    const MANAGEMENT_CRM_USER_DIMISSION = 'management.crm_user.dimission`log`';
    /** 生成模拟员工登录鉴权链接 **/
    const MANAGEMENT_CRM_USER_GENERATE_AUTH_LINK = 'management.crm_user.generate_auth_link';
    /** 上传员工用工合同 **/
    const MANAGEMENT_CRM_USER_UPLOAD_CONTRACT_FILE = 'management.crm_user.upload_contract_file`log`';
    /** 用工合同详情 **/
    /** 补充合同有效期 */
    const MANAGEMENT_CRM_USER_SUPPLEMENT_CONTRACT_DATE = 'management.crm_user.supplement_contract_date`log`';
    /** 作废合同 */
    const MANAGEMENT_CRM_USER_NULLIFY_CONTRACT = 'management.crm_user.nullify_contract`log`';
    /** 员工列表导出 **/
    const MANAGEMENT_CRM_USER_EXPORT = 'management.crm_user.export`log`';
    /** 执业证关联 **/
    const MANAGEMENT_CRM_USER_QUALIFICATIONS_WITH = 'management.crm_user.qualifications_with`log`';
    /** 顾问在线设置 **/
    const MANAGEMENT_CRM_USER_SET_ADVISER_ONLINE = 'management.crm_user.set_adviser_online`log`';
    /** 重置app的imei码 **/
    const MANAGEMENT_CRM_USER_RESET_IMEI = 'management.crm_user.reset_app_imei`log`';
    /** 修改员工状态 **/
    const MANAGEMENT_CRM_USER_MODIFY_STATUS = 'management.crm_user.modify_status`log`';
    /** 强制员工退出登录 **/
    const MANAGEMENT_CRM_USER_FORCE_LOGOUT = 'management.crm_user.force_logout`log`';
    /** 查看员工登录日志 **/
    const MANAGEMENT_CRM_USER_LOGIN_LOG_PAGE_LIST = 'management.crm_user.login_log_page_list';
    /** 安全设置 **/
    const MANAGEMENT_CRM_USER_CHANGE_SET_SECRET_WAY = 'management.crm_user.change_set_secret_way`log`';

    /** crm角色 **/
    /** 新增角色 **/
    const MANAGEMENT_CRM_RBAC_ROLE_STORE = 'management.crm_rbac.role.store`log`';
    /** 复制角色 **/
    const MANAGEMENT_CRM_RBAC_ROLE_COPY = 'management.crm_rbac.role.copy`log`';
    /** 删除角色 **/
    const MANAGEMENT_CRM_RBAC_ROLE_DELETE = 'management.crm_rbac.role.delete`log`';
    /** 更新角色 **/
    const MANAGEMENT_CRM_RBAC_ROLE_UPDATE = 'management.crm_rbac.role.update`log`';
    /** 角色详情 **/
    const MANAGEMENT_CRM_RBAC_ROLE_DETAIL = 'management.crm_rbac.role.detail';
    /** 角色列表 **/
    const MANAGEMENT_CRM_RBAC_ROLE_PAGE_LIST = 'management.crm_rbac.role.page_list';
    /** 角色下拉列表 **/
    const MANAGEMENT_CRM_RBAC_ROLE_SELECT_LIST = 'management.crm_rbac.role.select_list`auth_needless`';
    /** 批量设置员工角色 **/
    const MANAGEMENT_CRM_RBAC_ROLE_BATCH_SET_USER_ROLE = 'management.crm_rbac.role.batch_set_user_role';
    // ========================================= crm-rbac路由 =================================================== //

    // ========================================= crm销售职位路由 =================================================== //
    /** crm销售职位 **/
    /** 新增角色 **/
    const MANAGEMENT_CRM_USER_POSITION_STORE = 'management.crm_user_position.store`log`';
    /** 更新角色 **/
    const MANAGEMENT_CRM_USER_POSITION_UPDATE = 'management.crm_user_position.update`log`';
    /** 角色详情 **/
    const MANAGEMENT_CRM_USER_POSITION_DETAIL = 'management.crm_user_position.detail';
    /** 角色列表 **/
    const MANAGEMENT_CRM_USER_POSITION_PAGE_LIST = 'management.crm_user_position.page_list';
    /** 角色下拉列表 **/
    const MANAGEMENT_CRM_USER_POSITION_SELECT_LIST = 'management.crm_user_position.select_list`auth_needless`';
    /** 职位等级列表 **/
    const MANAGEMENT_CRM_USER_POSITION_GRADE_LIST = 'management.crm_user_position.grade_list`auth_needless`';
    // ========================================= crm销售职位路由 =================================================== //

    // ========================================= 系统管理路由 =================================================== //
    /** 核心系统操作日志列表 **/
    const MANAGEMENT_SYSTEM_OPERATION_LOG_GET_PAGE_LIST = 'management.system.operation_log.get_page_list';
    /** 核心crm系统操作日志列表 **/
    const MANAGEMENT_SYSTEM_CRM_OPERATION_LOG_GET_PAGE_LIST = 'management.system.crm_operation_log.get_page_list';
    /** 管理CRM **/
    const MANAGEMENT_SYSTEM_ACTION_CRM_SYSTEM = 'management.system.action_crm_user`log`';
    // ========================================= 系统管理路由 =================================================== //

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [

            /** 本部公司 **/
            self::MANAGEMENT_COMPANY_CREATE_HEADQUARTERS                           => '新增本部公司',
            self::MANAGEMENT_COMPANY_DETAIL_HEADQUARTERS                           => '本部公司详情',
            self::MANAGEMENT_COMPANY_UPDATE_HEADQUARTERS                           => '更新本部公司详情',
            self::MANAGEMENT_COMPANY_DELETE_HEADQUARTERS                           => '删除本部公司',
            self::MANAGEMENT_COMPANY_GET_HEADQUARTERS_PAGE_LIST                    => '本部公司列表（分页）',
            self::MANAGEMENT_COMPANY_GET_HEADQUARTERS_LIST                         => '本部公司列表（不分页）',

            /** CRM部门权限 **/
            self::MANAGEMENT_COMPANY_CRM_DEPARTMENT_PERMISSION_DETAIL              => '部门权限详情',
            self::MANAGEMENT_COMPANY_CRM_DEPARTMENT_PERMISSION_UPDATE              => '更新部门权限',
            self::MANAGEMENT_COMPANY_CRM_APP_DEPARTMENT_PERMISSION_DETAIL          => 'APP部门权限详情',
            self::MANAGEMENT_COMPANY_CRM_APP_DEPARTMENT_PERMISSION_UPDATE          => '更新APP部门权限',

            /** CRM部门 **/
            self::MANAGEMENT_COMPANY_DEPARTMENT_CREATE                             => '新增部门',
            self::MANAGEMENT_COMPANY_DEPARTMENT_DETAIL                             => '部门详情',
            self::MANAGEMENT_COMPANY_DEPARTMENT_UPDATE                             => '更新部门详情',
            self::MANAGEMENT_COMPANY_DEPARTMENT_GET_PAGE_LIST                      => '部门列表（分页）',
            self::MANAGEMENT_COMPANY_DEPARTMENT_GET_LIST                           => '部门列表（不分页）',
            self::MANAGEMENT_COMPANY_DEPARTMENT_DISBAND                            => '部门解散',

            /** CRM员工 **/
            self::MANAGEMENT_COMPANY_EMPLOYEE_DETAIL                               => '员工详情',
            self::MANAGEMENT_COMPANY_EMPLOYEE_UPDATE                               => '更新员工详情',
            self::MANAGEMENT_COMPANY_EMPLOYEE_GET_CHANGE_LOG_LIST                  => '员工异动列表',
            self::MANAGEMENT_COMPANY_EMPLOYEE_GET_LIST                             => '员工列表（不分页）',

            /** rbac路由 **/
            self::MANAGEMENT_SYS_PERMISSION_MY_PERMISSION_LIST                     => '我的权限列表',
            self::MANAGEMENT_RBAC_SYS_PERMISSION_GROUP_DETAIL                      => '角色权限详情',
            self::MANAGEMENT_SYS_ROLE_PERMISSION_RELATION_UPDATE                   => '角色权限更新',
            self::MANAGEMENT_RBAC_SYS_REPORT_PERMISSION_GROUP_DETAIL               => '角色数据权限详情',
            self::MANAGEMENT_SYS_ROLE_REPORT_PERMISSION_RELATION_UPDATE            => '角色数据权限更新',
            self::MANAGEMENT_LOGIN                                                 => '登录',
            self::MANAGEMENT_LOGOUT                                                => '登出',

            /** 系统用户 **/
            self::MANAGEMENT_SYS_USER_CHANGE_PERSONAL_PASSWORD                     => '修改个人密码',
            self::MANAGEMENT_SYS_USER_CHANGE_PERSONAL_AVATAR                       => '更新头像',
            self::MANAGEMENT_SYS_USER_DETAIL                                       => '账号详情',
            self::MANAGEMENT_SYS_USER_USER_INFO                                    => '当前成员信息',
            self::MANAGEMENT_SYS_USER_STORE                                        => '新增系统成员',
            self::MANAGEMENT_SYS_USER_UPDATE                                       => '更新成员详情',
            self::MANAGEMENT_SYS_USER_GET_PAGE_LIST                                => '成员列表',
            self::MANAGEMENT_SYS_USER_UPDATE_ACCOUNT_STATUS                        => '更新成员状态',
            self::MANAGEMENT_SYS_USER_UPDATE_PASSWORD                              => '更新成员密码',
            self::MANAGEMENT_SYS_USER_BIND_USER                                    => '绑定CRM',
            self::MANAGEMENT_SYS_USER_UNBIND_USER                                  => '解绑CRM',
            self::MANAGEMENT_SYS_USER_FORCE_LOGOUT_BY_ACCOUNT                      => '强制退出',

            /** 系统角色 **/
            self::MANAGEMENT_RBAC_SYS_ROLE_STORE                                   => '新增角色',
            self::MANAGEMENT_RBAC_SYS_ROLE_UPDATE                                  => '更新角色详情',
            self::MANAGEMENT_RBAC_SYS_ROLE_DELETE                                  => '删除角色',
            self::MANAGEMENT_RBAC_SYS_ROLE_DETAIL                                  => '角色详情',
            self::MANAGEMENT_RBAC_SYS_ROLE_PAGE_LIST                               => '角色列表',
            self::MANAGEMENT_RBAC_SYS_ROLE_SELECT_LIST                             => '角色下拉列表',

            /** rbac路由 **/
            self::MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL                   => '角色权限详情',
            self::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_UPDATE           => '角色权限更新',
            self::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_REFRESH           => '角色权限刷新',
            self::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE     => '批量更新CRM角色权限',
            self::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD        => '批量新增CRM角色权限',
            self::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE     => '批量删除CRM角色权限',
            self::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE => '批量更新CRM APP角色权限 ',
            self::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD    => '批量新增CRM APP角色权限 ',
            self::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE => '批量删除CRM APP角色权限 ',
            self::MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_DETAIL               => 'Crm App角色权限详情',
            self::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_UPDATE       => 'Crm App角色权限更新',
            self::MANAGEMENT_CRM_RBAC_REPORT_PERMISSION_GROUP_DETAIL            => '角色数据权限详情',
            self::MANAGEMENT_CRM_RBAC_ROLE_REPORT_PERMISSION_RELATION_UPDATE    => '角色数据权限更新',

            /** crm员工 **/
            self::MANAGEMENT_CRM_USER_DETAIL                                    => '员工账号详情',
            self::MANAGEMENT_CRM_USER_STORE                                     => '新增系统员工',
            self::MANAGEMENT_CRM_USER_UPDATE                                    => '更新员工详情',
            self::MANAGEMENT_CRM_USER_GET_PAGE_LIST                             => '员工列表',
            self::MANAGEMENT_CRM_USER_SELECT_LIST                               => '员工下拉列表',
            self::MANAGEMENT_CRM_USER_UPDATE_PASSWORD                           => '更新员工密码',
            self::MANAGEMENT_CRM_USER_UPDATE_ROLE                               => '设置CRM角色',
            self::MANAGEMENT_CRM_USER_DIMISSION                                 => '员工离职',
            self::MANAGEMENT_CRM_USER_GENERATE_AUTH_LINK                        => '生成模拟员工登录鉴权链接',
            self::MANAGEMENT_CRM_USER_UPLOAD_CONTRACT_FILE                      => '上传员工用工合同',
            self::MANAGEMENT_CRM_USER_SUPPLEMENT_CONTRACT_DATE                  => '补充合同有效期',
            self::MANAGEMENT_CRM_USER_NULLIFY_CONTRACT                          => '作废合同',
            self::MANAGEMENT_CRM_USER_EXPORT                                    => '员工列表导出',
            self::MANAGEMENT_CRM_USER_QUALIFICATIONS_WITH                       => '执业证关联',
            self::MANAGEMENT_CRM_USER_SET_ADVISER_ONLINE                        => '顾问设置',
            self::MANAGEMENT_CRM_USER_RESET_IMEI                                => '重置IMEI',
            self::MANAGEMENT_CRM_USER_MODIFY_STATUS                             => '修改员工状态',
            self::MANAGEMENT_CRM_USER_FORCE_LOGOUT                              => '强制退出登录',
            self::MANAGEMENT_CRM_USER_LOGIN_LOG_PAGE_LIST                       => '查看员工登录日志',
            self::MANAGEMENT_CRM_USER_CHANGE_SET_SECRET_WAY                     => '安全设置',

            /** crm角色 **/
            self::MANAGEMENT_CRM_RBAC_ROLE_STORE                                => '新增crm角色',
            self::MANAGEMENT_CRM_RBAC_ROLE_COPY                                 => '复制crm角色',
            self::MANAGEMENT_CRM_RBAC_ROLE_DELETE                               => '删除crm角色',
            self::MANAGEMENT_CRM_RBAC_ROLE_UPDATE                               => '更新crm角色详情',
            self::MANAGEMENT_CRM_RBAC_ROLE_DETAIL                               => 'crm角色详情',
            self::MANAGEMENT_CRM_RBAC_ROLE_PAGE_LIST                            => 'crm角色列表',
            self::MANAGEMENT_CRM_RBAC_ROLE_SELECT_LIST                          => 'crm角色下拉列表',

            /** crm角色 **/
            self::MANAGEMENT_CRM_USER_POSITION_STORE                            => '新增crm销售职位',
            self::MANAGEMENT_CRM_USER_POSITION_UPDATE                           => '更新crm销售职位详情',
            self::MANAGEMENT_CRM_USER_POSITION_DETAIL                           => 'crm销售职位详情',
            self::MANAGEMENT_CRM_USER_POSITION_PAGE_LIST                        => 'crm销售职位列表',
            self::MANAGEMENT_CRM_USER_POSITION_SELECT_LIST                      => 'crm销售职位下拉列表',

            /** 系统管理路由 **/
            self::MANAGEMENT_SYSTEM_OPERATION_LOG_GET_PAGE_LIST                    => '核心系统操作日志列表',
            self::MANAGEMENT_SYSTEM_CRM_OPERATION_LOG_GET_PAGE_LIST                => '核心crm系统操作日志列表',
            self::MANAGEMENT_SYSTEM_ACTION_CRM_SYSTEM                              => '管理CRM',
        ];
    }
}
