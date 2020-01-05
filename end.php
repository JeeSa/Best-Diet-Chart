<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/21/2017
 * Time: 3:33 AM
 */
session_start();
session_destroy();
header('Location: index.php');
?>