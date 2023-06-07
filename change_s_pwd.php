<?php
// $a = $_SERVER['HTTP_REFERER'];

// if (strpos($a, '/e-has/') !== false) {
    
// } else {
//     header("Location: ./");
// }

?>
<?php
// include 'index.php';
include './include/db_conn.php';
$key          = $con->real_escape_string($_POST['login_key']);
$user_id_auth = $con->real_escape_string($_POST['login_id']);
$pass         = sha1($con->real_escape_string($_POST['pwfield']));
$passconfirm= sha1($con->real_escape_string($_POST['confirmfield']));

if($pass==$passconfirm){
    if (isset($key)) {
        $sql    = "SELECT * FROM admin WHERE username='$user_id_auth' and securekey='$key'";
        $result = mysqli_query($con, $sql);
        $count  = mysqli_num_rows($result);
        if ($count == 1) {
            mysqli_query($con, "UPDATE admin SET pass_key='".$pass."' WHERE username='".$user_id_auth."'");
            echo "<html><head><script>alert('Password Updated ,Login Again ');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        }
    } else {
        echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
}
else{
    echo "<html><head><script>alert('Confirm Password Mismatch');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=forgot_password.php'>";
}
?>
<center>
<img src="loading.gif">
</center>
