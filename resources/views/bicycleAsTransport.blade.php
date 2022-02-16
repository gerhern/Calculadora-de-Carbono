@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}
        
        <div class="w-full bg-feather">

            <x-hammenu></x-hammenu>
            <h1 class="text-center lg:text-6xl text-4xl font-semibold my-32 italic">La bicicleta como medio de transporte
            </h1>
        </div>


        {{-- 1 seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            {{-- bicicleta --}}
            <div class="flex lg:flex-row flex-col items-center lg:items-start">

                {{-- info --}}
                <div class="lg:w-9/12 px-6 flex flex-col items-center">

                    <div class="lg:w-11/12 mt-16 has-tooltip">
                        <img src="https://blog.vivanuncios.com.mx/wp-content/uploads/2018/11/CDMXbicicleta.jpg"
                        alt="Bicicletas_en_CDMX"
                        class="rounded-md shadow-2xl">
                        <x-tooltip-index text="Fotografía de: Blog Vivanuncios"></x-tooltip-index>
                    </div>

                        <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                            <p class="leading-tight lg:text-2xl text-xl py-8 px-3 ">Con el paso de los años, la
                                bicicleta ha tomado una mayor importancia en la movilidad y la
                                salud de las personas, por lo que aquí te presentamos las principales razones por las cuales deberías pensar en utilizar
                                este medio de transporte.</p>
                        </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start p-3">Eficiente</h5>
                        <p class="leading-tight lg:text-xl text-lg  p-3">Una bicicleta puede cubrir de manera
                            eficiente viajes de hasta 7 km*, lo que es un dato importante, ya que la mitad de los viajes en
                            automóvil recorren menos de 5 km, distancia que en terreno plano puede recorrer una bici entre 10 y
                            20 minutos, alcanzando velocidades de hasta 30 km/h.</p>

                        <p class="leading-tight lg:text-xl text-lg p-3">La bicicleta permite una flexibilidad en la
                            duración del viaje, ya que al ocupar menos espacio, evita con mayor facilidad los embotellamientos
                            viales de los viajes en automóvil.</p>

                        <p class="leading-tight lg:text-xl text-lg p-3">De la misma forma, en trayectos cortos (menores a 7 km),
                            la velocidad de la bicicleta es competitiva con la del transporte público, debido a que el ciclo
                            "caminar-esperar-autobús-caminar" suele tomar más tiempo que el transporte de un punto A a un B
                            en bicicleta.</p>

                        <p class="leading-tight lg:text-xl text-lg p-3">Las bicicletas son vehículos pequeños,
                            ligeros, ecológicos y silenciosos, lo que los hace faciles de conducir y aparcar, ademas son de
                            fácil manutención, ya que una bici cuesta 30-40 veces menos que un automóvil.</p>

                    </div>

                    <div class="lg:w-11/12 has-tooltip">
                        <img src="http://www.cms.sedema.cdmx.gob.mx/storage/app/uploads/public/5bd/9f8/1b5/5bd9f81b5553c316339026.jpg"
                        alt="Bicycle-parking"
                        class="rounded-md shadow-2xl w-full">
                        <x-tooltip-index text="Fotografía de: Secretaría del medio ambiente"></x-tooltip-index>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Autónoma</h5>
                        <p class="leading-tight lg:text-xl text-lg p-3">El uso de bicicleta se puede realizar a
                            cualquier hora del día, por lo que es más práctico que esperar por un autobús.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Accesible</h5>
                        <p class="leading-tight lg:text-xl text-lg p-3">Cualquier persona con un estado de
                            salud normal puede usar bicicleta, no es necesario ser atleta: hombres, mujeres, niños y hasta
                            personas de edad avanzada pueden usarla.</p>
                    </div>

                    <div class="lg:w-11/12 has-tooltip">
                        <img src="https://dam.ngenespanol.com/wp-content/uploads/2020/06/bicicleta-mexico-UNAM-770x385.jpg"
                        alt="Bicycle-old"
                        class="rounded-md shadow-2xl w-full">
                        <x-tooltip-index text="Fotografía de: Getty Images"></x-tooltip-index>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Saludable</h5>
                        <p class="leading-tight lg:text-xl text-lg p-3">Realizar ciclismo constantemente
                            ayuda a reducir peso y quemar grasas, es un deporte de bajo impacto lo cual es ideal para
                            personas
                            con problemas de articulaciones y ayuda a fortalecer el sistema cardiovascular.</p>
                    </div>

                    <div class="py-6 w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <h5 class="text-2xl self-start px-8">Ecológica</h5>
                        <p class="leading-tight lg:text-xl p-3">Cuando circula una bicicleta no emite
                            contaminantes a la atmósfera aunque durante su ciclo de vida completo desde fabricación hasta la
                            conversión en residuo la cantidad de contaminantes que genera es tan solo de 5g de
                            CO<sub>2</sub> por km*.</p>
                        <p class="leading-tight lg:text-xl text-lg p-3 ">La circulación de bicicletas reduce notablemente la
                            contaminación auditiva.</p>
                    </div>

                    <div class="lg:w-11/12 has-tooltip">
                        <img src="https://www.santafixie.com/blog/wp-content/uploads/2016/10/en-bici-con-lluvia.jpg"
                        alt="Ride-bicycle"
                        class="rounded-md shadow-2xl w-full">
                        <x-tooltip-index text="Fotografía de: Santafixie Stories/santafie.com"></x-tooltip-index>
                    </div>

                    <div class="w-11/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                        <p class="leading-snug lg:text-xl text-lg text-center py-8 px-3 ">Pese a la gran cantidad de ventajas
                            con las que contamos al usar este medio de transporte, este no es perfecto y aun cuenta con algunas
                            desventajas como es la barrera climática.</p>
                    </div>
                        

                    <p>*Fuente: Ecoticias.com <a
                            href="https://www.ecoticias.com/co2/185973/EL-uso-de-la-Bicicleta-y-el-CO2" class="font-bold underline">https://www.ecoticias.com</a>
                    </p>


                </div>

                {{-- galery --}}
                <div class=" flex flex-col items-center  lg:w-3/12">

                    <h5 class=" my-10 text-3xl self-start px-8">¿No cuentas con una bicicleta en tu hogar?</h5>

                    <x-bicyclecard
                        link="https://www.ecobici.cdmx.gob.mx/"
                        img="https://seeklogo.com/images/E/ecobici-logo-6DD51DF001-seeklogo.com.png"
                        alt="Ecobici"
                        title="Sistema de bicicletas públicas de la Ciudad de México"
                        description="Usuarios con una suscripción pueden tomar una bicicleta y devolverla en la cicloestación más cercana a su destino en trayectos de 45 minutos."
                    ></x-bicyclecard>

                    <x-bicyclecard
                        link="https://www.dgsgm.unam.mx/bicipuma"
                        img="https://static.wixstatic.com/media/4394a8_c5d58703be9547aeb63a1674f1efc594~mv2.png/v1/fill/w_548,h_122,al_c,q_85,usm_0.66_1.00_0.01/4394a8_c5d58703be9547aeb63a1674f1efc594~mv2.webp"
                        alt="Bicipuma"
                        title="Sistema de prestamo de bicicletas de Ciudad Universitaria"
                        description="Sistema de transporte gratuito que fomenta la movilidad sustentable y la salud de la Comunidad Universitaria."
                    ></x-bicyclecard>

                    <x-bicyclecard
                        link="https://www.mibici.net/"
                        img="https://www.mibici.net/site/templates/assets/images/logo-mibici-obscuro.svg"
                        alt="MiBici"
                        title="Sistema de bicicletas públicas del Área Metropolitana de Guadalajara"
                        description="Usuarios con una suscripción pueden realizar viajes en trayectos menores a 30 minutos."
                    ></x-bicyclecard>

                    <h5 class=" my-10 text-3xl self-start px-8">¿Quieres unirte a un club de ciclistas?</h5>

                    <x-bicyclecard
                        link="https://bicitekas.org/"
                        img="https://bicitekas.org/sites/all/themes/hermio/css/colors/black/images/logo.gif"
                        alt="Bicitekas"
                        title="Bicitekas A.C."
                        description="Asociación de ciclistas cuyo objetivo se centra en aumentar el uso de la bicicleta en la Ciudad de México como un medio de transporte seguro, saludable y sostenible."
                    ></x-bicyclecard>

                    <x-bicyclecard
                        link="https://www.facebook.com/muyu.bikers/"
                        img="https://scontent-qro1-2.xx.fbcdn.net/v/t39.30808-6/222431659_247465797276063_588141798271356116_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeFtsJInqgtzo_nH3gsCo0meUFU_41oTzKxQVT_jWhPMrNmfFKgBX6ZDnVahLB6t4HnBCH9TuNnrsss6T4gDjfuQ&_nc_ohc=g5NRA36bPq8AX_qo_Zp&_nc_ht=scontent-qro1-2.xx&oh=f0985908be9e3f2a5c2ca72530fb3a25&oe=618F9321"
                        alt="Muyu-Bikers"
                        title="Club de ciclismo Muyu Bikers"
                        description="Grupo de ciclismo nocturno con salidas cada jueves y domingo."
                    ></x-bicyclecard>

                    <h5 class=" my-10 text-3xl self-start px-8">¿No sabes andar en bicicleta?</h5>

                    <x-bicyclecard
                        link="http://data.sedema.cdmx.gob.mx/mueveteenbici/index.php?option=com_content&view=article&id=70&Itemid=75"
                        img="http://data.sedema.cdmx.gob.mx/mueveteenbici/images/stories/biciescuela_chapu.jpg"
                        alt="Bicientrenate"
                        title="BiciEntrénate"
                        description="Programa diseñado para que familias puedan asistir a mejorar sus habilidades sobre la bicicleta o aprender a andar en ella."
                    ></x-bicyclecard>

                    <h5 class=" my-10 text-3xl self-start px-8">Apps para ciclistas</h5>

                    <x-bicyclecard
                        link="https://www.dezba.mx/"
                        img="https://static.wixstatic.com/media/cc6c6c_fdc23fd45a6c4be687813179fc9a02e0~mv2.png/v1/fill/w_727,h_132,al_c,q_85,usm_0.66_1.00_0.01/cc6c6c_fdc23fd45a6c4be687813179fc9a02e0~mv2.webp"
                        alt="Dezba"
                        title="Dezba"
                        description="Aplicación de renta de bicicletas eléctricas o mecánicas compartidas por subscripción mensual o anual."
                    ></x-bicyclecard>

                    <x-bicyclecard
                        link="https://www.strava.com/"
                        img="https://www.bikester.es/on/demandware.static/-/Library-Sites-bikester/default/dw1ee90037/Blog/Logo_Strava.png"
                        alt="Strava"
                        title="Strava"
                        description="Aplicación de monitoreo de velocidad, distancia, calorias quemadas y rutas de ciclismo con la posibilidad de mostrar un ranking de tiempos de ruta entre ciclistas."
                    ></x-bicyclecard>

                    <x-bicyclecard
                        link="https://maphub.net/Proyecto-BISIGET/mapciclovias"
                        img="https://img.maspormas.com/2016/07/portadaparaweb-05-16.jpg"
                        alt="Ciclovia"
                        title="Infraestructura ciclista de México"
                        description="Aplicación que muestra mapas de la infraestructura ciclista de la República Mexicana con fotografías, longitudes y variedad de datos adicionales."
                    ></x-bicyclecard>
                </div>

            </div>
        </div>
    </div>
@endsection