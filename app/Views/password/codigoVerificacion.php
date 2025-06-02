<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verificar Código</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200 font-sans flex flex-col min-h-screen justify-between">

  <!-- Contenido principal -->
  <main class="flex-grow flex items-center justify-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md text-center">

      <!-- Logo -->
      <div class="mb-6">
        <img src="ruta-a-tu-logo.png" alt="Logo de la empresa" class="mx-auto h-16">
      </div>

      <!-- Título -->
      <h2 class="text-2xl font-bold text-white mb-2">Verificar código</h2>

      <!-- Instrucción -->
      <p class="text-sm text-gray-300 mb-4">
        Hemos enviado el código de verificación.<br>
        Ingrese el código que acaba de recibir en su dirección de correo electrónico que termina en <strong>**in@gmail.com</strong>
      </p>

      <!-- Campos de código -->
      <form class="space-y-4">
        <div class="flex justify-center gap-2">
          <input type="text" maxlength="1" class="w-12 h-12 text-center text-xl bg-gray-700 border border-gray-600 rounded text-white" required>
          <input type="text" maxlength="1" class="w-12 h-12 text-center text-xl bg-gray-700 border border-gray-600 rounded text-white" required>
          <input type="text" maxlength="1" class="w-12 h-12 text-center text-xl bg-gray-700 border border-gray-600 rounded text-white" required>
          <input type="text" maxlength="1" class="w-12 h-12 text-center text-xl bg-gray-700 border border-gray-600 rounded text-white" required>
          <input type="text" maxlength="1" class="w-12 h-12 text-center text-xl bg-gray-700 border border-gray-600 rounded text-white" required>
          <input type="text" maxlength="1" class="w-12 h-12 text-center text-xl bg-gray-700 border border-gray-600 rounded text-white" required>
        </div>

        <!-- Botón para confirmar -->
        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded transition">
          Confirmar Código
        </button>
      </form>

      <!-- Reenviar código -->
      <p class="text-sm text-gray-400 mt-4">
        Volver a enviar en <span class="text-red-400">00:30</span>
      </p>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-500 text-center py-4 text-sm">
    <p>© 2024 JAM todos los derechos reservados</p>
  </footer>

</body>
</html>