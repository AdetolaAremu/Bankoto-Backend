<div>
    <div class="flex justify-end mb-3">
        <a href="{{url('/admin/media-create')}}">
            <button class="bg-purple-600 rounded-md p-2 text-xs text-white">
                Create Media
            </button>
        </a>
    </div>
    <div class="grid grid-cols-3">
        @foreach ($media as $med)
        <div class="h-44 w-44 rounded-lg bg-gray-300 p-2 relative">
            <div class="w-full">
                <img src="{{ asset('/files/product_media/'.$med->file_link) }}" class="h-20 w-full">
            </div>
            <div class="text-sm mt-2">{{ $med->name }}</div>
            <div class="text-sm mt-2">{{ $med->category->name }}</div>
            <div class="text-sm mt-2">{{ $med->description }}</div>
        </div>
        @endforeach
        
    </div>

    <div class="my-4">
        {{ $media->links() }}
    </div>
</div>
