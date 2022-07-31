<div>
    <div class="container mt-10 mx-auto flex justify-between">
        <div class="flex justify-start">
            <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-table h-5 w-5 text-gray-400 mt-1  "
                fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
            </svg>
            <p class="text-xl font-semibold leading-tight mb-5 ml-1">
                Grop Product
            </p>
        </div>
        <button wire:click="openModalToCreat"
            class="text-white bg-blue-700 hover:bg-blue-800  font-medium rounded text-xs px-6 py-2 mr-2 mb-4 ">
            Creat New
        </button>
    </div>
    <div class=" container  mx-auto bg-white  rounded-none">
        <div class="container  mx-auto rounded-md sm:p-4 dark:text-gray-100 dark:bg-gray-900">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-gray-200 mt-4 ">
                    <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-right border border-gray-200">
                            <th class="p-2.5 text-left border border-gray-200 bg-gray-100">No</th>
                            <th class="p-2.5 text-left border border-gray-200">Grop</th>
                            <th class="p-2.5 text-left border border-gray-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($groups as $group)
                        <tr class="text-xs text-right border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-800">

                            <td class="p-4 text-left border border-gray-200 bg-gray-100">
                                <span> {{$loop->iteration}}</span>
                            </td>
                            <td class="px-3 py-2  text-left border border-gray-200">
                                <span> {{$group->name}}</span>
                            </td>
                            <td class="px-3 py-1 text-left border border-gray-200">
                                <span>
                                    <button type="button" class="border border-amber-400 px-1 py-1 rounded">  
                                        <a href="{{ route('productdetail') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="13px" class=""
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z" />
                                        </svg>
                                        </a>
                                    </button>
                                    <button type="button" class="border border-amber-400 px-1 py-1 rounded"
                                        wire:click="openModalToUpadte({{$group->id}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="13px" fill="none"
                                            class="text-red-300" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <button type="button" wire:click="delete({{$group->id}})"
                                        class="border border-amber-400 px-1 py-1  rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" width="13px"
                                            height="13px" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </span>
                            </td>
                            @empty
                            <td colspan="4" class="px-6 py-4 ">
                                Not found
                            </td>
                            @endforelse
                        </tr>
                    </tbody>
                </table>
                <div class="mt-2 ">
                    {{ $groups->links() }}
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">
            Creat Grop {{$group_id}}
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label for="name" value="category" />
                <x-jet-input wire:model.debounce.300ms="name" class="w-full" name="name" id="name" type="text" />
                <x-jet-input-error for="name" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('modal' , false)" wire:loading.attr='disabled'
                class="bg-gray-500 text-white hover:bg-gray-300">
                Close
            </x-jet-secondary-button>
            @if($group_id)
            <x-jet-secondary-button wire:click="update" wire:loading.attr='disabled' class="bg-blue-800 text-white">
                Update
            </x-jet-secondary-button>
            @else
            <x-jet-secondary-button wire:click="add()" wire:loading.attr='disabled' class="bg-blue-800 text-white">
                Save
            </x-jet-secondary-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>
</div>