<div class="col-md-4">

    <?php
        if (isset($_POST['submit'])){
            $search =  $_POST['search'];
            $sql = "SELECT * FROM posts where `post_tag` LIKE '%$search%' ";

            $result = mysqli_query($con,$sql);
            if (!$result){
                die("Search Faild : ".mysqli_error($con));
            }
            $count = mysqli_num_rows($result);
            if ($count==0){
                echo "<h1>No Data Found </h1>";
            }

        }

    ?>
    <!-- Blog Search Well -->
    <div class="well" style="background-color: #d3cbbd">
        <h2 class="text-primary text-center"> Blog Search</h2>
        <form action="search.php" method="post" style="padding-top: 20px">
        <div class="input-group">
            <input  name="search" type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
        </form>
        <!-- /.input-group -->
    </div>
    <?php
    if (!isset($_SESSION['username'])) {
        ?>
        <div class="well" style="background-color: #faf4bc">
            <h4 class="text-center">Log-In</h4>
            <form action="include/login.php" method="post">
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Enter Username">
                </div>

                <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="Enter Password">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="submit" name="login">Log-in</button>
                    </span>
                </div>
            </form>
            <!-- /.input-group -->
        </div>
        <?php
    }else{?>
    <div class="well" style="background-color: #faf4bc">

        <?php
            $sql= "SELECT * FROM `users` WHERE username = '{$_SESSION['username']}' ";
            $result = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $user_img = $row['user_img'];

        ?>
                <div class="row">
                    <div class="col-sm-4">
                        <img class='img-responsive img-circle img-rounded' height='auto' src='img/<?php echo $user_img;?>' alt=''>
                    </div>
                    <div class="col-sm-7">
                        <h1 class="text-info"><?php echo $_SESSION['username']; ?></h1>
                    </div>
                </div>

        <h2>You are logged-in as: </h2>


        <center><h2 class="text-success text-capitalize"><?php echo $_SESSION['role']; ?></h2></center>
    </div>

        <?php }
    }
    ?>

    <!-- Blog Categories Well -->
    <div class="well" style="background-color: lavender">
        <h2>Blog Categories</h2>
        <div class="row">
            <div class="col-lg-12">
                <?php
                $sql= "SELECT * FROM `categories`";
                $result = mysqli_query($con,$sql);
                //                        = $con->query($sql);
                ?>
                <ul style='padding-left:60px;list-style-type: square;'>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)){
                        $cat_title = $row['cat_title'];
                        echo "<li><a href=\"category.php?cat={$cat_title}\"><h4>{$cat_title}</h4></a></li>";
                    }
                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->

            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h3 class="text-center text-primary">About</h3>
        <p style="font-size: 16px">This is Content Management System Developed by <a href="https://rezauloni93.000webhostapp.com/">Rezaul Alam Oni.</a> He is a Web Developer!!
            YOu can hire him for develop your responsive and secure website.
        </p>
    </div>

</div>

</div>