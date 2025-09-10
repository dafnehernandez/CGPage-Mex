@extends('layouts.app')

@section('title', 'Crimson Garrison - 501st Legion')
@section('content')

<header class="site-header">
    <a aria-label="Inicio" class="header-icon left" href="/">
        <img alt="Icono izquierda" src="{{ asset('site/img/501st_Legion_Logo.png') }}"/>
    </a>
    <div class="header-text">
        <h1>Crimson Garrison</h1>
        <p>Unidad oficial en formación de la 501st Legion</p>
    </div>
    <a aria-label="501st Legion" class="header-icon right" href="https://www.501st.com" target="_blank">
        <img alt="Icono derecha" src="{{ asset('site/img/CrimsonGarrison.png') }}"/>
    </a>
</header>
<div class="lightsaber-container">
    <div class="menu-trigger" id="menu-trigger">Menu</div>
    <img alt="lightsaber-vader" class="sabervader" src="{{ asset('site/img/lightsaber-vader.png') }}"/>
    <div class="lightsaber">
        <div class="bar">
            <div class="extend-value">
                <div class="menu-superior">
                    <nav>
                        <ul>
                            <li><a href="/">inicio</a></li>
                            <li><a href="#quienes">Quienes somos</a></li>
                            <li><a href="unirte">Unirte a nuestras tropas</a></li>
                            <li><a href="foro">Foro</a></li>
                            <li><a href="eventos">Eventos</a></li>
                            <li><a href="contacto">Contactanos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="background-container claro" id="background-evento"></div>
<h2>Solicitud de presencia imperial de la Crimson Garrison en mi evento</h2>
<div class="content">
    <p class="info">
                Antes del llenado de la solicitud, por favor, lee atentamente los requisitos:<br/>
    </p><br/>
    <ul class="requisitos">
        <li>No se cubren eventos sociales como bodas, XV años, bautizos, graduaciones, 
                            fiestas empresariales, etc.</li>
        <li> Si es evento de recaudación, la Crimson Garrison no recibe ningún tipo de donación, 
                            únicamente la recibe la fundación a la que se apoya.</li>
        <li>Si en alguna convención se apoya una fundación favor de especificarla.</li>
        <li>Si tienes pensada alguna dinámica con los asistentes por favor, 
                            mencionala en comentarios para poder llevar una mejor logística del evento.</li>
        <li>Mucha disposición y ganas de divertirse como fans de la saga.</li>
    </ul>
    <br/>
    <p class="info">
                Reiteramos nuestro compromiso con la comunidad de llevar el amor de Star Wars 
                dentro del territorio de la Crimson Garrison que abarca Veracruz, Puebla y Tlaxcala.</p>
    <p class="info">
                Si tienes un evento y está fuera de este territorio por favor ponte en contacto con nosotros 
                y te canalizaremos a la Garrison correspondiente.</p>
    <p class="centrado-destacado">
        <!--Formulario para solicitud de evento-->
        PAGINA EN CONSTRUCCIÓN
        <img alt="construction-webpage" class="photobook" src="{{ asset('site/img/webpage-construction.jpg') }}"/>
    </p>
    <a href="https://www.501st.com" target="_blank">
        <img alt="501st Legion Logo" class="legion-logo" src="{{ asset('site/img/501st_Legion_Logo.png') }}"/>
    </a>
</div>
<footer>
    <p class="disclaimer">
        <a> © <span class="year"></span> 
                    Crimson Garrison - 501st Legion, todos los derechos reservados.</a><br/>
        <b><br/> The 501st Legion is a worldwide Star Wars costuming organization comprised of and operated by Star Wars
                        fans. While it is not sponsored by Lucasfilm Ltd., it is Lucasfilm's preferred Imperial costuming group.
                        Star Wars, its characters, costumes, and all associated items are the intellectual property of Lucasfilm.
                        ©  <span class="year"></span> Lucasfilm Ltd. &amp; ™ All rights reserved. Used under
                        authorization.</b>
    </p>
    <p class="disclaimer" style="text-align: right;">
        <b>Powered by dafnehdz🌸 &amp; Canito♥</b>
    </p>
</footer>
<!-- Scripts -->
<script src="{{ asset('site/js/bootstrap.js') }}"></script>
<script src="{{ asset('site/js/script.js') }}"></script>

@endsection