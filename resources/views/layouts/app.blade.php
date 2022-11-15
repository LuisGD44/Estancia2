<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerOld - @yield('')</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="/your-path-to-your-compiled-css-including-fontawesome/file.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function alertaCita() {  
            alert("Se Agendo tu cita correctamente");
        } 
    </script>
     <script>
        function alertacomentario() {  
            alert("Gracias por tu comentario!!!");
        } 
    </script>

<script>
        function alertaRegistrar() {  
            alert("Se registro el empleado exitosamente");
        } 
    </script>


</head>
<body >
    <header class="p-5 border-b bg-whithe shadow" >
    <div class="contairner mx-auto flex justify-between items-center">
    <h1 class="text-3xl font-black">
      PowerOld
    </h1>

    @if(auth()->user())

    <a href="{{ route('logout') }}" class="font-blod uppercase text-gray-600 text-sm">
      Cerrar Sesion
    </a>

    @else
    
    <a href="{{ route('login') }}" class="font-blod uppercase text-gray-600 text-sm">
      Login
    </a>
    <a href="{{ route('register') }}" class="font-blod uppercase text-gray-600 text-sm">
      Registrarse
    </a>
    
    @endif

    <nav class="flex gap-2 items-center">
      <a class="font-bold uppercase text-gray-600" href="{{url('index')}}">Inicio</a>
      <a class="font-bold uppercase text-gray-600" href="{{url('about')}}">Quienes somos</a>
      <a class="font-bold uppercase text-gray-600" href="{{url('cita')}}">Agendar cita</a>
      <a class="font-bold uppercase text-gray-600" href="{{url('comentarios')}}">Enviar comentarios</a>
      
      </div>
      </header>



    </nav>
    <main class="contairner mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10"></h2>
        @yield('titulo')
  

       @yield('contenido')
        
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
   <a href="https://www.facebook.com/poweroldschoolbarbershop/"><div><i class="fa-brands fa-facebook"></i>facebook</div></a>
   <a href="https://wa.me/526188064838"><div><i class="fa-brands fa-facebook"></i>Whatsapp</div></a>
    Power Old School babershop-Todos los derechos reservados
     @php echo date ('Y')
      @endphp    
    </footer>

</body>
</html>