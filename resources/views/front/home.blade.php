@extends('front.public.master')
@section('style')
    <style>
        .carousel-caption{
            padding-bottom: 393px;
        }
        .carousel-caption p{
            font-size: 80px;
            font-weight: bolder;
        }
        .home-describe{
            padding: 90px 0;
            text-align: center;
            background: #222325;
            color:#FFFDFD ;
            font-family: STXihei, "华文细黑", "Microsoft YaHei", "微软雅黑";
        }
        .home-describe p{
            font-size: 20px;
        }
        .home-details{
            background-image: url('http://www.zaarapp.com/assets/images/background-3.png');
        }
        .home-details img{
            opacity: 0.8;
        }
        .home-details dd{
            margin-top: 35px;
        }
    </style>
@endsection
@section('content')
                <div class="carousel slide" id="carousel-606461">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-606461">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-606461">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="" src="http://www.zaarapp.com/assets/images/b2.png" />
                            <div class="carousel-caption">
                                <h2>
                                    大数据、舆情案例
                                </h2>
                                <p>
                                    探索企业发展
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/product/product_banner.jpg" />
                            <div class="carousel-caption">
                                <h2>
                                    互联网、大数据时代
                                </h2>
                                <p>
                                    洞察企业数据
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid home-describe">
                    <div class="container">
                        <h2>数据观将为企业带来什么影响？</h2>
                        <p>数据观为企业构建全员大数据的工作生态，用数据说话、用数据决策、用数据管理、用数据创新。</p>
                    </div>
                </div>
                <div class="container-fluid home-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/product/2_1.png" alt="">
                            </div>
                            <div class="col-xs-6">
                                <dl>
                                    <h1>
                                        做更精准、快速的决策
                                    </h1>
                                    <dd>
                                        作为企业的决策者，你经常会面对一些难以抉择的问题，一个决策会影响整个业务的结果，甚至是企业的发展。
                                    </dd>
                                    <dd>
                                        用数据观可以对企业及行业数据反应的趋势、规律和预测制定决策，更加准确、快速。
                                    </dd>
                                    <dd>
                                        劳力士创始人为汉斯.威尔斯多夫，1908年他在瑞士将劳力士注册为商标。
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid home-describe">
                    <div class="container">
                        <h2>大数据时代，不要让数据沉睡！</h2>
                        {{--<p>数据观为企业构建全员大数据的工作生态，用数据说话、用数据决策、用数据管理、用数据创新。</p>--}}
                    </div>
                </div>
@endsection





