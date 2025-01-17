 
<?php include('partials-front/menu.php'); ?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
             $sql = "SELECT * FROM category WHERE active='Yes' AND featured='Yes' LIMIT 3";
                  $res = mysqli_query($conn,$sql);
                  //to check whether the category is available or not
                  $count = mysqli_num_rows($res);
                  if($count>0)
                  {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            $image_name = $row['image_name'];
                            ?>
                                                
                                <a href="category-foods.html">
                                    <div class="box-3 float-container">
                                        <?php 
                                            if($image_name == "")
                                            {
                                                echo "<div class='error'>Image not found</div>";
                                            } else {
                                                ?>
                                                     <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">

                                                <?php
                                            }
                                        ?>
 
                                        <h3 class="float-text text-white"><?php echo $title; ?></h3>
                                    </div>
                                </a>

                           <?php
                        }
                  } else {
                    echo "<div class='error'>Category not Added.</div>";
                  }
            ?>
 
 
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php 
                
            ?>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

 
            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
 <?php include('partials-front/footer.php'); ?>