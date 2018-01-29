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
                margin-top: 30px;
                background-color: #fff;
                border: 1px solid #fff;
            }
            .new_center-body{
                padding: 20px 20px;
            }
            .new_center-body h3{
                display: block;
                font-size: 16px;
                margin: 0 0 6px;
                color: #8b8d8e;
            }
            .new_center-body .p1{
                font-size: 20px;
                margin-bottom: 8px;
                font-weight: 300;
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
                <h1>本公司动态</h1>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-9 news-list">
                    @foreach($articles as $k=>$v)
                        <div class="new_center shadow col-xs-12 col-sm-12">
                            <div class="new_center-left col-xs-4 col-sm-3">
                                <a href="/details/{{$v['article_id']}}">
                                    <img class="new_center-object" data-src="holder.js/100X100" alt="64x64" src="{{$v['title_img']}}"
                                         data-holder-rendered="true" style="width: 100%;">
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
                        <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVlM2NhZGVlZGYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWUzY2FkZWVkZiI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                        <div class="caption text-center">
                            <p>关注我们的微信</p>
                        </div>
                    </div>
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