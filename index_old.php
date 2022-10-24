<?php

define("DOCUMENT_ROOT",$_SERVER['DOCUMENT_ROOT']);
include  DOCUMENT_ROOT . '/inc/config.php';

?>
<!doctype html>
<html itemscope itemtype="http://schema.org/Event" lang="en">
    <head>
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
        <title>J on the beach</title>
        <meta name="description" content="The total IT conference for developers & DevOps on the beach. Sun, code, Big Data, JVM and loads of fun!">
        <meta name="keywords" content="Big Data, JVM, DevOps">
        <meta name="author" content="Jon the Beach">

        <!-- Facebook sharing properties - Open graph -->
        <meta property='og:title' content='J on the beach'>
        <meta property='og:image' content='http://www.jonthebeach.com/assets/img/logo.png'>
        <meta property='og:description' content='The total IT conference for developers & DevOps on the beach. Sun, code, Big Data, JVM and loads of fun! - 20th-21st May 2016  La Térmica, Málaga, Spain'>
        <meta property='og:url' content='//www.jonthebeach.com/'>

        <!-- Twitter sharing protocol -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@J_OnTheBeach" />
        <meta name="twitter:title" content="J on the beach" />
        <meta name="twitter:description" content="The total IT conference for developers & DevOps on the beach. Sun, code, Big Data, JVM and loads of fun! - 20th-21st May 2016  La Térmica, Málaga, Spain" />
        <meta name="twitter:image" content="http://www.jonthebeach.com/assets/img/logo.png" />

        <!--  Google + sharing protocol. -->
        <meta itemprop="name" content="J On the beach">
        <meta itemprop="description" content="The total IT conference for developers &amp; DevOps on the beach. Sun, code, Big Data, JVM and loads of fun! - 20th-21st May 2016  La Térmica, Málaga, Spain">
        <meta itemprop="image" content="http://www.jonthebeach.com/assets/img/logo.png">

        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">

        <link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,700' rel='stylesheet' type='text/css'>

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
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "http://www.jonthebeach.com",
          "logo": "http://www.jonthebeach.com/assets/img/logo.png"
        }
        </script>
    </head>
    <body id="index">
        <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nunk9&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
        <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nunk9&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
        </noscript>
        <!-- Preloader -->
        <div id="mask">
            <div id="loader"><img src="assets/img/preloader.gif" alt="preloader" /></div>
        </div>
        <header id="mobileheader" class="navigation-bar-header light visible-xs"></header>
        <!-- Hero Section -->
        <section id="hero" class="light">
            <div class="container">
                <div class="home-bg">
                    <nav class="navigation navigation-social">
                        <ul class="navigation-bar">
                            <li><a target="_blank" title="Twitter" href="http://twitter.com/J_OnTheBeach"><span class="fa fa-twitter"></span></a></li>
                            <!-- <li><a href="#"><span class="fa fa-facebook"></span></a>
                            <li><a href="#"><span class="fa fa-github"></span></a>
                            <li><a href="#"><span class="fa fa-vimeo-square"></span></a>-->
                            <li><a target="_blank" title="Google +" href="https://plus.google.com/u/0/+Jonthebeach"><span class="fa fa-google-plus"></span></a></li>
                            <!--<li><a target="_blank" title="Flickr" href="http://flickr.com"><span class="fa fa-flickr"></span></a></li>-->
                            <!-- <li><a href="#"><span class="fa fa-instagram"></span></a>-->
                        </ul>
                    </nav>
                    <div class="hero-content text-center ">
                        <div class="hero-small">
                            <hr /><span><span class="fa fa-calendar"></span>20th-21st May 2016
                                <div class="sep"></div> <span class="fa fa-map-marker"></span>La Térmica, Málaga, Spain</span>
                            <hr />
                        </div>
                        <div class="hero-big">J on the beach</div>
                        <div class="hero-normal">Bringing developers and DevOps together around <strong>Big Data</strong></div>
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
                            <a href="https://www.youtube.com/watch?v=y37FMhtaEIg&feature=youtu.be&a" target="_blank" class="btn btn-lg btn-3d">
                                <i class="fa fa-play-circle fa-2x"></i>
                                <span>Watch video</span>
                            </a>
                        <?php //}?>
                        <!--<a href="https://jonthebeach.eventbrite.co.uk" target="_blank" class="btn btn-sm btn-default">Get Tickets</a>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
        <!-- Header -->
        <header id="header" class="navigation-bar-header light hidden-xs">
            <div class="container">
                <nav class="navigation">
                    <div class="navigation-txt visible-xs" data-toggle="dropdown">Home</div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="navigation-bar navigation-bar-left">
                        <li><a href="#about">About</a></li>
                        <!--<li><a href="#stat">Number Facts</a></li>-->
                        <li><a href="#schedule">Schedule</a></li>
                        <li><a href="#speakers">Speakers</a></li>
                        <li><a href="#videos">Videos</a></li>
                        <li><a href="#images">Pictures</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#map">Contact</a></li>
                        <li class="navigation-item dropdown"><a href="/sections/jobs/jobs.php">Jobs</a>
                          <ul class="dropdown-menu">
                              <li class="navigation-item"><a href='/sections/jobs/jobs_theworkshop.php' class="navigation-link">The Workshop</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_ravenpack.php' class="navigation-link">Ravenpack</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_47degrees.php' class="navigation-link">47 Degrees</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_ciklum.php' class="navigation-link">Ciklum</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_piksel.php' class="navigation-link">Piksel</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_intellimentsec.php' class="navigation-link">Intelliment Security</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_salesforce.php' class="navigation-link">Salesforce</a></li>
                                <li class="navigation-item"><a href='/sections/jobs/jobs_graphenedb.php' class="navigation-link">GrapheneDB</a></li>
                                <!-- <li class="navigation-item"><a href='#' class="navigation-link">Valo</a></li> -->
                            </ul>
                        </li>
                        <!--<li class="featured"><a href="https://jonthebeach.eventbrite.co.uk"><i class="fa fa-ticket fa-1x"></i>Buy Tickets</a></li>-->
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End Header -->
        <!-- About Section -->
        <section id="about" class="section dark">
            <div class="container">
                <div class="icon-wrap"><span class="icon icon-active icon-multimedia-12"></span></div>
                <h3>J on the Beach </h3>
                <div class="sub-title"> + Data on the Beach <span class="highlight"> </span></div>
                <br />
                <br />
                <section class="nav-tabs-simple">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#htmlcss" data-toggle="tab"><i class="icon icon-chat-messages-01"></i> Business talks</a></li>
                        <li><a href="#jquery" data-toggle="tab"><i class="icon icon-education-science-11"></i> Technical talks</a></li>
                        <li><a href="#php" data-toggle="tab"><i class="icon icon-documents-bookmarks-12"></i> About us</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="htmlcss">
                            <article class="row">
                                <div class="col-md-5 col-sm-5 animated hiding" data-animation="fadeInLeft" data-delay="500">
                                    <img class="img-responsive" src="assets/img/SpeakerWoman.jpg" alt="starbuck" />
                                </div>
                                <div class="col-md-6 col-sm-6 text-left animated hiding" data-animation="fadeInRight" data-delay="500">
                                    <h6>Business talks</h6>
                                    <p>In only <strong>2 days</strong> you will be able to check the pulse of your company's tech capabilities with regards to <span class="highlight">Big Data.</span> Below are the main topics that will be covered in <a href="#">Data on the beach</a>.</p>
                                    <ul class="sub-list">
                                        <li><i class="icon icon-documents-bookmarks-16"></i> Big Data Solutions</li>
                                        <li><i class="icon icon-documents-bookmarks-11"></i> DevOps and infrastructures</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="jquery">
                            <article class="row">
                                <div class="col-md-6 col-sm-6 text-left animated hiding" data-animation="fadeInLeft" data-delay="500">
                                    <h6>Technical talks</h6>
                                    <p>A complete conference for <strong> developers & DevOps</strong> to learn the latest tendencies in BigData & Analytics. <span class="highlight">Local Communities</span> will host several meetups.</p>
                                    <ul class="sub-list">
                                        <li><i class="icon icon-documents-bookmarks-11"></i> Big infrastructures: Use cases & practices</li>
                                        <li><i class="icon icon-documents-bookmarks-10"></i> Big Data platforms</li>
                                        <li><i class="icon icon-documents-bookmarks-10"></i> Data Science</li>
                                        <li><i class="icon icon-documents-bookmarks-16"></i> Performance in the JVM</li>
                                    </ul>
                                </div>
                                <div class="col-md-5 col-sm-5 animated hiding" data-animation="fadeInRight" data-delay="500">
                                    <img class="img-responsive" src="assets/img/CodeC+.jpg" alt="placeholder" />
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="php">
                            <article class="row">
                                <div class="col-md-5 col-sm-5 animated hiding" data-animation="fadeInLeft" data-delay="500">
                                    <img class="img-responsive" src="assets/img/Speakerintech.jpg" alt="iphone" />
                                </div>
                                <div class="col-md-6 col-sm-6 text-left animated hiding" data-animation="fadeInRight" data-delay="500">
                                    <h6>About the event</h6>
                                    <p>This event is organized by <strong>Malaga Scala Developers, Yes We Tech, Malaga JUG & DatabeersMLG</strong> hosted by <strong>Valo</strong> and with the support of the <strong>province government of Malaga and La Termica</strong>.
                                    <p>This is a <strong>non-profit</strong> event meaning that all funds raised will be spent to cover the expenses.
                                    <p><span class="highlight">Women in tech:</span> this event is also committed with encouraging women to speak in this conference.
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
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="0">
                            <div class="stat"><span class="value" data-from="0" data-to="40">40+</span>+</div>
                            <div class="stat-info">speakers</div>
                            <hr />
                            <p class="small">International speakers from leading companies sharing their best practices.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="500">
                            <div class="stat"><span class="value" data-from="0" data-to="4">4</span></div>
                            <div class="stat-info">keynotes</div>
                            <hr />
                            <p class="small">World class creators of technologies will open and close each day of the event.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="1000">
                            <div class="stat"><span class="value" data-from="0" data-to="350">350+</span>+</div>
                            <div class="stat-info">attendees</div>
                            <hr />
                            <p class="small">Mingle with top executives and promising developers & DevOps.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="1500">
                            <div class="stat"><span class="value" data-from="0" data-to="2">2</span></div>
                            <div class="stat-info">days of fun</div>
                            <hr />
                            <p class="small">It is ON THE BEACH!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Stat Section -->
        <!-- Schedule Section -->
        <section id="schedule" class="section dark">
            <div class="container">
                <div class="icon-wrap"><span class="icon icon-active icon-text-hierarchy-07"></span></div>
                <h3>Schedule</h3>
                <div class="sub-title">J & Data on the Beach</div>
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
                                            <a href="#" class="event-speaker opening-speaker" data-name="Sergey Bykov">
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
                                                    <a target="_blank" href="http://www.meetup.com/DataBeers-Malaga/events/229151489/?eventId=229151489">More info</a>
                                                </div>
                                                <i class="speaker-img fa fa-user"></i>
                                                <a href="http://www.meetup.com/es-ES/DataBeers-Malaga/events/229151489/" class="event-speaker" data-name="Databeers MLG">
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
                                        <td class="active common-event colorblue" colspan="3">Opening keynote by <a href="#" class="event-speaker opening-speaker" data-name="Justo Ruiz Ferrer">
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
					console.log('se muestra');
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
            <div class="overlay"></div>
            <div class="container">
                <div class="icon-wrap"><span class="icon icon-active icon-multimedia-12"></span></div>
                <h3>Speakers</h3>
                <div class="sub-title">No unicorns, no caticorns, just software development </div>
                <br />
                <br />
                <section class="row hidden">
                    <!-- Data beers -->
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="speaker-item animated hiding" data-animation="fadeInUp" data-delay="0" data-user="Databeers MLG">
                            <div class="img-wrapper">
                                <img src="assets/img/sponsor/DataBeersMLG.png" class="img-responsive img-circle" alt="http://www.meetup.com/DataBeers-Malaga/" />
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
                                          <a target="_blank" href="http://www.meetup.com/DataBeers-Malaga/events/229151489/?eventId=229151489">More info</a>
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
                                <img src="assets/img/sponsor/ywt.png" class="img-responsive img-circle" alt="http://yeswetech.org" />
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
                                <img src="assets/img/sponsor/scala.png" class="img-responsive img-circle" alt="http://www.meetup.com/Malaga-Scala/" />
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
        <?php include  $_SERVER["DOCUMENT_ROOT"]. '/sections/videos.php'?>

        <!-- Images Section -->
        <?php include  $_SERVER["DOCUMENT_ROOT"]. '/sections/images.php'?>

        <!-- Blog Section -->
        <?php include  $_SERVER["DOCUMENT_ROOT"]. '/sections/blog/blog.php'?>

        <!-- Register Section -->
        <?php //include  $_SERVER["DOCUMENT_ROOT"]. '/sections/code-of-conduct/code-of-conduct.php'?>

        <!-- Sponsors Section -->
        <section id="sponsors" class="section dark">
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
                                  <a target="_blank" href="http://www.theworkshop.com/" class="collapsed">
                                      <img src="assets/img/sponsor/TheWorkshop.png" class="size-1" alt="http://www.theworkshop.com/" />
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
                                    <a target="_blank" href="http://www.ravenpack.com" class="collapsed">
                                        <img src="assets/img/sponsor/RavenPack.png" class="size-2" alt="http://www.ravenpack.com" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                                <div class="v_align">
                                    <a href="http://www.47deg.com/" target="_blank">
                                        <img src="assets/img/sponsor/47deg-logo.png" class="size-2" alt="http://www.47deg.com/" />
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
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                                <div class="v_align">
                                    <a target="_blank" href="http://www.piksel.com/" class="collapsed">
                                        <img src="assets/img/sponsor/piksel.jpg" class="size-2" alt="http://www.piksel.com/" />
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
                                    <a target="_blank" href="http://www.intellimentsec.com/" class="collapsed">
                                        <img src="assets/img/sponsor/Intelliment.png" class="size-2" alt="http://www.intellimentsec.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href="http://www.salesforce.com/" class="collapsed">
                                        <img src="assets/img/sponsor/salesforce.png" class="size-2" alt="http://www.salesforce.com/" />
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
                                    <a target="_blank" href="http://www.graphenedb.com/">
                                        <img src="assets/img/sponsor/GrapheneDB.png" class="size-3" alt="http://www.graphenedb.com" />
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
                                    <a target="_blank" href=http://dataelixir.com/>
                                    <img src="assets/img/sponsor/DataElixir.png" class="size-3" alt="http://dataelixir.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a target="_blank" href=http://skillsmatter.com/>
                                    <img src="assets/img/sponsor/SkillsMatter.png" class="size-3" alt="http://skillsmatter.com/" />
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
                                    <a href="http://yeswetech.org" target="_blank">
                                        <img src="assets/img/sponsor/ywt.png" alt="http://yeswetech.org" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="v_align">
                                    <a href="http://www.meetup.com/MalagaJUG" target="_blank">
                                        <img src="assets/img/sponsor/jug.png" alt="http://www.meetup.com/MalagaJUG/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="v_align">
                                    <a href="http://www.meetup.com/Malaga-Scala//" target="_blank">
                                        <img src="assets/img/sponsor/scala.png" alt="http://www.meetup.com/Malaga-Scala/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="v_align">
                                    <a href="http://www.meetup.com/DataBeers-Malaga/" target="_blank">
                                        <img src="assets/img/sponsor/DataBeersMLG.png" alt="http://www.meetup.com/DataBeers-Malaga/" />
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
                                    <a href="http://www.valo.io/" target="_blank">
                                        <img src="assets/img/sponsor/valo.png" alt="http://www.valo.io/" />
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
                                    <a href="http://www.latermicamalaga.com/" target="_blank">
                                        <img src="assets/img/sponsor/termica.png" alt="http://www.latermicamalaga.com/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a href="http://www.malaga.es/" target="_blank">
                                        <img src="assets/img/sponsor/diputacion.png" alt="http://www.malaga.es/" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="v_align">
                                    <a href="http://www.pta.es/" target="_blank">
                                        <img src="assets/img/sponsor/IDEA.png" alt="http://www.pta.es/" />
                                    </a>
                                </div>
                            </div>
                          </div>
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="v_align">
                                  <a href="http://www.47deg.com/" target="_blank">
                                      <img src="assets/img/sponsor/47deg-logo.png" alt="http://www.47deg.com/" />
                                  </a>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="v_align">
                                  <a href="http://www.microsoft.com/" target="_blank">
                                      <img src="assets/img/sponsor/microsoft-logo.png" alt="http://www.microsoft.com/" />
                                  </a>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="v_align">
                                  <a href="http://www.malaga.eu/" target="_blank">
                                      <img src="assets/img/sponsor/ayuntamiento-malaga.jpg" alt="http://www.malaga.eu/" />
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
            <div id="canvas-map"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-7 animated hiding location" data-animation="fadeInLeft" data-delay="0">
                        <h3>Location</h3>
                        <ul itemscope="" itemtype="http://schema.org/PostalAddress">
                            <li itemprop="address"><i class="fa fa-map-marker highlight"></i>Av. de los Guindos, 48, 29004 Málaga, Spain</li>
                            <li itemprop="email"><i class="fa fa-envelope highlight"></i>info@jonthebeach.com</li>
                            <li itemprop="telephone"><i class="fa fa-phone highlight"></i>(0034) 951 255 080</li>
                            <li itemscope="" itemtype="http://schema.org/Event"><i class="fa fa-clock-o highlight"></i>
                                <time itemprop="startDate" datetime="2016-05-20T08:30">8:30</time> -
                                <time itemprop="endDate" datetime="2016-05-21T22:00">22:00</time>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Map Section -->
        <footer id="footer">

        </footer>

        <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>

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


        <?php
        foreach($oJavascript->js AS $sJs){
            echo $sJs;
        }
        ?>
    </body>

</html>
