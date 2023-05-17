<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    
	$house 	= $conn->real_escape_string($_POST['house']);
   

    if(!empty($house)){
    
        $insert  = "insert into tbl_household (household) values(".$house.");";
        
     
        $result  = $conn->query($insert);

        if($result === true){
            $_SESSION['message'] = 'Housenhold No. Added!';
            $_SESSION['success'] = 'success';

        }else{
            $_SESSION['message'] = 'Something went wrong!';
            
            $_SESSION['success'] = 'danger';
        } 

    }else{

        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../house.php");

	$conn->close(); 



    ?>