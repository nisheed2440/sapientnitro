<?php
/*Project Name: Sapient Nitro - Round One.
 * Developer: Nisheed Jagadish
 * Repository: https://github.com/nisheed2440/sapientnitro.git
 * Framework: Twitter Bootstrap
 * CSS Framework: Less
 */
?>
<!DOCTYPE html>
<html lang="en">
 	<head>
 		<title>Distinguished Technologist Program</title>
    	<!-- Bootstrap -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<!-- Less Css -->
    	<link rel="stylesheet/less" type="text/css" href="css/main.less" />
    	<!-- Carosel Css -->
    	<link rel="stylesheet" href="css/feature-carousel.css" charset="utf-8" />
 	</head>
 	<body>
 		<div class="container-fluid">
 			<header>
 				<div class="container sn-fixed-middle">
    				<div class="sn-main-logo">
    				</div>
  				</div>
  				<div class="clearfix"></div>
 			</header>
 			<div class="container sn-fixed-middle">
 				 <div class="row-fluid">
				    <div class="span3">
				      <div class="sn-sidebar-widget">
				      	<table class="table">
				      		<thead>
				      			<tr>
				      				<th class="sn-tb-left">Name</th>
				      				<th class="sn-tb-middle"><i class="icon-arrow-down sn-table-sort"></i>Age</th>
				      			</tr>
				      		</thead>
				      		<tbody>
				      			<tr>
				      				<td class="sn-tb-left">Jennifer</td>
				      				<td class="sn-tb-right">24</td>
				      			</tr>
				      			<tr>
				      				<td class="sn-tb-left">Kate</td>
				      				<td class="sn-tb-right">18</td>
				      			</tr>
				      			<tr>
				      				<td class="sn-tb-left">David</td>
				      				<td class="sn-tb-right">25</td>
				      			</tr>
				      			<tr>
				      				<td class="sn-tb-left">Mark</td>
				      				<td class="sn-tb-right">25</td>
				      			</tr>
				      		</tbody>
				      	</table>
				      </div><!-- End sidebar widget -->
				      <div class="sn-sidebar-widget">
						<ul class="nav nav-tabs nav-stacked sn-nav-tabs">
			              <li class="active"><a class="sn-carosel-nav sn-carousel-init" data-id="dtp" href="javascript:void(0);">Distinguished Technology Program</a></li>
			              <li><a class="sn-carosel-nav" data-id="ms" href="javascript:void(0);">Mobile Solutions</a></li>
			              <li><a class="sn-carosel-nav" data-id="h5c" href="javascript:void(0);">HTML5 Canvas</a></li>
			              <li><a class="sn-carosel-nav" data-id="de" href="javascript:void(0);">Domain Expertise</a></li>
			            </ul>
				      </div>	
				    </div><!-- End Span 3 -->
				    <div class="span9">
				      <div class="sn-carosel-wrapper">
				      </div><!-- End Carosel Wrapper -->
				      
				      <div class="sn-enroll-form-wrapper">
				      	<div class="sn-enroll-form-header"><h5>Enroll Now</h5></div>	
				      		<form class="form-horizontal" id="sn-enroll-form">
							  <div class="control-group">
							    <label class="control-label" for="inputFname">Full Name</label>
							    <div class="controls">
							      <input type="text" class="required" id="inputFname" name="inputFname" placeholder="First Name">
							      <div class="error-text"></div>
							    </div>
							    <div class="controls sn-control-right">
							      <input type="text" class="required" id="inputLname" name="inputLname" placeholder="Last Name">
							      <div class="error-text"></div>
							    </div>
							  </div>
							   
							    
							  
							  <div class="control-group">
							    <label class="control-label" for="inputEmail">Email</label>
							    <div class="controls">
							      <input type="text" class="required email" id="inputEmail" name="inputEmail" placeholder="example@sapientnitro.com">
							      <div class="error-text"></div>
							    </div>
							  </div>
							   <div class="control-group">
							    <label class="control-label" for="inputCEmail">Confirm Email</label>
							    <div class="controls">
							      <input type="text" class="required email" id="inputCEmail" name="inputCEmail" placeholder="example@sapientnitro.com">
							      <div class="error-text"></div>
							    </div>
							  </div>
							   <div class="control-group">
							    <label class="control-label" for="inputMbNumber">Mobile Number</label>
							    <div class="controls">
							      <input type="text" class="required number" id="inputMbNumber" name="inputMbNumber" placeholder="">
							      <button type="submit" class="btn sn-btn-submit">Submit</button>
							      <div class="error-text"></div>
							    </div>
							  </div>
							</form><!-- End Enroll form -->      		
				      </div><!-- End Enroll form Wrapper -->
				    
				    </div><!-- End Span 9 -->
				 </div>
 			</div>
 		</div>
 		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
 		<script type="text/javascript" src="js/jquery.validate.js"></script>
 		<script src="js/bootstrap.min.js"></script>
 		<script type="text/javascript" src="js/less.min.js"></script>
 		<script src="js/jquery.featureCarousel.min.js" type="text/javascript"></script>
 		<script src="js/index.js" type="text/javascript"></script>
 	</body>
</html>