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
<div class="background-container oscuro" id="background-home"></div>
<img alt="lightsaber-vader" class="logo" src="{{ asset('site/img/CrimsonGarrison.png') }}"/>
<div class="content" id="quienes">
    <h2>¿quienes somos?</h2>
    <p class="info">
        <br/>La <strong>Crimson Garrison</strong> es una unidad regional en formación de la organización 
            internacional sin fines de lucro <strong>501st Legion.</strong>
            La unidad corresponde territorialmente a los estados 
            de <strong>Veracruz, Puebla y Tlaxcala.</strong> Está compuesta por voluntarios que rinden homenaje 
            al universo de Star Wars mediante el uso de trajes de personajes imperiales aprobados internacionalmente, 
            con calidad cinematográfica.<br/><br/>
        <img alt="foto-letras-veracruz" class="photobook" src="{{ asset('site/img/LetrasVeracruz.png') }}"/>
    </p>
    <h3> ¿A qué se dedica la Crimson Garrison? </h3>
    <p class="info">
        <br/>Principalmente a llevar el amor por la saga de Star Wars a todos los rincones del territorio de la 
            Crimson Garrison compartiendo el gran compañerismo que nos caracteriza en dos tipos de eventos:
    </p>
    <ol class="requisitos">
        <br/><li>Eventos altruistas: Convivencia con pequeños que necesitan distracción de alguna circunstancia difícil o bien cualquier recaudación de fondos con fines no lucrativos.</li>
        <br/><li>Eventos para fans: Convivencia y dinámicas con otros fanáticos de la saga</li>
    </ol><br/>
    <h3>¿Tiene algún costo la presencia de la Crimson Garrison en mi evento?</h3>
    <p class="info">
        <br/>Al ser una organización sin fines de lucro NO SE REALIZA NINGÚN COBRO por participar en algún evento, sin embargo, 
            no se cubren eventos sociales ni particulares, únicamente eventos para el público en general.<br/>
        <br/>
    </p>
    <h3>¿Qué debo hacer si quiero unirme a las filas de la 501st Legion con la Crimson Garrison?</h3>
    <p class="info">
        <br/>Se deben cumplir únicamente tres requisitos básicos:
    </p>
    <ol class="requisitos">
        <br/><li>Ser mayor de edad.</li>
        <br/><li>Tener un traje de calidad cinematográfica.</li>
        <br/><li>Ser comprometido y constante para tener el alta de tu traje.</li>
    </ol>
    <p class="info">
        Aunque sabemos que el segundo requisito es difícil contamos con una librería amplia de trajes para que puedas decidirte 
        cuál se ajusta mejor a tus gustos, la cual te dejamos a continuación: 
    </p>
    <p class="centrado-destacado"><a class="golden-link" href="https://databank.501st.com/databank/Costuming:CRLbyname" target="_blank">Libreria de trajes</a></p>
    <br/>
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
