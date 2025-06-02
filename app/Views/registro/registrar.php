<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro Clientes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200 font-sans flex items-center justify-center min-h-screen">

  <div class="bg-gray-800 p-4 rounded-lg shadow-lg w-full max-w-sm text-center">

    <!-- Logo -->
    <div class="mb-4">
      <img src="ruta-a-tu-logo.png" alt="Logo de la empresa" class="mx-auto h-14">
    </div>

    <h2 class="text-xl font-bold text-white mb-5">Registro de Clientes</h2>

    <form class="space-y-4 text-left text-sm">
      <div>
        <label class="block mb-1 text-gray-300" for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Tu nombre" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Tu apellido" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Tu número de teléfono" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="email">Email</label>
        <input type="email" id="email" name="email" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Correo electrónico" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="password">Contraseña</label>
        <input type="password" id="password" name="password" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Crea una contraseña" required>
      </div>

      <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 rounded transition">
        Registrarse
      </button>
    </form>

  </div>

</body>
</html>
