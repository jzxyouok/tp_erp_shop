<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-29
 * Time: 上午11:38
 */

namespace Admin\Model;


class AccountModel extends CommonModel
{
    protected $_validate = array(
        array('name', 'require', '账户名称不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('type', 'require', '账户类型不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('account_number', 'require', '账户号不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    protected $_auto = array(
        array('amount_date', 'format_datetime', self::MODEL_BOTH , 'function'),
        array('created_at', 'datetime', self::MODEL_INSERT, 'function'),
        array('updated_at', '0000-00-00 00:00:00', self::MODEL_INSERT),
        array('deleted_at', '0000-00-00 00:00:00', self::MODEL_INSERT),
        array('updated_at', 'datetime', self::MODEL_UPDATE, 'function'),
    );

    /**
     * 获取
     */
    public function getAccountList()
    {
        return $this->field('id, name, account_number, type, amount, amount_date')->where(['deleted_at'=>['eq', 0]])->select();
    }
}