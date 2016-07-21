<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>H+ 后台主题UI框架 - 首页示例二</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/tp_erp_shop/Public/admin/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/tp_erp_shop/Public/admin/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">


    <link href="/tp_erp_shop/Public/admin/css/animate.min.css" rel="stylesheet">
    <link href="/tp_erp_shop/Public/admin/css/style.min.css?v=3.2.0" rel="stylesheet">

    
    <link href="/tp_erp_shop/Public/admin/css/plugins/iCheck/custom.css" rel="stylesheet">


    <!-- 全局js -->
    <script src="/tp_erp_shop/Public/admin/js/jquery.min.js"></script>
    <script src="/tp_erp_shop/Public/admin/js/bootstrap.min.js?v=3.4.0"></script>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content">
    

    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo ($business_type_name); ?>-<?php echo ($method_name); ?></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <form action="<?php echo U('save');?>" method="post" class="form-horizontal m-t ajax-form" id="commentForm" >
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">文本框：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="" class="form-control" placeholder="请输入文本">
                                    <!--<span class="help-block m-b-none">说明文字</span>-->
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码框：</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">单选框：</label>
                                <div class="col-sm-9">

                                    <div class="radio i-checks">
                                        <label>
                                            <input type="radio" name="status" value="2" checked > <i></i> 是</label>
                                        <label>
                                            <input type="radio" name="status" value="1" > <i></i> 否</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码框：</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码框：</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码框：</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                                </div>
                            </div>

                        </div>



                        <div class="col-md-6">
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit">提交</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "/tp_erp_shop", //当前网站地址
            "APP"    : "/tp_erp_shop", //当前项目地址
            "PUBLIC" : "/tp_erp_shop/Public", //项目公共目录地址
            "ADMIN"  : "/tp_erp_shop/Public/admin",  //后台资源目录
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO 分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        };
    })();
    var _ROOT_ = "/tp_erp_shop";
    var _ADDONS_ = "__ADDONS__";
</script>

<!-- jQuery UI -->
<script src="/tp_erp_shop/Public/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="/tp_erp_shop/Public/admin/js/plugins/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="/tp_erp_shop/Public/admin/js/content.min.js?v=1.0.0"></script>

<script src="/tp_erp_shop/Public/admin/js/public.js"></script>


    <!-- iCheck -->
    <script src="/tp_erp_shop/Public/admin/js/plugins/iCheck/icheck.min.js"></script>


</body>

</html>