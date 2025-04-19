<?php

$lang = $_GET['lang'] ?? 'esp';

$translations = [
  'MORE' => [
    'esp' => 'Saber más',
    'eng' => 'Know more'
  ]
];
?>
<section class="container-fluid footer_section">
    
    
<div class="container mt-5">
        <div class="btn-box">
          <a href="contacto.php">
          <?= $translations['MORE'][$lang] ?>
          </a>
          <hr>
        </div>
      </div>
<p>
        Copyright &copy; 2025 Desarrollo Backend M-50
        <a>IPSS</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>