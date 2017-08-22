@extends('front.public.master')
@section('style')
    <style>

        @media screen and (max-width: 959px) {
            .carousel-caption{
                padding-bottom: 100px;
            }
        }
        @media screen and (min-width:959px) and (max-width: 1200px) {
            .carousel-caption{
                padding-bottom: 200px;
            }
        }
        @media screen and (min-width: 1200px) {
            .carousel-caption{
                padding-bottom: 300px;
            }
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
            /*font-family: STXihei, "华文细黑", "Microsoft YaHei", "微软雅黑";*/
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
        .home-describe-img{
            background: url('https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/product/bottom_bg.jpg');
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
        .home-details-img{
            background: url('https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/product/bottom_bg.jpg');
            text-indent:2em;
        }
        .home-details-img dd{
            font-size: 13px;
            width: 90%;
        }
        .home-details-img h3{
            padding-top: 20px;
            width: 90%;
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
                            <div class="carousel-caption">
                                <h2>
                                    大数据、舆情案例
                                </h2>
                                <p>
                                    探索企业发展
                                </p>
                            </div>
                            <img alt="" src="http://www.zaarapp.com/assets/images/b2.png" />

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
                <div class="container-fluid home-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                <dl>
                                    <h1>
                                        洞察下一个商业机会
                                    </h1>
                                    <dd>
                                        利用正确的数据，你可以发现业务中隐藏的商业机会。数据观提供自助式的分析平台，

                                    </dd>
                                    <dd>
                                        让你的洞察不局限于固化的图表。
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-6">
                                <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/product/2_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid home-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/product/2_3.png" alt="">
                            </div>
                            <div class="col-xs-6">
                                <dl>
                                    <h1>
                                        全员参与，数据驱动
                                    </h1>
                                    <dd>
                                        对于一个企业，利用数据不应该局限于少数的决策者，让每一个人都可以利
                                    </dd>
                                    <dd>
                                        用数据提高工作成果，这将使企业更具竞争力。
                                    </dd>
                                    <dd>
                                        数据观为企业提供一个基于数据的协作平台，你可以分享和获得更多业务见
                                    </dd>
                                    <dd>
                                        解，提高工作成果。
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid home-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                <dl>
                                    <h1>
                                        随身数据，随时响应
                                    </h1>
                                    <dd>
                                        在移动互联网时代，每一个商业机会都转瞬即逝，企业需要更加灵活高效的
                                    </dd>
                                    <dd>
                                        方式应对这些变化。数据观可以随时随地让你掌控业务变化，根据数据洞察。
                                    </dd>
                                    <dd>
                                        快速指导下一步行动。
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-6">
                                <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/product/2_4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid home-details home-details-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4">
                                <dl>
                                    <dd class="text-center">
                                        <img src="http://www.baifendian.com/static/images/pro_ico1.png" width="95" height="95" alt="大数据应用" style="top: 5px; left: 5px;">
                                    </dd>
                                    <h3 class="text-center">
                                        大数据应用
                                    </h3>
                                    <dd>
                                        数据应用绽放价值，百分点个性化系统/营销管家/舆情管家/文本分析/数据洞察等一系列大数据应用，帮助企业更好的解决大数据时代面临的销售、营销、运营、服务等方面的问题。
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-4">
                                <dl>
                                    <dd class="text-center">
                                        <img src="http://www.baifendian.com/static/images/pro_ico2.png" width="95" height="95" alt="大数据管理" style="top: 5px; left: 5px;">
                                    </dd>
                                    <h3 class="text-center">
                                        大数据管理
                                    </h3>
                                    <dd>
                                        数据管理梳理价值，针对大数据时代数据分散、割裂、难以统一管理等难题，百分点开发了数据清洗/用户标识管理/用户标签管理等系统，帮助企业实现数据全生命周期的价值管理。
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-xs-4">
                                <dl>
                                    <dd class="text-center">
                                        <img src="http://www.baifendian.com/static/images/pro_ico3.png" width="95" height="95" alt="大数据技术">
                                    </dd>
                                    <h3 class="text-center">
                                        大数据技术
                                    </h3>
                                    <dd>
                                        数据技术夯实价值，百分点大数据操作系统屏蔽底层繁复的技术，提供多工种协同作业、管理大数据采集、加工和应用环节 所有资源和任务的可视化操作系统，快速提升企业大数据综合处理能力和效率。
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="container-fluid home-describe home-describe-img">--}}
                    {{--<div class="container">--}}
                        {{--<h1>大数据时代，不要让数据沉睡！</h1>--}}
                        {{--<button class="btn btn-warning btn-large">免费试用</button>--}}
                        {{--<p>数据观为企业构建全员大数据的工作生态，用数据说话、用数据决策、用数据管理、用数据创新。</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
@endsection





