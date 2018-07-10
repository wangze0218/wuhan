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
        .navbar-brand img{
            height: 60px;
            width: 305px;
            margin-left: 16px;
        }
    }
    @media (min-width: 768px){
        header .navbar .nav>li {
            float: left;
            line-height: 50px;
            font-size:19px ;
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
        .navbar-brand img{
            width: 100%;
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
        <div class="container" style="margin: auto">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header navbar-logo col-sm-3">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" >
                    <img src="/img/logo.jpeg" title="武汉科技大学" alt="武汉科技大学" style="">
                </a>
            </div>
        </div>
    </nav>



</header>
