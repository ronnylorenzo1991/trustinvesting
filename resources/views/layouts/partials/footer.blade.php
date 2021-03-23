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
                        <span class="mt-8 block uppercase text-gray-600 text-sm font-semibold mb-2">menu</span>
                        <ul class="list-unstyled">
                            @if ((request()->is('/')))
                                <li>
                                    <a href="#top"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">{{ trans('multi-leng.menu_home') }}</a>
                                </li>
                                <li>
                                    <a href="#about"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">{{ trans('multi-leng.menu_about') }}</a>
                                </li>
                                <li>
                                    <a href="#leaders"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">{{ trans('multi-leng.menu_leaders') }}</a>
                                </li>
                                <li>
                                    <a href="#plans"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">{{ trans('multi-leng.menu_plans') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('marketing') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">Marketing</a>
                                </li>
                                <li>
                                    <a href="{{ route('manage') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">{{ trans('multi-leng.manage') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('videos') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">Videos</a>
                                </li>
                                <li>
                                    <a href="{{ route('post.index') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">Blog</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('home') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">{{ trans('multi-leng.menu_home') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('marketing') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">Marketing</a>
                                </li>
                                <li>
                                    <a href="{{ route('manage') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">{{ trans('multi-leng.manage') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('videos') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">Videos</a>
                                </li>
                                <li>
                                    <a href="{{ route('post.index') }}"
                                       class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">Blog</a>
                                </li>
                            @endif
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
