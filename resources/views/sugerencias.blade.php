@extends('layout.app')
@section('titulo')Sugerencias MV @endsection

@section('menu')

<ul class="navbar-nav ml-auto">
    <li class="nav-item ">
        <a class="nav-link" href="{{route('index')}}"> Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('funcion')}}"> Función de MV</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('tips')}}"> Tips MV</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('sugerencias')}}"> Sugerencias</a>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('preguntas')}}"> Preguntas</a>
    </li>

</ul>
@endsection

@section('contenido')

<h3>
            <font color="green" face="ALGERIAN"> consejos para mejorar el rendimiento de su maquina virtual</font>
          </h3>
          <hr>
          <small class="ml-auto">
            <i class="fa fa-calendar text-primary"></i> 24-Abril-2020 &nbsp; &nbsp;
            <i class="fa fa-thumbs-o-up text-primary"></i> 1002 &nbsp; &nbsp;
            <i class="fa fa-thumbs-o-down text-warning"></i> 78 &nbsp; &nbsp;
            <i class="fa fa-comments text-secondary"></i> 18 &nbsp; &nbsp;

          </small>

          
          <h4>Asegúrate que Intel VT-x o AMD-V esté disponible y activado</h4>

          <p class="text-justify">
            Son extensiones especiales para los procesadores que mejoran su capacidad de virtualización activando la
            aceleración por hardware. Casi todos los procesadores de las últimas generaciones las soportan. AMD-V está
            activada por defecto en modelos compatibles. Con procesadores Intel es diferente y lo habitual es que el
            Intel VT-x venga desactivada por defecto, provocando errores a la hora de utilizar aplicaciones de
            virtualización. La solución es sencilla y pasa por entrar en la BIOS del equipo o en la configuración del
            firmware UEFI para activar esta característica.
          </p>

          

          <h4>Crea discos de tamaño fijo y no dinámicos</h4>
          <figure class="figure float-right" style="margin-left: 10px;">
            <img src="img/m2.jpg" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>
          <p class="text-justify">Al crear la máquina virtual, puedes elegir entre dos tipos diferentes de discos
            virtuales. Por lo general, aplicaciones como VirtualBox o VMware, utilizan discos discos asignados
            dinámicamente que crecen a medida que los vas utilizando y necesitas más espacio. Sin embargo, es preferible
            asignar un espacio fijo desde el principio, tendrás un mayor rendimiento y menor fragmentación. Es la mejor
            opción a no ser que tu espacio en disco sea crítico y no te quede más remedio que emplear almacenamiento
            dinámico.
          </p>
          <h4>Elige la unidad de almacenamiento más rápida</h4>
          <p class="text-justify">
            Muchos usuarios tendemos a instalar y ejecutar las máquinas virtuales en una unidad de almacenamiento
            secundaria con mayor capacidad y que suele ser un disco duro. Si puedes, haz espacio a tu SSD y utilízala en
            su lugar, porque la mejora de rendimiento será brutal. Por el mismo motivo, evita emplear unidades externas
            que -por lo general- te van a ralentizar la ejecución de las máquinas virtuales, a no ser que dispongas de
            medios rápidos con interfaces Thunderbolt/USB 3.1.
          </p>
         
          <h4>Instala herramientas software adicionales. </h4>
          <figure class="figure float-left" style="margin-right: 10px;">
            <img src="img/m3.png" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>

          <p class="text-justify">
            Después de instalar un sistema operativo invitado en una máquina virtual, debes instalar los paquetes
            adicionales de software que para ellos disponga la aplicación de VM que estés utilizando. VirtualBox, VMware
            o Parallels ofrecen herramientas y/o controladores especiales que ayudan a que cada sistema funcione mejor
            en el hardware particular de tu máquina.
          </p>
          <h4>Asigna más memoria RAM</h4>
          <p class="text-justify">
            Las máquinas virtuales son devoradoras de memoria RAM. Cada máquina virtual contiene un sistema operativo
            completo, por lo que tienes que repartir la memoria RAM del ordenador en varios sistemas separados.
            Microsoft recomienda al menos 2 GB de RAM para sistemas con Windows 7/10 y lo mismo podemos decir de las
            distribuciones GNU/Linux actuales. Ese es el mínimo recomendado, pero si tienes hardware suficiente deberás
            asignar una mayor cantidad.
          </p>

          <figure class="figure float-right" style="margin-left: 10px;">
            <img src="img/m4.png" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>

          <h4>Asigna más núcleos de CPU</h4>
          <p class="text-justify">
            En máquinas virtuales el procesador sí importa, y mucho. De hecho, hace la mayor parte del trabajo. Si
            tienes un procesador multinúcleo, asigna los que te puedas permitir. Como con la memoria RAM, todo dependerá
            del número de máquinas virtuales que arranques simultáneamente y del sistema a virtualizar. Prueba con
            varias opciones hasta lograr el equilibrio y que no te ralentice tu sistema principal.
          </p>
          <h4>Ajusta la configuración de vídeo.</h4>
          <p class="text-justify">
            Ajustar la configuración de vídeo también puede mejorar el rendimiento de tu máquina virtual y además de
            gestionar resolución de pantalla como haríamos en el sistema principal, debemos asegurarnos de tener
            habilitadas la aceleración 2D y 3D. También podemos gestionar la cantidad de memoria de vídeo dedicada.
          </p>
          <h4>Excluye directorios en el antivirus</h4>
          <p class="text-justify">
            La solución de seguridad de tu equipo puede estar escaneando los archivos de la máquina virtual cada vez que
            se acceda a ellos, reduciendo el rendimiento. El antivirus no puede ver el interior de la máquina virtual
            para detectar virus que se ejecuten en sistema operativo invitado, por lo que esta exploración es inútil.
            Para acelerar las cosas, añade el directorio de la máquina virtual a la lista de exclusiones de tu
            antivirus.
          </p>

          <h4>Suspender en lugar de apagar</h4>
          <figure class="figure float-right" style="margin-left: 10px;">
            <img src="img/sus.jpg" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>
          <p class="text-justify">
            Cuando hayas terminado de utilizar la máquina virtual, es posible que desees guardar su estado en lugar de
            apagarla completamente. La próxima vez que la necesites, basta hacer un doble clic para ponerla en marcha.
            El sistema operativo huésped se reanudará donde lo dejó en lugar de arrancar desde cero. La función es
            similar a la hibernación o suspensión. La aplicación guarda el contenido de la memoria de la máquina virtual
            en un archivo en el disco duro, para cargarla cuando lo requiera el usuario.
          </p>
          <h4>Para máquinas virtuales, mejora tu hardware</h4>
          <p class="text-justify">Todo lo dicho anteriormente es una ayuda para mejorar el rendimiento de nuestras
            máquinas virtuales pero, no hay milagros al utilizar este recurso tecnológico. Aquí sí vale el dicho de
            cuanto más mejor. Como habrás visto, para que funcionen adecuadamente tenemos que cederles recursos de
            nuestra máquina principal. Y no pocos. Si tu hardware no es lo suficientemente potente y las utilizas,
            puedes bloquear por completo tu equipo en cuanto ejecutes un sistema que requiera un cierto nivel de
            potencia, si bien el consumo de recursos de, por ejemplo, Windows 10 o DOS es totalmente diferente.
           </p>

@endsection