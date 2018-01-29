@extends('front.public.master')
@section('script')
@endsection
@section('content')
    <div class="container-fluid about-us">
        <div class="container" style="width: 46%;margin-bottom: 100px">
            {{--<div class="row">--}}
                {{--<p class=" text-center">{{$articles->title}}</p>--}}
                {{--<p>{{$articles->title_describe}}</p>--}}
            {{--</div>--}}
            <div class="row">
                {!! $articles->content !!}
            </div>
        </div>
    </div>
@endsection