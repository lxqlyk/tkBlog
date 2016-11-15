<?php


namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
     public function indexAction(){ 
       if ($_POST) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $ConnModel = new \Admin\Model\BlogModel();
            $detail = $ConnModel->getInfoByName($username);
            if ($password == ($detail[0]['password'])) {
                session('username',$username); 
                redirect(U("index/index"));
                
            }
            echo "用户名或密码错误";
        }
        $this->view->display();
    } 
}
