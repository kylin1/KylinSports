@extends('layout.layouts')

@section('title','好友信息')

@section('style')

    <link href= {{ asset('css/cloud-tag.css') }} rel="stylesheet"/>

@stop

@section('left-menu')
    @include('menu.social')
@stop

@section('top-left-menu')

    <ul class="nav mynav-top navbar-nav navbar-left">
        <li class="active" my-target="section-friends" id="li-friends">
            <a href="{{ url('/friend') }}">
                好友
            </a>
        </li>
        <li my-target="section-groups">
            <a href="{{ url('/group') }}">
                群组
            </a>
        </li>
        <li my-target="section-write-post">
            <a href="{{ url('/write-post') }}">
                发表动态
            </a>
        </li>
    </ul>
@stop

@section('content')
    <div class="container-fluid container-sharing">

        <section id="section-friends">
            <div class="row">
                <div class="col-md-7">
                    <h2>好友动态</h2>

                    <div class="row">
                        <div class="col-sm-12">
                            @foreach($friendPost as $post)
                            <div class="card card-close">
                                <!--个人信息行-->
                                <div class="row">
                                    <!--第一列头像-->
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <img src= "{{ asset('img/avatar.jpg') }}" alt="Circle Image"
                                             class="img-circle img-responsive">
                                    </div>

                                    <!--第二列名字+时间-->
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <h5>{{ $post->userid }}</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                    {{ $post->created_at }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--动态内容行-->
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>最新动态: {{ $post->content }}</h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-1">
                    <h2>我的好友</h2>
                    <div class="row">
                        <div class="card">
                            <div class="card-content table-responsive table-full-width">
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>姓名</th>
                                    <th>性别</th>
                                    <th>爱好</th>
                                    <th>等级</th>
                                    </thead>
                                    <tbody>

                                    @foreach($friendList as $friend)
                                    <tr>
                                        <td>{{ $friend->name }}</td>
                                        <td>{{ $friend->sex }}</td>
                                        <td>{{ $friend->hobby }}</td>
                                        <td class="text-primary">T{{ $friend->sportrank }}</td>
                                    </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>

                    </div>

                    <h2>好友关键字</h2>
                    <div class="row">

                        <ul id="cloud">
                            <li><a href="#" class="tag6">游泳</a></li>
                            <li><a href="#" class="tag8">健身房</a></li>
                            <li><a href="#" class="tag10">跑步</a></li>
                            <li><a href="#" class="tag2">登山</a></li>

                            <li><a href="#" class="tag4">极限运动</a></li>
                            <li><a href="#" class="tag6">自行车</a></li>
                            <li><a href="#" class="tag3">减脂</a></li>
                            <li><a href="#" class="tag8">羽毛球</a></li>
                            <li><a href="#" class="tag2">KEEP</a></li>
                            <li><a href="#" class="tag10">健走</a></li>

                            <li><a href="#" class="tag6">咕咚运动</a></li>
                            <li><a href="#" class="tag1">小米手环</a></li>
                            <li><a href="#" class="tag8">bond</a></li>
                            <li><a href="#" class="tag2">南京马拉松</a></li>

                        </ul>

                    </div>
                </div>
            </div>


        </section>


    </div>
@stop




@section('javascript')

@stop




