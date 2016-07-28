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
    



    <!-- 全局js -->
    <script src="/tp_erp_shop/Public/admin/js/jquery.min.js"></script>
    <script src="/tp_erp_shop/Public/admin/js/bootstrap.min.js?v=3.4.0"></script>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content">
    

    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo ($goods_type_name); ?>商品-<?php echo ($method_name); ?></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <form action="<?php echo U('save', array('method'=>$method));?>" method="post" class="form-horizontal m-t ajax-form" id="commentForm" >

                    <input type="hidden" name="id" value="<?php echo getValue($detail, 'id');?>">
                    <input type="hidden" name="type" value="<?php echo ($goods_type); ?>">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">商品名称：</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" placeholder="请输入<?php echo ($goods_type_name); ?>商品名称" value="<?php echo getValue($detail, 'name');?>" required=”required">
                                        <!--<span class="help-block m-b-none">说明文字</span>-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">规格型号：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="spec" placeholder="请输入商品规格型号" value="<?php echo getValue($detail, 'spec');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">最低库存：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="min_inventory" placeholder="请输入商品最低库存预警" value="<?php echo getValue($detail, 'min_inventory', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">采购价格：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="purchase_price" placeholder="采购价格" value="<?php echo getValue($detail, 'purchase_price', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">批发价格：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="wholesale_price" placeholder="批发价格" value="<?php echo getValue($detail, 'wholesale_price', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">折扣率一：</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="discount_rate_1" placeholder="折扣率1(% 无则为0)" value="<?php echo getValue($detail, 'discount_rate_1', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">存储仓库：</label>
                                    <div class="col-sm-10">
                                        <div class="radio i-checks">
                                            <?php if(is_array($goods_storage_house)): $i = 0; $__LIST__ = $goods_storage_house;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label>
                                                    <input type="radio" name="storage_house" value="<?php echo ($key); ?>" checked > <i></i><?php echo ($vo); ?> </label>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">期初数量：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="st_quantity" placeholder="期初数量" value="<?php echo getValue($detail, 'st_quantity');?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">商品分类：</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="category">
                                            <?php if(is_array($goods_category)): $i = 0; $__LIST__ = $goods_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($key) == $detail['category']): ?><option value="<?php echo ($key); ?>" selected="selected"><?php echo ($vo); ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">计量单位：</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="unit">
                                            <?php if(is_array($unit_list)): $i = 0; $__LIST__ = $unit_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($key) == $detail['unit']): ?><option value="<?php echo ($key); ?>" selected="selected"><?php echo ($vo); ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">最高库存：</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="max_inventory" placeholder="请输入商品最高库存预警" value="<?php echo getValue($detail, 'max_inventory', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">零售价格：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sale_price" placeholder="零售价格" value="<?php echo getValue($detail, 'sale_price', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">vip价格：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="vip_price" placeholder="vip价格" value="<?php echo getValue($detail, 'vip_price', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">折扣率二：</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="discount_rate_2" placeholder="折扣率2(% 无则为0)" value="<?php echo getValue($detail, 'discount_rate_2', '0');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">期初单价：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="st_unit_cost" placeholder="期初数量" value="<?php echo getValue($detail, 'st_unit_cost');?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">期初总价：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="st_amount" placeholder="期初数量" value="<?php echo getValue($detail, 'st_amount');?>">
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">商品描述：</label>
                                    <div class="col-sm-11">
                                        <textarea class="form-control" name="memo" placeholder="商品描述"><?php echo getValue($detail, 'memo');?></textarea>
                                    </div>
                                </div>
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





</body>

</html>