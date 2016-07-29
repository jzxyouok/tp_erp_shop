<?php
/**
 * 公共处理控制器
 * User: fy
 * Date: 16-7-17
 * Time: 下午8:17
 */

namespace Admin\Controller;

use Admin\Model\AdminUserModel;
use Think\Controller;

class PublicController extends Controller
{

    /**
     * 登陆
     */
    public function login( $email = null , $password = null )
    {
        if(IS_POST) {
            $msg = D('AdminUser')->login( $email, $password );

            if( $msg['status'] == 0 ) {
                $this->error( $msg['info'], $msg['url'], false );
            }
            
            $this->success( $msg['info'], $msg['url'], false );
            
            return;
        }

        if( D('AdminUser')->checkLogin() ) {
            redirect(U('Admin/Index/index'));
        }
        
        $this->display();
    }

    public function logout()
    {
        D('AdminUser')->logout();
        
        redirect(U('Admin/Public/login'));
    }
}