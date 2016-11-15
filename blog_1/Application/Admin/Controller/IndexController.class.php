<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function indexAction() {
//        var_dump(session('username'));
        if (session('username')) {
            $BlogModel = new \Admin\Model\BlogModel();
            $result = $BlogModel->getPerson();
            $this->assign("username", session('username'));
            $this->assign("name", $result[0]['name']);
            $this->assign("agender", $result[0]['agender']);
            $this->assign("birth", $result[0]['birth']);
            $this->assign("star", $result[0]['star']);
            $this->assign("add", $result[0]['add']);
            $this->assign("head", $result[0]['head']);
            $this->assign("motto", $result[0]['motto']);
            $this->assign("back", $result[0]['background']);
            if (IS_POST) {
                $data['title'] = $_POST['title'];
                $data['content'] = $_POST['content'];
                $data['ddate'] = date("Y-m-d");
                $data['author'] = session('username');
                if (!false == $data['title'] && !false == $data['content']) {
                    $addDiary = M('blog.diary');
                    $addDiary->add($data);
                    $this->success('创建成功', 'index', 1);
                    ;
                }
                $this->error("创建失败", "", 1);
            };
             
            $page = I("get.p", 1, "intval");
            $perPage = 9;
            $diary = $BlogModel->getDiary($page, $perPage);
            $PageObj = new \Think\APage($diary[0], $perPage);
            $pages = $PageObj->show("ajaxpage(this)");
            $this->assign("dcontent", $diary[1]);
            $this->view->assign("pages", $pages);           
                if (IS_AJAX) {
                   sleep(1);
                   $content = $this->fetch("Index/index2");
                   echo json_encode([
                       'status' => 2000,
                       'message' => '获取数据成功',
                       'data' => $content
                   ]);
                   exit();
               }
            $this->view->display();
        } else {
            redirect(U("login/index"));
        }
    }

}
