<!DOCTYPE html>
<html lang="en">
 <head>
    <!--bannerremover style of 000w-->
    <style>img[alt="www.000webhost.com"]{display:none;}</style>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Human Resource Management Sysytem</title>

	<!--fonts-->
	<link rel="stylesheet" href="https://use.typekit.net/nfp7kim.css">
	<!--<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">-->
	<!--<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">-->
    <!-- for gooey --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
	<!--for sticky gooey menu-->
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../resource/css/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../resource/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../resource/css/jqvmap.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../resource/css/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link type="text/css" href="../../resource/css/custom.css" rel="stylesheet">


</head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
		<!-- side and top bar include -->
        <?php include '../partPage/sideAndTopBarMenu.php' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
		
		<!--gooey-->
				 <div class="fabs" onclick="toggleBtn()">
  				  <div class="action">
      					<i class="fas fa-plus" id="add"></i>
      					<i class="fas fa-times" id="remove" style="display: none"></i>
  				  </div>

  				  <div class="btns">
      					<a href="../../src/store/Logout.php" class="g-btn"><i class="glyphicon glyphicon-off"></i></a>
      					<a href="../../src/store/sitesettings.php" class="g-btn"><i class="glyphicon glyphicon-cog"></i></a>
      					<a href="" class="g-btn"><i class="glyphicon glyphicon-flash"></i></a>
      					<a href="../../../index.php" class="g-btn"><i class="glyphicon glyphicon-send"></i></a>
  				  </div>
				</div>	
				
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Chat Box</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inbox</h2>
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

                    <div class="container">
                  <br />


                  <br />
                  <div class="row">
                    <div class="col-md-8 col-sm-6">
                      <h4>Online User</h4>
                    </div>

                    <div class="col-md-2 col-sm-3">

                    </div>
                  </div>
                  <div class="table-responsive">

                    <table class="table table-bordered table-striped">
                    	<tr>
                    		<th width="70%">Username</td>
                    		<th width="20%">Status</td>
                    		<th width="10%">Action</td>
                    	</tr>


                    	<tr>
                    		<td>Sunny Bro</td>
                    		<td>Online</td>
                    		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="1" data-tousername="">Start Chat</button></td>
                    	</tr>

                      <tr>
                    		<td>Ashik Bro</td>
                    		<td>Online</td>
                    		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="2" data-tousername="">Start Chat</button></td>
                    	</tr>

                      <tr>
                    		<td>Chonchol Chowdhury</td>
                    		<td>Offline</td>
                    		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="2" data-tousername="">Start Chat</button></td>
                    	</tr>
                    </table>
                  </div>
                  <br />
                  <br />

                </div>

                </div>

              </div>
			<div class="x_panel">
                  <div class="x_title">
                        <h4>Sunny Bro</h4>
                    </div>
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

                    </ul>
                    <div class="clearfix"></div>
				  <div class="x_content">
			     <div id="user_model_details"></div>
			   </div>

                </div>
				</div>

            </div>
          </div>
      	</div>
      </div><!-- /page content -->

         <!-- footer content include -->
        <?php include '../partPage/footer.php' ?>
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
<!-- Chart.js -->
<script src="../../resource/js/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../../resource/js/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../resource/js/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../../resource/js/icheck.min.js"></script>
<!-- Skycons -->
<script src="../../resource/js/skycons.js"></script>
<!-- Flot -->
<script src="../../resource/js/jquery.flot.js"></script>
<script src="../../resource/js/jquery.flot.pie.js"></script>
<script src="../../resource/js/jquery.flot.time.js"></script>
<script src="../../resource/js/jquery.flot.stack.js"></script>
<script src="../../resource/js/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../../resource/js/jquery.flot.orderBars.js"></script>
<script src="../../resource/js/jquery.flot.spline.min.js"></script>
<script src="../../resource/js/curvedLines.js"></script>
<!-- DateJS -->
<script src="../../resource/js/date.js"></script>
<!-- JQVMap -->
<script src="../../resource/js/jquery.vmap.min.js"></script>
<script src="../../resource/js/jquery.vmap.world.js"></script>
<script src="../../resource/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../../resource/js/moment.min.js"></script>
<script src="../../resource/js/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>

<script src="js/chat.js"></script>
<!-- for chat system Scripts
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>-->
 <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
 <!--darkmode-->
<script src="../../resource/js/darkmode-js.min.js"></script>
<script src="../../resource/js/darkmode-js.js"></script>

<!--theme changer-->
<script src="../../resource/js/flat-theme.js"></script>

<!--gooey-->
<script src="../../resource/js/gooey-menu.js"></script>

  </body>
</html>
