@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/student" onsubmit="return update('{{'/behind/student/'.$student->student_id}}');" method="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="exampleInputEmail1">用户姓名</label>
                    <input class="form-control" value="{{$student->student_name}}" name="student_name"
                           id="exampleInputEmail1" placeholder="请输入用户名称" type="text">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">身份证号</label>
                    <input class="form-control" value="{{$student->identity}}" name="identity"
                           id="exampleInputPassword1" placeholder="请输入身份证号" type="text">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">专业</label>
                    <input class="form-control" value="{{$student->major}}" name="major"
                           id="exampleInputPassword1" placeholder="输入专业" type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">方向</label>
                    <input class="form-control" value="{{$student->direction}}" name="direction"
                           id="exampleInputPassword1" placeholder="输入方向" type="text">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">录取结果</label>
                    <textarea class="form-control" value="" name="result"
                              id="exampleInputPassword1" placeholder="输入录取结果">{{$student->result}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">提交</button>
                </div>
            </form>

        </div>
    </section>

@endsection
