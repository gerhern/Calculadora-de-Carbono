<div id="{{ $slide }}" class="container has-tooltip relative">
    <div class="flex justify-evenly">
        <img src="{{ $img1 }}"
            class="w-5/6 lg:w-5/12 hidden lg:block mx-auto rounded-md shadow-2xl">

        <img src="{{ $img2 }}"
            class="w-5/6 lg:w-5/12 mx-auto rounded-md shadow-2xl block">
    </div>

    <x-tooltip-slide text="{{ $tooltip }}"></x-tooltip-slide>
</div>