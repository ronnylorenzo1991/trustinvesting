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
                                    <span class="block text-white xl:inline">Histórico de Pagos</span><br>
                                </h1>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- payments history --}}
    <section class="pb-20 relative block bg-white mx-auto">
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
                <polygon
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container px-10 md:px-40 lg:px-60 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Datos de pagos</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    La gestión de inversiones de capital de Trustinvesting nos permite obtener unos beneficios diarios a
                    partir de una inversión inicial. Con un depósito mínimo de 15 dólares USD recibimos un rendimientos
                    cada día que puede ir desde el 0,1 hasta el 5% mensual aproximadamente
                </p>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-200 bg-blue-200 px-4 py-6 rounded-lg">
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $paymentsDay ?: 0 }}%</h2>
                        <p class="leading-relaxed">Diario</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-200 bg-blue-200 px-4 py-6 rounded-lg">
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $paymentsWeek ?: 0 }}%</h2>
                        <p class="leading-relaxed">Semanal</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-200 bg-blue-200 px-4 py-6 rounded-lg">
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $paymentsMonth ?: 0 }}%</h2>
                        <p class="leading-relaxed">Mensual</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-200 bg-blue-200 px-4 py-6 rounded-lg">
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $paymentsYear ?: 0 }}%</h2>
                        <p class="leading-relaxed">Anual</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

<script src="{{ asset('js/all.js') }}"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {easing: 'easeInOutQuart'})
</script>
