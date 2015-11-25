<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:description" content="Compendium by Mentored-Research. In this world where knowledge is power, it is important to be aware of the recent developments around you, be it news on the macroeconomic trends or the latest financial deals. With a crisp summary of the important developments in the past quarter, The Compendium is the go-to resource to move one step closer to success.">
    <meta property="og:title" content="The Compendium by Mentored-Research">

    <meta name="description" content="Compendium by Mentored-Research, Mentored-Research. In this world where knowledge is power, it is important to be aware of the recent developments around you, be it news on the macroeconomic trends or the latest financial deals. With a crisp summary of the important developments in the past quarter, The Compendium is the go-to resource to move one step closer to success.">
    <meta name="keywords" content="In this world where knowledge is power, it is important to be aware of the recent developments around you, be it news on the macroeconomic trends or the latest financial deals. With a crisp summary of the important developments in the past quarter, The Compendium is the go-to resource to move one step closer to success.">
    <meta name="author" content="Sagar Anand, Mentored-Research Tech Team, MR Compendium">

    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon" />

    <title>Login | Mentored-Research</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- for jQuery -->
    <script src="../js/jquery-1.7.1.min.js"></script>

    <!-- for my own custom jQuery Scripts -->
    <script src="../js/customScripts.js"></script>

    <!-- for the social buttons coming from Bootstrap -->
    <link href="../css/bootstrap-social.css" rel="stylesheet">    

    <!-- the latest jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- for the scrolly thing -->
    <script src="../js/jquery.scrolly.min.js"></script>

    <!-- for the cookies jQuery plugin -->
    <script src="../js/jquery.cookie.js"></script>    

    <style type="text/css">

         @font-face {
            font-family: regularText;
            src: url('../fonts/AlegreyaSansSC-Regular.ttf');
        }

        @font-face {
            font-family: boldText;
            src: url('../fonts/AlegreyaSansSC-Bold.ttf');
        }

        @font-face {
            font-family: lightText;
            src: url('../fonts/AlegreyaSansSC-Light.ttf');
        }

        @font-face {
            font-family: mediumText;
            src: url('../fonts/AlegreyaSansSC-Medium.ttf');
        }

        @font-face {
            font-family: writingText;
            src: url('../fonts/SEGOEUIL.ttf');
        }

        #alertMsg {
            width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;
            font-family: boldText;
            position: fixed;
        }

        #popup {
            width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;    
            font-family: boldText;
            position: fixed;
        }

        footer {
            background: rgb(233, 233, 233);
        }

        h1 {
            color: #000;
        }

         /*for the smallest phones*/ 
        @media (max-width:767px){
           
        }   

        /*for the tablets and all*/
        @media (min-width:768px){
           
        }

        /*for medium screens and desktops*/
        @media (min-width:992px){
           
        }

        /*for large screens*/ 
        @media (min-width:1200px) {
           
        }

        footer {
            background: rgb(233, 233, 233);
        }

        body {
            background: #070716;
        }

        h1 {
            color: #fff;
        }

        .overlay-show {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 30;
            background-color: rgba(0,0,0,0.5);
        }
        .overlay-remove {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 30;
            background-color: rgba(0,0,0,0.5);
            display: none;
        }
        .overlay-img {
            position: relative;
            top: 45%;
            left: 45%;
            color: #fff;
        }

    </style>

	<script type="text/javascript">
        
        $(window).load(function() {

            var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    
            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();

                // to hide the progress bar.
                $('.progress').fadeOut();
                return false;
            });

            var overlay = $('#overlay').addClass('overlay-remove');
            function showLoading() {
                overlay.removeClass('overlay-remove');
                overlay.addClass('overlay-show');
            }
            function hideLoading() {
                overlay.removeClass('overlay-show');
                overlay.addClass('overlay-remove'); 
            }
            // for checking the query string and all.
            var qs = getQueryStrings();

            if(qs["session"] == "-1") {
                popup.children('p').remove();
                popup.append("<p>We could not store your session. Please try logging in again.</p>").fadeIn();
            }
            if(qs["logout"] == "1") {
                popup.children('p').remove();
                popup.append("<p>You have been logged out successfully. </p>").fadeIn();
            }

        });


        $(document).ready(function() {

            var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    
            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();

                // to hide the progress bar.
                $('.progress').fadeOut();
                return false;
            });

            var overlay = $('#overlay').addClass('overlay-remove');
            function showLoading() {
                overlay.removeClass('overlay-remove');
                overlay.addClass('overlay-show');
            }
            function hideLoading() {
                overlay.removeClass('overlay-show');
                overlay.addClass('overlay-remove'); 
            }

            // for checking the query string and all.
	    	var qs = getQueryStrings();

    		// for the scrolly thing.
    		$('.scrolly').scrolly();

			// focus on Email field.
			$('#txt-email').focus();

            // for logging into the Comnpendium Admin portal.
            $('#form-login').submit(function() {
                var email = $('#txt-email').val().trim();
                var pwd = $('#txt-pwd').val().trim();

                // make the ajax request here for logging in.
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "1", email: email, pwd: pwd
                    },
                    success: function(response) {
                        console.log(response);
                        if(response == "-1") {
                            popup.children('p').remove();
                            popup.append("<p>You are not authenticated to access the Admin portal. Please try with the correct credentials.</p>").fadeIn();
                        }
                        else if(response == "1") {
                            window.location.href = "index.php";    // to be changed in prod
                        }
                        else if(response == "-2") {
                            window.location.href = "login.php?session=-1";   
                        }
                        else {
                            popup.children('p').remove();
                            popup.append("<p>Oops! we encountered an error while logging you in. Please try again.</p>").fadeIn();    
                        }
                    },
                    error: function(err) {
                        popup.children('p').remove();
                        popup.append("<p>Oops! we encountered an error while logging you in. Please try again.</p>").fadeIn();
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
                return false;
            });

        });    // end of ready function.

	</script>

	 <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-58931671-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body id="page-top" class="index">

    <div class="overlay-remove" id="overlay">
        <div class="overlay-img">
            <img src="../img/load.gif" />
        </div>
    </div>

    <div class="overlay-remove" id="overlay-error">
    </div>

    <div id="alertMsg" class="alert alert-warning" role="alert">
    </div>

    <div id="popup" class="alert alert-danger" role="alert">
        <button type="button" class="close" id="btnExitPopup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="progress" style="display: none;">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                <span class="sr-only"></span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #070716;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Compendium Admin Login</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="scrolly" href="#"></a>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com">MR-Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="login-section" style="padding-botton: 0px;">
    	<div class="container">

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <h1 class="page-header text-center">
                        Login
                    </h1>
                    <!-- table for the contact us form -->
                    <form id="form-login">
                        <table class="table">
                            <tr>
                                <td>
                                    <input type="email" class="form-control" placeholder="Enter Email*" id="txt-email" required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" class="form-control" placeholder="Enter Password*" id="txt-pwd" required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" class="btn btn-lg btn-primary btn-block" id="btn-login" value="Log In" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>   <!-- end of row -->

		</div>  <!-- ./ container -->
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Mentored-Research 2015</span>
                </div>
                <div class="col-md-4">   <!-- TODO -->
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 

</body>

</html>
