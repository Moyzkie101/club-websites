<?php 
	include '../server/server.php';


	if(!isset($_SESSION['username']) && $_SESSION['role']!='administrator'){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
	$id 	= $conn->real_escape_string($_GET['id']);

	if($id != ''){
		$query 		= "UPDATE tblresident SET `stat_id`=0 WHERE id=$id";
		
		$result 	= $conn->query($query);
		
		if($result === true){



				$m = $_GET['username']." Removed ".$_GET['fullname']." at ".$_GET['name']." in Financial grantee from Financial Aid";

		    	$conn->query("insert into history_log values(NULL,".$_GET['user_id'].",'".$_GET['username']."','".date('h:i:a')."','".date('m/d/Y')."','".$m."');");



            $_SESSION['message'] = 'Successfully removed!';
            $_SESSION['success'] = 'danger';
            
        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }
	}else{

		$_SESSION['message'] = 'Missing Financial ID!';
		$_SESSION['success'] = 'danger';
	}

     header("Location:../financial.php?id=".$_GET['ff_id']."&name=".$_GET["ff_name"]);
	 $conn->close();

