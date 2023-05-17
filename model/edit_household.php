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
            
			$_SESSION['message'] = 'household has been updated!';
			$_SESSION['success'] = 'success';

		}else{
			$_SESSION['message'] = 'Somethin went wrong!';
			$_SESSION['success'] = 'danger';
		}

	}else{
		$_SESSION['message'] = 'No Household ID found!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../household.php");

	$conn->close();