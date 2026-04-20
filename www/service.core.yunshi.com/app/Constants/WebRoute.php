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

    // ========================================= 艾客数据 =================================================== //
    /** 通话记录列表 **/
    const MANAGEMENT_AIKE_GET_AIAGAIN_CALLRECORD_LIST = 'management.aike.get-aiagain-callrecord-list';
    /** 对话记录统计 **/
    const MANAGEMENT_AIKE_GET_CHAT_STATISTICS = 'management.aike.get-chat-statistics';
    // 导出通话录音记录列表
    const MANAGEMENT_AIKE_EXPORT_CALLRECORD_LIST = 'management.aike.export-callrecord-list';
    // 添加通话录音备注
    const MANAGEMENT_AIKE_ADD_RECORD_REMARK = 'management.aike.add-record-remark';
    // 编辑通话录音备注
    const MANAGEMENT_AIKE_EDIT_RECORD_REMARK = 'management.aike.edit-record-remark';
    /** 客服列表 **/
    const MANAGEMENT_AIKE_GET_CUSTOMERSERVICE_LIST = 'management.aike.get-customerservice-list`auth_needless`';
    /** 销售微信列表 **/
    const MANAGEMENT_AIKE_GET_SALES_WECHAT_PAGE_LIST = 'management.aike.get-sales-wechat-page-list';
    /** 微信群成员列表 **/
    const MANAGEMENT_AIKE_GET_WECHAT_GROUP_MEMBER_LIST = 'management.aike.get-wechat-group-member-list';
    /** 通用-对话列表 **/
    const MANAGEMENT_AIKE_NORMAL_GET_DIALOG_LIST = 'management.aike.normal.get-dialog-list';
    /** 通用-微信聊天消息列表 **/
    const MANAGEMENT_AIKE_NORMAL_GET_CHAT_MESSAGE_LIST = 'management.aike.normal.get-chat-message-list';
    /** 通用-微信群列表 **/
    const MANAGEMENT_AIKE_NORMAL_GET_WECHAT_GROUP_DIALOG_LIST = 'management.aike.normal.get-wechat-group-dialog-list';
    /** 通用-微信群聊天消息列表 **/
    const MANAGEMENT_AIKE_NORMAL_GET_GROUP_CHAT_MESSAGE_LIST = 'management.aike.normal.get-group-chat-message-list';
    /** 通用-单聊-关联销售记录 */
    const MANAGEMENT_AIKE_NORMAL_GET_CHAT_SALES_BIND_LOG_LIST = 'management.aike.normal.get-chat-sales-bind-log-list';
    /** 通用-群聊-关联销售记录 */
    const MANAGEMENT_AIKE_NORMAL_GET_CHAT_GROUP_SALES_BIND_LOG_LIST = 'management.aike.normal.get-chat-group-sales-bind-log-list';
    /** 销售-对话列表 **/
    const MANAGEMENT_AIKE_SALES_GET_DIALOG_LIST = 'management.aike.sales.get-dialog-list';
    /** 销售-微信聊天消息列表 **/
    const MANAGEMENT_AIKE_SALES_GET_CHAT_MESSAGE_LIST = 'management.aike.sales.get-chat-message-list';
    /** 销售-微信群列表 **/
    const MANAGEMENT_AIKE_SALES_GET_WECHAT_GROUP_DIALOG_LIST = 'management.aike.sales.get-wechat-group-dialog-list';
    /** 销售-微信群聊天消息列表 **/
    const MANAGEMENT_AIKE_SALES_GET_GROUP_CHAT_MESSAGE_LIST = 'management.aike.sales.get-group-chat-message-list';
    /** 销售-单聊-关联销售记录 */
    const MANAGEMENT_AIKE_SALES_GET_CHAT_SALES_BIND_LOG_LIST = 'management.aike.sales.get-chat-sales-bind-log-list';
    /** 销售-群聊-关联销售记录 */
    const MANAGEMENT_AIKE_SALES_GET_CHAT_GROUP_SALES_BIND_LOG_LIST = 'management.aike.sales.get-chat-group-sales-bind-log-list';
    /** 销售-关联crm销售记录 */
    const MANAGEMENT_AIKE_SALES_GET_CRM_SALES_BIND_LOG_LIST = 'management.aike.sales.get-crm-sales-bind-log-list';
    /** 销售-关联crm销售-关联销售记录 */
    const MANAGEMENT_AIKE_BIND_CRM_SALES_GET_BIND_CRM_SALES_LIST = 'management.aike.sales.get-bind-crm-sales-list';
    /** 客户-对话列表 **/
    const MANAGEMENT_AIKE_CUSTOMER_GET_DIALOG_LIST = 'management.aike.customer.get-dialog-list';
    /** 客户-微信聊天消息列表 **/
    const MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_MESSAGE_LIST = 'management.aike.customer.get-chat-message-list';
    /** 客户-微信群列表 **/
    const MANAGEMENT_AIKE_CUSTOMER_GET_WECHAT_GROUP_DIALOG_LIST = 'management.aike.customer.get-wechat-group-dialog-list';
    /** 客户-微信群聊天消息列表 **/
    const MANAGEMENT_AIKE_CUSTOMER_GET_GROUP_CHAT_MESSAGE_LIST = 'management.aike.customer.get-group-chat-message-list';
    /** 客户-单聊-关联销售记录 */
    const MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_SALES_BIND_LOG_LIST = 'management.aike.customer.get-chat-sales-bind-log-list';
    /** 客户-群聊-关联销售记录 */
    const MANAGEMENT_AIKE_CUSTOMER_GET_CHAT_GROUP_SALES_BIND_LOG_LIST = 'management.aike.customer.get-chat-group-sales-bind-log-list';
    /** 工作微信号列表 **/
    const MANAGEMENT_AIKE_GET_WECHAT_LIST = 'management.aike.get-wechat-list`auth_needless`';
    /** 群聊列表 **/
    const MANAGEMENT_AIKE_GET_WECHAT_GROUP_LIST = 'management.aike.get-wechat-group-list';
    /** 客户微信列表 **/
    const MANAGEMENT_AIKE_GET_WECHAT_FRIEND_LIST = 'management.aike.get-wechat-friend-list';
    /** 聊天搜索 **/
    const MANAGEMENT_AIKE_GET_CHAT_MESSAGE_SEARCH_LIST = 'management.aike.get-chat-message-search-list';
    /** 关联CRM客户 */
    const MANAGEMENT_AIKE_BIND_CRM_CUSTOMER = 'management.aike.bind-crm-customer`log`';
    /** 关联CRM销售 */
    const MANAGEMENT_AIKE_BIND_CRM_SALES = 'management.aike.bind-crm-sales`log`';
    /** 关联crm客户详情 */
    const MANAGEMENT_AIKE_GET_BIND_CRM_CUSTOMER_LOG_LIST = 'management.aike.get-bind-crm-customer-log-list';
    /** 客户添加销售微信记录 */
    const MANAGEMENT_AIKE_GET_FRIEND_LIST = 'management.aike.get-friend-list';
    /** 客户手机清单 **/
    const MANAGEMENT_AIKE_GET_CALLRECORD_MOBILE_LIST = 'management.aike.get-callrecord-mobile-list';
    /** 客户手机清单-关联客户 **/
    const MANAGEMENT_AIKE_BIND_MOBILE_CRM_CUSTOMER = 'management.aike.bind-mobile-crm-customer';
    /** 全部客户-通话记录列表 **/
    const MANAGEMENT_AIKE_GET_ALL_CUSTOMER_AIAGAIN_CALLRECORD_LIST = 'management.aike.get-all-customer-aiagain-callrecord-list';
    // ========================================= 艾客数据 =================================================== //

    // ========================================= 直播数据 =================================================== //
    /** 用户直播数据 **/
    const MANAGEMENT_LIVE_GET_USER_LIVE_INFO = 'management.live.get-user-live-info`auth_needless`';
    //前端别名 对应 MANAGEMENT_LIVE_GET_USER_LIVE_INFO
    // const MANAGEMENT_CUSTOMER_LIVE_GET_USER_LIVE_INFO = 'management.customer.live.get-user-live-info';
    // const MANAGEMENT_ADMIN_INTERACTION_LIVE_GET_USER_LIVE_INFO = 'management.admin.interaction.live.get-user-live-info';
    // const MANAGEMENT_PERSONAL_INTERACTION_LIVE_GET_USER_LIVE_INFO = 'management.personal.interaction.live.get-user-live-info';

    /** 直播数据统计列表 **/
    const MANAGEMENT_LIVE_GET_PAGE_LIST = 'management.live.get-page-list';
    /** 直播课程列表 **/
    const MANAGEMENT_LIVE_COURSE_LIST = 'management.live.course-list`auth_needless`';
    /** 用户评论列表 **/
    const MANAGEMENT_LIVE_COMMENT_LIST = 'management.live.comment-list`auth_needless`';
    // ========================================= 直播数据 =================================================== //

    // ========================================= 下游公司 =================================================== //
    /** 下游公司 **/
    /** 新增下游公司 **/
    const MANAGEMENT_CFYF_COMPANY_CREATE = 'management.cfyf.company.create`log`';
    /** 下游公司列表（不分页） **/
    const MANAGEMENT_CFYF_COMPANY_GET_LIST = 'management.cfyf.company.get_list';
    /** 全部公司（超管列表） **/
    const MANAGEMENT_CFYF_COMPANY_SUPER_ADMIN_GET_PAGE_LIST = 'management.cfyf.company.super_admin.get_page_list';
    /** 下游公司基本资料 **/
    const MANAGEMENT_CFYF_COMPANY_DETAIL = 'management.cfyf.company.detail';
    /** 编辑下游公司基本资料 **/
    const MANAGEMENT_CFYF_COMPANY_UPDATE = 'management.cfyf.company.update`log`';

    /** 下游公司权限路由 **/
    /** 下游公司权限详情 **/
    const MANAGEMENT_CFYF_COMPANY_PERMISSION_DETAIL = 'management.cfyf.company.permission.detail';
    /** 更新下游公司权限 **/
    const MANAGEMENT_CFYF_COMPANY_PERMISSION_UPDATE = 'management.cfyf.company.permission.update`log`';
    /** 下游公司权限树 **/
    const MANAGEMENT_CFYF_COMPANY_PERMISSION_TREE = 'management.cfyf.company.permission.tree';

    /** 下游公司成员路由 **/
    /** 下游公司成员角色列表 **/
    const MANAGEMENT_CFYF_EMPLOYEE_ROLE_LIST = 'management.cfyf.employee.role_list';
    /** 获取下游公司成员列表 **/
    const MANAGEMENT_CFYF_EMPLOYEE_GET_LIST = 'management.cfyf.employee.get_list';
    /** 下游公司超管重置密码 **/
    const MANAGEMENT_CFYF_EMPLOYEE_RESET_PASSWORD = 'management.cfyf.employee.reset_password`log`';
    /** 获取下游公司超管信息 **/
    const MANAGEMENT_CFYF_EMPLOYEE_DETAIL = 'management.cfyf.employee.detail';
    /** 更新下游公司超管信息 **/
    const MANAGEMENT_CFYF_EMPLOYEE_UPDATE = 'management.cfyf.employee.update`log`';
    // ========================================= 下游公司 =================================================== //

    // ========================================= 公司管理 =================================================== //
    /** 保险公司路由 **/
    /** 新增保险公司 **/
    const MANAGEMENT_COMPANY_CREATE = 'management.company.create`log`';
    /** 保险公司详情 **/
    const MANAGEMENT_COMPANY_DETAIL = 'management.company.detail';
    /** 更新保险公司 **/
    const MANAGEMENT_COMPANY_UPDATE = 'management.company.update`log`';
    /** 删除保险公司 **/
    const MANAGEMENT_COMPANY_DELETE = 'management.company.delete`log`';
    /** 保险公司列表（分页） **/
    const MANAGEMENT_COMPANY_GET_PAGE_LIST = 'management.company.get_page_list';
    /** 保险公司列表（不分页） **/
    const MANAGEMENT_COMPANY_GET_LIST = 'management.company.get_list';

    /** 经纪公司 **/
    /** 新增经纪公司 **/
    const MANAGEMENT_COMPANY_CREATE_BROKER = 'management.company.create_broker`log`';
    /** 经纪公司详情 **/
    const MANAGEMENT_COMPANY_DETAIL_BROKER = 'management.company.detail_broker';
    /** 更新经纪公司 **/
    const MANAGEMENT_COMPANY_UPDATE_BROKER = 'management.company.update_broker`log`';
    /** 删除经纪公司 **/
    const MANAGEMENT_COMPANY_DELETE_BROKER = 'management.company.delete_broker`log`';
    /** 经纪公司列表（分页） **/
    const MANAGEMENT_COMPANY_GET_BROKER_PAGE_LIST = 'management.company.get_broker_page_list';
    /** 经纪公司列表（不分页） **/
    const MANAGEMENT_COMPANY_GET_BROKER_LIST = 'management.company.get_broker_list';

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

    // ========================================= CRM员工执业登记路由 =================================================== //
    /** 新增执业登记 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CREATE = 'management.company.employee.qualification.create`log`';
    /** 员工执业登记列表 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_PAGE_LIST = 'management.company.employee.qualification.get_page_list';
    /** 注销执业登记 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CLOSE = 'management.company.employee.qualification.close`log`';
    /** 员工执业登记列表导出 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_EXPORT = 'management.company.employee.qualification.export`log`';
    /** 员工执业登记详情 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_DETAIL = 'management.company.employee.qualification.detail';
    /** 编辑员工执业登记 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE = 'management.company.employee.qualification.update`log`';
    /** 上传员工执业登记 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPLOAD = 'management.company.employee.qualification.upload`log`';
    /** 上传员工执业登记分页列表 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_UPLOAD_PAGE_LIST = 'management.company.employee.qualification_get_upload_page_list';
    /** 修改上传员工执业登记备注 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE_UPLOAD_REMARK = 'management.company.employee.qualification_update_upload_remark`log`';
    /** 员工执业登记待创建列表 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_USER_GET_PAGE_LIST = 'management.company.employee.qualification_user.get_page_list';
    /** 员工执业登记待创建移除 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_USE_SALES_QUALIFICATION_NOT_NEED = 'management.company.employee.use_sales_qualification.not_need`log`';
    /** 执业员工重新关联 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_USER_RESET_RELATION = 'management.company.employee.qualification_user.reset_relation`log`';
    /** 执业证登记列表待创建和待注销数量计数 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_QUALITY = 'management.company.employee.qualification_user.get_quality';
    /** 解绑执业证关联员工 **/
    const MANAGEMENT_COMPANY_EMPLOYEE_CANCEL_QUALIFICATIONS_RELATION_USER = 'management.company.employee.cancel_qualifications_relation_user`log`';
    // ========================================= CRM员工执业登记路由 =================================================== //

    // ========================================= 部门员工账号路由 =================================================== //
    /** 部门中的员工账户列表 **/
    const MANAGEMENT_COMPANY_DEPARTMENT_USER_GET_LIST = 'management.company.department.user.get_list`auth_needless`';
    /** 设置员工账户部门角色 **/
//    const MANAGEMENT_COMPANY_DEPARTMENT_SUB_ACCOUNT_SET_DEPARTMENT_ROLE = 'management.company.department.sub_account.set_department_role`log`';
    // ========================================= 部门子账户路由 =================================================== //

    // ========================================= 员工子账户路由 =================================================== //
    /** 新增员工子账户 **/
    const MANAGEMENT_COMPANY_SUB_ACCOUNT_ADD = 'management.company.sub_account.add`log`';
    /** 同步员工子账户 **/
    const MANAGEMENT_COMPANY_SUB_ACCOUNT_SYNC = 'management.company.sub_account.sync`log`';
    /** 员工子账户详情 **/
    const MANAGEMENT_COMPANY_SUB_ACCOUNT_DETAIL = 'management.company.sub_account.detail';
    // ========================================= 员工子账户路由 =================================================== //

    // ========================================= 培训路由 =================================================== //
    /** 培训列表（分页） **/
    const MANAGEMENT_COMPANY_TRAINING_GET_PAGE_LIST = 'management.company.training.get_page_list';
    /** 培训详情 **/
    const MANAGEMENT_COMPANY_TRAINING_DETAIL = 'management.company.training.detail';
    /** 培训列表导出 **/
    const MANAGEMENT_COMPANY_TRAINING_EXPORT = 'management.company.training.export';
    /** 奖惩记录 **/
    const MANAGEMENT_COMPANY_TRAINING_DISCIPLINARY_GET_PAGE_LIST = 'management.company.training.disciplinary.get_page_list';
    /** 奖惩记录导出 **/
    const MANAGEMENT_COMPANY_TRAINING_DISCIPLINARY_EXPORT = 'management.company.training.disciplinary.export';
    /** 课程列表 **/
    const MANAGEMENT_COMPANY_TRAINING_COURSE_GET_PAGE_LIST = 'management.company.training.course.get_page_list';
    /** 课程列表导出 **/
    const MANAGEMENT_COMPANY_TRAINING_COURSE_EXPORT = 'management.company.training.course.export';
    /** 课程分类列表 **/
    const MANAGEMENT_COMPANY_TRAINING_COURSE_CATEGORY_GET_PAGE_LIST = 'management.company.training.course_category.get_page_list';
    /** 课程分类列表导出 **/
    const MANAGEMENT_COMPANY_TRAINING_COURSE_CATEGORY_EXPORT = 'management.company.training.course_category.export';
    // ========================================= 培训路由 =================================================== //

    // ========================================= 客户路由 =================================================== //
//    /** 客户列表（分页） **/
//    const MANAGEMENT_CUSTOMER_GET_PAGE_LIST = 'management.customer.get_page_list';
//    /** 客户详情 **/
//    const MANAGEMENT_CUSTOMER_DETAIL = 'management.customer.detail';
//    /** 分配轨迹 **/
//    const MANAGEMENT_CUSTOMER_DISTRIBUTION_TRAJECTORY = 'management.customer.distribution.trajectory';

    /** 全部客户-列表(分页) **/
    const MANAGEMENT_EXPERT_CUSTOMER_PAGE_LIST = 'management.expert_customer.page_list';
    /** 全部客户-列表 **/
    const MANAGEMENT_EXPERT_CUSTOMER_GET_LIST = 'management.expert_customer.get_list`auth_needless`';
    /** 全部客户-详情 **/
    const MANAGEMENT_EXPERT_CUSTOMER_DETAIL = 'management.expert_customer.detail';
    /** 全部客户-分配轨迹 **/
    const MANAGEMENT_EXPERT_CUSTOMER_DISTRIBUTION_TRAJECTORY = 'management.expert_customer.distribution.trajectory';
    /** 全部客户-跟进记录列表 **/
    const MANAGEMENT_EXPERT_CUSTOMER_COMMUNICATE_LOG_LIST = 'management.expert_customer.communicate_log_list`auth_needless`';
    /** 全部客户-获取跟进状态 **/
    const MANAGEMENT_EXPERT_CUSTOMER_FOLLOW_STATUS_INFO = 'management.expert_customer.follow_status_info`auth_needless`';
    /** 全部客户-接待互动 **/
    const MANAGEMENT_EXPERT_CUSTOMER_USER_IM_MESSAGES = 'management.expert_customer.user_im_messages';
    /** 全部客户-投保记录 **/
    const MANAGEMENT_EXPERT_CUSTOMER_POLICY_LIST = 'management.expert_customer.policy.list';
    /** 全部客户-视频观看记录 **/
    const MANAGEMENT_EXPERT_CUSTOMER_LIVE_LIST = 'management.expert_customer.live.list';
    /** 全部客户-投保记录详情 **/
    const MANAGEMENT_EXPERT_CUSTOMER_POLICY_DETAIL = 'management.expert_customer.policy.detail';
    /** 全部客户-投保记录总保费 **/
    const MANAGEMENT_EXPERT_CUSTOMER_POLICY_ALL_PREMIUM = 'management.expert_customer.policy.all_premium';
    /** 全部客户-微信沟通 **/
    const MANAGEMENT_EXPERT_AIKE_WECHAT_COMMUNICATE_LIST = 'management.expert_customer.aike.wechat_communicate_list';
    // ========================================= 客户路由 =================================================== //
    // ========================================= 匹配保单 start =================================================== //
    /** 订单列表-匹配保单 **/
    const MANAGEMENT_MATCH_POLICY = 'management.match_policy';
    // ========================================= 匹配保单 end =================================================== //

    // ========================================= 订单路由 start =================================================== //
    /** 订单列表（分页） **/
    const MANAGEMENT_ORDER_GET_PAGE_LIST = 'management.order.get_page_list';
    // 订单列表（产品接入的pr表）
    const MANAGEMENT_PR_ORDER_PAGE_LIST = 'management.pr-order.page_list';
    // 导出订单列表
    const MANAGEMENT_EXPORT_PR_ORDER_PAGE_LIST = 'management.pr-order.export_order_list';
    // 订单列表-设置出单后台
    const MANAGEMENT_PR_ORDER_SET_SALES_SOURCE = 'management.pr-order.set_sales_source';
    // 订单列表-复制订单详情链接
    const MANAGEMENT_PR_ORDER_GET_DETAIL_LINK = 'management.pr-order.get_detail_link';
    // 订单列表-复制回访链接
    const MANAGEMENT_PR_ORDER_GET_VISIT_LINK = 'management.pr-order.get_visit_link';
    // 订单列表-复制回执链接
    const MANAGEMENT_PR_ORDER_GET_RECEIPT_LINK = 'management.pr-order.get_receipt_link';
    // 订单列表-复制人核链接
    const MANAGEMENT_PR_ORDER_GET_MANPOWER_LINK = 'management.pr-order.get_manpower_link';
    // 手动关联保单的产品-获取关联产品列表
    const MANAGEMENT_PR_ORDER_GET_RELATE_PRODUCT_LIST = 'management.pr-order.get_relate_product_list';
    // 手动关联保单的产品-保单关联产品
    const MANAGEMENT_PR_ORDER_POLICY_RELATE_PRODUCT = 'management.pr-order.policy_relate_product';
    // 订单详情（产品接入的pr表）
    const MANAGEMENT_PR_ORDER_DETAIL = 'management.pr-order.detail';
    // 订单详情-订单基本信息（产品接入的pr表）
    const MANAGEMENT_PR_ORDER_BASE_INFO = 'management.pr-order.base_info';
    // 订单详情-销售信息
    const MANAGEMENT_PR_ORDER_POLICY_SALES = 'management.pr-order.policy-sales';
    // 订单客户
    const MANAGEMENT_PR_ORDER_CUSTOMER = 'management.pr-order.order-customer';
    // 订单详情-合规信息
    const MANAGEMENT_PR_ORDER_COMPLIANCE_INFO = 'management.pr-order.order-compliance-info';
    // 订单详情-保单产品信息
    const MANAGEMENT_PR_ORDER_POLICY_PRODUCT_INFO = 'management.pr-order.policy-product-info';
    // 订单详情-支付信息
    const MANAGEMENT_PR_ORDER_POLICY_PAYMENT_INFO = 'management.pr-order.policy-payment-info';
    // 订单详情-续期账号信息
    const MANAGEMENT_PR_ORDER_POLICY_RENEWAL_INFO = 'management.pr-order.policy-renewal-info';
    // 订单详情-回访信息
    const MANAGEMENT_PR_ORDER_POLICY_VISIT_INFO = 'management.pr-order.policy-visit-info';
    // 订单详情-回执信息
    const MANAGEMENT_PR_ORDER_POLICY_RECEIPT_INFO = 'management.pr-order.policy-receipt-info';
    // 订单详情-保单保全信息
    const MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_LOG = 'management.pr-order.policy-preservation-log';
    // 订单详情-查看保全详情
    const MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_DETAIL = 'management.pr-order.policy-preservation-detail';
    // 订单详情-查看保全-获取电子保单链接
    const MANAGEMENT_PR_ORDER_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK = 'management.pr-order.policy-preservation-detail-policy-file-link';
    // 订单详情-质检信息
    const MANAGEMENT_PR_ORDER_POLICY_QC_INFO = 'management.pr-order.policy-qc-info';

    // 订单详情-保单基本信息（产品接入的pr表）
    const MANAGEMENT_PR_ORDER_POLICY_BASE_INFO = 'management.pr-order.policy_base_info';
    // 订单详情-保单基本信息（产品接入的pr表）
    const MANAGEMENT_PR_ORDER_ONE_POLICY_BASE_INFO = 'management.pr-order.one_policy_base_info';
    // 订单详情-续期通知设置
    const MANAGEMENT_PR_ORDER_POLICY_RENEWAL_NOTIFY_SETTING = 'management.pr-order.policy-renewal-notify-setting';
    // 订单详情-当前续保续期记录
    const MANAGEMENT_PR_ORDER_POLICY_CURRENT_RENEWAL_STAGE = 'management.pr-order.policy-current-renewal-stage';
    // 订单详情-获取电子保单链接（产品接入的pr表）
    const MANAGEMENT_PR_ORDER_POLICY_FILE_LINK = 'management.pr-order.policy_file_link';
    // 订单详情-人员信息 （产品接入的pr表）
    const MANAGEMENT_PR_ORDER_POLICY_PERSON_INFO = 'management.pr-order.policy_person_info';
    // 订单详情-保单险种信息
    const MANAGEMENT_PR_ORDER_POLICY_INSURANCES = 'management.pr-order.policy-insurances';
    // 订单详情-保单保障权益和机构协议
    const MANAGEMENT_PR_ORDER_POLICY_RESPONSIBILITY_AND_AGREEMENTS = 'management.pr-order.policy-responsibility-and-agreements';
    // 订单详情-保单退保记录
    const MANAGEMENT_PR_ORDER_POLICY_SURRENDER_LOG = 'management.pr-order.policy-surrender-log';
    // 订单详情-保单续保续期记录
    const MANAGEMENT_PR_ORDER_POLICY_RENEWAL_STAGE = 'management.pr-order.policy-renewal-stage';
    // 订单详情-保单支付和续保银行卡信息（产品接入的pr表）
    const MANAGEMENT_PR_ORDER_POLICY_PAYMENT_AND_RENEWAL_INFO = 'management.pr-order.policy-payment-and-renewal-info';
    // 下载电子保单
    const MANAGEMENT_POLICY_BASE_INFO_DOWNLOAD_POLICY_FILE = 'management.pr-order.policy_base_info.download_policy_file';
    // 上传保单-上传保单excel
    const MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL = 'management.pr_policy.upload_policy_by_excel`log`';
    // 上传保单-获取保单上传记录
    const MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_LIST = 'management.pr_policy.upload_policy_by_excel.get_upload_list';
    // 上传保单-获取保单上传错误原因记录
    const MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_ERROR_LOG = 'management.pr_policy.upload_policy_by_excel.get_upload_error_log';
    // 上传保单-导出保单上传错误原因
    const MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_EXPORT_UPLOAD_ERROR_LOG = 'management.pr_policy.upload_policy_by_excel.export_upload_error_log`log`';
    // 上传保单-下载文件
    const MANAGEMENT_POLICY_UPLOAD_POLICY_DOWNLOAD_FILE = 'management.pr_policy.upload_policy_by_excel.download_file';

    // ================================= 保全 start =================================
    // 保全-保单保全申请入口
    const MANAGEMENT_PR_POLICY_PRESERVATION_APPLY = 'management.pr_policy.preservation.apply`log`';
    // 保全-获取电子保单链接
    const MANAGEMENT_PR_POLICY_PRESERVATION_POLICY_FILE_LINK = 'management.pr_policy.preservation.policy-file-link';
    // 保全事项-一次性加保
    const MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_ONE_TIME_ADD_INSURANCE = 'management.pr_policy.preservation_item.one_time_add_insurance';
    // 保全事项-一次性减保
    const MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_ONE_TIME_REDUCE_INSURANCE = 'management.pr_policy.preservation_item.one_time_reduce_insurance';
    // 保全事项-加保
    const MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_ADD_INSURANCE = 'management.pr_policy.preservation_item.add_insurance';
    // 保全事项-减保
    const MANAGEMENT_PR_POLICY_PRESERVATION_ITEM_REDUCE_INSURANCE = 'management.pr_policy.preservation_item.reduce_insurance';

    // 保全审批-保全申请分页列表
    const MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_PAGE_LIST = 'management.pr_policy.preservation.apply-page-list';
    // 保全审批-保全审批
    const MANAGEMENT_PR_POLICY_PRESERVATION_VERIFY = 'management.pr_policy.preservation.verify`log`';
    // 保全审批-审批详情-获取电子保单链接
    const MANAGEMENT_PR_POLICY_PRESERVATION_VERIFY_DETAIL_POLICY_FILE_LINK = 'management.pr_policy.preservation.verify-detail-policy-file-link';
    // 保全审批-保全详情
    const MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_DETAIL = 'management.pr_policy.preservation.apply-detail';
    // 保全审批-保全详情-获取电子保单链接
    const MANAGEMENT_PR_POLICY_PRESERVATION_APPLY_DETAIL_POLICY_FILE_LINK = 'management.pr_policy.preservation.apply-detail-policy-file-link';

    // 保全审批-个人申请记录分页列表
    const MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_APPLY_PAGE_LIST = 'management.pr_policy.preservation.personal-apply-page-list';
    // 保全审批-个人保全详情
    const MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_DETAIL = 'management.pr_policy.preservation.personal-detail';
    // 保全审批-个人保全详情-获取电子保单链接
    const MANAGEMENT_PR_POLICY_PRESERVATION_PERSONAL_DETAIL_POLICY_FILE_LINK = 'management.pr_policy.preservation.personal-detail-policy-file-link';
    // ================================= 保全 end =================================

    // ================================= 人核路由 start ============================================== //
    // 订单详情-人核信息
    const MANAGEMENT_PR_ORDER_MW_DETAIL_INFO = 'management.pr_order.mw.detail_info';
    // 订单详情-人核基本信息
    const MANAGEMENT_PR_ORDER_MW_BASE_INFO = 'management.pr_order.mw.base_info';
    // 订单详情-获取人核轨迹
    const MANAGEMENT_PR_ORDER_MW_TRACK_LOG = 'management.pr_order.mw.track_log';
    // 订单详情-获取问卷列表
    const MANAGEMENT_PR_ORDER_MW_QUESTIONNAIRE_LIST = 'management.pr_order.mw.questionnaire.list';
    // 订单详情-获取问卷详情
    const MANAGEMENT_PR_ORDER_MW_QUESTIONNAIRE_DETAIL = 'management.pr_order.mw.questionnaire.detail';
    // 订单详情-获取下发问题列表
    const MANAGEMENT_PR_ORDER_MW_SUPPLEMENT_QUESTION_GROUP_LIST = 'management.pr_order.mw.supplement_question.group.list';
    // 订单详情-获取下发问题详情
    const MANAGEMENT_PR_ORDER_MW_SUPPLEMENT_QUESTION_GROUP_DETAIL = 'management.pr_order.mw.supplement_question.group.detail';
    // 订单详情-获取附件资料列表
    const MANAGEMENT_PR_ORDER_MW_FILE_LIST = 'management.pr_order.mw.file.list';
    // 订单详情-打包下载人核资料文件
    const MANAGEMENT_PR_ORDER_MW_FILE_LIST_DOWNLOAD_ZIP = 'management.pr_order.mw.file.download_zip`log`';
    // 订单详情-获取核保结论汇总
    const MANAGEMENT_PR_ORDER_MW_CONCLUSION_INFO = 'management.pr_order.mw.conclusion.info';
    // ================================= 人核路由 end ============================================== //

    // ================================= 单录路由 start ============================================== //
    // 客户单录确权-左侧栏入口
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_LEFT_ENTRANCE = 'management.pr_order.single_recording.left-entrance';
    // 单录-客户单录确权分页列表
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_PAGE_LIST = 'management.pr_order.single_recording.get-page-list';
    // 单录-订单详情
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_ORDER_DETAIL = 'management.pr_order.single_recording.order-detail';
    // 单录-复制单录链接
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_COPY_LINK = 'management.pr_order.single_recording.copy-link`log`';
    // 单录-无需单录
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_NOT_NEED = 'management.pr_order.single_recording.not-need`log`';
    // 单录-单录视频详情
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_GET_VIDEO_INFO = 'management.pr_order.single_recording.get-video-info';
    // 单录-审核不通过
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_REJECT = 'management.pr_order.single_recording.reject`log`';
    // 单录-审核通过
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_PASS = 'management.pr_order.single_recording.pass`log`';
    // 单录-批量标记单录
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_MUTI_PENDING = 'management.pr_order.single_recording.muti-pending`log`';
    // 单录-云服单录规则列表
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_GET_CFYF_RULE_LIST = 'management.pr_order.single_recording.get-cfyf-rule-list';
    // 单录-编辑云服单录规则
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_EDIT_CFYF_RULE = 'management.pr_order.single_recording.edit-cfyf-rule`log`';
    // 单录-新增云服单录规则
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_ADD_CFYF_RULE = 'management.pr_order.single_recording.add-cfyf-rule`log`';
    // 单录-删除云服单录规则
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_DEL_CFYF_RULE = 'management.pr_order.single_recording.del-cfyf-rule`log`';
    // 单录-单录提醒数
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_REMIND_COUNT = 'management.pr_order.single_recording.remind-count';
    // 单录-单录提醒分页列表
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_GET_REMIND_PAGE_LIST = 'management.pr_order.single_recording.get-remind-page-list';
    // 单录-获取朗读内容
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_GET_READ_CONTENT = 'management.pr_order.single_recording.get-read-content';
    // 获取审核失败原因
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_GET_EXAMINE_FAIL_REASON = 'management.pr_order.single_recording.get-examine-fail-reason';
    // 发起单录
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_PUSH_SINGLE_ENTRY = 'management.pr_order.single_recording.push-single-entry';
    // 获取单录异常列表
    const MANAGEMENT_PR_ORDER_SINGLE_RECORDING_GET_FAIL_LIST = 'management.pr_order.single_recording.get-fail-list';

    // ================================= 单录路由 end ============================================== //

    // ================================= 云服单录路由 start ============================================== //
    // 客户单录确权-左侧栏入口
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_LEFT_ENTRANCE = 'management.cfyf_service.pr_order.single_recording.left-entrance';
    // 单录-客户单录确权分页列表
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_PAGE_LIST = 'management.cfyf_service.pr_order.single_recording.get-page-list';
    // 单录-订单详情
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_ORDER_DETAIL = 'management.cfyf_service.pr_order.single_recording.order-detail';
    // 单录-复制单录链接
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_COPY_LINK = 'management.cfyf_service.pr_order.single_recording.copy-link`log`';
    // 单录-无需单录
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_NOT_NEED = 'management.cfyf_service.pr_order.single_recording.not-need`log`';
    // 单录-单录视频详情
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_GET_VIDEO_INFO = 'management.cfyf_service.pr_order.single_recording.get-video-info';
    // 单录-审核不通过
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_REJECT = 'management.cfyf_service.pr_order.single_recording.reject`log`';
    // 单录-审核通过
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_PASS = 'management.cfyf_service.pr_order.single_recording.pass`log`';
    // 单录-批量标记单录
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_MUTI_PENDING = 'management.cfyf_service.pr_order.single_recording.muti-pending`log`';
    // 单录-单录提醒数
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_REMIND_COUNT = 'management.cfyf_service.pr_order.single_recording.remind-count';
    // 单录-单录提醒分页列表
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_GET_REMIND_PAGE_LIST = 'management.cfyf_service.pr_order.single_recording.get-remind-page-list';
    // 单录-获取朗读内容
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_GET_READ_CONTENT = 'management.cfyf_service.pr_order.single_recording.get-read-content';
    // 获取审核失败原因
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_GET_EXAMINE_FAIL_REASON = 'management.cfyf_service.pr_order.single_recording.get-examine-fail-reason';
    // 发起单录
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_PUSH_SINGLE_ENTRY = 'management.cfyf_service.pr_order.single_recording.push-single-entry';
    // 获取单录异常列表
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SINGLE_RECORDING_GET_FAIL_LIST = 'management.cfyf_service.pr_order.single_recording.get-fail-list';

    // ================================= 单录路由 end ============================================== //


    // ========================================= 订单路由 end =================================================== //

    // ========================================= 保单路由 =================================================== //
    // 保单-未绑定产品、险种入口
    const MANAGEMENT_PR_POLICY_UNBIND_LIST_ENTRANCE = 'management.pr_policy.unbind_list.entrance';
    // 保单-未绑定产品计划列表
    const MANAGEMENT_PR_POLICY_GET_UNBIND_PRODUCT_LIST = 'management.pr_policy.get_unbind_product_list';
    // 保单-未绑定产品计划列表
    const MANAGEMENT_PR_POLICY_GET_UNBIND_PRODUCT_PLAN_LIST = 'management.pr_policy.get_unbind_product_plan_list';
    // 保单-未绑定险种列表
    const MANAGEMENT_PR_POLICY_GET_UNBIND_INSURANCE_LIST = 'management.pr_policy.get_unbind_insurance_list';
    // ========================================= 保单路由 =================================================== //

    // ================================= 预核保进度路由 start ============================================== //
    // 预核保进度入口
    const MANAGEMENT_PR_ORDER_PR_PRE_UW_SCHEDULE_ENTRANCE  = 'management.pr-order.pre-uw-schedule-entrance';
    // 预核保进度列表
    const MANAGEMENT_PR_ORDER_PRE_UW_SCHEDULE_PAGE_LIST  = 'management.pr-order.pre-uw-schedule-page-list';
    // 预核保进度详情
    const MANAGEMENT_PR_ORDER_PRE_UW_SCHEDULE_DETAIL = 'management.pr-order.pre-uw-schedule-detail';
    // ================================= 预核保进度路由 end ============================================== //

    // ========================================= 保单修正 =================================================== //
    // 申请保单修正
    const MANAGEMENT_PR_POLICY_MODIFY_POLICY_CATEGORY_LIST = 'management.pr_policy.modify.policy_category_list';
    // 获取电子保单链接
    const MANAGEMENT_PR_POLICY_MODIFY_POLICY_FILE_LINK = 'management.pr_policy.modify.policy_file_link';
    // 申请数据还原
    const MANAGEMENT_PR_POLICY_RECOVERY_POLICY_CATEGORY_LIST = 'management.pr_policy.recovery.policy_category_list';
    // 修正审批列表
    const MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST = 'management.modify_policy_verify.apply_page_list';
    // 修正审批详情
    const MANAGEMENT_MODIFY_POLICY_VERIFY_VERIFY_INFO = 'management.modify_policy_verify.verify_info';
    // 查看申请详情
    const MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO = 'management.modify_policy_verify.apply_info';
    // 个人修正审批列表
    const MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST_PERSONAL = 'management.modify_policy_verify.apply_page_list.personal';
    // 查看个人申请详情
    const MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO_PERSONAL = 'management.modify_policy_verify.apply_info.personal';

    // 修正事项-保额保费
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_PREMIUM_AND_COVERAGE = 'management.modify_policy.category.premium_and_coverage';
    // 修正事项-保单状态
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_STATUS = 'management.modify_policy.category.policy_status';
    // 修正事项-保单状态
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_RENEWAL_INFO = 'management.modify_policy.category.policy_renewal_info';
    // 修正事项-保单豁免
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_EXEMPT = 'management.modify_policy.category.policy_exempt';
    // 修正事项-保障计划
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_PROPOSAL_PLAN = 'management.modify_policy.category.proposal_plan';
    // 修正事项-回访信息
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_VISIT_INFO = 'management.modify_policy.category.visit_info';
    // 修正事项-回执信息
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_RECEIPT_INFO = 'management.modify_policy.category.receipt_info';
    // 修正事项-双录信息
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_DOUBLE_RECORD = 'management.modify_policy.category.double_record';
    // 修正事项-被保人信息
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_INSURANT_INFO = 'management.modify_policy.category.insurant_info';
    // 修正事项-投保人信息
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_APPLICANT_INFO = 'management.modify_policy.category.applicant_info';
    // 修正事项-保单标签
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_INSURANCE_TAG = 'management.modify_policy.category.insurance_tag';
    // 修正事项-补充险种
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_NEW_INSURANCE = 'management.modify_policy.category.new_insurance';
    // 修正事项-险种退保
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_SURRENDER_INSURANCE = 'management.modify_policy.category.surrender_insurance';
    // 修正事项-修改险种
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_EDIT_INSURANCE = 'management.modify_policy.category.edit_insurance';
    // 修正事项-续保信息
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_TURN_TO_RENEWAL = 'management.modify_policy.category.turn_to_renewal';
    // 修正事项-续期信息
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_RENEWAL_TERM = 'management.modify_policy.category.renewal_term';
    // 修正事项-电子保单
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_UPLOAD_POLICY_FILE = 'management.modify_policy.category.upload_policy_file';
    // 修正事项-年金领取
    const MANAGEMENT_MODIFY_POLICY_CATEGORY_ANNUITY_CLAIM = 'management.modify_policy.category.annuity_claim';
    // ========================================= 保单修正 =================================================== //

    // ========================================= 保单批量修正 =================================================== //
    // 批量修正事项-保额保费
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_PREMIUM_AND_COVERAGE = 'management.multi_modify_policy.category.premium_and_coverage';
    // 批量修正事项-保障计划
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_PROPOSAL_PLAN = 'management.multi_modify_policy.category.proposal_plan';
    // 批量修正事项-回访信息
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_VISIT_INFO = 'management.multi_modify_policy.category.visit_info';
    // 批量修正事项-回执信息
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_RECEIPT_INFO = 'management.multi_modify_policy.category.receipt_info';
    // 批量修正事项-双录信息
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_DOUBLE_RECORD = 'management.multi_modify_policy.category.double_record';
    // 批量修正事项-保单标签
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_INSURANCE_TAG = 'management.multi_modify_policy.category.insurance_tag';
    // 批量修正事项-补充险种
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_NEW_INSURANCE = 'management.multi_modify_policy.category.new_insurance';

    // 修正记录列表
    const MANAGEMENT_MULTI_MODIFY_POLICY_APPLY_LOG_PAGE_LIST = 'management.multi_modify_policy.apply_log.page_list';
    // 批量修正
    const MANAGEMENT_MULTI_MODIFY_POLICY_CATEGORY_LIST = 'management.multi_modify_policy.category_list';
    // 批量修正错误列表
    const MANAGEMENT_MULTI_MODIFY_POLICY_ERROR_LIST = 'management.multi_modify_policy.error_list';
    // 导出批量修正错误列表
    const MANAGEMENT_MULTI_MODIFY_POLICY_EXPORT_ERROR_LIST = 'management.multi_modify_policy.export_error_list`log`';
    // 下载批量修正文件
    const MANAGEMENT_MULTI_MODIFY_POLICY_DOWNLOAD_FILE = 'management.multi_modify_policy.download_file`log`';
    // ========================================= 保单批量修正 =================================================== //

    // ========================================= 保单路由 =================================================== //
    /** 保单列表（分页） **/
    const MANAGEMENT_POLICY_PAGE_LIST = 'management.policy.page_list';
    /** 保单详情 **/
    const MANAGEMENT_POLICY_DETAIL = 'management.policy.detail';
    /** 下载电子保单 **/
    const MANAGEMENT_POLICY_DETAIL_DOWNLOAD_POLICY_FILE = 'management.policy.detail.download_policy_file`log`';
    /** 保单状态 **/
    const MANAGEMENT_POLICY_GET_POLICY_STATUS = 'management.policy.get_policy_status`auth_needless`';
    /** 回访状态 **/
    const MANAGEMENT_POLICY_GET_VISIT_STATUS = 'management.policy.get_visit_status`auth_needless`';
    /** 续期续保清单列表 */
    const MANAGEMENT_POLICY_RENEWAL_STAGE_PAGE_LIST = 'management.policy.renewal_stage.page_list';

    /** 保险公司排行榜 */
    const MANAGEMENT_POLICY_SUPPLIER_STATISTICS = 'management.policy.supplier.statistics';
    /** 部门销售排行榜 */
    const MANAGEMENT_POLICY_DEPARTMENT_STATISTICS = 'management.policy.department.statistics';
    /** 月度排行榜 */
    const MANAGEMENT_POLICY_MONTH_STATISTICS = 'management.policy.month.statistics';
    /** 所有出单月份 */
    const MANAGEMENT_POLICY_ALL_MONTHS = 'management.policy.all_months`auth_needless`';
    /** 投保周期筛选项 */
    const MANAGEMENT_POLICY_DIFF_DAYS_CONFIG = 'management.policy.diff_days_config`auth_needless`';
    /** 保险公司排行榜导出 */
    const MANAGEMENT_POLICY_SUPPLIER_STATISTICS_EXPORT = 'management.policy.supplier.statistics_export';
    /** 部门销售排行榜导出 */
    const MANAGEMENT_POLICY_DEPARTMENT_STATISTICS_EXPORT = 'management.policy.department.statistics_export';
    /** 地区筛选列表 */
    const MANAGEMENT_POLICY_BASE_REGION_LIST = 'management.policy.base.region.list';
    /** 保单导出 */
    const MANAGEMENT_POLICY_EXPORT = 'management.policy.export';
    /** 订单列表-客户详情 */
    const MANAGEMENT_POLICY_GET_CUSTOMER_DETAIL = 'management.policy.get_customer_detail';
    // ========================================= 保单路由 =================================================== //

    // ========================================= 产品路由 =================================================== //
    /** 新增保险产品 **/
    const MANAGEMENT_PRODUCT_CREATE = 'management.product.create`log`';
    /** 保险产品详情 **/
    const MANAGEMENT_PRODUCT_DETAIL = 'management.product.detail';
    /** 更新保险产品 **/
    const MANAGEMENT_PRODUCT_UPDATE = 'management.product.update`log`';
    /** 删除保险产品 **/
    const MANAGEMENT_PRODUCT_DELETE = 'management.product.delete`log`';
    /** 保险产品列表（分页） **/
    const MANAGEMENT_PRODUCT_GET_PAGE_LIST = 'management.product.get_page_list';
    /** 保险产品列表 **/
    const MANAGEMENT_PRODUCT_GET_LIST = 'management.product.get_list`auth_needless`';
    /** 批量保存产品分组 **/
    const MANAGEMENT_PRODUCT_BATCH_SAVE_GROUP = 'management.product.batch_save_group`log`';

    /** 新增保险产品分组 **/
    /** 新增分组 **/
    const MANAGEMENT_PRODUCT_GROUP_CREATE = 'management.product.group.create`log`';
    /** 分组列表（分页） **/
    const MANAGEMENT_PRODUCT_GROUP_GET_PAGE_LIST = 'management.product.group.get_page_list';
    /** 分组列表 **/
    const MANAGEMENT_PRODUCT_GROUP_GET_LIST = 'management.product.group.get_list';

    /** 保监分类 */
    /** 保监分类列表  */
    const MANAGEMENT_PRODUCT_GET_INSURANCE_CATEGORY = 'management.product.get_insurance_category`auth_needless`';
    // ========================================= 产品路由 =================================================== //

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
    /** 设置内部管理员细分管理外部公司 */
    const MANAGEMENT_SYS_USER_MANAGE_SPECIFIC_COMPANY = 'management.sys_user.set_manage_specific_company`log`';
    /**启用插件采集状态编辑**/
    const MANAGEMENT_SYS_USER_SAVE_EXTENSION_STATUS = 'management.sys_user.save_extension_status`log`';

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

    // ========================================= 供应商路由 =================================================== //
    /** 新增供应商 **/
    const MANAGEMENT_SUPPLIER_CREATE = 'management.supplier.create`log`';
    /** 供应商详情 **/
    const MANAGEMENT_SUPPLIER_DETAIL = 'management.supplier.detail';
    /** 更新供应商 **/
    const MANAGEMENT_SUPPLIER_UPDATE = 'management.supplier.update`log`';
    /** 删除供应商 **/
    const MANAGEMENT_SUPPLIER_DELETE = 'management.supplier.delete`log`';
    /** 供应商列表（分页） **/
    const MANAGEMENT_SUPPLIER_GET_PAGE_LIST = 'management.supplier.get_page_list';
    /** 供应商列表 **/
    const MANAGEMENT_SUPPLIER_GET_LIST = 'management.supplier.get_list`auth_needless`';
    /** 供应商名称列表 **/
    const MANAGEMENT_SUPPLIER_GET_NAME_LIST = 'management.supplier.get_name_list`auth_needless`';
    /** 通过公司类型获取协议有效期内供应商列表 **/
    const MANAGEMENT_SUPPLIER_GET_SUPPLIERS = 'management.supplier.get_suppliers`auth_needless`';
    /** 获取本部公司信息 **/
    const MANAGEMENT_SUPPLIER_GET_HEADQUARTERS = 'management.supplier.get_headquarters`auth_needless`';
    /** 新增供应商协议 **/
    const MANAGEMENT_SUPPLIER_AGREEMENT_CREATE = 'management.supplier.agreement.create`log`';
    /** 供应商协议详情 **/
    const MANAGEMENT_SUPPLIER_AGREEMENT_DETAIL = 'management.supplier.agreement.detail';
    /** 更新供应商协议 **/
    const MANAGEMENT_SUPPLIER_AGREEMENT_UPDATE = 'management.supplier.agreement.update`log`';
    /** 供应商协议列表 **/
    const MANAGEMENT_SUPPLIER_AGREEMENT_GET_LIST = 'management.supplier.agreement.get_list';
    // ========================================= 供应商路由 =================================================== //

    // ========================================= 产品接入供应商路由 =================================================== //
    /** 供应商列表（分页） **/
    const MANAGEMENT_PR_SUPPLIER_GET_PAGE_LIST = 'management.pr_supplier.get_page_list';
    /** 供应商详情 **/
    const MANAGEMENT_PR_SUPPLIER_DETAIL = 'management.pr_supplier.detail';
    /** 供应商编辑 **/
    const MANAGEMENT_PR_SUPPLIER_UPDATE = 'management.pr_supplier.update`log`';
    /** 供应商对接信息 **/
    const MANAGEMENT_PR_SUPPLIER_DOCKING_INFO = 'management.pr_supplier.docking_info';
    /** 供应商对接信息详情 **/
    const MANAGEMENT_PR_SUPPLIER_DOCKING_INFO_DETAIL = 'management.pr_supplier.docking_info_detail';
    /** 接入设置-码表列表 **/
    const MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_LIST = 'management.pr_supplier.docking_code_table_list';
    /** 接入设置-码表详情 **/
    const MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_DETAIL = 'management.pr_supplier.docking_code_table_detail';
    /** 接入设置-码表详情-查看应用分支产品 **/
    const MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_BIND_PRODUCTS = 'management.pr_supplier.docking_code_table_bind_products';
    /** 接入设置-码表详情-下载 **/
    const MANAGEMENT_PR_SUPPLIER_DOCKING_CODE_TABLE_DOWNLOAD = 'management.pr_supplier.docking_code_table_download';
    /** 接入设置-状态映射详情 **/
    const MANAGEMENT_PR_SUPPLIER_DOCKING_STATUS_MAPPING_DETAIL = 'management.pr_supplier.docking_status_mapping_detail';
    /** 理赔服务详情 **/
    const MANAGEMENT_PR_SUPPLIER_GET_CLAIM_EXPLAIN_INFO = 'management.pr_supplier.claim_explain_info';
    /** 编辑理赔服务 **/
    const MANAGEMENT_PR_SUPPLIER_UPDATE_CLAIM_EXPLAIN = 'management.pr_supplier.update_claim_explain`log`';
    /** 供应商-协议-创建分类 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE_CATEGORY = 'management.pr_supplier.agreement.create_category`log`';
    /** 供应商-协议-分类详情 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_CATEGORY_DETAIL = 'management.pr_supplier.agreement.category_detail';
    /** 供应商-协议-编辑分类 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_CATEGORY = 'management.pr_supplier.agreement.update_category`log`';
    /** 供应商-协议-上传协议 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE = 'management.pr_supplier.agreement.create`log`';
    /** 供应商-协议-协议分类列表 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_CATEGORY_LIST = 'management.pr_supplier.agreement.category_list';
    /** 供应商-协议-通过分类获取协议列表 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_LIST_BY_CATEGORY = 'management.pr_supplier.agreement.agreement_list_by_category';
    /** 供应商-协议-协议详情 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_DETAIL = 'management.pr_supplier.agreement.detail';
    /** 供应商-协议-更新协议并应用分支产品 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS = 'management.pr_supplier.agreement.update_with_branch_products`log`';
    /** 供应商-协议-获取应用分支产品列表 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_GET_BIND_BRANCH_PRODUCT_LIST = 'management.pr_supplier.agreement.get_bind_branch_product_list';
    /** 供应商-协议-更新协议绑定的分支产品关系 **/
    const MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION = 'management.pr_supplier.agreement.update_branch_product_relation`log`';
    /** 单录设置详情 **/
    const MANAGEMENT_PR_SUPPLIER_SINGLE_RECORDING_DETAIL = 'management.pr_supplier.single_recording_detail';
    // ========================================= 产品接入供应商路由 =================================================== //

    // ========================================= 产品接入本部公司路由 =================================================== //
    /** 本部公司列表（分页） **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_GET_PAGE_LIST = 'management.pr_headquarter_company.get_page_list';
    /** 本部公司详情 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_DETAIL = 'management.pr_headquarter_company.detail';
    /** 本部公司编辑 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_UPDATE = 'management.pr_headquarter_company.update`log`';
    /** 本部公司-协议-创建分类 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE_CATEGORY = 'management.pr_headquarter_company.agreement.create_category`log`';
    /** 本部公司-协议-分类详情 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CATEGORY_DETAIL = 'management.pr_headquarter_company.agreement.category_detail';
    /** 本部公司-协议-编辑分类 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_CATEGORY = 'management.pr_headquarter_company.agreement.update_category`log`';
    /** 本部公司-协议-上传协议 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE = 'management.pr_headquarter_company.agreement.create`log`';
    /** 本部公司-协议-协议分类列表 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CATEGORY_LIST = 'management.pr_headquarter_company.agreement.category_list';
    /** 本部公司-协议-通过分类获取协议列表 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_LIST_BY_CATEGORY = 'management.pr_headquarter_company.agreement.agreement_list_by_category';
    /** 本部公司-协议-协议详情 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_DETAIL = 'management.pr_headquarter_company.agreement.detail';
    /** 本部公司-协议-更新协议并应用分支产品 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS = 'management.pr_headquarter_company.agreement.update_with_branch_products`log`';
    /** 本部公司-协议-获取应用分支产品列表 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_GET_BIND_BRANCH_PRODUCT_LIST = 'management.pr_headquarter_company.agreement.get_bind_branch_product_list';
    /** 本部公司-协议-更新协议绑定的分支产品关系 **/
    const MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION = 'management.pr_headquarter_company.agreement.update_branch_product_relation`log`';
    // ========================================= 产品接入本部公司路由 =================================================== //

    // ========================================= 奖励方案 =================================================== //
    // 入口
    const MANAGEMENT_UPSTREAM_RECONCILIATION_AWARD_AWARD_ENTRANCE = 'management.upstream_reconciliation.award.entrance';
    // 方案列表
    const MANAGEMENT_UPSTREAM_RECONCILIATION_AWARD_AWARD_SCHEME_PAGE = 'management.upstream_reconciliation.award.award_scheme_page';
    // 创建方案
    const MANAGEMENT_UPSTREAM_RECONCILIATION_AWARD_CREATE_AWARD_SCHEME = 'management.upstream_reconciliation.award.create_award_scheme`log`';
    // 公共路由key
    const MANAGEMENT_UPSTREAM_RECONCILIATION_AWARD_COMMON_AWARD_ROUTE = 'management.upstream_reconciliation.award.common_award_route`log`';
    // 编辑方案
    const MANAGEMENT_UPSTREAM_RECONCILIATION_AWARD_EDIT_AWARD_SCHEME = 'management.upstream_reconciliation.award.edit_award_scheme`log`';
    // 复制方案
    const MANAGEMENT_UPSTREAM_RECONCILIATION_AWARD_COPY_AWARD_SCHEME = 'management.upstream_reconciliation.award.copy_award_scheme`log`';
    // 方案详情
    const MANAGEMENT_UPSTREAM_RECONCILIATION_AWARD_SCHEME_DETAILS = 'management.upstream_reconciliation.award.award_scheme_details';
    // ========================================= 奖励方案 =================================================== //

    // ========================================= 投保客户路由 =================================================== //
//    /** 我的客户列表（分页） **/
//    const MANAGEMENT_INSURE_CUSTOMER_PAGE_LIST = 'management.insure.customer.page_list';
//    /** 我的客户详情 **/
//    const MANAGEMENT_INSURE_CUSTOMER_DETAIL = 'management.insure.customer.detail';
    // ========================================= 投保客户路由 =================================================== //

    // ========================================= 互动客户路由 =================================================== //
    /** 互动客户-互动列表--公众号 **/
    const MANAGEMENT_IM_CUSTOMER_WX_ALIAS = 'management.im.customer.wx.alias';
    /** 互动客户-获取微信公众号列表 **/
    const MANAGEMENT_IM_CUSTOMER_WX_ALIAS_OPTIONS = 'management.im.customer.wx.alias.options`auth_needless`';
    /** 互动客户-最近聊天记录 */
    const MANAGEMENT_IM_CUSTOMER_RECENT_MESSAGES = 'management.im.customer.recent.messages`auth_needless`';
    /** 互动客户启用的公众号 */
    const MANAGEMENT_IM_CUSTOMER_ENABLE_ALIAS_LIST = 'management.im.customer.enable.alias.list`auth_needless`';
    /** 互动客户-特殊标记选项列表 */
    const MANAGEMENT_IM_CUSTOMER_SPECIAL_SIGN_OPTIONS = 'management.im.customer.special.sign.options`auth_needless`';
    /** 互动客户-用户标签列表 */
    const MANAGEMENT_IM_CUSTOMER_ALL_USER_TAGS = 'management.im.customer.user.all.tags`auth_needless`';
    /** 互动客户-用户来源筛选列表 */
    const MANAGEMENT_IM_CUSTOMER_USER_SOURCE_OPTIONS = 'management.im.customer.user.source.options';
    /** 互动客户-获取聊天记录 **/
    const MANAGEMENT_PERSONAL_IM_CUSTOMER_GET_MESSAGES = 'management.personal.im.customer.get.messages`auth_needless`';
    /** 互动客户-用户轨迹 */
    const MANAGEMENT_IM_CUSTOMER_USER_TRAJECTORY = 'management.im.customer.all.user.trajectory';
    /** 我的互动客户-获取用户所属专家、顾问信息 */
    const MANAGEMENT_IM_CUSTOMER_BELONG_SALES_INFO = 'management.im.customer.belong.sales.info`auth_needless`';
    /** 互动客户-全部客户 */
    const MANAGEMENT_IM_CUSTOMER_ALL_USERS_FOR_ADMIN = 'management.im.customer.all.users.for.admin';
    /** 互动客户-统计接待排名 */
    const MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_RANK_FOR_ADMIN = 'management.im.customer.adviser_statistics.reception.rank.for.admin';
    /** 互动客户-统计预约率排名 */
    const MANAGEMENT_IM_CUSTOMER_STATISTICS_APPOINTMENT_RATE_RANK_FOR_ADMIN = 'management.im.customer.adviser_statistics.appointment_rate.rank.for.admin';
    /** 互动客户-统计预约数排名 */
    const MANAGEMENT_IM_CUSTOMER_STATISTICS_APPOINTMENT_UV_RANK_FOR_ADMIN = 'management.im.customer.adviser_statistics.appointment_uv.rank.for.admin';
    /** 互动客户-统计接待数排名 */
    const MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_UV_RANK_FOR_ADMIN = 'management.im.customer.adviser_statistics.reception_uv.rank.for.admin';
    /** 互动客户-统计接待汇总 */
    const MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_SUMMARY_FOR_ADMIN = 'management.im.customer.adviser_statistics.reception_summary.for.admin';
    /** 互动客户-导出接待排名 */
    const MANAGEMENT_IM_CUSTOMER_STATISTICS_RECEPTION_RANK_EXPORT_FOR_ADMIN = 'management.im.customer.adviser_statistics.reception_rank_export.for.admin';
    /** 我的互动客户-获取用户来源信息 */
    /** 互动客户-获取用户来源信息 */
    const MANAGEMENT_IM_CUSTOMER_USER_SOURCE_INFO = 'management.im.customer.user.source.info`auth_needless`';
    // 分类选择列表
    const MANAGEMENT_IM_COMMON_CATEGORY_GROUP_WITH_CATEGORY_LIST = 'management.im.customer.category_group_with_category_list`auth_needless`';
    // 顾问分配明细
    const MANAGEMENT_IM_COMMON_CATEGORY_ADVISER_ASSIGN_RECORD = 'management.im.common_category.adviser_assign_record';
    // ========================================= 互动客户路由 =================================================== //

    // ========================================= 分组设置 start=================================================== //
    // 互动配置管理-分组设置-入口
    const MANAGEMENT_IM_TEAM_ENTRANCE = 'management.im.team.entrance';
    /** 分组设置列表（分页） **/
    const MANAGEMENT_IM_TEAM_PAGE_LIST = 'management.im_team.page_list';
    /** 启用中的微信公众号列表 **/
    const MANAGEMENT_IM_TEAM_ENABLE_WX_ALIAS_LIST = 'management.im_team.enable_wx_alias_list`auth_needless`';
    /** 顾问列表 **/
    const MANAGEMENT_IM_TEAM_ADVISER_LIST = 'management.im_team.adviser_list`auth_needless`';
    /** 新增分组 **/
    const MANAGEMENT_IM_TEAM_STORE = 'management.im_team.store';
    /** 编辑分组 **/
    const MANAGEMENT_IM_TEAM_UPDATE = 'management.im_team.update';
    /** 解散分组 **/
    const MANAGEMENT_IM_TEAM_DISSOLUTION = 'management.im_team.dissolution';
    /** 分组详情 **/
    const MANAGEMENT_IM_TEAM_DETAIL = 'management.im_team.detail';
    /** 分组选项列表 **/
    const MANAGEMENT_IM_TEAM_OPTIONS = 'management.im_team.options';

    // ========================================= 分组设置 end =================================================== //

    // ========================================= 数据报表路由 =================================================== //
    /** 新增监管报表 **/
    const MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_CREATE = 'management.data_report.regulatory_statement.create`log`';
    /** 监管报表列表 **/
    const MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_PAGE_LIST = 'management.data_report.regulatory_statement.page_list';
    /** 业务报表分页列表 **/
    const MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_PAGE_LIST = 'management.data_report.business_statement.page_list';
    /** 生成业务报表 **/
    const MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_GENERATE_REPORT = 'management.data_report.business_statement.generate_report';
    /** 下载业务报表 **/
    const MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_DOWNLOAD_REPORT = 'management.data_report.business_statement.download_report`log`';
    // ========================================= 数据报表路由 =================================================== //

    // ========================================= 非现场保监报表路由 =================================================== //
    /** 保监报表任务分页列表 **/
    const MANAGEMENT_DATA_REPORT_IRS_TASK_PAGE_LIST = 'management.data_report.irs.task.page_list';
    /** 新增保监报表任务 **/
    const MANAGEMENT_DATA_REPORT_IRS_TASK_CREATE = 'management.data_report.irs.task.create`log`';
    /** 编辑保监报表任务 **/
    const MANAGEMENT_DATA_REPORT_IRS_TASK_UPDATE = 'management.data_report.irs.task.update`log`';
    /** 确认保监报表任务 **/
    const MANAGEMENT_DATA_REPORT_IRS_TASK_CONFIRM = 'management.data_report.irs.task.confirm`log`';
    /** 批量下载保监报表 **/
    const MANAGEMENT_DATA_REPORT_IRS_TASK_DOWNLOAD_ZIP = 'management.data_report.irs.task.download_zip`log`';

    /** 保监报表文件分页列表 **/
    const MANAGEMENT_DATA_REPORT_IRS_FILE_PAGE_LIST = 'management.data_report.irs.file.page_list';
    /** 上传保监报表文件 **/
    const MANAGEMENT_DATA_REPORT_IRS_FILE_UPLOAD = 'management.data_report.irs.file.upload`log`';
    /** 下载保监报表文件 **/
    const MANAGEMENT_DATA_REPORT_IRS_FILE_DOWNLOAD = 'management.data_report.irs.file.download`log`';
    /** 生成保监报表文件 **/
    const MANAGEMENT_DATA_REPORT_IRS_FILE_GENERATE = 'management.data_report.irs.file.generate`log`';
    /** 确认保监报表文件 **/
    const MANAGEMENT_DATA_REPORT_IRS_FILE_CONFIRM = 'management.data_report.irs.file.confirm`log`';
    // ========================================= 非现场保监报表路由 =================================================== //

    // ========================================= 财务对账路由 =================================================== //
    /** 财务报表 **/
    /** 上传财务报表 **/
    const MANAGEMENT_FINANCE_FILE_UPLOAD = 'management.finance.file.upload`log`';
    /** 财务报表上传记录 **/
    const MANAGEMENT_FINANCE_FILE_PAGE_LIST = 'management.finance.file.page_list';
    /** 财务报表解析错误记录 **/
    const MANAGEMENT_FINANCE_FILE_ERR_PAGE_LIST = 'management.finance.file.err.page_list';
    /** 财务报表解析错误记录 **/
    const MANAGEMENT_FINANCE_FILE_ERR_EXPORT = 'management.finance.file.err.export`log`';
    /** 获取未对账清单 **/
    const MANAGEMENT_FINANCE_UNRECONCILED_PAGE_LIST = 'management.finance.unreconciled.page_list';
    /** 导出未对账清单 **/
    const MANAGEMENT_FINANCE_UNRECONCILED_EXPORT = 'management.finance.unreconciled.export`log`';
    /** 导出结算清单 **/
    const MANAGEMENT_FINANCE_RECONCILED_EXPORT = 'management.finance.reconciled.export`log`';
    /** 获取未对账清单详情 **/
    const MANAGEMENT_FINANCE_UNRECONCILED_DETAIL = 'management.finance.unreconciled.detail';
    /** 获取结算清单 **/
    const MANAGEMENT_FINANCE_RECONCILED_PAGE_LIST = 'management.finance.reconciled.page_list';
    /** 获取结算清单详情 **/
    const MANAGEMENT_FINANCE_RECONCILED_DETAIL = 'management.finance.reconciled.detail';
    /** 获取保单详情的结算清单表格 **/
    const MANAGEMENT_FINANCE_RECONCILED_FOR_POLICY_PAGE_LIST = 'management.finance.reconciled.for.policy.page_list';

    // ========================================= 云服导入账单路由 start =================================================== //
    /** 云服账单--入口 **/
    const MANAGEMENT_CFYF_BILL_DATA_ENTRANCE = 'management.cfyf_bill_data.entrance';
    /** 上传云服账单文件 **/
    const MANAGEMENT_CFYF_BILL_DATA_UPLOAD = 'management.cfyf_bill_data.upload';
    /** 云服账单文件列表 **/
    const MANAGEMENT_CFYF_BILL_DATA_PAGE_LIST = 'management.cfyf_bill_data.page_list';
    /** 云服账单文件待发起列表 **/
    const MANAGEMENT_CFYF_BILL_DATA_WAIT_INITIATED_PAGE_LIST = 'management.cfyf_bill_data.wait_initiated_page_list';
    /** 云服账单文件已发起列表 **/
    const MANAGEMENT_CFYF_BILL_DATA_INITIATED_PAGE_LIST = 'management.cfyf_bill_data.initiated_page_list';
    /** 删除云服账单文件 **/
    const MANAGEMENT_CFYF_BILL_DATA_DELETE_FILE = 'management.cfyf_bill_data.delete_file';
    /** 获取文件上传对比错误日志 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_ERROR_REASON = 'management.cfyf_bill_data.get_error_reason';
    /** 提交确认发起 **/
    const MANAGEMENT_CFYF_BILL_DATA_CONFIRM_BILL_FILE = 'management.cfyf_bill_data.confirm_bill_file';
    /** 获取文件详情 **/
    const MANAGEMENT_CFYF_BILL_DATA_FILE_DETAIL = 'management.cfyf_bill_data.file_detail';
    /** 获取待发起文件详情 **/
    const MANAGEMENT_CFYF_BILL_DATA_WAIT_INITIATED_FILE_DETAIL = 'management.cfyf_bill_data.wait_initiated_file_detail';
    /** 获取已发起文件详情 **/
    const MANAGEMENT_CFYF_BILL_DATA_INITIATED_FILE_DETAIL = 'management.cfyf_bill_data.initiated_file_detail';
    /** 获取账单文件上传对比归档解析失败记录 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_DOSSIER_ERROR_REASON = 'management.cfyf_bill_data.get_dossier_error_reason';
    /** 归档错误记录的处理 **/
    const MANAGEMENT_CFYF_BILL_DATA_HANDLE_DOSSIER_FAIL_STATUS = 'management.cfyf_bill_data.handle_dossier_fail_status';
    /** 处理中列表 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_CONFIRM_PAGE_LIST = 'management.cfyf_bill_data.get_confirm_page_list';
    /** 处理中详情明细 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_CONFIRM_DETAIL = 'management.cfyf_bill_data.get_confirm_detail';
    /** 获取公司账单明细 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_COMPANY_POLICY_DETAIL = 'management.cfyf_bill_data.get_company_policy_detail';
    /** 财务审核批次 **/
    const MANAGEMENT_CFYF_BILL_DATA_AUDIT_BATCH = 'management.cfyf_bill_data.audit_batch';
    /** 归档账单列表 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_RECORD_PAGE_LIST = 'management.cfyf_bill_data.get_archive_record_page_list';
    /** 归档详情 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_DETAIL = 'management.cfyf_bill_data.get_archive_detail';
    /** 获取归档公司账单明细 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_ARCHIVE_RECORD_DETAIL = 'management.cfyf_bill_data.get_archive_record_detail';
    /** 已处理驳回文件 **/
    const MANAGEMENT_CFYF_BILL_DATA_REJECTED_FILE_PROCESSED = 'management.cfyf_bill_data.rejected_file_processed';
    /** 云服账单导入-公司汇总数据 **/
    const MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_COMPANY = 'management.cfyf_bill_data.export_policy_bill_company';
    /** 云服账单导入-账单保单明细 **/
    const MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_RECORD = 'management.cfyf_bill_data.export_policy_bill_record';
    /** 云服账单导入-解析失败记录 **/
    const MANAGEMENT_CFYF_BILL_DATA_EXPORT_BILL_FILE_FAIL_LOG = 'management.cfyf_bill_data.export_bill_file_fail_log';
    /** 云服账单导入-获取异常数据 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_BILL_EXCEPTION_LIST = 'management.cfyf_bill_data.get_bill_exception_list';
    /** 云服账单导入-异常列表处理状态更新 **/
    const MANAGEMENT_CFYF_BILL_DATA_PROCESSED_EXCEPTION_HANDLE_STATUS = 'management.cfyf_bill_data.processed_exception_handle_status';

    /** 云服账单导入-账单保单明细-处理中 **/
    const MANAGEMENT_CFYF_BILL_DATA_EXPORT_POLICY_BILL_RECORD_HANDLE = 'management.cfyf_bill_data.export_policy_bill_record_handle';

    /** 获取归档账单明细分页列表 **/
    const MANAGEMENT_CFYF_BILL_DATA_GET_BILL_ARCHIVE_RECORD_PAGE_LIST = 'management.cfyf_bill_data.get_bill_archive_record_page_list';
    /** 导出归档账单明细分页列表 **/
    const MANAGEMENT_CFYF_BILL_DATA_EXPORT_BILL_POLICY_BILL_RECORD_PAGE_LIST = 'management.cfyf_bill_data.export_bill_policy_bill_record_page_list';
    // ========================================= 云服导入账单路由 end =================================================== //

    // ========================================= 云服导入账单路由-公司维度 start =================================================== //

    /** 云服账单文件待发起列表 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_WAIT_INITIATED_PAGE_LIST = 'management.cfyf_bill_co_data.wait_initiated_page_list';
    /** 云服账单文件已发起列表 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_INITIATED_PAGE_LIST = 'management.cfyf_bill_co_data.initiated_page_list';
    /** 获取待发起文件详情 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_WAIT_INITIATED_FILE_DETAIL = 'management.cfyf_bill_co_data.wait_initiated_file_detail';
    /** 获取已发起文件详情 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_INITIATED_FILE_DETAIL = 'management.cfyf_bill_co_data.initiated_file_detail';
    /** 上传云服账单文件 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_UPLOAD = 'management.cfyf_bill_co_data.upload';
    /** 云服账单文件列表 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_PAGE_LIST = 'management.cfyf_bill_co_data.page_list';
    /** 删除云服账单文件 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_DELETE_FILE = 'management.cfyf_bill_co_data.delete_file';
    /** 获取文件上传对比错误日志 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_GET_ERROR_REASON = 'management.cfyf_bill_co_data.get_error_reason';
    /** 提交确认发起 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_CONFIRM_BILL_FILE = 'management.cfyf_bill_co_data.confirm_bill_file';
    /** 获取文件详情 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_FILE_DETAIL = 'management.cfyf_bill_co_data.file_detail';
    /** 获取账单文件上传对比归档解析失败记录 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_GET_DOSSIER_ERROR_REASON = 'management.cfyf_bill_co_data.get_dossier_error_reason';
    /** 归档错误记录的处理 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_HANDLE_DOSSIER_FAIL_STATUS = 'management.cfyf_bill_co_data.handle_dossier_fail_status';
    /** 处理中列表 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_GET_CONFIRM_PAGE_LIST = 'management.cfyf_bill_co_data.get_confirm_page_list';
    /** 获取公司账单明细 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_GET_COMPANY_POLICY_DETAIL = 'management.cfyf_bill_co_data.get_company_policy_detail';
    /** 财务审核批次 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_AUDIT_BATCH = 'management.cfyf_bill_co_data.audit_batch';
    /** 归档账单列表 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_GET_ARCHIVE_RECORD_PAGE_LIST = 'management.cfyf_bill_co_data.get_archive_record_page_list';
    /** 获取归档公司账单明细 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_GET_ARCHIVE_RECORD_DETAIL = 'management.cfyf_bill_co_data.get_archive_record_detail';
    /** 已处理驳回文件 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_REJECTED_FILE_PROCESSED = 'management.cfyf_bill_co_data.rejected_file_processed';
    /** 云服账单导入-公司汇总数据 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_COMPANY = 'management.cfyf_bill_co_data.export_policy_bill_company';
    /** 云服账单导入-账单保单明细 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_RECORD = 'management.cfyf_bill_co_data.export_policy_bill_record';
    /** 云服账单导入-账单保单明细-处理中 **/
    const MANAGEMENT_CFYF_BILL_CO_DATA_EXPORT_POLICY_BILL_RECORD_HANDLE = 'management.cfyf_bill_co_data.export_policy_bill_record_handle';

    // ========================================= 云服导入账单路由 end =================================================== //


    /** 结算批次 **/
    /** 新增结算批次 **/
    const MANAGEMENT_FINANCE_BATCH_CREATE = 'management.finance.batch.create`log`';
    /** 获取结算清单 用于新建批次 **/
    const MANAGEMENT_FINANCE_RECONCILED_FOR_BATCH_PAGE_LIST = 'management.finance.reconciled.batch.page_list';
    /** 解散结算批次 **/
    const MANAGEMENT_FINANCE_BATCH_DELETE = 'management.finance.batch.delete`log`';
    /** 结算批次详情 **/
    const MANAGEMENT_FINANCE_BATCH_DETAIL = 'management.finance.batch.detail';
    /** 结算批次列表 筛选项 **/
    const MANAGEMENT_FINANCE_BATCH_LIST = 'management.finance.batch.list`auth_needless`';
    /** 结算批次列表 **/
    const MANAGEMENT_FINANCE_BATCH_PAGE_LIST = 'management.finance.batch.page_list';
    /** 结算批次列表导出 **/
    const MANAGEMENT_FINANCE_BATCH_EXPORT = 'management.finance.batch.export';
    /** 录入发票信息 **/
    const MANAGEMENT_FINANCE_BATCH_RECORD_INVOICE = 'management.finance.batch.record.invoice`log`';
    /** 录入结算信息 **/
    const MANAGEMENT_FINANCE_BATCH_RECORD_SETTLE = 'management.finance.batch.record.settle`log`';
    /** 移入结算批次 **/
    const MANAGEMENT_FINANCE_BATCH_ADD_DATA = 'management.finance.batch.add.data`log`';
    /** 移出结算批次 **/
    const MANAGEMENT_FINANCE_BATCH_DEL_DATA = 'management.finance.batch.del.data`log`';

    /** CRM标保 **/
    // 创建单个保单重算标保任务
    const CREATE_SINGLE_POLICY_CLEAR_SFYP_TASK = 'management.create_single_policy_clear_sfyp_task';
    // 创建多个保单重算标保任务
    const CREATE_MULTIPLE_POLICY_CLEAR_SFYP_TASK = 'management.create_multiple_policy_clear_sfyp_task';
    // 保单标保信息
    const MANAGEMENT_POLICY_SFYP_INFO = 'management.management_policy_sfyp_info';

    /** 薪酬 **/
    /** 薪酬列表 **/
    const MANAGEMENT_FINANCE_CRM_SALARY_PAGE_LIST = 'management.finance.crm_salary.page_list';
    /** 上传薪酬文件 **/
    const MANAGEMENT_FINANCE_CRM_SALARY_UPLOAD_FILE = 'management.finance.crm_salary.upload_file`log`';
    /** 薪酬文件上传记录列表 **/
    const MANAGEMENT_FINANCE_CRM_SALARY_FILE_PAGE_LIST = 'management.finance.crm_salary.file_page_list';
    /** 备注薪酬文件上传记录 **/
    const MANAGEMENT_FINANCE_CRM_SALARY_REMARK_UPLOADED_FILE = 'management.finance.crm_salary.remark_uploaded_file';
    /** 人力薪酬列表导出 **/
    const MANAGEMENT_FINANCE_CRM_SALARY_EXPORT = 'management.finance.crm_salary.export';
    /** 发送人力薪酬解密短信 */
    const MANAGEMENT_FINANCE_CRM_SALARY_SEND_DECRYPT_SMS = 'management.finance.crm_salary.send_decrypt_sms';
    /** 获取发送人力薪酬解密短信随机图片验证码 */
    const MANAGEMENT_FINANCE_CRM_SALARY_ROUND_IMG_CODE = 'management.finance.crm_salary.sms_round_img_code';
    /** 人力薪酬解密 */
    const MANAGEMENT_FINANCE_CRM_SALARY_DECRYPT = 'management.finance.crm_salary.decrypt';

    // ==========================================手续费归档===================================================== //
    /** 归档订单列表 */
    const MANAGEMENT_FINANCE_REC_POLICY_PAGE_LIST = 'management.finance.rec_policy.page_list';
    /** 上传归档订单列表 */
    const MANAGEMENT_FINANCE_REC_POLICY_UPLOAD_FILE = 'management.finance.rec_policy.upload_file';
    /** 导出归档订单列表 */
    const MANAGEMENT_FINANCE_REC_POLICY_EXPORT_REC_POLICY = 'management.finance.rec_policy.export_rec_policy';
    /** 导入详情 */
    const MANAGEMENT_FINANCE_REC_POLICY_FILE_LIST = 'management.finance.rec_policy.file_list';
    /** 下载某个导入文件所属订单 */
    const MANAGEMENT_FINANCE_REC_POLICY_FILE_REC_POLICY = 'management.finance.rec_policy.file_rec_policy';
    /** 导入失败详情 */
    const MANAGEMENT_FINANCE_REC_POLICY_FAIL_LOG = 'management.finance.rec_policy.fail_log';
    /** 导出失败详情 */
    const MANAGEMENT_FINANCE_REC_POLICY_EXPORT_FAIL_LOG = 'management.finance.rec_policy.export_fail_log';

    // ==========================================手续费归档===================================================== //


    // ========================================= 财务对账路由 =================================================== //

    // ========================================= 系统管理路由 =================================================== //
    /** 核心系统操作日志列表 **/
    const MANAGEMENT_SYSTEM_OPERATION_LOG_GET_PAGE_LIST = 'management.system.operation_log.get_page_list';
    /** 核心crm系统操作日志列表 **/
    const MANAGEMENT_SYSTEM_CRM_OPERATION_LOG_GET_PAGE_LIST = 'management.system.crm_operation_log.get_page_list';
    /** 个人报表中心记录列表 **/
    const MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_GET_PAGE_LIST = 'management.system.download_center.get_page_list';
    /** 个人报表中心操作下载 **/
    const MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_DOWNLOAD = 'management.system.download_center.download`log`';
    const MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_GET_NOT_REMIND_LIST = 'management.system.download_center.get_not_remind_list`auth_needless`';
    const MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_UPDATE_REMIND_STATUS = 'management.system.download_center.update_remind_status`auth_needless`';
    /** 管理CRM **/
    const MANAGEMENT_SYSTEM_ACTION_CRM_SYSTEM = 'management.system.action_crm_user`log`';
    // ========================================= 系统管理路由 =================================================== //

    // ========================================= 财产险保单路由 =================================================== //
    // 上传车险保单
    const MANAGEMENT_PROPERTY_CAR_UPLOAD = 'management.property.car.upload`log`';
    // 车险保单分页列表
    const MANAGEMENT_PROPERTY_CAR_GET_PAGE_LIST = 'management.property.car.get_page_list';
    // 车险保单统计
    const MANAGEMENT_PROPERTY_CAR_STATISTICS = 'management.property.car.statistics`auth_needless`';
    // 新增车险保单
    const MANAGEMENT_PROPERTY_CAR_CREATE = 'management.property.car.create`log`';
    // 编辑车险保单
    const MANAGEMENT_PROPERTY_CAR_UPDATE = 'management.property.car.update`log`';
    // 车险保单详情
    const MANAGEMENT_PROPERTY_CAR_DETAIL = 'management.property.car.detail';
    // 设置车险保单状态
    const MANAGEMENT_PROPERTY_CAR_STATUS = 'management.property.car.status`log`';
    // 车险保单导出
    const MANAGEMENT_PROPERTY_CAR_EXPORT = 'management.property.car.export`log`';
    // 车险保单导入列表
    const MANAGEMENT_PROPERTY_CAR_UPLOAD_LIST = 'management.property.car.upload_list';
    // 车险保单导入详情
    const MANAGEMENT_PROPERTY_CAR_UPLOAD_DETAIL = 'management.property.car.upload_detail';
    // 查看车险手续费
    const MANAGEMENT_PROPERTY_CAR_CHECK_SERVICE_CHARGE = 'management.property.car.check_service_charge';
    // 查看车险手续费比例
    const MANAGEMENT_PROPERTY_CAR_CHECK_SERVICE_CHARGE_RATIO = 'management.property.car.check_service_charge_ratio';

    // 上传船舶险保单
    const MANAGEMENT_PROPERTY_SHIP_UPLOAD = 'management.property.ship.upload`log`';
    // 船舶险保单分页列表
    const MANAGEMENT_PROPERTY_SHIP_GET_PAGE_LIST = 'management.property.ship.get_page_list';
    // 船舶险保单统计
    const MANAGEMENT_PROPERTY_SHIP_STATISTICS = 'management.property.ship.statistics`auth_needless`';
    // 新增船舶险保单
    const MANAGEMENT_PROPERTY_SHIP_CREATE = 'management.property.ship.create`log`';
    // 编辑船舶险保单
    const MANAGEMENT_PROPERTY_SHIP_UPDATE = 'management.property.ship.update`log`';
    // 船舶险保单详情
    const MANAGEMENT_PROPERTY_SHIP_DETAIL = 'management.property.ship.detail';
    // 设置船舶险保单状态
    const MANAGEMENT_PROPERTY_SHIP_STATUS = 'management.property.ship.status`log`';
    // 船舶险保单导出
    const MANAGEMENT_PROPERTY_SHIP_EXPORT = 'management.property.ship.export`log`';
    // 船舶险保单导入列表
    const MANAGEMENT_PROPERTY_SHIP_UPLOAD_LIST = 'management.property.ship.upload_list';
    // 船舶险保单导入详情
    const MANAGEMENT_PROPERTY_SHIP_UPLOAD_DETAIL = 'management.property.ship.upload_detail';
    // 查看船舶险手续费
    const MANAGEMENT_PROPERTY_SHIP_CHECK_SERVICE_CHARGE = 'management.property.ship.check_service_charge';
    // 查看船舶险手续费比例
    const MANAGEMENT_PROPERTY_SHIP_CHECK_SERVICE_CHARGE_RATIO = 'management.property.ship.check_service_charge_ratio';
    // ========================================= 财产险保单路由 =================================================== //

    // ========================================= 产品接入-产品模块 =================================================== //
    // 产品分组分页列表(带分支产品信息)
    const MANAGEMENT_PR_PRODUCT_GROUP_PAGE_LIST_WITH_BRANCH = 'management.pr_product_group.page_list_with_branch';
    // 获取产品分组分支产品列表
    const MANAGEMENT_PR_PRODUCT_GROUP_BRANCH_PRODUCT_LIST = 'management.pr_product_group.branch_product_list';
    // 导出产品分组分支产品列表
    const MANAGEMENT_PR_PRODUCT_GROUP_BRANCH_PRODUCT_LIST_EXPORT = 'management.pr_product_group.branch_product_list.export';
    // 获取产品分组基础信息
    const MANAGEMENT_PR_PRODUCT_GROUP_BASE_INFO = 'management.pr_product_group.base_info';
    // 创建产品分组
    const MANAGEMENT_PR_PRODUCT_GROUP_CREATE = 'management.pr_product_group.create';
    // 更新产品分组信息
    const MANAGEMENT_PR_PRODUCT_GROUP_UPDATE = 'management.pr_product_group.update';

    // 设置产品排序
    const MANAGEMENT_PR_PRODUCT_SET_SORT = 'management.pr_product.set_sort';
    // 产品计划-自动匹配开关
    const MANAGEMENT_PR_PRODUCT_TOGGLE_AUTO_BIND_PLAN = 'management.pr_product.toggle_auto_bind_plan`log`';
    // 获取产品基础信息
    const MANAGEMENT_PR_PRODUCT_BASE_INFO = 'management.pr_product.base_info';
    // 创建产品
    const MANAGEMENT_PR_PRODUCT_CREATE = 'management.pr_product.create';
    // 更新产品信息
    const MANAGEMENT_PR_PRODUCT_UPDATE = 'management.pr_product.update';
    // 获取产品绑定码表
    const MANAGEMENT_PR_PRODUCT_GET_BIND_CODE_TABLE = 'management.pr_product.get_bind_code_table';
    // 获取码表绑定产品
//    const MANAGEMENT_PR_PRODUCT_GET_CODE_TABLE_BIND_PRODUCTS = 'management.pr_product.get_code_table_bind_products';
    // 创建险种分组
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_CREATE = 'management.pr_product.insurance_group.create';
    // 获取产品险种分组列表
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_LIST = 'management.pr_product.insurance_group.list';
    // 获取产品险种分组详情
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DETAIL = 'management.pr_product.insurance_group.detail';
    // 获取产品险种分组添加条件
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_CONDITION = 'management.pr_product.insurance_group.add_condition';
    // 获取产品险种分组更新条件
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_CONDITION = 'management.pr_product.insurance_group.update_condition';
    // 保存费率设置
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_RATE_SETTING = 'management.pr_product.insurance_group.save_rate_setting';
    // 险种分组关联信息列表-险种、责任、保障项目
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_RELATION_INFO = 'management.pr_product.insurance_group.relation_info';
    // 险种关联责任
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_RELATION_DUTY = 'management.pr_product.insurance_group.insurance_relation_duty';
    // 险种分组关联责任
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_RELATION_DUTY = 'management.pr_product.insurance_group.relation_duty';
    // 险种分组关联保障明细
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_RELATION_GUARANTEE_RESPONSIBILITY = 'management.pr_product.insurance_group.duty_relation_guarantee_responsibility';
    // 保存责任保障权益项目
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_GUARANTEE_RESPONSIBILITY = 'management.pr_product.insurance_group.save_guarantee_responsibility`log`';
    // 责任绑定保障项目
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_BIND_GUARANTEE_RESPONSIBILITY = 'management.pr_product.insurance_group.duty_bind_guarantee_responsibility`log`';
    // 条款列表
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_LIST = 'management.pr_product.insurance_group.term_list';
    // 条款详情
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_INFO = 'management.pr_product.insurance_group.term_info';
    // 添加条款
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_TERM = 'management.pr_product.insurance_group.add_term`log`';
    // 上传条款图片
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_SAVE_TERM_IMAGES = 'management.pr_product.insurance_group.save_term_images`log`';
    // 查看条款图片
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_TERM_IMAGES_DETAIL = 'management.pr_product.insurance_group.term_images_detail';
    // 更新条款
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_TERM = 'management.pr_product.insurance_group.update_term`log`';
    // 新增险种
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_INSURANCE = 'management.pr_product.insurance_group.add_insurance`log`';
    // 更新险种
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURANCE = 'management.pr_product.insurance_group.update_insurance`log`';
    // 险种详情
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_DETAIL = 'management.pr_product.insurance_group.insurance_detail';
    // 新增责任
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_ADD_DUTY = 'management.pr_product.insurance_group.add_duty`log`';
    // 更新责任
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_DUTY = 'management.pr_product.insurance_group.update_duty`log`';
    // 责任详情
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_DUTY_DETAIL = 'management.pr_product.insurance_group.duty_detail';
    // 获取险种关联责任详情
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_INSURANCE_RELATION_DUTY_DETAIL = 'management.pr_product.insurance_group.insurance_relation_duty_detail';
    // 新增险种与责任的关系
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_STORE_INSURANCE_DUTY_RELATION = 'management.pr_product.insurance_group.store_insurance_duty_relation`log`';
    // 获取投保条件列表
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_GET_INSURE_CONDITION_ATTRIBUTE_LIST = 'management.pr_product.insurance_group.get_insure_condition_attribute_list';
    // 获取投保条件详情
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_GET_INSURE_CONDITION_ATTRIBUTE_DETAIL = 'management.pr_product.insurance_group.get_insure_condition_attribute_detail';
    // 更新投保条件
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURE_CONDITION_ATTRIBUTE = 'management.pr_product.insurance_group.update_insure_condition_attribute`log`';
    // 更新属性值状态
    const MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURE_CONDITION_ATTRIBUTE_VALUE_STATUS = 'management.pr_product.insurance_group.update_insure_condition_attribute_value_status`log`';
    // ========================================= 产品接入-产品模块 =================================================== //

    // ========================================= 产品接入-数据联动 =================================================== //
    // 通过字段获取产品规则列表
    const MANAGEMENT_PR_PRODUCT_DATA_LINKAGE_GET_SETTING_LIST_BY_COLUMN_ALIAS = 'management.pr_product_data_linkage.get_setting_list_by_column_alias';
    // 添加计算规则
    const MANAGEMENT_PR_PRODUCT_DATA_LINKAGE_CREATE_CALCULATE_RULE = 'management.pr_product_data_linkage.create_calculate_rule`log`';
    // ========================================= 产品接入-数据联动 =================================================== //

    // ========================================= 产品接入-流程设置 =================================================== //
    // 设置产品投保流程
    const MANAGEMENT_PR_PRODUCT_SET_INSURE_PROGRESS = 'management.pr_product_insure_progress.set_insure_progress`log`';
    // 获取投保流程设置
    const MANAGEMENT_PR_PRODUCT_GET_INSURE_PROGRESS_SETTING = 'management.pr_product_insure_progress.get_insure_progress_setting';
    // ========================================= 产品接入-流程设置 =================================================== //

    // ========================================= 产品接入-产品复制 =================================================== //
    // 检查是否可以复制产品
    const MANAGEMENT_PR_PRODUCT_REPLICATION_CHECK = 'management.pr_product_replication.check';
    // 确认复制
    const MANAGEMENT_PR_PRODUCT_REPLICATION_CONFIRM = 'management.pr_product_replication.confirm`log`';
    // 复制清单列表
    const MANAGEMENT_PR_PRODUCT_REPLICATION_GET_TASK_PAGE_LIST = 'management.pr_product_replication.get_task_page_list';
    // 复制清单详情
    const MANAGEMENT_PR_PRODUCT_REPLICATION_GET_TASK_DETAIL = 'management.pr_product_replication.get_task_detail';
    // ========================================= 产品接入-产品复制 =================================================== //

    // ========================================= 产品接入-批量上下架管理 =================================================== //
    // 上下架管理-左侧栏入口
    const MANAGEMENT_PR_PRODUCT_UPDOWN_LEFT_ENTRANCE = 'management.pr_product_updown.left-entrance';
    // 产品列表
    const MANAGEMENT_PR_PRODUCT_UPDOWN_BRANCH_PRODUCT_PAGE_LIST = 'management.pr_product_updown.branch-product-page-list';
    // 操作批量上下架
    const MANAGEMENT_PR_PRODUCT_UPDOWN_DO_BATCH = 'management.pr_product_updown.do-batch`log`';
    // 操作日志列表
    const MANAGEMENT_PR_PRODUCT_UPDOWN_LOG_PAGE_LIST = 'management.pr_product_updown.log-page-list';
    // 获取操作日志的查询条件
    const MANAGEMENT_PR_PRODUCT_UPDOWN_GET_LOG_QUERY_BUILDER = 'management.pr_product_updown.get-log-query-builder';
    // 日志详情
    const MANAGEMENT_PR_PRODUCT_UPDOWN_GET_LOG_DETAIL = 'management.pr_product_updown.get-log-detail';

    // 创建产品1818商城佣金规则
    const MANAGEMENT_PR_PRODUCT_SHOP_CREATE_FEE_RULE = 'management.pr_product_shop.create_fee_rule';
    // 获取产品1818商城佣金规则
    const MANAGEMENT_PR_PRODUCT_SHOP_GET_LOG_DETAIL = 'management.pr_product_shop.get_fee_rule';
    // 更新产品1818商城佣金规则
    const MANAGEMENT_PR_PRODUCT_SHOP_UPDATE_FEE_RULE = 'management.pr_product_shop.update_fee_rule';
    // 批量1818商城产品规则组列表
    const MANAGEMENT_PR_PRODUCT_SHOP_GET_FEE_RULE_GROUP_LIST = 'management.pr_product_shop.get_fee_rule_group_list';
    // 批量1818商城产品规则组查看
    const MANAGEMENT_PR_PRODUCT_SHOP_GET_FEE_RULE_GROUP_DETAIL = 'management.pr_product_shop.get_fee_rule_group_detail';
    // 获取1818商城产品规则操作日志
    const MANAGEMENT_PR_PRODUCT_SHOP_GET_SHOP_FEE_RULE_OPERATION_LOG = 'management.pr_product_shop.get_shop_fee_rule_operation_log';
    // 根据分组批量创建产品1818商城佣金规则
    const MANAGEMENT_PR_PRODUCT_SHOP_BATCH_CREATE_FEE_RULE_BY_GROUP = 'management.pr_product_shop.batch_create_fee_rule_by_group';
    // 根据分组批量更新产品1818商城佣金规则
    const MANAGEMENT_PR_PRODUCT_SHOP_BATCH_UPDATE_FEE_RULE_BY_GROUP = 'management.pr_product_shop.batch_update_fee_rule_by_group';
    // ========================================= 产品接入-批量上下架管理 =================================================== //

    // ========================================= 产品接入-产品计划 =================================================== //
    // 产品计划-计划列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_PLAN_LIST = 'management.pr_product_plan.get_get_plan_list';
    // 产品计划-基本设置
    const MANAGEMENT_PR_PRODUCT_PLAN_BASE_INFO = 'management.pr_product_plan.base_info';
    // 产品计划-新建计划
    const MANAGEMENT_PR_PRODUCT_PLAN_ADD = 'management.pr_product_plan.add`log`';
    // 产品计划-基本设置-编辑
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_BASE_INFO = 'management.pr_product_plan.update_base_info`log`';
    // 产品计划-获取已关联险种的列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_BIND_INSURANCE_LIST = 'management.pr_product_plan.get_bind_insurance_list';
    // 产品计划-绑定险种
    const MANAGEMENT_PR_PRODUCT_PLAN_BIND_INSURANCE = 'management.pr_product_plan.bind_insurance`log`';
    // 试算设置-获取试算页条件因子列表
    const MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_GET_CONDITION_GENE_LIST = 'management.pr_product_plan.trial_page.get_condition_gene_list';
    // 试算设置-试算因子详情
//    const MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_GENE_DETAIL = 'management.pr_product_plan.trial_page.gene_detail';
    // 试算设置-更新试算因子默认值
    const MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE = 'management.pr_product_plan.trial_page.update_gene`log`';
    // 试算设置-更新试算因子选项值
    const MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE_VALUES = 'management.pr_product_plan.trial_page.update_gene_values`log`';
    // 投保规则-获取规则方案列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_SCHEME_LIST = 'management.pr_product_plan.get_trial_gene_restrict_scheme_list';
    // 投保规则-获取规则方案详情
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_SCHEME_DETAIL = 'management.pr_product_plan.get_trial_gene_restrict_scheme_detail';
    // 投保规则-新增规则方案
    const MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_SCHEME = 'management.pr_product_plan.create_trial_gene_restrict_scheme`log`';
    // 投保规则-编辑规则方案
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME = 'management.pr_product_plan.update_trial_gene_restrict_scheme`log`';
    // 投保规则-启用/禁用规则方案
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME_ENABLE_STATUS = 'management.pr_product_plan.update_trial_gene_restrict_scheme_enable_status`log`';
    // 投保规则-新增规则分组
    const MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_GROUP = 'management.pr_product_plan.create_trial_gene_restrict_group`log`';
    // 投保规则-启用/禁用规则分组
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP_ENABLE_STATUS = 'management.pr_product_plan.update_trial_gene_restrict_group_enable_status`log`';
    // 投保规则-获取规则分组详情
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_TRIAL_GENE_RESTRICT_GROUP_DETAIL = 'management.pr_product_plan.get_trial_gene_restrict_group_detail';
    // 投保规则-编辑规则分组
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP = 'management.pr_product_plan.update_trial_gene_restrict_group`log`';
    // 投保规则-获取产品计划的条件因子列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_PRODUCT_PLAN_GENE_RESTRICT_LIST = 'management.pr_product_plan.get_product_plan_gene_restrict_list';
    // 投保规则-获取产品计划的所有条件因子列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_PRODUCT_ALL_PLAN_GENE_RESTRICT_LIST = 'management.pr_product_plan.get_product_all_plan_gene_restrict_list';
    // 投保规则-获取产品计划的联动因子列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_PRODUCT_PLAN_GENE_LINKAGE_LIST = 'management.pr_product_plan.get_product_plan_gene_linkage_list';
    // 数据同步-同步试算因子
    const MANAGEMENT_PR_PRODUCT_PLAN_SYNC_TRIAL_GENE = 'management.pr_product_plan.sync_trial_gene`log`';
    // 数据同步-增量同步试算因子
    const MANAGEMENT_PR_PRODUCT_PLAN_INCREMENT_TRIAL_GENE = 'management.pr_product_plan.increment_trial_gene`log`';
    // 数据同步-单个因子数据同步
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE = 'management.pr_product_plan.update_trial_gene`log`';
    // 数据同步-获取同步数据记录列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_SYNC_TRIAL_RECORD_LIST = 'management.pr_product_plan.get_sync_trial_record_list';
    // 数据同步-获取同步数据记录详情
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_SYNC_TRIAL_RECORD_DETAIL = 'management.pr_product_plan.get_sync_trial_record_detail';
    // 健康告知-获取健告列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_LIST = 'management.pr_product_plan.get_health_information_list';
    // 健康告知-新增健告
    const MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION = 'management.pr_product_plan.create_health_information`log`';
    // 健康告知-获取健告基础信息
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_BASE_INFO = 'management.pr_product_plan.get_health_information_base_info';
    // 健康告知-编辑健告基础信息
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_BASE_INFO = 'management.pr_product_plan.update_health_information_base_info';
    // 健康告知-删除健告
    const MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_BASE_INFO = 'management.pr_product_plan.delete_health_information_base_info`log`';
    // 健康告知-获取问卷列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_QUESTION_LIST = 'management.pr_product_plan.get_health_information_question_list';
    // 健康告知-新增健告问题
    const MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION_QUESTION = 'management.pr_product_plan.create_health_information_question`log`';
    // 健康告知-获取健告问题详情
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_QUESTION_DETAIL = 'management.pr_product_plan.get_health_information_question_detail';
    // 健康告知-编辑健告问题
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_QUESTION = 'management.pr_product_plan.update_health_information_question`log`';
    // 健康告知-删除问题
    const MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_QUESTION = 'management.pr_product_plan.delete_health_information_question`log`';
    // 健康告知-获取健告结论列表
    const MANAGEMENT_PR_PRODUCT_PLAN_GET_HEALTH_INFORMATION_CONCLUSION_LIST = 'management.pr_product_plan.get_health_information_conclusion_list';
    // 健康告知-编辑健告结论
    const MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_CONCLUSION = 'management.pr_product_plan.update_health_information_conclusion`log`';
    // ========================================= 产品接入-产品计划 =================================================== //

    // ========================================= 产品接入-试算页面 =================================================== //
    // 试算页面布局-获取布局列表
    const MANAGEMENT_PR_PRODUCT_TRIAL_GET_LAYOUT_LIST = 'management.pr_product_trial.get_layout_list';
    // 试算页面布局-新增布局
    const MANAGEMENT_PR_PRODUCT_TRIAL_CREATE_LAYOUT = 'management.pr_product_trial.create_layout`log`';
    // 试算页面布局-编辑布局
    const MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_LAYOUT = 'management.pr_product_trial.update_layout`log`';
    // 试算页面布局-搜索字段列表
    const MANAGEMENT_PR_PRODUCT_TRIAL_SEARCH_LAYOUT_GENE_LIST = 'management.pr_product_trial.search_layout_gene_list';
    // 试算页面布局-布局新增字段
    const MANAGEMENT_PR_PRODUCT_TRIAL_BIND_LAYOUT_GENES = 'management.pr_product_trial.bind_layout_genes`log`';
    // 试算页面布局-获取因子基本信息
    const MANAGEMENT_PR_PRODUCT_TRIAL_GET_GENE_BASE_INFO = 'management.pr_product_trial.get_gene_base_info';
    // 试算页面布局-更新因子基本信息
    const MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_GENE_BASE_INFO = 'management.pr_product_trial.update_gene_base_info`log`';
    // ========================================= 产品接入-试算页面 =================================================== //

    // ========================================= 产品接入-产品展示设置 =================================================== //
    // 产品展示设置
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING = 'management.pr_product_display_setting';
    // 产品展示设置-banner列表
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_LIST = 'management.pr_product_display_setting.get_banner_list';
    // 产品展示设置-banner-上传
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_BANNER = 'management.pr_product_display_setting.create_banner`log`';
    // 产品展示设置-banner详情
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_INFO = 'management.pr_product_display_setting.get_banner_info';
    // 产品展示设置-编辑banner
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_BANNER = 'management.pr_product_display_setting.update_banner`log`';
    // 产品展示设置-特色图详情
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_FEATURE = 'management.pr_product_display_setting.get_feature';
    // 产品展示设置-编辑特色图
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FEATURE = 'management.pr_product_display_setting.update_feature`log`';
    // 产品展示设置-问答列表
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_FAQ_LIST = 'management.pr_product_display_setting.faq_list';
    // 产品展示设置-新增问答
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_FAQ = 'management.pr_product_display_setting.create_faq`log`';
    // 产品展示设置-编辑问答
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FAQ = 'management.pr_product_display_setting.update_faq`log`';
    // 产品展示设置-删除问答
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_DELETE_FAQ = 'management.pr_product_display_setting.delete_faq`log`';
    // 产品展示设置-投保须知列表
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_INSTRUCTION_LIST = 'management.pr_product_display_setting.get_instruction_list';
    // 产品展示设置-编辑投保须知
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_INSTRUCTION = 'management.pr_product_display_setting.create_instruction`log`';
    // 产品展示设置-编辑投保须知
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_INSTRUCTION = 'management.pr_product_display_setting.update_instruction`log`';
    // ========================================= 产品接入-产品展示设置 =================================================== //

    // ========================================= 产品接入-标签设置 =================================================== //
    // 保险分类列表
    const MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_GET_LIST = 'management.pr_product_common_category.get_list';
    // 保险分类列表
    const MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_GET_OPTION_LIST = 'management.pr_product_common_category.get_option_list`auth_needless`';
    // 创建保险分类
    const MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_CREATE = 'management.pr_product_common_category.create`log`';
    // 更新保险分类
    const MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_UPDATE = 'management.pr_product_common_category.update`log`';
    // 删除保险分类
    const MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_DELETE = 'management.pr_product_common_category.delete`log`';
    // 官网分类分页列表
    const MANAGEMENT_PR_WS_CATEGORY_GET_PAGE_LIST = 'management.pr_ws_category.page_list';
    // 创建官网分类
    const MANAGEMENT_PR_WS_CATEGORY_CREATE = 'management.pr_ws_category.create`log`';
    // 更新官网分类
    const MANAGEMENT_PR_WS_CATEGORY_UPDATE = 'management.pr_ws_category.update`log`';
    // 是否启用官网分类
    const MANAGEMENT_PR_WS_CATEGORY_IS_ENABLE = 'management.pr_ws_category.is_enable`log`';
    // ========================================= 产品接入-标签设置 =================================================== //

    // ========================================= 产品接入-产品基础条件 =================================================== //
    // 添加产品基础条件
    const MANAGEMENT_PR_BASIC_CONDITION_ADD = 'management.pr_basic_condition.add';
    // 获取产品基础条件列表
    const MANAGEMENT_PR_BASIC_CONDITION_GET_LIST = 'management.pr_basic_condition.get_list';
    // 获取产品基础条件详情
    const MANAGEMENT_PR_BASIC_CONDITION_DETAIL = 'management.pr_basic_condition.detail';
    // 更新产品基础属性
    const MANAGEMENT_PR_BASIC_CONDITION_UPDATE = 'management.pr_basic_condition.update`log`';
    // 更新属性值的启用状态
    const MANAGEMENT_PR_BASIC_CONDITION_UPDATE_ATTRIBUTE_VALUE_ENABLE = 'management.pr_basic_condition.update_attribute_value_enable`log`';
    // 删除基础条件
    const MANAGEMENT_PR_BASIC_CONDITION_DELETE = 'management.pr_basic_condition.delete`log`';
    // 删除基础条件
    const MANAGEMENT_PR_BASIC_CONDITION_ADD_OPTIONS = 'management.pr_basic_condition.add_options`log`';
    // ========================================= 产品接入-产品基础条件 =================================================== //

    // ========================================= 产品接入-产品字段元素 =================================================== //
    // 保存产品投保模块
    const MANAGEMENT_PR_FIELD_ELEMENT_STORE_INSURE_MODULE = 'management.pr_field_element.store_insure_module';
    // 获取产品投保模块列表
    const MANAGEMENT_PR_FIELD_ELEMENT_GET_INSURE_MODULE = 'management.pr_field_element.get_insure_module';
    // 获取产品基础条件列表
    const MANAGEMENT_PR_FIELD_ELEMENT_GET_LIST = 'management.pr_field_element.get_list';
    // 获取产品基础条件详情
    const MANAGEMENT_PR_FIELD_ELEMENT_DETAIL = 'management.pr_field_element.detail';
    // 更新属性值的启用状态
    const MANAGEMENT_PR_FIELD_ELEMENT_UPDATE_ATTRIBUTE_VALUE_ENABLE = 'management.pr_field_element.update_attribute_value_enable`log`';
    // 更新产品模块字段详情
    const MANAGEMENT_PR_FIELD_ELEMENT_UPDATE_INFO = 'management.pr_field_element.update_info`log`';
    // 删除模块属性
    const MANAGEMENT_PR_FIELD_ELEMENT_DELETE_MODULE_ATTRIBUTE = 'management.pr_field_element.delete_module_attribute`log`';
    // ========================================= 产品接入-产品基础条件 =================================================== //

    // ========================================= 产品接入-产品设置 ====================================================== //
    // 获取产品设置
    const MANAGEMENT_PR_PRODUCT_SETTING_GET_SETTING_INFO = 'management.pr_product_setting.get_setting_info`log`';
    // 保存产品设置
    const MANAGEMENT_PR_PRODUCT_SETTING_UPDATE_SETTING = 'management.pr_product_setting.update_setting`log`';
    // ========================================= 产品接入-产品设置 ====================================================== //

    // ========================================= 产品接入-助销资料 ====================================================== //
    // 助销资料tab按钮权限
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION = 'management.pr_product_sales_information';
    // 助销资料-售前告知获取
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_PRODUCT_BASE_INFO = 'management.pr_product_sales_information.product_base_info';
    // 助销资料-售前告知更新
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_PRODUCT_BASE_INFO_SAVE = 'management.pr_product_sales_information.product_base_info_save`log`';
    // 助销资料-产品条款列表
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COMMON_TERMS_LIST = 'management.pr_product_sales_information.common_terms_list';
    // 助销资料-产品条款更新
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COMMON_TERMS_SAVE = 'management.pr_product_sales_information.common_terms_save`log`';
    // 助销资料-产品海报上传同步
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_UPLOAD = 'management.pr_product_sales_information.common_poster_upload`log`';
    // 助销资料-产品海报列表
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_GET_LIST = 'management.pr_product_sales_information.poster_get_list';
    // 助销资料-产品海报删除
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_DEL = 'management.pr_product_sales_information.common_poster_del`log`';
    // 助销资料-产品海报详情
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_DETAIL = 'management.pr_product_sales_information.poster_detail';
    // 助销资料-产品海报批量上传
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_BATCH_UPLOAD = 'management.pr_product_sales_information.poster_batch_upload`log`';
    // 助销资料-产品海报更新
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_UPDATE = 'management.pr_product_sales_information.poster_update`log`';
    // 助销资料-产品资料保存
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_DOCS_SAVE = 'management.pr_product_sales_information.docs_save`log`';
    // 助销资料-产品资料列表
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_DOCS_GET_LIST = 'management.pr_product_sales_information.docs_get_list';
    // 助销资料-操作日志
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_CHANGE_LOG = 'management.pr_product_sales_information.change_log';
    // 助销资料-复制到其他产品
    const MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COPY_TO_OTHER_PRODUCTS = 'management.pr_product_sales_information.copy-to-other-products`log`';

    // ========================================= 产品接入-助销资料 ====================================================== //
    // ========================================= 产品接入-官网设置 ====================================================== //
    // 分支产品-官网设置
    const MANAGEMENT_PR_WS_PRODUCT_DETAIL = 'management.pr_ws_product.detail';
    // 分支产品-官网产品设置
    const MANAGEMENT_PR_WS_PRODUCT_SAVE = 'management.pr_ws_product.save';
    // ========================================= 产品接入-官网设置 ====================================================== //
    // ========================================= 产品接入-关联产品 ====================================================== //
    // 新增关联产品
    const MANAGEMENT_PR_PRODUCT_RELATED_INFO_CREATE = 'management.pr-product-related-info.create`log`';
    // 获取关联详情
    const MANAGEMENT_PR_PRODUCT_RELATED_INFO_DETAIL = 'management.pr-product-related-info.detail';
    // 是否产品关联
    const MANAGEMENT_PR_PRODUCT_RELATED_INFO_IS_ENABLE_RELATE = 'management.pr-product-related-info.is-enable-relate`log`';
    // ========================================= 产品接入-关联产品 ====================================================== //

    // ========================================= crm专家团队管理路由 =================================================== //
    /** 核心系统crm专家团队列表 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_PAGE_LIST = 'management.crm-expert.team_page_list';
    /**  核心系统crm专家团队添加 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_STORE = 'management.crm-expert.team_store`log`';
    /**  核心系统crm专家团队下级团队添加 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_SUBORDINATE_STORE = 'management.crm-expert.team_subordinate_store';
    /**  核心系统crm专家团队编辑 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_UPDATE = 'management.crm-expert.team_update`log`';
    /**  核心系统crm专家团队获取团队成员列表 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_DIRECT_MEMBER_LIST = 'management.crm-expert.get_direct_member_list';
    /**  核心系统crm专家团队获取团队成员管理 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_DIRECT_MEMBER_MANAGE = 'management.crm-expert.get_direct_member_manage';
    /**  团队成员管理 - 新增人员 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_STORE_MEMBER = 'management.crm-expert.team_store_member`log`';
    /**  团队成员管理 - 移除人员 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_REMOVE_MEMBER = 'management.crm-expert.team_remove_member`log`';
    /**  团队管理 - 团队记录 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_LOG_PAGE_LIST = 'management.crm-expert.team_log_page_list';
    /**  团队管理 - 团队详情 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_DETAIL = 'management.crm-expert.team_detail';
    /**  团队管理 - 设为团队长 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE_LEADER = 'management.crm-expert.upgrade_team_leader`log`';
    /**  团队管理 - 团队升级 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE = 'management.crm-expert.upgrade_team`log`';
    /**  团队管理 - 团队降级 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_DOWNGRADE = 'management.crm-expert.downgrade_team`log`';
    /**  团队管理 - 团队解散 **/
    const MANAGEMENT_CRM_EXPERT_TEAM_DISSOLUTION = 'management.crm-expert.dissolution_team`log`';
    /** 销售成员列表 **/
    const MANAGEMENT_CRM_EXPERT_MEMBER_PAGE_LIST = 'management.crm-expert.member_page_list';
    /** 专家成员记录 **/
    const MANAGEMENT_CRM_EXPERT_MEMBER_DETAIL_LOG = 'management.crm-expert.member_detail_log';

    // ========================================= crm专家团队管理路由 =================================================== //

    // ========================================= pr对账相关路由 =================================================== //
    // 对账列表
    const MANAGEMENT_PR_COMMISSION_SUMMARY_PAGE_LIST = 'management.pr-commission.summary_page_list';
    // 对账明细列表
    const MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_PAGE_LIST = 'management.pr-commission.summary_item_page_list';
    // 对账清单下载导出
    const MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_EXPORT = 'management.pr-commission.summary_item_export';
    // 结算方案列表-首续期方案
    const MANAGEMENT_PR_COMMISSION_PRODUCT_SCHEME_PAGE_LIST = 'management.pr-commission.product_scheme_page_list';
    // 结算方案列表-奖励方案
    const MANAGEMENT_PR_COMMISSION_REWARD_SCHEME_PAGE_LIST = 'management.pr-commission.reward_scheme_page_list';
    // ========================================= pr对账相关路由 =================================================== //

    // ========================================核保健告管理 =====================================================//
    // 核保管理
    const MANAGEMENT_PR_UNDERWRITING_PRODUCT_NAME_LIST = 'management.pr-underwriting.product_name_list';
    // 核保管理上传文件记录
    const MANAGEMENT_PR_UNDERWRITING_FILE_LOG_LIST = 'management.pr-underwriting.file_log_list';
    // 健告管理产品名列表
    const MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_NAME_LIST = 'management.pr_health_notice.product_name_list';
    // 健告管理上传记录
    const MANAGEMENT_PR_HEALTH_NOTICE_FILE_LOG_LIST = 'management.pr_health_notice.file_log_list';
    // 投保规则列表
    const MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_LIST = 'management.pr_health_notice.underwrite_rule_list';
    // 删除投保规则
    const MANAGEMENT_PR_HEALTH_NOTICE_DELETE_UNDERWRITE_RULE = 'management.pr_health_notice.delete_underwrite_rule';
    // 核保规则列表
    const MANAGEMENT_PR_HEALTH_NOTICE_INSURANCE_RULE_LIST = 'management.pr_health_notice.insurance_rule_list';
    // 删除核保规则
    const MANAGEMENT_PR_HEALTH_NOTICE_DELETE_INSURANCE_RULE = 'management.pr_health_notice.delete_insurance_rule';
    // 投保核保规则上传
    const MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE = 'management.pr_health_notice.rule_upload_file';
    // 投保核保规则上传记录
    const MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE_LOG = 'management.pr_health_notice.rule_upload_file_log';
    // 客服保全列表
    const MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_LIST = 'management.pr_health_notice.customer_service_list';
    // 客服保全上传
    const MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE = 'management.pr_health_notice.customer_service_upload_file';
    // 客服保全上传记录
    const MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE_LOG = 'management.pr_health_notice.customer_service_upload_file_log';
    // 客服保全删除
    const MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_DELETE = 'management.pr_health_notice.customer_service_delete';

    // 理赔规则列表
    const MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_LIST = 'management.pr_health_notice.claim_settlement_list';
    // 理赔规则上传
    const MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE = 'management.pr_health_notice.claim_settlement_upload_file';
    // 理赔规则上传记录
    const MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE_LOG = 'management.pr_health_notice.claim_settlement_upload_file_log';
    // 理赔规则删除
    const MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_DELETE = 'management.pr_health_notice.claim_settlement_delete';

    // 售后指引列表
    const MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_LIST = 'management.pr_health_notice.product_sales_guidance_list';
    // 售后指引上传
    const MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE = 'management.pr_health_notice.product_sales_guidance_upload_file';
    // 售后指引上传记录
    const MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE_LOG = 'management.pr_health_notice.product_sales_guidance_upload_file_log';
    // 售后指引删除
    const MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_DELETE = 'management.pr_health_notice.product_sales_guidance_delete';
    // 产品关联活取消关联
    const MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_CONNECTION_MANUAL = 'management.pr_health_notice.product_connection_manual';


    // ========================================核保健告管理 =====================================================//

    // ========================================= 报表中心相关路由 =================================================== //
    // 报表中心记录列表
    const MANAGEMENT_REPORT_CENTER_GET_PAGE_LIST = 'management.report_center.get_page_list';
    // 报表中心-下载
    const MANAGEMENT_REPORT_CENTER_DOWNLOAD = 'management.report_center.download`log`';
    // 下载记录
    const MANAGEMENT_REPORT_CENTER_DOWNLOAD_LOG_GET_PAGE_LIST = 'management.report_center.download_log_get_page_list';
    // ========================================= 报表中心相关路由 =================================================== //

    // ========================================= crm_user_mobile相关路由 =================================================== //
    /** 手机号列表 **/
    const MANAGEMENT_CRM_USER_MOBILE_PAGE_LIST = 'management.crm_user_mobile.page_list';
    /** 添加手机号 **/
    const MANAGEMENT_CRM_USER_MOBILE_STORE = 'management.crm_user_mobile.store`log`';
    /** 删除手机号 **/
    const MANAGEMENT_CRM_USER_MOBILE_DELETE = 'management.crm_user_mobile.delete`log`';
    // ========================================= crm_user_mobile相关路由 =================================================== //

    // ========================================= cfyf广告管理 =================================================== //
    //创建广告store
    const MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_STORE = 'management.cfyf.service.company_banner.store';
    //编辑广告update
    const MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UPDATE = 'management.cfyf.service.company_banner.update';
    //管理广告列表manage_list
    const MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_MANAGE_LIST = 'management.cfyf.service.company_banner.manage_list';
    //广告详情detail
    const MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_DETAIL = 'management.cfyf.service.company_banner.detail';
    //删除广告delete
    const MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_DELETE = 'management.cfyf.service.company_banner.delete';
    //上下架广告up_or_down
    const MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UP_OR_DOWN = 'management.cfyf.service.company_banner.up_or_down';
    // ========================================= cfyf广告管理 =================================================== //

    // ========================================= cfyf公告管理 =================================================== //
    //创建公告
    const MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_CREATE = 'management.cfyf.service.company_announcement.create';
    //编辑公告
    const MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_EDIT = 'management.cfyf.service.company_announcement.edit';
    //管理公告列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_PAGE_LIST = 'management.cfyf.service.company_announcement.page-list';
    //删除公告
    const MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_DELETE = 'management.cfyf.service.company_announcement.delete';
    // ========================================= cfyf公告管理 =================================================== //

    // ========================================= cfyf公司渠道管理 =================================================== //
    //创建公司渠道
    const MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_CREATE = 'management.cfyf.service.company_channel.create';
    //编辑公司渠道
    const MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_EDIT = 'management.cfyf.service.company_channel.edit';
    //公司渠道详情
    const MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_DETAIL = 'management.cfyf.service.company_channel.detail';
    //公司渠道列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_PAGE_LIST = 'management.cfyf.service.company_channel.page-list';
    // ========================================= cfyf公司渠道管理=================================================== //


    // ========================================= cfyf公司管理 =================================================== //
    //新增公司
    const MANAGEMENT_CFYF_SERVICE_COMPANY_CREATE = 'management.cfyf.service.company.create';
    //更新公司
    const MANAGEMENT_CFYF_SERVICE_COMPANY_UPDATE = 'management.cfyf.service.company.update';
    //公司列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PAGE_LIST = 'management.cfyf.service.company.page-list';
    //（签约有效期内的）公司列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_EFFECTIVE_LIST = 'management.cfyf.service.company.effective-list';
    //获取正常状态公司列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_EFFECTIVE_GET_PAGE_LIST_NORMAL_STATUS = 'management.cfyf.service.company.get-page-list-normal-status';
    //公司列表（不分页)
    const MANAGEMENT_CFYF_SERVICE_COMPANY_LIST = 'management.cfyf.service.company.list';
    //查看公司API配置
    const MANAGEMENT_CFYF_SERVICE_COMPANY_API_CONFIGURE = 'management.cfyf.service.company.api-configure';
    //修改公司API配置
    const MANAGEMENT_CFYF_SERVICE_COMPANY_API_UPDATE_API_CONFIG = 'management.cfyf.service.company.update-api-config';
    //公司详情
    const MANAGEMENT_CFYF_SERVICE_COMPANY_DETAIL = 'management.cfyf.service.company.detail';
    // 发票税点记录
    const MANAGEMENT_CFYF_SERVICE_COMPANY_COMPANY_INVOICE_TAX_POINT_LOG = 'management.cfyf.service.company.company_invoice_tax_point_log';
    //获取细分权限下管辖的B端公司列表（不分页)
    const MANAGEMENT_CFYF_SERVICE_COMPANY_UNDER_MANAGEMENT_LIST = 'management.cfyf.service.company.under-management-list';
    //导出所有公司列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_ALL_COMPANY_EXPORT = 'management.cfyf.service.company.all-company-export';
    //解除入驻
    const MANAGEMENT_CFYF_SERVICE_COMPANY_RELIEVE = 'management.cfyf.service.company.relieve';
    //中止入驻
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PAUSE = 'management.cfyf.service.company.pause';
    //恢复入驻
    const MANAGEMENT_CFYF_SERVICE_COMPANY_ENABLE = 'management.cfyf.service.company.enable';
    //修改接入状态
    const MANAGEMENT_CFYF_SERVICE_COMPANY_API_UPDATE_ACCESS_STATUS = 'management.cfyf.service.company.update-access-status';

    //公司开启限制
    const MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_ON = 'management.cfyf.service.company.limitation-on';
    // 公司关闭限制
    const MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_OFF = 'management.cfyf.service.company.limitation-off';
    // 限制操作日志列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_LIMITATION_LOG_LIST = 'management.cfyf.service.company.limitation-log-list';
    // ========================================= cfyf公司管理 =================================================== //

    // ========================================= cfyf银行管理 =================================================== //
    //新增银行
    const MANAGEMENT_CFYF_SERVICE_BANK_ADD = 'management.cfyf.service.bank.add';
    //银行列表
    const MANAGEMENT_CFYF_SERVICE_BANK_PAGE_LIST = 'management.cfyf.service.bank.page-list';
    // ========================================= cfyf银行管理=================================================== //

    // ========================================= cfyf合作信息 =================================================== //
    //合作信息
    const MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_PAGE_LIST = 'management.cfyf.service.business-cooperate.page-list';
    //合作详情
    const MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_DETAILS = 'management.cfyf.service.business-cooperate.details ';
    // ========================================= cfyf合作信息=================================================== //

    // ========================================= cfyf销售管理 =================================================== //
    //重置管理员密码
    const MANAGEMENT_CFYF_SERVICE_SALES_RESET_PASSWORD = 'management.cfyf.service.sales.reset-password';
    //销售分页列表
    const MANAGEMENT_CFYF_SERVICE_SALES_GET_PAGE_LIST = 'management.cfyf.service.sales.get-page-list';
    //销售列表
    const MANAGEMENT_CFYF_SERVICE_SALES_LIST = 'management.cfyf.service.sales.list';
    //销售列表
//    const MANAGEMENT_CFYF_SERVICE_SALES_LIST_UNDER_MANAGEMENT = 'management.cfyf.service.sales.list-under-management';
    //销售详情
    const MANAGEMENT_CFYF_SERVICE_SALES_DETAILS = 'management.cfyf.service.sales.sales-details';
    //管理详情
    const MANAGEMENT_CFYF_SERVICE_SALES_MANAGE_DETAILS = 'management.cfyf.service.sales.sales-manage-details';
    //更新账号
    const MANAGEMENT_CFYF_SERVICE_SALES_UPDATE_USERNAME = 'management.cfyf.service.sales.update-username';
    //导出
    const MANAGEMENT_CFYF_SERVICE_SALES_EXPORT = 'management.cfyf.service.sales.export';
    //获取B端公司模拟登陆链接
    const MANAGEMENT_CFYF_SERVICE_SALES_GENERATE_AUTH_LINK = 'management.cfyf.service.sales.generate-auth-link';
    // ========================================= cfyf销售管理 =================================================== //

    // ========================================= cfyf销售权限管理 =================================================== //
    //销售权限详情
    const MANAGEMENT_CFYF_SERVICE_BUSINESS_PERMISSION_GROUP_DETAIL = 'management.cfyf.service.business-permission-group.detail';
    //权限详情
    const MANAGEMENT_CFYF_SERVICE_BUSINESS_PERMISSION_GROUP_PERMISSION_DETAIL = 'management.cfyf.service.business-permission-group.permission-detail';
    //编辑权限
    const MANAGEMENT_CFYF_SERVICE_BUSINESS_ROLE_PERMISSION_RELATION_PERMISSION_DETAIL_UPDATE = 'management.cfyf.service.business-role-permission-relation.permission-detail-update';
    //更新权限
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_UPDATE = 'management.cfyf.service.company-permission.update';
    //批量操作权限
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH = 'management.cfyf.service.company-permission.batch';
    //批量更新权限
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_UPDATE = 'management.cfyf.service.company-permission.batch-update';
    //批量新增权限
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_ADD = 'management.cfyf.service.company-permission.batch-add';
    //批量删除权限
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_DELETE = 'management.cfyf.service.company-permission.batch-delete';
    //权限模版分页
    const MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_GET_PAGE_LIST = 'management.cfyf.service.adm_permission_tpl.get_page_list';
    //权限模版详情
    const MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_DETAIL = 'management.cfyf.service.adm_permission_tpl.detail';
    //权限模版创建
    const MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_CREATE = 'management.cfyf.service.adm_permission_tpl.create';
    //权限模版更新
    const MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_UPDATE = 'management.cfyf.service.adm_permission_tpl.update';
    //权限模版删除
    const MANAGEMENT_CFYF_SERVICE_ADM_PERMISSION_TPL_DELETE = 'management.cfyf.service.adm_permission_tpl.delete';

    // ========================================= cfyf销售权限管理=================================================== //

    // ========================================= 创富云服-轮播图管理-START =================================================== //
    // 新增/编辑banner素材
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE = 'management.cfyf-service.product-transmit-banner.store';
    // 启用/禁用素材
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_SET_STATUS = 'management.cfyf-service.product-transmit-banner.set-status';
    // 查看素材分页列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_MATERIAL_PAGE_LIST = 'management.cfyf-service.product-transmit-banner.material-page-list';
    // 新增/修改 默认素材
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE_DEFAULT = 'management.cfyf-service.product-transmit-banner.store-default';
    // 查询默认素材列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_DEFAULT_PAGE_LIST = 'management.cfyf-service.product-transmit-banner.default-page-list';
    // ========================================= 创富云服-轮播图管理-END =================================================== //

    // ========================================= 创富云服-平台公告-START =================================================== //
    // 平台公告 - 新增
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_STORE = 'management.cfyf-service.home-page-announcement.platform.store';
    // 平台公告 - 编辑
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_UPDATE = 'management.cfyf-service.home-page-announcement.platform.update';
    // 平台公告 - 列表
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_LIST = 'management.cfyf-service.home-page-announcement.platform.list';
    // 平台公告 - 详情
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_DETAIL = 'management.cfyf-service.home-page-announcement.platform.detail';
    // 平台公告 - 置顶
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_SET_TOP = 'management.cfyf-service.home-page-announcement.platform.set_top';
    // 平台公告 - 删除
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_DELETE = 'management.cfyf-service.home-page-announcement.platform.delete';
    // ========================================= 创富云服-平台公告-END =================================================== //

    // ========================================= 创富云服-商品调整公告-START =================================================== //
    // 商品调整 - 新增
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_STORE = 'management.cfyf-service.home-page-announcement.product-adjust.store';
    // 商品调整 - 编辑
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_UPDATE = 'management.cfyf-service.home-page-announcement.product-adjust.update';
    // 商品调整 - 列表
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_LIST = 'management.cfyf-service.home-page-announcement.product-adjust.list';
    // 商品调整 - 详情
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_DETAIL = 'management.cfyf-service.home-page-announcement.product-adjust.detail';
    // 商品调整 - 上下架
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_SET_UP_DOWN = 'management.cfyf-service.home-page-announcement.product-adjust.set_up_down';
    // 商品调整 - 删除
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_DELETE = 'management.cfyf-service.home-page-announcement.product-adjust.delete';
    // ========================================= 创富云服-商品调整公告-END =================================================== //

    // ========================================= 创富云服-新品上架-START =================================================== //
    // 新品上架 - 新增
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_STORE = 'management.cfyf-service.home-page-announcement.new-product.store';
    // 新品上架 - 编辑
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_UPDATE = 'management.cfyf-service.home-page-announcement.new-product.update';
    // 新品上架 - 列表
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_LIST = 'management.cfyf-service.home-page-announcement.new-product.list';
    // 新品上架 - 详情
    const MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_DETAIL = 'management.cfyf-service.home-page-announcement.new-product.detail';
    // ========================================= 创富云服-新品上架-END =================================================== //

    // ========================================= 创富云服-费率管理-服务费模板-START ================================ //


    // ========================================= 创富云服-费率管理-服务费模板-END ================================= //
    // 带上推广费模板设置状态的产品列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_PRODUCT_LIST_WITH_TEMPLATE_STATUS = 'management.cfyf-service.product-service-fee.product-list-with-template-status';
    // 模板名称列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TEMPLATE_NAME_LIST = 'management.cfyf-service.product-service-fee.template-name-list';
    // 修改模板名称
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_MODIFY_TEMPLATE_NAME = 'management.cfyf-service.product-service-fee.modify-template-name';
    // 新增服务费模板
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_CREATE_PRODUCT_FEE_SCHEME_TEMPLATE = 'management.cfyf-service.product-service-fee.create-product-fee-scheme-template';
    // 编辑服务费模板
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_EDIT_PRODUCT_FEE_SCHEME_TEMPLATE = 'management.cfyf-service.product-service-fee.edit-product-fee-scheme-template';
    // 删除服务费模板
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_DEL_PRODUCT_FEE_SCHEME_TEMPLATE = 'management.cfyf-service.product-service-fee.del-product-fee-scheme-template';
    // 复制服务费模板
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_COPY_PRODUCT_FEE_SCHEME_TEMPLATE = 'management.cfyf-service.product-service-fee.copy-product-fee-scheme-template';
    // 服务费模板列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_PAGE_LIST = 'management.cfyf-service.product-service-fee.tpl-scheme-page-list';
    // 服务费模板详情
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_PRODUCT_FEE_SCHEME_TEMPLATE_DETAIL = 'management.cfyf-service.product-service-fee.product-fee-scheme-template-detail';
    // 根据模板方案的选择的维度获取对应的险种/计划
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_GET_OBJ_BY_SCHEME = 'management.cfyf-service.product-service-fee-tpl.get-obj-by-scheme';
    // 新增规则分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_ADD_TPL_PRODUCT_FEE_OBJ = 'management.cfyf-service.product-service-fee.add-tpl-product-fee-obj';
    // 新增地区分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_ADD_TPL_REGION_GROUP = 'management.cfyf-service.product-service-fee.add-tpl-region-group';
    // 删除地区分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_DELETE_TPL_REGION_GROUP = 'management.cfyf-service.product-service-fee.delete-tpl-region-group';
    // 编辑地区分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_EDIT_TPL_REGION_GROUP = 'management.cfyf-service.product-service-fee.edit-tpl-region-group';
    // 获取省市信息
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_REGION_LIST = 'management.cfyf-service.product-service-fee.tpl-region-list';
    // 地区分组列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_REGION_GROUP_LIST = 'management.cfyf-service.product-service-fee.tpl-region-group-list';
    // 新增规则
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_ADD_TPL_RULE = 'management.cfyf-service.product-service-fee.add-tpl-rule';
    // 规则详情
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_TPL_RULE_DETAIL = 'management.cfyf-service.product-service-fee.tpl-rule-detail';
    // 编辑规则
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_EDIT_TPL_RULE = 'management.cfyf-service.product-service-fee.edit-tpl-rule';
    // 删除规则
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_DELETE_TPL_RULE = 'management.cfyf-service.product-service-fee.delete-tpl-rule';
    // 服务费规则列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TPL_TPL_RULE_PAGE_LIST = 'management.cfyf-service.product-service-fee.tpl-rule-page-list';
    // ========================================= 创富云服-产品相关-START ======================================= //



    // ========================================= 创富云服-费率管理-服务费方案-START ================================ //
    // 获取产某个B端公司的产品列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_COMPANY_PRODUCT_LIST = 'management.cfyf-service.product-service-fee-scheme.company-product-list';
    // 产品详情
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_COMPANY_PRODUCT_DETAIL = 'management.cfyf-service.product-service-fee-scheme.company-product-detail';
    // 获取某个B端公司某个产品的规则方案列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_SCHEME_PAGE_LIST = 'management.cfyf-service.product-service-fee-scheme.product-fee-scheme-page-list';
    // 设置服务费方案
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_SETTING_PRODUCT_FEE_SCHEME = 'management.cfyf-service.product-service-fee-scheme.setting-product-fee-scheme';
    // 编辑服务费方案
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_EDIT_PRODUCT_FEE_SCHEME = 'management.cfyf-service.product-service-fee-scheme.edit-product-fee-scheme';
    // 服务费方案详情
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_SCHEME_DETAIL = 'management.cfyf-service.product-service-fee-scheme.product-fee-scheme-detail';
    // 复制方案
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_COPY_PRODUCT_FEE_SCHEME = 'management.cfyf-service.product-service-fee-scheme.copy-product-fee-scheme';
    // 删除方案
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_DELETE_PRODUCT_FEE_SCHEME = 'management.cfyf-service.product-service-fee-scheme.delete-product-fee-scheme';
    // 批量延长方案
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_BATCH_DELAY_SCHEME_EFFECT_DATE = 'management.cfyf-service.product-service-fee-scheme.batch-delay-scheme-effect-date';
    // 新增规则分组 - 根据方案选择的【计算维度】获取枚举值
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_GET_OBJ_BY_SCHEME = 'management.cfyf-service.product-service-fee-scheme.get-obj-by-scheme';
    // 新增规则分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_PRODUCT_FEE_OBJ = 'management.cfyf-service.product-service-fee-scheme.create-product-fee-obj';
    // 新增地区分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_REGION_GROUP = 'management.cfyf-service.product-service-fee-scheme.create-region-group';
    // 编辑地区分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_EDIT_REGION_GROUP = 'management.cfyf-service.product-service-fee-scheme.edit-region-group';
    // 删除地区分组
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_DELETE_REGION_GROUP = 'management.cfyf-service.product-service-fee-scheme.delete-region-group';
    // 地区分组列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_REGION_GROUP_LIST = 'management.cfyf-service.product-service-fee-scheme.region-group-list';
    // 新增规则 - 获取使用条件（根据方案选择的条件）
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_SCHEME_USAGE_CONDITION = 'management.cfyf-service.product-service-fee-scheme.scheme-usage-condition';
    // 新增规则
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_PRODUCT_FEE_RULE = 'management.cfyf-service.product-service-fee-scheme.create-product-fee-rule';
    // 规则详情
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_RULE_DETAIL = 'management.cfyf-service.product-service-fee-scheme.product-fee-rule-detail';
    // 编辑规则
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_EDIT_PRODUCT_FEE_RULE = 'management.cfyf-service.product-service-fee-scheme.edit-product-fee-rule';
    // 复制规则
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_COPY_PRODUCT_FEE_RULE = 'management.cfyf-service.product-service-fee-scheme.copy-product-fee-rule';
    // 删除规则
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_DELETE_PRODUCT_FEE_RULE = 'management.cfyf-service.product-service-fee-scheme.delete-product-fee-rule';
    // 某个规则分组下的规则列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_PRODUCT_FEE_RULE_LIST = 'management.cfyf-service.product-service-fee-scheme.product-fee-rule-list';
    // 批量应用产品费率模板到B端公司
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_BATCH_SETTING_PRODUCT_FEE_SCHEME_TASK = 'management.cfyf-service.product-service-fee-scheme.create-batch-setting-product-fee-scheme-task';
    // 单个应用模板
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_CREATE_SETTING_PRODUCT_FEE_SCHEME_TASK = 'management.cfyf-service.product-service-fee-scheme.create-setting-product-fee-scheme-task';
    // 根据模板获取应用该模板的产品
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_GET_PRODUCT_BY_TEMPLATE = 'management.cfyf-service.product-service-fee-scheme.get-product-by-template';
    // 模板应用记录
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_SCHEME_BING_LOG_LIST = 'management.cfyf-service.product-service-fee-scheme.scheme-bind-log-list';
    // 继续率统计管理列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_SCHEME_STAGE_SITUATION_PAGE_LIST = 'management.cfyf-service.product-service-fee-scheme.stage-situation-page-list';

    // ========================================= 创富云服-费率管理-服务费方案-END ================================= //

    // ========================================= 创富云服-产品考核方案-START ================================= //

    // 新增组合产品
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT = 'management.cfyf-service.combine-product.create-combine-product';
    // 新增组合产品（单品）
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_SINGLE_COMBINE_PRODUCT = 'management.cfyf-service.combine-product.create-single-combine-product';
    // 编辑组合产品
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_SINGLE_COMBINE_PRODUCT = 'management.cfyf-service.combine-product.edit-single-combine-product';
    // 组合产品分页列表
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_PAGE_LIST = 'management.cfyf-service.combine-product.combine-product-page-list';
    // 组合产品详情
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_DETAIL = 'management.cfyf-service.combine-product.combine-product-detail';
    // 新增考核政策方案
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_RATE_SCHEME = 'management.cfyf-service.combine-product.create_combine_product_rate_scheme';
    // 编辑考核政策方案
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_RATE_SCHEME = 'management.cfyf-service.combine-product.edit_combine_product_rate_scheme';
    // 考核方案详情
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_RATE_SCHEME_DETAIL = 'management.cfyf-service.combine-product.combine_product_rate_scheme_detail';
    // 删除考核政策方案
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DELETE_COMBINE_PRODUCT_RATE_SCHEME = 'management.cfyf-service.combine-product.delete_combine_product_rate_scheme';
    // 复制考核政策方案
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COPY_COMBINE_PRODUCT_RATE_SCHEME = 'management.cfyf-service.combine-product.copy_combine_product_rate_scheme';
    // 考核政策方案列表
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_RATE_SCHEME_PAGE_LIST = 'management.cfyf-service.combine-product.combine_product_rate_scheme_page_list';

    // 编辑默认模板名称
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_DEFAULT_RATE_SCHEME_TEMPLATE = 'management.cfyf-service.combine-product.edit_default_rate_scheme_template';
    // 新增考核政策模板
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_TPL_RATE_SCHEME = 'management.cfyf-service.combine-product.create_combine_product_tpl_rate_scheme';
    // 编辑考核政策模板
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_TPL_RATE_SCHEME = 'management.cfyf-service.combine-product.edit_combine_product_tpl_rate_scheme';
    // 考核政策模板详情
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_TPL_RATE_SCHEME_DETAIL = 'management.cfyf-service.combine-product.combine_product_tpl_rate_scheme_detail';
    // 考核政策模板列表
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_COMBINE_PRODUCT_TPL_RATE_SCHEME_PAGE_LIST = 'management.cfyf-service.combine-product.combine_product_tpl_rate_scheme_page_list';
    // 批量应用考核政策模板
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_BATCH_APPLY_COMBINE_PRODUCT_RATE_SCHEME = 'management.cfyf-service.combine-product.batch_apply_combine_product_rate_scheme';
    // 删除考核政策模板
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DEL_COMBINE_PRODUCT_TPL_RATE_SCHEME = 'management.cfyf-service.combine-product.del_combine_product_tpl_rate_scheme';
    // 应用模板
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_APPLY_COMBINE_PRODUCT_RATE_SCHEME = 'management.cfyf-service.combine-product.apply_combine_product_rate_scheme';
    // 批量设置考核政策模板任务
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_BATCH_CREATE_COMBINE_PRODUCT_TPL_RATE_SCHEME_TASK = 'management.cfyf-service.combine-product.batch_create_combine_product_tpl_rate_scheme_task';
    // 新增组合产品分组
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_CREATE_COMBINE_PRODUCT_GROUP = 'management.cfyf-service.combine-product.create_combine_product_group';
    // 编辑组合产品分组
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_EDIT_COMBINE_PRODUCT_GROUP = 'management.cfyf-service.combine-product.edit_combine_product_group';
    // 删除组合产品分组
    const MANAGEMENT_CFYF_SERVICE_COMBINE_PRODUCT_DELETE_COMBINE_PRODUCT_GROUP = 'management.cfyf-service.combine-product.delete_combine_product_group';

    // ========================================= 创富云服-产品考核方案-END ================================= //

    // ========================================= 创富云服-续期统计管理-START ================================= //

    // 继续率管理列表
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_STAGE_SITUATION_PAGE_LIST = 'management.cfyf-service.stage_situation.stage_situation_page_list';
    // 导出继续率列表
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EXPORT_STAGE_SITUATION_LIST = 'management.cfyf-service.stage_situation.export_stage_situation_list';
    // 调整继续率
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EDIT_STAGE_SITUATION = 'management.cfyf-service.stage_situation.edit_stage_situation';
    // 查看续期数据(查看继续率)
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_RENEWAL_STAGE_LIST = 'management.cfyf-service.stage_situation.renewal_stage_list';
    // 导出续期数据
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_EXPORT_RENEWAL_STAGE_LIST = 'management.cfyf-service.stage_situation.export_renewal_stage_list';
    // 重算继续率
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_RECALCULATE_STAGE_SITUATION = 'management.cfyf-service.stage_situation.recalculate_stage_situation';
    // 按照时间区间重算继续率
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_BATCH_RECALCULATE_STAGE_SITUATION = 'management.cfyf-service.stage_situation.batch_recalculate_stage_situation';
    // 继续率重算任务列表
    const MANAGEMENT_CFYF_SERVICE_STAGE_SITUATION_STAGE_SITUATION_CALCULATE_TASK_PAGE_LIST = 'management.cfyf-service.stage_situation.stage_situation_calculate_task_page_list';

    // ========================================= 创富云服-续期统计管理-END ================================= //

    // ========================================= 创富云服-结算管理-START ================================= //
    // 结算明细
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_PAGE_LIST = 'management.cfyf-service.settlement_management.company_settle_page_list';
    // 结算明细详情
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_DETAIL = 'management.cfyf-service.settlement_management.company_settle_detail';
    // 重算结算明细
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_RECALCULATE_COMPANY_SETTLE = 'management.cfyf-service.settlement_management.recalculate_company_settle';
    // 时间区间重算结算明细
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_BATCH_RECALCULATE_COMPANY_SETTLE = 'management.cfyf-service.settlement_management.batch_recalculate_company_settle';
    // 重算结算明细任务列表
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_CALCULATE_TASK_LIST = 'management.cfyf-service.settlement_management.company_settle_calculate_task_list';
    // 查看重算任务失败原因
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_COMPANY_SETTLE_CALCULATE_FAIL_REASON = 'management.cfyf-service.settlement_management.company_settle_calculate_fail_reason';
    // 导出重算任务失败原因
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_COMPANY_SETTLE_CALCULATE_FAIL_REASON = 'management.cfyf-service.settlement_management.export_company_settle_calculate_fail_reason';
    // 结算清单
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_FEE_PRODUCT_PAGE_LIST = 'management.cfyf-service.settlement_management.fee_product_page_list';
    // 导出结算清单
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_FEE_PRODUCT_PAGE_LIST = 'management.cfyf-service.settlement_management.export_fee_product_page_list';
    // 下载清单
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_DOWNLOAD_FEE_PRODUCT_PAGE_LIST = 'management.cfyf-service.settlement_management.download_fee_product_page_list';
    // 待结算清单
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_PENDING_FEE_PRODUCT_PAGE_LIST = 'management.cfyf-service.settlement_management.pending_fee_product_page_list';
    // 导出待结算清单
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_PENDING_FEE_PRODUCT_PAGE_LIST = 'management.cfyf-service.settlement_management.export_pending_fee_product_page_list';
    // 失败清单
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_FAIL_FEE_PRODUCT_PAGE_LIST = 'management.cfyf-service.settlement_management.fail_fee_product_page_list';
    // 导出失败清单
    const MANAGEMENT_CFYF_SERVICE_SETTLEMENT_MANAGEMENT_EXPORT_FAIL_FEE_PRODUCT_PAGE_LIST = 'management.cfyf-service.settlement_management.export_fail_fee_product_page_list';



    // ========================================= 创富云服-结算管理-END ================================= //

    //  设置产品上下架状态
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_SET_STATUS = 'management.cfyf-service.product_manage.set_status';
    // 批量上下架
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_BATCH_SET_STATUS = 'management.cfyf-service.product_manage.batch_set_status';
    // 产品列表
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_COMPANY_PRODUCTS = 'management.cfyf-service.product_manage.company_products';
    # 商品上下架日志
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_PRODUCT_OPERATION_LOG = 'management.cfyf-service.product_manage.product_operation_log';
    // 产品模版分页
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_GET_PAGE_LIST = 'management.cfyf-service.company_product_tpl.get_page_list';
    // 产品模板详情
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_DETAIL = 'management.cfyf-service.company_product_tpl.detail';
    // 产品模板创建
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_CREATE = 'management.cfyf-service.company_product_tpl.create';
    // 产品模板更新
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_UPDATE = 'management.cfyf-service.company_product_tpl.update';
    // 产品模板删除
    const MANAGEMENT_CFYF_SERVICE_COMPANY_PRODUCT_TPL_DELETE = 'management.cfyf-service.company_product_tpl.delete';

    // ========================================= 创富云服-产品相关-END =================================================== //
    // ========================================= 创富云服-人核订单-START =================================================== //
    //获取人核分页列表
    const MANAGEMENT_CFYF_SERVICE_MW_GET_PAGE_LIST = 'management.cfyf-service.mw.get_page_list';
    // 人核分页列表-导出人核订单
    const MANAGEMENT_CFYF_SERVICE_MW_EXPORT = 'management.cfyf-service.mw.export';
    //复制人核链接
    const MANAGEMENT_CFYF_SERVICE_MW_COPY_MW_URL = 'management.cfyf-service.mw.copy_mw_url';
    //订单基本信息
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL_ORDER_BASE_INFO = 'management.cfyf-service.mw.detail.order_base_info';
    // 获取人核详情
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL = 'management.cfyf-service.mw.detail';
    //人核基本信息
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_BASE_INFO = 'management.cfyf-service.mw.detail.get_base_info';
    //获取人核轨迹
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_TRACK_LOG = 'management.cfyf-service.mw.detail.get_track_log';
    //获取问卷列表
    const MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_GET_LIST = 'management.cfyf-service.mw.questionnaire.get_list';
    //获取问卷详情
    const MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_GET_DETAIL = 'management.cfyf-service.mw.questionnaire.get_detail';
    //获取下发问题列表
    const MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_GET_GROUP_LIST = 'management.cfyf-service.mw.supplement.get_group_list';
    //获取下发问题详情
    const MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_GET_GROUP_DETAIL = 'management.cfyf-service.mw.supplement.get_group_detail';
    //获取附件资料列表
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_FILE_LIST = 'management.cfyf-service.mw.detail.get_file_list';
    //获取核保结论汇总
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL_GET_CONCLUSION_INFO = 'management.cfyf-service.mw.detail.get_conclusion_info';
    //打包下载人核资料文件
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL_FILE_LIST_DOWNLOAD_ZIP = 'management.cfyf-service.mw.detail.file_list_download_zip';
    // ========================================= 创富云服-人核订单-END =================================================== //

    // ================================= 创富云服预核保进度路由 start ============================================== //
    // 预核保进度入口
    const MANAGEMENT_CFYF_SERVICE_ORDER_PR_PRE_UW_SCHEDULE_ENTRANCE  = 'management.cfyf-service.order.pre-uw-schedule-entrance';
    // 预核保进度列表
    const MANAGEMENT_CFYF_SERVICE_ORDER_PRE_UW_SCHEDULE_PAGE_LIST  = 'management.cfyf-service.order.pre-uw-schedule-page-list';
    // 预核保进度详情
    const MANAGEMENT_CFYF_SERVICE_ORDER_PRE_UW_SCHEDULE_DETAIL = 'management.cfyf-service.order.pre-uw-schedule-detail';
    // ================================= 创富云服预核保进度路由 end ============================================== //

    // ================================= 创富云服订单详情保全路由 start ============================================== //
    // 订单详情-保单保全信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_LOG = 'management.cfyf-service.pr-order.policy-preservation-log';
    // 订单详情-查看保全详情
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_DETAIL = 'management.cfyf-service.pr-order.policy-preservation-detail';
    // 订单详情-查看保全-获取电子保单链接
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK = 'management.cfyf-service.pr-order.policy-preservation-detail-policy-file-link';
    // ================================= 创富云服订单详情保全路由 end ============================================== //

    // ================================= 创富云服保单保全路由 start ============================================== //
    // 保单保全入口
    const MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_ENTRANCE  = 'management.cfyf-service.policy-preservation-entrance';
    // 保全申请分页列表
    const MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_APPLY_PAGE_LIST  = 'management.cfyf-service.policy-preservation.apply-page-list';
    // 保全详情
    const MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_DETAIL  = 'management.cfyf-service.policy-preservation.detail';
    // 保全详情-获取电子保单链接
    const MANAGEMENT_CFYF_SERVICE_POLICY_PRESERVATION_DETAIL_POLICY_FILE_LINK = 'management.cfyf-service.policy-preservation.detail-policy-file-link';
    // ================================= 创富云服保单保全路由 end ============================================== //

    // ========================================= crm_user_trd_account相关路由 =================================================== //
    /** 外部工号列表 **/
    const MANAGEMENT_CRM_USER_TRD_ACCOUNT_PAGE_LIST = 'management.crm_user_trd_account.page_list';
    /** 添加外部工号 **/
    const MANAGEMENT_CRM_USER_TRD_ACCOUNT_STORE = 'management.crm_user_trd_account.store`log`';
    /** 更新外部工号 **/
    const MANAGEMENT_CRM_USER_TRD_ACCOUNT_UPDATE = 'management.crm_user_trd_account.update`log`';
    /** 删除外部工号 **/
    const MANAGEMENT_CRM_USER_TRD_ACCOUNT_DELETE = 'management.crm_user_trd_account.delete`log`';
    /** 外部工号操作日志 **/
    const MANAGEMENT_CRM_USER_TRD_ACCOUNT_OPERATION_LOG_PAGE_LIST = 'management.crm_user_trd_account_operation_log.page_list';
    // ========================================= crm_user_trd_account相关路由 =================================================== //

//    // ========================================= crm微信客服相关路由 =================================================== //
//    /** 微信客服号列表 **/
//    const MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_PAGE_LIST = 'management.crm.wx_customer_service.page_list';
//    /** 同步微信客服号 **/
//    const MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_SYNC = 'management.crm.wx_customer_service.sync`log`';
//    /** 分配微信客服号 **/
//    const MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_DISTRIBUTE = 'management.crm.wx_customer_service.distribute`log`';
//    // ========================================= crm微信客服相关路由 =================================================== //

//    // ========================================= 通讯号管理-客服分配管理 =================================================== //
//
//    /** 客服分配管理-入口 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ENTRANCE = 'management.crm_communication_manager.sales_customer_service.entrance';
//    /** 客服信息-列表 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_LIST = 'management.crm_communication_manager.sales_customer_service_list';
//    /** 客服信息-添加 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ADD = 'management.crm_communication_manager.sales_customer_service.add';
//    /** 客服信息-编辑 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_EDIT = 'management.crm_communication_manager.sales_customer_service.edit';
//    /** 客服信息-删除 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_DELETE = 'management.crm_communication_manager.sales_customer_service.delete';
//    /** 客服信息-新增销售 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_ADD_SALES = 'management.crm_communication_manager.sales_customer_service.add_sales';
//    /** 客服信息-设置默认客服 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_SET_DEFAULT = 'management.crm_communication_manager.sales_customer_service.set_default';
//    /** 客服信息-上传文件 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_UPLOAD_FILE = 'management.crm_communication_manager.sales_customer_service.upload_file';
//    /** 客服信息-上传记录分页列表 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_SALES_CUSTOMER_SERVICE_UPLOAD_PAGE_LIST = 'management.crm_communication_manager.sales_customer_service.upload_page_list';
//    /** 客服信息-获取专家团队 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_GET_EXPERT_TEAM_LIST = 'management.crm_communication_manager.get_expert_team_list`auth_needless`';
//    /** 客服信息-获取专家团队成员 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_GET_EXPERT_TEAM_MEMBER = 'management.crm_communication_manager.get_expert_team_member`auth_needless`';
//    /** 客服信息-关联销售 **/
//    const MANAGEMENT_CRM_COMMUNICATION_MANAGER_RELATION_SALES = 'management.crm_communication_manager.relation-sales`auth_needless`';
//
//    // ========================================= 通讯号管理-客服分配管理 =================================================== //

    // ========================================= 文章相关路由 =================================================== //
    /** 添加文章分类 **/
    const MANAGEMENT_ARTICLE_CATEGORY_STORE = 'management.article.category.store`log`';
    /** 编辑文章分类 **/
    const MANAGEMENT_ARTICLE_CATEGORY_UPDATE = 'management.article.category.update`log`';
    /** 删除文章分类 **/
    const MANAGEMENT_ARTICLE_CATEGORY_DELETE = 'management.article.category.delete`log`';
    /** 文章分类详情 **/
    const MANAGEMENT_ARTICLE_CATEGORY_DETAIL = 'management.article.category.detail';
    /** 文章分类分页列表 **/
    const MANAGEMENT_ARTICLE_CATEGORY_PAGE_LIST = 'management.article.category.page_list';
    /** 切换分类状态 **/
    const MANAGEMENT_ARTICLE_CATEGORY_TOGGLE_STATUS = 'management.article.category.toggle_status`log`';
    /** 添加文章标签 **/
    const MANAGEMENT_ARTICLE_TAG_STORE = 'management.article.tag.store`log`';
    /** 删除文章标签 **/
    const MANAGEMENT_ARTICLE_TAG_DELETE = 'management.article.tag.delete`log`';
    /** 文章标签分页列表 **/
    const MANAGEMENT_ARTICLE_TAG_PAGE_LIST = 'management.article.tag.page_list';
    /** 新增文章 **/
    const MANAGEMENT_ARTICLE_STORE = 'management.article.store`log`';
    /** 编辑文章 **/
    const MANAGEMENT_ARTICLE_UPDATE = 'management.article.update`log`';
    /** 文章管理 **/
    const MANAGEMENT_ARTICLE_PAGE_LIST_MANAGE = 'management.article.page_list_manage';
    /** 文章分页列表 **/
    const MANAGEMENT_ARTICLE_PAGE_LIST = 'management.article.page_list';
    /** 文章详情 **/
    const MANAGEMENT_ARTICLE_DETAIL = 'management.article.detail';
    /** 切换文章渠道显示状态 **/
    const MANAGEMENT_ARTICLE_TOGGLE_SHOW = 'management.article.toggle_show`log`';
    /** 切换文章渠道置顶 **/
    const MANAGEMENT_ARTICLE_TOGGLE_TOP = 'management.article.toggle_top`log`';
    /** 切换文章渠道推荐 **/
    const MANAGEMENT_ARTICLE_TOGGLE_RECOMMEND = 'management.article.toggle_recommend`log`';
    // 文章预览
    const MANAGEMENT_ARTICLE_PREVIEW_LINK = 'management.article.preview_link';
    /** 删除文章 **/
    const MANAGEMENT_ARTICLE_DELETE = 'management.article.delete`log`';
    /** 复制文章 **/
    const MANAGEMENT_ARTICLE_COPY = 'management.article.copy`log`';
    /** 文章草稿保存 **/
    const MANAGEMENT_ARTICLE_DRAFT_SAVE = 'management.article.draft_save`log`';
    /** 文章草稿分页列表 **/
    const MANAGEMENT_ARTICLE_DRAFT_PAGE_LIST = 'management.article.draft_page_list';
    /** 文章草稿详情 **/
    const MANAGEMENT_ARTICLE_DRAFT_DETAIL = 'management.article.draft.detail';
    /** 文章草稿删除 **/
    const MANAGEMENT_ARTICLE_DRAFT_DELETE = 'management.article.draft.delete`log`';
    /** 文章草稿预览链接生成 **/
    const MANAGEMENT_ARTICLE_DRAFT_PREVIEW_LINK = 'management.article.draft.preview_link`log`';

    // 文章采集列表
    const MANAGEMENT_ARTICLE_GATHER_PAGE_LIST = 'management.article.gather.page_list';
    // 文章采集-批量删除
    const MANAGEMENT_ARTICLE_GATHER_BATCH_DEL_GATHER = 'management.article.gather.batch_del_gather`log`';
    // 文章采集-删除
    const MANAGEMENT_ARTICLE_GATHER_DEL_GATHER = 'management.article.gather.del_gather`log`';
    // 文章采集-编辑
    const MANAGEMENT_ARTICLE_GATHER_EDIT_GATHER = 'management.article.gather.edit_gather`log`';
    // 文章采集详情
    const MANAGEMENT_ARTICLE_GATHER_ARTICLE_DETAIL = 'management.article.gather.article_detail';

    // ========================================= 文章相关路由 =================================================== //
    /** 模拟登录 **/
    const MANAGEMENT_SIMULATE_LOGIN = 'management.simulate_login`auth_needless,log`';
    /* 上传员工自己的二维码图片 */
    const MANAGEMENT_SYS_USER_WX_QRCODE_UPDATE = 'management.sys_user.wx_qrcode_update`log`';
    /** 获取微信公众号别名列表 */
    const MANAGEMENT_IM_CUSTOMER_ALIAS_LIST = 'management.im.alias.list`auth_needless`';


    /** 顾问团队管理-小组预约数据-预约数据-查询用的小组列表（只包含简单信息） **/
    const MANAGEMENT_IM_ADVISER_GROUP_SIMPLE_LIST = 'management.im.adviser_group_simple_list`auth_needless`';
    /** 顾问团队管理-小组预约数据-小组列表 **/
    const MANAGEMENT_IM_ADVISER_GROUP_LIST = 'management.im.adviser_group_list';
    /** 顾问团队管理-小组预约数据-添加小组 **/
    const MANAGEMENT_IM_ADD_ADVISER_GROUP = 'management.im.add_adviser_group';
    /** 顾问团队管理-小组预约数据-解散小组 **/
    const MANAGEMENT_IM_DEL_ADVISER_GROUP = 'management.im.del_adviser_group';
    /** 顾问团队管理-小组预约数据-添加组员 **/
    const MANAGEMENT_IM_ADD_ADVISER_TO_GROUP = 'management.im.add_adviser_to_group';
    /** 顾问团队管理-小组预约数据-获取还没离开小组的成员 **/
    const MANAGEMENT_IM_GET_NOT_LEAVE_GROUP_ADVISERS = 'management.im.get_not_leave_group_advisers';
    /** 顾问团队管理-小组预约数据-小组组员列表(包含已经离组的顾问） **/
    const MANAGEMENT_IM_GROUP_ADVISER_LIST = 'management.im.group_adviser_list';
    /** 顾问团队管理-小组预约数据-移除组员 **/
    const MANAGEMENT_IM_DEL_GROUP_ADVISER = 'management.im.del_group_adviser';
    /** 顾问团队管理-小组预约数据-更换组长 **/
    const MANAGEMENT_IM_CHANGE_GROUP_LEADER = 'management.im.change_group_leader';
    /** 顾问团队管理-小组预约数据-顾问列表 **/
    const MANAGEMENT_IM_SALES_LIST = 'management.im.sales_list';

    // ========================================= 计划书相关路由 =================================================== //
    /** 计划书保障投保产品添加 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_ADD = 'management.proposal.product_add`log`';
    /** 计划书保障投保产品更新 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_UPDATE = 'management.proposal.product_update`log`';
    /** 计划书保障投保产品列表 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_GET_PAGE_LIST = 'management.proposal.get_page_list';
    /** 计划书保障投保产品详情 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_DETAIL = 'management.proposal.product_detail';
    /** 计划书保障投保产品复制 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_COPY = 'management.proposal.product_copy`log`';
    /** 计划书保障投保产品设置上下架 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_SET_STATUS = 'management.proposal.product_set_status`log`';
    /** 计划书保障投保产品批量设置上下架 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_BATCH_SET_STATUS = 'management.proposal.product_batch_set_status`log`';
    /** 计划书保障投保产品费率详情 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_RATE_DETAIL = 'management.proposal.product_rate.detail';
    /** 计划书保障投保产品费率保存 **/
    const MANAGEMENT_PROPOSAL_PRODUCT_RATE_SAVE = 'management.proposal.product_rate.save`log`';

    /** 计划书保障管理列表 **/
    const MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_GET_PAGE_LIST = 'management.proposal.guarantee_responsibility.get_page_list';
    /** 计划书保障责任添加 **/
    const MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_ADD = 'management.proposal.guarantee_responsibility.add`log`';
    /** 计划书保障责任详情 **/
    const MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DETAIL = 'management.proposal.guarantee_responsibility.detail';
    /** 计划书保障责任更新 **/
    const MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_UPDATE = 'management.proposal.guarantee_responsibility.update`log`';
    /** 计划书保障责任删除 **/
    const MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DELETE = 'management.proposal.guarantee_responsibility.delete`log`';

    /** 家庭风险分析模板分组分页列表 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_GET_PAGE_LIST = 'management.proposal.family_analysis_group.get_page_list';
    /** 家庭风险分析模板分组添加 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_ADD = 'management.proposal.family_analysis_group.add`log`';
    /** 家庭风险分析模板分组编辑 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_UPDATE = 'management.proposal.family_analysis_group.update`log`';
    /** 家庭风险分析模板分组删除 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DELETE = 'management.proposal.family_analysis_group.delete`log`';
    /** 家庭风险分析模板分组详情 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DETAIL = 'management.proposal.family_analysis_group.detail';

    /** 家庭风险分析模板添加 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_ADD = 'management.proposal.family_analysis.add`log`';
    /** 家庭风险分析模板编辑 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_EDIT = 'management.proposal.family_analysis.edit`log`';
    /** 家庭风险分析模板详情 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DETAIL = 'management.proposal.family_analysis.detail';
    /** 家庭风险分析模板删除 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DELETE = 'management.proposal.family_analysis.delete`log`';
    /** 家庭风险分析模板状态变更 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_SET_STATUS = 'management.proposal.family_analysis.set_status`log`';
    /** 家庭风险分析模板分页列表 **/
    const MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GET_PAGE_LIST = 'management.proposal.family_analysis.get_page_list';

    /** 储蓄产品管理-新增产品 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_ADD = 'management.proposal.deposit_product.add`log`';
    /** 储蓄产品管理-更新产品 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_UPDATE = 'management.proposal.deposit_product.update`log`';
    /** 储蓄产品管理-产品分页列表 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_PAGE_LIST = 'management.proposal.deposit_product.get_page_list';
    /** 储蓄产品管理-产品上下架设置 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_SET_STATUS = 'management.proposal.deposit_product.set_status`log`';
    /** 储蓄产品管理-产品批量上下架设置 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_BATCH_SET_STATUS = 'management.proposal.deposit_product.batch_set_status`log`';
    /** 储蓄产品管理-详情 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_DETAIL = 'management.proposal.deposit_product.detail';
    /** 储蓄产品管理-费率文件配置设置 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_RATE_SAVE = 'management.proposal.deposit_product.rate_save`log`';
    /** 储蓄产品管理-现金价值文件保存 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_CASH_SAVE = 'management.proposal.deposit_product.cash_save`log`';
    /** 储蓄产品管理-获取相关费率信息 **/
    const MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_RATE = 'management.proposal.deposit_product.get_rate';
    // ========================================= 计划书相关路由 =================================================== //
    // ========================================= 病种相关路由 =================================================== //
    /** 保存一个系列病种 **/
    const MANAGEMENT_PRODUCT_DISEASE_STORE_ONE_SERIES = 'management.product_disease.store_one_series`log`';
    /** 删除一个系列病种 **/
    const MANAGEMENT_PRODUCT_DISEASE_DELETE_ONE_SERIES = 'management.product_disease.delete_one_series`log`';
    /** 病种模板分页列表 **/
    const MANAGEMENT_PRODUCT_DISEASE_GET_PAGE_LIST = 'management.product_disease.get_page_list';
    /** 病种明细管理 **/
    const MANAGEMENT_PRODUCT_DISEASE_MANAGEMENT = 'management.product_disease.management';
    /** 关联产品 **/
    const MANAGEMENT_PRODUCT_DISEASE_BIND_PRODUCT = 'management.product_disease.bind_product`log`';
    /** 取消关联产品 **/
    const MANAGEMENT_PRODUCT_DISEASE_UNBIND_PRODUCT = 'management.product_disease.unbind_product`log`';
    /** 删除病种模板 **/
    const MANAGEMENT_PRODUCT_DISEASE_DELETE_TEMPLATE = 'management.product_disease.delete_template`log`';
    /** 病种模板详情 **/
    const MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_DETAIL = 'management.product_disease.template_detail';
    /** 病种模板上传 **/
    const MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPLOAD = 'management.product_disease.upload`log`';
    /** 修改模板名称 **/
    const MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPDATE_NAME = 'management.product_disease.template_update_name`log`';
    // ========================================= 病种相关路由 =================================================== //
    // ========================================= 产品对比相关路由 =================================================== //
    /** 创建一览表产品 **/
    const MANAGEMENT_PRODUCT_EVALUATION_ADD = 'management.product_evaluation.add`log`';
    /** 删除一览表产品 **/
    const MANAGEMENT_PRODUCT_EVALUATION_DEL = 'management.product_evaluation.del`log`';
    /** 更新一览表产品 **/
    const MANAGEMENT_PRODUCT_EVALUATION_UPDATE = 'management.product_evaluation.update`log`';
    /** 一览表产品详情 **/
    const MANAGEMENT_PRODUCT_EVALUATION_DETAIL = 'management.product_evaluation.detail';
    /** 计划书产品列表（用于创建管理产品） **/
    const MANAGEMENT_PRODUCT_EVALUATION_PROPOSAL_PRODUCT_LIST = 'management.product_evaluation.proposal_product_list';
    /** 一览表产品列表 **/
    const MANAGEMENT_PRODUCT_EVALUATION_GET_PAGE_LIST = 'management.product_evaluation.get_page_list';
    /** 上下架 **/
    const MANAGEMENT_PRODUCT_EVALUATION_SET_PRODUCT_STATUS = 'management.product_evaluation.set_product_status`log`';
    /** 批量上架 **/
    const MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_ENABLE = 'management.product_evaluation.batch_product_enable`log`';
    /** 批量下架 **/
    const MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_DISABLE = 'management.product_evaluation.batch_product_disable`log`';

    // ========================================= 产品对比相关路由 =================================================== //

    // ========================================= 规则管理-资源相关路由 =================================================== //
    // 资源列表
    const MANAGEMENT_PRODUCT_RULE_RECOURSE_LIST = 'management.product_rule.resource.list';
    // 上传资源
    const MANAGEMENT_PRODUCT_RULE_RECOURSE_ADD  = 'management.product_rule.resource.add';
    // 复制链接
    const MANAGEMENT_PRODUCT_RULE_RECOURSE_COPY_LINK  = 'management.product_rule.resource.copy_link';
    // 下载
    const MANAGEMENT_PRODUCT_RULE_RECOURSE_DOWNLOAD  = 'management.product_rule.resource.download';
    // 预览
    const MANAGEMENT_PRODUCT_RULE_RECOURSE_PREVIEW  = 'management.product_rule.resource.preview';
    // ========================================= 规则管理-资源相关路由 =================================================== //

    // ========================================= 信息安全相关路由 =================================================== //
    /** 系统安全配置菜单栏目权限 **/
    const MANAGEMENT_CRM_USER_SECRET_MENU = 'management.crm_user.secret_menu';
    /** 获取信息安全设置和监控规则 **/
    const MANAGEMENT_CRM_USER_SECRET_SETTINGS_AND_RULE_GET = 'management.crm_user.secret_settings_and_rule_get';
    /** 编辑信息安全设置和监控规则 **/
    const MANAGEMENT_CRM_USER_SECRET_SETTINGS_AND_RULE_SET = 'management.crm_user.secret_settings_and_rule_set`log`';
    /** 异常监控分页列表 **/
    const MANAGEMENT_CRM_USER_SECRET_ABNORMAL_LOG_PAGE_LIS = 'management.crm_user.secret.abnormal_log_page_list';
    /** 风险记录统计列表 **/
    const MANAGEMENT_CRM_USER_SECRET_MONTHLY_RISK_STATISTICS = 'management.crm_user.secret.monthly_risk_statistics';

    // ========================================= 信息安全相关路由 =================================================== //
    // ========================================= 官网设置相关路由 =================================================== //
    // 官网banner菜单栏目
    const MANAGEMENT_WS_BANNER_SETTING = 'management.ws_banner.setting';
    // 官网banner列表
    const MANAGEMENT_WS_BANNER_GET_PAGE_LIST = 'management.ws_banner.get_page_list';
    // 官网banner新建
    const MANAGEMENT_WS_BANNER_STORE = 'management.ws_banner.store`log`';
    // 官网banner更新
    const MANAGEMENT_WS_BANNER_UPDATE = 'management.ws_banner.update`log`';
    // 官网banner详情
    const MANAGEMENT_WS_BANNER_DETAIL = 'management.ws_banner.detail';
    // 官网banner状态变更
    const MANAGEMENT_WS_BANNER_CHANGE_STATUS = 'management.ws_banner.change_status`log`';
    // ========================================= 官网设置相关路由 =================================================== //
    // ========================================= 产品显示设置相关路由 =================================================== //
    // 产品显示设置菜单栏
    const MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_SETTINGS = 'management.pr_product_display_rule.settings';
    // 产品显示规则开关设置
    const MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_SWITCH_ENABLE = 'management.pr_product_display_rule.switch_enable`log`';
    // 产品显示设置分页列表
    const MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_GET_PAGE_LIST = 'management.pr_product_display_rule.get_page_list';
    // 设置对接渠道的产品展示规则
    const MANAGEMENT_PR_PRODUCT_DISPLAY_SET_SUPPLIER_PLATFORM_RULE = 'management.pr_product_display_rule.set_supplier_platform`log`';
    // ========================================= 产品显示设置相关路由 =================================================== //
    // ========================================= 产品计划折扣系数相关路由 =================================================== //
    // 产品计划-折扣系数-列表
    const MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_LIST = 'management.pr_product_plan.discount.list';
    // 产品计划-折扣系数-详情
    const MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_DETAIL = 'management.pr_product_plan.discount.detail';
    // 产品计划-折扣系数-新增
    const MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_ADD = 'management.pr_product_plan.discount.add`log`';
    // 产品计划-折扣系数-编辑
    const MANAGEMENT_PR_PRODUCT_PLAN_DISCOUNT_EDIT = 'management.pr_product_plan.discount.edit`log`';
    // ========================================= 产品显示设置相关路由 =================================================== //

    // ========================================= 续保续期 START =================================================== //
    // 续保续期入口
    const MANAGEMENT_PR_POLICY_RENEWAL_ENTRANCE = 'management.pr_policy_renewal.entrance';
    // 续保续期列表
    const MANAGEMENT_PR_POLICY_RENEWAL_GET_PAGE_LIST = 'management.pr_policy_renewal.get_page_list';
    // 续保续期详情
    const MANAGEMENT_PR_POLICY_RENEWAL_DETAIL = 'management.pr_policy_renewal.detail';
    // 续保续期导出
    const MANAGEMENT_PR_POLICY_RENEWAL_EXPORT = 'management.pr_policy_renewal.export`log`';
    // 续保续期更新
    const MANAGEMENT_PR_POLICY_RENEWAL_UPDATE = 'management.pr_policy_renewal.update`log`';
    // 续保续期下载电子保单
    const MANAGEMENT_PR_POLICY_RENEWAL_GET_POLICY_FILE = 'management.pr_policy_renewal.get_policy_file`log`';
    // ========================================= 续保续期 END =================================================== //

    // ========================================= cfyf全部订单 START ===================================================
    // 订单列表（产品接入的pr表）
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_PAGE_LIST = 'management.cfyf_service.pr_order.page_list';
    // 订单列表数据看板
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_PAGE_LIST_STATISTICS = 'management.cfyf_service.pr_order.page_list_statistics';
    // 导出订单列表
    const MANAGEMENT_CFYF_SERVICE_EXPORT_PR_ORDER_PAGE_LIST = 'management.cfyf_service.pr_order.export_order_list`log`';
    // 重推保单到B端公司
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_SEND_NOTIFY = 'management.cfyf_service.pr_order.send_notify';
    // 修改归属B端公司记录列表
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY_LOG = 'management.cfyf_service.pr-order.change-company-log';
    // 修改归属B端公司操作
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY = 'management.cfyf_service.pr-order.change-company';
    // 批量修改归属B端公司
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_CHANGE_COMPANY_BATCH_TASK = 'management.cfyf_service.pr-order.change-company-batch-task';
    // 订单详情-订单基本信息（产品接入的pr表）
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_BASE_INFO = 'management.cfyf_service.pr_order.base_info';
    // 订单详情-销售信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SALES = 'management.cfyf_service.pr_order.policy_sales';
    // 订单客户
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_CUSTOMER = 'management.cfyf_service.pr_order.order_customer';
    // 订单详情-合规信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_COMPLIANCE_INFO = 'management.cfyf_service.pr_order.order_compliance_info';
    // 订单详情-保单产品信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRODUCT_INFO = 'management.cfyf_service.pr_order.policy_product_info';
    // 订单详情-支付信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PAYMENT_INFO = 'management.cfyf_service.pr_order.policy_payment_info';
    // 订单详情-续期账号信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_INFO = 'management.cfyf_service.pr_order.policy_renewal_info';
    // 订单详情-回访信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_VISIT_INFO = 'management.cfyf_service.pr_order.policy_visit_info';
    // 订单详情-回执信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RECEIPT_INFO = 'management.cfyf_service.pr_order.policy_receipt_info';
    // 订单详情-保单基本信息（产品接入的pr表）
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_BASE_INFO = 'management.cfyf_service.pr_order.policy_base_info';
    // 订单详情-获取电子保单链接（产品接入的pr表）
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_FILE_LINK = 'management.cfyf_service.pr_order.policy_file_link';
    // 订单详情-人员信息 （产品接入的pr表）
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PERSON_INFO = 'management.cfyf_service.pr_order.policy_person_info';
    // 订单详情-保单险种信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_INSURANCES = 'management.cfyf_service.pr_order.policy_insurances';
    // 订单详情-保单保障权益和机构协议
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RESPONSIBILITY_AND_AGREEMENTS = 'management.cfyf_service.pr_order.policy_responsibility_and_agreements';
    // 订单详情-保单退保记录
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SURRENDER_LOG = 'management.cfyf_service.pr_order.policy_surrender_log';
    // 订单详情-保单续保续期记录
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_STAGE = 'management.cfyf_service.pr_order.policy_renewal_stage';
    // 订单详情-保单支付和续保银行卡信息（产品接入的pr表）
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PAYMENT_AND_RENEWAL_INFO = 'management.cfyf_service.pr_order.policy_payment_and_renewal_info';
    // 全部订单-复制详情链接
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_DETAIL_LINK          = 'management.cfyf_service.pr_order.get_detail_link';
    // 全部订单-复制人核链接
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_MANPOWER_LINK = 'management.cfyf_service.pr_order.get_policy_manpower_link';
    // 全部订单-复制回访链接
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_VISIT_LINK    = 'management.cfyf_service.pr_order.get_policy_visit_link';

    // 订单详情-人核信息
    const MANAGEMENT_CFYF_SERVICE_MW_DETAIL_INFO = 'management.cfyf_service.mw.detail_info';
    // 订单详情-人核基本信息
    const MANAGEMENT_CFYF_SERVICE_MW_BASE_INFO = 'management.cfyf_service.mw.base_info';
    // 订单详情-获取人核轨迹
    const MANAGEMENT_CFYF_SERVICE_MW_TRACK_LOG = 'management.cfyf_service.mw.track_log';
    // 订单详情-获取问卷列表
    const MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_LIST = 'management.cfyf_service.mw.questionnaire.list';
    // 订单详情-获取问卷详情
    const MANAGEMENT_CFYF_SERVICE_MW_QUESTIONNAIRE_DETAIL = 'management.cfyf_service.mw.questionnaire.detail';
    // 订单详情-获取下发问题列表
    const MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_QUESTION_GROUP_LIST = 'management.cfyf_service.mw.supplement_question.group.list';
    // 订单详情-获取下发问题详情
    const MANAGEMENT_CFYF_SERVICE_MW_SUPPLEMENT_QUESTION_GROUP_DETAIL = 'management.cfyf_service.mw.supplement_question.group.detail';
    // 订单详情-获取附件资料列表
    const MANAGEMENT_CFYF_SERVICE_MW_FILE_LIST = 'management.cfyf_service.mw.file.list';
    //打包下载人核资料文件
    const MANAGEMENT_CFYF_SERVICE_MW_FILE_LIST_DOWNLOAD_ZIP = 'management.cfyf_service.mw.file.list_download_zip';
    // 订单详情-获取核保结论汇总
    const MANAGEMENT_CFYF_SERVICE_MW_CONCLUSION_INFO = 'management.cfyf_service.mw.conclusion.info';
    // 保单详情-保单基本信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_ONE_POLICY_BASE_INFO = 'management.cfyf_service.pr-order.one_policy_base_info';
    // 保单详情-保单基本信息
    const MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_CURRENT_RENEWAL_STAGE = 'management.cfyf_service.pr-order.policy_current_renewal_stage';

    // ========================================= cfyf全部订单 START ===================================================

    // ========================================= cfyf续保续期 START ===================================================
    // 全部续保续期列表
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_PAGE_LIST = 'management.cfyf_service.policy_renewal.get_page_list';
    // 全部续保续期统计
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_STATISTICS = 'management.cfyf_service.policy_renewal.get_statistics';
    // 续保续期跟踪记录
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_FOLLOW_LOG = 'management.cfyf_service.policy_renewal.follow_log';
    // 续保续期添加跟踪记录
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_ADD_FOLLOW_LOG = 'management.cfyf_service.policy_renewal.add_follow_log';
    // 发送续保续期短信
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_SEND_MSG = 'management.cfyf_service.policy_renewal.send_msg';
    // 保存续保续期通知设置
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_SAVE_NOTIFY_SETTING = 'management.cfyf_service.policy_renewal.save_notify_setting';
    // 获取客户续保续期记录
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_CUSTOMER_RENEWAL_STAGE_LIST = 'management.cfyf_service.policy_renewal.get_customer_renewal_stage_list';
    // 续保续期通知设置
    const MANAGEMENT_CFYF_SERVICE_GET_COMPANY_NOTIFY_SETTING = 'management.cfyf_service.get_company_notify_setting';
    // 更新续保续期通知设置
    const MANAGEMENT_CFYF_SERVICE_NOTIFY_SETTING = 'management.cfyf_service.notify_setting';
    // 批量更新续保续期通知设置
    const MANAGEMENT_CFYF_SERVICE_BATCH_NOTIFY_SETTING = 'management.cfyf_service.batch_notify_setting';
    //续保续期跟进详情
    const MANAGEMENT_CFYF_SERVICE_CUSTOMER_RENEWAL_FOLLOW_DETAIL = 'management.cfyf_service.customer_renewal_follow_detail';
    //续保续期导出
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_EXPORT = 'management.cfyf_service.policy_renewal.export';
    //续保续期链接
    const MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_LINK = 'management.cfyf_service.policy_renewal.link';
    //续保续期详情-保单详情
    const MANAGEMENT_CFYF_SERVICE_POLICY_POLICY_DETAIL = 'management.cfyf_service.policy_renewal.policy_detail';
    // ========================================= 续保续期 END ===================================================

    // ========================================= 活动及公告-公告 =================================================== //
    // 公告列表
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_GET_PAGE_LIST = 'management.activities_and_announcements.announcements.get_page_list';
    // 添加公告
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_STORE = 'management.activities_and_announcements.announcements.store';
    // 更新公告
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_UPDATE = 'management.activities_and_announcements.announcements.update';
    // 删除公告
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_DESTROY = 'management.activities_and_announcements.announcements.destroy';
    // 公告详情
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_SHOW = 'management.activities_and_announcements.announcements.show';
    // 销售个人公告列表
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_SALES_PAGE_LIST = 'management.activities_and_announcements.announcements.sales_page_list`auth_needless`';
    // 浏览记录
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_BROWSE_RECORD = 'management.activities_and_announcements.announcements.browse_record`auth_needless`';
    // 更新已读
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_UPDATE_READ = 'management.activities_and_announcements.announcements.update_read`auth_needless`';
    // 保存接客数量
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_STORE_RECEPTION_STATISTICS = 'management.activities_and_announcements.announcements.store_reception_statistics`auth_needless`';
    // 获取当前销售未读公告
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_GET_SALES_UNREAD_ANNOUNCEMENT_LIST = 'management.activities_and_announcements.announcements.get_sales_unread_announcement_list`auth_needless`';
    // 获取当前管理员未读公告
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_GET_ADMIN_UNREAD_ANNOUNCEMENT_LIST = 'management.activities_and_announcements.announcements.get_admin_unread_announcement_list`auth_needless`';
    // 管理员个人公告列表
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_ADMIN_PAGE_LIST = 'management.activities_and_announcements.announcements.admin_page_list';
    // 获取发送部门列表
    const MANAGEMENT_ACTIVITIES_AND_ANNOUNCEMENTS_ANNOUNCEMENTS_GET_SEND_DEPARTMENT_LIST = 'management.activities_and_announcements.announcements.get_send_department_list`auth_needless`';

    // ========================================= 活动及公告-公告 =================================================== //


    // ======================= 自助售后指引管理 ========================= //

    /** 自助售后指引管理-入口 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_ENTRANCE = 'management.self_service_after_sales_guidance.entrance';
    /** 自助售后指引管理-平台指引分页列表 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_LIST_WITH_PAGE = 'management.self_service_after_sales_guidance.list_with_page';
    /** 自助售后指引管理-添加平台指引 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_CREATE = 'management.self_service_after_sales_guidance.create';
    /** 自助售后指引管理-平台指引详情 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_SHOW = 'management.self_service_after_sales_guidance.show';
    /** 自助售后指引管理-编辑平台指引 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_UPDATE = 'management.self_service_after_sales_guidance.update';
    /** 自助售后指引管理-指引列表 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_GUIDE_LIST = 'management.self_service_after_sales_guidance.guide_list`auth_needless`';
    /** 自助售后指引管理-渠道列表 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_SALE_PLATFORM_LIST = 'management.self_service_after_sales_guidance.sale_platform_list`auth_needless`';
    /** 自助售后指引管理-检查指引内容是否为空 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_CHECK_GUIDE_CONTENT = 'management.self_service_after_sales_guidance.check_guide_content`auth_needless`';
    /** 自助售后指引管理-所属渠道列表 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_BELONG_CHANNEL_LIST = 'management.self_service_after_sales_guidance.belong_channel_list`auth_needless`';
    /** 自助售后指引管理-保司列表 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_COMPANY_LIST = 'management.self_service_after_sales_guidance.company_list`auth_needless`';
    /** 自助售后指引管理-产品列表 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_PRODUCT_LIST = 'management.self_service_after_sales_guidance.product_list`auth_needless`';
    /** 自助售后指引管理-导出平台指引 **/
    const MANAGEMENT_SELF_SERVICE_AFTER_SALES_GUIDANCE_EXPORT_GUIDE_LIST = 'management.self_service_after_sales_guidance.export_guide_list';

    // ======================= 自助售后指引管理 ========================= //

    // ========================================= 产品列表素材相关路由 =================================================== //
    // 产品列表素材菜单栏
    const MANAGEMENT_PR_PRODUCT_COVER_MATERIAL_MATERIALS = 'management.pr_product_cover_material.materials';
    // 产品列表素材分类设置
    const MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_GET_LIST = 'management.pr_product_cover_material.category_get_list';
    // 产品列表素材封面图库
    const MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_COVER_GET_PAGE_LIST = 'management.pr_product_cover_material.cover_get_page_list`auth_needless`';
    // 产品列表素材封面图库-上传图片
    const MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_COVER_STORE = 'management.pr_product_cover_material.cover_store`log`';
    // 产品列表素材分类编辑
    const MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_UPDATE = 'management.pr_product_cover_material.category_update`log`';
    // 产品列表素材新建分类
    const MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_STORE = 'management.pr_product_cover_material.category_store`log`';
    // ========================================= 产品列表素材相关路由 =================================================== //

    // ========================================= cfyf数据统计 START ===================================================
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_ACHIEVEMENT_MENU = 'management.cfyf_service.policy_statistics.achievement_menu';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_SALES_COMPANY_RANK = 'management.cfyf_service.policy_statistics.sales_company_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_SALES_COMPANY_RANK = 'management.cfyf_service.policy_statistics.export_sales_company_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_PERSONAL_RANK = 'management.cfyf_service.policy_statistics.personal_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_PERSONAL_RANK = 'management.cfyf_service.policy_statistics.export_personal_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_INSURANCE_CLASS_RANK = 'management.cfyf_service.policy_statistics.insurance_class_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_INSURANCE_CLASS_RANK = 'management.cfyf_service.policy_statistics.export_insurance_class_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_PRODUCT_RANK = 'management.cfyf_service.policy_statistics.product_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_PRODUCT_RANK = 'management.cfyf_service.policy_statistics.export_product_rank';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_MONTHLY_STATISTICS = 'management.cfyf_service.policy_statistics.monthly_statistics';
    const MANAGEMENT_CFYF_SERVICE_POLICY_STATISTICS_EXPORT_MONTHLY_STATISTICS = 'management.cfyf_service.policy_statistics.export_monthly_statistics';
    const MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_STATISTICS = 'management.cfyf_service.product_statistics.transmit';
    // ========================================= cfyf数据统计 END ===================================================

    // ========================================= 人工核保相关路由 =================================================== //
    // 获取人核分页列表
    const MANAGEMENT_PR_MW_PAGE_LIST = 'management.pr_mw.page_list';
    // 获取人核详情
    const MANAGEMENT_PR_MW_DETAIL = 'management.pr_mw.detail';
    // 人核分页列表-复制人核链接
    const MANAGEMENT_PR_MW_COPY_MW_URL = 'management.pr_mw.copy_mw_url';
    // 人核单详情-订单基本信息
    const MANAGEMENT_PR_MW_ORDER_BASE_INFO = 'management.pr_mw.order_base_info';
    // 人核单详情-人核基本信息
    const MANAGEMENT_PR_MW_BASE_INFO = 'management.pr_mw.base_info';
    // 人核单详情-获取人核轨迹
    const MANAGEMENT_PR_MW_TRACK_LOG = 'management.pr_mw.track_log';
    // 人核单详情-获取问卷列表
    const MANAGEMENT_PR_MW_QUESTIONNAIRE_LIST = 'management.pr_mw.questionnaire.list';
    // 人核单详情-获取问卷详情
    const MANAGEMENT_PR_MW_QUESTIONNAIRE_DETAIL = 'management.pr_mw.questionnaire.detail';
    // 人核单详情-获取下发问题列表
    const MANAGEMENT_PR_MW_SUPPLEMENT_QUESTION_GROUP_LIST = 'management.pr_mw.supplement_question.group.list';
    // 人核单详情-获取下发问题详情
    const MANAGEMENT_PR_MW_SUPPLEMENT_QUESTION_GROUP_DETAIL = 'management.pr_mw.supplement_question.group.detail';
    // 人核单详情-获取附件资料列表
    const MANAGEMENT_PR_MW_FILE_LIST = 'management.pr_mw.file.list';
    // 人核单详情-打包下载人核资料文件
    const MANAGEMENT_PR_MW_FILE_LIST_DOWNLOAD_ZIP = 'management.pr_mw.file.download_zip`log`';
    // 人核单详情-获取核保结论汇总
    const MANAGEMENT_PR_MW_CONCLUSION_INFO = 'management.pr_mw.conclusion.info';
    // 资料补充-添加
    const MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_CREATE = 'management.pr_mw.supplementary_record.create';
    // 资料补充-编辑
    const MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_UPDATE = 'management.pr_mw.supplementary_record.update';
    // 资料补充-删除
    const MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DEL = 'management.pr_mw.supplementary_record.del';
    // 资料补充-打包下载全部人核资料文件
    const MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DOWNLOAD_ZIP_GROUP = 'management.pr_mw.supplementary_record.download_zip_group`log`';
    // 资料补充-打包下载单个人核资料文件
    const MANAGEMENT_PR_MW_SUPPLEMENTARY_RECORD_DOWNLOAD_ZIP_GROUP_ONE = 'management.pr_mw.supplementary_record.download_zip_group_one`log`';
    // ========================================= 人工核保相关路由 =================================================== //

    // ========================================= 朋友圈内容管理相关路由 =================================================== //
    // 朋友圈内容分类新增
    const MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_STORE = 'management.core_friend_circle.category.store';
    // 朋友圈内容分类列表
    const MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_PAGE_LIST = 'management.core_friend_circle.category.page_list';
    // 朋友圈内容分类更新
    const MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_UPDATE = 'management.core_friend_circle.category.update';
    // 朋友圈内容分类删除
    const MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_DELETE = 'management.core_friend_circle.category.delete';
    // 朋友圈分类内容详情
    const MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_DETAIL = 'management.core_friend_circle.category.detail';
    // 朋友圈分类内容切换状态
    const MANAGEMENT_CORE_FRIEND_CIRCLE_CATEGORY_TOGGLE_STATUS = 'management.core_friend_circle.category.toggle_status';

    // 朋友圈海报内容分类新增
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_STORE = 'management.core_friend_circle_poster.category.store';
    // 朋友圈海报内容分类列表
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_PAGE_LIST = 'management.core_friend_circle_poster.category.page_list';
    // 朋友圈海报内容分类更新
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_UPDATE = 'management.core_friend_circle_poster.category.update';
    // 朋友圈海报内容分类删除
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_DELETE = 'management.core_friend_circle_poster.category.delete';
    // 朋友圈海报分类内容详情
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_DETAIL = 'management.core_friend_circle_poster.category.detail';
    // 朋友圈海报分类内容切换状态
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_CATEGORY_TOGGLE_STATUS = 'management.core_friend_circle_poster.category.toggle_status';

    // 朋友圈内容新增
    const MANAGEMENT_CORE_FRIEND_CIRCLE_STORE = 'management.core_friend_circle.store';
    // 朋友圈内容列表
    const MANAGEMENT_CORE_FRIEND_CIRCLE_PAGE_LIST = 'management.core_friend_circle.page_list';
    // 朋友圈内容更新
    const MANAGEMENT_CORE_FRIEND_CIRCLE_UPDATE = 'management.core_friend_circle.update';
    // 朋友圈内容删除
    const MANAGEMENT_CORE_FRIEND_CIRCLE_DELETE = 'management.core_friend_circle.delete';
    // 朋友圈内容详情
    const MANAGEMENT_CORE_FRIEND_CIRCLE_DETAIL = 'management.core_friend_circle.detail';
    // 朋友圈内容切换显示状态
    const MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_SHOW = 'management.core_friend_circle.toggle_is_show';
    // 朋友圈内容切换置顶状态
    const MANAGEMENT_CORE_FRIEND_CIRCLE_TOGGLE_IS_TOP = 'management.core_friend_circle.toggle_is_top';
    // 朋友圈内容复制
    const MANAGEMENT_CORE_FRIEND_CIRCLE_COPY = 'management.core_friend_circle.copy';
    // 朋友圈内容预览
    const MANAGEMENT_CORE_FRIEND_CIRCLE_PREVIEW = 'management.core_friend_circle.preview';

    // 朋友圈海报新增
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_STORE = 'management.core_friend_circle_poster.store';
    // 朋友圈海报列表
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_PAGE_LIST = 'management.core_friend_circle_poster.page_list';
    // 朋友圈海报更新
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_UPDATE = 'management.core_friend_circle_poster.update';
    // 朋友圈海报删除
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_DELETE = 'management.core_friend_circle_poster.delete';
    // 朋友圈海报详情
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_DETAIL = 'management.core_friend_circle_poster.detail';
    // 朋友圈海报切换显示状态
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_SHOW = 'management.core_friend_circle_poster.toggle_is_show';
    // 朋友圈海报切换置顶状态
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_TOP = 'management.core_friend_circle_poster.toggle_is_top';
    // 朋友圈海报切换推荐状态
    const MANAGEMENT_CORE_FRIEND_CIRCLE_POSTER_TOGGLE_IS_RECOMMEND = 'management.core_friend_circle_poster.toggle_is_recommend';
    // ========================================= 朋友圈内容管理相关路由 =================================================== //

    // ========================================= 上游对账-首续期费用方案 =================================================== //
    // 首续期费用方案-左侧栏入口
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_LIST_LEFT_ENTRANCE = 'prc_upstream_reconciliation.fee_scheme_list.left_entrance';
    // 首续期费用方案-方案列表
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_PAGE_LIST = 'prc_upstream_reconciliation.fee_scheme_list.page_list';
    // 首续期费用方案-创建方案
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_CREATE = 'prc_upstream_reconciliation.fee_scheme_list.create`log`';
    // 首续期费用方案-复制方案
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_COPY = 'prc_upstream_reconciliation.fee_scheme_list.copy`log`';
    // 首续期费用方案-编辑方案
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_UPDATE = 'prc_upstream_reconciliation.fee_scheme_list.update`log`';
    // 首续期费用方案-应用到产品-待提交
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_FOR_PENDING = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product_for_pending';
    // 首续期费用方案-应用到产品-方案详情
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_DETAIL = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.scheme_detail';
    // 首续期费用方案-应用到产品-方案设置
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_CREATE = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.scheme_create`log`';
    // 首续期费用方案-应用到产品-方案复制
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_COPY = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.scheme_copy`log`';
    // 首续期费用方案-应用到产品-方案编辑
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_UPDATE = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.scheme_update`log`';
    // 首续期费用方案-应用到产品-方案新增地区
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_CREATE_REGION = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.scheme_create_region`log`';
    // 首续期费用方案-应用到产品-方案编辑地区
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_UPDATE_REGION = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.scheme_update_region`log`';
    // 首续期费用方案-应用到产品-方案删除地区
    const PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_DELETE_REGION = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.scheme_delete_region`log`';
    // 首续期费用方案-应用到产品-批量提审费用方案
    const PRC_FEE_SCHEME_BATCH_APPLY = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.batch_apply`log`';
    // 首续期费用方案-应用到产品-提审费用方案
    const PRC_FEE_SCHEME_APPLY = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.apply`log`';
    // 首续期费用方案-应用到产品-重新提审费用方案
    const PRC_FEE_SCHEME_REAPPLY = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.reapply`log`';
    // 首续期费用方案-应用到产品-审核通过
    const PRC_FEE_SCHEME_PASS = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.pass`log`';
    // 首续期费用方案-应用到产品-驳回方案
    const PRC_FEE_SCHEME_REJECT = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.reject`log`';
    // 首续期费用方案-应用到产品-修改方案止期
    const PRC_FEE_SCHEME_CHANGE_INVALID_DATE = 'prc_upstream_reconciliation.fee_scheme_list.apply_to_product.change_invalid_date`log`';
    // ========================================= 上游对账-首续期费用方案 =================================================== //

    // ========================================= 上游对账-继续率计算方案 =================================================== //
    // 继续率计算方案-左侧栏入口
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_LIST_LEFT_ENTRANCE = 'prc_upstream_reconciliation.renewal_scheme_list.left_entrance';
    // 继续率计算方案-方案列表
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_PAGE_LIST = 'prc_upstream_reconciliation.renewal_scheme_list.page_list';
    // 继续率计算方案-方案详情
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_DETAIL = 'prc_upstream_reconciliation.renewal_scheme_list.detail';
    // 继续率计算方案-新增方案
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_CREATE = 'prc_upstream_reconciliation.renewal_scheme_list.create`log`';
    // 继续率计算方案-编辑方案
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_UPDATE = 'prc_upstream_reconciliation.renewal_scheme_list.update`log`';
    // 继续率计算方案-复制方案
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_COPY = 'prc_upstream_reconciliation.renewal_scheme_list.copy`log`';
    // ========================================= 上游对账-继续率计算方案 =================================================== //

    // ========================================= 上游对账-账单明细 =================================================== //
    // 账单明细-左侧栏入口
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_LEFT_ENTRANCE = 'prc_upstream_reconciliation.settle_item_list.left_entrance';
    // 账单明细-失败清单-分页列表
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_FAIL_PAGE_LIST = 'prc_upstream_reconciliation.settle_item_list.fail_page_list';
    // 账单明细-失败清单-详情
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_FAIL_DETAIL = 'prc_upstream_reconciliation.settle_item_list.fail_detail';
    // 账单明细-失败清单-导出
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_FAIL_EXPORT = 'prc_upstream_reconciliation.settle_item_list.fail_export`log`';
    // 账单明细-待结算清单-对账进度
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_PROGRESS_PAGE_LIST_FOR_PENDING = 'prc_upstream_reconciliation.settle_item_list.pending.progress_page_list';
    // 账单明细-待结算清单-供应商汇总
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_STAT_PAGE_LIST_FOR_PENDING = 'prc_upstream_reconciliation.settle_item_list.pending.stat_page_list';
    // 账单明细-待结算清单-按供应商查看清单
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_PAGE_LIST_BY_SUPPLIER_FOR_PENDING = 'prc_upstream_reconciliation.settle_item_list.pending.page_list_by_supplier';
    // 账单明细-待结算清单-结算明细
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_ITEM_PAGE_LIST_BY_SUPPLIER_FOR_PENDING = 'prc_upstream_reconciliation.settle_item_list.pending.item_page_list_by_supplier';
    // 账单明细-待结算清单-按对账月份下载结算明细
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_EXPORT_ITEM_BY_MONTH_FOR_PENDING = 'prc_upstream_reconciliation.settle_item_list.pending.export_item_by_month`log`';
    // 账单明细-待结算清单-按供应商下载结算明细
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_EXPORT_ITEM_BY_SUPPLIER_FOR_PENDING = 'prc_upstream_reconciliation.settle_item_list.pending.export_item_by_supplier`log`';
    // 账单明细-待结算清单-明细详情下载
    const PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_ITEM_EXPORT_SUPPLIER_ITEM_FOR_PENDING = 'prc_upstream_reconciliation.settle_item_list.pending.export_supplier_item`log`';
    // ========================================= 上游对账-账单明细 =================================================== //

    // ========================================= 上游对账-继续率统计管理 =================================================== //
    // 继续率统计管理-左侧栏入口
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_LEFT_ENTRANCE = 'prc_upstream_reconciliation.renewal_stat_management.left_entrance';
    // 继续率统计管理-分页列表
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_PAGE_LIST = 'prc_upstream_reconciliation.renewal_stat_management.page_list';
    // 继续率统计管理-导出统计
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_EXPORT_STAT_LIST = 'prc_upstream_reconciliation.renewal_stat_management.export_stat_list`log`';
    // 继续率统计管理-重算
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_RECALCULATE = 'prc_upstream_reconciliation.renewal_stat_management.recalculate`log`';
    // 继续率统计管理-续期保单分页列表
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_RENEWAL_POLICY_PAGE_LIST = 'prc_upstream_reconciliation.renewal_stat_management.renewal_policy_page_list';
    // 继续率统计管理-导出续期保单
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_EXPORT_RENEWAL_POLICY_LIST = 'prc_upstream_reconciliation.renewal_stat_management.export_renewal_policy_list`log`';
    // 继续率统计管理-任务列表
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_TASK_PAGE_LIST = 'prc_upstream_reconciliation.renewal_stat_management.task_page_list';
    // 继续率统计管理-任务列表-查看原因
    const PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_TASK_FAIL_REASON = 'prc_upstream_reconciliation.renewal_stat_management.task_fail_reason';
    // ========================================= 上游对账-继续率统计管理 =================================================== //

    // ========================================= cfyf黑名单管理 START =================================================== //
    //新增黑名单
    const MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_STORE = 'management.cfyf.service.user_blacklist.store';
    //编辑黑名单
    const MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_UPDATE = 'management.cfyf.service.user_blacklist.update';
    //黑名单列表
    const MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_PAGE_LIST = 'management.cfyf.service.user_blacklist.get_page_list';
    //告警一键已读
    const MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_UPDATE_WARNING_RECORD_READ = 'management.cfyf.service.user_blacklist.update_warning_record_read';
    //导入黑名单文件
    const MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_IMPORT_FILE_BLACK_LIST = 'management.cfyf.service.user_blacklist.import_file_black_list';
    // 告警列表
    const MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_WARNING_RECORD_PAGE_LIST = 'management.cfyf.service.user_blacklist.get_warning_record_page_list';
    // 全局告警弹窗信息
    const MANAGEMENT_CFYF_SERVICE_USER_BLACKLIST_GET_WARNING_POPUP_LIST = 'management.cfyf.service.user_blacklist.get_warning_popup_list';

    // ========================================= cfyf黑名单管理 END =================================================== //

    // ========================================= cfyf批量邮件发送管理 START =================================================== //
    //临时邮件详情
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_DETAIL = 'management.cfyf.service.company_mail.temp_detail';
    //获取临时邮件列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_LIST = 'management.cfyf.service.company_mail.temp-list';
    //公共-临时邮件保存表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_COMMON_CREATE = 'management.cfyf.service.company_mail.temp-common-create';
    //附件区分-临时邮件保存表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_ATTACHED_CREATE = 'management.cfyf.service.company_mail.temp-attached-create';
    //内附件区分-临时邮件保存表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_TEMP_CONTENT_AND_ATTACHED_CREATE = 'management.cfyf.service.company_mail.temp-content-and-attached-create';
    //草稿箱详情
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_DETAIL = 'management.cfyf.service.company_mail.draft_detail';
    //保存草稿箱
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_CREATE = 'management.cfyf.service.company_mail.draft-create';
    //草稿箱分页列表
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_PAGE_LIST = 'management.cfyf.service.company_mail.draft-page-list';
    //草稿箱删除
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_DRAFT_DEL = 'management.cfyf.service.company_mail.draft_del';
    //一键发送
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_ALL = 'management.cfyf.service.company_mail.mail_send_all';
    //邮件列表_已发送
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_ALREADY_PAGE_LIST = 'management.cfyf.service.company_mail.mail_send_already_page_list';
    //邮件列表_待发送
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_PENDING_PAGE_LIST = 'management.cfyf.service.company_mail.mail_send_pending_page_list';
    //邮件详情
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_SEND_DETAIL = 'management.cfyf.service.company_mail.mail_send_detail';
    //取消邮件
    const MANAGEMENT_CFYF_SERVICE_MAIL_SEND_DEL = 'management.cfyf.service.mail-send-del';
    //操作日志列表
    const MANAGEMENT_CFYF_SERVICE_OPERATION_LOG_PAGE_LIST = 'management.cfyf.service.operation-log-page-list';
    //邮件重新发送
    const MANAGEMENT_CFYF_SERVICE_COMPANY_MAIL_MAIL_RESEND = 'management.cfyf.service.company_mail.mail_resend';

    // ========================================= cfyf批量邮件发送管理 END =================================================== //

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            /** 下游公司 **/
            self::MANAGEMENT_CFYF_COMPANY_CREATE                                   => '新增下游公司',
            self::MANAGEMENT_CFYF_COMPANY_GET_LIST                                 => '下游公司列表（不分页）',
            self::MANAGEMENT_CFYF_COMPANY_SUPER_ADMIN_GET_PAGE_LIST                => '全部公司（超管列表）',
            self::MANAGEMENT_CFYF_COMPANY_DETAIL                                   => '下游公司基本资料',
            self::MANAGEMENT_CFYF_COMPANY_UPDATE                                   => '编辑下游公司基本资料',

            /** 下游公司权限路由 **/
            self::MANAGEMENT_CFYF_COMPANY_PERMISSION_DETAIL                        => '下游公司权限详情',
            self::MANAGEMENT_CFYF_COMPANY_PERMISSION_UPDATE                        => '更新下游公司权限',
            self::MANAGEMENT_CFYF_COMPANY_PERMISSION_TREE                          => '下游公司权限树',

            /** 下游公司成员路由 **/
            self::MANAGEMENT_CFYF_EMPLOYEE_ROLE_LIST                               => '下游公司成员角色列表',
            self::MANAGEMENT_CFYF_EMPLOYEE_GET_LIST                                => '获取下游公司成员列表',
            self::MANAGEMENT_CFYF_EMPLOYEE_RESET_PASSWORD                          => '重置下游公司密码',
            self::MANAGEMENT_CFYF_EMPLOYEE_DETAIL                                  => '获取下游公司超管信息',
            self::MANAGEMENT_CFYF_EMPLOYEE_UPDATE                                  => '更新下游公司超管详情',

            /** 保险公司路由 **/
            self::MANAGEMENT_COMPANY_CREATE                                        => '新增保险公司',
            self::MANAGEMENT_COMPANY_DETAIL                                        => '保险公司详情',
            self::MANAGEMENT_COMPANY_UPDATE                                        => '更新保险公司详情',
            self::MANAGEMENT_COMPANY_DELETE                                        => '删除保险公司',
            self::MANAGEMENT_COMPANY_GET_PAGE_LIST                                 => '保险公司列表（分页）',
            self::MANAGEMENT_COMPANY_GET_LIST                                      => '保险公司列表（不分页）',

            /** 经纪公司 **/
            self::MANAGEMENT_COMPANY_CREATE_BROKER                                 => '新增经纪公司',
            self::MANAGEMENT_COMPANY_DETAIL_BROKER                                 => '经纪公司详情',
            self::MANAGEMENT_COMPANY_UPDATE_BROKER                                 => '更新经纪公司详情',
            self::MANAGEMENT_COMPANY_DELETE_BROKER                                 => '删除经纪公司',
            self::MANAGEMENT_COMPANY_GET_BROKER_PAGE_LIST                          => '经纪公司列表（分页）',
            self::MANAGEMENT_COMPANY_GET_BROKER_LIST                               => '经纪公司列表（不分页）',

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

            /** CRM员工执业登记路由 **/
            self::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CREATE                 => '新增执业登记',
            self::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_GET_PAGE_LIST          => '员工执业登记列表',
            self::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_CLOSE                  => '注销执业登记',
            self::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_EXPORT                 => '导出执业登记列表',
            self::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE                 => '编辑执业登记',
            self::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPLOAD                 => '上传执业登记',
            self::MANAGEMENT_COMPANY_EMPLOYEE_QUALIFICATION_UPDATE_UPLOAD_REMARK   => '编辑上传的执业登记备注',

            /** 部门员工账户路由 **/
            self::MANAGEMENT_COMPANY_DEPARTMENT_USER_GET_LIST                      => '部门中的员工账户列表',
//            self::MANAGEMENT_COMPANY_DEPARTMENT_USER_SET_DEPARTMENT_ROLE          => '设置员工账户部门角色',

            /** 员工子账户路由 **/
            self::MANAGEMENT_COMPANY_SUB_ACCOUNT_ADD                               => '新增员工子账户',
            self::MANAGEMENT_COMPANY_SUB_ACCOUNT_SYNC                              => '员工转岗',
            self::MANAGEMENT_COMPANY_SUB_ACCOUNT_DETAIL                            => '员工子账户详情',

            /** 培训路由 **/
            self::MANAGEMENT_COMPANY_TRAINING_GET_PAGE_LIST                        => '培训列表（分页）',
            self::MANAGEMENT_COMPANY_TRAINING_DETAIL                               => '培训详情',
            self::MANAGEMENT_COMPANY_TRAINING_DISCIPLINARY_GET_PAGE_LIST           => '奖惩记录',
            self::MANAGEMENT_COMPANY_TRAINING_COURSE_GET_PAGE_LIST                 => '课程列表',
            self::MANAGEMENT_COMPANY_TRAINING_COURSE_CATEGORY_GET_PAGE_LIST        => '课程分类列表',

            /** 客户路由 **/
            self::MANAGEMENT_EXPERT_CUSTOMER_PAGE_LIST                             => '客户列表（分页）',
            self::MANAGEMENT_EXPERT_CUSTOMER_DETAIL                                => '客户详情',
            self::MANAGEMENT_EXPERT_CUSTOMER_DISTRIBUTION_TRAJECTORY               => '分配轨迹',
            self::MANAGEMENT_EXPERT_CUSTOMER_COMMUNICATE_LOG_LIST                  => '跟进记录列表',
            self::MANAGEMENT_EXPERT_CUSTOMER_FOLLOW_STATUS_INFO                    => '获取跟进状态',
            self::MANAGEMENT_EXPERT_CUSTOMER_USER_IM_MESSAGES                      => '接待互动',
            self::MANAGEMENT_EXPERT_CUSTOMER_POLICY_LIST                           => '投保记录',
            self::MANAGEMENT_EXPERT_CUSTOMER_POLICY_DETAIL                         => '投保记录详情',
            self::MANAGEMENT_EXPERT_CUSTOMER_POLICY_ALL_PREMIUM                    => '投保记录总保费',

            /** 订单路由 **/
            self::MANAGEMENT_ORDER_GET_PAGE_LIST                                   => '订单列表（分页）',
            self::MANAGEMENT_EXPORT_PR_ORDER_PAGE_LIST                             => '导出订单列表',
            self::MANAGEMENT_PR_ORDER_PAGE_LIST                                    => '订单列表',
            self::MANAGEMENT_PR_ORDER_DETAIL                                       => '订单详情',
            self::MANAGEMENT_PR_ORDER_BASE_INFO                                    => '订单基本信息',
            self::MANAGEMENT_PR_ORDER_POLICY_SALES                                 => '订单销售信息',
            self::MANAGEMENT_PR_ORDER_POLICY_BASE_INFO                             => '保单基本信息',
            self::MANAGEMENT_PR_ORDER_POLICY_FILE_LINK                             => '获取电子保单链接',
            self::MANAGEMENT_PR_ORDER_POLICY_PERSON_INFO                           => '保单人员信息',
            self::MANAGEMENT_PR_ORDER_COMPLIANCE_INFO                              => '订单详情-合规信息',
            self::MANAGEMENT_PR_ORDER_POLICY_PRODUCT_INFO                          => '订单详情-保单产品信息',
            self::MANAGEMENT_PR_ORDER_POLICY_PAYMENT_INFO                          => '订单详情-支付信息',
            self::MANAGEMENT_PR_ORDER_POLICY_RENEWAL_INFO                          => '订单详情-续期账号信息',
            self::MANAGEMENT_PR_ORDER_POLICY_VISIT_INFO                            => '订单详情-回访信息',
            self::MANAGEMENT_PR_ORDER_POLICY_RECEIPT_INFO                          => '订单详情-回执信息',
            self::MANAGEMENT_PR_ORDER_CUSTOMER                                     => '订单详情-客户信息',
            self::MANAGEMENT_PR_ORDER_POLICY_SURRENDER_LOG                         => '保单退保记录',
            self::MANAGEMENT_PR_ORDER_POLICY_RENEWAL_STAGE                         => '保单续保续期记录',
            self::MANAGEMENT_PR_ORDER_POLICY_PAYMENT_AND_RENEWAL_INFO              => '保单支付和续保银行卡信息',
            self::MANAGEMENT_POLICY_BASE_INFO_DOWNLOAD_POLICY_FILE                 => '下载电子保单',

            /** 上传保单 */
            self::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL                         => '上传保单excel',
            self::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_LIST         => '获取保单上传记录',
            self::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_GET_UPLOAD_ERROR_LOG    => '获取保单上传错误原因记录',
            self::MANAGEMENT_POLICY_UPLOAD_POLICY_BY_EXCEL_EXPORT_UPLOAD_ERROR_LOG => '导出保单上传错误原因',
            self::MANAGEMENT_POLICY_UPLOAD_POLICY_DOWNLOAD_FILE                    => '下载文件',


            /** 保单纠正 **/
            self::MANAGEMENT_PR_POLICY_MODIFY_POLICY_CATEGORY_LIST                 => '申请保单修正',
            self::MANAGEMENT_PR_POLICY_MODIFY_POLICY_FILE_LINK                     => '获取电子保单链接',
            self::MANAGEMENT_PR_POLICY_RECOVERY_POLICY_CATEGORY_LIST               => '申请数据还原',
            self::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST                  => '修正审批列表',
            self::MANAGEMENT_MODIFY_POLICY_VERIFY_VERIFY_INFO                      => '修正审批详情',
            self::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO                       => '查看申请详情',
            self::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_PAGE_LIST_PERSONAL         => '个人修正审批列表',
            self::MANAGEMENT_MODIFY_POLICY_VERIFY_APPLY_INFO_PERSONAL              => '查看个人申请详情',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_PREMIUM_AND_COVERAGE           => '修正事项-保额保费',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_STATUS                  => '修正事项-保单状态',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_RENEWAL_INFO            => '修正事项-保单状态',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_POLICY_EXEMPT                  => '修正事项-保单豁免',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_PROPOSAL_PLAN                  => '修正事项-保障计划',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_VISIT_INFO                     => '修正事项-回访信息',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_RECEIPT_INFO                   => '修正事项-回执信息',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_DOUBLE_RECORD                  => '修正事项-双录信息',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_INSURANT_INFO                  => '修正事项-被保人信息',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_APPLICANT_INFO                 => '修正事项-投保人信息',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_INSURANCE_TAG                  => '修正事项-保单标签',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_NEW_INSURANCE                  => '修正事项-补充险种',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_SURRENDER_INSURANCE            => '修正事项-险种退保',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_EDIT_INSURANCE                 => '修正事项-修改险种',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_TURN_TO_RENEWAL                => '修正事项-续保信息',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_RENEWAL_TERM                   => '修正事项-续期信息',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_UPLOAD_POLICY_FILE             => '修正事项-电子保单',
            self::MANAGEMENT_MODIFY_POLICY_CATEGORY_ANNUITY_CLAIM                  => '修正事项-年金领取',

            /** 保单路由 **/
            self::MANAGEMENT_POLICY_PAGE_LIST                                      => '保单列表（分页）',
            self::MANAGEMENT_POLICY_DETAIL                                         => '保单详情',
            self::MANAGEMENT_POLICY_DETAIL_DOWNLOAD_POLICY_FILE                    => '下载电子保单',
            self::MANAGEMENT_POLICY_GET_POLICY_STATUS                              => '保单状态',
            self::MANAGEMENT_POLICY_GET_VISIT_STATUS                               => '回访状态',
            self::MANAGEMENT_POLICY_RENEWAL_STAGE_PAGE_LIST                        => '续期续保清单列表',
            self::MANAGEMENT_POLICY_SUPPLIER_STATISTICS                            => '保险公司排行榜',
            self::MANAGEMENT_POLICY_DEPARTMENT_STATISTICS                          => '部门销售排行榜',
            self::MANAGEMENT_POLICY_MONTH_STATISTICS                               => '月度排行榜',
            self::MANAGEMENT_POLICY_ALL_MONTHS                                     => '所有出单月份',
            self::MANAGEMENT_POLICY_DIFF_DAYS_CONFIG                               => '投保周期筛选项',
            self::MANAGEMENT_POLICY_SUPPLIER_STATISTICS_EXPORT                     => '保险公司排行榜导出',
            self::MANAGEMENT_POLICY_DEPARTMENT_STATISTICS_EXPORT                   => '部门销售排行榜导出',
            self::MANAGEMENT_POLICY_BASE_REGION_LIST                               => '地区筛选列表',
            self::MANAGEMENT_POLICY_EXPORT                                         => '保单导出',

            /** 产品路由 */
            self::MANAGEMENT_PRODUCT_CREATE                                        => '新增保险产品',
            self::MANAGEMENT_PRODUCT_DETAIL                                        => '保险产品详情',
            self::MANAGEMENT_PRODUCT_UPDATE                                        => '更新保险产品详情',
            self::MANAGEMENT_PRODUCT_DELETE                                        => '删除保险产品',
            self::MANAGEMENT_PRODUCT_GET_PAGE_LIST                                 => '保险产品列表（分页）',
            self::MANAGEMENT_PRODUCT_GET_LIST                                      => '保险产品列表',
            self::MANAGEMENT_PRODUCT_BATCH_SAVE_GROUP                              => '批量保存产品分组',

            /** 新增保险产品分组 **/
            self::MANAGEMENT_PRODUCT_GROUP_CREATE                                  => '新增产品分组',
            self::MANAGEMENT_PRODUCT_GROUP_GET_PAGE_LIST                           => '分组列表（分页）',
            self::MANAGEMENT_PRODUCT_GROUP_GET_LIST                                => '分组列表',

            /** 保监分类 */
            self::MANAGEMENT_PRODUCT_GET_INSURANCE_CATEGORY                        => '保监分类列表',

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
            self::MANAGEMENT_SYS_USER_MANAGE_SPECIFIC_COMPANY                      => '设置内部管理员细分管理外部公司',

            /** 系统角色 **/
            self::MANAGEMENT_RBAC_SYS_ROLE_STORE                                   => '新增角色',
            self::MANAGEMENT_RBAC_SYS_ROLE_UPDATE                                  => '更新角色详情',
            self::MANAGEMENT_RBAC_SYS_ROLE_DELETE                                  => '删除角色',
            self::MANAGEMENT_RBAC_SYS_ROLE_DETAIL                                  => '角色详情',
            self::MANAGEMENT_RBAC_SYS_ROLE_PAGE_LIST                               => '角色列表',
            self::MANAGEMENT_RBAC_SYS_ROLE_SELECT_LIST                             => '角色下拉列表',

            /** 供应商路由 **/
            self::MANAGEMENT_SUPPLIER_CREATE                                       => '新增供应商',
            self::MANAGEMENT_SUPPLIER_DETAIL                                       => '供应商详情',
            self::MANAGEMENT_SUPPLIER_UPDATE                                       => '更新供应商详情',
            self::MANAGEMENT_SUPPLIER_DELETE                                       => '删除供应商',
            self::MANAGEMENT_SUPPLIER_GET_PAGE_LIST                                => '供应商列表（分页）',
            self::MANAGEMENT_SUPPLIER_GET_LIST                                     => '供应商列表',
            self::MANAGEMENT_SUPPLIER_GET_NAME_LIST                                => '供应商名称列表',
            self::MANAGEMENT_SUPPLIER_GET_SUPPLIERS                                => '通过公司类型获取协议有效期内供应商列表',
            self::MANAGEMENT_SUPPLIER_GET_HEADQUARTERS                             => '获取本部公司信息',
            self::MANAGEMENT_SUPPLIER_AGREEMENT_CREATE                             => '新增供应商协议',
            self::MANAGEMENT_SUPPLIER_AGREEMENT_DETAIL                             => '供应商协议详情',
            self::MANAGEMENT_SUPPLIER_AGREEMENT_UPDATE                             => '更新供应商协议',
            self::MANAGEMENT_SUPPLIER_AGREEMENT_GET_LIST                           => '供应商协议列表',

            /** 我的客户路由 **/
            self::MANAGEMENT_IM_CUSTOMER_WX_ALIAS                                  => '全部客户互动列表--公众号',
            self::MANAGEMENT_IM_CUSTOMER_WX_ALIAS_OPTIONS                          => '获取微信公众号列表',
            self::MANAGEMENT_PERSONAL_IM_CUSTOMER_GET_MESSAGES                     => '获取聊天记录',

            /** 数据报表路由 **/
            self::MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_CREATE               => '新增监管报表',
            self::MANAGEMENT_DATA_REPORT_REGULATORY_STATEMENT_PAGE_LIST            => '监管报表列表',
            self::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_PAGE_LIST              => '业务报表分页列表',
            self::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_GENERATE_REPORT        => '生成业务报表',
            self::MANAGEMENT_DATA_REPORT_BUSINESS_STATEMENT_DOWNLOAD_REPORT        => '下载业务报表',

            /** 财务报表 **/
            self::MANAGEMENT_FINANCE_FILE_UPLOAD                                   => '上传财务报表',
            self::MANAGEMENT_FINANCE_FILE_PAGE_LIST                                => '财务报表上传记录',
            self::MANAGEMENT_FINANCE_FILE_ERR_PAGE_LIST                            => '财务报表解析错误记录',
            self::MANAGEMENT_FINANCE_FILE_ERR_EXPORT                               => '财务报表解析错误记录',
            self::MANAGEMENT_FINANCE_UNRECONCILED_PAGE_LIST                        => '获取未对账清单',
            self::MANAGEMENT_FINANCE_UNRECONCILED_EXPORT                           => '导出未对账清单',
            self::MANAGEMENT_FINANCE_RECONCILED_EXPORT                             => '导出结算清单',
            self::MANAGEMENT_FINANCE_UNRECONCILED_DETAIL                           => '获取未对账清单详情',
            self::MANAGEMENT_FINANCE_RECONCILED_PAGE_LIST                          => '获取结算清单',
            self::MANAGEMENT_FINANCE_RECONCILED_DETAIL                             => '获取结算清单详情',
            self::MANAGEMENT_FINANCE_RECONCILED_FOR_POLICY_PAGE_LIST               => '获取保单详情的结算清单表格',

            /** 结算批次 **/
            self::MANAGEMENT_FINANCE_BATCH_CREATE                                  => '新增结算批次',
            self::MANAGEMENT_FINANCE_RECONCILED_FOR_BATCH_PAGE_LIST                => '获取结算清单 用于新建批次',
            self::MANAGEMENT_FINANCE_BATCH_DELETE                                  => '解散结算批次',
            self::MANAGEMENT_FINANCE_BATCH_DETAIL                                  => '结算批次详情',
            self::MANAGEMENT_FINANCE_BATCH_LIST                                    => '结算批次列表 筛选项',
            self::MANAGEMENT_FINANCE_BATCH_PAGE_LIST                               => '结算批次列表',
            self::MANAGEMENT_FINANCE_BATCH_RECORD_INVOICE                          => '录入发票信息',
            self::MANAGEMENT_FINANCE_BATCH_RECORD_SETTLE                           => '录入结算信息',
            self::MANAGEMENT_FINANCE_BATCH_ADD_DATA                                => '移入结算批次',
            self::MANAGEMENT_FINANCE_BATCH_DEL_DATA                                => '移出结算批次',

            /** 薪酬 **/
            self::MANAGEMENT_FINANCE_CRM_SALARY_PAGE_LIST                          => '薪酬列表',
            self::MANAGEMENT_FINANCE_CRM_SALARY_UPLOAD_FILE                        => '上传薪酬文件',
            self::MANAGEMENT_FINANCE_CRM_SALARY_FILE_PAGE_LIST                     => '薪酬文件上传记录列表',
            self::MANAGEMENT_FINANCE_CRM_SALARY_REMARK_UPLOADED_FILE               => '备注薪酬文件上传记录',

            /** 系统管理路由 **/
            self::MANAGEMENT_SYSTEM_OPERATION_LOG_GET_PAGE_LIST                    => '核心系统操作日志列表',
            self::MANAGEMENT_SYSTEM_CRM_OPERATION_LOG_GET_PAGE_LIST                => '核心crm系统操作日志列表',
            self::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_GET_PAGE_LIST                  => '个人报表中心记录列表',
            self::MANAGEMENT_SYSTEM_DOWNLOAD_CENTER_DOWNLOAD                       => '个人报表中心操作下载',
            self::MANAGEMENT_SYSTEM_ACTION_CRM_SYSTEM                              => '管理CRM',

            /** 非现场保监报表 **/
            self::MANAGEMENT_DATA_REPORT_IRS_TASK_PAGE_LIST                        => '保监报表任务分页列表',
            self::MANAGEMENT_DATA_REPORT_IRS_TASK_CREATE                           => '新增保监报表任务',
            self::MANAGEMENT_DATA_REPORT_IRS_TASK_UPDATE                           => '编辑保监报表任务',
            self::MANAGEMENT_DATA_REPORT_IRS_TASK_CONFIRM                          => '确认保监报表任务',
            self::MANAGEMENT_DATA_REPORT_IRS_TASK_DOWNLOAD_ZIP                     => '批量下载保监报表',
            self::MANAGEMENT_DATA_REPORT_IRS_FILE_PAGE_LIST                        => '保监报表文件分页列表',
            self::MANAGEMENT_DATA_REPORT_IRS_FILE_UPLOAD                           => '上传保监报表文件',
            self::MANAGEMENT_DATA_REPORT_IRS_FILE_DOWNLOAD                         => '下载保监报表文件',
            self::MANAGEMENT_DATA_REPORT_IRS_FILE_GENERATE                         => '生成保监报表文件',
            self::MANAGEMENT_DATA_REPORT_IRS_FILE_CONFIRM                          => '确认保监报表文件',

            /** 财产险保单 **/
            self::MANAGEMENT_PROPERTY_CAR_UPLOAD                                   => '上传车险保单',
            self::MANAGEMENT_PROPERTY_CAR_CREATE                                   => '新增车险保单',
            self::MANAGEMENT_PROPERTY_CAR_UPDATE                                   => '编辑车险保单',
            self::MANAGEMENT_PROPERTY_CAR_STATUS                                   => '编辑车险保单状态',
            self::MANAGEMENT_PROPERTY_CAR_EXPORT                                   => '导出车险保单',
            self::MANAGEMENT_PROPERTY_SHIP_UPLOAD                                  => '上传船舶险保单',
            self::MANAGEMENT_PROPERTY_SHIP_CREATE                                  => '新增船舶险保单',
            self::MANAGEMENT_PROPERTY_SHIP_UPDATE                                  => '编辑船舶险保单',
            self::MANAGEMENT_PROPERTY_SHIP_STATUS                                  => '编辑船舶险保单状态',
            self::MANAGEMENT_PROPERTY_SHIP_EXPORT                                  => '导出船舶险保单',

            /** 艾客 */
            self::MANAGEMENT_AIKE_BIND_CRM_CUSTOMER                                => '关联CRM客户',
            self::MANAGEMENT_AIKE_BIND_CRM_SALES                                   => '关联CRM销售',

            /** 产品接入 */
            self::MANAGEMENT_PR_SUPPLIER_UPDATE                                    => '产品接入供应商编辑',
            self::MANAGEMENT_PR_SUPPLIER_UPDATE_CLAIM_EXPLAIN                      => '理赔服务编辑',
            self::MANAGEMENT_PR_HEADQUARTER_COMPANY_UPDATE                         => '产品接入本部公司编辑',

            self::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE_CATEGORY                => '供应商-协议-创建分类',
            self::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_CATEGORY                => '供应商-协议-编辑分类',
            self::MANAGEMENT_PR_SUPPLIER_AGREEMENT_CREATE                         => '供应商-协议-上传协议',
            self::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS    => '供应商-协议-更新协议并应用分支产品',
            self::MANAGEMENT_PR_SUPPLIER_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION => '供应商-协议-更新协议绑定的分支产品关系',

            self::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE_CATEGORY                => '本部公司-协议-创建分类',
            self::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_CATEGORY                => '本部公司-协议-编辑分类',
            self::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_CREATE                         => '本部公司-协议-上传协议',
            self::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_WITH_BRANCH_PRODUCTS    => '本部公司-协议-更新协议并应用分支产品',
            self::MANAGEMENT_PR_HEADQUARTER_COMPANY_AGREEMENT_UPDATE_BRANCH_PRODUCT_RELATION => '本部公司-协议-更新协议绑定的分支产品关系',

            self::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_GET_LIST => '标签设置-保险分类-列表',
            self::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_CREATE   => '标签设置-保险分类-创建',
            self::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_UPDATE   => '标签设置-保险分类-编辑',
            self::MANAGEMENT_PR_PRODUCT_COMMON_CATEGORY_DELETE   => '标签设置-保险分类-删除',

            self::MANAGEMENT_PR_WS_CATEGORY_GET_PAGE_LIST => '标签设置-官网分类-分页列表',
            self::MANAGEMENT_PR_WS_CATEGORY_CREATE        => '标签设置-官网分类-创建',
            self::MANAGEMENT_PR_WS_CATEGORY_UPDATE        => '标签设置-官网分类-编辑',
            self::MANAGEMENT_PR_WS_CATEGORY_IS_ENABLE     => '标签设置-官网分类-是否启用分类',

            self::MANAGEMENT_PR_PRODUCT_DATA_LINKAGE_CREATE_CALCULATE_RULE                             => '产品-数据联动-添加计算规则',
            self::MANAGEMENT_PR_PRODUCT_INSURANCE_GROUP_UPDATE_INSURE_CONDITION_ATTRIBUTE_VALUE_STATUS => '产品-险种分组-条件设置-更新属性值状态',

            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_BASE_INFO                                => '产品计划-基本设置-编辑',
            self::MANAGEMENT_PR_PRODUCT_PLAN_GET_BIND_INSURANCE_LIST                         => '产品计划-获取已关联险种的列表',
            self::MANAGEMENT_PR_PRODUCT_PLAN_BIND_INSURANCE                                  => '产品计划-绑定险种',
            self::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_GET_CONDITION_GENE_LIST              => '试算设置-获取试算页条件因子列表',
            self::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE                          => '试算设置-更新试算因子默认值',
            self::MANAGEMENT_PR_PRODUCT_PLAN_TRIAL_PAGE_UPDATE_GENE_VALUES                   => '试算设置-更新试算因子选项值',
            self::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_SCHEME               => '投保规则-新增规则方案',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME               => '投保规则-编辑规则方案',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_SCHEME_ENABLE_STATUS => '投保规则-启用/禁用规则方案',
            self::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_TRIAL_GENE_RESTRICT_GROUP                => '投保规则-新增规则分组',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP_ENABLE_STATUS  => '投保规则-启用/禁用规则分组',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE_RESTRICT_GROUP                => '投保规则-编辑规则分组',
            self::MANAGEMENT_PR_PRODUCT_PLAN_SYNC_TRIAL_GENE                                 => '数据同步-同步试算因子',
            self::MANAGEMENT_PR_PRODUCT_PLAN_INCREMENT_TRIAL_GENE                            => '数据同步-增量同步试算因子',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_TRIAL_GENE                               => '数据同步-单个因子数据同步',
            self::MANAGEMENT_PR_PRODUCT_TRIAL_CREATE_LAYOUT                                  => '试算页面布局-新增布局',
            self::MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_LAYOUT                                  => '试算页面布局-编辑布局',
            self::MANAGEMENT_PR_PRODUCT_TRIAL_SEARCH_LAYOUT_GENE_LIST                        => '试算页面布局-搜索字段列表',
            self::MANAGEMENT_PR_PRODUCT_TRIAL_BIND_LAYOUT_GENES                              => '试算页面布局-布局新增字段',
            self::MANAGEMENT_PR_PRODUCT_TRIAL_UPDATE_GENE_BASE_INFO                          => '试算页面布局-更新因子基本信息',
            self::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION                       => '健康告知-新增健告',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_BASE_INFO             => '健康告知-编辑健告基础信息',
            self::MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_BASE_INFO             => '健康告知-删除健告',
            self::MANAGEMENT_PR_PRODUCT_PLAN_CREATE_HEALTH_INFORMATION_QUESTION              => '健康告知-新增健告问题',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_QUESTION              => '健康告知-编辑健告问题',
            self::MANAGEMENT_PR_PRODUCT_PLAN_DELETE_HEALTH_INFORMATION_QUESTION              => '健康告知-删除健告问题',
            self::MANAGEMENT_PR_PRODUCT_PLAN_UPDATE_HEALTH_INFORMATION_CONCLUSION            => '健康告知-编辑健告结论',

            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING                         => '产品-展示设置',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_LIST         => '产品展示设置-banner-列表',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_BANNER           => '产品展示设置-banner-上传',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_BANNER_INFO         => '产品展示设置-banner-详情',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_BANNER           => '产品计划-展示设置-banner-编辑',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_FEATURE             => '产品计划-展示设置-产品详情',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_GET_INSTRUCTION_LIST    => '产品计划-展示设置-投保须知-列表',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_INSTRUCTION      => '产品计划-展示设置-投保须知-新增',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_INSTRUCTION      => '产品计划-展示设置-投保须知-编辑',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FEATURE          => '产品计划-展示设置-产品详情-上传',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_FAQ_LIST                => '产品展示设置-问答列表',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_CREATE_FAQ              => '产品展示设置-新增问答',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_UPDATE_FAQ              => '产品展示设置-编辑问答',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SETTING_DELETE_FAQ              => '产品展示设置-删除问答',

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

            /** crm专家团队 **/
            self::MANAGEMENT_CRM_EXPERT_TEAM_STORE                              => '新建团队',
            self::MANAGEMENT_CRM_EXPERT_TEAM_UPDATE                             => '编辑团队',
            self::MANAGEMENT_CRM_EXPERT_TEAM_PAGE_LIST                          => '团队管理列表',
            self::MANAGEMENT_CRM_EXPERT_TEAM_DIRECT_MEMBER_LIST                 => '成员管理列表',
            self::MANAGEMENT_CRM_EXPERT_TEAM_STORE_MEMBER                       => '新增人员',
            self::MANAGEMENT_CRM_EXPERT_TEAM_REMOVE_MEMBER                      => '移除人员',
            self::MANAGEMENT_CRM_EXPERT_TEAM_LOG_PAGE_LIST                      => '团队记录',
            self::MANAGEMENT_CRM_EXPERT_TEAM_DETAIL                             => '团队详情',
            self::MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE_LEADER                     => '设为团队长',
            self::MANAGEMENT_CRM_EXPERT_TEAM_UPGRADE                            => '团队升级',
            self::MANAGEMENT_CRM_EXPERT_TEAM_DOWNGRADE                          => '团队降级',
            self::MANAGEMENT_CRM_EXPERT_TEAM_DISSOLUTION                        => '团队解散',
            self::MANAGEMENT_CRM_EXPERT_MEMBER_PAGE_LIST                        => '销售成员列表',
            self::MANAGEMENT_CRM_EXPERT_MEMBER_DETAIL_LOG                       => '专家成员记录',

            /** pr对账 **/
            self::MANAGEMENT_PR_COMMISSION_SUMMARY_PAGE_LIST                    => '收入明细',
            self::MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_PAGE_LIST               => '收入明细-明细',
            self::MANAGEMENT_PR_COMMISSION_SUMMARY_ITEM_EXPORT                  => '对账清单下载',
            self::MANAGEMENT_PR_COMMISSION_PRODUCT_SCHEME_PAGE_LIST             => '结算方案-首续期方案',
            self::MANAGEMENT_PR_COMMISSION_REWARD_SCHEME_PAGE_LIST              => '结算方案-奖励方案',

            /**核保较高管理**/
            self::MANAGEMENT_PR_UNDERWRITING_PRODUCT_NAME_LIST                  => '核保管理',
            self::MANAGEMENT_PR_UNDERWRITING_FILE_LOG_LIST                      => '核保管理上传列表',
            self::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_NAME_LIST                 => '健告管理',
            self::MANAGEMENT_PR_HEALTH_NOTICE_FILE_LOG_LIST                     => '健告管理上传列表',
            self::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_LIST              => '投保规则列表',
            self::MANAGEMENT_PR_HEALTH_NOTICE_INSURANCE_RULE_LIST               => '核保规则列表',
            self::MANAGEMENT_PR_HEALTH_NOTICE_DELETE_UNDERWRITE_RULE            => '删除投保规则',
            self::MANAGEMENT_PR_HEALTH_NOTICE_DELETE_INSURANCE_RULE             => '删除核保规则',
            self::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE       => '核保投保规则文件上传',
            self::MANAGEMENT_PR_HEALTH_NOTICE_UNDERWRITE_RULE_UPLOAD_FILE_LOG   => '投保核保规则上传记录',
            self::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_LIST             => '客服保全列表',
            self::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE      => '客服保全文件上传',
            self::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_UPLOAD_FILE_LOG  => '客服保全文件上传记录',
            self::MANAGEMENT_PR_HEALTH_NOTICE_CUSTOMER_SERVICE_DELETE           => '客服保全删除',

            self::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_LIST            => '理赔规则列表',
            self::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE     => '理赔规则文件上传',
            self::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_UPLOAD_FILE_LOG => '理赔规则文件上传记录',
            self::MANAGEMENT_PR_HEALTH_NOTICE_CLAIM_SETTLEMENT_DELETE          => '理赔规则删除',

            self::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_LIST            => '理赔规则列表',
            self::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE     => '理赔规则文件上传',
            self::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_UPLOAD_FILE_LOG => '理赔规则文件上传记录',
            self::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_SALES_GUIDANCE_DELETE          => '理赔规则删除',

            self::MANAGEMENT_PR_HEALTH_NOTICE_PRODUCT_CONNECTION_MANUAL                              => '产品关联/取消关联',


            // 风控管理-报表中心
            self::MANAGEMENT_REPORT_CENTER_GET_PAGE_LIST                                             => '报表中心',
            self::MANAGEMENT_REPORT_CENTER_DOWNLOAD                                                  => '报表中心-下载',
            self::MANAGEMENT_REPORT_CENTER_DOWNLOAD_LOG_GET_PAGE_LIST                                => '下载记录',

            /** cfyf广告管理 **/
            //创富云服-创建广告
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_STORE                                       => '创富云服-创建广告',
            //创富云服-编辑广告
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UPDATE                                      => '创富云服-编辑广告',
            //创富云服-管理广告列表
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_MANAGE_LIST                                 => '创富云服-管理广告列表',
            //创富云服-广告详情
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_DETAIL                                      => '创富云服-广告详情',
            //创富云服-删除广告
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_DELETE                                      => '创富云服-删除广告',
            //创富云服-上下架广告
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_BANNER_UP_OR_DOWN                                  => '创富云服-上下架广告',

            /** cfyf公告管理 **/
            //创富云服-创建公告
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_CREATE                                => '创富云服-创建公告',
            //创富云服-编辑公告
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_EDIT                                  => '创富云服-编辑公告',
            //创富云服-管理公告列表
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_PAGE_LIST                             => '创富云服-管理公告列表',
            //创富云服-删除公告
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_ANNOUNCEMENT_DELETE                                => '创富云服-删除公告',

            /** cfyf公司渠道管理 **/
            //创富云服-创建公司渠道
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_CREATE                                     => '创富云服-创建公司渠道',
            //创富云服-编辑公司渠道
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_EDIT                                       => '创富云服-编辑公司渠道',
            //创富云服-编辑公司渠道
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_DETAIL                                     => '创富云服-公司渠道详情',
            //创富云服-公司渠道列表
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_CHANNEL_PAGE_LIST                                  => '创富云服-公司渠道列表',

            /** cfyf公司管理 **/
            //创富云服-新增公司
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_CREATE                                             => '创富云服-新增公司',
            //创富云服-更新公司
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_UPDATE                                             => '创富云服-更新公司',
            //创富云服-公司列表
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_PAGE_LIST                                          => '创富云服-公司列表',
            //创富云服-（签约有效期内的）公司列表
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_EFFECTIVE_LIST                                     => '创富云服-（签约有效期内的）公司列表',
            //创富云服-获取正常状态公司列表
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_EFFECTIVE_GET_PAGE_LIST_NORMAL_STATUS              => '创富云服-获取正常状态公司列表',
            //创富云服-公司列表（不分页)
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_LIST                                               => '创富云服-公司列表（不分页)',
            //创富云服-查看公司API配置
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_API_CONFIGURE                                      => '创富云服-查看公司API配置',
            //创富云服-修改公司API配置
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_API_UPDATE_API_CONFIG                              => '创富云服-修改公司API配置',
            //创富云服-公司详情
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_DETAIL                                             => '创富云服-公司详情',
            //创富云服-获取细分权限下管辖的B端公司列表（不分页)
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_UNDER_MANAGEMENT_LIST                              => '创富云服-获取细分权限下管辖的B端公司列表（不分页)',
            //创富云服-导出所有公司列表
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_ALL_COMPANY_EXPORT                                 => '创富云服-导出所有公司列表',
            //创富云服-解除入驻
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_RELIEVE                                            => '创富云服-解除入驻',
            //创富云服-中止入驻
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_PAUSE                                              => '创富云服-中止入驻',
            //创富云服-恢复入驻
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_ENABLE                                             => '创富云服-恢复入驻',
            /** cfyf银行管理 **/
            //创富云服-新增银行
            self::MANAGEMENT_CFYF_SERVICE_BANK_ADD                                                   => '创富云服-新增银行',
            // 创富云服-银行列表
            self::MANAGEMENT_CFYF_SERVICE_BANK_PAGE_LIST                                             => '创富云服-银行列表',

            /** cfyf合作信息 **/
            //合作信息
            self::MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_PAGE_LIST                               => '创富云服-合作信息',
            //合作详情
            self::MANAGEMENT_CFYF_SERVICE_BUSINESS_COOPERATE_DETAILS                                 => '创富云服-合作详情',

            /** cfyf销售管理 **/
            //重置管理员密码
            self::MANAGEMENT_CFYF_SERVICE_SALES_RESET_PASSWORD                                       => '创富云服-重置管理员密码',
            //销售分页列表
            self::MANAGEMENT_CFYF_SERVICE_SALES_GET_PAGE_LIST                                        => '创富云服-销售分页列表',
            //销售列表
            self::MANAGEMENT_CFYF_SERVICE_SALES_LIST                                                 => '创富云服-销售列表',
            //销售管理列表
//            self::MANAGEMENT_CFYF_SERVICE_SALES_LIST_UNDER_MANAGEMENT             => '创富云服-管理销售列表',
            //销售详情
            self::MANAGEMENT_CFYF_SERVICE_SALES_DETAILS                                              => '创富云服-销售详情',
            //管理详情
            self::MANAGEMENT_CFYF_SERVICE_SALES_MANAGE_DETAILS                                       => '创富云服-管理详情',
            //更新账号
            self::MANAGEMENT_CFYF_SERVICE_SALES_UPDATE_USERNAME                                      => '创富云服-更新账号',
            //导出
            self::MANAGEMENT_CFYF_SERVICE_SALES_EXPORT                                               => '创富云服-销售导出',
            //销售模拟登录
            self::MANAGEMENT_CFYF_SERVICE_SALES_GENERATE_AUTH_LINK                                   => '创富云服-销售模拟登录',

            /** cfyf销售权限 **/
            //销售权限详情
            self::MANAGEMENT_CFYF_SERVICE_BUSINESS_PERMISSION_GROUP_DETAIL                           => '创富云服-销售权限',
            //权限详情
            self::MANAGEMENT_CFYF_SERVICE_BUSINESS_PERMISSION_GROUP_PERMISSION_DETAIL                => '创富云服-销售权限',
            //编辑权限
            self::MANAGEMENT_CFYF_SERVICE_BUSINESS_ROLE_PERMISSION_RELATION_PERMISSION_DETAIL_UPDATE => '创富云服-编辑销售权限',
            //更新权限
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_UPDATE                                  => '创富云服-更新销售权限',
            //批量更新权限
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_UPDATE                            => '创富云服-批量更新权限',
            //批量新增权限
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_ADD                               => '创富云服-批量新增权限',
            //批量删除权限
            self::MANAGEMENT_CFYF_SERVICE_COMPANY_PERMISSION_BATCH_DELETE                            => '创富云服-批量删除权限',


            /** 创富云服 - 轮播图管理 */
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE                              => '创富云服-轮播图管理-新增/修改素材',
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_SET_STATUS                         => '创富云服-轮播图管理-启用/禁用素材',
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_MATERIAL_PAGE_LIST                 => '创富云服-轮播图管理-查看素材列表',
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_STORE_DEFAULT                      => '创富云服-轮播图管理-新增/修改默认素材',
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_TRANSMIT_BANNER_DEFAULT_PAGE_LIST                  => '创富云服-轮播图管理-默认素材列表',

            /** 创富云服-平台公告 */
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_STORE                      => '创富云服-平台公告-新增公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_UPDATE                     => '创富云服-平台公告-编辑公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_LIST                       => '创富云服-平台公告-公告列表',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_DETAIL                     => '创富云服-平台公告-公告详情',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_SET_TOP                    => '创富云服-平台公告-置顶公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PLATFORM_DELETE                     => '创富云服-平台公告-删除公告',

            /** 创富云服-商品调整公告 */
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_STORE                => '创富云服-商品调整-新增公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_UPDATE               => '创富云服-商品调整-编辑公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_LIST                 => '创富云服-商品调整-公告列表',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_DETAIL               => '创富云服-商品调整-公告详情',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_SET_UP_DOWN          => '创富云服-商品调整-上架公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_PRODUCT_ADJUST_DELETE               => '创富云服-商品调整-删除公告',

            /** 创富云服-新品上架 */
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_STORE          => '创富云服-新品上架-新增公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_UPDATE         => '创富云服-新品上架-编辑公告',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_LIST           => '创富云服-新品上架-公告列表',
            self::MANAGEMENT_CFYF_SERVICE_HOME_PAGE_ANNOUNCEMENT_NEW_PRODUCT_DETAIL         => '创富云服-新品上架-公告详情',

            // 创富云服-费率管理-服务费模板设置
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_PRODUCT_LIST_WITH_TEMPLATE_STATUS => '创富云服-服务费模板-获取产品列表',
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_TEMPLATE_NAME_LIST                => '创富云服-服务费模板-模板名称列表',
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_SERVICE_FEE_MODIFY_TEMPLATE_NAME              => '创富云服-服务费模板-修改模板名称',
            /** 创富云服-续保续期 */
            // 全部续保续期列表
            self::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_PAGE_LIST  => '创富云服-全部续保续期列表',
            // 全部续保续期统计
            self::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_STATISTICS => '创富云服-全部续保续期统计',
            // 续保续期跟踪记录
            self::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_FOLLOW_LOG => '创富云服-续保续期跟踪记录',
            // 续保续期添加跟踪记录
            self::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_ADD_FOLLOW_LOG => '创富云服-续保续期添加跟踪记录',
            // 发送续保续期短信
            self::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_SEND_MSG => '创富云服-发送续保续期短信',
            // 保存续保续期通知设置
            self::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_SAVE_NOTIFY_SETTING => '创富云服-保存续保续期通知设置',
            // 获取客户续保续期记录
            self::MANAGEMENT_CFYF_SERVICE_POLICY_RENEWAL_GET_CUSTOMER_RENEWAL_STAGE_LIST => '创富云服-获取客户续保续期记录',
            // 续保续期通知设置
            self::MANAGEMENT_CFYF_SERVICE_GET_COMPANY_NOTIFY_SETTING => '创富云服-续保续期通知设置',
            // 更新续保续期通知设置
            self::MANAGEMENT_CFYF_SERVICE_NOTIFY_SETTING => '创富云服-更新续保续期通知设置',
            // 批量更新续保续期通知设置
            self::MANAGEMENT_CFYF_SERVICE_BATCH_NOTIFY_SETTING => '创富云服-批量更新续保续期通知设置',
            // 批量更新续保续期通知设置
            self::MANAGEMENT_CFYF_SERVICE_CUSTOMER_RENEWAL_FOLLOW_DETAIL => '创富云服-续保续期跟进详情',
             /** 创富云服-订单相关 */
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_PAGE_LIST => '创富云服-订单列表',
            self::MANAGEMENT_CFYF_SERVICE_EXPORT_PR_ORDER_PAGE_LIST => '创富云服-导出订单列表',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_SEND_NOTIFY  => '创富云服-重推保单通知',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_BASE_INFO => '创富云服-订单详情-订单基本信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SALES => '创富云服-订单详情-销售信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_CUSTOMER => '创富云服-订单客户',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_COMPLIANCE_INFO => '创富云服-订单详情-合规信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PRODUCT_INFO => '创富云服-订单详情-保单产品信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PAYMENT_INFO => '创富云服-订单详情-支付信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_INFO => '创富云服-订单详情-续期账号信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_VISIT_INFO => '创富云服-订单详情-回访信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RECEIPT_INFO => '创富云服-订单详情-回执信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_BASE_INFO => '创富云服-订单详情-保单基本信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_FILE_LINK => '创富云服-订单详情-获取电子保单链接',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PERSON_INFO => '创富云服-订单详情-人员信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_INSURANCES => '创富云服-订单详情-保单险种信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RESPONSIBILITY_AND_AGREEMENTS => '创富云服-订单详情-保单保障权益和机构协议',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_SURRENDER_LOG => '创富云服-订单详情-保单退保记录',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_RENEWAL_STAGE => '创富云服-订单详情-保单续保续期记录',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_POLICY_PAYMENT_AND_RENEWAL_INFO => '创富云服-订单详情-保单支付和续保银行卡信息',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_DETAIL_LINK => '创富云服-全部订单-复制详情链接',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_MANPOWER_LINK => '创富云服-全部订单-复制人核链接',
            self::MANAGEMENT_CFYF_SERVICE_PR_ORDER_GET_POLICY_VISIT_LINK => '创富云服-全部订单-复制回访链接',
            /**  创富云服-产品相关 */
            //  设置产品上下架状态
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_SET_STATUS => '创富云服-产品管理-设置产品上下架状态',
            // 批量上下架
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_BATCH_SET_STATUS => '创富云服-产品管理-批量上下架',
            // 产品列表
            self::MANAGEMENT_CFYF_SERVICE_PRODUCT_MANAGE_COMPANY_PRODUCTS => '创富云服-产品管理-产品列表',

            /* crm用户手机号管理 */
            self::MANAGEMENT_CRM_USER_MOBILE_PAGE_LIST => '查看手机号列表',
            self::MANAGEMENT_CRM_USER_MOBILE_STORE => '添加手机号',
            self::MANAGEMENT_CRM_USER_MOBILE_DELETE => '删除手机号',

            /* crm外部工号管理 */
            self::MANAGEMENT_CRM_USER_TRD_ACCOUNT_PAGE_LIST => '外部工号列表',
            self::MANAGEMENT_CRM_USER_TRD_ACCOUNT_STORE => '添加外部工号',
            self::MANAGEMENT_CRM_USER_TRD_ACCOUNT_UPDATE => '更新外部工号',
            self::MANAGEMENT_CRM_USER_TRD_ACCOUNT_DELETE => '删除外部工号',
            self::MANAGEMENT_CRM_USER_TRD_ACCOUNT_OPERATION_LOG_PAGE_LIST => '外部工号操作日志',

//            /* crm微信客服号管理 */
//            self::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_PAGE_LIST                                       => '微信客服号列表',
//            self::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_SYNC                                            => '微信客服号同步',
//            self::MANAGEMENT_CRM_WX_CUSTOMER_SERVICE_DISTRIBUTE                                      => '微信客服号分配',

            /* 文章管理 */
            self::MANAGEMENT_ARTICLE_CATEGORY_STORE                                                  => '新增文章分类',
            self::MANAGEMENT_ARTICLE_CATEGORY_UPDATE                                                 => '编辑文章分类',
            self::MANAGEMENT_ARTICLE_CATEGORY_DELETE                                                 => '删除文章分类',
            self::MANAGEMENT_ARTICLE_CATEGORY_DETAIL                                                 => '查看文章分类详情',
            self::MANAGEMENT_ARTICLE_CATEGORY_PAGE_LIST                                              => '分章分类分页列表',
            self::MANAGEMENT_ARTICLE_CATEGORY_TOGGLE_STATUS                                          => '切换分类状态',
            self::MANAGEMENT_ARTICLE_TAG_STORE                                                       => '新增文章标签',
            self::MANAGEMENT_ARTICLE_TAG_DELETE                                                      => '删除文章标签',
            self::MANAGEMENT_ARTICLE_TAG_PAGE_LIST                                                   => '文章标签列表',
            self::MANAGEMENT_ARTICLE_STORE                                                           => '新增文章',
            self::MANAGEMENT_ARTICLE_UPDATE                                                          => '编辑文章',
            self::MANAGEMENT_ARTICLE_PAGE_LIST                                                       => '文章分页列表',
            self::MANAGEMENT_ARTICLE_DETAIL                                                          => '文章详情',
            self::MANAGEMENT_ARTICLE_TOGGLE_SHOW                                                     => '切换文章渠道显示状态',
            self::MANAGEMENT_ARTICLE_TOGGLE_TOP                                                      => '切换文章渠道置顶',
            self::MANAGEMENT_ARTICLE_TOGGLE_RECOMMEND                                                => '切换文章渠道推荐',
            self::MANAGEMENT_ARTICLE_DELETE                                                          => '删除文章',
            self::MANAGEMENT_ARTICLE_COPY                                                            => '复制文章',
            self::MANAGEMENT_ARTICLE_DRAFT_SAVE                                                      => '文章草稿保存',
            self::MANAGEMENT_ARTICLE_DRAFT_PAGE_LIST                                                 => '文章草稿分页列表',
            self::MANAGEMENT_ARTICLE_DRAFT_DETAIL                                                    => '文章草稿详情',
            self::MANAGEMENT_ARTICLE_DRAFT_DELETE                                                    => '文章草稿删除',
            self::MANAGEMENT_ARTICLE_DRAFT_PREVIEW_LINK                                              => '文章草稿预览链接生成',

            /* 计划书管理 */
            self::MANAGEMENT_PROPOSAL_PRODUCT_GET_PAGE_LIST                                          => '保障投保产品列表',
            self::MANAGEMENT_PROPOSAL_PRODUCT_ADD                                                    => '保障投保产品新增',
            self::MANAGEMENT_PROPOSAL_PRODUCT_UPDATE                                                 => '保障投保产品更新',
            self::MANAGEMENT_PROPOSAL_PRODUCT_DETAIL                                                 => '保障投保产品详情',
            self::MANAGEMENT_PROPOSAL_PRODUCT_COPY                                                   => '保障投保产品复制',
            self::MANAGEMENT_PROPOSAL_PRODUCT_SET_STATUS                                             => '保障投保产品上下架设置',
            self::MANAGEMENT_PROPOSAL_PRODUCT_BATCH_SET_STATUS                                       => '保障投保产品批量上下架设置',
            self::MANAGEMENT_PROPOSAL_PRODUCT_RATE_DETAIL                                            => '计划书保障投保产品费率详情',
            self::MANAGEMENT_PROPOSAL_PRODUCT_RATE_SAVE                                              => '计划书保障投保产品费率保存',

            self::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_GET_PAGE_LIST => '保障管理列表',
            self::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_ADD           => '保障责任添加',
            self::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DETAIL        => '保障责任详情',
            self::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_UPDATE        => '保障责任更新',
            self::MANAGEMENT_PROPOSAL_GUARANTEE_RESPONSIBILITY_DELETE        => '保障责任删除',

            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_GET_PAGE_LIST => '家庭风险分析模板分组列表',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_ADD           => '家庭风险分析模板分组添加',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_UPDATE        => '家庭风险分析模板分组编辑',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DELETE        => '家庭风险分析模板分组删除',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GROUP_DETAIL        => '家庭风险分析模板分组详情',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_ADD                 => '家庭风险分析模板添加',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_EDIT                => '家庭风险分析模板编辑',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DETAIL              => '家庭风险分析模板详情',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_DELETE              => '家庭风险分析模板删除',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_SET_STATUS          => '家庭风险分析模板状态变更',
            self::MANAGEMENT_PROPOSAL_FAMILY_ANALYSIS_GET_PAGE_LIST       => '家庭风险分析模板分页列表',

            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_ADD           => '储蓄产品管理-新增产品',
            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_UPDATE        => '储蓄产品管理-更新产品',
            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_PAGE_LIST => '储蓄产品管理-分页列表',
            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_SET_STATUS    => '储蓄产品管理-上下架设置',
            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_DETAIL        => '储蓄产品管理-详情',
            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_RATE_SAVE     => '储蓄产品管理-保存费率表',
            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_CASH_SAVE     => '储蓄产品管理-保存现价表',
            self::MANAGEMENT_PROPOSAL_DEPOSIT_PRODUCT_GET_RATE      => '储蓄产品管理-获取相关费率信息',

            /* 病种管理 */
            self::MANAGEMENT_PRODUCT_DISEASE_STORE_ONE_SERIES       => '保存一个系列病种',
            self::MANAGEMENT_PRODUCT_DISEASE_DELETE_ONE_SERIES      => '删除一个系列病种',
            self::MANAGEMENT_PRODUCT_DISEASE_BIND_PRODUCT           => '关联产品',
            self::MANAGEMENT_PRODUCT_DISEASE_UNBIND_PRODUCT         => '取消关联产品',
            self::MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPLOAD        => '病种模板上传',
            self::MANAGEMENT_PRODUCT_DISEASE_DELETE_TEMPLATE        => '删除病种模板',
            self::MANAGEMENT_PRODUCT_DISEASE_TEMPLATE_UPDATE_NAME   => '修改模板名称',

            /* 产品对比管理 */
            self::MANAGEMENT_PRODUCT_EVALUATION_ADD                    => '创建产品一览表',
            self::MANAGEMENT_PRODUCT_EVALUATION_DEL                    => '删除产品一览表',
            self::MANAGEMENT_PRODUCT_EVALUATION_UPDATE                 => '更新产品一览表',
            self::MANAGEMENT_PRODUCT_EVALUATION_SET_PRODUCT_STATUS     => '产品一览表上下架',
            self::MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_ENABLE   => '批量上架',
            self::MANAGEMENT_PRODUCT_EVALUATION_BATCH_PRODUCT_DISABLE  => '批量下架',

            /* 风控管理-信息安全 */
            self::MANAGEMENT_CRM_USER_SECRET_SETTINGS_AND_RULE_SET  => '编辑信息安全设置和监控规则',

            /* 助销资料 */
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_PRODUCT_BASE_INFO_SAVE => '助销资料-售前告知更新',
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_COMMON_TERMS_SAVE      => '助销资料-产品条款更新',
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_UPLOAD          => '助销资料-产品海报上传同步',
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_DEL             => '助销资料-产品海报删除',
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_BATCH_UPLOAD    => '助销资料-产品海报批量上传',
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_UPDATE          => '助销资料-产品海报更新',
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_POSTER_DETAIL          => '助销资料-产品海报详情',
            self::MANAGEMENT_PR_PRODUCT_SALES_INFORMATION_DOCS_SAVE              => '助销资料-产品资料保存',
            self::MANAGEMENT_PR_WS_PRODUCT_SAVE                                  => '分支产品-官网产品设置',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_RULE_SWITCH_ENABLE               => '产品显示规则开关设置',
            self::MANAGEMENT_PR_PRODUCT_DISPLAY_SET_SUPPLIER_PLATFORM_RULE       => '设置对接渠道的产品展示规则',
            self::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_COVER_STORE              => '产品列表素材封面图库-上传图片',
            self::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_UPDATE          => '产品列表素材分类编辑',
            self::MANAGEMENT_PR_PRODUCT_COVER_MATERIALS_CATEGORY_STORE           => '产品列表素材新建分类',
            self::MANAGEMENT_WS_BANNER_STORE                                     => '官网banner新建',
            self::MANAGEMENT_WS_BANNER_UPDATE                                    => '官网banner更新',
            self::MANAGEMENT_WS_BANNER_CHANGE_STATUS                             => '官网banner状态变更',

            /** 上游对账 */
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_LIST_LEFT_ENTRANCE                           => '首续期费用方案-左侧栏入口',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_PAGE_LIST                                    => '首续期费用方案-方案列表',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_CREATE                                       => '首续期费用方案-创建方案',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_COPY                                         => '首续期费用方案-复制方案',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_UPDATE                                       => '首续期费用方案-编辑方案',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_FOR_PENDING                 => '首续期费用方案-应用到产品-待提交',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_DETAIL               => '首续期费用方案-应用到产品-方案详情',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_CREATE               => '首续期费用方案-应用到产品-方案设置',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_COPY                 => '首续期费用方案-应用到产品-方案复制',
            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_UPDATE               => '首续期费用方案-应用到产品-方案编辑',
//            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_CREATE_REGION        => '首续期费用方案-应用到产品-方案新增地区',
//            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_UPDATE_REGION        => '首续期费用方案-应用到产品-方案编辑地区',
//            self::PRC_UPSTREAM_RECONCILIATION_FEE_SCHEME_APPLY_TO_PRODUCT_SCHEME_DELETE_REGION        => '首续期费用方案-应用到产品-方案删除地区',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_LIST_LEFT_ENTRANCE                       => '继续率计算方案-左侧栏入口',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_PAGE_LIST                                => '继续率计算方案-方案列表',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_DETAIL                                   => '继续率计算方案-方案详情',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_CREATE                                   => '继续率计算方案-新增方案',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_UPDATE                                   => '继续率计算方案-编辑方案',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_SCHEME_COPY                                     => '继续率计算方案-复制方案',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_LEFT_ENTRANCE                          => '账单明细-左侧栏入口',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_FAIL_PAGE_LIST                         => '账单明细-失败清单-分页列表',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_FAIL_DETAIL                            => '账单明细-失败清单-详情',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_FAIL_EXPORT                            => '账单明细-失败清单-导出',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_PROGRESS_PAGE_LIST_FOR_PENDING         => '账单明细-待结算清单-对账进度',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_STAT_PAGE_LIST_FOR_PENDING             => '账单明细-待结算清单-供应商汇总',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_PAGE_LIST_BY_SUPPLIER_FOR_PENDING      => '账单明细-待结算清单-按供应商查看清单',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_ITEM_PAGE_LIST_BY_SUPPLIER_FOR_PENDING => '账单明细-待结算清单-结算明细',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_EXPORT_ITEM_BY_MONTH_FOR_PENDING       => '账单明细-待结算清单-按对账月份下载结算明细',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_EXPORT_ITEM_BY_SUPPLIER_FOR_PENDING    => '账单明细-待结算清单-按供应商下载结算明细',
            self::PRC_UPSTREAM_RECONCILIATION_SETTLE_ITEM_LIST_ITEM_EXPORT_SUPPLIER_ITEM_FOR_PENDING  => '账单明细-待结算清单-明细详情下载',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_LEFT_ENTRANCE                   => '继续率统计管理-左侧栏入口',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_PAGE_LIST                       => '继续率统计管理-分页列表',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_EXPORT_STAT_LIST                => '继续率统计管理-导出统计',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_RECALCULATE                     => '继续率统计管理-重算',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_RENEWAL_POLICY_PAGE_LIST        => '继续率统计管理-续期保单分页列表',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_EXPORT_RENEWAL_POLICY_LIST      => '继续率统计管理-导出续期保单',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_TASK_PAGE_LIST                  => '继续率统计管理-任务列表',
            self::PRC_UPSTREAM_RECONCILIATION_RENEWAL_STAT_MANAGEMENT_TASK_FAIL_REASON                => '继续率统计管理-任务列表-查看原因',
        ];
    }
}
