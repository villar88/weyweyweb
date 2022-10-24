<?php

define("DOCUMENT_ROOT",$_SERVER['DOCUMENT_ROOT']);
include  DOCUMENT_ROOT . '/inc/config.php';

?>
<!doctype html>
<html itemscope itemtype="https://schema.org/Event" lang="en">
    <head>
    <script type="text/javascript">
        /** This section is only needed once per page if manually copying **/
        if (typeof MauticSDKLoaded == 'undefined') {
            var MauticSDKLoaded = true;
            var head            = document.getElementsByTagName('head')[0];
            var script          = document.createElement('script');
            script.type         = 'text/javascript';
            script.src          = 'https://mautic.jonthebeach.com/media/js/mautic-form.js?v7e0bcdd6';
            script.onload       = function() {
                MauticSDK.onLoad();
            };
            head.appendChild(script);
            var MauticDomain = 'https://mautic.jonthebeach.com';
            var MauticLang   = {
                'submittingMessage': "Please wait..."
            }
        }else if (typeof MauticSDK != 'undefined') {
            MauticSDK.onLoad();
        }
    </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-73182208-1', 'auto');
            ga('send', 'pageview');
        </script>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>Wey Wey Web</title>
        <meta name="description" content="A Yay-Yay conf for UI developers. Web, Mobile, UX, JS, and loads of fun!">
        <meta name="keywords" content="Web conference, Javascript conference, UI conference">
        <meta name="author" content="Wey Wey Web">

        <!-- Facebook sharing properties - Open graph -->
        <meta property='og:title' content='Wey Wey Web'>
        <meta property='og:image' content='https://weyweyweb.com/assets/img/miniatura_www.png'>
        <meta property='og:image:url' content='https://weyweyweb.com/assets/img/miniatura_www.png'>
        <meta property='og:description' content='A Yay-Yay conf for UI developers. Web, Mobile, UX, JS, and loads of fun! - 15th-16th Dec 2022 Málaga, Spain'>
        <meta property='og:url' content='https://weyweyweb.com/'>

        <!-- Twitter sharing protocol -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@WeyWeyWeb" />
        <meta name="twitter:title" content="Wey Wey Web" />
        <meta name="twitter:description" content="A Yay-Yay conf for UI developers. Web, Mobile, UX, JS, and loads of fun!.- 15th-16th Dec 2022 Málaga, Spain" />
        <meta name="twitter:image" content="https://weyweyweb.com/assets/img/miniatura_www.png" />

        <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
        <link rel="shortcut icon" href="/assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.jpg">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72.jpg">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple-touch-icon-114x114.jpg">
        <link rel="apple-touch-icon-precomposed" href="/assets/img/apple-touch-icon.jpg">

        <link href='https://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,700' rel='stylesheet' type='text/css'>


        <!-- bootstra -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />


        <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="all" />
        <link rel="stylesheet" href="assets/css/style.css" id="mainstyle" type="text/css" media="all" />

        <!--[if (gte IE 9) | (!IE)]><!-->
        <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>

        <!--<![endif]-->
        <!--[if lt IE 9]>
              <script src="assets/js/html5.js"></script>
              <script src="assets/js/respond.min.js"></script>
          <![endif]-->
        <!-- Twitter universal website tag code -->
        <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
        <script type="text/javascript">twttr.conversion.trackPid('nunk9', {tw_sale_amount: 0, tw_order_quantity: 0});</script>

        <!-- End Twitter universal website tag code -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "url": "https://www.weyweyweb.com",
          "logo": "https://www.jonthebeach.com/assets/img/logo.png"
        }
        </script>
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body id="index" style="background-color:#000040">
        <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nunk9&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
        <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nunk9&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
        </noscript>
        <!-- Preloader -->
        <div id="mask">
            <img id="loader" src="assets/img/preloader.gif" alt="preloader" />
        </div>
        <div class="video-background" id="videoContainer">
            <div style="position:relative">
                <button onclick="toggleVideo()">X</button>
                <video id="video" width="100%" controls="controls">
                    <source src="./assets/files/Trailer2022_3.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
        </div>
        <div class="tickets-background " id="ticketsContainer">
            <!-- <button onclick="toggleTickets()">X</button> -->
            <!-- Ticket Tailor Widget. Paste this into your website where you want the widget to appear. Do not change the code or the widget may not work properly. -->
                <div class="tt-widget">
                    <div class="tt-widget-fallback"><p><a href="https://www.tickettailor.com/checkout/new-session/id/1581594/chk/ed23/" target="_blank">Click here to buy tickets</a><br /><small><a href="https://www.tickettailor.com?rf=wdg_35545" class="tt-widget-powered">Sell tickets online with Ticket Tailor</a></small></p></div><script src="https://cdn.tickettailor.com/js/widgets/min/widget.js" data-url="https://www.tickettailor.com/checkout/new-session/id/1581594/chk/ed23/" data-type="inline" data-inline-minimal="true" data-inline-show-logo="false" data-inline-bg-fill="true" data-inline-inherit-ref-from-url-param="" data-inline-ref=""></script>
                
            <button onclick="toggleTickets()">X</button>
            </div>
            <!-- End of Ticket Tailor Widget -->
        </div>
        <div class="become-background" id="becomeContainer" >
            <div style="position:relative">
            <button onclick="toggleBecome()" class="close">X</button>
            <h3>Become a sponsor</h3>
            <style type="text/css" scoped>
            .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
            .mauticform-innerform {}
            .mauticform-post-success {}
            .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
            .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
            .mauticform-error { margin-bottom: 10px; color: red; }
            .mauticform-message { margin-bottom: 10px;color: green; }
            .mauticform-row { display: block; margin-bottom: 20px; }
            .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
            .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: " *"; display: inline; }
            .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
            .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
            .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
            .mauticform-checkboxgrp-row {}
            .mauticform-checkboxgrp-label { font-weight: normal; }
            .mauticform-checkboxgrp-checkbox {}
            .mauticform-radiogrp-row {}
            .mauticform-radiogrp-label { font-weight: normal; }
            .mauticform-radiogrp-radio {}
            .mauticform-button-wrapper .mauticform-button.btn-default, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default { color: #5D6C7C;background-color: #FFFFFF;border-color: #DDDDDD;}
            .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
            .mauticform-button-wrapper .mauticform-button.btn-default[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] { background-color: #FFFFFF; border-color: #DDDDDD; opacity: 0.75; cursor: not-allowed; }
            .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }
            </style><style type="text/css" scoped>
                .mauticform-field-hidden { display:none }
            </style>

            <style type="text/css" scoped>
            .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
            .mauticform-innerform {}
            .mauticform-post-success {}
            .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
            .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
            .mauticform-error { margin-bottom: 10px; color: red; }
            .mauticform-message { margin-bottom: 10px;color: green; }
            .mauticform-row { display: block; margin-bottom: 20px; }
            .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
            .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: " *"; display: inline; }
            .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
            .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
            .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
            .mauticform-checkboxgrp-row {}
            .mauticform-checkboxgrp-label { font-weight: normal; }
            .mauticform-checkboxgrp-checkbox {}
            .mauticform-radiogrp-row {}
            .mauticform-radiogrp-label { font-weight: normal; }
            .mauticform-radiogrp-radio {}
            .mauticform-button-wrapper .mauticform-button.btn-default, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
            .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
            .mauticform-button-wrapper .mauticform-button.btn-default[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] { background-color: #ffffff; border-color: #dddddd; opacity: 0.75; cursor: not-allowed; }
            .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }
            </style><style type="text/css" scoped>
                .mauticform-field-hidden { display:none }
            </style>

            <div id="mauticform_wrapper_sponsorwwweb" class="mauticform_wrapper">
                <form autocomplete="false" role="form" method="post" action="https://mautic.jonthebeach.com/form/submit?formId=5" id="mauticform_sponsorwwweb" data-mautic-form="sponsorwwweb" enctype="multipart/form-data">
                    <div class="mauticform-error" id="mauticform_sponsorwwweb_error"></div>
                    <div class="mauticform-message" id="mauticform_sponsorwwweb_message"></div>
                    <div class="mauticform-innerform">
                        
                    <div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

                        <div id="mauticform_sponsorwwweb_full_name" data-validate="full_name" data-validation-type="text" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required">
                            <input id="mauticform_input_sponsorwwweb_full_name" name="mauticform[full_name]" value="" placeholder="Full Name" class="mauticform-input" type="text">
                            <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                        </div>

                        <div id="mauticform_sponsorwwweb_email" data-validate="email" data-validation-type="email" class="mauticform-row mauticform-email mauticform-field-2 mauticform-required">
                            <input id="mauticform_input_sponsorwwweb_email" name="mauticform[email]" value="" placeholder="Email" class="mauticform-input" type="email">
                            <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                        </div>

                        <div id="mauticform_sponsorwwweb_phone" data-validate="phone" data-validation-type="tel" class="mauticform-row mauticform-tel mauticform-field-3 mauticform-required">
                            <input id="mauticform_input_sponsorwwweb_phone" name="mauticform[phone]" value="" placeholder="Phone Number" class="mauticform-input" type="tel">
                            <span class="mauticform-errormsg" style="display: none;">This is required.</span>
                        </div>

                        <div id="mauticform_sponsorwwweb_submit" class="mauticform-row mauticform-button-wrapper mauticform-field-4" style="display:flex">
                            <button type="submit" name="mauticform[submit]" id="mauticform_input_sponsorwwweb_submit" value="" class="mauticform-button btn btn-default">Download</button>
                        </div>
                        </div>
                    </div>

                    <input type="hidden" name="mauticform[formId]" id="mauticform_sponsorwwweb_id" value="5">
                    <input type="hidden" name="mauticform[return]" id="mauticform_sponsorwwweb_return" value="">
                    <input type="hidden" name="mauticform[formName]" id="mauticform_sponsorwwweb_name" value="sponsorwwweb">

                    </form>
                </div>
            </div>
        </div>
        <header id="mobileheader" class="navigation-bar-header light visible-xs"></header>
        <!-- Hero Section -->
        <section id="hero" class="light">
            <!-- <div class="overlay"></div> -->
            <div class="container">
                <div class="home-bg">
                    <nav class="navigation navigation-social">
                        <ul class="navigation-bar top-icons">
                            <li><a target="_blank" title="Twitter" href="https://twitter.com/WeyWeyWeb"><span class="fa fa-twitter"></span></a></li>
                            <!-- <li><a href="#"><span class="fa fa-facebook"></span></a>
                            <li><a href="#"><span class="fa fa-github"></span></a>
                            <li><a href="#"><span class="fa fa-vimeo-square"></span></a>-->
                            <!--<li><a target="_blank" title="Flickr" href="https://flickr.com"><span class="fa fa-flickr"></span></a></li>-->
                            <!-- <li><a href="#"><span class="fa fa-instagram"></span></a>-->
                        </ul>
                    </nav>
                    <div class="hero-content text-center ">
                        <div class="hero-small">
                            <hr /><span><span class="fa fa-calendar"></span>15th-16th Dec 2022
                                <div class="sep"></div> <span class="fa fa-map-marker"></span>Malaga, Spain</span>
                            <hr />
                        </div>
                        <div class="hero-big">Wey Wey Web</div>
                        <div class="hero-normal">A Yay-Yay conf for <strong>UI lovers</strong></div>
                        <?php //if ($_SERVER['REMOTE_ADDR'] != '62.14.233.3----' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1'){ ?>
<!--                            <a href="#" class="btn btn-lg btn-3d watch-realtime">
                                <i class="fa fa-play-circle fa-2x"></i>
                                <span>Watch live</span>
                            </a>
                            <div class="hidden ">
                                <div class="embed-container container-watch-realtime">
                                    <iframe src="https://channel9.msdn.com/posts/Better-Together-PowerShell-Desired-State-Configuration-DSC--Puppet/player" width="960" height="540" style="max-width:100%" allowFullScreen frameBorder="0"></iframe>
                                    <iframe src="https://channel9.msdn.com/Events/Microsoft-Spain-Events/J-on-the-Beach/liveembed" width="960" height="540" allowFullScreen frameBorder="0"></iframe>
                                </div>
                            </div>-->
                        <?php //}else{  ?>
<!--                            <a href="https://channel9.msdn.com/Events/Microsoft-Spain-Events/J-on-the-Beach/liveembed" target="_blank" class="btn btn-lg btn-3d">
                                <i class="fa fa-play-circle fa-2x"></i>
                                <span>Watch live</span>
                            </a>-->
                            <button class="btn btn-lg btn-3d" onclick="toggleVideo()">
                                <i class="fa fa-play-circle fa-2x"></i>
                                <span>Watch video</span>
                            </button>
                            <button class="btn btn-lg btn-3d but-tickets" onclick="toggleTickets()">
                                <span>Get tickets</span>
                            </button>
                        <?php //}?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
        <!-- Start Countdown -->
        <!-- <section>
        <div class="countdown">
                                <div>
                                    <h3>0</h3>
                                    <p>MONTHS</p>
                                </div>
                                <div>
                                    <h3>0</h3>
                                    <p>WEEKS</p>
                                </div>
                                <div>
                                    <h3>0</h3>
                                    <p>DAYS</p>
                                </div>
                                <div>
                                    <h3>0</h3>
                                    <p>HOURS</p>
                                </div>
                                <div>
                                    <h3>0</h3>
                                    <p>MINUTES</p>
                                </div>
                                <div>
                                    <h3>0</h3>
                                    <p>SECONDS</p>
                                </div>
                            </div>
        </section> -->
        <!-- End Countdown -->
        <!-- Header -->
        <header id="header" class="navigation-bar-header light hidden-xs">
            <div class="container">
                <nav class="navigation">
                    <div class="navigation-txt visible-xs" data-toggle="dropdown">Home</div>
                    <button class="navigation-toggle visible-xs" aria-label="menunavigation" type="button" data-toggle="dropdown">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="navigation-bar navigation-bar-left">
                        <li><a href="#about">About</a></li>
                        <!--<li><a href="#stat">Number Facts</a></li>-->
                        <!-- <li><a href="#schedule">Schedule</a></li> -->
                        <!-- <li><a href="#speakers">Speakers</a></li> -->
                        <!-- <li><a href="/sections/videos.php">Videos</a></li> -->
                        <!-- <li><a href="#images">Pictures</a></li> -->
                        <!-- <li><a href="#blog">Blog</a></li> -->
                        <!-- <li><a href="#sponsors">Sponsors</a></li> -->
                        <!--<li><a href="#">Schedule</a></li>-->
                        <li><a href="#speakers">Speakers</a></li>
                        <li><a href="#prices">Prices</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#map">Contact</a></li>
                        <li  class="buy-tickets"><button onclick="toggleTickets()">Buy tickets</button></li>
                        <!-- <li class="navigation-item dropdown"><a href="/sections/jobs/jobs.php">Jobs</a>
                          <ul class="dropdown-menu">
                              <li class="navigation-item"><a href='/sections/jobs/jobs_theworkshop.php' class="navigation-link">The Workshop</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_ravenpack.php' class="navigation-link">Ravenpack</a></li>
                                <li class="navigation-item"><a href='#' class="navigation-link">Valo</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End Header -->
        <!-- About Section -->
        <section id="about" class="section dark" style="padding:60px 0">
            <div class="container">
                <h3>Wey Wey Web </h3>
                <div class="sub-title" style="margin-bottom:50px"> Whaaaat the WEB! <span class="highlight"> </span></div>
                <br />
                <br />
                <section class="nav-tabs-simple">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#htmlcss" data-toggle="tab"><i class="icon" data-feather="loader"></i>
                        The Event</a></li>
                        <li><a href="#jquery" data-toggle="tab"><i class="icon" data-feather="cpu"></i>Technical talks</a></li>
                        <li><a href="#php" data-toggle="tab"><i class="icon" data-feather="users"></i> About us</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="htmlcss">
                            <article class="row">
                                <h6>The Event</h6>
                                <div class="col-md-5 col-sm-5 animated hiding tab-img" data-animation="fadeInLeft" data-delay="500">
                                    <img class="img-responsive" src="assets/img/event.webp" alt="event_environment" />
                                </div>
                                <div class="col-md-6 col-sm-6 text-left animated hiding tab-text" data-animation="fadeInRight" data-delay="500">
                                    <h6>The Event</h6>
                                    <p>In only <strong>2 days</strong> you will be able to check the pulse of the latest trends with regards to <span class="highlight">Web Technologies.</span> Below are the main topics that will be covered in <span class="highlight">Wey Wey Web</span>.</p>
                                    <ul class="sub-list">
                                        <li><i class="icon" data-feather="terminal"></i>Web programming</li>
                                        <li><i class="icon" data-feather="code"></i>JS frameworks</li>
                                        <li><i class="icon" data-feather="pen-tool"></i>Web design UX/UI</li>
                                        <li><i class="icon" data-feather="codesandbox"></i>Product design</li>
                                        <li><i class="icon" data-feather="smartphone"></i>Mobile development</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="jquery">
                            <article class="row">
                                <h6>Technical talks</h6>
                                <div class="col-md-6 col-sm-6 text-left animated hiding tab-text" data-animation="fadeInLeft" data-delay="500">
                                    <h6>Technical talks</h6>
                                    <p>Wey Wey Web is all about different technologies, best practices, and methodologies related to <strong> Web development</strong>. No matter if you are into <span class="highlight">Javascript, PHP, Python, WASM, Java or C#</span>. If you are dealing with the User Interface, then THIS IS YOUR PLACE!</p>
                                    <ul class="sub-list">
                                        <li><i class="icon" data-feather="git-pull-request"></i>Web architectures and best practices</li>
                                        <li><i class="icon" data-feather="tool"></i>Engineering methodologies</li>
                                        <li><i class="icon" data-feather="clock"></i>Web Performance</li>
                                    </ul>
                                </div>
                                <div class="col-md-5 col-sm-5 animated hiding tab-img" data-animation="fadeInRight" data-delay="500">
                                    <img class="img-responsive" src="assets/img/technicaltalks.webp" alt="techtalks" />
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="php">
                            <article class="row">
                                <h6>About Us</h6>
                                <div class="col-md-5 col-sm-5 animated hiding tab-img" data-animation="fadeInLeft" data-delay="500">
                                    <img class="img-responsive" src="assets/img/aboutsus.webp" alt="AboutUs" />
                                </div>
                                <div class="col-md-6 col-sm-6 text-left animated hiding tab-text" data-animation="fadeInRight" data-delay="500">
                                    <h6>About Us</h6>
                                    <p>This event is organized by the <strong>J On The Beach </strong> team with the support of <strong>Yes We Tech</strong>.
                                    <p>This is a <strong>non-profit</strong> event meaning that all funds raised will be spent to cover the expenses.
                                    <p><span class="highlight">Inclusion and underrepresented community in tech.</span> This event is committed to social inclusion, that's why we encourage underrepresented groups to take part in this conference as attendees as well as speakers.
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- End About Section -->
        <!-- Stat Section -->
        <section id="stat" class="section light">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="0">
                            <div class="stat"><span class="value" data-from="0" data-to="20">20+</span>+</div>
                            <div class="stat-info">speakers</div>
                            <hr />
                            <p class="small">International speakers from leading companies sharing their best practices.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="500">
                            <div class="stat"><span class="value" data-from="0" data-to="2">2</span></div>
                            <div class="stat-info">keynotes</div>
                            <hr />
                            <p class="small">World class creators of technologies will open and close the event.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="1000">
                            <div class="stat"><span class="value" data-from="0" data-to="450">450+</span>+</div>
                            <div class="stat-info">attendees</div>
                            <hr />
                            <p class="small">Mingle with top creators, promising developers, and UI professionals.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="1500">
                            <div class="stat"><span class="value" data-from="0" data-to="2">2</span></div>
                            <div class="stat-info">days of fun</div>
                            <hr />
                            <p class="small">YAAAAAAAY!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Stat Section -->


             <!-- schedule section start here -->
    <!--<div class="schedule__section">-->
        <!--<div class="container">
            <div class="schedule__inner">
                <div class="schedule__title text-center">
                    <h2>Schedule</h2>
                    <p>Algun Copi?</p>
                </div>

                <!--<div class="schedule__tab"-->
                    
                    <!--<div class="tab__head">
                        <a href="#orange" data-tab="orange" class="b-nav-tab active">
                            Day 1. Thurday December 15
                        </a>
                        <a href="#green" data-tab="green" class="b-nav-tab">
                            Day 2. Friday Devember 15
                        </a>
                    </div>-->
                      

                    <!--<div class="tab__body">
                        <div id="orange" class="b-tab active">

                            <table class="tab__table">
                                <thead>
                                    <tr>
                                        <th><i class="fa-regular fa-clock"></i></th>
                                        <th>Hall 1</th>
                                        <th>Hall 2</th>
                                        <th>Hall 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>08:00 <br> 09:00</td>
                                        <td colspan="3">Registration & Coffee</td>
                                    </tr>

                                    <tr>
                                        <td>09:00 <br> 10:00</td>
                                        <td colspan="3">Opening</td>
                                    </tr>

                                    <tr>
                                        <td>10:00 <br> 11:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #0ECDCF;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(173, 93, 240);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgba(255, 255, 17, 0.993);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        
                                    
                                    </tr>

                                    <tr>
                                        <td>11:00 <br> 12:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #FF0099;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgba(255, 255, 17, 0.993);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(104, 255, 17);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        
                                    
                                    </tr>

                                    <tr>
                                        <td>12:00 <br> 13:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #0e4bcf;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(214, 54, 75);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #0ECDCF;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13:00 <br> 15:00</td>
                                        <td colspan="3">Lunch</td>
                                    </tr>

                                    <tr>
                                        <td>15:00 <br> 16:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(214, 54, 75);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(104, 255, 17);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(173, 93, 240);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>16:00 <br> 17:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgba(255, 255, 17, 0.993);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #0e4bcf;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #FF0099;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>17:00 <br> 18:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(173, 93, 240);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color:#0ECDCF;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(214, 54, 75);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>18:00 <br> 19:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color:rgb(173, 93, 240);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #FF0099;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #0e4bcf;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>19:00 <br> 20:00</td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: #0ECDCF;">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgba(255, 255, 17, 0.993);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="speaker__td d-flex justify-content-between">
                                                <div class="td__content text-start">
                                                    <p style="color: rgb(104, 255, 17);">Talk's Name</p>
                                                    <span>Speaker's Name</span>
                                                </div>
                                                <div class="td__rating">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> + 20:00</td>
                                        <td colspan="3">Party</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div id="green" class="b-tab">
                            <!-- second tab start here -->
                        </div>
                    </div>-->

                    <!--<div class="schedule__footer mt-4 text-white d-flex justify-content-between">
                        <div class="foot__left d-flex justify-content-between">
                            <div class="component__one">
                                <p>Web Programming</p>
                                <span>JavaScript FrameWorks</span>
                                <p>Web Design UI/UX</p>
                            </div>
                            <div class="component__one">
                                <p>Software Architecture</p>
                                <p>Engineering Methologies</p>
                            </div>
                            <div class="component__one">
                                <p>Product</p>
                                <p>Mobile</p>
                            </div>
                        </div>
                        <div class="foot__right">
                            <div class="component__two">
                                <p><span><i class="fa-solid fa-star"></i></span> <span>Everybody</span> </p>
                                <p><span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span> <span>Intermediate</span></p>
                                <p><span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span> <span>Advanced</span></p>
                            </div>
                        </div>
                    </div>-->
                      
                </div>
            </div>
        </div>-->
    </div>-->
    <!-- schedule section end here -->                   

        
        <!-- Schedule Section -->
        <section id="schedule" class="section dark" style="display:none">
            <div class="container">
                <div class="icon-wrap"><span class="icon icon-active icon-text-hierarchy-07"></span></div>
                <h3>Schedule</h3>
                <div class="sub-title">Wey Wey Web</div>
                <br />
                <div class="sub-title" id="msj-nodisplayed-schedule"><em>The resolution from this device doesn't support the visibility of the schedule. Try it on landscape mode or on a higher resolution.</em></div>
                <br />
                <br />
                <section class="nav-tabs-default" id="schedule-table">
                    <!-- Parent Nav Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#DayOne" data-toggle="tab">
                                <div class="title">Day 1</div>
                                <div class="subtitle">Friday May 20, 2016</div>
                            </a>
                        </li>
                        <li>
                            <a href="#DayTwo" data-toggle="tab">
                                <div class="title">Day 2</div>
                                <div class="subtitle">Saturday May 21, 2016</div>
                            </a>
                        </li>
                    </ul>

                    <!-- Parent Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="DayOne">
                            <table class="table">
                                <thead>
                                    <tr class="warning">
                                        <th>
                                            <i class="fa fa-clock-o"></i>
                                        </th>
                                        <th>Biznaga hall</th>
                                        <th>Gazpachuelo hall</th>
                                        <th>Espetos hall</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="row-time active">08:00 - 09:00</td>
                                        <td class="active common-event" colspan="3">Registration & coffee</td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">09:00 - 09:10</td>
                                        <td class="active common-event" colspan="3">Opening</td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">09:10 - 10:00</td>
                                        <td class="active common-event colorblue" colspan="3">
                                          <span title="Intermediate" class="talk_level intermediate">I</span>
                                            Opening keynote by
                                            <a href="#" class="event-speaker opening-speaker opening" data-name="Sergey Bykov">
                                                Sergey Bykov
                                            </a>
                                            at Biznaga hall
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">10:10 - 11:00</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">Advanced search for your legacy application</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Advanced search for your legacy application</h5>
                                                    <p class="no-font-style">How do you mix SQL and NoSQL worlds without starting a messy revolution?
                                                      <br>
                                                      This live coding talk will show you how to add Elasticsearch to your legacy application without changing all your current development habits. Your application will have suddenly have advanced search features, all without the need to write complex SQL code!
                                                      <br>
                                                      David will start from a RestX, Hibernate and Postgresql/MySQL based application and will add a complete integration of Elasticsearch, all live from the stage during his presentation.
                                                    </p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/@dadoonet" class="event-speaker" data-name="David Pilato">
                                                    <span>David Pilato</span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Web">
                                                <a href="#" class="event-title">Mining Big Data Streams with Apache SAMOA</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Mining Big Data Streams with Apache SAMOA</h5>
                                                    <p class="no-font-style">In this talk, we present Apache SAMOA, an open-source platform for mining big data streams with Apache Flink, Storm and Samza. Real time analytics is becoming the fastest and most efficient way to obtain useful knowledge from what
                                                        is happening now, allowing organizations to react quickly when problems appear or to detect new trends helping to improve their performance. Apache SAMOA includes algorithms for the most common machine learning tasks such as
                                                        classification and clustering. It provides a pluggable architecture that allows it to run on Apache Flink, but also with other several distributed stream processing engines such as Storm and Samza.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/abifet" class="event-speaker" data-name="Albert Bifet">
                                                    <span>
                                                        Albert Bifet                             </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">People-first Engineering</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>People-first Engineering</h5>
                                                    <p class="no-font-style">When we talk about devops we often focus on tools, processes and the 'how' of engineering practice. What's missing is the 'why'. Why do we use a particular tool? Why do we share techniques across fields of specialty? Why do we do what we do as engineers?
                                                    I suggest that the engine driving devops practice is human potential, and discuss 'people-first' approaches that improve the quality of our work and teams.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/blakeirvin" class="event-speaker" data-name="Blake Irvin">
                                                    <span>
                                                        Blake Irvin                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">11:10 - 12:00</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">A Java Implementer’s Guide to Boosting Apache Spark Performance</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>A Java Implementer’s Guide to Boosting Apache Spark Performance</h5>
                                                    <p class="no-font-style">Apache Spark has rocked the big data landscape, quickly becoming the largest open source big data community with over 750 contributors from more than 200 organizations. Spark's core tenants of speed, ease of use, and its unified
                                                        programming model fit neatly with the high performance, scalable, and manageable characteristics of modern Java runtimes. In this talk we introduce the Spark programming model, and describe some unique Java runtime capabilities
                                                        in the JIT, fast networking, serialization techniques, and GPU off-loading that deliver the ultimate big data platform for solving business problems. We will show how solutions, previously infeasible with regular Java programming,
                                                        become possible with a high performance Spark core runtime, enabling you to solve problems smarter and faster.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/tpellison" class="event-speaker" data-name="Tim Ellison">
                                                    <span>
                                                        Tim Ellison                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Challenges operating and scaling GrapheneDB</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Challenges operating and scaling GrapheneDB</h5>
                                                    <p class="no-font-style">GrapheneDB is a DaaS (database as a service) that hosts Neo4j databases. In this talk we will explore how we manage our service to achieve high reliability and performance. We use a wide variety of tools, from Rust to Akka, always
                                                        using the one that fits better with our problems and use cases.We are faced with many challenges related to scale both technically and as an organization.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/fcofdezc" class="event-speaker" data-name="Francisco Fernández">
                                                    <span>
                                                        Francisco Fernández                           </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-JVM">
                                                <a href="#" class="event-title">A Post-Apocalyptic sun.misc.Unsafe World</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>A Post-Apocalyptic sun.misc.Unsafe World</h5>
                                                    <p class="no-font-style">The announcement that sun.misc.Unsafe will disappear in Java 9 created a huge buzz in the community and lots of people didnt agree with the idea. While Unsafe have to go away eventually the time in not yet and Oracle finally agreed
                                                        on that. To replace sun.misc.Unsafe we need a clear set of APIs to achieve the same behavior and performance. VarHandle, Foreign Function Calls, Generic Specialization (Templates) and other proposals try to solve this misery and
                                                        to replace certain aspects of our beloved class. This talk will introduce the alternatives and explain how and why they will help to replace sun.misc.Unsafe. It uses basic examples to demonstrate what a Post-Apocalyptic Unsafe
                                                        World will look like.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Christoph Engelbert">
                                                    <span>
                                                        Christoph Engelbert                               </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">12:10 - 13:00</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">Big Data Analytics as an On Demand Service</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Big Data Analytics as an On Demand Service</h5>
                                                    <p class="no-font-style">RavenPack provides Big Data Analytics derived from unstructured data to top hedge-funds and banks worldwide. These global institutions recognize the value in this type of data when making financial decisions. This talk will explain
                                                        some of the key use-cases of our analytics, and will showcase a platform that we have developed which allows us to make our data accessible to all as an on-demand service.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/crosbiekevin" class="event-speaker" data-name="Kevin Crosbie">
                                                    <span>
                                                        Kevin Crosbie                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Big">
                                                <a href="#" class="event-title">Big cluster, little device, pony everywhere.</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Big cluster, little device, pony everywhere.</h5>
                                                    <p class="no-font-style">Pony is a relatively new LLVM based compiled language supporting ease of integration with native code. This talk takes a deep dive into Pony and its suitability as both a HPC language on the server side and an embedded compute and connectivity platform in embedded environments for the Industrial and Consumer IoT.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/darachennis" class="event-speaker" data-name="Darach Ennis">
                                                    <span>
                                                        Darach Ennis                               </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Mesos and Beyond</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Mesos and Beyond</h5>
                                                    <p class="no-font-style">With the growing need of computing power, distributed applications, and larger data centers also the need for a reliable and simple use cluster manager and programming abstraction grows. Apache Mesos is an open source project targeting
                                                        those needs and is used by large companies such as Twitter or Apple to manage their cluster. This talk will first provide a general overview of Mesos and then talk about some recent features such as persistence and external storage,
                                                        Quota, and Oversubscription. We will also discuss about the practices such monitoring, UI, security required to run Mesos in production settings.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Jörg Schad">
                                                    <span>
                                                        Jörg Schad                               </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                                <tr>
                                                    <td class="row-time ">13:00 - 14:30</td>
                                                    <td class="active common-event" colspan="3">Lunch</td>
                                                </tr>
                                                <tr>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">14:30 - 15:20</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">InGraph, Big Graphs insights</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>InGraph, Big Graphs insights</h5>
                                                    <p class="no-font-style">Big Data technologies has enabled the opportunity to explore Big Graphs. Graphs are a very natural way of representing information, providing well known techniques to extract insights which would be really complicated to discover
                                                        using other data representations. InGraph is a product developed in Malaga, that enables Big Graphs data exploration, providing users with useful insights in different business domains. During this note, we will study the problem
                                                        of Big Graphs, take an overview of the underlying technology developed for InGraph and show use cases of the product in action.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Fernando Pérez">
                                                    <span>
                                                        Fernando Pérez                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-JVM">
                                                <a href="#" class="event-title">Moving to G1GC</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Moving to G1GC</h5>
                                                    <p class="no-font-style">The Garbage First Garbage Collector is scheduled to be the default collector in Java 9. Although it's supposed to be more self-tuning than any previous collector. tuning it can be very daunting. On the surface it looks like an
                                                        evacuating generational collector but in reality it is very different. In this talk we'll deep dive into G1 and then use case studies to get an idea of how one might configure this collector to improve both application and
                                                        GC throughput using information found in the GC logs.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Kirk Pepperdine">
                                                    <span>
                                                        Kirk Pepperdine                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Service discovery in Mesos Cluster</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Service discovery in Mesos Cluster</h5>
                                                    <p class="no-font-style">Mesos uses zookeeper as service discovery but sometimes your applications don't support zookeeper for service discovery, or you need to run some legacy applications that you cannot modify the source, for that I research and test
                                                        different systems for service discovery in Mesos/Marathon system. I will explain the problems and advantages of the different current solutions that I tested.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Miguel A. Guillén">
                                                    <span>
                                                        Miguel A. Guillén                             </span>
                                                </a>
                                                <span title="Advanced" class="talk_level advanced">A</span>
                                            </div>
                                        </td>
                                    <tr>
                                        <td class="row-time ">15:30 - 16:20</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">Gamifying Big Data: The Untapped resource</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Gamifying Big Data: The Untapped resource</h5>
                                                    <p class="no-font-style">Still being a relatively new area of science and technology, Big Data is a under-utilized trove of wealth. Mobile game developers often have to spend quite a bit of time to create original content. That time could be better
                                                        spent making the game better or building the business. Reality Games is changing that by using big data as a source of content. Our proof of concept is the hit mobile game, Landlord Real Estate Tycoon. Data was taken from
                                                        FourSquare and Facebook and was used as data points in the game for the players to react to. It proved to be highly engaging for the players as we already have over 500,000 downloads since the launch in July 2015. We believe
                                                        that big data isn't only for science and business, it can be gamified to provide people much pleasure.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Paul_Chen">
                                                    <span>
                                                        Paul Chen                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Containers, VMs, Processes… Isolation, performances, I/O… How all of these technologies work and compare to each other? Deep dive and learn about your Operating System. </a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Understand what is really about virtualization, containers, linux process and all the things, deeper than marketing and hype. Deep dive into tech, become a real devops</h5>
                                                    <p class="no-font-style">Everybody is now using virtualization, containers are all the rage today, and microkernels start to gain traction… But how is all this working? How did these solutions come to be? What are the differences between containers
                                                        and virtual machines? Where and why should you use docker, runc, rocket, kvm, xen, virtualbox, includeOS, rancherOS? This talk is a full session providing understanding on how these technologies work, how they compare to
                                                        each other, and how you can put them to work. So, let’s look under the hood, and understand how your system works (hint: it’s not magic). And yes, it will be understandable even if you are not an OPS or an expert. That’s
                                                        precisely the point.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Quentin Adam">
                                                    <span>
                                                        Quentin Adam                               </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Web">
                                                <a href="#" class="event-title">Distributed Consensus: Making Impossible Possible</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Distributed Consensus: Making Impossible Possible</h5>
                                                    <p class="no-font-style">In this talk, we explore how to construct resilient distributed systems on top of unreliable components. Starting, almost two decades ago, with Leslie Lamport’s work on organising parliament for a Greek island. We will take a
                                                        journey to today’s datacenters and the systems powering companies like Google, Amazon and Microsoft. Along the way, we will face interesting impossibility results, machines acting maliciously and the complexity of today’s networks.
                                                        Ultimately, we will discover how to reach agreement between many parties and from this, how to construct new fault-tolerance systems that we can depend upon everyday.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Heidi Howard">
                                                    <span>
                                                        Heidi Howard                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">16:20 - 16:35</td>
                                        <td class="active common-event" colspan="3"> Break</td>
                                    </tr>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">16:40 - 17:30</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">How we use Kappa Architecture in our projects</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>How we use Kappa Architecture in our projects</h5>
                                                    <p class="no-font-style">As the Data Solutions Manager of OpenSistemas we use Kappa Architecture in every project we did the last 18 months. We want to explain what kappa architecture is, how we use it and what kind of problems we are solving in real projects. From small projects
                                                        to very big ones (millions records per seconds). We will explain also why scala + kafka + spark are the key technologies that help to do successful projects.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Juantomás García">
                                                    <span>
                                                        Juantomás García                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-JVM">
                                                <a href="#" class="event-title">Low latency Lambdas in Java 8</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Low latency Lambdas in Java 8</h5>
                                                    <p class="no-font-style">What are some of the performance implications of using lambdas and what strategies can be used to address these. When might be want an alternative to using a lambda and how can we design our APIs to be flexible in this regard.What
                                                        are the principles of writing low latency code in Java? How do we tune and optimize our code for low latency? When don’t we optimize our code? Where does the JVM help and where does it get in our way? How does this apply to
                                                        lambdas? How can we design our APIs to use lambdas and minimize garbage?</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Peter Lawrey">
                                                    <span>
                                                        Peter Lawrey                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Containers Live Migration for Enterprise Java Applications in a DevOps PaaS</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Containers Live Migration for Enterprise Java Applications in a DevOps PaaS</h5>
                                                    <p class="no-font-style">To make applications more portable without the heavy redesign during migration remains to be one of the main DevOps goals. In some cases, the unaffordable complexity during migration requires a significant redesign of existing legacy applications. However, stateful containers can simplify the migration task drastically. With the help of stateful containers IT companies are able to migrate legacy Java applications with zero code change making some minor or even no adjustments. After migration, engineers will be able to improve the architecture of the legacy applications by decomposing monolithic architecture to multiple containers or even to microservices. In the future that will allow to easily redesign stateful applications to stateless by moving state to another layer or keep it as is and benefit from containers portability, live migration, vertical scaling elasticity, density and other features. Come to this session to see live migration across several clouds in action with no downtime or data loss.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Ruslan Synytsky">
                                                    <span>
                                                        Ruslan Synytsky                                </span>
                                                </a>
                                                <span title="Advanced" class="talk_level advanced">A</span>
                                            </div>
                                        </td>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">17:40 - 18:30</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">The next generation holiday search platform at Thomas Cook, Micro-services in the wild</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>The next generation holiday search platform at Thomas Cook, Micro-services in the wild</h5>
                                                    <p class="no-font-style">Thomas Cook recently architected much of their back-end. They chose a NodeJS micro-service architecture and in this talk Pascal Laenen, the Head of Architecture for their Omni-Channel team, will act as a guide through the journey they took from initial idea to execution of building their micro-service architecture. He'll cover the good, the bad, the ugly and the beautiful.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://twitter.com/purbon" class="event-speaker" data-name="Pascal Laenen">
                                                    <span>Pascal Laenen</span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Big">
                                                <a href="#" class="event-title">Adding eyes, ears and mouth to your IoT projects</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Adding eyes, ears and mouth to your IoT projects</h5>
                                                    <p class="no-font-style">This session discusses how you can use Intel RealSense in different IoT projects and contexts to provide amazing user experiences with gestures, text-to-speech, and voice and face recognition. You will see many different
                                                        demos on a Raspberry Pi computer, an Intel Galileo board, and an Edison computer with sensors, robots, lights, and home-automation concepts. The demos include: Using face recognition for a home automation system Controlling
                                                        a remote robot by using gestures + a MQTT gateway + a Bluetooth device Reading and speaking sensors’ value DIY security monitoring Edison Pi laptop: a wooden laptop integrated with RealSense</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Yara Senger">
                                                    <span>
                                                        Yara Senger                               </span>
                                                </a>
                                                <span> & </span>
                                                <a href="#" class="event-speaker" data-name="Vinicius Senger">
                                                    <span>
                                                        Vinicius Senger                               </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Data Streaming for Connected Devices with Azure Stream Analytics</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Data Streaming for Connected Devices with Azure Stream Analytics</h5>
                                                    <p class="no-font-style">Managing data from millions of devices in real time is not easy. The architecture of a data streaming and analytics solution is usually complex and you have to resolve many problems you didn’t have in the former times, you
                                                        have to analyze data in motion and it is a new paradigm in terms of security, reliability, performance and scalability. Learn how Azure Stream Analytics can help you in building real time solutions using SQL language.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Juan Manuel Servera">
                                                    <span>
                                                        Juan Manuel Servera                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">18:30 - 19:30</td>
                                        <td class="active common-event colorblue" colspan="3">Closing keynote by <a href="#" class="event-speaker opening-speaker" data-name="Peter Crnokrak">
                                            <span title="Intermediate" class="talk_level intermediate">I</span>
                                                Peter Crnokrak
                                            </a>
                                            at Biznaga hall
                                    </tr>
                                    <tr>
                                        </div>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">19:30 - 20:30</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">Databeers on the Beach</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Databeers on the Beach</h5>
                                                    <p class="no-font-style">"Papeles de Panamá: open data de datos secretos" por Mar Cabra, responsable de la Unidad de Ingestigación y Datos del Consorcio Internacional de Periodistas de investigación.</p>
                                                    <p class="no-font-style">"Modern Data Science, Monogamy or Menage à Trois" por Lara Khanafer, Country Manager en Dataiku .</p>
                                                    <p class="no-font-style">"Big Data: como entré en este mundo y sobreviví" por Juan Tomás García, Data Solutions Manager en OpenSistemas.</p>
                                                    <p class="no-font-style">"UX for Data Jedi's: como visualizar el Big Data sin volverte loco" por Alberto García, especialista UX en Valo.</p>
                                                    <a target="_blank" href="https://www.meetup.com/DataBeers-Malaga/events/229151489/?eventId=229151489">More info</a>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="https://www.meetup.com/es-ES/DataBeers-Malaga/events/229151489/" class="event-speaker" data-name="Databeers MLG">
                                                    <span>DataBeers Málaga</span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Women in IT events</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Women in IT events</h5>
                                                    <p class="no-font-style">Soon more info</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Yes We Tech">
                                                    <span>
                                                        Yes We Tech                              </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-JVM">
                                                <a href="#" class="event-title">Java & Scala Meetup</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Java Champions and Scala leaders</h5>
                                                    <p class="no-font-style"> The accidential tourist guide to JMC/JFR - Kirk Pepperdine</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Malaga Scala Developers & Malaga JUG">
                                                    <span>
                                                        Malaga Scala Developers & Malaga JUG                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">20:30 - 00:00 </td>
                                        <td class="active common-event" colspan="3">Networking Party</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <ul class="categories">
                                    <li><span class="category-Software"></span> Big Data in the Business</li>
                                    <li><span class="category-Architecture"></span> DevOps & Infrastructures</li>
                                    <li><span class="category-JVM"></span> Java & the JVM</li>
                                    <li><span class="category-Web"></span> Distributed Systems</li>
                                    <li><span class="category-Big"></span> Embedded & IoT</li>
                                </ul>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <ul class="categories">
                                  <li><span class="talk_level everybody">E</span> Everybody</li>
                                  <li><span class="talk_level intermediate">I</span> Intermediate</li>
                                  <li><span class="talk_level advanced">A</span> Advanced</li>
                                </ul>
                              </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="DayTwo">
                            <table class="table">
                                <thead>
                                    <tr class="warning">
                                        <th><i class="fa fa-clock-o"></i></th>
                                        <th>Biznaga hall</th>
                                        <th>Gazpachuelo hall</th>
                                        <th>Espetos hall</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="row-time active">08:00 - 09:00</td>
                                        <td class="active common-event" colspan="3">Registration &amp; coffee</td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">09:00 - 09:50</td>
                                        <td class="active common-event colorblue" colspan="3">Opening keynote by <a href="#" class="event-speaker opening-speaker opening" data-name="Justo Ruiz Ferrer">
                                        <span title="Everybody" class="talk_level everybody">E</span>
                                                Justo Ruiz Ferrer
                                            </a>
                                            at Biznaga hall
                                    </tr>
                                    <tr>
                                        <td class="row-time ">10:00 - 10:50</td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">What’s the role of DevOps in the Data Science Team? </a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>What’s the role of DevOps in the Data Science Team ?</h5>
                                                    <p class="no-font-style">Many organisations are creating  groups dedicated to data. These groups have many names :  Data Team, Data Labs, Analytics Teams…. But whatever the name, the success of those teams depends a lot on the quality of the data infrastructure
                                                        and their ability to actually deploy data science applications in production. In that regards a new role of “DataOps” is emerging. Similar, to Dev Ops for (Web) Dev, the Data Ops is a merge between a data engineer and a platform administrator.
                                                        Well versed in cluster administration and optimisation, a data ops would have also a perspective on the quality of data quality and the relevance of predictive models. Do you want to be a Data Ops ? We’ll discuss its role and challenges
                                                        during this talk.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Florian Douetteau">
                                                    <span>
                                                        Florian Douetteau                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Web">
                                                <a href="#" class="event-title">Reactive Design Patterns</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Reactive Design Patterns</h5>
                                                    <p class="no-font-style">Our software needs to become reactive, this realization is widely understood: we need to consider responsiveness, maintainability, elasticity and scalability from the outset. Not all systems need to implement all these to the same
                                                        degree, specific project requirements will determine where effort is most wisely spent, but in the vast majority of cases the need to go reactive will demand that we design our applications differently. In this presentation we
                                                        explore several architecture elements that are commonly found in reactive systems (like the circuit breaker, various replication techniques, or flow control protocols). These patterns are language agnostic and also independent
                                                        of the abundant choice of reactive programming frameworks and libraries, they are well-specified starting points for exploring the design space of a concrete problem: thinking is strictly required!</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Roland Kuhn">
                                                    <span>
                                                        Roland Kuhn                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Modelling Microservices at Spotify</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Modelling Microservices at Spotify</h5>
                                                    <p class="no-font-style">One of the challenges with a microservices architecture is understanding it. How do you figure out what connects to what, where things are deployed, what capabilities the total system of services has? This is a talk about System-Z,
                                                        the microservice-based microservices modelling system we use at Spotify to understand our set of services. We use a combination of runtime collection of data and mostly-static service metadata. The system currently tracks about
                                                        1000 components deployed to about 8000 machines, and we're looking at extending it to also tracking our data collection and analysis pipelines, as well as possible client-side features.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Petter Måhlén">
                                                    <span>
                                                        Petter Måhlén                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">11:00 - 11:50</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">The tech behind the biggest journalism leak in history</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>The tech behind the biggest journalism leak in history</h5>
                                                    <p class="no-font-style">The Panama Papers investigation revealed the offshore holdings and connections of dozens of politicians and prominent public figures around the world and led to high-profile resignations, police raids and official investigations. More than 370 journalists coordinated by the International Consortium of Investigative Journalists and Süddeutsche Zeitung had to sift through 2.6 terabytes of data, making it the biggest leak in the history of journalism. Learn how the collaboration happened and how technology made it all possible.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Mar Cabra">
                                                    <span>
                                                        Mar Cabra                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-JVM">
                                                <a href="#" class="event-title">What we can expect from Java 9</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>What we can expect from Java 9</h5>
                                                    <p class="no-font-style">Java 9 is currently scheduled to become generally available in less then 1 year. Perhaps now is a good time to have a closer look at language proposals and API changes in Java 9. There are over 70 proposals targeted to Java 9, we
                                                        will have a looks at some key ones, starting with java modularity. We will look at some breaking changes and ways to develop both short and long term solutions for adoption of new upcoming version of Java.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Ivan Krylov">
                                                    <span>
                                                        Ivan Krylov                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Using the Cloud to Process Unstructured Big Data</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Using the Cloud to Process Unstructured Big Data</h5>
                                                    <p class="no-font-style">Much of today's big data processing deals with structured data, while there are reports that up to 80% of big data may be unstructured. For more than a decade, RavenPack has been focused on deriving value from unstructured data.
                                                        Here we'll look at how we've migrated to a cloud platform, and what advantages this gives us. We'll also consider some options we have now that were almost entirely impractical before.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Jason Cornez">
                                                    <span>
                                                        Jason Cornez                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">12:00 - 12:50</td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">C2MON - A highly scalable monitoring platform for Big Data scenarios @CERN</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>C2MON - A highly scalable monitoring platform for Big Data scenarios @CERN</h5>
                                                    <p class="no-font-style"> Developing reliable data acquisition, processing and control modules for mission critical systems - as they run at CERN - has always been challenging. As both data volumes and rates increase, non-functional requirements such as performance,
                                                        availability, and maintainability are getting more important than ever. C2MON is a modular Open Source Java framework for realising highly available, large industrial monitoring and control solutions. It has been initially developed
                                                        for CERN’s demanding infrastructure monitoring needs and is based on more than 10 years of experience with the Technical Infrastructure Monitoring (TIM) systems at CERN. Combining maintainability and high-availability within a
                                                        portable architecture is the focus of this work. Making use of standard Java libraries for in-memory data management, clustering and data persistence, the platform becomes interesting for many Big Data scenarios.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Matthias Bräger">
                                                    <span>
                                                        Matthias Bräger                                </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Drupal Extreme Scaling</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Drupal Extreme Scaling</h5>
                                                    <p class="no-font-style">Have you ever faced a web application project with extreme scalability and performance requirements? Lots of concurrent users? Availability close to 99.9%? A project where infrastructure desing and implementation becomes as relevant
                                                        as the web application itself, even more? Let's imagine something. Supose a platform, based on a multi-site Drupal install, and each user can have his/her own site. Not so complex, right? Supose now that we are talking about
                                                        more than thirty thousand users. Now, it seems scary, uh? Don't panic until knowing the project target, which is one hundred thousands users on the next years. And, of course, we want a full migration from legacy platform, high
                                                        availability, and a 500% improvement on server response times. And this is the project in which I have been working as DevOps on last year. And now the good news come. The dev team, formed by great professionals, could count
                                                        on very important allies, like Drupal, Nginx, Docker, Ansible, MongoDB, Node.JS, Apache Mesos and Amazon Web Services (this one included all its buddies: EC2, S3, ElastiCache, DynamoDB, and Route53). So, this session will describe
                                                        the project, with some grade of detail, specially focusing on infrastructure, and will review the newfangled technologies used to make it possible. Additionally, the problems found during the implementation - and their solutions
                                                        - will be described. Spoiler alert: This project went live on firsts days of April 2015, so it's very fresh! It was an absolute success, on engineering, results and cost optimization levels.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Zeki Vázquez">
                                                    <span>
                                                        Zeki Vázquez                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-JVM">
                                                <a href="#" class="event-title">Using GPUs to Handle Big Data with Java</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Using GPUs to Handle Big Data with Java</h5>
                                                    <p class="no-font-style">Modern graphics processing units (GPUs) are efficient general-purpose stream processors. Learn how Java can exploit the power of GPUs to optimize high-performance enterprise and technical computing applications such as big data
                                                        and analytics workloads. This presentation covers principles and considerations for GPU programming from Java and looks at the software stack and developer tools available. It also presents a demo showing GPU acceleration and
                                                        discusses what is coming in the future.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Tim Ellison">
                                                    <span>
                                                        Tim Ellison                               </span>
                                                </a>
                                                &
                                                <a href="#" class="event-speaker" data-name="Adam Roberts">
                                                    <span>Adam Roberts</span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">13:00 - 14:30</td>

                                        <td class="active common-event" colspan="3">Lunch</td>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">14:30 - 15:20</td>

                                        <td class="event">
                                            <div class="category-Big long_vertical_event">
                                                <a href="#" class="event-title">IOT, timeseries and prediction with Android, Cassandra and Spark</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>IOT, timeseries and prediction with Android, Cassandra and Spark</h5>
                                                    <p class="no-font-style">
                                                    "IOT has a massive potential and its impact in our daily life is important.
                                                    Here is an exemple of using a connected object and analysing its data: we'll see how to collect data using the accelerometer
                                                    sensor of your smartphone. Then, we'll store it in Cassandra as a Timeseries model. Finally, we'll analyse those data and predict
                                                    the activity with Spark. We will see a live demo on stage to show this solution working in realtime."
                                                    </p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Amira Lakhal">
                                                    <span>
                                                        Amira Lakhal                               </span>
                                                </a>
                                                <span title="Everybody" class="talk_level everybody">E</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">Spark Streaming Tips for Devs & Ops</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Spark Streaming Tips for Devs & Ops</h5>
                                                    <p class="no-font-style">During this talk we will see a regular Kafka/Spark Streaming application, going through some of the most common issues and how we fix them. We'll see how to improve our Spark App in two different point of views: Code quality and Spark Tuning. The final goal is to have a robust and resilient Spark Application deployable in a production-like environment.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Francisco Perez">
                                                    <span>
                                                        Francisco Perez
                                                    </span>
                                                </a>
                                                &
                                                <a href="#" class="event-speaker" data-name="Federico Fernandez">
                                                    <span>
                                                        Federico Fernandez
                                                    </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">A Developer's Journey From Monoliths to Microservices</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>A Developer's Journey From Monoliths to Microservices</h5>
                                                    <p class="no-font-style">Microservices are the current "big thing" and most of the current technologies seems to be a fit for greenfield projects. Unfortunately the great majority of the developers can't build something from scratch - but that shouldn't prevent them to touch the world of microservices while dealing with their legacy monolith. Come to this session to check how we are refactoring a Java EE monolith to a Microservices Architecture: our work done and the planned steps. Because enterprise development is not just a "hello world" application: it's a journey. We'll discuss the architectural decisions, requirements and implications. And of course we've plenty of code and deployments in a DevOps-enabled platform!</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Edson Yanaga">
                                                    <span>Edson Yanaga</span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time ">15:30 - 16:20</td>
                                        <td class="event">
                                            <div class="category-Software">
                                                <a href="#" class="event-title">BetWatch™ —utilizing Big and Fast Data to help sports books manage risk and increase customer experience</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>BetWatch™ —utilizing Big and Fast Data to help sports books manage risk and increase customer experience</h5>
                                                    <p class="no-font-style">Developing a real-time, risk management solution for sports books that can help mitigate risk as well as provide a first-class customer experience. Built on SAS, SAP HANA, and ITRS’s Valo, BetWatch segments customers via relevant
                                                        wagering metrics applicable to the customer, i.e. the sports book (SB), so that meaningful segments are created. The solution attempts to understand a bettor’s gambling habits and, more importantly, how they affect the SB’s fiscal
                                                        bottom line. This is a data reduction exercise that will provide a succinct and quick view of the customer base that can then be used to make risk based decisions, complement multiple marketing strategies, as well as, potentially,
                                                        spot problem gamblers. The approach of this solution is to highlight the bridge between using analytics to derive knowledge from the information available that goes beyond merely slicing and dicing the data. Initially, SAP HANA
                                                        Predictive Analytics Library was used to create the necessary segments via the k-means algorithm and, once the segments are created, HANA is used to keep track of betting activity in real-time. Other platforms can be used and a
                                                        discussion on the pros and cons of different platforms will be initiated. The second element of BetWatch™ is the Customer Experience Management (CEM) component that allows a SB to gain not only a 360 degree view of its customers,
                                                        but also a deep understanding of the customer’s spending habits as well as the SB’s marketing activity. Armed with this deeper understanding that analytics can provide, SB’s have the power to utilize social media to get out their
                                                        marketing message and a discussion about social media marketing platforms that are thriving throughout Asia." Topics include: - A brief overview of Big and Fast Data and how BetWatch utilizes its analytical models. - Understanding
                                                        risk from a macro perspective –the big effect of the little guys. - Discussion on the theory behind our segmentation models. - Explanation of current Social Media platforms that allow highly effective marketing options. - Discussion
                                                        of the latest developments in Customer Experience (CX)</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Andrew Pearson">
                                                    <span>
                                                        Andrew Pearson                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Architecture">
                                                <a href="#" class="event-title">Scala, Docker and Testing, oh my!</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Scala, Docker and Testing, oh my!</h5>
                                                    <p class="no-font-style">Testing is important for any system you write and at eBay it is no different. We have a number of complex Scala and Akka based applications with a large number of external dependencies. One of the challenges of testing this kind of application is replicating the complete system across all your environments: development, different flavors of testing (unit, functional, integration, capacity and acceptance) and production. This is especially true in the case of integration and capacity testing where there are a multitude of ways to manage system complexity. Wouldn’t it be nice to define the testing system architecture in one place that we can reuse in all our tests? It turns out we can do exactly that using Docker. In this talk, we will first look at how to take advantage of Docker for integration testing your Scala application. After that we will explore how this has helped us reduce the duration and complexity of our tests.</p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Mario Camou">
                                                    <span>
                                                        Mario Camou                              </span>
                                                </a>
                                                <span> & </span>
                                                <a href="#" class="event-speaker" data-name="Daniel Brown">
                                                    <span>
                                                        Daniel Brown                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                        <td class="event">
                                            <div class="category-Web">
                                                <a href="#" class="event-title">Runway: a new tool for distributed systems design</a>
                                                <br>
                                                <div class="event-description hidden">
                                                    <h5>Runway: a new tool for distributed systems design</h5>
                                                    <p class="no-font-style">
                                                        Distributed systems are notoriously difficult to get right. We’re constantly improving the frameworks we use and the way we test production code, yet we rarely invest in tools for system design. The best design tools we have are still low-tech, like whiteboards and back-of-the-envelope calculations. Runway is a new tool to help design distributed and concurrent systems. It combines specification, simulation, visualization, and model checking into one tool, so you can write a single system model and do a bunch of useful things with it: the same model can help you evaluate a design’s correctness, availability, and performance while also helping others learn how the design works.
                                                    </p>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="#" class="event-speaker" data-name="Diego Ongaro">
                                                    <span>
                                                        Diego Ongaro                                </span>
                                                </a>
                                                <span title="Intermediate" class="talk_level intermediate">I</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="row-time active">16:20 - 16:35</td>
                                        <td class="active common-event" colspan="3">Coffee-break</td>
                                    </tr>
                                <td class="row-time ">16:40 - 17:30</td>
                                <td class="event">

                                    <div class="category-Software">
                                        <a href="#" class="event-title">OrientDB - the 2nd generation of (MultiModel) NoSQL</a>
                                        <br>
                                        <div class="event-description hidden">
                                            <h5>NoSQL claim was to use the right database model for the right domain. Bad news, in most cases a single database model is not enough!</h5>
                                            <p class="no-font-style">In last years NoSQL experienced a huge upward trend, offering new data models (Document, Graph, Key-Value...) to solve problems where old RDBMS failed. Now people who have chosen NoSQL as an architecture component, realize that
                                                a single data model (even when richer that relational), is not enough for average needs. Today's next generation solutions scale horizontally and provide enterprise-grade availability and security whilst simplifying development
                                                through multiple APIs. Luigi Dell'Aquila, Director of Consulting at OrientDB Ltd, discusses the latest technology innovations and the market's demand for databases that combine more than one NoSQL model (ex. GraphDB, DocumentDB,
                                                Key/Value, Objects). In this lecture, we will discuss why graph databases are at the heart of the multi-model revolution and why we're approaching the end of NoSQL's fragmented ecosystem where customers are forced to use multiple
                                                tools in their architectures. Benefits and compromises of this approach along with real world use cases will also be shared.</p>
                                        </div>
                                        <i class="speaker-img fa fa-user"></i>
                                        <a href="#" class="event-speaker" data-name="Luigi Dell'Aquila">
                                            <span>
                                                Luigi Dell'Aquila                                </span>
                                        </a>
                                        <span title="Everybody" class="talk_level everybody">E</span>
                                    </div>
                                </td>
                                <td rowspan="3" class="event">
                                    <div class="category-Big long_vertical_event">
                                        <a href="#" class="event-title">WORKSHOP - Surfing Internet of Things: From the hello world to MQTT voice-recognition apps in x (2-4) hours</a>
                                        <br>
                                        <div class="event-description hidden">
                                            <h5>Surfing Internet of Things: From the hello world to MQTT voice-recognition apps in x (2-4) hours</h5>
                                            <p class="no-font-style">This workshop will be using our own board called IoT Surfboard that agregates: - Temperature, humidity, light, alcohol and infra-red sensor - Relay, transistors - WIFI / Bluetooth or Zigbee connector (we will be using WIFI) - LED
                                                RGB - Real-time clock We will wok with the following labs: 1. Creating home-automaton system controlling lights 2. Reading traffic information and changing LED color based on that 3. Create a breathliser integrated with Twitter
                                                4. Read all the sensors and publish on MQTT 5. Using IBM Bluemix to make ANY IoT implementation We will provide the boards and the attend need to bring your own laptop. In the end we will let the attendes to play with IoT Surfboard
                                                and the boards will be available for selling!</p>
                                        </div>
                                        <i class="speaker-img fa fa-user"></i>
                                        <a href="#" class="event-speaker" data-name="Yara Senger">
                                            <span>
                                                Yara Senger                               </span>
                                        </a>
                                        <span> & </span>
                                        <a href="#" class="event-speaker" data-name="Vinicius Senger">
                                            <span>
                                                Vinicius Senger                               </span>
                                        </a>
                                        <span title="Everybody" class="talk_level everybody">E</span>
                                    </div>
                                </td>
                                <td rowspan="3" class="event">
                                    <div class="category-Architecture long_vertical_event">
                                        <a href="#" class="event-title">HANDS-ON - Deploying a dockerized distributed application to Mesos</a>
                                        <br>
                                        <div class="event-description hidden">
                                            <h5>Deploying a dockerized distributed application to Mesos</h5>
                                            <p class="no-font-style">Why is there so much buzz about Docker? In the last two years it has become one of the most extended tools used by devs and ops in tech companies. The advantages offered by an immutable infrastructure, portability of docker containers
                                                and the speed of containers to start-up are some of its strengths. Docker is a tool coming from the developer world that will make the release phase simpler and help you doing continuous deployment. In turn, Mesos is a tool that
                                                abstracts and manages cluster resources for you. It can share them across multiple frameworks and facilitates resource fair sharing and data locality. In this session, I will present some of the advantages of using Mesos and
                                                Docker together. We will deploy a distributed web application to the cloud on a Mesos cluster. We will use Marathon to deploy docker containers, HAProxy as load balancer and Mesos DNS for service discovery.</p>
                                        </div>
                                        <i class="speaker-img fa fa-user"></i>
                                        <a href="#" class="event-speaker" data-name="Julia Mateo">
                                            <span>
                                                Julia Mateo                                </span>
                                        </a>
                                        <span title="Intermediate" class="talk_level intermediate">I</span>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                    <td class="row-time ">17:40 - 18:30</td>
                                    <td class="event">
                                        <div class="category-Software">
                                            <a href="#" class="event-title">Multi-cloud scalability: NoSQL with Cassandra, JavaEE, CDI and Containers</a>
                                            <br>
                                            <div class="event-description hidden">
                                                <h5>Multi-cloud scalability: NoSQL with Cassandra, JavaEE, CDI and Containers</h5>
                                                <p class="no-font-style">This talk will show how we can combine some of the top open source technologies to create a powerful, scalable, multi-cloud solution for your application. Using Elasticsearch and Cassandra NoSQL database for fast, high available service; JavaEE and CDI for easy of development; and Docker containers for multi-cloud deployment, we will show how to create an architecture for the future of cloud computing.</p>
                                            </div>
                                            <i class="speaker-img fa fa-user"></i>
                                            <a href="#" class="event-speaker" data-name="Bruno Souza">
                                              <span>Bruno Souza</span>
                                            </a>
                                            &
                                            <a href="#" class="event-speaker" data-name="Otávio Santana">
                                              <span>Otávio Santana</span>
                                            </a>
                                            <span title="Intermediate" class="talk_level intermediate">I</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="row-time ">18:40 - 19:30</td>
                                    <td class="event">
                                        <div class="category-Architecture">
                                            <a href="#" class="event-title">Continuous Delivery – A practical case</a>
                                            <br>
                                            <div class="event-description hidden">
                                                <h5>Continuous Delivery – A practical case</h5>
                                                <p class="no-font-style">We are used to people trying to sell us how awesome Continuous Delivery is, but with little examples. In this talk, I will show you parts of the pipeline our team has been implementing. Our objective is very simple: how to go from a commit to production without humans in the middle; but making sure that software goes through the proper functional and performance testing. I will discuss with you some of the biggest challenges we have found along the way.</p>
                                            </div>
                                            <i class="speaker-img fa fa-user"></i>
                                            <a href="#" class="event-speaker" data-name="Juan Jose Del Rio">
                                                <span>Juan Jose Del Rio</span>
                                            </a>
                                            <span title="Advanced" class="talk_level advanced">A</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="row-time ">19:40 - 20:30</td>
                                    <td class="active common-event colorblue" colspan="3">
                                    <span title="Everybody" class="talk_level everybody">E</span>
                                        Closing Keynote by
                                        <a href="#" class="event-speaker opening-speaker" data-name="Jamie Allen">
                                            Jamie Allen
                                        </a>
                                        at Biznaga hall
                                    </td>
                                </tr>
                                <tr>
                                    <td class="row-time active">20:40 - Beer O,clock </td>
                                    <td class="active common-event" colspan="3">Closing Party</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <ul class="categories">
                                    <li><span class="category-Software"></span> Big Data in the Business</li>
                                    <li><span class="category-Architecture"></span> DevOps & Infrastructures</li>
                                    <li><span class="category-JVM"></span> Java & the JVM</li>
                                    <li><span class="category-Web"></span> Distributed Systems</li>
                                    <li><span class="category-Big"></span> Embedded & IoT</li>
                                </ul>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <ul class="categories">
                                  <li><span class="talk_level everybody">E</span> Everybody</li>
                                  <li><span class="talk_level intermediate">I</span> Intermediate</li>
                                  <li><span class="talk_level advanced">A</span> Advanced</li>
                                </ul>
                              </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="btn-wrapper">
                    <a href="#" class="btn btn-xs"><span class="icon icon-filetypes-11 icon-active"></span> <span class="btn-txt">Download schedule</span></a>
                </div>
            </div>
        </section>


        <script>
            (function ($) {

                /* Controllers
                 ----------------------------------------------- */
                $("#schedule .event-title").click(function (e) {
                    e.preventDefault();
                    var view = $(this).siblings(".event-description");

                    buildFancyboxPopup({
                        width: 800,
                        height: 500,
                        content: view.html()
                    });
                });

                $("#schedule .event-speaker").click(function (e) {
                    e.preventDefault();
                    var speakerName = $(this).data("name"),
                            speaker = new Speaker(speakerName),
                            speakerView = new SpeakerView(speaker);

                    buildFancyboxPopup({
                        width: 800,
                        height: 500,
                        content: speakerView.render()
                    });
                });

				<?php if ($_SERVER['REMOTE_ADDR'] != '62.14.233.3----' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1'){ ?>
                    $(".watch-realtime").click(function (e) {
                        e.preventDefault();
                        var view = $('.container-watch-realtime');

                        $.fancybox({
                            width: 800,
                            height: 800,
                            content: view,
                            helpers: {
                                overlay: {
                                    locked: false
                                }
                            }
                        });
                        resizeIframe();
                    });

                    function resizeIframe(){
                        heightOk = $('.container-watch-realtime iframe').closest(".fancybox-inner").height();
                        console.log(heightOk);
                        if(heightOk > 150){
							$('.container-watch-realtime iframe').height(heightOk);
					    }
                    }

                    $(window).resize(function(){resizeIframe()});
                <?php } ?>

                /* Models
                 ----------------------------------------------- */
                function Speaker(name) {
                    var $container = getContainer(name);

                    this.name = name;
                    this.avatar = $container.find(".img-circle").attr("src");
                    this.position = $container.find(".sub").text();
                    this.info = $container.find(".small").text();
                    this.social = $container.find(".social-link").html();
                    this.talks = $container.find(".speaker-speeches-popup-content");
                }

                /* Views
                 ----------------------------------------------- */
                function SpeakerView(speaker) {
                    this.model = speaker;
                }

                SpeakerView.prototype.render = function () {
                    return generateHtml(this.model);
                };

                /* Helpers
                 ----------------------------------------------- */
                function getContainer(speaker) {
                    return $("#speakers").find(".speaker-item[data-user='" + speaker + "']");
                }

                function generateHtml(speaker) {
                    var html = "";

                    html += '<section class="speaker-popup no-font-style">';
                    html += '<div class="speaker-preview">';
                    html += '<div class="speaker-avatar">';
                    html += '<img src="' + speaker.avatar + '" alt="' + speaker.name + '"/>';
                    html += '<div class="speaker-social">' + speaker.social + '</div>';
                    html += '</div><div class="speaker-description">';
                    html += '<h3 class="speaker-name">' + speaker.name + '</h3>';
                    html += '<h4 class="speaker-position">' + speaker.position + '</h4>';
                    html += '<p class="speaker-info">' + speaker.info + '</p>';
                    html += '</div></div>';
                    if (speaker.talks.find("li").length > 0) {
                        html += '<div class="speaker-talks">';
                        html += '<h4>Talks</h4>' + speaker.talks.html();
                        html += '</div>';
                    }
                    html += '</section>';

                    return html;
                }

                function buildFancyboxPopup(options) {
                    $.fancybox({
                        width: options.width,
                        maxWidth: options.width,
                        height: options.height,
                        maxHeight: options.height,
                        type: 'html',
                        content: options.content,
                        helpers: {
                            overlay: {
                                locked: false
                            }
                        }
                    });
                }

            })(jQuery);
        </script>
 <!-- Speakers Section -->
        <section id="speakers" class="section light">
            <div class="container">
                <div class="icon-wrap"><span class="icon icon-active icon-multimedia-12"></span></div>
                <h3>Speakers</h3>
                <div class="sub-title">Creators, innovators, motivators & curators </div>
                <br />
                <br />

                <?php
                    $aFiles = scandir($_SERVER["DOCUMENT_ROOT"].'/sections/speakers/');
                    unset($aFiles[0]);
                    unset($aFiles[1]);

                    $iIndex = 0;
                    foreach($aFiles AS $oFile){
                        if(is_dir($_SERVER["DOCUMENT_ROOT"].'/sections/speakers/'.$oFile)){
                            continue;
                        }
                        if($iIndex==0){
                            echo '<section class="row">';
                        }

                        $iDelay = $iIndex * 500;

                    ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <?php include $_SERVER["DOCUMENT_ROOT"].'/sections/speakers/' . $oFile; ?>
                        </div>
                <?php
                        $iIndex++;
                        if($iIndex == 4){
                            echo '</section>';
                            $iIndex = 0;
                        }
                    }
                ?>
                <div>
                <a href="https://www.papercall.io/weyweyweb1" target="blank" class="btn btn-lg btn-3d">Become a Speaker!</a>
                </div>
            </div>
        </section>
        <!-- End Speakers Section -->

        <section class="conduct">
            <h3>Code of Conduct</h3>
            <div class="img-container">
                <img src="/assets/img/logoYWT.svg" alt="Yes We Tech logo">
            </div>
            <div class="text">
                <h3>Code of Conduct</h3>
                <p>Wey Wey Web is committed to supporting members of underrepresented groups who may not otherwise have the opportunity to attend the event for financial, social or any other reasons. This includes (but is not limited to): People with functional diversity, women, and LGBTQIA+ people.</p>
                <br>
                <p>Our goal for this year is to provide 3 free tickets, a 50% to all these communities and if necessary will try our best to support their accommodation.</p>
                <br>
                <p style="margin-bottom:70px !important">Use this <a href="https://docs.google.com/forms/d/17zGRemzPk-Pv6VWwguB8oPg-PphC9RWslwAJyz02IaU/edit" target="blank">link</a> to apply for free tickets, discount and support.</p>
                <a href="https://recursos.yeswetech.org/guias/codigo-de-conducta" target="blank" class="button">We follow the YWT code of conduct</a>
            </div>
        </section>

        <section class="prices" id="prices">

            <h3>Event tickets</h3>

            <div class="tickets-container">
                <div class="ticket">
                    <div>
                        <p class="name">Early Bokeron</p>
                        <p class="price">€100</p>
                        <ul>
                            <li>Access to all talks & "Canela" workshops</li>
                            <li>Breakfast and Lunch (Fr. 16th)</li>
                            <li>Networking and closing party</li>
                        </ul>
                    </div>
                    <a class="not_available">Not Available</a >
                    <p class="until">Until 20th october</p>
                </div>

                <div class="ticket">
                    <div>
                        <p class="name">Standard Tuna</p>
                        <p class="price">€150</p>
                        <ul>
                            <li>Access to all talks & "Canela" workshops</li>
                            <li>Breakfast and Lunch (Fr. 16th)</li>
                            <li>Networking and closing party</li>
                        </ul>
                    </div>
                    
                    <a onclick="toggleTickets()">Buy Now</a >
                    <!-- <span style="height:50px"></span> -->
                    <p class="from second__child">Until 25th November</p>
                </div>

                <div class="ticket">
                    <div>
                        <p class="name">Last Callamar</p>
                        <p class="price">€200</p>
                        <ul>
                            <li>Access to all talks & "Canela" workshops</li>
                            <li>Breakfast and Lunch (Fr. 16th)</li>
                            <li>Networking and closing party</li>
                        </ul>
                    </div>
                    <span style="height:50px"></span>
                    <!-- <button>Buy now</button> -->
                    <p class="from">From 26th November</p>
                </div>

            </div>
        </section>
        <section class="testimonials-section">
            <h3>Testimonials</h3>
            <p class="subtitle">What <span>people</span> say</p>
            <div class="testimonies">
                <div class="testimony">
                    <p>This is by far the most inspiring and incredible event I have never been. Speakers look amazing even though they have not been published on the web yet. Can´t wait!</p>
                    <div>
                        <img src="assets/img/opinion02.webp" alt="">
                        <div>
                            <p>Erli García</p>
                            <p style="color:#fc0378">Full Stack @ <br>Feisbuk</p>
                        </div>
                    </div>
                </div>
                <div class="testimony">
                    <p>I only had to hear the name of the event to purchase the ticket. I don´t have a clue what the event is about but hey is a yay-yay conference. Take my lettuce NOW! It is going to be a blast!</p>
                    <div>
                        <img src="assets/img/opinion01.webp" alt="">
                        <div>
                            <p>Kyong Cui</p>
                            <p style="color:#fc0378">UX designer @  <br>Fihma</p>
                        </div>
                    </div>
                </div>
                <div class="testimony">
                    <p>The event is organised by the same people running JOTB and that is a YAY! I only go to events to get a welcome bag and then I visit the city. Can´t wait to visit Palmilla Valley</p>
                    <div>
                        <img src="assets/img/opinion03.webp" alt="">
    
                        <div>
                            <p>Anika Obi</p>
                        <p style="color:#fc0378">Front End dev @ <br>Chapulets</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section class="call-to-action cta2" id="sponsors">
            <h3>Sponsors</h3>
            <div class="gold-sponsors">
                <div class="sponsors__section">
                    <div class="valuable__sponsor ">
                        <h6>Diamond</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sponsors__logo diamond__logo">
                                    <a target="_blank" href="https://www.ortussolutions.com/">
                                        <img src="assets/img/sponsor/ortus.webp" alt="Ortus Solutions">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sponsors__logo diamond__logo">
                                    <a target="_blank" href="https://www.ortussolutions.com/">
                                        <img src="assets/img/sponsor/ortus.webp" alt="Ortus Solutions">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="valuable__sponsor ">
                        <h6>Organiser y Supporter</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="sponsors__logo gold__logo">
                                    <a href="https://jonthebeach.com/" aria-label="Read about the organizer" target="blank">
                                        <img src="assets/img/sponsor/jotb.webp" alt="J On The Beach">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sponsors__logo gold__logo">
                                    <a href="https://www.yeswetech.org/" aria-label="Read about the organizer" target="blank">
                                        <img src="assets/img/sponsor/ywt.webp" alt="J On The Beach">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sponsors__logo gold__logo">
                                    <a href="https://jonthebeach.com/" aria-label="Read about the organizer" target="blank">
                                        <img src="assets/img/sponsor/jotb_vertical_blanco.png" alt="J On The Beach">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="valuable__sponsor ">
                        <h6>Media & Training Sponsor</h6>
                        <div class="row ">
                            <div class="col-md-offset-1 col-md-2">
                                <div class="sponsors__logo silver__logo">
                                    <a href="https://socratech.es/" aria-label="Read about Socratech" target="blank">
                                        <img src="assets/img/sponsor/socratech.webp" alt="Socratech">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sponsors__logo silver__logo">
                                    <a href="https://adalab.es/" aria-label="Read about Adalab" target="blank">
                                        <img src="assets/img/sponsor/adalab.webp" alt="Adalab">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sponsors__logo silver__logo">
                                    <a href="https://adalab.es/" aria-label="Read about Adalab" target="blank">
                                        <img src="assets/img/sponsor/adalab.webp" alt="Adalab">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sponsors__logo silver__logo">
                                    <a href="https://adalab.es/" aria-label="Read about Adalab" target="blank">
                                        <img src="assets/img/sponsor/adalab.webp" alt="Adalab">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sponsors__logo silver__logo">
                                    <a href="https://adalab.es/" aria-label="Read about Adalab" target="blank">
                                        <img src="assets/img/sponsor/adalab.webp" alt="Adalab">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <button onclick="toggleBecome()">Become a sponsor</button>
        </section>

        <section class="newsletter">
            <h3>Subscribe to the latest news about <span>speakers, workshops, tickets, jobs, and offers!</span></h3>
<style type="text/css" scoped>
    .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
    .mauticform-innerform {}
    .mauticform-post-success {}
    .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
    .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
    .mauticform-page-wrapper.row{ display:flex !important}
    .mauticform-error { margin-bottom: 10px; color: red; }
    .mauticform-message { margin-bottom: 10px;color: green; }
    .mauticform-row { display: block; margin-bottom: 20px; }
    .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
    .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: " *"; display: inline; }
    .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
    .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
    .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
    .mauticform-checkboxgrp-row {}
    .mauticform-checkboxgrp-label { font-weight: normal; }
    .mauticform-checkboxgrp-checkbox {}
    .mauticform-radiogrp-row {}
    .mauticform-radiogrp-label { font-weight: normal; }
    .mauticform-radiogrp-radio {}
    .mauticform-button-wrapper .mauticform-button.btn-default, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
    .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
    .mauticform-button-wrapper .mauticform-button.btn-default[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-default[disabled] { background-color: #ffffff; border-color: #dddddd; opacity: 0.75; cursor: not-allowed; }
    .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }
</style><style type="text/css" scoped>
    .mauticform-field-hidden { display:none }
</style>

<div id="mauticform_wrapper_weyweywebnewsletter" class="mauticform_wrapper">
    <form autocomplete="false" role="form" method="post" action="https://mautic.jonthebeach.com/form/submit?formId=3" id="mauticform_weyweywebnewsletter" data-mautic-form="weyweywebnewsletter" enctype="multipart/form-data">
        <div class="mauticform-error" id="mauticform_weyweywebnewsletter_error"></div>
        <div class="mauticform-message" id="mauticform_weyweywebnewsletter_message"></div>
        <div class="mauticform-innerform">

          <div class="mauticform-page-wrapper row mauticform-page-1" data-mautic-form-page="1">

            <div id="mauticform_weyweywebnewsletter_register1" class="mauticform-row mauticform-email mauticform-field-1">
                <input id="mauticform_input_weyweywebnewsletter_register1" name="mauticform[register1]" value="" placeholder="Enter your e-mail here" class="mauticform-input" type="email">
                <span class="mauticform-errormsg" style="display: none;"></span>
            </div>

            <div id="mauticform_weyweywebnewsletter_register" class="mauticform-row mauticform-button-wrapper mauticform-field-2">
                <button type="submit" name="mauticform[register]" id="mauticform_input_weyweywebnewsletter_register" value="" class="mauticform-button btn btn-submit" style="height:100%; padding:0 20px">Register</button>
            </div>
            </div>
        </div>

        <input type="hidden" name="mauticform[formId]" id="mauticform_weyweywebnewsletter_id" value="3">
        <input type="hidden" name="mauticform[return]" id="mauticform_weyweywebnewsletter_return" value="">
        <input type="hidden" name="mauticform[formName]" id="mauticform_weyweywebnewsletter_name" value="weyweywebnewsletter">

        </form>
</div>
        </section>

        <!-- End Speakers Call to Action -->

        <!-- Speakers Section -->
        <section id="speakers-no" class="section light" style="display:none">
            <!-- <div class="overlay"></div> -->
            <div class="container">
                <div class="icon-wrap"><span class="icon icon-active icon-multimedia-12"></span></div>
                <h3>Speakers</h3>
                <div class="sub-title">Take part on the event! </div>
                <br />
                <br />
                <section class="row hidden">
                    <!-- Data beers -->
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="speaker-item animated hiding" data-animation="fadeInUp" data-delay="0" data-user="Databeers MLG">
                            <div class="img-wrapper">
                                <img src="assets/img/sponsor/DataBeersMLG.png" class="img-responsive img-circle" alt="https://www.meetup.com/DataBeers-Malaga/" />
                            </div>
                            <div class="name">DataBeers</div>
                            <div class="sub"></div>
                            <span class="btn btn-xs btn-primary speaker-speeches-btn" style="margin-bottom: 20px">Talk</span>
                            <div class="speaker-speeches-popup-content hidden">
                                <ul>
                                    <li>
                                        <h6 class="speaker-speeches-popup-content"></h6>
                                        <p class="speaker-speeches-popup-content">
                                          <p class="no-font-style"><strong>Program:</strong></p>
                                          <p class="no-font-style">"Papeles de Panamá: open data de datos secretos" por Mar Cabra, responsable de la Unidad de Ingestigación y Datos del Consorcio Internacional de Periodistas de investigación.</p>
                                          <p class="no-font-style">"Modern Data Science, Monogamy or Menage à Trois" por Lara Khanafer, Country Manager en Dataiku .</p>
                                          <p class="no-font-style">"Big Data: como entré en este mundo y sobreviví" por Juan Tomás García, Data Solutions Manager en OpenSistemas.</p>
                                          <p class="no-font-style">"UX for Data Jedi's: como visualizar el Big Data sin volverte loco" por Alberto García, especialista UX en Valo.</p>
                                          <a target="_blank" href="https://www.meetup.com/DataBeers-Malaga/events/229151489/?eventId=229151489">More info</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <p class="small">Databeers MLG pretends to gather data experiences and stories, share them amongst a group of multidisciplinary profiles with the only intention of knowing what the people close to you in Malaga knows and does better. The idea of this group is kind of simple: meet every few weeks, drink a few beers, and make a few (4-5) pecha-kucha presentations where people share their experiences with data.</p>
                            <div class="social-link">
                                <!--<a href="#"><span class="fa fa-facebook"></span></a>-->
                                <a target="_blank" href="https://twitter.com/databeers"><span class="fa fa-twitter"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Women in IT events -->
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="speaker-item animated hiding" data-animation="fadeInUp" data-delay="0" data-user="Yes We Tech">
                            <div class="img-wrapper">
                                <img src="assets/img/sponsor/ywt.png" class="img-responsive img-circle" alt="https://yeswetech.org" />
                            </div>
                            <div class="name">Yes We Tech</div>
                            <div class="sub"></div>
                            <span class="btn btn-xs btn-primary speaker-speeches-btn" style="margin-bottom: 20px">Talk</span>
                            <div class="speaker-speeches-popup-content hidden">
                                <ul>
                                    <li>
                                        <h6 class="speaker-speeches-popup-content"></h6>
                                        <p class="speaker-speeches-popup-content">
                                            Soon more info
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <p class="small">Yes We Tech is a feminist community that promotes equality in the IT sector.</p>
                            <div class="social-link">
                                <!--<a href="#"><span class="fa fa-facebook"></span></a>-->
                                <a target="_blank" href="https://twitter.com/yeswetech_"><span class="fa fa-twitter"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Malaga scala developers -->
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="speaker-item animated hiding" data-animation="fadeInUp" data-delay="0" data-user="Malaga Scala Developers & Malaga JUG">
                            <div class="img-wrapper">
                                <img src="assets/img/sponsor/scala.png" class="img-responsive img-circle" alt="https://www.meetup.com/Malaga-Scala/" />
                            </div>
                            <div class="name">Malaga Scala Developers & Malaga JUG</div>
                            <div class="sub"></div>
                            <span class="btn btn-xs btn-primary speaker-speeches-btn" style="margin-bottom: 20px">Talk</span>
                            <div class="speaker-speeches-popup-content hidden">
                                <ul>
                                    <li>
                                        <h6 class="speaker-speeches-popup-content">Java Champions and Scala leaders</h6>
                                        <p class="speaker-speeches-popup-content">
                                            The accidential tourist guide to JMC/JFR - Kirk Pepperdine
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <p class="small">
                                Malaga Scala Developers is the Scala fan community in Malaga.
                                Malaga JUG is the Java User Group of Malaga.
                            </p>
                            <div class="social-link">
                                <!--<a href="#"><span class="fa fa-facebook"></span></a>-->
                                <a target="_blank" href="https://twitter.com/malagascala"><span class="fa fa-twitter"></span></a>
                            </div>
                        </div>
                    </div>

                </section>

                <?php
                    $aFiles = scandir($_SERVER["DOCUMENT_ROOT"].'/sections/speakers/');
                    unset($aFiles[0]);
                    unset($aFiles[1]);

                    $iIndex = 0;
                    foreach($aFiles AS $oFile){
                        if(is_dir($_SERVER["DOCUMENT_ROOT"].'/sections/speakers/'.$oFile)){
                            continue;
                        }
                        if($iIndex==0){
                            echo '<section class="row">';
                        }

                        $iDelay = $iIndex * 500;

                    ?>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <?php include $_SERVER["DOCUMENT_ROOT"].'/sections/speakers/' . $oFile; ?>
                        </div>
                <?php
                        $iIndex++;
                        if($iIndex == 4){
                            echo '</section>';
                            $iIndex = 0;
                        }
                    }
                ?>
                <!-- End Speakers -->
                <div class="btn-wrapper">
                    <a href="#" class="btn btn-sm btn-default">Soon more speakers</a>
                </div>
            </div>
        </section>
        <!-- End Speakers Section -->

        <!-- Newsletter Section -->
        <?php //include  $_SERVER["DOCUMENT_ROOT"]. '/sections/newsletter.php'?>

        <!-- Special offers Section -->
        <?php //include  $_SERVER["DOCUMENT_ROOT"]. '/sections/special-offers.php'?>

        <!-- Videos Section -->
        <?php //include  $_SERVER["DOCUMENT_ROOT"]. '/sections/videos.php'?>

        <!-- Images Section -->
        <!-- <?php include  $_SERVER["DOCUMENT_ROOT"]. '/sections/images.php'?> -->

        <!-- Blog Section -->
        <!-- <?php include  $_SERVER["DOCUMENT_ROOT"]. '/sections/blog/blog.php'?> -->

        <!-- Register Section -->
        <?php //include  $_SERVER["DOCUMENT_ROOT"]. '/sections/code-of-conduct/code-of-conduct.php'?>

        <!-- Sponsors Section -->
        <section id="sponsors-no" class="section dark" style="display:none">
            <div class="container">
                <div class="icon-wrap"><span class="icon icon-active icon-documents-bookmarks-12"></span></div>
                <h3>Sponsors</h3>

                <div class="tab-pane fade in active">
                  <!-- PLATINUM SPONSORS LOGOS (1st row) -->
                  <div class="gold-sponsors">
                      <div class="sub-title">
                          <h6>Platinum</h6>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="v_align">
                                  <a target="_blank" href="https://www.theworkshop.com/" class="collapsed">
                                      <img src="assets/img/sponsor/TheWorkshop.png" class="size-1" alt="https://www.theworkshop.com/" />
                                  </a>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="v_align">
                                  <a target="_blank" href="https://jelastic.com/" class="collapsed">
                                      <img src="assets/img/sponsor/jelastic_logo.png" class="size-1" alt="https://jelastic.com/" />
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>

                    <!-- GOLD SPONSORS LOGOS (2nd row) -->
                    <div class="gold-sponsors">
                        <div class="sub-title">
                            <h6>Gold</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href="https://www.ravenpack.com" class="collapsed">
                                        <img src="assets/img/sponsor/RavenPack.png" class="size-2" alt="https://www.ravenpack.com" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                                <div class="v_align">
                                    <a href="https://www.47deg.com/" target="_blank">
                                        <img src="assets/img/sponsor/47deg-logo.png" class="size-2" alt="https://www.47deg.com/" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href="https://www.ciklum.com/" class="collapsed">
                                        <img src="assets/img/sponsor/Ciklum.png" class="size-2" alt="https://www.ciklum.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12Sponsors pull-right">
                                <div class="v_align">
                                    <a target="_blank" href="https://www.piksel.com/" class="collapsed">
                                        <img src="assets/img/sponsor/piksel.jpg" class="size-2" alt="https://www.piksel.com/" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SILVER SPONSORS LOGOS (1st row) -->
                    <div class="silver-sponsors">
                        <div class="sub-title">
                            <h6>Silver</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href="https://www.intellimentsec.com/" class="collapsed">
                                        <img src="assets/img/sponsor/Intelliment.png" class="size-2" alt="https://www.intellimentsec.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href="https://www.salesforce.com/" class="collapsed">
                                        <img src="assets/img/sponsor/salesforce.png" class="size-2" alt="https://www.salesforce.com/" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BRONZE SPONSORS LOGOS -->
                    <div class="bronze-sponsors">
                        <div class="sub-title">
                            <h6>Bronze</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href="https://www.graphenedb.com/">
                                        <img src="assets/img/sponsor/GrapheneDB.png" class="size-3" alt="https://www.graphenedb.com" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MEDIA PARTNER LOGOS -->
                    <div class="media-partner-logos">
                        <div class="sub-title">
                            <h6>Media partners</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href=https://dataelixir.com/>
                                    <img src="assets/img/sponsor/DataElixir.png" class="size-3" alt="https://dataelixir.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href=https://skillsmatter.com/>
                                    <img src="assets/img/sponsor/SkillsMatter.png" class="size-3" alt="https://skillsmatter.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href=https://www.8kdata.com/>
                                    <img src="assets/img/sponsor/8kdata.jpg" class="size-3" alt="https://www.8kdata.com/" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Organizers -->
                    <div class="organizers-logos">
                        <div class="sub-title">
                            <h3>Organizers</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="v_align">
                                    <a href="https://yeswetech.org" target="_blank">
                                        <img src="assets/img/sponsor/ywt.png" alt="https://yeswetech.org" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="v_align">
                                    <a href="https://www.meetup.com/MalagaJUG" target="_blank">
                                        <img src="assets/img/sponsor/jug.png" alt="https://www.meetup.com/MalagaJUG/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="v_align">
                                    <a href="https://www.meetup.com/Malaga-Scala//" target="_blank">
                                        <img src="assets/img/sponsor/scala.png" alt="https://www.meetup.com/Malaga-Scala/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="v_align">
                                    <a href="https://www.meetup.com/DataBeers-Malaga/" target="_blank">
                                        <img src="assets/img/sponsor/DataBeersMLG.png" alt="https://www.meetup.com/DataBeers-Malaga/" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hosted by -->
                    <div class="hosted-by-logos">
                        <div class="sub-title">
                            <h3>Hosted by</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="v_align">
                                    <a href="https://www.valo.io/" target="_blank">
                                        <img src="assets/img/sponsor/valo.png" alt="https://www.valo.io/" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Supporters -->
                    <div class="supporters-logos">
                        <div class="sub-title">
                            <h3>Supporters</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a href="https://www.latermicamalaga.com/" target="_blank">
                                        <img src="assets/img/sponsor/termica.png" alt="https://www.latermicamalaga.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a href="https://www.malaga.es/" target="_blank">
                                        <img src="assets/img/sponsor/diputacion.png" alt="https://www.malaga.es/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a href="https://www.pta.es/" target="_blank">
                                        <img src="assets/img/sponsor/IDEA.png" alt="https://www.pta.es/" />
                                    </a>
                                </div>
                            </div>
                          </div>
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="v_align">
                                  <a href="https://www.47deg.com/" target="_blank">
                                      <img src="assets/img/sponsor/47deg-logo.png" alt="https://www.47deg.com/" />
                                  </a>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="v_align">
                                  <a href="https://www.microsoft.com/" target="_blank">
                                      <img src="assets/img/sponsor/microsoft-logo.png" alt="https://www.microsoft.com/" />
                                  </a>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="v_align">
                                  <a href="https://www.malaga.eu/" target="_blank">
                                      <img src="assets/img/sponsor/ayuntamiento-malaga.jpg" alt="https://www.malaga.eu/" />
                                  </a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="btn-wrapper">
                                <a target='_blank' href="/assets/files/SponsorshipPackagesJ_OnTheBeach.pdf" class="btn btn-sm btn-primary">Become a sponsor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Price Section -->
        <!-- Map Section -->
        <section id="map" class="dark">
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.163427659557!2d-4.428520485008898!3d36.71863607996542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f7970440f493%3A0xfa83331eccab60c2!2sC.%20San%20Jacinto%2C%202%2C%2029007%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1662386670599!5m2!1ses!2ses" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container" style="width:fit-content; margin-left:40px">
                <div class="row" style="width:fit-content">
                    <div class="animated hiding location" data-animation="fadeInLeft" data-delay="0">
                        <h3>Location</h3>
                        <ul itemscope="" itemtype="https://schema.org/PostalAddress">
                            <li itemprop="address"><i class="fa fa-map-marker highlight"></i>Málaga, Spain</li>
                            <li itemprop="email"><i class="fa fa-envelope highlight"></i>&#105;&#110;&#102;&#111;&#64;&#106;&#111;&#110;&#116;&#104;&#101;&#98;&#101;&#97;&#99;&#104;&#46;&#99;&#111;&#109;</li>
                            <li itemprop="telephone"><i class="fa fa-phone highlight"></i>(0034) 633 398 316</li>
                            <li itemscope="" itemtype="https://schema.org/Event"><i class="fa fa-clock-o highlight"></i>
                                <time itemprop="startDate" datetime="2022-12-15T08:30">9:00</time> -
                                <time itemprop="endDate" datetime="2022-12-16T22:00">18:00</time>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Map Section -->
        <footer id="footer">
            <div class="content">
                <div class="img">
                    <img src="/assets/img/logoprincipal_fondooscuro.png" alt="">
                </div>
                <div class="social">
                    <div>
                        <a target="_blank" title="Twitter" href="https://twitter.com/WeyWeyWeb"><span class="fa fa-twitter"></span></a>
                    </div>
                </div>
                <div class="mail">
                    <a href="mailto:info@jonthebeach.com">info@jonthebeach.com</a>
                </div>
            </div>
            <div class="copyright">
                Copyright © 2022 Wey Wey Web
            </div>
        </footer>

        <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>
        <iframe id="my_iframe_download" style="display:none;"></iframe>

        <!--[if lt IE 9]>
              <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
          <![endif]-->

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
        <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
        <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
        <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
        <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="assets/mailchimp/js/mailing-list.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <script type="text/javascript" src="assets/js/toggles.js"></script>
        

        <!-- <script>
            function Download(event,msgId) {
                var msg = document.getElementById(msgId)
                var download = true;
                var inputs = document.getElementsByClassName("mautic-input-sponsor")

                for (var i = 0; i < inputs.length; i++) {
                    if(!inputs[i].checkValidity()){
                        download=false;
                    }
                }
                if(download){
                    var link = document.createElement("a");
                    // If you don't know the name or want to use
                    // the webserver default set name = ''
                    link.setAttribute('download', name);
                    link.href = './assets/files/WeyWeyWeb22_brochure.pdf';
                    document.body.appendChild(link);
                    link.click();
                    link.remove();
                    msg.style.display = "block";
                }
            };
        </script> -->
        
        <!-- <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                function algo(){
                var formu = document.getElementById('form_sponsor')
                console.log('hola',formu)
                formu.preventDefault();
                if(formu.addEventListener){
                    formu.addEventListener("submit", Download, false);
                }else if(formu.attachEvent){
                    formu.attachEvent('onsubmit', Download);
                }
            }
                algo()
            });
            
            
        </script> -->

        <?php
        foreach($oJavascript->js AS $sJs){
            echo $sJs;
        }
        ?>
        <script>
  feather.replace()


</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/brands.min.js"></script>


    <script>
    
    // 'use strict';

function Tabs() {
  var bindAll = function() {
    var menuElements = document.querySelectorAll('[data-tab]');
    for(var i = 0; i < menuElements.length ; i++) {
      menuElements[i].addEventListener('click', change, false);
    }
  }

  var clear = function() {
    var menuElements = document.querySelectorAll('[data-tab]');
    for(var i = 0; i < menuElements.length ; i++) {
      menuElements[i].classList.remove('active');
      var id = menuElements[i].getAttribute('data-tab');
      document.getElementById(id).classList.remove('active');
    }
  }

  var change = function(e) {
    clear();
    e.target.classList.add('active');
    var id = e.currentTarget.getAttribute('data-tab');
    document.getElementById(id).classList.add('active');
  }

  bindAll();
}

var connectTabs = new Tabs();
    </script>


    </body>

</html>
