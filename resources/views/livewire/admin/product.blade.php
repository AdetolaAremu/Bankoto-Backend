<div>
    <div class="flex justify-end mb-3">
        <a href="{{url('/admin/products-create')}}">
            <button class="bg-purple-600 rounded-md p-2 text-xs text-white">
                Create Product
            </button>
        </a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        S/N
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SKU
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Size
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $index => $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration + ($products->perPage() * ($products->currentPage() - 1)) }}
                    </th>
                    <td class="px-6 py-4 capitalize">
                        {{ $product->product_name }}
                    </td>
                    <td class="px-6 py-4 capitalize">
                        {{ $product->category->name }}
                    </td>
                    <td class="px-6 py-4 capitalize">
                        {{ $product->sku }}
                    </td>
                    <td class="px-6 py-4 capitalize">
                        {{ $product->colour }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-4">
            {{ $products->links() }}
        </div>
    </div>
</div>
