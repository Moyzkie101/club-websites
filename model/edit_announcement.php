<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    
	
    if(isset($_POST["upload"])){

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);


        if($check !== false){

            $details    = $conn->real_escape_string($_POST['details']);
            $radio    = $conn->real_escape_string($_POST['inlineRadioOptions']);
            $title         = $conn->real_escape_string($_POST['title']);
            $id         = $conn->real_escape_string($_POST['id']);

            move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);

            $query 		= "UPDATE tbl_announce SET `title`='$title', `txt`='$details', `updates`='$radio', `uploads`='".$_FILES["fileUpload"]["name"]."', `date`='".date('Y-m-d')."',`time`='".date('h:i a ')."' WHERE id=$id;";	
    		$result 	= $conn->query($query);

            if($result === true){

                $_SESSION['message'] = 'Announcement has been updated!';
                $_SESSION['success'] = 'success';

                header("Location: ../announce.php");

                $conn->close();

            } else{
                $_SESSION['message'] = 'Something went wrong!';
                $_SESSION['success'] = 'danger';
            }

        } else {

            $details    = $conn->real_escape_string($_POST['details']);
            $radio    = $conn->real_escape_string($_POST['inlineRadioOptions']);
            $title         = $conn->real_escape_string($_POST['title']);
            $id         = $conn->real_escape_string($_POST['id']);

            $query      = "UPDATE tbl_announce SET `title`='$title', `txt`='$details', `updates`='$radio', `date`='".date('Y-m-d')."', `time`='".date('h:i a ')."' WHERE id=$id;";   
            $result     = $conn->query($query);

            if($result === true){

                $_SESSION['message'] = 'Announcement has been updated!';
                $_SESSION['success'] = 'success';

                header("Location: ../announce.php");

                $conn->close();

            } else{
                $_SESSION['message'] = 'Something went wrong!';
                $_SESSION['success'] = 'danger';
            }

        }

        

    }else{

        $_SESSION['message'] = 'No Announcement Error Found!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../announce.php");

	$conn->close();