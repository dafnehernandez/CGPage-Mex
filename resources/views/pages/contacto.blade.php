@extends('layouts.app')
@section('title', 'Crimson Garrison - 501st Legion')

@section('content')

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
<div class="background-container inter" id="background-contacto"></div>
<div class="content" id="quienes">
    <h2>Considera:</h2><br/>
    <p class="info">
                ☝️ La Legión 501st se centra únicamente en personajes villanos del Universo de Star Wars.
                
                Además, recuerda que la Crimson Garrison atiende unicamente eventos de naturaleza altruista⭐, como: convenciones, 
                conciertos, presentaciones, etc.<br/><br/><strong>No pedimos ni aceptamos pagos por nuestra participación.</strong>
        <img alt="foto-expomac-1" class="photobook" src="{{ asset('site/img/ExpoMac.png') }}"/>
        <img alt="foto-expomac-2" class="photobook" src="{{ asset('site/img/ExpoMac2.png') }}"/>
        <img alt="foto-evento" class="photobook" src="{{ asset('site/img/Si o si.jpeg') }}"/>
    </p>
    <p class="centrado-destacado">
    <!--Espacio para formulario-->
                PAGINA EN CONSTRUCCIÓN
                <img alt="construction-webpage" class="photobook" src="{{ asset('site/img/webpage-construction.jpg') }}"/>
    </p>
    <p class="contacto">
                También puedes ponerte en contacto en nuestras redes, medios de comunicación o con miembros de la Crimson Garrison 
                para apoyarte en este proceso.
                <br/>
    </p>
    <p class="contacto">
    <br/>Para más información sobre nuestra actividad o para unirte a nuestra unidad, contáctanos a:
                <a class="golden-link" href="mailto:chuletono@crimsongarrison.com">chuleton@crimsongarrison.com</a>
    <br/><br/>
                Visita el sitio oficial de la 501st Legion:
                <a class="golden-link" href="https://www.501st.com" target="_blank">www.501st.com</a>
    </p>
    <a href="https://www.501st.com" target="_blank">
        <img alt="501st Legion Logo" class="legion-logo" src="{{ asset('site/img/501st_Legion_Logo.png') }}"/>
    </a>
</div>

@endsection