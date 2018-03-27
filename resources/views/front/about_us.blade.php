@extends('front.public.master')
@section('script')
    <style>
        .container-fluid{
            margin-top: 66px;
        }
        .about-us{
            /*height: 500px;*/
            color: #fff;
            background-image: url('http://img.huayunshuhai.com/about_us/bg1.jpg');
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
        .box-padding{
            padding: 50px 0px;
        }
        .text-padding{
            padding-top: 30px;
        }
        .text-title{
            font-size: 25px;
        }
        .row-margin-top{
            margin-top: 50px;
        }
        .auto{
            width: 80%;
        }
        .text-grey{
            color:#777;
        }
        @media screen and (max-width: 768px) {
            .about-us{
                display: none;
                height: 100%;
                color: #fff;
                background: url('http://img.huayunshuhai.com/cooperative/bg1.jpg') no-repeat;
            }
            .shadow {
                box-shadow: 0 0px 0px 0px rgba(0, 0, 0, .6) !important;
            }

            .about-us {
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid about-us" style="height:800px;">
    </div>
    <div class="container-fluid">
        <div class="container box-padding">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="">加入我们</h1>
                    <p class="text-padding text-title">技术驱动创新，服务引领行业</p>
                </div>
            </div>
            <div class="row row-margin-top">
                <div class="col-md-3">
                    <img src="http://img.huayunshuhai.com/about_us/2_1.jpg" class="auto img-responsive center-block">
                </div>
                <div class="col-md-3">
                    <h3>销售经理</h3>
                    <h4>招聘人数：5人</h4>
                    <h4>薪资待遇：面议</h4>
                    <h4>岗位职责：</h4>
                    <ul class="text-grey">
                        <li>1、 开拓新客户，完成销售指标和回款目标，提高公司的销售额及市场份额。 </li>
                        <li>2、 对现有客户进行管理与维护，整理、分析并提出客户潜在需求。</li>
                        <li>3、 回复客户提出的疑问，担任客户与研究人员的协调工作。</li>
                    </ul>
                    <h4>任职要求：</h4>
                    <ul class="text-grey">
                        <li>1、大专以上学历，1年以上的销售经验或相关市场从业经验。</li>
                        <li>2、善于沟通，学习能力强，性格外向，能适应有压力工作，人品端正。</li>
                        <li>3、工作积极认真负责，良好的团队合作精神，有上进心。 </li>
                        <li>4、较好的语言表达能力。</li>
                        <li>5、能适应加班或出差。 </li>
                        <li>6、具有舆情/大数据行业工作经验者，或有政府、银行、保险、IT客户资源者优先录用。</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src="http://img.huayunshuhai.com/about_us/2_2.jpg" class="auto img-responsive center-block" alt="">
                </div>
                <div class="col-md-3">
                    <h3>渠道助理</h3>
                    <h4>招聘人数：2人</h4>
                    <h4>薪资待遇：面议</h4>
                    <h4>岗位职责：</h4>
                    <ul class="text-grey">
                        <li>1、 协助商务拜访意向客户 ，演示产品和服务，针对客户提出的业务问题进行答疑解惑。</li>
                        <li>2、 具体服务需求对接、传达、协调。根据合同、客户需求进行产品需求对接，并及时传达服务部门。</li>
                        <li>3、 协调后台服务部门准确、及时的提供服务。整合服务反馈，提升服务质量。</li>
                        <li>4、 配合商务完成项目验收及总结汇报。</li>
                    </ul>
                    <h4>任职要求：</h4>
                    <ul class="text-grey">
                        <li>1、 本科及以上学历。有过舆情或期刊发行相关服务性行业工作经验优先。</li>
                        <li>2、 熟悉舆情行业特点及舆情服务各环节业务流程，了解行业主流舆情产品，具有较好的业务沟通协调能力。</li>
                        <li>3、 具备良好的沟通协调能力、有责任心、较强的抗压能力。</li>
                        <li>4、积极、主动、耐心、工作有条理，具备良好的分析和解决问题的能力。</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
@endsection
