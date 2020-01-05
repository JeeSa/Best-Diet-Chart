<?php include 'connection.php';?>
<?php
session_start();
if(isset($_SESSION['user_id'])){
    $session_id = $_SESSION['user_id'];
}
else
{
    header("location:index.php");
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
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css1.css">
    <!-- custom css -->
</head>
<body>
<br>
<div class="container-fluid">
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h2>Admin Panel</h2>
                </div>
                <div class="panel-body">
                    <div class="addDelete col-sm-5">
                        <ul style="list-style-type:none;margin-right:35px;" >

                            <li ><a href="addItem.php" class="btn btn-success btn-block ">ADD Food Item</a></li>
                            <br>
                            <li ><a href="delete_food_item.php" class="btn btn-warning btn-block ">Delete OR Edit  Food Item</a></li>
                            <br>
                            <li ><a href="log_out.php?logout=1" class="btn btn-danger btn-block ">Log Out</a></li>


                        </ul>
                    </div>
<!--                    reg start-->

                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h2>New Admin Registration</h2>
                            </div>
                            <div class="panel-body">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <input type="text" class="form-control" name="name"placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <input type="password" class="form-control" name="password"placeholder="password">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="password" class="form-control" name="com_pass" placeholder="confirm password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <input type="tel" class="form-control" name="phone" placeholder="Phone....">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" name="reg_submit">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>


<!-- javascript here -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>

<!-- custom js  -->
</body>
</html>