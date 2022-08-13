<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>

    <body>

        <main>
            @include('components.header')

            @include('components.startups')

            <div class="bg-white">
                <div>
                <!--
                    Mobile filter dialog

                    Off-canvas filters for mobile, show/hide based on off-canvas filters state.
                -->
                <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
                    <!--
                    Off-canvas menu overlay, show/hide based on off-canvas menu state.

                    Entering: "transition-opacity ease-linear duration-300"
                        From: "opacity-0"
                        To: "opacity-100"
                    Leaving: "transition-opacity ease-linear duration-300"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

                    <!--
                    Off-canvas menu, show/hide based on off-canvas menu state.

                    Entering: "transition ease-in-out duration-300 transform"
                        From: "translate-x-full"
                        To: "translate-x-0"
                    Leaving: "transition ease-in-out duration-300 transform"
                        From: "translate-x-0"
                        To: "translate-x-full"
                    -->
                    <div class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">
                    <div class="px-4 flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button" class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400">
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

                        <div class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-2" aria-expanded="false">
                            <span class="font-medium text-gray-900"> Size </span>
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
                        <div class="pt-6" id="filter-section-mobile-2">
                            <div class="space-y-6">
                            <div class="flex items-center">
                                <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500"> 2L </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500"> 6L </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500"> 12L </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500"> 18L </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-gray-500"> 20L </label>
                            </div>

                            <div class="flex items-center">
                                <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-size-5" class="ml-3 min-w-0 flex-1 text-gray-500"> 40L </label>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>

                <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative z-10 flex items-baseline justify-between pt-24 pb-6 border-b border-gray-200">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">New Arrivals</h1>

                    <div class="flex items-center">
                        <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                            Sort
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
                        <div class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                            <!--
                                Active: "bg-gray-100", Not Active: ""

                                Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                            -->
                            <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0"> Most Popular </a>

                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1"> Best Rating </a>

                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2"> Newest </a>

                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3"> Price: Low to High </a>

                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4"> Price: High to Low </a>
                            </div>
                        </div>
                        </div>

                        <button type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">View grid</span>
                        <!-- Heroicon name: solid/view-grid -->
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        </button>
                        <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
                        <span class="sr-only">Filters</span>
                        <!-- Heroicon name: solid/filter -->
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </div>
                    </div>

                    <section aria-labelledby="products-heading" class="pt-6 pb-24">
                    <h2 id="products-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
                        <!-- Filters -->
                        <form class="hidden lg:block">
                        <h3 class="sr-only">Categories</h3>
                        <ul role="list" class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                            <li>
                            <a href="#"> Totes </a>
                            </li>

                            <li>
                            <a href="#"> Backpacks </a>
                            </li>

                            <li>
                            <a href="#"> Travel Bags </a>
                            </li>

                            <li>
                            <a href="#"> Hip Bags </a>
                            </li>

                            <li>
                            <a href="#"> Laptop Sleeves </a>
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

                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
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
                            <div class="pt-6" id="filter-section-1">
                            <div class="space-y-4">
                                <div class="flex items-center">
                                <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-0" class="ml-3 text-sm text-gray-600"> New Arrivals </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-1" class="ml-3 text-sm text-gray-600"> Sale </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-2" class="ml-3 text-sm text-gray-600"> Travel </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-3" class="ml-3 text-sm text-gray-600"> Organization </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-category-4" class="ml-3 text-sm text-gray-600"> Accessories </label>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                                <span class="font-medium text-gray-900"> Size </span>
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
                            <div class="pt-6" id="filter-section-2">
                            <div class="space-y-4">
                                <div class="flex items-center">
                                <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-size-0" class="ml-3 text-sm text-gray-600"> 2L </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-size-1" class="ml-3 text-sm text-gray-600"> 6L </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-size-2" class="ml-3 text-sm text-gray-600"> 12L </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-size-3" class="ml-3 text-sm text-gray-600"> 18L </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-size-4" class="ml-3 text-sm text-gray-600"> 20L </label>
                                </div>

                                <div class="flex items-center">
                                <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-size-5" class="ml-3 text-sm text-gray-600"> 40L </label>
                                </div>
                            </div>
                            </div>
                        </div>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <!-- Replace with your content -->
                            <div class="grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-3">
                                <div class="relative group">
                                    <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                    <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                        <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                    </div>
                                    </div>
                                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900 space-x-8">
                                    <h3>
                                        <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Fusion
                                        </a>
                                    </h3>
                                    <p>$49</p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">UI Kit</p>
                                </div>

                                <div class="relative group">
                                    <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                    <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                        <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                    </div>
                                    </div>
                                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900 space-x-8">
                                    <h3>
                                        <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Fusion
                                        </a>
                                    </h3>
                                    <p>$49</p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">UI Kit</p>
                                </div>

                                <div class="relative group">
                                    <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                    <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                        <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                    </div>
                                    </div>
                                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900 space-x-8">
                                    <h3>
                                        <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Fusion
                                        </a>
                                    </h3>
                                    <p>$49</p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">UI Kit</p>
                                </div>

                                <div class="relative group">
                                    <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden bg-gray-100">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg" alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background." class="object-center object-cover">
                                    <div class="flex items-end opacity-0 p-4 group-hover:opacity-100" aria-hidden="true">
                                        <div class="w-full bg-white bg-opacity-75 backdrop-filter backdrop-blur py-2 px-4 rounded-md text-sm font-medium text-gray-900 text-center">View Product</div>
                                    </div>
                                    </div>
                                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900 space-x-8">
                                    <h3>
                                        <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Fusion
                                        </a>
                                    </h3>
                                    <p>$49</p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">UI Kit</p>
                                </div>

                                <!-- More products... -->
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                    </section>
                </main>
                </div>
            </div>
        </main>

        <footer class="bg-gray-50" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:pt-24 lg:px-8">
              <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                  <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                      <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Solutions</h3>
                      <ul role="list" class="mt-4 space-y-4">
                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Marketing </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Analytics </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Commerce </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Insights </a>
                        </li>
                      </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                      <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                      <ul role="list" class="mt-4 space-y-4">
                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Pricing </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Documentation </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Guides </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> API Status </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                      <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                      <ul role="list" class="mt-4 space-y-4">
                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> About </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Blog </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Jobs </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Press </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Partners </a>
                        </li>
                      </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                      <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>
                      <ul role="list" class="mt-4 space-y-4">
                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Claim </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Privacy </a>
                        </li>

                        <li>
                          <a href="#" class="text-base text-gray-500 hover:text-gray-900"> Terms </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="mt-12 xl:mt-0">
                  <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Subscribe to our newsletter</h3>
                  <p class="mt-4 text-base text-gray-500">The latest news, articles, and resources, sent to your inbox weekly.</p>
                  <form class="mt-4 sm:flex sm:max-w-md">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:placeholder-gray-400" placeholder="Enter your email">
                    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                      <button type="submit" class="w-full flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-purple-700 hover:to-indigo-700">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
                <div class="flex space-x-6 md:order-2">
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                  </a>

                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                  </a>

                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>

                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                  </a>

                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Dribbble</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2020 Workflow, Inc. All rights reserved.</p>
              </div>
            </div>
          </footer>

        @vite('resources/js/app.js')

    </body>

</html>
