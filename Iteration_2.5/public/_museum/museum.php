<?php
    require_once "../scripts/config.php"    // Initial Connection to DB
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Museum of Projects</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../favicon_trans.ico" />

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
    <link rel="stylesheet" href="../css/nav.min.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="css/style.min.css">

    <!-- For Mobile Layout -->
    <link rel="stylesheet" href="" id="mobile">
</head>

<body class="preload">
    <!-- 
    Structure:
     - Navbar
     - Filter Bar/List
     - Content Container
    -->

    <!-- PHP Controller -->
    <?php
        // print_r($_GET);    // Debugging
        
        if(isset($_GET['keywords'])) {
            $keywords = ($_GET['keywords']);
            if($keywords == 'all') {
                // Show All Projects
                $sql = 
                    "SELECT * FROM projects, images
                     WHERE projects.id = images.pid
                     ORDER BY last_edit DESC";
            }else {
                // Filter Category
                $sql = 
                    "SELECT * FROM projects, images
                     WHERE projects.category LIKE '%{$keywords}'
                     AND projects.id = images.pid
                     ORDER BY last_edit DESC";
            }
        }
        else if(isset($_GET['find'])) {
            $searchInput = $_GET['searchbox'];
            $sql = 
                "SELECT * FROM projects, images 
                 WHERE projects.name LIKE '%{$searchInput}%'
                 AND projects.id = images.pid";
        } else {
            // Show All Category - DEFAULT
            $sql = "SELECT * FROM projects, images 
                    WHERE projects.category = images.category 
                    AND projects.id = images.pid
                    ORDER BY projects.name";
        }
        $data = $conn->prepare($sql);
    ?>
    <!-- Navbar -->
    <div class="navbar">
        <div class="list-container" id="fluid-container">
            <a href="../../index.php" class="item-action">
                <h1 id="logo">Sheng Guo</h1>
            </a>
            <!-- <li class="item-container">
                <a href="#" class="item-action">
                    <span class="option-title">Option 2</span>
                </a>
            </li> -->
            <!-- Search Box -->
            <form method="GET" id="searchBox" class="item-container">
                <!-- <img src="museum/search.png" id="searchIcon">   To Be Changed -->
                <button onclick="inputFocus()" type="button"
                    style="border: none; background: transparent; padding: 0; margin: 0; height: 26px">
                    <i class="fas fa-search" id="searchIcon"></i>
                </button>
                <input type="text" name="searchbox" id="searchbox" onfocus="this.value = ''"
                    value="<?php echo isset($_GET['searchbox'])?$_GET['searchbox']:''?>"
                    placeholder="Enter Project Name" required>
                <button type="submit" name="find" value="search" id="submit">
                    <i class="fas fa-search" id="submitIcon"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Filter Bar/List [Require SQL CRUD]-->
    <div class="filterbar">
        <form method="GET" class="list-container">
            <ul name="keywords" class="list-container" id="horizontal-scroll">
                <li class="item-contianer">
                    <!-- htmlspecialchars($_SERVER['PHP_SELF']); - Safer (Prevent hacker)-->
                    <button type="submit" name="keywords" value="all" class="item-action action-all">
                        <span>All</span>
                    </button>
                </li>

                <?php
                    $filter = $conn->prepare("SELECT DISTINCT category FROM projects ORDER BY category");
                    $filter->execute();
                    foreach($filter as $value) {
                ?>
                <li class="item-contianer">
                    <button type="submit" name="keywords" value="<?php echo $value['category'] ?>" class="item-action">
                        <span><?php echo ucwords(str_replace("_", " ", $value['category'])); ?></span>
                    </button>
                </li>
                <?php } ?>
            </ul>
        </form>
    </div>
    <!-- Content Container -->
    <div class="container content-container">
        <!-- row-col-1 is the number of columns in the cards, 
             row-col-3 is the number of columns per row 
             <div class="row row-cols-1 row-cols-md-6 g-4"> -->
        <div class="row g-4">
            <?php
                // $data = mysqli_query($con, $sql);    //MYSQLi Version
                $data->execute();   // PDO Version
                foreach($data as $value) {
            ?>
            <div class="col-md-6 col-lg-3">
                <a class="card" href="<?php echo $value['link']; ?>" target="_blank">
                    <div class="card-img-container">
                        <!-- Retrieving Stored Image From DB -->
                        <!-- <img src="data:image/jpg;charset=utf8;base64,<?php // echo base64_encode($value['image']); ?>" class="card-img-top" alt="placeholder"> -->
                        <!-- Retrieving Stored Image on File System -->
                        <img src="../../uploads/<?php echo $value['category'].$value['pid'].".".$value['type']."?".mt_rand(); ?>"
                            class="card-img-top" alt="placeholder">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                        <p class="card-text"><?php echo ucwords(str_replace("_", " ", $value['category'])); ?></p>
                        <p class="card-text"><small class="text-muted">Last updated
                                <?php echo $value['last_edit']; ?></small></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
<!-- Scripts -->
<script src="../scripts/search.js"></script>
<script src="responsive.js"></script>
<script>
    $(window).on('load', function () {
        $("body").removeClass("preload");
    });
    // Horizontal Scroll
    $(document).ready(function () {
        (function () {
            function scrollHorizontally(e) {
                e = window.event || e;
                var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
                document.getElementById('horizontal-scroll').scrollLeft -= (delta *
                    50); // Multiplied by 50 ticks
                e.preventDefault();
            }
            if (document.getElementById('horizontal-scroll').addEventListener) {
                // IE9, Chrome, Safari, Opera
                document.getElementById('horizontal-scroll').addEventListener('mousewheel',
                    scrollHorizontally, false);
                // Firefox
                document.getElementById('horizontal-scroll').addEventListener('DOMMouseScroll',
                    scrollHorizontally, false);
            } else {
                // IE 6/7/8
                document.getElementById('horizontal-scroll').attachEvent('onmousewheel',
                    scrollHorizontally);
            }
        })();
    });
</script>

</html>