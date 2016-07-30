<?php if (!defined('THINK_PATH')) exit(); if($disabled): ?>

<?php else: ?>

    <select class="form-control" name="unit">
        <?php if(is_array($account_list)): $i = 0; $__LIST__ = $account_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["id"]) == $account_id): ?><option value="<?php echo ($vo['id']); ?>"  selected="selected" ><?php echo ($vo['name']); ?></option>
            <?php else: ?>
                <option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </select>

<?php endif; ?>