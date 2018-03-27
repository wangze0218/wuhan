@extends('front.public.master')
@section('script')
    <style>
        .container-fluid{
            margin-top: 66px;
        }
        .page-title{
            margin: 40px 0px;
        }
        @media (min-width: 768px){
            .new_center{
                height: 187px;
                margin-top: 30px;
                background-color: #fff;
                border: 1px solid #fff;
            }
            .new_center-left{
                margin-top: 23px;
                height: 137px;
            }
            .new_center-body{
                padding: 20px 20px;
            }
            .new_center-body h3{
                display: block;
                font-size: 25px;
                margin: 6px 0 6px;
            }
            .new_center-body .p1{
                font-size: 16px;
                margin-bottom: 8px;
            }
            .new_center-body a{
                font-size: 20px;
                line-height: 1.4;
                color: #e31937;
                text-decoration: none;
                outline: none;
            }
            .thumbnail{
                border: 0px;
            }
        }
        @media screen and (max-width: 768px){
            .shadow{
                box-shadow: 0 0px 0px 0px rgba(0, 0, 0, .6)!important;
            }
            .container{
                width:100%;
            }
            .new_center{
                background-color: #fff;
                border: 1px solid #fff;
                margin-top: 10px;
            }
            .news-list,.new_center ,.new_center-left{
                padding-right: 0px;
                padding-left: 0px;
            }
            .new_center-body{
                padding-right: 0px;
                /*padding-left: 0px;*/
            }
            .new_center-body h3{
                display: block;
                font-size: 14px;
                margin: 0 0 6px;
                color: #1e1e1e;
            }
            .new_center-body .p1{
                font-size: 12px;
                margin-bottom: 8px;
                color: #919191;
                font-weight: 300;
            }
            .new_center-body a{
                font-size: 16px;
                line-height: 1.4;
                color: #e31937;
                text-decoration: none;
                outline: none;
            }
            .thumbnail{
                border: 0px;
            }
        }


        /*.new_center:last-child{*/
        /*margin-bottom: 100px;*/
        /*}*/


    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-title">
                <h1>公司动态</h1>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-9 news-list">
                    @foreach($articles as $k=>$v)
                        <div class="new_center shadow col-xs-12 col-sm-12">
                            <div class="new_center-left col-xs-4 col-sm-3">
                                <a href="/details/{{$v['article_id']}}">
                                    <img class="new_center-object" data-src="holder.js/100X100" alt="64x64" src="{{$v['title_img']}}"
                                         data-holder-rendered="true" style="width: 100%;height: 100%">
                                </a>
                            </div>
                            <div class="new_center-body col-xs-8 col-sm-9">
                                <h3 class="new_center-heading">{{$v['title']}}</h3>
                                <p class="p1">{{$v['title_describe']}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-3 hidden-xs">
                    <div class="thumbnail shadow">
                        <img data-src="holder.js/100%x200" alt="100%x200" src="http://img.huayunshuhai.com/weixin.png" data-holder-rendered="true" style="width: 100%; display: block;">
                        <div class="caption text-center">
                            <p>关注我们的微信</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                {!! $page_view !!}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection