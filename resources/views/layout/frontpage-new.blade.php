<!DOCTYPE html>

<html class lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 ">
    <!-- navbar -->
    @include('components.navbar')

    <!-- header -->
    <section class="py-16 bg-white dark:bg-slate-800 md:py-24">
        <div class="flex flex-col max-w-6xl px-10 mx-auto lg:flex-row">

            <div class="flex flex-col items-start justify-center w-full pr-10 mb-12 lg:w-1/2 lg:mb-0">
                <div class="relative">
                    <p class="mb-2 text-transparent bg-clip-text font-bold bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 uppercase">Ida Bagus Gede pramana adi putra</p>
                    <h1 class="text-4xl font-title font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl xl:text-6xl">
                        <span class="block xl:inline">{{ __('homepage.intro') }}</span>
                        <span class="block text-teal-500 xl:inline" data-primary="pink-500">{{ __('homepage.intro_subtitle') }}</span>
                    </h1>
                </div>
                <p class="my-8 text-sm font-description text-gray-600 dark:text-gray-300 md:text-lg">
                {{ __('homepage.intro_description') }}
                </p>
                <div class="relative flex items-center pt-4 space-x-3">
                    <a href="#_" class="relative text-2xl group">
                        <span
                            class="relative z-10 px-5 py-2 font-bold leading-tight text-green-900 bg-green-200 border-4 border-black rounded-lg group-hover:bg-green-400 group-hover:text-white"
                            data-rounded="rounded-lg">Explore More</span>
                        <span class="absolute top-0 right-0 w-full h-14 -mt-2.5 -mr-0.5 bg-black rounded-lg"
                            data-rounded="rounded-lg"></span>
                    </a>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center w-full lg:w-1/2">
                <img src="https://cdn.devdojo.com/images/march2022/character.png" class="">
            </div>
        </div>
    </section>

    <!-- credibility -->
    @include('components.credibility', ['tagline' => __('homepage.startups')])

    <!-- services -->
    <section class="relative w-full py-12 overflow-hidden  md:py-20 xl:pt-32 xl:pb-20">
        <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0">
            <h2 class="mb-1 text-3xl font-title font-extrabold tracking-wider text-gray-900">
                {{ __('homepage.services') }}
            </h2>
            <p class="mb-12 text-lg font-description text-gray-500">
                {{ __('homepage.services_description') }}
            </p>

            <div class="flex w-full h-full">

                <div class="w-full lg:w-2/3">

                    <!-- Feature blocks first column -->
                    <div class="flex flex-col w-full mb-10 sm:flex-row">
                        <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-black rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-gray-900 fill-current" width="32" height="32"
                                            viewBox="-2.5 -2 24 24">
                                            <g fill="currentColor">
                                                <path
                                                    d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z" />
                                                <circle cx="14.375" cy="1.875" r="1.875" />
                                            </g>
                                        </svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Awesome Dashboard</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-gray-900 uppercase"
                                        data-primary="indigo-500">PREMIUM FEATURE</p>
                                    <p class="mb-2 text-gray-600">You can get a quick snapshot of all your analytics on
                                        your beautiful dashboard.</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <div class="relative h-full ml-0 md:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"
                                    data-primary="purple-500" data-rounded="rounded-lg"
                                    data-rounded-max="rounded-full"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg"
                                    data-primary="purple-500" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-purple-500 fill-current" data-primary="purple-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M19.629,9.655c-0.021-0.589-0.088-1.165-0.21-1.723h-3.907V7.244h1.378V6.555h-2.756V5.866h2.067V5.177h-0.689V4.488h-1.378V3.799h0.689V3.11h-1.378V2.421h0.689V1.731V1.294C12.88,0.697,11.482,0.353,10,0.353c-5.212,0-9.446,4.135-9.629,9.302H19.629z M6.555,2.421c1.522,0,2.756,1.234,2.756,2.756S8.077,7.933,6.555,7.933S3.799,6.699,3.799,5.177S5.033,2.421,6.555,2.421z">
                                            </path>
                                            <path
                                                d="M12.067,18.958h-0.689v-0.689h2.067v-0.689h0.689V16.89h2.067v-0.689h0.689v-0.689h-1.378v-0.689h-2.067v-0.689h1.378v-0.689h2.756v-0.689h-1.378v-0.689h3.218c0.122-0.557,0.189-1.134,0.21-1.723H0.371c0.183,5.167,4.418,9.302,9.629,9.302c0.711,0,1.401-0.082,2.067-0.227V18.958z"
                                                class=""></path>
                                        </svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Rad Tools</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase"
                                        data-primary="purple-500">NEW FEATURE</p>
                                    <p class="mb-2 text-gray-600">We've got some pretty rad tools to help you take on
                                        the world.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Feature blocks second column -->
                    <div class="flex flex-col w-full mb-10 sm:flex-row">
                        <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-black rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-gray-900 fill-current" width="32" height="32"
                                            viewBox="-2.5 -2 24 24">
                                            <g fill="currentColor">
                                                <path
                                                    d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z" />
                                                <circle cx="14.375" cy="1.875" r="1.875" />
                                            </g>
                                        </svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Awesome Dashboard</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-gray-900 uppercase"
                                        data-primary="indigo-500">PREMIUM FEATURE</p>
                                    <p class="mb-2 text-gray-600">You can get a quick snapshot of all your analytics on
                                        your beautiful dashboard.</p>
                                </div>

                            </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <div class="relative h-full ml-0 md:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"
                                    data-primary="purple-500" data-rounded="rounded-lg"
                                    data-rounded-max="rounded-full"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-black rounded-lg"
                                    data-primary="purple-500" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-gray-900 fill-current" data-primary="purple-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M19.629,9.655c-0.021-0.589-0.088-1.165-0.21-1.723h-3.907V7.244h1.378V6.555h-2.756V5.866h2.067V5.177h-0.689V4.488h-1.378V3.799h0.689V3.11h-1.378V2.421h0.689V1.731V1.294C12.88,0.697,11.482,0.353,10,0.353c-5.212,0-9.446,4.135-9.629,9.302H19.629z M6.555,2.421c1.522,0,2.756,1.234,2.756,2.756S8.077,7.933,6.555,7.933S3.799,6.699,3.799,5.177S5.033,2.421,6.555,2.421z">
                                            </path>
                                            <path
                                                d="M12.067,18.958h-0.689v-0.689h2.067v-0.689h0.689V16.89h2.067v-0.689h0.689v-0.689h-1.378v-0.689h-2.067v-0.689h1.378v-0.689h2.756v-0.689h-1.378v-0.689h3.218c0.122-0.557,0.189-1.134,0.21-1.723H0.371c0.183,5.167,4.418,9.302,9.629,9.302c0.711,0,1.401-0.082,2.067-0.227V18.958z"
                                                class=""></path>
                                        </svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Rad Tools</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase"
                                        data-primary="purple-500">NEW FEATURE</p>
                                    <p class="mb-2 text-gray-600">We've got some pretty rad tools to help you take on
                                        the world.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Feature blocks third column -->
                    <div class="flex flex-col w-full mb-10 sm:flex-row">
                        <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                            <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                <span
                                    class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-black rounded-lg">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-gray-900 fill-current" width="32" height="32"
                                            viewBox="-2.5 -2 24 24">
                                            <g fill="currentColor">
                                                <path
                                                    d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z" />
                                                <circle cx="14.375" cy="1.875" r="1.875" />
                                            </g>
                                        </svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Awesome Dashboard</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-gray-900 uppercase"
                                        data-primary="indigo-500">PREMIUM FEATURE</p>
                                    <p class="mb-2 text-gray-600">You can get a quick snapshot of all your analytics on
                                        your beautiful dashboard.</p>
                                </div>

                            </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <div class="relative h-full ml-0 md:mr-10">
                                <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"
                                    data-primary="purple-500" data-rounded="rounded-lg"
                                    data-rounded-max="rounded-full"></span>
                                <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg"
                                    data-primary="purple-500" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                                    <div class="flex items-center -mt-1">
                                        <svg class="w-8 h-8 text-purple-500 fill-current" data-primary="purple-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M19.629,9.655c-0.021-0.589-0.088-1.165-0.21-1.723h-3.907V7.244h1.378V6.555h-2.756V5.866h2.067V5.177h-0.689V4.488h-1.378V3.799h0.689V3.11h-1.378V2.421h0.689V1.731V1.294C12.88,0.697,11.482,0.353,10,0.353c-5.212,0-9.446,4.135-9.629,9.302H19.629z M6.555,2.421c1.522,0,2.756,1.234,2.756,2.756S8.077,7.933,6.555,7.933S3.799,6.699,3.799,5.177S5.033,2.421,6.555,2.421z">
                                            </path>
                                            <path
                                                d="M12.067,18.958h-0.689v-0.689h2.067v-0.689h0.689V16.89h2.067v-0.689h0.689v-0.689h-1.378v-0.689h-2.067v-0.689h1.378v-0.689h2.756v-0.689h-1.378v-0.689h3.218c0.122-0.557,0.189-1.134,0.21-1.723H0.371c0.183,5.167,4.418,9.302,9.629,9.302c0.711,0,1.401-0.082,2.067-0.227V18.958z"
                                                class=""></path>
                                        </svg>
                                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Rad Tools</h3>
                                    </div>
                                    <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase"
                                        data-primary="purple-500">NEW FEATURE</p>
                                    <p class="mb-2 text-gray-600">We've got some pretty rad tools to help you take on
                                        the world.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="hidden w-1/3 lg:block">
                    <div class="absolute w-full max-w-4xl pl-12 -mt-20 xl:mt-3">
                        <div class="absolute top-0 left-0 w-full h-full mt-2 ml-10 bg-gray-900 rounded-2xl"
                            data-rounded="rounded-2xl" data-rounded-max="rounded-full"></div>
                        <div class="relative overflow-hidden border-2 border-black rounded-2xl"
                            data-rounded="rounded-2xl" data-rounded-max="rounded-full">
                            <img src="https://cdn.devdojo.com/images/february2021/task-dashboard.png"
                                class="object-cover w-full h-full transform">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- products -->
    <section class="w-full py-12 overflow-hidden  md:py-20 xl:pt-16 xl:pb-40">
        <div class="container flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0">
            <h2 class="mb-1 text-3xl font-title font-extrabold tracking-wider text-gray-900">
                {{ __('homepage.products') }}
            </h2>
            <p class="mb-12 text-lg font-description text-gray-500">
                {{ __('homepage.products_description') }}
            </p>

            <div class="mt-1 grid grid-cols-1 gap-x-1 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-3">

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
        </div>
    </section>

    <!-- testimonials -->
    <section class="w-full py-12 overflow-hidden bg-white md:py-20 xl:pt-16 xl:pb-20">
        <div class="container flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0">
            <h2 class="mb-1 text-3xl font-title font-extrabold leading-tight text-gray-900">
                {{ __('homepage.testimonials') }}
            </h2>
            <p class="mb-8 text-lg font-description text-gray-500">
                {{ __('homepage.testimonials_description') }}
            </p>

            <div class="mt-1 grid grid-cols-1 gap-x-1 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-2">

                <div class="w-full">
                    <div class="relative h-full ml-0 md:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"
                            data-primary="purple-500" data-rounded="rounded-lg"
                            data-rounded-max="rounded-full"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-gray-900 rounded-lg"
                            data-primary="purple-500" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                            <div class="flex items-center -mt-1">
                                <svg class="w-8 h-8 text-gray-900 fill-current"width="49.78" height="32" viewBox="0 0 14 9"><path fill="currentColor" d="M5 0a1 1 0 1 1 0 2c-.893 0-1.695.39-2.245 1.01A3 3 0 1 1 0 6V5a5 5 0 0 1 5-5Zm8 0a1 1 0 0 1 0 2c-.893 0-1.695.39-2.245 1.01A3 3 0 1 1 8 6V5a5 5 0 0 1 5-5ZM3 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2Zm8 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2Z"/></svg>
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Rad Tools</h3>
                            </div>

                            <p class="mb-2 text-gray-600">
                                We've got some pretty rad tools to help you take on the world.
                            </p>

                            <p class="mt-4 text-xs text-fun-gray">
                                <b class="text-fun-pink font-monospace mr-2">Wilson Bright</b> Co-Founder of BlockSurvey
                            </p>

                        </div>

                    </div>
                </div>

                <div class="w-full">
                    <div class="relative h-full ml-0 md:mr-10">
                        <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-gray-900 rounded-lg"
                            data-primary="purple-500" data-rounded="rounded-lg"
                            data-rounded-max="rounded-full"></span>
                        <div class="relative h-full p-5 bg-white border-2 border-gray-900 rounded-lg"
                            data-primary="purple-500" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                            <div class="flex items-center -mt-1">
                                <svg class="w-8 h-8 text-gray-900 fill-current"width="49.78" height="32" viewBox="0 0 14 9"><path fill="currentColor" d="M5 0a1 1 0 1 1 0 2c-.893 0-1.695.39-2.245 1.01A3 3 0 1 1 0 6V5a5 5 0 0 1 5-5Zm8 0a1 1 0 0 1 0 2c-.893 0-1.695.39-2.245 1.01A3 3 0 1 1 8 6V5a5 5 0 0 1 5-5ZM3 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2Zm8 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2Z"/></svg>
                                <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Rad Tools</h3>
                            </div>

                            <p class="mb-2 text-gray-600">
                                We've got some pretty rad tools to help you take on the world.
                            </p>

                            <p class="mt-4 text-xs text-fun-gray">
                                <b class="text-fun-pink font-monospace mr-2">Wilson Bright</b> Co-Founder of BlockSurvey
                            </p>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- publications -->
    <section class="w-full py-12 overflow-hidden bg-white md:py-20 xl:pt-16 xl:pb-40">
        <div class="container flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0">
            <h2 class="mb-1 text-3xl font-title font-extrabold leading-tight text-gray-900">
                {{ __('homepage.thoughts') }}
            </h2>
            <p class="mb-8 text-lg font-description text-gray-500">
                {{ __('homepage.thoughts_description') }}
            </p>

            <div class="mt-2 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
                <div>
                  <p class="text-sm text-gray-500">
                    <time datetime="2020-03-10">Mar 10, 2020</time>
                  </p>
                  <a href="#" class="mt-2 block">
                    <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to drive sales</p>
                    <p class="mt-3 text-base text-gray-500">Optio cum necessitatibus dolor voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.</p>
                  </a>
                  <div class="mt-3">
                    <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
                  </div>
                </div>

                <div>
                  <p class="text-sm text-gray-500">
                    <time datetime="2020-02-12">Feb 12, 2020</time>
                  </p>
                  <a href="#" class="mt-2 block">
                    <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                    <p class="mt-3 text-base text-gray-500">Cupiditate maiores ullam eveniet adipisci in doloribus nulla minus. Voluptas iusto libero adipisci rem et corporis.</p>
                  </a>
                  <div class="mt-3">
                    <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    @include('components.footer')

    @vite('resources/js/app.js')
</body>

</html>
