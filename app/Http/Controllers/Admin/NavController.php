<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Nav\Store;
use App\Http\Requests\Nav\Update;
use App\Models\Nav;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;

class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nav::withTrashed()->orderBy('sort')->get();
        $assign = compact('data');
        return view('admin.nav.index', $assign);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navs = Nav::all();
        $assign = compact('navs');
        return view('admin.nav.create', $assign);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, Nav $navModel)
    {
        $data = $request->except('_token');
        $data['sort'] = is_null($data['sort']) ? 0 : $data['sort'];
        $data['pid'] = is_null($data['pid']) ? 0 : $data['pid'];
        $result = $navModel->storeData($data);
        if ($result) {
            // 更新缓存
            Cache::forget('common:nav');
        }
        return redirect('admin/nav/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $navs = Nav::all();
        $data = Nav::find($id);
        $assign = compact('navs', 'data');
        return view('admin.nav.edit', $assign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id, Nav $navModel)
    {
        $map = [
            'id' => $id
        ];
        $data = $request->except('_token');
        $data['sort'] = is_null($data['sort']) ? 0 : $data['sort'];
        $result = $navModel->updateData($map, $data);
        if ($result) {
            // 更新缓存
            Cache::forget('common:nav');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Nav $navModel)
    {
        $map = [
            'id' => $id
        ];
        $result = $navModel->destroyData($map);
        if ($result) {
            // 更新缓存
            Cache::forget('common:nav');
        }
        return redirect('admin/nav/index');
    }

    /**
     * 分类排序
     *
     * @param Request $request
     * @param Nav $navModel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sort(Request  $request, Nav $navModel)
    {
        $data = $request->except('_token');
        $sortData = [];
        foreach ($data as $k => $v) {
            $sortData[] = [
                'id' => $k,
                'sort' => $v
            ];
        }
        $result = $navModel->updateBatch($sortData);
        if ($result) {
            // 更新缓存
            Cache::forget('common:nav');
        }
        return redirect()->back();
    }

    /**
     * 恢复删除的分类
     *
     * @param          $id
     * @param Nav $navModel
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore($id, Nav $navModel)
    {
        $map = [
            'id' => $id
        ];
        $result = $navModel->restoreData($map);
        if ($result) {
            // 更新缓存
            Cache::forget('common:nav');
        }
        return redirect('admin/nav/index');
    }

    /**
     * 彻底删除分类
     *
     * @param          $id
     * @param Nav $navModel
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function forceDelete($id, Nav $navModel)
    {
        $map = compact('id');
        $navModel->forceDeleteData($map);
        return redirect('admin/nav/index');
    }
}
