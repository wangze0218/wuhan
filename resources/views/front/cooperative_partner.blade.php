@extends('front.public.master')
@section('script')
    <style>
        .about-us{
            height: 500px;
            color: #fff;
            background-image: url('https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/page1_bg.jpg');
        }
        .about-us h1{
            padding: 30px 0px;
        }
        .about-us p{
            padding-top: 15px;
        }
        .shadow img{
            vertical-align: middle;
            border: 1px solid white;
            box-shadow: 0 6px 30px -10px rgba(0, 0, 0, .6)!important;
        }
        .about-us-partner{
            padding: 50px 0px;
        }
        .about-us-partner-img{
            margin: 50px 0px;
        }
        .border{
            border-top:1px solid #eee ;
            /*background-color: #e6e6e6;*/
        }

    </style>
@endsection
@section('content')
    <div class="container-fluid about-us">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8 ">
                    <h1 class="text-center">
                        公司价值观
                    </h1>
                    <p>
                        天津数观科技有限公司在大数据领域拥有丰富的技术积累和企业级服务经验。
                    </p>
                    <p>
                        该团队曾历时6年自主研发国内一流的商业智能产品——GBaseBI，并在海关、中国移动、国家电网等高端客户实现了规模化应用。
                    </p>
                    <p>
                        同时，天津数观科技有限公司为客户提供大数据整合方案、数据分析咨询、产品培训等一站式服务，确保深度体察客户需求，快速实现数据变现。现在，我们正在帮助越来越多的企业构建起全员大数据工作生态，让企业能够释放数据的价值，让每一个角色都能借助数据的力量。</p>
                    </p>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid  ">
        <div class="container border about-us-partner text-center">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">
                        合作伙伴
                    </h1>
                </div>
            </div>
        </div>
        <div class="container about-us-partner">
            <div class="row about-us-partner-img">
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/huoban.jpg">
                </div>
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/hiwork.jpg">
                </div>
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/mingdao.jpg">
                </div>
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/yuncaiwu.jpg">
                </div>
            </div>
            <div class="row about-us-partner-img">
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/lingxin.jpg">
                </div>
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/jinshuju.jpg">
                </div>
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/aliyun.jpg">
                </div>
                <div class="col-md-3 col-xs-6 shadow">
                    <img src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/yiqixie.jpg">
                </div>
            </div>
        </div>
    </div>


@endsection