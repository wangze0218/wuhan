@extends('front.public.master')
@section('style')
    <style>
        td{
            text-align: center;padding: 5px 0px;

        }
        .nav {
            width: 1000px;
            height: 34px;
            background: url(../images/wd_06.jpg) repeat-x;
            margin: 0 auto;
        }
        .nav li {
            width: 100px;
            height: 34px;
            line-height: 34px;
            float: left;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
        }
        .nav li a {
            width: 100px;
            height: 34px;
            display: block;
            /*color: #fff;*/
        }
        ul li {
            list-style: none;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row-fluid col-sm-12" style="height: 200px;"></div>
        <div class="row-fluid col-sm-12" style="height: 100px;">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="text-align: center">
                <img style="width: 40%;" src="/img/logo.jpg" alt="logo">
                {{--<span>厚德博学 崇实去浮</span>--}}
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row-fluid col-sm-12" style="height: 50px;margin-top: 20px">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="text-align: center;border-top: 2px solid blue;padding-top: 20px">
                <span style="font-size: 20px;">定向培养就业班录取结果查询</span>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row-fluid col-sm-12" style="margin-top: 30px">
            <div class="col-sm-2">
            </div>
            <form action="/student_search" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="col-sm-8" cellspacing="0" border="1" style="border-color:blue;">
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
                        <td style="text-align: center;" colspan="2">
                            <button style="margin-left: -290px" type="submit" class="btn btn-primary"> &nbsp&nbsp&nbsp查 询&nbsp&nbsp&nbsp </button>
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





