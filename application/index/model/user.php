<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/20 0020
 * Time: 13:46
 */

namespace app\index\model;

use think\Model;
use think\Db;
class user extends Model
{
    protected $table = 'goods';//表名

    public function user($data){
        return Db::table($this->table)->insertGetId($data);

    }
    public function show(){
        return Db::table($this->table)->select();
    }
    public function del($id){
        return Db::table($this->table)->where('id','=',$id)->delete();
    }
//    function edit($data,$id)
//    {
//        var_dump($data);var_dump($id);
//        return Db::table($this->table)->where('id','=',$id)->update($data);
//    }
}