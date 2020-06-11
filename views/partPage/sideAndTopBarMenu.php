<!-- side and top bar include -->
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="../admin/dashboard.php" class="site_title"><i class="fa fa-asterisk"></i> <span>Sunny Group</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="../../resource/images/misha.jpg" alt="..." class="img-circle profile_img logo">
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
                                    <li><a href="../industry/departments.php">Departments</a></li>
                                    <li><a href="../industry/designations.php">Designations</a></li>
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
                                    <li><a href="../noticeBoard/sendNotice.php">Create Notice</a></li>
                                      <li><a href="../noticeBoard/noticeBoard.php">Notice History</a></li>
                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-calendar-check-o"></i>Attendance<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
        					                	<li><a href="../attendance/attendance.php">Take Attendance</a></li>
                                    <li><a href="../attendance/attList.php">Attendance List</a></li>
                                    <li><a href="../attendance/attReport.php">Report</a></li>
                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-external-link"></i>Manage Leaves<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../leave/leaveApplications.php">Applications</a></li>
                      							<li><a href="../leave/holydays.php">Holyday</a></li>
                      							<li><a href="../leave/leaveType.php">Leave Type</a></li>
                      							<li><a href="../leave/leaveReport.php">Report</a></li>

                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-credit-card"></i>Payroll<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../payroll/payrollList.php">Payroll List</a></li>
                      							<li><a href="../payroll/generatePayslip.php">Generate Payslip</a></li>
                                </ul>
                            </li>

        					<li>
                                <a><i class="fa fa-balance-scale"></i>Loan<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="../loan/loanApplications.php">Applications</a></li>
                      							<li><a href="../loan/grandLoan.php">Grand Loan</a></li>
                      							<li><a href="../loan/installments.php">Installment</a></li>

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
                    					     	<li><a href="../inbox/inbox.php">Inbox</a></li>
                    					   		<li><a href="https://meet.google.com/">Meet</a></li>
                                </ul>
                            </li>


        				         	<li>
                                <a><i class="fa fa-briefcase"></i>Job Vacancies<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
        					     	<li><a href="../admin/jobApplications.php">Applications</a></li>
                                    <li><a href="../admin/addVacancies.php">Add Vacancies</a></li>
                                </ul>
                            </li>

							<li>
                        <a><i class="fa fa-laptop"></i> Guidelines <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../../resource/uploads/guidelines/guideline.pdf">Site Manual</a></li>
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

                    <a data-toggle="tooltip" data-placement="top" title="Main Site" href="../../../index.html">
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    </a>
					<!--<a data-toggle="tooltip" data-placement="top" id="switch" type="checkbox" name="theme" title="Dark Mode">-->
                    <a data-toggle="tooltip" data-placement="top" title="Flat Theme">
                        <!--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>-->
						<input type="checkbox" id="switch" name="theme" /><label for="switch"></label>
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
                                <img class="logo "src="../../resource/images/misha.jpg" alt="">Imtiaz Misha
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
                                       <a href="../inbox/inbox.php">
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
                                        <a href="../noticeBoard/noticeBoard.php">
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
