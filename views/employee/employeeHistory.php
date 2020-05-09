<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$employee=$conn->getAll("SELECT * FROM `employees`");
//$notices=$conn->getAll("SELECT * FROM `notices`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--bannerremover style of 000w-->
    <style>img[alt="www.000webhost.com"]{display:none;}</style>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Human Resource Management Sysytem</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../resource/css/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../resource/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/scroller.bootstrap.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../resource/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- side and top bar include -->
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="../admin/dashboard.php" class="site_title"><i class="fa fa-ils"></i> <span>Sunny Group</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="../../resource/images/misha.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Hello,</span>
                        <h2>Imtiaz Misha</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../admin/dashboard.php">Dashboard</a></li>
                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-industry"></i>Industry<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../industry/departments.html">Departments</a></li>
                                    <li><a href="../industry/designations.html">Designations</a></li>
                                </ul>
                            </li>

                            <li>
                                <a><i class="fa fa-users"></i>Employees<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../employee/createEmployee.php">Create Employee</a></li>
                                    <li><a href="../employee/employeeHistory.php">Employee History</a></li>
                                </ul>
                            </li>

                            <li>
                                <a><i class="fa fa-comments-o"></i>Notice Board <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../admin/sendNotice.html">Create Notice</a></li>
                                    <li><a href="../noticeBoard/noticeBoard.html">Notice History</a></li>
                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-calendar-check-o"></i>Attendance<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
        					                	<li><a href="../attendance/attendance.html">Take Attendance</a></li>
                                    <li><a href="../attendance/attList.html">Attendance List</a></li>
                                    <li><a href="../attendance/attReport.html">Report</a></li>
                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-external-link"></i>Manage Leaves<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../leave/leaveApplications.html">Applications</a></li>
                      							<li><a href="../leave/holydays.html">Holyday</a></li>
                      							<li><a href="../leave/leaveType.html">Leave Type</a></li>
                      							<li><a href="../leave/leaveReport.html">Report</a></li>

                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-credit-card"></i>Payroll<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../payroll/payrollList.html">Payroll List</a></li>
                      							<li><a href="../payroll/generatePayslip.html">Generate Payslip</a></li>
                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-balance-scale"></i>Loan<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../loan/loanApplications.html">Applications</a></li>
                      							<li><a href="../loan/grandLoan.html">Grand Loan</a></li>
                      							<li><a href="../loan/installments.html">Installment</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Live On</h3>
                        <ul class="nav side-menu">
        				    <li>
                                <a><i class="fa fa-envelope-o"></i>Conference<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
        					     	<li><a href="../inbox/inbox.html">Inbox</a></li>
        							<li><a href="https://meet.google.com/">Meet</a></li>
                                </ul>
                            </li>


        					<li>
                                <a><i class="fa fa-briefcase"></i>Job Vacancies<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
        					     	<li><a href="../admin/jobApplications.html">Applications</a></li>
                                    <li><a href="../admin/addVacancies.html">Add Vacancies</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings" href="../../src/store/sitesettings.php">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>

                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Dark Mode">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../src/store/Logout.php">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="../../resource/images/misha.jpg" alt="">Imtiaz Misha
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;">Visit Profile</a></li>
        				            		<li><a href="javascript:;">Change Password</a></li>
                                <li><a href="../../src/store/Logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                           <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                               <i class="fa fa-envelope"></i>
                               <span class="badge bg-green"></span>
                           </a>
                           <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">


                               <li>
                                   <a id="compose">
                                       <span class="image"><img src="../../resource/images/img6.png" alt="Profile Image" /></span>
                                       <span>
                                         <span>Sunny Bro</span>
                                         <span class="time">04:23</span>
                                       </span>
                                       <span class="message">Check this</span>
                                   </a>
                               </li>
                               <li>
                                   <a id="compose">
                                       <span class="image"><img src="../../resource/images/img4.png" alt="Profile Image" /></span>
                                       <span>
                                         <span>Ashik Bro</span>
                                         <span class="time">01:46</span>
                                       </span>
                                       <span class="message">Add me</span>
                                   </a>
                               </li>
                               <li>
                                   <a id="compose">
                                       <span class="image"><img src="../../resource/images/img5.png" alt="Profile Image" /></span>
                                       <span>
                                         <span>Chanchal Chowdhury</span>
                                         <span class="time">10:28</span>
                                       </span>
                                       <span class="message">Vhayaa</span>
                                   </a>
                               </li>

                               <li>
                                   <div class="text-center">
                                       <a href="../inbox/inbox.html">
                                        <button class="btn btn-sm btn-success btn-block" type="button">Open Inbox</button>
                                       </a>
                                   </div>
                               </li>

                           </ul>
                       </li>

        				<li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-green"></span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">


                                <li>
                                    <a href="../../src/store/view.php">
                                        <span class="image"><img src="../../resource/images/img1.png" alt="Profile Image" /></span>
                                        <span>
                                          <span>Admin</span>
                                          <span class="time">04-12-20</span>
                                        </span>
                                        <span class="message">Kindly everyone talk to your head office to get registered here </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../../src/store/view.php">
                                        <span class="image"><img src="../../resource/images/img2.png" alt="Profile Image" /></span>
                                        <span>
                                          <span>Super Admin</span>
                                          <span class="time">04-02-20</span>
                                        </span>
                                        <span class="message">Feaures will be available in 6 months </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../../src/store/view.php">
                                        <span class="image"><img src="../../resource/images/img.png" alt="Profile Image" /></span>
                                        <span>
                                          <span>IT Analyst</span>
                                          <span class="time">03-28-20</span>
                                        </span>
                                        <span class="message">A new feature has been added </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../../src/store/view.php">
                                        <span class="image"><img src="../../resource/images/img3.png" alt="Profile Image" /></span>
                                        <span>
                                          <span>Moderator</span>
                                          <span class="time">03-22-20</span>
                                        </span>
                                        <span class="message">This is a test Notice</span>
                                    </a>
                                </li>

                                <li>
                                    <div class="text-center">
                                        <a href="../noticeBoard/noticeBoard.html">
                                              <button class="btn btn-sm btn-danger btn-block" type="button">See All Notices</button>
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- compose -->
         <div class="compose col-md-6 col-xs-12">
           <div class="compose-header">
             User Name
             <button type="button" class="close compose-close">
               <span>×</span>
             </button>
           </div>

           <div class="compose-body">
             <div id="alerts"></div>

             <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
               <div class="btn-group">
                 <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                 <ul class="dropdown-menu">
                 </ul>
               </div>

               <div class="btn-group">
                 <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                 <ul class="dropdown-menu">
                   <li>
                     <a data-edit="fontSize 5">
                       <p style="font-size:17px">Huge</p>
                     </a>
                   </li>
                   <li>
                     <a data-edit="fontSize 3">
                       <p style="font-size:14px">Normal</p>
                     </a>
                   </li>
                   <li>
                     <a data-edit="fontSize 1">
                       <p style="font-size:11px">Small</p>
                     </a>
                   </li>
                 </ul>
               </div>

               <div class="btn-group">
                 <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                 <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                 <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                 <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
               </div>

               <div class="btn-group">
                 <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                 <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                 <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                 <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
               </div>

               <div class="btn-group">
                 <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                 <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                 <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                 <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
               </div>

               <div class="btn-group">
                 <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                 <div class="dropdown-menu input-append">
                   <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                   <button class="btn" type="button">Add</button>
                 </div>
                 <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
               </div>

               <div class="btn-group">
                 <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                 <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
               </div>

               <div class="btn-group">
                 <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                 <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
               </div>
             </div>

             <div id="editor" class="editor-wrapper"></div>
           </div>

           <div class="compose-footer">
             <button id="send" class="btn btn-sm btn-success" type="button">Send</button>
           </div>
         </div>
         <!-- /compose -->


        <style>
           .message {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    line-height: 16px;
                    max-height: 32px;

                    /* The number of lines to be displayed */
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
           }
        </style>

        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                <div class="page-title">
                    <div class="title_left">
                      <h5>
                            <?php
                            if(!empty($_GET['message'])) {
                                if($_GET['message']=="deletesuccess") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Employee Data Successfully Deleted.
                                    </div>";
                                } else if($_GET['message']=="deletefailed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Employee deletion Unfortunately Failed, Please Try Again Later
                                    </div>";
                                }
                            }
                            ?>
                        </h5>
                        <h3>Employee<small> History</small></h3>
                    </div>


                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Manage <small>employee</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <p class="text-muted font-13 m-b-30">

                                </p>

                                <table width="100%" class="display nowrap table table-hover table-striped table-bordered dataTable" id="datatable-buttons" role="grid" aria-describedby="attendance123_info" style="width: 100%;" cellspacing="0">

                                      <thead>
                                        <tr role="row">
                    						            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 100px;" aria-label="Employee Name: activate to sort column ascending" rowspan="1" colspan="1">First Name</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 100px;" aria-label="Employee Name: activate to sort column ascending" rowspan="1" colspan="1">Last Name</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 100px;" aria-label="Employee Name: activate to sort column ascending" rowspan="1" colspan="1">Username</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 135px;" aria-label="Email: activate to sort column ascending" rowspan="1" colspan="1">Email</th>
                    					             	<th tabindex="0" class="sorting_desc" aria-controls="attendance123" style="width: 30px;" aria-label="Gender : activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">Gender</th>
                    					             	<th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 50px;" aria-label="Role: activate to sort column ascending" rowspan="1" colspan="1">Role</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 81px;" aria-label="Mobile: activate to sort column ascending" rowspan="1" colspan="1">Mobile</th>
                    					            	<th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 119px;" aria-label="Joining Date: activate to sort column ascending" rowspan="1" colspan="1">Joining Date</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 35px;" aria-label="Status: activate to sort column ascending" rowspan="1" colspan="1">Status</th>
                    				            		<th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 30px;" aria-label="Action: activate to sort column ascending" rowspan="1" colspan="1">Action</th>
                    				          	</tr>
                                      </thead>
                                    <tbody>
                                    <?php
                                    foreach ($employee as $empee){
                                    ?>
                                    <tr>
                                        <td><?=$empee['first_name']?></td>
                                        <td><?=$empee['last_name']?></td>
                                        <td><?=$empee['user_name']?></td>
                                        <td><?=$empee['email']?></td>
                                        <td><?=$empee['gender']?></td>
                                        <td><?=$empee['role']?></td>
                                        <td><?=$empee['mobile_no']?></td>
                                        <td><?=$empee['join_date']?></td>

                                        <td>
                                            <?php
                                            if($empee['status']==1){
                                                echo "pending";
                                            }else{
                                                echo "verified";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                          <form action="../../src/store/create/empDelete.php" method="post">
                                              <input type="hidden" name="delete_id" value="<?=$empee['id']?>">
                                              <!--<a title="delete_btn" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')" href="../../src/store/dept/deptDelete.php"><i class="fa fa-trash-o"></i></a>-->
                                              <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')"><i class="fa fa-trash-o"></i></button>
                                          </form>
                                        </td>
                                    </tr>
                                    <?php
                                   }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <footer>
            <div class="pull-right">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="#imtiazmisha" target="_blank" >Imtiaz Misha</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content include -->
    </div>
</div>

<!-- jQuery -->
<script src="../../resource/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../resource/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../resource/js/fastclick.js"></script>
<!-- NProgress -->
<script src="../../resource/js/nprogress.js"></script>
<!-- iCheck -->
<script src="../../resource/js/icheck.min.js"></script>
<!-- Datatables -->
<script src="../../resource/js/jquery.dataTables.min.js"></script>
<script src="../../resource/js/dataTables.bootstrap.min.js"></script>
<script src="../../resource/js/dataTables.buttons.min.js"></script>
<script src="../../resource/js/buttons.bootstrap.min.js"></script>
<script src="../../resource/js/buttons.flash.min.js"></script>
<script src="../../resource/js/buttons.html5.min.js"></script>
<script src="../../resource/js/buttons.print.min.js"></script>
<script src="../../resource/js/dataTables.fixedHeader.min.js"></script>
<script src="../../resource/js/dataTables.keyTable.min.js"></script>
<script src="../../resource/js/dataTables.responsive.min.js"></script>
<script src="../../resource/js/responsive.bootstrap.js"></script>
<script src="../../resource/js/dataTables.scroller.min.js"></script>
<script src="../../resource/js/jszip.min.js"></script>
<script src="../../resource/js/pdfmake.min.js"></script>
<script src="../../resource/js/vfs_fonts.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>