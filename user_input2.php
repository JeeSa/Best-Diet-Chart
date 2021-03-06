
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
    <div class="col-sm-8 col-sm-offset-2">
        <form action="result2.php" method="post">
            <div class="panel panel-default" style="margin-top:20px">
                <div class="panel-heading text-center">
                    <h2>User Information</h2>
                </div>
                <div class=" panel-body">
                    <div class="col-sm-6">
                        <form class="form-horizontal" action="#" method="post">
                            <div class="form-group form-inline">
                                <label class="control-label col-sm-3" for="sex">SEX :</label>
                                <div class="radio col-sm-3">
                                    <label><input type="radio" name="sex" value="female">FEMALE</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="sex" value="male">MALE</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-inline">

                                    <label class="control-label col-sm-3" for="weight">Weight :</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="weight" placeholder="Enter your Weight">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-inline">
                                    <label class="control-label col-sm-3" for="age">AGE :</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control"  name="age" placeholder="Enter your Age">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-inline">
                                    <label class="control-label col-sm-3" for="age">HEIGHT :</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control"  name="height" placeholder="Height in fit">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-inline">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control"  name="height_inch" placeholder="Height in inch">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-inline">
                                    <label class="control-label col-sm-3" for="meals" style="margin-left:14px">Meal Time:</label>
                                    <select class="form-control" id="meals" name="meal_time">
                                        <option value="Breakfast">Breakfast</option>
                                        <option value="Lunch">Lunch </option>
                                        <option value="Dinner">Dinner </option>

                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-sm-6">
                        <img src="image/11.jpg" style="height: 400px;width: 400px;">
                    </div>

                </div>
                <div class=" panel-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary btn-block" name="submit_input">Submit</button>
                        </div>
                        <div class="col-lg-6">
                            <a href="#" style="text-decoration: none"><button type="reset" class="btn btn-warning btn-block" name="submit">Reset</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>

</div>

</body>

</html>

