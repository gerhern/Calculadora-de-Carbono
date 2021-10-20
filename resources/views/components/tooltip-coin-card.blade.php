<div class="tooltip text-xs my-10">
    <p>{{ $text }}</p>
</div>

{{-- Para el correcto funcionamiento de este tooltip debe de encontrarse la clase "has-tooltip en el div padre por ejemplo
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
