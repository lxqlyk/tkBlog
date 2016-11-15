<?php

namespace Index\Controller;

use Think\Controller;

/**
 * Description of BloglistController
 *
 * @author Administrator
 */
class BloglistController extends Controller {

    public function indexAction() {
       
            $this->assign("username",session('username'));
        $FrontModel = new \Index\Model\FrontModel();
         $d_id = $_GET['id'];
//        var_dump($d_id);
//        die();
         $result = $FrontModel->getBloglistById($d_id);
//         var_dump($result);
//         die();
        $this->assign("title",$result[0]['title']);
        $this->assign("content",$result[0]['content']);
        $this->assign("date",$result[0]['date']);
        $this->assign("author",$result[0]['author']);
        $this->assign("artid",$result[0]['artid']);
        $this->display();
    }

}
