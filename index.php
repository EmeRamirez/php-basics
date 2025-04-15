<?php 
include 'includes/header.php';
$lang = $_GET['lang'] ?? 'esp';

$translations = [
  'BRAND' => [
    'esp' => 'Coningenio',
    'eng' => 'Coningenio'
  ],
  'BRAND_SUB' => [
    'esp' => 'Consultora',
    'eng' => 'Solutions'
  ],
'DESCRIPCION' => [
  'esp' => 'Materializamos tus proyectos con ideas y soluciones innovadoras.',
  'eng' => 'We bring your projects to life with innovative ideas and solutions.'
],
'MORE' => [
  'esp' => 'Ver más',
  'eng' => 'See more'
]

];
?>


<section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="assets/img/slider-img.jpg" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                        <?= $translations['BRAND'][$lang] ?>
                        <br>
                          <span>
                          <?= $translations['BRAND_SUB'][$lang] ?>

                          </span>
                        </h1>
                        <p>
                        <?= $translations['DESCRIPCION'][$lang] ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="assets/img/slider-img.jpg" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Coningenio <br>
                          <span>
                            Consultora
                          </span>
                        </h1>
                        <p>
                        Materializamos tus proyectos con ideas y soluciones innovadoras.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="assets/img/slider-img.jpg" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Heustonn <br>
                          Maintenance <br>
                          <span>
                            Service
                          </span>
                        </h1>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="container">
        <div class="slider_nav-box">
          <div class="btn-box">
            <a href="">
              Read More
            </a>
            <hr>
          </div>
          <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <div class="bg">

    <!-- about section -->
    


    <!-- end about section -->

    <!-- service section -->

<?php
include 'includes/servicios-component.php';
?>

    <!-- end service section -->


<?php
include 'includes/footer.php';
?>

