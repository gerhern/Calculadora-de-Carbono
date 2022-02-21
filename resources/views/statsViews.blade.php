@extends('app')
@section('content')
    {{-- div principal --}}
    <div class="flex flex-col text-white bg-gradient-to-b from-feather via-marine to-forest">

        {{-- Titulo principal --}}
        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-32">Estadísticas</h1>

        </div>

        {{-- primer grafica --}}
        <div class="py-10">

            <h3 class="lg:text-5xl text-3xl text-center font-medium italic">Medio de transporte más usado</h3>

            <p class="leading-snug lg:text-xl text-lg py-8 px-3">De acuerdo a la informacion ingresada por los usuarios de
                esta calculadora podemos observar la cantidad de uso de los siguientes medios de transporte.</p>
            <div class="w-10/12 mx-auto bg-white bg-opacity-80">
                <canvas id="vehicleChart"></canvas>
            </div>

        </div>

        {{-- segunda grafica --}}
        <div class="py-10 w-full">

            <h3 class="lg:text-5xl text-3xl text-center font-medium italic">¿Estarias dispuesto a cambiar tu medio de
                transporte habitual?</h3>

            <div class="w-10/12 mx-auto bg-white bg-opacity-80">
                <canvas id="useChart"></canvas>
            </div>

        </div>

        {{-- Tercera grafica --}}
        <div class="py-10 w-full">
            <h3 class="lg:text-5xl text-3xl text-center font-medium italic ">Huella de carbono</h3>

            <div class="flex">
                <div class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">
                        <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">México</h3>
                        <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: 4 Toneladas</p>
                </div>
    
                <div class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">
                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">El mundo</h3>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: 4.5 Toneladas</p>
                </div>

                <div class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">
                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">ArtfCO2</h3>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: 10 Toneladas</p>
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>

    <script>
        const cData = JSON.parse(`<?php echo $data; ?>`);
        const fData = JSON.parse(`<?php echo $footprint; ?>`);

        const ctx = document.getElementById('vehicleChart').getContext('2d');
        const ctx2 = document.getElementById('useChart').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: cData.label,
                datasets: [{
                    label: '# de viajes',
                    data: cData.data,
                    backgroundColor: [
                        '#ce93d8',
                        '#ba68c8',
                        '#ab47bc',
                        '#9c27b0',
                        '#8e24aa'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
            }
        });

        const useChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: [
                    'Sí',
                    'No'
                ],
                datasets: [{
                    data: fData.data,
                    backgroundColor: [
                        '#77c9d4',
                        '#57bc90'
                    ]
                }]
            }
        });
    </script>

@endsection
