<?php
$dirname = "images/alumni/";
$images = glob($dirname."*.jpg");
include_once('config.php');
$query="SELECT * from users";
$result=mysqli_query($con,$query);


?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/studentsinfo.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

<!-- Team -->
<!--Navigation bar-->
<div id="nav-placeholder">

</div>

<script>
    $(function() {
        $("#nav-placeholder").load("nav.html");
    });
</script>
<!--end of Navigation bar-->
<div>
    <section id="team" class="pb-3">


        <div class="container">
            <h5 class="section-title h1">Our Alumni</h5>
            <div class="row">
                <?php
                while($row = mysqli_fetch_array($result)) {
                    if(!($row["profilepicpath"]==null or $row["profilepicpath"]=='')){
                        $imgpath=$row["profilepicpath"];
                    }else{
                        $imgpath='https://upload.wikimedia.org/wikipedia/commons/7/72/Default-welcomer.png';
                    }
                    echo '<div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="image-flip" ontouchstart="this.classList.toggle("hover");">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                    
                                        <p><img class=" img-fluid" src="'.$imgpath                                   
                                       .
                                        '" alt="card image"></p>
                                        <h4 class="card-title">'.$row["fullname"].'</h4>
                                        <p class="card-text">'.$row["dob"].'</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">'.$row["fullname"].'</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }?>

            
                <!-- ./Team member -->