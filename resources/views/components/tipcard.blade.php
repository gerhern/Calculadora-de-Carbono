{{-- div card
<div class="my-2 lg:my-8 border border-black w-11/12 lg:w-3/12 lg:mx-6 bg-center bg-cover rounded-md shadow-xl"
    style="background-image: url('{{ $img }}')">
    <div class="bg-black bg-opacity-60 w-full p-4 ">
        <h3 class=" text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">{{ $title }}</h3>

        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2 py-4">{{ $description }}</p>
    </div>


</div> --}}

<div id="card{{$card}}" class="container mx-auto bg-cover bg-center object-fill my-16 hidden"
    style="background-image: url({{ $img }})">

    <div class="h-auto text-white py-32 px-10 bg-black bg-opacity-60">

        <p class="text-3xl font-bold">{{ $title }}</p>
        <p class="text-2xl mb-10 leading-none">{{ $description }}</p>
        {{-- <a href="#"
            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
            us</a> --}}

    </div> <!-- container -->
</div>
