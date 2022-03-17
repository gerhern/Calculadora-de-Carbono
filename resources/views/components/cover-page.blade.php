{{-- Imagen y titulo principal --}}
<div class="lg:bg-bottom bg-cover w-full has-tooltip"
style="background-image: url('{{ $img }}')">

<h1 class="text-center lg:text-6xl text-4xl font-semibold my-52 py-12 bg-black bg-opacity-20">{{ $coverText }}</h1>

<x-tooltip-index text="{{ $tooltipText }}"></x-tooltip-index>

</div>