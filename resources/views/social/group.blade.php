@extends('layout.layouts')

@section('title','群组')

@section('style')

@stop


@section('top-left-menu')

    <ul class="nav mynav-top navbar-nav navbar-left">
        <li my-target="section-friends" id="li-friends">
            <a href="{{ url('/friend') }}">
                好友
            </a>
        </li>
        <li class="active" my-target="section-groups">
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

        <section id="section-groups">
            <h2>我的群组</h2>
            <div class="row">
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-close">
                                <!--信息行-->
                                <div class="row">
                                    <!--第一列头像-->
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <img src= "{{ asset('img/avatar.jpg') }}" alt="Circle Image"
                                             class="img-circle img-responsive img-small">
                                    </div>

                                    <!--第二列成员+时间-->
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>减脂大本营</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                    20989 名成员
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--动态内容行-->
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>分析自己减脂期的点点滴滴,一起讨论关于减脂的困惑,在路上一起互相鼓励吧!</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-close">
                                <!--信息行-->
                                <div class="row">
                                    <!--第一列头像-->
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <img src= "{{ asset('img/avatar.jpg') }}" alt="Circle Image"
                                             class="img-circle img-responsive img-small">
                                    </div>

                                    <!--第二列成员+时间-->
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>减脂大本营</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                    20989 名成员
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--动态内容行-->
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>分析自己减脂期的点点滴滴,一起讨论关于减脂的困惑,在路上一起互相鼓励吧!</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-close">
                                <!--信息行-->
                                <div class="row">
                                    <!--第一列头像-->
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <img src= "{{ asset('img/avatar.jpg') }}" alt="Circle Image"
                                             class="img-circle img-responsive img-small">
                                    </div>

                                    <!--第二列成员+时间-->
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>减脂大本营</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                    20989 名成员
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--动态内容行-->
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>分析自己减脂期的点点滴滴,一起讨论关于减脂的困惑,在路上一起互相鼓励吧!</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop




@section('javascript')


@stop




