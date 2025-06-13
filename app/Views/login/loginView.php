<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ingreso Clientes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200 font-sans flex items-center justify-center min-h-screen">

  <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md text-center">

    <!-- Logo -->
    <div class="mb-6">
      <img src="<?= base_url('public/storage/jamSS.jpg') ?>" alt="Logo" class="mx-auto h-16">
    </div>

    <h2 class="text-2xl font-bold text-white mb-6">Ingreso Clientes</h2>

    <form class="space-y-5 text-left" action="<?= base_url('/login/acceder');?>" method="POST">
      <div>
        <label class="block mb-1 text-gray-300" for="email">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="w-full p-3 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Tu usuario" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="password">Contraseña</label>
        <input type="password" name="psw" id="psw" class="w-full p-3 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Tu contraseña" required>
      </div>

      <div class="flex items-center justify-between text-sm text-gray-400">
        <label class="flex items-center">
          <input type="checkbox" class="mr-2 accent-red-600">
          Recuérdame
        </label>
        <a href="/password" class="hover:underline text-red-400">¿Has olvidado tu contraseña?</a>
      </div>

      <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded transition">
        Ingresar
      </button>
    </form>

    <!-- Enlace a Registro -->
    <p class="mt-6 text-sm text-gray-400">
      ¿No tienes una cuenta?
      <a href="/registro" class="text-red-400 hover:underline">Regístrate aquí</a>
    </p>

  </div>

</body>
</html>
