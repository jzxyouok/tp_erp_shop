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
    /**
     * 获取商家信息
     */
    public function getBusiness( $input_name = '',  $type = 1, $bus_id = '', $disabled = false )
    {
        static $static = 0;

        if( empty($input_name) ) {
            return false;
        }

        if( !empty($bus_id) ) {
            $business_name = D('Business')->getBusinessById($bus_id, 'name');
        }

        $static = ++$static;

        $this->assign( compact('business_name', 'bus_id', 'static', 'input_name', 'disabled') );

        $this->display( 'Widget/get_business' );
    }
}