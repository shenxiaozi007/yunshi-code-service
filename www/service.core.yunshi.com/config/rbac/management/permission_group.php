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

    [
        'name'       => '标签分类管理',
        'alias_name' => 'label_management',
        'sort'       => 101,
        'child'      => [
            // 保险分类
            [
                'name'       => '产品分类',
                'alias_name' => 'pr_product_common_category_list',
                'sort'       => 101,
                'child'      => [],
            ],
            // 官网分类
            [
                'name'       => '官网分类',
                'alias_name' => 'pr_ws_category_list',
                'sort'       => 101,
                'child'      => [],
            ],
        ],
    ],

    /** 客户管理 **/
    [
        'name'       => '客户管理',
        'alias_name' => 'customer_management',
        'sort'       => 101,
        'child'      => [
            // 挂号客户
            [
                'name'       => '全部客户',
                'alias_name' => 'all_customer_list',
                'sort'       => 100,
                'child'      => [],
            ],

            // 互动客户
            [
                'name'       => '互动客户',
                'alias_name' => 'im_all_customer_list',
                'sort'       => 101,
                'child'      => [],
            ],

            // 投保客户
            [
                'name'       => '投保客户',
                'alias_name' => 'insure_all_customer_list',
                'sort'       => 102,
                'child'      => [],
            ]
        ],
    ],

    /**
     * 订单管理
     */
    [
        'name'       => '订单管理',
        'alias_name' => 'order_management',
        'sort'       => 102,
        'child'      => [
            // 订单列表
            [
                'name'       => '订单列表(旧)',
                'alias_name' => 'order_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 订单列表
            [
                'name'       => '订单列表',
                'alias_name' => 'pr_order_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 人工核保
            [
                'name'       => '人核单',
                'alias_name' => 'pr_mw_list',
                'sort'       => 101,
                'child'      => [],
            ],
            // 修正审批
            [
                'name'       => '修正审批',
                'alias_name' => 'modify_policy_verify',
                'sort'       => 102,
                'child'      => [],
            ],
            // 修正审批
            [
                'name'       => '批量修正审批',
                'alias_name' => 'multi_modify_policy_verify',
                'sort'       => 103,
                'child'      => [
                    // 批量修正
                    [
                        'name'       => '批量修正',
                        'alias_name' => 'multi_modify_policy',
                        'sort'       => 100,
                        'child'      => [],
                    ],
                    // 修正上传记录
                    [
                        'name'       => '修正上传记录',
                        'alias_name' => 'multi_modify_apply_log',
                        'sort'       => 101,
                        'child'      => [],
                    ],
                ],
            ],
            // 未关联产品
            [
                'name'       => '未关联产品',
                'alias_name' => 'policy_unbind_product',
                'sort'       => 104,
                'child'      => [],
            ],
            // 预核保进度
            [
                'name'       => '预核保进度',
                'alias_name' => 'pr_pre_uw_schedule_entrance',
                'sort'       => 104,
                'child'      => [],
            ],
            // 保全审批
            [
                'name'       => '保全审批',
                'alias_name' => 'pr_policy_preservation_verify',
                'sort'       => 105,
                'child'      => [],
            ],
            // 客户单录确权
            [
                'name'       => '客户单录确权',
                'alias_name' => 'single_recording',
                'sort'       => 105,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 产品管理
     */
    [
        'name'       => '产品管理',
        'alias_name' => 'product_management',
        'sort'       => 103,
        'child'      => [
            // 产品列表(新)
            [
                'name'       => '产品列表',
                'alias_name' => 'pr_product_list',
                'sort'       => 100,
                'child'      => [
                    [
                        'name'       => '产品计划',
                        'alias_name' => 'pr_product_plan',
                        'sort'       => 99,
                        'child'      => [],
                    ],
                    [
                        'name'       => '产品计划-数据同步',
                        'alias_name' => 'pr_product_sync_data',
                        'sort'       => 100,
                        'child'      => [],
                    ],
                    [
                        'name'       => '产品计划-展示设置',
                        'alias_name' => 'pr_product_display_setting',
                        'sort'       => 101,
                        'child'      => [],
                    ],
                    [
                        'name'       => '产品计划-试算设置',
                        'alias_name' => 'pr_product_trial_page',
                        'sort'       => 102,
                        'child'      => [],
                    ],
                    [
                        'name'       => '产品计划-折扣系数',
                        'alias_name' => 'product_plan.discount',
                        'sort'       => 103,
                        'child'      => [],
                    ],
                    [
                        'name'       => '助销资料',
                        'alias_name' => 'pr_product_sales_information',
                        'sort'       => 104,
                        'child'      => [],
                    ],
                    [
                        'name'       => '1818保险超市',
                        'alias_name' => 'pr_product_shop',
                        'sort'       => 105,
                    ],
                ],
            ],
            // 产品列表
            [
                'name'       => '产品列表(旧)',
                'alias_name' => 'product_list',
                'sort'       => 100,
                'child'      => [],
            ],
//            // 产品分组列表
//            [
//                'name'       => '产品分组列表',
//                'alias_name' => 'product_group_list',
//                'sort'       => 101,
//                'child'      => [],
//            ],
            // 上下架管理
            [
                'name'       => '上下架管理',
                'alias_name' => 'pr_product_updown',
                'sort'       => 100,
            ],
        ],
    ],

    /**
     * 供应商管理
     */
    [
        'name'       => '供应商管理',
        'alias_name' => 'supplier_management',
        'sort'       => 104,
        'child'      => [
            // 供应商列表
            [
                'name'       => '供应商列表（旧）',
                'alias_name' => 'supplier_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 产品接入供应商列表
            [
                'name'       => '供应商列表',
                'alias_name' => 'pr_supplier_list',
                'sort'       => 101,
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
            // 保险公司列表
            [
                'name'       => '保险公司列表',
                'alias_name' => 'insurance_company',
                'sort'       => 100,
                'child'      => [],
            ],

            // 合作公司列表
            [
                'name'       => '合作公司列表',
                'alias_name' => 'broker_company',
                'sort'       => 101,
                'child'      => [],
            ],

            // 本部公司管理
            [
                'name'       => '本部公司管理',
                'alias_name' => 'headquarters_company',
                'sort'       => 103,
                'child'      => [
                    // 本部公司列表
                    [
                        'name'       => '本部公司列表',
                        'alias_name' => 'headquarters_company_list',
                        'sort'       => 100,
                        'child'      => [],
                    ],

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

                    // 人力薪酬
                    [
                        'name'       => '人力薪酬',
                        'alias_name' => 'finance_crm_salary',
                        'sort'       => 104,
                        'child'      => [],
                    ],

                    // 奖惩记录
                    [
                        'name'       => '奖惩记录',
                        'alias_name' => 'training_disciplinary_list',
                        'sort'       => 105,
                        'child'      => [],
                    ],

                    // 执业登记列表
                    [
                        'name'       => '执业登记列表',
                        'alias_name' => 'headquarters_company_qualification_list',
                        'sort'       => 106,
                        'child'      => [],
                    ],

                    // 执业登记列表
                    [
                        'name'       => '团队管理列表',
                        'alias_name' => 'headquarters_company_team_list',
                        'sort'       => 107,
                        'child'      => [],
                    ],

//                    // 顾问团队管理
//                    [
//                        'name'       => '顾问团队管理列表',
//                        'alias_name' => 'adviser_team_list',
//                        'sort'       => 108,
//                        'child'      => [],
//                    ],

                    // 职位列表
                    [
                        'name'       => '职位列表',
                        'alias_name' => 'crm_position',
                        'sort'       => 109,
                        'child'      => [],
                    ],

                    // 通讯号管理
                    [
                        'name'       => '通讯号管理',
                        'alias_name' => 'crm_communication_manager',
                        'sort'       => 110,
                        'child'      => [
                            [
                                'name'       => '手机号管理',
                                'alias_name' => 'crm_communication_mobile_manager',
                                'sort'       => 100,
                                'child'      => [],
                            ],
                            [
                                'name'       => '微信客服号管理',
                                'alias_name' => 'crm_communication_wx_kf_manager',
                                'sort'       => 101,
                                'child'      => [],
                            ],
                            [
                                'name'       => '客服分配管理',
                                'alias_name' => 'crm_communication_wx_kf_distribute',
                                'sort'       => 102,
                                'child'      => [],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

    /**
     * 培训管理
     */
    [
        'name'       => '规则管理',
        'alias_name' => 'rule_management',
        'sort'       => 105,
        'child'      => [
            [
                'name'       => '核保健告管理',
                'alias_name' => 'nuclear_health_protection',
                'sort'       => 100,
                'child'      => [],
            ],

            [
                'name'       => '投保规则管理',
                'alias_name' => 'insurance_rules_management',
                'sort'       => 101,
                'child'      => [],
            ],

            [
                'name'       => '核保规则管理',
                'alias_name' => 'underwriting_rules_management',
                'sort'       => 102,
                'child'      => [],
            ],

            [
                'name'       => '客服保全管理',
                'alias_name' => 'health_customer_service_management',
                'sort'       => 103,
                'child'      => [],
            ],

            [
                'name'       => '理赔规则管理',
                'alias_name' => 'claim_settlement_management',
                'sort'       => 104,
                'child'      => [],
            ],

            [
                'name'       => '售后指引管理',
                'alias_name' => 'product_sales_guidance_management',
                'sort'       => 105,
                'child'      => [],
            ],
            [
                'name'       => '七大版块产操作',
                'alias_name' => 'nuclear_health_protection_all',
                'sort'       => 106,
                'child'      => [],
            ],
            // 一览表管理
            [
                'name'       => '一览表管理',
                'alias_name' => 'product_evaluation_management',
                'sort'       => 117,
                'child'      => [],
            ],
            [
                'name'       => '资源管理',
                'alias_name' => 'rule_management.resource',
                'sort'       => 118,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 培训管理
     */
    [
        'name'       => '培训管理',
        'alias_name' => 'training_management',
        'sort'       => 106,
        'child'      => [
            // 培训记录
            [
                'name'       => '培训记录',
                'alias_name' => 'training_list',
                'sort'       => 100,
                'child'      => [],
            ],

            // 课程列表
            [
                'name'       => '课程列表',
                'alias_name' => 'training_course_list',
                'sort'       => 101,
                'child'      => [],
            ],

            // 课程分类列表
            [
                'name'       => '课程分类列表',
                'alias_name' => 'training_course_category_list',
                'sort'       => 102,
                'child'      => [],
            ],

        ],
    ],

    /**
     * 客服管理
     */
    [
        'name'       => '客服管理',
        'alias_name' => 'customer_service_management',
        'sort'       => 107,
        'child'      => [
            // 续保续期
            [
                'name'       => '续保续期(旧)',
                'alias_name' => 'renewal_stage_list',
                'sort'       => 100,
                'child'      => [],
            ],

            [
                'name'       => '续保续期',
                'alias_name' => 'pr_renewal_stage_list',
                'sort'       => 101,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 对账结算管理
     */
    [
        'name'       => '对账结算管理',
        'alias_name' => 'finance',
        'sort'       => 108,
        'child'      => [
            // 对账数据管理
            [
                'name'       => '对账数据管理',
                'alias_name' => 'finance_file_data',
                'sort'       => 100,
                'child'      => [],
            ],

            // 结算管理
            [
                'name'       => '结算管理',
                'alias_name' => 'settle_data',
                'sort'       => 101,
                'child'      => [],
            ],

            // 手续费归档
            [
                'name'       => '手续费归档',
                'alias_name' => 'rec_policy',
                'sort'       => 102,
                'child'      => [],
            ],
            // 云服账单管理
            [
                'name'       => '云服账单管理',
                'alias_name' => 'cfyf_bill_data',
                'sort'       => 103,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 数据报表统计
     */
    [
        'name'       => '数据报表统计',
        'alias_name' => 'data_report',
        'sort'       => 109,
        'child'      => [
            // 非现场保监报表
            [
                'name'       => '非现场保监报表',
                'alias_name' => 'irs_management',
                'sort'       => 100,
                'child'      => [],
            ],

            // 报表中心
            [
                'name'       => '报表中心',
                'alias_name' => 'report_center',
                'sort'       => 101,
                'child'      => [
                    // 报表中心
                    [
                        'name'       => '报表中心',
                        'alias_name' => 'report_center_list',
                        'sort'       => 100,
                        'child'      => [],
                    ],
                    // 下载记录
                    [
                        'name'       => '下载记录',
                        'alias_name' => 'report_center_download_log',
                        'sort'       => 101,
                        'child'      => [],
                    ],
                ],
            ],

//            // 监管报表
//            [
//                'name'       => '监管报表',
//                'alias_name' => 'regulatory_statement_list',
//                'sort'       => 100,
//                'child'      => [],
//            ],
//
//            // 业务报表
//            [
//                'name'       => '业务报表',
//                'alias_name' => 'business_statement_list',
//                'sort'       => 101,
//                'child'      => [],
//            ],
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
            // 本部公司
            /*[
                'name'       => '本部公司',
                'alias_name' => 'pr_headquarter_company',
                'sort'       => 100,
                'child'      => [],
            ],*/
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
     * 财产险订单管理
     */
    [
        'name'       => '财产险订单管理',
        'alias_name' => 'property',
        'sort'       => 111,
        'child'      => [
            // 车险订单列表
            [
                'name'       => '车险订单列表',
                'alias_name' => 'property_car_insurance',
                'sort'       => 100,
                'child'      => [],
            ],

            // 船舶险订单列表
            [
                'name'       => '船舶险订单列表',
                'alias_name' => 'property_ship_insurance',
                'sort'       => 101,
                'child'      => [],
            ],
        ],
    ],

//    /**
//     * 风控管理
//     */
//    [
//        'name'       => '风控管理',
//        'alias_name' => 'aike',
//        'sort'       => 112,
//        'child'      => [
//            // 通话录音
//            [
//                'name'       => '通话录音',
//                'alias_name' => 'aike_callrecord',
//                'sort'       => 100,
//                'child'      => [
//                    // 通话录音列表
//                    [
//                        'name'       => '通话录音列表',
//                        'alias_name' => 'aike_callrecord_list',
//                        'sort'       => 100,
//                        'child'      => [],
//                    ],
//                    // 客户手机清单
//                    [
//                        'name'       => '客户手机清单',
//                        'alias_name' => 'aike_callrecord_mobile_list',
//                        'sort'       => 101,
//                        'child'      => [],
//                    ],
//                ],
//            ],
//            // 数据统计
//            [
//                'name'       => '数据统计',
//                'alias_name' => 'aike_chat_statistics',
//                'sort'       => 101,
//                'child'      => [],
//            ],
//            // 群聊记录
//            [
//                'name'       => '群聊记录',
//                'alias_name' => 'aike_wechat_group_list',
//                'sort'       => 102,
//                'child'      => [],
//            ],
//            // 聊天搜索
//            [
//                'name'       => '聊天搜索',
//                'alias_name' => 'aike_chat_message_search',
//                'sort'       => 103,
//                'child'      => [
//                    // 聊天搜索列表
//                    [
//                        'name'       => '聊天搜索列表',
//                        'alias_name' => 'aike_chat_message_search_list',
//                        'sort'       => 100,
//                        'child'      => [],
//                    ],
//                    // 客户微信列表
//                    [
//                        'name'       => '客户微信列表',
//                        'alias_name' => 'aike_wechat_friend_list',
//                        'sort'       => 101,
//                        'child'      => [],
//                    ],
//                    // 专家微信列表
//                    [
//                        'name'       => '专家微信列表',
//                        'alias_name' => 'aike_sales_wechat_list',
//                        'sort'       => 102,
//                        'child'      => [],
//                    ],
//                ],
//            ],
//            // 报表中心
//            [
//                'name'       => '报表中心',
//                'alias_name' => 'report_center',
//                'sort'       => 104,
//                'child'      => [
//                    // 报表中心
//                    [
//                        'name'       => '报表中心',
//                        'alias_name' => 'report_center_list',
//                        'sort'       => 100,
//                        'child'      => [],
//                    ],
//                    // 下载记录
//                    [
//                        'name'       => '下载记录',
//                        'alias_name' => 'report_center_download_log',
//                        'sort'       => 101,
//                        'child'      => [],
//                    ],
//                ],
//            ],
//            // 信息安全
//            [
//                'name'       => '信息安全',
//                'alias_name' => 'secret_settings',
//                'sort'       => 105,
//                'child'      => [],
//            ],
//        ],
//    ],

    /**
     * 对账管理
     */
    [
        'name'       => '对账管理',
        'alias_name' => 'pr_commission_management',
        'sort'       => 113,
        'child'      => [
            // 对账数据管理
            [
                'name'       => '收入明细',
                'alias_name' => 'pr_commission_list',
                'sort'       => 100,
                'child'      => [],
            ],
            [
                'name'       => '结算方案',
                'alias_name' => 'pr_commission_scheme_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 首续期费用方案
            [
                'name'       => '首续期费用方案',
                'alias_name' => 'fee_scheme_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 继续率计算方案
            [
                'name'       => '继续率计算方案',
                'alias_name' => 'renewal_scheme_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 账单明细
            [
                'name'       => '账单明细',
                'alias_name' => 'settle_item_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 继续率统计管理
            [
                'name'       => '继续率统计管理',
                'alias_name' => 'renewal_stat_management',
                'sort'       => 100,
                'child'      => [],
            ],
            [
                'name'       => '奖励方案',
                'alias_name' => 'upstream_reconciliation_award',
                'sort'       => 100,
                'child'      => [],
            ],
        ],
    ],

    [
        'name'       => '官网设置',
        'alias_name' => 'ws_setting',
        'sort'       => 114,
        'child'      => [
            [
                'name'       => 'banner设置',
                'alias_name' => 'ws_banner_setting',
                'sort'       => 100,
                'child'      => [],
            ],
            [
                'name'       => '产品显示设置',
                'alias_name' => 'product_display_setting',
                'sort'       => 101,
                'child'      => [],
            ],
            [
                'name'       => '产品列表素材',
                'alias_name' => 'product_cover_material',
                'sort'       => 102,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 计划书管理
     */
    [
        'name'       => '计划书管理',
        'alias_name' => 'proposal_management',
        'sort'       => 115,
        'child'      => [
            // 产品设置
            [
                'name'       => '产品设置',
                'alias_name' => 'proposal_product_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 保障管理
            [
                'name'       => '保障管理',
                'alias_name' => 'proposal_guarantee_responsibility',
                'sort'       => 101,
                'child'      => [],
            ],
            // 储蓄产品管理
            [
                'name'       => '储蓄产品管理',
                'alias_name' => 'proposal_deposit_product',
                'sort'       => 102,
                'child'      => [],
            ],
            // 家庭风险分析模板
            [
                'name'       => '家庭风险分析模板',
                'alias_name' => 'proposal_family_analysis',
                'sort'       => 103,
                'child'      => [],
            ],
            // 病种管理
            [
                'name'       => '病种管理',
                'alias_name' => 'product_disease_management',
                'sort'       => 116,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 活动及公告
     */
    [
        'name'       => '活动及公告',
        'alias_name' => 'activities_and_announcements',
        'sort'       => 116,
        'child'      => [],
    ],

    /**
     * 内容管理
     */
    [
        'name'       => '内容管理',
        'alias_name' => 'content_management',
        'sort'       => 117,
        'child'      => [
            // 文章管理
            [
                'name'       => '文章管理',
                'alias_name' => 'article_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 文章分类
            [
                'name'       => '文章分类',
                'alias_name' => 'article_category_list',
                'sort'       => 102,
                'child'      => [],
            ],
            // 自助售后指引管理
            [
                'name'       => '自助售后指引管理',
                'alias_name' => 'self_service_after_sales_guidance',
                'sort'       => 103,
                'child'      => [],
            ],
            // 朋友圈管理
            [
                'name'       => '朋友圈管理',
                'alias_name' => 'friend_circle_list',
                'sort'       => 104,
                'child'      => [
                    [
                        'name'       => '朋友圈内容',
                        'alias_name' => 'friend_circle',
                        'sort'       => 101,
                        'child'      => [],
                    ],
                    [
                        'name'       => '朋友圈海报',
                        'alias_name' => 'friend_circle_poster',
                        'sort'       => 102,
                        'child'      => [],
                    ],
                    // 内容分类
                    [
                        'name'       => '内容分类',
                        'alias_name' => 'friend_circle_category',
                        'sort'       => 103,
                        'child'      => [],
                    ],
                    // 海报分类
                    [
                        'name'       => '海报分类',
                        'alias_name' => 'friend_circle_poster_category',
                        'sort'       => 104,
                        'child'      => [],
                    ],
                ],
            ],
        ],
    ],

    /**
     * 订单管理
     */
    [
        'name'       => '创富云服-订单管理',
        'alias_name' => 'cfyf_order_management',
        'sort'       => 118,
        'child'      => [
            // 订单列表
            [
                'name'       => '订单列表',
                'alias_name' => 'cfyf_pr_order_list',
                'sort'       => 100,
                'child'      => [],
            ],

            // 订单列表
            [
                'name'       => '订单详情',
                'alias_name' => 'cfyf_pr_order_detail',
                'sort'       => 101,
                'child'      => [],
            ],

            // 订单列表
            [
                'name'       => '人核列表',
                'alias_name' => 'cfyf_mw_list',
                'sort'       => 102,
                'child'      => [],
            ],

            // 订单列表
            [
                'name'       => '人核详情',
                'alias_name' => 'cfyf_mw_list_detail',
                'sort'       => 103,
                'child'      => [],
            ],

            // 预核保进度
            [
                'name'       => '预核保进度',
                'alias_name' => 'cfyf_pre_uw_schedule_entrance',
                'sort'       => 104,
                'child'      => [],
            ],

            // 保单保全
//            [
//                'name'       => '保单保全',
//                'alias_name' => 'cfyf_policy_preservation_entrance',
//                'sort'       => 105,
//                'child'      => [],
//            ],
            // 客户单录确权
            [
                'name'       => '客户单录确权',
                'alias_name' => 'cfyf_single_recording',
                'sort'       => 106,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 续保续期管理
     */
    [
        'name'       => '创富云服-续保续期',
        'alias_name' => 'cfyf_policy_renewal',
        'sort'       => 119,
        'child'      => [
            // 续保续期列表
            [
                'name'       => '续保续期列表',
                'alias_name' => 'cfyf_pr_policy_renewal_list',
                'sort'       => 100,
                'child'      => [],
            ],
            // 续保续期通知
            [
                'name'       => '续保续期通知',
                'alias_name' => 'cfyf_notify_setting',
                'sort'       => 100,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 商品管理
     */
    [
        'name'       => '创富云服-商品管理',
        'alias_name' => 'cfyf_commodity_management',
        'sort'       => 120,
        'child'      => [
            [
                'name'       => '商品上下架',
                'alias_name' => 'cfyf_goods_up_and_down_the_shelf',
                'sort'       => 100,
                'child'      => [],
            ],
            [
                'name'       => '费率管理',
                'alias_name' => 'fee_rate_management',
                'sort'       => 101,
                'child'      => [
                    [
                        'name'       => '服务费方案',
                        'alias_name' => 'product_fee_scheme_management',
                        'sort'       => 100,
                        'child'      => [

                        ],
                    ],
                    [
                        'name'       => '服务费模板',
                        'alias_name' => 'tpl_product_fee_scheme_management',
                        'sort'       => 99,
                        'child'      => [

                        ],
                    ],
                    [
                        'name'       => '应用模板记录',
                        'alias_name' => 'setting_product_fee_scheme_log',
                        'sort'       => 98,
                        'child'      => [

                        ],
                    ],
                ],
            ],
            [
                'name'       => '产品考核政策',
                'alias_name' => 'combine_product_management',
                'sort'       => 102,
                'child'      => [
                    [
                        'name'       => '考核政策',
                        'alias_name' => 'combine_product_rate_scheme',
                        'sort'       => 100,
                        'child'      => [],
                    ],
                    [
                        'name'       => '考核政策模板',
                        'alias_name' => 'combine_product_rate_scheme_template',
                        'sort'       => 99,
                        'child'      => [],
                    ],
                    [
                        'name'       => '结算要求',
                        'alias_name' => 'combine_product',
                        'sort'       => 98,
                        'child'      => [],
                    ],
                ],
            ],
            [
                'name'       => '续期统计管理',
                'alias_name' => 'stage_situation_management',
                'sort'       => 103,
                'child'      => [
                    [
                        'name'       => '继续率统计管理',
                        'alias_name' => 'stage_situation',
                        'sort'       => 100,
                        'child'      => [],
                    ],
                    [
                        'name'       => '任务列表',
                        'alias_name' => 'stage_situation_calculate_task',
                        'sort'       => 99,
                        'child'      => [],
                    ],
                ],
            ],

        ],
    ],

    /**
     * 云服数据统计
     */
    [
        'name'       => '创富云服-数据统计',
        'alias_name' => 'cfyf_data_statistics',
        'sort'       => 121,
        'child'      => [
            [
                'name'       => '创富云服-业绩统计',
                'alias_name' => 'cfyf_policy_statistics',
                'sort'       => 100,
                'child'      => [],
            ],
            [
                'name'       => '创富云服-转发统计',
                'alias_name' => 'cfyf_transmit_statistics',
                'sort'       => 101,
                'child'      => [],
            ],
        ],
    ],

    /**
     * 创富云服-首页管理
     */
    [
        'name'       => '创富云服-公告管理',
        'alias_name' => 'cfyf_home_page_manage',
        'sort'       => 122,
        'child'      => [
            [
                'name'       => '广告管理',
                'alias_name' => 'cfyf_company_banner_manage',
                'sort'       => 100,
                'child'      => [

                ],
            ],
            [
                'name'       => '新品上线',
                'alias_name' => 'cfyf_new_product_manage',
                'sort'       => 98,
                'child'      => [

                ],
            ],
            [
                'name'       => '商品调整',
                'alias_name' => 'cfyf_product_adjust_manage',
                'sort'       => 98,
                'child'      => [

                ],
            ],
            [
                'name'       => '平台公告',
                'alias_name' => 'cfyf_platform_manage',
                'sort'       => 98,
                'child'      => [

                ],
            ],
        ],
    ],

    /**
     * 用户管理
     */
    [
        'name'       => '创富云服-用户管理',
        'alias_name' => 'cfyf_user_management',
        'sort'       => 123,
        'child'      => [
            [
                'name'       => '外部公司管理',
                'alias_name' => 'cfyf_user_management_company',
                'sort'       => 100,
                'child'      => [
                    [
                        'name'       => '外部公司列表',
                        'alias_name' => 'cfyf_user_management_company_list',
                        'sort'       => 100,
                        'child'      => [],
                    ],
                    [
                        'name'       => '公司详情',
                        'alias_name' => 'cfyf_user_management_company_detail',
                        'sort'       => 101,
                        'child'      => [],
                    ],
                    [
                        'name'       => '员工详情',
                        'alias_name' => 'cfyf_user_management_sales_detail',
                        'sort'       => 102,
                        'child'      => [],
                    ],
                ],
            ],
            [
                'name'       => '银行列表',
                'alias_name' => 'cfyf_user_management_bank',
                'sort'       => 101,
                'child'      => [],
            ],
            [
                'name'       => '渠道列表',
                'alias_name' => 'cfyf_user_management_channel',
                'sort'       => 102,
                'child'      => [],
            ],
            [
                'name'       => '合作信息',
                'alias_name' => 'cfyf_business_cooperate',
                'sort'       => 103,
                'child'      => [],
            ],
            [
                'name'       => '黑名单',
                'alias_name' => 'cfyf_user_management_blacklist',
                'sort'       => 104,
                'child'      => [],
            ],
            [
                'name'       => '邮件批量发送',
                'alias_name' => 'cfyf_send_mail',
                'sort'       => 104,
                'child'      => [],
            ],
        ],
    ],

    // 创富云服-结算管理
    [
        'name'       => '创富云服-结算管理',
        'alias_name' => 'cfyf_settlement_management',
        'sort'       => 118,
        'child'      => [
            [
                'name'       => '结算明细',
                'alias_name' => 'company_settle_management',
                'sort'       => 100,
                'child'      => [
                    [
                        'name'       => '结算明细',
                        'alias_name' => 'company_settle',
                        'sort'       => 100,
                        'child'      => [

                        ],
                    ],
                    [
                        'name'       => '任务明细',
                        'alias_name' => 'company_settle_calculate_task',
                        'sort'       => 99,
                        'child'      => [

                        ],
                    ],
                ],
            ],
            [
                'name'       => '结算清单',
                'alias_name' => 'fee_product_management',
                'sort'       => 99,
                'child'      => [],
            ]
        ],
    ],

];
