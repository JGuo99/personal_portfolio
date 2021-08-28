<?php
// Store Selected Name to PHP Variable
    $cat = $_POST['cat'];
    echo $cat;

    // $selectedName = $_POST['backendPost'];
    
?>

<form method="GET" id="retrieve-cat-form">
                    <?php
                        require_once "admin/nameRetrieval.php";
                        
                        if(isset($_GET['remove-cat'])) {
                            $keywords = ($_GET['remove-cat']);
                            // Filter Category
                            $nameSQL = 
                                "SELECT name FROM freelance
                                 WHERE freelance.category LIKE '$cat'";
                            $nameData = $con->prepare($sql);
                        }
                    ?>
                    <br>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Select a Project's Category</label>
                                
                                <select id="dropMenu-remove" class="form-select" name="remove-cat" 
                                    aria-label="dropdown"  required>
                                    <!-- onchange="this.form.submit()" -->
                                    <option value="" disable selected>---</option>
                                    <?php
                                        $sql = "SELECT DISTINCT category FROM freelance ORDER BY category";
                                        $catData = $con->prepare($sql);
                                        $catData = mysqli_query($con, $sql);
                                        foreach($catData as $value) {
                                    ?>
                                    <option value="<?php echo $value['category']; ?>">
                                        <?php echo $value['category']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="submit" value="Submit" class="btn btn-primary" id="remove-cat-btn" onclick="return submitButton(event);">
                        </div>
                    </div>
                </form>
                <!-- https://stackoverflow.com/questions/2866063/submit-form-without-page-reloading -->
                <script type="text/javascript">
                    function submitButton(e) {
                        var catVal = document.getElementById('dropMenu-remove').value;
                        console.log(catVal);
                        e.preventDefault();
                        // var descr = document.getElementById('descr').value;
                        $.ajax({
                            type: $(this).attr("method"),
                            url:"admin/nameRetrieval.php",
                            data: {  
                                'cat' :catVal
                            },
                            cache: false,
                            success: function (html) {
                                alert('Data Send');
                                $('#msg').html(html);
                            }
                        });
                        return false;
                    }
                </script>

                <form method="GET" id="retrieve-name-form">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Select the Project's Name</label>
                                
                                <select id="dropMenu-remove" class="form-select" name="remove-cat" 
                                    aria-label="dropdown"  required>
                                    <option value="" disable selected>---</option>
                                    <?php
                                        $nameData = mysqli_query($con, $nameSQL);
                                        foreach($nameData as $value) {
                                    ?>
                                    <option value="<?php echo $value['name']; ?>">
                                        <?php echo $value['name']; ?>
                                    </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <button type="submit" class="btn btn-primary" id="remove-name-btn">Confirm</button>
                        </div>
                    </div>
                </form>