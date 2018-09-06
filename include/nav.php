<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="font-size: 16px">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="padding-top: 8PX">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="color: #feffa6;font-family: SansSerif;font-size: 20px">Find Your Course</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="padding-top: 8px">

                <?php
                session_start();
                if (isset($_SESSION['username'])){
                    $sql= "SELECT * FROM `categories`";
                    $result = mysqli_query($con,$sql);
//                        = $con->query($sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cat_title = $row['cat_title'];
                        $cat_class = '';
                            if (isset($_GET['cat'])){
                                if ($_GET['cat']==$cat_title){
                                    $cat_class='active';
                                }
                            }
                            echo "<li class='$cat_class'><a href=\"category.php?cat={$cat_title}\">{$cat_title}</a></li>";
                        }
                    }
                ?>
                <!---->         </ul>
            <ul class="nav navbar-nav navbar-right">

                <li style="padding-top: -5px">

                </li>
                <li class="text-uppercase" style="padding-top: 8px;">
                    <a style=" color:#d5de5f;font-family: SansSerif;" href="contact.php">Contact</a>
                </li>

                <li style="padding-top:20px">
<!--                    <a href="" style="">--><?php
//                        date_default_timezone_set("Asia/Dhaka");
////                        echo date("Y-m-d ")." ";
//                        $d=strtotime("+3 Months");
//                        echo date("h:i:a", $d) . "<br>";
//                        ?><!--</a>-->
                    <div id="txt" class="glyphicon" style="color: #5bc0de;font-size: 20px">  </div>
                </li>


                <?php if (isset($_SESSION['role'])) {
                    if ($_SESSION['role'] == 'admin') {
                        ?>
                        <li style="padding-top: -5px; ">
                            <a href="admin">
                                <button class="btn btn-info">ADMIN</button>
                            </a>
                        </li>

                    <?php }
                }
                ?>

                <li class="dropdown" style="padding-top: -5px">
                    <?php if (isset($_SESSION['username'])){ ?>

                        <a style="padding-top:15px; color: #bce7dc;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <h4><i class="text-primary fa fa-fw fa-user"></i> <?php echo $_SESSION['username'];?>
                                <b class="caret"></b>
                            </h4>
                        </a>
                        <ul class="dropdown-menu" style="background-color: #e9a294">


                            <li>
                                <?php
                                if (isset($_SESSION['role'])){
                                    $user = $_SESSION['username'];
                                    if ($_SESSION['role']=='admin'){

                                        ?>
                                        <a href="profile.php?p_author=<?php echo $user;?>"><i class="text-primary fa fa-fw fa-user"></i> Profile</a>

                                       <?php
                                    } else{ ?>

                                    <a href="profile.php?p_author=<?php echo $user;?>"><i class="text-primary fa fa-fw fa-user"></i> Profile</a>

                                <?php } }?>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <?php
                                if (isset($_SESSION['role'])){
                                    if ($_SESSION['role']=='admin'){
                                        ?>
                                        <a href="admin/profile_update.php"><i class="text-primary fa fa-fw fa-edit"></i> Edit Profile</a>

                                        <?php
                                    } else{ ?>

                                        <a href="user_profile_update.php"><i class="text-primary fa fa-fw fa-edit"></i> Edit Profile</a>

                                    <?php } }?>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="include/logout.php"><i class="text-info fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                         </ul>

                    <?php } else { ?>


                <li style="padding-top: -5px; ">
                    <a href="index.php"><button class="btn btn-success">Login Please</button></a>
                </li>

                <?php } ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>