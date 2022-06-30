<div>
<div class="mx-auto  mt-2 bg-white px-5 py-5 rounded-none">
        <section class=" dark:bg-gray-800 dark:text-gray-50">
            <form  wire:submit.prevent="update"
                class="container flex flex-col mx-auto space-y-0 ng-untouched ng-pristine ng-valid">
                <input type="hidden" >
                <fieldset class="grid grid-cols-4 gap-6  rounded  dark:bg-gray-900">
                    <div class="space-y-2 col-span-full lg:col-span-1">
                        <p class="font-semibold text-xl">Edit Product</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 col-span-full lg:col-span-1">
                        <div class=" pt-2 col-span-full sm:col-span-1">
                            <label class="text-sm"> Name</label>
                            <input type="text" placeholder="Enter Name" wire:model="name"
                                class="w-full  rounded-none border-gray-300 dark:text-gray-900">
                        </div>
                        <div class=" pt-2 col-span-full sm:col-span-3">
                            <label class="text-sm">Code</label>
                            <input type="text" placeholder="Enter Code" wire:model="code"
                                class="w-full rounded-none border-gray-300 dark:text-gray-900">
                        </div>
                        <div class=" pt-2 col-span-full sm:col-span-3">
                            <label class="text-sm">Category</label>
                            <select id="countries" class="w-full rounded-none border-gray-300 dark:text-gray-900">
                                <option selected>#</option>
                            </select>
                        </div>
                        <div class="pt-2 col-span-full sm:col-span-3">
                            <label class="text-sm">Photo</label>
                            <input type="file" wire:model="image"
                                class=" border border-gray-300 text-gray-900 text-sm rounded-none  block w-full p-2 ">
                               
                        </div>
                        <div class=" pt-2 col-span-full sm:col-span-2">
                            <label class="text-sm">Selling Price</label>
                            <input type="text" placeholder="Enter Selling Price" wire:model="price"
                                class="w-full rounded-none border-gray-300 dark:text-gray-900">
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('showprodect') }} "
                                class="text-black bg-blue-700 hover:bg-green-300  font-medium rounded text-sm w-full sm:w-auto px-6 py-2.5 text-center">
                                Back
                            </a>
                            <button type="submit"
                                class="ml-1 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded text-sm w-full sm:w-auto px-6 py-2.5 text-center ">
                                Save</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </div> 
</div>