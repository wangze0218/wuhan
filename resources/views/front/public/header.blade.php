<style>
    body{
        font-family: "Microsoft Yahei", 微软雅黑;
    }
    header .navbar .nav>li a{
        color: #555;
    }
    @media screen and (max-width: 767px) {
        #header .navbar-default {
            border: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            background-color: rgba(255,255,255,0.9);
            background-color: #FFFFFF;
        }
        #header .navbar-default .nav>.active>a,
        #header .navbar-default .nav>li>a:hover,
        #header .navbar-default .nav>li>a:focus {
            color: #0ba1e4;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0);
        }
        #header .navbar {
            border-radius: 0;
            /*padding: 15px 0;*/
        }
        header nav{
            /*height: 70px;*/
        }
        #header .navbar-logo{
            padding: 0 0;
            /*margin-top: -15px;*/
        }
        .navbar-login a{
            /*margin-top: 15px;*/
        }
        .navbar-brand{
            padding:0 0 0 0;
            height: auto;
        }
        .navbar-toggle {
            margin-top: 17px;
            margin-right: 23px;
        }
    }
    @media (min-width: 768px){
        header .navbar .nav>li {
            float: left;
            line-height: 50px;
            font-size:17px ;
        }
        header .navbar-default{
            background-color: #FFFFFF;
            /*overflow: hidden;*/
        }
        header nav{
            height: 70px;
        }
        header .navbar-logo{
            margin-top: -14px;
        }
        .navbar-login a{
            margin-top: 15px;
        }
    }
    .shadow{
        vertical-align: middle;
        border: 1px solid white;
        box-shadow: 0 6px 30px -10px rgba(0, 0, 0, .6)!important;
    }
</style>
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header navbar-logo col-sm-3">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                    <img src="/img/huayunshuhai.png" title="ZAAR APP" alt="ZAAR APP">
                </a>
            </div>
            <div class="collapse navbar-collapse col-sm-7" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-right" >
                    <li ><a href="/">首页</a><span class="sr-only">(current)</span></li>
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
