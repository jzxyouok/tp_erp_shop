<?php
return array(
	//'配置项'=>'配置值'

    /* 主题设置 */
    'DEFAULT_THEME' =>  '',  // 默认模板主题名称

    'LIST_ROWS' => '30',            //  默认分页

    'USER_MAX_CACHE'    =>  '1000', //  最大缓存用户数
    
    /* Cookie设置 */
    'COOKIE_EXPIRE'         =>  3600,    // Cookie有效期   一个小时
    'COOKIE_DOMAIN'         =>  '',      // Cookie有效域名
    'COOKIE_PATH'           =>  '/',     // Cookie路径
    'COOKIE_PREFIX'         =>  'erp_admin_',      // Cookie前缀 避免冲突
    'COOKIE_HTTPONLY'       =>  '',      // Cookie httponly设置

    /* SESSION设置 */
    'SESSION_AUTO_START'    =>  true,           // 是否自动开启Session
    'SESSION_OPTIONS'       =>  array(),        // session 配置数组 支持type name id path expire domain 等参数
    'SESSION_TYPE'          =>  '',             // session hander类型 默认无需设置 除非扩展了session hander驱动
    'SESSION_PREFIX'        =>  'erp_admin',    // session 前缀
    'VAR_SESSION_ID'        =>  'session_id',   // sessionID的提交变量 修复uploadify插件无法传递session_id的bug

    /* 后台错误页面模板 */
//    'TMPL_ACTION_ERROR'     =>  MODULE_PATH.'View/Public/error.html', // 默认错误跳转对应的模板文件
//    'TMPL_ACTION_SUCCESS'   =>  MODULE_PATH.'View/Public/success.html', // 默认成功跳转对应的模板文件
//    'TMPL_EXCEPTION_FILE'   =>  MODULE_PATH.'View/Public/exception.html',// 异常页面的模板文件

    
    /* 数据缓存设置 */
    'DATA_CACHE_TIME'       =>  3600*24*3,      // 数据缓存有效期 0表示永久缓存 3天
    'DATA_CACHE_COMPRESS'   =>  false,          // 数据缓存是否压缩缓存
    'DATA_CACHE_CHECK'      =>  false,          // 数据缓存是否校验缓存
    'DATA_CACHE_PREFIX'     =>  'erp_admin_',    // 缓存前缀
    'DATA_CACHE_TYPE'       =>  'File',         // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'DATA_CACHE_PATH'       =>  TEMP_PATH,      // 缓存路径设置 (仅对File方式缓存有效)
    'DATA_CACHE_SUBDIR'     =>  false,          // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
    'DATA_PATH_LEVEL'       =>  1,              // 子目录缓存级别

    
    /* 开启表单令牌 */
    'TOKEN_ON'      =>    true,  // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true


);