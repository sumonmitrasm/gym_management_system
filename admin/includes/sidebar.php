            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="text-center">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['name']; ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"> Profile</a></li>
                                    <li><a href="javascript:void(0)"> Settings</a></li>
                                    <li><a href="javascript:void(0)"> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li>
                                    <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()"> Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            
                                    
                            <?php if($_SESSION['user_type']=='admin' or $_SESSION['user_type'] =='manager'){ ?>
                            <li>
                                <a href="index.php" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                            </li>

                            <?php } ?>
                            
                            <?php if($_SESSION['user_type']=='admin' or $_SESSION['user_type'] =='manager'){ ?>

                                 
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Member </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add_member.php">Add Member</a></li>
                                    <li><a href="attend_member.php">Attendance</a></li>
                                    <li><a href="modify_attendence_data.php">Update Member Attendance</a></li>
                                    <li><a href="attendance_list.php">Attendance list</a></li>
                                    <li><a href="member_list.php">Member list</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Manage User </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="users_list.php">Users</a></li>
                                    <li><a href="add_user.php">Add User</a></li>
                                    
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Services </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="class_list.php">Service list</a></li>
                                    <li><a href="add_availableclass.php"> Add Service</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Certificate </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="certificate_list.php">Certificate list</a></li>
                                    <li><a href="add_certificate.php"> Add Certificate</a></li>
                                </ul>
                            </li>

							<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Membership </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="membership_fondpage.php">Membership list</a></li>
                                    <li><a href="add_membership_fondpage.php"> Add Membership</a></li>
                                </ul>
                            </li>
                           
                                
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Category </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="category_list.php">Categories</a></li>
                                    <li><a href="add_category.php">Add Category</a></li>
                                </ul>
                            </li>
                             
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Product </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="product_list.php">Product list</a></li>
                                    <li><a href="add_product.php">Add product</a></li>
                                </ul>
                            </li>

                            


                            <!--------------------------------------------me-------------------------->
                            
                             
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Orders </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="Order_list.php">Order list</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Brand </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="brand_list.php">Brand list</a></li>
                                    <li><a href="add_brand.php"> Add Brand</a></li>
                                </ul>
                            </li>
                             
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Food Item </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="fooddetails_list.php">Food list</a></li>
                                    <li><a href="add_fooddetails.php"> Add Food</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Manage Schedule </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="schedule_list.php">Schedule list</a></li>
                                    <li><a href="addsunday_shedule.php"> Add Schedule</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Add Trainer </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add_trainer.php">Add Trainer</a></li>
                                    <li><a href="trainer_list.php">View Trainer</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Add galary </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add_galary.php">Add Galary</a></li>
                                    <li><a href="galary_list.php">View galary</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Manage Special offer</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="offer_list.php">Offer List</a></li>
                                    <li><a href="add_special_offer.php">Add Offer</a></li>
                                    
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Online Apply List</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="onlineapply_list.php">Online Apply list</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Special offer Apply List</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="specialoffrtapply_list.php">Special offer Apply list</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Contact List</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="contact_list.php">Contact list</a></li>
                                </ul>
                            </li>
                      <?php } ?>
                      <?php if($_SESSION['user_type']=='trainer'){ ?>
                      <li><a href="attend_member.php">Attendance</a></li>
                        <li><a href="modify_attendence_data.php">Update Member Attendance</a></li>
                            <li><a href="attendance_list.php">Attendance list</a></li>
                            <?php } ?>
                            <?php if($_SESSION['user_type']=='member'){ ?>
                            <li><a href="attendance_list.php">Attendance list</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>