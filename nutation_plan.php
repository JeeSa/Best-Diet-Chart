<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nutrition plan</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <?php
    include "navigation_user.php";

    ?>
 <div class="col-sm-10 col-sm-offset-1">
     <div class="panel panel-info" style="margin-top: 30px">
        <div class="panel-heading text-center">
            <h2>Daily Nutrition Plan </h2>
        </div>
         <div class="panel-body">
             <img src="image/cover4.jpg" style="height:200px;width:1035px">
         </div>
         <div class="panel-body">
           <div class="col-sm-10 col-sm-offset-1">
               <h3>How Many Calories Do You Need? - Daily Calorie Requirement</h3>
               <p style="max-width: 800px">Several factors like age, health, body type and size, weight,  fitness   goal and activity level dictate the amount of calories you should eat
                   in a day. Before determining how many calories are needed to gain or   lose  weight,
                   let's start with how many calories it takes to maintain your current  weight. In order to get a general idea of how many
                   calories you burn in a day, multiply  your current weight by the daily   amount of energy used: inactive persons should
                   multiply weight times 14   to 16 calories; somewhat active 16 to 18 calories; and  extremely   active 18 to 20 calories.</p>
               <br>

               110 lbs. somewhat active:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 110&nbsp;&nbsp;&nbsp;&nbsp;
               x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp; =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1980  calories
               <br>

               180 lbs. inactive:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp; 180&nbsp;&nbsp;&nbsp;&nbsp; x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2520  calories
               <br>

               250 lbs. extremely:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               250&nbsp;&nbsp;&nbsp;&nbsp; x&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; =&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5000  calories
               <br>
               <br>
                <p>If you want a more precise number of how many calories to consume in a day, you must take into consideration the constant rate at which
                    calories are burned at a state of rest. This is called your basal metabolic rate (BMR). Combining your BMR with amount of work you body
                    does when not at rest (computer work, lifting weights, cooking, jogging etc.) will give you your Total Daily Energy Expenditure (TDEE).
                    Everyone's BMR and TDEE varies: it takes less fuel to maintain a moderately active, petite forty-something female than it does an active,
                    voracious teenage male. Here's how to determine your BMR and TDEE:</p>
               <br>

               Males:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 66 &nbsp;
               + [6.23 x weight (lbs.)] + [12.7 x height (in.)] - [6.8 x age (years)]
               <br>

               Females: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 655  + [4.35 x weight (lbs.)] + [4.7 x height (in.)] - [4.7 x age (years)]
               <br>
               BMR     +      Work     = Total Daily Energy Expenditure [TDEE]
               <br>
               <br>
               <p>If you BMR is 1500 calories a day and you spent 45 minutes on a treadmill and burned 500 calories and needed
                   another 400 calories to complete an eight-hour work day at the office, then your TDEE would be 2400.</p>
           </div>
     </div>
 </div>
</div>
</body>
</html>