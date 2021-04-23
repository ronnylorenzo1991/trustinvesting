<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 p-4 md:w-1/3 flex mx-auto"
            data-class-in="translate-y-0 opacity-100"
            data-class-out="translate-y-32 opacity-0">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mx-auto">
                <img class="object-cover object-center rounded mb-5 sm:mb-0 lg:mb-0 md:mb-0" alt="hero" src="{{ $payment->image->url ?? '' }}">
            </div>
        </div>
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><span class="font-bold"> Pago Diario</span>
                <br class="hidden lg:inline-block">recogiendo los frutos de una buena desición
            </h1>
            <p class="mb-8 leading-relaxed text-justify">La gestión de inversiones de capital de Trustinvesting nos permite
                obtener unos beneficios diarios a partir de una inversión inicial. Con un depósito mínimo de 15 dólares
                USD recibimos un rendimientos cada día que puede ir desde el 0,1 hasta el 5% mensual aproximadamente</p>
            <div class="flex justify-center">
                <a href="{{ route('payments-history') }}"
                    class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">
                    Ver Histórico de pagos
                </a>
            </div>
        </div>
    </div>
</section>
