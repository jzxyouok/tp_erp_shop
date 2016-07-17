<?php
/**
 * 后台基础控制器
 * User: fy
 * Date: 16-7-17
 * Time: 下午9:06
 */

namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller
{
    public function _initialize()
    {
        /************************************
         * 验证是否登陆
         ************************************/
        
        if( !D('AdminUser')->checkLogin() ) {
            redirect(U('Admin/Public/login'));
        }

    }

    public function index()
    {
        
    }

    /**
     * 列表
     */
    public function lists()
    {
        
    }
    
}