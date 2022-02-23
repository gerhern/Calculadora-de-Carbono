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
                {{-- area grafica --}}
            <div>
                {{-- grafica --}}
                <div class="lg:w-10/12 mx-auto bg-white bg-opacity-80">
                    <canvas id="vehicleChart"></canvas>
                </div>
                {{-- tags --}}
                <div class="lg:flex justify-evenly bg-black lg:w-10/12 mx-auto bg-opacity-80 p-4">
                   <p>A -> Taxi</p>
                   <p>B -> Autobús</p>
                   <p>C -> Automóvil Grande (Gasolina)</p>
                   <p>D -> Automóvil Mediano (Gasolina)</p>
                   <p>E -> Motocicleta</p>
                </div>
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

            <div class="lg:flex text-center">
                <div
                    class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex flex-col justify-evenly items-center hover:bg-marine transition duration-200">
                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">México</h3>
                    <div class="mx-auto my-2 flex justify-center">
                        <x-svg-footprint width="55"></x-svg-footprint>
                    </div>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: 4
                        Toneladas</p>
                </div>

                <div
                    class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">
                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">El mundo</h3>
                    <div class="mx-auto my-2 flex justify-center">
                        <x-svg-footprint width="60"></x-svg-footprint>
                    </div>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: 4.5
                        Toneladas</p>
                </div>

                <div
                    class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">
                    <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">ArtfCO2</h3>
                    <div class="mx-auto my-2 flex justify-center">
                        <x-svg-footprint width="55"></x-svg-footprint>
                    </div>
                    <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Huella de carbono promedio: {{ $avgFootprint }}
                        Toneladas</p>
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
                labels: 'ABCDE',
                datasets: [{
                    label:cData.label[0],
                    data: [cData.data[0], null, null, null, null],
                    backgroundColor: ['#ce93d8'],
                    borderWidth: 1,
                {   
                    label:cData.label[1],
                    data: [null,cData.data[1], null, null, null],
                    backgroundColor: ['#ba68c8'],
                    borderWidth: 1,
                },
                {   
                    label:cData.label[2],
                    data: [null, null, cData.data[2], null, null],
                    backgroundColor: ['#ab47bc'],
                    borderWidth: 1,
                },
                {   
                    label:cData.label[3],
                    data: [null, null, null, cData.data[3], null],
                    backgroundColor: ['#9c27b0'],
                    borderWidth: 1,
                },
                {   
                    label:cData.label[4],
                    data: [null, null, null, null, cData.data[4]],
                    backgroundColor: ['#8e24aa'],
                    borderWidth: 1,
                }
                ],
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Medio de transporte',
                            color: 'black',
                            font: {
                                family: 'Nunito',
                            },
                        },
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: '# de usos',
                            color: 'black',
                            font: {
                                family: 'Nunito',
                            },
                        },
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend:{
                        display:false
                    }
                }
            }
        });

        //Segunda grafica
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
            },
            options:{
                layout:{
                    padding:16
                },
                plugins:{
                    legend:{
                        position:'bottom',
                        labels:{
                            color:'black',
                            font:{
                                family:'Nunito',
                                size:25
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
