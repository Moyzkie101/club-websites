<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username']) && $_SESSION['role']!='administrator'){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
	$id 	= $conn->real_escape_string($_GET['id']);

	if($id != ''){
		$query 		= "DELETE FROM tblofficials WHERE id = '$id'";
		
		$result 	= $conn->query($query);
		
		if($result === true){


	        $m = $_SESSION['username']." removed ".$id." Current Barangay Official. ";

		    $conn->query("insert into history_log values(NULL,".$_SESSION['id'].",'".$_SESSION['username']."','".date('h:i')."','".date('m/d/Y')."','".$m."');");



            $_SESSION['message'] = 'Official has been removed!';
            $_SESSION['success'] = 'danger';
            
        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }
	}else{

		$_SESSION['message'] = 'Missing Official ID!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../officials.php");
	$conn->close();
