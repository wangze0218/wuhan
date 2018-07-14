@extends('front.public.master')
@section('style')
    <style>
        .head_font{
            margin-top: 30px;
        }
        .result{
            width: 600px;
            height: 400px;
            background:url('/img/bg.jpg') no-repeat center;background-size:100% 100%;
        }
        @media screen and (min-width: 1024px) {
            .head_font{
                margin-top: 30px;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .logo_img{
                width: 60%;
            }
            .head_font{
                margin-top: 30px;
            }
            .result{
                width: 600px;
                height: 400px;
                background:url('/img/bg.jpg') no-repeat center;background-size:100% 100%;
            }
        }
        @media screen and (max-width: 767px) {
            .logo_img{
                width: 60%;
            }
            .head_font{
                margin-top: 13px;
            }
            .result{
                width: 100%;
                height: 350px;
                background:url('/img/bg.jpg') no-repeat center;background-size:100% 100%;
            }
            .container-fluid .jumbotron{
                padding-left: 37px;

            }
        }
    </style>
@endsection
@section('content')
    @if($result)
        <div class="container-fluid" style="margin-top: 00px;">
            <div class="row-fluid">
                <div class="col-sm-12" style="height: 200px;">
                    <div class="col-sm-12" style="height: 150px;"></div>
                    <div class="col-sm-12" style="font-size:30px;text-align: center;height: 50px;">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-5">
                            {{--<span style="width: 600px;">武汉科技大学欢迎你</span>--}}
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="col-sm-12" style="">

                    <div class="result jumbotron" style="margin: 0 auto;background-color:transparent;">
                        <p style="font-weight: 400;text-align: center;">恭喜你</p>
                        <p style="font-weight: 400">{!! $message !!}</p>
                    </div>
                </div>
            </div>
        </div>

    @else
        <div class="container-fluid" style="margin-top: 00px;">
            <div class="row-fluid">
                <div class="col-sm-12" style="height: 300px;">
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                    <div class="col-sm-12"></div>
                    <div class="jumbotron">
                        <p>{!! $message !!}</p>
                    </div>

                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>

    @endif


@endsection





