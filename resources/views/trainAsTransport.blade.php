@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}

        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="first--title my-32">El ferrocarril como medio de transporte
            </h1>
        </div>


        {{-- 1 seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            {{-- ferrocarril --}}
            <div class="flex lg:flex-row flex-col items-center lg:items-start">

                {{-- info --}}
                <div class="lg:w-9/12 p-6 flex flex-col items-center">

                    {{-- Img1 --}}
                    <div class="lg:w-11/12 mt-16 has-tooltip">
                        <img src="https://www.eluniversal.com.mx/sites/default/files/2020/10/29/tren_tolluca.jpg"
                            alt="Tren_Mexico-Toluca" class="rounded-md shadow-2xl">
                        <x-tooltip-index text="Fotografía de: Jorge Alvarado/EL UNIVERSAL"></x-tooltip-index>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <p class="xxl--text italic py-8 px-3 ">Entre la gran variedad de transportes
                            terrestres el ferrocarril es uno de los más destacados, ya que cuenta con ventajas como bajas
                            emisiones de gases de efecto invernadero o la capacidad de transportar cargas voluminosas, entre
                            otras más de las que aquí hablaremos a continuación.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="xxl--text self-start p-3">Ecológico</h5>
                        <p class="xl--text  p-3">El ferrocarril es uno de los medios de transporte
                            con menor tasa de emisiones de gases contaminantes, pues el ferrocarril nacional emite
                            únicamente 41 gramos de CO<sub>2</sub> por cada kilómetro recorrido, mientras que los trenes más modernos
                            emiten solamente 6 gramos de CO<sub>2</sub> por kilómetro.
                        <p class="xl--text p-3">
                            El migrar la forma en la que las empresas transportan mercancías de camiones de carga a
                            ferrocarril generaría un ahorro de emisiones enorme, migrar tan solo el 10% de carga y pasaje al
                            transporte ferroviario disminuiría cerca de 8.38 millones de toneladas las emisiones de CO<sub>2</sub> que son liberadas a la atmosfera.</p>
                        </p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="xxl--text self-start p-3">Flexible</h5>
                        <p class="xl--text  p-3">El ferrocarril puede mover grandes cantidades y gran variedad  de mercancías, pues existen muchos tipos de carros de carga permitiendo que sea posible llevar desde productos agroindustriales como café, maíz o trigo, permitiendo también el transporte de líquidos y gaseosos como vino, jugos, hidrogeno u oxígeno e incluso es posible transportar hasta automóviles nuevos, a pesar de los anteriormente mencionados, aún hay más variedad de tipos de mercancías que los ferrocarriles son capaces de transportar.
                        </p>

                        <p class="xl--text p-3">El transporte ferroviario además de contar con la flexibilidad de mover variedad de tipos de mercancía, también es uno de los medios de transporte más económicos pues las tarifas suelen ser fijas.</p>
                    </div>

                    <div class="lg:w-11/12 has-tooltip">
                        <img src="https://img.freepik.com/foto-gratis/clasificacion-vagones-mercancias-ferrocarril-mientras-forma-tren_165577-417.jpg?size=626&ext=jpg"
                        alt="Carros_de_ferrocarril"
                        class="rounded-md shadow-2xl w-full">
                        <x-tooltip-index text="Fotografía de: Aapsky from freepik.es"></x-tooltip-index>
                    </div>


                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="xxl--text self-start p-3">Seguro</h5>
                        <p class="xl--text  p-3">El transporte ferroviario es uno de los medios de transporte más seguros pues la cantidad de siniestros es muy baja, tan solo 264 reportes de siniestros durante el segundo trimestre de 2020, mientras que los accidentes viales ascienden hasta 301,678 registrados durante todo el 2020.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="xxl--text self-start p-3">Veloz</h5>
                        <p class="xl--text  p-3">El transporte ferroviario es uno de los medios de transporte más veloces con una velocidad récord de 600 km/h (Tren bala de Maglev en China).</p>

                        <p class="xl--text p-3">La mayoría de los  trenes comerciales no alcanzan la velocidad récord, sin embargo, el promedio de velocidad se encuentra entre los 60 y 350 km/h, comparado con la velocidad promedio de viajar en automóvil en la ciudad de México (14 km/h) nos permite ahorrar mucho tiempo de viaje.</p>
                    </div>

                    <div class="lg:w-11/12 has-tooltip">
                        <img src="https://static.dw.com/image/58580338_6.jpg"
                        alt="Tren_bala_Maglev"
                        class="rounded-md shadow-2xl w-full">
                        <x-tooltip-index text="Fotografía de: Li Ziheng/Xinhua News Agency/picture alliance"></x-tooltip-index>
                    </div>


                </div>

                {{-- aside --}}
                <div class=" flex flex-col items-center  lg:w-3/12">

                    <h5 class=" my-10 text-3xl self-start px-8">¿Deseas mover cargamento?</h5>

                    <x-bicyclecard link="http://www.ferromex.com.mx/ferromex-lo-mueve/ferromex-lo-mueve.jsp"
                        img="http://www.ferromex.com.mx/img/logo-gmxt-blanco-footer.png" alt="Ferromex"
                        title="Grupo México Transportes (GMxT) "
                        description="División de transporte de Grupo México, entre sus servicios se encuentra el transporte de mercancías.">
                    </x-bicyclecard>

                    <x-bicyclecard link="https://www.kcsouthern.com/es-mx/ship-with-us/explore-shipping-options/carload"
                        img="https://www.kcsouthern.com/application/themes/kcs/images/kcs-logo-stacked.png"
                        alt="Kansas_city_Southern" title="Kansas City Southern"
                        description="Empresa ferroviaria dedicada al transporte de cargas con servicio de transporte entre ciudades del noreste y centro de México y algunos estados de EE.UU.">
                    </x-bicyclecard>

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
