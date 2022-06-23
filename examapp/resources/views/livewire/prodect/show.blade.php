<div>
    @livewire('prodect.add')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product count
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($prodects as $prodect)
                <tr class="bg-white dark:bg-gray-800">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{$loop->iteration}}
                    </th>
                    <td class="px-6 py-4">
                        {{$prodect->name}}
                    </td>

                    <td class="px-6 py-4">
                        {{$prodect->price}}
                    </td>
                    <td class="px-6 py-4">
                        {{$prodect->count}}
                    </td>

                    <td class="px-6 py-4 text-right">
                        <a href="#" wire:click="delete({{$prodect->id}})"
                            class="font-medium text-blue-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                    @empty
                    <td colspan="4" class="px-6 py-4">
                        Not found
                    </td>
                    @endforelse

                </tr>
            </tbody>
        </table>
    </div>


</div>