<?php

    
    require_once 'vendor/autoload.php';
    
    session_start();

    // init configuration
    $clientID = '672156295918-vvas2r5j3ngp4tnp89lc2lnh3sv05kmr.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/club-websites/dashboard.php';

    //GOOGLE API KEY : AIzaSyDMMdbxQhGQSt7oGxOeqmexzK0RZvn1bnA

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

//Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sports_club_db";

mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);

$conn = mysqli_connect($hostname, $username, $password, $database);
if($conn->connect_error){
     	die("Connection Failed: ".mysqli_connect_error());
     }

//  ini_set('display_errors',1);
//  error_reporting(E_ALL);
//  mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
//  error_reporting(0);

// date_default_timezone_set('Asia/Manila');

// $conn = new mysqli($host,$username,$password,$database);

//  if($conn->connect_error){
//  	die("Connection Failed: ". $conn->connect_error());
//  }

//  if(!isset($_SESSION)){
		
//  }

?>