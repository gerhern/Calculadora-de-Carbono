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

            <p class="leading-snug lg:text-2xl text-lg py-8 px-3">De acuerdo a la informacion ingresada por los usuarios de
                esta calculadora podemos observar la cantidad de uso de los siguientes medios de transporte.</p>
            <div class="w-11/12 mx-auto bg-white bg-opacity-80">
                <canvas id="vehicleChart" height="130"></canvas>
            </div>

        </div>

        {{-- segunda grafica --}}
        <div class="py-10 w-full">

            <h3 class="lg:text-5xl text-3xl text-center font-medium italic">¿Estarias dispuesto a cambiar tu medio de transporte habitual?</h3>

            <div class="w-10/12 mx-auto bg-white bg-opacity-80">
                hi
                <canvas id="useChart" width="100" height="100"></canvas>
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

        const useChart = new Chart(ctx2,{
            type:'doughnut',
            data:{
                labels:[
                    'Sí',
                    'No'
                ],
                datasets:[{
                    data:fData.data,
                    backgroundColor:[
                        '#77c9d4',
                        '#57bc90'
                    ]
                }]
            }
        });
    </script>

@endsection
