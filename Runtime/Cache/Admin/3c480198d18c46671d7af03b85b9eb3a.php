<?php if (!defined('THINK_PATH')) exit(); if($disabled): ?>
    <input type="text" class="form-control" value="<?php echo ($business_name); ?>" disabled="disabled" >
    <input type="hidden" name="<?php echo ($input_name); ?>" value="<?php echo ($bus_id); ?>">
<?php else: ?>
    <div class="input-group">
        <input type="text" class="form-control" id="get_<?php echo ($static); ?>" value="<?php echo ($business_name); ?>" >
        <input type="hidden" name="<?php echo ($input_name); ?>" value="<?php echo ($bus_id); ?>">
        <div class="input-group-btn">
            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
            </ul>
        </div>
    </div>

    <?php if(($static) == "1"): ?><script src="/tp_erp_shop/Public/admin/js/plugins/suggest/bootstrap-suggest.min.js"></script><?php endif; ?>
    <script>
        $(function(){
            var testBsSuggest = $("#get_<?php echo ($static); ?>").bsSuggest({
                url: "<?php echo U('Admin/Ajax/getBusiness', array('type'=>2));?>",
                idField: "bus_id",
                keyField: "name"
            }).on('onDataRequestSuccess', function (e, result) {
                // console.log('onDataRequestSuccess: ', result);
            }).on('onSetSelectValue', function (e, keyword) {
                // console.log('onSetSelectValue: ', keyword);
                $("input[name='<?php echo ($input_name); ?>']").val(keyword.id);
            }).on('onUnsetSelectValue', function (e) {
                // console.log("onUnsetSelectValue");
            });
        });
    </script>
<?php endif; ?>