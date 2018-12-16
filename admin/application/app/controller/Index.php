<?php
namespace app\app\controller;
use app\XDeode;
use think\Controller;
class Index extends Controller
{
	function getIP() {
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        }
        elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        }
        elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        }
        elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');

        }
        elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
	
    public function qudao()
    {
        $uid    =   base64_decode(input('uid'));
		$sid	=	input('uid');
        $num    =   db('user')->where('id',$uid)->count();
        if($num>0)
        {
            $ip =   $this->getIP();
            $ipnum    =   db('share')->where('ip',$ip)->count();
            if($ipnum=='0')
            {
                db('user')->where('id',$uid)->setInc('sign');
				db('share')->insert(['uid'=>$uid,'ip'=>$ip]);
            }
			$data   =   db('user')->where('id',$uid)->find();
			if($data['power']=='2')
			{
				$share_ma=db('user')->where('id',$data['parentid'])->value('share_ma');	
			}else{
				$share_ma=$data['share_ma'];
			}
			
        }else{
			// $share_ma=	db('user')->where('power','0')->value('share_ma');
			if($uid==null)
			{
				$share_ma=	'000001';
			}
		}
        return view('qudao',[
		'code'=>$share_ma,'uid'=>$uid,'sid'=>$data['parentid']]);
    }
 	public function m()
    {
        $uid    =   base64_decode(input('uid'));
		$sid	=	input('uid');
        $num    =   db('user')->where('id',$uid)->count();
        if($num>0)
        {
            $ip =   $this->getIP();
            $ipnum    =   db('share')->where('ip',$ip)->count();
            if($ipnum=='0')
            {
                db('user')->where('id',$uid)->setInc('sign');
				db('share')->insert(['uid'=>$uid,'ip'=>$ip]);
            }
			$data   =   db('user')->where('id',$uid)->find();
			if($data['power']=='2')
			{
				$share_ma=	'注册邀请码：'.db('user')->where('id',$data['parentid'])->value('share_ma');	
			}else{
				$share_ma=	'注册邀请码：'.$data['share_ma'];
			}
			
        }else{
			// $share_ma=	db('user')->where('power','0')->value('share_ma');
			if($uid==null)
			{
				$share_ma=	'使用手机自带浏览器下载！';
			}
		}
        return view('m',[
		'share'=>$share_ma,'sid'=>$sid]);
    }
	
	public function index()
    {
        $uid    =   base64_decode(input('uid'));
        $num    =   db('user')->where('id',$uid)->count();
		$sid	=	input('uid');
		
        if($num>0)
        {
            $ip =   $this->getIP();
            $ipnum    =   db('share')->where('ip',$ip)->count();
            if($ipnum=='0')
            {
                db('user')->where('id',$uid)->setInc('sign');
				db('share')->insert(['uid'=>$uid,'ip'=>$ip]);
            }
			$data   =   db('user')->where('id',$uid)->find();
			if($data['power']=='2')
			{
				$share_ma=	'注册邀请码：'.db('user')->where('id',$data['parentid'])->value('share_ma');	
			}else{
				$share_ma=	'注册邀请码：'.$data['share_ma'];
			}
			
        }else{
			// $share_ma=	db('user')->where('power','0')->value('share_ma');
			if($uid==null)
			{
				$share_ma=	'使用手机自带浏览器下载！';
			}
		}
        return view('index',[
		'share'=>$share_ma,'sid'=>$sid]);
    }
  
  public function jiexi()
    {
		$url	=	input('url');
		
        return view('jiexi',[
		'url'=>$url]);
    }
  
   public function mm()
    {
		$url	=	input('url');
		
        return view('mm',[
		'url'=>$url]);
    }
	
	public function ios()
    {
        return view('ios');
    }


}
