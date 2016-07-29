<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-20
 * Time: 下午5:08
 */

namespace Admin\Model;


class BusinessModel extends CommonModel
{
    protected $_validate = array(
        array('name', 'require', '商家名称不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('contact_name', 'require', '联系人姓名不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('contact_mobile', 'require', '联系人电话不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('address', 'require', '商家地址不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('type', 'require', '商家类型不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('level', 'require', '商家等级不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('settlement_type', 'require', '结算方式不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('settlement_date', 'require', '结算日期不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    protected $_auto = array(
        array('settlement_date', 'format_datetime', self::MODEL_BOTH , 'function'),
        array('created_at', 'datetime', self::MODEL_INSERT, 'function'),
        array('updated_at', '0000-00-00 00:00:00', self::MODEL_INSERT),
        array('deleted_at', '0000-00-00 00:00:00', self::MODEL_INSERT),
        array('updated_at', 'datetime', self::MODEL_UPDATE, 'function'),
    );

}