<?php
$database	= 'barsims';
$username	= 'root';
$host		= 'localhost';
$password	= '';

// $database	= 'epiz_33397313_barsims';
// $username	= 'epiz_33397313';
// $host		= 'sql206.epizy.com';
// $password	= 'I6gE9Ey614YkXma';

ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
error_reporting(0);

date_default_timezone_set('Asia/Manila');

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
	die("Connection Failed: ". $conn->connect_error());
}

if(!isset($_SESSION)){
	session_start();	
}

// if(!isset($_SESSION['username'])){
// 	header('Location: login_access.php');
// }

?>