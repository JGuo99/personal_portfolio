<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Studio</title>

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
    <link rel="stylesheet" href="css/style.min.css">

</head>

<body>
    <div class="container" id="blog-container">
        <form method="POST" action="">
            <div class="input-group">
                <input type="text" id="title" name="title" required>
                <label for="title">Enter Blog's Title</label>
            </div>
            <div class="row-form">
                <div class="input-group">
                    <input type="text" id="topic" name="topic" required>
                    <label for="topic">Enter Topic</label>
                </div>
                <div class="input-group">
                    <input type="text" id="notes" name="notes" required>
                    <label for="notes">Enter Author's Notes</label>
                </div>
            </div>

            <div class="input-group">
                <textarea id="intro" rows="8" name="intro" required></textarea>
                <label for="intro">Intro Section</label>
                <span class="input-group-append">
                    <input type="file" class="custom-file-input">
                </span>
            </div>

            <div class="input-group">
                <textarea id="body" rows="8" name="body" required></textarea>
                <label for="body">Body Section</label>
            </div>
            <div class="input-group">
                <textarea id="conclude" rows="8" name="conclude" required></textarea>
                <label for="conclude">Conclusion Section</label>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button type="submit" class="general-butt">Cancel</button>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="general-butt">Save</button>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="general-butt">Post</button>
                </div>
            </div>
            
        </form>
    </div>
</body>

</html>