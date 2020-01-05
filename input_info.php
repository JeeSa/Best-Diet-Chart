<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_input_info.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="body_continer_inpuit">

    <div class="container">
        <?php

                include 'navigation_user_input_info.php';


        ?>
        <br>
        <br>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form_start">
                <h2 class="text-center">WELCOME</h2>

                <h2 class="text-center">GET YOUR FREE DIET ANALYSIS</h2>
<!--                <h4 class="text-center">SELECT YOUR MEAL TIME</h4>-->

                <div class="for_form">
                    <form class="form" method="post" action="result2.php">
                        <?php

                        if (!isset($_SESSION['user_id'])){



                            ?>
                        <div class="form-group">
                            <label style="color:#FFFFFF;font-weight: bold;font-size: large;" for="option">Meal Time</label>
                            <select id="option" class="form-control input-lg" name="select_meal">
                                <option value="breakfast" class="form-control">Breakfast</option>
                                <option value="lunch" class="form-control">Lunch</option>
                                <option value="dinner" class="form-control">Dinner</option>
                                <option value="snacks" class="form-control">Snacks</option>

                            </select>
                        </div>
                        <!--age and weight-->




                       <div class="row">
                           <!--age-->
                           <div class="col-sm-6">
                               <div class="form-group">
                                   <label style="color:#FFFFFF;font-weight: bold;font-size: large;" for="age">Age</label>
                                   <input type="text" id="age" class="form-control input-lg" placeholder="Enter your Age" name="age">
                               </div>

                           </div>
                           <!-weight-->
                           <div class="col-sm-6">

                               <div class="form-group">
                                   <label style="color:#FFFFFF;font-weight: bold;font-size: large;" for="weight">Weight</label>
                                   <input type="text"  id="weight" class="form-control input-lg" placeholder="Enter your weight" name="weight">
                               </div>

                           </div>

                       </div>


                        <!--height-->



                        <div class="row">
                            <!--age-->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color:#FFFFFF;font-weight: bold;font-size: large;" for="height">Height in Feet</label>
                                    <input type="text" id="height" class="form-control input-lg" placeholder="Feet" name="feet">
                                </div>

                            </div>
                            <!-weight-->
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label style="color:#FFFFFF;font-weight: bold;font-size: large;" for="inch">Height in Inch</label>
                                    <input type="text"  id="inch" class="form-control input-lg" placeholder="Inch" name="inch">
                                </div>

                            </div>

                        </div>


                        <!--for gender-->
                        <div class="form-group">
                            <label style="color:#FFFFFF;font-weight: bold;font-size: large;" for="gender">Gender</label>
                            <select id="gender" class="form-control input-lg" name="gender">
                                <option value="male" class="form-control">Male</option>
                                <option value="female" class="form-control">Female</option>


                            </select>
                        </div>

                        <!--submit button-->
                        <div class="form-group">
                            <input type="submit" name="value_submit" value="GET YOUR RESULT" class="form-control btn btn-block input-lg btn-info">

                        </div>
                        <?php } else{

                        ?>
                            <div class="form-group">
                                <input type="submit" name="select_meal" value="BreakFast" style="color:#191970;font-weight: bold;font-size: large" class="form-control btn btn-block input-lg btn-info">

                            </div>
                            <div class="form-group">
                                <input type="submit" name="select_meal" value="Lunch"style="color:#191970;font-weight: bold;font-size: large" class="form-control btn btn-block input-lg btn-info">

                            </div>
                            <div class="form-group">
                                <input type="submit" name="select_meal" value="Dinner"style="color:#191970;font-weight: bold;font-size: large" class="form-control btn btn-block input-lg btn-info">

                            </div>
                            <div class="form-group">
                                <input type="submit" name="select_meal" value="Snacks"style="color:#191970;font-weight: bold;font-size: large" class="form-control btn btn-block input-lg btn-info">

                            </div>

                        <?php } ?>

                    </form>

                </div>



            </div>


        </div>
    </div>

</div>

</body>
</html>