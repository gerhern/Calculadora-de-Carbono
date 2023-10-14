@extends('app')
@section('content')

    {{-- div principal --}}
    <div class="flex flex-col text-white">

        {{-- Imagen y titulo principal --}}
        <div class="bg-center bg-cover w-full has-tooltip"
            style="background-image: url('https://images.pexels.com/photos/7111160/pexels-photo-7111160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">

            <x-hammenu></x-hammenu>
            <h1 class="cover--title">Alternativas para compensar la huella de carbono
            </h1>

            <x-tooltip-index text="Fotografía de: Tara Winstead from Pexels"></x-tooltip-index>

        </div>

        {{-- div para mostrar informacion --}}
        {{-- 1er seccion informativa --}}
        <div class="bg-feather">

            <h3 class="first--title my-36 py-2">¿Por qué conocer y compensar nuestra
                huella de carbono?</h3>

            <div class="flex flex-col">

                {{-- Carrusel --}}
                <div
                    class=" w-11/12 mx-auto rounded-md py-8 bg-gradient-to-b from-white to-feather bg-opacity-20 shadow-2xl">

                    {{-- slide1 --}}
                    <x-carrusel-slide slide="slide1"
                        img1="https://www.eleconomista.com.mx/__export/1566424039592/sites/eleconomista/img/2019/08/21/parque-eolico-engie-cortesia-gober-tamaulipas.jpg_132249826.jpg"
                        img2="https://www.altonivel.com.mx/wp-content/uploads/2018/03/paneles-solares.jpg"
                        tooltip="Fotos: El Economista twitter/@fgcabezadevaca (Parque Eólico Tres Mesas, Tamaulipas) y Altonivel/Roberto Arteaga (Campo de paneles solares, Viesca, Coahuila).">
                    </x-carrusel-slide>


                    {{-- slide2 --}}
                    <x-carrusel-slide slide="slide2"
                        img1="https://images.pexels.com/photos/7655920/pexels-photo-7655920.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        img2="https://www.archivo.cdmx.gob.mx/storage/app/uploads/public/58e/d61/4c3/thumb_4487_1153_706_0_0_crop.jpg"
                        tooltip="Fotos: Pexels/Thirdman(Save the planet) y Archivo.cdmx.gob(Parque Nacional Viveros Coyoacán).">
                    </x-carrusel-slide>


                    {{-- slide3 --}}
                    <x-carrusel-slide slide="slide3"
                        img1="https://cdn.ntmx.me/media/2020/02/12/_hdb291065bfb66d0b59805bf3ebc6d217bcad87d50.jpg"
                        img2="https://www.gob.mx/cms/uploads/image/file/563418/_WWF_Mexico__2019_LOBOS_DEL_ZOOLOGICO_COYOTES_ALTA-0849.jpg"
                        tooltip="Fotos: Netnoticias.mx (Jaguar, especie en peligro de extinción) y Wwf/ (Lobo Mexicano, especie que desafía la extinción).">
                    </x-carrusel-slide>
                </div>
                {{-- fin carrusel --}}

                <div class="lg:w-11/12 w-10/12 mx-auto border border-black bg-black shadow-md bg-opacity-10 my-8 rounded-md">
                    <p class="xxl--text py-8 px-3 ">Conocer el tamaño de nuestra huella
                        de carbono es importante,
                        ya que nos permite concientizar y modificar nuestros habitos para reducir las emisiones de
                        CO<sub>2</sub> asociadas a nuestro estilo de vida.</p>

                    <p class="xxl--text py-8 px-3">Compensar nuestra huella de
                        carbono consiste en la
                        aportacion voluntaria de una cantidad económica variable,para diversos proyectos de reforestación,
                        generación y ahorro
                        de energía sostenible o tratamiento de residuos para así contribuir con el medio ambiente.</p>

                    <p class="xxl--text py-8 px-3">Realizar una compensación económica no es
                        la única forma en la que podemos regresar a la naturaleza un
                        poco de lo que tomamos de ella día con día. Entre las acciones que podemos realizar, se encuentra el
                        apoyar como voluntarios a organizaciones en sus labores de reforestación.</p>

                    <p class="xxl--text pt-8 pb-16 px-3">Otra forma de apoyar es mediante pequeñas acciones que listamos en la sección de <span class="italic">"¿Cómo reducir tu huella de carbono?"</span>, ubicada al final de esta página. Si realizas a partir de ahora algunas de estas ideas, tu huella de carbono comenzará a disminuir  y así podrás ayudar al medio ambiente y su conservación. </p>


                </div>

            </div>
        </div>


        {{-- 2da seccion informativa --}}
        <div class="bg-gradient-to-b from-marine to-forest">

            <h3 class="first--title pt-20 px-6">¿Cómo compensar tu huella de carbono?
            </h3>

            <div class="flex flex-col">
                <div class="w-3/4 mx-auto my-8 rounded-md">
                    <p class="xl--text py-8
                    pb-8">Para realizar una
                        compensación de tu huella de carbono
                        personal te recomendamos las siguientes opciones:</p>
                </div>

                <div class="flex  items-center justify-around">

                    {{-- div para cards de sitios de compensacion --}}
                    <div class="lg:flex lg:justify-evenly lg:my-4">

                        {{-- div card 1 --}}
                        <x-calculatorcard link="https://offset.climateneutralnow.org/AllProjects"
                            img="https://unfccc.int/themes/custom/unfccc/images/logo.png" alt="UNCC-Logo"
                            title="Plataforma de compensación de las Naciones Unidas"
                            description="Plataforma de compensacion en proyectos de mitigacion de Gases de Efecto Invernadero (GEI) alrededor de todo el mundo">
                        </x-calculatorcard>

                        {{-- div card 2 --}}
                        <x-calculatorcard link="https://www.reforestamosmexico.org/adoptaunarbol"
                            img="https://static.wixstatic.com/media/b1748a_e68a34ab791443259e1dce6cd0cc520e~mv2.png/v1/fill/w_222,h_117,al_c,lg_1,q_85/221x116.webp"
                            alt="Reforestamos-Logo" title="Adopta un arbol con
                                                                                            Reforestamos México"
                            description="Mediante una contribución
                                                                                            económica mínima adopta un árbol durante un periodo de 3 años y recibe un certificado de
                                                                                            adopción">
                        </x-calculatorcard>

                        {{-- div card 3 --}}
                        <div
                            class="border border-black bg-black bg-opacity-30 rounded-md shadow-2xl p-3 my-4 lg:w-3/12 w-5/6 mx-auto lg:flex lg:flex-col lg:justify-evenly hover:bg-marine transition duration-200">

                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3/4 mx-auto my-2 cursor-pointer lg:w-2/4"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>

                                <h3 class="text-xl font-semibold lg:text-2xl lg:my-4 lg:text-center">Proximamente</h3>

                                <p class="lg:text-lg lg:leading-none lg:mb-6 lg:text-center lg:px-2">Nos encontramos en
                                    negociacion para brindarles una nueva forma de compensar, disculpe las molestias.</p>
                            </a>
                        </div>
                    </div>
                </div>


                {{-- Tips --}}
                <h3 class="lg:text-5xl text-3xl text-center pt-20 px-6 font-medium italic">¿Cómo reducir tu huella de
                    carbono?
                </h3>

                {{-- cards --}}
                <div>
                    {{-- Card 0 --}}
                    <div class="container mx-auto bg-cover bg-center object-fill lg:my-16 my-8"
                        style="background-image: url(https://images.pexels.com/photos/7048023/pexels-photo-7048023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)"
                        id="card0">

                        <div class="h-auto text-white py-32 px-10 bg-black bg-opacity-60 has-tooltip ">

                            <p class="font-bold text-sm uppercase lg:block hidden">Click en imagen</p>
                            <p class="lg:text-3xl text-xl font-bold my-2 leading-none">Aquí se muestran 5 tips para reducir
                                tu huella de carbono</p>
                            <p class="lg:text-2xl text-lg mb-10 leading-tight">Actualmente nos encontramos en un momento
                                crítico en el
                                que tenemos la oportunidad de cambiar el futuro de nuestro planeta y así tener un futuro
                                mejor para las próximas generaciones, si no actuamos hoy puede que no tengamos un mañana
                                para hacerlo.</p>
                            <x-tooltip-coin-card text="Fotografía de: Artem Podrez from Pexels"></x-tooltip-coin-card>
                        </div>
                    </div>

                    {{-- Card 1 --}}
                    <x-tipcard 
                        card="1"
                        img="https://images.pexels.com/photos/397998/pexels-photo-397998.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                        title="Usa focos ahorradores"
                        description="Realiza el cambio a focos ahorradores de energía de luz LED de bajo consumo en lugar de los tradicionales focos incandecentes, así como electrodomésticos de bajo consumo energético."
                        author="Fotografías de: Mohamed Khaled(Tip) y Riki Risnandar(Coin) from Pexels">
                    </x-tipcard>

                    {{-- Card 2 --}}
                    <x-tipcard card="2"
                        img="https://images.pexels.com/photos/1028674/pexels-photo-1028674.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="wire" title="Si no lo usas desconéctalo"
                        description="Diversos aparatos eléctricos como los cargadores de teléfonos celulares siguen consumiendo energía incluso cuando no se utilizan."
                        author="Fotografías de: Steve Johnson(Tip) y Markus Spiske(Coin) from Pexels">
                    </x-tipcard>

                    {{-- Card 3 --}}
                    <x-tipcard card="3"
                        img="https://images.pexels.com/photos/2850347/pexels-photo-2850347.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="panel" title="Usa fuentes de energía renovable"
                        description="Los calentadores de agua o paneles solares no emiten gases de efecto invernadero y ayudan a ahorrar gas y electricidad y sus respectivos costos."
                        author="Fotografías de: Vivint Solar(Tip) y Kindel Media(Coin) from Pexels">
                    </x-tipcard>

                    {{-- Card 4 --}}
                    <x-tipcard link="{{ route('transport') }}" card="4"
                        img="https://cdn.local.mx/wp-content/uploads/2019/06/gran-rodada-1.jpg" alt="bicycle"
                        title="Usa medios alternos de transporte"
                        description="Algunos medios de transporte, como los automóviles producen gran cantidad de gases contaminantes, por eso es aconsejable utilizar medios de transporte alternativos de bajas emisiones, como el tren, la bicicleta o incluso caminar."
                        author="Fotografías de: Facebook Muévete en Bici(Tip) y (Coin)">
                    </x-tipcard>

                    {{-- Card 5 --}}
                    <x-tipcard card="5"
                        img="https://images.pexels.com/photos/7048024/pexels-photo-7048024.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="recycle" title="Recicla"
                        description="Reduce la cantidad de desechos que generas, reutiliza la mayor cantidad posible y recicla para aprovechar materiales y crear nuevos productos."
                        author="Fotografías de: Artem Podrez(Tip) y Sarah Chai(Coin) from Pexels">
                    </x-tipcard>
                </div>

                <div class=" flex flex-wrap justify-evenly  m-2 lg:mb-20" id="coins">

                    {{-- coin1 --}}
                    <x-coin coin="1"
                        img="https://images.pexels.com/photos/3946155/pexels-photo-3946155.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                    </x-coin>

                    {{-- coin2 --}}
                    <x-coin coin="2"
                        img="https://images.pexels.com/photos/218445/pexels-photo-218445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                    </x-coin>

                    {{-- coin3 --}}
                    <x-coin coin="3"
                        img="https://images.pexels.com/photos/9800031/pexels-photo-9800031.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                    </x-coin>

                    {{-- coin4 --}}
                    <x-coin coin="4" img="https://cdn.local.mx/wp-content/uploads/2019/06/gran-rodada-4.webp">
                    </x-coin>

                    {{-- coin5 --}}
                    <x-coin coin="5"
                        img="https://images.pexels.com/photos/7262405/pexels-photo-7262405.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                    </x-coin>

                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
    <script src="{{ asset('js/coinCard.js') }}"></script>

@endsection
