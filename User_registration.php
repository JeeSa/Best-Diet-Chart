<?php include 'connection.php';?>
<?php session_start(); ?>
<?php
if (isset($_SESSION['user_id'])){
    header('Location: input_info.php');
}

?>
<?php


if (isset($_POST['login'])){

    if (!empty($_POST['user_name']) && !empty($_POST['password'])){

        $password = $_POST['password'];
        $user_name = $_POST['user_name'];

        $query_login = "SELECT id ,name from user_account WHERE user_name = '$user_name' AND password = '$password'";
        if($con->query($query_login)->num_rows > 0){
            $result = $con->query($query_login);

            $result_fetch = $result->fetch_assoc();

            $_SESSION['user_id'] = $result_fetch['id'];
            $_SESSION['name'] = $result_fetch['name'];
            header('Location: input_info.php');



        }else{
            echo "Invalid user or password";
        }




    }
    else{
        echo "Fill up the Fields first";
    }

}
if (isset($_POST['reg_submit'])){
    if (!empty($_POST['name']) && !empty($_POST['email_i']) && !empty($_POST['user_name_i']) && !empty($_POST['user_password'])
    && !empty($_POST['gender']) && !empty($_POST['age']) && !empty($_POST['weight']) && !empty($_POST['feet'])){

        $name =$_POST['name'];
        $user_name = $_POST['user_name_i'];
        $email = $_POST['email_i'];
        $password = $_POST['user_password'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $feet = $_POST['feet'];
        $inch = $_POST['inch'];
        if (empty($inch)){
            $inch = 0;
        }
        $height = $feet.".".$inch;

        $query_register = "insert into user_account(name,email,user_name,password,age,weight,gender,height) VALUES('$name','$email','$user_name',
'$password','$age','$weight','$gender','$height') ";

        if ($con->query($query_register)){
            echo "register is success full";
        }
        else{
            echo "connection problem";
        }




    }
    else{
        echo "FILL UP ALL the Fields";
    }




}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="user_reg_wrapper">
        <div class="form_Wrapper">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3 col-lg-offset-1 log_in">
                    <div class="login_form_wrapper">
                        <div class="log_in_header">
                            <h2>Log In</h2>

                        </div>
                        <hr >
                        <div class="form_wrapper">
                            <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="form-group">
                                    <label for="user_name">User Name:</label>
                                    <input type="text" class="form-control" id="user_name" name="user_name">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                               <hr style="width: 50%">
                                <input type="submit" class="form-control btn btn-success" name="login" value="Log in">



                            </form>

                        </div>

                    </div>



                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 col-lg-offset-1" >
                    <div class="form_register_wrapper">
                        <div class="register_header text-center">
                            <h2>Sign Up</h2>
                            <p>Sing Up for Perfect health</p>

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



                        </form>


                    </div>

                </div>

            </div>


        </div>

    </div>
</div>


</body>

</html>