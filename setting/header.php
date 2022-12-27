<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>    
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../css/header/header.css?after" />
        <script type="text/javascript" src="../js/jquery-2.0.0.min.js"></script>
        <script type="text/javascript" src="../css/all/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../css/all/bootstrap.min.css"></link>
        
    </head>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><image src="../style/logo2.png" class="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
      <?
        $que="select * from pageMenu";
        $res=mysql_query($que);
        while($row=mysql_fetch_array($res)){
        ?>
        <li class="nav-item active">
          <a class="nav-link" href="#"><?=$row['menuName']?></a>
        </li>
        <?}?>
      </ul>
    </div>
  </div>
</nav>

<header>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
        <div class="carousel-caption">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
        <div class="carousel-caption">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/lHGeqh3XhRY/1920x1080')">
        <div class="carousel-caption">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>


<!-- <!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/header/header.css?after" />
        <script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
    </head>
    <header>
        <div class="headerBox">
            <image class="logoImg" src="../style/logo2.png" style="width: 100px;height:100px;"/>
            <div class="menuBar">
                <nav class="level">
  <p class="level-item has-text-centered">
    <a class="link is-info">Home</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Menu</a>
  </p>
  <p class="level-item has-text-centered">
    <img src="https://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Reservations</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="link is-info">Contact</a>
  </p>
</nav>
                <table>
                    <thead>
                        <th>
                        <?
                            $que="select * from pageMenu";
                            $res=mysql_query($que);
                            while($row=mysql_fetch_array($res)){
                            ?>
                            <td class="insert"><?=$row['menuName']?></td>
                            <?}?>
                        </th>
                    </thead>
                </table>
            </div>
        </div>
    </header>


 -->