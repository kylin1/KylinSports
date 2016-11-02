@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">后台首页</div>

        <div class="panel-body">

            {{--新增的超链接--}}
        <a href="{{ url('admin/pages/create') }}" class="btn btn-lg btn-primary">新增</a>

            {{--遍历所有数据--}}
          @foreach ($pages as $page)
            <hr>
            <div class="page">
              <h4>{{ $page->title }}</h4>
              <div class="content">
                <p>
                  {{ $page->body }}
                </p>
              </div>
            </div>
            {{--编辑的超链接--}}
            <a href="{{ url('admin/pages/'.$page->id.'/edit') }}" class="btn btn-success">编辑</a>

            {{--删除的超链接 --}}
            <form action="{{ url('admin/pages/'.$page->id) }}" method="POST" style="display: inline;">
                {{--使用delete方法--}}
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger">删除</button>
            </form>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection