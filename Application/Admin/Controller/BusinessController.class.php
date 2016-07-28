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
        $business_type = I('param.type', 0);

        if( empty($business_type) ) {
            $this->error("缺少必要的商家类型条件");
        }

        $business_type_name = C('business_type')[$business_type];

        $this->assign( compact('business_type', 'business_type_name') );
        
        return true;
    }

    /**
     * index页面前置操作
     */
    protected function indexBefore()
    {
        $this->getConf();
    }

    /**
     * 返回 列表条件 等options
     * @param $options
     * @return mixed
     */
    protected function getListsOptions($options)
    {
        $options['where']['type'] = I('request.type', 0);
        
        return $options;
    }
    
    private function getConf()
    {
        $business_level = C('business_level');

        $settlement_type = C('settlement_type');
        
        $this->assign(compact('business_level', 'settlement_type'));
    }

    /**
     * 添加前置操作
     */
    protected function addBefore()
    {
        $this->getConf();
    }

    protected function editBefore()
    {
        $this->getConf();
    }
}