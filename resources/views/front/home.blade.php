@extends('front.public.master')
@section('style')

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row-fluid" style="height: 200px;"></div>
        <div class="row-fluid" style="height: 100px;">
            <div class="col-sm-4"></div>
            <div class="col-sm-6" style="text-align: center">
                <img style="width: 60%;" src="/img/logo.jpg" alt="logo">

            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row-fluid" style="height: 50px;">
            <div class="col-sm-4"></div>
            <div class="col-sm-6" style="text-align: center">
                <span style="font-size: 20px;">录取查询</span>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row-fluid">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-6 jumbotron">
                <form action="student_search" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp名</label>
                        <div class="col-sm-10">
                            <input type="text" name="student_name" class="form-control" id="inputEmail3" placeholder="输入学生姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">身份证号</label>
                        <div class="col-sm-10">
                            <input type="text" name="identity" class="form-control" id="inputPassword3" placeholder="输入学生身份证号">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">查询</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
@endsection





