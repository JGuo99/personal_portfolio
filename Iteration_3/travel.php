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
    <title>Travel the World</title>

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
    <!-- For Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>


    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ballet&display=swap&family=Abril+Fatface&family=Lato&family=Playball&family=Poiret+One&family=Zen+Tokyo+Zoo&display=swap&family=Allura&display=swap');
    </style>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="style/global/css/style.min.css">
    <link rel="stylesheet" href="style/global/css/nav.min.css">
    <link rel="stylesheet" href="style/global/css/loader.min.css">
    <link rel="stylesheet" href="style/travel/css/style.min.css">
    <!-- For Mobile Layout -->
    <link rel="stylesheet" href="" id="mobile">
</head>

<body>
    <div class="loader-wrapper">
        <div class="pong-loader"></div>
    </div>

    <!-- For Background Particles -->
    <!-- <div class="page-bg"></div> -->

    <div class="animation-wrapper">
        <div class="particle particle-1"></div>
        <div class="particle particle-2"></div>
        <div class="particle particle-3"></div>
        <div class="particle particle-4"></div>
    </div>

    <div id="navbar">
        <div id="fluid-container">
            <a href="index.php" class="item-action">
                <h1 id="logo">Sheng Guo</h1>
            </a>
            <div id="tabs">
                <!-- <a href="#about" class="action-style" id="about-a" href="javascript:void(0);">About</a>
                <a href="#contact" class="action-style" id="contact-a" href="javascript:void(0);">Contact</a>
                <a href="#social" class="action-style" id="social-a">Social</a> -->
                <a href="museum.php" class="action-style">Museum</a>
                <a href="#" class="action-style disabled-action" data-toggle="modal" data-target="#alertModal">Wip</a>
                <a href="#" class="action-style disabled-action" data-toggle="modal" data-target="#alertModal">Ideas</a>
                <a href="#" class="action-style">Travel</a>
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

    <div class="main container">
        <div class="controller">
            <ul class="nav-list">
                <li class="item selected">
                    <a href="#loc-1" onclick="toggleDiv('loc-1');">New York</a>
                </li>
                <li class="item">
                    <a href="#loc-2" onclick="toggleDiv('loc-2');">Hawaii</a>
                </li>
                <li class="item">
                    <a href="#loc-3" onclick="toggleDiv('loc-3');">China</a>
                </li>
                <li class="item">
                    <a href="#loc-4" onclick="toggleDiv('loc-4');">Canada</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div id="loc-1" class="right-content">
                <h1>Hey, from New York City!</h1>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <img src="images/travel/nyc/nyc-10.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="images/travel/nyc/nyc-1.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img src="images/travel/nyc/nyc-2.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img src="images/travel/nyc/nyc-3.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <img src="images/travel/nyc/nyc-5.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="images/travel/nyc/nyc-4.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img src="images/travel/nyc/nyc-7.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img src="images/travel/nyc/nyc-8.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <img src="images/travel/nyc/nyc-9.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>
                <!-- Gallery -->
            </div>
            <div id="loc-2" class="right-content">
                <h1>Aloha, from Hawaii!</h1>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <img src="images/travel/hawaii/hawaii-6.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <img src="images/travel/hawaii/hawaii-2.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                    <div class="col-lg-6 mb-4">
                        <img src="images/travel/hawaii/hawaii-3.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/hawaii/hawaii-1.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/hawaii/hawaii-8.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/hawaii/hawaii-9.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <img src="images/travel/hawaii/hawaii-4.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                    <div class="col-lg-6 mb-4">
                        <img src="images/travel/hawaii/hawaii-5.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/hawaii/hawaii-10.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/hawaii/hawaii-11.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/hawaii/hawaii-12.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <img src="images/travel/hawaii/hawaii-7.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>
                <!-- Gallery -->
            </div>
            <div id="loc-3" class="right-content">
                <h1>你好, from China!</h1>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/travel/china/china-3.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <img src="images/travel/china/china-2.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/china/china-1.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                </div>
                <!-- Gallery -->
            </div>
            <div id="loc-4" class="right-content">
                <h1>Aye mate, from Canada!</h1>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/canada/canada-3.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/canada/canada-2.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                    <div class="col-lg-4 mb-4">
                        <img src="images/travel/canada/canada-4.jpg" class="shadow-1-strong rounded mb-4 square" alt="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/travel/canada/canada-1.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <img src="images/travel/canada/canada-5.jpg" class="shadow-1-strong rounded mb-4 landscape" alt="" />
                    </div>
                </div>
                <!-- Gallery -->
            </div>
        </div>
    </div>
    <div class="alert alert-dark fixed-bottom" role="alert">
        Notice: Currently (THIS) page is not suited for mobile and is still under development!
    </div>
</body>
<script src="scripts/global/loader.js"></script>
<script src="scripts/travel/logic.js"></script>
<script type="text/javascript">
    // Temporary Static Logic
    function toggleDiv(id) {
        $('.right-content').css('display', 'none');
        $('#' + id).css('display', 'block');
    }
    // Gallery Lightbox
    $(document).on("click", '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    // Dynamic Creating Div for Background Particles | Not Working LOL
    for (var i = 0; i < 100; i++) {
        var newDiv = document.createElement("div");
        newDiv.addClass("circle-container");
        var innerNewDiv = document.createElement("div");
        innerNewDiv.addClass("circle");
        newDiv.appendChild(innerNewDiv);
    }
</script>

</html>