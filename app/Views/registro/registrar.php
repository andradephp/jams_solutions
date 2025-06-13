<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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


    <form action="<?= base_url('/login/guardarUsuario'); ?>" method="post" class="space-y-4 text-left text-sm">
      <div>
        <label class="block mb-1 text-gray-300" for="nombre_usuario">Usuario</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Nombre de usuario" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="psw_usuario">Contraseña</label>
        <input type="password" id="psw_usuario" name="psw_usuario" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Contraseña" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="telefono">Correo</label>
        <input type="email" id="correo_usuario" name="correo_usuario" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Correo" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="telefono_usuario">Telefono</label>
        <input type="text" id="telefono_usuario" name="telefono_usuario" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Telefono" required>
      </div>

      <div>
        <label class="block mb-1 text-gray-300" for="password">Restaurante</label>
        <input type="text" id="restaurante" name="restaurante" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" placeholder="Nombre de tu restaurante" required>
      </div>

      <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 rounded transition">
        Registrarse
      </button>
    </form>

  </div>

</body>

</html>