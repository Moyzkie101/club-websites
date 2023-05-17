<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username']) && $_SESSION['role']!='administrator'){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
	$id 	= $conn->real_escape_string($_GET['id']);

	if($id != ''){
		$query 		= "DELETE FROM tblrequest WHERE id = '$id'";
		
		$result 	= $conn->query($query);
       
		
		if($result === true){
            
             $m = $_GET['username']." removed ".$_GET['name']." from Requested Certificate in Request.";

		     $conn->query("insert into history_log values(NULL,".$_GET['user_id'].",'".$_GET['username']."','".date('h:i a')."','".date('m/d/Y')."','".$m."');");

            $_SESSION['message'] = 'Request has been removed!';
            $_SESSION['success'] = 'danger';
            
        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }
	}else{

		$_SESSION['message'] = 'Missing Request ID!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../request.php");
	$conn->close();

