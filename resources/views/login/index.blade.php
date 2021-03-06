<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href= {{ asset('img/apple-icon.png') }}>
    <link rel="icon" type="image/png" href= {{ asset('img/favicon.ico') }}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>kylin运动</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href= {{ asset('css/open-sans.css') }} rel="stylesheet"/>

    <link href= {{ asset('css/pe-icon-7-stroke.css') }} rel="stylesheet" />

    <link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet" />
    <link href= {{ asset('css/landing-page.css') }} rel="stylesheet"/>



</head>
<body class="landing-page landing-page1">
<nav class="navbar navbar-transparent navbar-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle"
                    data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a href="#">
                <div class="logo-container">
                    <div class="logo">
                        <img src= {{ asset('img/new_logo.png') }} alt="Creative Tim Logo">
                    </div>
                    <div class="brand">
                        kylin sports
                    </div>
                </div>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="example" >
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        体验
                    </a>
                </li>
                <li>
                    <a href="{{ url('/login') }}">
                        登录
                    </a>
                </li>
                <li>
                    <a href="{{ url('/register') }}">
                        注册
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<div class="wrapper">
    <div class="parallax filter-gradient blue" data-color="blue">
        <div class="parallax-background">
            <img class="parallax-background-image" src= {{ asset('img/template/bg3.jpg') }}>
        </div>
        <div class= "container">
            <div class="row">
                <div class="col-md-5 hidden-xs">
                    <div class="parallax-image">
                        <img class="phone" src= {{ asset('img/template/iphone3.png') }} style="margin-top: 20px"/>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="description">
                        <h2>Kylin Sports</h2>
                        <br>
                        <h5>kylin 是一个运动社交网站，独树一帜的互联网运动品牌，全国最大的全民运动社交平台，
                            国内颠覆用户传统运动观念的倡导者和先行者。
                            旨在帮助用户追踪自己的运动数据与健康信息,养成良好的健身习惯。</h5>
                        <br>
                        <h5>8,000,000+用户，快加入我们，一起健身玩耍<br>
                            600,000,000+公里，我们一起走过 <br>
                            25,000,000+训练人次，大家很努力，你呢？
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-features">
        <div class="container">
            <h4 class="header-text text-center">Features</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="text">
                            <h4>记录运动</h4>
                            <p>
                                各种移动设备能自动将你简单但有意义的各类动作记录下来，
                                Kylin Sports集中了移动设备上的健身记录,
                                会显示你已经完成的运动量，激励你继续努力，
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-bell"></i>
                        </div>
                        <h4>追踪健康</h4>
                        <p>进入网站的运动模块，你会看到睡眠状况和健康数据
                            每个类别对你的整体健康都起着重要作用，对网站本身而言也一样。
                            使用Kylin Sports，让你持续保持健康新生活。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-users"></i>
                        </div>
                        <h4>你不是一个人在战斗
                        </h4>
                        <p> 分享你在健身路上的苦与乐:
                            在健身中坚持下来的人，不再是孤独的灵魂；在kylin，与数百万小伙伴分享健身的苦与乐。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-no-padding">
        <div class="parallax filter-gradient blue" data-color="blue">
            <div class="parallax-background">
                <img class ="parallax-background-image" src= {{ asset('img/template/bg3.jpg') }}/>
            </div>
            <div class="info">
                <h2>快来加入吧!</h2>
                <h3>只为改变 TIME FOR CHANGE</h3>
                <a href="{{ url('/register') }}"
                   class="btn btn-neutral btn-lg btn-fill">立即注册</a>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
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
</div>

</body>
<script src= {{ asset('js/jquery-3.1.0.min.js') }} ></script>
<script src= {{ asset('js/jquery-ui-1.10.4.custom.min.js') }} ></script>
<script src= {{ asset('js/bootstrap.min.js') }} ></script>
<script src= {{ asset('js/awesome-landing-page.js') }} ></script>
</html>
