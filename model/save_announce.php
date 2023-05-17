<?php 

   include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }

	if (isset($_POST["upload"])) {
    	$target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
        
        if($check !== false){
        	move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);


    	 	$query = "insert into tbl_announce values(NULL,'".$_POST['details']."','".$_POST['date']."','".date('h:i a ')."', '".$_POST['inlineRadioOptions']."','".$_FILES["fileUpload"]["name"]."', '".$_POST['title']."')";
        
            if($conn->query($query) == true){

                $_SESSION['message'] = 'Announcement has been Added!';
                $_SESSION['success'] = 'success';

                header("Location:../announce.php");
    		}

        }else{

            $query1 = "insert into tbl_announce values(NULL,'".$_POST['details']."','".$_POST['date']."','".date('h:i a ')."','".$_POST['inlineRadioOptions']."','', '".$_POST['title']."')";

            if($conn->query($query1) == true){  

                $_SESSION['message'] = 'Announcement has been Added!';
                $_SESSION['success'] = 'success';

                header("Location:../announce.php");
            }
        }

    }
 
?>