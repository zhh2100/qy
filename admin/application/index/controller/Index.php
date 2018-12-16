<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
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
        if(session('power')=='1')
        {
            return view('huan');
        }else{
            $tzcount  =   db('user')->where('(power = 1 or power =2) and logintime >'. strtotime(date('Y-m-d')))->count();
            $dcount   =   db('user')->where('power = 1')->count();
            $ycount   =   db('user')->where('power = 2')->count();
       	 	$fcount	=	db('dianka')->where('yid>1')->count('distinct(yid)');

            $fcount2 =   db('user')
                ->alias('u')
                ->join('timelog t','t.cid=u.id','right')
                ->where('u.power=2')
                ->count();



            return view('index',[
                'fcount' => $fcount,
                'mcount' => $ycount-$fcount,
                'tzcount' =>   $tzcount,
                'dcount'  =>    $dcount,
                'ycount'  =>    $ycount
            ]);
        }

    }


}
