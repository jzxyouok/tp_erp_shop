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

    <!--提示框-->
    <link href="/tp_erp_shop/Public/admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <style>
        .col-sm-12,.col-sm-11,.col-sm-10,.col-sm-9,.col-sm-8,.col-sm-7,.col-sm-6,.col-sm-5,.col-sm-4,.col-sm-3,.col-sm-2,.col-sm-1{ padding-left: 5px; padding-right: 5px;}

        .col-md-12,.col-md-11,.col-md-10,.col-md-9,.col-md-8,.col-md-7,.col-md-6,.col-md-5,.col-md-4,.col-md-3,.col-md-2,.col-md-1{ padding-left: 15px; padding-right: 15px;}
    </style>
    
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
                <h5>账户-<?php echo ($method_name); ?></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <form action="<?php echo U('save', array('method'=>$method));?>" method="post" class="form-horizontal m-t ajax-form" id="commentForm" >

                    <input type="hidden" name="id" value="<?php echo getValue($detail, 'id');?>">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">账户名称：</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" placeholder="请输入账户名称" value="<?php echo getValue($detail, 'name');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">账户类型：</label>
                                    <div class="col-sm-10">
                                        <div class="radio i-checks">
                                            <?php if(is_array($account_type)): $i = 0; $__LIST__ = $account_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($key) == $detail['type']): ?><label><input type="radio" name="type" value="<?php echo ($key); ?>" checked > <i></i><?php echo ($vo); ?> </label>&nbsp;&nbsp;
                                                    <?php else: ?>
                                                    <label><input type="radio" name="type" value="<?php echo ($key); ?>" > <i></i><?php echo ($vo); ?> </label>&nbsp;&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">建帐日期：</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="amount_date" placeholder="建帐日期" value="<?php echo getValue($detail, 'amount_date');?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">账户号：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="account_number" placeholder="请输入账户号" value="<?php echo getValue($detail, 'account_number');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">账户余额：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="amount" placeholder="请输入账户余额" value="<?php echo getValue($detail, 'amount');?>">
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-12">

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <button class="btn btn-primary" type="submit">提交</button>
                                    </div>
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

<script src="/tp_erp_shop/Public/admin/js/plugins/toastr/toastr.min.js"></script>

<script src="/tp_erp_shop/Public/admin/js/public.js"></script>


    <!-- iCheck -->
    <script src="/tp_erp_shop/Public/admin/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        })
    </script>


</body>

</html>