<?php
/**
 * Created by PhpStorm.
 * User: fy
 * Date: 16-7-29
 * Time: 下午1:59
 */

namespace Admin\Controller;


class InvPuController extends InvController
{
    public function index()
    {
        $tr_list = [1,2,3,4,5];
        
        $this->assign(compact('tr_list'));

        $this->display();
    }
}