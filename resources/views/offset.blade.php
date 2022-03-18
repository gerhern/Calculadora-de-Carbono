@extends('app')
@section('content')
    {{-- Contenedor --}}
    <div class="flex flex-col items-center">
        {{-- Contenedor Texto --}}
        <div class="mt-20 px-8">
            <h1 class="subtitle--1 mx-auto py-3">Alternativas para compensar la huella de carbono</h1>
            <h3 class="subtitle--2 text-black my-2 ">¿Por qué conocer y compensar nuestra
                huella de carbono?</h3>
            <p class="body--1 py-1 ">Conocer el tamaño de nuestra huella
                de carbono es importante,
                ya que nos permite concientizar y modificar nuestros habitos para reducir las emisiones de
                CO<sub>2</sub> asociadas a nuestro estilo de vida.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip my-8">
            <img src="https://images.pexels.com/photos/7111160/pexels-photo-7111160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt="ideas" class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Tara Winstead from Pexels" margin="8"></x-tooltip-index>
        </div>

        {{-- Contenedor Texto --}}
        <div class="px-8">
            <p class="body--1">Compensar nuestra huella de
                carbono consiste en la
                aportacion voluntaria de una cantidad económica variable,para diversos proyectos de reforestación,
                generación y ahorro
                de energía sostenible o tratamiento de residuos para así contribuir con el medio ambiente.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip my-8">
            <img src="https://www.eleconomista.com.mx/__export/1566424039592/sites/eleconomista/img/2019/08/21/parque-eolico-engie-cortesia-gober-tamaulipas.jpg_132249826.jpg"
                alt="Parque Eolico" class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Foto: El Economista twitter/@fgcabezadevaca (Parque Eólico Tres Mesas, Tamaulipas)"
                margin="12"></x-tooltip-index>
        </div>

        {{-- Contenedor Texto --}}
        <div class="px-8">
            <p class="body--1">Anqué no es la única forma, entre las acciones que podemos realizar, se encuentra el
                apoyar como voluntarios a organizaciones en sus labores de reforestación o mediante pequeñas acciones que
                listamos en la sección de "¿Cómo reducir tu huella de carbono?", <span class="subtitle--1">ubicada al
                    final</span> de esta página.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip my-8">
            <img src="https://images.pexels.com/photos/7655920/pexels-photo-7655920.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                alt="Save the planet" class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotos: Pexels/Thirdman(Save the planet)" margin="8"></x-tooltip-index>
        </div>

        {{-- Contenedor Card --}}
        <div class="w-full px-8 flex justify-between items-center ">
            <div class="caption-- w-5/12">
                <p>“Si realizas a partir de ahora algunas de estas ideas, tu huella de carbono comenzará a disminuir y así
                    podrás ayudar al medio ambiente a su conservación”</p>
            </div>

            <div class="w-32 h-32 has-tooltip">
                <img src="https://www.gob.mx/cms/uploads/image/file/563418/_WWF_Mexico__2019_LOBOS_DEL_ZOOLOGICO_COYOTES_ALTA-0849.jpg"
                    alt="Lobo Mexicano" class="rounded-full shadow-2xl w-32 h-32">
                <x-tooltip-index text="Fotos: Pexels/Thirdman(Save the planet)" margin="12"></x-tooltip-index>
            </div>
        </div>

        {{-- Contenedor texto --}}
        <div class="my-8 px-8">
            <h3 class="subtitle--1">¿Cómo compensar tu huella de carbono?
            </h3>
            <p class="body--1 mt-4">Para realizar una
                compensación de tu huella de carbono
                personal te recomendamos las siguientes opciones:</p>
        </div>

        {{-- Contendor cards --}}
        <div class="">
            {{-- Card 1 --}}
            <x-calculatorcard link="https://offset.climateneutralnow.org/AllProjects"
                img="https://unfccc.int/themes/custom/unfccc/images/logo.png" alt="UNCC-Logo"
                description="Plataforma de compensación de las Naciones Unidas para proyectos de mitigacion de Gases de Efecto Invernadero (GEI)">
            </x-calculatorcard>

            {{-- Card 2 --}}
            <x-calculatorcard link="https://www.reforestamosmexico.org/adoptaunarbol"
                img="https://static.wixstatic.com/media/b1748a_e68a34ab791443259e1dce6cd0cc520e~mv2.png/v1/fill/w_222,h_117,al_c,lg_1,q_85/221x116.webp"
                alt="Reforestamos-Logo"
                description="Adopta un árbol con Reforestamos México
                                            Mediante una contribución económica mínima adopta un árbol durante un periodo de 3 años y recibe un certificado de adopción ">
            </x-calculatorcard>
        </div>

        {{-- Contenedor texto --}}
        <div class="my-4 px-8">
            <h3 class="subtitle--1">Aquí se muestran 5 tips para reducir tu huella de carbono</h3>
            <p class="body--1 my-4">Actualmente nos encontramos en un momento crítico en el que tenemos la oportunidad de
                cambiar el futuro de nuestro planeta y así tener un futuro mejor para las próximas generaciones, si no
                actuamos hoy puede que no tengamos un mañana para hacerlo.</p>

            <h3 class="subtitle--2 text-black">Usa focos ahorradores</h3>
            <p class="body--1 mt-4">Realiza el cambio a focos ahorradores de energía de luz LED de bajo consumo en lugar
                de los tradicionales focos incandecentes, así como electrodomésticos de bajo consumo energético.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip">
            <img src="https://images.pexels.com/photos/397998/pexels-photo-397998.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                alt="Foco ahorrar" class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Mohamed Khaled from Pexels" margin="8"></x-tooltip-index>
        </div>

        {{-- Contenedor texto --}}
        <div class="my-4 px-8">
            <h3 class="subtitle--1 text-black">Si no lo usas desconéctalo</h3>
            <p class="body--1 mt-4">Diversos aparatos eléctricos como los cargadores de teléfonos celulares siguen
                consumiendo energía incluso cuando no se utilizan.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip">
            <img src="https://images.pexels.com/photos/1028674/pexels-photo-1028674.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt="Cargador" class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Steve Johnson from Pexels" margin="8"></x-tooltip-index>
        </div>

        {{-- Contenedor texto --}}
        <div class="my-4 px-8">
            <h3 class="subtitle--1 text-black">Usa fuentes de energía renovable</h3>
            <p class="body--1 mt-4">Los calentadores de agua o paneles solares no emiten gases de efecto invernadero y
                ayudan a ahorrar gas y electricidad y sus respectivos costos.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip">
            <img src="https://images.pexels.com/photos/2850347/pexels-photo-2850347.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt="Panel solar" class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Vivint Solar from Pexels" margin="8"></x-tooltip-index>
        </div>

        {{-- Contenedor texto --}}
        <div class="my-4 px-8">
            <h3 class="subtitle--1 text-black">Usa medios alternos de transporte</h3>
            <p class="body--1 mt-4">Algunos medios de transporte, como los automóviles producen gran cantidad de gases
                contaminantes, por eso es aconsejable utilizar medios de transporte alternativos de bajas emisiones, como el
                tren, la bicicleta o incluso caminar.</p>
        </div>

        <a href="{{ route('transport') }}"
            class="w-11/12 border-2 border-primary-Color  text-center mx-auto py-3 mb-8 rounded button--text">Conoce más</a>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip">
            <img src="https://cdn.local.mx/wp-content/uploads/2019/06/gran-rodada-1.jpg" alt="bicycle"
                class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Facebook Muévete en Bici" margin="8"></x-tooltip-index>
        </div>

        {{-- Contenedor texto --}}
        <div class="my-4 px-8">
            <h3 class="subtitle--1 text-black">Recicla</h3>
            <p class="body--1 mt-4">Reduce la cantidad de desechos que generas, reutiliza la mayor cantidad posible y
                recicla para aprovechar materiales y crear nuevos productos.</p>
        </div>

        {{-- Contenedor imagen --}}
        <div class="w-11/12 has-tooltip mb-4">
            <img src="https://images.pexels.com/photos/7048024/pexels-photo-7048024.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt="recicla" class="rounded-md shadow-2xl w-full">
            <x-tooltip-index text="Fotografía de: Artem Podrez from Pexels" margin="8"></x-tooltip-index>
        </div>


    </div>{{-- Fin contenedor --}}
@endsection
