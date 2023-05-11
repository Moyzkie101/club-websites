<?php include 'server/server.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>History Log -  BESIS</title>
</head>
<body>
<?php include 'templates/loading_screen.php' ?>
	<div class="wrapper">
		<!-- Main Header -->
		<?php include 'templates/main-header.php' ?>
		<!-- End Main Header -->

		<!-- Sidebar -->
		<?php include 'templates/sidebar.php' ?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white fw-bold">History Log</h2>
							</div>
						          
				
							</div>

						</div>
					</div>
					<table class="table">
						<tr>
							<th>User Id</th>
                            <th>Name</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Message</th>
						</tr>
					<?php 
						$query = "SELECT * FROM history_log ORDER BY id desc";
					    $result = $conn->query($query);

						   
							while($row = $result->fetch_assoc()){
							    ?>
							       <tr>
							       	   <td><?php echo $row['user_id']; ?></td>
							       	   <td><?php echo $row['name']; ?></td>
							       	   <td><?php echo $row['time']; ?></td>
							       	   <td><?php echo $row['date']; ?></td>
							       	   <td><?php echo $row['message']; ?></td>
							       </tr>
							    <?php 
		                     }

					 ?>
					</table>
				</div>

			</div>
			
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
	
</body>
</html>