<?php
    /** Envía un email **/
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : null;

    if ($nombre === null || $email === null ||  $mensaje === null) {
        print_r(json_encode(array('status' => false, 'msg' => "¡Debes llenar todos los campos!" )));
    } else {
        $body = "
            Nombre: $nombre,\r\n
            Email: $email,\r\n
            Mensaje: $mensaje\r\n
        ";
        $body = wordwrap($body, 70, "\r\n");
        $headers = "From: contacto@buhointercambios.com.mx" . "\r\n" .
                    "CC: cesar@softwareinsights.com.mx";
        mail("cesar_alonso_m_g@hotmail.com", "Contacto desde Buho Intercambios", utf8_decode($body), $headers); 

        print_r(json_encode(array('status' => true, 'msg' => "¡Tu email ha sido enviado exitosamente!" )));
    }
