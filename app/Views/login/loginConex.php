<?php 
/* Modificar login */
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 p-6">
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300 rounded shadow">
        <thead>
          <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">#</th>
            <th class="py-3 px-6 text-left">First</th>
            <th class="py-3 px-6 text-left">Last</th>
            <th class="py-3 px-6 text-left">Handle</th>
            <th class="py-3 px-6 text-left">Email</th>
          </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
          <?php foreach($conexion as $users): ?>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="py-3 px-6"><?php echo $users->id_usuario; ?></td>
              <td class="py-3 px-6"><?php echo $users->nombre_usuario; ?></td>
              <td class="py-3 px-6"><?php echo $users->apellido_usuario; ?></td>
              <td class="py-3 px-6"><?php echo $users->telefono_usuario; ?></td>
              <td class="py-3 px-6"><?php echo $users->email_usuario; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
