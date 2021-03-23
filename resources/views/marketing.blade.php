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
                                    <span class="block text-white xl:inline">Plan de Marketing</span><br>
                                </h1>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Blog last 3 --}}
    <section class="pb-20 relative block bg-white mx-auto">
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
        <div class="container px-10 md:px-40 lg:px-60 py-24 mx-auto">
            <div>
                <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-10">
                    Trust Investing tiene un interesante plan de compensación o recompensa. Es opcional y está diseñado
                    para aquellos que desean obtener más de ese 200% por sus inversiones. Dichos planes son para
                    aquellos que desean formar un equipo de inversores. Están basados en el exitoso modelo de negocios
                    llamado Network Marketing o Mercadeo de Red.
                </p>
            </div>
            <div class="mt-20" id="direct_sale">
                <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-5xl title-font text-center text-gray-900 mb-20">
                    Venta DIRECTA
                </h1>
                <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-10">
                    Gane en cada ocasión que invita a alguien a formar parte de su red de negocios. El 10% en comisión
                    por Venta Directa y el 5% en acto de renovación y recompra:
                </p>
                <ul class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-5">
                    <li class="mb-5">A) Si un afiliado compra su primer paquete o un paquete de una cantidad que nunca
                        antes había comprado, la empresa bonifica con el 10% del valor a su patrocinador.
                    </li>
                    <li>B) Si un afiliado compra un paquete de una cantidad que ya antes había comprado, la empresa
                        bonifica con el 5% del valor a su patrocinador.
                    </li>
                </ul>
            </div>
            <div class="mb-20 mt-20" id="binary_bonus">
                <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-5xl title-font text-center text-gray-900 mb-20">
                    Bono BINARIO
                </h1>
                 <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-10">
                    Gane cada día hasta el 10% del volumen en su rama de menor facturación.
                </p>
                 <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-10">
                    Cada afiliado tiene la posibilidad de formar dos equipos: uno a su derecha y otro a su izquierda (en
                    su oficina virtual). El lado binario por el que afiliado es invitado constituye su lado fuerte o de
                    derrame y el lado contrario, constituye su lado débil o de trabajo. Para Calificar o "desbloquear"
                    el Bono Binario, es necesario que el afiliado invite al menos a dos personas a formar parte de su
                    equipo, uno a cada lado de su estructura binaria indistintamente. En este momento, se activará el
                    Bono Binario de este afiliado y podrá comenzar a cobrar, una vez al día, por este concepto. ¿Cómo
                    funciona? Veámoslo a través de un ejemplo:
                    Juan fue invitado por el lado izquierdo, por lo que la izquierda constituye su lado fuerte o de
                    derrame. Con el objetivo de activar su bono binario, Juan invita a Pedro, su primer referido
                    directo, por el mismo lado por el que le invitaron a él, el izquierdo con 1000 USDT. Juan necesita
                    referir a alguien más para activar su Bono Binario, por lo que invita a María por su lado débil o de
                    trabajo y esta adquiere su primer plan de inversión de 300 USDT. Una vez activado el Bono Binario de
                    Juan, este comienza a ganar por este concepto siguiendo el siguiente algoritmo:
                </p>
                <ul class=" text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-5">
                    <li class="mb-5">1. Se contabiliza el volumen de ventas o la cantidad de dinero invertido por los
                        equipos de ambos lados; en este caso, 1000 por la izquierda y 300 por la derecha (se
                        contabilizan en forma de puntos binarios).
                    </li>
                    <li class="mb-5">2. Se recibe hasta el 10% de la cantidad de puntos en el equipo de menor inversión;
                        en este caso, 300 puntos pagan una cantidad de 30 USDT por el equipo de la derecha.
                    </li>
                    <li class="mb-5">3. Se restan esos puntos pagados de la cantidad de ambos lados; por lo que al
                        restar 300 puntos a cada lado quedarían 700 puntos por la izquierda y 0 puntos por la derecha.
                    </li>
                </ul>
                 <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-10">
                    Para continuar recibiendo pagos por este concepto, Juan necesita ampliar su red, invitando, en este
                    caso, a nuevos referidos directos por su lado derecho que quedó en 0. Pero no se trata solo de Juan,
                    sino también del trabajo de su equipo (las personas que Juan invitó) de la izquierda y de la
                    derecha, quienes le aportarán puntos binarios según vayan creciendo. Por si esto fuera poco Juan
                    también recibirá puntos por derrame, que no son más que los puntos aportados por su línea ascendente
                    en su lado fuerte ya que esta pierna es compartida.
                </p>
                <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 font-bold">
                    NOTA:
                </p>
                <ul class=" text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-5">
                    <li class="mb-5">A) Si un afiliado compra su primer paquete o un paquete de una cantidad que nunca
                        antes había comprado, aporta al árbol de su patrocinador 1 punto por cada USDT.
                    </li>
                    <li class="mb-5">B) Si un afiliado compra un paquete de una cantidad que ya antes había comprado
                        aporta al árbol de su patrocinador ½ punto por cada USDT.
                    </li>
                    <li class="mb-5">C) El porcentaje pagado por el binario no es fijo y paga como máximo un 10%. Clic
                        aquí para saber su funcionamiento.
                    </li>
                </ul>
            </div>
            <div id="carrier_plan">
                <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-5xl title-font text-center text-gray-900 mb-20">
                    Plan de CARRERA
                </h1>
                 <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-10">
                    Trust Investing ofrece para los afiliados que deciden hacer su carrera de negocios con nosotros, 7
                    graduaciones que bonifican todos los días primero de cada mes, entre 100 y 150 000 USDT.
                </p>
                 <p class="text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-10">
                    Team Leader es la primera graduación dentro del plan de carrera y de ella parten las demás
                    graduaciones. Para alcanzar esta graduación, se debe cumplir con las siguientes condiciones sin
                    importar el orden en que se obtengan:
                </p>
                <ul class=" text-xl md:text-2xl lg:text-2xl title-font text-left text-gray-500 mb-5">
                    <li class="mb-5">- Adquirir el plan 1K o superior.
                    </li>
                    <li>- Contar con dos referidos directos que hayan adquirido el plan 1K o superior. No importa si
                        estos referidos directos se encuentran ubicados en el lado derecho, izquierdo o el mismo lado
                        del árbol binario.
                    </li>
                    <li>- Cada uno de esos directos, debe poseer 8000 puntos o más en sus estructuras. Esto significa
                        que la suma de los puntos históricos a la derecha con los puntos históricos a la izquierda de
                        cada uno debe dar como resultado 8000 o superior (no se tienen en Cuenta los puntos obtenidos
                        por derrame).
                    </li>
                </ul>
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
                                        href="#plans"
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
