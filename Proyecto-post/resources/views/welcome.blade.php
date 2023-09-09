<!-- component -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALUD 360</title>
    <!-- Agregar el enlace al archivo de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Agregar el enlace al archivo de la biblioteca FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navegación lateral -->
    <aside class="bg-gray-800 text-white w-72 min-h-screen p-4">
        <nav>
            <li
            class="font-semibold flex items-center space-x-4 text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white text-3xl pl-20 pt-60 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20">
                <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd" />
              </svg>
            </li>

            <ul>
                    <div class="flex items-center justify-between p-2 ">

                        @if (Route::has('login'))
                            @auth
                    <li href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Home</li>
                @else
                <ul class="space-y-2">
                    <li class="opcion-con-desplegable">
                    <a href="{{ route('login') }}"
                        class="font-semibold flex items-center space-x-4 text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white text-3xl pl-4 pt-8 ">
                        <svg class="flex-shrink-0 w-8 h-8 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                         </svg>
                         <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                        </a>

                    @if (Route::has('register'))
                    <li class="opcion-con-desplegable">

                        <a href="{{ route('register') }}"
                            class="flex items-center space-x-4 font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-3xl pl-4 pt-10">

                           <svg class="flex-shrink-0 w-8 h-8 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                         </svg>
                         <span class="flex-1 ml-3 whitespace-nowrap">Registrarse</span>
                        </a>
                    @endif
                @endauth
                </div>
                @endif


                <!-- Agrega más enlaces para la navegación lateral -->
            </ul>
        </nav>
    </aside>


</body>

</html>
