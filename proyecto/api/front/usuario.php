<?php
session_start();
require_once('../../core/autoload.php');
require_once('../../core/model/DaoUsuario.php');
require_once('../../core/model/DaoUsuarioHasEquipo.php');
require_once('../../core/model/DaoArticulo.php');
require_once('../../core/model/DaoUsuarioHasArticulo.php');
require_once('../../core/model/DaoUsuarioLikeUsuarioArticulo.php');
require_once('../../core/model/DaoEquipo.php');
require_once('../../core/model/DaoIntercambiando.php');
require_once('../../core/model/DaoIntercambio.php');

$DaoUsuario = new DaoUsuario();

$action = $_POST['method'];
$tablename = "equipo";


switch($action){

  case "all":
      echo json_encode( $DaoUsuario->getAll() );
  break;

  case "getAllByIdequipo":
      $usuarios = $DaoUsuario->getAllByIdequipo($_POST['idequipo']);
      $usuarios_new = array();
      foreach ($usuarios as $usuario) {
        $participa = $DaoUsuario->getParticipaByIdusuarioIdequipo($usuario->idusuario, $_POST['idequipo']);
        if($participa[0]['count']){
          $usuario->participa = true;
        } else {
          $usuario->participa = false;
        }
        array_push($usuarios_new, $usuario);
      }
     echo json_encode($usuarios_new);
  break;

  case "emailToAllByIdequipo":

      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      $usuarios = $DaoUsuario->getNoParticipandoByIdequipo($_POST['idequipo']);
      foreach ($usuarios as $usuario) {
        $mensaje = "<h2>Búho Intercambios</h2><p>Estimado compañero ".$usuario->nombres.", </p><p>Te invitamos a participar en la dinámica del intercambio desde una plataforma web diseñada especialmente para poder disfrutar de un intercambio mas sencillo, mejor organizado y divertido.</p><p>Accediendo a la siguiente dirección <a href='http://www.buhointercambios.club/acceso'>Búho Intercambios</a> estarás aceptando participar, por favor accesa con el usuario: <strong>".$usuario->email."</strong> y el password: <strong>".$usuario->password."</strong></p><p>¡Esperamos disfrutes la experiencia!.</p>";

        $mensaje .= '
        <h1>Te damos las mejores opciones para encontrar tu intercambio en Amazon</h1>
        <p><strong>Recuerda que Amazon es la mejor opción para comprar en línea</strong></p>
        <br>
        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=639b6cf2ef512e7df7c2d1a64d11cd0d&camp=1789&creative=9325&index=aps&keywords=bolsa para dama">Bolsas Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=b94b8d9964554baebf649ae9e240f6da&camp=1789&creative=9325&index=aps&keywords=audifonos">Audífonos</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=527cdad269acd730c60505407b817dd8&camp=1789&creative=9325&index=aps&keywords=Backpack">Backpack</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4ea30dafbe8ebb1968addef9d123fb4c&camp=1789&creative=9325&index=aps&keywords=Cartera para dama">Cartera Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=20640c6f36279c9aca305a61a1057263&camp=1789&creative=9325&index=aps&keywords=Cartera para caballero">Cartera Para Caballero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=e1f73b2f480a352c06ddf2d2200dc90b&camp=1789&creative=9325&index=aps&keywords=Chocolates">Chocolates</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=31287a4da7dd7a6b7333f60291ac3bc6&camp=1789&creative=9325&index=aps&keywords=Funko">Funko</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=8497920d7ceee4fc58692164d36644eb&camp=1789&creative=9325&index=aps&keywords=Gorras">Gorras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=325bec4646d3ae8d338950413eab0c43&camp=1789&creative=9325&index=aps&keywords=guantes invierno">Guantes Invierno</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fba4965eeb19e25a79f9beea71dee86e&camp=1789&creative=9325&index=aps&keywords=Joyeria de Plata">Joyeria de Plata</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=272177a579fa748bac7a7f56e0eadc9c&camp=1789&creative=9325&index=aps&keywords=libros mas vendidos en español">Libros mas vendidos en español</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=93d9810c08700153c7d57c929e29af11&camp=1789&creative=9325&index=aps&keywords=Loncheras térmicas">Loncheras térmicas</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=d18ad2acab09739acaeede77bf0f5e98&camp=1789&creative=9325&index=aps&keywords=Thermo">Thermo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=6f31d476c5e0b6242a487a83c472d501&camp=1789&creative=9325&index=aps&keywords=Accesorios Ciclismo">Accesorios Ciclismo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=70f28b7e089dd7e5ffa071ead2c56986&camp=1789&creative=9325&index=aps&keywords=Mouse Inalámbrico">Mouse Inalámbrico</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=46b824c5e1a6e82abd8ff0218254912c&camp=1789&creative=9325&index=aps&keywords=Pashmina">Pashmina</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=17b72eeba8a0f62d79b00a3a28758c03&camp=1789&creative=9325&index=aps&keywords=Reproductor de USB para Automovil">Reproductor de USB para Automovil</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4dcf97754a7bb627e352ca8eb7793367&camp=1789&creative=9325&index=aps&keywords=sueter">Suéters</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=7f0365dff81305e40b11f7ee8acfa41c&camp=1789&creative=9325&index=aps&keywords=tarro cervecero">Tarros Cervecero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=c93d234a29d0edfa2950f87bc122b393&camp=1789&creative=9325&index=aps&keywords=taza cafe">Tazas Cafeteras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=ab87aa292d01b76bebf7f87880997778&camp=1789&creative=9325&index=aps&keywords=Ventilador para Laptop">Ventilador para Laptop</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>

        <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fd3ecff9db1607081509304858d66313&camp=1789&creative=9325&index=aps&keywords=usb">Usb</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
        <br>
        <br>
        <br>
        ';




          $estatus_envio = Core::mail($usuario->email, "Participa en un intercambio", $mensaje, $mensaje);
      }
      echo json_encode(array("status"=>true, "msg"=>"Invitaciones enviadas", "class"=>"success"));

  break;

  case "emailToAllByIdequipoWithParticipando":

      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      $usuarios = $DaoUsuario->getParticipandoAndNoParticipandoByIdequipo($_POST['idequipo']);
      foreach ($usuarios as $usuario) {
        $mensaje = "<h2>Búho Intercambios</h2><p>Estimado compañero ".$usuario->nombres.", </p><p>Te invitamos a participar en la dinámica del intercambio desde una plataforma web diseñada especialmente para poder disfrutar de un intercambio mas sencillo, mejor organizado y divertido.</p><p>Accediendo a la siguiente dirección <a href='http://www.buhointercambios.club/acceso'>Búho Intercambios</a> estarás aceptando participar, por favor accesa con el usuario: <strong>".$usuario->email."</strong> y el password: <strong>".$usuario->password."</strong></p><p>¡Esperamos disfrutes la experiencia!.</p>";




          $mensaje .= '
          <h1>Te damos las mejores opciones para encontrar tu intercambio en Amazon</h1>
          <p><strong>Recuerda que Amazon es la mejor opción para comprar en línea</strong></p>
          <br>
          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=639b6cf2ef512e7df7c2d1a64d11cd0d&camp=1789&creative=9325&index=aps&keywords=bolsa para dama">Bolsas Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=b94b8d9964554baebf649ae9e240f6da&camp=1789&creative=9325&index=aps&keywords=audifonos">Audífonos</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=527cdad269acd730c60505407b817dd8&camp=1789&creative=9325&index=aps&keywords=Backpack">Backpack</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4ea30dafbe8ebb1968addef9d123fb4c&camp=1789&creative=9325&index=aps&keywords=Cartera para dama">Cartera Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=20640c6f36279c9aca305a61a1057263&camp=1789&creative=9325&index=aps&keywords=Cartera para caballero">Cartera Para Caballero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=e1f73b2f480a352c06ddf2d2200dc90b&camp=1789&creative=9325&index=aps&keywords=Chocolates">Chocolates</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=31287a4da7dd7a6b7333f60291ac3bc6&camp=1789&creative=9325&index=aps&keywords=Funko">Funko</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=8497920d7ceee4fc58692164d36644eb&camp=1789&creative=9325&index=aps&keywords=Gorras">Gorras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=325bec4646d3ae8d338950413eab0c43&camp=1789&creative=9325&index=aps&keywords=guantes invierno">Guantes Invierno</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fba4965eeb19e25a79f9beea71dee86e&camp=1789&creative=9325&index=aps&keywords=Joyeria de Plata">Joyeria de Plata</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=272177a579fa748bac7a7f56e0eadc9c&camp=1789&creative=9325&index=aps&keywords=libros mas vendidos en español">Libros mas vendidos en español</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=93d9810c08700153c7d57c929e29af11&camp=1789&creative=9325&index=aps&keywords=Loncheras térmicas">Loncheras térmicas</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=d18ad2acab09739acaeede77bf0f5e98&camp=1789&creative=9325&index=aps&keywords=Thermo">Thermo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=6f31d476c5e0b6242a487a83c472d501&camp=1789&creative=9325&index=aps&keywords=Accesorios Ciclismo">Accesorios Ciclismo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=70f28b7e089dd7e5ffa071ead2c56986&camp=1789&creative=9325&index=aps&keywords=Mouse Inalámbrico">Mouse Inalámbrico</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=46b824c5e1a6e82abd8ff0218254912c&camp=1789&creative=9325&index=aps&keywords=Pashmina">Pashmina</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=17b72eeba8a0f62d79b00a3a28758c03&camp=1789&creative=9325&index=aps&keywords=Reproductor de USB para Automovil">Reproductor de USB para Automovil</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4dcf97754a7bb627e352ca8eb7793367&camp=1789&creative=9325&index=aps&keywords=sueter">Suéters</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=7f0365dff81305e40b11f7ee8acfa41c&camp=1789&creative=9325&index=aps&keywords=tarro cervecero">Tarros Cervecero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=c93d234a29d0edfa2950f87bc122b393&camp=1789&creative=9325&index=aps&keywords=taza cafe">Tazas Cafeteras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=ab87aa292d01b76bebf7f87880997778&camp=1789&creative=9325&index=aps&keywords=Ventilador para Laptop">Ventilador para Laptop</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fd3ecff9db1607081509304858d66313&camp=1789&creative=9325&index=aps&keywords=usb">Usb</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>
          <br>
          <br>
          ';


          $estatus_envio = Core::mail($usuario->email, "Participa en un intercambio", $mensaje, $mensaje);
      }
      echo json_encode(array("status"=>true, "msg"=>"Invitaciones enviadas", "class"=>"success"));

  break;

  case "reseteaIntercambiando":

      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      $DaoUsuarioHasEquipo = new DaoUsuarioHasEquipo();
      $DaoIntercambiando = new DaoIntercambiando();

      $usuarios = $DaoUsuario->getAllByIdequipo($_POST['idequipo']);
      
      $eliminacion = false;
      $noParticipacion = false;

      foreach ($usuarios as $usuario) {
        
        $UsuarioHasEquipo = new UsuarioHasEquipo();
        
        # Obtener id de usuario_has_equipo
        $UsuarioHasEquipo = $DaoUsuarioHasEquipo->getByIdusuarioIdequipo($usuario->idusuario,$_POST['idequipo']);

        # Set No participación
        $noParticipa = $DaoUsuarioHasEquipo->setNoParticipacion($UsuarioHasEquipo);
        
        if(!$noParticipa) {
          $noParticipacion = false;
          exit;
        } else {
          $noParticipacion = true;
        }

        # eliminar de intercambiando por el idusuario_has_equipo_da o idusuario_has_equipo_recibe
        $Intercambiando = new Intercambiando();
        $Intercambiando->setIdusuarioHasEquipoDa($UsuarioHasEquipo->idusuario_has_equipo );
        $Intercambiando->setIdusuarioHasEquipoRecibe($UsuarioHasEquipo->idusuario_has_equipo );

        $eliminado = $DaoIntercambiando->deleteByIdUsuario($Intercambiando);

        if(!$eliminado) {
          $eliminacion = false;
          exit;
        } else {
          $eliminacion = true;
        }
      }

      if ($eliminacion && $noParticipacion) {

        echo json_encode(array("status"=>true, "msg"=> 'Se ha reseteado el concurso para este equipo correctamente', "class"=>"success"));
      } else {

        echo json_encode(array("status"=>false, "msg"=> 'Un error ha ocurrido al resetear el sorteo', "class"=>"false"));
      }

  break;

  case "finishAndEmailToAllByIdequipo":

      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      $DaoArticulo = new DaoArticulo();

      $usuarios = $DaoUsuario->getAllByIdequipo($_POST['idequipo']);

      // Aleatoriamente selecccionar un usuario para que le intercambie a usuario en curso
      // Se traen los usuarios que no han dado, tabla Intercambiando
      $response = $DaoUsuario->setIntercambioEquipo($_POST['idequipo']);

      // Datos del equipo
      $DaoEquipo = new DaoEquipo();
      $equipo = $DaoEquipo->getById($_POST['idequipo']);
      $equipo_precio_min = number_format($equipo->precio_min);
      $equipo_precio_max = number_format($equipo->precio_max);

      $DaoIntercambio = new DaoIntercambio();
      $Intercambio = new Intercambio();
      $Intercambio = $DaoIntercambio->getById($equipo->intercambio_idintercambio);

      //Barrer  $response['data']
      foreach ($response['data'] as $organizado) {

          $organizados_da_nombre = $organizado['da_nombre'];
          $organizados_recibe_nombre = $organizado['recibe_nombre'];
          $organizados_articulo = $organizado['articulo'];
          $organizados_da_email = $organizado['da_email'];

          $articulos = $DaoArticulo->getAllByUserId($organizado['recibe_id']);

          $mensaje = "<h2>Búho Intercambios</h2><p>Estimad@ compañer@ $organizados_da_nombre</p>
          <p>El tiempo del sorteo del intercambio ha finalizado y estos fueron los resultados: </p>";

          if(count($articulos)>0){
            $mensaje .= "<p>Esta es la lista de articulos que $organizados_recibe_nombre ha sugerido para recibir:</p><ul>";

            foreach($articulos as $articulo){
                $mensaje .= "<li>".$articulo['nombre']."</li>";
            }

            $mensaje .= "</ul>";
          }

          $mensaje .= '
          <h1>Te damos las mejores opciones para encontrar tu intercambio en Amazon</h1>
          <p><strong>Recuerda que Amazon es la mejor opción para comprar en línea</strong></p>
          <br>
          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=639b6cf2ef512e7df7c2d1a64d11cd0d&camp=1789&creative=9325&index=aps&keywords=bolsa para dama">Bolsas Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=b94b8d9964554baebf649ae9e240f6da&camp=1789&creative=9325&index=aps&keywords=audifonos">Audífonos</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=527cdad269acd730c60505407b817dd8&camp=1789&creative=9325&index=aps&keywords=Backpack">Backpack</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4ea30dafbe8ebb1968addef9d123fb4c&camp=1789&creative=9325&index=aps&keywords=Cartera para dama">Cartera Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=20640c6f36279c9aca305a61a1057263&camp=1789&creative=9325&index=aps&keywords=Cartera para caballero">Cartera Para Caballero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=e1f73b2f480a352c06ddf2d2200dc90b&camp=1789&creative=9325&index=aps&keywords=Chocolates">Chocolates</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=31287a4da7dd7a6b7333f60291ac3bc6&camp=1789&creative=9325&index=aps&keywords=Funko">Funko</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=8497920d7ceee4fc58692164d36644eb&camp=1789&creative=9325&index=aps&keywords=Gorras">Gorras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=325bec4646d3ae8d338950413eab0c43&camp=1789&creative=9325&index=aps&keywords=guantes invierno">Guantes Invierno</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fba4965eeb19e25a79f9beea71dee86e&camp=1789&creative=9325&index=aps&keywords=Joyeria de Plata">Joyeria de Plata</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=272177a579fa748bac7a7f56e0eadc9c&camp=1789&creative=9325&index=aps&keywords=libros mas vendidos en español">Libros mas vendidos en español</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=93d9810c08700153c7d57c929e29af11&camp=1789&creative=9325&index=aps&keywords=Loncheras térmicas">Loncheras térmicas</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=d18ad2acab09739acaeede77bf0f5e98&camp=1789&creative=9325&index=aps&keywords=Thermo">Thermo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=6f31d476c5e0b6242a487a83c472d501&camp=1789&creative=9325&index=aps&keywords=Accesorios Ciclismo">Accesorios Ciclismo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=70f28b7e089dd7e5ffa071ead2c56986&camp=1789&creative=9325&index=aps&keywords=Mouse Inalámbrico">Mouse Inalámbrico</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=46b824c5e1a6e82abd8ff0218254912c&camp=1789&creative=9325&index=aps&keywords=Pashmina">Pashmina</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=17b72eeba8a0f62d79b00a3a28758c03&camp=1789&creative=9325&index=aps&keywords=Reproductor de USB para Automovil">Reproductor de USB para Automovil</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4dcf97754a7bb627e352ca8eb7793367&camp=1789&creative=9325&index=aps&keywords=sueter">Suéters</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=7f0365dff81305e40b11f7ee8acfa41c&camp=1789&creative=9325&index=aps&keywords=tarro cervecero">Tarros Cervecero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=c93d234a29d0edfa2950f87bc122b393&camp=1789&creative=9325&index=aps&keywords=taza cafe">Tazas Cafeteras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=ab87aa292d01b76bebf7f87880997778&camp=1789&creative=9325&index=aps&keywords=Ventilador para Laptop">Ventilador para Laptop</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>

          <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fd3ecff9db1607081509304858d66313&camp=1789&creative=9325&index=aps&keywords=usb">Usb</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
          <br>
          <br>
          <br>
          ';


          $mensaje .= "<p>Se te ha sugerido por votación que le regales a <strong> $organizados_recibe_nombre </strong> el siguiente articulo: <strong> $organizados_articulo </strong>.</p>
          <p>Recuerda, el intercambio debe ser de la cantidad mínima de: </strong>$$equipo_precio_min</strong> a </strong>$$equipo_precio_max</strong>.</p>
          <p>Siente plena libertad de regalarle lo que al final creas que el merece.</p>
          <p><i>Te recordamos que la celebración del intercambio se llevará a cabo el día: <strong>$Intercambio->fecha</strong> a las: <strong>$Intercambio->hora</strong> en el lugar: <strong>$Intercambio->lugar</strong> ubicado en: <strong>$Intercambio->direccion</strong>.</i></p>
          <p>¡Te deseamos felices fiestas!.</p>";

          $estatus_envio = Core::mail($organizados_da_email, "Resultados de  intercambio", $mensaje, $mensaje);
      }
      echo json_encode(array("status"=>true, "msg"=>$response['msg'], "class"=>"success"));

  break;

  case "getAllByIdequipoWithArticulos":

      $DaoArticulo = new DaoArticulo();
      $usuarios = $DaoUsuario->getAllByIdequipo($_POST['idequipo']);

      // Usuario Has Equipo
      $DaoUsuarioLikeUsuarioArticulo = new DaoUsuarioLikeUsuarioArticulo();

      foreach ($usuarios as $usuario) {
        $articulos = $DaoArticulo->getAllByUserId($usuario->idusuario);

        // Se obtiene el articulo seleccionado por votante para votado
        $UsuarioLikeUsuarioArticulo = new UsuarioLikeUsuarioArticulo();
        $UsuarioLikeUsuarioArticulo->setUsuarioIdusuarioVota($_SESSION['idusuario']);
        $UsuarioLikeUsuarioArticulo->setUsuarioIdusuarioVotado($usuario->idusuario);
        $articulo = $DaoUsuarioLikeUsuarioArticulo->getByUsers($UsuarioLikeUsuarioArticulo);

        if(count($articulo)>0){
          foreach ($articulos as $key => $value) {
              if($articulos[$key]['articulo_idarticulo'] == $articulo[0]['articulo_idarticulo']){
                $articulos[$key]['selected_for_me'] = true;
              } else {
                $articulos[$key]['selected_for_me'] = false;
              }
          }
        }

        $usuario->articulos = ( is_array($articulos) ) ? $articulos : array($articulos);

        // Is mine
        if($usuario->idusuario===$_SESSION['idusuario']) {
          $usuario->ismine = true;
        }

        // Datos del equipo
        $DaoEquipo = new DaoEquipo();
        $equipo = $DaoEquipo->getById($_POST['idequipo']);
        $equipo_precio_min = number_format($equipo->precio_min);
        $equipo_precio_max = number_format($equipo->precio_max);

        $usuario->equipo = array("precio_min"=>$equipo_precio_min,"precio_max"=>$equipo_precio_max, "precio_min_raw"=>$equipo->precio_min,"precio_max_raw"=>$equipo->precio_max);
      }
      echo json_encode( $usuarios );

  break;

  case "getAllByIdequipoIdusuario":
      echo json_encode( $DaoUsuario->getAllByIdequipoIdusuario($_POST['idequipo']),$_SESSION['idusuario']);
  break;

  case "getById":
      echo json_encode( $DaoUsuario->getById($_POST['idusuario']) );
  break;


  case "access":

      $Usuario = new Usuario();
      $Usuario->setEmail($_POST["email"]);
      $Usuario->setPassword($_POST["password"]);
      $access = $DaoUsuario->getAccess($Usuario);
      
      if($access[0]['count']){

        # Conocer el rol del usuario logeado
        if ($access[0]['idrol'] === 'MIEMBRO') {
            
          # Confirma participacion
          $DaoUsuarioHasEquipo = new DaoUsuarioHasEquipo();
          $UsuarioHasEquipo = new UsuarioHasEquipo();

          # UsuarioHasEquipo by idusuario
          $UsuarioHasEquipo = $DaoUsuarioHasEquipo->getByIdusuario($access[0]['idusuario']);
          $participa = $DaoUsuarioHasEquipo->setParticipacion($UsuarioHasEquipo);

          if ($participa) {
            # setea sesión de miembro
            $_SESSION['idusuario'] = $access[0]['idusuario'];
            $_SESSION['idrol']     = $access[0]['idrol'];

            print_r ( json_encode(array('status' => true, 'msg' => 'Has ingresado correctamente', 'class'=>'success', 'idusuario'=> $_SESSION['idusuario'], 'idrol'=> $_SESSION['idrol'])) );
          } else {
            # si no participa no logea
            print_r ( json_encode(array('status' => false, 'msg' => 'Ha ocurrido un error al registrar tu participación', 'class'=>'error', 'idusuario'=>$access[0]['idusuario'], 'idrol'=> $access[0]['idrol'])) );
          }

        } else {
            # setea sesión lider
            $_SESSION['idusuario'] = $access[0]['idusuario'];
            $_SESSION['idrol']     = $access[0]['idrol'];

            print_r ( json_encode(array('status' => true, 'msg' => 'Has ingresado correctamente', 'class'=>'success', 'idusuario'=> $_SESSION['idusuario'], 'idrol'=> $_SESSION['idrol'])) );
        }

      } else {
        print_r ( json_encode(array('status' => false, 'msg' => 'Email y/o contraseña incorrecto', 'class'=>'warning',)) );
      }

  break;

  case "enviarInvitacion":
      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      $usuario = $DaoUsuario->getDataById($_POST['idusuario']);

      $mensaje = "<h2>Búho Intercambios</h2><p>Estimado compañero ".$usuario->nombres.", </p><p>Te invitamos a participar en la dinámica del intercambio desde una plataforma web diseñada especialmente para poder disfrutar de un intercambio mas sencillo, mejor organizado y divertido.</p><p>Accediendo a la siguiente dirección <a href='http://www.buhointercambios.club/acceso'>Búho Intercambios</a> estarás aceptando participar, por favor accesa con el usuario: <strong>".$usuario->email."</strong> y el password: <strong>".$usuario->password."</strong></p><p>¡Esperamos disfrutes la experiencia!.</p>";



      $mensaje .= '
      <h1>Te damos las mejores opciones para encontrar tu intercambio en Amazon</h1>
      <p><strong>Recuerda que Amazon es la mejor opción para comprar en línea</strong></p>
      <br>
      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=639b6cf2ef512e7df7c2d1a64d11cd0d&camp=1789&creative=9325&index=aps&keywords=bolsa para dama">Bolsas Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=b94b8d9964554baebf649ae9e240f6da&camp=1789&creative=9325&index=aps&keywords=audifonos">Audífonos</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=527cdad269acd730c60505407b817dd8&camp=1789&creative=9325&index=aps&keywords=Backpack">Backpack</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4ea30dafbe8ebb1968addef9d123fb4c&camp=1789&creative=9325&index=aps&keywords=Cartera para dama">Cartera Para Dama</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=20640c6f36279c9aca305a61a1057263&camp=1789&creative=9325&index=aps&keywords=Cartera para caballero">Cartera Para Caballero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=e1f73b2f480a352c06ddf2d2200dc90b&camp=1789&creative=9325&index=aps&keywords=Chocolates">Chocolates</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=31287a4da7dd7a6b7333f60291ac3bc6&camp=1789&creative=9325&index=aps&keywords=Funko">Funko</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=8497920d7ceee4fc58692164d36644eb&camp=1789&creative=9325&index=aps&keywords=Gorras">Gorras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=325bec4646d3ae8d338950413eab0c43&camp=1789&creative=9325&index=aps&keywords=guantes invierno">Guantes Invierno</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fba4965eeb19e25a79f9beea71dee86e&camp=1789&creative=9325&index=aps&keywords=Joyeria de Plata">Joyeria de Plata</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=272177a579fa748bac7a7f56e0eadc9c&camp=1789&creative=9325&index=aps&keywords=libros mas vendidos en español">Libros mas vendidos en español</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=93d9810c08700153c7d57c929e29af11&camp=1789&creative=9325&index=aps&keywords=Loncheras térmicas">Loncheras térmicas</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=d18ad2acab09739acaeede77bf0f5e98&camp=1789&creative=9325&index=aps&keywords=Thermo">Thermo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=6f31d476c5e0b6242a487a83c472d501&camp=1789&creative=9325&index=aps&keywords=Accesorios Ciclismo">Accesorios Ciclismo</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=70f28b7e089dd7e5ffa071ead2c56986&camp=1789&creative=9325&index=aps&keywords=Mouse Inalámbrico">Mouse Inalámbrico</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=46b824c5e1a6e82abd8ff0218254912c&camp=1789&creative=9325&index=aps&keywords=Pashmina">Pashmina</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=17b72eeba8a0f62d79b00a3a28758c03&camp=1789&creative=9325&index=aps&keywords=Reproductor de USB para Automovil">Reproductor de USB para Automovil</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=4dcf97754a7bb627e352ca8eb7793367&camp=1789&creative=9325&index=aps&keywords=sueter">Suéters</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=7f0365dff81305e40b11f7ee8acfa41c&camp=1789&creative=9325&index=aps&keywords=tarro cervecero">Tarros Cervecero</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=c93d234a29d0edfa2950f87bc122b393&camp=1789&creative=9325&index=aps&keywords=taza cafe">Tazas Cafeteras</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=ab87aa292d01b76bebf7f87880997778&camp=1789&creative=9325&index=aps&keywords=Ventilador para Laptop">Ventilador para Laptop</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>

      <a target="_blank" href="https://www.amazon.com.mx/gp/search?ie=UTF8&tag=softwareinsig-20&linkCode=ur2&linkId=fd3ecff9db1607081509304858d66313&camp=1789&creative=9325&index=aps&keywords=usb">Usb</a><img src="//ir-mx.amazon-adsystem.com/e/ir?t=softwareinsig-20&l=ur2&o=34" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
      <br>
      <br>
      <br>
      ';



      $estatus_envio = Core::mail($usuario->email, "Participa en un intercambio", $mensaje, $mensaje);

      echo json_encode(array("status"=>true, "msg"=>"Invitacion enviada", "class"=>"success"));


  break;

  case "activarUsuario":
      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      # Confirma participacion
      $DaoUsuarioHasEquipo = new DaoUsuarioHasEquipo();
      $UsuarioHasEquipo = new UsuarioHasEquipo();

      # UsuarioHasEquipo by idusuario
      $UsuarioHasEquipo = $DaoUsuarioHasEquipo->getByIdusuario($_POST["idusuario"]);

      if ($_POST["participa"]) {
        $participa = $DaoUsuarioHasEquipo->setParticipacion($UsuarioHasEquipo);
      } else {
        $participa = $DaoUsuarioHasEquipo->setNoParticipacion($UsuarioHasEquipo);
      }

      if($participa){
        echo json_encode(array("status"=>true, "msg"=>"Usuario modificado", "class"=>"success"));
      }else{
        echo json_encode(array("status"=>false, "msg"=>"Ha ocurrido un error", "class"=>"error"));
      }

  break;

  case "delete":

      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      // Elimina usuario has articulo
      $DaoUsuarioHasArticulo = new DaoUsuarioHasArticulo();
      $UsuarioHasArticulo = new UsuarioHasArticulo();
      $UsuarioHasArticulo->setUsuarioIdusuario($_POST["idusuario"]);
      $eliminado = $DaoUsuarioHasArticulo->deleteByIdUsuario($UsuarioHasArticulo);

      // Elimina usuario like usuario
      $DaoUsuarioLikeUsuarioArticulo = new DaoUsuarioLikeUsuarioArticulo();
      $UsuarioLikeUsuarioArticulo = new UsuarioLikeUsuarioArticulo();
      $UsuarioLikeUsuarioArticulo->setUsuarioIdusuarioVota($_POST["idusuario"]);
      $UsuarioLikeUsuarioArticulo->setUsuarioIdusuarioVotado($_POST["idusuario"]);
      $eliminado = $DaoUsuarioLikeUsuarioArticulo->deleteByIdUsuario($UsuarioLikeUsuarioArticulo);

      // Elimina usuario has equipo
      $DaoUsuarioHasEquipo = new DaoUsuarioHasEquipo();
      $UsuarioHasEquipo = new UsuarioHasEquipo();
      $UsuarioHasEquipo->setUsuarioIdusuario($_POST["idusuario"]);
      $UsuarioHasEquipo->setEquipoIdequipo($_POST["idequipo"]);

      $usuarioequipo = $DaoUsuarioHasEquipo->getByObjIdusuarioIdequipo($UsuarioHasEquipo);

      // Elimina intercambiando
      $DaoIntercambiando = new DaoIntercambiando();
      $Intercambiando = new Intercambiando();
      $Intercambiando->setIdusuarioHasEquipoDa($usuarioequipo->idusuario_has_equipo );
      $Intercambiando->setIdusuarioHasEquipoRecibe($usuarioequipo->idusuario_has_equipo );
      $eliminado = $DaoIntercambiando->deleteByIdUsuario($Intercambiando);

      $eliminado = $DaoUsuarioHasEquipo->deleteByUserIdAndEquipoId($UsuarioHasEquipo);

      // Elimina el usuario
      $Usuario = new Usuario();
      $Usuario->setIdusuario($_POST["idusuario"]);
      $eliminado = $DaoUsuario->delete($Usuario);

      if($eliminado){
        echo json_encode(array('status' => true, 'msg' => 'Se elimino correctamente tu registro', 'class'=>'success'));
      } else {
        echo json_encode(array('status' => false, 'msg' => 'No se pudo eliminar tu registro', 'class'=>'warning',));
      }
  break;

  case "edit":

  break;

  case "save":
      $fecha = new DateTime();

      $Usuario = new Usuario();
      $Usuario->setNombres($_POST["nombres"]);
      $Usuario->setEmail($_POST["email"]);
      $Usuario->setAvatar("");
      $Usuario->setPassword($_POST["password"]);
      $Usuario->setRolIdrol($_POST["rol_idrol"]);
      $Usuario->setEstatus("CREADO");
      $id = $DaoUsuario->add($Usuario);

      if($id>0){
        echo json_encode(array('status' => true, 'msg' => 'Se agrego correctamente tu registro', 'class'=>'success', 'data'=>$id));
      } else {
        echo json_encode(array('status' => false, 'msg' => 'Tu correo ya esta registrado intenta con otro', 'class'=>'warning',));
      }

  break;

  case "saveLikeArticulo":

      if(!isset($_SESSION['idusuario'])){
        exit;
      }

      // Usuario Has Equipo
      $DaoUsuarioLikeUsuarioArticulo = new DaoUsuarioLikeUsuarioArticulo();
      $UsuarioLikeUsuarioArticulo = new UsuarioLikeUsuarioArticulo();
      $UsuarioLikeUsuarioArticulo->setUsuarioIdusuarioVota($_SESSION['idusuario']);
      $UsuarioLikeUsuarioArticulo->setUsuarioIdusuarioVotado($_POST['idusuario']);
      $UsuarioLikeUsuarioArticulo->setArticuloIdarticulo($_POST['idarticulo']);
      $deleted = $DaoUsuarioLikeUsuarioArticulo->deleteByUsers($UsuarioLikeUsuarioArticulo);

      if($deleted){
        $idUsuarioLikeUsuarioArticulo = $DaoUsuarioLikeUsuarioArticulo->add($UsuarioLikeUsuarioArticulo);
      }

      if(is_numeric($idUsuarioLikeUsuarioArticulo)){
        echo json_encode(array('status' => true, 'msg' => 'Se agrego correctamente tu registro', 'class'=>'success'));
      } else {
        echo json_encode(array('status' => false, 'msg' => 'No se pudo guardar tu registro', 'class'=>'warning',));
      }

  break;

  case "saveIntegrante":

      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      $fecha = new DateTime();

      $Usuario = new Usuario();
      $Usuario->setNombres($_POST["nombres"]);
      $Usuario->setEmail($_POST["email"]);
      $Usuario->setAvatar("");
      $Usuario->setPassword(Core::llave().$_SESSION["idusuario"].Core::llave());
      $Usuario->setRolIdrol($_POST["rol_idrol"]);
      // $Usuario->setParticipa(0);
      $Usuario->setEstatus("CREADO");
      $idusuario = $DaoUsuario->add($Usuario);

      if(is_numeric($idusuario)){
      
        # Usuario Has Equipo
        $DaoUsuarioHasEquipo = new DaoUsuarioHasEquipo();
        $UsuarioHasEquipo = new UsuarioHasEquipo();
        $UsuarioHasEquipo->setUsuarioIdusuario($idusuario);
        $UsuarioHasEquipo->setEquipoIdequipo($_POST["idequipo"]);
        $UsuarioHasEquipo->setEstatusEncuesta("CREADO");

        # Comprueba que el email no se encuentre ya en registrado al mismo equipo
        $emailDontExistInTeam = $DaoUsuarioHasEquipo->validateEmailDontExistInTeam($_POST["email"], $_POST["idequipo"]);

        if($emailDontExistInTeam) {
          $idUsuarioHasEquipo = $DaoUsuarioHasEquipo->add($UsuarioHasEquipo);

          if(is_numeric($idUsuarioHasEquipo)){
            echo json_encode(array('status' => true, 'msg' => 'Se agrego correctamente tu registro', 'class'=>'success', 'data'=>$idusuario));
          } else {
            echo json_encode(array('status' => false, 'msg' => 'Ha ocurrido un error', 'class'=>'warning',));
          }

        } else {
          echo json_encode(array('status' => false, 'msg' => 'El usuario con este email ya se encuentra registrado en este equipo', 'class'=>'warning',));
        }

      } else {
          echo json_encode(array('status' => false, 'msg' => 'Ocurrió un problema al crear el usuario, es posible que ya tengas un usuario LIDER registrado con este email', 'class'=>'danger',));
      }

  break;

  case "updateIntegrante":

      if($_SESSION['idrol'] !== "LIDER"){
        exit;
      }

      $fecha = new DateTime();

      $Usuario = new Usuario();
      $Usuario = $DaoUsuario->getById($_POST["idusuario"]);

      $Usuario->setNombres($_POST["nombres"]);
      $Usuario->setEmail($_POST["email"]);
      $Usuario->setAvatar("");
      //$Usuario->setPassword($Usuario->getPassword());
      $Usuario->setRolIdrol($_POST["rol_idrol"]);
      $Usuario->setEstatus("MODIFICADO");
      $Usuario->setIdusuario($_POST["idusuario"]);
      $id = $DaoUsuario->update($Usuario);

      if(is_numeric($id)){
        echo json_encode(array('status' => true, 'msg' => 'Se modifico correctamente tu registro', 'class'=>'success', 'data'=>$id));
      } else {
        echo json_encode(array('status' => false, 'msg' => 'El email ya pertenece a un intercambio que se encuentra activo', 'class'=>'warning',));
      }

  break;
}
