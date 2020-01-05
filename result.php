<?php
?>

<?php
include 'connection.php';
$id=0;
$sex="";
$weight="";
$age="";
$height="";
$meal_time="";
$height_inch="";
$hudai = "";
 $total=0;
 $i=0;



if(isset($_POST['total']))
{

    $total= $_POST['t1'];
    $total= $total+ $_POST['total'];


   $selected_id =$_POST['id'] ;
    $selected_calories = $_POST['cal'] ;
    $selected_name = $_POST['name'] ;
    $selected_image = $_POST['image'] ;


    $sql_for_insert_id =  "insert into  temp (selected_id,selected_name,selected_calories,selected_image) values('$selected_id','$selected_name','$selected_calories','$selected_image')";

    $con->query($sql_for_insert_id);






}
if(isset($_POST['submit']) || isset($_POST['total'])) {


    echo "hello";
    $sex = $_POST['sex'];
    //echo $sex;
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $meal_time = $_POST['meal_time'];
    //$height_inch = $_POST['height_inch'];

    echo $sex.":".$weight.":";
    $sql2 = "insert into user_input(sex,weight,age,height,meal_time,height_inch) values('$sex','$weight','$age','$height','$meal_time','$height_inch')";
    $con->query($sql2);





    if($weight>=0&&$weight<=5){
        $weight="0-5";
    }
    else if($weight>=5&&$weight<=8){
        $weight="5-8";
    }
    else if($weight>=9&&$weight<=10){
        $weight="9-10";
    }
    else if($weight>=10&&$weight<=15){
        $weight="10-15";
    }
    else if($weight>=15&&$weight<=20){
        $weight="15-20";
    }
    else if($weight>=20&&$weight<=25){
        $weight="20-25";
    }
    if($height>=1&&$height<=2){
        $height="1-2";
    }
    else if($height>=3&&$height<=3.5){
        $height="3-3.5";
    }
    else if($height>=3.5&&$height<=4){
        $height="3.5-4";
    }
    else if($height>=4&&$height<=4.5){
        $height="4-4.5";
    }
    else if($height>=4.5&&$height<=5){
        $height="4.5-5";
    }
    else if($height>=5&&$height<=5.5){
        $height="5-5.5";
    }
    if($age>=0&&$age<=2){
        $age="0-2";
    }
    else if($age>=2&&$age<=3){
        $age="2-3";
    }
    else if($age>=4&&$age<=5){
        $age="4-5";
    }
    else if($age>=5&&$age<=8){
        $age="5-8";
    }
    else if($age>=8&&$age<=10){
        $age="8-10";
    }
    else if($age>=10&&$age<=15){
        $age="10-15";
    }
    if(!isset($_POST['total']))
    {
        $hudai ="0 ";
        $sql_for_id="select *  from daily_need WHERE  age = '$age' and weight='$weight' and height = '$height' and meal_time = '$meal_time' AND  sex = '$sex' ";
        $result=$con->query($sql_for_id);

        echo $result->num_rows;

        while($row = $result->fetch_assoc())
        {
            //echo "yes";
            $hudai = $row['calories'];
        }
    }
    else
    {
        $hudai = $_POST['calories'];
    }

//    if($result)
//        echo "yes";
//    else
//        echo "fail";


    echo "Calories : ".$hudai."for ".$age;

    if($total >= $hudai)
    {
        ?>
        <script>
            alert("Don't Selct Plssssss :( !!!!!!")
        </script>
        <?php

    }

}

//echo "hello";


$sql_for_item="select * from food_item where meal_categories='$meal_time' and calories<='$hudai'";
$result=$con->query($sql_for_item);


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">


<!--    selected item-->
    <?php
            if(isset($_POST['total']))
            {

                $sql_for_selected_item = "select * from temp";
                $result_2 = $con->query($sql_for_selected_item);

                while($row_2 = $result_2->fetch_assoc())
                {

                    ?>
                    <div class="col-sm-4 ">
                        <div class="panel panel-default" style="margin-top:20px">
                            <div class="panel-heading text-center">
                                <h2>Daily Diet Plan</h2>
                            </div>
                            <div class=" panel-body">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <h4 class="text-info"><span>Breakfast </span>nutrition targets</h4>
                                    <h5>Total Calories:<span><?php echo "Calories : ".$hudai;?></span></h5>
                                    <p>Carbs:<span>15g-38g</span></p>
                                    <p>Fats:<span>7g-17g</span></p>
                                    <p>Protins:<span>15g-38g</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" style="margin-top:20px">
                            <div class="panel-heading text-center">
                                <h4>Suggested Foods</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-6">
                                    <form action="result.php" method="post">

                                        <button class="btn btn-default" type="submit" name="total" value="<?php echo $row_2['selected_calories'] ?>">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="image/<?php echo $row_2['selected_image']; ?>" style="height: 80px;width:100px">
                                                </div>
                                                <div class="col-sm-4" style="margin-top: 5px">
                                                    <h4><span><?php echo $row_2['selected_name']; ?></span></h4>
                                                    <p><span><?php echo $row_2['selected_calories']; ?></span></p>

                                                </div>
                                                <div class="col-sm-4" style="margin-top: 5px">
                                                    <p>Carbs:<span>15g-38g</span></p>
                                                    <p>Fats:<span>7g-17g</span></p>
                                                    <p>Protins:<span>15g-38g</span></p>
                                                </div>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                                <a href="result.php" style="text-decoration: none">
                                    <button class="btn btn-warning btn-block " type="submit">Submit</button>
                                </a>
                            </div>


                        </div>
                    </div>
                    <?php
                }
            }
    ?>







<!--    result item-->
    <form action="calculation.php" method="post">
        <div class="col-sm-8 col-sm-offset-4">
            <div class="panel panel-default" style="margin-top:20px">
                <div class="panel-heading text-center">
                    <h2>Daily Diet Plan</h2>
                </div>
                <div class=" panel-body">
                    <div class="col-sm-4">
                        <img src="image/one.jpg" style="height: 150px;width:240px;">
                    </div>
                    <div class="col-sm-4">
                        <h4 class="text-info"><span>Breakfast </span>nutrition targets</h4>
                        <h5>Total Calories:<span><?php echo "Calories : ".$hudai."for ".$age;?></span></h5>
                        <p>Carbs:<span>15g-38g</span></p>
                        <p>Fats:<span>7g-17g</span></p>
                        <p>Protins:<span>15g-38g</span></p>
                    </div>
                    <div class="col-sm-4">
                        <a href="select_food.php" style="text-decoration: none">
                            <button class="btn btn-default btn-lg">
                                <img src="image/search1.png" style="height: 50px;width:50px">
                                <!--                       <span class="glyphicon glyphicon-search "></span>-->
                                <!--                       <span class="glyphicon glyphicon-plus"></span>-->
                                <h4>Select Available Food</h4>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
            <div class="panel panel-default" style="margin-top:20px">
                <div class="panel-heading text-center">
                    <h4>Suggested Foods</h4>
                </div>
                <div class="panel-body">
                    <?php

                    while($row = $result->fetch_assoc())
                    {
                        ?>
                        <div class="col-sm-6">
                            <form action="result.php" method="post">


                                <!--                           $sex = $_POST['sex'];
                                    //echo $sex;
                                    $weight = $_POST['weight'];
                                    $age = $_POST['age'];
                                    $height = $_POST['height'];
                                    $meal_time = $_POST['meal_time'];
                                    $height_inch = $_POST['height_inch'];-->

                                <!--                           User Info -->
                                <input type="hidden" name="sex" value="<?php echo $sex ?>">
                                <input type="hidden" name="weight" value="<?php echo $weight ?>">
                                <input type="hidden" name="age" value="<?php echo $age ?>">
                                <input type="hidden" name="height" value="<?php echo $height ?>">
                                <input type="hidden" name="meal_time" value="<?php echo $meal_time ?>">
                                <input type="hidden" name="t1" value="<?php echo $total ?>">
                                <input type="hidden" name="calories" value="<?php echo $hudai ?>">

                                <!--                           User Info end-->


                                <!--                           selected Item Start -->
                                <input type="hidden" name="cal" value="<?php echo $row['calories']; ?>">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                                <input type="hidden" name="image" value="<?php echo $row['image']; ?>">

                                <!--                           selected Item End -->







                                <button class="btn btn-default" type="submit" name="total" value="<?php echo $row['calories'] ?>">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="image/<?php echo $row['image']; ?>" style="height: 80px;width:100px">
                                        </div>
                                        <div class="col-sm-4" style="margin-top: 5px">
                                            <h4><span><?php echo $row['name']; ?></span></h4>
                                            <p><span><?php echo $row['calories']; ?></span></p>

                                        </div>
                                        <div class="col-sm-4" style="margin-top: 5px">
                                            <p>Carbs:<span>15g-38g</span></p>
                                            <p>Fats:<span>7g-17g</span></p>
                                            <p>Protins:<span>15g-38g</span></p>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <?php
                    }

                    ?>
                    <?php echo "Calories : ".$hudai;?>
                    <br>
                    <?php echo" Total: ".$total;?>
                    <a href="result.php" style="text-decoration: none">
                        <button class="btn btn-warning btn-block " type="submit">Submit</button>
                    </a>
                </div>


            </div>
        </div>
    </form>

</div>
</body>
</html>
