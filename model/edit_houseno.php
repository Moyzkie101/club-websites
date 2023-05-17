<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
	$house 	= $conn->real_escape_string($_POST['house']);
    $id 	= $conn->real_escape_string($_POST['id']);

	if(!empty($id)){

		$query 		= "UPDATE tbl_household SET `household` = '$house' WHERE id=$id";	
		$result 	= $conn->query($query);

		if($result === true){
            
			$_SESSION['message'] = 'Household No. has been Updated!';
			$_SESSION['success'] = 'success';

		}else{
			$_SESSION['message'] = 'Something went wrong!';
			$_SESSION['success'] = 'danger';
		}

	}else{
		$_SESSION['message'] = 'No Household ID Found!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../house.php");

	$conn->close();