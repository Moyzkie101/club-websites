<?php 
	include '../server/server.php';

	session_start();

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
    $id 	= $conn->real_escape_string($_POST['id']);
	$complainant    = $conn->real_escape_string($_POST['complainant']);
	$respondent 	= $conn->real_escape_string($_POST['respondent']);
    $casenum	    = $conn->real_escape_string($_POST['casenum']);
	$type 	        = $conn->real_escape_string($_POST['type']);
    $location 	    = $conn->real_escape_string($_POST['location']);
    $date           = $conn->real_escape_string($_POST['date']);
	$time 	        = $conn->real_escape_string($_POST['time']);
    $status 	    = $conn->real_escape_string($_POST['status']);
    $details 	    = $conn->real_escape_string($_POST['details']);

	if(!empty($id)){

		$query 		= "UPDATE tblblotter SET `complainant`='$complainant', `respondent`='$respondent', `casenum`='$casenum',`type`='$type', `location`='$location', `date`='$date', 
                        `time`='$time', `status`='$status', `details`='$details' WHERE id=$id;";	
		$result 	= $conn->query($query);

		if($result === true){

			   $m = $_SESSION['username'] . " updated " . $_POST['respondent']." from blotter incident details in Blotter Records.";
            
			$_SESSION['message'] = 'Blotter details has been updated!';
			$_SESSION['success'] = 'success';

			
			$conn->query("insert into history_log values(NULL,".$_POST['user_id'].",'".$_POST['name']."','".date('h:i a')."','".date('m/d/Y')."','".$m."');");

		}else{

			
			$_SESSION['message'] = 'Something went wrong!';
			$_SESSION['success'] = 'danger';
		}

	}else{

		$_SESSION['message'] = 'No Blotter ID found!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../blotter.php");

	$conn->close();

?>