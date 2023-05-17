<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    
	$status 	    = $conn->real_escape_string($_POST['status_name']);
    $id 	    = $conn->real_escape_string($_POST['id']);

    if(!empty($status)){

        $query 		= "UPDATE status SET `status_name` = '$status' WHERE stat_id=$id;";	
		$result 	= $conn->query($query);

        if($result === true){
            $_SESSION['message'] = 'Financial Aids has been updated!';
            $_SESSION['success'] = 'success';

        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }

    }else{

        $_SESSION['message'] = 'Financial Aid Error found!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../financial.php?id=".$id."&name=".$status);

	$conn->close();