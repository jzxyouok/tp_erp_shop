<?php
return array(
	//'配置项'=>'配置值'
    'DATA_AUTH_KEY'	=> 'abcdefghijklmnopqrstuvwxyz',	// 系统默认加密密钥 如 登陆 密码加密密钥

    /* 全局过滤配置 */
    'DEFAULT_FILTER' => '', //全局过滤函数  filtration

    // '配置项'=>'配置值'
    'DB_DSN' => '', // 数据库连接DSN 用于PDO方式
    'DB_TYPE' => 'mysqli', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址 192.168.1.139
    'DB_NAME' => 'ww_erp_shop', // 数据库名
    'DB_USER' => 'root', // 用户名 root
    'DB_PWD' => 'root', // 密码 root
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀

    /*  公共报错页面  */
    // 'TMPL_ACTION_ERROR'  => 'Public:error',
    // 'TMPL_ACTION_SUCCESS'=> 'Public:success',

    // 允许访问的模块列表
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',       // 默认模块

/*    'AUTH_CONFIG' => array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'juli_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'juli_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'juli_auth_rule', //权限规则表
        'AUTH_USER' => 'juli_user'//用户信息表
    ),*/

    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__UPLOADS__'   => __ROOT__ . '/Uploads',
        '__STATIC__'    => __ROOT__ . '/Public/static',
        '__AVATAR__'    => __ROOT__ . '/Public/avatar',
        '__HOME__'      => __ROOT__ . '/Public/home',
        '__ADMIN__'     => __ROOT__ . '/Public/admin',
    ),

    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 2,    //URL模式
    'VAR_URL_PARAMS'       => '',   //PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/',  //PATHINFO URL分割符

    /* 文件上传相关配置 */
    'DOWNLOAD_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 20*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg,zip,rar,tar,gz,7z,doc,docx,txt,xml,xlsx,ppt,pdf,xls', //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/', //保存根路径
        'savePath' => '/Files/', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //下载模型上传配置（文件上传类配置）

    /* 图片上传相关配置 */
    'PICTURE_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg', //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/', //保存根路径
        'savePath' => '/Picture/', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ), //图片上传相关配置（文件上传类配置）


    /* 编辑器图片上传相关配置 */
    'EDITOR_UPLOAD' => array(
        'mimes'    => '', //允许上传的文件MiMe类型
        'maxSize'  => 2*1024*1024, //上传的文件大小限制 (0-不做限制)
        'exts'     => 'jpg,gif,png,jpeg', //允许上传的文件后缀
        'autoSub'  => true, //自动子目录保存文件
        'subName'  => array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'rootPath' => './Uploads/Editor/', //保存根路径
        'savePath' => '', //保存路径
        'saveName' => array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
        'saveExt'  => '', //文件保存后缀，空则使用原后缀
        'replace'  => false, //存在同名是否覆盖
        'hash'     => true, //是否生成hash编码
        'callback' => false, //检测文件是否存在回调函数，如果存在返回文件信息数组
    ),

    'THINK_EMAIL' => array(
        'SMTP_HOST'   => 'smtp.msymobile.com', //SMTP服务器 
        'SMTP_PORT'   => '25', //SMTP服务器端口  465
        'SMTP_USER'   => 'oa@msymobile.com', //SMTP服务器用户名 
        'SMTP_PASS'   => 'Keepme123123', //SMTP服务器密码
        'FROM_EMAIL'  => 'oa@msymobile.com', //发件人EMAIL
        'FROM_NAME'   => '聚力集团-OA系统消息', //发件人名称
        'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
        'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
    ),


    /************************************************************************************
     * 默认的分类配置
     */


    /**
     * 商品分类
     */
    'goods_category' => [
        
    ],

    /**
     * 单据类型
     */
    'bill_type' => [

    ],

    /**
     * 付款情况
     * 0未付款 1部分付款 2全部付款
     */
    'hx_state_code' => [

    ],

    /**
     * 1 购货 2 退货 3 销售 4 退销 5 其他入库 6 其他出库 7 盘盈 8 盘亏
     */
    'trans_type' => [

    ],

    /**
     * 账户类型
     */
    'account_type' => [

    ],

    /**
     * 结算方式
     */
    'way_id' => [

    ],

    /**
     * 商家等级 0:普通商家
     */
    'business_level' => [
        '0' => '普通商家',
        '1' => 'VIP商家'
    ],

    /**
     * 商家类型
     */
    'business_type' => [
        '0' => '未知',
        '1' => '客户',
        '2' => '供应商'
    ],

    /**
     * 商家结算方式 0:未知 1 日结 2 周结 3 月结
     */
    'settlement_type' => [
        '0' => '自由结算,无规律',
        '1' => '日结',
        '2' => '周结',
        '3' => '月结',
    ]

);