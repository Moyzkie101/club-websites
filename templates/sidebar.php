<?php // function to get the current page name
include 'server/server.php';

function PageName() {
  return substr( $_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") +1);
}

$current_page = PageName();
?>
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <?php if(!empty($_SESSION['avatar'])): ?>
                        <img src="<?= preg_match('/data:image/i', $_SESSION['avatar']) ? $_SESSION['avatar'] : 'assets/uploads/avatar/'.$_SESSION['avatar'] ?>" alt="..." class="avatar-img rounded-circle">
                    <?php else: ?>
                        <img src="assets/img/person.png" alt="..." class="avatar-img rounded-circle">
                    <?php endif ?>
                   
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="<?= isset($_SESSION['username']) && $_SESSION['role']=='administrator' ? '#collapseExample' : 'javascript:void(0)' ?>" aria-expanded="true">
                        <span>
                        <?= isset($_SESSION['username']) ? ucfirst($_SESSION['username']) : 'Guest User' ?>
                            <span class="user-level"><?= isset($_SESSION['role']) ? ucfirst($_SESSION['role']) : 'Guest' ?></span>
                        <?= isset($_SESSION['username']) && $_SESSION['role']=='administrator' ? '<span class="caret"></span>' : null ?> 
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#edit_profile" data-toggle="modal">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                                <a href="#changepass" data-toggle="modal">
                                    <span class="link-collapse">Change Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?= $current_page=='dashboard.php' || $current_page=='resident_info.php' || $current_page=='purok_info.php'  ? 'active' : null ?>">
                    <a href="dashboard.php" >
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>
                <li class="nav-item">
                    <a href="index.php" >
                        <i class="fa fa-globe"></i>
                        <p>View Home Page</p>
                    </a>
                </li>
                <li class="nav-item <?= $current_page=='request.php' ? 'active' : null ?>">
                    <a href="request.php">
                        <i class="fa fa-paper-plane"></i>
                        <p>Requested</p>
                    </a>
                </li>
                <li class="nav-item <?= $current_page=='officials.php' ? 'active' : null ?>">
                    <a href="officials.php">
                        <i class="flaticon-users"></i>
                        <p>Brgy Officials and Staff</p>
                    </a>
                </li>
                <li class="nav-item <?= $current_page=='household.php' || $current_page=='household.php' ? 'active' : null ?>">
                    <a href="household.php">
                        <i class="icon-direction"></i>
                        <p>Purok</p>
                    </a>
                </li>
                <li class="nav-item <?= $current_page=='resident.php' || $current_page=='generate_resident.php' ? 'active' : null ?>">
                    <a href="resident.php">
                        <i class="icon-people"></i>
                        <p>Resident Information</p>
                    </a>
                    </li>
                   
                <li class="nav-item <?= $current_page=='blotter.php' || $current_page=='generate_blotter_report.php' || $current_page=='generate_blotter_summon.php' ? 'active' : null ?>">
                    <a href="blotter.php">
                        <i class="icon-layers"></i>
                        <p>Blotter Records</p>
                    </a>
                </li>

                <li class="nav-item <?= $current_page=='history_log.php' ? 'active' : null ?>">
                    <a href="history_log.php">
                        <i class="fa fa-history"></i>
                        <p>History Log</p>
                    </a>
                </li>
                <li class="nav-item <?= $current_page=='announce.php' ? 'active' : null ?>">
                    <a href="announce.php">
                        <i class="fas fa-user-tie"></i>
                        <p>Announce</p>
                    </a>
                </li>

                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff'): ?>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">System</h4>
                    </li>
                    <li class="nav-item">
                        <a href="#support" data-toggle="modal">
                            <i class="fas fa-flag"></i>
                            <p>Support</p>
                        </a>
                    </li>
                <?php endif ?>
                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                <li class="nav-item <?= $current_page=='revenue.php' ? 'active' : null ?>">
                    <a href="revenue.php">
                        <i class="fas fa-dollar-sign"></i>
                        <p>Revenues</p>
                    </a>
                </li>

                 <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Services</h4>
                </li>

                <li class="nav-item <?= $current_page=='financial.php' ? 'active' : null ?>">
                    <a href="#financial" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="fas fa-donate"></i>
                            <p>Financial Aids</p>
                        <span class="caret"></span>
                    </a>

                    <div class="collapse <?= $current_page=='financial.php'? 'show' : null ?>" id="financial">
                        <ul class="nav nav-collapse">
                           
                            
                                 
                                  
                                 <?php
                                      $fin = $conn->query('select * from status');
                                      while ($f = $fin->fetch_assoc()) {
                                           ?>
                                           <li class="nav-item <?php if( $f['stat_id'] == $_GET['id'] ){
                                                                            echo "active";
                                                                        }?>">
                                               <a href="financial.php?id=<?php echo $f['stat_id']; ?>&name=<?php echo $f['status_name']; ?>"><span class="sub-item"><?php echo ucfirst($f['status_name']); ?></span></a>
                                            </li>
                                           <?php 
                                      }
                                  ?>
                            
                        </ul>
                    </div>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Documents</h4>
                </li>

                <li class="nav-item <?= $current_page=='resident_certification.php' || $current_page=='resident_indigency.php' || $current_page=='resident_certificate.php' || $current_page=='business_permit.php' || $current_page=='generate_brgy_cert.php' ? 'active' : null ?>">
                    <a href="#certificates" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="icon-docs"></i>
                            <p>Certificates</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= $current_page=='resident_certification.php' || $current_page=='resident_indigency.php'  || $current_page=='resident_certificate.php' || $current_page=='business_permit.php'  ? 'show' : null ?>" id="certificates">
                        <ul class="nav nav-collapse">
                           
                            <li class="<?= $current_page=='resident_certification.php' || $current_page=='generate_brgy_cert.php' ? 'active' : null ?>">
                                <a href="resident_certification.php">
                                    <span class="sub-item">Barangay Clearance</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='resident_indigency.php' || $current_page=='generate_indi_cert.php'? 'active' : null ?>">
                                <a href="resident_indigency.php">
                                    <span class="sub-item">Used of Barangay Facilities</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='business_permit.php' || $current_page=='generate_business_permit.php' ? 'active' : null ?>">
                                <a href="business_permit.php">
                                    <span class="sub-item">Brgy Business Clearance</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='resident_certificate.php' || $current_page=='generate_resi_cert.php' ? 'active' : null ?>">
                                <a href="resident_certificate.php">
                                    <span class="sub-item">Issuance of Summons</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
               

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">System</h4>
                </li>
                <li class="nav-item <?= $current_page=='purok.php' || $current_page =='financial-aids.php' || $current_page=='household.php'|| $current_page=='position.php' || $current_page=='chairmanship.php' || $current_page=='precinct.php' ||$current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'active' : null ?>">
                    <a href="#settings" data-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="icon-wrench"></i>
                            <p>Settings</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse <?= $current_page=='purok.php' || $current_page =='financial-aids.php' || $current_page=='household.php' || $current_page=='position.php'  || $current_page=='precinct.php' || $current_page=='chairmanship.php' || $current_page=='users.php' || $current_page=='support.php' || $current_page=='backup.php' ? 'show' : null ?>" id="settings">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#barangay" data-toggle="modal">
                                    <span class="sub-item">Barangay Info</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='purok.php' ? 'active' : null ?>">
                                <a href="purok.php">
                                    <span class="sub-item">Purok</span>
                                </a>
                            </li>

                            <li class="<?= $current_page=='financial-aids.php' ? 'active' : null ?>">
                                <a href="financial-aids.php">
                                    <span class="sub-item">Financial Aids</span>
                                </a>
                            </li>

                            <li class="<?= $current_page=='house.php' ? 'active' : null ?>">
                                <a href="house.php">
                                    <span class="sub-item">Household Number</span>
                                </a>
                            </li>
                            

                            <li class="<?= $current_page=='precinct.php' ? 'active' : null ?>">
                                <a href="precinct.php">
                                    <span class="sub-item">Precinct</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='position.php' ? 'active' : null ?>">
                                <a href="position.php">
                                    <span class="sub-item">Positions</span>
                                </a>
                            </li>
                            <li class="<?= $current_page=='chairmanship.php' ? 'active' : null ?>">
                                <a href="chairmanship.php">
                                    <span class="sub-item">Chairmanship</span>
                                </a>
                            </li>
                            
                            <?php if($_SESSION['role']=='staff'):?>
                                <li>
                                    <a href="#support" data-toggle="modal">
                                        <span class="sub-item">Support</span>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="<?= $current_page=='users.php' ? 'active' : null ?>">
                                    <a href="users.php">
                                        <span class="sub-item">Users</span>
                                    </a>
                                </li>
                                <!-- <li class="<?= $current_page=='support.php' ? 'active' : null ?>">
                                    <a href="support.php">
                                        <span class="sub-item">Support</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="backup/backup.php">
                                        <span class="sub-item">Backup</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#restore" data-toggle="modal">
                                        <span class="sub-item">Restore</span>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>


