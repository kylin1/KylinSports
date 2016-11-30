<div class="sidebar" data-color="purple" data-image= {{ asset('img/sidebar-1.jpg') }} >

    <!--导航左上角的图标-->
    <div class="logo">
        <a href= {{ url('/home') }} class="simple-text">
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
            <li class="active">
                <a href= {{ url('/competition') }}>
                    <i class="material-icons">stars</i>
                    <p>竞赛</p>
                </a>
            </li>
            <li>
                <a href= {{ url('/friend') }}>
                    <i class="material-icons">group</i>
                    <p>圈子</p>
                </a>
            </li>

        </ul>
    </div>
</div>
