<section class="bg-white pt-4 pb-20 px-4 sm:px-6 lg:pt-4 lg:pb-28 lg:px-8">
    <div class="max-w-2xl mx-auto py-4 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-2">

            @foreach ($records as $service)
            <a href="#" class="relative block shadow-md overflow-hidden rounded-lg border border-gray-100 p-8">
                <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                <div class="justify-between sm:flex">
                    <div>
                        <h3 class="text-xl font-title font-bold text-gray-900">
                            {{ $service->title }}
                        </h3>

                        <p class="mt-1 text-xs font-medium text-gray-600">By Ida Bagus Gede Pramana Adi Putra</p>
                    </div>

                    <div class="ml-3 hidden flex-shrink-0 sm:block">
                        <img
                            alt="Paul Clapton"
                            src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="h-16 w-16 rounded-lg object-cover shadow-sm"
                        />
                    </div>
                </div>

                <div class="mt-4 sm:pr-8">
                    <p class="text-sm text-gray-600">
                        {{ $service->summary }}
                    </p>
                </div>

                <dl class="mt-6 flex">
                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-gray-600">{{ $service->price }}</dt>
                        <dd class="text-xs text-gray-500">Dimulai dari</dd>
                    </div>

                    <div class="ml-3 flex flex-col-reverse sm:ml-6">
                        <dt class="text-sm font-medium text-gray-600">{{ $service->total_orders }} kali</dt>
                        <dd class="text-xs text-gray-500">Jumlah pegerjaan</dd>
                    </div>
                </dl>
            </a>
            @endforeach

        </div>
    </div>
</section>
