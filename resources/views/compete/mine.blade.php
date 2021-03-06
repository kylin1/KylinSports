@extends('layout.layouts')

@section('title','我的竞赛')

@section('style')

@stop

@section('left-menu')
    @include('menu.compete')
@stop

@section('top-left-menu')
    <ul class="nav mynav-top navbar-nav navbar-left">
        <li my-target="section-all-compete">
            <a href="{{ url('/competition') }}">
                所有竞赛
            </a>
        </li>

        <li class="active" my-target="section-my-compete">
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

        <section id="section-my-compete">
            <h2>我发起的</h2>
            <section id="my-own-compete">
                @foreach($myOwnCmpt as $myOwn)
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="title">{{ $myOwn->name }}</h4>
                                            <p class="category">目标:{{ $myOwn->target }}</p>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-info" onclick=window.location.href="{{ url('/update-compete/'.$myOwn->id) }}">修改</button>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-warning" onclick="cancel({{ $myOwn->id }})">取消</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                        <th>人数</th>
                                        <th>类型</th>
                                        <th>奖励</th>
                                        <th>开始时间</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ $myOwn->currentNum }}/{{ $myOwn->number }}</td>
                                            <td>{{ $myOwn->type }}</td>
                                            <td>{{ $myOwn->bonus }}</td>
                                            <td>{{ $myOwn->startAt }}</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
            {!! $myOwnCmpt->render() !!}


            <h2>我参与的</h2>
            @foreach($myInCmpt as $myIn)
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">{{ $myIn->name }}</h4>
                                    <p class="category">目标:{{ $myIn->target }}</p>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info"
                                            onclick=window.location.href="{{ url('/competition/'.$myIn->id) }}";>详情</button>
                                </div>
                                <div class="col-md-2">
                                    <button id="btn-withdraw" class="btn btn-warning"
                                            onclick="withdraw( {{ $myIn->id }} )">退出</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>奖励</th>
                                <th>状态</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $myIn->currentNum }}/{{ $myIn->number }}</td>
                                    <td>{{ $myIn->type }}</td>
                                    <td>{{ $myIn->bonus }}</td>
                                    <td>即将开始</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <h2>历史竞赛</h2>
            <section id="history-compete">
                @foreach($cmptHistory as $oneHistory)
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="title">{{ $oneHistory->name }}</h4>
                                            <p class="category">目标:{{ $oneHistory->target }}</p>
                                        </div>
                                        <div class="col-md-2 col-md-offset-2">
                                            <button class="btn btn-info"
                                                    onclick=window.location.href="{{ url('/competition/'.$oneHistory->id) }}";>详情</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                        <th>人数</th>
                                        <th>类型</th>
                                        <th>时间</th>
                                        <th>收获奖金</th>
                                        <th>是否获胜</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ $oneHistory->currentNum }}/{{ $oneHistory->number }}</td>
                                            <td>{{ $oneHistory->type }}</td>
                                            <td>{{ $oneHistory->startAt }}至{{ $oneHistory->endAt }}</td>
                                            <td>1000</td>
                                            <td>是</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
            {!! $cmptHistory->render() !!}

        </section>


    </div>

@stop

@section('javascript')
    <script>
        function withdraw(cmptid){
            if(confirm("确认退出竞赛?,这样就不能获得奖励了哟~")){
                window.location.href="/withdraw-compete/"+cmptid;
            }
        }

        function cancel(cmptid){
            if(confirm("确认取消本竞赛?,参与竞赛的所有用户都会收到通知.")){
                window.location.href="/cancel-compete/"+cmptid;
            }
        }
    </script>
@stop

