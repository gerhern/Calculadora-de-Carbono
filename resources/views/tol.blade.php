<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artf Co2</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class=" py-6 bg-gradient-to-b from-blue-200 to-green-600 bg-fixed">
    {{-- div principal --}}
    <div class="p-4">

        {{-- div de formulario de calculo --}}
        <div class=" w-2/3 py-4 px-2 mx-auto">
            <h2 class=" text-center text-xl mb-6 lg:text-5xl">Cálculo de árboles para compensación de carbono</h2>
            <form class="flex flex-col ">
                <label class="text-xl lg:text-2xl">Huella de carbono *</label>
                <input type="number" step="0.001" name="footprint" placeholder="Ingrese huella de carbono en toneladas"
                    class="border border-black p-2 rounded-md shadow-md mb-6 lg:text-xl">
                <input type="submit" value="Calcular" class="rounded-md shadow-md bg-blue-500 text-white mx-auto p-2 lg:text-lg hover:bg-blue-800">
            </form>
        </div>

        {{-- div de muestra de errores --}}
        @if ($errors->any())
            <div class="text-center w-2/3 mx-auto p-4 bg-red-500 text-white rounded-md shadow-md lg:text-lg lg:w-1/3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- div de muestreo de resultados --}}
        <div>
            {{-- <h2 class=" text-center text-xl">Para compensar tu huella de carbono necesitas plantar:</h2> --}}


            @isset($data)
            <h2 class=" text-center text-xl mb-2 lg:text-2xl">Para compensar {{ $footprint }} toneladas de CO<sub>2</sub> debes plantar uno de los siguientes tipos de árboles/cultivos.</h2>
            <div class="lg:flex lg:justify-evenly ">
                <div class="my-2 lg:w-5/12">
                    
                    <table class="table-fixed border-collapse border border-black mx-auto text-center shadow-lg lg:text-xl">
                        <tr class="text-lg border border-black bg-gray-300">
                            <th class="w-1/2">#</th>
                            <th class="w-1/2">Especie</th>
    
                        </tr>
                        @foreach ($data['trees'] as $name => $tree)
                            <tr class="text-md">
                                <td class="border border-black">{{ $tree }}</td>
                                <td class="border border-black px-4"> {{ $name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="my-6 lg:w-5/12">
                    
                    <table class="table-fixed border-collapse border border-black mx-auto text-center shadow-lg lg:text-xl">
                        <tr class="text-lg border border-black bg-gray-300">
                            <th class="w-1/2">#</th>
                            <th class="w-1/2">Especie</th>
        
                        </tr>
                        @foreach ($data['cultures'] as $name => $tree)
                            <tr class="text-md">
                                <td class="border border-black">{{ $tree }}</td>
                                <td class="border border-black px-4"> {{ $name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                
            </div>

            <div class="">
                <h2 class=" text-center text-xl mb-2 lg:text-2xl">* La cantidad de árboles deben ser plantados por un periodo de un año.</h2>
                <h2 class=" text-center text-xl mb-2 lg:text-2xl">* Las plantas de cultivo deben ser plantadas desde nacimiento hasta maduracion.</h2>
            </div>

            <div class="mt-6 w-3/4 p-4 bg-blue-500 text-white rounded-md shadow-md mx-auto text-center lg:text-xl lg:w-1/6 hover:bg-blue-800">
                <a href="{{ route('offset') }}">Compensar huella</a>
            </div>
            


            @endisset
        </div>

    </div>

</body>

</html>
