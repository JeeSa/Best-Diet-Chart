<?php include 'connection.php';?>
<?php session_start(); ?>
<?php
if (isset($_SESSION['user_id'])){
    header('Location: input_info.php');
}



?>
<?php


if (isset($_POST['login'])){

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        echo "He";

        $password = $_POST['password'];
        $email = $_POST['email'];

        $query_login = "SELECT id ,name from user_account WHERE email = '$email' AND password = '$password'";
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
    <title>HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="css1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid" id="main">
<!--    start header-->
    <div  class="container-fluid" id="main-header">
    <div class="row">
        <!--top header starts-->
        <div  class="row margin5">
            <div class="col-sm-4">
                <h5 class="  content-title">Best Body Ever: What to Eat? </h5>
            </div>
            <!--top header start-->
            <div class="col-sm-3 col-sm-offset-5">

                <ul class="top-nav">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-lg"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus fa-lg"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-lg"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
        <hr>
        <!--top header ends-->
<?php include 'navigation.php';?>
        <hr>
        <div class="header_end ">
            <h1 class="header_tagline">Put your diet on autopilot</h1>
            <div class="header_info">
                <div style="max-width: 740px;font-family:'Times New Roman', Times, serif;
                font-size:25px; margin-bottom:10px">
                    <strong>
                       Best Diet Chart creates personalized meal plans based on your food preferences, budget,
                        and schedule. Reach your diet and nutritional goals with our calorie calculator, weekly
                        meal plans, grocery lists and more.
                    </strong>
                </div>


            </div>
            <div class="nutation" style="margin:0 200px 0 200px;">
                <div class="panel panel-default">
                    <div class="panel-heading"><div class="strong_header_info" style=" font-family: Arial, Helvetica, sans-serif;font-size:30px; text-align: center;">Create your meal plan right here.</div></div>
                    <div class="panel-body "><button type="button" class="btn btn-warning btn-lg center-block" style="width:500px;" data-toggle="modal" data-target="#myModal">Start Your Plan <span class="glyphicon glyphicon-random"></span></button></div>
                </div>
            </div>
        </div>
</div>
<!--    modal for login and register-->
    <div class="modal fade full-screen" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">


            <?php include "user_registration2.php";?>
            <div class="modal-footer" style="border: none">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>

    <!--        close header-->
<div class="col-sm-12">
    <div class="row text-center" style="margin-top:30px">
        <div class="col-sm-12">
            <h1>Eating smart has never been easier</h1>
        </div>
        <div class="col-sm-3">
            <img src="image/buff.png" style="height: 230px">
        </div>
        <div class="col-sm-6">
            <p style="max-width: 800px; font-family:'Jim Nightshade', cursive;font-size: large">The best nutrition strategy is the one that actually happens, because behaviors, not ideas, are the secret to changing your diet. Eat This Much makes meal planning simple, automatic, customizable, and most importantly, doable.</p>
            <br>
            <p style="max-width: 800px; font-family:'Jim Nightshade', cursive;font-size: large""> We created Best Diet Chart to save you time and energy while also giving you complete control over the meal planning process. Caloric and macro targets, recipes, grocery lists and a growing food database are all here to help you create your best meal plan.</p>
        </div>
        <div class="col-sm-3">
            <img src="image/happy.png">
        </div>
    </div>
</div>
</div>
<footer class="container-fluid bg-4 text-center">
    <p style="font-family: 'Jim Nightshade', cursive">Copyrights &copy Best Diet Chart</p>
</footer>
</body>
</html>
