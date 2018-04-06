<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" type="image/png" href="img/logotest.png"/>
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Xplore</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link href="css/availability-calendar.css" rel="stylesheet">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/profile.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div>
								<a href="index.php"><img src="img/logo.jpg" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="index.php">Home</a>
									<a href="place.php">Places</a>
									<a href="event.php">Events</a>
									<a href="calendar.php">Calendar</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->


			<!-- Start Profile Area -->
			<div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="u-mv-large u-text-center">
	                    	<br>
	                        <h2 class="u-mb-xsmall">Hi Jessica! Welcome back to your profile.</h2>
	                        <p class="u-text-mute u-h6">Check out the latest events you joined or created.</p>
	                    </div>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-12 col-lg-4">
	                    <div class="c-card u-p-medium u-text-center u-mb-medium" data-mh="landing-cards">
	                        <img class="u-mb-small" src="img/icon-intro1.jpg" alt="iPhone icon">

	                        <h4 class="u-h6 u-text-bold u-mb-small">
	                            Start an event and prepare new stuff for your community!
	                        </h4>
	                        <a class="c-btn c-btn--info" href="event.php">Start new event</a>
	                    </div>
	                </div>

	                <div class="col-sm-12 col-lg-4">
	                    <div class="c-card u-p-medium u-text-center u-mb-medium" data-mh="landing-cards">

	                        <img class="u-mb-small" src="img/icon-intro2.png" alt="iPhone icon">

	                        <h4 class="u-h6 u-text-bold u-mb-small">
	                            Check out the events you created throught your journey with us
	                        </h4>

	                        <!-- BUTTON -->
							<a class="c-btn c-btn--info" href="#modal-zoom-in">View your events</a>

							<div class="modal zoom-in" id="modal-zoom-in">
								<div class="modal-overlay">
									<a href="#close"></a>
								</div>
								<div class="modal-container">
									<div class="modal-container__header">
										<div class="modal-container__header-close">
											<a href="#close"><span class="icon-close">&times;</span> <span class="hide-text">Close</span></a>
										</div>
									</div>

									<div class="modal-container__content">
										<h3 class="modal-container__content-title">Events You Created</h3>

										<p>
											<div class="c-fileitem">
				                            <div class="c-fileitem__content">
				                                <div class="c-fileitem__img">
				                                    <img src="img/e1.jpg" alt="File's image">
				                                </div>

				                                <p class="c-fileitem__name">
				                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Santorini.jpg
				                                </p>
				                            </div>
				                            
				                            <div class="c-fileitem__date">
				                               <button type="button" class="remove-btn">Delete</button>
				                            </div>
				                        	</div><!-- // .c-fileitem -->

					                        <div class="c-fileitem">
					                            <div class="c-fileitem__content">
					                                <div class="c-fileitem__img">
					                                    <img src="img/e2.jpg" alt="File's image">
					                                </div>

					                                <p class="c-fileitem__name">
					                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Sea Presentation.jpg
					                                </p>
					                            </div>
					                            
					                            <div class="c-fileitem__date">
					                                <button type="button" class="remove-btn">Delete</button>
					                            </div>
					                        </div><!-- // .c-fileitem -->

					                        <div class="c-fileitem">
					                            <div class="c-fileitem__content">
					                                <div class="c-fileitem__img">
					                                    <img src="img/e3.jpg" alt="File's image">
					                                </div>

					                                <p class="c-fileitem__name">
					                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Lakes in Austria.jpg
					                                </p>
					                            </div>
					                            
					                            <div class="c-fileitem__date">
					                                <button type="button" class="remove-btn">Delete</button>
					                            </div>
					                        </div><!-- // .c-fileitem -->

					                        <div class="c-fileitem">
					                            <div class="c-fileitem__content">
					                                <div class="c-fileitem__img">
					                                    <img src="img/e4.jpg" alt="File's image">
					                                </div>

					                                <p class="c-fileitem__name">
					                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Mountain.jpg
					                                </p>
					                            </div>
					                            
					                            <div class="c-fileitem__date">
					                                <button type="button" class="remove-btn">Delete</button>
					                            </div>
					                        </div><!-- // .c-fileitem -->

										</p>

									</div>
								</div>
							</div>
							<!--End Modal -->

	                    </div>
	                </div>

	                <div class="col-sm-12 col-lg-4">
	                    <div class="c-card u-p-medium u-text-center u-mb-medium" data-mh="landing-cards">

	                        <img class="u-mb-small" src="img/icon-intro3.jpg" alt="iPhone icon">

	                        <h4 class="u-h6 u-text-bold u-mb-small">
	                            Keep track of the events that you are a part of.
	                        </h4>

	                        <!-- BUTTON -->
	                        <a class="c-btn c-btn--info" href="#modal-zoom-in2">View joined events</a>

							<div class="modal zoom-in" id="modal-zoom-in2">
								<div class="modal-overlay">
									<a href="#close"></a>
								</div>
								<div class="modal-container">
									<div class="modal-container__header">
										<div class="modal-container__header-close">
											<a href="#close"><span class="icon-close">&times;</span> <span class="hide-text">Close</span></a>
										</div>
									</div>

									<div class="modal-container__content">
										<h3 class="modal-container__content-title">Events You Joined</h3>

										<p>
											<div class="c-fileitem">
				                            <div class="c-fileitem__content">
				                                <div class="c-fileitem__img">
				                                    <img src="img/e1.jpg" alt="File's image">
				                                </div>

				                                <p class="c-fileitem__name">
				                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Santorini.jpg
				                                </p>
				                            </div>
				                            
				                            <div class="c-fileitem__date">
				                               <button type="button" class="remove-btn">Leave</button>
				                            </div>
				                        	</div><!-- // .c-fileitem -->

					                        <div class="c-fileitem">
					                            <div class="c-fileitem__content">
					                                <div class="c-fileitem__img">
					                                    <img src="img/e2.jpg" alt="File's image">
					                                </div>

					                                <p class="c-fileitem__name">
					                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Sea Presentation.jpg
					                                </p>
					                            </div>
					                            
					                            <div class="c-fileitem__date">
					                                <button type="button" class="remove-btn">Leave</button>
					                            </div>
					                        </div><!-- // .c-fileitem -->

					                        <div class="c-fileitem">
					                            <div class="c-fileitem__content">
					                                <div class="c-fileitem__img">
					                                    <img src="img/e4.jpg" alt="File's image">
					                                </div>

					                                <p class="c-fileitem__name">
					                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Mountain.jpg
					                                </p>
					                            </div>
					                            
					                            <div class="c-fileitem__date">
					                                <button type="button" class="remove-btn">Leave</button>
					                            </div>
					                        </div><!-- // .c-fileitem -->

										</p>

									</div>
								</div>
							</div>
							<!--End Modal -->


	                    </div>
	                </div>

            	</div>


	            <!-- Start Dashboard Area -->
	            <div class="row u-mt-small">
	                <div class="col-lg-6">
	                    <h3 class="u-mb-small">Dashboard Overview</h3>
	                    
	                    <div class="c-card c-overview-card u-p-medium u-mb-medium">
	                        <div class="row">
	                            <div class="col-4 u-border-right">
	                                <div>
	                                    <h3 class="u-mb-zero">123</h3>
	                                    <p class="u-text-mute u-mb-small">Events you Created</p>
	                                    <img src="img/a1.jpg" alt="Analytics1">
	                                </div>
	                            </div>

	                            <div class="col-4 u-border-right">
	                                <div>
	                                    <h3 class="u-mb-zero">74</h3>
	                                    <p class="u-text-mute u-mb-small">Events you Joined</p>
	                                    <img src="img/a2.jpg" alt="Analytics2">
	                                </div>
	                                
	                            </div>

	                            <div class="col-4">
	                                <div>
	                                    <h3 class="u-mb-zero">405</h3>
	                                    <p class="u-text-mute u-mb-small">Events you Viewed</p>
	                                    <img src="img/a3.jpg" alt="Analytics3">
	                                </div>
	                            </div>
	                        </div>

	                        <span class="c-divider u-mv-medium u-opacity-medium"></span>

	                        <div class="row">
	                            <div class="col-6 col-md-3 u-border-right">
	                                <div class="c-overview-card__section">
	                                    <p class="u-text-mute u-nospace">Check Rate</p>
	                                    <h3 class="u-nospace">32.21%</h3>

	                                    <div class="c-progress c-progress--info c-progress--small u-mb-zero">
	                                        <div class="c-progress__bar" style="width:15%;"></div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="col-6 col-md-3 u-border-right">
	                                <div class="c-overview-card__section">
	                                    <p class="u-text-mute u-nospace">Join Rate</p>
	                                    <h3 class="u-nospace">75.21%</h3>

	                                    <div class="c-progress c-progress--info c-progress--small u-mb-zero">
	                                        <div class="c-progress__bar" style="width:75.21%;"></div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="col-6 col-md-3">
	                                <div class="c-overview-card__section">
	                                    <p class="u-text-mute u-nospace">Attachments</p>
	                                    <h3 class="u-nospace">63.45%</h3>

	                                    <div class="c-progress c-progress--info c-progress--small u-mb-zero">
	                                        <div class="c-progress__bar" style="width:63.45%;"></div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="col-6 col-md-3 u-border-left">
	                                <div class="c-overview-card__section">
	                                    <p class="u-text-mute u-nospace">New Activity</p>
	                                    <h3 class="u-nospace">72.4%</h3>

	                                    <div class="c-progress c-progress--success c-progress--small u-mb-zero">
	                                        <div class="c-progress__bar" style="width:72.4%;"></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                    </div>
	                </div>


	                <!-- Start Upcoming Events Area -->
	                <div class="col-lg-6">
	                    <div class="u-flex u-justify-between">
	                        <h3 class="u-mb-small">Your Upcoming Events</h3>
	                    </div>

	                    <div class="c-card u-p-medium">
	                        <div class="c-fileitem">
	                            <div class="c-fileitem__content">
	                                <div class="c-fileitem__img">
	                                    <img src="img/e1.jpg" alt="File's image">
	                                </div>

	                                <p class="c-fileitem__name">
	                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Santorini.jpg
	                                </p>
	                            </div>
	                            
	                            <div class="c-fileitem__date">
	                                Created 1 minute ago
	                            </div>
	                        </div><!-- // .c-fileitem -->

	                        <div class="c-fileitem">
	                            <div class="c-fileitem__content">
	                                <div class="c-fileitem__img">
	                                    <img src="img/e2.jpg" alt="File's image">
	                                </div>

	                                <p class="c-fileitem__name">
	                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Sea Presentation.jpg
	                                </p>
	                            </div>
	                            
	                            <div class="c-fileitem__date">
	                                Joined 3 minute ago
	                            </div>
	                        </div><!-- // .c-fileitem -->

	                        <div class="c-fileitem">
	                            <div class="c-fileitem__content">
	                                <div class="c-fileitem__img">
	                                    <img src="img/e3.jpg" alt="File's image">
	                                </div>

	                                <p class="c-fileitem__name">
	                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Lakes in Austria.jpg
	                                </p>
	                            </div>
	                            
	                            <div class="c-fileitem__date">
	                                Joined 1 minute ago
	                            </div>
	                        </div><!-- // .c-fileitem -->

	                        <div class="c-fileitem">
	                            <div class="c-fileitem__content">
	                                <div class="c-fileitem__img">
	                                    <img src="img/e4.jpg" alt="File's image">
	                                </div>

	                                <p class="c-fileitem__name">
	                                    <i class="fa fa-image"></i>&nbsp;&nbsp;Mountain.jpg
	                                </p>
	                            </div>
	                            
	                            <div class="c-fileitem__date">
	                                Created on 11/02/2017
	                            </div>
	                        </div><!-- // .c-fileitem -->

	                        <div class="c-fileitem">
	                            <div class="c-fileitem__content">
	                                <div class="c-fileitem__img">
	                                    <img src="img/e5.jpg" alt="File's image">
	                                </div>

	                                <p class="c-fileitem__name">
	                                   <i class="fa fa-image"></i>&nbsp;&nbsp;Mountains in US.jpg
	                                </p>
	                            </div>
	                            
	                            <div class="c-fileitem__date">
	                                Created on 09/01/2017
	                            </div>
	                        </div><!-- // .c-fileitem -->

	                    </div>
                	</div>

            </div>
        </div>


        <!-- Main javascsript -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/availability-calendar.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/parallax.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="js/countdown.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/toggle.js"></script>
		<script src="js/main.js"></script>


        
        
       

</body>
</html>