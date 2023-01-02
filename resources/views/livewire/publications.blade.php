<div>

    @forelse ($publications as $publication)
    <div class="shadow-md p-4">
        <p class="text-sm text-gray-500">
          <time datetime="{{ $publication->created_at->format('Y-m-d') }}">{{ $publication->created_at->format('d M Y') }}</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">{{ $publication->title }}</p>
          <p class="mt-3 text-base text-gray-500">{{ $publication->summary }}</p>
        </a>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> {{ __('label.read_full_story') }} </a>
        </div>
    </div>
    @empty

    @endforelse

</div>
