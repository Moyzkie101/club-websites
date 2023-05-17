<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
    $id 	= $conn->real_escape_string($_POST['id']);
	$name 	= $conn->real_escape_string($_POST['name']);
	$chair 	= $conn->real_escape_string($_POST['chair']);
    $pos 	= $conn->real_escape_string($_POST['position']);
 $num 	= $conn->real_escape_string($_POST['contact']);
	$start 	= $conn->real_escape_string($_POST['start']);
    $end 	= $conn->real_escape_string($_POST['end']);
	$status = $conn->real_escape_string($_POST['status']);

	if(!empty($id)){

		$query 		= "UPDATE tblofficials SET `name`='$name', `chairmanship`='$chair', `position`='$pos', `contact`='$num', termstart='$start', termend='$end', `status`='$status' WHERE id=$id;";	
		$result 	= $conn->query($query);


		if($result === true){

			$m = $_POST['name'] . " updated " . $_SESSION['name']." barangay officials.";
					
            
			$_SESSION['message'] = $m;'Brgy Official has been updated!';
			$_SESSION['success'] = 'success';

			$conn->query("insert into history_log values(NULL,".$_SESSION['user_id'].",'".$_SESSION['name']."','".date('h:i')."','".date('m/d/Y')."','".$m."');");

		}else{

			$_SESSION['message'] = 'Somethin went wrong!';
			$_SESSION['success'] = 'danger';
		}

	}else{
		$_SESSION['message'] = 'No Brgy Official ID found!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../officials.php");

	$conn->close();