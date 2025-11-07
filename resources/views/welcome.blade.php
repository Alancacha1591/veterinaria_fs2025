<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu principal</title>
    <!-- Usamos el CSS de Bootstrap que ya tenías -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Pequeñas mejoras visuales para el carrusel */
        .carousel-item img { height: 360px; object-fit: cover; }
        .carousel-caption a { text-decoration: none; color: #fff; font-weight:600; }
    </style>
</head>
<body>
    <!-- Navbar sencillo con Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Veterinaria 2025</a>
                       
        </div>
    </nav>

    <main class="container py-5">
        <h1 class="text-center mb-4">Bienvenido a la página de gestión de la veterinaria</h1>

                <!-- Carrusel veterinario: 3 diapositivas con CTA hacia la gestión de veterinarios -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('imagenes/software-veterinario-2.webp') }}" class="d-block w-100" alt="Pacientes felices">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                                <h5>Pacientes felices</h5>
                                <p>Brindamos atención de calidad para el bienestar de tus mascotas.</p>
                                <a href="{{ route('pacientes.index') }}" class="btn btn-sm btn-primary p">Ver pacientes</a>
                                <br><br>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/software-para-gestion-citas-veterinario.jpg') }}" class="d-block w-100" alt="Citas">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                                <h5>Citas</h5>
                                <p>Ver citas agendadas para tus mascotas.</p>
                                <a href="{{ route('veterinarios.index') }}" class="btn btn-sm btn-primary">Ver citas</a>
                                <br><br>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/expedientes-veterinarios-femeninos-escritura-tablero-perro-tabla-clinica_23-2147928488.avif') }}" class="d-block w-100" alt="Expedientes">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                                <h5>Expedientes</h5>
                                <p>Accede a los expedientes médicos de tus mascotas.</p>
                                <a href="{{ route('veterinarios.index') }}" class="btn btn-sm btn-primary">Ver expedientes</a>
                                <br><br>
                            </div>
                        </div>

                        <div class="carousel-item active">
                            <img src="{{ asset('imagenes/Veterinarian_hugs_dog.webp') }}" class="d-block w-100" alt="Equipo de veterinarios">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                                <h5>Conoce a nuestro equipo</h5>
                                <p>Profesionales comprometidos con el cuidado de tus mascotas.</p>
                                <a href="{{ route('veterinarios.index') }}" class="btn btn-sm btn-primary">Ver veterinarios</a>
                                <br><br>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/medicinas-veterinarias-blog-1-1024x538.jpg') }}" class="d-block w-100" alt="Medicinas">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                                <h5>Medicinas</h5>
                                <p>Gestiona las medicinas de tus mascotas.</p>
                                <a href="{{ route('medicinas.index') }}" class="btn btn-sm btn-primary">Ver medicinas</a>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
    </main>

    <!-- Mantengo el script de Bootstrap que ya tenías -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>