<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/4/2017
 * Time: 10:11 PM
 */
session_start();
//echo $_SERVER['REQUEST_URI'];


if (isset($_GET['logout'])){
    session_destroy();
    header('Location: index.php');





}
else{
    header('Location: input_info.php');

}

?>