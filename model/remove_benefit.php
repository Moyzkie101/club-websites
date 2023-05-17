<?php 
	include '../server/server.php';


	if(!isset($_SESSION['username']) && $_SESSION['role']!='administrator'){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	$finid 	= $conn->real_escape_string($_GET['fin_id']);
	$name 	= $conn->real_escape_string($_GET['fin_name']);

	if($finid != ''){
		$query 		= "UPDATE tblresident SET `benefit_id`=0 WHERE stat_id='".$finid."'";
		
		$result 	= $conn->query($query);
		
		if($result === true){


				$m = $_GET['username']." reset all Benefits Status at ".$name." from Financial Aid";

		    	$conn->query("insert into history_log values(NULL,".$_GET['user_id'].",'".$_GET['username']."','".date('h:i:a')."','".date('m/d/Y')."','".$m."');");



            $_SESSION['message'] = 'Successfully Benefits Reset!';
            $_SESSION['success'] = 'danger';
            
        }else{
            $_SESSION['message'] = 'Something Went Wrong!';
            $_SESSION['success'] = 'danger';
        }
	}else{

		$_SESSION['message'] = 'Benefit Status Error!';
		$_SESSION['success'] = 'danger';
	}

     header("Location:../financial.php?id=".$_GET['fin_id']."&name=".$_GET['fin_name']);
	 $conn->close();

