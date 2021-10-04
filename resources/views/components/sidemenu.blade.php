{{-- div sidebar --}}
<div class="sidebar bg-green-800 text-white w-32 space-y-6 py-7 absolute inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out z-10 lg:relative lg:translate-x-0 shadow-xl" >
    <nav class="flex flex-col justify-evenly">
        <a href="{{  route('home') }}" class="py-2 px-4 hover:bg-green-400 transition duration-200">Inicio</a>
        <a href="{{  route('calcular') }}" class="py-2 px-4 hover:bg-green-400 transition duration-200">Calcular</a>
        <a href="{{  route('offset') }}" class="py-2 px-4 hover:bg-green-400 transition duration-200">Compensar</a>
        <a href="#" class="py-2 px-4 hover:bg-green-400 transition duration-200">Reducir</a>
    </nav>
</div>

{{-- resaltar el titulo principal
    efecto visual en las cards
    revisar que los parrafos tienen mayor atencion que los titulos
    subtitulos deben llamar la atencion pero no tanto
    revisar fuentes
    mejor distribucion de la informacion

    revisar combinaciones de colores (paletas)
    
    hacer diseños antes de empezar a escribir codigo--}}