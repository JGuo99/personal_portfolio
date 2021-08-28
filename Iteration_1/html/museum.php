<?php
    require_once "admin/config.php"    // Initial Connection to DB
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum of Projects</title>

    <!-- Font Awesome [Logo] -->
    <script src="https://kit.fontawesome.com/9bfc0a438f.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato&family=Playball&family=Poiret+One&family=Zen+Tokyo+Zoo&display=swap');
    </style>

    <!-- Scripts -->
    <script src="../js/search.js"></script>
    <script src="museum/responsive.js"></script>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="museum/style.css">
    
    <!-- For Mobile Layout - There is no need for this page! -->
    <link rel="stylesheet" href="" id="mobile"> 
</head>
<body>
    <!-- 
    Structure:
     - Navbar
     - Filter Bar/List
     - Content Container
    -->

    <!-- PHP Controller -->
    <?php
        // print_r($_GET);    // Debugging
        // Show All Category - DEFAULT
        $sql = "SELECT * FROM thumbnail, freelance WHERE thumbnail.id = freelance.id";
        if(isset($_GET['keywords'])) {
            $keywords = ($_GET['keywords']);
            // Filter Category
            $sql = 
                "SELECT * FROM thumbnail, freelance 
                WHERE thumbnail.id = freelance.id
                AND freelance.category LIKE '%{$keywords}'";
        }
        else if(isset($_GET['find'])) {
            $searchInput = $_GET['searchbox'];
            $sql = 
                "SELECT * FROM thumbnail, freelance 
                WHERE thumbnail.id = freelance.id
                AND freelance.name LIKE '%{$searchInput}%'";
        }
        $data = $conn->prepare($sql);
    ?>
    <!-- Navbar -->
    <div class="navbar">
        <div class="list-container" id="fluid-container">
            <a href="../index.html" class="item-action">
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
            <ul name="keywords" class="list-container">
                <li class="item-contianer">
                    <a href="<?php echo $_SERVER['PHP_SELF'];?>" class="item-action reset-custom">
                        <!-- <img src="../images/reset.png" alt="reset"> -->
                        <span class="reset-custom">Reset</span>
                    </a>
                </li>
                <li class="item-contianer">
                    <button type="submit" name="keywords" value="artificial intelligence" class="item-action">
                        <img src="../images/ai.png" alt="artificial-intelligence">
                        <span>Arti. Intel.</span>
                    </button>
                </li>
                <li class="item-contianer">
                   <button type="submit" name="keywords" value="flutter" class="item-action">
                        <img src="../images/flutter_dev.png" alt="flutter">
                        <span>Flutter</span>
                    </button>
                </li>
                <li class="item-contianer">
                    <button type="submit" name="keywords" value="android" class="item-action">
                        <img src="../images/android_dev.png" alt="android">
                        <span>Android</span>
                    </button>
                </li>
                <li class="item-contianer">
                    <button type="submit" name="keywords" value="game development" class="item-action">
                        <img src="../images/game_dev.png" alt="game-development">
                        <span>Game Dev.</span>
                    </button>
                </li>
                <li class="item-contianer">
                    <button type="submit" name="keywords" value="full stack" class="item-action">
                        <img src="../images/full_stack.png" alt="full-stack">
                        <span>Full Stack</span>
                    </button>
                </li>
                <li class="item-contianer">
                    <button type="submit" name="keywords" value="workshop" class="item-action">
                        <img src="../images/workshop.png" alt="workshop">
                        <span>Workshop</span>
                    </button>
                </li>
                <li class="item-contianer">
                    <button type="submit" name="keywords" value="modern art" class="item-action">
                        <img src="../images/art.png" alt="art">
                        <span>Modern Art</span>
                    </button>
                </li>
            </ul>
        </form>
    </div>
    <!-- Content Container -->
    <div class="container content-container">
        <!-- row-col-1 is the number of columns in the cards, 
             row-col-3 is the number of columns per row -->
        <!-- <div class="row row-cols-1 row-cols-md-6 g-4"> --> 
        <div class="row g-4">
            <?php
                // $data = mysqli_query($con, $sql);    //MYSQLi Version
                $data->execute();   // PDO Version
                foreach($data as $value) {
            ?>
            <div class="col-md-6 col-lg-3">
                <a class="card" href="<?php echo $value['link']; ?>" target="_blank">
                    <div class="card-img-container">
                        <img src="data:image/jpg;charset=utf8;base64,
                            <?php echo base64_encode($value['image']); ?>" 
                            class="card-img-top" alt="placeholder">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                        <p class="card-text"><?php echo $value['category']; ?></p>
                        <p class="card-text"><small class="text-muted">Last updated <?php echo $value['last_edit']; ?></small></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>    
</body>
</html>