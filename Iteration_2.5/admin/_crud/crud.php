<!-- TRUNCATE TABLE `table_name` - to rest all data in SQL -->
<?php
    require_once "../scripts/config.php";    // Initial Connection to DB
    // Block user from entering into CRUD page if they are not logged in!
    if(!isset($_SESSION['username'])) {
        header('location:../_portal/panel.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <!-- Font Awesome [Logo] -->
    <script src="https://kit.fontawesome.com/9bfc0a438f.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato&family=Playball&family=Poiret+One&family=Zen+Tokyo+Zoo&display=swap');
    </style>

    <!-- Scripts -->
        <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/style.min.css">
</head>

<body>
    <!-- Structure
     - Title / Logout
     - Navigation Tabs
     - Contents -->
    <!-- https://bootstrap-vue.org/docs/components/tabs -->
    <div class="container">
        <!-- Navigation Bar -->
        <div class="navbar">
            <h3 class="title">Welcome, <?php echo ucfirst($_SESSION['username']); ?>!</h3>
            <a href="../_portal/logout.php" class="btn btn-dark">Logout</a>
        </div>
        <br>
        <!-- Tab Header (Add, Remove, Update) -->
        <ul class="nav nav-tabs" id="nav-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="nav-add-tab" data-bs-toggle="tab" data-bs-target="#nav-add"
                    type="button" role="tab" aria-controls="nav-add" aria-selected="true">Add</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-remove-tab" data-bs-toggle="tab" data-bs-target="#nav-remove"
                    type="button" role="tab" aria-controls="nav-remove" aria-selected="false">Remove</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-update-tab" data-bs-toggle="tab" data-bs-target="#nav-update"
                    type="button" role="tab" aria-controls="nav-update" aria-selected="false">Update</button>
            </li>
        </ul>
        <!-- Tab Contents -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
                <br>
                <form action="add_project.php" method="POST" enctype="multipart/form-data">
                    <!-- enctype="multipart/form-data" For handling files, else use application/x-www-form-urlencoded (Defualt) -->
                    <div class="form-group">
                        <label>Project Name</label>
                        <input type="text" name="proj-name" class="form-control" required>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                        <label>Project ID</label>
                        <input type="text" name="proj-id" class="form-control" required>
                    </div> 
                    <br> -->
                    <div class="form-group">
                        <label>Project Link</label>
                        <input type="text" name="proj-link" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group dropdown">
                                <label>Existing Category</label>
                                <select id="dropMenu" class="form-select" name="proj-cat" aria-label="dropdown"
                                    required>
                                    <option value="" disable selected>---</option>
                                    <?php
                                        $sql = "SELECT * FROM category ORDER BY categoryName";
                                        $data = $conn->prepare($sql);
                                        $data->execute();
                                        foreach($data as $value) {
                                    ?>
                                    <option value="<?php echo $value['categoryName']; ?>">
                                        <?php 
                                            echo ucwords(str_replace("_", " ", $value['categoryName']));
                                        ?>
                                    </option>
                                    <?php } ?>
                                </select>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="proj-image" class="form-control" required>
                            </div>
                            <br>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Last Edit</label>
                                <input type="date" name="last-edit" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary custom-btn">Add Project</button>
                </form>
                <br>
                <hr class="seperator">
                <form action="create_category.php" method="POST" style="width: 75%; margin: 0 auto;">
                    <!-- Used for creating new table and category in DB -->
                    <div class="form-group">
                        <label>New Category</label>
                        <div class="input-group">
                            <input type="text" name="new-cat" class="form-control no-round-right" id="category-text"
                                placeholder="Enter Category Name">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary no-round-left">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="tab-pane fade" id="nav-remove" role="tabpanel" aria-labelledby="nav-remove-tab">
                <script>
                    function setDelete() {
                        if (confirm("Do you want to DELETE this Project(s) and its corresponding data?\n\nWARNING: You will unable to redo this action!")) {
                            document.removeTable.action = "remove_project.php";
                            document.removeTable.submit();
                        }
                    }

                    function allSelect(source) {
                        var checkboxes = document.getElementsByClassName('check');
                        for (var i = 0; i < checkboxes.length; i++) {
                            checkboxes[i].checked = source.checked;
                        }
                    }
                </script>
                <!-- TODO: Add Search and Sort Bar Here -->
                <form name="removeTable" method="POST">
                    <table class="table">
                        <thead>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Date Edited</th>
                            <th scope="col" style="text-align: center;">Remove</th>
                        </thead>
                        <tbody>
                            <?php
                                $removeSQL = "SELECT * FROM projects";
                                $removeData = $conn->prepare($removeSQL);
                                $removeData->execute();
                                if($removeData->rowCount() > 0) {                         
                                    foreach($removeData as $value) {
                            ?>
                            <tr>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['category']; ?></td>
                                <td><?php echo $value['last_edit']; ?></td>
                                <td style="text-align: center;">
                                    <input type="checkbox" value="<?php echo $value['id']; ?>" name="checked[]"
                                        class="form-check-input check">
                                </td>
                            </tr>
                            <?php 
                                } 
                            } else {                        
                            ?>
                            <tr>
                                <td colspan="6">No Data Found!</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td> <!-- Space holder -->
                                <td><input type="submit" name="submit" value="Delete" onclick="setDelete();"
                                        class="btn btn-danger"></td>
                                <td><input type="checkbox" id="selectAll" onclick="allSelect(this);"
                                        class="form-check-input"> Select All </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>

            <div class="tab-pane fade" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                <!-- TODO: Add Search Bar Here -->
                <!-- <script>
                    function displayImg(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $("#img_<?php echo $value['id']?>")
                                    .attr('src', e.target.result);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script> -->
                <div class="container content-container">
                    <form name="updateProj" method="POST" action="update_project.php" enctype="multipart/form-data">
                        <br>
                        <button type="submit" class="btn btn-secondary" name="update-btn">Update Selected</button>
                        <div class="row g-4">
                            <?php
                                $updateSQL = "SELECT projects.id, projects.name, projects.link, 
                                                     projects.last_edit, projects.category, 
                                                     images.type, images.pid, images.category
                                              FROM projects, images 
                                              WHERE projects.id = images.pid
                                              AND projects.category = images.category
                                              ORDER BY last_edit DESC";
                                $updateData = $conn->prepare($updateSQL);
                                $updateData->execute();
                                foreach($updateData as $value) {
                            ?>
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-img-container">
                                        <script>
                                            function displayImg<?php echo $value['id']?>(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        $("#img_<?php echo $value['id']?>")
                                                            .attr('src', e.target.result);
                                                    };

                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                        <label class="img-update-container">
                                            <img src="../../uploads/<?php echo $value['category'].$value['pid'].".".$value['type']."?".mt_rand(); ?>"
                                                class="card-img-top" alt="placeholder" id="img_<?php echo $value['id']?>">
                                            <input type="file" id="update-img" style="display: none;" name="proj-image_<?php echo $value['id']?>" 
                                                onchange="displayImg<?php echo $value['id']?>(this);" class="form-control">
                                            <i class="fas fa-upload update-img-icon"></i>
                                        </label>
                                    </div>
                                    <div class="card-body row align-items-center">
                                        <div class="col-md-12">
                                            <input type="text" name="proj-name_<?php echo $value['id']?>" class="form-control"
                                                value="<?php echo $value['name'];?>" placeholder="<?php echo $value['name'];?>">
                                            <select id="dropMenu" class="form-select" name="proj-cat_<?php echo $value['id']?>"
                                                aria-label="dropdown">
                                                <option value="<?php echo $value['category'];?>">
                                                    <?php echo ucwords(str_replace("_", " ", $value['category'])); ?>
                                                </option>
                                                <optgroup label="---">
                                                    <?php
                                                        $catSQL = "SELECT * FROM category";
                                                        $catData = $conn->prepare($catSQL);
                                                        $catData->execute();
                                                        foreach($catData as $catValue) {
                                                            if($catValue['categoryName'] != $value['category']) {
                                                    ?>
                                                    <option value="<?php echo $catValue['categoryName'];?>">
                                                        <?php 
                                                            echo ucwords(str_replace("_", " ", $catValue['categoryName']));
                                                        ?>
                                                    </option>

                                                    <?php
                                                        } 
                                                    }
                                                    ?>
                                                </optgroup>
                                            </select>
                                            <input name="proj-link_<?php echo $value['id']?>" value="<?php echo $value['link'];?>"
                                                class="form-control" placeholder="<?php echo $value['link'];?>">
                                            <input name="proj-date_<?php echo $value['id']?>" type="text" onfocus="(this.type='date')"
                                                value="<?php echo $value['last_edit']; ?>" class="form-control">
                                            <input type="checkbox" class="btn-check" id="update-check_<?php echo $value['id'];?>" name="update[]" value="<?php echo $value['id']; ?>">
                                            <label class="btn btn-outline-success update-toggle" for="update-check_<?php echo $value['id']; ?>">Update</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $("#category-text").click(function () {
        $(this).select();
    });
</script>

</html>