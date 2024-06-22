<div>
    <div class="font-bold text-xs uppercase mt-40 text-red-600">
        Amin Login. Restricted Access!
    </div>
    <div class="mt-6">       
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
            <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
            <div class="text-red-600 text-xs mt-1">@error('email') {{ $message }} @enderror</div>
        </div>
        
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input wire:model="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
            <div class="text-red-600 text-xs mt-1">@error('password') {{ $message }} @enderror</div>
        </div> 

        <button type="submit" wire:click="submitLogin" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>
</div>
