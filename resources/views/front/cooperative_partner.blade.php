@extends('front.public.master')
@section('script')
    <style>
        .container-fluid{
            margin-top: 66px;
        }
        @media (min-width: 768px){
            .about-us{
                /*height: 500px;*/
                color: #fff;
                background-image: url('https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/page1_bg.jpg');
            }
            .about-us h1{
                padding: 30px 0px;
            }
            .about-us p{
                padding-top: 15px;
            }
            .cooperative_partner{
                padding: 50px 0px;
            }
            .about-us-partner{
                /*padding: 50px 0px;*/
            }
            .about-us-partner-img{
                margin: 50px 0px;
            }
            .border{
                border-top:1px solid #eee ;
            }
        }
        @media screen and (max-width: 768px){
            .shadow{
                box-shadow: 0 0px 0px 0px rgba(0, 0, 0, .6)!important;
            }
            .about-us{
                display: none;
                height: 100%;
                color: #fff;
                background: url('https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/page1_bg.jpg') no-repeat;
            }
            .cooperative_partner{
                padding: 66px 0px;
                height: 100%;
                padding-left: 0px;
                padding-right: 0px;
            }
            .about-us-partner-img{
                height:40%;
                padding: 40px 0px;
            }
            .about-us-partner-img div{
                padding: 3px 0px;
            }
            .about-us-partner-img img{
                width: 100%;
            }
            .border{
                border-top:1px solid #eee ;
            }
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

    <div class="container cooperative_partner border">
        <div class="row about-us-partner text-center">
                <div class="col-xs-12">
                    <h1 class="text-center">
                        合作伙伴
                    </h1>
                </div>
        </div>
        <div class="row about-us-partner">
            <div class="col-xs-12 about-us-partner-img">
                <div class="col-xs-6 col-md-3 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/huoban.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/hiwork.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/mingdao.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/yuncaiwu.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/lingxin.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/jinshuju.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/aliyun.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="https://sjg-portal.oss-cn-beijing.aliyuncs.com/assets/img/about/yiqixie.jpg">
                </div>
            </div>
        </div>
    </div>


@endsection