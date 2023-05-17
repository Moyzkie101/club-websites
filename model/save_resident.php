<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}

	$national_id 		= $conn->real_escape_string($_POST['national']);
	$citizen 		= $conn->real_escape_string($_POST['citizenship']);
	$fname 		= $conn->real_escape_string($_POST['fname']);
	$mname 		= $conn->real_escape_string($_POST['mname']);
    $lname 		= $conn->real_escape_string($_POST['lname']);
	$alias 		= $conn->real_escape_string($_POST['alias']);
    $household 	= $conn->real_escape_string($_POST['household']);
    $purok 		= $conn->real_escape_string($_POST['purok']);
    $bplace 	= $conn->real_escape_string($_POST['bplace']);
	$bdate 		= $conn->real_escape_string($_POST['bdate']);
    $cstatus 	= $conn->real_escape_string($_POST['cstatus']);
	$gender 	= $conn->real_escape_string($_POST['gender']);
    $purok 		= $conn->real_escape_string($_POST['purok']);
	$vstatus 	= $conn->real_escape_string($_POST['vstatus']);
    $identity_as 	= $conn->real_escape_string($_POST['identity_as']);
    $email 	    = $conn->real_escape_string($_POST['email']);
	$number 	= $conn->real_escape_string($_POST['number']);
	$occupation 	= $conn->real_escape_string($_POST['occupation']);
	$profile 	= $conn->real_escape_string($_POST['profileimg']); // base 64 image
	$profile2 	= $_FILES['img']['name'];
	$status = $conn->real_escape_string($_POST['status']);

	// change profile2 name
	$newName = date('dmYHis').str_replace(" ", "", $profile2);

	  // image file directory
  	$target = "../assets/uploads/resident_profile/".basename($newName);
	$check = "SELECT id FROM tblresident WHERE national_id='$national_id'";
	$nat = $conn->query($check)->num_rows;	


	
	if($nat == 0){
		if(!empty($fname)){

			if(!empty($profile) && !empty($profile2)){


				$query = "INSERT INTO `tblresident` (`national_id`,`citizenship`,`picture`, `firstname`, `middlename`, `lastname`, `alias`, `

				household`, `birthplace`, `birthdate`, `age`, `civilstatus`, `gender`, `purok`, `voterstatus`, `identified_as`, `phone`, `email`, `occupation`, `address`,`stat_id`) 


							VALUES ('$national_id','$citizen','$profile','$fname','$mname','$lname','$alias','$household','$bplace','$bdate', DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), '$bdate')), '%Y') + 0, 
							'$cstatus','$gender','$purok','$vstatus','$identity_as','$number','$email','$occupation','$fourps','$address','$status')";

				
				if($conn->query($query) === true){


		    		$m = $_SESSION['username']." added ". $fname ." ". $mname ." ". $lname ." from Resident Information"; 

		    		$conn->query("insert into history_log values(NULL,".$_SESSION['id'].",'".$_SESSION['username']."','".date('h:i a')."','".date('m/d/Y')."','".$m."');");



					$_SESSION['message'] = 'Resident Information has been saved!';
					$_SESSION['success'] = 'success';
				}
			}else if(!empty($profile) && empty($profile2)){

				$query = "INSERT INTO `tblresident` (`national_id`, `citizenship`, `picture`, `firstname`, `middlename`, `lastname`, `alias`, `household`, `birthplace`, `birthdate`, `age`, `civilstatus`, `gender`, `purok`, `voterstatus`, `identified_as`, `phone`, `email`,`occupation`,`stat_id`) 
							VALUES ('$national_id','$citizen','$profile','$fname','$mname','$lname','$alias','$household','$bplace','$bdate', DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), '$bdate')), '%Y') + 0, '$cstatus','$gender','$purok','$vstatus','$identity_as','$number','$email','$occupation', '$status')";

				if($conn->query($query) === true){

					$m = $_SESSION['username']." added ". $fname ." ". $mname ." ". $lname ." from Resident Information.";
		     $conn->query("insert into history_log values(NULL,".$_SESSION['id'].",'".$_SESSION['username']."','".date('h:i a')."','".date('m/d/Y')."','".$m."');");


					$_SESSION['message'] = 'Resident Information has been saved!';
					$_SESSION['success'] = 'success';
				}

			}else if(empty($profile) && !empty($profile2)){

				$query = "INSERT INTO `tblresident` (`national_id`, `citizenship`, `picture`, `firstname`, `middlename`, `lastname`, `alias`, `household`, `birthplace`, `birthdate`, `age`, `civilstatus`, `gender`, `purok`, `voterstatus`, `identified_as`, `phone`, `email`, `occupation`, `stat_id`) 
							VALUES ('$national_id','$citizen','$newName','$fname','$mname','$lname','$alias','$household','$bplace','$bdate', DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), '$bdate')), '%Y') + 0, '$cstatus','$gender','$purok','$vstatus','$identity_as','$number','$email','$occupation','$status')";
 // history log executes

				if($conn->query($query) === true){
 
					$m = $_SESSION['username']." added ". $fname ." ". $mname ." ". $lname ." from Resident Information.";
		     		$conn->query("insert into history_log values(NULL,".$_SESSION['id'].",'".$_SESSION['username']."','".date('h:i a')."','".date('m/d/Y')."','".$m."');");


					$_SESSION['message'] = 'Resident Information has been saved!';
					$_SESSION['success'] = 'success';

					if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){

						$_SESSION['message'] = 'Resident Information has been saved!';
						$_SESSION['success'] = 'success';
					}
				}

			}else{
				$query = "INSERT INTO `tblresident` (`national_id`, `citizenship`, `picture`,`firstname`, `middlename`, `lastname`, `alias`, `household`, `birthplace`, `birthdate`, `age`, `civilstatus`, `gender`, `purok`, `voterstatus`, `identified_as`, `phone`, `email`, `occupation`,`stat_id`) 
							VALUES ('$national_id','$citizen','person.png','$fname','$mname','$lname','$alias','$household','$bplace','$bdate', DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), '$bdate')), '%Y') + 0, '$cstatus','$gender','$purok','$vstatus','$identity_as','$number','$email','$occupation','$status')";

				if($conn->query($query) === true){

					$m = $_SESSION['username']." added ". $fname ." ". $mname ." ". $lname ." from Resident Information."; 
		     $conn->query("insert into history_log values(NULL,".$_SESSION['id'].",'".$_SESSION['username']."','".date('h:i a')."','".date('m/d/Y')."','".$m."');");


					$_SESSION['message'] = 'Resident Information has been saved!';
					$_SESSION['success'] = 'success';
				}
			}

		}else{

			$_SESSION['message'] = 'Please complete the form!';
			$_SESSION['success'] = 'danger';
		}
	}else{
		$_SESSION['message'] = 'National ID is already taken. Please enter a unique national ID!';
		$_SESSION['success'] = 'danger';
	}
     header("Location: ../resident.php");

	$conn->close();

?>

