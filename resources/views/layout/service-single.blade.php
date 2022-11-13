<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>

    <body>

        <div>
            <div class="py-4 my-2">
                @include('components.navbar')
            </div>

            <section>

                <header class="bg-gray-50 px-4 sm:px-6 lg:px-8 py-8 mb-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
                      <div class="flex-1 min-w-0">
                        <nav class="flex" aria-label="Breadcrumb">
                          <ol role="list" class="flex items-center space-x-4">
                            <li>
                              <div>
                                <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-700">
                                    Services
                                </a>
                              </div>
                            </li>
                            <li>
                              <div class="flex items-center">
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                                    Website Development
                                </a>
                              </div>
                            </li>
                          </ol>
                        </nav>

                        <h1 class="mt-2 text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                            Website Development with TALL stack
                        </h1>

                        <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-8">
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                            <!-- Heroicon name: solid/briefcase -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                              <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            TALL Stack
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                            <!-- Heroicon name: solid/location-marker -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            Support Included
                          </div>
                          <div class="mt-2 flex items-center text-sm text-gray-500">
                            <!-- Heroicon name: solid/currency-dollar -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                            </svg>
                            #120 (Rp 1.400.000,-)
                          </div>
                        </div>
                      </div>

                    </div>
                </header>

                <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl py-8 lg:grid lg:grid-cols-12 lg:gap-8">
                    <main class="pr-6 lg:col-span-7 xl:col-span-7">

                        <!-- Product image -->
                        <div class="mx-auto aspect-w-4 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-product-01.jpg"
                            alt="Sample of 30 icons with friendly and fun details in outline, filled, and brand color styles." class="object-center object-cover">
                        </div>

                        <!-- Product description -->
                        <div class="w-full max-w-2xl mx-auto mt-16 lg:max-w-none lg:mt-0 lg:col-span-4">
                            <div class="px-3">
                                <h2 class="text-xl my-6 font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate mb-4">Service Description</h2>

                                <article class="mx-auto prose prose-base max-w-none space-y-3">
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit molestias consectetur tempore sapiente explicabo facere quia ducimus dolorum ea dolorem. Illo velit molestiae qui, quod ullam optio delectus eos alias!

                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, architecto id incidunt aut quae reprehenderit mollitia aliquam, harum nisi eos ea consequuntur fuga, vel voluptate nesciunt itaque? Vitae, magnam facere.

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam consectetur recusandae iure ipsam neque autem ea veniam delectus odio ex quaerat quo minima animi nam, voluptatum cumque. Quo, enim quia.
                                    </div>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit molestias consectetur tempore sapiente explicabo facere quia ducimus dolorum ea dolorem. Illo velit molestiae qui, quod ullam optio delectus eos alias!

                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, architecto id incidunt aut quae reprehenderit mollitia aliquam, harum nisi eos ea consequuntur fuga, vel voluptate nesciunt itaque? Vitae, magnam facere.

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam consectetur recusandae iure ipsam neque autem ea veniam delectus odio ex quaerat quo minima animi nam, voluptatum cumque. Quo, enim quia.
                                    </div>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit molestias consectetur tempore sapiente explicabo facere quia ducimus dolorum ea dolorem. Illo velit molestiae qui, quod ullam optio delectus eos alias!

                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, architecto id incidunt aut quae reprehenderit mollitia aliquam, harum nisi eos ea consequuntur fuga, vel voluptate nesciunt itaque? Vitae, magnam facere.

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam consectetur recusandae iure ipsam neque autem ea veniam delectus odio ex quaerat quo minima animi nam, voluptatum cumque. Quo, enim quia.
                                    </div>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit molestias consectetur tempore sapiente explicabo facere quia ducimus dolorum ea dolorem. Illo velit molestiae qui, quod ullam optio delectus eos alias!

                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, architecto id incidunt aut quae reprehenderit mollitia aliquam, harum nisi eos ea consequuntur fuga, vel voluptate nesciunt itaque? Vitae, magnam facere.

                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam consectetur recusandae iure ipsam neque autem ea veniam delectus odio ex quaerat quo minima animi nam, voluptatum cumque. Quo, enim quia.
                                    </div>
                                </article>
                            </div>
                        </div>

                    </main>

                    <aside class="xl:block xl:col-span-5">
                        <div class="sticky space-y-4 top-4">

                            <!-- Product right sidebar -->
                            <div class="max-w-2xl mx-auto mt-14 sm:mt-16 lg:max-w-none lg:mt-0 lg:row-end-2 lg:row-span-2 lg:col-span-3">
                                <div class="flex flex-col-reverse">
                                <div class="mt-4">
                                    <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">Service Summary</h2>

                                    <p class="text-sm text-gray-500 mt-2">
                                        Hired for 12 times already
                                    </p>
                                </div>

                                <div>
                                    <h3 class="sr-only">Reviews</h3>
                                    <div class="flex items-center">
                                    <!--
                                        Heroicon name: solid/star

                                        Active: "text-yellow-400", Default: "text-gray-300"
                                    -->
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-gray-300 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    </div>
                                    <p class="sr-only">4 out of 5 stars</p>
                                </div>
                                </div>

                                <p class="text-gray-500 mt-6">The Application UI Icon Pack comes with over 200 icons in 3 styles: outline, filled, and branded. This playful icon pack is tailored for complex application user interfaces with a friendly and legible look.</p>

                                <!-- Buy Actions -->
                                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-1">
                                    <span x-data="{openHireState: false}"
                                    class="relative z-0 inline-flex shadow-sm max-w-full rounded-md">
                                        <button x-on:click="openHireState = true" x-on:click.away="openHireState = false" type="button"
                                          class="relative inline-flex items-center w-full px-4 py-3 rounded-l-md border border-teal-300 bg-teal-600 text-sm font-medium hover:bg-teal-500 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">

                                          <span class="text-white mx-auto">
                                            Hire me to develop and launch your product
                                          </span>
                                        </button>
                                        <span class="-ml-px relative block">
                                          <button  type="button"
                                            class="relative inline-flex items-center px-2 py-3 rounded-r-md border border-teal-300 bg-teal-600 text-sm font-medium text-white hover:bg-teal-500 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500" id="option-menu-button" aria-expanded="true" aria-haspopup="true">
                                            <span class="sr-only">Open options</span>
                                            <!-- Heroicon name: solid/chevron-down -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                          </button>

                                          <div x-cloak x-show="openHireState" class="origin-top-left absolute right-8 mt-2  w-96 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="option-menu-button" tabindex="-1">
                                            <div class="py-1" role="none">
                                                <ul class="origin-top-left absolute right-8 mt-2  rounded-md shadow-lg overflow-hidden bg-white divide-y divide-gray-200 ring-1 ring-black ring-opacity-5 focus:outline-none sm:left-auto sm:right-0" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">

                                                    <li class="text-gray-900 cursor-default select-none relative px-4 text-sm" id="listbox-option-0" role="option">
                                                      <div class="flex flex-col">
                                                        <div class="flex justify-start">
                                                          <a type="_blank" href="https://upwork.com/">
                                                            <svg class="h-16 w-20" width="107.09" height="32" viewBox="0 0 512 153">
                                                                <path fill="#6FDA44" d="M140.107 96.628c-8.321 0-16.118-3.523-23.202-9.258l1.725-8.096l.075-.3c1.536-8.62 6.409-23.089 21.402-23.089c11.244 0 20.39 9.146 20.39 20.39c-.038 11.207-9.183 20.353-20.39 20.353Zm0-61.395c-19.154 0-33.996 12.444-40.03 32.909c-9.221-13.831-16.193-30.435-20.278-44.416H59.184v53.636c0 10.57-8.621 19.19-19.191 19.19c-10.57 0-19.19-8.62-19.19-19.19V23.726H.186v53.636c-.075 21.965 17.804 39.993 39.768 39.993c21.965 0 39.844-18.028 39.844-39.993v-8.995c4.01 8.358 8.92 16.791 14.88 24.288l-12.632 59.37h21.103l9.145-43.066c8.021 5.135 17.242 8.359 27.812 8.359c22.601 0 41.005-18.516 41.005-41.118c0-22.564-18.404-40.967-41.005-40.967Z"/><path d="m244.043 37.557l13.306 53.636l14.656-53.636h17.466l-22.526 77.512h-17.467l-13.83-53.974l-13.794 53.936h-17.466L181.86 37.52h17.467l14.655 53.636l13.306-53.636h16.754v.038Zm87.22-2.324c-22.676 0-41.042 18.403-41.042 41.042c0 22.677 18.403 41.043 41.042 41.043c22.677 0 41.08-18.366 41.08-41.043c0-22.676-18.403-41.042-41.08-41.042Zm0 65.218c-13.343 0-24.138-10.795-24.138-24.138c0-13.344 10.832-24.138 24.138-24.138c13.344 0 24.138 10.794 24.138 24.138c0 13.306-10.794 24.138-24.138 24.138Zm90.968-45.54c-11.731 0-21.214 9.52-21.214 21.214v38.906h-17.58V37.557h17.58v11.919s7.496-11.957 22.901-11.957h5.397v17.392h-7.084Zm58.997 18.366c12.48-7.047 20.952-20.428 20.952-35.758H484.6c0 12.931-10.494 23.426-23.425 23.426h-2.362V.15h-17.578v114.88h17.578V78.524h2.1c1.724 0 3.973 1.125 4.985 2.511l24.962 33.996h21.065l-30.697-41.754Z"/>
                                                            </svg>

                                                            </a>
                                                        </div>
                                                        <p class="text-gray-500">This job posting can be viewed by anyone who has the link.</p>
                                                      </div>
                                                    </li>

                                                    <li class="text-gray-900 cursor-default select-none relative p-4 text-sm" id="listbox-option-0" role="option">
                                                        <div class="flex flex-col">
                                                          <div class="flex justify-start">

                                                            <a class="-ml-2" type="_blank" href="https://upwork.com/">
                                                                <svg class="h-16 w-20" width="32" height="32" viewBox="0 0 24 24">
                                                                    <path fill="currentColor" d="M23.004 15.588a.995.995 0 1 0 .002-1.99a.995.995 0 0 0-.002 1.99zm-.996-3.705h-.85c-.546 0-.84.41-.84 1.092v2.466h-1.61v-3.558h-.684c-.547 0-.84.41-.84 1.092v2.466h-1.61v-4.874h1.61v.74c.264-.574.626-.74 1.163-.74h1.972v.74c.264-.574.625-.74 1.162-.74h.527v1.316zm-6.786 1.501h-3.359c.088.546.43.858 1.006.858c.43 0 .732-.175.83-.487l1.425.4c-.351.848-1.22 1.364-2.255 1.364c-1.748 0-2.549-1.355-2.549-2.515c0-1.14.703-2.505 2.45-2.505c1.856 0 2.471 1.384 2.471 2.408c0 .224-.01.37-.02.477zm-1.562-.945c-.04-.42-.342-.81-.889-.81c-.508 0-.81.225-.908.81h1.797zM7.508 15.44h1.416l1.767-4.874h-1.62l-.86 2.837l-.878-2.837H5.72l1.787 4.874zm-6.6 0H2.51v-3.558h1.524v3.558h1.591v-4.874H2.51v-.302c0-.332.235-.536.606-.536h.918V8.412H2.85c-1.162 0-1.943.712-1.943 1.755v.4H0v1.316h.908v3.558z"/>
                                                                </svg>
                                                            </a>
                                                          </div>

                                                          <p class="text-gray-500 mt-2">This job posting can be viewed by anyone who has the link.</p>
                                                        </div>
                                                    </li>

                                                  </ul>
                                            </div>
                                          </div>

                                        </span>
                                    </span>
                                </div>

                                <!-- License -->
                                <div class="border-t border-gray-200 mt-4 pt-4">
                                <h3 class="text-sm font-medium text-gray-900">Confidentiality</h3>
                                <p class="mt-4 text-sm text-gray-500">
                                    As your worker, I respect any credential and confidentiality about your project. Any critical and non-public information
                                    will be only known by you (+ your team) and myself. I won't be held responsible for any leaked information that's caused on your side.
                                </div>

                                <!-- Share -->
                                <div class="border-t border-gray-200 mt-4 pt-4">
                                <h3 class="text-sm font-medium text-gray-900">Share</h3>
                                <ul role="list" class="flex items-center space-x-6 mt-4">
                                    <li>
                                    <a href="#" class="flex items-center justify-center w-6 h-6 text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">Share on Facebook</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center justify-center w-6 h-6 text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">Share on Instagram</span>
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center justify-center w-6 h-6 text-gray-400 hover:text-gray-500">
                                        <span class="sr-only">Share on Twitter</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                        </svg>
                                    </a>
                                    </li>
                                </ul>
                                </div>

                                <!-- FAQs -->
                                <div class="border-t border-gray-200 mt-4 pt-4">
                                <h3 class="text-sm font-medium text-gray-900">Frequently Asked Questions</h3>

                                <div class="py-1 bg-white md:py-1 lg:py-1">
                                    <div class="max-w-6xl mx-auto xl:px-0">

                                        <div class="relative mt-2 space-y-1">

                                            <!-- Question 1 -->
                                            <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                                                <h4 @click="show=!show" class="flex items-center justify-between text-sm font-medium text-gray-500 cursor-pointer sm:text-sm py-3 hover:text-gray-900">
                                                    <span>How Many API Calls Do I Get For Free?</span>
                                                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                                </h4>
                                                <p class="pt-0 mt-1 text-gray-600 sm:text-base py-3" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-in duration-300" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">The free plan will give you 2,000 free API calls. At anytime, if you wish to <a href="#_" class="font-medium text-purple-600 underline" data-primary="purple-600">upgrade to a paid plan</a>, you can eaisily increase that amount.</p>
                                            </div>

                                            <!-- Question 1 -->
                                            <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                                                <h4 @click="show=!show" class="flex items-center justify-between text-sm font-medium text-gray-500 cursor-pointer sm:text-sm py-3 hover:text-gray-900">
                                                    <span>How Many API Calls Do I Get For Free?</span>
                                                    <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                                </h4>
                                                <p class="pt-0 mt-1 text-gray-600 sm:text-base py-3" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-in duration-300" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" style="display: none;">The free plan will give you 2,000 free API calls. At anytime, if you wish to <a href="#_" class="font-medium text-purple-600 underline" data-primary="purple-600">upgrade to a paid plan</a>, you can eaisily increase that amount.</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                </div>

                                <!-- Reviews -->
                                <div class="border-t border-gray-200 mt-4 pt-4">
                                <h3 class="text-sm font-medium text-gray-900">Buyer Reviews</h3>

                                <div class="flex text-sm text-gray-500 space-x-4">
                                    <div class="flex-none py-10">
                                    <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="w-10 h-10 bg-gray-100 rounded-full">
                                    </div>
                                    <div class="py-10">
                                    <h3 class="font-medium text-gray-900">Emily Selman</h3>
                                    <p><time datetime="2021-07-16">July 16, 2021</time></p>

                                    <div class="flex items-center mt-4">
                                        <!--
                                        Heroicon name: solid/star

                                        Active: "text-yellow-400", Default: "text-gray-300"
                                        -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <p class="sr-only">5 out of 5 stars</p>

                                    <div class="mt-4 prose prose-sm max-w-none text-gray-500">
                                        <p>This icon pack is just what I need for my latest project. There's an icon for just about anything I could ever need. Love the playful look!</p>
                                    </div>
                                    </div>
                                </div>

                                <div class="flex text-sm text-gray-500 space-x-4">
                                    <div class="flex-none py-10">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="" class="w-10 h-10 bg-gray-100 rounded-full">
                                    </div>
                                    <div class="py-10 border-t border-gray-200">
                                    <h3 class="font-medium text-gray-900">Hector Gibbons</h3>
                                    <p><time datetime="2021-07-12">July 12, 2021</time></p>

                                    <div class="flex items-center mt-4">
                                        <!--
                                        Heroicon name: solid/star

                                        Active: "text-yellow-400", Default: "text-gray-300"
                                        -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <!-- Heroicon name: solid/star -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <p class="sr-only">5 out of 5 stars</p>

                                    <div class="mt-4 prose prose-sm max-w-none text-gray-500">
                                        <p>Blown away by how polished this icon pack is. Everything looks so consistent and each SVG is optimized out of the box so I can use it directly with confidence. It would take me several hours to create a single icon this good, so it's a steal at this price.</p>
                                    </div>
                                    </div>
                                </div>

                                <!-- More reviews... -->
                                </div>

                            </div>

                        </div>
                    </aside>
                </div>

            </section>
        </div>

        @include('components.credibility', ['tagline' => 'This product brought to you by the maker of'])

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
