<?php
/**
 * 后台基础控制器
 * User: fy
 * Date: 16-7-17
 * Time: 下午9:06
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Model;

class AdminController extends Controller
{

    protected $model;

    protected $model_name;

    public function _initialize()
    {
        /************************************
         * 验证是否登陆
         ************************************/

        if( !D('AdminUser')->checkLogin() ) {
            redirect(U('Admin/Public/login'));
        }

        /************************************
         * 默认的基础模型
         ************************************/
        $this->model = empty($this->model_name) ? M() : D($this->model_name);

    }

    public function index()
    {
        $this->display();
    }

    /**
     * 可访问 添加页面
     */
    public function add()
    {
        //  判断是否有前置操作校验
        if(method_exists($this,'addBefore')) {
            $this->addBefore();
        }

        $this->display('edit');
    }

    /**
     * 可访问 修改页面
     */
    public function edit($id)
    {
        //  判断是否有前置操作校验
        if(method_exists($this,'editBefore')) {
            $this->editBefore();
        }
        
        $detail = $this->model->where( [$this->model->getPk() => $id] )->find();

        $this->assign(compact('detail'));

        $this->display('edit');
    }

    /**
     * 可访问 软删除 更新状态
     */
    public function delete($ids)
    {
        //  判断是否有前置操作校验
        if(method_exists($this,'deleteBefore')) {
            $this->deleteBefore();
        }

        $data['deleted_at'] = date('Y-m-d H:i:s');

        $where[$this->model->getPk()] = array('in', $ids);

        $re = $this->update($this->model, $data, $where);
    }

    /**
     * 可访问 保存更新内容【添加|修改|软删除】
     */
    public function save()
    {
        //  判断是否有前置操作校验
        if(method_exists($this,'saveBefore')) {
            $this->saveBefore();
        }
    }

    /**
     * 可访问 删除真实数据
     */
    public function remove()
    {
        //  判断是否有前置操作校验
        if(method_exists($this,'removeBefore')) {
            $this->removeBefore();
        }
    }

    /**
     * 添加操作
     */
    protected function insert($model, $data)
    {
        return $model->add($data);
    }

    /**
     * 批量添加
     * @param $model
     * @param $data
     * @return mixed
     */
    protected function insertAll($model, $data)
    {
        return $model->addAll($data);
    }

    /**
     * 更新操作
     * @param $model
     * @param $data
     * @param array $where
     */
    protected function update($model, $data, $where = [])
    {
        return $model->where($where)->save($data);
    }
    
}