<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DISKOMINFO JEMBER </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <!-- Lato -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body id="body">

    <div id="preloader">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>

    <!--
	    Header start
	    ==================== -->
    <div class="navbar-default navbar-fixed-top" id="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="logo" src="images/kominfojbr.png" alt="LOGO">
                    <!-- <img class="logo" src="images/kominfojbr.png" alt="LOGO"> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <nav class="collapse navbar-collapse" id="navbar">
                @if (Route::has('login'))
                <ul class="nav navbar-nav navbar-right" id="top-nav">
                    @auth
                    <li class="current"><a href="#body">Home</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>

                    <!-- @if (Route::has('register'))
	                    <li><a href="{{ route('register') }}">Register</a></li>
                        @endif -->
                    @endauth
                </ul>
                @endif
                <ul class="nav navbar-nav navbar-right" id="top-nav">
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>

    <section id="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h1 class="wow fadeInDown">Dinas Komunikasi dan Informatika Jember</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.3s">DISKOMINFO Kab. Jember menuju pada JEMBER SATU DATA dan JEMBER SMART CITY</p>
                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <a class="btn btn-default btn-home" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow zoomIn">
                    <div class="block">
                        <div class="counter text-center">
                            <ul id="countdown_dashboard">
                                <li>
                                    <div class="dash hours_dash">
                                        <div id="clock" class="digit"></div>
                                        <script type="text/javascript">
                                            function showTime() {
                                                var a_p = "";
                                                var today = new Date();
                                                var curr_hour = today.getHours();
                                                var curr_minute = today.getMinutes();
                                                var curr_second = today.getSeconds();
                                                // if (curr_hour < 12) {
                                                //     a_p = "AM";
                                                // } else {
                                                //     a_p = "PM";
                                                // }
                                                if (curr_hour == 0) {
                                                    curr_hour = 12;
                                                }
                                                // if (curr_hour > 12) {
                                                //     curr_hour = curr_hour - 12;
                                                // }
                                                curr_hour = checkTime(curr_hour);
                                                curr_minute = checkTime(curr_minute);
                                                curr_second = checkTime(curr_second);
                                                document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                                            }

                                            function checkTime(i) {
                                                if (i < 10) {
                                                    i = "0" + i;
                                                }
                                                return i;
                                            }
                                            setInterval(showTime, 500);
                                        </script>
                                    </div>
                                    <span class="dash_title">Hours</span>
                                </li><br>
                                <li>
                                    <div class="dash days_dash">
                                        <script type='text/javascript'>
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                        </script>
                                        <span class="dash_title">Days</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->



    <!--
        About start
        ==================== -->
    <!-- <section id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 wow fadeInLeft">
                    	<div class="sub-heading">
                    		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsa recusandae consequatur veniam, reiciendis odit quia eaque vel eius a.</h3>
                    	</div>
                        <div class="block">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla-mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aspernatur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="about-slider">
                        	<div class="init-slider">
                        		<div class="about-item">
                        			<img src="images/about/1.jpg" alt="" class="img-responsive">
                        		</div>
                        		<div class="about-item">
                        			<img src="images/about/2.jpg" alt="" class="img-responsive">
                        		</div>
                        		<div class="about-item">
                        			<img src="images/about/3.jpg" alt="" class="img-responsive">
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>#about close -->
    <!--
        About start
        ==================== -->

    <!--
        Service start
        ==================== -->
    <!-- <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <h2>Our service</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-android-desktop"></i>
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Fully Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-speedometer"></i>
                                </span>
                            </div>
                            <div class="caption">
                            	<h3>Speed Optimized</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-ios-infinite-outline"></i>
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Tons of Feature</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-ios-cloud-outline"></i>
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Cloud Option</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container close -->
    <!-- </section>#service close --> -->

    <!-- <section id="call-to-action" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow text-center">
                        <div class="block">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email Address">
                                <button class="btn btn-default btn-submit" type="submit">Get Notified</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>#call-to-action close -->

    <!--
        Contact start
        ==================== -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInUp">
                                <h2>Get In Touch</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div>
                    </div> -->
                <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
                    <div class="block text-left">
                        <div class="sub-heading">
                            <h4>Contact Address</h4>
                            <p>Jember sebagai kota pandhalungan memiliki kharakteristik masyarakat yang berbeda dengan daerahnlainnya.
                                Banyak pendatang dari berbagai daerah telah menetap dan hidup di Jember.
                                Tak heran bila seni budaya Jember beraneka ragam dengan heterogennya masyarakat Jember.
                                Inilah yang menjadi salah satu kekuatan Jember. Jember tidak ubahnya miniature of Indonesia.
                                Bhineka tunggal ika. Berbeda beda tapi tetap satu jua. Jember Baru Jember Bersatu Mari bersama sama memajukan Jember di segala bidang.
                                Kita bangga jadi Warga Jember Kita bangga jadi warga pandhalungan</p>
                        </div>
                        <address class="address">
                            <hr>
                            <p>Jl. Dewi Sartika No.54, Kepatihan, Kec. Kaliwates,<br> Kabupaten Jember, <br> Jawa Timur, <br> 68131</p>
                            <hr>
                            <p><strong>Email:</strong>&nbsp;diskominfo@jemberkab.go.id</p>
                            <!-- <strong>P:</strong>&nbsp;+614 3948 2726</p> -->


                        </address>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3057999304942!2d113.69954891420176!3d-8.171915594118174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6943ace876f09%3A0x3badfa144578a391!2sDinas%20Komunikasi%20Dan%20Informatika%20(Kominfo)%20Kabupaten%20Jember!5e0!3m2!1sid!2sid!4v1617528199986!5m2!1sid!2sid" width="600" height="450" style="border:5;" allowfullscreen="" loading="lazy"></iframe>
                    <!-- <div class="form-group">
                    	    <form action="#" method="post" id="contact-form">
                    	        <div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Your Name" name="name">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	            <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                    	        </div>
                    	        <button class="btn btn-send" type="submit">Send me</button>
                    	    </form> -->

                    <!-- <div id="success">
                    	        <p>Your Message was sent successfully</p>
                    	    </div>
                    	    <div id="error">
                    	        <p>Your Message was not sent successfully</p>
                    	    </div>
                    	</div> -->
                </div>
            </div>
        </div>
    </section>

    <section clas="wow fadeInUp">
        <div class="map-wrapper">
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <p>Copyright &copy; DISKOMINFOJEMBER| 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/jquery.lwtCountdown-1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>