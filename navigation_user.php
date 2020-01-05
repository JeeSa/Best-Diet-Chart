<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/4/2017
 * Time: 1:08 AM
 */


?>

<div class="row top_two">
   <div class="col-sm-3">
       <a href="index.php">  <img src="image/salad.png" style="width:50px;height:50px;"></a>
            <span class="logo">Best Diet Chart</span>
        </div>
    <div class="col-sm-9 ">
        <!--               <nav class="navbar navbar-default">-->
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li ><a href="food_diary.php">FOOD DIARY</a></li>
            <li ><a href="nutation_plan.php">NUTRITION PLAN</a></li>
            <li	><a href="contact.php">CONTACT</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <?php
            if (isset($_SESSION['user_id'])){



            ?>
<!--            <li><a href="history.php">Your History</a></li>-->
            <li><a href="log_out.php?logout">Logout</a></li>
        </ul>
        <?php
        }
        if (isset($_SESSION['user_id'])){



        ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="user_profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name'];?></a></li>

        </ul>
        <?php } ?>
        <!--              </nav>-->
    </div>


</div>
