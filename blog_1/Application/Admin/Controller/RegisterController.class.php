<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;

use Think\Controller;

class RegisterController extends Controller {

    public function RegisterAction() {
        if ($_POST) {
            $user = M("user");
            $data['username'] = $_POST['rname'];
            $data['password'] =  md5($_POST['rpass']) ;
            $data['tel'] = $_POST['rtel'];
            $ConnModel = new \Admin\Model\BlogModel();
            $detail = $ConnModel->getInfoByName($data['username']);
//            var_dump($detail);
            if (!$detail) {
                $user->add($data);
                echo "注册成功";
            } else {
                echo "用户名已存在";
            }
        }
        $this->display();
    }

}
