<?php

    $view = (!isset($_GET['view'])) ? "index" : $_GET['view'];

    $view = (isset($_GET['articulo'])) ? $_GET['articulo'] : $view;

    switch($view) {

        case('acceso'):
            $title = 'Accesa a aplicación para organizar intercambios navideños';
            $description = 'Accesa a aplicación para organizar intercambios navideños';
            $seo_description = 'Accesa a aplicación para organizar intercambios navideños';
        break;

        case('equipo'):
            $title = 'Crea un equipo para organizar un intercambio navideño';
            $description = 'Crea un equipo para organizar un intercambio navideño';
            $seo_description = 'Crea un equipo para organizar un intercambio navideño';
        break;

        case('equipos-participo'):
            $title = 'Tus equipos de intercambios navideños';
            $description = 'Tus equipos de intercambios navideños';
            $seo_description = 'Tus equipos de intercambios navideños';
        break;

        case('index'):
            $title = 'BÚHO INTERCAMBIOS Aplicación gratuita para organizar intercambios empresariales, familiares y entre amigos fácil y divertido.';
            $description = 'Aplicación gratuita para organizar intercambios empresariales, familiares y entre amigos fácil y divertido.';
            $seo_description = 'Aplicación gratuita para organizar intercambios empresariales, familiares y entre amigos fácil y divertido.';
        break;

        case('integrantes'):
            $title = 'Integrantes para el equipo de un intercambio navideño';
            $description = 'Integrantes para el equipo de un intercambio navideño';
            $seo_description = 'Integrantes para el equipo de un intercambio navideño';
        break;

        case('intercambio'):
            $title = 'Tus intercambios navideños para empresa, familia o amigos';
            $description = 'Tus intercambios navideños para empresa, familia o amigos';
            $seo_description = 'Tus intercambios navideños para empresa, familia o amigos';
        break;

        case('mi-equipo'):
            $title = 'Organiza un equipo de intercambio navideño';
            $description = 'Organiza un equipo de intercambio navideño';
            $seo_description = 'Organiza un equipo de intercambio navideño';
        break;

        case('mi-intercambio'):
            $title = 'Organiza un intercambio navideño para tu empresa, familia o amigo';
            $description = 'Organiza un intercambio navideño para tu empresa, familia o amigo';
            $seo_description = 'Organiza un intercambio navideño para tu empresa, familia o amigo';
        break;

        case('mis-equipos'):
            $title = 'Tus equipos de intercambios navideños';
            $description = 'Tus equipos de intercambios navideños';
            $seo_description = 'Tus equipos de intercambios navideños';
        break;

        case('mis-intercambios'):
            $title = 'Tus intercambios navideños para organizar un intercambio navideño';
            $description = 'Tus intercambios navideños para organizar un intercambio navideño';
            $seo_description = 'Tus intercambios navideños para organizar un intercambio navideño';
        break;

        case('nosotros'):
            $title = 'Herramienta para organizar intercambios navideños sencillos y divertidos con tu empresa, familia o amigos.';
            $description = 'Herramienta para organizar intercambios navideños sencillos y divertidos con tu empresa, familia o amigos.';
            $seo_description = 'Herramienta para organizar intercambios navideños sencillos y divertidos con tu empresa, familia o amigos.';
        break;

        case('registro'):
            $title = 'Regístrate como lider para organizar tus intercambiuos navideños en tu empresa, familia o amigos';
            $description = 'Regístrate como lider para organizar tus intercambiuos navideños en tu empresa, familia o amigos';
            $seo_description = 'Regístrate como lider para organizar tus intercambiuos navideños en tu empresa, familia o amigos';
        break;

        case('sorteo-equipo'):
            $title = 'Agrega los regalos que esperas recibir para este intercambio navideño';
            $description = 'Agrega los regalos que esperas recibir para este intercambio navideño';
            $seo_description = 'Agrega los regalos que esperas recibir para este intercambio navideño';
        break;

        case('politicas-de-privacidad'):
            $title = 'Políticas de privacidad Búho Intercambios Navideños Empresas';
            $description = 'Búho Intercambios jamás hará uso de tus datos, los datos son solamente utilzados para que la aplicación haga su función de organizar los sorteos de intercambios.';
            $seo_description = 'Búho Intercambios jamás hará uso de tus datos, los datos son solamente utilzados para que la aplicación haga su función de organizar los sorteos de intercambios.';
        break;

        case('contacto'):
            $title = 'Contacta con Búho Intercambios Navideños Empresas';
            $description = 'Los regalos que esperas recibir para este intercambio navideño, Aplicación gratuita para organizar intercambios empresariales, familiares y entre amigos fácil y divertido.';
            $seo_description = 'Los regalos que esperas recibir para este intercambio navideño, Aplicación gratuita para organizar intercambios empresariales, familiares y entre amigos fácil y divertido.';
        break;

        case('blog'):
            $title = 'Artículos de interes sobre intercambios navideños';
            $description = 'Elegir un buen regalo es un proceso que muestra interés y dedicación para comprar un bonito detalle hacia un ser querido especial. En Búho intercambios te orientamos para que tus regalos de intercambio sean una buena sorpresa.';
            $seo_description = 'Elegir un buen regalo es un proceso que muestra interés y dedicación para comprar un bonito detalle hacia un ser querido especial. En Búho intercambios te orientamos para que tus regalos de intercambio sean una buena sorpresa.';
        break;

        case('como-elegir-un-buen-regalo-de-intercambio-para-navidad'):
            $title = 'Como elegir un buen regalo de intercambio para navidad';
            $description = 'Elegir un buen regalo es un proceso que muestra interés y dedicación para comprar un bonito detalle hacia un ser querido especial. En Búho intercambios te orientamos para que tus regalos de intercambio sean una buena sorpresa.';
            $seo_description = 'Elegir un buen regalo es un proceso que muestra interés y dedicación para comprar un bonito detalle hacia un ser querido especial. En Búho intercambios te orientamos para que tus regalos de intercambio sean una buena sorpresa.';
        break;
        
        case('origen-de-los-intercambios-navidenos'):
            $title = 'Origen de los Intercambios navideños';
            $description = 'Hacer regalos en Navidad es reconocido por muchos como un recuerdo de este evento y un acto que tiene la intención de recordar a los creyentes el regalo que Dios les ha dado en la forma de su hijo, Jesucristo.';
            $seo_description = 'Hacer regalos en Navidad es reconocido por muchos como un recuerdo de este evento y un acto que tiene la intención de recordar a los creyentes el regalo que Dios les ha dado en la forma de su hijo, Jesucristo.';
        break;

        case('como-organizar-el-intercambio-de-regalos-con-tus-companeros-de-trabajo-u-oficina'):
            $title = '¿Cómo organizar el intercambio de regalos con tus compañeros de trabajo u oficina?';
            $description = ' Algo que sería bueno hacer al definir el presupuesto es dar una lista de opciones de regalos deseados, hay quienes podrían argumentar que esto le corta la sorpresa al regalo, pero también te deja más satisfecho al recibir algo que querías o necesitabas, así evitas el par de calcetines o la blusa del color que no te gusta.';
            $seo_description = ' Algo que sería bueno hacer al definir el presupuesto es dar una lista de opciones de regalos deseados, hay quienes podrían argumentar que esto le corta la sorpresa al regalo, pero también te deja más satisfecho al recibir algo que querías o necesitabas, así evitas el par de calcetines o la blusa del color que no te gusta.';
        break;

    }