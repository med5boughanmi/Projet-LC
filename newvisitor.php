<?php
require_once('visitors.php') ; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Wizard - Ace Admin</title>

		<meta name="description" content="and Validation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/select2.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Harbor
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						  <li  class="green"> <a  data-toggle="dropdown"  class="dropdown-toggle"

                 href="#"> <i  class="ace-icon fa fa-tasks"></i> <span>admin</span>
              </a> </li>
            <li  class="light-blue"> <a  data-toggle="dropdown"  href="#"  class="dropdown-toggle">
                <i  class="ace-icon fa fa-power-off"></i> <span> Log out </span>
              </a> </li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
<!-- /.sidebar-shortcuts -->

			
				<ul  class="nav nav-list">
          <li  class="active"> <a  href="index.html"> <i  class="menu-icon fa fa-tachometer"></i>
              <span  class="menu-text"> Dashboard </span> </a> <b  class="arrow"></b>
          </li>
          <li class=""> <a href="#" class="dropdown-toggle"> <i class="ace-icon fa fa-users"></i>
							<span class="menu-text"> Visitors </span> <b class="arrow fa fa-angle-down"></b>
						</a> <b class="arrow"></b>
						<ul class="submenu">
							<li class=""><a href="visitorslist.php"> <i class="menu-icon fa fa-list"></i> Visitors list </a>
							 <b  class="arrow"></b> </li>
							<li class=""> <a href="newvisitor.php"> <i class="menu-icon fa fa-plus purple"></i> New visitor </a>
							 <b  class="arrow"></b></li>
						</ul>
					</li>
					 <li class=""> <a href="fishingseason.php" > 
							<span class="menu-text"> Fishing season</span> <b>  </b>
						</a> <b class="arrow"></b>
					
					</li>
					
					 <li class=""> <a href="#" class="dropdown-toggle"> 
							<span class="menu-text"> About boats </span> <b class="arrow fa fa-angle-down"></b>
						</a> <b class="arrow"></b>
						<ul class="submenu">
							<li class=""><a href="woodboat.php"> Wood boats </a>
							 <b  class="arrow"></b> </li>
							<li class=""> <a href="alluboat.php"> Aluminium boats </a>
							 <b  class="arrow"></b></li>
							 <li class=""> <a href="fiberboat.php"> Fiber boats </a>
							 <b  class="arrow"></b></li>
						</ul>
					</li>
					
					
					 <li class=""> <a href="#" class="dropdown-toggle"> 
							<span class="menu-text"> About engines </span> <b class="arrow fa fa-angle-down"></b>
						</a> <b class="arrow"></b>
						<ul class="submenu">
							<li class=""><a href="yamaha.php"> Yamaha engines</a>
							 <b  class="arrow"></b> </li>
							<li class=""> <a href="tohatsu.php"> Tohatsu engines </a>
							 <b  class="arrow"></b></li>
							 <li class=""> <a href="otherengines.php"> other engines </a>
							 <b  class="arrow"></b></li>
						</ul>
					</li>
					
					<li class=""> <a href="Workshop.php" > 
							<span class="menu-text"> Workshop</span> <b>  </b>
						</a> <b class="arrow"></b>
					
					</li>
					
						</ul>
					</li>
				</ul><!-- /.nav-list -->


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<di

						<div class="page-header">
							<h1>
								Visitors
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									New visitor
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
						
								<div class="widget-box">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">New visitor</h4>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">
										
												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Enter the following information</h3>
														
														<form class="form-horizontal" id="validation-form" action="visitors.php" name="formulaire_ajout" method="POST">
															<div class="form-group">
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name"> Name:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
																	</div>
																</div>
															</div>
															
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name"> Occupation:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="occup" name="occup" class="col-xs-12 col-sm-5" />
																	</div>
																</div>
															</div>
															
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="ace-icon fa fa-phone"></i>
																		</span>

																		<input type="tel" id="phone" name="phone" />
																	</div>
																</div>
															</div>
															<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>
																
																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
																	</div>
																</div>
																<div class="hr hr-dotted"></div>
																<div class="space-2"></div>
																<div class="form-group">
																
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">Site Name :</label>

																<div class="col-xs-12 col-sm-9">
																	<select id="state" name="state" class="select2" data-placeholder="Click to Choose...">
																		<option value="">choose site name</option>
																		<option value="Alwadi 1">Alwadi </option>
																		<option value="Alwadi 2">Alwadi 1</option>
																		<option value="Alwadi 2">Alwadi 2</option>
																		<option value="Alwadi 3">Alwadi 3</option>
																		
																	</select>
																</div>
															</div>
																<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Area</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<select class="input-medium" id="platform" name="platform">
																			<option value="">choose area</option>
																			<option value="Area1">Area 1</option>
																			<option value="Area2">Area2</option>
																			<option value="Area3">Area3</option>
																		</select>
																	</div>
																</div>
															</div>
															</div>
															</div>
											</div>
											<div class="wizard-actions">
											<button class="btn btn-success btn-next" data-last="Finish">
													save
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
													<input type="hidden" name="MM_insert" value="formulaire_ajout">
												</button>
											</div>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div>
<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Harbor</span>
							Application &copy; 2016
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

			
		</div><!-- /.main-container -->
</form>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/fuelux.wizard.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/additional-methods.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/select2.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
	)
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
					
						name: {
							required: true
						},
						occup: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						email: {
							required: true,
							email:true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						
						},
						area: "Please choose area",
						state: "Please choose state",
						
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
				
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
			
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>
	</body>
</html>
