<?php
/**
 * 账户管理
 * User: fy
 * Date: 16-7-29
 * Time: 上午11:36
 */

namespace Admin\Controller;


class AccountController extends AdminController
{
    protected $model_name = 'Account';

    private function getConf()
    {
        $account_type = C('account_type');

        $this->assign( compact('account_type') );
    }

    /**
     * index页面前置操作
     */
    protected function indexBefore()
    {
        $this->getConf();
    }

    /**
     * 添加前置操作
     */
    protected function addBefore()
    {
        $this->getConf();
    }

    protected function editBefore()
    {
        $this->getConf();
    }
}