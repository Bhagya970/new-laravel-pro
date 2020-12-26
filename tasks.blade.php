<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
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
        <table id="proposalTable" class="display table proposal-list-table" style="width:100%">
          
            <div>
               <tr>
              <th>name</th>
              <th>task</th>
              <th>status</th>
               </tr>
              </div>
       

         
          <div>
            
            <th>{{$user->name}}</th>
              @foreach($user->tasks as $row)
               <th>{{$row->taskdescription}}</th>
             <th>
              <select>
                  <option  disabled="true">Select status</option>
                  <option value="task">Task completed</option>
                  <option value="pending">pending</option>
                  <option value="onhold">on hold</option>
                </select>
              </th>
               @endforeach
              </div>
            
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
