<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Crimson Garrison')</title>
    {{-- <link rel="icon" href="{{ asset('site/img/favicon.ico') }}"> --}}
    <link rel="icon" href="{{ asset('site/img/iconoCrimson.png') }}">
    {{-- Styles --}}
        <!-- Star Wars Title Font -->
        <link href="https://fonts.cdnfonts.com/css/star-wars" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS (CDN) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Tus estilos locales -->
        <link rel="stylesheet" href="{{ asset('site/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/styletraj.css') }}">
        @stack('styles')

</head>
<body>
    <!--<header>-->
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

    <main class="container">
        @yield('content')
    </main>

    {{--<footer class="container mt-5 mb-4 small text-center text-muted"> --}}
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

    {{-- Scripts --}}
    <script src="{{ asset('site/js/script.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.js') }}"></script>
    @stack('scripts')
</body>
</html>
