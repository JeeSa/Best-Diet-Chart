
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/color.css">
    <!-- custom css -->
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default" style="margin-top: 30px">
            <div class="panel-heading text-center">
                <h2>User Login</h2>
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

                    <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
                </form>

                <button type="submit" class="btn btn-primary btn-block" name="submit">Create New Account</button>
            </div>
        </div>
    </div>

</div>

</body>
</html>

