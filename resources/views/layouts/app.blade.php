{{-- Layout principal --}}
{{-- Sirve como una plantilla base para las vistas --}}
{{-- Este archivo contiene: el título, la barra de navegacion y el contenedor principal(tabla)--}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
      Para crear el titulo de la paginal que se puede estableces o sobreescribir desde la vista hija:
      @section('title', 'Mi título') o @yield('title', 'Veterinaria')
    -->
    <!-- Título de la página -->
    <title>@yield('title', config('app.name', 'Veterinaria'))</title>

    <!-- Imagen que aparece al lado izquierdo pestaña del navegador -->
    <link rel="icon" href="{{ asset('imagenes/logo.webp') }}" type="image/webp">

    <!-- Se incluye Bootstrap CSS como una hoja de estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      /*
        Pequeño ajuste visual:
        Se deja un espacio de 70px al inicio de la página para que el contenido no quede
        oculto detrás de la barra de navegación 
      */
      body { 
        padding-top: 70px; 
      }
    </style>
  </head>
  <body>
    <!--
      Se crea el header y una barra de navegacion que se usara en todas las vistas
      -La barra de navegacion se mantiene fija gracias a la clase (fixed-top)
      -La barra de navegacion contiene logo y los enlaces a las demas vistas(Inicio,Pacientes, Citas, Expediente, Veterinarios y Medicinas)
    -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
      <div class="container">
        <!--Logo a la izquierda -->
        <!--Si se hace clic en el logo, se regresa a la pagina de inicio -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
          <!--Imagen pequeña del logo-->
          <img src="{{ asset('imagenes/logo.webp') }}" alt="logo" style="height:34px; width:auto; margin-right:8px;">
          <span>Veterinaria 2025</span>
        </a>

        <!--La barra de navegacion se convierte en menu de "hamburguesa" en pantallas pequeñas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!--Enlaces del lado derecho de la barra de navegacion -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <!--la clase ms-auto hace que el menu este a la derecha -->
            <!-- Barra de navegacion-->
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('pacientes.index') }}">Pacientes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('citas.index') }}">Citas</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('expedientes.index') }}">Expediente</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('veterinarios.index') }}">Veterinarios</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('medicinas.index') }}">Medicinas</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--
      Contenedor principal
      Aqui se muestra el contenido de cada vista (tablas y los formularios)
    -->
    <main class="container">
      <!--mensaje de exito y error (esto fue sugerido por copilot y revisado por el desarrollador) -->
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      

      @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <!--Fin mensaje de exito-->

      <!--Aqui esta el contednio de cada vista (tabla principalmente)-->
      @yield('content')
    </main>

    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      /*
        Aqui se define una funcion en Javascript para confirmar la eliminacion de un registro
        que muestra una ventana de confirmacion antes de eliminar un registro
      */
      function confirmDelete(form){
        if(confirm('¿Eliminar este registro? Esta acción no se puede deshacer.')){
          form.submit();
        }
      }
    </script>

    
  </body>
</html>
