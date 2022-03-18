@extends('app')
@section('content')
    {{-- Contenedor --}}
    <div class="flex flex-col">
        {{-- Contenedor textos --}}
        <div class="mt-20 px-8">
            <h2 class="subtitle--first mx-auto py-4">Cálculo de árboles para
                compensación de carbono</h2>
            <p class="body--second mb-8">¿Te has preguntado cuantos arboles tendrias que plantar para compensar la huella de
                carbono
                que produces?</p>
        </div>

        {{-- Formulario --}}
        <form class="w-11/12 mx-auto border border-gray-scale rounded pt-2">
            <div class="w-full px-3 mb-2">
                <label class="label--">
                    Huella de carbono
                </label>
                <input class="input-- mb-2" type="number" step="0.001" name="footprint" min="0.001" max="2000000"
                    placeholder="Ingrese huella de carbono en toneladas" required>
                <input type="submit" value="Calcular"
                    class="w-full border-2 border-primary-Color text-primary-Color text-center mx-auto py-2 block rounded font-medium bg-white">
            </div>
        </form>

        {{-- Contenedor Errores --}}
        @if ($errors->any())
            <div class="warning--">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Contenedor Resultados --}}
        <div class="w-11/12 mx-auto flex flex-col items-center">
            @isset($data)
                {{-- Texto --}}
                <p class="subtitle--second my-2 py-3 lg:text-2xl w-11/12">Para compensar <span
                        class="text-red-500 font-bold italic">{{ $footprint }} </span> toneladas de CO<sub>2</sub>
                    debes plantar alguno de los siguientes tipos de árboles*.</p>

                {{-- Foreach --}}
                @foreach ($trees as $tree)
                    {{-- Card Arbol --}}
                    <div class="flex justify-evenly items-center w-full border border-gray-scale my-2">
                        {{-- Informacion --}}
                        <div class="text-center flex flex-col w-2/6 py-6">
                            {{-- Nombre y Cantidad --}}
                            <h3 class="font-montserrat font-medium">{{ $tree->name }}</h3>
                            <h3 class="font-montserrat font-light">{{ $data[$tree->id - 1] }}</h3>
                            <p class="font-montserrat font-light">individuos</p>
                            {{-- Costo / Nombre Cientifico --}}
                            @if ($cost[$tree->id - 1])
                                <p class="font-montserrat font-medium text-sm">Con un costo total de:</p>
                                <p class="font-montserrat font-light">${{ $cost[$tree->id - 1] }}</p>
                            @else
                                <p class="font-montserrat font-medium text-sm">Nombre científico:</p>
                                <p class="font-montserrat font-light">{{ $tree->scientific_name }}</p>
                            @endif
                            {{-- Absorcion --}}
                            <p class="font-montserrat font-medium text-sm">Capacidad de absorcion:</p>
                            <p class="font-montserrat font-light">{{ $tree->absorption_capacity }} kg/año
                            </p>
                        </div>
                        {{-- Imagen Y Tooltip --}}
                        <div class="w-32 h-52 bg-cover bg-center rounded flex items-end"
                            style="background-image: url('{{ $tree->url_img }}')">
                            <p class="img--tooltip px-4 opacity-0 hover:opacity-100 break-all">Fotografia de:
                                {{ $tree->author_img }}</p>
                        </div>
                    </div>
                @endforeach

                {{-- Formula --}}
                <p class="reference--">Para llegar a la cantidad estimada de árboles de
                    compensación de huella de carbono se uso la siguiente metodología.</p>

                <p class="reference--">1.-Se realiza la conversión de toneladas a
                    kilogramos de CO<sub>2</sub> ingresadas por el usuario (ej. 128 ton = (128 * 1,000) por lo tanto
                    128 ton = 128,000 kg).</p>
                <p class="reference--">2.-Se toma como referencia la capacidad de absorción
                    por especie en un periodo de un año (ej. Roble -> capacidad de absorción = 229.28 kg/año).</p>
                <p class="reference--">3.-Se divide la huella de carbono total en
                    kilogramos entre la capacidad de absorción de la especie seleccionada (ej. Cantidad de robles =
                    (128,000 / 229.28) por lo tanto 128,000 kg = 558.2693 robles ).</p>
                <p class="reference--">4.-Dado que no se pueden plantar fracciones de
                    árboles se redondea el resultado (ej. 558.2693 -> 558 robles).</p>

                {{-- Referencias --}}
                <p class="reference--">-Para plantar árboles debes de asegurarte que los
                    especímenes no tengan plagas o enfermedades y estos tengan una altura óptima de entre 1 metro a 1.5
                    y no
                    menor a 60 centímetros de altura, esto para garantizar la supervivencia de los mismos.</p>

                <p class="caption--text my-3">*La capacidad de absorción de carbono
                    puede variar dependiendo del crecimiento del individuo, su diámetro a la altura del pecho (DAP) y a
                    la
                    zona donde se localiza.</p>
                <p class="reference--">Fuente: Guía para la plantación de árboles del municipio de
                    Mérida(2018)/
                    <a class="underline"
                        href="http://www.merida.gob.mx/sustentable/contenidos/doc/guia-de-plantacion-de-arboles.pdf">Guia-de-plantacion-de-arboles.pdf</a>
                </p>

                {{-- Boton --}}
                <p class="subtitle--second my-4 w-11/12">¿Te gustaria conocer otras formas más sencillas (y económicas)
                    de poder
                    ayudar?</p>
                <x-button route="{{ route('offset') }}" text="Da click aquí"></x-button>
            @endisset
        </div>

    </div>{{-- Fin Contenedor --}}
@endsection
