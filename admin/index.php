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

    <title>Mentored-Research | Admin</title>

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

    <!-- for the form jQuery plugin for uploading files -->
    <script type="text/javascript" src="../js/jquery.form.min.js"></script>

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
            .sidebar {
                position: fixed;
                top: 0%;
                bottom: 0%;
                left: 0;
                z-index: 20;
                display: none;
                padding: 1%;
                overflow-x: hidden;
                overflow-y: auto; 
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }
            .main-div {
		    	margin: 0% 2% 2% 0%;
		    }
		    .menu-show {
		    	margin: 25% 0% 0% 0%;	
		    	display: block;
		    }
        }   

        /*for the tablets and all*/
        @media (min-width:768px){
        	.sidebar {
                position: fixed;
                top: 0%;
                bottom: 0%;
                left: 0;
                z-index: 20;
                display: none;
                padding: 1%;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }
            .main-div {
		    	margin: 0% 2% 2% 0%;
		    }

		    .menu-show {
		    	margin: 10% 0% 0% 0%;	
		    	display: block;
		    }
        }

        /*for medium screens and desktops*/
        @media (min-width:992px){
            .sidebar {
                position: fixed;
                top: 11%;
                bottom: 0%;
                left: 0;
                z-index: 9;
                display: block;
                padding: 4% 1% 1% 1%;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }
            .main-div {
		    	margin: 8% 2% 2% 17%;
		    }
		    .menu-show {
		    	display: none;
		    }
        }

        /*for large screens*/ 
        @media (min-width:1200px) {
            .sidebar {
                position: fixed;
                top: 10%;
                bottom: 0%;
                left: 0;
                z-index: 9;
                display: block;
                padding: 4% 1% 1% 1%;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }  
            .main-div {
		    	margin: 7% 2% 2% 17%;
		    }
		    .menu-show {
		    	display: none;
		    }
        }

        /* Sidebar navigation */
        .nav-sidebar {
            margin-right: -21px; /* 20px padding + 1px border */
            margin-bottom: 20px;
            margin-left: -20px;
        }
        .nav-sidebar > li > a {
            color: #000;
            padding-right: 20px;
            padding-left: 20px;
        }
        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
            color: #fff;
            background-color: #428bca;
        }

        .show-menu {
        	display: block;
        }
        .hide-menu {
        	display: none;
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
        .assignment-video, .assignment-report, .assignment-offtopic, .assignment-extra, .latest-assignment-name {
            cursor: pointer;
        }
    </style>

    <!-- for the custom scripts on this page -->
    <script type="text/javascript">

        // for the window.load function.
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

            // for reading all the querystrings.
            if(qs["me"] == "1") {
                popup.children('p').remove();
                popup.append("Your Macro Economic files have been successfully uploaded.").fadeIn();
            }
            else if(qs["fd"] == "1") {
                popup.children('p').remove();
                popup.append("Your Financial Deals files have been successfully uploaded.").fadeIn();
            }
            else if(qs["sb"] == "1") {
                popup.children('p').remove();
                popup.append("Your Sector Bites files have been successfully uploaded.").fadeIn();
            }
            else if(qs["su"] == "1") {
                popup.children('p').remove();
                popup.append("Your Startup files have been successfully uploaded.").fadeIn();
            }

            // hide the loading gif after the page has loaded.
            hideLoading();

        });   // end of window.load function.

        // for the document.ready function
        $(document).ready(function() {

            // check for the session here and redirect to the login page.
            var userSession = "<?php 

                if(isset($_SESSION['user-id']) && $_SESSION['user-id'] != '-1') {  
                    echo $_SESSION['user-id']; 
                } else { 
                    $_SESSION['user-id'] = '-1';
                    echo $_SESSION['user-id'];
                } ?>";

            if(userSession == '-1') {
                window.location.href = "login.php";   // changed in prod
            }

            var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    
            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();

                // to hide the progress bar.
                $('.progress').fadeOut();
                return false;
            });

            // for the loading overlay hiding and showing
            var overlay = $('#overlay').addClass('overlay-remove');
            function showLoading() {
                overlay.removeClass('overlay-remove');
                overlay.addClass('overlay-show');
            }
            function hideLoading() {
                overlay.removeClass('overlay-show');
                overlay.addClass('overlay-remove'); 
            }

            // to show the loading gif at page loading
            showLoading();

            // for checking the query string and all.
            var qs = getQueryStrings();

            // for the scrolly thing.
            $('.scrolly').scrolly();

            // media query functions
            if ($(window).width() >= 1200) {
                $('.sidebar').addClass('show-menu');
            }
            else if ($(window).width() >= 992) {
                $('.sidebar').addClass('show-menu');
            }
            else if ($(window).width() >= 768) {
                $('.sidebar').addClass('hide-menu');
            }
            else if ($(window).width() <= 767) {
                $('.sidebar').addClass('hide-menu');
            }
            else {
                
            }

            // for showing the menu on the mobile site.
            $('#btnShowMenu').on('click', function() {
                if($('.sidebar').hasClass('show-menu')) {
                    $(this).html("Show Menu");
                    $('.sidebar').removeClass('show-menu');
                    $('.sidebar').addClass('hide-menu');
                }
                else if($('.sidebar').hasClass('hide-menu')) {
                    $(this).html("Hide Menu");  
                    $('.sidebar').removeClass('hide-menu');
                    $('.sidebar').addClass('show-menu');
                }
                else {
                    
                }
                return false;
            }); 
            $('#btnCloseMenu').on('click', function() {
                if ($(window).width() >= 1200) {
                }
                else if ($(window).width() >= 992) {
                }
                else if ($(window).width() >= 768 || $(window).width() <= 767) {
                    $('.sidebar').removeClass('show-menu');
                    $('.sidebar').addClass('hide-menu');
                    $('#btnShowMenu').html("Show Menu");    
                }
                return false;
            });

            // --------------------- for all the client logic and ajax ---------------------------

            // hide all the divs on page load.
            $('.main-div').hide();

            // for the logout functionlaity
            $('.btn-logout').on('click', function() {
                // make the ajax call to log the user out.
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "2"
                    },
                    success: function() {
                        window.location.href = "login.php?logout=1";
                    },
                    error: function() {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while logging you out. Please try again.</p>").fadeIn();
                    }
                });
                return false;
            });

            // for the me button click on lhs.
            $('.me').on('click', function() {
                showAdminDiv($('.me-div'));
                changeAdminActiveState($(this).parent('li'));
                return false;
            });

            // for the fd button click on lhs.
            $('.fd').on('click', function() {
                showAdminDiv($('.fd-div'));
                changeAdminActiveState($(this).parent('li'));
                return false;
            });

            // for the sb button click on lhs.
            $('.sb').on('click', function() {
                showAdminDiv($('.sb-div'));
                changeAdminActiveState($(this).parent('li'));
                return false;
            });

            // for the su button click on lhs.
            $('.su').on('click', function() {
                showAdminDiv($('.su-div'));
                changeAdminActiveState($(this).parent('li'));
                return false;
            });


            // ----------------------- for the file uploads using form submit -----------------------


            // show the first div here explicitly.
            $('.me').trigger('click');

        });  // end of document.ready()

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

<body>

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
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #070716; z-index: 10;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">M-R Compendium Admin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="scrolly" href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#" class="btn-logout">Logout</a>
                    </li>
                    <!-- <li>
                        <a class="scrolly" href="#campusAbs">Ambassador</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
         <div class="row">
            <div class="col-sm-3 col-md-2 col-xs-4 sidebar">

                <i class="fa fa-remove fa-lg hidden-lg hidden-md" id="btnCloseMenu"></i>

                <ul class="nav nav-sidebar">
                    <li><a href="#" class="me">Macro Economics</a></li>
                    <li><a href="#" class="fd">Financial Deals</a></li>
                    <li><a href="#" class="sb">Sector Bites</a></li>
                    <li><a href="#" class="su">Start Ups</a></li>
                </ul>
            </div>   <!-- ./ sidebar -->
        </div>  <!-- ./ row -->

        <button class="btn btn-lg btn-primary btn-block menu-show" id="btnShowMenu">
            Menu
        </button>

        <!-- for the macroeconomics doc -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div me-div">
            <h2 class="page-header">
                Macro-Economic Docs
            </h2>

            <!-- add the form here, inside a table for upload the pdfs for Macro Economics -->
            <form id="form-add-me" method="POST" enctype="multipart/form-data" action="macroeconomic-upload.php">
                <table class="table"> 
                    <tr>
                        <td>
                            <label>Enter Heading: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-me-name" name="txt-me-name" class="form-control" placeholder="Enter heading of topic" required  />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Enter Description: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-me-desc" name="txt-me-desc" class="form-control" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Thumbnail Image file: </label>
                        </td>
                        <td>
                            <input type="file" id="file-me-img" name="file-me-img" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Content PDF: </label>
                        </td>
                        <td>
                            <input type="file" id="file-me-pdf" name="file-me-pdf" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>  
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit MacroEcnomics Topic" id="btn-me-submit" name="btn-me-submit" />
                        </td>   
                    </tr>             
                </table>
            </form>
        </div>

        <!-- for the financial deals docs -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div fd-div">
            <h2 class="page-header">
                Financial Deals Docs
            </h2>

            <!-- add the form here, inside a table for upload the pdfs for Macro Economics -->
            <form id="form-add-fd" method="POST" enctype="multipart/form-data" action="financialdeals-upload.php">
                <table class="table"> 
                    <tr>
                        <td>
                            <label>Enter Heading: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-fd-name" name="txt-fd-name" class="form-control" placeholder="Enter heading of topic" required  />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Enter Description: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-fd-desc" name="txt-fd-desc" class="form-control" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Thumbnail Image file: </label>
                        </td>
                        <td>
                            <input type="file" id="file-fd-img" name="file-fd-img" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Content PDF: </label>
                        </td>
                        <td>
                            <input type="file" id="file-fd-pdf" name="file-fd-pdf" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>  
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit FinancialDeals Topic" id="btn-fd-submit" name="btn-fd-submit" />
                        </td>   
                    </tr>             
                </table>
            </form>
        </div>

        <!-- for the Sector Bites docs -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div sb-div">
            <h2 class="page-header">
                Sector Bites Docs
            </h2>

            <!-- add the form here, inside a table for upload the pdfs for Macro Economics -->
            <form id="form-add-sb" method="POST" enctype="multipart/form-data" action="sectorbites-upload.php">
                <table class="table"> 
                    <tr>
                        <td>
                            <label>Enter Heading: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-sb-name" name="txt-sb-name" class="form-control" placeholder="Enter heading of topic" required  />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Enter Description: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-sb-desc" name="txt-sb-desc" class="form-control" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Thumbnail Image file: </label>
                        </td>
                        <td>
                            <input type="file" id="file-sb-img" name="file-sb-img" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Content PDF: </label>
                        </td>
                        <td>
                            <input type="file" id="file-sb-pdf" name="file-sb-pdf" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>  
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit SectorBites Topic" id="btn-sb-submit" name="btn-sb-submit" />
                        </td>   
                    </tr>             
                </table>
            </form>
        </div>

        <!-- for the Startups docs -->
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 main-div su-div">
            <h2 class="page-header">
                Startup Docs
            </h2>

            <!-- add the form here, inside a table for upload the pdfs for Macro Economics -->
            <form id="form-add-su" method="POST" enctype="multipart/form-data" action="startups-upload.php">
                <table class="table"> 
                    <tr>
                        <td>
                            <label>Enter Heading: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-su-name" name="txt-su-name" class="form-control" placeholder="Enter heading of topic" required  />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Enter Description: </label>
                        </td>
                        <td>
                            <input type="text" id="txt-su-desc" name="txt-su-desc" class="form-control" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Thumbnail Image file: </label>
                        </td>
                        <td>
                            <input type="file" id="file-su-img" name="file-su-img" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>               
                    <tr>
                        <td>
                            <label>Content PDF: </label>
                        </td>
                        <td>
                            <input type="file" id="file-su-pdf" name="file-su-pdf" class="btn btn-lg btn-primary btn-block" placeholder="Enter description of topic" required />
                        </td>
                    </tr>  
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Submit Startups Topic" id="btn-su-submit" name="btn-su-submit" />
                        </td>   
                    </tr>             
                </table>
            </form>
        </div>

    </div>   <!-- ./ container-fluid -->

</body>
</html>