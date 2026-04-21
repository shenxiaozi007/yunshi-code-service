<?php

//[
//    'name'       => '管理员',
//    'alias_name' => 'insurance_health',
//    'sort'       => 100,
//    'child'      => [],
//],

return [
    /** 主页 **/
    [
        'name'       => '主页',
        'alias_name' => 'home_page',
        'sort'       => 100,
        'child'      => [
            // 个人报表中心
            [
                'name'       => '个人报表中心',
                'alias_name' => 'download_center',
                'sort'       => 100,
                'child'      => [],
            ],
        ],
    ],
    /**
     * 系统管理
     */
    [
        'name'       => '系统管理',
        'alias_name' => 'user_management',
        'sort'       => 110,
        'child'      => [
            // 成员列表
            [
                'name'       => '成员列表',
                'alias_name' => 'manager_members',
                'sort'       => 101,
                'child'      => [],
            ],

            // 角色列表
            [
                'name'       => '角色列表',
                'alias_name' => 'manager_rbac',
                'sort'       => 102,
                'child'      => [],
            ],

            // 核心系统操作日志
            [
                'name'       => '核心系统操作日志',
                'alias_name' => 'core_system_operation_log',
                'sort'       => 103,
                'child'      => [],
            ],

            // CRM系统操作日志
            [
                'name'       => 'CRM系统操作日志',
                'alias_name' => 'core_crm_operation_log',
                'sort'       => 104,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 公司管理
     */
    [
        'name'       => '公司管理',
        'alias_name' => 'company_management',
        'sort'       => 105,
        'child'      => [
            // 本部公司管理
            [
                'name'       => '本部公司管理',
                'alias_name' => 'headquarters_company',
                'sort'       => 103,
                'child'      => [
                    // 部门列表
                    [
                        'name'       => '部门列表',
                        'alias_name' => 'headquarters_company_department_list',
                        'sort'       => 101,
                        'child'      => [],
                    ],

                    // CRM角色列表
                    [
                        'name'       => 'CRM角色列表',
                        'alias_name' => 'crm_role',
                        'sort'       => 102,
                        'child'      => [],
                    ],

                    // 员工列表
                    [
                        'name'       => '员工列表',
                        'alias_name' => 'crm_user',
                        'sort'       => 103,
                        'child'      => [],
                    ],

                    // 职位列表
                    [
                        'name'       => '职位列表',
                        'alias_name' => 'crm_position',
                        'sort'       => 109,
                        'child'      => [],
                    ],
                ],
            ],
        ],
    ]
];
