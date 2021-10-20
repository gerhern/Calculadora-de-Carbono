<div class="tooltip bg-forest bg-opacity-80 shadow-2xl my-2 lg:w-7/12 p-4 rounded-md text-xs absolute">
    <p>{{ $text }}</p>
</div>

{{-- Para el correcto funcionamiento de este tooltip debe de encontrarse la clase "has-tooltip" y la clase "relative" en el div padre por ejemplo
    < class ="has-tooltip">
        <x-tooltip-index.blade text="lorem ipsum"></x-tooltip-index.blade>
    </div>"

    de igual forma debe de incluirse los estilos siguientes

    <style>
      .tooltip {
          visibility: hidden;
      }

      .has-tooltip:hover .tooltip {
          visibility: visible;
          z-index: 100;
      }

    </style>
 --}}
