@extends('front.public.master')
@section('style')
    <style>

        @media screen and (max-width: 768px) {
            .carousel{
                margin-top: 70px;
            }
            #carousel-606461{
                display: none;
            }
            #tellpnone_{
                width: 100%;
                height: 100%;
                overflow: hidden;
                margin-top: 50px;
                /*background:url('http://www.zaarapp.com/assets/images/b2.png') center top ;*/
                /*-webkit-background-size:100% 100%;*/
                /*background-size:100% 100%;*/
            }
            .card {
                width: 220px;
                height: 284px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -110px;
                margin-top: -130px;
                /*background-color: rgba(255, 255, 255, 1);*/
                padding: 40px 40px;
            }
            .card p {
                font-size: 60px;
                color:white ;
                /*line-height: 0.92;*/
                margin-bottom: 10px;
                letter-spacing:10px;
            }
            .glyphicon{
                color: white;
            }
            .home-describe{
                display: none;
            }
            .home-details{
                height: 100%;
                text-align: center;
                border-top:1px solid #eee ;
            }
            .home-details img{
                width: 80%;
                margin-top: 40px;
            }
            .home-details h1{
                margin-top: 80px;
                margin-bottom: 40px;
                font-size: 25px;
                font-weight: 900;
            }
            .home-details dd{
                font-size: 16px;
            }
        }
        @media (min-width: 768px){
            .carousel{
                margin-top: 70px;
            }
            .carousel-caption p{
                font-size: 80px;
                font-weight: bolder;
            }
            .home-describe p{
                font-size: 20px;
            }
            .home-details .container{
                padding: 100px 0px;
                border-top:1px solid #eee ;
                /*background-image: url('http://www.zaarapp.com/assets/images/background-3.png');*/
            }
            .home-details h1{
                margin-top: 100px;
            }
            .home-details dd{
                margin-top: 35px;
            }
            .home-describe{
                padding: 90px 0;
                text-align: center;
                background: #222325;
                color:#FFFDFD ;
                /*font-family: STXihei, "华文细黑", "Microsoft YaHei", "微软雅黑";*/
            }
            .home-describe p{
                font-size: 20px;
            }
            .home-describe-img p{
                font-size: 30px;
            }
            .home-describe-img button {
                font-size: 18px;
                margin-top: 20px;
                line-height: 20px;
                padding: 10px 40px;
            }
            .home-details-img dd{
                font-size: 13px;
                width: 90%;
            }
            .home-details-img h3{
                padding-top: 20px;
                width: 90%;
            }


            #tellpnone_{
                display: none;
            }
        }

        @media screen and (min-width: 1200px) {
            .carousel{
                margin-top: 70px;
            }
        }

    </style>
@endsection
@section('content')
    {{--pc轮播--}}
    <div class="carousel slide" id="carousel-606461">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel-606461">
            </li>
            <li data-slide-to="1" data-target="#carousel-606461">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img alt="" src="http://img.selfgrowth.cn/home/bg1.jpg" />

            </div>
            <div class="item">
                <img alt="" src="http://img.selfgrowth.cn/home/bg2.jpg" />
            </div>
        </div>
    </div>
    {{--轮播结束--}}
    {{--手机封面--}}
    <div class="container" id="tellpnone_">
        <div class="card text-center">
            <div>
                <p>洞察<br>企业<br>数据</p>
                {{--<p><br>数据<br></p>--}}
                {{--<p></p>--}}
                <a href="#home-details" class="scrollto"><p><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p></a>
            </div>
        </div>
    </div>
    {{--手机封面结束--}}
    {{--pc页面描述模块--}}
    {{--<div class="container-fluid home-describe">--}}
        {{--<div class="container">--}}
            {{--<h2>数据观将为企业带来什么影响？</h2>--}}
            {{--<p>数据观为企业构建全员大数据的工作生态，用数据说话、用数据决策、用数据管理、用数据创新。</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--pc页面描述结束--}}
    {{--pc和手机详情模块--}}
    {{--pc和手机详情模块结束--}}
    <div id="home-details" class="container-fluid home-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <img src="http://img.selfgrowth.cn/home/2_1.jpg" alt="">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <dl>
                        <h1>
                            舆情监测
                        </h1>
                        <dd>
                            推出全媒体舆情一体化解决方案，
                        </dd>
                        <dd>
                            通过舆情监测预警、分析研判等，为领导层科学决策提供依据，
                        </dd>
                        <dd>
                            助力政府、企业掌握信息时代话语权，打造良好的社会形象。
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid home-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <dl>
                        <h1>
                            数据分析
                        </h1>
                        <dd>
                            利用各种分析软件以及方法对互联网大数据进行挖掘分析，

                        </dd>
                        <dd>
                            为不同行业客户提供各类专业高端的数据分析报告服务。
                        </dd>
                    </dl>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="http://img.selfgrowth.cn/home/2_2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid home-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <img src="http://img.selfgrowth.cn/home/2_3.jpg" alt="">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <dl>
                        <h1>
                            数据新闻
                        </h1>
                        <dd>
                            将与主流媒体合作运营数据新闻资讯栏目，
                        </dd>
                        <dd>
                            以数据解读展示复杂政经事件以及社会百态背后的含义。
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid home-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <dl>
                        <h1>
                            解决方案
                        </h1>
                        <dd>
                            根据客户需求进行定制解决方案，
                        </dd>
                        <dd>
                            把杂乱无序的海量信息变成直观的可视化数据产品输出。
                        </dd>
                    </dl>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="http://img.selfgrowth.cn/home/2_4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection





