<?php


namespace app\index\controller;


use think\Controller;
use think\Request;
use app\index\model\user;

class Index extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function add()
    {
        $request = Request::instance();
        $data = $request->post();
        $model = new user;
        $result=$model->user($data);
        if ($result) {
            $this->success('新增成功', 'index/show');
        } else {
            $this->error('新增失败');
        }
    }
    //展示
    public function show()
    {
       $model = new user;
       $show = $model->show();
       return $this->fetch('show',['arr' => $show]);
    }

    //删除
    public function del()
    {
        $request = Request::instance();
        $id = $request->get('id');
        $del = new user;
        $result = $del->del($id);
        if ($result) {
            $this->success('删除成功', 'index/show');
        } else {
            $this->error('删除失败');
        }
    }

    //修改数据
    public function save()
    {
        $id = $_GET['id'];
        $request = Request::instance();
        $data = $request->get();
        $save = new user;
        $result = $save->edit($data,$id);
        if ($result) {
            $this->success('修改成功', 'index/show');
        } else {
            $this->error('修改失败');
        }
    }
}
