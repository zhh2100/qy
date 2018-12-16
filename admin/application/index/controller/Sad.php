<?php
namespace app\index\controller;

use think\Controller;
use think\Session;

class Sad extends Controller
{
    public function _initialize()
    {
        $id = session('user');

        if (!$id) {
            $this->redirect('login/login/index');
        }
    }
	
    public function index()
    {
        $code       =   input('code');
        $msg        =   input('msg');

        $list       =   db('sad')->order('id desc')->paginate(10);
        return view('index',[
            'msg'   =>  $msg,
            'list'  =>  $list,
            'code'  =>  $code
        ]);
    }

    public function add()
    {
        $code   =   input('msg');
        return view('add',
            [
                'code'  =>  $code
            ]);
    }

    public function update()
    {
        $code   =   input('msg');
        $data   =   db('sad')->where('id',input('id'))->find();
        return view('update',
            [
                'data'  =>  $data,
                'code'  =>  $code
            ]);
    }

    public function del()
    {
        $data   =   db('sad')->where('id',input('id'))->delete();
        return redirect('sad/index',['code'=>1,'msg'=>'删除成功']);
    }

    public function create()
    {
        $file = request()->file('picurl');
        if($file){

            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

            if($info){
                $type   =   ['gif','jpeg','png','bmp','jpg'];
                $types  =   $info->getExtension();
                $url    =   '/public/uploads/'. $info->getSaveName();
                if(in_array($types,$type))
                {
                    $insert['picurl']   =   str_replace('\\','/',str_replace('\\\\','/',$url));
                    $insert['content']  =   input('content');
                  $insert['title']  =   input('title');
                    $insert['linkurl']  =   input('linkurl');
                    if(db('sad')->insert($insert)!==false)
                    {
                        return redirect('sad/index',['code'=>1,'msg'=>'添加成功']);
                    }else{
                        unlink($url);
                        return redirect('sad/add',['code'=>0,'msg'=>'添加失败']);
                    }
                }else{
                    unlink($url);
                    return redirect('sad/add',['code'=>0,'msg'=>'请上传图片']);
                }
            }else{

                return redirect('sad/add',['code'=>0,'msg'=>'上传失败'.$file->getError()]);
            }
        }else{
            return redirect('sad/add',['code'=>0,'msg'=>'图片未上传']);
        }

    }

    public function edit()
    {
        $file = request()->file('picurl');
        if($file){

            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                $type   =   ['gif','jpeg','png','bmp','jpg'];
                $types  =   $info->getExtension();
                $url    =   '/public/uploads/'. $info->getSaveName();
                if(in_array($types,$type))
                {
                    $insert['picurl']   =   str_replace('\\','/',str_replace('\\\\','/',$url));
                }else{
                    unlink($url);
                    return redirect('sad/add',['code'=>0,'msg'=>'请上传图片']);
                }
            }else{

                return redirect('sad/add',['code'=>0,'msg'=>'上传失败'.$file->getError()]);
            }
        }
        $insert['content']  =   input('content');
      $insert['title']  =   input('title');
        $insert['linkurl']  =   input('linkurl');
        if(db('sad')->where('id',input('id'))->update($insert)!==false)
        {
            return redirect('sad/index',['code'=>1,'msg'=>'添加成功']);
        }else{
            unlink($url);
            return redirect('sad/add',['code'=>0,'msg'=>'添加失败']);
        }



    }
}