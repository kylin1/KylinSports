@extends('layout.layouts')

@section('title','发表动态')

@section('style')
    <!--文本编辑器-->
    <!--引入wangEditor.css-->
    <link rel="stylesheet" type="text/css" href={{ asset('editor/css/wangEditor.min.css') }}>
@stop


@section('top-left-menu')

    <ul class="nav mynav-top navbar-nav navbar-left">
        <li my-target="section-friends" id="li-friends">
            <a href="{{ url('/friend') }}">
                好友
            </a>
        </li>
        <li my-target="section-groups">
            <a href="{{ url('/group') }}">
                群组
            </a>
        </li>
        <li class="active" my-target="section-write-post">
            <a href="{{ url('/write-post') }}">
                发表动态
            </a>
        </li>
    </ul>
@stop

@section('content')
    <div class="container-fluid container-sharing">

        <section id="section-write-post">
            <div class="row">
                <div class="col-md-10">
                    <h2>请编写动态</h2>
                    <div id="div1" style="height: 300px;">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1" style="margin-right:20px;">
                    <button id="post" class="btn btn-success">发表</button>
                </div>
                <div class="col-md-1" id="cancel-post">
                    <button class="btn btn-default">取消</button>
                </div>
            </div>

        </section>


    </div>
@stop

@section('javascript')
    <!--引入jquery和wangEditor.js-->   <!--注意：javascript必须放在body最后，否则可能会出现问题-->
    <script src= {{ asset('editor/js/lib/jquery-1.10.2.min.js') }}></script>
    <script src= {{ asset('editor/js/wangEditor.min.js') }}></script>

    <!--这里引用jquery和wangEditor.js-->
    <script type="text/javascript">
        var editor = new wangEditor('div1');
        editor.create();

        $('#post').click(function () {
            // 获取编辑器区域完整html代码
            var input = editor.$txt.html();

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
            });

            $.ajax({
                type: 'POST',
                url: '/post',
                data: {input: input},

                success: function () {
                    alert('发表成功!');
                    window.location.href = '/friend';
                },

                error: function(data){
                    alert(data)
                }
            });
        });
    </script>


@stop