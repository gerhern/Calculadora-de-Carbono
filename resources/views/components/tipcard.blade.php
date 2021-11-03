<div  class="container mx-auto bg-cover bg-center object-fill lg:my-16 my-8 has-tooltip"
    style="background-image: url({{ $img }})">

    <div class="h-auto text-white lg:py-32 py-16 px-10 bg-black bg-opacity-60 hidden" id="card{{$card}}">

        <p class="lg:text-3xl text-xl font-bold my-2 leading-none">{{ $title }}</p>
        <p class="lg:text-2xl text-lg mb-10 leading-tight">{{ $description }}</p>
        
        
        @if ($link ?? '')
        <x-button
        route="{{$link}}"
        text="Conoce más"></x-button>
        @endif
        
        <x-tooltip-coin-card text="{{ $author }}"></x-tooltip-coin-card>
    </div>
</div>
