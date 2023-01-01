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
                            {{ __('productspage.intro_prefix') }} <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline">{{ __('productspage.intro') }}</span>
                            {{ __('productspage.intro_postix') }}<br class="lg:block hidden"> {{ __('productspage.intro_subtitle') }}
                        </h1>
                        <p class="font-description px-0 text-lg text-gray-500 md:text-xl lg:px-24">
                            {{ __('productspage.intro_description') }}
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
    @include('components.credibility', ['tagline' => __('productspage.startups')])

    <!-- products  -->
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

                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900"> Color </span>
                                    <span class="ml-6 flex items-center">
                                        <!--
                                        Expand icon, show/hide based on section open state.

                                        Heroicon name: solid/plus-sm
                                        -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>
                                        <!--
                                        Collapse icon, show/hide based on section open state.

                                        Heroicon name: solid/minus-sm
                                        -->
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-0">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500"> White </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500"> Beige </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500"> Blue </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500"> Brown </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500"> Green </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500"> Purple </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-1" aria-expanded="false">
                                <span class="font-medium text-gray-900"> Category </span>
                                <span class="ml-6 flex items-center">
                                    <!--
                                    Expand icon, show/hide based on section open state.

                                    Heroicon name: solid/plus-sm
                                    -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                    <!--
                                    Collapse icon, show/hide based on section open state.

                                    Heroicon name: solid/minus-sm
                                    -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-1">
                                <div class="space-y-6">
                                <div class="flex items-center">
                                    <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500"> New Arrivals </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500"> Sale </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500"> Travel </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500"> Organization </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500"> Accessories </label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative z-10 flex items-baseline justify-between pt-24 pb-6 border-b border-gray-200">
                    <h1 class="font-title text-4xl font-extrabold tracking-tight text-gray-900">New Arrivals</h1>

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
                                    <a href="#"> Laravel Apps </a>
                                </li>

                                <li>
                                    <a href="#"> PHP Apps </a>
                                </li>

                                <li>
                                    <a href="#"> Flutter Apps </a>
                                </li>

                                <li>
                                    <a href="#"> Flutter UI Kits </a>
                                </li>
                            </ul>

                            <div class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900"> Color </span>
                                    <span class="ml-6 flex items-center">
                                    <!--
                                        Expand icon, show/hide based on section open state.

                                        Heroicon name: solid/plus-sm
                                    -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                    <!--
                                        Collapse icon, show/hide based on section open state.

                                        Heroicon name: solid/minus-sm
                                    -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    </span>
                                </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-0">
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                    <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-color-0" class="ml-3 text-sm text-gray-600"> White </label>
                                    </div>

                                    <div class="flex items-center">
                                    <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-color-1" class="ml-3 text-sm text-gray-600"> Beige </label>
                                    </div>

                                    <div class="flex items-center">
                                    <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-color-2" class="ml-3 text-sm text-gray-600"> Blue </label>
                                    </div>

                                    <div class="flex items-center">
                                    <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-color-3" class="ml-3 text-sm text-gray-600"> Brown </label>
                                    </div>

                                    <div class="flex items-center">
                                    <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-color-4" class="ml-3 text-sm text-gray-600"> Green </label>
                                    </div>

                                    <div class="flex items-center">
                                    <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-color-5" class="ml-3 text-sm text-gray-600"> Purple </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <!-- Replace with your content -->
                            <div class="grid grid-cols-1 gap-x-8 gap-y-32 sm:grid-cols-2 sm:gap-y-32 lg:grid-cols-2">

                                <div class="space-y-2">
                                    <div class="relative h-full ml-0 mr-0 sm:mr-6">
                                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"></span>

                                        <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                            <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                                <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="absolute h-full ml-0 mr-0 sm:mr-6">
                                        <h3 class="mt-4 text-sm font-medium font-sans text-gray-700">
                                            <a href="#">
                                              <span class="absolute inset-0"></span>
                                              Leather Long Wallet
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <div class="relative h-full ml-0 mr-0 sm:mr-6">
                                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"></span>

                                        <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                            <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                                <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="absolute h-full ml-0 mr-0 sm:mr-6">
                                        <h3 class="mt-4 text-sm font-medium font-sans text-gray-700">
                                            <a href="#">
                                              <span class="absolute inset-0"></span>
                                              Leather Long Wallet
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <div class="relative h-full ml-0 mr-0 sm:mr-6">
                                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"></span>

                                        <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                            <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                                <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="absolute h-full ml-0 mr-0 sm:mr-6">
                                        <h3 class="mt-4 text-sm font-medium font-sans text-gray-700">
                                            <a href="#">
                                              <span class="absolute inset-0"></span>
                                              Leather Long Wallet
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <div class="relative h-full ml-0 mr-0 sm:mr-6">
                                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"></span>

                                        <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                            <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                                <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="absolute h-full ml-0 mr-0 sm:mr-6">
                                        <h3 class="mt-4 text-sm font-medium font-sans text-gray-700">
                                            <a href="#">
                                              <span class="absolute inset-0"></span>
                                              Leather Long Wallet
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                                    </div>
                                </div>

                                <!-- More products... -->
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </section>
            </main>

        </div>
    </section>

    <!-- FAQS -->
    <section class="py-12 bg-gray-50 sm:py-10 md:py-12 lg:py-14 xl:py-16">
        <div class="max-w-6xl px-4 mx-auto lg:px-8">
            <h2 class="font-title mb-2 text-2xl font-bold md:text-3xl">{{ __("productspage.faqs?") }}</h2>
            <p class="font-description mb-4 text-sm text-gray-600 sm:text-base md:text-lg">{{ __('productspage.faqs_description') }}:</p>

            <div class="relative flex flex-col mt-2 lg:flex-row">

                <!-- Left side of FAQs -->
                <div class="relative w-full lg:w-1/2 lg:pr-12">
                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-600 cursor-pointer sm:text-xl hover:text-black">
                            <span>Where do I go to upgrade my account?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-gray-600 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                    </div>

                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-600 cursor-pointer sm:text-xl hover:text-black">
                            <span>Where do I go to upgrade my account?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-gray-600 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                    </div>

                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-600 cursor-pointer sm:text-xl hover:text-black">
                            <span>Where do I go to upgrade my account?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-gray-600 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                    </div>
                </div>


                <!-- Right side of FAQs -->
                <div class="relative w-full lg:w-1/2 lg:pl-12">

                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-600 cursor-pointer sm:text-xl hover:text-black">
                            <span>Where do I go to upgrade my account?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-gray-600 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                    </div>

                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-600 cursor-pointer sm:text-xl hover:text-black">
                            <span>Where do I go to upgrade my account?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-gray-600 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                    </div>

                    <!-- Question 1 -->
                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-lg font-medium text-gray-600 cursor-pointer sm:text-xl hover:text-black">
                            <span>Where do I go to upgrade my account?</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 text-gray-600 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <!-- Trustworthy -->
    <section class="py-20 bg-gray-50 tails-selected-element" contenteditable="true">
        <div class="container items-center max-w-6xl px-4 mx-auto sm:px-2 md:px-4 lg:px-10">
          <div class="flex flex-wrap items-center -mx-3">
            <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
              <div class="w-full lg:max-w-md">
                <h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-title">
                    {{ __('productspage.trustworthy') }}
                </h2>
                <p class="mb-2 font-medium tracking-tight text-gray-600 xl:mb-6 font-description">
                    {{ __('productspage.trustworthy_description') }}
                </p>
                <p class="mb-2 font-medium tracking-tight text-gray-600 xl:mb-6 font-description">
                    {{ __('productspage.trustworthy_description_2') }}
                </p>
                <ul>
                  <li class="flex items-center py-2 space-x-4 xl:py-3">
                    <svg class="w-9 h-9 text-green-500" width="32" height="32" viewBox="0 0 256 256"><path fill="currentColor" d="M216 64h-40v-8a24.1 24.1 0 0 0-24-24h-48a24.1 24.1 0 0 0-24 24v8H40a16 16 0 0 0-16 16v128a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16ZM40 120h176v48H40Zm56-64a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v8H96Zm120 24v24H40V80Zm0 128H40v-24h176v24Z"/></svg>
                    <span class="font-title text-sm font-medium text-gray-500">{{ __('productspage.trustworthy_line_1') }}</span>
                  </li>
                  <li class="flex items-center py-2 space-x-4 xl:py-3">
                    <svg class="w-8 h-8 text-green-500" width="32" height="32" viewBox="0 0 256 256"><path fill="currentColor" d="M176 232a8 8 0 0 1-8 8H88a8 8 0 0 1 0-16h80a8 8 0 0 1 8 8Zm40-128a87.7 87.7 0 0 1-33.6 69.2A16.1 16.1 0 0 0 176 186v6a16 16 0 0 1-16 16H96a16 16 0 0 1-16-16v-6a16.2 16.2 0 0 0-6.2-12.7A87.8 87.8 0 0 1 40 104.5c-.3-47.7 38.3-87.4 85.9-88.5a87.9 87.9 0 0 1 90.1 88Zm-16 0a72.1 72.1 0 0 0-73.7-72c-39 .9-70.5 33.4-70.3 72.4a71.7 71.7 0 0 0 27.6 56.3A32 32 0 0 1 96 186v6h24v-44.7l-29.7-29.6a8.1 8.1 0 0 1 11.4-11.4l26.3 26.4l26.3-26.4a8.1 8.1 0 0 1 11.4 11.4L136 147.3V192h24v-6a32.1 32.1 0 0 1 12.5-25.4A71.5 71.5 0 0 0 200 104Z"/></svg>
                    <span class="font-title text-sm font-medium text-gray-500">{{ __('productspage.trustworthy_line_2') }}</span>
                  </li>
                  <li class="flex items-center py-2 space-x-4 xl:py-3">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span class="font-title text-sm font-medium text-gray-500">{{ __('productspage.trustworthy_line_3') }}</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="https://cdn.devdojo.com/images/november2020/feature-graphic.png" alt="feature image"></div>
          </div>
        </div>
    </section>

    <!-- footer -->
    @include('components.footer')

    @vite('resources/js/app.js')
</body>

</html>
