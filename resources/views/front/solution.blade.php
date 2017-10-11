@extends('front.public.master')
@section('script')
    <style>
        .container-fluid{
            margin-top: 66px;
        }
        .page-title{
            margin: 40px 0px;
        }
        .media:first-child{
            margin: 30px 0px;

        }
        .media{
            margin: 30px 0px;
            background-color: #fff;
            border: 1px solid #fff;
        }
        .media-body{
            padding: 20px 20px;
        }
        .media-body h3{
            display: block;
            font-size: 16px;
            margin: 0 0 6px;
            color: #8b8d8e;
        }
        .media-body .p1{
            font-size: 22px;
            margin-bottom: 8px;
        }
        .media-body .p2{
            width:70%;
            font-size: 12px;
            margin-bottom: 7px;
            overflow-wrap: break-word;
            word-wrap: break-word;
            -webkit-hyphens: auto;
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            hyphens: auto;
            line-height: 1.375;
        }
        .media-body a{
            font-size: 20px;
            line-height: 1.4;
            color: #e31937;
            text-decoration: none;
            outline: none;
        }
        .list-group-item{
            border: 0px;
        }
        .thumbnail{
            border: 0px;
        }
        .bs-example{
            margin: 50px 0px;
        }
        @media (min-width: 768px){

        }
        @media screen and (max-width: 768px){
            .shadow{
                box-shadow: 0 0px 0px 0px rgba(0, 0, 0, .6)!important;
            }
        }

    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-title">
                <h1>解决方案</h1>
            </div>
            <div class="row">
                <div class="col-md-12 shadow">
                    <div class="group-list" style="padding: 0px 30px;background-color: #ddd">
                        <h2 style="border-bottom: solid 1px #d7d7d7;padding: 30px 0px">华云数海（大数据）核心业务</h2>
                    </div>
                    @foreach($articles as $k=>$v)
                        <div class="media col-md-6 ">
                            <a href="/details/{{$v['article_id']}}" style="color: #333">
                                <div class="media-body">
                                    <p class="p1">{{$k+1}}.{{$v['title']}}</p>
                                    <p class="p2">{{$v['title_describe']}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
            {!! $page_view !!}
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection