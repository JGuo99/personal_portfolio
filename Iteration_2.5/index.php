<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff Guo - A Developer</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/favicon_trans.ico" />

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
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato&family=Playball&family=Poiret+One&family=Zen+Tokyo+Zoo&display=swap');
    </style>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="public/css/style.min.css">
    <link rel="stylesheet" href="public/css/nav.min.css">
    <link rel="stylesheet" href="css/index.min.css">
    <!-- For Mobile Layout -->
    <link rel="stylesheet" href="" id="mobile">

</head>

<body class="preload">
    <div class="navbar">
        <div id="fluid-container">
            <h1 id="logo">Sheng Guo</h1>
            <div id="tabs">
                <!-- <a href="#about" class="action-style" id="about-a" href="javascript:void(0);">About</a>
            <a href="#contact" class="action-style" id="contact-a" href="javascript:void(0);">Contact</a>
            <a href="#social" class="action-style" id="social-a">Social</a> -->
                <a href="public/_museum/museum.php" class="action-style">Code</a>
                <a href="https://preview.p5js.org/JeffGuo1/present/GMTwwJhDa" target="_blank"
                    class="action-style">Art</a>
                <!-- <a href="#" class="action-style">Ideas</a> -->
            </div>
            <!-- <i type="button" id="nav-butt" href="javascript:void(0);" class="fas fa-hamburger" onclick="hamburgerNav()"></i> -->
        </div>
    </div>
    <div class="container">
        <!-- Intro Section Rewrite -->
        <section id="intro">
            <div class="module-container row align-items-center">
                <div class="col-md-6">
                    <div class="module-content">
                        <h1>Welcome to my World</h1>
                        <p>
                            My name is Sheng, but I usually go by Jeff. <br><br>
                            My passion for creating tools that help reduce our daily workload 
                            and my interest in rapid technology evolution have led me to become a computer engineer/scientist.
                        </p>
                        <a class="general-butt" href="public/_museum/museum.php">
                            Explore Projects
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img id="profile-img" src="images/professional.jpg">
                </div>
            </div>
        </section>

        <!-- About Me Section Rewrite -->
        <section id="about">
            <div class="module-container" id="1">
                <div class="module-content">
                    <h1>About Me</h1>
                    <p>
                        I am a graduate of 2020 from the University of Illinois at Chicago,
                        with a degree in Computer Science. Currently pursuing a Master of Science
                        with the New York University. My interests focus on designing, developing, 
                        and analyzing algorithms and data to help improve the current state of 
                        technological society. My obsession with computers, designs, and
                        development has help me acheive many success and gain a wealth of
                        knowledge, but I am still a young and inexpereienced developer that is
                        still hungry to learn. <br><br>
                        Outside of the tech environment, I love travel to different parts of the
                        world and explore their cultures, foods, and knowledge. Aside from traveling
                        I love photography and coffee!<br><br>                       
                    </p>
                    <p style="text-align: center;">
                        Hope that you and I will grow together as we work towards our own vision.
                    </p>
                    <div class="icons">
                        <i class="fas fa-university"></i>
                        <i class="fas fa-laptop-code"></i>
                        <i class="fas fa-globe-americas"></i>
                        <i class="fas fa-camera-retro"></i>
                        <i class="fas fa-coffee"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <!--
        <section id="gallery">
            <div class="module-container">
                <div class="col-gallery">
                    <h2>Mobile</h2>
                    <img src="images/img1.png">
                    <div class="caption">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                        </p>
                        <button type="button">Know More</button>
                    </div>
                </div>
                <div class="col-gallery">
                    <h2>Full Stack</h2>
                    <img src="images/img2.png">
                    <div class="caption">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                        </p>
                        <button type="button">Know More</button>
                    </div>
                </div>
                <div class="col-gallery">
                    <h2>Computer Vision</h2>
                    <img src="images/img3.png">
                    <div class="caption">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                        </p>
                        <button type="button">Know More</button>
                    </div>
                </div>

            </div>
        </section>
        -->
        <section id="contact">
            <div class="module-container" id="2">
                <div class="module-content">
                    <h1>Contact Me</h1>
                    <form method="POST" action="contact.php">
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
                                <input type="text" id="phone" name="phone">
                                <label for="phone">Phone</label>
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

        <section id="social">
            <div class="module-container" id="3">
                <hr id="mobile-seperator">
                <div class="module-content icons">
                    <a href="https://www.facebook.com/jeff.guo.923/" onmouseover="hoverView('1')" onmouseout="hoverView('reset')" id="i1"
                        class="custom-icon1 fab fa-facebook-square" target="_blank"></a>
                    <a href="https://twitter.com/JeffGuo17987757" onmouseover="hoverView('2')" onmouseout="hoverView('reset')" id="i2"
                        class="custom-icon2 fab fa-twitter-square" target="_blank"></a>
                    <a href="https://www.linkedin.com/in/guojeff99/" onmouseover="hoverView('3')" onmouseout="hoverView('reset')" id="i3"
                        class="custom-icon3 fab fa-linkedin" target="_blank"></a>
                    <a href="Resume.pdf" onmouseover="hoverView('4')" onmouseout="hoverView('reset')" id="i4"
                        class="custom-icon4 fas fa-file-csv" download></a>
                    <a href="https://www.instagram.com/jeff.j.guo/" onmouseover="hoverView('5')" onmouseout="hoverView('reset')" id="i5"
                        class="custom-icon5 fab fa-instagram" target="_blank"></a>
                </div>
            </div>
        </section>
        <!-- </div> -->
    </div>
</body>
<!-- Scripts -->
<script>
    $(window).on('load', function () {
        $("body").removeClass("preload");
    });
</script>
<script src="js/script.js"></script>
<script src="js/nav.js"></script>
<script src="js/social.js"></script>
<script src="js/responsive.js"></script>
<!-- Loading Screen -->
<!-- <script type="text/javascript">
    $(document).ready(function() {
        setTimeout('$("#fluid-container").css("opacity", 1)', 1000);
    });

    $('#fluid-container').css('opacity', 0);
    // $(window).load(function() {
    //     $('#fluid-container').css('opacity', 1);
    // });
</script> -->

</html>