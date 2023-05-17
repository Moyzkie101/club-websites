<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    
	$complete_name   = $conn->real_escape_string($_POST['complete_name']);
	$address 	     = $conn->real_escape_string($_POST['address']);
    $occupation	     = $conn->real_escape_string($_POST['occupation']);
	$gender 	     = $conn->real_escape_string($_POST['gender']);
    $age     	     = $conn->real_escape_string($_POST['age']);
    $contact_no      = $conn->real_escape_string($_POST['contact_no']);
	$status 	    = $conn->real_escape_string($_POST['status']);
    $remarks 	    = $conn->real_escape_string($_POST['remarks']);
    $f_id           = $conn->real_escape_string($_POST['f_id']);

    if(!empty($complete_name) && !empty($address) && !empty($occupation) && !empty($gender) && !empty($age) && !empty($contact_no) && !empty($status) && !empty($remarks)){

        $insert  = "INSERT INTO financial(`complete_name`, `address`, `occupation`, `gender`, `age`,`contact_no`,  `status`,  `remarks`, `f_id`) 
                    VALUES ('$complete_name', '$address','$occupation', '$gender','$age','$contact_no','$status','$remarks','$f_id')";
        $result  = $conn->query($insert);
    
        if($result === true){
            $_SESSION['message'] = 'Financial added!';
            $_SESSION['success'] = 'success';

        }else{
            $_SESSION['message'] = $insert;
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }

    }else{
        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../financial.php?id=".$f_id."&name=".$_POST['desc']);

	$conn->close();