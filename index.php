<?php 
    $title = 'Index';
    require_once 'includes/header.php';
   // require_once 'db/conn.php'; 
?>

    <h1 class="text-center">Royale Estate Application</h1>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/phpblueprint.jpg" class="d-block w-100" alt="..." style="height:500px;">
            </div>
            <div class="carousel-item">
                <img src="images/phpClusterTop.jpg" class="d-block w-100" alt="..." style="height:500px;">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>