<?php echo $this->extend('Administrador/plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>

<br><br>


<body class="bg-gray-100 p-6">

    <div class="max-w-6xl mx-auto bg-gray-800  p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center w-full mb-4">
        <h2 class="text-2xl font-bold mb-4 text-white">Tabla de Suscripciones</h2>
        <a href="#" class=" bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow">
            Agregar suscripcion
        </a>
        </div>

        <table class="min-w-full table-auto border border-gray-300 text-sm ">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2   text-center">ID Suscripcion</th>
                    <th class="px-4 py-2   text-center">Descripcion</th>
                    <th class="px-4 py-2   text-center">Precio</th>
                    <th class="px-4 py-2   text-center">Fecha de modificacion</th>
                    <th class="px-4 py-2   text-center">Acciones</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($suscripciones as $suscripcion): ?>

                    <tr class="bg-gray-900">
                        <td class="px-4 py-2 border border-gray-300 "><?php echo $suscripcion['id_suscripcion']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $suscripcion['descripcion']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $suscripcion['precio']; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $suscripcion['fecha_modificacion']; ?></td>
                        <td class="flex display-flex p-3 border border-gray-300 gap-3 justify-center">
                            <a href="<?php echo base_url('/suscripciones/editar/' . $suscripcion['id_suscripcion']); ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow">Modificar</a>
                            <a href="<?php echo base_url('/suscripciones/eliminar/' . $suscripcion['id_suscripcion']); ?>" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow">Eliminar</a>
                        </td>
                    <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</body>

<?php echo $this->endSection(); ?>