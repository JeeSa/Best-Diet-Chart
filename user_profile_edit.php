<?php
/**
 * Created by PhpStorm.
 * User: momin
 * Date: 10/19/2017
 * Time: 11:34 AM
 */
include 'connection.php';
session_start();
if(isset($_SESSION['user_id'])){
    $session_id = $_SESSION['user_id'];
    //echo "hello";



    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql_edit = "update user_account set name = '$name',user_name = '$user_name',age='$age',weight='$weight',height='$height',email='$email',password = '$password',gender='$gender'";

        $con->query($sql_edit);


    }

    $sql_for_user_info = "select * from user_account WHERE id = '$session_id'";
    $result = $con->query($sql_for_user_info);
}
else
{
    header("location:index.php");
}



//echo $_SESSION['name'].$_SESSION['user_id'];


?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad
        {margin-top:40px;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <?php
    if (isset($session_id)){
        include 'navigation_user.php';
    }

    ?>
    <div class="container">

        <?php
        while($row = $result->fetch_assoc() )
        {
            ?>
                <form action="" method="post">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><input type="text" value="<?php echo $row['name'];?>" name="name" class="form-control"></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center"></div>

                                        <div class=" col-md-9 col-lg-9 ">
                                            <table class="table table-user-information">
                                                <tbody>
                                                <tr>
                                                    <td>User Name:</td>
                                                    <td><input type="text" value="<?php echo $row['user_name'];?>" name="user_name" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Password:</td>
                                                    <td><input type="text" value="<?php echo $row['password'];?>" name="password" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Age</td>
                                                    <td><input type="text" value="<?php echo $row['age'];?>" name="age" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender:</td>
                                                    <td><input type="text" value="<?php echo $row['gender'];?>" name="gender" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Weight:</td>
                                                    <td><input type="text" value="<?php echo $row['weight'];?>" name="weight" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Height</td>
                                                    <td><input type="text" value="<?php echo $row['height'];?>" name="height" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><input type="text" value="<?php echo $row['email'];?>" name="email" class="form-control"></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <input type="submit" name="submit" value="Save" class="btn btn-primary btn-block"></input>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            <?php
        }
        ?>
    </div>
</div>

</body>
</html>