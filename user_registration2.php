
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="user_reg_wrapper">
        <div class="form_Wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 log_in" style="background-color: #dce6f8">
                    <div class="login_form_wrapper" style="margin-top:10px">

                        <div class="form_wrapper col-sm-10" style="margin-top:3px">
                            <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="form-group col-sm-5">
                                    <input type="text" class="form-control" id="email" name="email"  placeholder="Enter your full Email">
                                </div>
                                <div class="form-group col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your full Password">
                                </div>
                               <div class="col-sm-2"><input type="submit" class="form-control btn btn-success" name="login" value="Log in"></div>

                            </form>
                        </div>
                        <div class="col-sm-2" style="margin-top:12px">
                            <a href="forget_password.php">Forgot Password?</a>
                        </div>
                    </div>



                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-3" >
                    <div class="form_register_wrapper">
                        <div class="register_header text-center">
                            <h2 style="color: white;">Sign Up</h2>
                            <p style="color: white;">Sing Up for Perfect health</p>

                        </div>
                        <hr>
                        <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter your full name">

                            </div>
                            <!--                            email-->
                            <div class="form-group">
                                <input type="email" name="email_i" class="form-control" placeholder="Enter your Eamil">

                            </div>
                            <!--                            user name and password field-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_name_i" placeholder="Enter User Name">

                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="user_password" placeholder="Enter password">

                                    </div>

                                </div>

                            </div>
                            <!--                            gender-->
                            <div class="form-group">
                                <select name="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                            </div>
                            <!--                            age &weight-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="age" placeholder="Enter age">

                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="weight" placeholder="Enter Weight">

                                    </div>

                                </div>

                            </div>

                            <!--                            feet inch-->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="feet" placeholder="FEET">

                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="inch" placeholder="INCH">

                                    </div>

                                </div>

                            </div>
                            <hr style="width: 50%">

                            <input class="form-control btn btn-primary" type="submit" name="reg_submit" value="Sign Up">
                            <hr style="width: 60%">
                            <a href="input_info.php" class="btn btn-block btn-default">Continue Without Account</a>



                        </form>


                    </div>

                </div>

            </div>


        </div>

    </div>

</div>

</body>

</html>