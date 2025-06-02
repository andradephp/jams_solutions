<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recuperar Contraseña</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200 font-sans flex flex-col min-h-screen justify-between">

  <!-- Contenedor principal -->
  <main class="flex-grow flex items-center justify-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md text-center">

      <!-- Logo -->
      <div class="mb-6">
        <img src="ruta-a-tu-logo.png" alt="Logo de la empresa" class="mx-auto h-16">
      </div>

      <!-- Título -->
      <h2 class="text-2xl font-bold text-white mb-4">¿Has olvidado tu contraseña?</h2>

      <!-- Descripción -->
      <p class="text-gray-300 mb-6 text-sm">
        Ingresa tu correo electrónico o teléfono y te enviaremos un enlace para que recuperes el acceso a tu cuenta.
      </p>

      <!-- Formulario -->
      <form class="space-y-4 text-left">
        <div>
          <label class="block mb-1 text-gray-300" for="recuperacion">Correo electrónico o teléfono</label>
          <input type="text" id="recuperacion" class="w-full p-3 bg-gray-700 border border-gray-600 rounded text-white" placeholder="ej. usuario@correo.com o 3001234567" required>
        </div>

        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded transition">
          Enviar Código
        </button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-500 text-center py-4 text-sm">
    <p>© 2024 JAM todos los derechos reservados</p>
  </footer>

</body>
</html>