<?php //
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function indexAction(){
//        var_dump(session('username'));
//        die();
        if(session('username')){
            $this->assign("login",session('username'));
            $this->assign("register","");
        }else{
            $this->assign("login","登录");
            $this->assign ("register","注册");      
        }
         $FrontModel = new \Index\Model\FrontModel();
         $bloglist = $FrontModel->getBloglist();
            $this->assign("bloglist",$bloglist);
        
        $this->show();
    }
}