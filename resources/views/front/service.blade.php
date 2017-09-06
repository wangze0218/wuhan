@extends('front.public.master')
@section('script')
    <style>
        .page-title{
            margin: 50px 0px;
        }
        .thumbnail{
            border: 0;
        }
        .thumbnail p:nth-child(1){
            text-decoration: none;
            color: #333333;
            font-size: 26px;
            text-align: center;
            margin-bottom: 25px;
            letter-spacing: 1px;
            font-weight: bold;
            padding-top:20px ;
            padding-bottom:0px ;
        }
        .thumbnail p:nth-child(2){
            display: block;
            height: 5px;
            background: url(http://www.chinadata8.com/public/img/yqfw-img01.png) bottom center no-repeat;
            text-align: center;
            font-size: 26px;
            text-align: center;
            margin-bottom: 25px;
            margin-top: -15px;
            letter-spacing: 1px;
        }
        .thumbnail p:nth-child(3){
            line-height: 30px;
            font-size: 16px;
            height: 123px;
            overflow: hidden;
            text-indent: 2em;
            padding: 0px 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-title">
                <h1>产品服务中心</h1>
            </div>
            <div class="row" style="width: 1080px;margin-bottom: 100px">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.chinadata8.com/public/img/yqfw-img01.jpg" data-holder-rendered="true" style="height: 320px; width: 320px; display: block;">
                        <div class="caption">
                            <p>境外社交媒体舆情分析</p>
                            <p></p>
                            <p>采用我司研制的网络智能数据采集技术，按照客户的需求，对其在社交媒体上出现的相关信息...
                            </p>

                            <p class="text-center">
                                <button type="button" class="btn-lg btn btn-default" style="width: 80%">了解更多</button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.chinadata8.com/public/img/yqfw-img02.jpg" data-holder-rendered="true" style="height: 320px; width: 320px; display: block;">
                        <div class="caption">
                            <p>媒体舆情监测</p>
                            <p></p>
                            <p>采用我司研制的网络智能数据采集技术，按照客户的需求，对其在网络媒体上出现的相关信息...
                            </p>
                            <p class="text-center">
                                <button type="button" class="btn-lg btn btn-default" style="width: 80%">了解更多</button>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.chinadata8.com/public/img/yqfw-img03.jpg" data-holder-rendered="true" style="height: 320px; width: 320px; display: block;">
                        <div class="caption">
                            <p>全网舆情监测</p>
                            <p></p>
                            <p>采用我司研制的网络智能数据采集技术，通过对互联网海量信息进行自动抓取、分类聚类...
                            </p>
                            <p class="text-center">
                                <button type="button" class="btn-lg btn btn-default" style="width: 80%">了解更多</button>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.chinadata8.com/public/img/yqfw-img04.jpg" data-holder-rendered="true" style="height: 320px; width: 320px; display: block;">
                        <div class="caption">
                            <p>危机应对顾问</p>
                            <p></p>
                            <p>采用我司研制的网络智能数据采集技术，为客户及其在网络中出现的相关信息进行实时采集...
                            </p>
                            <p class="text-center">
                                <button type="button" class="btn-lg btn btn-default" style="width: 80%">了解更多</button>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.chinadata8.com/public/img/yqfw-img05.jpg" data-holder-rendered="true" style="height: 320px; width: 320px; display: block;">
                        <div class="caption">
                            <p>按需舆情报告

                            </p>
                            <p></p>
                            <p>按照客户的需求，对其提供多地域、多媒介的舆情采集与分析服务，生成多种形态的分析结果...

                            </p>
                            <p class="text-center">
                                <button type="button" class="btn-lg btn btn-default" style="width: 80%">了解更多</button>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.chinadata8.com/public/img/yqfw-img06.jpg" data-holder-rendered="true" style="height: 320px; width: 320px; display: block;">
                        <div class="caption">
                            <p>境外社交媒体舆情

                            </p>
                            <p></p>
                            <p>提供境外社交媒体（如Facebook、Twitter、Line、YouTube等）舆情服务，包括信息采集...

                            </p>
                            <p class="text-center">
                                <button type="button" class="btn-lg btn btn-default" style="width: 80%">了解更多</button>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection