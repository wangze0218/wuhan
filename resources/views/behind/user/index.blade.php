@extends('behind.public.master')

@section('content')
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                用户列表
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="icon-bullhorn"></i> 序号</th>
                    <th class="hidden-phone"><i class="icon-question-sign"></i> 用户姓名</th>
                    <th><i class=" icon-edit"></i> 状态</th>
                    <th><i class="icon-bookmark"></i> 操作</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">Vector Ltd</a></td>
                    <td class="hidden-phone">王泽</td>
                    <td><span class="label label-info label-mini">Due</span></td>
                    <td>
                        <button class="btn btn-success btn-xs"><i class="icon-plus"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection