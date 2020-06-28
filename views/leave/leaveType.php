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
                        <h3>Leave Types <small>list</small></h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>

                <div class="row">

                  <div class="col-lg-3">
                    <div class="card card-outline-info">
                          <div class="card-header">
                              <h4 class="m-b-0 text-white">Add Types</h4>
                          </div>

                          <div class="card-body">
                                  <form action="Save_dep" enctype="multipart/form-data" method="post" novalidate="novalidate">
                                    <div class="modal-content ">
                  <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel1">Leave</h4>
                      <button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                  </div>
                  <form id="leaveform" action="Add_leaves_Type" enctype="multipart/form-data" method="post" novalidate="novalidate">
                      <div class="modal-body">

                          <div class="form-group">
                              <label class="control-label">Leave name</label>
                              <input name="leavename" class="form-control" id="recipient-name1" required="" type="text" maxlength="35" minlength="1" value="">
                          </div>
                          <div class="form-group">
                              <label class="control-label">Day</label>
                              <input name="leaveday" class="form-control" id="recipient-name1" type="text" value="">
                          </div>
                          <div class="form-group">
                              <label class="control-label">status</label>
                              <select name="status" tabindex="1" class="form-control custom-select" required="" data-placeholder="Choose a Category">
                                  <option value="">Select Here</option>
                                  <option value="1">Active</option>
                                  <option value="0">Inactive</option>
                              </select>
                          </div>

                      </div>
                      <div class="modal-footer">
                          <input name="id" class="form-control" id="recipient-name1" type="hidden" value="">
                          <button class="btn btn-default" type="button" data-dismiss="modal">Reset</button>
                          <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                  </form>
              </div>
                                  </form>
                          </div>
                      </div>
                  </div>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Manage <small>Types</small></h2>
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

                               <div class="card-body">
                                <div class="table-responsive ">

                                    <table width="100%" class="display nowrap table table-hover table-striped table-bordered dataTable" id="datatable-buttons"  role="grid" aria-describedby="example23_info" style="width: 100%;" cellspacing="0">
                                      <thead>
                                          <tr role="row">
                                            <th tabindex="0" class="sorting_asc" aria-controls="example23" style="width: 51.5px;" aria-label="ID : activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">ID </th>
                                            <th tabindex="0" class="sorting" aria-controls="example23" style="width: 148px;" aria-label="Leave Type: activate to sort column ascending" rowspan="1" colspan="1">Leave Type</th>
                                            <th tabindex="0" class="sorting" aria-controls="example23" style="width: 167px;" aria-label="Number Of Days: activate to sort column ascending" rowspan="1" colspan="1">Number Of Days</th>
                                            <th tabindex="0" class="sorting" aria-controls="example23" style="width: 81.5px;" aria-label="Action: activate to sort column ascending" rowspan="1" colspan="1">Action</th>
                                          </tr>
                                      </thead>

                                      <tbody>
                                        <tr class="odd" role="row">
                                              <td class="sorting_1">1</td>
                                              <td>Casual Leave</td>
                                              <td>21</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="1"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=1"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                          <tr class="even" role="row">
                                              <td class="sorting_1">2</td>
                                              <td>Sick Leave</td>
                                              <td>15</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="2"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=2"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                          <tr class="odd" role="row">
                                              <td class="sorting_1">3</td>
                                              <td>Maternity Leave</td>
                                              <td>90</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="3"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=3"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                          <tr class="even" role="row">
                                              <td class="sorting_1">4</td>
                                              <td>Paternal Leave</td>
                                              <td>7</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="4"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=4"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                          <tr class="odd" role="row">
                                              <td class="sorting_1">5</td>
                                              <td>Earned leave</td>
                                              <td>9</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="5"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=5"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                          <tr class="even" role="row">
                                              <td class="sorting_1">7</td>
                                              <td>Public Holiday</td>
                                              <td>4</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="7"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=7"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                          <tr class="odd" role="row">
                                              <td class="sorting_1">8</td>
                                              <td>Optional Leave</td>
                                              <td>6</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="8"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=8"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                          <tr class="even" role="row">
                                              <td class="sorting_1">9</td>
                                              <td>Leave without Pay</td>
                                              <td>8</td>
                                              <td class="jsgrid-align-center ">
                                                  <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leavetype" href="" data-id="9"><i class="fa fa-pencil-square-o"></i></a>
                                                  <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" onclick="confirm('Are you sure want to delet this Value?')" href="LeavetypeDelet?D=9"><i class="fa fa-trash-o"></i></a>
                                              </td>
                                          </tr>
                                        </tbody>
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
        <!-- /page content -->

        <!-- footer content include -->
        <?php include '../partPage/footer.php' ?>
        <!-- /footer content include -->
   