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
                        <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight"> The <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline">Number One Source</span> for<br class="lg:block hidden"> all your design needs. </h1>
                        <p class="px-0 text-lg text-gray-600 md:text-xl lg:px-24"> Say hello to the number one source for all your design needs. Drag and drop designs, edit designs, and modify the components to help tell your story. </p>
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
    @include('components.credibility', ['tagline' => 'These services brought to you by the maker of'])

    <!-- services -->
    <section class="bg-white pt-4 pb-20 px-4 sm:px-6 lg:pt-4 lg:pb-28 lg:px-8">
        <div class="max-w-2xl mx-auto py-4 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-1">

                <div class="p-6 bg-white sm:p-8 rounded-xl ring ring-indigo-50">
                    <div class="flex items-start">
                        <div class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"aria-hidden="true">
                            <div class="flex items-center gap-1">
                                <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
                                <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
                                <span class="h-4 w-0.5 rounded-full bg-indigo-500"></span>
                                <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
                                <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
                            </div>
                        </div>

                        <div class="sm:ml-8">
                            <strong class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white">
                                Episode #101
                            </strong>

                            <h2 class="mt-4 text-lg font-medium sm:text-xl">
                                <a href="" class="hover:underline"> Full-stack Website Development </a>
                            </h2>

                            <p class="mt-1 text-sm text-gray-700">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam nulla
                                amet voluptatum sit rerum, atque, quo culpa ut necessitatibus eius
                                suscipit eum accusamus, aperiam voluptas exercitationem facere aliquid
                                fuga. Sint.
                            </p>

                            <div class="mt-4 sm:flex sm:items-center sm:gap-2">
                                <div class="flex items-center text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                    </svg>
                                    <p class="ml-1 text-xs font-medium">48:32 minutes</p>
                                </div>

                                <span class="hidden sm:block" aria-hidden="true">&middot;</span>

                                <p class="mt-2 text-xs font-medium text-gray-500 sm:mt-0">
                                    Featuring <a href="" class="underline hover:text-gray-700">Barry</a>,
                                    <a href="" class="underline hover:text-gray-700">Sandra</a> and
                                    <a href="" class="underline hover:text-gray-700">August</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQS -->
    <section class="py-12 bg-white sm:py-16 md:py-20 lg:py-24 tails-selected-element" data-tails-scripts="//unpkg.com/alpinejs" contenteditable="true">
        <div class="max-w-6xl px-8 mx-auto lg:px-16">
            <h2 class="mb-2 text-2xl font-bold md:text-3xl">Got a Question?</h2>
            <p class="mb-4 text-sm text-gray-600 sm:text-base md:text-lg">We may have an answer for you. Here are some of our common FAQ's:</p>

            <div class="relative mt-2">
                <!-- Question 1 -->
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0 -rotate-90" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class=""></path></svg>
                        <span class="">Where do I go to upgrade my account?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
                </div>

                <!-- Question 2 -->
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0 -rotate-90" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span class="">How do I use Tails in my project?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.</p>
                </div>

                <!-- Question 3 -->
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0 -rotate-90" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span class="">How long will I have access to Tails?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account. Paddle for processing payments.</p>
                </div>

                <!-- Question 4 -->
                <div x-data="{ show: false }" class="relative overflow-hidden border-b-2 border-black select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0 -rotate-90" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span>What is the license on the pages?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">You have unlimited use to the templates used in Tails; however, you cannot re-use the templates to sell for others to use.</p>
                </div>

                <!-- Question 5 -->
                <div x-data="{ show: false }" class="relative overflow-hidden select-none">
                    <h4 @click="show=!show" class="flex items-center justify-start text-lg font-medium text-gray-700 cursor-pointer sm:text-xl md:text-2xl py-7 hover:text-gray-900">
                        <svg class="w-6 h-6 mr-3 transition-all duration-200 ease-out transform rotate-0 -rotate-90" :class="{ '-rotate-90' : !show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span>What if I need help with my project?</span>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-sm text-gray-400 sm:text-base md:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">If you need assistance implementing the templates into your project you can contact support or you can visit our question section.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Trustworthy -->
    <section class="py-20 bg-gray-50 tails-selected-element" contenteditable="true">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
          <div class="flex flex-wrap items-center -mx-3">
            <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
              <div class="w-full lg:max-w-md">
                <h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading">Jam-packed with all the tools you need to succeed!</h2>
                <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">It's never been easier to build a business of your own. Our tools will help you with the following:</p>
                <ul>
                  <li class="flex items-center py-2 space-x-4 xl:py-3">
                    <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <span class="font-medium text-gray-500">Faster Processing and Delivery</span>
                  </li>
                  <li class="flex items-center py-2 space-x-4 xl:py-3">
                    <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    <span class="font-medium text-gray-500">Out of the Box Tracking and Monitoring</span>
                  </li>
                  <li class="flex items-center py-2 space-x-4 xl:py-3">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="https://cdn.devdojo.com/images/november2020/feature-graphic.png" alt="feature image"></div>
          </div>
        </div>
    </section>

    <!-- footer -->
    <section class="relative border border-gray-200 bg-white">
        <div class="text-xs text-gray-400 space-y-4 border-b border-gray-200 relative">
            <div class="max-w-6xl border-l border-r border-gray-200 py-6 relative h-full px-10 mx-auto flex flex-col sm:items-center sm:justify-between md:flex-row md:space-y-0">
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
                class="flex w-full md:w-1/2 flex-col sm:items-center justify-center space-y-5 p-10 md:pr-0 md:items-start">
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
        <div class="text-xs text-gray-400 space-y-4 border-t border-gray-200">
            <div
                class="max-w-6xl border-l border-r border-gray-200 py-6 h-full px-10 mx-auto flex flex-col sm:items-center sm:justify-between md:flex-row md:space-y-0">
                <p>© 2022 Company Name</p>
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
