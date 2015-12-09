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

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <title>M-R Compendium</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
    <script src="js/jquery-1.7.1.min.js"></script>

    <!-- for my own custom jQuery Scripts -->
    <script src="js/customScripts.js"></script>

    <!-- for the social buttons coming from Bootstrap -->
    <link href="css/bootstrap-social.css" rel="stylesheet">    

    <!-- the latest jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- for the scrolly thing -->
    <script src="js/jquery.scrolly.min.js"></script>

    <!-- for the cookies jQuery plugin -->
    <script src="js/jquery.cookie.js"></script>    

    <style type="text/css">

        @font-face {
            font-family: regularText;
            src: url('fonts/AlegreyaSansSC-Regular.ttf');
        }

        @font-face {
            font-family: boldText;
            src: url('fonts/AlegreyaSansSC-Bold.ttf');
        }

        @font-face {
            font-family: lightText;
            src: url('fonts/AlegreyaSansSC-Light.ttf');
        }

        @font-face {
            font-family: mediumText;
            src: url('fonts/AlegreyaSansSC-Medium.ttf');
        }

        @font-face {
            font-family: writingText;
            src: url('fonts/SEGOEUIL.ttf');
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

        .div-main {
            position: relative;
        }

         /*for the smallest phones*/ 
        @media (max-width:767px){
            .main-content {
                padding-top: 18%;
            }            

            .content-modal-body, .content-modal-body > iframe {
                height: 400px;
            }

            .btn-social-login {
                margin: 8% 0%;
            }
        }   

        /*for the tablets and all*/
        @media (min-width:768px){
        	.main-content {
                padding-top: 15%;
            }

            .content-modal-body, .content-modal-body > iframe {
                width: 100%;
                height: 400px;
            }           

            .btn-social-login {
                margin: 8% 0%;
            } 
        }

        /*for medium screens and desktops*/
        @media (min-width:992px){
            .main-content {
                padding-top: 8%;
            }

            .content-modal-body, .content-modal-body > iframe {
                height: 700px;
            }            

            .btn-social-login {
                margin: 4% 0%;
            }
        }

        /*for large screens*/ 
        @media (min-width:1200px) {
            .main-content {
                padding-top: 8%;
            }            

            .content-modal-body, .content-modal-body > iframe {
                height: 700px;
            }

            .btn-social-login {
                margin: 4% 0%;
            }
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

        .category-div li {
            padding-bottom: -5px;
        }

        .category-div ul li {
            display: inline-block;
        }

        .category-div ul li a {
            color: #000;
            display: block;
            font-size: 1.2em;
            font-weight: 700;
            padding: 5px 17px;
            border-radius: 6px;
            text-transform: capitalize;
            font-family: writingText;
        }

        .category-div ul li a:hover,
        .category-div ul li a.active {
          background-color: #428bca;
          font-family: writingText;
          border-radius: 6px;
          color: #fff;
          padding: 5px 17px;
        }
        
        .thumbnail-img {
            border-radius: 50%;
        }

        .google-hidden {
            display: none;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }

    </style>

    <script type="text/javascript">
        // for the window.load function
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

        });   // end of window.load function

        // for the main ready function
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

            // for the navbar links and info status line. (just for initialisation)
            var navbarLinks = $('.navbar-links');
            var navbarInfo = $('.navbar-info');
            var navbarInfoText = $('.navbar-info-text');

            // for tracking the mouse clicks 
            if($.cookie('track') == undefined || $.cookie('track') == "undefined" || $.cookie('track') == "0") {  // if cookie does not exists or is 0
                $.cookie('track', '0');
            }
            function incrementMouseClick() {
                var clicks = parseInt($.cookie('track'));
                clicks++;
                $.cookie('track', clicks.toString());
                console.log("No. of clicks: " + clicks);
                return $.cookie('track');
            }
            //document.addEventListener('click', incrementMouseClick);

             // for checking the query string and all.
            var qs = getQueryStrings();

            // for the subscribe button click
            $('#btn-subscribe').on('click', function() {
                 $('#subscribe-modal').modal('show');
                 incrementMouseClick();
                return false;
            });
            // for quicklink buttons click
            $('.quick-link').on('click', function() {
                var link = $(this).attr('data-content');
                if(link == "privacy") {
                    $('#privacy-policy-modal').modal('show');
                }
                else if(link == "terms") {
                    $('#terms-conditions-modal').modal('show');
                }
                incrementMouseClick();
                return false;
            });
            // for the social button clicking
            $('.social-link-fb').on('click', function() {
                incrementMouseClick();
                window.open("https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf", "_blank");
                return false;
            });
            $('.social-link-in').on('click', function() {
                incrementMouseClick();
                window.open("https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3", "_blank");
                return false;
            });


            // ------------------------ CLIENT jQUERY LOGIC ------------------------

            // for checking the client session on dashboard.
            var userSession = "<?php 
                if(isset($_SESSION['name'])) {  
                    echo $_SESSION['name']; 
                } else { 
                    $_SESSION['name'] = '-1';
                    echo $_SESSION['name'];
                } ?>";

            if(userSession == '-1') {
                console.log("Not logged in.");
            }
            else {
                console.log("Logged in." + userSession);   
                navbarLinks.removeClass('show');
                navbarLinks.addClass('hide');
                navbarInfo.removeClass('hide');
                navbarInfo.addClass('show');
                navbarInfoText.html("Welcome, " + userSession.split(" ")[0] + "!");
            }


            var macroeconomicDiv = $('.macroeconomic-div').hide();
            macroeconomicDiv.attr('data-shown', '1');  // change the shown status
            var financeDiv = $('.finance-div').hide();
            var sectorDiv = $('.sector-div').hide();
            var startupDiv = $('.startup-div').hide();

            // this is for showing the correct content div on click of the nav links.
            $('a.filter').on('click', function() {
                var selector = $(this).attr('data-filter');
                if($(this).hasClass('active')) {

                }
                else {
                    if(selector == "macroeconomic") {
                        changeActiveState(this);
                        showDiv(macroeconomicDiv);

                        // check the dirty bit and show stuff
                        if(macroeconomicDiv.attr('data-dirty') == "0") {
                            getThumbnailData("macroeconomic");
                            macroeconomicDiv.attr('data-dirty', '1')
                        }
                    }
                    else if(selector == "financial") {
                        changeActiveState(this);
                        showDiv(financeDiv);

                        // check the dirty bit and show stuff
                        if(financeDiv.attr('data-dirty') == "0") {
                            getThumbnailData("financial");
                            financeDiv.attr('data-dirty', '1')
                        }
                    }
                    else if(selector == "sector") {
                        changeActiveState(this);
                        showDiv(sectorDiv);

                        // check the dirty bit and show stuff
                        if(sectorDiv.attr('data-dirty') == "0") {
                            getThumbnailData("sector");
                            sectorDiv.attr('data-dirty', '1')
                        }
                    }
                    else if(selector == "startup") {
                        changeActiveState(this);
                        showDiv(startupDiv);

                        // check the dirty bit and show stuff
                        if(startupDiv.attr('data-dirty') == "0") {
                            getThumbnailData("startup");
                            startupDiv.attr('data-dirty', '1')
                        }
                    }
                    else {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error during this operation. Please try again.</p>").fadeIn();
                    }
                }

                // for mouse click tracking
                incrementMouseClick();

                return false;
            });

            // for triggering the link click of ME on page load.
            $('.me-link').trigger('click');

            // function for the ajax call to the backend for showing all the content.
            function getThumbnailData(payload) {
                showLoading();
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        payload: payload
                    },
                    success: function(response) {
                        if(response[0] == "-1") {  // error condition.
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error during this operation. Please try again.</p>").fadeIn();   
                        }
                        else if(response[0] == "-2") {
                            popup.children('p').remove();
                            popup.append("<p>No data is available for this section on the server.</p>").fadeIn();      
                        }
                        else {
                            var wrap = "0";
                            var index = 0;
                            if(payload == "macroeconomic") {
                                // for loop for iterating over all the results.
                                for(var i = 0;i<response.length;i++) {
                                    index = ((i+1) % 4);
                                    if(index == 0) {
                                        wrap = ".me-4";
                                    }
                                    else {
                                        wrap = ".me-" + index;
                                    }
                                    $(wrap).append(response[i]);
                                }
                            }   // end of macroecnomic else if
                            else if(payload == "financial") {
                                // for loop for iterating over all the results.
                                for(var i = 0;i<response.length;i++) {
                                    index = ((i+1) % 4);
                                    if(index == 0) {
                                        wrap = ".fd-4";
                                    }
                                    else {
                                        wrap = ".fd-" + index;
                                    }
                                    $(wrap).append(response[i]);
                                }
                            }   // end of financial else if
                            else if(payload == "sector") {
                                // for loop for iterating over all the results.
                                for(var i = 0;i<response.length;i++) {
                                    index = ((i+1) % 4);
                                    if(index == 0) {
                                        wrap = ".sb-4";
                                    }
                                    else {
                                        wrap = ".sb-" + index;
                                    }
                                    $(wrap).append(response[i]);
                                }
                            }   // end of sector else if
                            else if(payload == "startup") {
                                // for loop for iterating over all the results.
                                for(var i = 0;i<response.length;i++) {
                                    index = ((i+1) % 4);
                                    if(index == 0) {
                                        wrap = ".su-4";
                                    }
                                    else {
                                        wrap = ".su-" + index;
                                    }
                                    $(wrap).append(response[i]);
                                }
                            }   // end of startup else if
                        }   // end of else
                    },  
                    error: function(err) {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error during this operation. Please try again.</p>").fadeIn();   
                    },
                    complete: function() {
                        hideLoading();
                    }
                });
            }
    
            // for getting the modal containing the PDF.
            $('.div-main').delegate('.thumbnail-link', 'click', function() {
                var link = $(this);  // getting the clicked link here.
                var contentModal = $('#content-modal');
                var contentModalTitle = $('.content-modal-title');
                var contentModalBody = $('.content-modal-body');
                var pdfHeading = link.attr('data-name');
                var pdfLink = link.attr('data-url');
                pdfLink = pdfLink.replace('../', '');
                contentModalBody.html("<iframe src='" + pdfLink + "' width='100%' scrolling='no' frameborder='0'></iframe>");
                contentModalTitle.html(pdfHeading);
                contentModal.modal('show');    

                // for mouse click tracking
                incrementMouseClick();

                return false;
            });

            // for the subscribe request ajax call
            $('#form-subscribe').submit(function() {

                var txtSubscribeName = $('#txt-subscribe-name').val().trim();
                var txtSubscribeEmail = $('#txt-subscribe-email').val().trim();

                showLoading();
                $('#subscribe-modal').modal('hide');
                $.ajax({
                    type: "GET",
                    url: "AJAXFunctions.php",
                    data: {
                        no: "1", name: txtSubscribeName, email: txtSubscribeEmail
                    },
                    success: function(response) {
                        console.log(response);
                        var res = response.split(" ~~ ");
                        var resp = res[0];
                        var mail = res[1];

                        if(resp == "1") {  // success case for db insertion
                            if(mail == "-1") {
                                popup.children('p').remove();
                                popup.append("<p>Thank you for subscribing to M-R Compendium. We'll be in touch soon.</p>").fadeIn();           
                            }
                            else {
                                popup.children('p').remove();
                                popup.append("<p>Thank you for subscribing to M-R Compendium. Please check your inbox for all the news related to the courses offered by Mentored-Research.</p>").fadeIn();              
                            }
                        }
                        else {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error during this operation. Please try again.</p>").fadeIn();       
                        }
                    },
                    error: function(err) {
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error during this operation. Please try again.</p>").fadeIn();   
                    },
                    complete: function() {
                        hideLoading();
                    }
                });

                // for mouse click tracking
                incrementMouseClick();

                return false;
            });

            // for the modal of login button
            $('#btn-login').on('click', function() {
                incrementMouseClick();
                $('#login-modal').modal('show');
                return false;
            });

            // -------------------------------------- Facebook login ----------------------------------------
            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            // This is called with the results from from FB.getLoginStatus().
            function statusChangeCallback(response) {
                console.log('statusChangeCallback');
                console.log(response);
                // The response object is returned with a status field that lets the
                // app know the current login status of the person.
                // Full docs on the response object can be found in the documentation
                // for FB.getLoginStatus().
                if (response.status === 'connected') {
                    // Logged into your app and Facebook.
                    testAPI();
                } else if (response.status === 'not_authorized') {
                    // The person is logged into Facebook, but not your app.
                    document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
                } else {
                    // The person is not logged into Facebook, so we're not sure if
                    // they are logged into this app or not.
                    document.getElementById('status').innerHTML = 'Please log ' +
                    'into Facebook.';
                }
            }

            // This function is called when someone finishes with the Login
            // Button.  See the onlogin handler attached to it in the sample
            // code below.
            // function checkLoginState() {
            //     FB.getLoginStatus(function(response) {
            //       statusChangeCallback(response);
            //     });
            // }

            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '802885419774376',
                    cookie     : true,  // enable cookies to allow the server to access 
                                    // the session
                    xfbml      : true,  // parse social plugins on this page
                    version    : 'v2.2' // use version 2.2
                });

                // Now that we've initialized the JavaScript SDK, we call 
                // FB.getLoginStatus().  This function gets the state of the
                // person visiting this page and can return one of three states to
                // the callback you provide.  They can be:
                //
                // 1. Logged into your app ('connected')
                // 2. Logged into Facebook, but not your app ('not_authorized')
                // 3. Not logged into Facebook and can't tell if they are logged into
                //    your app or not.
                //
                // These three cases are handled in the callback function.

                // FB.getLoginStatus(function(response) {
                //     statusChangeCallback(response);
                // });
            };

            $('#btn-fb-login').on('click', function() {

                incrementMouseClick();
                FB.login(function(response) {
                    if (response.status === 'connected') {    // Logged into your app and Facebook.
                        login();
                    } 
                    else if (response.status === 'not_authorized') {   // The person is logged into Facebook, but not your app.
                        popup.children('p').remove();
                        popup.append("<p>Looks like you have not authorized M-R Compendium for your account access. Please try again.</p>").fadeIn();
                    } 
                    else {
                        popup.children('p').remove();
                        popup.append("<p>Please log into Facebook before continuing with M-R Compendium.</p>").fadeIn();  
                    }
                });
                
            });


            // Here we run a very simple test of the Graph API after login is
            // successful.  See statusChangeCallback() for when this call is made.
            function login() {
                FB.api('/me', function(fbResponse) {
                    
                    showLoading();
                    $('#login-modal').modal('hide');
                    $.ajax({
                        type: "GET",
                        url: "AJAXFunctions.php",
                        data: {
                            no: "2", userData: fbResponse, noClicks: $.cookie('track')
                        },
                        success: function(response) {
                            console.log(response);

                            // make the cases and show the user's name in the top navbar.
                            if(response == "0" || response == "1") {  // the user already exists.
                                // remove the login and subscribe button here and show welcome tag.
                                navbarLinks.addClass('hide');
                                navbarLinks.removeClass('show');
                                navbarInfo.addClass('show');
                                navbarInfoText.html("Welcome, " + fbResponse.name.split(" ")[0] + "!");
                            }
                            else {  // error case
                                popup.children('p').remove();
                                popup.append("<p>Oops! We encountered an error while logging you in. Please try again.</p>").fadeIn();
                            }

                        },
                        error: function() {
                            popup.children('p').remove();
                            popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();
                        },
                        complete: function() {
                            hideLoading();
                        }
                    });  // end of ajax request

                });   
            }   // end of login()

            // for the logout functionality
            $('#btn-logout').on('click', function() {
                $('#btnLogout').trigger('click');
                return false;
            });

        });   // end of document.ready function

    </script>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/client:platform.js" async defer></script>

    <script type="text/javascript">

        // for the loading overlay hiding and showing
        var overlay = $('#overlay').addClass('overlay-remove');
        function hideLoading() {
            overlay.removeClass('overlay-show');
            overlay.addClass('overlay-remove'); 
        }
        function showLoading() {
            overlay.removeClass('overlay-remove');
            overlay.addClass('overlay-show');
        }

        var gpLogin = function() {
        var myParams = {
            'clientid': '885746868563-d3p5dubviq8dra1726u6937njlus3a22.apps.googleusercontent.com',
            'cookiepolicy': 'single_host_origin',
            'callback': 'mySignInCallback',
            'scope': 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email',
            };
            gapi.auth.signIn(myParams);
        };

        var mySignInCallback = function(authResult) {
            if (authResult['status']['signed_in'] && authResult['status']['method'] === 'PROMPT') {
                gapi.client.load('plus', 'v1', loadProfile);
            }
        };

        var loadProfile = function() {
            var request = gapi.client.plus.people.get({ 'userId': 'me' });
            request.execute(loadProfileCallback);
        };

        var loadProfileCallback = function(obj) {
            var userData = {
                'name': obj.displayName,
                'email': obj.emails[0],
                'profile': obj.url
            };

            $('#overlay').removeClass('overlay-remove');
            $('#overlay').addClass('overlay-show');
            $('#login-modal').modal('hide');
            $.ajax({
                type: "GET",
                url: "AJAXFunctions.php",
                data: {
                    no: "2", userData: userData, noClicks: $.cookie('track')
                },
                success: function(response) {
                    console.log(response);
                    // make the cases and show the user's name in the top navbar.
                    if(response == "0" || response == "1") {  // the user already exists.
                        $('.navbar-links').addClass('hide');
                        $('.navbar-links').removeClass('show');
                        $('.navbar-info').addClass('show');
                        $('.navbar-info-text').html("Welcome, " + userData.name.split(" ")[0] + "!");
                    }
                    else {  // error case
                        popup.children('p').remove();
                        popup.append("<p>Oops! We encountered an error while logging you in. Please try again.</p>").fadeIn();
                    }

                },
                error: function() {
                    popup.children('p').remove();
                    popup.append("<p>Oops! We encountered an error while processing your request. Please try again.</p>").fadeIn();
                },
                complete: function() {
                    $('#overlay').removeClass('overlay-show');
                    $('#overlay').addClass('overlay-remove'); 
                }
            });   // end of ajax call.
        }

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

<body class="index" id="page-top">

    <img src="img/aluminiBack.png" style="width: 100%; z-index: -2; position: fixed;" />

    <div class="overlay-remove" id="overlay">
        <div class="overlay-img">
            <img src="img/load.gif" />
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
                <a class="navbar-brand page-scroll" href="#page-top">M-R Compendium</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right navbar-info hide">
                    <li role="presentation" class="dropdown">
                        <a class="navbar-info-text dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" id="btn-logout" style="color: black;">Logout</a>
                                <form id="form-logout" action="logout.php" style="display: none;" method="POST">
                                    <input type="submit" name="btnLogout" id="btnLogout" />
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-links">
                    <li>
                        <a href="#" id="btn-subscribe">Subscribe</a>
                    </li>
                    <li>
                        <a href="#" id="btn-login">Login</a>
                    </li>
                </ul>
            </div>   <!-- /.navbar-collapse -->
        </div>   <!-- /.container-fluid -->
    </nav>   <!-- ./ navigation -->

    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <!-- for all the categories in a list -->
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 category-div">
                    <ul class="list-inline text-center">
                        <li><a href="javascript:;" data-filter="macroeconomic" class="filter me-link">MacroEconomic Insights</a></li>
                        <li><a href="javascript:;" data-filter="financial" class="filter fd-link">Financial Deals</a></li>
                        <li><a href="javascript:;" data-filter="sector" class="filter sb-link">Sector Bites</a></li>
                        <li><a href="javascript:;" data-filter="startup" class="filter su-link">Startups</a></li>
                    </ul>
                </div>
            </div>   <!-- ./ row -->

            <!-- <hr> -->

            <div class="row">

                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 div-main macroeconomic-div" data-shown="0" data-dirty="0">
                    <h2 class="page-header">
                        Macro Economics
                    </h2>

                    <!-- for all the thumbnails -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <!-- for the first column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 me me-1">                             
                           <!-- data will come from ajax here -->
                        </div>   <!-- end of first column -->

                        <!-- for the second column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 me me-2">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of second column -->

                        <!-- for the third column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 me me-3">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of third column -->

                        <!-- for the fourth column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 me me-4">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of fourth column -->

                    </div>   <!-- end of thumbnails wrapper -->

                </div>   <!-- end of macroeconomic div -->


                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 div-main finance-div" data-shown="0" data-dirty="0">
                    <h2 class="page-header">
                        Financial Deals
                    </h2>

                    <!-- for all the thumbnails -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <!-- for the first column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 fd fd-1">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of first column -->

                        <!-- for the second column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 fd fd-2">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of second column -->

                        <!-- for the third column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 fd fd-3">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of third column -->

                        <!-- for the fourth column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 fd fd-4">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of fourth column -->

                    </div>   <!-- end of thumbnails wrapper -->

                </div>   <!-- end of financial div -->


                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 div-main sector-div" data-shown="0" data-dirty="0">
                    <h2 class="page-header">
                        Sector Bites
                    </h2>

                    <!-- for all the thumbnails -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <!-- for the first column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sb sb-1">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of first column -->

                        <!-- for the second column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sb sb-2">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of second column -->

                        <!-- for the third column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sb sb-3">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of third column -->

                        <!-- for the fourth column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sb sb-4">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of fourth column -->

                    </div>   <!-- end of thumbnails wrapper -->

                </div>   <!-- end of sector div -->


                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 div-main startup-div" data-shown="0" data-dirty="0">
                    <h2 class="page-header">
                        Startup
                    </h2>

                    <!-- for all the thumbnails -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        
                        <!-- for the first column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 su su-1">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of first column -->

                        <!-- for the second column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 su su-2">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of second column -->

                        <!-- for the third column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 su su-3">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of third column -->

                        <!-- for the fourth column -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 su su-4">                             
                            <!-- data will come from ajax here -->
                        </div>   <!-- end of fourth column -->

                    </div>   <!-- end of thumbnails wrapper -->

                </div>   <!-- end of startup div -->

            </div>  <!-- end of row -->

        </div>   <!-- ./ container-fluid -->
    </section>   <!-- ./ section -->

    <!-- for the footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Mentored-Research 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li> -->
                        <li><a class="social-link-fb"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a class="social-link-in"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">   <!-- TODO -->
                    <ul class="list-inline quicklinks">
                        <li><a href="#" class="quick-link" data-content="privacy">Privacy Policy</a>
                        </li>
                        <li><a href="#" class="quick-link" data-content="terms" >Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

     <!-- for the login modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="login-modal-title" id="myModalLabel">Log in to M-R Compendium</h4>
                </div>
                <div class="login-modal-body col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10"> 

                    <button id="btn-fb-login" class="btn btn-lg btn-block btn-social btn-facebook btn-social-login">   <!-- onclick="checkLoginState();" -->
                        <i class="fa fa-facebook"></i>
                        Facebook Login
                    </button> 

                    <button id="btn-google-login" class="btn btn-lg btn-block btn-social btn-google btn-social-login" onclick="gpLogin();">
                        <i class="fa fa-google"></i>
                        Google Login
                    </button>

                    <!-- <div id="my-signin2" class="google-hidden" ></div>  -->  <!--  -->

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- for the PDF(content) modal -->
    <div class="modal fade" id="content-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="content-modal-title" >Content here</h4>
                </div>

                <div class="content-modal-body"> 
                    
                </div>   <!-- end of content-modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>   <!-- end of subscribe-modal -->

    <!-- for the subscribe modal -->
    <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="subscribe-modal-title">Subscribe for M-R Compendium</h4>
                </div>
                <div class="subscribe-modal-body"> 
                    <br /><br />
                    <form id="form-subscribe">
                        <table class="table">
                            <tr>
                                <td>
                                    <input type="text" placeholder="Enter Name*" class="form-control" id="txt-subscribe-name" required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" placeholder="Enter Email Address*" class="form-control" id="txt-subscribe-email" required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" class="btn btn-lg btn-primary btn-block" id="btn-subscribe-submit" value="Subscribe" />
                                </td>
                            </tr>
                        </table>
                    </form>  <!-- end of form-subscribe -->
                </div>   <!-- end of subscribe-modal-body -->

                <br />

                <div class="modal-footer">
                    <!-- <div style="float:left;">
                        <a class="quicklinks" data-toggle="modal" data-target="#privacy-policy-modal">Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a class="quicklinks" data-toggle="modal" data-target="#terms-conditions-modal">Terms of Use</a>
                    </div> -->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>   <!-- end of subscribe-modal -->

     <!-- these are for the privacy policy and the terms and conditions modals -->
    <div class="modal fade" id="privacy-policy-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">
                Privacy Policy
            </h4>
          </div>
          <div class="modal-body">
            <b>This Privacy Policy governs the manner in which Mentored-Research collects, uses, maintains and discloses information collected from users (each, a "User") of the http://www.mentored-research.com website ("Site"). This privacy policy applies to the Site and all products and services offered by Mentored-Research. </b>
              <br /><br />
<b>Personal identification information</b>
              <br />
We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, place an order, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address, phone number, credit card information. Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.
              <br /><br />
<b>Non-personal identification information</b>
              <br />
We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.
              <br /><br />
<b>Web browser cookies</b>
              <br />
Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.
              <br /><br />
<b>How we use collected information</b>
              <br />
Mentored-Research may collect and use Users personal information for the following purposes:
              <br />
    <ul>
        <li>
            To improve customer service  <br />
            Information you provide helps us respond to your customer service requests and support needs more efficiently.
        </li>
        <li>
            To personalize user experience  <br />
            We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.
        </li>
        <li>
            To improve our Site <br />
    We may use feedback you provide to improve our products and services.
        </li>
        <li>
            To process payments <br />
    We may use the information Users provide about themselves when placing an order only to provide service to that order. We do not share this information with outside parties except to the extent necessary to provide the service.
        </li>
        <li>
            To send periodic emails  <br />
    We may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests.
        </li>
    </ul>
             <br />
<b>How we protect your information</b>
              <br />
We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.
              <br />
Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures.
              <br /><br />
<b>Sharing your personal information</b>
              <br />
We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.
              <br /><br />
<b>Changes to this privacy policy</b>
              <br />
Mentored-Research has the discretion to update this privacy policy at any time. When we do, we will post a notification on the main page of our Site and send you an email. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.
              <br /><br />
<b>Your acceptance of these terms</b>
              <br />
By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.
              <br /><br />
<b>Contacting us</b>
              <br />
If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at: <br />
Mentored-Research  <br />
<code>http://www.mentored-research.com </code><br />
<code>info@mentored-research.com </code><br />
              <br />
This document was last updated on November 26, 2014  <br />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- this is for the terms and conditions modal -->
    <div class="modal fade" id="terms-conditions-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Terms and Conditions</h4>
          </div>
          <div class="modal-body">
            <b>TERMS OF SERVICE</b>
              <br /><br />
This website is operated by Mentored-Research. Throughout the site, the terms “we”, “us” and “our” refer to Mentored-Research. Mentored-Research offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.

              <br /><br />

By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply  to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.

              <br /><br />

Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.

              <br /><br />

Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.

              <br /><br />

<b>SECTION 1 - ONLINE STORE TERMS</b>
              <br />
By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.
              <br />
You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws).
              <br />
You must not transmit any worms or viruses or any code of a destructive nature.
              <br />
A breach or violation of any of the Terms will result in an immediate termination of your Services.
              <br /><br />

<b>SECTION 2 - GENERAL CONDITIONS</b>
              <br />
We reserve the right to refuse service to anyone for any reason at any time.
              <br />
You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks.
              <br />
You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.
              <br />
The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.
              <br /><br />

<b>SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</b>
              <br />
We are not responsible if information made available on this site is not accurate, complete or current. The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.
              <br />
This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only. We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.
              <br /><br />


<b>SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES</b>
              <br />
Prices for our products are subject to change without notice.
              <br />
We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.
              <br />
We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.
              <br /><br />

<b>SECTION 5 - PRODUCTS OR SERVICES (if applicable)</b>
              <br />
Certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy.
              <br />
We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your computer monitor's display of any color will be accurate.
              <br />
We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer. All descriptions of products or product pricing are subject to change at anytime without notice, at the sole discretion of us. We reserve the right to discontinue any product at any time. Any offer for any product or service made on this site is void where prohibited.
              <br />
We do not warrant that the quality of any products, services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.
              <br /><br />

<b>SECTION 6 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</b>
              <br />
We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e-mail and/or billing address/phone number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.
              <br />
You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed.
              <br />
For more detail, please review our Returns Policy.
              <br /><br />

<b>SECTION 7 - OPTIONAL TOOLS</b>
              <br />
We may provide you with access to third-party tools over which we neither monitor nor have any control nor input.
              <br />
You acknowledge and agree that we provide access to such tools ”as is” and “as available” without any warranties, representations or conditions of any kind and without any endorsement. We shall have no liability whatsoever arising from or relating to your use of optional third-party tools.
              <br />
Any use by you of optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s).
              <br />
We may also, in the future, offer new services and/or features through the website (including, the release of new tools and resources). Such new features and/or services shall also be subject to these Terms of Service.
              <br /><br />

<b>SECTION 8 - THIRD-PARTY LINKS</b>
              <br />
Certain content, products and services available via our Service may include materials from third-parties.
              <br />
Third-party links on this site may direct you to third-party websites that are not affiliated with us. We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third-parties.
              <br />
We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party's policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.
              <br /><br />

<b>SECTION 9 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</b>
              <br />
If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, 'comments'), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments.
              <br />
We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party’s intellectual property or these Terms of Service.
              <br />
You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website. You may not use a false e-mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.
              <br /><br />


<b>SECTION 10 - PERSONAL INFORMATION</b>
              <br />
Your submission of personal information through the store is governed by our Privacy Policy. To view our Privacy Policy.

              <br /><br />

<b>SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS</b>
              <br />
Occasionally there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order).
              <br />
We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.
              <br /><br />


<b>SECTION 12 - PROHIBITED USES</b>
              <br />
In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.
              <br />
              <br />

<b>SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY</b>
              <br />
We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free.
              <br />
We do not warrant that the results that may be obtained from the use of the service will be accurate or reliable.
              <br />
You agree that from time to time we may remove the service for indefinite periods of time or cancel the service at any time, without notice to you.
              <br />
You expressly agree that your use of, or inability to use, the service is at your sole risk. The service and all products and services delivered to you through the service are (except as expressly stated by us) provided 'as is' and 'as available' for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement.
              <br />
In no case shall Mentored-Research, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the service or any products procured using the service, or for any other claim related in any way to your use of the service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the service or any content (or product) posted, transmitted, or otherwise made available via the service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.
              <br /><br />


<b>SECTION 14 - INDEMNIFICATION</b>
              <br />
You agree to indemnify, defend and hold harmless Mentored-Research and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys’ fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.
              <br /><br />

<b>SECTION 15 - SEVERABILITY</b>
              <br />
In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.
              <br /><br />

<b>SECTION 16 - TERMINATION</b>
              <br />

The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes.
              <br />
These Terms of Service are effective unless and until terminated by either you or us. You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site.
              <br />
If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).
              <br />
              <br />

<b>SECTION 17 - ENTIRE AGREEMENT</b>
              <br />
The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision.
              <br />
These Terms of Service and any policies or operating rules posted by us on this site or in respect to The Service constitutes the entire agreement and understanding between you and us and govern your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service).
              <br />
Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.
              <br /><br />


<b>SECTION 18 - GOVERNING LAW</b>
              <br />
These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of BITS-Pilani, Hyderabad Campus Hyderabad Telangana India 500078.
              <br />
              <br />

<b>SECTION 19 - CHANGES TO TERMS OF SERVICE</b>
              <br />
You can review the most current version of the Terms of Service at any time at this page.
              <br />
We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.
              <br /><br />


<b>SECTION 20 - CONTACT INFORMATION</b>
              <br />
Questions about the Terms of Service should be sent to us at <code>info@mentored-research.com</code>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.min.js"></script>

</body>

</html>
