@extends('front.public.master')
@section('script')
    <style>
        .container-fluid{
            margin-top: 66px;
        }
        .page-title{
            margin: 50px 0px;
        }
        .thumbnail{
            border: 0;
        }
        @media (min-width: 768px){
            .thumbnail img{
                height: 320px;
                width: 320px;
                display: block;
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
        }
        @media screen and (max-width: 768px){
            .thumbnail img{
                width: 100%;
                display: block;
            }
            .thumbnail p:nth-child(1){
                height: 0px;
                text-decoration: none;
                color: #333333;
                font-size: 18px;
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
        }


    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-title">
                <h1>产品服务中心</h1>
            </div>
            <div class="row" style="">
                @foreach($articles as $k=>$v)
                    <div class="col-xs-6 col-sm-4">
                        <div class="thumbnail">
                            <a href="/details/{{$v['article_id']}}">
                                <img data-src="holder.js/100%x200" alt="100%x200" src="{{$v['title_img']}}" data-holder-rendered="true">
                            </a>
                            <div class="caption">
                                <p>{{$v['title']}}</p>
                                <p></p>
                                <p>{{$v['title_describe']}}</p>

                                <p class="text-center">
                                    <button type="button" class="btn-lg btn btn-default" style="width: 80%">了解更多</button>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection