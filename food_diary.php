<?php
session_start();
include 'connection.php';

if (isset($_POST['button_search'])){

    $name_food = $_POST['search_food'];
    $name_category = $_POST['category'];

    $sql= "SELECT * from food_item WHERE name LIKE '%$name_food%' AND food_categories LIKE  '%$name_category%'";

}
else{
    $sql="select * from food_item";
}

$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Diary</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
    <!-- custom css -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div id="body">
    <?php

        include 'navigation_user.php';


    ?>
    <div class="container-fluid">
        <div class="head ">
            <div class="row top_two" style="margin-top: 20px">
                <div class="col-sm-offset-5">
<!--                    <img src="image/salad.png" style="width:50px;height:50px;">-->
                    <span class="logo" style="font-family: 'Jim Nightshade', cursive">Food Diary</span>
                </div>
            </div>
            <img src="image/purple.jpg" class="img-responsive" style="height:10px;width:100%;">
        </div>
        <div class="panel panel-default" style="margin-top: 5px;">
            <div class="panel-body">
                <div class="row">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="col-sm-6 ">
                            <select class="form-control" name="category" id="food">
                                <option>Vegetables</option>
                                <option>Fruits</option>
                                <option>Milks</option>
                                <option>Grains</option>
                                <option>Protein Foods</option>
                                <option>Curry</option>
                                <option>Dairy Food</option>
                                <option>Snacks</option>
                                <option>Drinks</option>
                                <option>Others</option>
                            </select>
                        </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_food" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="button_search">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <?php
            while($row = $result->fetch_assoc()) {

                ?>
                <div class="col-sm-3">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                            <h4><?php    echo $row['name']; ?></h4>
                        </div>
                        <div class="panel-body" style="height: 40%;">
                            <img src="image/<?php echo $row['image']; ?>" class="img-responsive"style="height: 100%;width: 100%">
                        </div>
                        <div class="panel-footer">
                            <div class="row" style="font-size:10px">
                                <div class="col-sm-6">
                                    <h6>FoodType:<?php   echo $row['food_categories']; ?></h6>

                                    <h6>Quantity:<span><?php echo $row['quantity']?></span><span><?php echo $row['scale']?></span></h6>


                                </div>
                                <div class="col-sm-6">
                                    <p>Calories:<span><?php echo $row['calories']?>g</span></p>
                                    <p>Fats:<span><?php echo $row['fats']?>g</span></p>
                                    <p>Proteins:<span><?php echo $row['proteins']?>g</span></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>

    </div>


</div>
</body>
</html>