@extends('behind.public.master')

@section('content')
    <div class="col-lg-12">
        <section class="form-group">

            <a type="button" onclick="return addOrEdit('/behind/student/create','学生添加',['1000px','800px']);"  class="btn btn-primary">添加学生</a>
        </section>


        <section class="panel">
            <header class="panel-heading">
                学生列表
            </header>
            <form class="navbar-form navbar-left" role="search" action="/behind/student">
                <div class="form-group">
                    <input type="text" name="search"  class="form-control" placeholder="学生姓名或身份证号">
                </div>
                <button type="submit" class="btn btn-default">模糊搜索</button>
            </form>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i> 序号</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 学生姓名</th>
                    <th><i class=" icon-tasks"></i> 学生身份证号</th>
                    <th><i class=" icon-tasks"></i> 专业</th>
                    <th><i class=" icon-tasks"></i> 方向</th>
                    <th><i class="icon-bookmark"></i> 操作</th>
                </tr>
                </thead>
                <tbody>
                    @if(!empty($list))
                        @foreach($list as $k=>$v)
                            <tr>
                                <td><a href="#">{{$k+1}}</a></td>
                                <td>{{$v->student_name}}</td>
                                <td>{{$v->identity}}</td>
                                <td>{{$v->major}}</td>
                                <td>{{$v->direction}}</td>
                                <td>
                                    <button onclick="return addOrEdit('/behind/student/{{$v->student_id}}/edit','学生编辑',['1000px','800px']);"
                                            class="btn btn-primary btn-xs">编辑</button>
                                    <button onclick="return remove('/behind/student/{{$v->student_id}}');"
                                            class="btn btn-danger btn-xs">删除</button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            @if(!empty($list))
            {{ $list->links() }}
            @endif
        </section>
    </div>
@endsection
@section('script')
@endsection