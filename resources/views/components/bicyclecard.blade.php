<div
    class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-10/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">

    <a href="{{ $link }}" target="_blank">
        <img src="{{ $img }}" alt="{{ $alt }}"
            class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4">
        <h3 class="text-lg font-semibold lg:text-xl lg:my-4 lg:text-center leading-none">{{ $title }}</h3>

        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">{{ $description }}</p>
    </a>

</div>
