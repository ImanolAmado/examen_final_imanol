<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">

  <div class="bg-gray-200">    
      <!-- nav -->
      <nav class="bg-gray-800 p-4">
          <!-- Botón de menú hamburguesa para móviles -->
          <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-300 hover:text-white focus:outline-none">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>

          <!-- Menú de enlaces y logo -->
          <div class="flex justify-between items-center">
              <!-- Logo y Título -->
              <div class="flex items-center">
                  <img src="{{ asset('logo.png') }}" alt="Logo" class="max-w-[120px] p-2">
                  <h1 class="text-4xl font-extrabold text-gray-100 ml-4">El Arca del Cine Perdido</h1>
              </div>

              <!-- Menú de enlaces -->
              <div id="menu" class="hidden md:flex flex-col md:flex-row md:space-x-6 w-full md:w-auto mt-4 md:mt-0">
                  <a href="{{ route('home') }}" class="text-gray-300 hover:text-white px-4 py-2 rounded-md text-lg font-medium">Home</a>
                  <!-- Asignar actores -->
                  <a href="{{ route('asignar') }}" class="text-gray-300 hover:text-white px-4 py-2 rounded-md text-lg font-medium">Asignar actores</a>
                    <!-- Agregar Actores -->
                  <a href="{{ route('agregar') }}" class="text-gray-300 hover:text-white px-4 py-2 rounded-md text-lg font-medium">Agregar actores</a>
                  <!-- Administrador -->
                  @can('verActors', App\Models\Actor::class)
                  <a href="{{ route('administrar') }}" class="text-gray-300 hover:text-white px-4 py-2 rounded-md text-lg font-medium">Administración</a>
                  @endcan                  
              </div>
          </div>
      </nav>

      <!-- Segunda Franja: Título y Login/Registro -->
      <div class="py-4 bg-gray-200 text-center flex justify-between items-center px-6">
          <h2 class="text-2xl font-semibold text-gray-800"> @yield('page_title') </h2>
          
          @if (Route::has('login'))
              <div class="flex space-x-6">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="rounded-md px-4 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="rounded-md px-4 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Login</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="rounded-md px-4 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Registro</a>
                      @endif
                  @endauth
              </div>
          @endif
      </div>

  </div>

    <main class="container mx-auto mt-10 px-6 md:px-10">
        @yield('content')
    </main>

    <!-- footer -->
    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="container mx-auto text-center">
          <p>&copy; 24/25 Examen Desarrollo web en Entorno Servidor</p>
        </div>
    </footer>

    <!-- scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
