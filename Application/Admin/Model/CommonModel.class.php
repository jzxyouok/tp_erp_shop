<?php
/**
 * 公共数据模型
 * User: fy
 * Date: 16-7-17
 * Time: 下午9:57
 */

namespace Admin\Model;


use Think\Model;

abstract class CommonModel extends Model
{

    const STATUS_SUCCESS = true;

    const STATUS_ERROR = false;

    protected $error_msg;

    /**
     * 保存数据
     */
    public function saveData($inputs = [], $model = '')
    {
        $method = I('get.method', '');

        $this->startTrans();	//	开启事务

        $model = !is_object($model) || empty($model) ? $this : $model;

        $inputs = empty($inputs) ? $model->create() : $inputs;

        if( !$inputs ){
            return $this->output(self::STATUS_ERROR, $this->getError());
        }

        if( empty($method) ) {
            $method = isset($inputs[$model->getPk()]) && !empty($inputs[$model->getPk()]) ? 'edit' : 'add';
        }

        if( $method == 'add' ) {
            $re = $model->add($inputs);
        } else {
            $re = $model->save($inputs);
        }


        if( $re !== false ) {
            $this->commit();
        }else{
            $this->rollback();
        }
        
        return $this->output($re);
    }

    /**
     * 输出信息
     * @param $code
     * @param string $msg
     * @param string $redirect
     * @return array
     */
    protected function output($status = false, $msg = '')
    {
        $this->error_msg = $msg;

        if( empty($msg) ) {
            $this->error_msg = $status ? "操作成功" : "操作失败";
        }

        return $status;
    }

    /**
     * 返回错误信息
     * @return mixed
     */
    public function getErrorMsg()
    {
        return $this->error_msg;
    }
}