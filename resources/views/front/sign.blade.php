<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>华云数海</title>
    @include('front.public.style')
    <style>
        .sing_bg{
            margin-top: 60px;
        }
        .sing_in_form{
            width:80%;

        }
        .sign_input{
            box-shadow: none;
            transition: all .4s;
            padding: 5px;
            color: #8D8D8D;
            background-color: #FFF;
            border-radius: 0 !important;
            margin-bottom: 5px;
        }
        .i1{
            color: #ccc;
            position: absolute;
            margin: 131px 2px 4px 10px;
            z-index: 3;
            width: 16px;
            height: 16px;
            font-size: 16px;
            text-align: center;
        }
    </style>
    @include('front.public.script')
</head>
<body>
<section id="console_login">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="logo sing_bg">
                    <a href="http://www.zaarapp.com/" class="logo_text">
                        <img src="https://console.zaarapp.com/assets/images/Logo.png" alt="logo">
                    </a>
                </div>
                <div class="sing_form sing_bg">
                    <!-- BEGIN LOGIN FORM -->
                    <form class="sing_in_form" id="sing_in" action="/sign_in" method="post" autocomplete="off" novalidate="novalidate">

                        <div class="form-group">
                            <div class="input_ico">
                                <span class="glyphicon glyphicon-user i" aria-hidden="true"></span>
                                <input class="form-control sign_input" type="email" autofocus="" value="" autocomplete="off" placeholder="Email address" name="identity">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input_ico">
                                <span class="glyphicon glyphicon-lock i" aria-hidden="true"></span>
                                <input class="form-control sign_input" type="password" maxlength="32" autocomplete="off" placeholder="Password" name="password" id="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="remember" class="check-cont">
                                <input type="checkbox" class="hidden" name="remember" id="remember" onclick="return true;">
                                <span></span>
                                Remember me
                            </label>

                        </div>
                        <div class="login_action">
                            <button type="submit" id="login-submit" class="btn btn-blue pull-right" name="login">
                                <span class="submit-text"> Login <i class="icon_right white_ico"></i></span>
                                <img src="https://console.zaarapp.com/assets/images/loader.gif" alt="loader" class="form-loader hidden">
                            </button>
                        </div>

                        <div class="forget_pass">
                            <a href="#" id="forget_pass">
                                Forgot your Password? </a>

                        </div>
                        <div class="add_account">
                            Don't have an account? <a href="http://www.zaarapp.com/sign_up/">Sign up</a>
                        </div>
                    </form>
                    <!-- END LOGIN FORM -->


                </div>
                <div class="copyright">
                    Copyright © 2017  <a href="http://www.zaarapp.com/"> ZAAR Technologies</a>
                </div>
            </div>
            <div class="col-md-4"></div>


        </div>
    </div>



</section>




</body>
</html>









