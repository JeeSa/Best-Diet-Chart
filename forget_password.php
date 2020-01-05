<?php
    include 'connection.php';
    include 'function.php';
?>
<?php

    if (isset($_POST['rsubmit'])){
        $email = $_POST['remail'];

        if(!empty($email)){

            $query = "select password from user_account WHERE email = '$email'";
            $ans = $con->query($query);

            if($ans->num_rows > 0){


                $result = $ans->fetch_assoc();
                $password = $result['password'];
                $smtp = mail_which($email);
                if(mail_send($email,$smtp,$password)){
                    echo "your password is sent to your email";
                }


            }
            else{
                echo "This email Does'\nt Exits";
            }

        }
        else{
            echo "There is some empty Fields";
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


    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 100px;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Recover Password

                    </div>

                    <div class="panel-body">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <input type="email" required name="remail" class="form-control" placeholder="Enter Your Email">

                            </div>

                            <div class="form-group">
                                <input type="submit"  name="rsubmit" class="form-control btn btn-primary" value="Submit">

                            </div>

                        </form>

                    </div>


                </div>
                <a href="index.php" class="pull-right">Back to home page</a>
            </div>

        </div>

    </div>
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>