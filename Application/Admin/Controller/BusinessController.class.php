<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-20
 * Time: 下午2:37
 */

namespace Admin\Controller;


class BusinessController extends AdminController
{

    protected $model_name = 'Business';

    protected function middleware()
    {
        $type = I('get.type', 0);

        if( empty($type) ) {
            $this->error("缺少必要的商家类型条件");
        }
        
        return true;
    }

    protected function getListsOptions($options)
    {
        $type = I('request.type', 0);
        
        
    }

    /**
     * 添加页面
     */
    public function add()
    {
        $this->display('edit');
    }

    /**
     * 修改页面
     */
    public function edit()
    {
        $this->display('edit');
    }

    /**
     * 软删除 更新状态
     */
    public function delete()
    {

    }

    /**
     * 保存更新内容【添加|修改|软删除】
     */
    public function save()
    {

    }

    /**
     * 删除真实数据
     */
    public function remove()
    {

    }

}