<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RoS</title>
    <link rel="icon" type="image/png" href="Views/LogosRos/logoColor.PNG" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-900 text-gray-200 font-sans">

    <!-- Menú -->
    <header class="bg-gray-800 shadow">
      <div
        class="container mx-auto px-4 flex justify-between items-center py-4">
        <div class="flex items-center space-x-3">
          <img src="Views/LogosRos/logoColor.PNG" alt="Logo"
            class="h-10 w-10 object-contain">
          <h1 class="text-xl font-bold text-white">Restaurant Optimization
            System</h1>
        </div>
        <!-- Botón hamburguesa -->
        <button id="menu-btn" class="md:hidden text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <!-- Menú normal en desktop -->
        <nav id="menu" class="hidden md:flex space-x-6 text-gray-300">
          <a href="#home"
            class="hover:text-red-500 transition-colors duration-200">HOME</a>
          <a href="#nosotros"
            class="hover:text-red-500 transition-colors duration-200">SOBRE
            NOSOTROS</a>
          <a href="#productos"
            class="hover:text-red-500 transition-colors duration-200">PRODUCTOS</a>
          <a href="#contacto"
            class="hover:text-red-500 transition-colors duration-200">CONTACTANOS</a>
          <a href="/login"
            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition-colors duration-200">Ingreso
            Clientes</a>
        </nav>
      </div>
      <!-- Menú móvil -->
      <div id="mobile-menu"
        class="md:hidden hidden px-4 pb-4 text-gray-300 space-y-2">
        <a href="#home" class="block hover:text-red-500">HOME</a>
        <a href="#nosotros" class="block hover:text-red-500">SOBRE NOSOTROS</a>
        <a href="#productos" class="block hover:text-red-500">PRODUCTOS</a>
        <a href="#contacto" class="block hover:text-red-500">CONTACTANOS</a>
        <a href=""
          class="block bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700">Ingreso
          Clientes</a>
      </div>

      <script>
    // JS simple para mostrar/ocultar el menú móvil
    document.getElementById('menu-btn').addEventListener('click', function () {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>
    </header>
    <!-- Sección: Home -->
    <section id="home" class="bg-gray-900 py-16">
      <div class="container mx-auto px-4">

        <!-- Contenedor centrado -->
        <div
          class="flex flex-col md:flex-row items-center justify-center text-center gap-8">

          <!-- Texto centrado -->
          <div class="md:w-1/2">
            <h2 class="text-4xl font-bold text-white mb-6"
              style="color: rgb(255,160, 1);">Fast Food</h2>
            <p class="text-lg text-gray-300 max-w-lg mx-auto">
              Doloremque, itaque aperiam facilis rerum, commodi, temporibus
              sapiente ad mollitia laborum quam quisquam esse error unde.
              Tempora ex doloremque, labore, sunt repellat dolore, iste magni
              quos nihil ducimus libero ipsam.
            </p>
          </div>

          <!-- Imagen centrada -->
          <div class="md:w-1/2 flex justify-center">
            <img src="app/Views/home/imgHome/señoPedido.PNG" alt="Imagen principal"
              class="rounded shadow-lg w-full max-w-md">
          </div>

        </div>
      </div>
    </section>

    <section id="home" class="bg-gray-900 py-16">
      <div class="container mx-auto px-4">

        <!-- Contenedor centrado -->
        <div
          class="flex flex-col md:flex-row items-center justify-center text-center gap-8">
          <!-- Imagen centrada -->
          <div class="md:w-1/2 flex justify-center">
            <img src="imgHome/meseroTomandoPedido.jpg" alt="Imagen principal"
              class="rounded shadow-lg w-full max-w-md">
          </div>
          <!-- Texto centrado -->
          <div class="md:w-1/2">
            <h2 class="text-4xl font-bold text-white mb-6"
              style="color: rgb(255,160, 1);">Fast Food</h2>
            <p class="text-lg text-gray-300 max-w-lg mx-auto">
              Doloremque, itaque aperiam facilis rerum, commodi, temporibus
              sapiente ad mollitia laborum quam quisquam esse error unde.
              Tempora ex doloremque, labore, sunt repellat dolore, iste magni
              quos nihil ducimus libero ipsam.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="home" class="bg-gray-900 py-16">
      <div class="container mx-auto px-4">

        <!-- Contenedor centrado -->
        <div
          class="flex flex-col md:flex-row items-center justify-center text-center gap-8">

          <!-- Texto centrado -->
          <div class="md:w-1/2">
            <h2 class="text-4xl font-bold text-white mb-6"
              style="color: rgb(255,160, 1);">Fast Food</h2>
            <p class="text-lg text-gray-300 max-w-lg mx-auto">
              Doloremque, itaque aperiam facilis rerum, commodi, temporibus
              sapiente ad mollitia laborum quam quisquam esse error unde.
              Tempora ex doloremque, labore, sunt repellat dolore, iste magni
              quos nihil ducimus libero ipsam.
            </p>
          </div>

          <!-- Imagen centrada -->
          <div class="md:w-1/2 flex justify-center">
            <img src="imgHome/hombreTablet.png" alt="Imagen principal"
              class="rounded shadow-lg w-full max-w-md">
          </div>

        </div>
      </div>
    </section>

    <!-- Sección: Productos -->
    <section id="productos" class="py-16 bg-gray-800">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-white mb-10">Nuestros
          Productos</h2>
        <div class="grid md:grid-cols-3 gap-6">
          <div class="bg-gray-700 p-6 rounded-lg shadow text-center">
            <img src="Views/LogosRos/logoBlancoNegro.PNG" alt="Producto 1"
              class="w-32 h-32 object-cover mb-4 rounded mx-auto">
            <p>Software para restaurantes</p>
          </div>
                    <div class="bg-gray-700 p-6 rounded-lg shadow text-center">
            <img src="Views/LogosRos/logoColor.PNG" alt="Producto 1"
              class="w-32 h-32 object-cover mb-4 rounded mx-auto">
            <p>Software para restaurantes</p>
          </div>
          <div class="bg-gray-700 p-6 rounded-lg shadow text-center">
            <img src="Views/LogosRos/logoBlancoNegro.PNG" alt="Producto 1"
              class="w-32 h-32 object-cover mb-4 rounded mx-auto">
            <p>Software para restaurantes</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección: Sobre Nosotros -->
    <section id="nosotros" class="py-16 bg-gray-900">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Sobre Nosotros</h2>
        <!-- Imagen opcional sobre la empresa -->
        <div class="mb-6">
          <img src="Views/LogosRos/jamSS.jpg" alt="Sobre nosotros"
            class="mx-auto rounded shadow w-230 h-20">
        </div>
        <p class="max-w-xl mx-auto text-gray-300">
          "En JAM, somos apasionados desarrolladores de software dedicados a
          transformar ideas innovadoras en soluciones digitales de alta calidad.
          Fundada en abril de 2024, nuestra empresa se especializa en la
          creación de software adaptado a las necesidades de nuestros clientes.
          <br>
          Aunque nuestra visión abarca una amplia gama de categorías,
          actualmente nos enfocamos en el sector de restaurantes, desarrollando
          aplicaciones y sistemas que mejoran la eficiencia operativa y la
          experiencia del cliente.<br>
          Nuestro equipo en JAM se compromete a ofrecer productos excepcionales,
          utilizando las últimas tecnologías y metodologías ágiles para
          garantizar que cada proyecto sea un éxito.<br>
          Únete a nosotros en este emocionante viaje mientras redefinimos el
          futuro del software para la industria de la restauración y más allá."

        </p>
      </div>
    </section>

    <!-- Sección: Contacto -->
    <section id="contacto" class="py-16 bg-gray-800">
      <div class="container mx-auto px-4">
        <h2
          class="text-3xl font-bold text-center text-white mb-8">Contáctanos</h2>
        <form class="max-w-xl mx-auto space-y-4">
          <input type="text" placeholder="Nombre"
            class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded">
          <input type="tel" placeholder="Teléfono"
            class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded">
          <input type="email" placeholder="Email"
            class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded">
          <textarea placeholder="Mensaje"
            class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded h-32"></textarea>
          <button type="submit"
            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded">Enviar</button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-8">
      <div class="container mx-auto px-4 grid md:grid-cols-3 gap-6 text-sm">
        <div>
          <h3 class="font-semibold text-white mb-2">Información Legal</h3>
          <ul>
            <li>Términos y condiciones</li>
            <li>Política de Privacidad</li>
            <li>Contacto</li>
          </ul>
        </div>
        <div>
          <h3 class="font-semibold text-white mb-2">Contacto</h3>
          <p>Call Center #611</p>
          <p>Calle 7 25 12 Barrio Olivos</p>
          <p>WhatsApp</p>
        </div>
        <div>
          <h3 class="font-semibold text-white mb-2">Aceptamos</h3>
          <p>Todos los métodos de pago principales.</p>
          <!-- Imagen de medios de pago -->
          <img src="C:\xampp\htdocs\jams_solutions\app\Views\home\imgHome\MediosPago.png" alt="Métodos de pago"
            class="mt-2 w-40">
        </div>
      </div>
      <p class="text-center text-xs mt-6 text-gray-500">© 2024 JAM todos los
        derechos reservados</p>
    </footer>

  </body>
</html>