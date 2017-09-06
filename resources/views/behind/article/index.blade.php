@extends('behind.public.master')

@section('content')
    <div class="col-lg-12">
        <section class="form-group">
                <a type="button" onclick="return addOrEdit('/behind/article/create','文章添加',['1200px','600px']);"  class="btn btn-primary">添加文章</a>
        </section>


        <section class="panel">
            <header class="panel-heading">
                用户列表
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i> 序号</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 文章标题</th>
                    <th><i class=" icon-tasks"></i> 文章标题图片</th>
                    {{--<th><i class=" icon-edit"></i> </th>--}}
                        <th><i class="icon-bookmark"></i> 操作</th>
                </tr>
                </thead>
                <tbody>
                    @if(!empty($list))
                        @foreach($list['data'] as $k=>$v)
                            <tr>
                                <td><a href="#">{{$k+1}}</a></td>
                                <td>{{$v->title}}</td>
                                <td><img src="{{$v->title_img}}" alt=""></td>
                                <td>
                                    <button onclick="return remove('/behind/user/{{$v->user_id}}');" class="btn btn-danger btn-xs">查看</button>
                                    <button onclick="return addOrEdit('/behind/user/{{$v->user_id}}/edit','用户编辑',['800px','800px']);" class="btn btn-primary btn-xs">编辑</button>
                                    <button onclick="return remove('/behind/user/{{$v->user_id}}');" class="btn btn-danger btn-xs">删除</button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </section>
    </div>
@endsection
@section('script')
@endsection