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
<h2>Lista de trajes por destacamento</h2>
<div class="content">
    <p class="info">
        A continuación encontrarás una lista de destacamentos tomados de la página <a href="wwwea.com">501st Legion DataBank</a>
        y los personajes asociados a cada uno. 
        El nombre de cada destacamento es un enlace a sus foros, donde encontrarás hilos detallados sobre su creación, 
        referencias y otra información necesaria. 
        Al hacer clic en el enlace «Lista de trajes», accederás a la lista de trajes de los que son responsables. 
        También puedes ver la <a class="golden-link" href="https://databank.501st.com/databank/Costuming:CRLbyname">lista oficial de todos los trajes aprobados actualmente.</a>
    </p>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Armored Calvary Detachment Logo" class="logo" src="{{ asset('site/img/Armored-Calvary-Detachment.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.armoredcavalry.net/"> Armored Cavalry Detachment (Destacamento de Caballería Blindada)</a></h3>
            <p>
                La Caballería Blindada sirve a todos los operadores/comandantes de vehículos de asalto terrestre imperiales de la saga Star Wars: 
                ¡Siempre adelante!
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:ACD_CRL">Lista de trajes ACD</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Blizzard Force Logo" class="logo" src="{{ asset('site/img/Blizzard-Force.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.blizzardforce.com/forum">Blizzard Force</a></h3>
            <p>
                Blizzard Force es el hogar de los Snowtroopers, los Snowtrooper Commanders y otras fuerzas equipadas con equipo para climas fríos.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/BlizzardForce_CRL">Lista de trajes de Blizzard Force</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Bounty Hunters Guild" src="{{ asset('site/img/Bounty-Hunters-Guild.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://thebhg.net/">Bounty Hunters Guild (Gremio de Cazarrecompensas)</a></h3>
            <p>
                El Gremio de Cazarrecompensas es responsable de los cazadores de Star Wars, 
                entre los que se incluyen Boba Fett, Aurra Sing y muchos otros.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/BHG_CRL">Lista de trajes del BHG</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Clone Trooper Detachment" src="{{ asset('site/img/Clone-Trooper-Detachment.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://501stclonetroopers.com/">Clone Trooper Detachment (Destacamento de Clone Trooper)</a></h3>
            <p>
                En 501st Clonetroopers encontrarás los clones de Jango Fett, de las películas Episodios II y III, la serie animada Clone Wars y el universo expandido. 
                Entre ellos se incluyen los ARC Troopers, los Clone Commanders, los Republic Commandos y otros Clone Troopers de este destacamento.                
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:CTN_CRL">Lista de trajes del destacamento de Clone Trooper</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="FISD logo" src="{{ asset('site/img/FISD.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.whitearmor.net/">First Imperial Stormtrooper Detachment (FISD)<br/>-<br/>Primer Destacamento Imperial de Soldados de Asalto</a></h3>
                <p>
                    El 1.º Destacamento Imperial Stormtrooper se dedica al armamento y equipamiento de los stormtroopers tal y como aparecen en Star Wars. 
                    Se esfuerzan por lograr la máxima precisión en el vestuario y debaten todo lo relacionado con los stormtroopers. 
                    Su misión es satisfacer las necesidades tanto de los miembros actuales como de los futuros miembros de la 501.ª Legión, 
                    en consonancia con su lema no oficial: «troopers ayudando a troopers».
                </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:FISD_CRL">Lista de trajes de FISD</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Flagship Eclipse Logo" src="{{ asset('site/img/Flagship-Eclipse.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.theflagshipeclipse.com/">The Flagship Eclipse Detachment (El Destacamento Insignia Eclipse)</a></h3>
            <p>
                El destacamento insignia Eclipse se especializa en trajes canónicos y de Legends que aparecen en los cómics, videojuegos, 
                series animadas y otras fuentes oficiales ajenas a las películas de Star Wars, centrándose en los adeptos del lado oscuro, 
                los Señores Sith, los usuarios de la Fuerza Imperiales y los personajes Denizen.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:FlagshipEclipse_CRL">Lista de trajes del Flagship Eclipse</a>
            </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Imperial Gunnery Corps Logo" src="{{ asset('site/img/Imperial-Gunnery-Corps.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.imperialgunners.com/">Imperial Gunnery Corps (Cuerpo Imperial de Artillería)</a></h3>
            <p>
                El Cuerpo Imperial de Artillería está aquí para proporcionar recursos sobre vestuario, ofrecer información general y datos técnicos, 
                y servir de foro para los artilleros de la Armada Imperial.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/IG_CRL">Lista de vestuario del Cuerpo Imperial de Artillería</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Imperial Officer Corps Logo" src="{{ asset('site/img/Imperial-Officer-Corps.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.imperialofficer.com/">Imperial Officer Corps (Cuerpo de Oficiales Imperiales)</a></h3>
            <p>
                Aquí encontrarás a los oficiales y la tripulación del Imperio y la Primera Orden.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:IOC_CRL">Lista de trajes del Cuerpo de Oficiales Imperiales</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Jolly Roger Squadron Logo" src="{{ asset('site/img/Jolly-Roger-Squadron.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.jrs501st.com/">Jolly Roger Squadron (Escuadrón Jolly Roger)</a></h3>
            <p>
                La misión del Escuadrón Jolly Roger es proporcionar la información más completa y actualizada disponible sobre el traje de piloto imperial 
                tal y como aparece en los episodios IV, V y VI de Star Wars, así como sobre futuros trajes que puedan derivarse de las nuevas series animadas 
                y de acción real que se emitirán en televisión.
            </p>
            <a class="costume-link" href="https://www.jrs501st.com/">Lista de trajes del Escuadrón Jolly Roger</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Krayt Clan Logo" src="{{ asset('site/img/Krayt-Clan.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.kraytclan.com/">Krayt Clan</a></h3>
            <p>
                El Clan Krayt es un destacamento del grupo de disfraces 501st Legion. Este destacamento reúne las actividades de los miembros del 501st 
                que poseen disfraces de Tusken Raider, Jawa y otros habitantes del desierto. También tiene como objetivo ayudar a quienes están trabajando 
                en un disfraz proporcionándoles referencias útiles, información, fuentes y contactos.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:Kraytclan_CRL">Lista de trajes del Clan Krayt</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="MEPD Logo" src="{{ asset('site/img/MEPD.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.mepd.net/">Mos Eisley Police Department (MEPD)<br/>-<br/>Departamento de Policía de Mos Eisley</a></h3>
            <p>
                Dedicado al armamento y equipamiento utilizado por los Sandtroopers que aparecen en Star Wars: Una nueva esperanza, 
                El despertar de la Fuerza y el videojuego Battlefront. 
                Se esfuerzan por lograr la precisión y la perfección, y por debatir todo lo relacionado con los Sandtroopers.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:MEPD_CRL">Lista de trajes del Departamento de Policía de Mos Eisley</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Pathfinders Logo" src="{{ asset('site/img/Pathfinders.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.501stpathfinders.com/">Pathfinders (Exploradores de avanzada)</a></h3>
            <p>
                Los Pathfinders son la infantería ligera de la Legión 501. Nos movemos más rápido y atacamos con mayor contundencia. 
                Entre nuestras filas se encuentran los Biker Scouts, los Kashyyyk Clones, los Shoretroopers y los Patrol Troopers.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:Pathfinders_CRL">Lista de trajes de Pathfinders</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Sith Lord Detachment Logo" src="{{ asset('site/img/Sith-Lord-Detachment.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.501stsithlords.com/">Sith Lord Detachment (Destacamento de Lord Sith)</a></h3>
            <p>
                El Destacamento del Lord Sith es el destacamento oficial de vestuario canónico de la Legión 501, 
                dedicado específicamente a los trajes de Darth Vader, Darth Sidious (Emperador Palpatine), Darth Maul y Darth Tyranus (Conde Dooku).
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:SLD_CRL">Lista de trajes del Destacamento del Lord Sith</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Sovereign Protectors Logo" src="{{ asset('site/img/Sovereign-Protectors.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.sovereignprotectors.com/">Sovereign Protectors (Protectores soberanos)</a></h3>
            <p>
                El Destacamento de Protectores Soberanos es el lugar al que acudir para todos los trajes de la Guardia Real Imperial / Guardias Pretorianos de la Primera Orden, 
                especializado en trajes canónicos y de Legends que se encuentran en los cómics, videojuegos, series animadas y otras fuentes oficiales fuera de las películas de Star Wars.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Costuming:SP_CRL">Lista de trajes de los Protectores Soberanos</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Special Ops Detachment Logo" src="{{ asset('site/img/Special-Ops-Detachment.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://specops501st.com/">Special Ops Detachment (Destacamento de Operaciones Especiales)</a></h3>
            <p>
                El destacamento de operaciones especiales es el hogar de muchos de los soldados especializados de la Legión: exploradores sombríos, soldados Nova, etc.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Specops_CRL">Lista de trajes de operaciones especiales</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="Underworld Logo" src="{{ asset('site/img/Underworld.png') }}"/>
        <div class="detachment-text">
            <h3><a href="https://www.501stunderworld.com/">Underworld (Inframundo)</a></h3>
            <p>
                El destacamento del inframundo es el hogar de los elementos criminales del universo Star Wars. 
                Aquí encontrarás piratas, gánsteres, secuaces, ladrones, contrabandistas, matones y, por supuesto, escoria y villanos.
            </p>
            <a class="costume-link" href="https://databank.501st.com/databank/Underworld_CRL">Lista de trajes de Underworld</a>
        </div>
    </div>
</div>
<div class="detachment">
    <div class="detachment-row">
        <img alt="501st Legion Logo" class="legion-logo" src="{{ asset('site/img/501st_Legion_Logo.png') }}"/>
        <div class="detachment-text">
            <h3>Sin afiliación a ninguna organización</h3>
            <p>
                Algunos trajes no están afiliados a ningún destacamento. Si todo lo demás falla, 
                revisa la página oficial <a class="golden-link" href="https://databank.501st.com/databank/NoAffiliation_CRL">aquí.</a>
            </p>
        </div>
    </div>
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