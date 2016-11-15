<?php



namespace Admin\Controller;
use Think\Controller;

class DiaryController extends Controller{
   public function diaryAction(){
       if (session('username')) {
           $d_id = $_GET['id'];
//           var_dump($d_id);
            $this->assign("username",session('username'));
             $BlogModel = new \Admin\Model\BlogModel();
            $result = $BlogModel->getDiaryById($d_id);
            var_dump($d_id);
            $this->assign("title",$result[0]['title']);
            $this->assign("content",$result[0]['content']);
            $this->assign("ddate",$result[0]['ddate']);
            $this->assign("author",$result[0]['author']);
            $this->assign("from",$result[0]['from']);
           
            $this->show();
       }
      
   }
}
