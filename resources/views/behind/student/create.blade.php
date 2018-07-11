@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/student" onsubmit="return add('/behind/student/');" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">学生名称</label>
                    <input class="form-control" name="student_name" id="exampleInputEmail1" placeholder="请输入用户名称" type="text">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">身份证号</label>
                    <input class="form-control" name="identity" id="exampleInputPassword1" placeholder="请输入身份证号" type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">专业</label>
                    <input class="form-control" name="major" id="exampleInputPassword1" placeholder="输入专业" type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">方向</label>
                    <input class="form-control" name="direction" id="exampleInputPassword1" placeholder="输入方向" type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">录取结果</label>
                    <textarea class="form-control" name="result" id="exampleInputPassword1" placeholder="输入录取结果"></textarea>
                </div>
                <button type="submit" class="btn btn-info">提交</button>
            </form>

        </div>
    </section>

@endsection
@section('script')

@endsection