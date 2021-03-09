<x-app-layout>

    {{-- hero section --}}
    <div id="top"
         class="container px-12 py-12 relative pt-24 pb-32 flex content-center items-center justify-center"
         style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover"
             style='background-image: url("{{ asset('images/landing/business_0.jpg') }}");'>
            <span class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            Líder en gestión de criptoactivos.
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            Operamos en la gestión de criptoactivos en los mercados más atrevidos, y todavía podemos
                            contar con un alto índice de liquidez. No pierda la oportunidad de unirse ahora mismo
                        </p>
{{--                        hidden link--}}
{{--                        <div class="inline-block mr-2 mt-2">--}}
{{--                            <a href="https://trustinvesting.com/yassercuba/unete"--}}
{{--                               class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Únete--}}
{{--                                Ya</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div
            class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px; transform: translateZ(0px);"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
    </div>

    {{-- card section --}}
    <section class="bg-gray-300 -mt-24" id="cards">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                            >
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Misión</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                A través de nuestro club de negocios, hacer que el mercado de criptoactivos sea más
                                accesible para lagente común.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                            >
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Crecimiento Exponencial</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Genere ingresos extra variables para el mayor número de personas a través de nuestro
                                club de negocios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                            >
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Visión</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Generar un ingreso variable extra para el mayor número de personas a través de nuestro
                                club de negocios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- about section --}}
    <section class="pb-20 bg-gray-300" id="about">
        <div class="container mx-auto px-4 pt-2">
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-user-friends text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Valores
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Actuar con transparencia, generando confianza a nuestros clientes y socios, y así, mejorar la
                        calidad devida de familias en todo el mundo.
                    </p>
                    <p
                        class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
                    >
                        En este mundo globalizado y cada vez más dependiente del internet, se habla con mayor frecuencia
                        de Inversiones Online, Criptoactivos, Trading, Criptomonedas, Forex, entre otras, pero realmente
                        son muy pocas personas las que conocen con exactitud, de qué trata todo eso. Si necesita mas
                        informacion puede acceder a
                    </p>
                    <a
                        href="https://trustinvesting.com/"
                        class="font-bold text-gray-800 mt-8"
                    >la pagina oficial.</a
                    >
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600"
                    >
                        <img
                            alt="..."
                            src="{{ asset('images/landing/business_1.jpg') }}"
                            class="w-full align-middle rounded-t-lg"
                        />
                        <blockquote class="relative p-8 mb-4">
                            <svg
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 583 95"
                                class="absolute left-0 w-full block"
                                style="height: 95px; top: -94px;"
                            >
                                <polygon
                                    points="-30,95 583,95 583,65"
                                    class="text-blue-600 fill-current"
                                ></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Servicio que garantiza el crecimiento
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Trust Investing es la empresa de inversiones online que pone a valer tu dinero para
                                generarte beneficios 24 horas al día de Lunes a Viernes.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- criptoactives section --}}
    <section class="relative py-20 bg-gray-100" id="criptoactives">
        <div class="container mx-auto px-4 pt-2">
            <div
                class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden"
                     xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="none"
                     version="1.1"
                     viewBox="0 0 2560 100"
                     x="0"
                     y="0">
                    <polygon class="text-gray-100  fill-current"
                             points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600"
                        >
                            <img
                                alt="..."
                                src="{{ asset('images/landing/business_4.jpg') }}"
                                class="w-full align-middle rounded-t-lg"
                            />
                            <blockquote class="relative p-8 mb-4">
                                <svg
                                    preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95"
                                    class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;"
                                >
                                    <polygon
                                        points="-30,95 583,95 583,65"
                                        class="text-blue-600 fill-current"
                                    ></polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Mediante Criptoactivos
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    Trustinvesting ha estado haciendo rentable el capital de sus clientes desde mayo de
                                    2019.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-50">
                                <i class="fab fa-btc text-xl" aria-hidden="true"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">CRIPTOACTIVOS</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                Los criptoactivos son activos virtuales. Hoy en día existen cientos de criptoactivos,
                                entre los cuales el pionero y más conocido es el Bitcoin. Cada uno de ellos trabaja
                                basandose en su propio conjunto de reglas, definidas por sus creadores y
                                desarrolladores.sales.psd
                                business_3.psd
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 mr-3"
                        ><i class="fas fa-fingerprint"></i
                            ></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                protegidos por criptografía
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 mr-3"
                        ><i class="fab fa-html5"></i
                            ></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Permiten a las personas o empresas realizar pagos
                                                o transferencias electrónicas</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                        <span
                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 mr-3"
                        ><i class="far fa-paper-plane"></i
                            ></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Sus operaciones se ejecutan y almacenan en una red informática</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our leaders section --}}
    <section class="pt-20 pb-48" id="leaders">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Equipo Directivo</h2>
                    <p class="text-lg leading-relaxed m-4 text-gray-600">
                        Contamos con un equipo directivo de calidad, con pensamiento y liderazgo dirigido a fomentar el
                        desarrollo personal de cada miembro.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="{{ asset('images/landing/leader_big_1.png') }}"
                            class="shadow-lg rounded-full max-w-full mx-auto"
                            style="max-width: 120px;"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Fabiano Lima</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Director de Marketing
                            </p>
                            <div class="mt-6">
                                <a href="https://www.facebook.com/fabiano.delima.54966" target="_blank"
                                   class="btn bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 py-1"
                                   type="button">
                                    <i class="fab fa-facebook-f"></i></a
                                >
                                <a href="https://www.instagram.com/fabianolorite/" target="_blank"
                                   class="bg-red-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 py-1"
                                   type="button">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="{{ asset('images/landing/leader_big_2.png') }}"
                            class="shadow-lg rounded-full max-w-full mx-auto"
                            style="max-width: 120px;"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Diego Chaves</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                CEO
                            </p>
                            <div class="mt-6">
                                <a href="https://www.facebook.com/diego.chaves.1291" target="_blank"
                                   class="btn bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 py-1"
                                   type="button">
                                    <i class="fab fa-facebook-f"></i></a
                                >
                                <a href="https://www.instagram.com/diegochavesceo/" target="_blank"
                                   class="bg-red-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 py-1"
                                   type="button">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="{{ asset('images/landing/leaders_3.png') }}"
                            class="shadow-lg rounded-full max-w-full mx-auto"
                            style="max-width: 120px;"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Claudio Barbosa</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Director de Tecnologías
                            </p>
                            <div class="mt-6">
                                <a href="https://www.facebook.com/profile.php?id=100015499410142" target="_blank"
                                   class="btn bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 py-1"
                                   type="button">
                                    <i class="fab fa-facebook-f"></i></a
                                >
                                <a href="https://www.instagram.com/claudio_anrry/" target="_blank"
                                   class="btn bg-red-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1 py-1"
                                   type="button">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our plans --}}
    <section class="pt-20 pb-2 bg-fixed" id="plains"
             style='background-image: url("{{ asset('images/landing/business_3.jpg') }}");'>
        <div class="container mx-auto px-4 ">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-300"
                    >
                        <i class="fas fa-money-check-alt text-xl"></i>
                    </div>
                    <h2 class="text-white font-semibold text-5xl">Conozca nuestros Planes</h2>
                    <p class="mt-4 text-lg text-gray-300">
                        Su participación diaria comienza tras 48 horas para cumplir con el procedimiento estándar de
                        llevar susactivos a la mesa de negociaciones. Sus retiros pueden hacerse una vez al mes, en la
                        misma fecha en quehizo la inversión. No hay un valor máximo para la retirada, y el valor mínimo
                        es de 1 USDT. Se cobrará una tasa del 5% en cada saque realizado
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="">
        <div class="w-full mx-auto bg-green-200 px-5 py-10 text-gray-600">
            <div class="max-w-4xl mx-auto md:flex">
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">START</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">15</span>
                        </div>

                        <ul class="text-sm px-1 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo Diario: USDT 15
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: UDST 30
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-10 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">ONE STARS</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">30</span>
                        </div>
                        <ul class="text-sm px-1 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT 30
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT 60
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-10 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">TWO STARS</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">60</span>
                        </div>
                        <ul class="text-sm px-1 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT 60
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT 120
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">THREE START</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">100</span>
                        </div>
                        <ul class="text-sm px-1 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT 100
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT 200
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative block bg-blue-200">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);">
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0">
                <polygon
                    class="text-blue-200 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="w-full mx-auto bg-white px-5 py-10 text-gray-600 bg-blue-200">
            <div class="max-w-4xl mx-auto md:flex">
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">FOUR START</h2>
                        <div class="text-center mb-5 text-blue-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">200</span>
                        </div>

                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo Diario: USDT 200
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: UDST 400
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-10 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">FIVE START</h2>
                        <div class="text-center mb-5 text-blue-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">300</span>
                        </div>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT 300
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT 600
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">SIX START</h2>
                        <div class="text-center mb-5 text-blue-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">500</span>
                        </div>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT 500
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT
                                1000
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative block bg-green-200">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);">
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0">
                <polygon
                    class="text-green-200 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="w-full mx-auto bg-white px-5 py-10 text-gray-600 bg-green-200">
            <div class="max-w-4xl mx-auto md:flex">
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">1K</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">1.000</span>
                        </div>

                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo Diario: USDT
                                1.000
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: UDST
                                2.000
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-10 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">2K</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">2.000</span>
                        </div>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT
                                2.000
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT
                                4.000
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-10 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">5K</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">5.000</span>
                        </div>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT
                                3.000
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT
                                10.000
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">10K</h2>
                        <div class="text-center mb-5 text-green-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">10.000</span>
                        </div>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT
                                4.000
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT
                                20.000
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative block bg-blue-200">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);">
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0">
                <polygon
                    class="text-blue-200 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="w-full mx-auto bg-white px-5 py-10 text-gray-600 bg-blue-200">
            <div class="max-w-4xl mx-auto md:flex">
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">20K</h2>
                        <div class="text-center mb-5 text-blue-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">20.000</span>
                        </div>

                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo Diario: USDT
                                4.500
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: UDST
                                40.000
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-10 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">50K</h2>
                        <div class="text-center mb-5 text-blue-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">50.000</span>
                        </div>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT
                                50.000
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT
                                100.000
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4 underline">100K</h2>
                        <div class="text-center mb-5 text-blue-400 py-1">
                            <span class="align-text-top">UDST</span><span class="font-bold text-5xl">100.000</span>
                        </div>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Techo diario: USDT
                                10.000
                            </li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Retorno Final: USDT
                                200.000
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-20 pb-2 bg-fixed" id=""
             style='background-image: url("{{ asset('images/landing/business_3.jpg') }}");'>
        <div class="container mx-auto px-4 ">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-300"
                    >
                        <i class="fas fa-money-bill text-xl"></i>
                    </div>
                    <h2 class="text-white font-semibold text-5xl">Plan de recompensa</h2>
                    <p class="mt-4 text-lg text-gray-300">
                        Hay una forma muy simple de aumentar sus gananciasen nuestro negocio. Simplemente inicie el
                        programa de recompensas, recomendando a sus amigos el mismo servicio que acaba de comprar, y
                        recibirá una comisión por ello.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative block bg-gray-300">
        <div class="container mx-auto px-4 pt-1 pb-5 bg-gray-300">
            <div class="flex flex-wrap items-center mt-24">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-user-friends text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Venta directa
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Cuando usted recomienda nuestro producto a un amigo y este hace la primera compra, ganas el
                        10%sobre el valor en USDT (Tether). El contrato de su cliente termina cuando llega al 200%.
                        Después de alcanzar el total contratado, su cliente puede optar por no participar en la
                        operación con el beneficio total o iniciar un nuevo ciclo. Vea el ejemplo de 1.000 USDT
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600"
                    >
                        <img
                            alt="..."
                            class="max-w-full rounded-lg shadow-lg"
                            src="{{ asset('images/landing/sales.png') }}"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- runs plans --}}
    <section class="py-12 bg-white pb-24" id="runs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Planes de Carrera
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Para aquellos que deseen crecer en este negocio, y aún así disfrutar de un estilo de vida saludable
                    con su familia.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                TEAM LEADER
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                <ul>
                                    <li>
                                        1) Poseer el paquete 1K o superior
                                    </li>
                                    <li>
                                        2) También debe tener dos indicados directoscon un paquete de 1K o más
                                    </li>
                                    <li>
                                        3) Tener al menos 8.000 puntos producidospor cada uno de ellos.
                                    </li>
                                </ul>
                                <h3 class="text-bold text-2xl pt-2">
                                    BONO MENSUAL: <span class="text-blue-400">100USDT</span>
                                </h3>
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                MANAGER
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                <ul>
                                    <li>
                                        1) Poseer el paquete 1K o superior.
                                    </li>
                                    <li>
                                        2) También debe tener dos indicados directoscon un paquete de 1K o más.
                                    </li>
                                    <li>
                                        3) Tener al menos 8.000 puntos producidospor cada uno de ellos.
                                    </li>
                                </ul>
                                <h3 class="text-bold text-2xl pt-2">
                                    BONO MENSUAL: <span class="text-blue-400">400USDT</span>
                                </h3>
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section class="relative block">
        <div class="container max-w-7xl mx-auto py-24">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Bono Binario</span>
                            <span class="block text-indigo-600 xl:inline">Formando Equipos</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            A partir de este momento puede formar su equipo de trabajo y participar en los beneficios
                            donde quiera que se produzca la venta. Este bono se llama BINARIO, y tiene este nombre
                            precisamente porque para ganarlo es necesario formar dos equipos, uno a su derecha y otro a
                            su izquierda.Haciendo esto, obtienes el 10% de todos los puntos generados por su equipo más
                            pequeño. Los puntos se generan por cada paquete vendido en su red sin importar quién lo
                            vendió.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                     src="{{ asset('images/landing/business_0.jpg') }}"
                     alt="">
            </div>
        </div>
    </section>

    {{-- TODO add others sections --}}
    <div name="TODO">
    {{--    <section class="pt-20 pb-2 bg-fixed bg-grey-300" id="runs">--}}
    {{--        <div class="container mx-auto px-4 ">--}}
    {{--            <div class="flex flex-wrap justify-center text-center mb-24">--}}
    {{--                <div class="w-full lg:w-6/12 px-4">--}}
    {{--                    <div--}}
    {{--                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blue-300">--}}
    {{--                        <i class="fas fa-rocket text-xl"></i>--}}
    {{--                    </div>--}}
    {{--                    <h2 class="text-gray-900 font-semibold text-5xl">Planes de Carrera</h2>--}}
    {{--                    <p class="mt-4 text-lg text-gray-800">--}}
    {{--                        Para aquellos que deseen crecer en este negocio, y aún así disfrutarde un estilo de vida saludable con su familia.--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

{{--    <section class="pb-20 relative block bg-gray-900">--}}
{{--        <div--}}
{{--            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"--}}
{{--            style="height: 80px; transform: translateZ(0px);">--}}
{{--            <svg--}}
{{--                class="absolute bottom-0 overflow-hidden"--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                preserveAspectRatio="none"--}}
{{--                version="1.1"--}}
{{--                viewBox="0 0 2560 100"--}}
{{--                x="0"--}}
{{--                y="0">--}}
{{--                <polygon--}}
{{--                    class="text-gray-900 fill-current"--}}
{{--                    points="2560 0 2560 100 0 100"--}}
{{--                ></polygon>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">--}}
{{--            <div class="flex flex-wrap text-center justify-center">--}}
{{--                <div class="w-full lg:w-6/12 px-4">--}}
{{--                    <h2 class="text-4xl font-semibold text-white">Build something</h2>--}}
{{--                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">--}}
{{--                        Put the potentially record low maximum sea ice extent tihs year--}}
{{--                        down to low ice. According to the National Oceanic and--}}
{{--                        Atmospheric Administration, Ted, Scambos.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flex flex-wrap mt-12 justify-center">--}}
{{--                <div class="w-full lg:w-3/12 px-4 text-center">--}}
{{--                    <div--}}
{{--                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"--}}
{{--                    >--}}
{{--                        <i class="fas fa-medal text-xl"></i>--}}
{{--                    </div>--}}
{{--                    <h6 class="text-xl mt-5 font-semibold text-white">--}}
{{--                        Excelent Services--}}
{{--                    </h6>--}}
{{--                    <p class="mt-2 mb-4 text-gray-500">--}}
{{--                        Some quick example text to build on the card title and make up--}}
{{--                        the bulk of the card's content.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="w-full lg:w-3/12 px-4 text-center">--}}
{{--                    <div--}}
{{--                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"--}}
{{--                    >--}}
{{--                        <i class="fas fa-poll text-xl"></i>--}}
{{--                    </div>--}}
{{--                    <h5 class="text-xl mt-5 font-semibold text-white">--}}
{{--                        Grow your market--}}
{{--                    </h5>--}}
{{--                    <p class="mt-2 mb-4 text-gray-500">--}}
{{--                        Some quick example text to build on the card title and make up--}}
{{--                        the bulk of the card's content.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="w-full lg:w-3/12 px-4 text-center">--}}
{{--                    <div--}}
{{--                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"--}}
{{--                    >--}}
{{--                        <i class="fas fa-lightbulb text-xl"></i>--}}
{{--                    </div>--}}
{{--                    <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>--}}
{{--                    <p class="mt-2 mb-4 text-gray-500">--}}
{{--                        Some quick example text to build on the card title and make up--}}
{{--                        the bulk of the card's content.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="relative block py-24 lg:pt-0 bg-gray-900" id="contact_us">--}}
{{--        <div class="container mx-auto px-4">--}}
{{--            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">--}}
{{--                <div class="w-full lg:w-6/12 px-4">--}}
{{--                    <div--}}
{{--                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"--}}
{{--                    >--}}
{{--                        <div class="flex-auto p-5 lg:p-10">--}}
{{--                            <h4 class="text-2xl font-semibold">Want to work with us?</h4>--}}
{{--                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">--}}
{{--                                Complete this form and we will get back to you in 24 hours.--}}
{{--                            </p>--}}
{{--                            <div class="relative w-full mb-3 mt-8">--}}
{{--                                <label--}}
{{--                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"--}}
{{--                                    for="full-name"--}}
{{--                                >Full Name</label--}}
{{--                                ><input--}}
{{--                                    type="text"--}}
{{--                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"--}}
{{--                                    placeholder="Full Name"--}}
{{--                                    style="transition: all 0.15s ease 0s;"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="relative w-full mb-3">--}}
{{--                                <label--}}
{{--                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"--}}
{{--                                    for="email"--}}
{{--                                >Email</label--}}
{{--                                ><input--}}
{{--                                    type="email"--}}
{{--                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"--}}
{{--                                    placeholder="Email"--}}
{{--                                    style="transition: all 0.15s ease 0s;"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="relative w-full mb-3">--}}
{{--                                <label--}}
{{--                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"--}}
{{--                                    for="message"--}}
{{--                                >Message</label--}}
{{--                                ><textarea--}}
{{--                                    rows="4"--}}
{{--                                    cols="80"--}}
{{--                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"--}}
{{--                                    placeholder="Type a message..."--}}
{{--                                ></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="text-center mt-6">--}}
{{--                                <button--}}
{{--                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"--}}
{{--                                    type="button"--}}
{{--                                    style="transition: all 0.15s ease 0s;"--}}
{{--                                >--}}
{{--                                    Send Message--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
</div>

    {{-- footer section --}}
    <footer class="relative bg-gray-300 pt-8 pb-6">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        <img class="block lg:hidden h-8 w-auto"
                             src="{{  asset('images/trust-logo.png') }}" alt="Workflow">
                        <img class="hidden lg:block h-8 w-auto"
                             src="{{  asset('images/trust-logo.png') }}"
                             alt="trust">
                    </a>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        No pierda la oportunidad de invertir en su futuro.
                    </h5>
                    <div class="mt-6">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button"
                        >
                            <i class="flex fab fa-twitter"></i></button
                        >
                        <button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button"
                        >
                            <i class="flex fab fa-facebook-square"></i></button
                        >
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button"
                        >
                            <i class="flex fab fa-dribbble"></i></button
                        >
                        <button
                            class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button"
                        >
                            <i class="flex fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span
                    class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                >menu</span
                >
                            <ul class="list-unstyled">
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#top"
                                    >Inicio</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#about"
                                    >Sobre Nosotros</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#leaders"
                                    >Líderes</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="#plains"
                                    >Planes</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                <span
                    class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                >Other Resources</span
                >
                            <ul class="list-unstyled">
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                                    >MIT License</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms"
                                    >Terms &amp; Conditions</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy"
                                    >Privacy Policy</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us"
                                    >Contact Us</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400"/>
            <div
                class="flex flex-wrap items-center md:justify-between justify-center"
            >
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2019 Tailwind Starter Kit by
                        <a
                            href="https://www.creative-tim.com"
                            class="text-gray-600 hover:text-gray-900"
                        >Creative Tim</a
                        >.
                    </div>
                </div>
            </div>
        </div>
    </footer>

</x-app-layout>
<script src="{{ asset('js/all.js') }}"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {easing: 'easeInOutQuart'})
</script>
