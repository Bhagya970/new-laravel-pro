<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               Id
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               email
              </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
               task
              </th>
           
              
            </tr>
          </thead>

         
          <tbody class="bg-white divide-y divide-gray-200">
         
         @foreach($user as $data)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$data->id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{$data->name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
               {{$data->email}}
              </td>
               <td class="px-6 py-4 whitespace-nowrap">
               {{$data->task}}
              </td>

              </tr>
            @endforeach
            

          </tbody>    
          </table>
           </div>
          </div>
          </div>
          </div>
          </div>
          </div>


           </div>
        </div>
    </div>
</x-app-layout>
