<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    

    $f_name = $conn->real_escape_string($_POST['f_name']);

    if(!empty($f_name)){

        $insert  = "INSERT INTO status(`status_name`) 
                    VALUES ('$f_name')";
        $result  = $conn->query($insert);
    
        if($result === true){
            $_SESSION['message'] = 'Financial Aid Added!';
            $_SESSION['success'] = 'success';

        }else{
            $_SESSION['message'] = $insert;
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }

    }else{
        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../financial.php?id=".mysqli_insert_id($conn)."&name=".$f_name);

	$conn->close();