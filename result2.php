
<?php
session_start();
if(isset($_SESSION['user_id'])){
    $session_id = $_SESSION['user_id'];
}

include 'connection.php';
include 'function.php';

?>

<!--grab the last element of the user input-->
<?php

if (isset($_POST['value_submit']) || isset($_POST['select_meal'])) {

    $truncate = "TRUNCATE TABLE choice";
    $con->query($truncate);
    if (!isset($_SESSION['user_id'])){
        $gender = $_POST['gender'];
        $weight = $_POST['weight'];
        $age = $_POST['age'];
        $_SESSION['age'] = $age;
        $inch = $_POST['inch'];

        $feet = $_POST['feet'];
        $height = $feet . "." . $inch;
    }
    else{

        $query_info = "SELECT * from user_account WHERE id = '$session_id'";

            if ($result = $con->query($query_info)){
                $fetch_result = $result->fetch_assoc();

                $gender = $fetch_result['gender'];
                $weight = $fetch_result['weight'];
                $age = $fetch_result['age'];
                $_SESSION['age'] = $age;
                $height = $fetch_result['height'];






            }
            else{
                echo "wrong";
            }
    }

    $_SESSION['meal_time'] = $meal_time = strtolower($_POST['select_meal']);

    $meter = 0.3084 * $height;
    if (!empty($weight) && !empty($age) && !empty($meter)) {


        if ($gender == "male") {

            $_SESSION['calorie'] = (864 - (9.72 * $age)) + (1 * (14.2 * $weight) + (503 * $meter));


        } elseif ($gender == 'female') {
            $_SESSION['calorie'] = (387 - (7.31 * $age)) + (1 * (10.9 * $weight) + (660.7 * $meter));


        }


        if (!empty($_SESSION['calorie'])) {
            $ca_calorie = $_SESSION['calorie'];

            if ($ca_calorie < 1500){

                $ca_calorie -= 366;
                if ($meal_time == "snacks"){
                    $_SESSION['calorie'] =366/2;
                }
                else{
                    $_SESSION['calorie'] = $ca_calorie /3;
                }

            }

            elseif ($ca_calorie >=1500 && $ca_calorie <= 2000){
                $ca_calorie -=560;
                if ($_SESSION['meal_time']  == "breakfast"){
                    $_SESSION['calorie'] = $ca_calorie *(3/8);
                }
                elseif ($_SESSION['meal_time']  == "lunch"){
                    $_SESSION['calorie'] =  $ca_calorie *(3/8);
                }
                elseif ($_SESSION['meal_time']  == "dinner"){
                     $_SESSION['calorie'] =  $ca_calorie *(2/8);
                }
                elseif ($_SESSION['meal_time']  == "snacks"){
                    $_SESSION['calorie'] = 560/2;
                }


            }
            elseif ($ca_calorie >2000){
//                echo $_SESSION['meal_time'];
//                echo "here";
                $ca_calorie -=760;
                if ($_SESSION['meal_time'] == "breakfast"){
                    $_SESSION['calorie'] = $ca_calorie *(3/8);
//                    echo "hret";
                }
                elseif ($_SESSION['meal_time']  == "lunch"){
                    $_SESSION['calorie'] =  $ca_calorie *(3/8);
                }
                elseif ($_SESSION['meal_time']  == "dinner"){
                     $_SESSION['calorie'] =  $ca_calorie *(2/8);
                }
                elseif ($_SESSION['meal_time']  == "snacks"){
                    $_SESSION['calorie'] = 760/2;
                }

            }
        }


        //find calories


    }
}



//$query_calories = "SELECT calories from daily_need WHERE sex = '$sex' AND weight LIKE '%$weight%' AND height like '%$height%' AND meal_time like '%$meal_time%'" ;
//$result = $con->query($query_calories);
if (!empty($_SESSION['calorie']) && !empty($_SESSION['meal_time'])){

    $calorie_n = $_SESSION['calorie'];
    $meal_time = $_SESSION['meal_time'];


                                        //Starts 9-25-17
    $meal_time2 = $meal_time;
    //echo $meal_time2;
    if($meal_time2 == "lunch")
    {
        $meal_time2 = "dinner";
    }
    else if($meal_time2 == "dinner")
    {
        $meal_time2 = "lunch";
    }
                                        //Ends 9-25-17

//    food_item
    $food_item = "select * from food_item WHERE  calories <= '$calorie_n' and( meal_categories like '%$meal_time%' or meal_categories like '%$meal_time2%')";
    $_SESSION['all_item'] = $con->query($food_item);



}
if (isset($_POST['choice'])){




    $id = $_POST['id1'];
    $hello = $_POST['calo'];
    $name = $_POST['name'];
    $image = $_POST['image'];

    $sql_find = "SELECT * from choice WHERE food_id = '$id'";
    if($ans_find = $con->query($sql_find)->num_rows){
        ?>

        <script >alert("This item is on the list already")</script>
<?php
    }
    else{

            $sql_choice = "insert into choice (food_id,calories,name,image) VALUES ('$id','$hello','$name','$image')";
            $con->query($sql_choice);







    }










}





?>

<?php
//cancel

if (isset($_POST['cancel'])){
    $cancel_id = $_POST['id2'];
    $cancel = "delete from choice WHERE food_id = '$cancel_id'";
    $con->query($cancel);
}

?>
<?php

$sum_q = "select sum(calories) as sum_ans from choice WHERE 1";

$sum_q_1 = $con->query($sum_q)->fetch_assoc();

$_SESSION['sum_total'] = $sum_q_1['sum_ans'];



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
    <?php
        if (isset($session_id)){
            include 'navigation_user.php';
        }

    ?>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <span class="logo" style="font-family: 'Jim Nightshade', cursive"> <h3 class="text-info" style="font-family: cursive"><span ><?php echo strtoupper($_SESSION['meal_time']);?> </span >NUTRITION TARGET IS:<span><?php echo intval($_SESSION['calorie']);?> Calories</span></h3></span>
        </div>

    </div>

<!--    //main div for the page-->
    <div class="wrapper_div">
<!--        //row for division-->
         <div class="row row_main">
<!--             div for selected item-->

<!--             div for the diet plan chart and food list-->

             <div class="col-sm-7" style="margin-left: 30px;">

<!--                 food plan-->
                 <div class="food_select_wrapper">
<!--                     diet plan panel-->
                        <div class="row">
<!--                             <div class="panel panel-default">-->
<!--                                <div class="panel-heading text-center">-->
<!--                                    <span class="logo" style="font-family: 'Jim Nightshade', cursive"> <h3 class="text-info" style="font-family: cursive"><span >--><?php //echo strtoupper($_SESSION['meal_time']);?><!-- </span >NUTRITION TARGET IS:<span>--><?php //echo intval($_SESSION['calorie']);?><!-- Calories</span></h3></span>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                     suggested food panel-->
<!--                            search food php -->
                            <?php

                                if (isset($_POST['search_button'])){
                                   $name_of_food =  $_POST['search_food'];
                                }

                            ?>
                     <div class="row">
                         <div class="main_wrap_suggested">

                             <div class="panel panel-primary" ">
<!--                                 heading-->
                                 <div class="panel-heading">
                                     <div class="row">
                                         <div class="col-sm-4">
                                             <h4>Select Your Foods</h4>
                                         </div>
                                         <div class="col-sm-6 col-sm-offset-2">
                                             <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                             <div class="input-group">
                                                 <input type="text" class="form-control" name="search_food" placeholder="Search">
                                                 <div class="input-group-btn">
                                                     <button class="btn btn-default" name="search_button" type="submit">
                                                         <i class="glyphicon glyphicon-search"></i>
                                                     </button>
                                                 </div>
                                             </div>
                                             </form>
                                         </div>

                                     </div>

                                 </div>
<!--                                 this is for the panel body -->
                                 <div class="panel-body" style="max-height: 350px; overflow: scroll">

                                     <div class="panel_body_wrapper">
                                         <div class="row" >
                                             <?php
                                             if (isset($_POST['search_button'])){
                                                 $name_food = $_POST['search_food'];
                                                 $query_search = "SELECT * from food_item WHERE name LIKE '%$name_food%'";
                                                 $item_show = $con->query($query_search);
                                             }
                                             else{
                                                 $item_show = $_SESSION['all_item'];
                                             }



                                             while ($ans =$item_show->fetch_assoc()){

                                                 $separate = $ans['id'];

                                                 $query_separate = "select food_id from choice WHERE food_id = '$separate'";

                                                 if( !$con->query($query_separate)->num_rows >0){









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
                                                                 <input type="text" style="display: none" name="calo" value="<?php echo $ans['calories']; ?>" >
                                                                 <input type="text" style="display: none" name="name" value="<?php  echo  $ans['name'];?>">
                                                                 <input type="text" style="display: none" name="image" value="<?php  echo  $ans['image'];?>">



                                                                 <input type="text" style="display: none" name="id1" value="<?php echo $ans['id']; ?>" >



                                                                     <input type="submit" style="margin-top: 10px" class="btn btn-success" name="choice" value="choose">


                                                             </form>

                                                         </div>

                                                     </div>


                                                 </div>



                                             </div>
                                             <?php }} ?>



                                         </div>

                                     </div>

                                 </div>

                             </div>

                         </div>

                     </div>

<!--                     end of suggested food -->


                 </div>


             </div>
         </div>

             <div class="col-sm-4 " style="margin-left: 50px">

                 <?php $_SESSION['check_click'] = 0; ?>
                 <?php
                 if ($_SESSION['sum_total'] > 0 ){
                     if (isset($_POST['submit_list'])){

                         $_SESSION['check_click'] = 1;
                        // @ header('Location: calculation.php');

                     }

                 }

                 ?>
                 <!--                 this div is for the panel for selected item-->

                 <?php
                    if (!$_SESSION['check_click'] == 1) {


                        ?>
                        <div class="panel panel-primary" style="max-height: 410px; overflow: scroll">

                            <div class="panel-heading">
                                <!--                         row for headding and value-->

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo intval(convert_total($_SESSION['calorie'],$_SESSION['sum_total'])); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo intval(convert_total($_SESSION['calorie'],$_SESSION['sum_total'])); ?>%" >

                                        </div>
                                    </div>


                            </div>

                            <div class="panel-body" >
                                <!--                         for main list-->

                                <div class="main_list" >
                                    <!--                             //list items start-->

                                    <ul class="list-group" >
                                        <?php

                                        $choice_get = "select * from choice WHERE 1";

                                        $ans_choice = $con->query($choice_get);
                                        while ($ans_choice_1 = $ans_choice->fetch_assoc()) {


                                            ?>

                                            <li class="list-group-item">

                                                <form action="" method="post" class="form-inline">
                                                    <div class="row">
                                                        <div class="form-group col-sm-8">
                                                            <div class="col-sm-6">
                                                                <img src="image/<?php echo $ans_choice_1['image']; ?>"
                                                                     class="img-responsive" height="100%" width="100%">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <?php echo $ans_choice_1['name']; ?>
                                                                Calories:<?php echo $ans_choice_1['calories']; ?>
                                                            </div>


                                                        </div>
                                                        <div class="form-group  col-sm-2">
                                                            <form method="post"
                                                                  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                                <input type="text" style="display: none" name="id2"
                                                                       value="<?php echo $ans_choice_1['food_id']; ?>">
                                                                <input type="submit" class="btn btn-danger"
                                                                       name="cancel" value="Cancel">
                                                            </form>
                                                        </div>

                                                    </div>
                                                </form>

                                            </li>
                                        <?php } ?>

                                    </ul>

                                </div>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


                                    <div class="btn_for_sum">
                                        <input type="submit" class="btn btn-success pull-right" name="submit_list"
                                               value="submit">

                                    </div>
                                </form>

                            </div>

                        </div>
                        <?php
                    }

                else{



                 ?>
<!--                 panel for iframe-->
                 <div class="panel panel-default">
                     <iframe src="calculation.php" width="100%" style="border: none;min-height:380px;max-height: 500px; " ></iframe>
                     <div class="panel-footer">
                         <a href="result2.php" class="btn btn-primary">Re-calculate</a>

                             <a href="log_out.php?end" class="btn  btn-success pull-right">End</a>


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