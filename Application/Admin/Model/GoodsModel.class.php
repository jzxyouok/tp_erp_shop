<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-25
 * Time: 下午10:52
 */

namespace Admin\Model;


class GoodsModel extends CommonModel
{

    protected $_validate = array(
        array('name', 'require', '商品名称不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('min_inventory', 'require', '商品最低库存不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('max_inventory', 'require', '商品最高库存不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('purchase_price', 'require', '商品采购价格不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('sale_price', 'require', '商品零售价格不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    protected $_auto = array(
        array('created_at', 'datetime', self::MODEL_INSERT, 'function'),
        array('updated_at', '0000-00-00 00:00:00', self::MODEL_INSERT),
        array('deleted_at', '0000-00-00 00:00:00', self::MODEL_INSERT),
        array('updated_at', 'datetime', self::MODEL_UPDATE, 'function'),
    );

}