<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-29
 * Time: 下午2:04
 */

namespace Admin\Controller;


class CurdController extends AdminController
{
    protected $model;

    protected $model_name;
    
    /**
     * 可访问 列表页面
     */
    public function index()
    {
        //  判断是否有前置操作校验
        if(method_exists($this,'indexBefore')) {
            $this->indexBefore();
        }

        $model = $this->model;

        $options = ['where'=>'', 'order'=>'', 'base'=>['deleted_at'=>['eq', 0]], 'field'=>true];

        //  得到获取得到的模型
        if( method_exists($this,'getListModel') ) {
            $model = $this->getListModel($model);
        }

        //  得到获取列表的条件 排序 字段
        if(method_exists($this,'getListsOptions')) {
            $options = $this->getListsOptions($options);
        }

        $_list = $this->lists($model, $options['where'], $options['order'], $options['base'], $options['field']);

        $this->assign( compact('_list') );

        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);

        $this->display();
    }

    /**
     * 可访问 添加页面
     */
    public function add()
    {
        $method = 'add';

        $detail = array();

        //  判断是否有前置操作校验
        if(method_exists($this,'addBefore')) {
            $detail = $this->addBefore();
        }

        $method_name = '添加';



        $this->assign( compact('method_name', 'method', 'detail') );

        $this->display('edit');
    }

    /**
     * 可访问 修改页面
     */
    public function edit($id)
    {

        $method = 'edit';

        $method_name = '编辑';

        //  判断是否有前置操作校验
        if(method_exists($this,'editBefore')) {
            $this->editBefore();
        }

        $detail = $this->model->where( [$this->model->getPk() => $id] )->find();

        $this->assign(compact('detail', 'method_name', 'method'));

        $this->display('edit');
    }

    /**
     * 可访问 保存更新内容【添加|修改|软删除】
     */
    public function save()
    {
        $inputs = $this->model->create();

        //  判断是否有前置操作校验
        if(method_exists($this,'saveBefore')) {
            $inputs = $this->saveBefore($inputs);
        }

        if( $this->model->saveData($inputs) ) {
            $this->success($this->model->getErrorMsg(), Cookie('__forward__'), self::AJAX_IS_OPEN);
        }

        $this->error($this->model->getErrorMsg(), '', self::AJAX_IS_OPEN);
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

        if ( $this->update($this->model, $data, $where) !== false ) {
            $this->success("删除操作成功", Cookie('__forward__'), self::AJAX_IS_OPEN);
        }

        $this->error("删除操作失败", '', self::AJAX_IS_OPEN);

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