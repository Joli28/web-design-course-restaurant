<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h2>Add Food</h2>

        <br><br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset ($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">

            <tr>
                <td>Title:</td>
                <td>
                    <input type="text" name="title" placeholder="Title of the Food">
                </td>
            </tr>

            <tr>
                <td>Title:</td>
                <td>
                    <textarea name="description" cols="30" rows="5" placeholder="Description of the Food"></textarea>
                </td>
            </tr>


            <tr>
                <td>Price:</td>
                <td>
                    <input type="number" name="price" >
                </td>
            </tr>

            
            <tr>
                <td>Select Image:</td>
                <td>
                    <input type="file" name="image" >
                </td>
            </tr>

            
            <tr>
                <td>Category:</td>
                <td>
                    <select name="category" >
                        <?php 
                            $sql = "SELECT * FROM category WHERE active='Yes'";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);

                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $id = $row['id'];
                                    $title = $row['title'];
                                    ?>

                                         <option value="<?php echo $id; ?>"><?php echo $title; ?></option>   

                                    <?php
                                }
                            } else {
                                ?>
                                    <option value="0">No Category Found</option>
                                <?php
                            }
                        ?>

                    </select>
                </td>
            </tr>

            <tr>
                <td>Featured: </td>
                <td>
                     
                    <input type="radio" name="featured" value="Yes"> Yes 
                    <input type="radio" name="featured" value="No"> No   
                    
                </td>
            </tr>

            <tr>
                <td>Active: </td>
                <td>
                     
                    <input type="radio" name="active" value="Yes"> Yes 
                    <input type="radio" name="active" value="No"> No   
                    
                </td>
            </tr>

            <tr>
                <td colspan="2">
                        <input type="submit" name="submit" value="Add Food" class="btn-secondary" style="cursor: pointer;">
                </td>
            </tr>

            </table>
        </form>
                    
                 <?php
                    if(isset($_POST['submit']))
                    {
                       $title = $_POST['title'];
                       $description = $_POST['description'];
                       $price = $_POST['price'];     
                       $category = $_POST['category'];     
                       
                       if(isset($_POST['featured']))
                       {
                           $featured = $_POST['featured'];
                       } else {
                           $featured = "No";
                       } 
                       if (isset($_POST['active']))
                       {
                            $active = $_POST['active'];
                       } else {
                           $active = "No";
                       }

                       if(isset($_FILES['image']['name']))
                       {    
                            $image_name = $_FILES['image']['name'];

                            if($image_name != "")
                            {
                                $ext = end(explode('.', $image_name));
                                $image_name = "Food-Name".rand(0000,9999).".".$ext;
                                $src = $_FILES['image']['tmp_name'];
                                $dst = "../images/food/".$image_name;
                                $upload = move_uploaded_file($src, $dst);

                                if($upload==false)
                                {
                                    $_SESSION['upload'] = "<div class='error'>Failed to upload image. </div>";
                                    header('location:'.SITEURL.'admin/add-food.php');
                                    die ();
                                }
                            }
                       } else {
                           $image_name = "";
                       }

                    }        

                    ?>
    </div>
</div>

<?php include('partials/footer.php') ?>


<!-- 1:02:12 -->