@extends('front.public.master')
@section('style')

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
                            <span style="width: 600px;">武汉科技大学欢迎你</span>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5" style="
                                    width: 600px;
                                    height: 400px;
                                    background:url('/img/bg.jpg') no-repeat center;background-size:100% 100%;">

                    <div class="col-sm-12" style="height: 100px;"></div>
                    <div class="jumbotron" style="background-color:transparent;">
                        <p>{!! $message !!}</p>
                    </div>

                </div>
                <div class="col-sm-2">
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





