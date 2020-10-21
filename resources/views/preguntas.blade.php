@extends('layout.app')
@section('titulo')Preguntas MV @endsection

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
    <li class="nav-item ">
        <a class="nav-link" href="{{route('sugerencias')}}"> Sugerencias</a>
    </li>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('preguntas')}}"> Preguntas</a>
    </li>

</ul>
@endsection

@section('contenido')

<center>
          <h2>
            <font color="green" face="ALGERIAN"> Preguntas sobre MV</font>
          </h2>
        </center>
        <hr>
        
          <small class="ml-auto">
            <i class="fa fa-calendar text-primary"></i> 24-Abril-2020 &nbsp; &nbsp;
            <i class="fa fa-thumbs-o-up text-primary"></i> 1002 &nbsp; &nbsp;
            <i class="fa fa-thumbs-o-down text-warning"></i> 78 &nbsp; &nbsp;
            <i class="fa fa-comments text-secondary"></i> 18 &nbsp; &nbsp;

          </small>

        

          <h4>¿Qué puedo ejecutar en una máquina virtual de Azure?</h4>
          <figure class="figure float-right" style="margin-left: 10px;">
            <img src="img/mki.png" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>

          <p class="text-justify">
            Todos los suscriptores pueden ejecutar software de servidor en una máquina virtual de Azure. Para saber más
            sobre la directiva de soporte de software de servidor de Microsoft ejecutado en Azure.

          </p>
          <h4>¿Cuánto almacenamiento puedo usar con una máquina virtual?</h4>

          <p class="text-justify">
            Azure Managed Disks son las nuevas ofertas de almacenamiento en disco recomendadas que se pueden usar con
            Azure Virtual Machines para almacenar los datos de forma persistente. Puede usar varios de estos discos con
            cada máquina virtual. Managed Disks ofrece dos tipos de opciones de almacenamiento duraderas: discos
            administrados premium y estándar.
          </p>
          <h4>¿Cómo puedo tener acceso a mi máquina virtual?</h4>
          <figure class="figure float-left" style="margin-right: 10px;">
            <img src="img/mkk.png" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>

          <p class="text-justify">
            Establezca una conexión remota mediante conexión a Escritorio remoto (RDP) para una máquina virtual Windows.
            Para obtener instrucciones, vea
            Se admite un máximo de 2 conexiones simultáneas, a menos que el servidor esté configurado como un host de
            sesión de servicios de escritorio remoto.
          </p>
          <h4>¿Puedo usar el disco temporal (la unidad D: de forma predeterminada) para almacenar datos?</h4>
          <figure class="figure float-right" style="margin-left: 10px;">
            <img src="img/local.png" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>
          <p class="text-justify">
            No utilice el disco temporal para almacenar datos. Solo proporciona almacenamiento de forma temporal, por lo
            que se arriesgaría a perder datos que no se pueden recuperar. La pérdida de datos puede ocurrir cuando se
            mueve la máquina virtual a un host diferente. Cambiar el tamaño de una máquina virtual, actualizar el host o
            un error de hardware en el host son algunas de las razones por las que se puede mover una máquina virtual.
          </p>
          <h4>¿Cómo puedo cambiar la letra de la unidad del disco temporal?</h4>
          <p class="text-justify">
            Para cambiar la letra de la unidad, mueva el archivo de paginación y reasigne las letras de unidad; sin
            embargo, debe asegurarse de realizar los pasos en un orden específico. Para obtener instrucciones, consulte
          </p>

          <h4>¿Puedo agregar una máquina virtual existente a un conjunto de disponibilidad?</h4>
          No. Si desea que la máquina virtual forme parte de un conjunto de disponibilidad, debe crearla dentro del
          conjunto. Actualmente no es posible agregar una máquina virtual a un conjunto de disponibilidad una vez
          creada.
          <h4>¿Puedo cargar una máquina virtual en Azure?</h4>
          <figure class="figure float-left" style="margin-right: 10px;">
            <img src="img/cargar.jpg" width="400" height="400" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"> Máquinas virtual</figcaption>
        </figure>
          <p class="text-justify">
            Sí. Para obtener instrucciones, consulte Migrating on-premises VMs to Azure (Migración de máquinas virtuales
            locales a Azure).
          </p>
          <h4>¿Puedo cambiar el tamaño del disco del sistema operativo?</h4>
          <p class="text-justify">Sí. Para obtener instrucciones, consulte Cómo ampliar la unidad de sistema operativo
            de una máquina virtual en un grupo de recursos de Azure.</p>
          <h4>¿Puedo copiar o clonar una máquina virtual de Azure existente?</h4>
          <p class="text-justify">
            Sí. Mediante el uso de imágenes administradas, puede crear una imagen de una máquina virtual y luego usar la
            imagen para crear varias máquinas virtuales nuevas. Para obtener instrucciones, consulte Creación de una
            imagen personalizada de una máquina virtual.
          </p>

          <h4>¿Por qué no veo las regiones de Centro de Canadá y Este de Canadá por medio de Azure Resource Manager?
          </h4>
          <p class="text-justify">
            Las dos nuevas áreas Centro de Canadá y Este de Canadá no se registran automáticamente para la creación de
            máquinas virtuales en las suscripciones de Azure existentes. Este registro se realizará automáticamente
            cuando se implementa una máquina virtual mediante el Portal de Azure en cualquier otra región usando Azure
            Resource Manager. Después de implementar una máquina virtual en cualquier otra región de Azure, las áreas
            nuevas deberán estar disponibles para las máquinas virtuales siguientes.
          </p>


@endsection