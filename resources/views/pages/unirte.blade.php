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
<div class="background-container claro" id="background-unirme"></div>
    <h2>Quiero unirme a la 501st Legion - Crimson Garrison</h2>
<div class="content">
    <p class="info">
                Si tienes un exquisito gusto por los chicos malos de la saga con sus brillantes armaduras, imponentes trajes y presencia sin igual<br/>
    </p>
    <p class="centrado-destacado"><br/>¡Este es tu lugar! </p>
    <p class="info">
        <br/>La 501st Legion únicamente avala trajes pertenecientes a aquellos personajes malvados de las diferentes facciones de la saga, como lo es el numeroso y tecnológicamente avanzado Ejército Separatista, 
                    la bien armada y organizada Primera Orden, hasta el temido e imponente Imperio Galáctico de Palpatine.
                    <br/><br/>Podrás vestirte con la túnicas oscuras de los lores del Sith, portar la armadura de algún soldado o piloto, o bien, equiparte como algún cazarecompensas de todo el material cinematográfico, 
                    televisivo, cómics y videojuegos. ¡La decisión es tuya!. <br/> <br/>Para tener un traje de calidad cinematográfica es importante cubrir cada detalle del mismo, así que no te desesperes, 
                    ten paciencia ya que es un proceso complejo pero siempre es en favor de mantener la calidad que distingue a la 501st Legion.
                    <br/><br/>Para observar cada detalle tenemos una librería de referencia del traje que hayas elegido, por lo que te presentamos los diferentes trajes de cada <a class="golden-link" href="/lista-destacamentos">destacamento</a>
    </p><br/>
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