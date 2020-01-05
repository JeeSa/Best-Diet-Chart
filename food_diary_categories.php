

<?php
include 'connection.php';
if(isset($_GET['name'])){
    $cat_pro= $_GET['name'];

}

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
<?php

$sql = "SELECT * FROM products WHERE food_categories='$cat_pro'";
$result = $con->query($sql);

?>

<div class="container-fluid">
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

                                <h6>Quantity<span><?php echo $row['quantity']?></span><span><?php echo $row['scale']?></span></h6>


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