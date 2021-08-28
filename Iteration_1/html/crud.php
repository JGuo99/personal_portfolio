<!-- TRUNCATE TABLE `table_name` - to rest all data in SQL -->
<?php
    require_once "admin/config.php"    // Initial Connection to DB
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato&family=Playball&family=Poiret+One&family=Zen+Tokyo+Zoo&display=swap');
    </style>

    <!-- Scripts -->
        <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="admin/logic.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="admin/style.css">
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
            <h3 class="title">Welcome, Admin!</h3>
            <button class="btn btn-dark">Logout</button>
        </div>
        <br>
        <!-- Tab Header (Add, Remove, Update) -->
        <ul class="nav nav-tabs" id="nav-tab" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="nav-add-tab" data-bs-toggle="tab" data-bs-target="#nav-add" type="button" role="tab" aria-controls="nav-add" aria-selected="true">Add</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-remove-tab" data-bs-toggle="tab" data-bs-target="#nav-remove" type="button" role="tab" aria-controls="nav-remove" aria-selected="false">Remove</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-update-tab" data-bs-toggle="tab" data-bs-target="#nav-update" type="button" role="tab" aria-controls="nav-update" aria-selected="false">Update</button>
            </li>
        </ul>
        <!-- Tab Contents -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
                <br>
                <form action="admin/add_project.php" method="POST" enctype="multipart/form-data">
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
                                <select id="dropMenu" class="form-select" name="proj-cat" 
                                    aria-label="dropdown" onchange="selectValue(event)" required>
                                    <option value="" disable selected>---</option>
                                    <?php
                                        $sql = "SELECT DISTINCT category FROM freelance ORDER BY category";
                                        $data = $conn->prepare($sql);
                                        $data->execute();
                                        foreach($data as $value) {
                                    ?>
                                    <option value="<?php echo $value['category']; ?>"><?php echo $value['category']; ?></option>
                                    <?php } ?>
                                </select>
                                <br>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <label>New Category</label>
                            <input type="text" name="proj-cat" class="form-control" id="category-text" onchange="inputCheck()">
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
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="proj-image" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>

            <div class="tab-pane fade" id="nav-remove" role="tabpanel" aria-labelledby="nav-remove-tab">
                <script>
                    function setDelete() {
                        if(confirm("Do you want to DELETE these Project(s)?")) {
                            document.removeTable.action = "admin/remove_project.php";
                            document.removeTable.submit();
                        }
                    }
                </script>
                <!-- TODO: Add Search and Sort Bar Here -->
                <form name="removeTable" method="post">
                    <table class="table">
                        <thead>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Date Edited</th>
                            <th scope="col" style="text-align: center;">Remove</th>
                        </thead>
                        <tbody>
                            <?php
                                $removeSQL = "SELECT * FROM freelance";
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
                                    <input type="checkbox" value="<?php echo $value['id']; ?>" 
                                        name="checked[]" class="form-check-input">
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
                    </table>
                    <input type="submit" name="submit" value="Delete" onclick="setDelete();" class="btn btn-danger">
                </form>
            </div>
            
            <div class="tab-pane fade" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                <!-- TODO: Add Search Bar Here -->
                <div class="container content-container">
                    <div class="row g-4">
                        <?php
                            $updateSQL = "SELECT * FROM thumbnail, freelance 
                                          WHERE thumbnail.id = freelance.id";
                            $updateData = $conn->prepare($updateSQL);
                            $updateData->execute();
                            foreach($updateData as $value) {
                        ?>
                        <div class="col-md-6 col-lg-3">
                            <a class="card" href="<?php echo $value['link']; ?>" target="_blank">
                                <div class="card-img-container">
                                    <img src="data:image/jpg;charset=utf8;base64,
                                        <?php echo base64_encode($value['image']); ?>" 
                                        class="card-img-top" alt="placeholder">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-text"><?php echo $value['name']; ?></h5>
                                    <p class="card-text"><?php echo $value['category']; ?></p>
                                    <p class="card-text"><small class="text-muted">Last updated <?php echo $value['last_edit']; ?></small></p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // $(document).ready(function() {
        
    // }
    $("#category-text").click(function() {
        $(this).select();
    });

    function inputCheck(e) {
        if (!$('#category-text').val()) {   // If the input box is empty...
            document.getElementById("dropMenu").disabled = false;
            document.getElementById("dropMenu").style.opacity = "1";
        } else {
            document.getElementById("dropMenu").disabled = true;
            document.getElementById("dropMenu").style.opacity = "0.5";
        }
    }

    function selectValue(e) {
        if (!document.getElementById("dropMenu").disabled) {
            document.getElementById("category-text").value = e.target.value;
        }
    }
</script>
</html>