<style>
    body{
        font-family: "Microsoft Yahei", 微软雅黑;
    }
    @media screen and (max-width: 993px) {
        header .navbar .nav {
            padding-left: 87px;
        }
    }
    header .navbar-default{
        background-color: #FFFFFF;
        /*overflow: hidden;*/
    }
    header nav{
        height: 70px;
        /*font-family:'LiSu';*/
    }
    header .navbar-logo{
        margin-top: -14px;
    }
    header .navbar .nav>li {
        float: left;
        line-height: 50px;
        font-size:17px ;
    }
    header .navbar .nav>li a{
        color: #555;
    }
    .navbar-login a{
        margin-top: 15px;
    }
    .shadow{
        vertical-align: middle;
        border: 1px solid white;
        box-shadow: 0 6px 30px -10px rgba(0, 0, 0, .6)!important;
    }
</style>
<header class="navbar">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
                <div class="navbar-logo col-xs-3">
                        <a class="navbar-brand" href="http://www.zaarapp.com/"><img src="http://www.zaarapp.com/assets/images/Logo.png" title="ZAAR APP" alt="ZAAR APP"></a>
                </div>
                <div class="navbar-list col-xs-7 hidden-xs">
                        <ul class="nav pull-right" >
                            <li ><a href="/">首页</a></li>
                            <li class="active"><a href="/service">产品与服务</a></li>
                            <li><a href="/solution">解决方案</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">新闻中心<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/news_center">行业新闻</a></li>
                                    <li><a href="/company_dynamics">本公司动态</a></li>
                                </ul>
                            </li>
                            <li><a href="/cooperative_partner">合作伙伴</a></li>
                            <li><a href="/about_us">关于我们</a></li>
                        </ul>
                </div>
                <div class="col-xs-2 navbar-login">
                    <ul class="nav pull-right hidden-xs">
                        <li><a href="/sign_in" class="btn btn-default">登陆</a></li>
                    </ul>
                </div>
        </div>

    </nav>



</header>
