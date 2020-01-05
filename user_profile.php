<?php
include 'connection.php';
session_start();
if(isset($_SESSION['user_id'])){
    $session_id = $_SESSION['user_id'];
    //echo "hello";

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
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $row['name'];?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"></div>

                                <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        <tbody>
                                        <tr>
                                            <td>User Name:</td>
                                            <td><?php echo $row['user_name'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Password:</td>
                                            <td><?php echo $row['password'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Age</td>
                                            <td><?php echo $row['age'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td><?php echo $row['gender'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Weight:</td>
                                            <td><?php echo $row['weight'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Height</td>
                                            <td><?php echo $row['height'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="mailto:<?php echo $row['email']?>"><?php echo $row['email'];?></a></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="user_profile_edit.php" class="btn btn-primary btn-block">Edit Profile</a>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }
       ?>
    </div>
</div>

</body>
</html>