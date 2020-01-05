<?php

session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css1.css">
</head>
<body>
<div class="container-fluid">
    <?php
    include "navigation_user.php";

    ?>
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" style="margin-top: 50px">
            <div class="panel-heading center-block">
<!--                <img src="image/cover5.jpg" style="height: 200px;width:820px">-->
                <div class="col-sm-3">
                    <img src="image/salad.png" style="width:50px;height:50px;">
                    <span class="logo">Best Diet Chart</span>
                </div>
            </div>

            <div class="panel-body">
                <h3>About Best Diet Chart</h3>

               <p style="max-width:800px">We're focused on providing tools and support for people who want
                   to take control over their nutrition. Given the saturation of information in the diet industry,
                   we focus on more pragmatic elements of healthy eating such as planning.
                   This site is latest part of our ongoing project to make effective nutrition strategies available
                   to everyone, especially people who are too busy to get started on their own. What began as Swole.me,
                   a simple tool to help bodybuilders hit macronutrient requirements created by just Louis, has grown into
                   the current service supported by a small and dedicated team.</p>

                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="panel-body">
                <h2 style="margin-left: 28px">Our whole team</h2>
                <div class="panel-body">
                    <div class="col-sm-8">
                        <h4>Md.Mominuz Zaman</h4>
                    </div>
                    <div class="col-sm-4">
                        <img src="image/abhi.jpg" style="height:200px;width: 200px">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="panel-body">
                    <div class="col-sm-8">
                        <h4>Sharmin Sultana Jeesa</h4>
                    </div>
                    <div class="col-sm-4">
                        <img src="image/jeesa.jpg" style="height:200px;width: 200px">
                    </div>
                </div>


            </div>
            <div class="panel-footer">
                <div class="panel-heading text-center">
                    <ul class="top-nav">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>