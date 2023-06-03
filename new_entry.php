<?php
require_once 'server/server.php';
?>
<!-- entire code and design, need ko'g enhancing code and design -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPORTS CLUB | New User</title>
    <link rel="stylesheet" href="dashboard/css/style.css" id="style-resource-5">
    <link rel="stylesheet" href="dashboard/css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="dashboard/css/entypo.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/loader.css">
    <link href="admin/a1style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/your/custom.css">
    <script type="text/javascript" src="dashboard/js/Script.js"></script>
</head>
<body class="page-body  page-fade" onload="collapseSidebar()">
<div class="wrapper">
    <div class="page-container sidebar-collapsed" id="navbarcollapse">
        <!-- <div class="loader">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen hidden></iframe>
        </div> -->
        <div class="sidebar-menu">
            <header class="logo-env">
                <div class="logo">
                    <img src="<?php echo $_SESSION['avatar']; ?>" id="realTimeImage" alt="" width="192" height="80" />
                </div>
                <div class="sidebar-collapse" onclick="collapseSidebar()">
                    <a href="#" class="sidebar-collapse-icon with-animation">
                        <i class="entypo-menu"></i>
                    </a>
                </div>
            </header>
            <?php include('./admin/nav.php'); ?>
        </div>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-md-6 col-sm-8 clearfix">    
            </div>
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
    </div>
    <h3>New Registration</h3>
    <hr />
    <div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
            <div class="a1-container a1-dark-gray a1-center">
                <h6>NEW ENTRY</h6>
            </div>
            <form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
                <table width="100%" border="0" align="center">
                    <tr>
                        <td height="35">
                            <table width="100%" border="0" align="center">
                            <tr>
                                <td height="35">
                                    <table width="100%" border="0" align="center">
                                        <tr>
                                            <td height="35">MEMBERSHIP ID:</td>
                                            <td height="35">
                                                <input type="text" id="boxx" name="m_id" value="<?php echo time(); ?>" readonly required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">NAME:</td>
                                            <td height="35">
                                                <input name="u_name" id="boxx" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">STREET NAME:</td>
                                            <td height="35">
                                                <input  name="street_name" id="boxx" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">CITY:</td>
                                            <td height="35">
                                                <input type="text" name="city" id="boxx" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">ZIPCODE:</td>
                                            <td height="35">
                                                <input type="number" name="zipcode" id="boxx" maxlength="6" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">STATE:</td>
                                            <td height="35">
                                                <input type="text" name="state" id="boxx" size="30" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">GENDER:</td>
                                            <td height="35">
                                                <select name="gender" id="boxx" required>
                                                    <option value="">--Please Select--</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">DATE OF BIRTH:</td>
                                            <td height="35">
                                                <input type="date" name="dob" id="boxx" size="30" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">PHONE NO:</td>
                                            <td height="35">
                                                <input type="number" name="mobile" id="boxx" maxlength="10" size="30" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">EMAIL ID:</td>
                                            <td height="35">
                                                <input type="email" name="email" id="boxx" size="30" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">JOINING DATE:</td>
                                            <td height="35">
                                                <input type="date" name="jdate" id="boxx" size="30" required/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35">SPORTS PLAN:</td>
                                            <td height="35">
                                                <select name="plan" id="boxx" required onchange="myplandetail(this.value)">
                                                    <option value="">--Please Select--</option>
                                                    <?php
                                                        $query="select * from plan where active='yes'";
                                                        $result=mysqli_query($con,$query);
                                                        if(mysqli_affected_rows($con)!=0){
                                                            while($row=mysqli_fetch_row($result)){
                                                                echo "<option value=".$row[0].">".$row[1]."</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <tr>
                                    <td colspan="2" align="center">
                                        <button class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Register">test</button>
                                        <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset">
                                    </td>
                                </tr>
                            </tr>
                                <!-- Rest of the form code... -->
                            </table>
                        </td>
                        <tr>
                            <td colspan="2" align="center">
                                <button class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Register">test</button>
                                <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset">
                            </td>
                        </tr>
                    </tr>
                </table>
            </form>
        </div>
    </div>
        
    <script>
        function myplandetail(str){
            if(str==""){
                document.getElementById("plandetls").innerHTML = "";
                return;
            }else{
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("plandetls").innerHTML=this.responseText;
                    }
                };
                xmlhttp.open("GET","plandetail.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
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
    <?php include('footer.php'); ?>
    </div>
</body>
</html>
