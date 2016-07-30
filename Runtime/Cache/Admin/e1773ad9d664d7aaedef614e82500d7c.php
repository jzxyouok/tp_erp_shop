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
    
    <style>
        .form-control  { border: none; border-bottom: 1px solid #e5e6e7; width: 90%;padding-left:0px;padding-right: 0px; }
    </style>


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
                    <h5>购货单</h5>
                </div>

                <form action="" method="post" class="form-horizontal ajax-form" id="commentForm" >
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">供应商：</label>
                                <div class="col-sm-8">
                                    <?php echo W('Public/getBusiness',array('input_name'=>'bus_id','type'=>'2'));?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">单据日期：</label>
                                <div class="col-sm-8">
                                    <input type="date" class="input-sm form-control" name="bill_date" placeholder="单据日期" value="<?php echo date('Y-m-d');?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">购货人：</label>
                                <div class="col-sm-8">
                                    <?php echo W('Public/getPurSaleUser',array('input_name'=>'pur_sale_id'));?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">单据编号：</label>
                                <div class="col-sm-8">
                                    <input type="hidden" name="bill_no" value="CG201607291350014">
                                    <span class="input-sm form-control">CG201607291350014</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="hr-line-dashed" style="margin: auto;"></div>

                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th>
                                    <a href="javascript:void(0)" class="btn btn-primary btn-xs" title="删除行">new</a>
                                </th>
                                <th>商品</th>
                                <th>单位</th>
                                <th>仓库</th>
                                <th>数量</th>
                                <th>购货单价</th>
                                <th>折扣率(%)</th>
                                <th>折扣额</th>
                                <th>购货金额</th>
                                <th>备注</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($tr_list)): $i = 0; $__LIST__ = $tr_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="tr_<?php echo ($vo); ?>" data-sort="<?php echo ($vo); ?>">
                                    <td><?php echo ($vo); ?></td>
                                    <td><input type="text" name="data[goods_id]" value="" class="input-sm form-control"></td>
                                    <td>
                                        <input type="text" name="data[unit]" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="input-sm form-control">
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-warning btn-xs del" title="删除行">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>





                    </div>

                    <div class="hr-line-dashed" style="margin: auto;"></div>

                    <div class="row">
                        <div class="col-sm-12">
                            <textarea class="input-sm form-control" style="width: 98%; margin-left: 1%;" name="memo" placeholder="备注信息"></textarea>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="row">

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">购货总金额：</label>
                                <div class="col-sm-7">
                                    <input type="text" name="total_amount" value="0.00" class="input-sm form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">优惠率(%)：</label>
                                <div class="col-sm-7">
                                    <input type="text" name="dis_rate" value="0" class="input-sm form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">优惠金额：</label>
                                <div class="col-sm-7">
                                    <input type="text" class="input-sm form-control" name="bill_date" placeholder="" value="0.00">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">优惠后金额：</label>
                                <div class="col-sm-7">
                                    <input type="hidden" class="input-sm form-control" name="amount" placeholder="" value="">
                                    <span class="input-sm form-control">0.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">本次付款：</label>
                                <div class="col-sm-7">
                                    <input type="text" class="input-sm form-control" name="rp_amount" placeholder="" value="0.00">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">结算账户：</label>
                                <div class="col-sm-7">
                                    <?php echo W('Public/getAccount',array('input_name'=>'acc_id'));?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">本次欠款：</label>
                                <div class="col-sm-7">
                                    <input type="hidden" class="input-sm form-control" name="arrears" placeholder="" value="">
                                    <span class="input-sm form-control">0.00</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="hr-line-dashed" style="margin: auto;"></div>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">制单人：</label>
                                <div class="col-sm-7">
                                    <span class="input-sm form-control"><?php echo session('user_auth.nickname');?></span>
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


    <script>
        $(function () {

           $(".table-responsive").on("click", ".del", function () {
               $(this).parent().parent().remove();

               $(".table tbody tr").each(function (i, n) {
                   $(n).children().eq(0).text(i+1);
               });
           })

        });
    </script>


</body>

</html>