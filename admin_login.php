<?php include 'connection.php';?>
<?php session_start(); ?>
<?php
if (isset($_SESSION['user_id'])){
    header('Location:index.php');
}

?>

<?php
if(isset($_POST['reg_submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $com_pass = $_POST['com_pass'];
    $phone = $_POST['phone'];
    $register = "insert into admin_account(name,email,password,com_pass,phone) VALUES('$name','$email','$password','$com_pass','$phone') ";
    $con->query($register);
}

if (isset($_POST['login'])){

    if (!empty($_POST['email']) && !empty($_POST['password'])){

        $password = $_POST['password'];
        $email = $_POST['email'];

        $query_login = "SELECT id ,name from admin_account WHERE email = '$email' AND password = '$password'";
        if($con->query($query_login)->num_rows > 0){
            $result = $con->query($query_login);

            $result_fetch = $result->fetch_assoc();

            $_SESSION['user_id'] = $result_fetch['id'];
            $_SESSION['email'] = $result_fetch['email'];
            $_SESSION['name'] = $result_fetch['name'];
            header('Location: admin_page.php');



        }else{
            echo "Invalid user or password";
        }




    }
    else{
        echo "Fill up the Fields first";
    }

}

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/color.css">
    <!-- custom css -->
</head>
<body>
<?php include 'navigation_user_input_info.php';?>
<hr>
<div class="container-fluid" style="margin-top: 40px">
    <div class="col-sm-5 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h2>Admin Login</h2>
            </div>
            <div class="panel-body">
                <form action="admin_login.php" method="post">


                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="password" class="form-control" name="password"placeholder="password">
                        </div>

                    </div>

                  <a href="admin_page.php"><button type="submit" class="btn btn-success btn-block" name="login">Submit</button></a>

                </form>

            </div>
        </div>
    </div>
<!--    <div class="col-sm-5 col-sm-offset-1">-->
<!--        <div class="panel panel-default">-->
<!--            <div class="panel-heading text-center">-->
<!--                <h2>Admin Registration Page</h2>-->
<!--            </div>-->
<!--            <div class="panel-body">-->
<!--                <form action="#" method="post">-->
<!--                    <div class="row">-->
<!--                        <div class="form-group col-sm-12">-->
<!--                            <input type="text" class="form-control" name="name"placeholder="Enter Your Name">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="form-group col-sm-12">-->
<!--                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="form-group col-sm-6">-->
<!--                            <input type="password" class="form-control" name="password"placeholder="password">-->
<!--                        </div>-->
<!--                        <div class="form-group col-sm-6">-->
<!--                            <input type="password" class="form-control" name="com_pass" placeholder="confirm password">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="form-group col-sm-12">-->
<!--                            <input type="tel" class="form-control" name="phone" placeholder="Phone....">-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-primary btn-block" name="reg_submit">Submit</button>-->
<!--                </form>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</div>

</body>
</html>

