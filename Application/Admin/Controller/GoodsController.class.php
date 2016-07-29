<?php
/**
 * 商品管理
 * User: fy
 * Date: 16-7-25
 * Time: 下午10:50
 */

namespace Admin\Controller;


class GoodsController extends CurdController
{

    protected $model_name = 'Goods';

    protected function middleware()
    {
        $goods_type = I('param.type', 0);
        
        if( empty($goods_type) ) {
            $this->error("缺少必要的商品类型条件");
        }
        
        $goods_type_name = C('goods_type')[$goods_type];

        $this->assign( compact('goods_type', 'goods_type_name') );

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

        $param['keywords'] = I('get.keywords', '');

        if( !empty($param['keywords']) ) {
            $options['where']['name'] = array('like', '%'.$param['keywords'].'%');
        }
        $paramstr = http_build_query($param);

        $this->assign( compact('paramstr', 'param') );

        return $options;
    }

    /**
     *
     */
    private function getConf()
    {
        $goods_category = C('goods_category');

        $unit_list = C('unit_list');

        $goods_storage_house = C('goods_storage_house');

        $this->assign( compact('goods_category', 'unit_list', 'goods_storage_house') );
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