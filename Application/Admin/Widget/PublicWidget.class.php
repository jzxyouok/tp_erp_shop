<?php
/**
 * 公共的widget模块
 * User: fy
 * Date: 16-7-29
 * Time: 下午3:20
 */

namespace Admin\Widget;

use Admin\Controller\AdminController;

class PublicWidget extends AdminController
{
    private static $static = 0;
    /**
     * 获取商家信息
     */
    public function getBusiness( $input_name = '',  $type = 1, $bus_id = '', $disabled = false )
    {
        if( empty($input_name) ) {
            return false;
        }

        if( !empty($bus_id) ) {
            $business_name = D('Business')->getBusinessById($bus_id, 'name');
        }

        $static = ++self::$static;

        $this->assign( compact('business_name', 'bus_id', 'static', 'input_name', 'disabled') );

        $this->display( 'Widget/get_business' );

    }

    public function getAccount( $input_name = '', $account_id = '', $disabled = false )
    {
        if( empty($input_name) ) {
            return false;
        }

        $account_list = D('Account')->getAccountList();
            
        $this->assign(compact('input_name', 'account_id', 'disabled', 'account_list'));

        $this->display('Widget/get_account');

    }


    public function getPurSaleUser( $input_name = '', $pur_sale_id = '', $disabled = false )
    {

        if( empty($input_name) ) {
            return false;
        }
        
        $static = ++self::$static;

        $this->assign(compact('input_name', 'pur_sale_id', 'disabled', 'static'));

        $this->display('Widget/get_pur_sale_user');
    }



}