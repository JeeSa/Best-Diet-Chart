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
?>

<?php
if (isset($_POST['delete'])){
    $delete_id = $_POST['id'];
    $delete = "delete from food_item WHERE id = '$delete_id'";
    $con->query($delete);
}

?>
<?php
$sql="select * from food_item";
$result=$con->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Food Item</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
    <!-- custom css -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div id="body">

    <div class="container-fluid">
        <div class="head ">
            <div class="row top_two" style="margin-top: 20px">
                <div class="col-sm-offset-5">
                    <!--                    <img src="image/salad.png" style="width:50px;height:50px;">-->
                    <span class="logo" style="font-family: 'Jim Nightshade', cursive">All Foods List</span>
                </div>
            </div>
            <img src="image/purple.jpg" class="img-responsive" style="height:10px;width:100%;">
        </div>
        <div class="col-sm-2 col-sm-offset-10">
            <a href="admin_page.php" class="btn btn-warning  ">Admin Panel</a>
            <a href="log_out.php?logout=1" class="btn btn-danger ">Log Out</a>
        </div>

        <br>
        <hr>
        <div class="row">
            <?php
            while($ans = $result->fetch_assoc()) {

                ?>
                <div class="col-sm-6 foods">
                    <div class="info_div">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="image/<?php echo $ans['image']; ?>" class="img-responsive" height="110px" width="100px">

                            </div>
                            <div class="col-sm-3">
                                <p><?php  echo $ans['name'];?></p>
                                <p><?php  echo $ans['quantity'];?> <?php  echo $ans['scale'];?></p>


                            </div>
                            <div class="col-sm-3">
                                <!--                                                             <p>Carbs:--><?php //echo $ans['carbs']?><!--</p>-->
                                <p>Calories:<?php echo $ans['calories']; ?></p>
                                <p>fats:<?php echo $ans['fats'];?></p>
                                <p>protin:<?php echo $ans['proteins'];?></p>


                            </div>
                            <div class="col-sm-2">
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                                    <input type="text" style="display: none" name="id" value="<?php echo $ans['id']; ?>" >
                                    <div>
                                        <input type="submit" style="margin-top: 10px" class="btn btn-danger btn-block" name="delete" value="Delete">
                                        <a href="edit_item.php?id=<?php echo $ans['id']; ?>" class="btn btn-primary btn-block">Edit Item</a>
                                    </div>


                                </form>

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