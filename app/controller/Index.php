<?php

namespace app\controller;
use app\BaseController;

header('Content-type:text/json');
header('Access-Control-Allow-Origin:*');
use think\facade\View;
use think\facade\Cookie;
use think\facade\Db;
use think\facade\Route;
use think\facade\Cache;
use app\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use ZipArchive;
use think\facade\Env;

class Index extends BaseController
{
    public function index()
    {
        return json('安装成功');
    }
    public function apijm($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        return json(json_decode($response, true));
    }
}
