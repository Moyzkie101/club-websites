<?php
//welcome.php

require_once 'server/server.php';

if (isset($_SESSION['user_token'])) {
	$sql = "SELECT * FROM `admin` WHERE token ='{$_SESSION['user_token']}'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	  $userinfo = mysqli_fetch_assoc($result);
	  $_SESSION['full_name'] = $userinfo['full_name']; // Store full_name in session
	  $_SESSION['picture'] = $userinfo['picture'];
	}
} else if (isset($_GET['code'])) {
	$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
	$client->setAccessToken($token['access_token']);
  
	// get profile info
	$google_oauth = new Google_Service_Oauth2($client);
	$google_account_info = $google_oauth->userinfo->get();
	$userinfo = [
	  'email' => $google_account_info['email'],
	  'first_name' => $google_account_info['givenName'],
	  'last_name' => $google_account_info['familyName'],
	  'gender' => $google_account_info['gender'],
	  'full_name' => $google_account_info['name'],
	  'picture' => $google_account_info['picture'],
	  'verifiedEmail' => $google_account_info['verifiedEmail'],
	  'token' => $google_account_info['id'],
	];
  
	// checking if user already exists in the database
	$sql = "SELECT * FROM `admin` WHERE email ='{$userinfo['email']}'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	  // user exists
	  $userinfo = mysqli_fetch_assoc($result);
	  $_SESSION['user_token'] = $userinfo['token'];
	  $_SESSION['full_name'] = $userinfo['full_name'];
	} else {
	  // user does not exist
	  $sql = "INSERT INTO `admin` (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
	  $result = mysqli_query($conn, $sql);
	  if ($result) {
		$_SESSION['user_token'] = $userinfo['token'];
		$_SESSION['full_name'] = $userinfo['full_name'];
	   } else {
		echo "User is not created";
		die();
	  }
	}
 } else {
	header("Location:dashboard.php");
	die();
}

//error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head> 

    
    <title>SPORTS CLUB  | Dashboard </title>

    <link rel="stylesheet" href="./dashboard/css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="./dashboard/js/Script.js"></script>
    <link rel="stylesheet" href="./dashboard/css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="./dashboard/css/entypo.css">
     <style>
    	.page-container .sidebar-menu #main-menu li#dash > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<img id="realTimeImage" alt="" width="192" height="80" loading="laz" />
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('./admin/nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <b><?php echo $_SESSION['full_name']; ?></b> 
							</li>					
						
							<li>
								<a href="admin/logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

			<h2>SPORTS CLUB </h2>

			<hr>

			<div class="col-sm-3"><a href="./admin/revenue_month.php">			
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Paid Income This Month</h2><br>	
						<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";

							//echo $query;
							$result  = mysqli_query($conn, $query);
							$revenue = 0;
							if (mysqli_affected_rows($conn) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							    	$query1="select * from plan where pid='".$row['pid']."'";
							    	$result1=mysqli_query($conn,$query1);
							    	if($result1){
							    		$value=mysqli_fetch_row($result1);
							        $revenue = $value[4] + $revenue;
							    	}
							    }
							}
							echo "₹".$revenue;
							?>
						</div>
				</div></a>
			</div>
			

			<div class="col-sm-3"><a href="./admin/table_view.php">			
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Total <br>Members</h2><br>	
							<?php
							$query = "select COUNT(*) from users";

							$result = mysqli_query($conn, $query);
							$i      = 1;
							if (mysqli_affected_rows($conn) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>	
				
			<div class="col-sm-3"><a href="./admin/over_members_month.php">			
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Joined This Month</h2><br>	
							<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

							//echo $query;
							$result = mysqli_query($conn, $query);
							$i      = 1;
							if (mysqli_affected_rows($conn) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>			
			</div>

			<div class="col-sm-3"><a href="./admin/view_plan.php">			
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Total Plan Available</h2><br>	
							<?php
							$query = "select COUNT(*) from plan where active='yes'";

							//echo $query;
							$result  = mysqli_query($conn, $query);
							$i = 1;
							if (mysqli_affected_rows($conn) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>
			
<marquee direction="right"><img src="admin/fball.gif" width="88" height="70" alt="Tutorials " border="0"></marquee>

			
   
    	<?php include('./admin/footer.php'); ?>
</div>

<script>
  // Function to update the image source in real-time
  function updateImageSource() {
    // Make an API call or retrieve the image URL from a real-time source
    var imageUrl = "<?php echo $_SESSION['picture']; ?>";

    // Update the image source
    document.getElementById("realTimeImage").src = imageUrl;
  }

  // Call the updateImageSource function periodically or based on your requirements
  setInterval(updateImageSource, 1000); // Update every second (1000 milliseconds)
</script>

    </body>
</html>
