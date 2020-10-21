@extends('layout.app')
@section('titulo')Funciones MV @endsection
@section('contenido')


@section('menu')

<ul class="navbar-nav ml-auto">
    <li class="nav-item ">
        <a class="nav-link" href="{{route('index')}}"> Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('funcion')}}"> Función de MV</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('tips')}}"> Tips MV</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('sugerencias')}}"> Sugerencias</a>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('preguntas')}}"> Preguntas</a>
    </li>

</ul>
@endsection

<center>
                    <h2>
                        <font color="green" face="ALGERIAN"> Función</font>
                      </h2>
                    </center>
                    <hr>

                   
                    <small class="ml-auto">
                        <i class="fa fa-calendar text-primary"></i> 24-Abril-2020 &nbsp; &nbsp;
                        <i class="fa fa-thumbs-o-up text-primary"></i> 1002 &nbsp; &nbsp;
                        <i class="fa fa-thumbs-o-down text-warning"></i> 78 &nbsp; &nbsp;
                        <i class="fa fa-comments text-secondary"></i> 18 &nbsp; &nbsp;

                    </small>

                    <p class="text-justify">
                        En informática, una máquina virtual es un software que simula un sistema de computación y puede
                        ejecutar programas como si fuese una computadora real. Este software en un principio fue
                        definido como "un duplicado eficiente y aislado de una máquina física". La acepción del término
                        actualmente incluye a máquinas virtuales que no tienen ninguna equivalencia directa con ningún
                        hardware real.

                        Una característica esencial de las máquinas virtuales es que los procesos que ejecutan están
                        limitados por los recursos y abstracciones proporcionados por ellas. Estos procesos no pueden
                        escaparse de esta "computadora virtual".

                        Uno de los usos domésticos más extendidos de las máquinas virtuales es ejecutar sistemas
                        operativos para "probarlos". De esta forma podemos ejecutar un sistema operativo que queramos
                        probar (GNU/Linux, por ejemplo) desde nuestro sistema operativo habitual (Mac OS X por ejemplo)
                        sin necesidad de instalarlo directamente en nuestra computadora y sin miedo a que se
                        desconfigure el sistema operativo primario.
                    </p>
                    <h4>
                       
                        Máquinas virtuales de sistema
                    </h4>
                    <figure class="figure float-left" style="margin-right: 10px;">
                        <img src="img/funcion1.png" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption"> Máquinas virtual</figcaption>
                    </figure>
                    <p class="text-justify">
                        Las máquinas virtuales de sistema, también llamadas máquinas virtuales de hardware, permiten a
                        la máquina física subyacente multiplicarse entre varias máquinas virtuales, cada una ejecutando
                        su propio sistema operativo. A la capa de software que permite la virtualización se la llama
                        monitor de máquina virtual o hipervisor. Un monitor de máquina virtual puede ejecutarse o bien
                        directamente sobre el hardware o bien sobre un sistema operativo ("host operating system").
                    </p>

                    <h4>
                        Aplicaciones de las máquinas virtuales de sistema
                    </h4>
                    <p class="text-justify">
                        Varios sistemas operativos distintos pueden coexistir sobre la misma computadora, en sólido
                        aislamiento el uno del otro, por ejemplo para probar un sistema operativo nuevo sin necesidad de
                        instalarlo directamente.
                        La máquina virtual puede proporcionar una arquitectura de instrucciones (ISA) que sea algo
                        distinta de la verdadera máquina. Es decir, podemos simular hardware.
                        Varias máquinas virtuales (cada una con su propio sistema operativo llamado sistema operativo
                        "invitado" o "guest"), pueden ser utilizadas para consolidar servidores. Esto permite que
                        servicios que normalmente se tengan que ejecutar en computadoras distintas para evitar
                        <br>
                        <figure class="figure float-right" style="margin-left: 10px;">
                            <img src="img/funcion2.jpg" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
                            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
                        </figure>

                        <p class="text-justify">
                        interferencias, se puedan ejecutar en la misma máquina de manera completamente aislada y
                        compartiendo los recursos de una única computadora. La consolidación de servidores a menudo
                        contribuye a reducir el coste total de las instalaciones necesarias para mantener los servicios,
                        dado que permiten ahorrar en hardware.
                        La virtualización es una excelente opción hoy día, ya que las máquinas actuales (Laptops,
                        desktops, servidores) en la mayoría de los casos están siendo "sub-utilizados" (gran capacidad
                        de disco duro, memoria RAM, etc.), llegando a un uso de entre 30% a 60% de su capacidad. Al
                        virtualizar, la necesidad de nuevas máquinas en una ya existente permite un ahorro considerable
                        de los costos asociados (energía, mantenimiento, espacio, etc).
                    </p>
@endsection