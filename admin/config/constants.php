<?php
          define('LOCALHOST', 'localhost');
          define('DB_USERNAME', 'root');
          define('DB_PASSWORD', '');
          define('DB_NAME', 'order-food');

          $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn, $sql));
          $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn, $sql));

          
?> 