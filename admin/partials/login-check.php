<?php 
    if(!isset($_SESSION['user']))
    {
        $_SESSION['no_login_message'] = "<div class='error text-center'>Please login to access Admin Panel</div>";
        header('location:'.SITEURL."admin/login.php");
    }
?>