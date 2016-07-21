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

    

    

    <!-- 全局js -->
    <script src="/tp_erp_shop/Public/admin/js/jquery.min.js"></script>
    <script src="/tp_erp_shop/Public/admin/js/bootstrap.min.js?v=3.4.0"></script>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content">
    

    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo ($business_type_name); ?>管理</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_basic.html#">选项1</a>
                            </li>
                            <li><a href="table_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <!--<div class="row">
                        <div class="col-sm-5 m-b-xs">
                            <select class="input-sm form-control input-s-sm inline">
                                <option value="0">请选择</option>
                                <option value="1">选项1</option>
                                <option value="2">选项2</option>
                                <option value="3">选项3</option>
                            </select>
                        </div>
                        <div class="col-sm-4 m-b-xs">
                            <div data-toggle="buttons" class="btn-group">
                                <label class="btn btn-sm btn-white">
                                    <input type="radio" id="option1" name="options">天</label>
                                <label class="btn btn-sm btn-white active">
                                    <input type="radio" id="option2" name="options">周</label>
                                <label class="btn btn-sm btn-white">
                                    <input type="radio" id="option3" name="options">月</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </div>-->


                    <div class="row">
                        <div class="col-sm-8 m-b-xs">
                            <a href="javascript:void(0)" url="<?php echo U('add', array('type'=>$business_type));?>" rel="" title="添加<?php echo ($business_type_name); ?>" class="btn btn-sm btn-primary my-popup"> 添加<?php echo ($business_type_name); ?> </a>

                            <a href="javascript:history.go(0)" class="btn btn-sm btn-primary"> 刷新 </a>

                             <!--<a href="javascript:history.go(-1)" class="btn btn-sm btn-primary"> 返回上一步 </a>-->

                            <input type="button" url="<?php echo U('delete',array('Model'=>'UserOrganization','status'=>'-1'));?>" class="btn btn-sm btn-primary ajax-post confirm" target-form="ids" value="删除">

                            <a href="<?php echo U('index?'.$paramstr,array('parent_id'=>0,'type'=>2));?>" class="btn btn-sm btn-primary">单独部门</a>
                        </div>
                        <form action="<?php echo U('index?'.$paramstr);?>" method="get">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" placeholder="请输<?php echo ($business_type_name); ?>名称" class="input-sm form-control" name="keywords" value="<?php echo ((isset($param['keywords']) && ($param['keywords'] !== ""))?($param['keywords']):''); ?>"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>名称</th>
                                <th>等级</th>
                                <th>结算方式</th>
                                <th>结算日期</th>
                                <th>期初应付/收款</th>
                                <th>期初预付/收款</th>
                                <th>联系人姓名</th>
                                <th>联系人电话</th>
                                <th>商家地址</th>
                                <th>商家描述</th>
                                <th>创建时间</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td>
                                        <div class="icheckbox_square-green checked" style="position: relative;"><input type="checkbox" checked="" class="i-checks" name="input[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                                    </td>
                                    <td><?php echo ($vo['name']); ?></td>
                                    <td><?php echo ($vo['level']); ?></td>
                                    <td><?php echo ($vo['settlement_type']); ?></td>
                                    <td><?php echo ($vo['settlement_date']); ?></td>
                                    <td><?php echo ($vo['st_receive_money']); ?></td>
                                    <td><?php echo ($vo['st_period_receive_money']); ?></td>
                                    <td><?php echo ($vo['contact_name']); ?></td>
                                    <td><?php echo ($vo['contact_mobile']); ?></td>
                                    <td><?php echo ($vo['address']); ?></td>
                                    <td><?php echo ($vo['memo']); ?></td>
                                    <td><?php echo ($vo['created_at']); ?></td>
                                    <td><?php echo ($vo['updated_at']); ?></td>
                                    <td>

                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
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





</body>

</html>