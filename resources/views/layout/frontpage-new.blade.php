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
    <section class="relative border border-gray-200 bg-white">
        <div class="text-xs text-gray-400 space-y-4 border-b border-gray-200 relative">
            <div class="max-w-6xl border-l border-r border-gray-200 py-6 relative h-full mx-auto flex flex-col sm:items-center sm:justify-between md:flex-row md:space-y-0">
                <p class="md:mb-0 mb-1">Watch. Learn. Create.</p>
                <div class="flex sm:flex-row flex-col items-start sm:items-center">
                    Visit our social channels<nav class="flex sm:ml-3 md:mt-0 mt-3 items-center space-x-3">
                        <a href="#_" class="transition flex hover:text-gray-900">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                </path>
                            </svg>
                        </a>
                        <a href="#_" class="transition flex hover:text-gray-900">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#_" class="transition flex hover:text-gray-900">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 80 56" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m41.771 55.637-16.395-.3c-5.308-.104-10.63.104-15.834-.978-7.916-1.618-8.477-9.548-9.064-16.2-.809-9.35-.496-18.872 1.03-28.145.862-5.204 4.252-8.309 9.495-8.647C28.703.141 46.52.287 64.18.86c1.865.052 3.743.339 5.582.665 9.078 1.591 9.299 10.578 9.888 18.143.586 7.642.339 15.325-.783 22.915-.9 6.285-2.622 11.556-9.888 12.065-9.104.665-18 1.2-27.129 1.03 0-.04-.052-.04-.078-.04Zm-9.638-15.912c6.86-3.94 13.59-7.813 20.411-11.725-6.873-3.94-13.59-7.813-20.411-11.726v23.451Z"
                                    fill-rule="nonzero"></path>
                            </svg>
                        </a>
                        <a href="#_" class="transition flex hover:text-gray-900">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="flex md:flex-row flex-col-reverse items-stretch border-l border-r border-gray-200 justify-center h-full mx-auto max-w-6xl md:space-x-10">
            <div
                class="flex w-full md:w-1/2 flex-col sm:items-center justify-center space-y-5  md:pr-0 md:items-start">
                <a href="#_" class="text-gray-900 font-extrabold uppercase text- flex items-center">
                    <svg class="w-7 h-auto text-purple-600 mr-3" viewBox="0 0 100 100"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path id="a" d="M0 0h59.314v59.414H0z"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <path
                                d="M9.343 40.713a9.28 9.28 0 0 0-6.606 2.736A9.28 9.28 0 0 0 0 50.055a9.28 9.28 0 0 0 2.737 6.607A9.28 9.28 0 0 0 9.343 59.4a9.279 9.279 0 0 0 6.607-2.737c3.643-3.643 3.643-9.57 0-13.213a9.279 9.279 0 0 0-6.607-2.736M70.329 39.07a9.28 9.28 0 0 0 6.606-2.736 9.28 9.28 0 0 0 2.737-6.607 9.279 9.279 0 0 0-2.737-6.606 9.281 9.281 0 0 0-6.606-2.737 9.282 9.282 0 0 0-6.607 2.736 9.281 9.281 0 0 0-2.737 6.607 9.28 9.28 0 0 0 2.737 6.607 9.28 9.28 0 0 0 6.607 2.736M50.029 81.37a9.28 9.28 0 0 0-6.607 2.736 9.28 9.28 0 0 0-2.736 6.606 9.28 9.28 0 0 0 2.736 6.607 9.28 9.28 0 0 0 6.607 2.736 9.28 9.28 0 0 0 6.607-2.736 9.28 9.28 0 0 0 2.736-6.607 9.28 9.28 0 0 0-2.736-6.606 9.28 9.28 0 0 0-6.607-2.736M70.329 61.041a9.267 9.267 0 0 0-6.304 2.462 13.65 13.65 0 0 1-2.104 1.43c-3.18 1.764-7.407 2.736-11.904 2.736s-8.724-.972-11.904-2.737a14.134 14.134 0 0 1-1.659-1.075 13.798 13.798 0 0 1-1.297-1.943c-1.765-3.179-2.736-7.407-2.736-11.903 0-4.497.971-8.725 2.736-11.904.462-.832.965-1.56 1.499-2.19a9.267 9.267 0 0 0 2.359-6.19 9.279 9.279 0 0 0-2.737-6.606 9.281 9.281 0 0 0-6.606-2.737 9.282 9.282 0 0 0-6.607 2.736 9.281 9.281 0 0 0-2.737 6.607c0 2.496.972 4.842 2.737 6.607.07.07.145.13.216.196.356.479.696 1.001 1.016 1.577 1.765 3.179 2.736 7.407 2.736 11.904 0 4.496-.971 8.724-2.736 11.903a13.887 13.887 0 0 1-1.24 1.873 9.28 9.28 0 0 0-2.729 6.598 9.28 9.28 0 0 0 2.737 6.605 9.28 9.28 0 0 0 6.607 2.737 9.273 9.273 0 0 0 6.478-2.62 13.791 13.791 0 0 1 1.963-1.314c3.18-1.765 7.407-2.737 11.904-2.737s8.725.972 11.904 2.737c.644.357 1.227.74 1.75 1.142.018.018.033.038.051.055a9.28 9.28 0 0 0 6.607 2.737 9.28 9.28 0 0 0 6.606-2.737 9.28 9.28 0 0 0 2.737-6.605 9.28 9.28 0 0 0-2.737-6.607 9.28 9.28 0 0 0-6.606-2.737"
                                fill="currentColor" class=""></path>
                            <g transform="translate(40.686)">
                                <mask id="b" fill="currentColor"></mask>
                                <path
                                    d="M56.578 43.45a9.28 9.28 0 0 0-6.607-2.737c-2.38 0-4.62.893-6.353 2.506-.605.5-1.294.974-2.079 1.41-3.18 1.764-7.407 2.736-11.904 2.736s-8.724-.972-11.903-2.737a14.126 14.126 0 0 1-1.66-1.075 13.797 13.797 0 0 1-1.296-1.942c-1.765-3.18-2.737-7.407-2.737-11.904s.972-8.725 2.737-11.904c.48-.865 1.004-1.62 1.562-2.268v-.012a9.267 9.267 0 0 0 2.349-6.18 9.28 9.28 0 0 0-2.737-6.606A9.28 9.28 0 0 0 9.343 0a9.28 9.28 0 0 0-6.606 2.737A9.28 9.28 0 0 0 0 9.343c0 2.302.836 4.471 2.35 6.18v.009a13.504 13.504 0 0 1 1.565 2.27c1.765 3.18 2.737 7.408 2.737 11.905 0 4.497-.972 8.724-2.737 11.904a13.502 13.502 0 0 1-1.566 2.272v.008A9.266 9.266 0 0 0 0 50.071c0 2.495.972 4.841 2.737 6.606a9.28 9.28 0 0 0 6.606 2.737 9.28 9.28 0 0 0 6.607-2.737c.023-.023.042-.048.064-.07a14.095 14.095 0 0 1 1.718-1.118c3.179-1.765 7.406-2.737 11.903-2.737 4.497 0 8.725.972 11.904 2.737.81.449 1.518.938 2.137 1.455A9.267 9.267 0 0 0 49.97 59.4a9.28 9.28 0 0 0 6.607-2.737 9.28 9.28 0 0 0 2.736-6.607 9.28 9.28 0 0 0-2.736-6.606"
                                    fill="currentColor"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="">logo</span>
                </a>
                <nav
                    class="flex flex-col flex-wrap sm:items-center space-y-4 text-xs font-medium text-gray-500 sm:flex-row sm:space-x-3  lg:space-x-4 sm:space-y-0">
                    <a href="#_" class="hover:text-black">Home</a>
                    <a href="#_" class="hover:text-black">Products</a>
                    <a href="#_" class="hover:text-black">About</a>
                    <a href="#_" class="hover:text-black">Contact</a>
                    <a href="#_" class="hover:text-black">Resources</a>
                    <a href="#_" class="hover:text-black">Blog</a>
                </nav>
                <p class="sm:text-center text-xs leading-5 text-gray-500 md:text-left">
                    Our company strives to provide the best templates and quality products in order to help you tell the
                    best story possible.</p>
            </div>
            <div class="flex w-full md:w-0 border-b md:border-r border-gray-200"></div>
            <div class="w-full md:w-1/2 md:pl-0 p-10 flex sm:items-center md:items-start flex-col justify-center">
                <h4 class="font-bold uppercase">Stay updated</h4>
                <p class="sm:text-center my-3 text-xs leading-5 text-gray-500 md:text-left">If you want to get notified
                    about our latest features and updates fill out the form below and we promise to only send you
                    updates once a week.</p>
                <div class="flex w-full space-x-2">
                    <input type="text" placeholder="Enter your email"
                        class="block w-full rounded border-gray-200 border text-sm transition px-3">
                    <button type="submit"
                        class="inline-flex w-auto flex-shrink-0 cursor-pointer select-none appearance-none items-center justify-center space-x-1 rounded bg-purple-700 px-3 py-2 text-sm font-medium text-white transition focus:outline-none focus:ring-2 focus:ring-purple-700">
                        Sign up
                    </button>
                </div>
            </div>
        </div>
        <div class="text-xs text-gray-500 space-y-4 border-t border-gray-200">
            <div
                class="max-w-6xl border-l border-r border-gray-200 py-6 h-full mx-auto flex flex-col sm:items-center sm:justify-between md:flex-row md:space-y-0">
                <p>© 2022 Pram.Dev by Ida Bagus Gede Pramana Adi Putra</p>
                <nav class="flex flex-col space-y-1.5 md:mt-0 mt-4 sm:flex-row sm:space-y-0 sm:space-x-3">
                    <a href="#" class="transition hover:text-gray-900">Terms of Service</a>
                    <a href="#" class="transition hover:text-gray-900">Privacy Policy</a>
                    <a href="#" class="transition hover:text-gray-900">Cookie Policy</a>
                </nav>
            </div>
        </div>
    </section>

    @vite('resources/js/app.js')
</body>

</html>
