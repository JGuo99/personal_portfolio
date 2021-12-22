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
    <title>Work In Progress & Ideas</title>

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
    <link rel="stylesheet" href="style/wip/css/wip.min.css">
    <!-- For Mobile Layout -->
    <link rel="stylesheet" href="" id="mobile">
</head>

<body class="preload">
    <div class="loader-wrapper">
        <div class="pong-loader"></div>
    </div>

    <div class="nav-spacer"></div>
    <div id="navbar">
        <div id="fluid-container">
            <a href="index.php" class="item-action">
                <h1 id="logo">Sheng Guo</h1>
            </a>
            <div id="tabs">
                <a href="museum.php" class="action-style">Museum</a>
                <a href="wip.php" class="action-style">Wip & Ideas</a>
                <!-- <a href="#" class="action-style disabled-action" data-toggle="modal" data-target="#alertModal">Ideas</a> -->
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
                <!-- Body Content Goes Here -->
                <section id="grid-body">
                    <div class="grid-container">
                        <div class="grid-wip-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div>
                        <div class="grid-wip-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-wip-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-wip-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-wip-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-wip-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div>

                        <div class="grid-idea-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div>
                        <div class="grid-idea-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-idea-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-idea-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-idea-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div><div class="grid-idea-item grid-item">
                            <img src="images/placeholder.jpg" alt="placeholder">
                            <item class="grid-desc">
                                <p>Testing the expansion.</p>
                            </item>
                        </div>
                    </div>
                </section>
                <!-- Footer Section -->
                <section id="footer">                    
                    <div class="copyright">
                        <small>&copy; Copyright <span id="currDate"></span>, <a href="https://www.sguo.tech">Sheng
                                Guo</a>. All Rights Reserved</small>
                    </div>
                </section>
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

        // Expansion Direction
        var get_grid_items = document.querySelectorAll(".grid-item");
        for(let i = 0; i < get_grid_items.length; i++) {
            get_grid_items[i].addEventListener('mouseover', getPosition);
            // console.log(get_grid_items[i].getBoundingClientRect());
        }
    });

    function contactOverlay() {
        var overlay = document.getElementById("contact-container");
        overlay.classList.toggle("overlay-big");
        $("body").toggleClass("no-scroll");
    }

    // Expansion Direction
    
    

    function getPosition(element) {
        var $this = $(this);
        var offset = $this.offset();
        var width = $this.width();
        var height = $this.height();

        var centerX = offset.left + width / 2;
        var centerY = offset.top + height / 2;
        var windowW = window.innerWidth;
        var windowH = window.innerHeight;

        console.log(windowW, windowH);
        console.log("From Left: " + centerX, "From Top: " + centerY);
        
        if((centerX / windowW) < 0.46) {
            $this.css("direction", "ltr");
        } else {
            $this.css("direction", "rtl");
        }
    }

    // Check getPosition every 300 millisecond
    // setInterval(getPosition, 300);
</script>
<script src="scripts/global/nav.js"></script>
<script src="scripts/global/responsive.js"></script>
<script src="scripts/global/loader.js"></script>
<script src="scripts/global/progress.js"></script>
</html>