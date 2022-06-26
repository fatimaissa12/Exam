<div>
    <!-- <div class="p-5 mb-5 rounded-lg">

        <form wire:submit.prevent="add">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Product Name</label>
                <input wire:model="name" type="=text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>

            <div class="mb-6">
                <label for="Price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    photo</label>
                <input wire:model="price" type="=text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div class="mb-6">
                <label for="Count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Code</label>
                <input wire:model="count" type="=text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div class="mb-6">
                <label for="Count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Category</label>
                <input wire:model="count" type="=text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div class="mb-6">
                <label for="Count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Price</label>
                <input wire:model="count" type="=text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>


            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add</button>
        </form>
    </div> -->
    <section class=" dark:bg-gray-800 dark:text-gray-50">
        <form novalidate="" action=""
            class="container flex flex-col mx-auto space-y-0 ng-untouched ng-pristine ng-valid">
            <fieldset class="grid grid-cols-4 gap-6  rounded  dark:bg-gray-900">
                <div class="space-y-2 col-span-full lg:col-span-1">
                    <p class="font-semibold text-xl">Creat Product</p>
                </div>
                <div class="grid grid-cols-1 gap-4 col-span-full lg:col-span-1">
                    <div class=" pt-2 col-span-full sm:col-span-1">
                        <label for="firstname" class="text-sm"> Name</label>
                        <input id="firstname" type="text" placeholder="Enter Name"
                            class="w-full  rounded-none border-gray-400 dark:text-gray-900">
                    </div>
                    <div class=" pt-2 col-span-full sm:col-span-3">
                        <label for="lastname" class="text-sm">Code</label>
                        <input id="lastname" type="text" placeholder="Enter Code"
                            class="w-full rounded-none border-gray-400 dark:text-gray-900">
                    </div>
                    <div class=" pt-2 col-span-full sm:col-span-3">
                        <label for="email" class="text-sm">Category</label>
                        <input id="email" type="email" placeholder="Select Category"
                            class="w-full rounded-none border-gray-400 dark:text-gray-900">
                    </div>
                    <div class="pt-2 col-span-full sm:col-span-3">
                        <label class="text-sm">Photo</label>
                        <input type="file" id="base-input"
                            class=" border border-gray-400 text-gray-900 text-sm rounded-none  block w-full p-2 ">
                    </div>
                    <div class=" pt-2 col-span-full sm:col-span-2">
                        <label for="city" class="text-sm">Selling Price</label>
                        <input type="text" placeholder=" Enter Selling Price "
                            class="w-full rounded-none border-gray-400 dark:text-gray-900">
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</div>