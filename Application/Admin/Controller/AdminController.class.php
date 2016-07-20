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
         * 校验条件
         ************************************/
        if( method_exists($this, 'middleware') ) {
            $this->middleware();
        }

        /************************************
         * 默认的基础模型
         ************************************/
        $this->model = empty($this->model_name) ? M() : D($this->model_name);
    }

    /**
     * 可访问 列表页面
     */
    public function index()
    {
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


    /**
     * 通用分页列表数据集获取方法
     *
     *  可以通过url参数传递where条件,例如:  index.html?name=asdfasdfasdfddds
     *  可以通过url空值排序字段和方式,例如: index.html?_field=id&_order=asc
     *  可以通过url参数r指定每页数据条数,例如: index.html?r=5
     *
     * @param sting|Model  $model   模型名或模型实例
     * @param array        $where   where查询条件(优先级: $where>$_REQUEST>模型设定)
     * @param array|string $order   排序条件,传入null时使用sql默认排序或模型属性(优先级最高);
     *                              请求参数中如果指定了_order和_field则据此排序(优先级第二);
     *                              否则使用$order参数(如果$order参数,且模型也没有设定过order,则取主键降序);
     *
     * @param array        $base    基本的查询条件
     * @param boolean      $field   单表模型用不到该参数,要用在多表join时为field()方法指定参数
     *
     * @return array|false
     * 返回数据集
     */
    protected function lists ($model, $where=array(), $order='', $base = ['deleted_at'=>['eq', 0]], $field=true){
        $options    =   array();
        $REQUEST    =   (array)I('request.');
        if(is_string($model)){
            $model  =   M($model);
        }

        $OPT        =   new \ReflectionProperty($model, 'options');
        $OPT->setAccessible(true);

        $pk         =   $model->getPk();
        if($order===null){
            //order置空
        }else if ( isset($REQUEST['_order']) && isset($REQUEST['_field']) && in_array(strtolower($REQUEST['_order']),array('desc','asc')) ) {
            $options['order'] = '`'.$REQUEST['_field'].'` '.$REQUEST['_order'];
        }elseif( $order==='' && empty($options['order']) && !empty($pk) ){
            $options['order'] = $pk.' desc';
        }elseif($order){
            $options['order'] = $order;
        }
        unset($REQUEST['_order'],$REQUEST['_field']);

        $options['where'] = array_filter(array_merge( (array)$base, /*$REQUEST,*/ (array)$where ),function($val){
            if($val===''||$val===null){
                return false;
            }else{
                return true;
            }
        });
        if( empty($options['where'])){
            unset($options['where']);
        }
        $options      =   array_merge( (array)$OPT->getValue($model), $options );
        $total        =   $model->where($options['where'])->count();

        if( isset($REQUEST['r']) ){
            $listRows = (int)$REQUEST['r'];
        }else{
            $listRows = C('LIST_ROWS') > 0 ? C('LIST_ROWS') : 30;
        }
        $page = new \Think\Page($total, $listRows, $REQUEST);
        /*
        if($total>$listRows){
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        }
        */
        $page->parameter=I('get.');
        $p =$page->show();
        $this->assign('_page', $p? $p: '');
        $this->assign('_total',$total);
        $options['limit'] = $page->firstRow.','.$page->listRows;

        $model->setProperty('options',$options);

        return $model->field($field)->select();
    }
}