<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
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
                            <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline">{{ __('servicespage.intro') }}</span>
                            <br class="lg:block hidden"> {{ __('servicespage.intro_subtitle') }}
                        </h1>
                        <p class="font-description px-0 text-lg text-gray-500 md:text-xl lg:px-24">
                            {{ __('servicespage.intro_description') }}
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
    @include('components.credibility', ['tagline' => __('servicespage.startups')])

    <!-- services -->
    <livewire:services />

    <!-- FAQS -->
    <section class="py-12 bg-gray-50 sm:py-10 md:py-12 lg:py-14 xl:py-16">
        <div class="max-w-6xl px-4 mx-auto lg:px-8">
            <h2 class="font-title mb-2 text-2xl font-bold md:text-3xl">{{ __("productspage.faqs?") }}</h2>
            <p class="font-description mb-4 text-sm text-gray-600 sm:text-base md:text-lg">{{ __('productspage.faqs_description') }}:</p>

            <div class="relative flex flex-col mt-2 lg:flex-row">

                <!-- Left side of FAQs -->
                <div class="relative w-full lg:w-1/2 lg:pr-12">
                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-sm font-medium text-gray-600 cursor-pointer sm:text-base hover:text-black">
                            <span class="font-description"> {{ __('faq.service_1') }}</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 font-description text-gray-600 sm:text-base py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">
                            {!! __('faq.service_1_description') !!}
                        </p>
                    </div>

                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-sm font-medium text-gray-600 cursor-pointer sm:text-base hover:text-black">
                            <span class="font-description"> {{ __('faq.service_2') }}</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 font-description text-gray-600 sm:text-base py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">
                            {!! __('faq.service_2_description') !!}
                        </p>
                    </div>

                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-sm font-medium text-gray-600 cursor-pointer sm:text-base hover:text-black">
                            <span class="font-description"> {{ __('faq.service_3') }}</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 font-description text-gray-600 sm:text-base py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">
                            {!! __('faq.service_3_description') !!}
                        </p>
                    </div>

                </div>


                <!-- Right side of FAQs -->
                <div class="relative w-full lg:w-1/2 lg:pl-12">

                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-sm font-medium text-gray-600 cursor-pointer sm:text-base hover:text-black">
                            <span class="font-description"> {{ __('faq.service_4') }}</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 font-description text-gray-600 sm:text-base py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">
                            {!! __('faq.service_4_description') !!}
                        </p>
                    </div>

                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-sm font-medium text-gray-600 cursor-pointer sm:text-base hover:text-black">
                            <span class="font-description"> {{ __('faq.service_5') }}</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 font-description text-gray-600 sm:text-base py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">
                            {!! __('faq.service_5_description') !!}
                        </p>
                    </div>

                    <div x-data="{ show: false }" class="relative overflow-hidden text-gray-700 select-none">
                        <h4 @click="show=!show" class="flex items-center justify-between py-4 text-sm font-medium text-gray-600 cursor-pointer sm:text-base hover:text-black">
                            <span class="font-description"> {{ __('faq.service_6') }}</span>
                            <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        </h4>
                        <p class="px-1 pt-0 mt-1 font-description text-gray-600 sm:text-base py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">
                            {{ __('faq.service_6_description') }}
                        </p>
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
