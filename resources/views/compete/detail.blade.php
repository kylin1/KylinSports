@extends('layout.layouts')

@section('title','竞赛详情')

@section('top-left-menu')
<ul class="nav mynav-top navbar-nav navbar-left">
    <li>
        <a  href="{{ url('/competition') }}">
            返回
        </a>
    </li>
</ul>
@stop

@section('left-menu')
    @include('menu.compete')
@stop

@section('content')
    <div class="container-fluid container-sharing">

        <section id="section-compete-detail">
            <h2>竞赛详情</h2>
            <!--列表信息-->
            <div class="row">
                <div class="col-md-10">

                    <div class="card">
                        <!--时间与奖金信息-->
                        <div class="card-content">
                            <!--第一行:时间与奖金-->
                            <div class="row">
                                <!--第一列时间-->
                                <div class="col-md-4">
                                    <!--第一行图标-->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="material-icons">today</i>
                                        </div>
                                        <div class="col-md-10">
                                            <h6>比赛时间</h6>
                                        </div>
                                    </div>
                                    <!--第二行信息-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>离比赛开始 13小时 17分 51秒</p>
                                            <p> {{ $compete->startAt }}
                                                至 {{ $compete->endAt }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!--第二列奖金-->
                                <div class="col-md-4">
                                    <!--第一行图标-->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="material-icons">attach_money</i>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>奖金</h6>
                                        </div>
                                    </div>
                                    <!--第二行信息-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>总奖金 {{ $compete->bonus }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!--第三列规则-->
                                <div class="col-md-4">
                                    <!--第一行图标-->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="material-icons">library_books</i>
                                        </div>
                                        <div class="col-md-10">
                                            <h6>详细规则</h6>
                                        </div>
                                    </div>
                                    <!--第二行信息-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>{{ $compete->rulemore }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <h2>成员信息</h2>
            <!--成员信息-->
            <div class="row">
                <div class="col-md-10">

                    @foreach ($participants as $oneUser)
                    <!--成员一个-->
                    <div class="card card-close">
                        <div class="card-content">
                            <div class="row">
                                <!--头像区域-->
                                <div class="col-md-1">
                                    <i class="material-icons">person_pin</i>
                                </div>

                                <!--步数信息-->
                                <div class="col-md-8">
                                    <h4>{{ $oneUser->userid }}</h4>
                                    <div class="progress progress-line-primary">
                                        <div class="progress-bar" role="progressbar"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $oneUser->percent }}%;">
                                            <span>{{ $oneUser->current }}公里</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                {!! $participants->render() !!}
            </div>

        </section>

    </div>
@stop

