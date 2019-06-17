<?php



?>

<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile dropdown m-t-20">
                                
                                <div class="user-content hide-menu m-t-10">
                                    <h5 class="m-b-10 user-name font-medium"><?php echo $_SESSION["setname"]; ?></a></h5>
                                    <h5 class="m-b-10 user-name font-medium"><?php echo $_SESSION["email"]; ?></a></h5>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="dashboard.php" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu">Dashboards </span>
                            </a>
                        
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Mailbox-Empty"></i>
                                <span class="hide-menu">Doctors </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <?php
                        if($_SESSION["useraccess"]!=2 && $_SESSION["useraccess"]!=1){
                        ?>
                    
                                <li class="sidebar-item">
                                    <a href="adddoctor.php" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu">Add Doctors </span>
                                    </a>
                                </li>
                                
                                <?php 
                        }
                                ?>
                                <li class="sidebar-item">
                                    <a href="viewdoctors.php" class="sidebar-link">
                                        <i class="mdi mdi-email-alert"></i>
                                        <span class="hide-menu"> View Doctors </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Mailbox-Empty"></i>
                                <span class="hide-menu">Ebooks </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <?php
                        if($_SESSION["useraccess"]!=2){
                        ?>
                    
                                <li class="sidebar-item">
                                    <a href="adddebook.php" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu">Add E-books </span>
                                    </a>
                                </li>
                                
                                <?php 
                        }
                                ?>
                                <li class="sidebar-item">
                                    <a href="viewebooks.php" class="sidebar-link">
                                        <i class="mdi mdi-email-alert"></i>
                                        <span class="hide-menu"> View E-Books</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Mailbox-Empty"></i>
                                <span class="hide-menu">Diet Foods </span>
                            </a>
                            
                            <ul aria-expanded="false" class="collapse  first-level">
                                    <?php
                        if($_SESSION["useraccess"]!=2){
                        ?>
                                <li class="sidebar-item">
                                    <a href="addfood.php" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu">Add Food  </span>
                                    </a>
                                </li>
                                <?php 
                        }
                                ?>
                            
                                
                                <li class="sidebar-item">
                                    <a href="viewfoods.php" class="sidebar-link">
                                        <i class="mdi mdi-email-alert"></i>
                                        <span class="hide-menu"> View Diet Foods</span>
                                    </a>
                                </li>
                            </ul>
                        </li>                        
                     <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php" aria-expanded="false">
                                <i class="mdi mdi-directions"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>