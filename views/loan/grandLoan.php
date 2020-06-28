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
                        <h3>Grand <small>Loan</small></h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                          <div class="x_title">
                            <h2>See All <small>Loans</small></h2>
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

                                   <div class="modal-content ">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel1">Loan</h4>
                                            <button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <form id="btnSubmit" role="form" action="Add_Loan" enctype="multipart/form-data" method="post" novalidate="novalidate">
                                        <div class="modal-body">
                                                 <div class="form-group row">
                                                    <label class="control-label col-md-3">Assign To</label>
                                                    <select name="emid" tabindex="1" class="form-control custom-select col-md-8" required="" data-placeholder="Choose a Category">
                                                      <option value="">Select Here</option>
                                                                                           <option value="Soy1332">User Name</option>
                                                                                            <option value="Doe1753">Alfred Admin</option>
                                                                                            <option value="Doe1754">Driver Arif</option>
                                                                                        </select>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3" for="message-text">Amount</label>
                                                    <input name="amount" class="form-control col-md-8 amount" id="recipient-name1" required="" type="text" value="">
                                                </div>
                    <!--                            <div class="form-group row">
                                                    <label for="message-text" class="control-label col-md-3">Interest Percentage</label>
                                                    <input type="number" name="interest" value="" class="form-control col-md-8" id="recipient-name1" required>
                                                </div>-->
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Approve Date</label>
                                                    <input name="appdate" class="form-control col-md-8 mydatetimepickerFull" id="recipient-name1" required="" type="text" value="">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3" for="message-text">Install Period</label>
                                                    <input name="install" class="form-control col-md-8 period" id="recipient-name1" required="" type="number" value="">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3" for="message-text">Install Amount</label>
                                                    <input name="installment" class="form-control col-md-8 installment" id="recipient-name1" type="number" readonly="" value="">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3" for="message-text"> Loan No</label>
                                                    <input name="loanno" class="form-control col-md-8" id="recipient-name1" type="text" readonly="" value="10947053">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3">Status</label>
                                                    <select name="status" tabindex="1" class="form-control custom-select col-md-8" required="" data-placeholder="Choose a Category" value="">
                                                        <option value="">Select here</option>
                                                        <option value="Granted">Granted</option>
                                                        <option value="Deny">Deny</option>
                                                        <option value="Done">Done</option>
                                                    </select>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3" for="message-text">Loan Details</label>
                                                    <textarea name="details" class="form-control col-md-8" id="message-text1" value=""></textarea>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                           <input name="id" type="hidden" value="">
                                            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>See All <small>Loans</small></h2>
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
                                <h4 class="m-b-0 text-white"> Loan List  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <div class="dataTables_wrapper" id="attendance123_wrapper">

                                      <table width="100%" class="display nowrap table table-hover table-striped table-bordered dataTable" id="datatable-buttons" role="grid" aria-describedby="attendance123_info" style="width: 100%;" cellspacing="0">

                                        <thead>
                                        <tr role="row">
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 68.5px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">Name</th>
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 130px;" aria-label="Employee Code: activate to sort column ascending" rowspan="1" colspan="1">Employee Code</th>
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 77px;" aria-label="Amount: activate to sort column ascending" rowspan="1" colspan="1">Amount</th>
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 102px;" aria-label="Installment : activate to sort column ascending" rowspan="1" colspan="1">Installment </th>
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 86px;" aria-label="Total Pay : activate to sort column ascending" rowspan="1" colspan="1">Total Pay </th>
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 91px;" aria-label="Total Due : activate to sort column ascending" rowspan="1" colspan="1">Total Due </th>
                                          <th tabindex="0" class="sorting_desc" aria-controls="loan123" style="width: 132px;" aria-label="Approve Date : activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">Approve Date </th>
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 67px;" aria-label="Status : activate to sort column ascending" rowspan="1" colspan="1">Status </th>
                                          <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 69.5px;" aria-label="Action : activate to sort column ascending" rowspan="1" colspan="1">Action </th>
                                        </tr>
                                    </thead>

                                  <tbody>

                                      <tr class="odd" role="row">
                                        <td>Driver Arif</td>
                                        <td>123444</td>
                                        <td>5000</td>
<!--                                            <td></td>
                                        <td></td> -->
                                        <td>1000</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td class="sorting_1">20th of March 2023</td>
                                        <td>Granted</td>
                                        <td class="jsgrid-align-center ">
                                            <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light loanmodalclass" href="#" data-id="35"><i class="fa fa-pencil-square-o"></i></a>
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
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <?php include '../partPage/footer.php' ?>
        <!-- /footer content include -->
   