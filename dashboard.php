<?php
require_once 'server/server.php';

$query = "SELECT COUNT(*) FROM users";
$result = mysqli_query($conn, $query);
$totalMembers = mysqli_fetch_array($result, MYSQLI_ASSOC)['COUNT(*)'];

$query = "SELECT COUNT(*) FROM plan WHERE active='yes'";
$result = mysqli_query($conn, $query);
$totalPlans = mysqli_fetch_array($result, MYSQLI_ASSOC)['COUNT(*)'];

$date = date('Y-m');
$query = "SELECT * FROM enrolls_to WHERE paid_date LIKE '$date%'";
$result = mysqli_query($conn, $query);
$revenue = 0;
if (mysqli_affected_rows($conn) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $query1 = "SELECT * FROM plan WHERE pid='".$row['pid']."'";
        $result1 = mysqli_query($conn, $query1);
        if ($result1) {
            $value = mysqli_fetch_row($result1);
            $revenue += $value[4];
        }
    }
}

$query = "SELECT COUNT(*) FROM users WHERE joining_date LIKE '$date%'";
$result = mysqli_query($conn, $query);
$joinedThisMonth = mysqli_fetch_array($result, MYSQLI_ASSOC)['COUNT(*)'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPORTS CLUB | Dashboard</title>
    <link rel="stylesheet" href="./dashboard/css/style.css" id="style-resource-5">
    <script type="text/javascript" src="./dashboard/js/Script.js"></script>
    <link rel="stylesheet" href="./dashboard/css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/loader.css">
    <link rel="stylesheet" type="text/css" href="./dashboard/css/entypo.css">
    <style>
        .page-container .sidebar-menu #main-menu li#dash > a {
            background-color: #2b303a;
            color: #ffffff;
        }
        .window-loading {
            overflow: hidden;
        }
    </style>
</head>
<body class="page-body page-fade" onload="collapseSidebar()">
    <div class="page-container sidebar-collapsed" id="navbarcollapse">
		<div class="loader">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen hidden></iframe>
		</div>
        <div class="sidebar-menu">
            <header class="logo-env">
                <div class="logo">
                    <img id="realTimeImage" alt="" width="192" height="80" loading="lazy" />
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
                            <a href="admin/logout.php">
                                Log Out <i class="entypo-logout right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <h2>SPORTS CLUB</h2>
            <hr>
            <div class="col-sm-3">
                <a href="./admin/revenue_month.php">
                    <div class="tile-stats tile-red">
                        <div class="icon"><i class="entypo-users"></i></div>
                        <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Paid Income This Month</h2><br>
                            <?php echo "₹" . $revenue; ?>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="./admin/table_view.php">
                    <div class="tile-stats tile-green">
                        <div class="icon"><i class="entypo-chart-bar"></i></div>
                        <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Total <br>Members</h2><br>
                            <?php echo $totalMembers; ?>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="./admin/over_members_month.php">
                    <div class="tile-stats tile-aqua">
                        <div class="icon"><i class="entypo-mail"></i></div>
                        <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Joined This Month</h2><br>
                            <?php echo $joinedThisMonth; ?>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="./admin/view_plan.php">
                    <div class="tile-stats tile-blue">
                        <div class="icon"><i class="entypo-rss"></i></div>
                        <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Total Plan Available</h2><br>
                            <?php echo $totalPlans; ?>
                        </div>
                    </div>
                </a>
            </div>
            <marquee direction="right">
                <img src="admin/fball.gif" width="88" height="70" alt="Tutorials" border="0">
            </marquee>
            <?php include('./admin/footer.php'); ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('body').addClass('window-loading');
            var loader = document.querySelector(".loader");
            window.addEventListener("load", function() {
                loader.classList.add("disppear");
                $('body').removeClass('window-loading');
            });
        });
    </script>
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
