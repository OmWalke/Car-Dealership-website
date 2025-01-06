<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>i8</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
<nav class="navb " style=" background-color: #235789;">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><img src="images/logo.png" alt="" width="150px"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.php">Brands</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="register.php">Signup</a></li>
      </ul>
    </div>
  </nav>
<div class="header-bottom">
	<div class="wrap">
		<div class="single">
				<div class="box_wrapper"><p>BMW i8  : (Rs  2.62 Cr*)<p></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/i8-1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/i8-2.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/i8-3.jpg" alt=" " height=210px width=560px/></a>					
									<a href="#" target="_blank"><img src="images/i8-4.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/i8-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/i8-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/i8-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/i8-4.jpg" alt=" " /></a></li>
									
								</ul>
							</div>
						</div>
					   </div>
					</div>
						<div class="grid span_2_of_3">
							<table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Economy</th>
                                           <th class="text-center" style="font-family: broadway; ">Performance</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Mileage	47.45 kmpl</td>
                                           <td>Engine	1499 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Petrol</td>
                                           <td>BHP: 228</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 60,875/yr</td>
                                           <td>No. of cylinders : 3</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 42L</td>
                                           <td>No. of Gears : 6 Speed</td>

                                       </tr>
                                   </tbody>
                            </table>
                            
                            <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Comfort</th>
                                           <th class="text-center" style="font-family: broadway; ">Safety</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Transmission : Automatic</td>
                                           <td>ABS : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Rear AC vents: Yes</td>
                                           <td>Driver Airbag : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Seating capacity: 4</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :154L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">i8 highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    BMW is currently working to launch a facelift for its i8 model by end 2017. The hybrid sports car will get upgrades in powertrain, chassis and overall design. While the current 1.5-litre turbo petrol mill coupled to an electric motor generates 362hp, the updated combination is likely to churn out 425 horses. This is approximately 18 per cent increase in power. The German carmaker is likely to introduce the induction charging option also in the facelift. Apart from this, it will focus on weight reduction by using carbon-fibre tyres instead of aluminium ones.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="container">
                          <div class="row"> 

                            <div class="col-sm-4">
                            </div>

                            <div class="col-sm-4">
                               <?php
                                if(isset($_SESSION['s_name']))
                                {
                                echo '<a href="booking.php" class="btn btn-primary">Book car </a>';
                                }else
                                {
                                  echo '<a href="booking.php" class="btn btn-primary">Book car </a>';  
                                }
                                ?>
                            </div>

                            <div class="col-sm-4">       
                            </div>

                          </div>
                    </div>	
			   
		</div>
	</div>
</div>
<div class="footer">
	<div class="wrap">
	   <div class="footer-top">
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						           <li>This is a CAR selling dealer</li>
						     	  <li>Please read our Terms and Conditions </li>
						     </ul>
						</div>
				   </div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+918657330269</p>
						<span>thethrottlesofficial@gmail.com</span>
					</div>
				</div>
				<div class="clear"></div>
		</div>
	</div>
</div>		

</body>
</html>

    	
    	
            