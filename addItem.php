<?php
include 'connection.php';
session_start();
if(isset($_SESSION['user_id'])){
    $session_id = $_SESSION['user_id'];
}
else
{
    header("location:index.php");
}
$image="";
$name="";
$meal_categories="";
$food_categories="";
$scale="";
$quantity="";
$calories="";
//$carbs="";
$proteins="";
$fats="";
if(isset($_POST['submit']))
{
    $image = $_FILES['image']['name'];
    $file_location = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_location,"image/".$image);



    $name=$_POST['name'];
    $meal_categories=$_POST['meal_categories'];
    $food_categories=$_POST['food_categories'];
    $scale=$_POST['scale'];
    $quantity=$_POST['quantity'];
    $calories=$_POST['calories'];
//    $carbs=$_POST['carbs'];
    $proteins=$_POST['proteins'];
    $fats=$_POST['fats'];
    $sql2="insert into food_item(image,name,meal_categories,food_categories,scale,quantity,calories,proteins,fats) values('$image','$name','$meal_categories','$food_categories','$scale','$quantity','$calories','$proteins','$fats')";
    $con->query($sql2);

}
?>
<html>
<head>
    <title>Add new product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addFood</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
</head>
<body>
<div class="container-fluid" id="main"></div>
<center>
    <form enctype="multipart/form-data" action="#" method="post">
        <div class="row">

            <div class="col-sm-2 col-sm-offset-10">
                <a href="admin_page.php" class="btn btn-warning  ">Admin Panel</a>
                <a href="log_out.php?logout=1" class="btn btn-danger ">Log Out</a>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Add new Item</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <form enctype="multipart/form-data" action="" method="post">
                                <div class="col-sm-6">
                                    <i class="fa fa-plus-square"></i>
                                    <input type="file" name="image">


                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <input type="text" class="form-control" id="usr" placeholder="Enter Food Name...." name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="food">meal Categories</label>
                                        <select class="form-control" id="food" name="meal_categories">
                                            <option>Breakfast Meal</option>
                                            <option>Lunch Meal</option>
                                            <option>Dinner Meal</option>
                                            <option>Snacks Meal</option>
                                            <option>All Meal</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="food">food Categories</label>
                                        <select class="form-control" id="food" name="food_categories">
                                            <option>Vegetables</option>
                                            <option>Fruits</option>
<!--                                            <option>Fishes</option>-->
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
                                    <div class="form-group">
                                        <label for="food">Measurement Scale</label>
                                        <select class="form-control" id="food" name="scale">
                                            <option>Piece</option>
                                            <option>Gram</option>
                                            <option>Cup</option>
                                            <option>Slice</option>
                                            <option>Bowl</option>
                                            <option>Tsp</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="usr" placeholder="Quantity" name="quantity">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="usr" placeholder="Calories" name="calories">
                                    </div>

<!--                                    <div class="form-group">-->
<!--                                        <input type="number" class="form-control" id="usr" placeholder="Carbs" name="carbs">-->
<!--                                    </div>-->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr" placeholder="proteins" name="proteins">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr" placeholder="Fats" name="fats">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
    </form>




    </div>
</center>
</body>
</html>
