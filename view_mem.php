<?php
require_once 'server/server.php';

if(isset($_SESSION['id'])){
	$query = "SELECT users.userid, users.username, users.mobile, users.email, users.gender, users.joining_date, enrolls_to.expire 
			FROM users 
			INNER JOIN enrolls_to ON users.userid = enrolls_to.uid AND enrolls_to.renewal = 'yes' 
			ORDER BY users.joining_date";
}else{
	$query = "SELECT users.userid, users.username, users.mobile, users.email, users.gender, users.joining_date, enrolls_to.expire 
			FROM users 
			INNER JOIN enrolls_to ON users.userid = enrolls_to.uid AND enrolls_to.renewal = 'yes' 
			ORDER BY users.joining_date";
}

$result = mysqli_query($conn, $query);

$users = array();
	while($row = $result->fetch_assoc()){
		$users[] = $row; 
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPORTS CLUB | Member View</title>
    <link rel="stylesheet" href="./dashboard/css/style.css" id="style-resource-5">
    <script type="text/javascript" src="./dashboard/js/Script.js"></script>
    <link rel="stylesheet" href="./dashboard/css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="./dashboard/css/entypo.css">
    <link href="./admin/a1style.css" rel="stylesheet" type="text/css">

    <style>
        #button1 {
            width: 126px;
        }

        .page-container .sidebar-menu #main-menu li#hassubopen > a {
            background-color: #2b303a;
            color: #ffffff;
        }
    </style>
</head>
<body class="page-body page-fade" onload="collapseSidebar()">
<div class="page-container sidebar-collapsed" id="navbarcollapse">
    <div class="sidebar-menu">
        <header class="logo-env">
            <div class="logo">
                <a href="main.php">
                    <img src="logo1.png" alt="" width="192" height="80" />
                </a>
            </div>
            <div class="sidebar-collapse" onclick="collapseSidebar()">
                <a href="#" class="sidebar-collapse-icon with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <?php include('./admin/nav.php'); ?>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-md-6 col-sm-8 clearfix"></div>
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                <ul class="list-inline links-list pull-right">
                    <li>Welcome <b><?php echo $_SESSION['role']; ?></b></li>
                    <li>
                        <a href="logout.php">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <h3>Edit Member</h3>
        <hr />
        <table class="table table-bordered datatable" width="100%" id="table-1" border=1>
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Membership Expiry</th>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>E-Mail</th>
                    <th>Gender</th>
                    <th>Joining Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($users)):?>
					<?php $no=1; foreach($users as $row): ?>
						<tr align="center">
							<td><?= $no ?></td>
							<td><?= $row['expire'] ?></td>
							<td><?= $row['userid'] ?></td>
							<td><?= $row['username'] ?></td>
							<td><?= $row['mobile'] ?></td>
							<td><?= $row['email'] ?></td>
							<td><?= $row['gender'] ?></td>
							<td><?= $row['joining_date'] ?></td>
							<td>
								<a type="button" class="a1-btn a1-blue" id='button1' data-toggle="tooltip" href="read_member.php?id=<?=$row['userid']?>">View History</a>
                                
                                <form action='edit_member.php' method='post'>
                                    <input type='hidden' name='name' value='"<?=$row['userid']?>"'/>
                                    <input type='submit' class='a1-btn a1-green' id='button1' value='Edit'>
                                </form>
                                <form action='del_member.php' method='post' onsubmit='return ConfirmDelete()'>
                                    <input type='hidden' name='name' value='"<?=$row['userid']?>"'/>
                                    <input type='submit' value='Delete' width='20px' id='button1' class='a1-btn a1-red'>
                                </form>
                            </td>
						</tr>
					<?php $no++; endforeach ?>
				<?php endif ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Sl.No</th>
                    <th>Membership Expiry</th>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>E-Mail</th>
                    <th>Gender</th>
                    <th>Joining Date</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>

        <script>
            function ConfirmDelete() {
                var r = confirm("Are you sure you want to delete this user?");
                if (r == true) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

        <?php include('admin/footer.php'); ?>
    </div>
</body>
</html>
