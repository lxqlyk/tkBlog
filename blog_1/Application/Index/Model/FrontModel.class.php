<?php
namespace Index\Model;

use Think\Model;


class FrontModel extends Model{
    protected $tableName = 'bloglist';
    public function getBloglist(){
        $row = $this->select();
        return $row;
    }
    public function getBloglistById($d_id){
        
        $row = $this->where("id = $d_id")->select();
       
        return $row;
    }
}
