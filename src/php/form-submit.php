<?php
require_once "../.api.php";

if(isset($_POST['submit'])) {
    // Detalles del contacto
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $form = $_POST['form'];
    $message = $_POST['message'];

    // Envío de datos por correo
    //sendEmail ($name, $email, $phone, $form, $message);

    // Envío de correo de agradecimiento
    sendThanksEmail($name, $email);

    // Sincronización del lead con Hubspot
    syncToHubspot ($name, $email, $phone, $message, $form);

    // Recarga de la página
    header('Location: https://www.tagac.com.mx/');
    exit();
}

function sendEmail($name, $email, $phone, $form, $message) {
    // Destinatario
    $mailto = "fernando.romay@ruzaani.com";

    $content = "Nombre: $name\n" .
    "Teléfono: $phone\n" .
    "Correo: $email\n" .
    "Formulario: $form\n\n" .
    "Mensaje: $message";

    // Metadatos del correo
    $subject =  "Nuevo contacto de $name";
    $headers = "From: $email\r\nContent-Type: text; charset=UTF-8";

    // Envío de la información por correo
    mail($mailto, $subject, $content, $headers);
}

function sendThanksEmail ($name, $mailto) {
    $name = explode(' ', $name)[0];

    // Cuerpo del mensaje
    $body = "<div id='container' style='max-width: 600px; margin: 0px auto; padding: 20px; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px; background-color: rgb(255, 255, 255);'>
    <img src='https://tagac.com.mx/src/img/brand/logo-full.png' alt='TAGAC' style='width: 25%; max-width: 400px; height: auto; margin-top: 10px;'>
    <h1 style='color: rgb(0, 102, 204);'>Soluciones en empaques</h1>
    <p style='color: rgb(51, 51, 51);'>
        ¡Gracias por ponerte en contacto con nosotros! Hemos recibido tu solicitud y queremos agradecerte por mostrarnos tu interés. En TAGAC, nos comprometemos a ofrecer soluciones de calidad y a construir relaciones sólidas y duraderas con nuestros clientes.
    </p>
    <p style='color: rgb(51, 51, 51);'>
        Tu consulta es muy importante para nosotros y uno de nuestros especialistas se pondrá en contacto contigo dentro de las próximas 24 horas para proporcionarte la asistencia y la información que necesitas.
    </p>
    <p style='color: rgb(51, 51, 51);'>
        Mientras tanto, te invitamos a explorar <a href='https://www.tagac.com.mx' target='_blank'>nuestro sitio web</a> para conocer más sobre nuestra gama completa de productos y descubrir cómo TAGAC puede transformar su estrategia de empaque.
    </p>
    <p style='color: rgb(51, 51, 51);'>
        Agradecemos tu interés y confianza en TAGAC. Estamos aquí para apoyarte en todo lo que necesites.
    </p>
    <div>Atentamente,</div><div>El Equipo de TAGAC</div></div>";

    // Metadatos del correo
    $subject =  "¡Gracias por contactarnos!";
    $headers = "From: ventas@tagac.com.mx\r\n" .
                "Reply-To: ventas@tagac.com.mx\r\n" .
                "Content-Type: text/html; charset=UTF-8" . "\r\n" .
                'Para: WebSite' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    // Envío del mensaje
    mail($mailto, $subject, $body, $headers);
}

function syncToHubspot($name, $email, $phone, $message, $form) {
    global $hubspotKey;

    // Formateo del mensaje
    $msgPlain = str_replace("\r\n", "\n", $message);
    $msgPlain = str_replace("\r", "\n", $msgPlain);
    $msgPlain = str_replace("\n", " ", $msgPlain);

    // Inicialización de conexión a Hubspot
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $hubspotKey", 'Content-Type: application/json'));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Guardar o modificar contacto
    $contact = searchContact($ch, $email);
    if ($contact == "none") {
        saveContact($ch, $name, $email, $phone, $msgPlain, $form);
    } else {
        updateContact($ch, $contact, $phone, $msgPlain);
    }

    //Cierre de conexión
    @curl_close($ch);
}

function searchContact($curl, $email) {
      $query = json_encode (json_decode ("{
          \"filterGroups\":[
            {
              \"filters\":[
                {
                  \"propertyName\": \"email\",
                  \"operator\": \"EQ\",
                  \"value\": \"$email\"
                }
              ]
            }
          ]
        }"
      ));

      $endpoint = 'https://api.hubapi.com/crm/v3/objects/contacts/search';
      @curl_setopt($curl, CURLOPT_URL, $endpoint);
      @curl_setopt($curl, CURLOPT_POST, true);
      @curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
  
      //Execute
      $response = json_decode(@curl_exec($curl));
      $status_code = @curl_getinfo($curl, CURLINFO_HTTP_CODE);
      $curl_errors = curl_error($curl);
  
      if ($response->total == 0) {
          return "none";
      } else {
          return $response->results[0]->id;
      }
}

function updateContact($curl, $contactID, $phone, $message) {

    // Formateo de información
    $data = json_encode (json_decode("{
        \"properties\": {
            \"phone\": \"$phone\",
            \"message\": \"$message\",
            \"business_unit\": \"; tagac\"
        }
      }"
    ));

      $endpoint = 'https://api.hubapi.com/crm/v3/objects/contacts/'.$contactID;
      @curl_setopt($curl, CURLOPT_URL, $endpoint);
      @curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
      @curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

      //Execute
      $response = @curl_exec($curl);
      $status_code = @curl_getinfo($curl, CURLINFO_HTTP_CODE);
      $curl_errors = curl_error($curl);
}

function saveContact($curl, $name, $email, $phone, $message, $form) {

    // Separación del nombre
    $nameArray = explode (' ', $name);
    $firstName = array_shift ($nameArray);
    $lastName =  implode (' ', $nameArray);

    // Formateo de información
    $data = json_encode (json_decode("{
        \"properties\": {
            \"email\": \"$email\",
            \"firstname\": \"$firstName\",
            \"lastname\": \"$lastName\",
            \"phone\": \"$phone\",
            \"message\": \"$message\",
            \"business_unit\": \"tag\",
            \"hs_lead_status\": \"NEW\",
            \"conversion_type\": \"inbound\",
            \"conversion_channel\": \"form\",
            \"conversion_form\": \"$form\"
        }
      }"
    ));

      $endpoint = 'https://api.hubapi.com/crm/v3/objects/contacts';
      @curl_setopt($curl, CURLOPT_URL, $endpoint);
      @curl_setopt($curl, CURLOPT_POST, true);
      @curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

      //Execute
      $response = @curl_exec($curl);
      $status_code = @curl_getinfo($curl, CURLINFO_HTTP_CODE);
      $curl_errors = curl_error($curl);
}