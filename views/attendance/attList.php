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
	<!-- Datatables -->
    <link href="../../resource/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/scroller.bootstrap.css" rel="stylesheet">
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
                        <h3>Attendance <small>List</small></h3>
                    </div>

                   
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>See All <small>Attendance</small></h2>
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

                                <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Attendance List  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <div class="dataTables_wrapper" id="attendance123_wrapper">

                                      <table width="100%" class="display nowrap table table-hover table-striped table-bordered dataTable" id="datatable-buttons" role="grid" aria-describedby="attendance123_info" style="width: 100%;" cellspacing="0">

                                        <thead>
                                            <tr role="row"><th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 135.5px;" aria-label="Employee Name: activate to sort column ascending" rowspan="1" colspan="1">Employee Name</th><th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 45px;" aria-label="PIN: activate to sort column ascending" rowspan="1" colspan="1">PIN</th><th tabindex="0" class="sorting_desc" aria-controls="attendance123" style="width: 78px;" aria-label="Date : activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">Date </th><th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 68px;" aria-label="Sign In: activate to sort column ascending" rowspan="1" colspan="1">Sign In</th><th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 81px;" aria-label="Sign Out: activate to sort column ascending" rowspan="1" colspan="1">Sign Out</th><th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 119px;" aria-label="Working Hour: activate to sort column ascending" rowspan="1" colspan="1">Working Hour</th><th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 65.5px;" aria-label="Action: activate to sort column ascending" rowspan="1" colspan="1">Action</th></tr>
                                        </thead>

                                        <tbody>
                                           <tr class="odd" role="row">
                                                <td><mark>Driver Arif</mark></td>
                                                <td>4</td>
                                                <td class="sorting_1">2018-04-09</td>
                                                <td>11:00:00</td>
                                                <td>19:29:00</td>
                                                <td>8.4</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=993" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="even" role="row">
                                                <td><mark>Chonchol Chowdhury</mark></td>
                                                <td>25</td>
                                                <td class="sorting_1">2018-03-15</td>
                                                <td>02:00:00</td>
                                                <td>16:00:00</td>
                                                <td>14.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1010" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="odd" role="row">
                                                <td><mark>Shamim Osman</mark></td>
                                                <td>24</td>
                                                <td class="sorting_1">2018-03-14</td>
                                                <td>01:00:00</td>
                                                <td>15:00:00</td>
                                                <td>14.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1009" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="even" role="row">
                                                <td><mark>Mahamad Rafiq</mark></td>
                                                <td>19</td>
                                                <td class="sorting_1">2018-03-09</td>
                                                <td>08:00:00</td>
                                                <td>10:00:00</td>
                                                <td>2.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1008" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="odd" role="row">
                                                <td><mark>Chinmoy Ahamed</mark></td>
                                                <td>18</td>
                                                <td class="sorting_1">2018-03-08</td>
                                                <td>07:00:00</td>
                                                <td>09:00:00</td>
                                                <td>2.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1007" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="even" role="row">
                                                <td><mark>Siddique Chacha</mark></td>
                                                <td>17</td>
                                                <td class="sorting_1">2018-03-07</td>
                                                <td>06:00:00</td>
                                                <td>08:00:00</td>
                                                <td>2.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1006" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="odd" role="row">
                                                <td><mark>Omuk Tomuk</mark></td>
                                                <td>16</td>
                                                <td class="sorting_1">2018-03-06</td>
                                                <td>05:00:00</td>
                                                <td>07:00:00</td>
                                                <td>2.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1005" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="even" role="row">
                                                <td><mark>Shahruk Khan</mark></td>
                                                <td>15</td>
                                                <td class="sorting_1">2018-03-05</td>
                                                <td>04:00:00</td>
                                                <td>06:00:00</td>
                                                <td>2.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1004" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="odd" role="row">
                                                <td><mark>Ameer Khan</mark></td>
                                                <td>14</td>
                                                <td class="sorting_1">2018-03-04</td>
                                                <td>03:00:00</td>
                                                <td>05:00:00</td>
                                                <td>2.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1003" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr><tr class="even" role="row">
                                                <td><mark>Salman Khan</mark></td>
                                                <td>13</td>
                                                <td class="sorting_1">2018-03-03</td>
                                                <td>02:00:00</td>
                                                <td>04:00:00</td>
                                                <td>2.0</td>
                                                <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="Save_Attendance?A=1002" data-value="Approve"><i class="fa fa-pencil-square-o"></i></a>
                                                </td>
                                            </tr></tbody>
                                    </table>

                                  </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

         <!-- footer content include -->
        <?php include '../partPage/footer.php' ?>
        <!-- /footer content include -->