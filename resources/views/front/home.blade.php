@extends('front.public.master')
@section('style')
    <style>
        .head_font{
            margin-top: 30px;
        }
        .row-1{
            height: 200px;
        }
        .row-2{
            height: 100px;
        }
        .row-3{
            height: 50px;margin-top: 20px
        }
        .row-4{
            margin-top: 30px
        }
        .logo_img{
             width: 40%;
         }
        @media screen and (min-width: 1024px) {
            .btn-1{
                margin-left: -290px
            }
            .head_font{
                margin-top: 30px;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .btn-1{
                margin-left: -170px
            }
            .logo_img{
                width: 60%;
            }
            .head_font{
                margin-top: 30px;
            }
        }
        @media screen and (max-width: 767px) {
            .row-1{
                height: 100px;
            }
            .row-2{
                height: 50px;
            }
            .logo_img{
                width: 60%;
            }
            .head_font{
                margin-top: 13px;
            }
        }

        td{
            text-align: center;padding: 5px 0px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row-fluid col-sm-12 row-1"></div>
        <div class="row-fluid col-sm-12 row-2">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="text-align: center">
                <img style="" class="logo_img" src="/img/logo.jpg" alt="logo">
                {{--<span>厚德博学 崇实去浮</span>--}}
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row-fluid col-sm-12 row-3" style="">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="text-align: center;border-top: 2px solid blue;padding-top: 20px">
                <span style="font-size: 20px;">定向培养就业班录取结果查询</span>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row-fluid col-sm-12 row-4" style="">
            <div class="col-sm-2">
            </div>
            <form action="/student_search" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="col-sm-8" cellspacing="0" border="1" style="border-color:blue;">
                    <tr>
                        <td style="text-align: center">
                            请输入姓名
                        </td>
                        <td>
                            <input style="
            width: 60%;
            margin-left: 10px;
            height: 30px;
" type="text" name="student_name" class="form-control" id="inputPassword3" placeholder="">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center">
                            请输入身份证号
                        </td>
                        <td>
                            <input style="
            width: 60%;
            margin-left: 10px;
            height: 30px;
" type="text" name="identity" class="form-control" id="inputPassword3" placeholder="">
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center;" colspan="2">
                            <button style="" type="submit" class="btn btn-primary btn-1"> &nbsp&nbsp&nbsp查 询&nbsp&nbsp&nbsp </button>
                            <button type="reset" class="btn btn-primary"> &nbsp&nbsp&nbsp重 置&nbsp&nbsp&nbsp </button>
                        </td>
                    </tr>
                </table>

            </form>


            <div class="col-sm-2">
            </div>
        </div>
    </div>
@endsection





