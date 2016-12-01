<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href= {{ asset('img/apple-icon.png') }}/>
    <link rel="icon" type="image/png" href= {{ asset('img/favicon.png') }}/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta name="description" content="kylin 是一个运动社交网站，独树一帜的互联网运动品牌，全国最大的全民运动社交平台，
                            国内颠覆用户传统运动观念的倡导者和先行者。
                            旨在帮助用户追踪自己的运动数据与健康信息,养成良好的健身习惯。">

    <title>kylin运动-@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href= {{ asset('css/material-dashboard.css') }} rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href= {{ asset('css/demo.css') }} rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href= {{ asset('css/googleapis.css') }} rel="stylesheet"/>

    @section('style')

    @show
</head>


<body>

<div class="wrapper">

    <!--左侧导航栏-->
    @yield('left-menu')

    <!--主体界面-->
    <div class="main-panel">
        <!--1.导航栏-->
        <nav class="navbar navbar-primary navbar-absolute">

            <header class="container-fluid">

                {{--导航栏头部--}}
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Hi, kylin :)</a>
                </div>

                {{--导航栏主体--}}
                <div class="collapse navbar-collapse">

                    <!-- 顶部靠左导航 -->
                    @yield('top-left-menu')

                    <!--右侧三个小按钮-->
                    @section('top-right-menu')
                    <div class="collapse navbar-collapse" id="example-navbar-primary">

                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">3</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                    消息
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">一只麟请求加您为好友</a></li>
                                    <li><a href="#">您的今日目标还未达到,要加油啦~</a></li>
                                    <li><a href="#">竞赛:"7日100公里"即将结束,请抓紧时间上传数据</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href= {{ url('/user') }}>
                                    <i class="material-icons">account_circle</i>
                                    账户
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/logout') }}">
                                    <i class="material-icons">arrow_back</i>
                                    退出
                                </a>
                            </li>
                        </ul>
                    </div>
                    @show

                </div>

            </header>
        </nav>

        <!--2.内容-->
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!--3.页脚-->
    @section('footer')
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                            Kylin Sports
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2016, made with <i class="fa fa-heart heart"></i> by Kylin Sports
            </div>
        </div>
    </footer>
    @show

</div>

</body>

<!--   Core JS Files   -->
<script src= {{ asset('js/jquery-3.1.0.min.js') }} ></script>
<script src= {{ asset('js/bootstrap.min.js') }} ></script>
<script src= {{ asset('js/material.min.js') }} ></script>

<!--  Charts Plugin -->
<script src= {{ asset('js/chartist.min.js') }}></script>

<!--  Notifications Plugin    -->
<script src= {{ asset('js/bootstrap-notify.js') }}></script>

<!-- Material Dashboard javascript methods -->
<script src= {{ asset('js/material-dashboard.js') }}></script>


@section('javascript')

@show

</html>