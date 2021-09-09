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

<body class=" py-6 bg-gradient-to-b from-blue-200 to-green-600 lg:h-screen">
    {{-- div principal --}}
    <div class="w-3/4 border border-black mx-auto p-4 rounded-md shadow-md">

        {{-- div de formulario de calculo --}}
        <div class=" w-2/3 py-4 px-2 mx-auto">
            <h2 class=" text-center text-xl mb-6">Cálculo de árboles para compensación de carbono</h2>
            <form class="flex flex-col ">
                <label class="text-xl">Huella de carbono *</label>
                <input type="number" step="0.001" name="footprint" placeholder="Ingrese huella de carbono en toneladas"
                    class="border border-black p-2 rounded-md shadow-md mb-6" value="{{ old('footprint') }}">
                <input type="submit" value="Calcular"
                    class="rounded-md shadow-md bg-blue-500 text-white mx-auto p-2">
            </form>
        </div>

        {{-- div de muestra de errores --}}
        @if ($errors->any())
            <div class="text-center w-2/3 mx-auto p-4 bg-red-400 text-white rounded-md shadow-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- div de muestreo de resultados --}}
        <div>
            <h2 class=" text-center text-xl">Para compensar tu huella de carbono necesitas plantar:</h2>


            @isset($data)
                <table class="table-fixed border-collapse border border-black mx-auto text-center shadow-lg">
                    <tr class="text-lg border border-black bg-gray-300">
                        <th class="w-1/2">#</th>
                        <th class="w-1/2">Especie</th>

                    </tr>
                    @foreach ($data as $name => $tree)
                        <tr class="text-md">
                            <td class="border border-black">{{ $tree }}</td>
                            <td class="border border-black px-4"> {{ $name }}</td>
                        </tr>
                    @endforeach
                </table>
            @endisset
        </div>

    </div>

</body>

</html>
