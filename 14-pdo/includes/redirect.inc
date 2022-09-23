<?php
    if(isset($_SESSION['tid'])){
        header("location: dashboard.php");
    }