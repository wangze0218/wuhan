@extends('front.public.master')
@section('script')
    <style>
        body{
            /*background-color: #f2f2f2;*/
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
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="page-title">
                <h1>解决方案</h1>
            </div>
            <div class="row">
                {{--<div class="col-md-2">--}}
                    {{--<div class="shadow">--}}
                        {{--<a class="list-group-item disabled" href="">大数据热门文章</a>--}}
                        {{--<a class="list-group-item"  href="">2</a>--}}
                        {{--<a class="list-group-item"  href="">2</a>--}}
                        {{--<a class="list-group-item"  href="">2</a>--}}
                        {{--<a class="list-group-item"  href="">2</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
                <div class="col-md-12 shadow">
                    <div class="group-list" style="padding: 0px 30px;background-color: #ddd">
                        <h2 style="border-bottom: solid 1px #d7d7d7;padding: 30px 0px">九次方大数据核心业务</h2>
                    </div>

                    <div class="media col-md-6 ">
                        <div class="media-body">
                            {{--<h3 class="media-heading">苏黎世 (瑞士)</h3>--}}
                            <p class="p1">1.政府融合共享、开放、应用大数据
                            </p>
                            <p class="p2">借助大数据技术完成数据集成、融合，打破中央与地方政府之间、政府各下属机构之间、政府部门和垂直行业之间的数据壁垒，实现信息共享、业务协同、智能决策。

                            {{--<a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>--}}
                        </div>
                    </div>
                    <div class="media col-md-6">
                        <div class="media-body">
                            {{--<h3 class="media-heading">苏黎世 (瑞士)</h3>--}}
                            <p class="p1">2.社会信用大数据</p>
                            <p class="p2">借助大数据技术完成数据集成、融合，打破中央与地方政府之间、政府各下属机构之间、政府部门和垂直行业之间的数据壁垒，实现信息共享、业务协同、智能决策。  </p>
                            {{--<a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>--}}
                        </div>
                    </div>
                    <div class="media col-md-6 ">
                        <div class="media-body">
                            {{--<h3 class="media-heading">苏黎世 (瑞士)</h3>--}}
                            <p class="p1">1.政府融合共享、开放、应用大数据
                            </p>
                            <p class="p2">借助大数据技术完成数据集成、融合，打破中央与地方政府之间、政府各下属机构之间、政府部门和垂直行业之间的数据壁垒，实现信息共享、业务协同、智能决策。

                            {{--<a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>--}}
                        </div>
                    </div>
                    <div class="media col-md-6">
                        <div class="media-body">
                            {{--<h3 class="media-heading">苏黎世 (瑞士)</h3>--}}
                            <p class="p1">2.社会信用大数据</p>
                            <p class="p2">借助大数据技术完成数据集成、融合，打破中央与地方政府之间、政府各下属机构之间、政府部门和垂直行业之间的数据壁垒，实现信息共享、业务协同、智能决策。  </p>
                            {{--<a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>--}}
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="bs-example" data-example-id="simple-pager">
                    <nav aria-label="..." class="page">
                        <ul class="pager">
                            <li><a href="#">上一页</a></li>
                            <li><a href="#">下一页</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
    </script>
@endsection