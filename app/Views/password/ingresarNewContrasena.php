<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Confirmar cambios</title>
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
      <h2 class="text-2xl font-bold text-white mb-2">Confirmar cambios</h2>
      <p class="text-sm text-gray-300 mb-4">Escriba su nueva contraseña segura.</p>

      <!-- Formulario -->
      <form id="passwordForm" class="space-y-4 text-left">
        <!-- Contraseña -->
        <div>
          <label for="password" class="block mb-1 text-gray-300">Nueva contraseña</label>
          <input type="password" id="password" class="w-full p-3 bg-gray-700 border border-gray-600 rounded text-white" placeholder="" required>
        </div>

        <!-- Verificar contraseña -->
        <div>
          <label for="confirmPassword" class="block mb-1 text-gray-300">Confirmar contraseña</label>
          <input type="password" id="confirmPassword" class="w-full p-3 bg-gray-700 border border-gray-600 rounded text-white" placeholder="" required>
        </div>

        <!-- Lista de requisitos -->
        <ul class="text-sm space-y-2" id="password-rules">
          <li id="uppercase" class="flex items-center text-red-400">❌ Una letra mayúscula</li>
          <li id="lowercase" class="flex items-center text-red-400">❌ Al menos una letra minúscula</li>
          <li id="special" class="flex items-center text-red-400">❌ Un carácter especial</li>
          <li id="length" class="flex items-center text-red-400">❌ Un mínimo de 8 dígitos</li>
          <li id="match" class="flex items-center text-red-400">❌ Las contraseñas deben coincidir</li>
        </ul>

        <!-- Botón -->
        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded transition">
          Confirmar Contraseña
        </button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-500 text-center py-4 text-sm">
    <p>© 2024 JAM todos los derechos reservados</p>
  </footer>

  <!-- Validación -->
  <script>
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('confirmPassword');


    const rules = {
      uppercase: {
        regex: /[A-Z]/,
        message: "Una letra mayúscula"
      },
      lowercase: {
        regex: /[a-z]/,
        message: "Al menos una letra minúscula"
      },
      special: {
        regex: /[^A-Za-z0-9]/,
        message: "Un carácter especial"
      },
      length: {
        regex: /.{8,}/,
        message: "Un mínimo de 8 dígitos"
      }
    };

    function updateRule(id, valid) {
      const el = document.getElementById(id);
      const text = el.textContent.replace(/^✔ |^❌ /, '');
      el.textContent = `${valid ? '✔' : '❌'} ${text}`;
      el.classList.remove('text-green-400', 'text-red-400');
      el.classList.add(valid ? 'text-green-400' : 'text-red-400');
    }


    function validatePassword() {
      const pwd = passwordInput.value;
      Object.entries(rules).forEach(([id, {
        regex
      }]) => {
        updateRule(id, regex.test(pwd));
      });

      // Validar coincidencia
      const match = pwd && pwd === confirmInput.value;
      updateRule("match", match);
    }

    passwordInput.addEventListener('input', validatePassword);
    confirmInput.addEventListener('input', validatePassword);
  </script>

</body>

</html>