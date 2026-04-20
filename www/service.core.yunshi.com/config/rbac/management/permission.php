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

    // ###################### 全部客户列表 start ######################
    [
        'name'              => '全部客户-通话记录列表',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.get_all_customer_aiagain_callrecord_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_ALL_CUSTOMER_AIAGAIN_CALLRECORD_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_ALL_CUSTOMER_AIAGAIN_CALLRECORD_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '全部客户列表',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_PAGE_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '客户详情',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_DETAIL),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '客户轨迹',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.trajectory',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_DISTRIBUTION_TRAJECTORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_DISTRIBUTION_TRAJECTORY),
        ],
    ],
    [
        'name'              => '接待互动',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.user_im_messages',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_USER_IM_MESSAGES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_USER_IM_MESSAGES),
        ],
    ],
    [
        'name'              => '投保记录',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.policy.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_POLICY_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_POLICY_LIST),
        ],
    ],
    [
        'name'              => '视频观看记录',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.live.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_LIVE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_LIVE_GET_USER_LIVE_INFO),
        ],
    ],
    [
        'name'              => '投保记录详情',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.policy.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_POLICY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_POLICY_DETAIL),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '投保记录总保费',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.policy.all_premium',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_POLICY_ALL_PREMIUM),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_CUSTOMER_POLICY_ALL_PREMIUM),
        ],
    ],
    [
        'name'              => '微信沟通',
        'group_alias'       => 'all_customer_list',
        'alias_name'        => 'customer.aike.wechat_communicate_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_AIKE_WECHAT_COMMUNICATE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPERT_AIKE_WECHAT_COMMUNICATE_LIST),
        ],
    ],
    // ###################### 全部客户列表 end ######################

    //######################## 全部互动客户列表 start ########################
    [
        'name'              => '全部互动客户列表',
        'group_alias'       => 'im_all_customer_list',
        'alias_name'        => 'admin.im.customer.all.users.for.admin',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_ALL_USERS_FOR_ADMIN),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_ALL_USERS_FOR_ADMIN),
        ],
    ],
    [
        'name'              => '全部互动客户列表-来源筛选项',
        'group_alias'       => 'im_all_customer_list',
        'alias_name'        => 'admin.im.customer.user_source_options',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_USER_SOURCE_OPTIONS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_USER_SOURCE_OPTIONS),
        ],
    ],
    [
        'name'              => '全部互动客户列表-公众号',
        'group_alias'       => 'im_all_customer_list',
        'alias_name'        => 'admin.im.customer.wx.alias',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_WX_ALIAS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_WX_ALIAS),
        ],
    ],
    [
        'name'              => '全部互动客户列表-用户轨迹',
        'group_alias'       => 'im_all_customer_list',
        'alias_name'        => 'im.customer.user.trajectory',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_USER_TRAJECTORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_USER_TRAJECTORY),
        ],
    ],
    [
        'name'              => '全部互动客户-管理员查看接待排名',
        'group_alias'       => 'im_all_customer_list',
        'alias_name'        => 'im.customer.adviser_statistics.reception.rank.for.admin',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_RANK_FOR_ADMIN),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_RANK_FOR_ADMIN),
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_APPOINTMENT_RATE_RANK_FOR_ADMIN),
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_APPOINTMENT_UV_RANK_FOR_ADMIN),
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_UV_RANK_FOR_ADMIN),
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_SUMMARY_FOR_ADMIN),
            get_route_real_name(WebRoute::MANAGEMENT_IM_TEAM_OPTIONS),
        ],
    ],
    [
        'name'              => '全部互动客户-管理员导出接待排行',
        'group_alias'       => 'im_all_customer_list',
        'alias_name'        => 'im.customer.adviser_statistics.reception_rank.export.for.admin',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_RANK_EXPORT_FOR_ADMIN),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_RANK_EXPORT_FOR_ADMIN),
        ],
    ],
    [
        'name'              => '全部互动客户-接待排名-顾问分类明细',
        'group_alias'       => 'im_all_customer_list',
        'alias_name'        => 'im_manager.im.common_category.adviser_assign_record',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_COMMON_CATEGORY_ADVISER_ASSIGN_RECORD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_IM_COMMON_CATEGORY_ADVISER_ASSIGN_RECORD),

        ],
    ],
    //######################## 全部互动客户列表 end ########################


    // ###################### 顾问团队管理 start ######################

//    [
//        'name'              => '顾问团队管理-小组设置-小组列表',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.adviser_group_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_ADVISER_GROUP_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_ADVISER_GROUP_LIST),
//        ],
//    ],
//    [
//        'name'              => '顾问团队管理-小组设置-添加小组',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.add_adviser_group',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_ADD_ADVISER_GROUP),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_ADD_ADVISER_GROUP),
//        ],
//    ],
//    [
//        'name'              => '顾问团队管理-小组设置-解散小组',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.del_adviser_group',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_DEL_ADVISER_GROUP),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_DEL_ADVISER_GROUP),
//        ],
//    ],
//    [
//        'name'              => '顾问团队管理-小组设置-添加组员',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.add_adviser_to_group',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_ADD_ADVISER_TO_GROUP),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_ADD_ADVISER_TO_GROUP),
//        ],
//    ],
//    [
//        'name'              => '顾问团队管理-小组设置-小组组员列表(包含已经离组的顾问）',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.group_adviser_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_GROUP_ADVISER_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_GROUP_ADVISER_LIST),
//            get_route_real_name(WebRoute::MANAGEMENT_IM_GET_NOT_LEAVE_GROUP_ADVISERS),
//        ],
//    ],
//    [
//        'name'              => '顾问团队管理-小组设置-移除组员',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.del_group_adviser',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_DEL_GROUP_ADVISER),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_DEL_GROUP_ADVISER),
//        ],
//    ],
//    [
//        'name'              => '顾问团队管理-小组设置-更换组长',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.change_group_leader',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_CHANGE_GROUP_LEADER),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_CHANGE_GROUP_LEADER),
//        ],
//    ],
//    [
//        'name'              => '顾问团队管理-小组设置-顾问列表',
//        'group_alias'       => 'adviser_team_list',
//        'alias_name'        => 'adviser_team_list.sales_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_SALES_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_IM_SALES_LIST),
//        ],
//    ],

    // ###################### 顾问团队管理 end ######################

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

    // ###################### 保险公司列表 start ######################
    [
        'name'              => '保险公司列表',
        'group_alias'       => 'insurance_company',
        'alias_name'        => 'company.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增保险公司',
        'group_alias'       => 'insurance_company',
        'alias_name'        => 'company.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CREATE),
        ],
    ],
//    [
//        'name'              => '删除保险公司',
//        'group_alias'       => 'insurance_company',
//        'alias_name'        => 'company.delete',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DELETE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DELETE),
//        ],
//    ],
    [
        'name'              => '编辑保险公司',
        'group_alias'       => 'insurance_company',
        'alias_name'        => 'company.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_UPDATE),
        ],
    ],
    // ###################### 保险公司列表 end ######################

    // ###################### 合作公司列表 start ######################
    [
        'name'              => '合作公司列表',
        'group_alias'       => 'broker_company',
        'alias_name'        => 'company.get_broker_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_BROKER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_BROKER_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增合作公司',
        'group_alias'       => 'broker_company',
        'alias_name'        => 'company.create_broker',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CREATE_BROKER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CREATE_BROKER),
        ],
    ],
//    [
//        'name'              => '删除合作公司',
//        'group_alias'       => 'broker_company',
//        'alias_name'        => 'company.delete_broker',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DELETE_BROKER),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DELETE_BROKER),
//        ],
//    ],
    [
        'name'              => '编辑合作公司',
        'group_alias'       => 'broker_company',
        'alias_name'        => 'company.update_broker',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_UPDATE_BROKER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DETAIL_BROKER),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_UPDATE_BROKER),
        ],
    ],
    // ###################### 合作公司列表 end ######################

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
//    [
//        'name'              => '删除本部公司',
//        'group_alias'       => 'headquarters_company_list',
//        'alias_name'        => 'company.delete_headquarters',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DELETE_HEADQUARTERS),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DELETE_HEADQUARTERS),
//        ],
//    ],
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

    // ###################### 部门列表 start ######################
    [
        'name'              => '部门列表',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '部门成员',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.get_department_members',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_GET_DEPARTMENT_MEMBERS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_GET_DEPARTMENT_MEMBERS),
        ],
    ],
    [
        'name'              => '设置部门权限',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.crm_department_permission.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CRM_DEPARTMENT_PERMISSION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CRM_DEPARTMENT_PERMISSION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CRM_DEPARTMENT_PERMISSION_DETAIL),
        ],
    ],
    [
        'name'              => '设置APP部门权限',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.crm_app_department_permission.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CRM_APP_DEPARTMENT_PERMISSION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CRM_APP_DEPARTMENT_PERMISSION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_CRM_APP_DEPARTMENT_PERMISSION_DETAIL),
        ],
    ],
    [
        'name'              => '编辑部门',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_UPDATE),
        ],
    ],
    [
        'name'              => '新增部门',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_HEADQUARTERS_LIST),
        ],
    ],
    [
        'name'              => '新增成员',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.create_members',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_CREATE_MEMBERS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_CREATE_MEMBERS),
        ],
    ],
    [
        'name'              => '管理成员',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.members',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_REMOVE_MEMBERS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_REMOVE_MEMBERS),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_DETAIL),
        ],
    ],
    [
        'name'              => '部门解散',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.disband',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_DISBAND),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_DISBAND),
        ],
    ],
    [
        'name'              => '部门导出',
        'group_alias'       => 'headquarters_company_department_list',
        'alias_name'        => 'company.department.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_EXPORT),
        ],
    ],

    // ###################### 部门列表 end ######################



    // ###################### 供应商列表 start ######################
    [
        'name'              => '供应商列表',
        'group_alias'       => 'supplier_list',
        'alias_name'        => 'supplier.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增供应商',
        'group_alias'       => 'supplier_list',
        'alias_name'        => 'supplier.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_BROKER_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_HEADQUARTERS_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_DEPARTMENT_GET_LIST),
        ],
    ],
//    [
//        'name'              => '删除供应商',
//        'group_alias'       => 'supplier_list',
//        'alias_name'        => 'supplier.delete',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_DELETE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_DELETE),
//        ],
//    ],
    [
        'name'              => '编辑供应商',
        'group_alias'       => 'supplier_list',
        'alias_name'        => 'supplier.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_BROKER_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_HEADQUARTERS_LIST),
        ],
    ],
    [
        'name'              => '新增协议',
        'group_alias'       => 'supplier_list',
        'alias_name'        => 'supplier.agreement.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_CREATE),
        ],
    ],
    [
        'name'              => '协议详情列表',
        'group_alias'       => 'supplier_list',
        'alias_name'        => 'supplier.agreement.get_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_GET_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_DETAIL),
        ],
    ],
    [
        'name'              => '编辑协议',
        'group_alias'       => 'supplier_list',
        'alias_name'        => 'supplier.agreement.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_AGREEMENT_UPDATE),
        ],
    ],
    // ###################### 供应商列表 end ######################

    // ###################### 执业登记 start ######################
    [
        'name'              => '新增执业登记',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CREATE),
        ],
    ],
    [
        'name'              => '编辑执业登记',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE),
        ],
    ],
    [
        'name'              => '执业登记列表',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_USER_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_USER_RESET_RELATION),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_QUALITY),
        ],
    ],
    [
        'name'              => '执业登记列表-待创建-移除',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.not_need',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_USE_SALES_QUALIFICATION_NOT_NEED),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_USE_SALES_QUALIFICATION_NOT_NEED),
        ],
    ],
    [
        'name'              => '执业登记详情',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_DETAIL),
        ],
    ],
    [
        'name'              => '执业登记-解绑关联员工',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.cancel_qualifications_relation_user',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_CANCEL_QUALIFICATIONS_RELATION_USER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_CANCEL_QUALIFICATIONS_RELATION_USER),
        ],
    ],
    [
        'name'              => '注销执业登记',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.close',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CLOSE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CLOSE),
        ],
    ],
    [
        'name'              => '导出执业登记列表',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.qualification_export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_EXPORT),
        ],
    ],
    [
        'name'              => '上传执业登记',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPLOAD),
        ],
    ],
    [
        'name'              => '执业登记上传列表',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.upload_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_UPLOAD_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_UPLOAD_PAGE_LIST),
        ],
    ],
    [
        'name'              => '修改执业登记上传备注',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'qualification.update_upload_remark',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE_UPLOAD_REMARK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE_UPLOAD_REMARK),
        ],
    ],
    // ###################### 执业登记 end ######################


    // ###################### 产品管理 start ######################
    [
        'name'              => '产品列表(旧)',
        'group_alias'       => 'product_list',
        'alias_name'        => 'product.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新建产品(旧)',
        'group_alias'       => 'product_list',
        'alias_name'        => 'product.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_BROKER_LIST),
        ],
    ],
    [
        'name'              => '编辑产品(旧)',
        'group_alias'       => 'product_list',
        'alias_name'        => 'product.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_BROKER_LIST),
        ],
    ],
    [
        'name'              => '产品详情(旧)',
        'group_alias'       => 'product_list',
        'alias_name'        => 'product.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DETAIL),
        ],
    ],
    [
        'name'              => '产品分组列表(旧)',
        'group_alias'       => 'product_group_list',
        'alias_name'        => 'product.group.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GROUP_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GROUP_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新建产品分组(旧)',
        'group_alias'       => 'product_group_list',
        'alias_name'        => 'product.group.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GROUP_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GROUP_CREATE),
        ],
    ],
    [
        'name'              => '查看详情(旧)',
        'group_alias'       => 'product_group_list',
        'alias_name'        => 'product.group.detail.get_product_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            'management.product.group.detail.get_product_list',
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GET_LIST),
        ],
    ],
    [
        'name'              => '产品分组(旧)',
        'group_alias'       => 'product_group_list',
        'alias_name'        => 'product.batch_save_group',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_BATCH_SAVE_GROUP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_BATCH_SAVE_GROUP),
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_GET_LIST),
        ],
    ],
    [
        'name'              => '产品分组列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.group_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_PAGE_LIST_WITH_BRANCH),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_PAGE_LIST_WITH_BRANCH),
        ],
    ],
    [
        'name'              => '分组下分支产品列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.branch_product_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_BRANCH_PRODUCT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_BRANCH_PRODUCT_LIST),
        ],
    ],
    [
        'name'              => '导出分支产品列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.branch_product_list.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_BRANCH_PRODUCT_LIST_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_BRANCH_PRODUCT_LIST_EXPORT),
        ],
    ],
    [
        'name'              => '查看产品分组详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.group_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_BASE_INFO),
        ],
    ],
    [
        'name'              => '创建产品分组',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.create_group',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_CREATE),
        ],
    ],
    [
        'name'              => '编辑产品分组基本信息',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.update_group_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GROUP_UPDATE),
        ],
    ],
    [
        'name'              => '设置分支产品排序权重',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.set_product_sort',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SET_SORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SET_SORT),
        ],
    ],
    [
        'name'              => '查看分支产品基础信息',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.product_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_BASE_INFO),
        ],
    ],
    [
        'name'              => '新增分支产品',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.create_product',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_CREATE),
        ],
    ],
    [
        'name'              => '编辑分支产品基础信息',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.update_product_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_UPDATE),
        ],
    ],
    [
        'name'              => '查看分支产品绑定的码表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.product_bind_code_table',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GET_BIND_CODE_TABLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GET_BIND_CODE_TABLE),
        ],
    ],
    [
        'name'              => '分支产品创建险种分组',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_CREATE),
        ],
    ],
    [
        'name'              => '查看分支产品险种分组列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_LIST),
        ],
    ],
    [
        'name'              => '分支产品险种分组添加险种条件',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.add_condition',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_CONDITION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_CONDITION),
        ],
    ],
    [
        'name'              => '分支产品险种分组更新险种条件',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.update_condition',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_CONDITION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_CONDITION),
        ],
    ],
    [
        'name'              => '查看分支产品险种分组详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '获取投保条件列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.get_insure_condition_attribute_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_GET_INSURE_CONDITION_ATTRIBUTE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_GET_INSURE_CONDITION_ATTRIBUTE_LIST),
        ],
    ],
    [
        'name'              => '获取投保条件详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.get_insure_condition_attribute_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_GET_INSURE_CONDITION_ATTRIBUTE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_GET_INSURE_CONDITION_ATTRIBUTE_DETAIL),
        ],
    ],
    [
        'name'              => '更新投保条件',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.update_insure_condition_attribute',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURE_CONDITION_ATTRIBUTE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_GET_INSURE_CONDITION_ATTRIBUTE_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURE_CONDITION_ATTRIBUTE),
        ],
    ],
    [
        'name'              => '更新属性值状态',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.update_insure_condition_attribute_value_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURE_CONDITION_ATTRIBUTE_VALUE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURE_CONDITION_ATTRIBUTE_VALUE_STATUS),
        ],
    ],
    [
        'name'              => '保存险种费率设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.save_rate_setting',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_RATE_SETTING),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_RATE_SETTING),
        ]
    ],
    [
        'name'              => '数据联动-通过字段获取产品规则列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_data_linkage.get_setting_list_by_column_alias',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DATA_LINKAGE_GET_SETTING_LIST_BY_COLUMN_ALIAS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DATA_LINKAGE_GET_SETTING_LIST_BY_COLUMN_ALIAS),
        ],
    ],
    [
        'name'              => '数据联动-新增计算规则',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_data_linkage.create_calculate_rule',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DATA_LINKAGE_CREATE_CALCULATE_RULE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DATA_LINKAGE_CREATE_CALCULATE_RULE),
        ],
    ],
    [
        'name'              => '流程设置-查看',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insure_progress_setting.get_insure_progress_setting',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GET_INSURE_PROGRESS_SETTING),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_GET_INSURE_PROGRESS_SETTING),
        ],
    ],
    [
        'name'              => '流程设置-设置触发条件',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insure_progress_setting.set_product_insure_progress',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SET_INSURE_PROGRESS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SET_INSURE_PROGRESS),
        ],
    ],
    [
        'name'              => '常见问答-问答列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_display_setting.faq_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_FAQ_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_FAQ_LIST),
        ],
    ],
    [
        'name'              => '常见问答-新增问答',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_display_setting.create_faq',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_FAQ),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_FAQ),
        ],
    ],
    [
        'name'              => '常见问答-编辑问答',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_display_setting.update_faq',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FAQ),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FAQ),
        ],
    ],
    [
        'name'              => '常见问答-删除问答',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_display_setting.delete_faq',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_DELETE_FAQ),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_DELETE_FAQ),
        ],
    ],
    [
        'name'              => '产品复制-确认复制',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_replication.confirm',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_CHECK),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_CONFIRM),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_CONFIRM),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_CHECK),
        ],
    ],
    [
        'name'              => '产品复制-复制清单列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_replication.get_task_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_GET_TASK_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_GET_TASK_PAGE_LIST),
        ],
    ],
    [
        'name'              => '产品复制-复制清单详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_replication.get_task_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_GET_TASK_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_REPLICATION_GET_TASK_DETAIL),
        ],
    ],
    [
        'name'              => '产品计划-新建计划',
        'group_alias'       => 'pr_product_plan',
        'alias_name'        => 'pr_product.pr_product_plan.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_ADD),
        ],
    ],
    [
        'name'              => '产品计划-自动匹配开关',
        'group_alias'       => 'pr_product_plan',
        'alias_name'        => 'pr_product.pr_product.toggle_auto_bind_plan',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TOGGLE_AUTO_BIND_PLAN),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TOGGLE_AUTO_BIND_PLAN),
        ],
    ],
    [
        'name'              => '产品计划-计划列表',
        'group_alias'       => 'pr_product_plan',
        'alias_name'        => 'pr_product.pr_product_plan.get_plan_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_PLAN_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_PLAN_LIST),
        ],
    ],
    [
        'name'              => '产品计划-基础设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_BASE_INFO),
        ],
    ],
    [
        'name'              => '产品计划-基础设置-编辑',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_BASE_INFO),
        ],
    ],
    [
        'name'              => '产品计划-关联险种',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_bind_insurance_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_BIND_INSURANCE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_BIND_INSURANCE_LIST),
        ],
    ],
    [
        'name'              => '产品计划-关联险种-编辑',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.bind_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_BIND_INSURANCE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_BIND_INSURANCE),
        ],
    ],
    [
        'name'              => '产品计划-试算设置',
        'group_alias'       => 'pr_product_trial_page',
        'alias_name'        => 'pr_product.pr_product_plan.trial_page.get_condition_gene_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_GET_CONDITION_GENE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_GET_CONDITION_GENE_LIST),
        ],
    ],
    [
        'name'              => '产品计划-试算设置-同步',
        'group_alias'       => 'pr_product_trial_page',
        'alias_name'        => 'pr_product.pr_product_plan.update_trial_gene',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE),
        ],
    ],
    [
        'name'              => '产品计划-试算设置-设置试算因子默认值',
        'group_alias'       => 'pr_product_trial_page',
        'alias_name'        => 'pr_product.pr_product_plan.trial_page.update_gene',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE),
        ],
    ],
    [
        'name'              => '产品计划-试算设置-设置试算因子选项值',
        'group_alias'       => 'pr_product_trial_page',
        'alias_name'        => 'pr_product.pr_product_plan.trial_page.update_gene_values',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE_VALUES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE_VALUES),
        ],
    ],
    [
        'name'              => '产品计划-投保规则',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_trial_gene_restrict_scheme_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_SCHEME_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_SCHEME_LIST),
        ],
    ],
    [
        'name'              => '产品计划-投保规则-新增规则方案',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.create_trial_gene_restrict_scheme',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_SCHEME),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_SCHEME),
        ],
    ],
    [
        'name'              => '产品计划-投保规则-编辑详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_trial_gene_restrict_scheme_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_SCHEME_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_SCHEME_DETAIL),
        ],
    ],
    [
        'name'              => '产品计划-投保规则-编辑',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_trial_gene_restrict_scheme',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME),
        ],
    ],
    [
        'name'              => '产品计划-投保规则-禁用',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_trial_gene_restrict_scheme_enable_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME_ENABLE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME_ENABLE_STATUS),
        ],
    ],
    [
        'name'              => '产品计划-投保规则-管理规则-新增规则',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.create_trial_gene_restrict_group',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_GROUP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_GROUP),
        ],
    ],
    [
        'name'              => '产品计划-投保规则-管理规则-禁用',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_trial_gene_restrict_group_enable_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP_ENABLE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP_ENABLE_STATUS),
        ],
    ],
    [
        'name'              => '产品计划-投保规则-管理规则-编辑详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_trial_gene_restrict_group_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '投保规则-编辑规则分组',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_trial_gene_restrict_group',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP),
        ],
    ],
    [
        'name'              => '投保规则-获取产品计划的条件因子列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_product_plan_gene_restrict_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_PRODUCT_PLAN_GENE_RESTRICT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_PRODUCT_PLAN_GENE_RESTRICT_LIST),
        ],
    ],
    [
        'name'              => '投保规则-获取产品计划的联动因子列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_product_plan_gene_linkage_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_PRODUCT_PLAN_GENE_LINKAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_PRODUCT_PLAN_GENE_LINKAGE_LIST),
        ],
    ],
    [
        'name'              => '产品计划-同步数据',
        'group_alias'       => 'pr_product_sync_data',
        'alias_name'        => 'pr_product.pr_product_plan.get_sync_trial_record_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_SYNC_TRIAL_RECORD_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_SYNC_TRIAL_RECORD_LIST),
        ],
    ],
    [
        'name'              => '产品计划-同步数据-增量同步',
        'group_alias'       => 'pr_product_sync_data',
        'alias_name'        => 'pr_product.pr_product_plan.increment_trial_gene',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_INCREMENT_TRIAL_GENE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_INCREMENT_TRIAL_GENE),
        ],
    ],
    [
        'name'              => '产品计划-同步数据-全量同步',
        'group_alias'       => 'pr_product_sync_data',
        'alias_name'        => 'pr_product.pr_product_plan.sync_trial_gene',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_SYNC_TRIAL_GENE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_SYNC_TRIAL_GENE),
        ],
    ],
    [
        'name'              => '产品计划-同步数据-同步详情',
        'group_alias'       => 'pr_product_sync_data',
        'alias_name'        => 'pr_product.pr_product_plan.get_sync_trial_record_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_SYNC_TRIAL_RECORD_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_SYNC_TRIAL_RECORD_DETAIL),
        ],
    ],
    [
        'name'              => '产品计划-试算页面布局',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_trial.get_layout_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_GET_LAYOUT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_GET_LAYOUT_LIST),
        ],
    ],
    [
        'name'              => '产品计划-试算页面布局-新增布局',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_trial.create_layout',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_CREATE_LAYOUT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_CREATE_LAYOUT),
        ],
    ],
    [
        'name'              => '产品计划-试算页面布局-编辑布局',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_trial.update_layout',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_LAYOUT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_LAYOUT),
        ],
    ],
    [
        'name'              => '产品计划-试算页面布局-获取新增字段列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_trial.search_layout_gene_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_SEARCH_LAYOUT_GENE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_SEARCH_LAYOUT_GENE_LIST),
        ],
    ],
    [
        'name'              => '产品计划-试算页面布局-新增字段',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_trial.bind_layout_genes',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_BIND_LAYOUT_GENES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_BIND_LAYOUT_GENES),
        ],
    ],
    [
        'name'              => '试算页面布局-获取因子基本信息',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_trial.get_gene_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_GET_GENE_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_GET_GENE_BASE_INFO),
        ],
    ],
    [
        'name'              => '试算页面布局-更新因子基本信息',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_trial.update_gene_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_GENE_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_GENE_BASE_INFO),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_health_information_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_LIST),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-新增',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.create_health_information',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-编辑详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_health_information_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_BASE_INFO),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-编辑',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_health_information_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_BASE_INFO),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-删除',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.delete_health_information_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_BASE_INFO),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-问题设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_health_information_question_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_QUESTION_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_QUESTION_LIST),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-问题设置-新增',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.create_health_information_question',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION_QUESTION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION_QUESTION),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-问题设置-详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_health_information_question_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_QUESTION_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_QUESTION_DETAIL),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-问题设置-编辑',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_health_information_question',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_QUESTION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_QUESTION),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-问题设置-删除',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.delete_health_information_question',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_QUESTION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_QUESTION),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-结论设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.get_health_information_conclusion_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_CONCLUSION_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_CONCLUSION_LIST),
        ],
    ],
    [
        'name'              => '产品计划-健康告知设置-结论设置-编辑',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_plan.update_health_information_conclusion',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_CONCLUSION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_CONCLUSION),
        ],
    ],
    [
        'name'              => '产品计划-展示设置',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-banner列表',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.get_banner_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_LIST),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-banner-上传',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.create_banner',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_BANNER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_BANNER),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-banner详情',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.get_banner_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_INFO),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-banner-编辑',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.update_banner',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_BANNER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_BANNER),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-产品详情',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.get_feature',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_FEATURE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_FEATURE),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-产品详情-上传',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.update_feature',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FEATURE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FEATURE),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-投保须知-列表',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.get_instruction_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_INSTRUCTION_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_INSTRUCTION_LIST),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-投保须知-新增',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.create_instruction',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_INSTRUCTION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_INSTRUCTION),
        ],
    ],
    [
        'name'              => '产品计划-展示设置-投保须知-编辑',
        'group_alias'       => 'pr_product_display_setting',
        'alias_name'        => 'pr_product.pr_product_display_setting.update_instruction',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_INSTRUCTION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_INSTRUCTION),
        ],
    ],
    [
        'name'              => '关联设置-获取险种关联责任',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.insurance_relation_duty',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_RELATION_DUTY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_RELATION_DUTY),
        ],
    ],
    [
        'name'              => '险种责任-关联(险种，责任，保障项目)信息列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.relation_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_RELATION_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_RELATION_INFO),
        ],
    ],
    [
        'name'              => '险种责任-保存保障项目信息',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.save_guarantee_responsibility',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_GUARANTEE_RESPONSIBILITY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_GUARANTEE_RESPONSIBILITY),
        ],
    ],
    [
        'name'              => '险种责任-新增险种',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.add_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_INSURANCE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_INSURANCE),
        ],
    ],
    [
        'name'              => '险种责任-编辑险种',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.update_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURANCE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURANCE),
        ],
    ],
    [
        'name'              => '险种责任-新增责任',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.add_duty',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_DUTY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_DUTY),
        ],
    ],
    [
        'name'              => '险种责任-更新责任',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.update_duty',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_DUTY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_DUTY),
        ],
    ],
    [
        'name'              => '险种责任-责任详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.duty_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_DETAIL),
        ],
    ],
    [
        'name'              => '险种责任-获取险种关联责任详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.insurance_relation_duty_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_RELATION_DUTY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_RELATION_DUTY_DETAIL),
        ],
    ],
    [
        'name'              => '险种责任-新增险种与责任的关系',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.store_insurance_duty_relation',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_STORE_INSURANCE_DUTY_RELATION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_STORE_INSURANCE_DUTY_RELATION),
        ],
    ],
    [
        'name'              => '关联设置-获取责任关联保障项目',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.relation_duty',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_RELATION_DUTY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_RELATION_DUTY),
        ],
    ],
    [
        'name'              => '关联设置-查看关联保障明细',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.duty_relation_guarantee_responsibility',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_RELATION_GUARANTEE_RESPONSIBILITY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_RELATION_GUARANTEE_RESPONSIBILITY),
        ],
    ],
    [
        'name'              => '关联设置-编辑关联保障明细',//责任绑定保障项目
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.duty_bind_guarantee_responsibility',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_BIND_GUARANTEE_RESPONSIBILITY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_BIND_GUARANTEE_RESPONSIBILITY),
        ],
    ],
    [
        'name'              => '条款设置-列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.term_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_LIST),
        ],
    ],
    [
        'name'              => '条款设置-上传',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.add_term',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_TERM),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_TERM),
        ],
    ],
    [
        'name'              => '条款设置-上传条款图片',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.save_term_images',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_TERM_IMAGES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_TERM_IMAGES),
        ],
    ],
    [
        'name'              => '条款设置-条款图片详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.term_images_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_IMAGES_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_IMAGES_DETAIL),
        ],
    ],
    [
        'name'              => '条款设置-编辑',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.insurance_group.update_term',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_TERM),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_TERM),
        ],
    ],

    [
        'name'              => '产品计划-投保规则-管理规则',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_basic_condition.get_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_GET_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_GET_LIST),
        ],
    ],
    [
        'name'              => '获取产品基础条件详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_basic_condition.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_DETAIL),
        ],
    ],
    [
        'name'              => '添加产品基础条件',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_basic_condition.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_ADD),
        ],
    ],
    [
        'name'              => '删除产品基础条件',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_basic_condition.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_DELETE),
        ],
    ],
    [
        'name'              => '添加基础条件选项',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_basic_condition.add-options',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_ADD_OPTIONS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_ADD_OPTIONS),
        ],
    ],
    [
        'name'              => '更新产品基础属性',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_basic_condition.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_DETAIL),
        ],
    ],
    [
        'name'              => '更新属性值的启用状态',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_basic_condition.update_attribute_value_enable',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_UPDATE_ATTRIBUTE_VALUE_ENABLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_BASIC_CONDITION_UPDATE_ATTRIBUTE_VALUE_ENABLE),
        ],
    ],

    [
        'name'              => '新增产品字段元素、模块',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_field_element.store_insure_module',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_STORE_INSURE_MODULE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_STORE_INSURE_MODULE),
        ],
    ],
    [
        'name'              => '删除产品字段元素',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_field_element.delete_module_attribute',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_DELETE_MODULE_ATTRIBUTE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_DELETE_MODULE_ATTRIBUTE),
        ],
    ],
    [
        'name'              => '获取产品投保模块列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_field_element.get_insure_module',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_GET_INSURE_MODULE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_GET_INSURE_MODULE),
        ],
    ],
    [
        'name'              => '获取产品字段元素列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_field_element.get_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_GET_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_GET_LIST),
        ],
    ],
    [
        'name'              => '获取产品字段元素列表',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_field_element.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_DETAIL),
        ],
    ],
    [
        'name'              => '更新字段元素属性值的启用状态',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_field_element.update_attribute_value_enable',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_UPDATE_ATTRIBUTE_VALUE_ENABLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_UPDATE_ATTRIBUTE_VALUE_ENABLE),
        ],
    ],
    [
        'name'              => '更新产品模块字段详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_field_element.update_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_UPDATE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_UPDATE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_FIELD_ELEMENT_DETAIL),
        ],
    ],
    [
        'name'              => '获取产品设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_setting.get_setting_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SETTING_GET_SETTING_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SETTING_GET_SETTING_INFO),
        ],
    ],
    [
        'name'              => '保存产品设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.pr_product_setting.update_setting',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SETTING_UPDATE_SETTING),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SETTING_UPDATE_SETTING),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SETTING_GET_SETTING_INFO),
        ],
    ],

    [
        'name'              => '助销资料',
        'group_alias'       => 'pr_product_sales_information',
        'alias_name'        => 'pr_product.sales_information',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_CHANGE_LOG),
        ],
    ],
    [
        'name'              => '售前告知',
        'group_alias'       => 'pr_product_sales_information',
        'alias_name'        => 'pr_product.sales_information.product_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_PRODUCT_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_PRODUCT_BASE_INFO_SAVE),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_PRODUCT_BASE_INFO),
        ],
    ],
    [
        'name'              => '产品条款',
        'group_alias'       => 'pr_product_sales_information',
        'alias_name'        => 'pr_product.sales_information.common_terms_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COMMON_TERMS_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COMMON_TERMS_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COMMON_TERMS_SAVE),
        ],
    ],
    [
        'name'              => '产品海报',
        'group_alias'       => 'pr_product_sales_information',
        'alias_name'        => 'pr_product.sales_information.poster_get_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_GET_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_UPLOAD),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_DEL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_BATCH_UPLOAD),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_DETAIL),
        ],
    ],
    [
        'name'              => '产品资料',
        'group_alias'       => 'pr_product_sales_information',
        'alias_name'        => 'pr_product.sales_information.docs_get_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_DOCS_GET_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_DOCS_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_DOCS_SAVE),
        ],
    ],
    [
        'name'              => '复制到其他产品',
        'group_alias'       => 'pr_product_sales_information',
        'alias_name'        => 'pr_product.sales_information.copy-to-other-products',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COPY_TO_OTHER_PRODUCTS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COPY_TO_OTHER_PRODUCTS),
        ],
    ],
    [
        'name'              => '官网设置',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr_product.ws_product_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_PRODUCT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_PRODUCT_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_PRODUCT_SAVE),
        ],
    ],
    [
        'name'              => '新增关联产品',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr-product-related-info.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_RELATED_INFO_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_RELATED_INFO_CREATE),
        ],
    ],
    [
        'name'              => '获取关联详情',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr-product-related-info.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_RELATED_INFO_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_RELATED_INFO_DETAIL),
        ],
    ],
    [
        'name'              => '是否产品关联',
        'group_alias'       => 'pr_product_list',
        'alias_name'        => 'pr-product-related-info.is-enable-relate',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_RELATED_INFO_IS_ENABLE_RELATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_RELATED_INFO_IS_ENABLE_RELATE),
        ],
    ],

    // ###################### 产品管理 end ######################

    // ###################### 培训管理 start ######################
    [
        'name'              => '培训分类列表',
        'group_alias'       => 'training_course_category_list',
        'alias_name'        => 'company.training.course_category.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_CATEGORY_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_CATEGORY_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '导出课程分类列表',
        'group_alias'       => 'training_course_category_list',
        'alias_name'        => 'company.training.course_category.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_CATEGORY_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_CATEGORY_EXPORT),
        ],
    ],
    [
        'name'              => '课程列表',
        'group_alias'       => 'training_course_list',
        'alias_name'        => 'company.training.course.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '导出课程列表',
        'group_alias'       => 'training_course_list',
        'alias_name'        => 'company.training.course.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_COURSE_EXPORT),
        ],
    ],
    [
        'name'              => '培训记录',
        'group_alias'       => 'training_list',
        'alias_name'        => 'company.training.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '导出培训记录',
        'group_alias'       => 'training_list',
        'alias_name'        => 'company.training.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_EXPORT),
        ],
    ],
    [
        'name'              => '培训记录详情',
        'group_alias'       => 'training_list',
        'alias_name'        => 'company.training.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_DETAIL),
        ],
    ],
    [
        'name'              => '奖惩记录',
        'group_alias'       => 'training_disciplinary_list',
        'alias_name'        => 'company.training.disciplinary.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_DISCIPLINARY_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_DISCIPLINARY_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '导出奖惩记录',
        'group_alias'       => 'training_disciplinary_list',
        'alias_name'        => 'company.training.disciplinary.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_DISCIPLINARY_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_TRAINING_DISCIPLINARY_EXPORT),
        ],
    ],
    // ###################### 培训管理 end ######################

    // ###################### 订单管理 start ######################
    [
        'name'              => '订单列表',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SELECT_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_COMPANY_GET_LIST),
        ],
    ],
    [
        'name'              => '订单详情',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_DETAIL),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '下载电子保单',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.detail.download_policy_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_DETAIL_DOWNLOAD_POLICY_FILE),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '保险公司排行榜',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.supplier.statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_SUPPLIER_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_SUPPLIER_STATISTICS),
        ],
    ],
    [
        'name'              => '部门销售排行榜',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.department.statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_DEPARTMENT_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_DEPARTMENT_STATISTICS),
        ],
    ],
    [
        'name'              => '月度排行榜',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.month.statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_MONTH_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_MONTH_STATISTICS),
        ],
    ],
    [
        'name'              => '导出保险公司排行榜',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.supplier.statistics.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_SUPPLIER_STATISTICS_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_SUPPLIER_STATISTICS_EXPORT),
        ],
    ],
    [
        'name'              => '导出部门销售排行榜',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.department.statistics.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_DEPARTMENT_STATISTICS_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_DEPARTMENT_STATISTICS_EXPORT),
        ],
    ],
    [
        'name'              => '订单导出',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_EXPORT),
        ],
    ],
    [
        'name'              => '客户详情',
        'group_alias'       => 'order_list',
        'alias_name'        => 'order.get_customer_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_GET_CUSTOMER_DETAIL),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '订单列表',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_PAGE_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '导出订单列表',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.export_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPORT_PR_ORDER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_EXPORT_PR_ORDER_PAGE_LIST),
        ],
    ],
    [
        'name'              => '设置出单后台',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.set_sales_source',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_SET_SALES_SOURCE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_SET_SALES_SOURCE),
        ],
    ],
    [
        'name'              => '复制订单详情链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.get_detail_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_DETAIL_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_DETAIL_LINK),
        ],
    ],
    [
        'name'              => '复制回访链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.get_visit_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_VISIT_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_VISIT_LINK),
        ],
    ],
    [
        'name'              => '复制回执链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.get_receipt_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_RECEIPT_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_RECEIPT_LINK),
        ],
    ],
    [
        'name'              => '复制人核链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.get_manpower_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_MANPOWER_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_MANPOWER_LINK),
        ],
    ],
    [
        'name'              => '订单详情',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.order_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_DETAIL),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '订单详情-订单基本信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.order_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_BASE_INFO),
        ],
    ],
    [
        'name'              => '订单详情-保单基本信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_BASE_INFO),
        ],
    ],
    [
        'name'              => '订单详情-获取电子保单链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_file_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_FILE_LINK),
        ],
    ],
    [
        'name'              => '订单详情-人员信息（投保人，被保人，受益人）',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_person_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PERSON_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PERSON_INFO),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '匹配保单',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.match_policy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MATCH_POLICY),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '订单详情-退保记录',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_surrender_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_SURRENDER_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_SURRENDER_LOG),
        ],
    ],
    [
        'name'              => '订单详情-缴费计划',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_renewal_stage',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RENEWAL_STAGE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RENEWAL_STAGE),
        ],
    ],

    [
        'name'              => '订单详情-销售信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_sales',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_SALES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_SALES),
        ],
    ],
    [
        'name'              => '下载电子保单',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_base_info.download_policy_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_BASE_INFO_DOWNLOAD_POLICY_FILE),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '订单详情-客户信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.order_customer',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_CUSTOMER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_CUSTOMER),
        ],
    ],
    [
        'name'              => '订单详情-合规信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.order_compliance_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_COMPLIANCE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_COMPLIANCE_INFO),
        ],
    ],
    [
        'name'              => '订单详情-保单产品信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_product_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRODUCT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRODUCT_INFO),
        ],
    ],
    [
        'name'              => '订单详情-支付信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_payment_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PAYMENT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PAYMENT_INFO),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '订单详情-续期账号信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_renewal_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RENEWAL_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RENEWAL_INFO),
       ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '订单详情-回访信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_visit_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_VISIT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_VISIT_INFO),
        ],
    ],
    [
        'name'              => '订单详情-回执信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_receipt_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RECEIPT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RECEIPT_INFO),
        ],
    ],
    [
        'name'              => '订单详情-质检信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_qc_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_QC_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_QC_INFO),
        ],
    ],
    // ###################### 订单详情保全 start ######################
    [
        'name'              => '订单详情-保全信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_preservation_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_LOG),
        ],
    ],

    [
        'name'              => '订单详情-查看保全',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_preservation_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_DETAIL),
        ],
    ],

    [
        'name'              => '订单详情-查看保全-获取电子保单链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.pr_policy_preservation_detail_policy_file_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK),
        ],
    ],

    [
        'name'              => '订单详情-保单保全入口',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_preservation_entrance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY),
        ],
    ],

    [
        'name'              => '订单详情-保全事项-一次性加保',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_preservation_item_one_time_add_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_ONE_TIME_ADD_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],

    [
        'name'              => '订单详情-保全事项-一次性减保',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_preservation_item_one_time_reduce_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_ONE_TIME_REDUCE_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],

    [
        'name'              => '订单详情-保全事项-加保',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_preservation_item_add_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_ADD_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],

    [
        'name'              => '订单详情-保全事项-减保',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_preservation_item_reduce_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_REDUCE_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],

    [
        'name'              => '保单保全-获取电子保单链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.pr_policy_preservation_policy_file_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_POLICY_FILE_LINK),
        ],
    ],
    // ###################### 订单详情保全 end ######################

    // ###################### 保单保全审批 start ######################
    [
        'name'              => '保单保全审批-保全审批分页列表',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_apply_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '保单保全审批-审批',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_verify',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_VERIFY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_VERIFY),
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_DETAIL),
        ],
    ],
    [
        'name'              => '保单保全审批-审批详情-获取电子保单链接',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_verify_detail_policy_file_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_VERIFY_DETAIL_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_VERIFY_DETAIL_POLICY_FILE_LINK),
        ],
    ],
    [
        'name'              => '保单保全审批-保全详情',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_apply_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_DETAIL),
        ],
    ],
    [
        'name'              => '保单保全审批-保全详情-获取电子保单链接',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_apply_detail_policy_file_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_DETAIL_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_DETAIL_POLICY_FILE_LINK),
        ],
    ],

    [
        'name'              => '保单保全审批-个人申请记录分页列表',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_personal_apply_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_APPLY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_APPLY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '保单保全审批-查看个人保全详情',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_personal_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_DETAIL),
        ],
    ],
    [
        'name'              => '保单保全审批-个人保全详情-获取电子保单链接',
        'group_alias'       => 'pr_policy_preservation_verify',
        'alias_name'        => 'pr_policy_preservation_verify.pr_policy_preservation_personal_detail_policy_file_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_DETAIL_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_DETAIL_POLICY_FILE_LINK),
        ],
    ],
    // ###################### 保单保全审批 end ######################

    [
        'name'              => '保单标保数据',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_sfyp_result',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_SFYP_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_SFYP_INFO),
        ],
    ],

    [
        'name'              => '重算标保',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.single-create-clear-sfyp',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::CREATE_MULTIPLE_POLICY_CLEAR_SFYP_TASK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::CREATE_MULTIPLE_POLICY_CLEAR_SFYP_TASK),
        ],
    ],

    // ###################### 订单管理 end ######################

    // ###################### 订单详情-人核信息 start ######################
    [
        'name'              => '订单详情-人核信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.mw.detail_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_DETAIL_INFO),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '订单详情-人核基本信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.mw.base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_TRACK_LOG),
        ],
    ],
    [
        'name'              => '订单详情-健康问卷',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.mw.questionnaire',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_QUESTIONNAIRE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_QUESTIONNAIRE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_QUESTIONNAIRE_DETAIL),
        ],
    ],
    [
        'name'              => '订单详情-资料补充',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.mw.supplement_question',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_SUPPLEMENT_QUESTION_GROUP_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_SUPPLEMENT_QUESTION_GROUP_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_SUPPLEMENT_QUESTION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '订单详情-附件资料',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.mw.file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_FILE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_FILE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_FILE_LIST_DOWNLOAD_ZIP),
        ],
    ],
    [
        'name'              => '订单详情-核保结论',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.mw.conclusion',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_CONCLUSION_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_MW_CONCLUSION_INFO),
        ],
    ],
    // ###################### 订单详情-人核信息 end ######################

    // ###################### 保单修正 start ######################
    [
        'name'              => '申请保单修正',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_policy.modify.policy_category_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_MODIFY_POLICY_CATEGORY_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_MODIFY_POLICY_CATEGORY_LIST),
        ],
    ],
    [
        'name'              => '保单修正-获取电子保单链接',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_policy.modify.policy_file_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_MODIFY_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_MODIFY_POLICY_FILE_LINK),
        ],
    ],

    [
        'name'              => '修正事项-保额保费',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.premium_and_coverage',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_PREMIUM_AND_COVERAGE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-保单状态',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.policy_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_STATUS),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-续期银行',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.policy_renewal_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_RENEWAL_INFO),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-保单豁免',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.policy_exempt',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_EXEMPT),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-保障计划',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.proposal_plan',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_PROPOSAL_PLAN),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-回访信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.visit_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_VISIT_INFO),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-回执信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.receipt_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_RECEIPT_INFO),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-双录信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.double_record',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_DOUBLE_RECORD),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-被保人信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.insurant_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_INSURANT_INFO),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-投保人信息',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.applicant_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_APPLICANT_INFO),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-保单标签',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.insurance_tag',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_INSURANCE_TAG),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-补充险种',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.new_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_NEW_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-险种退保',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.surrender_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_SURRENDER_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-修改险种',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.edit_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_EDIT_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    /*[
        'name'              => '修正事项-续保信息',
        'group_alias'       => 'modify_policy_verify',
        'alias_name'        => 'modify_policy_verify.category.turn_to_renewal',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_TURN_TO_RENEWAL),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-续期信息',
        'group_alias'       => 'modify_policy_verify',
        'alias_name'        => 'modify_policy_verify.category.renewal_term',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_RENEWAL_TERM),
        ],
        'proxy_route_name'  => [
        ],
    ],*/
    [
        'name'              => '修正事项-电子保单',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.upload_policy_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_UPLOAD_POLICY_FILE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正事项-年金领取',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order_list.modify.annuity_claim',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_CATEGORY_ANNUITY_CLAIM),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '上传保单-上传excel',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_policy.upload_by_excel',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL),
        ],
    ],
    [
        'name'              => '上传保单-获取保单上传记录',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_policy.upload_by_excel.get_upload_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_LIST),
        ],
    ],
    [
        'name'              => '上传保单-获取保单上传错误原因记录',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_policy.upload_policy_by_excel.get_upload_error_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_ERROR_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_ERROR_LOG),
        ],
    ],
    [
        'name'              => '上传保单-导出保单上传错误原因',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_policy.upload_policy_by_excel.export_upload_error_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_EXPORT_UPLOAD_ERROR_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_EXPORT_UPLOAD_ERROR_LOG),
        ],
    ],
    [
        'name'              => '上传保单-下载文件',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_policy.upload_policy_by_excel.download_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_UPLOAD_POLICY_DOWNLOAD_FILE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '关联保单产品',
        'group_alias'       => 'pr_order_list',
        'alias_name'        => 'pr_order.policy_relate_product',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RELATE_PRODUCT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_GET_RELATE_PRODUCT_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_POLICY_RELATE_PRODUCT),
        ],
    ],
//    [
//        'name'              => '申请数据还原',
//        'group_alias'       => 'pr_order_list',
//        'alias_name'        => 'pr_policy.recovery.policy_category_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RECOVERY_POLICY_CATEGORY_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RECOVERY_POLICY_CATEGORY_LIST),
//        ],
//    ],

    [
        'name'              => '修正审批列表',
        'group_alias'       => 'modify_policy_verify',
        'alias_name'        => 'modify_policy_verify.apply_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '获取审批详情',
        'group_alias'       => 'modify_policy_verify',
        'alias_name'        => 'modify_policy_verify.verify_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_VERIFY_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_VERIFY_INFO),
        ],
    ],
    [
        'name'              => '查看申请详情',
        'group_alias'       => 'modify_policy_verify',
        'alias_name'        => 'modify_policy_verify.apply_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO),
        ],
    ],
    [
        'name'              => '个人申请列表',
        'group_alias'       => 'modify_policy_verify',
        'alias_name'        => 'modify_policy_verify.apply_page_list.personal',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST_PERSONAL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST_PERSONAL),
        ],
    ],
    [
        'name'              => '查看个人申请详情',
        'group_alias'       => 'modify_policy_verify',
        'alias_name'        => 'modify_policy_verify.apply_info.personal',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO_PERSONAL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO_PERSONAL),
        ],
    ],
    // ###################### 保单修正 end ######################

    // ###################### 批量保单修正 start ######################
    [
        'name'              => '申请批量修正',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.category_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_LIST),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '修正上传记录',
        'group_alias'       => 'multi_modify_apply_log',
        'alias_name'        => 'multi_modify_apply_log.multi_apply.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_APPLY_LOG_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_APPLY_LOG_PAGE_LIST),
        ],
    ],
    [
        'name'              => '查看错误原因',
        'group_alias'       => 'multi_modify_apply_log',
        'alias_name'        => 'multi_modify_apply_log.error_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_ERROR_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_ERROR_LIST),
        ],
    ],
    [
        'name'              => '导出错误列表',
        'group_alias'       => 'multi_modify_apply_log',
        'alias_name'        => 'multi_modify_apply_log.error_list.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_EXPORT_ERROR_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_EXPORT_ERROR_LIST),
        ],
    ],
    [
        'name'              => '批量修正-下载文件',
        'group_alias'       => 'multi_modify_apply_log',
        'alias_name'        => 'multi_modify_apply_log.download_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_DOWNLOAD_FILE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '批量审批-保额保费',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.multi_modify.premium_and_coverage',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_PREMIUM_AND_COVERAGE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '批量审批-保障计划',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.multi_modify.proposal_plan',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_PROPOSAL_PLAN),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '批量审批-回访信息',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.multi_modify.visit_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_VISIT_INFO),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '批量审批-回执信息',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.multi_modify.receipt_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_RECEIPT_INFO),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '批量审批-双录信息',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.multi_modify.double_record',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_DOUBLE_RECORD),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '批量审批-保单标签',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.multi_modify.insurance_tag',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_INSURANCE_TAG),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '批量审批-补充险种',
        'group_alias'       => 'multi_modify_policy',
        'alias_name'        => 'multi_modify_policy.multi_modify.new_insurance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_NEW_INSURANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    // ###################### 批量保单修正 end ######################

    // ###################### 人工核保 start ######################
    [
        'name'              => '人核单列表',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_PAGE_LIST),
        ],
    ],
    [
        'name'              => '人核单详情',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.get_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_ORDER_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_TRACK_LOG),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_QUESTIONNAIRE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_QUESTIONNAIRE_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENT_QUESTION_GROUP_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENT_QUESTION_GROUP_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_FILE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_FILE_LIST_DOWNLOAD_ZIP),
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_CONCLUSION_INFO),
        ],
    ],
    [
        'name'              => '复制人核链接',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.copy_mw_url',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_COPY_MW_URL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_COPY_MW_URL),
        ],
    ],
    [
        'name'              => '资料补充-添加',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.supplementary_record.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_CREATE)
        ],
    ],
    [
        'name'              => '资料补充-编辑',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.supplementary_record.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_UPDATE)
        ],
    ],
    [
        'name'              => '资料补充-删除',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.supplementary_record.del',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DEL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DEL)
        ],
    ],
    [
        'name'              => '资料补充-下载资料(全部)',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.supplementary_record.download_mw_file_zip_group',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DOWNLOAD_ZIP_GROUP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DOWNLOAD_ZIP_GROUP)
        ],
    ],
    [
        'name'              => '资料补充-下载资料(单个)',
        'group_alias'       => 'pr_mw_list',
        'alias_name'        => 'pr_mw_list.supplementary_record.download_mw_file_zip_group_one',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DOWNLOAD_ZIP_GROUP_ONE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DOWNLOAD_ZIP_GROUP_ONE)
        ],
    ],
    // ###################### 人工核保 end ######################

    // ###################### 客服管理 start ######################
    [
        'name'              => '续保续期列表(旧)',
        'group_alias'       => 'renewal_stage_list',
        'alias_name'        => 'renewal_stage.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_RENEWAL_STAGE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_POLICY_RENEWAL_STAGE_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_SUPPLIER_GET_LIST),
        ],
    ],
    [
        'name'              => '续保续期入口',
        'group_alias'       => 'pr_renewal_stage_list',
        'alias_name'        => 'pr_renewal_stage_list.entrance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_ENTRANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '续保续期列表',
        'group_alias'       => 'pr_renewal_stage_list',
        'alias_name'        => 'pr_renewal_stage_list.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '续保续期导出',
        'group_alias'       => 'pr_renewal_stage_list',
        'alias_name'        => 'pr_renewal_stage_list.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_EXPORT),
        ],
    ],
    [
        'name'              => '续保续期详情',
        'group_alias'       => 'pr_renewal_stage_list',
        'alias_name'        => 'pr_renewal_stage_list.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_DETAIL),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '续保续期下载电子保单',
        'group_alias'       => 'pr_renewal_stage_list',
        'alias_name'        => 'pr_renewal_stage_list.policy_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_GET_POLICY_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_GET_POLICY_FILE),
        ],
    ],
    [
        'name'              => '续保续期信息更新',
        'group_alias'       => 'pr_renewal_stage_list',
        'alias_name'        => 'pr_renewal_stage_list.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_RENEWAL_UPDATE),
        ],
    ],

    // ###################### 客服管理 end ######################

    // ###################### 业务表 start ######################
    [
        'name'              => '业务表列表',
        'group_alias'       => 'business_statement_list',
        'alias_name'        => 'business_statement.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_PAGE_LIST),
        ],
    ],
    [
        'name'              => '生成业务报表',
        'group_alias'       => 'business_statement_list',
        'alias_name'        => 'business_statement.generate_report',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_GENERATE_REPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_GENERATE_REPORT),
        ],
    ],
    [
        'name'              => '生成业务报表',
        'group_alias'       => 'business_statement_list',
        'alias_name'        => 'business_statement.download_report',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_DOWNLOAD_REPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_DOWNLOAD_REPORT),
        ],
    ],
    // ###################### 业务表 end ######################

    // ###################### 监管报表管理 start ######################
    [
        'name'              => '监管报表列表',
        'group_alias'       => 'regulatory_statement_list',
        'alias_name'        => 'regulatory_statement.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增监管报表',
        'group_alias'       => 'regulatory_statement_list',
        'alias_name'        => 'regulatory_statement.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_CREATE),
        ],
    ],
    // ###################### 监管报表管理 end ######################

    // ###################### 对账结算管理 start ######################
    [
        'name'              => '人力薪酬列表',
        'group_alias'       => 'finance_crm_salary',
        'alias_name'        => 'finance_crm_salary.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_PAGE_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '导出人力薪酬列表',
        'group_alias'       => 'finance_crm_salary',
        'alias_name'        => 'finance_crm_salary.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_EXPORT),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '上传薪酬文件',
        'group_alias'       => 'finance_crm_salary',
        'alias_name'        => 'finance_crm_salary.upload_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_UPLOAD_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_UPLOAD_FILE),
        ],
    ],
    [
        'name'              => '薪酬文件上传记录列表',
        'group_alias'       => 'finance_crm_salary',
        'alias_name'        => 'finance_crm_salary.file.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_FILE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_FILE_PAGE_LIST),
        ],
    ],
    [
        'name'              => '备注薪酬文件上传记录',
        'group_alias'       => 'finance_crm_salary',
        'alias_name'        => 'finance_crm_salary.remark_uploaded_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_REMARK_UPLOADED_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_REMARK_UPLOADED_FILE),
        ],
    ],
    [
        'name'              => '人力薪酬解密',
        'group_alias'       => 'finance_crm_salary',
        'alias_name'        => 'finance_crm_salary.send_decrypt_sms',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_DECRYPT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_SEND_DECRYPT_SMS),
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_DECRYPT),
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_CRM_SALARY_ROUND_IMG_CODE),
        ],
    ],
    // ###################### 对账结算管理 end ######################

    // ###################### 对账数据管理 start ######################
    [
        'name'              => '上传对账数据',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_UPLOAD),
        ],
    ],
    [
        'name'              => '对账数据列表',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_PAGE_LIST),
        ],
    ],
    [
        'name'              => '对账数据错误详情',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.err.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_ERR_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_ERR_PAGE_LIST),
        ],
    ],
    [
        'name'              => '导出对账数据错误详情',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.err.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_ERR_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_FILE_ERR_EXPORT),
        ],
    ],
    [
        'name'              => '未对账清单',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.unreconciled.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_UNRECONCILED_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_UNRECONCILED_PAGE_LIST),
        ],
    ],
    [
        'name'              => '导出未对账清单',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.unreconciled.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_UNRECONCILED_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_UNRECONCILED_EXPORT),
        ],
    ],
    [
        'name'              => '导出结算清单',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.reconciled.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_EXPORT),
        ],
    ],
    [
        'name'              => '未对账清单详情',
        'group_alias'       => 'finance_file_data',
        'alias_name'        => 'finance_file.unreconciled.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_UNRECONCILED_DETAIL),
        ],
        'proxy_route_name'  => [],
    ],

    [
        'name'              => '归档订单列表',
        'group_alias'       => 'rec_policy',
        'alias_name'        => 'rec_policy.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_PAGE_LIST),
        ],
    ],

    [
        'name'              => '上传归档文件',
        'group_alias'       => 'rec_policy',
        'alias_name'        => 'rec_policy.upload_rec_policy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_UPLOAD_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_UPLOAD_FILE),
        ],
    ],

    [
        'name'              => '导出归档订单',
        'group_alias'       => 'rec_policy',
        'alias_name'        => 'rec_policy.export_rec_policy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_EXPORT_REC_POLICY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_EXPORT_REC_POLICY),
        ],
    ],

    [
        'name'              => '导入详情',
        'group_alias'       => 'rec_policy',
        'alias_name'        => 'rec_policy.file_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_FILE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_FILE_LIST),
        ],
    ],

    [
        'name'              => '下载订单',
        'group_alias'       => 'rec_policy',
        'alias_name'        => 'rec_policy.download_file_rec_policy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_FILE_REC_POLICY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_FILE_REC_POLICY),
        ],
    ],

    [
        'name'              => '错误详情',
        'group_alias'       => 'rec_policy',
        'alias_name'        => 'rec_policy.fail_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_FAIL_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_FAIL_LOG),
        ],
    ],

    [
        'name'              => '导出错误详情',
        'group_alias'       => 'rec_policy',
        'alias_name'        => 'rec_policy.export_fail_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_EXPORT_FAIL_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_REC_POLICY_EXPORT_FAIL_LOG),
        ],
    ],

    // ###################### 对账数据管理 end ######################

    // ###################### 云服账单导入 start ####################
    [
        'name'              => '云服账单-入口',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.entrance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_ENTRANCE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_ENTRANCE),
        ],
    ],
    [
        'name'              => '上传云服账单文件',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_UPLOAD),
        ],
    ],
    [
        'name'              => '云服账单文件待发起列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.wait_initiated_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_WAIT_INITIATED_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_PAGE_LIST),
        ],
    ],
    [
        'name'              => '云服账单文件已发起列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.initiated_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_INITIATED_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_PAGE_LIST),
        ],
    ],
    [
        'name'              => '删除云服账单文件',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.delete_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_DELETE_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_DELETE_FILE),
        ],
    ],
    [
        'name'              => '获取文件上传对比错误日志',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_error_reason',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ERROR_REASON),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ERROR_REASON),
        ],
    ],
    [
        'name'              => '提交确认发起',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.confirm_bill_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_CONFIRM_BILL_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_CONFIRM_BILL_FILE),
        ],
    ],
    [
        'name'              => '获取待发起文件详情',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.wait_initiated_file_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_WAIT_INITIATED_FILE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_FILE_DETAIL),
        ],
    ],
    [
        'name'              => '获取已发起文件详情',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.initiated_file_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_INITIATED_FILE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_FILE_DETAIL),
        ],
    ],
    [
        'name'              => '获取账单文件上传对比归档解析失败记录',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_dossier_error_reason',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_DOSSIER_ERROR_REASON),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_DOSSIER_ERROR_REASON),
        ],
    ],
    [
        'name'              => '归档错误记录的处理',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.handle_dossier_fail_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_HANDLE_DOSSIER_FAIL_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_HANDLE_DOSSIER_FAIL_STATUS),
        ],
    ],
    [
        'name'              => '处理中列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_confirm_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_CONFIRM_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_CONFIRM_PAGE_LIST),
        ],
    ],
    [
        'name'              => '处理中详情明细',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_confirm_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_CONFIRM_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_CONFIRM_DETAIL),
        ],
    ],
    [
        'name'              => '获取公司账单明细',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_company_policy_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_COMPANY_POLICY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_COMPANY_POLICY_DETAIL),
        ],
    ],
    [
        'name'              => '财务审核批次',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.audit_batch',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_AUDIT_BATCH),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_AUDIT_BATCH),
        ],
    ],
    [
        'name'              => '已处理列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_archive_record_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_RECORD_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_RECORD_PAGE_LIST),
        ],
    ],
    [
        'name'              => '归档详情',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_archive_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_DETAIL),
        ],
    ],
    [
        'name'              => '获取归档公司账单明细',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_archive_record_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_RECORD_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_RECORD_DETAIL),
        ],
    ],
    [
        'name'              => '已处理驳回文件',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.rejected_file_processed',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_REJECTED_FILE_PROCESSED),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_REJECTED_FILE_PROCESSED),
        ],
    ],

    [
        'name'              => '云服账单导入-账单汇总数据',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.export_policy_bill_company',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_COMPANY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_COMPANY),
        ],
    ],

    [
        'name'              => '云服账单导入-已处理-账单保单明细导出',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.export_policy_bill_record',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_RECORD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_RECORD),
        ],
    ],

    [
        'name'              => '云服账单导入-处理中-账单保单明细导出',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.export_policy_bill_record_handle',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_RECORD_HANDLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_RECORD_HANDLE),
        ],
    ],


    [
        'name'              => '云服账单导入-解析失败记录',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.export_bill_file_fail_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_BILL_FILE_FAIL_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_BILL_FILE_FAIL_LOG),
        ],
    ],

    [
        'name'              => '云服账单导入-异常数据列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_bill_exception_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_BILL_EXCEPTION_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_BILL_EXCEPTION_LIST),
        ],
    ],

    [
        'name'              => '云服账单导入-异常数据列表处理状态更新',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.processed_exception_handle_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_PROCESSED_EXCEPTION_HANDLE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_PROCESSED_EXCEPTION_HANDLE_STATUS),
        ],
    ],

    [
        'name'              => '云服账单导入-归档账单明细分页列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.get_bill_archive_record_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_BILL_ARCHIVE_RECORD_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_GET_BILL_ARCHIVE_RECORD_PAGE_LIST),
        ],
    ],

    [
        'name'              => '云服账单导入-导出归档账单明细分页列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.export_bill_policy_bill_record_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_BILL_POLICY_BILL_RECORD_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_DATA_EXPORT_BILL_POLICY_BILL_RECORD_PAGE_LIST),
        ],
    ],

    // ###################### 云服账单导入 end ######################

    // ###################### 云服账单导入-公司维度 start ####################
    [
        'name'              => '公司维度-上传云服账单文件',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_UPLOAD),
        ],
    ],
    [
        'name'              => '公司维度-云服账单文件待发起列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_wait_initiated_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_WAIT_INITIATED_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_PAGE_LIST),
        ],
    ],
    [
        'name'              => '公司维度-云服账单文件已发起列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_initiated_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_INITIATED_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_PAGE_LIST),
        ],
    ],
    [
        'name'              => '公司维度-删除云服账单文件',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_delete_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_DELETE_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_DELETE_FILE),
        ],
    ],
    [
        'name'              => '公司维度-获取文件上传对比错误日志',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_get_error_reason',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_ERROR_REASON),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_ERROR_REASON),
        ],
    ],
    [
        'name'              => '公司维度-提交确认发起',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_confirm_bill_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_CONFIRM_BILL_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_CONFIRM_BILL_FILE),
        ],
    ],
    [
        'name'              => '公司维度-获取待发起文件详情',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_wait_initiated_file_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_WAIT_INITIATED_FILE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_FILE_DETAIL),
        ],
    ],
    [
        'name'              => '公司维度-获取已发起文件详情',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_initiated_file_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_INITIATED_FILE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_FILE_DETAIL),
        ],
    ],
    [
        'name'              => '公司维度-获取账单文件上传对比归档解析失败记录',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_get_dossier_error_reason',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_DOSSIER_ERROR_REASON),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_DOSSIER_ERROR_REASON),
        ],
    ],
    [
        'name'              => '公司维度-归档错误记录的处理',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_handle_dossier_fail_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_HANDLE_DOSSIER_FAIL_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_HANDLE_DOSSIER_FAIL_STATUS),
        ],
    ],
    [
        'name'              => '公司维度-处理中列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_get_confirm_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_CONFIRM_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_CONFIRM_PAGE_LIST),
        ],
    ],
    [
        'name'              => '公司维度-获取公司账单明细',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_get_company_policy_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_COMPANY_POLICY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_COMPANY_POLICY_DETAIL),
        ],
    ],
    [
        'name'              => '公司维度-财务审核批次',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_audit_batch',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_AUDIT_BATCH),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_AUDIT_BATCH),
        ],
    ],
    [
        'name'              => '公司维度-已处理列表',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_get_archive_record_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_ARCHIVE_RECORD_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_ARCHIVE_RECORD_PAGE_LIST),
        ],
    ],
    [
        'name'              => '公司维度-获取归档公司账单明细',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_get_archive_record_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_ARCHIVE_RECORD_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_GET_ARCHIVE_RECORD_DETAIL),
        ],
    ],
    [
        'name'              => '公司维度-已处理驳回文件',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_rejected_file_processed',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_REJECTED_FILE_PROCESSED),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_REJECTED_FILE_PROCESSED),
        ],
    ],

    [
        'name'              => '公司维度-账单汇总数据',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_export_policy_bill_company',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_COMPANY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_COMPANY),
        ],
    ],

    [
        'name'              => '公司维度-已处理-账单保单明细导出',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_export_policy_bill_record',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_RECORD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_RECORD),
        ],
    ],

    [
        'name'              => '公司维度-处理中-账单保单明细导出',
        'group_alias'       => 'cfyf_bill_data',
        'alias_name'        => 'cfyf_bill_data.co_export_policy_bill_record_handle',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_RECORD_HANDLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_RECORD_HANDLE),
        ],
    ],

    // ###################### 云服账单导入-公司维度 end ######################

    // ###################### 结算管理 start ######################
    [
        'name'              => '结算批次管理',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle_batch.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_PAGE_LIST),
        ],
    ],
    [
        'name'              => '导出结算批次列表',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle_batch.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_EXPORT),
        ],
    ],
    [
        'name'              => '结算清单',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle_batch.reconciled.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_PAGE_LIST),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '查看批次详情',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle_batch.',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_DETAIL),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '录入发票信息',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle_batch.record.invoice',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_RECORD_INVOICE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_RECORD_INVOICE),
        ],
    ],
    [
        'name'              => '录入结算信息',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle_batch.record.settle',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_RECORD_SETTLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_RECORD_SETTLE),
        ],
    ],
    [
        'name'              => '解散批次',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle_batch.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_DELETE),
        ],
    ],
    [
        'name'              => '结算清单列表',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle.reconciled.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新建结算批次',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle.batch.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_FOR_BATCH_PAGE_LIST),
        ],
    ],
    [
        'name'              => '移入结算批次',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle.batch.add.data',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_ADD_DATA),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_ADD_DATA),
        ],
    ],
    [
        'name'              => '移除出结算批次',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle.batch.del.data',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_DEL_DATA),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_BATCH_DEL_DATA),
        ],
    ],
    [
        'name'              => '结算清单详情',
        'group_alias'       => 'settle_data',
        'alias_name'        => 'settle.reconciled.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_FINANCE_RECONCILED_FOR_POLICY_PAGE_LIST),
        ],
    ],
    // ###################### 结算管理 end ######################

    // ###################### 非现场保监报表 start ######################
    [
        'name'              => '保监报表任务分页列表',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.task.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增保监报表任务',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.task.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_CREATE),
        ],
    ],
    [
        'name'              => '编辑保监报表任务',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.task.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_UPDATE),
        ],
    ],
    [
        'name'              => '确认保监报表任务',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.task.confirm',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_CONFIRM),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_CONFIRM),
        ],
    ],
    [
        'name'              => '批量下载保监报表',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.task.download_zip',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_DOWNLOAD_ZIP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_TASK_DOWNLOAD_ZIP),
        ],
    ],
    [
        'name'              => '保监报表任务详情',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.file.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_PAGE_LIST),
        ],
    ],
    [
        'name'              => '上传保监报表文件',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.file.upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_UPLOAD),
        ],
    ],
    [
        'name'              => '下载保监报表文件',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.file.download',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_DOWNLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_DOWNLOAD),
        ],
    ],
    [
        'name'              => '生成保监报表文件',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.file.generate',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_GENERATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_GENERATE),
        ],
    ],
    [
        'name'              => '确认保监报表文件',
        'group_alias'       => 'irs_management',
        'alias_name'        => 'irs.file.confirm',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_CONFIRM),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_DATA_REPORT_IRS_FILE_CONFIRM),
        ],
    ],
    // ###################### 非现场保监报表 end ######################

    // ###################### 直播数据统计 start ######################
    [
        'name'              => '直播数据统计',
        'group_alias'       => 'live_list',
        'alias_name'        => 'live.get-page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_LIVE_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_LIVE_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '直播课程列表',
        'group_alias'       => 'live_list',
        'alias_name'        => 'live.course-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_LIVE_COURSE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_LIVE_COURSE_LIST),
        ],
    ],
    [
        'name'              => '用户评论列表',
        'group_alias'       => 'live_list',
        'alias_name'        => 'live.comment-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_LIVE_COMMENT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_LIVE_COMMENT_LIST),
        ],
    ],
    // ###################### 直播数据统计 end ######################

    // ###################### 财产险订单管理 start ######################
    [
        'name'              => '车险订单分页列表',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增车险保单',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_CREATE),
        ],
    ],
    [
        'name'              => '编辑车险保单',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPDATE),
        ],
    ],
    [
        'name'              => '车险保单详情',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_DETAIL),
        ],
    ],
    [
        'name'              => '作废车险保单',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_STATUS),
        ],
    ],
    [
        'name'              => '导出车险保单',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_EXPORT),
        ],
    ],
    [
        'name'              => '上传车险保单',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPLOAD),
        ],
    ],
    [
        'name'              => '车险保单导入列表',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.upload_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPLOAD_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPLOAD_LIST),
        ],
    ],
    [
        'name'              => '车险保单导入详情',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.upload_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPLOAD_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_UPLOAD_DETAIL),
        ],
    ],
    [
        'name'              => '查看车险手续费',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.check_service_charge',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_CHECK_SERVICE_CHARGE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_CHECK_SERVICE_CHARGE),
        ],
    ],
    [
        'name'              => '查看车险手续费比例',
        'group_alias'       => 'property_car_insurance',
        'alias_name'        => 'property_car_insurance.check_service_charge_ratio',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_CHECK_SERVICE_CHARGE_RATIO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_CAR_CHECK_SERVICE_CHARGE_RATIO),
        ],
    ],
    [
        'name'              => '船舶险订单分页列表',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增船舶险保单',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_CREATE),
        ],
    ],
    [
        'name'              => '编辑船舶险保单',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPDATE),
        ],
    ],
    [
        'name'              => '船舶险保单详情',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_DETAIL),
        ],
    ],
    [
        'name'              => '作废船舶险保单',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_STATUS),
        ],
    ],
    [
        'name'              => '导出船舶险保单',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_EXPORT),
        ],
    ],
    [
        'name'              => '上传船舶险保单',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPLOAD),
        ],
    ],
    [
        'name'              => '船舶险保单导入列表',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.upload_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPLOAD_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPLOAD_LIST),
        ],
    ],
    [
        'name'              => '船舶险保单导入详情',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.upload_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPLOAD_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_UPLOAD_DETAIL),
        ],
    ],
    [
        'name'              => '查看船舶险手续费',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.check_service_charge',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_CHECK_SERVICE_CHARGE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_CHECK_SERVICE_CHARGE),
        ],
    ],
    [
        'name'              => '查看船舶险手续费比例',
        'group_alias'       => 'property_ship_insurance',
        'alias_name'        => 'property_ship_insurance.check_service_charge_ratio',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_CHECK_SERVICE_CHARGE_RATIO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPERTY_SHIP_CHECK_SERVICE_CHARGE_RATIO),
        ],
    ],
    // ###################### 财产险订单管理 end ######################

    // ###################### 艾客数据 start ######################
    [
        'name'              => '通话录音',
        'group_alias'       => 'aike_callrecord_list',
        'alias_name'        => 'aike.get-aiagain-callrecord-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_AIAGAIN_CALLRECORD_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_AIAGAIN_CALLRECORD_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '添加通话录音备注',
        'group_alias'       => 'aike_callrecord_list',
        'alias_name'        => 'aike.add-record-remark',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_ADD_RECORD_REMARK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_ADD_RECORD_REMARK),
        ],
    ],
    [
        'name'              => '编辑通话录音备注',
        'group_alias'       => 'aike_callrecord_list',
        'alias_name'        => 'aike.edit-record-remark',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_EDIT_RECORD_REMARK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_EDIT_RECORD_REMARK),
        ],
    ],
    [
        'name'              => '导出通话录音',
        'group_alias'       => 'aike_callrecord_list',
        'alias_name'        => 'aike.export-callrecord-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_EXPORT_CALLRECORD_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_EXPORT_CALLRECORD_LIST),
        ],
    ],
    [
        'name'              => '客户手机清单',
        'group_alias'       => 'aike_callrecord_mobile_list',
        'alias_name'        => 'aike.get-callrecord-mobile-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_CALLRECORD_MOBILE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_CALLRECORD_MOBILE_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '客户手机清单-关联客户',
        'group_alias'       => 'aike_callrecord_mobile_list',
        'alias_name'        => 'aike.bind-mobile-crm-customer',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_BIND_MOBILE_CRM_CUSTOMER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_BIND_MOBILE_CRM_CUSTOMER),
        ],
    ],
    [
        'name'              => '数据统计',
        'group_alias'       => 'aike_chat_statistics',
        'alias_name'        => 'aike.get-chat-statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_CHAT_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_CHAT_STATISTICS),
        ],
    ],
    [
        'name'              => '群聊记录',
        'group_alias'       => 'aike_wechat_group_list',
        'alias_name'        => 'aike.get-wechat-group-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_WECHAT_GROUP_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_WECHAT_GROUP_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '通用-获取微信群会话列表',
        'group_alias'       => 'aike_wechat_group_list',
        'alias_name'        => 'aike.get-normal-wechat-group-dialog-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_WECHAT_GROUP_DIALOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_WECHAT_GROUP_DIALOG_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_WECHAT_GROUP_MEMBER_LIST),
        ],
    ],
    [
        'name'              => '通用-微信群聊天列表',
        'group_alias'       => 'aike_wechat_group_list',
        'alias_name'        => 'aike.get-normal-group-chat-message-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_GROUP_CHAT_MESSAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_GROUP_CHAT_MESSAGE_LIST),
        ],
    ],
    [
        'name'              => '聊天搜索列表',
        'group_alias'       => 'aike_chat_message_search_list',
        'alias_name'        => 'aike.get-chat-message-search-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_CHAT_MESSAGE_SEARCH_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_CHAT_MESSAGE_SEARCH_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '通用-获取会话列表',
        'group_alias'       => 'aike_chat_message_search_list',
        'alias_name'        => 'aike.get-normal-dialog-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_DIALOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_DIALOG_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '通用-微信聊天列表',
        'group_alias'       => 'aike_chat_message_search_list',
        'alias_name'        => 'aike.get-normal-chat-message-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_CHAT_MESSAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_CHAT_MESSAGE_LIST),
        ],
    ],
    [
        'name'              => '通用-单聊-关联销售记录',
        'group_alias'       => 'aike_chat_message_search_list',
        'alias_name'        => 'aike.get-normal-chat-sales-bind-log-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_CHAT_SALES_BIND_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_CHAT_SALES_BIND_LOG_LIST),
        ],
    ],
    [
        'name'              => '通用-群聊-关联销售记录',
        'group_alias'       => 'aike_chat_message_search_list',
        'alias_name'        => 'aike.get-normal-chat-group-sales-bind-log-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_CHAT_GROUP_SALES_BIND_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_NORMAL_GET_CHAT_GROUP_SALES_BIND_LOG_LIST),
        ],
    ],
    [
        'name'              => '客户微信列表',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-wechat-friend-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_WECHAT_FRIEND_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_WECHAT_FRIEND_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '关联crm客户',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.bind-crm-customer',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_BIND_CRM_CUSTOMER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_BIND_CRM_CUSTOMER),
        ],
    ],
    [
        'name'              => '关联crm客户详情',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-bind-crm-customer-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_BIND_CRM_CUSTOMER_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_BIND_CRM_CUSTOMER_LOG_LIST),
        ],
    ],
    [
        'name'              => '客户添加销售微信记录',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-friend-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_FRIEND_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_FRIEND_LIST),
        ],
    ],
    [
        'name'              => '客户-获取会话列表',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-customer-dialog-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_DIALOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_DIALOG_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '客户-获取微信群会话列表',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-customer-wechat-group-dialog-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_WECHAT_GROUP_DIALOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_WECHAT_GROUP_DIALOG_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_WECHAT_GROUP_MEMBER_LIST),
        ],
    ],
    [
        'name'              => '客户-微信好友聊天列表',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-customer-chat-message-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_MESSAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_MESSAGE_LIST),
        ],
    ],
    [
        'name'              => '客户-微信群聊天列表',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-customer-group-chat-message-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_GROUP_CHAT_MESSAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_GROUP_CHAT_MESSAGE_LIST),
        ],
    ],
    [
        'name'              => '客户-单聊-关联销售记录',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-customer-chat-sales-bind-log-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_SALES_BIND_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_SALES_BIND_LOG_LIST),
        ],
    ],
    [
        'name'              => '客户-群聊-关联销售记录',
        'group_alias'       => 'aike_wechat_friend_list',
        'alias_name'        => 'aike.get-customer-chat-group-sales-bind-log-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_GROUP_SALES_BIND_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_GROUP_SALES_BIND_LOG_LIST),
        ],
    ],
    [
        'name'              => '销售微信列表',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-sales-wechat-page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_SALES_WECHAT_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_SALES_WECHAT_PAGE_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '关联crm销售',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.bind-crm-sales',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_BIND_CRM_SALES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_BIND_CRM_SALES_GET_BIND_CRM_SALES_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_BIND_CRM_SALES),
        ],
    ],
    [
        'name'              => '销售-关联crm销售记录',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-bind-crm-sales-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CRM_SALES_BIND_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CRM_SALES_BIND_LOG_LIST),
        ],
    ],
    [
        'name'              => '销售-获取会话列表',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-sales-dialog-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_DIALOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_DIALOG_LIST),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '销售-获取微信群会话列表',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-sales-wechat-group-dialog-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_WECHAT_GROUP_DIALOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_WECHAT_GROUP_DIALOG_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_GET_WECHAT_GROUP_MEMBER_LIST),
        ],
    ],
    [
        'name'              => '销售-微信好友聊天列表',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-sales-chat-message-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CHAT_MESSAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CHAT_MESSAGE_LIST),
        ],
    ],
    [
        'name'              => '销售-微信群聊天列表',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-sales-group-chat-message-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_GROUP_CHAT_MESSAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_GROUP_CHAT_MESSAGE_LIST),
        ],
    ],
    [
        'name'              => '销售-单聊-关联销售记录',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-sales-chat-sales-bind-log-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CHAT_SALES_BIND_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CHAT_SALES_BIND_LOG_LIST),
        ],
    ],
    [
        'name'              => '销售-群聊-关联销售记录',
        'group_alias'       => 'aike_sales_wechat_list',
        'alias_name'        => 'aike.get-sales-chat-group-sales-bind-log-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CHAT_GROUP_SALES_BIND_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_AIKE_SALES_GET_CHAT_GROUP_SALES_BIND_LOG_LIST),
        ],
    ],
    // ###################### 艾客数据 end ######################

    // ###################### 产品接入本部公司 start ######################
    /*[
        'name'              => '产品接入-本部公司-公司分页列表',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.get-page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-公司详情',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-编辑公司',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-创建分类',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.create-category',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE_CATEGORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE_CATEGORY),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-分类详情',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.category-detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CATEGORY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CATEGORY_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-编辑分类',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.update-category',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_CATEGORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_CATEGORY),
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CATEGORY_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-上传协议',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-协议分类列表',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.category-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CATEGORY_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CATEGORY_LIST),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-协议列表',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.agreement-list-by-category',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_LIST_BY_CATEGORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_LIST_BY_CATEGORY),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-协议详情',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-更新协议并应用分支产品',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.update-with-branch-products',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS),
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-应用分支产品列表',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.get-bind-branch-product-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_GET_BIND_BRANCH_PRODUCT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_GET_BIND_BRANCH_PRODUCT_LIST),
        ],
    ],
    [
        'name'              => '产品接入-本部公司-客户协议-应用分支产品关系编辑',
        'group_alias'       => 'pr_headquarter_company',
        'alias_name'        => 'pr_headquarter_company.agreement.update-branch-product-relation',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION),
        ],
    ],*/
    // ###################### 产品接入本部公司 end ######################

    // ###################### 产品接入供应商 start ######################
    [
        'name'              => '产品接入-供应商-分页列表',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.get-page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '产品接入-供应商-详情',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-编辑',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-单录设置',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.get-single-recording-detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_SINGLE_RECORDING_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_SINGLE_RECORDING_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-理赔服务详情',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.claim_explain_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_GET_CLAIM_EXPLAIN_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_GET_CLAIM_EXPLAIN_INFO),
        ],
    ],
    [
        'name'              => '产品接入-供应商-编辑理赔说明',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.update_claim_explain',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_UPDATE_CLAIM_EXPLAIN),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_UPDATE_CLAIM_EXPLAIN),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-创建分类',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.create-category',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE_CATEGORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE_CATEGORY),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-分类详情',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.category-detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CATEGORY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CATEGORY_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-编辑分类',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.update-category',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_CATEGORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_CATEGORY),
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CATEGORY_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-上传协议',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-协议分类列表',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.category-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CATEGORY_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CATEGORY_LIST),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-协议列表',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.agreement-list-by-category',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_LIST_BY_CATEGORY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_LIST_BY_CATEGORY),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-协议详情',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-更新协议并应用分支产品',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.update-with-branch-products',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS),
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-应用分支产品列表',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.get-bind-branch-product-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_GET_BIND_BRANCH_PRODUCT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_GET_BIND_BRANCH_PRODUCT_LIST),
        ],
    ],
    [
        'name'              => '产品接入-供应商-客户协议-应用分支产品关系编辑',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.agreement.update-branch-product-relation',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION),
        ],
    ],
    [
        'name'              => '产品接入-供应商-对接信息',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.docking-info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_INFO),
        ],
    ],
    [
        'name'              => '产品接入-供应商-对接信息详情',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.docking-info-detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_INFO_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_INFO_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-接入设置-码表列表',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.docking-code-table-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_LIST),
        ],
    ],
    [
        'name'              => '产品接入-供应商-接入设置-码表详情',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.docking-code-table-detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_DETAIL),
        ],
    ],
    [
        'name'              => '产品接入-供应商-接入设置-码表详情查看应用分支产品',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.docking-code-table-detail-bind-products',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_BIND_PRODUCTS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_BIND_PRODUCTS),
        ],
    ],
    [
        'name'              => '产品接入-供应商-接入设置-码表详情下载',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.docking-code-table-download',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_DOWNLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_DOWNLOAD),
        ],
    ],
    [
        'name'              => '产品接入-供应商-接入设置-状态映射详情',
        'group_alias'       => 'pr_supplier_list',
        'alias_name'        => 'pr_supplier_list.docking-status-mapping-detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_STATUS_MAPPING_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_SUPPLIER_DOCKING_STATUS_MAPPING_DETAIL),
        ],
    ],
    // ###################### 产品接入供应商 end ######################

    // ###################### 标签设置 begin ####################
    [
        'name'              => '产品分类列表',
        'group_alias'       => 'pr_product_common_category_list',
        'alias_name'        => 'pr_product_common_category_list.get-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_GET_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_GET_LIST),
        ],
    ],
    [
        'name'              => '新增产品分类',
        'group_alias'       => 'pr_product_common_category_list',
        'alias_name'        => 'pr_product_common_category_list.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_CREATE),
        ],
    ],
    [
        'name'              => '编辑产品分类',
        'group_alias'       => 'pr_product_common_category_list',
        'alias_name'        => 'pr_product_common_category_list.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_UPDATE),
        ],
    ],
    [
        'name'              => '删除产品分类',
        'group_alias'       => 'pr_product_common_category_list',
        'alias_name'        => 'pr_product_common_category_list.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_DELETE),
        ],
    ],

    [
        'name'              => '官网分类列表',
        'group_alias'       => 'pr_ws_category_list',
        'alias_name'        => 'pr_ws_category_list.get-page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增官网分类',
        'group_alias'       => 'pr_ws_category_list',
        'alias_name'        => 'pr_ws_category_list.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_CREATE),
        ],
    ],
    [
        'name'              => '编辑官网分类',
        'group_alias'       => 'pr_ws_category_list',
        'alias_name'        => 'pr_ws_category_list.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_UPDATE),
        ],
    ],
    [
        'name'              => '是否启用官网分类',
        'group_alias'       => 'pr_ws_category_list',
        'alias_name'        => 'pr_ws_category_list.is-enable',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_IS_ENABLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_WS_CATEGORY_IS_ENABLE),
        ],
    ],

    // ###################### 标签设置 end ######################

    // ###################### pr对账管理 end ######################
    [
        'name'              => '收入明细',
        'group_alias'       => 'pr_commission_list',
        'alias_name'        => 'pr-commission.summary_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_SUMMARY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_SUMMARY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '收入明细-明细',
        'group_alias'       => 'pr_commission_list',
        'alias_name'        => 'pr-commission.summary_item_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_PAGE_LIST),
        ],
    ],
    [
        'name'              => '对账清单下载',
        'group_alias'       => 'pr_commission_list',
        'alias_name'        => 'pr-commission.summary_item_export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_EXPORT),
        ],
    ],
    [
        'name'              => '首续期方案',
        'group_alias'       => 'pr_commission_scheme_list',
        'alias_name'        => 'pr-commission.product_scheme_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_PRODUCT_SCHEME_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_PRODUCT_SCHEME_PAGE_LIST),
        ],
    ],
    [
        'name'              => '奖励方案',
        'group_alias'       => 'pr_commission_scheme_list',
        'alias_name'        => 'pr-commission.reward_scheme_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_REWARD_SCHEME_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_COMMISSION_REWARD_SCHEME_PAGE_LIST),
        ],
    ],
    // ###################### pr对账管理 end ######################

    // ###################### 团队管理列表 start ######################
    [
        'name'              => '团队管理列表',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增团队',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.store_team',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_STORE),
        ],
    ],
    [
        'name'              => '新增下级',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.store_subordinate_team',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_SUBORDINATE_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_STORE),
        ],
    ],
    [
        'name'              => '团队编辑',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.update_team',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_UPDATE),
        ],
    ],
    [
        'name'              => '团队成员列表',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.direct_member_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DIRECT_MEMBER_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DIRECT_MEMBER_LIST),
        ],
    ],
    [
        'name'              => '团队成员管理',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.direct_member_manage',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DIRECT_MEMBER_MANAGE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DIRECT_MEMBER_MANAGE),
        ],
    ],
    [
        'name'              => '新增人员',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.store_member',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_STORE_MEMBER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_STORE_MEMBER),
        ],
    ],
    [
        'name'              => '移除人员',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.remove_member',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_REMOVE_MEMBER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_REMOVE_MEMBER),
        ],
    ],
    [
        'name'              => '团队记录',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.log-page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_LOG_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_LOG_PAGE_LIST),
        ],
    ],
    [
        'name'              => '团队详情',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DETAIL),
        ],
    ],
    [
        'name'              => '设为团队长',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.upgrade_team_leader',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE_LEADER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE_LEADER),
        ],
    ],
    [
        'name'              => '团队升级',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.upgrade_team',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE),
        ],
    ],
    [
        'name'              => '团队降级',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.downgrade_team',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DOWNGRADE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DOWNGRADE),
        ],
    ],
    [
        'name'              => '团队解散',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.dissolution_team',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DISSOLUTION),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_TEAM_DISSOLUTION),
        ],
    ],
    [
        'name'              => '销售成员',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.member_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_MEMBER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_MEMBER_PAGE_LIST),
        ],
    ],
    [
        'name'              => '销售成员记录',
        'group_alias'       => 'headquarters_company_team_list',
        'alias_name'        => 'expert_team.member_detail_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_MEMBER_DETAIL_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_EXPERT_MEMBER_DETAIL_LOG),
        ],
    ],
    // ###################### 团队管理列表 end ######################


    // ###################### 核保健告保全 begin ######################
    [
        'name'              => '核保管理',
        'group_alias'       => 'nuclear_health_protection',
        'alias_name'        => 'nuclear_protection.underwriting.product_name_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_UNDERWRITING_PRODUCT_NAME_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_UNDERWRITING_PRODUCT_NAME_LIST),
        ],
    ],

    [
        'name'              => '核保管理上传列表',
        'group_alias'       => 'nuclear_health_protection',
        'alias_name'        => 'nuclear_protection.underwriting.file_log_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_UNDERWRITING_FILE_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_UNDERWRITING_FILE_LOG_LIST),
        ],
    ],
    [
        'name'              => '健告管理',
        'group_alias'       => 'nuclear_health_protection',
        'alias_name'        => 'nuclear_protection.health_notice.product_name_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_NAME_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_NAME_LIST),
        ],
    ],
    [
        'name'              => '健告管理上传列表',
        'group_alias'       => 'nuclear_health_protection',
        'alias_name'        => 'nuclear_protection.health_notice.file_log_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_FILE_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_FILE_LOG_LIST),
        ],
    ],
    [
        'name'              => '投保规则文件上传',
        'group_alias'       => 'insurance_rules_management',
        'alias_name'        => 'health_notice.insurance_rules.upload_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE),
        ],
    ],
    [
        'name'              => '投保规则文件上传记录',
        'group_alias'       => 'insurance_rules_management',
        'alias_name'        => 'health_notice.insurance_rules.upload_file_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE_LOG),
        ],
    ],
    [
        'name'              => '投保规则列表',
        'group_alias'       => 'insurance_rules_management',
        'alias_name'        => 'health_notice.insurance_rules.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_LIST),
        ],
    ],
    [
        'name'              => '删除投保规则',
        'group_alias'       => 'insurance_rules_management',
        'alias_name'        => 'health_notice.insurance_rules.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_DELETE_UNDERWRITE_RULE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_DELETE_UNDERWRITE_RULE),
        ],
    ],
    [
        'name'              => '核保规则文件上传',
        'group_alias'       => 'underwriting_rules_management',
        'alias_name'        => 'health_notice.underwriting_rules.upload_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE),
        ],
    ],
    [
        'name'              => '核保规则文件上传记录',
        'group_alias'       => 'underwriting_rules_management',
        'alias_name'        => 'health_notice.underwriting_rules.upload_file_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE_LOG),
        ],
    ],
    [
        'name'              => '核保规则列表',
        'group_alias'       => 'underwriting_rules_management',
        'alias_name'        => 'health_notice.underwriting_rules.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_INSURANCE_RULE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_INSURANCE_RULE_LIST),
        ],
    ],
    [
        'name'              => '删除核保规则',
        'group_alias'       => 'underwriting_rules_management',
        'alias_name'        => 'health_notice.underwriting_rules.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_DELETE_INSURANCE_RULE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_DELETE_INSURANCE_RULE),
        ],
    ],

    [
        'name'              => '客服保全列表',
        'group_alias'       => 'health_customer_service_management',
        'alias_name'        => 'health_notice.customer_service.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_LIST),
        ],
    ],

    [
        'name'              => '客服保全文件上传',
        'group_alias'       => 'health_customer_service_management',
        'alias_name'        => 'health_notice.customer_service.upload_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE),
        ],
    ],

    [
        'name'              => '客服保全文件上传记录',
        'group_alias'       => 'health_customer_service_management',
        'alias_name'        => 'health_notice.customer_service.upload_file_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE_LOG),
        ],
    ],

    [
        'name'              => '客服保全删除',
        'group_alias'       => 'health_customer_service_management',
        'alias_name'        => 'health_notice.customer_service.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_DELETE),
        ],
    ],

    [
        'name'              => '理赔规则列表',
        'group_alias'       => 'claim_settlement_management',
        'alias_name'        => 'health_notice.claim_settlement.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_LIST),
        ],
    ],

    [
        'name'              => '理赔规则文件上传',
        'group_alias'       => 'claim_settlement_management',
        'alias_name'        => 'health_notice.claim_settlement.upload_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE),
        ],
    ],

    [
        'name'              => '理赔规则文件上传记录',
        'group_alias'       => 'claim_settlement_management',
        'alias_name'        => 'health_notice.claim_settlement.upload_file_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE_LOG),
        ],
    ],

    [
        'name'              => '理赔规则删除',
        'group_alias'       => 'claim_settlement_management',
        'alias_name'        => 'health_notice.claim_settlement.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_DELETE),
        ],
    ],

    [
        'name'              => '售后指引列表',
        'group_alias'       => 'product_sales_guidance_management',
        'alias_name'        => 'health_notice.product_sales_guidance.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_LIST),
        ],
    ],

    [
        'name'              => '售后指引上传文件',
        'group_alias'       => 'product_sales_guidance_management',
        'alias_name'        => 'health_notice.product_sales_guidance.upload_file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE),
        ],
    ],

    [
        'name'              => '售后指引查看上传记录',
        'group_alias'       => 'product_sales_guidance_management',
        'alias_name'        => 'health_notice.product_sales_guidance.upload_file_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE_LOG),
        ],
    ],

    [
        'name'              => '售后指引删除',
        'group_alias'       => 'product_sales_guidance_management',
        'alias_name'        => 'health_notice.product_sales_guidance.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_DELETE),
        ],
    ],

    [
        'name'              => '产品关联/取消关联',
        'group_alias'       => 'nuclear_health_protection_all',
        'alias_name'        => 'health_notice.product_connection_manual',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_CONNECTION_MANUAL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_CONNECTION_MANUAL),
        ],
    ],

    // ###################### 核保健告保全 end ######################

    // ###################### 风控管理 - 报表中心开始 ####################
    [
        'name'              => '报表中心',
        'group_alias'       => 'report_center_list',
        'alias_name'        => 'report_center.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_REPORT_CENTER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_REPORT_CENTER_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '报表中心-下载',
        'group_alias'       => 'report_center_list',
        'alias_name'        => 'report_center.download',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_REPORT_CENTER_DOWNLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_REPORT_CENTER_DOWNLOAD),
        ],
    ],
    [
        'name'              => '下载记录',
        'group_alias'       => 'report_center_download_log',
        'alias_name'        => 'report_center.download_log_get_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_REPORT_CENTER_DOWNLOAD_LOG_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_REPORT_CENTER_DOWNLOAD_LOG_GET_PAGE_LIST),
        ],
    ],

    // ###################### 创富云服 - 用户管理开始  ####################

    [
        'name'              => '公司列表',
        'group_alias'       => 'cfyf_user_management_company_list',
        'alias_name'        => 'cfyf_user_management_company_list.page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增公司',
        'group_alias'       => 'cfyf_user_management_company',
        'alias_name'        => 'cfyf_user_management_company.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CREATE),
        ],
    ],

    [
        'name'              => '公司导出权限',
        'group_alias'       => 'cfyf_user_management_company',
        'alias_name'        => 'cfyf_user_management_company.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_ALL_COMPANY_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_ALL_COMPANY_EXPORT),
        ],
    ],
    [
        'name'              => '批量操作权限',
        'group_alias'       => 'cfyf_user_management_company',
        'alias_name'        => 'cfyf_user_management_company.company-permission.batch-update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BUSINESS_PERMISSION_GROUP_PERMISSION_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_ADD),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_DELETE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_DELETE),
        ],
    ],

    // 销售详情start
    [
        'name'              => '销售分页列表',
        'group_alias'       => 'cfyf_user_management_sales_detail',
        'alias_name'        => 'cfyf_user_management_sales_detail.get-page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '销售-详情',
        'group_alias'       => 'cfyf_user_management_sales_detail',
        'alias_name'        => 'cfyf_user_management_sales_detail.sales-details',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_DETAILS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_DETAILS),
        ],
    ],
    [
        'name'              => '管理员-详情',
        'group_alias'       => 'cfyf_user_management_sales_detail',
        'alias_name'        => 'cfyf_user_management_sales_detail.sales-manage-details',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_MANAGE_DETAILS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_MANAGE_DETAILS),
        ],
    ],
    [
        'name'              => '编辑销售账号',
        'group_alias'       => 'cfyf_user_management_sales_detail',
        'alias_name'        => 'cfyf_user_management_sales_detail.update-username',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_UPDATE_USERNAME),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_UPDATE_USERNAME),
        ],
    ],

    [
        'name'              => '销售模拟登录',
        'group_alias'       => 'cfyf_user_management_sales_detail',
        'alias_name'        => 'cfyf_user_management_sales_detail.generate-auth-link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_GENERATE_AUTH_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_GENERATE_AUTH_LINK),
        ],
    ],
    [
        'name'              => '销售导出权限',
        'group_alias'       => 'cfyf_user_management_sales_detail',
        'alias_name'        => 'cfyf_user_management_sales_detail.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_EXPORT),
        ],
    ],
    [
        'name'              => '重置销售管理员密码',
        'group_alias'       => 'cfyf_user_management_sales_detail',
        'alias_name'        => 'cfyf_user_management_sales_detail.reset-password',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_RESET_PASSWORD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SALES_RESET_PASSWORD),
        ],
    ],
    // 销售详情end

    // 公司详情start
    [
        'name'              => '公司详情',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_DETAIL),
        ],
    ],

    // 发票税点记录
    [
        'name'              => '税点变更记录',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.company_invoice_tax_point_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_COMPANY_INVOICE_TAX_POINT_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_COMPANY_INVOICE_TAX_POINT_LOG),
        ],
    ],

    [
        'name'              => '更新公司',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_UPDATE),
        ],
    ],
    [
        'name'              => '解除入驻',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.relieve',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_RELIEVE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_RELIEVE),
        ],
    ],

    [
        'name'              => '中止入驻',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.pause',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PAUSE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PAUSE),
        ],
    ],

    [
        'name'              => '恢复入驻',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.enable',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_ENABLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_ENABLE),
        ],
    ],

    [
        'name'              => '公司权限',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.business-permission-group.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BUSINESS_PERMISSION_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BUSINESS_PERMISSION_GROUP_DETAIL),
        ],
    ],

    [
        'name'              => '公司权限-更新',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.company-permission.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_UPDATE),
        ],
    ],

    [
        'name'              => '开发对接',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.api-configure',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_API_CONFIGURE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_API_CONFIGURE),
        ],
    ],

    [
        'name'              => '公司接入状态开关',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.update-access-status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_API_UPDATE_ACCESS_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_API_UPDATE_ACCESS_STATUS),
        ],
    ],

    [
        'name'              => '修改公司API配置',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.update-api-config',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_API_UPDATE_API_CONFIG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_API_UPDATE_API_CONFIG),
        ],
    ],
    // 公司详情end

    [
        'name'              => '新增银行',
        'group_alias'       => 'cfyf_user_management_bank',
        'alias_name'        => 'cfyf_user_management_bank.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BANK_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BANK_ADD),
        ],
    ],

    [
        'name'              => '银行列表',
        'group_alias'       => 'cfyf_user_management_bank',
        'alias_name'        => 'cfyf_user_management_bank.page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BANK_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BANK_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增渠道',
        'group_alias'       => 'cfyf_user_management_channel',
        'alias_name'        => 'cfyf_user_management_channel.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_CREATE),
        ],
    ],
    [
        'name'              => '更新渠道',
        'group_alias'       => 'cfyf_user_management_channel',
        'alias_name'        => 'cfyf_user_management_channel.edit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_EDIT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_EDIT),
        ],
    ],
    [
        'name'              => '渠道列表',
        'group_alias'       => 'cfyf_user_management_channel',
        'alias_name'        => 'cfyf_user_management_channel.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_PAGE_LIST),
        ],
    ],

    [
        'name'              => '渠道详情',
        'group_alias'       => 'cfyf_user_management_channel',
        'alias_name'        => 'cfyf_user_management_channel.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_DETAIL),
        ],
    ],

    [
        'name'              => '合作信息列表',
        'group_alias'       => 'cfyf_business_cooperate',
        'alias_name'        => 'cfyf_business_cooperate.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_PAGE_LIST),
        ],
    ],

    [
        'name'              => '合作信息详情',
        'group_alias'       => 'cfyf_business_cooperate',
        'alias_name'        => 'cfyf_business_cooperate.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_DETAILS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_DETAILS),
        ],
    ],

    [
        'name'              => '公司开启限制',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.limitation-on',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_ON),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_ON),
        ],
    ],

    [
        'name'              => '公司关闭限制',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.limitation-off',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_OFF),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_OFF),
        ],
    ],

    [
        'name'              => '公司限制操作日志列表',
        'group_alias'       => 'cfyf_user_management_company_detail',
        'alias_name'        => 'cfyf_user_management_company_detail.limitation-log-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_LOG_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_LOG_LIST),
        ],
    ],


    // ###################### 创富云服 - 外部公司管理结束  ####################

    // ###################### 创富云服-平台公告-开始 ####################
    [
        'name'              => '新增平台公告',
        'group_alias'       => 'cfyf_platform_manage',
        'alias_name'        => 'cfyf_platform_manage.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_STORE),
        ],
    ],
    [
        'name'              => '编辑平台公告',
        'group_alias'       => 'cfyf_platform_manage',
        'alias_name'        => 'cfyf_platform_manage.edit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_UPDATE),
        ],
    ],
    [
        'name'              => '平台公告列表',
        'group_alias'       => 'cfyf_platform_manage',
        'alias_name'        => 'cfyf_platform_manage.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_LIST),
        ],
    ],
    [
        'name'              => '置顶平台公告',
        'group_alias'       => 'cfyf_platform_manage',
        'alias_name'        => 'cfyf_platform_manage.set_top',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_SET_TOP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_SET_TOP),
        ],
    ],
    [
        'name'              => '删除平台公告',
        'group_alias'       => 'cfyf_platform_manage',
        'alias_name'        => 'cfyf_platform_manage.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_DELETE),
        ],
    ],
    // ###################### 创富云服-平台公告-结束 ####################

    // ###################### 创富云服-新品上线-开始 ####################
    [
        'name'              => '新增新品上线公告',
        'group_alias'       => 'cfyf_new_product_manage',
        'alias_name'        => 'cfyf_new_product_manage.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_STORE),
        ],
    ],
    [
        'name'              => '编辑新品上线公告',
        'group_alias'       => 'cfyf_new_product_manage',
        'alias_name'        => 'cfyf_new_product_manage.edit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_UPDATE),
        ],
    ],
    [
        'name'              => '新品上线公告列表',
        'group_alias'       => 'cfyf_new_product_manage',
        'alias_name'        => 'cfyf_new_product_manage.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_LIST),
        ],
    ],
    // ###################### 创富云服-新品上线-结束 ####################

    // ###################### 创富云服-商品调整-开始 ####################
    [
        'name'              => '新增商品调整公告',
        'group_alias'       => 'cfyf_product_adjust_manage',
        'alias_name'        => 'cfyf_product_adjust_manage.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_STORE),
        ],
    ],
    [
        'name'              => '编辑商品调整公告',
        'group_alias'       => 'cfyf_product_adjust_manage',
        'alias_name'        => 'cfyf_product_adjust_manage.edit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_UPDATE),
        ],
    ],
    [
        'name'              => '商品调整公告列表',
        'group_alias'       => 'cfyf_product_adjust_manage',
        'alias_name'        => 'cfyf_product_adjust_manage.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_LIST),
        ],
    ],
    [
        'name'              => '上架调整公告',
        'group_alias'       => 'cfyf_product_adjust_manage',
        'alias_name'        => 'cfyf_product_adjust_manage.set_up_down',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_SET_UP_DOWN),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_SET_UP_DOWN),
        ],
    ],
    [
        'name'              => '删除调整公告',
        'group_alias'       => 'cfyf_product_adjust_manage',
        'alias_name'        => 'cfyf_product_adjust_manage.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_DELETE),
        ],
    ],
    // ###################### 创富云服-商品调整-结束 ####################

    // ###################### 创富云服-广告管理-开始 ####################
    [
        'name'              => '新增广告',
        'group_alias'       => 'cfyf_company_banner_manage',
        'alias_name'        => 'cfyf_company_banner_manage.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_STORE),
        ],
    ],
    [
        'name'              => '编辑广告',
        'group_alias'       => 'cfyf_company_banner_manage',
        'alias_name'        => 'cfyf_company_banner_manage.edit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UPDATE),
        ],
    ],
    [
        'name'              => '广告列表',
        'group_alias'       => 'cfyf_company_banner_manage',
        'alias_name'        => 'cfyf_company_banner_manage.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_MANAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_MANAGE_LIST),
        ],
    ],
    [
        'name'              => '删除广告',
        'group_alias'       => 'cfyf_company_banner_manage',
        'alias_name'        => 'cfyf_company_banner_manage.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_DELETE),
        ],
    ],
    [
        'name'              => '上下架广告',
        'group_alias'       => 'cfyf_company_banner_manage',
        'alias_name'        => 'cfyf_company_banner_manage.up_or_down',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UP_OR_DOWN),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UP_OR_DOWN),
        ],
    ],
    // ###################### 创富云服-广告管理-结束 ####################

    // ###################### 创富云服 - 轮播图管理 开始(此模块删除) ####################
//    [
//        'name'              => '新增banner素材',
//        'group_alias'       => 'cfyf_product_scheme_banner_material',
//        'alias_name'        => 'cfyf_product_scheme_banner_material.add',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE),
//        ],
//    ],
//
//    [
//        'name'              => '编辑banner素材',
//        'group_alias'       => 'cfyf_product_scheme_banner_material',
//        'alias_name'        => 'cfyf_product_scheme_banner_material.edit',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE),
//        ],
//    ],
//
//    [
//        'name'              => '查看banner素材',
//        'group_alias'       => 'cfyf_product_scheme_banner_material',
//        'alias_name'        => 'cfyf_product_scheme_banner_material.page_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_MATERIAL_PAGE_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_MATERIAL_PAGE_LIST),
//        ],
//    ],
//
//    [
//        'name'              => '启用/禁用素材',
//        'group_alias'       => 'cfyf_product_scheme_banner_material',
//        'alias_name'        => 'cfyf_product_scheme_banner_material.set_status',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_SET_STATUS),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_SET_STATUS),
//        ],
//    ],
//
//    [
//        'name'              => '新增默认素材',
//        'group_alias'       => 'cfyf_product_scheme_default_banner',
//        'alias_name'        => 'cfyf_product_scheme_default_banner.add',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE_DEFAULT),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE_DEFAULT),
//        ],
//    ],
//
//    [
//        'name'              => '编辑默认素材',
//        'group_alias'       => 'cfyf_product_scheme_default_banner',
//        'alias_name'        => 'cfyf_product_scheme_default_banner.edit',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE_DEFAULT),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE_DEFAULT),
//        ],
//    ],
//
//    [
//        'name'              => '查看默认素材',
//        'group_alias'       => 'cfyf_product_scheme_default_banner',
//        'alias_name'        => 'cfyf_product_scheme_default_banner.page_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_DEFAULT_PAGE_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_DEFAULT_PAGE_LIST),
//        ],
//    ],

    // ###################### 创富云服 - 轮播图管理 结束  ####################

    // ###################### 风控管理 - 报表中心结束 ####################

    // ###################### 手机号管理列表 开始 ######################
    [
        'name'              => '查看手机号列表',
        'group_alias'       => 'crm_communication_mobile_manager',
        'alias_name'        => 'crm_communication.mobile_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MOBILE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MOBILE_PAGE_LIST),
        ],
    ],
    [
        'name'              => '添加手机号',
        'group_alias'       => 'crm_communication_mobile_manager',
        'alias_name'        => 'crm_communication.mobile_store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MOBILE_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MOBILE_STORE),
        ],
    ],
    [
        'name'              => '删除手机号',
        'group_alias'       => 'crm_communication_mobile_manager',
        'alias_name'        => 'crm_communication.mobile_delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MOBILE_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_MOBILE_DELETE),
        ],
    ],
    // ###################### 手机号管理列表 结束 ######################

    // ###################### 注册外部工号 开始 ######################
    [
        'name'              => '外部工号列表',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'crm_user.trd_account_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_PAGE_LIST),
        ],
    ],
    [
        'name'              => '添加外部工号',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'crm_user.trd_account_create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_STORE),
        ],
    ],
    [
        'name'              => '更新外部工号',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'crm_user.trd_account_update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_UPDATE),
        ],
    ],
    [
        'name'              => '删除外部工号',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'crm_user.trd_account_delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_DELETE),
        ],
    ],
    [
        'name'              => '外部工号操作日志',
        'group_alias'       => 'headquarters_company_qualification_list',
        'alias_name'        => 'crm_user.trd_account_operation_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_OPERATION_LOG_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_TRD_ACCOUNT_OPERATION_LOG_PAGE_LIST),
        ],
    ],
    // ###################### 注册外部工号 结束 ######################

//    // ###################### 微信客服号管理列表 开始 ######################
//    [
//        'name'              => '微信客服号列表',
//        'group_alias'       => 'crm_communication_wx_kf_manager',
//        'alias_name'        => 'crm_communication.wx_kf_service_page_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_PAGE_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_PAGE_LIST),
//        ],
//    ],
//    [
//        'name'              => '微信客服号同步',
//        'group_alias'       => 'crm_communication_wx_kf_manager',
//        'alias_name'        => 'crm_communication.wx_kf_service_sync',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_SYNC),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_SYNC),
//        ],
//    ],
//    [
//        'name'              => '微信客服号分配',
//        'group_alias'       => 'crm_communication_wx_kf_manager',
//        'alias_name'        => 'crm_communication.wx_kf_service_distribute',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_DISTRIBUTE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_DISTRIBUTE),
//        ],
//    ],
//    // ###################### 微信客服号管理列表 结束 ######################
//
//    // ###################### 客服分配管理 开始 ######################
//    [
//        'name'              => '客服分配管理-入口',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.entrance',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ENTRANCE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ENTRANCE),
//        ],
//    ],
//    [
//        'name'              => '客服信息列表',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_LIST),
//        ],
//    ],
//    [
//        'name'              => '客服信息-添加',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.add',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ADD),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ADD),
//        ],
//    ],
//    [
//        'name'              => '客服信息-编辑',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.edit',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_EDIT),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_EDIT),
//        ],
//    ],
//    [
//        'name'              => '客服信息-删除',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.delete',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_DELETE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_DELETE),
//        ],
//    ],
//    [
//        'name'              => '客服信息-新增销售',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.add_sales',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ADD_SALES),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ADD_SALES),
//        ],
//    ],
//    [
//        'name'              => '客服信息-设置默认客服',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.set_default',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_SET_DEFAULT),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_SET_DEFAULT),
//        ],
//    ],
//    [
//        'name'              => '客服信息-上传文件',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.upload_file',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_UPLOAD_FILE),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_UPLOAD_FILE),
//        ],
//    ],
//    [
//        'name'              => '客服信息-上传记录分页列表',
//        'group_alias'       => 'crm_communication_wx_kf_distribute',
//        'alias_name'        => 'crm_communication_manager.sales_customer_service.upload_page_list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_UPLOAD_PAGE_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_UPLOAD_PAGE_LIST),
//        ],
//    ],
//
//    // ###################### 客服分配管理 结束 ######################

    // ###################### 文章管理 开始 ######################
    [
        'name'              => '文章分类列表',
        'group_alias'       => 'article_category_list',
        'alias_name'        => 'article_management.category.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增文章分类',
        'group_alias'       => 'article_category_list',
        'alias_name'        => 'article_management.category.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_STORE),
        ],
    ],
    [
        'name'              => '更新文章分类',
        'group_alias'       => 'article_category_list',
        'alias_name'        => 'article_management.category.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_UPDATE),
        ],
    ],
    [
        'name'              => '删除文章分类',
        'group_alias'       => 'article_category_list',
        'alias_name'        => 'article_management.category.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_DELETE),
        ],
    ],
    [
        'name'              => '文章分类详情',
        'group_alias'       => 'article_category_list',
        'alias_name'        => 'article_management.category.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_DETAIL),
        ],
    ],
    [
        'name'              => '切换文章分类状态',
        'group_alias'       => 'article_category_list',
        'alias_name'        => 'article_management.category.toggle_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_TOGGLE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_CATEGORY_TOGGLE_STATUS),
        ],
    ],
    [
        'name'              => '文章管理',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.page_list_manage',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_PAGE_LIST_MANAGE),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '文章列表',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DRAFT_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DRAFT_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DRAFT_DELETE),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_GATHER_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_GATHER_BATCH_DEL_GATHER),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_GATHER_DEL_GATHER),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_GATHER_ARTICLE_DETAIL),
        ],
    ],
    [
        'name'              => '文章详情',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DETAIL),
        ],
    ],
    [
        'name'              => '切换某个文章渠道显示状态',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.toggle_show',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_TOGGLE_SHOW),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_TOGGLE_SHOW),
        ],
    ],
    [
        'name'              => '切换某个文章渠道置顶',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.toggle_top',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_TOGGLE_TOP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_TOGGLE_TOP),
        ],
    ],
    [
        'name'              => '切换某个文章渠道推荐',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.toggle_recommend',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_TOGGLE_RECOMMEND),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_TOGGLE_RECOMMEND),
        ],
    ],
    [
        'name'              => '删除文章',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DELETE),
        ],
    ],
    [
        'name'              => '复制文章',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.copy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_COPY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_COPY),
        ],
    ],
    [
        'name'              => '新增文章',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_STORE),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DRAFT_SAVE),
        ],
    ],
    [
        'name'              => '预览文章',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.preview',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_PREVIEW_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_PREVIEW_LINK),
        ],
    ],
    [
        'name'              => '编辑文章',
        'group_alias'       => 'article_list',
        'alias_name'        => 'article_management.article.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_DRAFT_SAVE),
            get_route_real_name(WebRoute::MANAGEMENT_ARTICLE_GATHER_EDIT_GATHER),
        ],
    ],
    // ###################### 文章管理 结束 ######################

    // ###################### 计划书管理 开始 ######################
    [
        'name'              => '产品设置列表',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '产品设置详情',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_DETAIL),
        ],
    ],
    [
        'name'              => '产品设置新增',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_ADD),
        ],
    ],
    [
        'name'              => '产品设置更新',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_UPDATE),
        ],
    ],
    [
        'name'              => '产品设置复制',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.copy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_COPY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_COPY),
        ],
    ],
    [
        'name'              => '产品设置上下架设置',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.set_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_SET_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_SET_STATUS),
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_BATCH_SET_STATUS),
        ],
    ],
    [
        'name'              => '产品费率详情',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.rate.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_RATE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_RATE_DETAIL),
        ],
    ],
    [
        'name'              => '产品费率保存',
        'group_alias'       => 'proposal_product_list',
        'alias_name'        => 'proposal_product_list.rate.save',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_RATE_SAVE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_PRODUCT_RATE_SAVE),
        ],
    ],

    [
        'name'              => '保障管理列表',
        'group_alias'       => 'proposal_guarantee_responsibility',
        'alias_name'        => 'proposal_guarantee_responsibility.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '保障责任添加',
        'group_alias'       => 'proposal_guarantee_responsibility',
        'alias_name'        => 'proposal_guarantee_responsibility.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_ADD),
        ],
    ],
    [
        'name'              => '保障责任详情',
        'group_alias'       => 'proposal_guarantee_responsibility',
        'alias_name'        => 'proposal_guarantee_responsibility.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DETAIL),
        ],
    ],
    [
        'name'              => '保障责任更新',
        'group_alias'       => 'proposal_guarantee_responsibility',
        'alias_name'        => 'proposal_guarantee_responsibility.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_UPDATE),
        ],
    ],
    [
        'name'              => '保障责任删除',
        'group_alias'       => 'proposal_guarantee_responsibility',
        'alias_name'        => 'proposal_guarantee_responsibility.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DELETE),
        ],
    ],

    [
        'name'              => '家庭风险分析模板分组分页列表',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.group.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '家庭风险分析模板分组添加',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.group.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_ADD),
        ],
    ],
    [
        'name'              => '家庭风险分析模板分组编辑',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.group.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_UPDATE),
        ],
    ],
    [
        'name'              => '家庭风险分析模板分组删除',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.group.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DELETE),
        ],
    ],
    [
        'name'              => '家庭风险分析模板分组详情',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.group.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DETAIL),
        ],
    ],

    [
        'name'              => '家庭风险分析模板添加',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_ADD),
        ],
    ],

    [
        'name'              => '家庭风险分析模板编辑',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.edit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_EDIT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_EDIT),
        ],
    ],
    [
        'name'              => '家庭风险分析模板详情',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DETAIL),
        ],
    ],
    [
        'name'              => '家庭风险分析模板删除',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DELETE),
        ],
    ],
    [
        'name'              => '家庭风险分析模板状态变更',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.set_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_SET_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_SET_STATUS),
        ],
    ],
    [
        'name'              => '家庭风险分析模板分页列表',
        'group_alias'       => 'proposal_family_analysis',
        'alias_name'        => 'proposal_family_analysis.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增产品',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_ADD),
        ],
    ],
    [
        'name'              => '更新产品',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_UPDATE),
        ],
    ],
    [
        'name'              => '产品分页列表',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '上下架设置',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.set_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_SET_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_SET_STATUS),
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_BATCH_SET_STATUS),
        ],
    ],
    [
        'name'              => '详情',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_DETAIL),
        ],
    ],
    [
        'name'              => '获取相关费率信息',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.get_rate',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_RATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_RATE),
        ],
    ],
    [
        'name'              => '保存费率表',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.rate_save',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_RATE_SAVE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_RATE_SAVE),
        ],
    ],
    [
        'name'              => '保存现价表',
        'group_alias'       => 'proposal_deposit_product',
        'alias_name'        => 'proposal_deposit_product.cash_save',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_CASH_SAVE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_CASH_SAVE),
        ],
    ],
    // ###################### 计划书管理 结束 ######################

    // ###################### 病种管理 开始 ######################
    [
        'name'              => '保存一个系列病种',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.store_one_series',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_STORE_ONE_SERIES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_STORE_ONE_SERIES),
        ],
    ],
    [
        'name'              => '删除一个系列病种',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.delete_one_series',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_DELETE_ONE_SERIES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_DELETE_ONE_SERIES),
        ],
    ],
    [
        'name'              => '病种模板分页列表',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '病种明细管理',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.management',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_MANAGEMENT),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '关联产品',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.bind_product',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_BIND_PRODUCT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_BIND_PRODUCT),
        ],
    ],
    [
        'name'              => '取消关联产品',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.unbind_product',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_UNBIND_PRODUCT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_UNBIND_PRODUCT),
        ],
    ],
    [
        'name'              => '删除病种模板',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.delete_template',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_DELETE_TEMPLATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_DELETE_TEMPLATE),
        ],
    ],
    [
        'name'              => '上传病种模板',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.template_upload',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPLOAD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPLOAD),
        ],
    ],
    [
        'name'              => '编辑病种模板',
        'group_alias'       => 'product_disease_management',
        'alias_name'        => 'product_disease.template_update_name',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPDATE_NAME),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPDATE_NAME),
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_DETAIL),
        ],
    ],
    // ###################### 病种管理 结束 ######################

    // ###################### 产品对比管理 结束 ######################
    [
        'name'              => '创建一览表产品',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_ADD),
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_PROPOSAL_PRODUCT_LIST),
        ],
    ],
    [
        'name'              => '一览表产品列表',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '删除一览表产品',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.del',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_DEL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_DEL),
        ],
    ],
    [
        'name'              => '更新一览表产品',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_PROPOSAL_PRODUCT_LIST),
        ],
    ],
    [
        'name'              => '一览表产品详情',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_DETAIL),
        ],
    ],
    [
        'name'              => '上下架',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.set_product_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_SET_PRODUCT_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_SET_PRODUCT_STATUS),
        ],
    ],
    [
        'name'              => '批量上架',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.batch_product_enable',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_ENABLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_ENABLE),
        ],
    ],
    [
        'name'              => '批量下架',
        'group_alias'       => 'product_evaluation_management',
        'alias_name'        => 'product_evaluation.batch_product_disable',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_DISABLE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_DISABLE),
        ],
    ],

    // ###################### 产品对比管理 结束 ######################

    // ###################### 规则管理-资源 开始 ######################
    [
        'name'              => '资源列表',
        'group_alias'       => 'rule_management.resource',
        'alias_name'        => 'rule_management.resource.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_RULE_RECOURSE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_RULE_RECOURSE_LIST),
        ],
    ],
    [
        'name'              => '上传资源',
        'group_alias'       => 'rule_management.resource',
        'alias_name'        => 'rule_management.resource.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_RULE_RECOURSE_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_RULE_RECOURSE_ADD),
        ],
    ],
    /*[
        'name'              => '复制链接',
        'group_alias'       => 'rule_management.resource',
        'alias_name'        => 'rule_management.resource.copy_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_RULE_RECOURSE_COPY_LINK),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '下载',
        'group_alias'       => 'rule_management.resource',
        'alias_name'        => 'rule_management.resource.download',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_RULE_RECOURSE_DOWNLOAD),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '预览',
        'group_alias'       => 'rule_management.resource',
        'alias_name'        => 'rule_management.resource.preview',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PRODUCT_RULE_RECOURSE_PREVIEW),
        ],
        'proxy_route_name'  => [
        ],
    ],*/
    // ###################### 规则管理-资源 结束 ######################

    // ###################### 信息安全管理 开始 ######################
    [
        'name'              => '系统安全配置菜单栏',
        'group_alias'       => 'secret_settings',
        'alias_name'        => 'crm_secret_info.menu',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_MENU),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_MENU),
        ],
    ],
    [
        'name'              => '获取基础设置和监控规则设置',
        'group_alias'       => 'secret_settings',
        'alias_name'        => 'crm_secret_info.secret_settings_and_rule_get',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_SETTINGS_AND_RULE_GET),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_SETTINGS_AND_RULE_GET),
        ],
    ],
    [
        'name'              => '编辑基础设置和监控规则',
        'group_alias'       => 'secret_settings',
        'alias_name'        => 'crm_secret_info.secret_settings_and_rule_set',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_SETTINGS_AND_RULE_SET),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_SETTINGS_AND_RULE_SET),
        ],
    ],
    [
        'name'              => '异常监控列表',
        'group_alias'       => 'secret_settings',
        'alias_name'        => 'crm_secret_info.abnormal_log_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_ABNORMAL_LOG_PAGE_LIS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_ABNORMAL_LOG_PAGE_LIS),
        ],
    ],
    [
        'name'              => '风险记录统计列表',
        'group_alias'       => 'secret_settings',
        'alias_name'        => 'crm_secret_info.monthly_risk_statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_MONTHLY_RISK_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CRM_USER_SECRET_MONTHLY_RISK_STATISTICS),
        ],
    ],
    // ###################### 信息安全管理 结束 ######################
    [
        'name'              => '未绑定产品、险种入口',
        'group_alias'       => 'policy_unbind_product',
        'alias_name'        => 'policy_unbind_product.unbind_list.entrance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_UNBIND_LIST_ENTRANCE),
        ],
        'proxy_route_name'  => [
        ],
    ],
    [
        'name'              => '未绑定产品列表',
        'group_alias'       => 'policy_unbind_product',
        'alias_name'        => 'policy_unbind_product.unbind_product_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_GET_UNBIND_PRODUCT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_GET_UNBIND_PRODUCT_LIST),
        ],
    ],
    [
        'name'              => '未绑定计划列表',
        'group_alias'       => 'policy_unbind_product',
        'alias_name'        => 'policy_unbind_product.unbind_product_plan_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_GET_UNBIND_PRODUCT_PLAN_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_GET_UNBIND_PRODUCT_PLAN_LIST),
        ],
    ],
    [
        'name'              => '未绑定险种列表',
        'group_alias'       => 'policy_unbind_product',
        'alias_name'        => 'policy_unbind_product.unbind_insurance_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_GET_UNBIND_INSURANCE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_POLICY_GET_UNBIND_INSURANCE_LIST),
        ],
    ],
    // ###################### 订单未绑定产品 START ######################

    // ###################### 订单未绑定产品 END ######################

    // ###################### 预核保进度 START ######################
    [
        'name'              => '预核保进度入口',
        'group_alias'       => 'pr_pre_uw_schedule_entrance',
        'alias_name'        => 'pr_pre_uw_schedule_entrance.entrance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_PR_PRE_UW_SCHEDULE_ENTRANCE),
        ],
        'proxy_route_name'  => [
        ]
    ],
    // 预核保进度列表
    [
        'name'              => '预核保进度列表',
        'group_alias'       => 'pr_pre_uw_schedule_entrance',
        'alias_name'        => 'pr_pre_uw_schedule_list.page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_PRE_UW_SCHEDULE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_PRE_UW_SCHEDULE_PAGE_LIST),
        ],
    ],
    // 预核保进度详情
    [
        'name'              => '预核保进度详情',
        'group_alias'       => 'pr_pre_uw_schedule_entrance',
        'alias_name'        => 'pr_pre_uw_schedule_list.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_PRE_UW_SCHEDULE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_ORDER_PRE_UW_SCHEDULE_DETAIL),
        ],
    ],
    // ###################### 预核保进度 END ######################

    // ###################### 官网设置 开始 ######################
    [
        'name'              => 'banner设置',
        'group_alias'       => 'ws_banner_setting',
        'alias_name'        => 'ws_banner_setting.settings',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_SETTING),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => 'banner分页列表',
        'group_alias'       => 'ws_banner_setting',
        'alias_name'        => 'ws_banner_setting.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => 'banner新建',
        'group_alias'       => 'ws_banner_setting',
        'alias_name'        => 'ws_banner_setting.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_STORE),
        ],
    ],
    [
        'name'              => 'banner更新',
        'group_alias'       => 'ws_banner_setting',
        'alias_name'        => 'ws_banner_setting.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_DETAIL),
        ],
    ],
    [
        'name'              => 'banner变更状态',
        'group_alias'       => 'ws_banner_setting',
        'alias_name'        => 'ws_banner_setting.change_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_CHANGE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_WS_BANNER_CHANGE_STATUS),
        ],
    ],

    [
        'name'              => '产品显示设置',
        'group_alias'       => 'product_display_setting',
        'alias_name'        => 'product_display_setting.settings',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_SETTINGS),
        ],
        'proxy_route_name'  => [],
    ],

    [
        'name'              => '产品显示分页列表',
        'group_alias'       => 'product_display_setting',
        'alias_name'        => 'product_display_setting.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_SWITCH_ENABLE),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_DISPLAY_SET_SUPPLIER_PLATFORM_RULE),
        ],
    ],

    [
        'name'              => '列表',
        'group_alias'       => 'product_plan.discount',
        'alias_name'        => 'product_plan.discount.list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_LIST),
        ],
    ],
    [
        'name'              => '详情',
        'group_alias'       => 'product_plan.discount',
        'alias_name'        => 'product_plan.discount.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_DETAIL),
        ],
    ],
    [
        'name'              => '新增',
        'group_alias'       => 'product_plan.discount',
        'alias_name'        => 'product_plan.discount.add',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_ADD),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_ADD),
        ],
    ],
    [
        'name'              => '编辑',
        'group_alias'       => 'product_plan.discount',
        'alias_name'        => 'product_plan.discount.edit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_EDIT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_EDIT),
        ],
    ],

    [
        'name'              => '产品列表素材',
        'group_alias'       => 'product_cover_material',
        'alias_name'        => 'product_cover_material.materials',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIAL_MATERIALS),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '封面图库',
        'group_alias'       => 'product_cover_material',
        'alias_name'        => 'product_cover_material.cover_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_COVER_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_COVER_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_COVER_STORE),
        ],
    ],
    [
        'name'              => '分类设置',
        'group_alias'       => 'product_cover_material',
        'alias_name'        => 'product_cover_material.category_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_GET_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_STORE),
        ],
    ],
    // ###################### 官网设置 结束 ######################


    // ###################### 活动及公告 - 公告 开始 ####################
    [
        'name'              => '公告列表',
        'group_alias'       => 'activities_and_announcements',
        'alias_name'        => 'activities_and_announcements.announcements.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_GET_PAGE_LIST),
        ],
    ],

    [
        'name'              => '公告详情',
        'group_alias'       => 'activities_and_announcements',
        'alias_name'        => 'activities_and_announcements.announcements.show',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_SHOW),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_SHOW),
        ],
    ],

    [
        'name'              => '管理员个人公告列表',
        'group_alias'       => 'activities_and_announcements',
        'alias_name'        => 'activities_and_announcements.announcements.admin_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_ADMIN_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_ADMIN_PAGE_LIST),
        ],
    ],

    // ###################### 活动及公告 - 公告 结束 ####################


    // ###################### 自助售后指引管理 开始 ######################

    [
        'name'              => '自助售后指引管理-入口',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.entrance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_ENTRANCE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_ENTRANCE),
        ],
    ],

    [
        'name'              => '自助售后指引管理-平台指引分页列表',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.list_with_page',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_LIST_WITH_PAGE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_LIST_WITH_PAGE),
        ],
    ],

    [
        'name'              => '自助售后指引管理-导出平台指引',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.export_guide_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_EXPORT_GUIDE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_EXPORT_GUIDE_LIST),
        ],
    ],

    [
        'name'              => '自助售后指引管理-添加平台指引',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.create',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_CREATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_CREATE),
        ],
    ],

    [
        'name'              => '自助售后指引管理-平台指引详情',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.show',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_SHOW),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_SHOW),
        ],
    ],

    [
        'name'              => '自助售后指引管理-编辑平台指引',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_UPDATE),
        ],
    ],

    [
        'name'              => '自助售后指引管理-指引列表',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.guide_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_GUIDE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_GUIDE_LIST),
        ],
    ],

    [
        'name'              => '自助售后指引管理-渠道列表',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.sale_platform_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_SALE_PLATFORM_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_SALE_PLATFORM_LIST),
        ],
    ],

    [
        'name'              => '自助售后指引管理-检查指引内容是否为空',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.check_guide_content',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_CHECK_GUIDE_CONTENT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_CHECK_GUIDE_CONTENT),
        ],
    ],

    [
        'name'              => '自助售后指引管理-所属渠道列表',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.belong_channel_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_BELONG_CHANNEL_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_BELONG_CHANNEL_LIST),
        ],
    ],

    [
        'name'              => '自助售后指引管理-保司列表',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.company_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_COMPANY_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_COMPANY_LIST),
        ],
    ],

    [
        'name'              => '自助售后指引管理-产品列表',
        'group_alias'       => 'self_service_after_sales_guidance',
        'alias_name'        => 'self_service_after_sales_guidance.product_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_PRODUCT_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_PRODUCT_LIST),
        ],
    ],

    // ###################### 自助售后指引管理 结束 ######################

    // ###################### cfyf订单管理 start ######################
    [
        'name'              => '订单列表',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_PAGE_LIST_STATISTICS),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '重推保单通知',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.send_notify',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_SEND_NOTIFY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_SEND_NOTIFY),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],

    [
        'name'              => '修改归属公司记录',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.change_company_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY_LOG),
        ]
    ],

    [
        'name'              => '修改归属B端公司',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.change_company',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY),
        ]
    ],

    [
        'name'              => '批量修改归属B端公司',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.change_company-batch-task',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY_BATCH_TASK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY_BATCH_TASK),
        ]
    ],

    [
        'name'              => '导出订单列表',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.export_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_EXPORT_PR_ORDER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_EXPORT_PR_ORDER_PAGE_LIST),
        ],
    ],
    [
        'name'              => '复制支付链接',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.get_detail_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_DETAIL_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_DETAIL_LINK),
        ],
    ],
    [
        'name'              => '复制回访链接',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.get_visit_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_VISIT_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_VISIT_LINK),
        ],
    ],
    [
        'name'              => '复制人核链接',
        'group_alias'       => 'cfyf_pr_order_list',
        'alias_name'        => 'cfyf_pr_order.get_manpower_link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_MANPOWER_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_MANPOWER_LINK),
        ],
    ],
    [
        'name'              => '订单详情-订单基本信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.order_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_BASE_INFO),
        ],
    ],
    [
        'name'              => '订单详情-保单基本信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_FILE_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_FILE_LINK),
        ],
    ],
    [
        'name'              => '订单详情-人员信息（投保人，被保人，受益人）',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_person_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PERSON_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PERSON_INFO),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '订单详情-退保记录',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_surrender_log',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SURRENDER_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SURRENDER_LOG),
        ],
    ],
    [
        'name'              => '订单详情-历史续保续期记录',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_renewal_stage',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_STAGE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_STAGE),
        ],
    ],

    [
        'name'              => '订单详情-销售信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_sales',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SALES),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SALES),
        ],
    ],
    [
        'name'              => '订单详情-客户信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.order_customer',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CUSTOMER),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CUSTOMER),
        ],
    ],
    [
        'name'              => '订单详情-合规信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.order_compliance_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_COMPLIANCE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_COMPLIANCE_INFO),
        ],
    ],
    [
        'name'              => '订单详情-保单产品信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_product_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRODUCT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRODUCT_INFO),
        ],
    ],
    [
        'name'              => '订单详情-支付信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_payment_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PAYMENT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PAYMENT_INFO),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '订单详情-续期账号信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_renewal_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_INFO),
        ],
        'encryption_options' => EncryptionOption::getAllOption(),
    ],
    [
        'name'              => '订单详情-回访信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_visit_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_VISIT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_VISIT_INFO),
        ],
    ],
    [
        'name'              => '订单详情-回执信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_receipt_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RECEIPT_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RECEIPT_INFO),
        ],
    ],

    [
        'name'              => '订单详情-当前续保续期记录',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.policy_current_renewal_stage',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_CURRENT_RENEWAL_STAGE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_CURRENT_RENEWAL_STAGE),
        ],
    ],

    [
        'name'              => '订单详情-人核信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.mw.detail_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL_INFO),
        ],
        'proxy_route_name'  => [],
    ],
    [
        'name'              => '订单详情-人核基本信息',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.mw.base_info',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_BASE_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_TRACK_LOG),
        ],
    ],
    [
        'name'              => '订单详情-健康问卷',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.mw.questionnaire',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_DETAIL),
        ],
    ],
    [
        'name'              => '订单详情-资料补充',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.mw.supplement_question',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_QUESTION_GROUP_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_QUESTION_GROUP_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_QUESTION_GROUP_DETAIL),
        ],
    ],
    [
        'name'              => '订单详情-附件资料',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.mw.file',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_FILE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_FILE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_FILE_LIST_DOWNLOAD_ZIP),
        ],
    ],
    [
        'name'              => '订单详情-核保结论',
        'group_alias'       => 'cfyf_pr_order_detail',
        'alias_name'        => 'cfyf_pr_order_detail.mw.conclusion',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_CONCLUSION_INFO),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_CONCLUSION_INFO),
        ],
    ],


    // ###################### cfyf订单管理 end ######################

    // ###################### cfyf续保续期管理 start ######################
    [
        'name'              => '续保续期-分页列表',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_PAGE_LIST),
        ],
    ],
    [
        'name'              => '续保续期-分页列表',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_PAGE_LIST),
        ],
    ],

    [
        'name'              => '续保续期-统计',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_STATISTICS),
        ],
    ],
    [
        'name'              => '续保续期-跟踪记录',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.follow_logs',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_FOLLOW_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_FOLLOW_LOG),
        ],
    ],
    [
        'name'              => '续保续期-发送续保续期短信',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.send_renewal_msg',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_SEND_MSG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_SEND_MSG),
        ],
    ],
    [
        'name'              => '续保续期-添加跟踪记录',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.add_follow_logs',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_ADD_FOLLOW_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_ADD_FOLLOW_LOG),
        ],
    ],

    [
        'name'              => '续保续期-客户续保续期记录',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.get_customer_renewal_stage_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_CUSTOMER_RENEWAL_STAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_CUSTOMER_RENEWAL_STAGE_LIST),
        ],
    ],
    [
        'name'              => '续保续期-统计',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_STATISTICS),
        ],
    ],
    [
        'name'              => '续保续期-导出',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.export',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_EXPORT),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_EXPORT),
        ],
    ],
    [
        'name'              => '续保续期-复制链接',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.link',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_LINK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_LINK),
        ],
    ],

    [
        'name'              => '续保续期-获取客户续保续期详情',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.get_customer_renewal_follow_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_CUSTOMER_RENEWAL_FOLLOW_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_CUSTOMER_RENEWAL_FOLLOW_DETAIL),
        ],
    ],
    [
        'name'              => '续保续期-获取续保续期通知设置',
        'group_alias'       => 'cfyf_notify_setting',
        'alias_name'        => 'cfyf_notify_setting.get_company_notify_setting',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_GET_COMPANY_NOTIFY_SETTING),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_GET_COMPANY_NOTIFY_SETTING),
        ],
    ],
    [
        'name'              => '续保续期-更新续保续期通知设置',
        'group_alias'       => 'cfyf_notify_setting',
        'alias_name'        => 'cfyf_notify_setting.notify_setting',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_NOTIFY_SETTING),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_NOTIFY_SETTING),
        ],
    ],
    [
        'name'              => '续保续期-批量更新续保续期通知设置',
        'group_alias'       => 'cfyf_notify_setting',
        'alias_name'        => 'cfyf_notify_setting.batch_notify_setting',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BATCH_NOTIFY_SETTING),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_BATCH_NOTIFY_SETTING),
        ],
    ],

    [
        'name'              => '续保续期详情-保单详情',
        'group_alias'       => 'cfyf_pr_policy_renewal_list',
        'alias_name'        => 'cfyf_pr_policy_renewal_list.policy_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_POLICY_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_ONE_POLICY_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRODUCT_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PERSON_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SALES),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_CURRENT_RENEWAL_STAGE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_STAGE),
        ],
    ],
    // ###################### cfyf续保续期管理 start ######################

    // ###################### cfyf商品管理 start ######################
    [
        'name'              => '商品管理-设置产品上下架状态',
        'group_alias'       => 'cfyf_goods_up_and_down_the_shelf',
        'alias_name'        => 'cfyf_goods_up_and_down_the_shelf.set_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_SET_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_SET_STATUS),
        ],
    ],
    [
        'name'              => '商品管理-批量上下架',
        'group_alias'       => 'cfyf_goods_up_and_down_the_shelf',
        'alias_name'        => 'cfyf_goods_up_and_down_the_shelf.batch_set_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_BATCH_SET_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_BATCH_SET_STATUS),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_GET_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_DELETE),
        ],
    ],
    [
        'name'              => '商品管理-商品上下架日志',
        'group_alias'       => 'cfyf_goods_up_and_down_the_shelf',
        'alias_name'        => 'cfyf_goods_up_and_down_the_shelf.company_product_operation_logs',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_PRODUCT_OPERATION_LOG),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_PRODUCT_OPERATION_LOG),
        ],
    ],
    [
        'name'              => '商品管理-产品列表',
        'group_alias'       => 'cfyf_goods_up_and_down_the_shelf',
        'alias_name'        => 'cfyf_goods_up_and_down_the_shelf.company_products',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_COMPANY_PRODUCTS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_COMPANY_PRODUCTS),
        ],
    ],
    // ###################### cfyf商品管理 start ######################

    // ###################### cfyf数据统计 start ######################
    [
        'name'              => '业绩统计菜单栏目',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.achievement_menu',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_ACHIEVEMENT_MENU),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_ACHIEVEMENT_MENU),
        ],
    ],
    [
        'name'              => '个人业绩排行展示',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.personal_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_PERSONAL_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_PERSONAL_RANK),
        ],
    ],
    [
        'name'              => '导出个人业绩排行',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.export_personal_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_PERSONAL_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_PERSONAL_RANK),
        ],
    ],
    [
        'name'              => 'B端公司业绩排行展示',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.sales_company_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_SALES_COMPANY_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_SALES_COMPANY_RANK),
        ],
    ],
    [
        'name'              => '导出B端公司业绩排行',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.export_sales_company_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_SALES_COMPANY_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_SALES_COMPANY_RANK),
        ],
    ],
    [
        'name'              => '产品种类统计展示',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.insurance_class_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_INSURANCE_CLASS_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_INSURANCE_CLASS_RANK),
        ],
    ],
    [
        'name'              => '导出产品种类统计',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.export_insurance_class_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_INSURANCE_CLASS_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_INSURANCE_CLASS_RANK),
        ],
    ],
    [
        'name'              => '保险产品统计展示',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.product_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_PRODUCT_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_PRODUCT_RANK),
        ],
    ],
    [
        'name'              => '导出保险产品统计',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.export_product_rank',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_PRODUCT_RANK),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_PRODUCT_RANK),
        ],
    ],
    [
        'name'              => '月度统计展示',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.monthly_statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_MONTHLY_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_MONTHLY_STATISTICS),
        ],
    ],
    [
        'name'              => '导出月度统计',
        'group_alias'       => 'cfyf_policy_statistics',
        'alias_name'        => 'cfyf_policy_statistics.export_monthly_statistics',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_MONTHLY_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_MONTHLY_STATISTICS),
        ],
    ],
    [
        'name'              => '产品转发统计',
        'group_alias'       => 'cfyf_transmit_statistics',
        'alias_name'        => 'cfyf_transmit_statistics.product_transmit',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_STATISTICS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_STATISTICS),
        ],
    ],
    // ###################### cfyf数据统计 end #######################

    // ###################### cfyf人核列表 start #######################
    [
        'name'      => '人核订单列表',
        'group_alias'       => 'cfyf_mw_list',
        'alias_name'        => 'cfyf_mw_list.get_page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_GET_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_GET_PAGE_LIST),
        ],
    ],

    [
        'name'      => '复制人核链接',
        'group_alias'       => 'cfyf_mw_list',
        'alias_name'        => 'cfyf_mw_list.get_copy_mw_url',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_COPY_MW_URL),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_COPY_MW_URL),
        ],
    ],

    [
        'name'              => '人核单详情',
        'group_alias'       => 'cfyf_mw_list_detail',
        'alias_name'        => 'cfyf_mw_list_detail.get_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL_ORDER_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_BASE_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_TRACK_LOG),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_GET_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_GET_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_GET_GROUP_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_GET_GROUP_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_FILE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_CONCLUSION_INFO),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_DETAIL_FILE_LIST_DOWNLOAD_ZIP),
        ],
    ],
    [
        'name'      => '导出人核列表',
        'group_alias'       => 'cfyf_mw_list',
        'alias_name'        => 'cfyf_mw_list.export_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_EXPORT),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MW_EXPORT),
        ],
    ],

    // ###################### cfyf人核列表 end #######################

    // ###################### 创富云服预核保进度 START ######################
    [
        'name'              => '预核保进度入口',
        'group_alias'       => 'cfyf_pre_uw_schedule_entrance',
        'alias_name'        => 'cfyf_pre_uw_schedule_entrance.entrance',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ORDER_PR_PRE_UW_SCHEDULE_ENTRANCE),
        ],
        'proxy_route_name'  => [
        ]
    ],
    // 预核保进度列表
    [
        'name'              => '预核保进度列表',
        'group_alias'       => 'cfyf_pre_uw_schedule_entrance',
        'alias_name'        => 'cfyf_pre_uw_schedule_list.page-list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ORDER_PRE_UW_SCHEDULE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ORDER_PRE_UW_SCHEDULE_PAGE_LIST),
        ],
    ],
    // 预核保进度详情
    [
        'name'              => '预核保进度详情',
        'group_alias'       => 'cfyf_pre_uw_schedule_entrance',
        'alias_name'        => 'cfyf_pre_uw_schedule_list.detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ORDER_PRE_UW_SCHEDULE_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_ORDER_PRE_UW_SCHEDULE_DETAIL),
        ],
    ],
    // ###################### 创富云服预核保进度 END ######################

    // ###################### 创富云服订单详情保全 start ######################
//    [
//        'name'              => '订单详情-保全信息',
//        'group_alias'       => 'cfyf_policy_preservation_entrance',
//        'alias_name'        => 'cfyf_policy_preservation_entrance.policy_preservation_log',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_LOG),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_LOG),
//        ],
//    ],
//
//    [
//        'name'              => '订单详情-查看保全',
//        'group_alias'       => 'cfyf_policy_preservation_entrance',
//        'alias_name'        => 'cfyf_policy_preservation_entrance.policy_preservation_detail',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_DETAIL),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_DETAIL),
//        ],
//    ],
//
//    [
//        'name'              => '订单详情-查看保全-获取电子保单链接',
//        'group_alias'       => 'cfyf_policy_preservation_entrance',
//        'alias_name'        => 'cfyf_policy_preservation_entrance.pr_policy_preservation_detail_policy_file_link',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK),
//        ],
//    ],
//    // ###################### 创富云服订单详情保全 end ######################
//
//    // ###################### 创富云服保单保全 START ######################
//    [
//        'name'              => '保单保全入口',
//        'group_alias'       => 'cfyf_policy_preservation_entrance',
//        'alias_name'        => 'cfyf_policy_preservation_entrance.entrance',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_ENTRANCE),
//        ],
//        'proxy_route_name'  => [
//        ]
//    ],
//    // 保全申请分页列表
//    [
//        'name'              => '保全申请分页列表',
//        'group_alias'       => 'cfyf_policy_preservation_entrance',
//        'alias_name'        => 'cfyf_policy_preservation_entrance.apply-page-list',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_APPLY_PAGE_LIST),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_APPLY_PAGE_LIST),
//        ],
//    ],
//    // 保全详情
//    [
//        'name'              => '保全详情',
//        'group_alias'       => 'cfyf_policy_preservation_entrance',
//        'alias_name'        => 'cfyf_policy_preservation_entrance.detail',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_DETAIL),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_DETAIL),
//        ],
//    ],
//    // 保全详情-获取电子保单链接
//    [
//        'name'              => '保全详情-获取电子保单链接',
//        'group_alias'       => 'cfyf_policy_preservation_entrance',
//        'alias_name'        => 'cfyf_policy_preservation_entrance.detail-policy-file-link',
//        'is_init'           => YesOrNo::YES,
//        'client_route_name' => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK),
//        ],
//        'proxy_route_name'  => [
//            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK),
//        ],
//    ],
    // ###################### 创富云服保单保全 END ######################

    // ###################### 创富云服费率管理 START #######################

    [
        'name'      => '服务费方案列表',
        'group_alias'       => 'product_fee_scheme_management',
        'alias_name'        => 'product_fee_scheme_management.product_fee_scheme_page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_SCHEME_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_SCHEME_PAGE_LIST),
        ],
    ],
    [
        'name'      => '设置服务费方案',
        'group_alias'       => 'product_fee_scheme_management',
        'alias_name'        => 'product_fee_scheme_management.create_product_fee_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_SETTING_PRODUCT_FEE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_SETTING_PRODUCT_FEE_SCHEME),
        ],
    ],
    [
        'name'      => '编辑服务费方案',
        'group_alias'       => 'product_fee_scheme_management',
        'alias_name'        => 'product_fee_scheme_management.edit_product_fee_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_EDIT_PRODUCT_FEE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_EDIT_PRODUCT_FEE_SCHEME),
        ],
    ],
    [
        'name'      => '复制服务费方案',
        'group_alias'       => 'product_fee_scheme_management',
        'alias_name'        => 'product_fee_scheme_management.copy_product_fee_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_COPY_PRODUCT_FEE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_COPY_PRODUCT_FEE_SCHEME),
        ],
    ],
    [
        'name'      => '删除服务费方案',
        'group_alias'       => 'product_fee_scheme_management',
        'alias_name'        => 'product_fee_scheme_management.delete_product_fee_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_DELETE_PRODUCT_FEE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_DELETE_PRODUCT_FEE_SCHEME),
        ],
    ],
    [
        'name'      => '查看服务费方案',
        'group_alias'       => 'product_fee_scheme_management',
        'alias_name'        => 'product_fee_scheme_management.product_fee_scheme_detail',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_SCHEME_DETAIL),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_SCHEME_DETAIL),
        ],
    ],
    [
        'name'      => '批量延长服务费方案',
        'group_alias'       => 'product_fee_scheme_management',
        'alias_name'        => 'product_fee_scheme_management.batch_delay_product_fee_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_BATCH_DELAY_SCHEME_EFFECT_DATE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_BATCH_DELAY_SCHEME_EFFECT_DATE),
        ],
    ],

    // 服务费模板
    [
        'name'      => '批量应用服务费模板',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.batch_setting_tpl_product_fee_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_BATCH_SETTING_PRODUCT_FEE_SCHEME_TASK),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_BATCH_SETTING_PRODUCT_FEE_SCHEME_TASK),
        ],
    ],
    [
        'name'      => '修改服务费模板名称',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.modify_template_name',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_MODIFY_TEMPLATE_NAME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_MODIFY_TEMPLATE_NAME),
        ],
    ],
    [
        'name'      => '新增服务费模板',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.create_product_fee_template',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_CREATE_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_CREATE_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
    ],
    [
        'name'      => '编辑服务费模板',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.edit_product_fee_template',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_EDIT_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_EDIT_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
    ],

    [
        'name'              => '删除服务费模板',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.del_product_fee_template',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_DEL_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_DEL_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
    ],

    [
        'name'      => '复制服务费模板',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.copy_product_fee_template',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_COPY_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_COPY_PRODUCT_FEE_SCHEME_TEMPLATE),
        ],
    ],
    [
        'name'      => '查看服务费模板',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.product_fee_template_detail',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_PRODUCT_FEE_SCHEME_TEMPLATE_DETAIL),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_PRODUCT_FEE_SCHEME_TEMPLATE_DETAIL),
        ],
    ],
    [
        'name'      => '应用服务费模板',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.setting_tpl_product_fee_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_SETTING_PRODUCT_FEE_SCHEME_TASK),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_SETTING_PRODUCT_FEE_SCHEME_TASK),
        ],
    ],
    [
        'name'      => '服务费模板列表',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.tpl_product_fee_scheme_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_PAGE_LIST),
        ],
    ],

    [
        'name'      => '应用模板记录列表',
        'group_alias'       => 'tpl_product_fee_scheme_management',
        'alias_name'        => 'tpl_product_fee_scheme_management.setting_product_fee_scheme_log',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_SCHEME_BING_LOG_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_SCHEME_BING_LOG_LIST),
        ],
    ],

    // ###################### 创富云服费率管理 END #######################

    // ###################### 创富云服产品考核政策 START #######################

    [
        'name'      => '新增组合规则',
        'group_alias'       => 'combine_product',
        'alias_name'        => 'combine_product.create_combine_product',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT),
        ],
    ],
    [
        'name'      => '新增单品规则',
        'group_alias'       => 'combine_product',
        'alias_name'        => 'combine_product.create_single_combine_product',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_SINGLE_COMBINE_PRODUCT),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_SINGLE_COMBINE_PRODUCT),
        ],
    ],
    [
        'name'      => '编辑产品规则',
        'group_alias'       => 'combine_product',
        'alias_name'        => 'combine_product.edit_combine_product',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_SINGLE_COMBINE_PRODUCT),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_SINGLE_COMBINE_PRODUCT),
        ],
    ],
    [
        'name'      => '组合产品列表',
        'group_alias'       => 'combine_product',
        'alias_name'        => 'combine_product.combine_product_page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_PAGE_LIST),
        ],
    ],
    [
        'name'      => '组合产品详情',
        'group_alias'       => 'combine_product',
        'alias_name'        => 'combine_product.combine_product_detail',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_DETAIL),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_DETAIL),
        ],
    ],
    [
        'name'      => '新增考核政策',
        'group_alias'       => 'combine_product_rate_scheme',
        'alias_name'        => 'combine_product_rate_scheme.create_combine_product_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '编辑考核政策',
        'group_alias'       => 'combine_product_rate_scheme',
        'alias_name'        => 'combine_product_rate_scheme.edit_combine_product_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '查看考核政策详情',
        'group_alias'       => 'combine_product_rate_scheme',
        'alias_name'        => 'combine_product_rate_scheme.combine_product_rate_scheme_detail',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_RATE_SCHEME_DETAIL),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_RATE_SCHEME_DETAIL),
        ],
    ],
    [
        'name'      => '删除考核政策',
        'group_alias'       => 'combine_product_rate_scheme',
        'alias_name'        => 'combine_product_rate_scheme.delete_combine_product_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DELETE_COMBINE_PRODUCT_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DELETE_COMBINE_PRODUCT_RATE_SCHEME),
        ],
    ],

    [
        'name'      => '复制考核政策',
        'group_alias'       => 'combine_product_rate_scheme',
        'alias_name'        => 'combine_product_rate_scheme.copy_combine_product_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COPY_COMBINE_PRODUCT_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COPY_COMBINE_PRODUCT_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '考核政策列表',
        'group_alias'       => 'combine_product_rate_scheme',
        'alias_name'        => 'combine_product_rate_scheme.combine_product_rate_scheme_page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_RATE_SCHEME_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_RATE_SCHEME_PAGE_LIST),
        ],
    ],
    [
        'name'      => '编辑默认考核政策模板',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.edit_default_template',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_DEFAULT_RATE_SCHEME_TEMPLATE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_DEFAULT_RATE_SCHEME_TEMPLATE),
        ],
    ],
    [
        'name'      => '新增考核政策模板',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.create_tpl_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_TPL_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_TPL_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '编辑考核政策模板',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.edit_tpl_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_TPL_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_TPL_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '查看考核政策模板',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.tpl_rate_scheme_detail',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_TPL_RATE_SCHEME_DETAIL),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_TPL_RATE_SCHEME_DETAIL),
        ],
    ],
    [
        'name'      => '删除考核政策模板',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.del_tpl_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DEL_COMBINE_PRODUCT_TPL_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DEL_COMBINE_PRODUCT_TPL_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '考核政策模板列表',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.tpl_rate_scheme_page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_TPL_RATE_SCHEME_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_TPL_RATE_SCHEME_PAGE_LIST),
        ],
    ],
    [
        'name'      => '批量应用模板',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.batch_apply_tpl_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_BATCH_APPLY_COMBINE_PRODUCT_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_BATCH_APPLY_COMBINE_PRODUCT_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '应用模板',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.apply_tpl_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_APPLY_COMBINE_PRODUCT_RATE_SCHEME),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_APPLY_COMBINE_PRODUCT_RATE_SCHEME),
        ],
    ],
    [
        'name'      => '批量设置',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.batch_create_tpl_rate_scheme',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_BATCH_CREATE_COMBINE_PRODUCT_TPL_RATE_SCHEME_TASK),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_BATCH_CREATE_COMBINE_PRODUCT_TPL_RATE_SCHEME_TASK),
        ],
    ],
    [
        'name'      => '新增组合产品分组',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.create_combine_product_group',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_GROUP),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_GROUP),
        ],
    ],
    [
        'name'      => '编辑组合产品分组',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.edit_combine_product_group',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_GROUP),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_GROUP),
        ],
    ],
    [
        'name'      => '删除组合产品分组',
        'group_alias'       => 'combine_product_rate_scheme_template',
        'alias_name'        => 'combine_product_rate_scheme_template.delete_combine_product_group',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DELETE_COMBINE_PRODUCT_GROUP),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DELETE_COMBINE_PRODUCT_GROUP),
        ],
    ],


    // ###################### 创富云服产品考核政策 END #######################

    // ###################### 创富云服续期统计管理 START #######################
    [
        'name'      => '继续率管理列表',
        'group_alias'       => 'stage_situation',
        'alias_name'        => 'stage_situation.page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_STAGE_SITUATION_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_STAGE_SITUATION_PAGE_LIST),
        ],
    ],
    [
        'name'      => '导出继续率列表',
        'group_alias'       => 'stage_situation',
        'alias_name'        => 'stage_situation.export_page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EXPORT_STAGE_SITUATION_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EXPORT_STAGE_SITUATION_LIST),
        ],
    ],
    [
        'name'      => '调整继续率',
        'group_alias'       => 'stage_situation',
        'alias_name'        => 'stage_situation.edit_stage_situation',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EDIT_STAGE_SITUATION),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EDIT_STAGE_SITUATION),
        ],
    ],
    [
        'name'      => '查看续期数据',
        'group_alias'       => 'stage_situation',
        'alias_name'        => 'stage_situation.renewal_stage_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_RENEWAL_STAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_RENEWAL_STAGE_LIST),
        ],
    ],
    [
        'name'      => '导出续期数据',
        'group_alias'       => 'stage_situation',
        'alias_name'        => 'stage_situation.export_renewal_stage_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EXPORT_RENEWAL_STAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EXPORT_RENEWAL_STAGE_LIST),
        ],
    ],
    [
        'name'      => '重算继续率',
        'group_alias'       => 'stage_situation',
        'alias_name'        => 'stage_situation.recalculate_stage_situation',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_RECALCULATE_STAGE_SITUATION),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_RECALCULATE_STAGE_SITUATION),
        ],
    ],
    [
        'name'      => '按照时间区间重算继续率',
        'group_alias'       => 'stage_situation',
        'alias_name'        => 'stage_situation.batch_recalculate_stage_situation',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_BATCH_RECALCULATE_STAGE_SITUATION),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_BATCH_RECALCULATE_STAGE_SITUATION),
        ],
    ],

    [
        'name'      => '重算任务列表',
        'group_alias'       => 'stage_situation_calculate_task',
        'alias_name'        => 'stage_situation_calculate_task.page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_STAGE_SITUATION_CALCULATE_TASK_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_STAGE_SITUATION_CALCULATE_TASK_PAGE_LIST),
        ],
    ],
    // ###################### 创富云服续期统计管理 END #######################

    // ###################### 创富云服结算管理 START #######################

    [
        'name'      => '结算明细列表',
        'group_alias'       => 'company_settle',
        'alias_name'        => 'company_settle.page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_PAGE_LIST),
        ],
    ],
    [
        'name'      => '结算明细详情',
        'group_alias'       => 'company_settle',
        'alias_name'        => 'company_settle.detail',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_DETAIL),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_DETAIL),
        ],
    ],
    [
        'name'      => '重算结算明细',
        'group_alias'       => 'company_settle',
        'alias_name'        => 'company_settle.recalculate_company_settle',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_RECALCULATE_COMPANY_SETTLE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_RECALCULATE_COMPANY_SETTLE),
        ],
    ],
    [
        'name'      => '按照时间区间重算结算明细',
        'group_alias'       => 'company_settle',
        'alias_name'        => 'company_settle.batch_recalculate_company_settle',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_BATCH_RECALCULATE_COMPANY_SETTLE),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_BATCH_RECALCULATE_COMPANY_SETTLE),
        ],
    ],
    [
        'name'      => '下载清单',
        'group_alias'       => 'company_settle',
        'alias_name'        => 'company_settle.download_fee_product_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_DOWNLOAD_FEE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_DOWNLOAD_FEE_PRODUCT_PAGE_LIST),
        ],
    ],
    [
        'name'      => '重算任务明细',
        'group_alias'       => 'company_settle_calculate_task',
        'alias_name'        => 'company_settle_calculate_task.page_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_CALCULATE_TASK_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_CALCULATE_TASK_LIST),
        ],
    ],
    [
        'name'      => '重算任务失败原因',
        'group_alias'       => 'company_settle_calculate_task',
        'alias_name'        => 'company_settle_calculate_task.task_fail_reason',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_CALCULATE_FAIL_REASON),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_CALCULATE_FAIL_REASON),
        ],
    ],
    [
        'name'      => '导出任务失败原因',
        'group_alias'       => 'company_settle_calculate_task',
        'alias_name'        => 'company_settle_calculate_task.export_task_fail_reason',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_COMPANY_SETTLE_CALCULATE_FAIL_REASON),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_COMPANY_SETTLE_CALCULATE_FAIL_REASON),
        ],
    ],
    [
        'name'      => '结算清单',
        'group_alias'       => 'fee_product_management',
        'alias_name'        => 'fee_product_management.fee_product_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_FEE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_FEE_PRODUCT_PAGE_LIST),
        ],
    ],
    [
        'name'      => '导出结算清单',
        'group_alias'       => 'fee_product_management',
        'alias_name'        => 'fee_product_management.export_fee_product_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_FEE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_FEE_PRODUCT_PAGE_LIST),
        ],
    ],
    [
        'name'      => '失败清单',
        'group_alias'       => 'fee_product_management',
        'alias_name'        => 'fee_product_management.fail_fee_product_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_FAIL_FEE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_FAIL_FEE_PRODUCT_PAGE_LIST),
        ],
    ],
    [
        'name'      => '导出失败清单',
        'group_alias'       => 'fee_product_management',
        'alias_name'        => 'fee_product_management.export_fail_fee_product_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_FAIL_FEE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_FAIL_FEE_PRODUCT_PAGE_LIST),
        ],
    ],
    [
        'name'      => '待结算清单',
        'group_alias'       => 'fee_product_management',
        'alias_name'        => 'fee_product_management.pending_fee_product_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_PENDING_FEE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_PENDING_FEE_PRODUCT_PAGE_LIST),
        ],
    ],
    [
        'name'      => '导出待结算清单',
        'group_alias'       => 'fee_product_management',
        'alias_name'        => 'fee_product_management.export_pending_fee_product_list',
        'is_init'           => YesOrNo::YES,
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_PENDING_FEE_PRODUCT_PAGE_LIST),
        ],
        'client_route_name'    => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_PENDING_FEE_PRODUCT_PAGE_LIST),
        ],
    ],

    // ###################### 创富云服结算管理 END #############################
    // ###################### 朋友圈管理 START ##############################
    [
        'name'              => '内容分类列表',
        'group_alias'       => 'friend_circle_category',
        'alias_name'        => 'friend_circle_category.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增分类',
        'group_alias'       => 'friend_circle_category',
        'alias_name'        => 'friend_circle_category.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_STORE),
        ],
    ],
    [
        'name'              => '编辑分类',
        'group_alias'       => 'friend_circle_category',
        'alias_name'        => 'friend_circle_category.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_DETAIL),
        ],
    ],
    [
        'name'              => '删除分类',
        'group_alias'       => 'friend_circle_category',
        'alias_name'        => 'friend_circle_category.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_DELETE),
        ],
    ],
    [
        'name'              => '切换分类状态',
        'group_alias'       => 'friend_circle_category',
        'alias_name'        => 'friend_circle_category.toggle_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_TOGGLE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_TOGGLE_STATUS),
        ],
    ],

    [
        'name'              => '海报分类列表',
        'group_alias'       => 'friend_circle_poster_category',
        'alias_name'        => 'friend_circle_poster_category.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_PAGE_LIST),
        ],
    ],
    [
        'name'              => '新增分类',
        'group_alias'       => 'friend_circle_poster_category',
        'alias_name'        => 'friend_circle_poster_category.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_STORE),
        ],
    ],
    [
        'name'              => '编辑分类',
        'group_alias'       => 'friend_circle_poster_category',
        'alias_name'        => 'friend_circle_poster_category.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_DETAIL),
        ],
    ],
    [
        'name'              => '删除分类',
        'group_alias'       => 'friend_circle_poster_category',
        'alias_name'        => 'friend_circle_poster_category.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_DELETE),
        ],
    ],
    [
        'name'              => '切换分类状态',
        'group_alias'       => 'friend_circle_poster_category',
        'alias_name'        => 'friend_circle_poster_category.toggle_status',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_TOGGLE_STATUS),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_TOGGLE_STATUS),
        ],
    ],

    [
        'name'              => '朋友圈内容列表',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_PAGE_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_SHOW),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_TOP),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_PREVIEW),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_COPY),
        ],
    ],
    [
        'name'              => '新增朋友圈内容',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_STORE),
        ],
    ],
    [
        'name'              => '编辑朋友圈内容',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_DETAIL),
        ],
    ],
    [
        'name'              => '删除朋友圈内容',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_DELETE),
        ],
    ],

    [
        'name'              => '切换内容置顶状态',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.toggle_is_top',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_TOP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_TOP),
        ],
    ],
    [
        'name'              => '切换内容显示状态',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.toggle_is_show',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_SHOW),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_SHOW),
        ],
    ],

    [
        'name'              => '内容复制',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.copy',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_COPY),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_COPY),
        ],
    ],

    [
        'name'              => '内容预览',
        'group_alias'       => 'friend_circle',
        'alias_name'        => 'friend_circle.preview',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_PREVIEW),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_DETAIL),
        ],
    ],
    [
        'name'              => '朋友圈海报',
        'group_alias'       => 'friend_circle_poster',
        'alias_name'        => 'friend_circle_poster.page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_PAGE_LIST),
        ],
    ],
    [
        'name'              => '海报新增',
        'group_alias'       => 'friend_circle_poster',
        'alias_name'        => 'friend_circle_poster.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_STORE),
        ],
    ],
    [
        'name'              => '海报编辑',
        'group_alias'       => 'friend_circle_poster',
        'alias_name'        => 'friend_circle_poster.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_UPDATE),
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_DETAIL),
        ],
    ],
    [
        'name'              => '删除海报',
        'group_alias'       => 'friend_circle_poster',
        'alias_name'        => 'friend_circle_poster.delete',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_DELETE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_DELETE),
        ],
    ],
    [
        'name'              => '切换推荐状态',
        'group_alias'       => 'friend_circle_poster',
        'alias_name'        => 'friend_circle_poster.toggle_is_recommend',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_RECOMMEND),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_RECOMMEND),
        ],
    ],
    [
        'name'              => '切换显示状态',
        'group_alias'       => 'friend_circle_poster',
        'alias_name'        => 'friend_circle_poster.toggle_is_show',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_SHOW),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_SHOW),
        ],
    ],
    [
        'name'              => '切换置顶状态',
        'group_alias'       => 'friend_circle_poster',
        'alias_name'        => 'friend_circle_poster.toggle_is_top',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_TOP),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_TOP),
        ],
    ],
    // ###################### 朋友圈管理 END ##############################

    // ###################### 创富云服 - 用户管理-黑名单 START   ####################
    [
        'name'              => '新增黑名单',
        'group_alias'       => 'cfyf_user_management_blacklist',
        'alias_name'        => 'cfyf_user_management_blacklist.store',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_STORE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_STORE),
        ],
    ],

    [
        'name'              => '编辑黑名单',
        'group_alias'       => 'cfyf_user_management_blacklist',
        'alias_name'        => 'cfyf_user_management_blacklist.update',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_UPDATE),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_UPDATE),
        ],
    ],

    [
        'name'              => '黑名单列表',
        'group_alias'       => 'cfyf_user_management_blacklist',
        'alias_name'        => 'cfyf_user_management_blacklist.get_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_PAGE_LIST),
        ],
    ],

    [
        'name'              => '告警一键已读',
        'group_alias'       => 'cfyf_user_management_blacklist',
        'alias_name'        => 'cfyf_user_management_blacklist.update_warning_record_read',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_UPDATE_WARNING_RECORD_READ),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_UPDATE_WARNING_RECORD_READ),
        ],
    ],

    [
        'name'              => '导入黑名单文件',
        'group_alias'       => 'cfyf_user_management_blacklist',
        'alias_name'        => 'cfyf_user_management_blacklist.import_file_black_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_IMPORT_FILE_BLACK_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_IMPORT_FILE_BLACK_LIST),
        ],
    ],

    [
        'name'              => '告警列表',
        'group_alias'       => 'cfyf_user_management_blacklist',
        'alias_name'        => 'cfyf_user_management_blacklist.get_warning_record_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_WARNING_RECORD_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_WARNING_RECORD_PAGE_LIST),
        ],
    ],

    [
        'name'              => '全局告警弹窗信息',
        'group_alias'       => 'cfyf_user_management_blacklist',
        'alias_name'        => 'cfyf_user_management_blacklist.get_warning_popup_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_WARNING_POPUP_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_WARNING_POPUP_LIST),
        ],
    ],

    [
        'name'              => '撰写邮件',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.mail_send_all',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_ALL),

        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_ALL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_LIST),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_COMMON_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_ATTACHED_CREATE),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_CONTENT_AND_ATTACHED_CREATE),

        ],
    ],

    [
        'name'              => '草稿箱分页列表',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.draft_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_PAGE_LIST),
        ],
    ],

    [
        'name'              => '草稿箱删除',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.draft_del',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_DEL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_DEL),
        ],
    ],

    [
        'name'              => '草稿箱编辑',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.draft_detail',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_DETAIL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_DETAIL),
        ],
    ],

    [
        'name'              => '邮件列表-已发送',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.mail_send_already_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_ALREADY_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_ALREADY_PAGE_LIST),
        ],
    ],

    [
        'name'              => '邮件列表-重新发送',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.mail_resend',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_RESEND),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_RESEND),
        ],
    ],

    [
        'name'              => '邮件列表-定时发送',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.mail_send_pending_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_PENDING_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_DETAIL),
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_PENDING_PAGE_LIST),
        ],
    ],

    [
        'name'              => '邮件列表-取消邮件',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.mail_send_del',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MAIL_SEND_DEL),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_MAIL_SEND_DEL),
        ],
    ],

    [
        'name'              => '邮件操作日志列表',
        'group_alias'       => 'cfyf_send_mail',
        'alias_name'        => 'cfyf_send_mail.operation_log_page_list',
        'is_init'           => YesOrNo::YES,
        'client_route_name' => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_OPERATION_LOG_PAGE_LIST),
        ],
        'proxy_route_name'  => [
            get_route_real_name(WebRoute::MANAGEMENT_CFYF_SERVICE_OPERATION_LOG_PAGE_LIST),
        ],
    ],

    // ###################### 创富云服 - 用户管理-黑名单 EDN   ####################
];

return array_merge(
    $permissionArr,
    // 批量上下架相关权限
    require(__DIR__ . '/groups/pr_product_updown_permission.php'),
    // 上游对账相关权限
    require(__DIR__ . '/groups/prc_upstream_reconciliation.php'),
    // 单录相关权限
    require(__DIR__ . '/groups/single_recording.php'),
    // 1818商城权限
    require(__DIR__ . '/groups/pr_product_shop.php'),
);
