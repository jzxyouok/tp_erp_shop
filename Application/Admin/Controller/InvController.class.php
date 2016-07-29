<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-29
 * Time: 下午2:00
 */

namespace Admin\Controller;


class InvController extends AdminController
{
    protected $account_model;     //  账户

    protected $account_info_model;      //  账户资金流动明细

    protected $invoice_model;     //  单据

    protected $invoice_info_model;    //  单据明细

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub

        $this->account_model = D('Account');

        $this->account_info_model = D('AccountInfo');

        $this->invoice_model = D('invoice');

        $this->invoice_info_model = D('invoice_info');
    }

    
}