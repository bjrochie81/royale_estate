<?php include_once 'includes/session.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Access-Control - <?php echo $title ?></title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Royale Estate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mr-auto">
        <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="log_visitor.php">Log Visitor</a>
        <a class="nav-item nav-link active" href="viewrecords.php">View Visitors</a>
        <a class="nav-item nav-link active" href="aboutus.php">About Us</a>
      </div>
      <div class="navbar-nav ml-auto">
        <?php
            if(!isset($_SESSION['userid'])){
         ?>
        <a class="nav-item nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
        <?php } else{ ?>
            <a class="nav-item nav-link" href='#'><span>Hello <?php echo $_SESSION['username'] ?>!</span></a>
            <a class="nav-item nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>   
        <?php } ?>
      </div>

</nav>
<br/>
    
