<?php
session_start();
        $_SESSION['patient_username']=null;
        $_SESSION['doctor_username']=null;
        $_SESSION['patient_email']=null;
        $_SESSION['doctor_email']=null;
        $_SESSION['patient_id']=null;
        $_SESSION['doctor_id']=null;
session_destroy();
header('Location: ../');