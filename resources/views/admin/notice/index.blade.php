@extends('layouts.admin')

@section('title', '公告列表')

@section('nav', '公告列表')

@section('description', '博客公告')

@section('content')
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/notice/index') }}">公告列表</a>
        </li>
        <li>
            <a href="{{ url('admin/notice/create') }}">添加公告</a>
        </li>
    </ul>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="2%">id</th>
            <th width="42%">内容</th>
            <th width="26%">链接</th>
            <th width="12%">添加日期</th>
            <th width="10%">状态</th>
            <th width="12%">操作</th>
        </tr>
        @foreach($notices as $k => $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->content }}</td>
                <td>{{ $v->url }}</td>
                <td>{{ $v->created_at }}</td>
                <td>
                    @if( $v->status == 1 )
                        <label class="checkbox-inline">
                            <input type="checkbox" class="notice-status" onclick="changeshow(this);" data-id="{{ $v->id}}" value="1" checked>
                        </label>
                    @else
                        <label class="checkbox-inline">
                            <input type="checkbox" class="notice-status" onclick="changeshow(this);" data-id="{{ $v->id}}" value="0">
                        </label>
                    @endif                   
                </td>
                <td>
                    <a href="{{ url('admin/notice/edit', [$v->id]) }}">编辑</a>
                    |
                    @if(is_null($v->deleted_at))
                        <a href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/notice/destroy', [$v->id]) }}'">删除</a>
                    @else
                        <a href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/notice/restore', [$v->id]) }}'">恢复</a>
                        |
                        <a href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/notice/forceDelete', [$v->id]) }}'">彻底删除</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $notices->links('vendor.pagination.bjypage') }}
    </div>
@endsection

@section('js')
<script type="text/javascript">
    function changeshow(o){
        var code = $(o).attr("value");
        var id = $(o).attr("data-id");

        $.ajax({
          type: 'POST',
          data:{code: code,id: id},
          url: "{{ url('admin/notice/status') }}",
          success:function(data){
            
          }
        });
    }
</script> 
@endsection
