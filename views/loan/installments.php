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
                        <h3>Installment <small>Loans</small></h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                          <div class="x_title">
                            <h2>See All <small>Installments</small></h2>
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
                                        <h4 class="modal-title" id="exampleModalLabel1">Add Loan</h4>
                                        <button class="close" aria-label="Close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <form id="loanvalueform" role="form" action="Add_Loan_Installment" enctype="multipart/form-data" method="post" novalidate="novalidate">
                                    <div class="modal-body">
                                             <div class="form-group">
                                                <label class="control-label">Assign To</label>
                                                <select name="emid" tabindex="1" class="form-control custom-select" id="employee" required="" data-placeholder="Choose a Category">
                                                  <option value="">Select Here</option>
                                                  <option value="Soy1332">User Name</option>
                                                  <option value="Doe1753">Alfred Admin</option>
                                                  <option value="Doe1754">Driver Arif</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="message-text">Loan Number</label>
                                                <input name="loanno" class="form-control" id="recipient-name1" required="" type="text" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Install Amount</label>
                                                <input name="amount" class="form-control" id="recipient-name1" type="text" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="message-text">Date</label>
                                                <input name="appdate" class="form-control mydatetimepickerFull" id="recipient-name1" required="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="message-text">Receiver</label>
                                                <input name="receiver" class="form-control" id="recipient-name1" required="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="message-text"> Install No</label>
                                                <input name="installno" class="form-control" id="recipient-name1" required="" type="text" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="message-text"> Notes</label>
                                                <textarea name="notes" class="form-control" id="message-text1"></textarea>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                       <input name="loanid" type="hidden" value="">
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
                                <h2>See All <small>List</small></h2>
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
                                <h4 class="m-b-0 text-white"> Installment List  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <div class="dataTables_wrapper" id="attendance123_wrapper">

                                      <table width="100%" class="display nowrap table table-hover table-striped table-bordered dataTable" id="datatable-buttons" role="grid" aria-describedby="attendance123_info" style="width: 100%;" cellspacing="0">

                                        <thead>
                                            <tr role="row">
                                              <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 118.5px;" aria-label="Employee PIN: activate to sort column ascending" rowspan="1" colspan="1">Employee PIN</th>
                                              <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 72px;" aria-label="Loan Id: activate to sort column ascending" rowspan="1" colspan="1">Loan Id</th>
                                              <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 121px;" aria-label="Loan Number : activate to sort column ascending" rowspan="1" colspan="1">Loan Number </th>
                                              <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 127px;" aria-label="Install Amount : activate to sort column ascending" rowspan="1" colspan="1">Install Amount </th>
                                              <th tabindex="0" class="sorting_desc" aria-controls="loan123" style="width: 122px;" aria-label="Approve Date : activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">Approve Date </th>
                                              <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 136px;" aria-label="Receiver : activate to sort column ascending" rowspan="1" colspan="1">Receiver </th>
                                              <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 91px;" aria-label="Install No : activate to sort column ascending" rowspan="1" colspan="1">Install No </th>
                                              <th tabindex="0" class="sorting" aria-controls="loan123" style="width: 69.5px;" aria-label="Action : activate to sort column ascending" rowspan="1" colspan="1">Action </th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr class="odd" role="row">
                                                <td>2123</td>
                                                <td>34</td>
                                                <td>18194827</td>
                                                <td>5000</td>
                                                <!--<td></td>-->
                                                <td class="sorting_1">7th of June 2018</td>
                                                <td>asda sd sda</td>
                                                <td>2</td>
                                                <td class="jsgrid-align-center">
                                                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light installment" href="#" data-id="31"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" href="#"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="even" role="row">
                                                <td>2332</td>
                                                <td>34</td>
                                                <td>18194827</td>
                                                <td>5000</td>
                                                <!--<td></td>-->
                                                <td class="sorting_1">5th of June 2018</td>
                                                <td>sdasd asdada</td>
                                                <td>3</td>
                                                <td class="jsgrid-align-center">
                                                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light installment" href="#" data-id="30"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" href="#"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="odd" role="row">
                                                <td>2313</td>
                                                <td>34</td>
                                                <td>18194827</td>
                                                <td>5000</td>
                                                <!--<td></td>-->
                                                <td class="sorting_1">5th of April 2018</td>
                                                <td>ssadafa gadadfa</td>
                                                <td>4</td>
                                                <td class="jsgrid-align-center">
                                                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light installment" href="#" data-id="29"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" href="#"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="even" role="row">
                                                <td>3423</td>
                                                <td>33</td>
                                                <td>4008291</td>
                                                <td>5000</td>
                                                <!--<td></td>-->
                                                <td class="sorting_1">4th of April 2018</td>
                                                <td>dsdsff dsf ds f</td>
                                                <td>0</td>
                                                <td class="jsgrid-align-center">
                                                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light installment" href="#" data-id="28"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" href="#"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="odd" role="row">
                                                <td>2356</td>
                                                <td>33</td>
                                                <td>4008291</td>
                                                <td>5000</td>
                                                <!--<td></td>-->
                                                <td class="sorting_1">21st of April 2018</td>
                                                <td>dsf dsf ds fds fdsf ds</td>
                                                <td>1</td>
                                                <td class="jsgrid-align-center">
                                                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light installment" href="#" data-id="27"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a title="Delete" class="btn btn-sm btn-info waves-effect waves-light" href="#"><i class="fa fa-trash-o"></i></a>
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