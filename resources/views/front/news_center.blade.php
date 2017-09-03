@extends('front.public.master')
@section('script')
    <style>
        body{
            /*background-color: #f6f6f6;*/
        }
        .page-title{
            margin: 40px 0px;
        }
        .news-list{
            width: 810px;
        }
        .news-slide{
            width: 790px;
            height: 400px;
            overflow: hidden;
        }
        .media{
            margin-top: 30px;
            width: 790px;
            background-color: #fff;
            border: 1px solid #fff;
        }
        /*.media:last-child{*/
            /*margin-bottom: 100px;*/
        /*}*/

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
            font-size: 16px;
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
                <h1>新闻中心</h1>
            </div>
            <div class="row">
                <div class="col-md-9  news-list">
                    <div id="carousel-example-generic" class="news-slide carousel slide shadow" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="https://www.egger.com/medias/Header-CS-Highwaychurch-790x400px.jpg?context=bWFzdGVyfHJvb3R8NTg5ODh8aW1hZ2UvanBlZ3xoYjEvaDE1L2gwMC84OTcyODk0OTk0NDYyLmpwZ3wxNDIyMjgyMmJlY2M1MDlkMTg3YmUwZGVhZmZkN2MxZjdkZWQxOTgzYTQ0YjI0OGE3MzI3N2FmYmE2NmUyZjI1" alt="...">
                                <div class="carousel-caption">
                                    <h3>力与美的艺术结合</h3>
                                    <p>
                                        这座高速公路教堂的圆顶结构用爱格 OSB 4 定向刨花板建造而成，美轮美奂，令人折服。
                                    </p>
                                    <span>了解更多信息</span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNzc3OiM3NzcKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWUzYzY0ODAzZCB0ZXh0IHsgZmlsbDojNzc3O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQ1cHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZTNjNjQ4MDNkIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjMzMy4yMTA5Mzc1IiB5PSIyNzAuMSI+OTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
                                <div class="carousel-caption">
                                    <h3>...</h3>
                                    <p>...</p>
                                </div>
                            </div>
                            ...
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="media shadow">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" data-src="holder.js/100X100" alt="64x64" src="https://www.egger.com/medias/1-2PI-AP-REF-2017-07-Freilager-Zuerich-CH-01-250x196.jpg?context=bWFzdGVyfHJvb3R8Mjk3NDl8aW1hZ2UvanBlZ3xoZTIvaDNjL2gwMC84OTY5ODc0NDcyOTkwLmpwZ3w2MTc2N2NkYTg2MjgzYTE2ZDVjNTc5YzE3M2NiZmQ0MWZlNGVlNTc2ODBlNDI1ZjRjYjk5OTlhM2UwMGQxY2Ji&attachment=true"
                                     data-holder-rendered="true" style="width: 250px; height: 196px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">苏黎世 (瑞士)</h3>
                            <p class="p1">Albisrieden 地区的建筑群</p>
                            <p class="p2">总建筑面积70,500 平方米  </p>
                            <a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>
                        </div>
                    </div>
                    <div class="media shadow">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" data-src="holder.js/100X100" alt="64x64" src="https://www.egger.com/medias/1-2PI-AP-REF-2017-07-Freilager-Zuerich-CH-01-250x196.jpg?context=bWFzdGVyfHJvb3R8Mjk3NDl8aW1hZ2UvanBlZ3xoZTIvaDNjL2gwMC84OTY5ODc0NDcyOTkwLmpwZ3w2MTc2N2NkYTg2MjgzYTE2ZDVjNTc5YzE3M2NiZmQ0MWZlNGVlNTc2ODBlNDI1ZjRjYjk5OTlhM2UwMGQxY2Ji&attachment=true"
                                     data-holder-rendered="true" style="width: 250px; height: 196px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">苏黎世 (瑞士)</h3>
                            <p class="p1">Albisrieden 地区的建筑群</p>
                            <p class="p2">总建筑面积70,500 平方米  </p>
                            <a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>
                        </div>
                    </div>
                    <div class="media shadow">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" data-src="holder.js/100X100" alt="64x64" src="https://www.egger.com/medias/1-2PI-AP-REF-2017-07-Freilager-Zuerich-CH-01-250x196.jpg?context=bWFzdGVyfHJvb3R8Mjk3NDl8aW1hZ2UvanBlZ3xoZTIvaDNjL2gwMC84OTY5ODc0NDcyOTkwLmpwZ3w2MTc2N2NkYTg2MjgzYTE2ZDVjNTc5YzE3M2NiZmQ0MWZlNGVlNTc2ODBlNDI1ZjRjYjk5OTlhM2UwMGQxY2Ji&attachment=true"
                                     data-holder-rendered="true" style="width: 250px; height: 196px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">苏黎世 (瑞士)</h3>
                            <p class="p1">Albisrieden 地区的建筑群</p>
                            <p class="p2">总建筑面积70,500 平方米  </p>
                            <a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>
                        </div>
                    </div>
                    <div class="media shadow">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" data-src="holder.js/100X100" alt="64x64" src="https://www.egger.com/medias/1-2PI-AP-REF-2017-07-Freilager-Zuerich-CH-01-250x196.jpg?context=bWFzdGVyfHJvb3R8Mjk3NDl8aW1hZ2UvanBlZ3xoZTIvaDNjL2gwMC84OTY5ODc0NDcyOTkwLmpwZ3w2MTc2N2NkYTg2MjgzYTE2ZDVjNTc5YzE3M2NiZmQ0MWZlNGVlNTc2ODBlNDI1ZjRjYjk5OTlhM2UwMGQxY2Ji&attachment=true"
                                     data-holder-rendered="true" style="width: 250px; height: 196px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">苏黎世 (瑞士)</h3>
                            <p class="p1">Albisrieden 地区的建筑群</p>
                            <p class="p2">总建筑面积70,500 平方米  </p>
                            <a href="/shop/zh_CN/inspiration/free-warehouse" title="更多信息" class="link-style">更多信息</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="thumbnail shadow">
                            <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVlM2NhZGVlZGYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWUzY2FkZWVkZiI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                            <div class="caption text-center">
                                <p>关注我们的微信</p>
                            </div>
                        </div>
                    <div class="shadow">
                        <a class="list-group-item disabled" href="">大数据热门文章</a>
                        <a class="list-group-item"  href="">2</a>
                        <a class="list-group-item"  href="">2</a>
                        <a class="list-group-item"  href="">2</a>
                        <a class="list-group-item"  href="">2</a>
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