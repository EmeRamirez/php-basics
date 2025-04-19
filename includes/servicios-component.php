<?php
// include 'includes/header.php';

// Realiza la solicitud cURL
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://ciisa.coningenio.cl/v1/services/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: Bearer ciisa'
    ],
    CURLOPT_FAILONERROR => true,
    CURLOPT_HEADER => true // Para incluir headers en la respuesta
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
curl_close($curl);

// Separar headers y cuerpo
$headers = substr($response, 0, $headerSize);
$body = substr($response, $headerSize);
$debugMode = true;
$lang = $_GET['lang'] ?? 'esp';
 
$translations = [
  'NUESTROS_SERVICIOS' => [
    'esp' => 'NUESTROS SERVICIOS',
    'eng' => 'OUR SERVICES'
  ],
'DESCRIPCION' => [
  'esp' => 'Ofrecemos soluciones innovadoras y personalizadas para ayudarte a alcanzar tus objetivos.',
  'eng' => 'We offer innovative and personalized solutions to help you achieve your goals.'
],
'MORE' => [
  'esp' => 'Saber más',
  'eng' => 'Know more'
]

];
if ($err) {
    echo '<div class="alert alert-danger">Error en la conexión: ' . htmlspecialchars($err) . '</div>';
} else {
    // Verificar el Content-Type
    $contentType = '';
    if (preg_match('/Content-Type:\s*([^;\s]+)/i', $headers, $matches)) {
        $contentType = strtolower($matches[1]);
    }

    // Validar que sea JSON
    if (strpos($contentType, 'json') === false && $debugMode) {
        echo '<div class="alert alert-warning">';
        echo '<p>La API no devolvió JSON. Content-Type recibido: ' . htmlspecialchars($contentType) . '</p>';
        echo '<p>Respuesta cruda (primeros 500 caracteres):</p>';
        echo '<pre>' . htmlspecialchars(substr($body, 0, 500)) . '</pre>';
        echo '</div>';
    }

    // Intentar decodificar el JSON
    $servicesInfo = json_decode($body, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo '<div class="alert alert-danger">';
        echo '<h4>Error al decodificar JSON:</h4>';
        echo '<p>' . json_last_error_msg() . '</p>';
        
        if ($debugMode) {
            echo '<h5>Información para diagnóstico:</h5>';
            echo '<p>Código HTTP: ' . $httpCode . '</p>';
            echo '<p>Headers recibidos:</p>';
            echo '<pre>' . htmlspecialchars($headers) . '</pre>';
            echo '<p>Respuesta completa (primeros 1000 caracteres):</p>';
            echo '<pre>' . htmlspecialchars(substr($body, 0, 1000)) . '</pre>';
        }
        
        echo '</div>';
    } else {
        // Aquí puedes usar $servicesInfo para mostrar la información en tu página
        // Ejemplo, recibiendo los servicios de la API
        $services = $servicesInfo['data'];  // Array de servicios
      
        ?>
        <section class="service_section layout_padding-bottom">
          <div class="container">
            <div class="custom_heading-container">
              <h3 class="">
              <?= $translations['NUESTROS_SERVICIOS'][$lang] ?>
              </h3>
            </div>
            <p class="">
            <?= $translations['DESCRIPCION'][$lang] ?>
            </p>
            
            <div class="service_container">
              
            <div id="service-container" class="row g-4">
  <?php
  foreach ($services as $service) {
      if ($service['activo']) {
          $titulo = $service['titulo'][$lang];
          $descripcion = $service['descripcion'][$lang];
          $imagen = "assets/img/s-" . $service['id'] . ".jpg";
  ?>
<div class="col-12 col-md-6 mb-5 d-flex">
<div class="card shadow-sm w-100 h-100">
    <img src="<?php echo $imagen; ?>" class="card-img-top img-fluid" alt="Imagen servicio" style="height: 250px; object-fit: cover;">
    <div class="card-body d-flex flex-column">
      <h5 class="card-title " style="color:#193b75"><?php echo $titulo; ?></h5>
      <p class="card-text text-muted"><?php echo $descripcion; ?></p>
    </div>
  </div>
</div>

  <?php
      }
  }
  ?>
</div>

              
            </div>
          </div>
        </section>
        <?php
    }
}

// include 'includes/footer.php';
?>
