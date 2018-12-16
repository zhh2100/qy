<?php
namespace app\index\controller;

use think\Controller;

class Dianka extends Controller
{

    public function _initialize()
    {
        $id         =   session('user');

        if(!$id)
        {
            $this->redirect('login/login/index');
        }
    }
    public function index()
    {

        $dian   =   input('dian');
        if(empty($dian))
        {
            $dian   =   [];
        }
        return view('index',[
            'dian'=>$dian
        ]);


    }
    public function ylog()
    {
        if(session('power')=='0')
        {
            $where['y'] =   '0';
        }else{
            $where['uid']   =   session('user');
            $where['y'] =   '0';
        }
        if(input('user'))
        {
            $user   =    input('user');
            $where['dianka']    =   ['like',"%$user%"];
        }

        if(input('start') && input('end'))
        {

            $where['ctime']       =  ['between',strtotime(input('start').' 00:00:00').','.strtotime(input('end').' 00:00:00')];
        }else{


            if(input('start'))
            {
                $where['ctime']          =  ['>',strtotime(input('start').' 00:00:00')];
            }

            if(input('end'))
            {
                $where['ctime']          =  ['<',strtotime(input('end').' 00:00:00')];
            }
        }


        if(input('day'))
        {
            $where['name']          =  input('day');
        }

        $list   =   db('dianka')->where($where)->paginate(20);
        return view('ylog',[
            'start' =>  input('start'),
            'day' =>  input('day'),
            'end' =>  input('end'),
            'user' =>  input('user'),
            'list'=>$list
        ]);


    }



    public function slog()
    {

        if(session('power')=='0')
        {
            $where['y'] =   '1';
        }else{
            $where['uid']   =   session('user');
            $where['y'] =   '1';
        }
        if(input('user'))
        {
            $user   =    input('user');
            $where['dianka']    =   ['like',"%$user%"];
        }
        $list   =   db('dianka')->where($where)->paginate(20);
        return view('slog',[
            'list'=>$list
        ]);


    }

    public function sheng()
    {
        if(input('fen') && input('ctime'))
        {
            $fen    =   ceil(input('fen'));
            $ctime  =   input('ctime');
            $type   =   '0';
            switch ($ctime)
            {
                case 0.1;
                    $time  =   7*60*60*24;
                    $name   =   '七天';
                    break;
                case 0.3;
                    $time  =   30*60*60*24;
                    $name   =   '一个月';
                    break;
                case 0.6;
                    $time  =   90*60*60*24;
                    $name   =   '三个月';
                    break;
                case 1.2;
                    $time  =   180*60*60*24;
                    $name   =   '六个月';
                    break;
               case 1.8;
                    $time  =   365*60*60*24;
                    $name   =   '一年';
                    break;
                case 5;
                    $type   =   1;
                    $time   =   0;
                    $name   =   '永久';
                    break;
            }
            $dian   =   '';
            if(session('power')=='0')
            {
                for ($i=0;$i<$fen;$i++)
                {

                    $data =  randstring(10);
                    $insert['uid']      =   session('user');
                    $insert['dianka']   =   $data;
                    $insert['ctime']    =   time();
                    $insert['y']        =   0;
                    $insert['yid']      =   '';
                    $insert['time']     =   $time;
                    $insert['type']     =   $type;
                    $insert['name']     =   $name;

                    db('dianka')->insert($insert);
                    $dian.=   $data."<br><hr>";
                }
            }else{
                $money  =   db('user')->where('id',session('user'))->value('money');
                if($money<$fen*$ctime)
                {
                    $arr    =   ['code'=>0,'dian'=>'余额不足'];
                    return json($arr);
                }

                $dian   =   '';
                for ($i=0;$i<$fen;$i++)
                {
                    $data =   randstring(10);
                    $insert['uid']      =   session('user');
                    $insert['dianka']   =   $data;
                    $insert['ctime']    =   time();
                    $insert['y']        =   0;
                    $insert['yid']      =   '';
                    $insert['time']     =   $time;
                    $insert['type']     =   $type;
                    $insert['name']     =   $name;
                    db('dianka')->insert($insert);
                    $dian.=   $data."<br><hr>";
                }
                db('user')->where('id',session('user'))->update(['money'=>$money-$fen*$ctime]);
            }
        }else{
            $dian   =   '';
        }
        if(empty($code))
        {
            $arr    =   ['code'=>1,'dian'=>$dian];
        }else{
            $arr    =   ['code'=>0,'dian'=>$dian];
        }
        return json($arr);
    }


}
