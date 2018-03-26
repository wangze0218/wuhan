@extends('front.public.master')
@section('script')
    <style>
        .shadow{
            margin-top: 28px;
        }
        .container-fluid{
            margin-top: 66px;
        }
        @media (min-width: 768px){
            .about-us{
                /*height: 500px;*/
                color: #fff;
                background-image: url('http://img.huayunshuhai.com/cooperative/bg1.jpg');
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
                background: url('http://img.huayunshuhai.com/cooperative/bg1.jpg') no-repeat;
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
    <div class="container-fluid about-us" style="height:500px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8 ">
                    <h1 class="text-center">
                        
                    </h1>
                    <p>                        
                    </p>

                    <p>                        
                    </p>

                    <p>
                    </p>

                    <p>
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
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_1.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_2.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_3.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_4.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_5.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_6.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_7.jpg">
                </div>
                <div class="col-md-3 col-xs-6 ">
                    <img class="shadow" src="http://img.huayunshuhai.com/home/hezuo_8.jpg">
                </div>
            </div>
        </div>
    </div>


@endsection
