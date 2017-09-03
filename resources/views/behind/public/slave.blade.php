<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>
    @include('behind.public.style')
    @yield('style')

    <script src="{{asset('FlatLab/js/html5shiv.js')}}"></script>
    <script src="{{asset('FlatLab/js/respond.min.js')}}"></script>
</head>

<body>


<section id="container" >

    {{--<section id="main-content">--}}

            @yield('content')


    {{--</section>--}}
</section>

@include('behind.public.script')
@yield('script')

<script>
    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });
        function add(url) {
            $.ajax({
                cache: true,
                type: "post",
                url:url,
                data:$('#from').serialize(),// 你的formid
                async: true,
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    if(data.code != 10000){
                        alert(data.msg);
                    }else{
                        var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
                        parent.layer.close(index);
                        parent.location.reload();
                    }
                }
            });
            return false;
        };
        function update(url) {
            $.ajax({
                cache: true,
                type: "PUT",
                url:url,
                data:$('#from').serialize(),// 你的formid
                async: true,
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    if(data.code != 10000){
                        alert(data.msg);
                    }else{
                        var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
                        parent.layer.close(index);
                        parent.location.reload();
                    }
                }
            });
            return false;
        }


</script>
</body>
</html>
