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
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!--CSS ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">=
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/availability-calendar.css" rel="stylesheet">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/event.css">
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

            <!--Start Create Form Area -->
            <section>
                <div class="container">
                    <!--  Details -->
                    <div class="form-group">
                        <h2 class="heading">Search for Outings</h2>

                    <div class="tab">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home1">CREATE EVENT</a></li>
                        <li><a data-toggle="tab" href="#menu1">JOIN EVENT</a></li>
                      </ul>
                    </div>

                    <div class="tab-content">
                    <div id="home1" class="tab-pane fade in active">

                    <form action="">
                        <!--  General -->
                        <h2 class="heading">Event Information</h2>


                    <div class="grid" style="clear: none;">

                        <div class="col-2-3" style="float:left;">
                          <div class="controls">
                           <input type="text" id="eventType" class="floatLabel" name="eventType">
                           <label for="eventType"><i class="fa fa-history"></i>&nbsp;&nbsp;Event Type</label>
                          </div>          
                        </div>
                            
                        <div class="col-1-3" style="float: right;">
                          <div class="controls">
                            <input type="text" id="eventTitle" class="floatLabel" name="eventTitle">
                            <label for="eventTitle"><i class="fa fa-tasks"></i>&nbsp;&nbsp;Event Title</label>
                          </div>          
                        </div>

                    </div>

                    <div class="grid">
                        <div class="col-2-3">
                          <div class="controls">
                            <input type="text" id="autocomplete" class="floatLabel" name="location">
                            <label for="autocomplete"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Event Location</label>
                          </div>         
                        </div>
                    </div>
                            
                    <!--  Details -->
                    <div class="form-group">
                        <h2 class="heading">Details</h2>
                        <div class="grid" style="clear: none;">

                            <div class="col-3-4 col-3-4-sm" style="float: right;">
                                <div class="file-upload">
                                  <div class="image-upload-wrap">
                                    <input class="file-upload-input" type='file' name="image" onchange="readURL(this);" accept="image/*" />
                                    <div class="drag-text">
                                      <h3><i class="fa fa-image"></i>&nbsp;&nbsp;Drag and drop an Event Image</h3>
                                    </div>
                                  </div>
                                  <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image" />
                                    <div class="image-title-wrap">
                                      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                              
                            <div class="col-1-4 col-1-4-sm">
                              <div class="controls">
                                <input type="date" id="start" class="floatLabel" name="start" value="<?php echo date('Y-m-d'); ?>">
                                <label for="start" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Start Date</label>
                              </div>      
                            </div>

                            <div class="col-1-4 col-1-4-sm">
                              <div class="controls">
                                <input type="date" id="end" class="floatLabel" name="end" value="<?php echo date('Y-m-d'); ?>"/>
                                <label for="end" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;End Date</label>
                              </div>      
                            </div>


                        </div>

                        <div class="grid">
                            <p class="info-text">Please describe your event: </p>
                            <div class="controls">
                              <textarea name="comments" class="floatLabel" id="comments"></textarea>
                              <label for="comments"><i class="fa fa-comment"></i>&nbsp;&nbsp;Comments</label>
                              </div>
                                <button type="submit" value="Submit" class="col-1-4 btn ">Submit</button>
                        </div>  
                    </div> 

                    </form>
                    </div>

                    <div id="menu1" class="tab-pane fade">

                      <div style="background-color: #fafafa; background-repeat:no-repeat !important; background-size: cover;" id="tour">
                        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                            <h2 class="w3-wide w3-center">BE PART OF AN EVENT</h2>
                           

                            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                                
                                <div class="w3-third w3-margin-bottom">
                                    <img src="img/e2.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
                                    <div class="w3-container w3-white" style="text-align: left;">
                                        <p><b>New York</b></p>
                                        <p class="w3-opacity">Fri 27 Nov 2016</p>
                                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                        <button class="btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Join Event</button>
                                    </div>
                                </div>
            
                                <div class="w3-third w3-margin-bottom">
                                    <img src="img/e3.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
                                    <div class="w3-container w3-white" style="text-align: left;">
                                        <p><b>Paris</b></p>
                                        <p class="w3-opacity">Sat 28 Nov 2016</p>
                                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                        <button class="btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Join Event</button>
                                    </div>
                                </div>
            
                                <div class="w3-third w3-margin-bottom">
                                    <img src="img/e1.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
                                    <div class="w3-container w3-white" style="text-align: left;">
                                        <p><b>San Francisco</b></p>
                                        <p class="w3-opacity">Sun 29 Nov 2016</p>
                                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                        <button class="btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Join Event</button>
                                    </div>
                                </div>
            
                            </div>

                            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                                
                                <div class="w3-third w3-margin-bottom">
                                    <img src="img/e4.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
                                    <div class="w3-container w3-white" style="text-align: left;">
                                        <p><b>New York</b></p>
                                        <p class="w3-opacity">Fri 27 Nov 2016</p>
                                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                        <button class="btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Join Event</button>
                                    </div>
                                </div>
            
                                <div class="w3-third w3-margin-bottom">
                                    <img src="img/e5.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
                                    <div class="w3-container w3-white" style="text-align: left;">
                                        <p><b>Paris</b></p>
                                        <p class="w3-opacity">Sat 28 Nov 2016</p>
                                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                        <button class="btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Join Event</button>
                                    </div>
                                </div>
            
                                <div class="w3-third w3-margin-bottom">
                                    <img src="img/e6.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
                                    <div class="w3-container w3-white" style="text-align: left;">
                                        <p><b>San Francisco</b></p>
                                        <p class="w3-opacity">Sun 29 Nov 2016</p>
                                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                        <button class="btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Join Event</button>
                                    </div>
                                </div>
            
                            </div>

                        </div>  
    
                     </div> 
                    </div>


                        </div>
                    </div>
                </div>
            </section>
        <!-- End Create Form Area -->


    <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->
        <script type="text/javascript" src="js/location.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7TMTdyDNEeXwvrqiwEQpkRMp6O6vD0kU&libraries=places&callback=initialize"></script>
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
        <script src="js/date-select.js"></script>
        <script src="js/img-handle.js"></script>


    </body>
</html>