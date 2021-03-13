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
                         src="{{  asset('images/trust-logo.png') }}" alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto"
                         src="{{  asset('images/trust-logo.png') }}"
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
                                <a href="{{ route('post.index') }}"
                                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blog</a>
                                <div class="inline-block mr-2 mt-2">
                                    <a href="https://trustinvesting.com/yassercuba/unete"
                                       class="focus:outline-none text-white text-sm py-2 px-2 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg capitalize">{{ trans('multi-leng.register') }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <a href="{{ route('language', 'es') }}"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    <img class="h-3 w-auto"
                         src="{{ asset('images/spanish.png') }}" alt="spanish">
                </a>
                <a href="{{ route('language', 'en') }}"
                   class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    <img class="h-3 w-auto"
                         src="{{ asset('images/english.png') }}" alt="english">
                </a>
            </div>
            @auth
                {{-- Avatar section --}}
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    {{-- Notification --}}
                    <button
                        class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        <div>
                            <button x-on:click="showProfileMenu = !showProfileMenu"
                                    class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                     src="{{ auth()->user()->profile_photo_url }}"
                                     alt="">
                            </button>
                        </div>
                        <!--
                          Profile dropdown panel, show/hide based on dropdown state.
                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div x-show="showProfileMenu ?? false" x-on:click.away="showProfileMenu = !showProfileMenu"
                             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
                             role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            @can('admin.dashboard')
                                <a href="{{ route('admin.home') }}"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                    Administration
                                </a>
                            @endcan
                            <a href="{{ route('profile.show') }}"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                   role="menuitem" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Sign out
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @endauth
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
