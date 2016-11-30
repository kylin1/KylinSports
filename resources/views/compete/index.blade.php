@extends('layout.layouts')

@section('title','竞赛信息')

@section('style')

@stop

@section('left-menu')
    @include('menu.compete')
@stop

@section('top-left-menu')
    <ul class="nav mynav-top navbar-nav navbar-left">
        <li class="active" my-target="section-all-compete">
            <a href="{{ url('/competition') }}">
                所有竞赛
            </a>
        </li>

        <li my-target="section-my-compete">
            <a href="{{ url('/my-competition') }}">
                我的竞赛
            </a>
        </li>

        <li my-target="section-new-compete">
            <a href="{{ url('/competition/create') }}">
                新增竞赛
            </a>
        </li>
    </ul>
@stop

@section('content')
    <!--我的竞赛列表-->
    <div class="container-fluid container-sharing">

        <section id="section-all-compete">

            <!--所有竞赛列表-->
            <h2>竞赛列表</h2>
            <div class="row">

                {{--遍历返回的所有竞赛信息--}}
                @foreach($competeList as $compete)

                    {{--每一个竞赛信息--}}
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4 class="title">{{ $compete->name }}</h4>
                                        <p class="category">{{ $compete->target }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-info"
                                                onclick=window.location.href="{{ url('/competition/'.$compete->id) }}";>详情
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-success">加入</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>人数</th>
                                    <th>类型</th>
                                    <th>奖励</th>
                                    <th>距离开始时间</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ $compete->number }}</td>
                                        <td>{{ $compete->type }}</td>
                                        <td>{{ $compete->bonus }}</td>
                                        <td>{{ $compete->endAt }}</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

    </div>

@stop
