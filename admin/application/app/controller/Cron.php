<?php
namespace app\app\controller;

use think\Db;
use think\Controller;

class Cron extends Controller
{
    public function _initialize()
    {
        // 引入CURL类
        require_once EXTEND_PATH . 'HttpCurl.php';

    }

    public function index()
    {
        // 欢迎
        return json_encode('欢迎访问！', JSON_UNESCAPED_UNICODE);
    }

    /**
     * 获取平台及主播列表【需要设为定时任务】
     *
     * @return mixed
     */
    public function platformsAndAnchors()
    {
        // 请求首页
        $url = 'https://api.ppjfu.com/v1_0_1/platform/getPlatfromsAndAnchors';
        $type = 'POST';
        $result = \HttpCurl::request($url, $type, []);
		
        if ($result[0] != 200){
            return '请求失败!';
        }

        // 平台及主播列表
        $list = json_decode($result[1], true);
        if (! isset($list['result']) || !is_array($list['result'])){
            return $list['message'];
        }
        foreach ($list['result'] as $key => &$value){
            $value['created_at'] = time();
            $value['updated_at'] = time();
        }

        // 数据入库
        if (Db::table('ap_platforms_and_anchors')->insertAll($list['result'])){
            return '获取成功';
        }else{
            return '获取失败';
        }

    }

    /**
     * 获取平台列表【app需要的接口，这里给的是获取数据的样例】
     *
     * @return mixed
     */
    public function platforms()
    {
		$time = time();
        $platforms = Db::query("SELECT `name`,`key`,logo,nums FROM ap_platforms_and_anchors  WHERE ({$time} - created_at) < 24 * 3600 ORDER BY created_at DESC LIMIT 0,15");
        return json_encode($platforms);
		
    }

    /**
     * 获取主播列表【app需要的接口，这里给的是获取数据的样例】
     *
     * @return mixed
     */
    public function anchors()
    {
        $platform = input('platform');
        $anchors = Db::query("SELECT anchors FROM ap_platforms_and_anchors WHERE `key` = '{$platform}' ORDER BY created_at DESC LIMIT 0,1");

        // $anchors[0]是一个json串
        return $anchors[0]['anchors'];
    }

}
