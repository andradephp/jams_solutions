  <body class="bg-gray-900 text-gray-200 font-sans">

    <!-- Menú -->
    <header class="bg-gray-800 shadow">
      <div
        class="container mx-auto px-4 flex justify-between items-center py-4">
        <div class="flex items-center space-x-3">
          <img src="Views/LogosRos/logoColor.PNG" alt="Logo"
            class="h-10 w-10 object-contain">
          <h1 class="text-xl font-bold text-white">Restaurant Optimization
            System</h1>
        </div>
        <!-- Botón hamburguesa -->
        <button id="menu-btn" class="md:hidden text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <!-- Menú normal en desktop -->
        <nav id="menu" class="hidden md:flex space-x-6 text-gray-300 pr-10">
          <a href="<?php echo base_url('/Administrador');?>"
            class="hover:text-red-500 transition-colors duration-200">Home</a>
          <a href="<?php echo base_url('/usuarios');?>"
            class="hover:text-red-500 transition-colors duration-200">Usuarios</a>
          <a href="<?php echo base_url('/suscripciones');?>"
            class="hover:text-red-500 transition-colors duration-200">Suscripciones</a>


        </nav>
      </div>
      
    </header>