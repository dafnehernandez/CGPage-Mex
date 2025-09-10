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
<div>
    <img alt="Error img" class="error" src="{{ asset('site/img/404notfound.png') }}"/>
</div>
<a class="btn-home" href="/">Regresar a la Estrella de la Muerte</a>

@endsection