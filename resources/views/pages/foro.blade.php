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
<div>
    <img alt="Error img" class="error" src="{{ asset('site/img/404notfound.png') }}"/>
</div>
<a class="btn-home" href="/">Regresar a la Estrella de la Muerte</a>

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