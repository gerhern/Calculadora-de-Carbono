@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}

        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-32 italic">El ferrocarril como medio de transporte
            </h1>
        </div>


        {{-- 1 seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            {{-- ferrocarril --}}
            <div class="flex lg:flex-row flex-col items-center lg:items-start">

                {{-- info --}}
                <div class="lg:w-9/12 px-6 flex flex-col items-center">

                    {{-- Img1 --}}
                    <div class="lg:w-11/12 mt-16 has-tooltip">
                        <img src="https://www.eluniversal.com.mx/sites/default/files/2020/10/29/tren_tolluca.jpg"
                            alt="Tren_Mexico-Toluca" class="rounded-md shadow-2xl">
                        <x-tooltip-index text="Fotografía de: Jorge Alvarado/EL UNIVERSAL"></x-tooltip-index>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <p class="leading-tight lg:text-2xl text-xl py-8 px-3 ">Entre la gran variedad de transportes
                            terrestres el ferrocarril es uno de los mas destacados ya que cuenta con ventajas como bajas
                            emisiones de gases de efecto invernadero o la capacidad de transportar cargas voluminosas, entre
                            otras mas de las que aqui hablaresmos a continuacion.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start p-3">Ecológico</h5>
                        <p class="leading-tight lg:text-xl text-lg  p-3">El ferrocarril es uno de los medios de transporte con menor tasa de emisiones de gases contaminantes, emitiendo .   </p>


                    </div>

                    
                </div>

                {{-- aside --}}
                <div class=" flex flex-col items-center  lg:w-3/12">

                    <h5 class=" my-10 text-3xl self-start px-8 text-center">¿Deseas mover cargamento?</h5>

                    <x-bicyclecard link="http://www.ferromex.com.mx/ferromex-lo-mueve/ferromex-lo-mueve.jsp"
                        img="http://www.ferromex.com.mx/img/logo-gmxt-blanco-footer.png" alt="Ferromex"
                        title="Grupo México Transportes (GMxT) "
                        description="División de transporte de Grupo México, entre sus servicios se encuentra el transporte de mercancías.">
                    </x-bicyclecard>

                    <x-bicyclecard
                        link="https://www.kcsouthern.com/es-mx/ship-with-us/explore-shipping-options/carload"
                        img="https://www.kcsouthern.com/application/themes/kcs/images/kcs-logo-stacked.png"
                        alt="Kansas_city_Southern"
                        title="Kansas City Southern"
                        description="Empresa ferroviaria dedicada al transporte de cargas con servicio de transporte entre ciudades del noreste y centro de México y algunos estados de EE.UU."
                    ></x-bicyclecard>

                    <h5 class=" my-10 text-3xl self-start px-8">Principales proyectos ferroviarios en México</h5>
                    <x-bicyclecard link="https://www.trenmaya.gob.mx"
                        img="https://www.elfinanciero.com.mx/resizer/LG_I7rWQDa6nUvG5A_i0gj1Cgv4=/1440x810/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/elfinanciero/2QNDR6O2QJCSHK4EMXF7P7P3JI.jpg"
                        alt="Tren_Maya" title="Tren Maya (1500 km)"
                        description="Cerca de 1,500 kilómetros de tren que conectarán las principales regiones de la península de Yucatán, desde sus grandes centros turísticos hasta sus comunidades rurales.">
                    </x-bicyclecard>

                    <x-bicyclecard link="http://treninterurbano.cdmx.gob.mx"
                        img="https://www.sct.gob.mx/fileadmin/DireccionesGrales/DGTFM/Proyectos_Pasajeros/Mex-Tca/Imagenes/TIMT.png"
                        alt="Tren_México_Toluca" title="Tren Interurbano México-Toluca (57 km)"
                        description="El Tren Interurbano Toluca-Valle de México es un proyecto que conectará la Zona Metropolitana del Valle de Toluca con el poniente de la Ciudad de México.">
                    </x-bicyclecard>

                    <x-bicyclecard
                        link="http://www5.diputados.gob.mx/index.php/camara/Centros-de-Estudio/CESOP/Novedades/Carpeta-informativa.-El-proyecto-del-tren-transistmico"
                        img="https://www.elfinanciero.com.mx/resizer/iWZk3eu0AtTgGVRuzzIl_ntj6Gk=/800x0/filters:format(png):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/elfinanciero/VZR5LVWMMWABSNPYEEELI4P2FY.png"
                        alt="Tren_transístmico" title="Tren Transístmico (300 km)"
                        description="El Ferrocarril del Istmo de Tehuantepec podrá transportar contenedores y pasajeros, a fin de conectar los puertos de Salina Cruz, en Oaxaca y Coatzacoalcos, en Veracruz.">
                    </x-bicyclecard>

                    
                </div>

            </div>
        </div>
    </div>
@endsection
