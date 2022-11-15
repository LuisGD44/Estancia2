@extends('layouts.app')

@section('titulo')
<section class="section">
<!-- component -->
<!-- This is an example component -->
<div class="max-w-3xl max-h-3xl mx-auto">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative  rounded-lg sm:h-64 xl:h-80 2xl:h-96" style="height:768px;">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="{{ asset('img/oferta.png')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/Oferta2.jpg')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/HorariosDeServicio.jpg')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/Servicio.jpg')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Anterior</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Siguiente</span>
            </span>
        </button>
</div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>
</section>
<section class="section bg-light">
    <div class="container py-4">
        <h2 class="h4 text-center m-8">Conoce nuestras sucursales </h2>
        <div class="row">
            <div class="col-lg-6">
            <h5 class="text-center">Calle zacatecas #1005. Col morga</h5>
            <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5009205288297!2d-104.68823408537038!3d24.048658483234593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc9b4f6194a81%3A0x1c356a9949bae7b7!2sZacatecas%201005%2C%20Morga%2C%2034010%20Durango%2C%20Dgo.!5e0!3m2!1ses-419!2smx!4v1666323936162!5m2!1ses-419!2smx"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
            </div>
            <div class="col-lg-6">
            <h5 class="text-center">Calle zacatecas #715. Col morga</h5>
            <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5513651185456!2d-104.68645738537032!3d24.046880783303173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc9b53b213085%3A0x97b6bf9fe06bccee!2sZacatecas%20715%2C%20Morga%2C%2034010%20Durango%2C%20Dgo.!5e0!3m2!1ses-419!2smx!4v1666323996546!5m2!1ses-419!2smx" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>
<section class="section" id="news">
    <div class="container">
        <h2 class="h4 text-center mt-2">Trabajos realizados por nosotros</h2>
        <br><br>
        <div class="row">
        <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/cor.jpg')}}" class="card-img-top" alt="...">
             
        </div>
        </div>
        <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/ejemplo.jpg')}}" class="card-img-top" alt="...">
             
        </div>
        </div>
        <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/corte.jpg')}}" class="card-img-top" alt="...">
            
        </div>
        </div>
        <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/corte.png')}}" class="card-img-top" alt="...">
            
        </div>
        </div>
        </div>
    </div>
</section>
@endsection