{{-- Imagen y titulo principal --}}
<div class="bg-cover w-full has-tooltip h-80"
style="background-image: url('{{ $img }}')">

<h1 class="title--h5 w-9/12 mx-auto">{{ $coverText }}</h1>

<x-tooltip-index text="{{ $tooltipText }}"></x-tooltip-index>

</div>