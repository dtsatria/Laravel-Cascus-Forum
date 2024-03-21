@extends('user.master')

@section('bagianHome')
<a href="/kategori/create" class="py-2 mt-5 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
  Add Kategori</a>
  <p class="text-gray-500 dark:text-gray-400 m-3">
    <em class="font-semibold text-4xl text-white dark:text-gray-200">Kategori</em>
  </p>
<hr class="border-gray-500 my-5">
<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name Kategori</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              @forelse ($kategori as $key => $value)

              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white dark:text-gray-200">{{$key + 1}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white dark:text-gray-200">{{$value->name}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                    <form action="/kategori/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                          <a href="/kategori/{{$value->id}}/edit" class="py-2 mt-5 text-sm px-3 inline-flex items-center gap-x-2 font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-400 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Edit
                          </a>
                          <input type="submit" class="py-2 mt-5 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-400 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" value="Delete">
                    </form>
                </td>
              </tr>
                  
              @empty
                  
              @endforelse
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
