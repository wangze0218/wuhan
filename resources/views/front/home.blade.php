<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <style type="text/css">
    *{
        margin:0;
        padding:0;
    }
    body{
        background:url("/img/beijing_3.png") fixed;
        background-repeat:no-repeat;
        background-size:cover;
    }
    
    .max_zong{
        width:500px;
        margin:0 auto;
        margin-top:60px;
    }
    .logo{
        /*width:500px;*/
        height:100px;
    }
    .logo h1{
        font-size:45px;
        margin-left
        padding-top:-40px;
        margin-left:35px;
        float:left;
        color:#fff;
        font-weight:bold;
    }
    .logo h2{
        float:left;
        margin-top:10px;
        margin-left:60px;
        font-size:25px;
        color:blue;
    }
    .logo img{
        height:100px;
        width:100px;
        float:left;
        border-radius:50px;
        margin-left:30px;
    }
    
        .zong{
            width:450px;
            height:300px;
            background:#fff;
            opacity:0.9; 
            margin:0 auto;
            margin-top:30px;
            border-radius:20px;
            border:5px solid #cfcfcf;
            box-shadow:5px 5px 5px #cfcfcf,5px -5px 10px #cfcfcf,-5px 5px 5px #cfcfcf,-5px -5px 5px #cfcfcf;
        }
        
        tr{
            width:700px;
        }
        td{
            height:50px;
        }
        .td1{
            width:200px;
        }
        .td2{
            width:120px;
        }
        .fdiv{
            margin-top:10px;
        }
        table{
            margin:60px auto;
            margin-top:-10px;
        }
        .sname{
            width:400px;
            height:60px;
            margin:0 auto;
        }
        .sname p{
            font-size:30px;
            margin-left:140px;
            margin-top:20px;
            color:#d9d2dd;
        }
        button{
            width:80px;
            height:30px;
            border-radius:5px;
            font-size:15px;
        }
        .sub1{
            margin-left:100px;
        }
    </style>
</head>
<body>
    <div class="max_zong">
        <div class="logo">
            <img src="/img/logo_1.jpg">
            <h1>武汉科技大学</h1>
            <h2>应用本科录取查询</h2>
        </div>
        
        <div class="zong">
            <div class='sname'>
                <p>考生查询</p>
            </div>
            <div class='fdiv'>
                 <form action="/student_search" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <table class="col-sm-8" cellspacing="0" style="border:hidden;">
                        <tr class='tr1'>
                            <td style="text-align: center" class='td2'> 
                                请输入姓名
                            </td>
                            <td class="td1">
                                <input style="width: 80%; margin-left: 10px;height: 25px;" type="text" name="student_name" class="form-control" id="inputPassword3" placeholder="">
                            </td>
                        </tr>
                        <tr class='tr1'>
                            <td style="text-align: center" class='td2'>
                                请输入身份证号
                            </td>
                            <td class="td1">
                                <input style=" width: 80%;margin-left: 10px;height: 25px;" type="text" name="identity" class="form-control" id="inputPassword3" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <p>验证码</p>
                            </td>
                            <td>
                                <input type="" name="" style="width:60px;float:left;margin-left:10px;height:20px;" >
                                <p style="float:left; margin-left:30px;">1234</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="2">
                                <button style="" type="submit" class="btn btn-primary btn-1"> &nbsp&nbsp&nbsp查 询&nbsp&nbsp&nbsp </button>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <button type="reset" class="btn btn-primary"> &nbsp&nbsp&nbsp重 置&nbsp&nbsp&nbsp </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>
