<div>
    <div class=" container  mx-auto bg-white  rounded-none mt-8">
        <div class="container  mx-auto rounded-md sm:p-4 dark:text-gray-100 dark:bg-gray-900">
            <div class="overflow-x-auto">
                <div>
                    <h4> Group product detail</h4>
                </div>

                <div class="container mt-10 mx-auto flex justify-between">
                    <div>
                        <p class="text-xl font-semibold leading-tight ml-1">
                            Product Collection
                        </p>
                    </div>
                    <button wire:click="openModalToCreat"
                        class="text-white bg-blue-700 hover:bg-blue-800  font-medium rounded text-xs px-6 py-2 mr-2 mb-2 ">
                        Creat New
                    </button>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-gray-200 mt-4 ">
                    <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-right border border-gray-200">
                            <th class="p-2.5 text-left border border-gray-200 bg-gray-100">No</th>
                            <th class="p-2.5 text-left border border-gray-200">Product Code</th>
                            <th class="p-2.5 text-left border border-gray-200">Product Name</th>
                            <th class="p-2.5 text-left border border-gray-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @forelse($products as $product) -->
                        <tr class="text-xs text-right border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-800">

                            <td class="p-4 text-left border border-gray-200 bg-gray-100">
                                <!-- <span> {{$loop->iteration}}</span> -->
                            </td>
                            <td class="p-4 text-left border border-gray-200 bg-gray-100">
                                <!-- <span> {{$product->name}}</span> -->
                            </td>
                            <td class="px-3 py-2  text-left border border-gray-200">
                                <!-- <span> {{$product->code}}</span> -->
                            </td>
                            <td class="px-3 py-1 text-left border border-gray-200">
                                <span>
                                    <button type="button" wire:click="delete"
                                        class="border border-amber-400 px-1 py-1  rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" width="13px"
                                            height="13px" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </span>
                            </td>

                            <!-- @empty
                            <td colspan="4" class="px-6 py-4 ">
                                Not found
                            </td>
                            @endforelse -->

                        </tr>

                    </tbody>
                </table>
                <div class="mt-8 flex justify-end">
                    <a href="{{ route('Gropproduct') }} "
                        class="text-white bg-gray-500 hover:bg-green-300 font-medium rounded text-sm sm:w-auto px-6 py-2.5 text-center">
                        Back
                    </a>
                </div>
                <div class="mt-2 ">

                </div>

                <div>

                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">
            Grop product detail
        </x-slot>
        <x-slot name="content">
            <x-jet-label for="name" value="Select Product"/>
            @if(!empty($products))
            <div class="absolut z-10 list-group bg-white w-full rounded-none ">
                <x-jet-input wire:model.debounce.300ms="search" class="w-full" name="search" type="search" />
                @foreach($products as $product)
                <a href="{{ route('showprodect' , $product('id')) }}"> {{$product->name}}</a>
                @endforeach
            </div>
            @endif
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('modal' , false)" wire:loading.attr='disabled'
                class="bg-gray-500 text-white hover:bg-gray-300">
                Close
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="add()" wire:loading.attr='disabled' class="bg-blue-800 text-white">
                Save
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
