@extends('behind.public.slave')

@section('content')
    <section class="panel">
        {{--<header class="panel-heading">--}}
            {{--Basic Forms--}}
        {{--</header>--}}
        <div class="panel-body">
            <form id="from" role="form" action="/behind/user" onsubmit="return add(); " method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">用户名称</label>
                    <input class="form-control" name="identity" id="exampleInputEmail1" placeholder="请输入用户名称" type="text">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">用户密码</label>
                    <input class="form-control" name="password" id="exampleInputPassword1" placeholder="请输入用户密码" type="password">
                </div>
                <button type="submit" class="btn btn-info">提交</button>
            </form>

        </div>
    </section>

@endsection
@section('script')
    <script>
        function add() {
            $.ajax({
                cache: true,
                type: "post",
                url:"/behind/user/",
                data:$('#from').serialize(),// 你的formid
                async: true,
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    console.log(data);
                    if(data){
                        var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
                        parent.layer.close(index);
                        parent.location.reload();
                    }
                }
            });
            return false;
        }
    </script>
@endsection