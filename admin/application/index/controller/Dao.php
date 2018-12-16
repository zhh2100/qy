<?php
namespace app\index\controller;

use think\Controller;

class Dao extends Controller
{
    public function txt()
    {
        $data   =    input('content');
        Header( "Content-type:   application/octet-stream ");
        Header( "Accept-Ranges:   bytes ");
        header( "Content-Disposition:   attachment;   filename=".date('Y-m-d H:i:s').".txt ");
        header( "Expires:   0 ");
        header( "Cache-Control:   must-revalidate,   post-check=0,   pre-check=0 ");
        header( "Pragma:   public ");
        echo str_replace('<br><hr>',"\r\n",$data);
    }


    public function excel()
    {
        $data   =    input('content');
        header( "Content-Type: application/vnd.ms-excel; name='excel'" );
        header( "Content-type: application/octet-stream" );
        header( "Content-Disposition: attachment; filename=".date('Y-m-d H:i:s').".xls" );
        header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
        header( "Pragma: no-cache" );
        header( "Expires: 0" );
        echo str_replace('<br><hr>',"\r\n",$data);
    }

    public function cexcel()
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

        header( "Content-Type: application/vnd.ms-excel; name='excel'" );
        header( "Content-type: application/octet-stream" );
        header( "Content-Disposition: attachment; filename=".date('Y-m-d H:i:s').".xls" );
        header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
        header( "Pragma: no-cache" );
        header( "Expires: 0" );
        $list   =   db('dianka')->where($where)->paginate(20);
        echo "<table>";

        foreach ($list as $value)
        {
            echo "<tr>";
            echo "<td>";
            echo $value['dianka'];
            echo "</td>";
            echo "<td>";
            echo $value['name'];
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";


    }

    public function ctxt()
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
        Header( "Content-type:   application/octet-stream ");
        Header( "Accept-Ranges:   bytes ");
        header( "Content-Disposition:   attachment;   filename=".date('Y-m-d H:i:s').".txt ");
        header( "Expires:   0 ");
        header( "Cache-Control:   must-revalidate,   post-check=0,   pre-check=0 ");
        header( "Pragma:   public ");
        $list   =   db('dianka')->where($where)->paginate(20);


        foreach ($list as $value)
        {

            echo $value['name'];
            echo '------';
            echo $value['dianka'];
            echo "\r\n";
        }


    }
}