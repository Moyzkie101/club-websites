<?php
	include '../server/server.php';
   	session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['role']);

    session_start();	
   
    $_SESSION['success'] = 'danger';


    header('location: ../index.php');
