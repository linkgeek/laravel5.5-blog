<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\Comment\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;

class ResourceController extends Controller
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function index()
	{
        $assign = [
            'category_id' => 'index',
            'tagName' => ''
        ];
		return view('home.index.index', $assign);
	}

	public function show() {
        $assign =[
            'category_id' => 'download',
            //'chat' => $chat,
            'title' => '在线工具',
        ];
        return view('home.index.download', $assign);
    }

    /**
     * 下载资源
     * @param Request $request
     */
    public function download(Request $request)
    {
        $filename = url('uploads/avatar/default.jpg');
        $file = file_get_contents($filename);
        header('content-disposition:attachment;filename=' . basename($filename));
        echo $file;
    }

    public function down() {
        $url = $_GET['img'];
        //$url = 'http://120.25.227.106:8081/uploads/article/default1.jpg';
        $filename = basename($url);
        $headers = get_headers($url, 1);
        $fileSize = $headers['Content-Length'];
        header('Content-Type: application/octet-stream');
        header('Accept-Ranges: bytes');
        header('Content-Length: ' . $fileSize);
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        readfile($url);
        exit;
    }

    public function downloadFile(Request $request)
    {
        // 绝对路径
        $file_path = 'uploads/avatar/default.jpg';
        if (!file_exists($file_path)) {
            return '资源不存在';
        }
        $file_info = pathinfo($file_path);
        $dirname = $file_info['dirname'];
        $file_name = $file_info['basename'];
        //$dirname = 'public/images';
        //dd(realpath(base_path('public/images')));
        dd($dirname, base_path($dirname), realpath(base_path($dirname)), 555);
        // "/data/www/pro/laravel5.5-blog/public/images"

        dd($dirname, base_path($dirname), realpath(base_path("uploads/avatar/")), 666);

        $base_path = base_path($dirname);
        $real_path = realpath($base_path) . '/' . $file_name;
        p($real_path);die;

        dd(base_path('public/images/home/'), realpath(base_path('public/images/home/')));die;
        $real_path1 = realpath(base_path($file_path)).'/alipay.jpg';
        $real_path2 = realpath(base_path('public/images/home/')).'/alipay.jpg';
        dd($fileInfo, $real_path1, $real_path2);die;
        // /data/www/pro/laravel5.5-blog/public/images/home/alipay.jpg
        return response()->download($real_path);
    }
}
