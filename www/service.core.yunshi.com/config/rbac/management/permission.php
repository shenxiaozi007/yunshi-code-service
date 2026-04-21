<?php

/**
 * 要加权限，先去找对应的权限分组别名
 */

use App\Modules\Basics\Constant\Common\YesOrNo;
use App\Modules\Basics\Constant\Rbac\EncryptionOption;
use App\Modules\Basics\Constant\Rbac\WebRoute;

$permissionArr = [

   // ###################### 下载中心 start ######################
    [
        'name'              => '个人报表中心列表',
        'group_alias'       => 'download_center',
        'alias_name'        => 'download_center.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_GET_NOT_REMIND_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_UPDATE_REMIND_STATUS),
        ],
    ],
    [
        'name'              => '个人报表中心-下载',
        'group_alias'       => 'download_center',
        'alias_name'        => 'download_center.download',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_DOWNLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_DOWNLOAD),
        ],
    ],
    [
        'name'              => '管理CRM',
        'group_alias'       => 'home_page',
        'alias_name'        => 'home_page.action_crm_user',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_ACTION_CRM_SYSTEM),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_ACTION_CRM_SYSTEM),
        ],
    ],
    // ###################### 下载中心 end ######################

    // ###################### 成员管理 start ######################
    [
        'name'              => '成员列表',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_GET_PAGE_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '新增成员',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_STORE),
        ],
    ],
    [
        'name'              => '编辑成员',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_UPDATE),
        ],
    ],
    [
        'name'              => '禁用/启用成员',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.update_account_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_UPDATE_ACCOUNT_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_UPDATE_ACCOUNT_STATUS),
        ],
    ],
    [
        'name'              => '重置成员密码',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.update_password',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_UPDATE_PASSWORD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_UPDATE_PASSWORD),
        ],
    ],
    [
        'name'              => '绑定CRM',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.action_bind_crm_user',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_BIND_USER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_BIND_USER),
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_UNBIND_USER),
        ],
    ],
    [
        'name'              => '强制退出',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.force_logout_by_account',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_FORCE_LOGOUT_BY_ACCOUNT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_FORCE_LOGOUT_BY_ACCOUNT),
        ],
    ],

    [
        'name'              => '插件开关设置',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.save_extension_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_SAVE_EXTENSION_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_SAVE_EXTENSION_STATUS),
        ],
    ],

    [
        'name'              => '设置内部管理员细分管理外部公司',
        'group_alias'       => 'manager_members',
        'alias_name'        => 'sys_user.set_manage_specific_company',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_MANAGE_SPECIFIC_COMPANY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_MANAGE_SPECIFIC_COMPANY),
        ],
    ],


    // ###################### 成员管理 end ######################

    // ###################### 角色管理 start ######################
    [
        'name'              => '角色列表',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_role.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增角色',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_role.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_STORE),
        ],
    ],
    [
        'name'              => '复制角色',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_role.copy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_COPY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_COPY),
        ],
    ],
    [
        'name'              => '删除角色',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_role.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_DELETE),
        ],
    ],
    [
        'name'              => '编辑角色',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_role.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_ROLE_UPDATE),
        ],
    ],
    [
        'name'              => '权限列表',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_permission_group.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_PERMISSION_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_PERMISSION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '编辑权限',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_role_permission_relation.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_ROLE_PERMISSION_RELATION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_PERMISSION_GROUP_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_SYS_ROLE_PERMISSION_RELATION_UPDATE),
        ],
    ],
    [
        'name'              => '报表数据权限列表',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_permission_group.report_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_REPORT_PERMISSION_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_REPORT_PERMISSION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '编辑报表数据权限',
        'group_alias'       => 'manager_rbac',
        'alias_name'        => 'sys_role_permission_relation.report_update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYS_ROLE_REPORT_PERMISSION_RELATION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_RBAC_SYS_REPORT_PERMISSION_GROUP_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_SYS_ROLE_REPORT_PERMISSION_RELATION_UPDATE),
        ],
    ],
    // ###################### 角色管理 end ######################

    // ###################### crm角色管理 start ######################
    [
        'name'              => '新增角色',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_STORE),
        ],
    ],
    [
        'name'              => '复制角色',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role.copy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_COPY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_COPY),
        ],
    ],
    [
        'name'              => '删除',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_DELETE),
        ],
    ],
    [
        'name'              => '批量设置员工角色',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role.batch_set_user_role',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_BATCH_SET_USER_ROLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_BATCH_SET_USER_ROLE),
        ],
    ],
    [
        'name'              => '更新角色信息',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_DETAIL),
        ],
    ],
    [
        'name'              => '角色详情',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_DETAIL),
        ],
    ],
    [
        'name'              => 'CRM角色列表',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PAGE_LIST),
        ],
    ],
    [
        'name'              => '获取角色权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'permission_group.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '修改角色权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role_permission_relation.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '刷新角色权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role_permission_relation.refresh',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_REFRESH),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_REFRESH),
        ],
    ],
    [
        'name'              => '批量设置CRM权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role_permission_relation.batch_update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_LIST),
        ],
    ],
    [
        'name'              => '批量设置CRM APP 权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role_permission_relation.app_batch_update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_LIST),
        ],
    ],

    [
        'name'              => '获取CRM APP角色权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'permission_group.app_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '修改CRM APP角色权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role_permission_relation.app_update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_DETAIL),
        ],
    ],

    [
        'name'              => '获取角色数据权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'permission_group.report_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_REPORT_PERMISSION_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_REPORT_PERMISSION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '修改角色权限',
        'group_alias'       => 'crm_role',
        'alias_name'        => 'role_permission_relation.report_update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_REPORT_PERMISSION_RELATION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_ROLE_REPORT_PERMISSION_RELATION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_RBAC_REPORT_PERMISSION_GROUP_DETAIL),
        ],
    ],
    // ###################### crm角色管理 end ######################

    // ###################### crm员工管理 start ######################
    [
        'name'              => '添加员工',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_STORE),
        ],
    ],
    [
        'name'              => '更新员工信息',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_DETAIL),
        ],
    ],
    [
        'name'              => '员工详情',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_DETAIL),
        ],
    ],
    [
        'name'              => '员工列表',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_GET_PAGE_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '修改密码',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.update_password',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPDATE_PASSWORD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPDATE_PASSWORD),
        ],
    ],
    [
        'name'              => '修改角色',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.update_role',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPDATE_ROLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPDATE_ROLE),
        ],
    ],
    [
        'name'              => '离职',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.dimission',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_DIMISSION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_DIMISSION),
        ],
    ],
    [
        'name'              => '生成模拟登录鉴权链接',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.generate_auth_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_GENERATE_AUTH_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_GENERATE_AUTH_LINK),
        ],
    ],
    [
        'name'              => '上传用工合同',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.upload_contract_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPLOAD_CONTRACT_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_UPLOAD_CONTRACT_FILE),
        ],
    ],
    /*[
        'name'              => '合同详情',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.contract_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_CONTRACT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_CONTRACT_DETAIL),
        ],
    ],*/
    [
        'name'              => '补充合同有效期',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.supplement_contract_date',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SUPPLEMENT_CONTRACT_DATE),
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_CONTRACT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SUPPLEMENT_CONTRACT_DATE),
        ],
    ],
    [
        'name'              => '作废合同',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.nullify_contract',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_NULLIFY_CONTRACT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_NULLIFY_CONTRACT),
        ],
    ],
    [
        'name'              => '列表导出',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_EXPORT),
        ],
    ],
    [
        'name'              => '执业关联',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.qualification_with',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_QUALIFICATIONS_WITH),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_QUALIFICATIONS_WITH),
        ],
    ],
    [
        'name'              => '顾问设置',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.set_adviser_online',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SET_ADVISER_ONLINE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SET_ADVISER_ONLINE),
        ],
    ],
    [
        'name'              => '重置IMEI',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.reset_imei',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_RESET_IMEI),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_RESET_IMEI),
        ],
    ],
    [
        'name'              => '修改员工状态',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.modify_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MODIFY_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MODIFY_STATUS),
        ],
    ],
    [
        'name'              => '强制退出登录',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.force_logout',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_FORCE_LOGOUT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_FORCE_LOGOUT),
        ],
    ],
    [
        'name'              => '查看员工登录日志',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.login_log.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_LOGIN_LOG_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_LOGIN_LOG_PAGE_LIST),
        ],
    ],
    [
        'name'              => '安全设置',
        'group_alias'       => 'crm_user',
        'alias_name'        => 'user.change_set_secret_way',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_CHANGE_SET_SECRET_WAY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_CHANGE_SET_SECRET_WAY),
        ],
    ],
    // ###################### crm员工管理 end ######################

    // ###################### crm销售职位管理 start ######################
    [
        'name'              => '添加职位',
        'group_alias'       => 'crm_position',
        'alias_name'        => 'crm_position.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_STORE),
        ],
    ],
    [
        'name'              => '职位详情',
        'group_alias'       => 'crm_position',
        'alias_name'        => 'crm_position.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_DETAIL),
        ],
    ],
    [
        'name'              => '修改职位信息',
        'group_alias'       => 'crm_position',
        'alias_name'        => 'crm_position.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_UPDATE),
        ],
    ],
    [
        'name'              => '职位列表',
        'group_alias'       => 'crm_position',
        'alias_name'        => 'crm_position.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_POSITION_PAGE_LIST),
        ],
    ],
    // ###################### crm销售职位管理 end ######################

    // ###################### 核心系统操作日志 start ######################
    [
        'name'              => 'core日志列表',
        'group_alias'       => 'core_system_operation_log',
        'alias_name'        => 'core_system_operation_log.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_OPERATION_LOG_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_OPERATION_LOG_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_SYS_USER_GET_LIST),
        ],
    ],
    // ###################### 核心系统操作日志 end ######################

    // ###################### CRM系统操作日志 start ######################
    [
        'name'              => 'CRM日志列表',
        'group_alias'       => 'core_crm_operation_log',
        'alias_name'        => 'core_crm_operation_log.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_CRM_OPERATION_LOG_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SYSTEM_CRM_OPERATION_LOG_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SELECT_LIST),
        ],
    ],
    // ###################### CRM系统操作日志 end ######################

    // ###################### 本部公司列表 start ######################
    [
        'name'              => '本部公司列表',
        'group_alias'       => 'headquarters_company_list',
        'alias_name'        => 'company.get_headquarters_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_HEADQUARTERS_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_HEADQUARTERS_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增本部公司',
        'group_alias'       => 'headquarters_company_list',
        'alias_name'        => 'company.create_headquarters',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CREATE_HEADQUARTERS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CREATE_HEADQUARTERS),
        ],
    ],
    [
        'name'              => '编辑本部公司',
        'group_alias'       => 'headquarters_company_list',
        'alias_name'        => 'company.update_headquarters',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_UPDATE_HEADQUARTERS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DETAIL_HEADQUARTERS),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_UPDATE_HEADQUARTERS),
        ],
    ],
    // ###################### 本部公司列表 end ######################
];

return array_merge(
    $permissionArr,
    // 可定义其他文件
    // require(__DIR__ . '/groups/xxx.php'),
);
