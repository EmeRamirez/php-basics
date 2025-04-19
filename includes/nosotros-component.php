<!-- Mock data -->
<!-- {
  "data": [
    {
      "titulo": {
        "esp": "Servicios de soporte, gestión y diseño de TI altamente personalizados.",
        "eng": "Highly Tailored IT Design, Management & Support Services."
      },
      "descripcion": {
        "esp": "Acelere la innovación con equipos tecnológicos de clase mundial. Lo conectaremos con un equipo remoto completo de increíbles talentos independientes para todas sus necesidades de desarrollo de software.",
        "eng": "Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs."
      }
    },
    {
      "itulo": {
        "esp": "Misión",
        "eng": "Mission"
      },
      "descripcion": {
        "esp": "Nuestra misión es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el éxito de nuestros clientes, ayudándolos a alcanzar sus objetivos empresariales a través de la tecnología y la creatividad.",
        "eng": "Our mission is to deliver high-quality, innovative digital solutions that drive our clients' success, helping them achieve their business goals through technology and creativity."
      }
    },
    {
      "titulo": {
        "esp": "Visión",
        "eng": "Vision"
      },
      "descripcion": {
        "esp": "Nos visualizamos como líderes en el campo de la consultoría y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado y nuestra contribución al crecimiento y la transformación digital de las empresas.",
        "eng": "We see ourselves as leaders in the field of software consulting and development, recognized for our excellence in customer service, our ability to adapt to changing market needs and our contribution to the growth and digital transformation of companies."
      }
    }
  ]
} -->

<!-- Se llama a la API -->
<?php
// Configuración de cURL (como en tu versión original)
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://ciisa.coningenio.cl/v1/about-us/',
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

// Modo de depuración (cambiar a false en producción)
$debugMode = true;
$lang = $_GET['lang'] ?? 'esp';

$translations = [
    'TITLE' => [
      'esp' => 'SOBRE NOSOTROS',
      'eng' => 'ABOUT US'
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
    $aboutUs = json_decode($body, true);
    
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
        // Aquí puedes usar $aboutUs para mostrar la información en tu página
        // Por ejemplo, si $aboutUs['data'] contiene la información que necesitas:
        $aboutUsData = $aboutUs['data'];

       
    }
}
?>

<section class="about_section" style="margin-bottom: 100px;">

    <div class="custom_heading-container flex-column" >

        <h3 class="pb-3">
        <?= $translations['TITLE'][$lang] ?>
        </h3>

    </div>

    <div class="container">
        <div class="img-box pb-3">
            <img src="assets/img/animacs.jpg" alt="">
        </div>

        <?php if (isset($aboutUsData[0]['titulo'][$lang])): ?>
            
        <div class="pt-5 flex-column">

            <h3 class="pb-3">
                <b><?php echo $aboutUsData[0]['titulo'][$lang]; ?></b>
            </h3>

            <p class="pt-2">
                <?php echo $aboutUsData[0]['descripcion'][$lang]; ?>
            </p>

        </div>

        <?php else: ?>
            <p class="layout_padding2-top">
                No se encontró la misión en la respuesta de la API.
            </p>
        <?php endif; ?>
        
    </div>

    <div class="about-container mt-5">


            <?php if (isset($aboutUsData[1]['titulo'][$lang])): ?>

            <div class="card-about custom_heading-container flex-column" style="max-width: 400px;">

                <div >
                    <img class="img-about-card" src="assets/img/mision.jpg" alt="">
                </div>
            
                <h3 class="title-card-about">
                    <?php echo $aboutUsData[1]['titulo'][$lang]; ?>
                </h3>

                <p class="pt-3 pb-3">
                    <?php echo $aboutUsData[1]['descripcion'][$lang]; ?>
                </p>
            
            </div>

            <div class="card-about custom_heading-container flex-column" style="max-width: 400px;">

                <div>
                    <img class="img-about-card" src="assets/img/vision.jpg" alt="">
                </div>
            
                <h3 class="title-card-about">
                    <?php echo $aboutUsData[2]['titulo'][$lang]; ?>
                </h3>

                <p class="pt-3">
                    <?php echo $aboutUsData[2]['descripcion'][$lang]; ?>
                </p>
            
            </div>

            
       
            <?php else: ?>
                
                <div class="custom_heading-container flex-column">
            
                    <h3 class=" ">
                       No encontrado
                    </h3>

                    <p class="layout_padding2-top">
                        No encontrado
                    </p>
                
                </div>

                <div class="custom_heading-container flex-column">
                
                    <h3 class=" ">
                        No encontrado
                    </h3>

                    <p class="layout_padding2-top">
                        No encontrado
                    </p>
                
                </div>

            <?php endif; ?>

      </div>

    </section>