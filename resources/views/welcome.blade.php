@extends('layout.app')
@section('titulo') Curso de Redes @endsection

@section('menu')

<ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}"> Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
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


@section('contenido')
<center>
    <h2>
        <font color="green" face="ALGERIAN"> máquinas virtuales</font>
    </h2>
</center>
<hr>


<small class="ml-auto">
    <i class="fa fa-calendar text-primary"></i> 24-Abril-2020 &nbsp; &nbsp;
    <i class="fa fa-thumbs-o-up text-primary"></i> 1002 &nbsp; &nbsp;
    <i class="fa fa-thumbs-o-down text-warning"></i> 78 &nbsp; &nbsp;
    <i class="fa fa-comments text-secondary"></i> 18 &nbsp; &nbsp;

</small>

<figure class="figure float-right" style="margin-left: 15px;">
    <img src="img/images.jfif" class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption"></figcaption>
</figure>

<p class="text-justify">
    Probablemente hayas oído más de una vez eso de las "máquinas virtuales" y, si estás leyendo en este texto,
    lo más probable es que no estés seguro de qué son exactamente. No te dejes engañar por su misterioso nombre,
    pues aunque su funcionamiento interno es muy complejo, el concepto en sí es sencillo y las usas cada día.

    Una máquina virtual no es más que un software capaz de cargar en su interior otro sistema operativo
    haciéndole creer que es un PC de verdad. Tal y como su nombre indica, el concepto es tan sencillo como crear
    una máquina (PC, consola, móvil o lo que sea) que en vez de ser física es virtual o emulada.
</p>
<p class="text-justify">
    Una máquina virtual (VM) es un entorno virtual que funciona como sistema informático virtual con su propia
    CPU, memoria, interfaz de red y almacenamiento, pero se crea en un sistema de hardware físico. El sistema de
    software se llama hipervisor, y se encarga de separar los recursos de la máquina del sistema de hardware y
    distribuirlos adecuadamente para que la VM pueda utilizarlos.

    El sistema de hardware físico, en el que está instalado un hipervisor como la máquina virtual basada en el
    kernel (KVM), se llama "host", y las VM que utilizan sus recursos se llaman "guests". El hipervisor utiliza
    los recursos informáticos, como la CPU, la memoria y el almacenamiento, como un conjunto de medios que
    pueden redistribuirse fácilmente entre los guests actuales o en las máquinas virtuales nuevas.

    Las VM se encuentran aisladas del resto del sistema, pero puede haber varias VM en una sola pieza de
    hardware, como un servidor. Además, pueden trasladarse entre los servidores host en función de la demanda, o
    para utilizar los recursos de forma más eficiente.

    El sistema operativo de una VM se ejecuta de la misma forma en que normalmente lo haría un sistema operativo
    o una aplicación en el hardware host, así que la experiencia del usuario con una VM será similar.
</p>

<h4>Máquinas virtuales de procesos</h4>
<figure class="figure float-right" style="margin-left: 10px;">
    <img src="img/mk7.jpg" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption"> Máquinas virtual</figcaption>
</figure>
<p class="text-justify">
    Una máquina virtual de proceso, a veces llamada "máquina virtual de aplicación", se ejecuta como
    un proceso normal dentro de un sistema operativo sirviendo de enlace entre un lenguaje de
    programación y el sistema operativo, realizando una interpretación u otra técnica de enlace
    entre fuente y código máquina. La máquina se inicia automáticamente cuando se lanza el proceso
    que se desea ejecutar o manualmente para ejecutar código interactivamente y se detiene para
    cuando éste finaliza o se le pide terminar al entorno de ejecución. Su objetivo es el de
    proporcionar un entorno de ejecución independiente de la plataforma de hardware y del sistema
    operativo, que oculte los detalles de la plataforma subyacente y permita que un programa se
    ejecute siempre de la misma forma sobre cualquier plataforma.

    El ejemplo más conocido actualmente de este tipo de máquina virtual es la máquina virtual de
    Java que interpreta un código intermedio entre Java y código máquina. Otra máquina virtual muy
    conocida es la del entorno .Net de Microsoft que se llama "Common Language Runtime".
</p>
<hr>

<h4>Inconvenientes de las máquinas virtuales</h4>
<figure class="figure float-left" style="margin-right: 10px;">
    <img src="img/mk8.png" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
    <figcaption class="figure-caption"> Máquinas virtual</figcaption>
</figure>
<p class="text-justify">
    Uno de los inconvenientes de las máquinas virtuales es que agregan gran complejidad al sistema en tiempo de
    ejecución. Esto tiene como efecto la ralentización del sistema, es decir, el programa no alcanzará la misma
    velocidad de ejecución que si se instalase directamente en el sistema operativo "anfitrión" (host) o
    directamente sobre la plataforma de hardware. Sin embargo, a menudo la flexibilidad que ofrecen compensa
    esta pérdida de eficiencia.
</p>

</article>
</div>

@endsection