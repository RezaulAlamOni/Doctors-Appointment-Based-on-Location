<?php
session_start();
        $_SESSION['username']=null;
        $_SESSION['email']=null;
        $_SESSION['password']=null;
        $_SESSION['pic']=null;
session_destroy();
header('Location: ../login.php');