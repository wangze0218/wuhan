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
        overflow: hidden;
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
</style>
<header class="navbar">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
                <div class="navbar-logo col-xs-3">
                        <a class="navbar-brand" href="http://www.zaarapp.com/"><img src="http://www.zaarapp.com/assets/images/Logo.png" title="ZAAR APP" alt="ZAAR APP"></a>
                </div>
                <div class="navbar-list col-xs-7 hidden-xs">
                        <ul class="nav pull-right" >
                            <li ><a href="#">首页</a></li>
                            <li class="active"><a href="#">产品与服务</a></li>
                            <li><a href="#">解决方案</a></li>
                            <li><a href="#">新闻中心</a></li>
                            <li><a href="#">合作伙伴</a></li>
                            <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">关于我们 <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">下拉导航1</a></li>
                                    <li><a href="#">下拉导航2</a></li>
                                    <li><a href="#">其他</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">标签</li>
                                    <li><a href="#">链接1</a></li>
                                    <li><a href="#">链接2</a></li>
                                </ul>
                            </li>
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
