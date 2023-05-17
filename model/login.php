<?php 
	include '../server/server.php';
	

	$username 	= $conn->real_escape_string($_POST['username']);
	$password	= sha1($conn->real_escape_string($_POST['password']));


	if($username != '' AND $password != ''){
		$query 		= "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
		
		$result 	= $conn->query($query);
		
		if($result->num_rows){
			while ($row = $result->fetch_assoc()) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['role'] = $row['user_type'];
				$_SESSION['avatar'] = $row['avatar'];
			}

			$_SESSION['message'] = 'You have successfull logged in to Automated Barangay E-Services Information  System';
			$_SESSION['success'] = 'success';

			if($_SESSION['role'] == 'administrator'){

            header('location: ../dashboard.php');
        } elseif($_SESSION['role'] == 'staff'){
        	header('location: ../dashboard.php');
        }else{

            header('location: ../index.php');
        }

		}else{
			$_SESSION['message'] = 'Username and password is not found in Database!';
			$_SESSION['success'] = 'danger';
            header('location: ../login_access.php');
		}
	}else{
		$_SESSION['message'] = 'Username or password is empty!'; 
		$_SESSION['success'] = 'danger';
        header('location: ../login_access.php');
	}

    

	$conn->close();

  