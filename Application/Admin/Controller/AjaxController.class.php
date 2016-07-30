<?php
/**
 * ajax 控制器
 * User: fy
 * Date: 16-7-17
 * Time: 下午9:08
 */

namespace Admin\Controller;

use Think\Controller;

class AjaxController extends Controller
{
    public function _initialize()
    {
        if( !IS_AJAX ) {
            return false;
        }
    }

    public function getBusiness($type)
    {
        $list = D('Business')->getBusiness($type, 'id, name, contact_name');

        $return['message'] = "";
        $return['value'] = $list;
        $return['code'] = 200;
        $return['redirect'] = "";

        $this->ajaxReturn($return);
    }


    public function getPurSaleUser()
    {
        $list = D('PurSaleUser')->getPurSaleUser('id, realname');

        $return['message'] = "";
        $return['value'] = $list;
        $return['code'] = 200;
        $return['redirect'] = "";

        $this->ajaxReturn($return);
    }
}