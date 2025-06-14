<?php echo $this->extend('Administrador/plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>

<br><br>


<body class="bg-gray-100 p-6">

    <div class="max-w-6xl mx-auto bg-gray-800  p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-white">Tabla de Usuarios</h2>

        <table class="min-w-full table-auto border border-gray-300 text-sm ">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2   text-center">ID Usuario</th>
                    <th class="px-4 py-2   text-center">Usuario</th>
                    <th class="px-4 py-2   text-center">Contraseña</th>
                    <th class="px-4 py-2   text-center">Correo</th>
                    <th class="px-4 py-2   text-center">Teléfono</th>
                    <th class="px-4 py-2   text-center">Restaurante</th>
                    <th class="px-4 py-2   text-center">Rol</th>
                    <th class="px-4 py-2   text-center">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>

                    <tr class="bg-gray-900">
                        <td class="px-4 py-2 border border-gray-300 "><?php echo $usuario['id_usuario']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $usuario['nombre_usuario']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $usuario['psw_usuario']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $usuario['correo_usuario']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $usuario['telefono_usuario']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $usuario['restaurante']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $usuario['id_rol']; ?></td>
                        <td class="flex display-flex p-3 border border-gray-300 gap-3">
                            <a href="<?php echo base_url('/usuarios/editar/' . $usuario['id_usuario']); ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow">Modificar</a>
                            <a href="<?php echo base_url('/usuarios/eliminar/' . $usuario['id_usuario']); ?>" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow">Eliminar</a>
                        </td>
                    <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</body>

<?php echo $this->endSection(); ?>