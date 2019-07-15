@extends('front.public.master')
@section('style')
    <style>
    *{
        padding:0px;
        margin:0px;
    }
        .row-1{
            height: 250px;
        }
        .head_font{
            margin-top: 30px;
        }
        .result{
            width: 800px;
            margin:0 auto;
            /*height: 400px;*/
            /*background:url('/img/bg.jpg') no-repeat center;background-size:100% 100%;*/
        }
        @media screen and (min-width: 1024px) {
            .head_font{
                margin-top: 30px;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .logo_img{
                width: 60%;
            }
            .head_font{
                margin-top: 30px;
            }
            .result{
                width: 600px;
                height: 400px;
                background:url('/img/bg.jpg') no-repeat center;background-size:100% 100%;
            }
        }
        @media screen and (max-width: 767px) {
            .row-1{
                height: 100px;
            }
            .logo_img{
                width: 60%;
            }
            .head_font{
                margin-top: 13px;
            }
            .result{
                width: 100%;
                height: 350px;
                background:url('/img/bg.jpg') no-repeat center;background-size:100% 100%;
            }
            .container-fluid .jumbotron{
                padding-left: 37px;

            }
            .col-sm-5 span{
                font-size:20px;
            }
            .col-sm-2{
                margin-top:100px;
            }
        }
        .col-sm-12{
            margin-top:-40px;
           /* background:red;*/
        }
        .col-sm-1{
            width:100%;
            height:50px;
            background:blue;
        }
        .col-sm-5{
            width:650px;
            margin-left:-100px;
            font-family:微软雅黑;
        }
       
        .zong{
            width:100%;
            height:100%;
            background:#F0F0F0;
        }
        .zong .top{
            width:100%;
            height:100px;
            background:#66CCCC;
        }
        .logo_img{
            width:350px;
            height:100%;
            margin-left:200px;
            float:left;
            background:url(/img/logo_21.png) background-size:100% 100% no-repeat;
        }
        .zong .top img{
            height:100%;
            /*margin-left:200px;*/
        }
        .xiaoxun{
            height:100%;
            float:right;
            margin-right:200px;
        }
        .xiaoxun p{
            text-align:center;
            line-height:40px;
            font-size:40px;
            color:#fff;
            margin-top:15px;
            font-weight:bold;
        }
        .zong .zong_center{
            width:100%;
            height:100%;
            margin:0 auto;
            height:500px;
        }
         .zong .zong_center .biaoti{
            width:100%;
           /* background:yellow;*/
            margin:0 auto;
            margin-top:10px;
         }
         .zong .zong_center .biaoti p{
            font-size:30px;
            text-align:center;
            font-family:宋体;
            font-weight:bold;
         }
         .zong .zong_center .xian{
            width:100%;
            height:2px;
            background:green;
            border-bottom:1px blue;
         }
         .zong .zong_center .jieguo{
            width:100%;
            height:100%px;
         }
         .zong .zong_center .jieguo table{
            margin:0 auto;
            margin-top:40px;
            border-color:#E0E0E0;
         }
         .zong .zong_center .jieguo table tr .td1{
            width:180px;
         }
         .zong .zong_center .jieguo table tr .td2{
            width:150px;
         }
          .zong .zong_center .jieguo p{         
            font-size:16px;
            vertical-align:middle;
          }
        .zong .zong_center .jieguo table tr .td2 p{
            text-align:center;
         }
         .zong .zong_center .jieguo table tr .td1 p{
            margin-left:8px;
            color:blue;
            font-weight:bold;
         }
         .bottom{
            width:356px;
            height:106px;
            margin:0 auto;
            border:1px solid #780000;
         }
         .bottom .bottom_li{
            width:350px;
            height:100px;
            margin:0 auto;
            margin-top:2px;
            border:1px solid #780000;
         }
         .bottom p{
            font-size:16px;
            letter-spacing:10px;
            line-height:45px;
            text-align:center;
            font-weight:bold;
            color:#780000;
            margin-left:3px;
         }
        @media screen and (max-width: 767px) {
                .zong .top{
                    height:80px;
                }
                .zong .top .logo_img{
                    margin-left:0px;
                    height:100%;
                    width:100px;
                }
                .zong .top .logo_img img{
                    width:200px;
                    height:60px;
                    margin-top:10px;
                }
                .zong .top .xiaoxun{
                    margin-right:30px;
                    height:100%;
                }
                .zong .top .xiaoxun p{
                    font-size:16px;
                    margin-top:12px;
                    line-height:30px;
                }
                .zong .zong_center .biaoti p{
                    font-size:16px;
                    margin-top:10px;
                }
                /*.jieguo{
                    margin-top:30px;
                }*/
            }
            @media screen and (min-width: 768px) and (max-width: 1024px) {
                .zong .top .xiaoxun{
                    margin-right:20px;
                    height:100%;
                }
                .zong .top .logo_img{
                    margin-left:20px;
                    height:100%;
                    width:100px;
                }  
                .zong .zong_center .biaoti p{
                    font-size:24px;
                }
        }
    </style>
@endsection
@section('content')
    @if($result)   
        <div class='zong'>
            <div class='top'>
                <div class='logo_img'>
                    <img src="/img/logo_21.png" class='img1'>
                </div>
                <div class='xiaoxun'>
                    <p>厚德博学<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp崇实去浮</p>
                </div>
            </div>
            <div class="zong_center">
                <div class="biaoti">
                    <p>2019年应用本科录取结果</p>
                </div>
                <div class='xian'></div>
                <div class='jieguo'>
                    <table border='1px #E0E0E0'>
                        <tr>
                            <td class='td2'>
                                <p>学生姓名</p>
                            </td>
                            <td class='td1'>
                                <p>{!! $message[0] !!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class='td2'>
                                <p>身份证号</p>
                            </td>
                            <td class='td1'>
                                <p>{!! $message[1] !!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class='td2'>
                                <p>录取状态</p>
                            </td>
                            <td class='td1'>
                                <p>{!! $message[2] !!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class='td2'>
                                <p>录取专业</p>
                            </td>
                            <td class='td1'>
                                <p>{!! $message[3] !!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class='td2'>
                                <p>学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp制</p>
                            </td>
                            <td class='td1'>
                                <p>{!! $message[4] !!}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class='td2'>
                                <p>入学时间</p>
                            </td>
                            <td class='td1'>
                                <p>请参照入学须知</p>
                            </td>
                        </tr>
                         <tr>
                            <td class='td2'>
                                <p>报到地点</p>
                            </td>
                            <td class='td1'>
                                <p  style="font-size:13px;">{!! $message[6] !!}</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div style='height:20px;'></div>
                <div class='bottom'>
                    <div class='bottom_li'>
                        <p>本校是教育部批准的具有高等学历教育招生资格的普通高校</p>
                    </div>
                </div>
            </div>
        </div>

    @else
        <div class="container-fluid" style="margin-top:50px;">
            <div class="row-fluid">
                <div class="col-sm-12 row-1">
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                    <div class="col-sm-12"></div>
                    <div class="jumbotron">
                        <p style='color:red;font-size:30px;'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{!! $message[0] !!}</p>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>

    @endif
@endsection





