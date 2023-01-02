<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gray-50">
    <!-- navbar -->
    @include('components.navbar')

    <!-- header -->
    <section class="relative bg-white">

        <div class="relative z-20 px-4 py-12 mx-auto text-center max-w-7xl lg:py-16">
            <div class="flex flex-wrap">

                <div class="px-10 mx-auto max-w-7xl">
                    <div class="w-full mx-auto text-left md:text-center">
                        <h1 class="font-title mb-6 text-4xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight">
                            <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline">{{ __('blogspage.intro') }}</span>
                            <br class="lg:block hidden"> {{ __('blogspage.intro_subtitle') }}
                        </h1>
                        <p class="font-description px-0 text-lg text-gray-500 md:text-xl lg:px-24">
                            {{ __('blogspage.intro_description') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Fitlers -->
        {{-- <div class="relative z-30 h-48 px-10 bg-white lg:h-32">
            <form onsubmit="return false;" class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 overflow-hidden transform -translate-y-12 bg-white rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
                <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
                    <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" data-rounded="rounded-lg" placeholder="What Are You Searching For?">
                </div>
                <div class="w-0.5 bg-gray-100 h-10 lg:block hidden"></div>
                <div class="relative flex items-center w-full h-12 border-2 border-gray-200 rounded-lg lg:w-auto lg:border-0 lg:flex-1">
                    <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" data-rounded="rounded-lg" placeholder="Location?">
                    <svg class="absolute right-0 w-6 h-6 mr-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div class="w-full h-full lg:w-auto">
                    <button type="submit" class="inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 lg:w-64" data-primary="indigo-600" data-rounded="rounded-md">SEARCH</button>
                </div>
            </form>
        </div> --}}

    </section>

    <!-- credibility -->
    @include('components.credibility', ['tagline' => __('blogspage.startups')])

    <!-- publications  -->
    <section class="bg-white">
        <div x-data="{ mobileDialog: false }">
            <!--
                Mobile filter dialog

                Off-canvas filters for mobile, show/hide based on off-canvas filters state.
            -->

            <!-- Mobile Filters Dialog -->
            <div x-cloak x-show="mobileDialog" class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
                <!--
                Off-canvas menu overlay, show/hide based on off-canvas menu state.

                Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div  class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

                <!--
                Off-canvas menu, show/hide based on off-canvas menu state.

                Entering: "transition ease-in-out duration-300 transform"
                    From: "translate-x-full"
                    To: "translate-x-0"
                Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "translate-x-full"
                -->
                <div x-show="mobileDialog" class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">
                    <div class="px-4 flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button x-on:click="mobileDialog = false" type="button" class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4 border-t border-gray-200">
                        <h3 class="sr-only">Categories</h3>

                        <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                            <li>
                                <a href="#" class="block px-2 py-3"> Totes </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3"> Backpacks </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3"> Travel Bags </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3"> Hip Bags </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3"> Laptop Sleeves </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>

            <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative z-10 flex items-baseline justify-between pt-24 pb-6 border-b border-gray-200">
                    <h1 class="font-title text-4xl font-extrabold tracking-tight text-gray-900">{{ __('label.latest_published') }}</h1>

                    <div x-data="{openSort: false}" class="flex items-center">
                        <div class="relative inline-block text-left">
                            <div>
                                <button x-on:click="openSort = true" x-on:click.away="openSort = false" type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    {{ __('label.sort_by') }}
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <!--
                                Dropdown menu, show/hide based on menu state.

                                Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->

                            <div x-cloak x-show="openSort" class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <!--
                                        Active: "bg-gray-100", Not Active: ""

                                        Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                    -->
                                    <a href="{{ request()->has('sort') ? '?sort=' . request('sort') : url()->current() }}"
                                        class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                        {{ __('label.latest_published') }}
                                    </a>

                                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'best_selling']) }}"
                                        class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                        {{ __('label.best_selling') }}
                                    </a>

                                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'most_reviewed']) }}"
                                        class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                        {{ __('label.most_reviewed') }}
                                    </a>

                                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'low_to_high']) }}"
                                        class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">
                                        {{ __('label.price_to_high') }}
                                    </a>

                                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'high_to_low']) }}"
                                        class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">
                                        {{ __('label.price_to_low') }}
                                    </a>
                                </div>
                            </div>

                        </div>

                        <button x-on:click="mobileDialog = true" type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
                            <span class="sr-only">Filters</span>
                            <!-- Heroicon name: solid/filter -->
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <section aria-labelledby="products-heading" class="pt-6 pb-48">
                    <h2 id="products-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
                        <!-- Filters -->
                        <form class="hidden lg:block">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                                <li>
                                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'best_selling']) }}"> Notion Templates </a>
                                </li>

                                <li>
                                    <a href="#"> Kodekativ.co </a>
                                </li>

                                <li>
                                    <a href="#"> Webflix.id </a>
                                </li>

                                <li>
                                    <a href="#"> Jobstack.co </a>
                                </li>

                                <li>
                                    <a href="#"> Pram.dev </a>
                                </li>

                                <li>
                                    <a href="#"> Remote Working </a>
                                </li>

                                <li>
                                    <a href="#"> Freelance on Fiverr </a>
                                </li>

                                <li>
                                    <a href="#"> Freelance on Upwork </a>
                                </li>
                            </ul>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <!-- Replace with your content -->
                            <div class="grid grid-cols-1 gap-x-8 gap-y-32 sm:grid-cols-2 sm:gap-y-32 lg:grid-cols-2">

                                <livewire:publications>

                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </section>
            </main>

        </div>
    </section>

    <!-- footer -->
    @include('components.footer')

    @vite('resources/js/app.js')
</body>

</html>
