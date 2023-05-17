<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
    $id 	= $conn->real_escape_string($_POST['id']);
	$na_id 	= $conn->real_escape_string($_POST['n_id']);
	$dname = $conn->real_escape_string($_POST['data_name']);

	$status = $conn->real_escape_string($_POST['status']);

	if(!empty($id)){

		$query 		= "UPDATE tblrequest SET `status`='$status' WHERE id=$id;";	
		$result 	= $conn->query($query);


		if($result === true){
            
			$_SESSION['message'] = 'Request has been updated!';
			$_SESSION['success'] = 'success';

			$message = $_POST['username'] ." updated " .$dname. " from ". $_POST['request_status'] . " to " . $_POST['status']. " in Requested.";

			$conn->query("insert into history_log values(NULL,".$_POST['user_id'].",'".$_POST['username']."','".date('h:i a')."','".date('m/d/Y')."','".$message."')");

		}else{

			$_SESSION['message'] = 'Somethin went wrong!';
			$_SESSION['success'] = 'danger';
		}

	}else{
		$_SESSION['message'] = 'Request ID not found!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../request.php");

	$conn->close();

?>