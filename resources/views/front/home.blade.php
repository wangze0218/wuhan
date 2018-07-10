@extends('front.public.master')
@section('style')

@endsection
@section('content')
    <div class="container-fluid" style="margin-top: 300px;">
        <div class="row-fluid">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-6">
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
                            <button type="submit" class="btn btn-default">搜索</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
@endsection





