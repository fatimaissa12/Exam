<div>
    <div class="container mt-2 mx-auto bg-white px-4 py-4 rounded-none">
        <section class=" dark:bg-gray-800 dark:text-gray-50">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-semibold text-xl">Creat Product</p>
            </div>
            <form action="" wire:submit.prevent="add" class="container ">
                @csrf
                <fieldset>
                    <div class="grid grid-cols-2 gap-3 col-span-full lg:col-span-1">
                        <div class=" pt-1 col-span-full sm:col-span-2">
                            <label class="text-sm"> Name</label>
                            <input type="text" placeholder="Enter Name" wire:model="name"
                                class="w-full  rounded-none border-gray-300 dark:text-gray-900">
                            @error('name')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" pt-1  col-span-full sm:col-span-2">
                            <label class="text-sm">Code</label>
                            <input type="text" placeholder="Enter Code" wire:model="code"
                                class="w-full rounded-none border-gray-300 dark:text-gray-900">
                            @error('code')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" pt-1 col-span-full sm:col-span-2">
                            <label class="text-sm">Category</label>
                            <select id="countries" class="w-full rounded-none border-gray-300 dark:text-gray-900">
                                <option selected>#</option>
                            </select>
                            @error('first_name')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" pt-1 col-span-full sm:col-span-2">
                            <label class="text-sm">Photo</label>
                            <input type="file" wire:model="image"
                                class=" border border-gray-300 text-gray-900 text-sm rounded-none  block w-full p-2 ">
                            @error('image')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" pt-1 col-span-full sm:col-span-2">
                            <label for="city" class="text-sm">Selling Price</label>
                            <input type="text" placeholder="Enter Selling Price" wire:model="price"
                                class="w-full rounded-none border-gray-300 dark:text-gray-900">
                            @error('price')
                            <span class="text-red-500 error">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="flex justify-end pt-4">
                        <a href="{{ route('showprodect') }} "
                            class="text-black bg-blue-700 hover:bg-green-300 font-medium rounded text-sm sm:w-auto px-6 py-2.5 text-center">
                            Back
                        </a>
                        <button type="submit"
                            class="ml-1 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded text-sm sm:w-auto px-6 py-2.5 text-center ">
                            Save</button>
                    </div>
                </fieldset>
            </form>
        </section>
    </div>
</div>