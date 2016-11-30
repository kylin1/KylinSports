@extends('layout.layouts')

@section('title','群组')

@section('style')

@stop

@section('left-menu')
    @include('menu.social')
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

                    @foreach($myGroup as $group)
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-close">
                                <!--信息行-->
                                <div class="row">
                                    <!--第一列头像-->
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <img src= "{{ asset('img/tim_80x80.png') }}" alt="Circle Image"
                                             class="img-circle img-responsive img-small">
                                    </div>

                                    <!--第二列成员+时间-->
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>团队名称: {{ $group->name }}</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                   团队人数: {{ $group->membernum }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>{{ $group->introduction }}</h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@stop




@section('javascript')


@stop




