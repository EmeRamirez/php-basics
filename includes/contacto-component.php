<?php
$lang = $_GET['lang'] ?? 'esp';

$translations = [
    'TITLE' => [
    'esp' => 'Estemos en contacto',
    'eng' => 'Let\'s get in touch'
    ],
    'DESCRIPTION' => [
    'esp' => 'Envíanos un correo, llamanos o llena el formulario
                <br>y cuéntanos cómo coningenio podemos hacer <span style="color: #ff4f5a;">despegar</span> tu marca',
    'eng' => 'Send us an email, call us or fill out the form
                <br>and tell us how can we help your brand take off'
    ],
    'ADDRESS' => [
    'esp' => 'Dirección física:',
    'eng' => 'Address:'
    ],
    'PHONE' => [
    'esp' => 'Teléfono:',
    'eng' => 'Phone:'
    ],
    'WEBSITE' => [
    'esp' => 'Sitio Web:',
    'eng' => 'Website:'
    ],
    'EMAIL' => [
    'esp' => 'Correo electrónico:',
    'eng' => 'Email:'
    ],
    'FORM_TITLE' => [
    'esp' => 'Envianos un mensaje',
    'eng' => 'Send us a message'
    ],
    'FORM_NAME' => [
    'esp' => 'Tu nombre',
    'eng' => 'Your name'
    ],
    'FORM_EMAIL' => [
    'esp' => 'Tu email',
    'eng' => 'Your email'
    ],
    'FORM_PHONE' => [
    'esp' => 'Tu teléfono',
    'eng' => 'Your phone'
    ],
    'FORM_SERVICE' => [
    'esp' => 'Selecciona que servicio necesitas',
    'eng' => 'Select the service you need'
    ],
    'FORM_MESSAGE' => [
    'esp' => 'Ingresa aqui tu mensaje',
    'eng' => 'Enter your message here'
    ],
    'FORM_SEND' => [
    'esp' => 'Enviar',
    'eng' => 'Send'
    ],
    'FORM_SERVICE_OPTIONS' => [
    'esp' => [
        'Selecciona que servicio necesitas',
        'Cotizar proyecto',
        'Soporte post venta',
        'Consultas generales'
    ],
    'eng' => [
        'Select the service you need',
        'Quote project',
        'Post-sale support',
        'General inquiries'
    ]
    ],
    'FORM_MESSAGE_LABEL' => [
    'esp' => 'Mensaje',
    'eng' => 'Message'
    ],
    'FORM_MESSAGE_PLACEHOLDER' => [
    'esp' => 'Ingresa aqui tu mensaje',
    'eng' => 'Enter your message here'
    ],
];
?>

<div class="container">
    <div class="row">
        <!-- Columna izquierda (8/12) -->
        <div class="col-md-8 mt-4">
            <h1 class="display-5 mb-3  "> <?= $translations['TITLE'][$lang] ?></h1>
            <h5 class="text-secondary pb-3">
                <?= $translations['DESCRIPTION'][$lang] ?> 🚀
            </h5>

            <div class="d-flex bd-highlight justify-content-between">
                <div class="p-2 bd-highlight">
                    <p class="mt-4"><strong> <?= $translations['ADDRESS'][$lang] ?> </strong></p>
                    <p>Av. Providencia 1234, Oficina 601<br>Providencia, Santiago, Chile</p>
                    <p class="mt-4"><strong> <?= $translations['PHONE'][$lang] ?> </strong></p>
                    <p>+56 2 1234 5678</p>
                    <p class="mt-4"><strong> <?= $translations['WEBSITE'][$lang] ?> </strong></p>
                    <a href="https://www.coningenio.cl">www.coningenio.cl</a>
                    <p class="mt-4"><strong> <?= $translations['EMAIL'][$lang] ?> </strong></p>
                    <a href="mailto:info@coningenio.cl">info@coningenio.cl</a>
                </div>
                <div class="pb-0 align-self-end">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1222.591929483464!2d-70.6222654152473!3d-33.42907098094119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2scl!4v1744746894553!5m2!1ses-419!2scl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>
        </div>

        <!-- Columna derecha (4/12) -->
        <div class="col-md-4 border rounded p-5 contact-card">
            <section class="contact_section">
                <div class="custom_heading-container">
                    <h3> <?= $translations['FORM_TITLE'][$lang] ?> </h3>
                </div>
                <div class="container layout_padding2-top">
                    <form action="">
                        <div>
                            <input class="form-control border" type="text" placeholder="<?= $translations['FORM_NAME'][$lang] ?>" required>
                        </div>
                        <div>
                            <input class="form-control border" type="email" placeholder="<?= $translations['FORM_EMAIL'][$lang] ?>" required>
                        </div>
                        <div>
                            <input class="form-control border" type="text" placeholder="<?= $translations['FORM_PHONE'][$lang] ?>" required>
                        </div>
                        
                            <select class="form-control border" style="padding: 0;" required>
                                <option value="Selecciona que servicio necesitas" disabled selected>Selecciona que servicio necesitas</option>
                                <option value="Cotizar proyecto">Cotizar proyecto</option>
                                <option value="Soporte post venta">Soporte post venta</option>
                                <option value="Consultas generales">Consultas generales</option>
                            </select>
                        
                        <div>
                            <?= $translations['FORM_MESSAGE_LABEL'][$lang] ?>
                            <textarea class="form-control border" rows="5" placeholder="<?= $translations['FORM_MESSAGE_PLACEHOLDER'][$lang] ?>" required></textarea>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary px-4 py-2"><?= $translations['FORM_SEND'][$lang] ?></button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
