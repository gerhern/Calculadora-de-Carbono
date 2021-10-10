@extends('app')
@section('content')
    <div class="text-white bg-feather">

        <x-hammenu></x-hammenu>

        {{-- div de formulario de calculo --}}
        <div class="">
            {{-- Titulo --}}
            <div class="">
                        <h2 class="  py-16 px-10 text-center text-2xl mb-6 lg:text-5xl italic">Cálculo de árboles para
            compensación de carbono</h2>
        </div>

        {{-- Formulario --}}
        <form class="w-11/12 mx-auto max-w-lg lg:max-w-none bg-forest bg-opacity-30 p-3">
            <div class="flex flex-wrap -mx-3 lg:flex-col">
                <div class="w-full lg:w-1/2 px-3 mb-6 lg:mb-0">
                    <label class=" text-white block uppercase tracking-wide text-xs font-bold mb-2" for="grid-first-name">
                        Huella de carbono*
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-forest rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        type="number" step="0.001" name="footprint" placeholder="Ingrese huella de carbono en toneladas">

                </div>
                <input type="submit" value="Calcular"
                    class="rounded-md shadow-lg bg-forest text-white mx-6 p-2 lg:text-lg hover:bg-marine transition duration-200 lg:w-1/12">
            </div>
        </form>
    </div>

    {{-- div de muestra de errores --}}
    @if ($errors->any())
        <div
            class="text-center w-2/3 mx-auto my-6 p-4 bg-red-600 text-white rounded-md shadow-md lg:text-2xl text-xl lg:w-1/3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- div de muestreo de resultados --}}
    <div class="bg-gradient-to-b from-marine to-forest mt-6 p-3">

        @isset($data)

            <p class=" text-center text-xl my-2 py-3 lg:text-2xl">Para compensar <span
                    class="text-forest font-bold italic">{{ $footprint }} </span> toneladas de CO<sub>2</sub>
                debes plantar uno de los siguientes tipos de árboles/cultivos.</p>

            {{-- Tablas --}}
            <div class="lg:flex lg:justify-evenly lg:items-center ">

                {{-- Tabla1 --}}
                <div class="my-2 lg:w-5/12">
                    <table class="table-fixed border-collapse border border-black mx-auto text-center shadow-lg lg:text-xl">
                        <tr class="text-lg border border-black bg-forest">
                            <th class="w-1/2">#</th>
                            <th class="w-1/2">Especie</th>

                        </tr>
                        @foreach ($data['trees'] as $name => $tree)
                            <tr class="text-md bg-forest bg-opacity-30">
                                <td class="border border-black">{{ $tree }}</td>
                                <td class="border border-black px-4"> {{ $name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                {{-- tabla 2 --}}
                <div class="my-6 lg:w-5/12">
                    <table class="table-fixed border-collapse border border-black mx-auto text-center shadow-lg lg:text-xl">
                        <tr class="text-lg border border-black bg-forest">
                            <th class="w-1/2">#</th>
                            <th class="w-1/2">Especie</th>

                        </tr>
                        @foreach ($data['cultures'] as $name => $tree)
                            <tr class="text-md bg-forest bg-opacity-30">
                                <td class="border border-black">{{ $tree }}</td>
                                <td class="border border-black px-4"> {{ $name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>

            {{-- Aclaraciones --}}
            <div class="bg-forest bg-opacity-30 border border-black rounded-md shadow-xl py-2 px-4  lg:w-3/4 lg:mx-auto">
                <h2 class="text-center text-xl lg:text-2xl">* La cantidad de árboles deben ser
                    plantados por un periodo de un año.</h2>

                <h2 class=" text-center text-xl my-6 lg:text-2xl">* Las plantas de cultivo deben ser plantadas desde
                    nacimiento hasta maduracion.</h2>
            </div>
            {{-- boton de compensar --}}
            <a href="{{ route('offset') }}" class=""><p class=" lg:w-1/4 lg:mx-auto mx-4 rounded-md shadow-md bg-forest
                text-white text-center lg:text-2xl text-lg hover:bg-marine transition duration-200 p-4 mt-16 mb-8 ">Compensar</p></a>



            @endisset
        </div>

        </div>
@endsection
