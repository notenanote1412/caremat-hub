<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- global js -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- Bootstrap -->
    <script src="../../assets_signin/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets_signin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="../../assets_signin/js/raphael-min.js"></script>
    <script src="../../assets_signin/js/livicons-1.4.min.js"></script>
    <script src="../../assets_signin/vendors/iCheck/js/icheck.js" type="text/javascript"></script>
    <script src="../../assets_signin/js/page/login.js" type="text/javascript"></script>
    <!-- end of global js -->

    <script src="../../assets_signin/vendors/toastr/js/toastr.min.js"></script>

    <!-- global level css -->
    <link href="../../assets_signin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets_signin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="../../assets_signin/css/pages/login.css" />
    <link href="../../assets_signin/vendors/iCheck/css/square/blue.css" rel="stylesheet" />
    <!-- end of page level css -->

    <link href="../../assets_signin/vendors/toastr/css/toastr.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">


            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>

                    <div id="wrapper">
                        <div id="login" class="animate form" style="background: white">
                            <form action="" autocomplete="on" method="post" role="form" id="login_form">
                                <center>
                                    <img src="../../assets_signin/img/logo.png" width="100%" style="margin-top: 10px; margin-bottom: 2px">

                                    <h3 style="font-size: 26px">
                                        Sign In </h3>
                                </center>
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="wFYbruBUBtqyZjt7cNumm6fqSYm4yFPG6Cg864KQ" />

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="username" class="uname control-label"> <i class="livicon" data-name="user" data-size="20" data-loop="true" data-c="#000000" data-hc="#3c8dbc"></i>
                                        Username </label>
                                    <input id="username" name="username" placeholder="Username" value="" />

                                    <div class="col-sm-12">

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd"><i class="livicon" data-name="key" data-size="20" data-loop="true" data-c="#000000" data-hc="#3c8dbc"></i>
                                        Password </label>
                                    <input id="password" name="password" type="password" placeholder="Password" />

                                    <div class="col-sm-12">

                                    </div>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <input type="checkbox" name="remember-me" id="remember-me" value="true" class="square-blue" />
                                    <label style="margin-left: 0.5rem;">Keep me logged in </label>
                                </div>
                                <p class="login button">
                                    <input type="submit" value="Sign In" class="btn btn-primary" style="padding: 9px 20px;" />
                                </p>

                                <p class="change_link text-center">
                                    <a href="#toforgot">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">
                                            Forgot password </button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="forgot" class="animate form" style="background: white">
                            <form action="" autocomplete="on" method="post" role="form" id="reset_pw">
                                <h3>
                                    <img src="../../assets_signin/img/logo-mid.png"><br>Forgot password
                                </h3>

                                <p>
                                    Enter your email address below and we will send a special reset password link to your inbox. </p>

                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="wFYbruBUBtqyZjt7cNumm6fqSYm4yFPG6Cg864KQ" />

                                <div class="form-group ">
                                    <label style="margin-bottom:0px;" for="emailsignup1" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail </label>
                                    <input id="email" name="email" required type="email" placeholder="your@mail.com" value="" />

                                    <div class="col-sm-12">

                                    </div>
                                </div>

                                <p class="login button">
                                    <input type="submit" value="Reset password" class="btn btn-success" />
                                </p>

                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back </button>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js')}}"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script>







</body>


</html>