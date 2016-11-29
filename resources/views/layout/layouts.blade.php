<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href= {{ asset('img/apple-icon.png') }}/>
    <link rel="icon" type="image/png" href= {{ asset('img/favicon.png') }}/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

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
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
          type='text/css'>

    @section('style')

    @show
</head>


<body>

<div class="wrapper">

    <!--左侧导航栏-->
    @section('left-menu')
    <div class="sidebar" data-color="purple" data-image= {{ asset('img/sidebar-1.jpg') }} >

        <!--导航左上角的图标-->
        <div class="logo">
            <a href= {{ url('/today') }} class="simple-text">
                人是会运动的苇草
            </a>
        </div>

        <!--导航栏整体-->
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li>
                    <a href= {{ url('/home') }} >
                        <i class="material-icons">today</i>
                        <p>今日</p>
                    </a>
                </li>

                <!--这是一个导航的图标-->
                <li>
                    <a href= {{ url('/sport') }} >
                        <!-- 导航图标的样式-->
                        <i class="material-icons">timeline</i>
                        <!--显示的文字-->
                        <p>运动</p>
                    </a>
                </li>

                <!--下面是其他的item代表更多的导航-->
                <li>
                    <a href= {{ url('/compete') }}>
                        <i class="material-icons">stars</i>
                        <p>竞赛</p>
                    </a>
                </li>
                <li>
                    <a href= {{ url('/social') }}>
                        <i class="material-icons">group</i>
                        <p>圈子</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    @show

    <!--主体界面-->
    <div class="main-panel">
        <!--1.导航栏-->
        <nav class="navbar navbar-primary navbar-absolute">

            <div class="container-fluid">

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
                                <a href="#">
                                    <i class="material-icons">settings</i>
                                    设置
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>

        <!--2.内容-->
        <div class="content">
            @yield('content')
        </div>
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