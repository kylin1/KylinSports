@extends('sports.layouts')

@section('title','today')

@section('style')

@stop


@section('content')
    <div class="container-fluid">

        <h2>
            今日数据
        </h2>

        <div class="row">

            <div class="col-md-7">
                <div class="col-md-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">access_time</i>
                        </div>
                        <div class="card-content">
                            <p class="category">活动时间</p>
                            <h3 class="title">
                                {{ $today->time[0] }}<small>h</small>
                                {{ $today->time[1] }}<small>m</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i>
                                5分钟前更新
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-stats">
                        <!--头部-->
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">directions_walk</i>
                        </div>
                        <!--图片-->
                        <div class="card-content">
                            <p class="category">行走步数</p>
                            <h3 class="title">{{ $today->step }}</h3>
                        </div>
                        <!--下标-->
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                <a href="#pablo">暂未达到目标</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="material-icons">place</i>
                        </div>
                        <div class="card-content">
                            <p class="category">运动距离</p>
                            <h3 class="title">{{ $today->distance }}<small>km</small></h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                <a href="#pablo">暂未达到目标</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">whatshot</i>
                        </div>
                        <div class="card-content">
                            <p class="category">消耗能量</p>
                            <h3 class="title">{{ $today->energy }}<small>卡</small></h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                <a href="#pablo">暂未达到目标</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-1">
                <!--右侧:好友排名-->
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">好友排名</h4>
                        <p class="category"></p>
                    </div>

                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                            <th>好友</th>
                            <th>步数</th>
                            <th>排名</th>
                            </thead>
                            <tbody>

                            @foreach($today->friendList as $friend=>$point)
                                <tr>
                                    <td>{{ $friend }}</td>
                                    <td>{{ $point[0] }}</td>
                                    <td>{{ $point[1] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>

@stop


@section('javascript')

@stop
