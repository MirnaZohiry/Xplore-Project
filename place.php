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
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">=
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/availability-calendar.css" rel="stylesheet">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/search-place.css">
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
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- Start Search Area -->
        <section id="outings">
            <div class="container">
                <form action="">
                  <!--  Details -->
                  <div class="form-group">
                    <h2 class="heading">Search for Outings</h2>
                    
                    <div class="grid">
                      
                      <div class="col-1-3 col-1-3-sm">
                      <div class="controls">
                        <i class="fa fa-sort"></i>
                        <select class="floatLabel pdg" id="activitySelect">
                          <option value="blank" selected></option>
                          <option value="restaurant">restaurant</option>
                          <option value="cafe" >cafe</option>
                          <option value="museum">museum</option>
                        </select>
                        <label for="fruit"><i class="fa fa-tasks"></i>&nbsp;&nbsp;Activity</label>
                      </div>      
                    </div>

                    <div class="col-1-3 col-1-3-sm">
                      <div class="controls" id="locationField">
                        <input type="text" id="autocomplete" class="floatLabel" name="autocomplete" placeholder="" style="width: 100%; height: 50px;">
                        <label for="fruit"><i class="fa fa-map"></i>&nbsp;&nbsp;Location</label>
                      </div>      
                    </div>


                     <div class="col-1-3 col-1-3-sm">
                        <button type="submit" value="Submit" class="btn" style="padding-bottom: 16px;"><i class="fa fa-search"></i>&nbsp;Search</button>
                    </div>
  
                    
  
                      </div>
                  </div>
                </form>
            </div>
        </section>
        <!-- End Search Area -->

        <!-- Start Filter Area -->
        <section>
            <div class="container" id="listing-results">

                <br/>
            </div>
        </section>
        <!-- End Filter Area -->

        <div id="map"></div>

        <!-- Start Pagination Area -->
        <div class="center">
          <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
          </div>
        </div>
        <br/>
        <!-- End Pagination Area -->


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
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK35lBiyCDm5oNdJrpOuXcLKeNz0FPpdc&libraries=places&callback=initialize"></script>-->
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
       

    </body>
</html>