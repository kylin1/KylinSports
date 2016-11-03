@extends('layout.layouts')

@section('title','social7')

@section('style')
    <!--文本编辑器-->
    <!--引入wangEditor.css-->
    <link rel="stylesheet" type="text/css" href={{ asset('editor/css/wangEditor.min.css') }}>
@stop


@section('top-left-menu')

    <ul class="nav mynav-top navbar-nav navbar-left">
        <li my-target="section-friends" class="active" id="li-friends">
            <a href="#">
                好友
            </a>
        </li>
        <li my-target="section-groups">
            <a href="#">
                群组
            </a>
        </li>
        <li my-target="section-write-post">
            <a href="#">
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
                                                <h5>avatar</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                    4 minutes ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--动态内容行-->
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>最新动态: #咕咚笑#告诉我，我从2014年4月30日 14:40 到 5月12日 10:10,
                                            走了 67 步，58 米，燃烧 2.7 大卡。</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-close">
                                <!--个人信息行-->
                                <div class="row">
                                    <!--第一列头像-->
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <img src= "{{ asset('img/marc.jpg') }}" alt="Circle Image"
                                             class="img-circle img-responsive">
                                    </div>

                                    <!--第二列名字+时间-->
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <h5>marc</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                    10 minutes ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--动态内容行-->
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>刚刚跑了南马的半马,感觉很是轻松,看来训练卓有成效,以后可以挑战全马了!!!</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-close">
                                <!--个人信息行-->
                                <div class="row">
                                    <!--第一列头像-->
                                    <div class="col-sm-2 col-sm-offset-1">
                                        <img src= "{{ asset('img/kendall.jpg') }}" alt="Circle Image"
                                             class="img-circle img-responsive">
                                    </div>

                                    <!--第二列名字+时间-->
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <h5>kendall</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="stats">
                                                    20 minutes ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>新活动: 洛带骑游记 http://dwz.cn/kHL2F</h4>
                                    </div>
                                </div>
                            </div>

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
                                    <tr>
                                        <td>Dakota Rice</td>
                                        <td>男</td>
                                        <td>跑步,健身</td>
                                        <td class="text-primary">T1</td>
                                    </tr>
                                    <tr>
                                        <td>Minva Hooper</td>
                                        <td>男</td>
                                        <td>跑步,羽毛球</td>
                                        <td class="text-primary">T2</td>
                                    </tr>
                                    <tr>
                                        <td>Mason Porter</td>
                                        <td>女</td>
                                        <td>游泳,登山</td>
                                        <td class="text-primary">T1</td>
                                    </tr>
                                    <tr>
                                        <td>Tim</td>
                                        <td>男</td>
                                        <td>无</td>
                                        <td class="text-primary">T0</td>
                                    </tr>
                                    <tr>
                                        <td>Zuck</td>
                                        <td>难</td>
                                        <td>跑步</td>
                                        <td class="text-primary">T3</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="section-groups" class="init-hide">
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

        <section id="section-write-post" class="init-hide">
            <div class="row">
                <div class="col-md-10">
                    <h2>请编写动态</h2>
                    <div id="div1" style="height: 300px;">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1" style="margin-right:20px;">
                    <button class="btn btn-success">发表</button>
                </div>
                <div class="col-md-1" id="cancel-post">
                    <button class="btn btn-default">取消</button>
                </div>
            </div>

        </section>


    </div>
@stop




@section('javascript')

    <script>
        $(document).ready(function () {
            //上部导航栏点击li元素
            $('ul.mynav-top > li').click(function (event) {
                // 只有被点击的导航li被显示active
                $('ul.mynav-top > li').removeClass('active');
                $(this).addClass('active');

                // 显示对应部分的内容
                $('div.container-sharing > section').hide();
                var target = '#' + this.getAttribute('my-target');
                $(target).show();
            });
        });
    </script>

    <!--引入jquery和wangEditor.js-->   <!--注意：javascript必须放在body最后，否则可能会出现问题-->
    <script src= {{ asset('editor/js/lib/jquery-1.10.2.min.js') }}></script>
    <script src= {{ asset('editor/js/wangEditor.min.js') }}></script>

    <!--这里引用jquery和wangEditor.js-->
    <script type="text/javascript">
        var editor = new wangEditor('div1');
        editor.create();
    </script>

@stop




