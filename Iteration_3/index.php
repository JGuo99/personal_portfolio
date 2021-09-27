<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Disable Browser From Caching -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    
    <!-- Title -->
    <title>Jeff Guo - A Developer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon_trans.ico" />

    <!-- Font Awesome [Logo] -->
    <script src="https://kit.fontawesome.com/9bfc0a438f.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ballet&display=swap&family=Abril+Fatface&family=Lato&family=Playball&family=Poiret+One&family=Zen+Tokyo+Zoo&display=swap&family=Allura&display=swap');
    </style>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="style/global/css/style.min.css">
    <link rel="stylesheet" href="style/global/css/nav.min.css">
    <link rel="stylesheet" href="style/global/css/loader.min.css">
    <link rel="stylesheet" href="style/home/css/index.min.css">
    <!-- For Mobile Layout -->
    <link rel="stylesheet" href="" id="mobile">

</head>

<body class="preload">
    <div class="loader-wrapper">
        <div class="pong-loader"></div>
    </div>

    <div id="progress-scroll">
        <img id="p-img" src="">
    </div>

    <div class="nav-spacer"></div>
    <div id="navbar">
        <div id="fluid-container">
            <a href="#" class="item-action" data-toggle="modal" data-target="#alertModal">
                <h1 id="logo">Sheng Guo</h1>
            </a>
            <div id="tabs">
                <!-- <a href="#about" class="action-style" id="about-a" href="javascript:void(0);">About</a>
                <a href="#contact" class="action-style" id="contact-a" href="javascript:void(0);">Contact</a>
                <a href="#social" class="action-style" id="social-a">Social</a> -->
                <a href="museum.php" class="action-style">Museum</a>
                <a href="#" class="action-style disabled-action" data-toggle="modal" data-target="#alertModal">Wip</a>
                <a href="#" class="action-style disabled-action" data-toggle="modal" data-target="#alertModal">Ideas</a>
                <a href="travel.php" class="action-style">Travel</a>
                <a href="https://preview.p5js.org/JeffGuo1/present/GMTwwJhDa" target="_blank"
                    class="action-style">Art</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Notice</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This site is currently under development. More features will be added soon - just like the
                    action you are trying to access!
                    <br><br>
                    Thank you for your understanding. <br>
                    Contact: <a href="mailto: sheng.guo@sguo.tech">Admin</a> - For Any Issues
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <button class="action-style contact-action" onclick="contactOverlay();">
        <i class="fas fa-comment"></i>
    </button>
    <!-- Contact Form -->
    <div class="overlay-small" id="contact-container">
        <div class="container">
            <button class="contact-action" style="padding: 3px 15px;" onclick="contactOverlay();">
                <i class="fas fa-chevron-down"></i>
            </button>
            <section id="contact">
                <div class="module-container" id="2">
                    <div class="module-content">
                        <h1>Contact Me</h1>
                        <form method="POST" action="scripts/contact/contact.php">
                            <div class="input-group">
                                <input type="text" id="name" name="name" required>
                                <label for="name">Name*</label>
                            </div>
                            <div class="row-form">
                                <div class="input-group">
                                    <input type="text" id="email" name="email" required>
                                    <label for="email">Email*</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="phone" name="phone" required>
                                    <label for="phone">Phone*</label>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" id="subject" name="subject" required>
                                <label for="subject">Subject*</label>
                            </div>
                            <div class="input-group">
                                <textarea id="message" rows="8" name="message" required></textarea>
                                <label for="message">Message*</label>
                            </div>
                            <button type="submit" class="general-butt">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Holds Each Section -->
    <div id="page-container">
        <span id="menu-toggle">
            <i class="menu_open fa fa-bars fa-lg"></i>
            <i class="menu_close fa fa-times fa-lg"></i>
        </span>
        <ul id="menu-items">
            <li><a href="museum.php"><i class="icon fas fa-archway fa-2x"></i></a></li>
            <li class="disabled-action"><a href="#" data-toggle="modal" data-target="#alertModal"><i
                        class="icon fas fa-tasks fa-2x"></i></a></li>
            <li class="disabled-action"><a href="#" data-toggle="modal" data-target="#alertModal"><i
                        class="icon fas fa-lightbulb fa-2x"></i></a></li>
            <li><a href="https://preview.p5js.org/JeffGuo1/present/GMTwwJhDa">
                    <i class="icon fas fa-palette fa-2x"></i></a></li>
            <li><a onclick="contactOverlay();"><i class="fas fa-comment fa-2x"></i></a></li>
        </ul>
        <main id="page-content">
            <div class="page-content-inner">
                <div class="verti-spacing">
                    <div class="content">
                        <!-- Intro Section Rewrite -->
                        <section id="intro">
                            <div class="module-container row">
                                <div class="col-md-6">
                                    <div class="module-content">
                                        <p class="tag">
                                            SOFTWARE ENGINEER & DEVELOPER
                                        </p>
                                        
                                        <div id="typewritter">
                                            Sheng Guo
                                            <div id="cursor"></div>
                                        </div>

                                        <p style="text-align:center">
                                            Also known as Jeff for most of my life.
                                        </p>
                                        <p>
                                            I have a passion for developing applications that help reduce our daily workload
                                            and my interest in rapid technology evolution have led me to become a
                                            computer
                                            engineer/scientist.
                                        </p>
                                        <!-- <a class="general-butt" href="museum.php">
                                Explore Projects
                            </a> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="module-content">
                                        <img id="profile-img" src="images/professional.jpg">
                                        <div class="section-bar">
                                            <ul>
                                                <li><a href="#intro">Home</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li><a href="#skill">Skills</a></li>
                                                <li><a href="#social">Social</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- About Me Section Rewrite -->
                        <section id="about">
                            <div class="module-container row">
                                <div class="col-md-6">
                                    <div class="module-content">
                                        <h1>About Me</h1>
                                        <p>
                                            I am a graduate of 2020 from the <em>University of Illinois at Chicago</em>,
                                            with a degree in Computer Science and a minor in Business Administration. 
                                            Currently pursuing a Master of Science with the <em>New York University</em>. <br><br>
                                            My interests focus on designing, developing,
                                            and analyzing algorithms and data to help improve the current state of the
                                            technological society. My obsession with computers, designs, and
                                            development has help me acheive many success and gain a wealth of
                                            knowledge, but I am still a young and inexpereienced developer that is
                                            still hungry to learn. <br><br>
                                            Outside of the tech environment, I love to travel around the world and
                                            explore
                                            different cultures, foods, and knowledge. Aside from traveling, I love
                                            keeping
                                            memories with photography and sweeten life with coffee!<br><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="module-content">
                                        <img class="img-style" src="images/placeholder.jpg" alt="placeholder">
                                        <!-- <div class="icons">
                                            <i class="fas fa-university"></i>
                                            <i class="fas fa-laptop-code"></i>
                                            <i class="fas fa-globe-americas"></i>
                                            <i class="fas fa-camera-retro"></i>
                                            <i class="fas fa-coffee"></i>
                                        </div> -->
                                        <p style="text-align: center;">
                                            Hope that you and I will grow together as we work towards our own vision.
                                        </p>
                                        <div class="section-bar">
                                            <ul>
                                                <li><a href="#intro">Home</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li><a href="#skill">Skills</a></li>
                                                <li><a href="#social">Social</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Skill Section -->
                        <section id="skill">
                            <div class="module-container row align-items-center">
                                <h1>Often Used Skills</h1>
                                <div class="skill-container">
                                    <div class="border-wrapper">
                                        <p class="skill-content">Java</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">Python</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">JavaScript</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">jQuery</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">C</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">C++</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">MySQL</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">SQL</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">PHP</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">Django</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">CSS/SCSS</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">C#</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">F#</p>
                                    </div>
                                    <div class="border-wrapper">
                                        <p class="skill-content">Git</p>                                
                                    </div>
                                </div>
                                <div class="section-bar">
                                    <ul>
                                        <li><a href="#intro">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#skill">Skills</a></li>
                                        <li><a href="#social">Social</a></li>
                                    </ul>
                                </div>
                                <!-- <p>***This module will be switched out! - This is a temporary holder for later features to come!</p> -->
                            </div>
                        </section>
                    </div>
                </div>
                <!-- Social Section -->
                <!-- <footer> -->
                <section id="social">                    
                    <div class="module-content icons">
                        <a href="https://www.facebook.com/jeff.guo.923/" onmouseover="hoverView('1')"
                            onmouseout="hoverView('reset')" id="i1" class="custom-icon1 fab fa-facebook-square"
                            target="_blank"></a>
                        <a href="https://twitter.com/JeffGuo17987757" onmouseover="hoverView('2')"
                            onmouseout="hoverView('reset')" id="i2" class="custom-icon2 fab fa-twitter-square"
                            target="_blank"></a>
                        <a href="https://www.linkedin.com/in/guojeff99/" onmouseover="hoverView('3')"
                            onmouseout="hoverView('reset')" id="i3" class="custom-icon3 fab fa-linkedin"
                            target="_blank"></a>
                        <a href="uploads/Resume.pdf" onmouseover="hoverView('4')" onmouseout="hoverView('reset')"
                            id="i4" class="custom-icon4 fas fa-file-csv" download></a>
                        <a href="https://www.instagram.com/jeff.j.guo/" onmouseover="hoverView('5')"
                            onmouseout="hoverView('reset')" id="i5" class="custom-icon5 fab fa-instagram"
                            target="_blank"></a>
                    </div>
                    <!-- <hr id="mobile-seperator"> -->
                    <div class="copyright">
                        <small>&copy; Copyright <span id="currDate"></span>, <a href="https://www.sguo.tech">Sheng
                                Guo</a>. All Rights Reserved</small>
                    </div>
                </section>
                <!-- </footer> -->
            </div>
        </main>
    </div>
</body>
<!-- Scripts -->
<script>
    $(window).on('load', function () {
        $("body").removeClass("preload");
        var current = new Date();
        document.getElementById("currDate").innerHTML = current.getFullYear();
    });

    function contactOverlay() {
        var overlay = document.getElementById("contact-container");
        overlay.classList.toggle("overlay-big");
        $("body").toggleClass("no-scroll");
    }
</script>
<script src="scripts/home/script.js"></script>
<script src="scripts/home/nav.js"></script>
<script src="scripts/home/social.js"></script>
<script src="scripts/home/responsive.js"></script>
<script src="scripts/global/loader.js"></script>
<script src="scripts/global/progress.js"></script>
<script>
    $(document).ready(function(){
        // Choose random progress image of 94
        var progress_img = document.getElementById("p-img");
        progress_img.src = "images/transport/veh" + Math.floor(Math.random() * 94) + ".png"; 

        // Touchmove is currently not working!
        var events = ['scroll', 'touchmove'];
        var lastScrollTop = 0;
        for(var i = 0; i < events.length; i++) {
            document.addEventListener(events[i], function() { // or window.addEventListener("scroll"....
                // var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
                var st = $(this).scrollTop();
                if (st > lastScrollTop){
                    // downscroll code
                    progress_img.style.transform = "scaleX(1)";
                } else {
                    // upscroll code
                    progress_img.style.transform = "scaleX(-1)";
                }
                lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
            }, false);
        }
    });
</script>
</html>