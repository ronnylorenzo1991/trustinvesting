<nav class="fixed top-0 inset-x-0 z-50 bg-gray-800 font-medium shadow-lg"
     x-data="{ showMobileMenu: false, showProfileMenu: false }">
    <div class="container px-4">
        <div class="relative flex items-center justify-between h-16">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <button x-on:click="showMobileMenu = !showMobileMenu"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            {{-- menu and logo --}}
            <div class="flex-1 flex items-center justify-center sm:items-stretch md:justify-start">
                {{-- logo --}}
                <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto"
                         src="{{  Storage::url('public/logos/trust-logo.png') }}" alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto"
                         src="{{  Storage::url('public/logos/trust-logo.png') }}"
                         alt="trust">
                </a>
                {{-- menu lg--}}
                <div class="hidden md:block md:ml-6">
                    <div class="flex space-x-4">
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            @if ((request()->is('/')))
                                <a href="#top"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium capitalize">{{ trans('multi-leng.menu_home') }}</a>
                                <a href="#about"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium capitalize">{{ trans('multi-leng.menu_about') }}</a>
                                <a href="#leaders"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium capitalize">{{ trans('multi-leng.menu_leaders') }}</a>
                                <a href="#plains"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium capitalize">{{ trans('multi-leng.menu_plains') }}</a>
                                <div class="inline-block mr-2 mt-2">
                                    <a href="https://trustinvesting.com/yassercuba/unete"
                                       class="focus:outline-none text-white text-sm py-2 px-2 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg capitalize">{{ trans('multi-leng.register') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('language', 'es') }}"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    <i class="fa fa-flag"></i> es
                </a>
                <a href="{{ route('language', 'en') }}"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    <i class="fa fa-flag"></i> en
                </a>
            </div>
        </div>
    </div>
    {{--mobile menu--}}
    <div class="sm:hidden" x-show="showMobileMenu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#top" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">{{ trans('multi-leng.menu_home') }}</a>
            <a href="#about"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium capitalize">{{ trans('multi-leng.menu_about') }}</a>
            <a href="#leaders"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium capitalize">{{ trans('multi-leng.menu_leaders') }}</a>
            <a href="#plains"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium capitalize">{{ trans('multi-leng.menu_plains') }}</a>
        </div>
    </div>
</nav>
