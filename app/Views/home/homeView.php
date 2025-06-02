<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fast Food Restaurant</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200 font-sans">

  <!-- Menú -->
  <header class="bg-gray-800 shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
      <h1 class="text-xl font-bold text-white">Fast Food Restaurant</h1>
      <nav class="space-x-6 text-gray-300">
        <a href="#home" class="hover:text-white">HOME</a>
        <a href="#nosotros" class="hover:text-white">SOBRE NOSOTROS</a>
        <a href="#productos" class="hover:text-white">PRODUCTOS</a>
        <a href="#contacto" class="hover:text-white">CONTACTANOS</a>
        <a href="#" class="hover:text-red">Ingreso Clientes</a>
      </nav>
    </div>
  </header>

  <!-- Sección: Home -->
  <section id="home" class="bg-gray-900 py-16 text-center">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-white mb-6">Fast Food Restaurant</h2>
      <!-- Imagen principal -->
      <div class="mb-6">
        <img src="ruta-a-tu-imagen-home.jpg" alt="Imagen principal" class="mx-auto rounded shadow-lg max-w-md">
      </div>
      <p class="text-lg text-gray-300 max-w-2xl mx-auto">
        Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde.
        Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
      </p>
    </div>
  </section>

  <!-- Sección: Productos -->
  <section id="productos" class="py-16 bg-gray-800">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-white mb-10">Nuestros Productos</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gray-700 p-6 rounded-lg shadow text-center">
          <img src="ruta-a-producto1.jpg" alt="Producto 1" class="w-full h-40 object-cover mb-4 rounded">
          <p>Producto 1</p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg shadow text-center">
          <img src="ruta-a-producto2.jpg" alt="Producto 2" class="w-full h-40 object-cover mb-4 rounded">
          <p>Producto 2</p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg shadow text-center">
          <img src="ruta-a-producto3.jpg" alt="Producto 3" class="w-full h-40 object-cover mb-4 rounded">
          <p>Producto 3</p>
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
        <img src="ruta-a-imagen-nosotros.jpg" alt="Sobre nosotros" class="mx-auto rounded shadow max-w-md">
      </div>
      <p class="max-w-xl mx-auto text-gray-300">
        Información general sobre el restaurante, su historia, valores y misión. Puedes personalizar este texto.
      </p>
    </div>
  </section>

  <!-- Sección: Contacto -->
  <section id="contacto" class="py-16 bg-gray-800">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-white mb-8">Contáctanos</h2>
      <form class="max-w-xl mx-auto space-y-4">
        <input type="text" placeholder="Nombre" class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded">
        <input type="tel" placeholder="Teléfono" class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded">
        <input type="email" placeholder="Email" class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded">
        <textarea placeholder="Mensaje" class="w-full p-3 bg-gray-700 text-white border border-gray-600 rounded h-32"></textarea>
        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded">Enviar</button>
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
        <img src="ruta-a-imagen-pagos.jpg" alt="Métodos de pago" class="mt-2 w-40">
      </div>
    </div>
    <p class="text-center text-xs mt-6 text-gray-500">© 2024 JAM todos los derechos reservados</p>
  </footer>

</body>
</html>