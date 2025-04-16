<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Coningenio</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/responsive.css" rel="stylesheet" />
  <link href="assets/css/nosotros.css" rel="stylesheet" />
    <link href="assets/css/contacto.css" rel="stylesheet" />

</head>

<body>
<?php

$lang = $_GET['lang'] ?? 'esp';

$translations = [
  'HOME' => [
    'esp' => 'Inicio',
    'eng' => 'Home'
  ],
  'US' => [
    'esp' => 'Nosotros',
    'eng' => 'About us'
  ],
'SERVICES' => [
  'esp' => 'Servicios',
  'eng' => 'Services'
],
'CONTACT' => [
  'esp' => 'Contáctanos',
  'eng' => 'Contact us'
]

];
?>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
    <div class="lang-toggle">
      <a href="?lang=esp"> 🇪🇸</a> |
      <a href="?lang=eng">🇬🇧</a>
    </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Coningenio
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active" >
                  <a class="nav-link" href="index.php"><?= $translations['HOME'][$lang] ?>
                  </a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="nosotros.php"><?= $translations['US'][$lang] ?>
                  </a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="servicios.php"><?= $translations['SERVICES'][$lang] ?>
                  </a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="contacto.php"><?= $translations['CONTACT'][$lang] ?>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li> -->
              </ul>
            </div>
          </div>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </nav>
      </div>
    </header>