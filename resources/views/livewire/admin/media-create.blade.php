<div>
    <div class="grid grid-cols-2">
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Media Name</label>
            <input type="text" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g Janes Jeans"  />
            <div class="text-red-600 text-xs mt-1">@error('name') {{ $message }} @enderror</div>
        </div>
    
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select wire:model="media_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">Select Category</option>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{$category->name}}</option>
              @endforeach
            </select>
            <div class="text-red-600 text-xs mt-1">@error('media_category') {{ $message }} @enderror</div>
        </div>
    </div>

    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Media Name</label>
        <input type="file" wire:model="media_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g Janes Jeans"  />
        <div class="text-red-600 text-xs mt-1">@error('media_image') {{ $message }} @enderror</div>
    </div>

    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea wire:model="description" rows="3" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g this is about"></textarea>
        <div class="text-red-600 text-xs mt-1">@error('description') {{ $message }} @enderror</div>
    </div>
    <div class="flex justify-center">
        <button wire:click.prevent="createMedia" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>
</div>
