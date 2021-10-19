 <?php include('config/constants.php'); ?>

<html>
<head>
    <title>Login - Order Food </title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h3 class="text-center">Login</h3>
        <br><br>

        <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset ($_SESSION['login']);
            }
            if(isset($_SESSION['no_login_message']))
            {
                echo  $_SESSION['no_login_message'];
                unset ($_SESSION['no_login_message']);
            }
        ?>

        <br><br>

        <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password:<br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary" style="cursor: pointer;">

            <br><br>
        </form>
    </div>
</body>
</html>

<?php 
    if(isset($_POST['submit']))
    {
          $username = $_POST['username'];
          $password = md5($_POST['password']);

          $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
          $res = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($res);

          if($count==1){
            $_SESSION['login'] = "<div class='success'>Login Successfully</div>";
            $_SESSION['user'] = $username;
            header('location:'.SITEURL."admin/");
          }
          else 
          {
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match</div>";
            header('location:'.SITEURL."admin/login.php");
          }
    }
?>