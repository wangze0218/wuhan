<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="武汉科技大学">
    <link rel="shortcut icon" href="img/logo.jpg">

    <title>武汉科技大学</title>
    @include('behind.public.style')
    @yield('style')
    <script src="{{asset('FlatLab/js/html5shiv.js')}}"></script>
    <script src="{{asset('FlatLab/js/respond.min.js')}}"></script>
    <script>
            //增删改查（单个）弹出层
            function addOrEdit(url,title,size) {
                layer.open({
                    type: 2,
                    area: size,
                    fixed: false, //不固定
                    maxmin: true,
                    content: url,
                    title:title
                });
                return false;
            }
            function remove(url) {
                    $.ajax({
                    cache: true,
                    type: "DELETE",
                    url:url,
                    data:{_token:"{{ csrf_token() }}"},// 你的formid
                    async: true,
                    error: function(request) {
                        alert("Connection error");
                    },
                    success: function(data) {
                        if(data.code == 10000){
                            var index = $('.delete').index(self);
                            location.reload();
                        }else{
                            alert('删除失败');
                        }
                    }
                });
                return false;
            }
    </script>
</head>

<body>


<section id="container" >

    @include('behind.public.header')

    @include('behind.public.aside')

    <section id="main-content">

        <section class="wrapper site-min-height">

            @yield('content')

        </section>

    </section>

    @include('behind.public.footer')

</section>


@include('behind.public.script')

<script>
    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 500,
            paginationSpeed : 600,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
