<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-17
 * Time: 下午9:31
 */

namespace Home\Model;


use Think\Model;

class AdminUserModel extends Model
{
    protected $_validate = array(

    );

    protected $_auto = array(

    );

    /**
     * 登陆
     */
    public function login($email, $password)
    {
        $msg = array( 'info' => '' , 'status' => 0 , 'url' => '');

        if( empty($email) || empty($password) ) {
            $msg['info'] = '请输入登陆邮箱以及秘密';
            return $msg;
        }

        $info = $this->where( ['email'=>$email] )->field('id as uid, nickname, email, password, mobile, deleted_at')->find();

        if( empty($info) || $info['deleted_at'] > 0 ) {
            $msg['info'] = '您的账户不存在';
            return $msg;
        }

        if( $info['password'] !== hash_md5($password) ) {
            $msg['info'] = '您输入的密码错误';
            return $msg;
        }

        $this->autoLogin($info);

        $msg = array( 'info' => '登陆成功' , 'status' => 0 , 'url' => U('Index/index'));

        return $msg;
    }

    /**
     * 登陆后保存 用户基本信息
     * @param $info
     */
    private function autoLogin($info)
    {
        unset($info['password']);

        session('user_auth', $info);

        return true;
    }

    /**
     * 判断用户是否登陆
     */
    public function checkLogin()
    {
        if(session('user_auth')) {
            return true;
        }

        return false;
    }

    /**
     * 退出登陆
     */
    public function logout()
    {
        session('user_auth', null);
    }


}