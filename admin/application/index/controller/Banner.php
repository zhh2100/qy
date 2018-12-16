<?php
namespace app\index\controller;

use think\Controller;
use think\Session;

class Banner extends Controller
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
        $cid       =   input('id');
        //$name      =   input('name');
        //$sort      =  input('sort');
        if ($cid) {
            $list      =   db('banner')->where('cid',$cid)->order('sort asc')->paginate(10);
        }
        else{
            $list      =   db('banner')->order('sort asc')->paginate(10);
         }
         $category      =   db('category')->order('id asc')->paginate(12);
        return view('index',[
            'msg'   =>  $msg,
            'list'  =>  $list,
            'category'  =>  $category,
            'code'  =>  $code
        ]);
    }

    public function add()
    {
        $code   =   input('msg'); 
        $cid       =   input('cid');
        $name      =   input('name');
        $sort      =  input('sort');
        $category      =   db('category')->order('id asc')->paginate(12);
        //var_dump($code);
        return view('add',
            [
                'code'  =>  $code,
                'cid'   =>  $cid,
                'name'  =>  $name,
                'category'  =>  $category,
                'sort'  =>  $sort
            ]);
    }

    public function update()
    {
        $code   =   input('msg');
        $data   =   db('banner')->where('id',input('id'))->find();
        $cid       =   input('cid');
        $name      =   input('name');
        $sort      =  input('sort');
        $category      =   db('category')->order('id asc')->paginate(12);
        return view('update',
            [
                'data'  =>  $data,
                'code'  =>  $code,
                'cid'   =>  $cid,
                'name'  =>  $name,
                'c'   =>  $data['cid'],
                'category'  =>  $category,
                'sort'  =>  $sort
            ]);
    }

    public function del()
    {   
        $dt   =   db('banner')->where('id',input('id'))->find();
        $data   =   db('banner')->where('id',input('id'))->delete();
        return redirect('/index/banner/index/id/'.$dt['cid'],['code'=>1,'msg'=>'删除成功']);
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
                    $insert['linkurl']  =   input('linkurl');
                    $insert['cid']  =   input('cid');
                    $insert['name']  =   input('name');
                    $insert['sort']  =  input('sort');
                    if(db('banner')->insert($insert)!==false)
                    {
                        return redirect('banner/index',['id'=>$insert['cid']]);
                    }else{
                        unlink($url);
                        return redirect('banner/add',['code'=>0,'msg'=>'添加失败']);
                    }
                }else{
                    unlink($url);
                    return redirect('banner/add',['code'=>0,'msg'=>'请上传图片']);
                }
            }else{

                return redirect('banner/add',['code'=>0,'msg'=>'上传失败'.$file->getError()]);
            }
        }else{
            return redirect('banner/add',['code'=>0,'msg'=>'图片未上传']);
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
                    return redirect('banner/add',['code'=>0,'msg'=>'请上传图片']);
                }
            }else{

                return redirect('banner/add',['code'=>0,'msg'=>'上传失败'.$file->getError()]);
            }
        }
        $insert['content']  =   input('content');
        $insert['linkurl']  =   input('linkurl');
        $insert['cid']  =   input('cid');
        $insert['name']  =   input('name');
        $insert['sort']  =  input('sort');
        if(db('banner')->where('id',input('id'))->update($insert)!==false)
        {
            return redirect('banner/index',['code'=>1,'msg'=>'添加成功']);
        }else{
            unlink($url);
            return;
        }
    }

}