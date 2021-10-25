<?php
    include('partials/menu.php')
?>
      <div class="main-content">
          <div class="wrapper">
              <h2>Manage Food</h2>

              <br>
            
            <a class="btn-primary" href="<?php echo SITEURL; ?>admin/add-food.php">Add Food</a>
            
            <br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                    <?php 
                        $sql = "SELECT * FROM food";
                        $res = mysqli_query($conn, $res);
                        
                        if($res == TRUE)
                        {
                            $count = mysqli_num_rows($res);
                            $sn=1;
                            if ($count>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id = $rows['id'];
                                    $full_name = $rows['full_name'];
                                    $username = $rows['username'];

                                    ?>

                                        <tr>
                                            <td><?php echo $sn++ ?></td>
                                            <td><?php echo $title ?></td>
                                            <td><?php echo $description ?></td>
                                            <td><?php echo $price ?></td>
                                            <td><?php echo $image_name ?></td>
                                            <td><?php echo $category_id ?></td>
                                            <td><?php echo $featured ?></td>
                                            <td><?php echo $active ?></td>
 
                                            <td>
                                                <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-secondary">Update Food</a>
                                                <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>" class="btn-danger">Delete Food</a>
                                            </td>
                                            <td></td>

                                        </tr>

                                    <?php
                                }
                            } 
                                else {

                            }
                        }
                    ?>

 
            </table>

           </div>
    </div>
<?php
    include('partials/footer.php')
?>