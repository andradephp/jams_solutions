<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar suscrpcion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-200 font-sans flex items-center justify-center min-h-screen">

    <div class="bg-gray-800 p-4 rounded-lg shadow-lg w-full max-w-sm text-center">

        <!-- Logo -->
        <div class="mb-4">
            <img src="ruta-a-tu-logo.png" alt="Logo de la empresa" class="mx-auto h-14">
        </div>

        <h2 class="text-xl font-bold text-white mb-5">Editar suscripcion</h2>
        


        <form action="<?php echo base_url('/suscripciones/actualizar/' . $suscripcion['id_suscripcion']); ?>" method="post" class="space-y-4 text-left text-sm">
            <div>
                <label class="block mb-1 text-gray-300" for="descripcion">Descripcion</label>
                <input type="text" id="descripcion" name="descripcion" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" value="<?php echo esc($suscripcion['descripcion']); ?>" placeholder="Descripcion" required>
            </div>
            <div>
                <label class="block mb-1 text-gray-300" for="precio">Precio</label>
                <input type="text" id="precio" name="precio" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" value="<?php echo esc($suscripcion['precio']); ?>" placeholder="Precio suscripcion" required>
            </div>
            <div>
                <label class="block mb-1 text-gray-300" for="suscripcion">Fecha de modificacion</label>
                <input type="text" id="fecha_modificacion" name="fecha_modificacion" class="w-full p-2.5 bg-gray-700 border border-gray-600 rounded text-white" value="<?php echo esc($suscripcion['fecha_modificacion']); ?>" placeholder="Fecha de modificacion (2025-06-01 00:00:00)" required>
            </div>



            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 rounded transition">
                Modificar
            </button>
        </form>

    </div>

</body>

</html>