{{-- div card --}}
<div class="my-2 lg:my-8 border border-black w-11/12 lg:w-3/12 lg:mx-6 bg-center bg-cover rounded-md shadow-xl"
    style="background-image: url('{{ $img }}')">
    <div class="bg-black bg-opacity-60 w-full p-4 ">
        <h3 class=" text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">{{ $title }}</h3>

        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2 py-4">{{ $description }}</p>
    </div>


</div>
