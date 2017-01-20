<?php
// Begin PHP

// Include Password File
include 'password.php';

// Feedback Form
if(isset($_POST['contactsubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'sstctf@gmail.com';
    $body = "From: $name\nEmail: $email\nMessage:\n\n$message";
    $err = False;

    if (!$_POST["name"]) {
        $errName = 'Please enter your name.';
        $err = True;
    }

    if (!$_POST["email"] || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email.';
        $err = True;
    }

    if (!$_POST["subject"]) {
        $errSubject = 'Please enter a subject.';
        $err = True;
    }

    if (!$_POST["message"]) {
        $errMessage = 'Please enter a message.';
        $err = True;
    }

    if (!$err) {
        if (mail('sstctf@gmail.com', $subject, $body)) {
            $result = '<div class="alert alert-success">Thank you! We will be in touch.</div>';
        } else {
            $result = '<div class="alert alert-danger">Sorry, there was an error. Try again.</div>';
        }
    } 
}
/*
// Newsletter Subscription
if(isset($_POST['newslettersubmit'])) {
    // Local Variables

    // Escape user input
    $email = $_POST['email'];
    $escapedemail = mysqli_real_escape_string($email);

    $subject = 'SST CTF Subscription Verification';
    $servername = "localhost";
    $username = "www";
    //$password = "NULL";
    $dbname = "website";
    $err = False;
    
    // Filter emails
    if (!$_POST["email"] || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

        $err = True;
        $newsresult = '<div class="alert alert-success">This is not a valid email.</div>';

    } else {

        // Create Connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check Connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            $err = True; 
        } 
*/
/*        
        // Check for previous information
        $sql = "SELECT email FROM newsletter WHERE email='".$email."'";
        $match = mysql_num_rows($search);

        if ($match > 1) {
            $err = True;
        }
*/ 
/*         Insert user email into 'newsletter' table
        $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
    
        // Check is we actually did something
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $err = True;
        } 
 */
        
/*
        // Finish up based on if we ran into any problems
        if (!$err) {
            
            $hash = bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
            $sql = "INSERT INTO verification (email, hash) VALUES('$escapedemail', '$hash')";

            if ($conn->query($sql) === FALSE) {
                $err = True;
            }

            $body = '
            Thanks for signing up to SST CTF newsletter!
            Please click this link to activate your account.
            If this is not you, please ignore this message.

            http://sstctf.org/?email='.$email.'&hash='.$hash.'#footer';

            if (mail($email, $subject, $body) || !$err) {
                $newsresult = '<div class="alert alert-success">Thank you! You will recieve an email from us shortly.</div>';
            } else {
                $newsresult = '<div class="alert alert-success">Sorry, there was an error. Try again.</div>';
            }
        } 

        // Close the Connection
        $conn->close();
    }
}
 */
/*
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) {

    $email = mysql_escape_string($_GET['email']);
    $hash = mysql_escape_string($_GET['hash']);

    $search = mysql_query("SELECT email, hash FROM verification WHERE email='".$email."' AND hash='".$hash."'"); 
    $match  = mysql_num_rows($search);
}*/

// End PHP
?>

<!DOCTYPE html>

<!--[if lt IE 7]>       <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>          <html lang="en" class="no-js lt-ie9 lt-ie8">        <![endif]-->
<!--[if IE 8]>          <html lang="en" class="no-js lt-ie9">               <![endif]-->
<!--[if gt IE 8]> <!--> <html lang="en" class="no-js"> <!--                 <![endif]-->

<head>
<!-- Meta Character Set -->
<meta charset="utf-8">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>SST CTF Official Website</title>		
<!-- Meta Description -->
<meta name="description" content="SST CTF - We are the school of science and technology's hacking and programming team.">
<meta name="keywords" content="SST, School, Science, Technology, CTF, Capture the Flag, Security, Exploitation, Reverse, Engineering, SSTCTF">
<meta name="author" content="Tamir Enkhjargal, Andrew Quach, Otakar Andrysek, Stan Lyakhov">

<!-- Google Verification -->
<meta name="google-site-verification" content="UBs4jASomwF_YMWLyNnFunTjHGTsLOFmdpRVU1j3KOs" />

<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Testing something -->

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>	

<!-- Fontawesome Icon font -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- bootstrap.min -->
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/slit-slider.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/main.css">

<!-- Modernizer Script for Old Browsers -->
<script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body id="body">
<!-- <?php include_once("analyticstracking.php") ?> -->

<!-- Preloader -->
<div id="preloader">
    <div class="loader-box">
        <div class="battery">
       	</div>
    </div>
</div>
<!-- End Preloader -->

<!-- Fixed Navigation -->
<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- Responsive Navigation Button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- End Responsive Navigation Button -->

            <!-- Logo -->
            <h1 class="navbar-brand">
                <a href="#body" style="color: #f2f2f2; text-decoration: none;">SST CTF</a>
            </h1>
            <!-- End Logo -->
        </div>

        <!-- Main Navigation -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li><a href="#body">Home</a></li>
                <li><a href="#about">Details</a></li>
                <li><a href="#portfolio">Projects</a></li>
                <li><a href="#testimonials">Members</a></li>
                <li><a href="#price">Schedule</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        <!-- End Main Navigation -->

    </div>
</header>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>	
<main class="site-content" role="main">
    <!-- Home Slider -->		
    <section id="home-slider">
        <!-- sl-slider -->
        <div id="slider" class="sl-slider-wrapper">
            <div class="sl-slider">
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="bg-img bg-img-1"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown">SST CTF</h2>
                            <span class="animated fadeInDown">'A' days | Novitt's Room | After School</span>
                            <a href="#about" class="btn btn-blue btn-effect">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="bg-img bg-img-2"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2>SST CTF</h2>
                            <span>New Members Welcome!</span>
                            <a href="#about" class="btn btn-blue btn-effect">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="bg-img bg-img-3"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2>SST CTF</h2>
                            <span>Active and Future Projects</span>
                            <a href="#about" class="btn btn-blue btn-effect">Learn More</a>
                        </div>
                    </div>
                </div>

        <!-- End sl-slider -->

        <!-- 
            <nav id="nav-arrows" class="nav-arrows">
                <span class="nav-arrow-prev">Previous</span>
                <span class="nav-arrow-next">Next</span>
            </nav>
        -->

            <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                <a href="javascript:;" class="sl-prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </a>
                <a href="javascript:;" class="sl-next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </a>
            </nav>

            <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>

        </div>
    </section>
    <!-- End Home Slider -->

    <!-- About Section -->
    <section id="about" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow animated fadeInLeft">
                    <div class="recent-works">
                        <h3>CTF Topics</h3>
                        <div id="works">
                            <div class="work-item">
                                <p><u>REVERSE ENGINEERING</u><br><br>Reverse engineering is simply the process of going backwards. In CTFs, you typically reverse binary programs using debuggers and diassemblers like GNU Debugger or IDA PRO. Reversing cryptographic systems and obfuscated programs are also common problems.</p>
                            </div>
                            <div class="work-item">
                                <p><u>BINARY EXPLOITATION</u><br><br>Binary exploitation is the idea of abusing a weakness in a compiled application in such a way that is advantageous. A basic binary exploitation concept is memory corruption. An attacking armed with arbitrary write into memory can rewrite crucial state information. The most basic binary exploitation concept is the buffer overflow. </p>
                            </div>
                            <div class="work-item">
                                <p><u>PROGRAMMING</u><br><br>Programming is a crucial skill in CTF. All other skills revolve around programming in some way. Python is a great language to know due to its extensive libraries. It is also helpful to know how to read Java and C as well.</p>
                            </div>
                            <div class="work-item">
                                <p><u>WEB SECURITY</u><br><br>Next to Programming, web security is one of the most rewarding skills to learn. Understanding, exploiting, and fixing vulnerabilities is useful both in CTF competitions and in the real world. Security will always be in high demand. A good vulnerability to start with is SQL injection.</p>
                            </div>
                            <div class="work-item">
                                <p><u>CRYPTOGRAPHY</u><br><br>Cryptography is about constructing and analyzing protocols that prevent third parties from reading private messages. In short, cryptography is a method of securing message transactions. The common modern cryptographic protocols are RSA and ECC. In CTF competitions, you break into insecure protocols and in turn learn how not to do cryptography.<p>
                            </div>
                            <div class="work-item">
                                <p><u>FORENSICS</u><br><br>Forensics revolves around the idea of hiding a message in one way or another. A common forensics problem is hiding messages in images, or steganography. Another would be messing with hex headers. Doing forensics problems requires the person to think outside of the box. <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
                    <div class="welcome-block">
                        <h3>Welcome To SST CTF</h3>
                        <div class="message-body">
                            <img src="img/logo.jpg" class="pull-left" alt="member">
                            <p>We work as a team through the main idea of programming and cybersecurity. We compete in competitions called CTF, or Capture The Flag, where you search for a "flag", or a specific word, either hidden in plain sight, or encrypted. Most competitions occur online, but we also attend some Oregon CTF events.
            </p>
                    </div>
                        <a href="#" class="btn btn-border btn-effect pull-right">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

        <!-- Service section -->
        <section id="service">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center">
                        <h2 class="wow animated bounceInLeft">SKILLS</h2>
                        <p class="wow animated bounceInRight">Everything You Need to Know in CTF</p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-home fa-3x"></i>
                            </div>
                            <h3>Programming</h3>
                            <p>Probably the most important skill you need in CTF is Programming. You should feel confortable with Python and Java.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-tasks fa-3x"></i>
                            </div>
                            <h3>Documentation</h3>
                            <p>After every problem we solve, we document how we solved it in a writeup. This is to help future CTF members and get in the feeling of recording what problems we solved.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-clock-o fa-3x"></i>
                            </div>
                            <h3>Resources</h3>
                            <p>Time is key in competitions, and knowing your programs and services will severely reduce the time you spend on a given problem.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-heart fa-3x"></i>
                            </div>

                            <h3>Interest in Computer Science</h3>
                            <p>Most importantly, you need to like the topics in CTF. We're not looking for dedication immediately, and CTF is not for everyone. You need to love what you're doing.</p>							
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end Service section -->

        <!-- portfolio section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>PROJECTS</h2>
                        <p>Here are some projects that we will be working on. We are hoping to complete them by the end of the year.</p>
                    </div>


                    <ul class="project-wrapper wow animated fadeInUp">
                        <li class="portfolio-item">
                            <img src="img/portfolio/python.jpg" class="img-responsive" alt=" Any work in CTF requires a good baseline in coding. We hope to become fluent in Python and Java by the end of the year.">
                            <figcaption class="mask">
                                <h3>Fluency in Programming</h3>
                                <p>Any work in CTF requires a good baseline in coding.</p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Fluency in programming" data-fancybox-group="works" href="img/portfolio/python.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/linux.jpg" class="img-responsive" alt="Linux is a major tool in CTF. You will easily be able to find a specific file in a terminal and solve terminal based problems.">
                            <figcaption class="mask">
                                <h3>Linux Expertise</h3>
                                <p>Linux is a major tool in CTF.</p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Linux master" href="img/portfolio/linux.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/clock.jpg" class="img-responsive" alt="very often, time is an issue in competitions. We will become faster in skills and shortcuts so we can solve more questions in a shoter time frame. ">
                            <figcaption class="mask">
                                <h3>Resourcefulness</h3>
                                <p>Very often, time is an issue in competitions. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Efficiency" data-fancybox-group="works" href="img/portfolio/clock.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/competitions.jpg" class="img-responsive" alt="This is where all our hard work pays off, we will copmete in a multitude of CTF competions and try to win as much as possible.">
                            <figcaption class="mask">
                                <h3>Competitions</h3>
                                Click <a href="https://ctftime.org/event/list/upcoming"><u>here</u></a> to view upcoming events.
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Competitions" data-fancybox-group="works" href="img/portfolio/competitions.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/server.jpg" class="img-responsive" alt="We will be using our private server for many essential CTF-related operations, including file transfer and communication. ">
                            <figcaption class="mask">
                                <h3>Dedicated Server</h3>
                                <p>Owning a private server is very important to any CTF team. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Dedicated Server" data-fancybox-group="works" href="img/portfolio/server.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                        </li>

                        <li class="portfolio-item">
                            <img src="img/portfolio/personal.jpg" class="img-responsive" alt="On our spare time be creating our own, customized, Linux destribution. This project will teach is alot about Linux and the terminal. ">
                            <figcaption class="mask">
                                <h3>Linux Destribution</h3>
                                <p>We will be working on our own Linux destribution. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Linux destribution" data-fancybox-group="works" href="img/portfolio/personal.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </section>
        <!-- end portfolio section -->

        <!-- Testimonial section -->
        <section id="testimonials" class="parallax">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center white wow animated fadeInDown">
                            <h2>SST CTF Members</h2>
                        </div>

                        <div id="testimonial" class=" wow animated fadeInUp">
                            <div class="testimonial-item text-center">
                                <img src="img/members/otakar.jpg" alt="Picture of Otakar">
                                <div class="clearfix">
                                    <span>Otakar Andrysek</span>
                                    <p>My interest in CTF started at OregonCTF where Andrew, Tamir, and I got destroyed. We started the club later that year and have been learning every since. I am fairly knowledgable in Programmming but prefer to work on Digital Forensics. I am a huge fan of Linux but use a Mac at home, I swear I'm not an apple fanboy.</p>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <img src="img/members/tamir.jpg" alt="Picture of Tamir">
                                <div class="clearfix">
                                    <span>Tamir Enkhjargal</span>
                                    <p>I started my interest in CTF at a small local competition called OregonCTF, and oh man it was brutal. While other students got around 2,000 or more points we got only 20. This unforgettable experience led me to strive harder in CTF topics such as Cryptography and Programming to not get as destroyed. Always keep on progressing!</p>
                                </div>
                            </div> 
                            <div class="testimonial-item text-center">
                                <img src="img/members/andrew.jpg" alt="Picture of Andrew">
                                <div class="clearfix">
                                    <span>Andrew Quach</span>
                                    <p>I have no idea what I'm doing.</p>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <img src="img/members/dane.jpg" alt="Picture of Dane">
                                <div class="clearfix">
                                    <span>Dane Miller</span>
                                    <p>I have very limited knowledge of software and even less knowledge of hardware, and decided to participate in CTF due to my interest in the subjects. I have learned a lot from the fellow members and have come a long way so far. I hope to expand into more languages and concepts in the next few years and hopefully become an important and beneficial part of the competetive team.</p>
                                </div>
                          </div>
			    <div class="testimonial-item text-center">
                                <img src="img/members/stan.jpg" alt="Picture of Stan">
                                <div class="clearfix">
                                    <span>Stanislav Lyakhov</span>										
                                    <p>After stumbling upon an article about modern cryptography and meeting a security programmer I became very interested in the field of cyber security, after moving from Germany I discovered SSTCTF and joined the team where I was taught by my teammates. Aside from participating in CTF competitions I also act as the media person of the team.</p>
                                </div>
                            </div>
			    <div class="testimonial-item text-center">
                                <img src="img/members/stephen.jpg" alt="Picture of Stephen">
                                <div class="clearfix">
                                    <span>Stephen Brimhall</span>
                                    <p>I have been fascinated by computers all my life. When I saw a flyer for the SST CTF club, I joined immediately. I was exposed to cybersecurity after my freshman year in the CyberDiscovery camp in Portland, and have been interested since. I have also written several of the utilities running on our server.</p>
                                </div>
                </div>
            </div>
        </section>
        <!-- end Testimonial section -->

        <!-- Price section -->
        <!-- Do not remove XXBegin and XXEnd comments -->
        <section id="price">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>Schedule</h2>
                        <p>Our meeting schedule.</p>
                    </div>

                    <div class="col-md-4 wow animated fadeInUp">
                        <div class="price-table featured text-center">
                            <span>Previous Meeting</span>
                            <div class="value">
                                <span></span>
                                <span><!--PreviousDateBegin-->01/18/17<!--PreviousDateEnd--></span><br>
                                <span><!--PreviousDateLongBegin-->Wednesday January 18 (2:15-3:30)<!--PreviousDateLongEnd--></span>
                            </div>
                            <ul>
                                <li><!--PreviousTopicBegin-->Topic: Discord Bot<!--PreviousTopicEnd--></li>
                                <li><!--PreviousLeaderBegin-->Leader: Andrew Quach<!--PreviousLeaderEnd--></li>
                                <li><!--PreviousDescriptionBegin-->Description: Learn how to create and manage a Discord bot.<!--PreviousDescriptionEnd--></li>
                                <li><!--PreviousHomeworkBegin-->Homework: Funding Proposal<!--PreviousHomeworkEnd--></li>
                                <li><!--PreviousDownloadBegin--><a href="downloads/01-05-17"><!--PreviousDownloadEnd-->Downloads</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
                        <div class="price-table featured text-center">
                            <span>Next Meeting</span>
                            <div class="value">
                                <span></span>
                                <span><!--NextDateBegin-->01/20/17<!--NextDateEnd--></span><br>
                                <span><!--NextDateLongBegin-->Friday January 20 (2:15-3:30)<!--NextDateLongEnd--></span>
                            </div>
                            <ul>
                                <li><!--NextTopicBegin-->Topic: Essays and GitHub<!--NextTopicEnd--></li>
                                <li><!--NextLeaderBegin-->Leader: Otakar Andrysek<!--NextLeaderEnd--></li>
                                <li><!--NextDescriptionBegin-->Description: Finish mentor letter and funding proposal, review git.<!--NextDescriptionEnd--></li>
                                <li><!--NextHomeworkBegin-->Homework: Get some commits!<!--NextHomeworkEnd--></li>
                                <li><!--NextDownloadBegin--><a href="downloads/01-09-17"><!--NextDownloadEnd-->Downloads</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
                        <div class="price-table featured text-center">
                            <span>Future Meeting</span>
                            <div class="value">
                                <span></span>
                                <span><!--FutureDateBegin-->01/24/17<!--FutureDateEnd--></span><br>
                                <span><!--FutureDateLongBegin-->Tuesday January 24 (2:15-3:30)<!--FutureDateLongEnd--></span>
                            </div>
                            <ul>
                                <li><!--FutureTopicBegin-->Topic: Competition Review<!--FutureTopicEnd--></li>
                                <li><!--FutureLeaderBegin-->Leader: Otakar Andrysek<!--FutureLeaderEnd--></li>
                                <li><!--FutureDescriptionBegin-->Description: Review results from Saturday's competition<!--FutureDescriptionEnd--></li>
                                <li><!--FutureHomeworkBegin-->Homework: Writeups<!--FutureHomeworkEnd--></li>
                                <li><!--FutureDownloadBegin--><a href="downloads/01-13-17"><!--FutureDownloadEnd-->Downloads</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end Price section -->

        <!-- Social section -->
        <section id="social" class="parallax">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center white wow animated fadeInDown">
                            <h2>FOLLOW US</h2>
                            <p>Find our code and news on the following websites</p>
                        </div>

                        <ul class="social-button">
                            <li class="wow animated zoomIn"><a href="https://www.facebook.com/SST-CTF-1113073442103189/"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
                            <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/sstctf"><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="https://github.com/SST-CTF"><i class="fa fa-github fa-2x"></i></a></li>							
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <!-- end Social section -->

        <!-- Contact section -->
        <section id="contact" >
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center wow animated fadeInDown">
                        <h2>CONTACT</h2>
                        <p>Leave a Question or Comment</p>
                    </div>


                    <div class="col-md-7 contact-form wow animated fadeInLeft">
                        <form action="#contact" method="post">
                                <?php echo $result;?>
                                <div class="input-field">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name...">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email...">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject...">
                                    <?php echo "<p class='text-danger'>$errSubject</p>";?>

                                </div>
                                <div class="input-field">
                                    <textarea name="message" class="form-control" placeholder="Message..."></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                                    <button type="submit" id="submit" name="contactsubmit" class="btn btn-blue btn-effect">Send</button>
                            </form>
                        </div>

                        <div class="col-md-5 wow animated fadeInRight">
                            <address class="contact-details">
                                <h3>Contact Us</h3>						
                                <p><i class="fa fa-pencil"></i>SST CTF<span>18640 NW Walker Rd</span> <span>Beaverton, Oregon </span><span>United States</span></p><br>
                                <p><i class="fa fa-phone"></i>Phone: (503) 560-3958 </p>
                                <p><i class="fa fa-envelope"></i>sstctf@gmail.com</p>
                            </address>
                        </div>

                    </div>
                </div>
            </section>
            <!-- end Contact section -->

        </main>

            <!-- Footer Stuff -->
            <!-- Bored? CLEAN THIS UP. PLEASE. -->
        <footer id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="footer-content">
                        
                        <div class="wow animated fadeInDown">
                            <p>newsletter signup</p>
                            <p>Get notified about our progress and outlook!</p>
                        </div>
                        
                        <!-- Newsletter Section -->
                        <form action="#footer" method="post" class="subscribe-form wow animated fadeInUp"> 
                            <div class="input-field">
                                <input type="email" class="subscribe form-control" name="email" placeholder="Enter Your Email...">
                                
                                <button type="submit" id="submit" name="newslettersubmit" class="submit-icon">
                                    <i class="fa fa-paper-plane fa-lg"></i>
                                </button>   
                            </div>
                        </form>
                        <?php echo $newsresult;?>
                        <?php echo "<p class='text-danger'>$errName</p>";?>
                        <!-- END Newsletter Section -->
                        
                        <div class="footer-social">
                            <ul>
                                <li class="wow animated zoomIn"><a href="https://www.facebook.com/SST-CTF-1113073442103189/"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
                                <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/sstctf"><i class="fa fa-twitter fa-3x"></i></a></li>
                                <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="/downloads"><i class="fa fa-download fa-3x"></i></a></li>
                                <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="https://nodequery.com/servers/view/30348"><i class="fa fa-tasks fa-3x"></i></a></li>
                                <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="https://github.com/SST-CTF"><i class="fa fa-github fa-3x"></i></a></li>
                            </ul>
                        </div>

                        <p>Copyright &copy; 2014-2015 Design and Developed By <a href="http://www.themefisher.com">Themefisher</a> </p>
                        <p>Copyright &copy; 2016 SST CTF </p
                    </div>
                </div>
            </div>
        </footer>

        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
        <!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>
