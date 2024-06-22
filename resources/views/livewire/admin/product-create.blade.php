<div>
    <div>
        <div class="">
            <div class="grid grid-cols-2">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                    <input type="text" wire:model="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g Janes Jeans"  />
                    <div class="text-red-600 text-xs mt-1">@error('product_name') {{ $message }} @enderror</div>
                </div>
                  
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Title</label>
                    <input type="text" wire:model="product_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g Light"  />
                    <div class="text-red-600 text-xs mt-1">@error('product_title') {{ $message }} @enderror</div>
                </div>
          
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Weight</label>
                    <input type="text" wire:model="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g 50kg"  />
                    <div class="text-red-600 text-xs mt-1">@error('weight') {{ $message }} @enderror</div>
                </div>
          
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product SKU</label>
                    <input type="text" wire:model="sku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g sku-0001"  />
                    <div class="text-red-600 text-xs mt-1">@error('sku') {{ $message }} @enderror</div>
                </div>
          
                <div class="mb-6">
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select wire:model="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="">Select Category</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    <div class="text-red-600 text-xs mt-1">@error('category_id') {{ $message }} @enderror</div>
                </div>
          
                <div class="mb-6">
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colour</label>
                    <select wire:model="colour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="">Select Colour</option>
                          <option value="green">Green</option>
                          <option value="blue">Blue</option>
                          <option value="yellow">Yellow</option>
                          <option value="magenta">Magenta</option>
                          <option value="cyan">Cyan</option>
                          <option value="black">Black</option>
                          <option value="white">White</option>
                          <option value="maroon">Maroon</option>
                    </select>
                    <div class="text-red-600 text-xs mt-1">@error('colour') {{ $message }} @enderror</div>
                </div>
          
                <div class="mb-6">
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                    <select wire:model="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select Size</option>
                        <option value="sm">SM</option>
                        <option value="lg">LG</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                        <option value="xxxl">XXXL</option>
                    </select>
                    <div class="text-red-600 text-xs mt-1">@error('size') {{ $message }} @enderror</div>
                </div>
          
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags <span class="text-xs">(comma separated)</span></label>
                    <input type="text" wire:model="tags" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g money, product"  />
                    <div class="text-red-600 text-xs mt-1">@error('tags') {{ $message }} @enderror</div>
                </div>
          
            </div>
    
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea wire:model="product_description" rows="3" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g money, product" ></textarea>
                <div class="text-red-600 text-xs mt-1">@error('product_description') {{ $message }} @enderror</div>
            </div>
            
            <div class="flex justify-center">
                <button wire:click.prevent="createProduct" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </div>
    
</div>
