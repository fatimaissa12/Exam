 <div class="container mt-10 mx-auto flex justify-between">
     <div class="flex justify-between">
         <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-table h-5 w-5 text-gray-400 p " fill="currentColor"  stroke="currentColor"
             xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd"
                 d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
         </svg>
         <p class="text-2xl font-semibold leading-tight mb-5">
             Prodect Index
         </p>
     </div>
     <button type="button"
         class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-none text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>

 </div>

 <div>

     <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
    </div> -->

     <div class="   mt-2 bg-white px-5 py-5 rounded-none">
         <div class="container p-2 mx-auto rounded-md sm:p-4 dark:text-gray-100 dark:bg-gray-900">
             <h2 class="mb-3 text-2xl font-semibold leading-tight">Standings</h2>
             <div class="overflow-x-auto">
                 <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                     <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                         <tr class="text-right">
                             <th class="p-4 text-left">No</th>
                             <th class="p-4 text-left">Photo</th>
                             <th class="p-4 text-left">Product</th>
                             <th class="p-4 text-left">Code</th>
                             <th class="p-4 text-left">Category</th>
                             <th class="p-4 text-left">Selling Price</th>
                             <th class="p-4 text-left">Action</th>

                         </tr>
                     </thead>
                     <tbody>
                         <tr class="text-right border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-800">
                             @forelse($prodects as $prodect)
                             <td class="px-3 py-2 text-left">
                                 <span> {{$loop->iteration}}</span>
                             </td>
                             <td class="px-3 py-2 text-left">
                                 <img src="{{$prodect->photo}}"
                                     class="w-10 h-10 rounded-full dark:bg-gray-500 dark:bg-gray-700">

                             </td>
                             <td class="px-3 py-2  text-left">
                                 <span> {{$prodect->name}}</span>
                             </td>
                             <td class="px-3 py-2 text-left">
                                 <span> {{$prodect->code}}</span>
                             </td>
                             <td class="px-3 py-2 text-left">
                                 <span> {{$prodect->name}}</span>
                             </td>
                             <td class="px-3 py-2  text-left">
                                 <span>{{$prodect->price}}</span>
                             </td>
                             <td class="px-3 py-2 text-left">
                                 <span>
                                     <button type="button"
                                         class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Red</button>
                                     <button type="button"
                                         class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Default</button>
                                     <button type="button"
                                         class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Yellow</button>
                                 </span>
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

     </div>
 </div>