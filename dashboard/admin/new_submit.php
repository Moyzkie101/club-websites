<?php
require '../../include/db_conn.php';
page_protect();

 $memID=$con->real_escape_string($_POST['m_id']);
 $uname=$con->real_escape_string($_POST['u_name']);
 $stname=$con->real_escape_string($_POST['street_name']);
 $city=$con->real_escape_string($_POST['city']);
 $zipcode=$con->real_escape_string($_POST['zipcode']);
 $state=$con->real_escape_string($_POST['state']);
 $gender=$con->real_escape_string($_POST['gender']);
 $dob=$con->real_escape_string($_POST['dob']);
 $phn=$con->real_escape_string($_POST['mobile']);
 $email=$con->real_escape_string($_POST['email']);
 $jdate=$con->real_escape_string($_POST['jdate']);
 $plan=$con->real_escape_string($_POST['plan']);

//inserting into users table
$query="INSERT INTO `users` VALUES(NULL,'$memID','$uname','$gender','$phn','$email','$dob','$jdate')";
if(mysqli_query($con,$query)==1){
      
  //Retrieve information of plan selected by user
  $query1="select * from plan where pid='$plan'";
  $result=mysqli_query($con,$query1);

    if($result){
      $value=mysqli_fetch_row($result);
      date_default_timezone_set("Asia/Manila"); 
      $d=strtotime("+".$value[4]." Months");
      $cdate=date("m-d-Y"); //current date
      $expiredate=date("m-d-Y",$d); //adding validity retrieve from plan to current date
      //inserting into enrolls_to table of corresponding userid
      $query2="insert into enrolls_to(pid,uid,paid_date,expire,renewal) values('$plan','$memID','$cdate','$expiredate','yes')";
      if(mysqli_query($con,$query2)==1){

        $query4="insert into health_status(uid) values('$memID')";
        if(mysqli_query($con,$query4)==1){

          $query5="insert into address(id,streetName,state,city,zipcode) values('$memID','$stname','$state','$city','$zipcode')";
          if(mysqli_query($con,$query5)==1){
           echo "<head><script>alert('Member Added ');</script></head></html>";
           echo "<meta http-equiv='refresh' content='0; url=new_entry.php'>";
          }
          else{
              echo "<head><script>alert('Member Added Failed');</script></head></html>";
             echo "error: ".mysqli_error($con);
             //Deleting record of users if inserting to enrolls_to table failed to execute
             $query3 = "DELETE FROM users WHERE userid='$memID'";
             mysqli_query($con,$query3);
          }
        }
         
        else{
           echo "<head><script>alert('Member Added Failed');</script></head></html>";
          echo "error: ".mysqli_error($con);
           //Deleting record of users if inserting to enrolls_to table failed to execute
            $query3 = "DELETE FROM users WHERE userid='$memID'";
            mysqli_query($con,$query3);
        }
        
      }
      else{
        echo "<head><script>alert('Member Added Failed');</script></head></html>";
        echo "error: ".mysqli_error($con);
        //Deleting record of users if inserting to enrolls_to table failed to execute
         $query3 = "DELETE FROM users WHERE userid='$memID'";
         mysqli_query($con,$query3);
      }

     
    }
    else
    {
      echo "<head><script>alert('Member Added Failed');</script></head></html>";
      echo "error: ".mysqli_error($con);
       //Deleting record of users if retrieving inf of plan failed
      $query3 = "DELETE FROM users WHERE userid='$memID'";
      mysqli_query($con,$query3);
    }

}
else{
    echo "<head><script>alert('Member Added Failed');</script></head></html>";
    echo "error: ".mysqli_error($con);
  }
?>
