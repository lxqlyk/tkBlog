<?php

namespace Admin\Model;

use Think\Model;

class BlogModel extends Model{
    protected $tableName = 'user';

//    protected  $connection = 'DB_NAME';
    public function getInfoByName($username,$tablename){
//        var_dump($username);
        $row = $this->where("username ='$username'")->select();
        return $row;
    }
     public function getPerson(){
//        var_dump($username);
        $row = $this->table('introduce')->select();
        return $row;
    }
    public function getDiary($page=1, $perPage=9){
        $data = array();
        $count = $this->table('diary')->count();
        $list =  $this->table('diary')->page($page, $perPage) ->select();
         $data[0] = $count;
        $data[1] = $list;
         return $data;
      
    
    
    }
    public function getDiaryById($d_id){
        
        $row = $this->table('diary')->where("d_id = $d_id")->select();
       
        return $row;
    }
}

