<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;

class NoticeController extends Controller
{
    // 公告列表
    public function index(Notice $notice){
    	$notices = $notice->orderBy('created_at','desc')->withTrashed()->paginate(10);
    	return view('admin.notice.index', compact('notices'));
    }

    // 添加页面
    public function create()
    {
    	return view('admin.notice.create');
    }

    // 添加操作
    public function store(Request $request, Notice $notice)
    {
    	$data = $request->only(['content','url']);
    	$result = $notice->storeData($data);
    	if ($result) {
            // 更新缓存
            Cache::forget('common:notices');
        }
    	return redirect('admin/notice/index');
    }

    // 编辑公告
    public function edit($id)
    {
    	$data = Notice::find($id);
    	return view('admin.notice.edit',compact('data'));
    }
    // 编辑操作
    public function update(Notice $notice)
    {
    	$notice->url = request('url');
        $notice->content = request('content');
        $result = $notice->save();
        if ($result) {
            // 更新缓存
            Cache::forget('common:notices');
        }
        return redirect('admin/notice/index');
    }

    // 删除公告
    public function destroy($id, Notice $notice)
    {
    	$map = [
    		'id'=>$id
    	];
    	$result = $notice->destroyData($map);
        if ($result) {
            // 更新缓存
            Cache::forget('common:notices');
        }
    	return redirect('admin/notice/index');
    }

    // 恢复公告
    public function restore($id, Notice $notice)
    {
    	$map = compact('id');
    	$result = $notice->restoreData($map);
        if ($result) {
            // 更新缓存
            Cache::forget('common:notices');
        }
    	return redirect('admin/notice/index');
    }

    // 彻底删除
    public function forceDelete($id, Notice $notice)
    {
    	$map = [
    		'id'=>$id
    	];
    	$result = $notice->forceDeleteData($map);
        if ($result) {
            // 更新缓存
            Cache::forget('common:notices');
        }
    	return redirect('admin/notice/index');
    }

    // 显示  隐藏
    public function changeStatus(Request $request)
    {
        $status = $request->input('code');
        $id = $request->input('id');

        if($status==1){
            $code = 0;           
        }else{
            $code = 1;
        }

        $notice = Notice::withTrashed()->find($id);
        $notice->status = $code;
        $result = $notice->save();
        if ($result) {
            // 更新缓存
            Cache::forget('common:notices');
        }

        //return ajax_return(200, ['code'=>$code]);
    }
}
