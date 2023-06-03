<?php
require_once 'server/server.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>SPORTS CLUB  | Member History</title>
   	<link rel="stylesheet" href="./dashboard/css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="./dashboard/js/Script.js"></script>
    <link rel="stylesheet" href="./dashboard/css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="./dashboard/css/entypo.css">
<link href="admin/a1style.css" rel="stylesheet" type="text/css">     
    <style>
    	.page-container .sidebar-menu #main-menu li#hassubopen > a {
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
				<a href="main.php">
					<img src="logo1.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('admin/nav.php'); ?>
    	</div>


    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['role']; ?> 
							</li>							
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>Member History</h3>

			Details of : - <?php
			$id     = $_GET['id'];
			$query  = "select * from users WHERE userid='$id'";
			//echo $query;
			$result = mysqli_query($conn, $query);

			if (mysqli_affected_rows($conn) != 0) {
			    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			        $name = $row['username'];
			        $memid=$row['userid'];
			        $gender=$row['gender'];
			        $mobile=$row['mobile'];
			        $email=$row['email'];
			        $joinon=$row['joining_date'];
			        echo $name;
			    }
			}
			?>

		<hr />


		
		<table width="100%" border="1" >
			<thead>
				<tr>
					<th>Membership ID</th>
					<th>Name</th>
					<th>Gender</th>
				    <th>Mobile</th>
				    <th>Email</th>
					<th>Join On</th>
				</tr>
			</thead>
				<tbody align="center">
					<?php
					
					        
					     echo "<tr><td>" . $memid . "</td>";
					     
					     echo "<td>" . $name . "</td>";
			     	     
			     	     echo "<td>" . $gender . "</td>";
			
		      	         echo "<td>" . $mobile . "</td>";

		      	         echo "<td>" . $email . "</td>";

					     echo "<td>" . $joinon . "</td></tr>";
					    
					?>								
				</tbody>
			<tfoot>
				<tr>
					<th>Membership ID</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Join On</th>
				</tr>
		</tfoot>
		</table>
				<br>
				<br>

				<h3>Payment history of : - <?php echo $name;?></h3>

		<table width="100%" border="1">
			<thead>
				<tr>
					<th>Sl.No</th>
					<th>Plan Name</th>
					<th>Plan Desc</th>
					<th>Validity</th>
					<th>Amount</th>
					<th>Payment Date</th>
					<th>Expire Date</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						
						$query1  = "select * from enrolls_to WHERE uid='$memid'";
						//echo $query;
						$result = mysqli_query($conn, $query1);
						$sno    = 1;

						if (mysqli_affected_rows($conn) != 0) {
						    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						      $pid=$row['pid'];
						      $query2="select * from plan where pid='$pid'";
						      $result2=mysqli_query($conn,$query2);
						      if($result2){
						      	$row1=mysqli_fetch_array($result2,MYSQLI_ASSOC);

						        echo "<td>" . $sno . "</td>";

						        echo "<td>" . $row1['planName'] . "</td>";

						        echo "<td width='380'>" . $row1['description'] . "</td>";

						        echo "<td>" . $row1['validity'] . "</td>";

						        echo "<td>" . $row1['amount'] . "</td>";

						        echo "<td>" . $row['paid_date'] . "</td>";

						        echo "<td>" . $row['expire'] . "</td>";
						        
						        $sno++;
						    }
						        
						        echo '<td><a href="gen_invoice.php?id='.$row['uid'].'&pid='.$row['pid'].'&etid='.$row['et_id'].'"><input type="button" class="a1-btn a1-blue" value="Memo" ></a></td></tr>';
						        $memid = 0;
						    }
						    
						}

					?>							
				</tbody>
			<tfoot>
				<tr>
					<th>Sl.No</th>
					<th>Plan Name</th>
					<th>Plan Desc</th>
					<th>Validity</th>
					<th>Amount</th>
					<th>Payment Date</th>
					<th>Expire Date</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>


			<?php include('footer.php'); ?>
    	</div>
    </body>
</html>