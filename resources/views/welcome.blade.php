<x-app-layout>
    {{-- top --}}
    <section class="relative bg-gray-100" id="top">
        <div class="container mx-auto">
            <div class="relative bg-white overflow-hidden px-12 py-12 relative pt-24 pb-323"
                 style="background: url({{ asset('images/blue_bussines.jpg') }})">
                <svg class="absolute bottom-0 -ml-24"
                     xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="none"
                     version="1.1"
                     viewBox="0 0 400 100"
                     x="0"
                     y="0">
                    <polygon class="text-white  fill-current"
                             points="3000 -500 5000 400 0 100"></polygon>
                </svg>
                <div class="max-w-5xl mx-">
                    <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                            <div class="sm:text-center lg:text-left">
                                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                    <span class="block text-white xl:inline">Trust Investing</span><br>
                                </h1>
                                <p class="mt-3 text-white text-base sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Operamos en la gestión de criptoactivos en los mercados más atrevidos, y todavía
                                    podemos
                                    contar con un alto índice de liquidez. No pierda la oportunidad de unirse ahora
                                    mismo
                                </p>
                                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                    <a href="#" target="_blank">
                                        <div
                                            class="p-6 mr-2 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-white">
                                            <i class="fab fa-facebook-f text-blue-600 text-xl"></i>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank">
                                        <div
                                            class="p-6 mr-2 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-white">
                                            <i class="fab fa-instagram-square text-blue-600 text-2xl"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
                <div
                    class="animate-bounce invisible h-0 sm:invisible sm:h-0 md:invisible md:h-0 lg:visible lg:h-16 lg:w-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-auto lg:z-40">
                    <img class="pt-24 w-full lg:w-4/5 z-50" src="{{ asset('images/bitcoin.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- about us --}}
    <section class="relative py-20 bg-white" id="about">
        <div class="container mx-auto px-4 pt-2">
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="transition transform duration-700 opacity-0 translate-x-0 relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600"
                            data-class-in="translate-x-30 opacity-100"
                            data-class-out="-translate-x-32 opacity-0">
                            <img
                                alt="..."
                                src="{{ asset('images/landing/business_5.jpg') }}"
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
                                desarrolladores.
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

    <section class="pb-20 relative block bg-gray-200">
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
                    class="text-gray-200 fill-current"
                    points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 pt-2">
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                        <i class="fas fa-chart-bar text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        Valores
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Actuar con transparencia, generando confianza a nuestros clientes y socios, y así, mejorar la
                        calidad devida de familias en todo el mundo.
                    </p>
                    <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                        En este mundo globalizado y cada vez más dependiente del internet, se habla con mayor frecuencia
                        de Inversiones Online, Criptoactivos, Trading, Criptomonedas, Forex, entre otras, pero realmente
                        son muy pocas personas las que conocen con exactitud, de qué trata todo eso. Si necesita mas
                        informacion puede acceder a
                        <span>
                            <a href="https://trustinvesting.com/"
                               class="font-bold text-gray-800">la pagina oficial.</a>
                        </span>
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="transition transform duration-700 opacity-0 translate-x-0 relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600"
                        data-class-in="translate-x-30 opacity-100"
                        data-class-out="-translate-x-32 opacity-0">
                        <img
                            alt="..."
                            src="{{ asset('images/landing/business_1.jpg') }}"
                            class="w-full align-middle rounded-t-lg"/>
                        <blockquote class="relative p-8 mb-4">
                            <svg
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 583 95"
                                class="absolute left-0 w-full block"
                                style="height: 95px; top: -94px;">
                                <polygon
                                    points="-30,95 583,95 583,65"
                                    class="text-blue-600 fill-current"></polygon>
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

    {{-- join us section --}}
    <section class="pb-20 relative block bg-white">
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
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 pt-24">
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="transition transform duration-700 opacity-0 translate-x-0 relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600"
                            data-class-in="translate-x-30 opacity-100"
                            data-class-out="-translate-x-32 opacity-0">
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
                                    ¡Únete a nuestro Club de inversores de éxito!
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    Donde gestionamos tus criptoactivos para que generes beneficios sin la necesidad de
                                    ser un experto.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-50">
                                <i class="fas fa-user-friends text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">Inversión Segura</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                Te ayudaremos a descubrir los recursos necesarios para que aprendas de una vez y por
                                todas
                                cómo, cuándo y dónde poner a trabajar tu dinero. En piloto automático despreocupándote
                                de todo lo demás.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our leaders section --}}
    <section class="pb-20 relative block bg-blue-500" id="leaders">
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
                    class="text-blue-500 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 pb-24 pt-24">
            <div class="flex flex-wrap justify-center text-center mb-24 text-white">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Equipo Directivo</h2>
                    <p class="text-lg leading-relaxed m-4">
                        Contamos con un equipo directivo de calidad, con pensamiento y liderazgo dirigido a fomentar el
                        desarrollo personal de cada miembro.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6 bg-white shadow-lg mt-20">
                        <div class="pt-12">
                            <img
                                alt="..."
                                src="{{ asset('images/landing/leader_big_1.png') }}"
                                class="shadow-lg rounded-full max-w-full mx-auto -mt-32"
                                style="max-width: 120px;"
                            />
                        </div>
                        <div class="pt-20 text-center">
                            <h5 class="text-xl font-bold">Fabiano Lima</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Director de Marketing
                            </p>
                            <div class="mt-6">
                                <a href="https://www.facebook.com/fabiano.delima.54966" target="_blank">
                                    <div
                                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-blue-600">
                                        <i class="fab fa-facebook-f text-white text-xl"></i>
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/fabianolorite/" target="_blank">
                                    <div
                                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-red-600">
                                        <i class="fab fa-instagram text-white text-xl"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6 bg-white shadow-lg mt-20">
                        <div class="pt-12">
                            <img
                                alt="..."
                                src="{{ asset('images/landing/leader_big_2.png') }}"
                                class="shadow-lg rounded-full max-w-full mx-auto -mt-32"
                                style="max-width: 120px;"
                            />
                        </div>
                        <div class="pt-20 text-center">
                            <h5 class="text-xl font-bold">Diego Chaves</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                CEO
                            </p>
                            <div class="mt-6">
                                <a href="https://www.facebook.com/diego.chaves.1291" target="_blank">
                                    <div
                                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-blue-600">
                                        <i class="fab fa-facebook-f text-white text-xl"></i>
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/diegochavesceo/" target="_blank">
                                    <div
                                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-red-600">
                                        <i class="fab fa-instagram text-white text-xl"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6 bg-white shadow-lg mt-20">
                        <div class="pt-12">
                            <img
                                alt="..."
                                src="{{ asset('images/landing/leaders_3.png') }}"
                                class="shadow-lg rounded-full max-w-full mx-auto -mt-32"
                                style="max-width: 120px;"
                            />
                        </div>
                        <div class="pt-20 text-center">
                            <h5 class="text-xl font-bold">Claudio Barbosa</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Director de Tecnologías
                            </p>
                            <div class="mt-6">
                                <a href="https://www.facebook.com/profile.php?id=100015499410142" target="_blank">
                                    <div
                                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-blue-600">
                                        <i class="fab fa-facebook-f text-white text-xl"></i>
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/claudio_anrry/" target="_blank">
                                    <div
                                        class="text-blue-600 p-3 text-center inline-flex items-center justify-center w-10 h-10 mb-10 shadow-lg rounded-full bg-red-600">
                                        <i class="fab fa-instagram text-white text-xl"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- card section --}}
    <section class="pb-20 relative block bg-white" id="caracterization">
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
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 pb-24 z-50">
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
                    <polygon class="text-white  fill-current"
                             points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="flex flex-wrap justify-center text-center pt-24 mb-15">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-5xl font-semibold">Caracterización</h2>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
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
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
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
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
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
                    <h2 class="text-white font-semibold text-5xl">Planes de Gestión</h2>
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

    {{-- card section --}}
    <section class="bg-white" id="cards">
        <div class="container mx-auto px-4 pb-24 z-50">
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Planes STAR</h2>
                                <p class="leading-relaxed text-base">Trust Investing pone a disposición de sus afiliados
                                    un conjunto de planes de gestión tipo STAR que van desde los 15 USDT hasta los 100
                                    000 USDT. El retorno final es el doble del valor del plan, pues la compañía se
                                    compromete a duplicar la inversión de sus afiliados, es decir, alcanzar el 200% del
                                    capital invertido.</p>
                                <a class="mt-3 text-indigo-500 inline-flex items-center">Ver Detalles
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                         viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center -mt-20"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                                <i class="fas fa-gem"></i>
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Planes DIAMOND</h2>
                                <p class="leading-relaxed text-base">Trust Investing pone a disposición de sus afiliados
                                    un conjunto de planes de gestión tipo DIAMOND que van desde los 1000 USDT hasta los
                                    100 000 USDT. El retorno final siempre es el triple del valor del plan, pues la
                                    compañía se compromete a triplicar la inversión de sus afiliados, es decir, alcanzar
                                    el 300% del capital invertido.</p>
                                <a class="mt-3 text-indigo-500 inline-flex items-center">Ver Detalles
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                         viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center -mt-24"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Interés Compuesto</h2>
                                <p class="leading-relaxed text-base">Usted puede adquirir todos los planes que desee
                                    independientemente de su tipo y valor. Gracias a esto es posible realizar Interés
                                    Compuesto, según Einstein, la fuerza más poderosa del Universo. ¡Descubre como
                                    multiplicar tu dinero a través del tiempo!</p>
                                <a class="mt-3 text-indigo-500 inline-flex items-center">Ver Detalles
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                         stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                         viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 relative block bg-gray-200">
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
                    class="text-gray-200 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-5xl title-font text-center text-gray-900 mb-20">Plan de
                Recompensa
            </h1>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex">
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Venta DIRECTA</h2>
                        <p class="leading-relaxed text-base">Gane en cada ocasión que invita a alguien a formar parte de
                            su red de negocios el 10% en comisión por Venta Directa y el 5% en acto de renovación y
                            recompra. </p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Ver Detalles
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Bono BINARIO</h2>
                        <p class="leading-relaxed text-base">Amplíe su Red de Negocios y gane cada día hasta el 10% del
                            volumen en su rama de menor facturación.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Ver Detalles
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Planes de Carrera</h2>
                        <p class="leading-relaxed text-base">Trust Investing ofrece para los afiliados que deciden hacer
                            su carrera de negocios con nosotros, 7 graduaciones o rangos que bonifican todos los días
                            primero de cada mes, entre 100 y 150 000 USDT. </p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Ver Detalles
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- our leaders section --}}
    <section class="pb-20 relative block bg-blue-500">
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
                    class="text-blue-500 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 text-white pt-24">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-5xl font-bold">Inicio Rápido</h2>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="w-12 h-12 inline-flex items-center justify-center rounded-full text-white mb-4 flex-shrink-0 text-5xl">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="flex-grow pl-6">
                                <p class="leading-relaxed text-base">Planes STAR para todo el público, participa en este
                                    mundo innovador desde solo 15 dólares en Bitcoin, una oportunidad diferente.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="w-12 h-12 inline-flex items-center justify-center rounded-full text-white mb-4 flex-shrink-0 text-5xl">
                                <i class="fas fa-gem"></i>
                            </div>
                            <div class="flex-grow pl-6">
                                <p class="leading-relaxed text-base">Añade más seguridad a tu inversión, tenemos planes
                                    DIAMOND respaldados en diamantes y piedras preciosas bajo contrato.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="w-12 h-12 inline-flex items-center justify-center rounded-full text-white mb-4 flex-shrink-0 text-5xl">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="flex-grow pl-6">
                                <p class="leading-relaxed text-base">No importa raza, sexo, religión o posición social.
                                    Todos podemos participar y desde cualquier lugar del mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 text-center"
                    data-class-in="translate-y-0 opacity-100"
                    data-class-out="translate-y-32 opacity-0">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="w-12 h-12 inline-flex items-center justify-center rounded-full text-white mb-4 flex-shrink-0 text-5xl">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="flex-grow pl-6">
                                <p class="leading-relaxed text-base">Estamos contigo paso a paso y en cada momento, te
                                    impulsamos a nuevos resultados y altos niveles de excelencia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    class="mt-8 block uppercase text-gray-600 text-sm font-semibold mb-2"
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
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400"/>
            <div
                class="flex flex-wrap items-center md:justify-between justify-center"
            >
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2021 trustinvesting. Created By
                        <a
                            href="https://cvgarcialorenzo.herokuapp.com"
                            class="text-gray-600 hover:text-gray-900"
                        >RGL</a
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
