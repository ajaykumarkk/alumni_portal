<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alumni Home page</title>
    <meta charset="utf-8">
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body class="bg-color">
    <!--Navigation bar-->
    <div id="nav-placeholder">

    </div>

    <script>
        $(function() {
            $("#nav-placeholder").load("nav.php");
        });
    </script>
    <!--end of Navigation bar-->
    <div>

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
            <?php
                $imageCarouselData=simplexml_load_file("config/carouselconfig.xml") or die("Error: Cannot create object");
                foreach($imageCarouselData->children() as $image ){
                    echo '<div class="carousel-item">
                    <img src="'.$image.'" alt="Los Angeles" width="1100" height="300">
                </div>';
                }
               
                ?>
                <div class="carousel-item active">
                    <img src="images\la.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <section class="container">
            <div class="row alumni-btn">
                <div class="col-md-6">
                    <a href="https://www.google.com">
                        <button type="button" class="btn">Cyber Security Alumni</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="/">
                        <button type="button" class="btn">Business Analytics Alumni</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>