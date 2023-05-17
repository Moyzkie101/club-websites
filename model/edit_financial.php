<?php 
	include '../server/server.php';

	session_start();

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}


	$id 	        = $conn->real_escape_string($_POST['id_financial']);
	$status 	    = $conn->real_escape_string($_POST['status']);
    $remarks 	    = $conn->real_escape_string($_POST['remarks']);
    $title 			= $conn->real_escape_string($_POST['f_name']);


	if(!empty($id)){

		$query 		= "UPDATE tblresident SET `benefit_id`='$status', `remarks`='$remarks' WHERE id=$id";	
		$result 	= $conn->query($query);

		if($result === true){

			  $m = $_SESSION['username']. " has Updated No. " . $id." from ".$title." in Financial Aids.";

			  $conn->query("insert into history_log values(NULL,".$_POST['user_id'].",'".$_POST['name']."','".date('h:i a')."','".date('m/d/Y')."','".$m."');");

            
			$_SESSION['message'] = 'Financial details has been updated!';
			$_SESSION['success'] = 'success';

		}else{

			
			$_SESSION['message'] = 'Something went wrong!';
			$_SESSION['success'] = 'danger';
		}

    header("Location:../financial.php?id=".$_POST["fid"]."&name=".$_POST["f_name"]);
    $conn->close();
}

	?>