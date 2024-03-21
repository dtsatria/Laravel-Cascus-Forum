@extends('user.master')

@section('bagianHome')
<form action="/jawaban/{{$jawaban->id}}" method="POST">
    @csrf
    @method('PUT')
    <p class="text-gray-500 dark:text-gray-400 m-3">
        <em class="font-semibold text-4xl text-white dark:text-gray-200">Edit Jawaban</em>
      </p>
    <hr class="border-gray-500 my-5">
    <div class="relative mt-3">
        <input type="text" name="tulisan" id="tulisan" value="{{$jawaban->tulisan}}" class=" text-white peer py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600 @error('password') is-invalid @enderror" placeholder="Add Kategori Name">
    </div>
    @error('tulisan')
        <span class="invalid-feedback text-red-600" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror
    
      <button type="submit" class="py-2 mt-5  px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Save</button>
</form>
@endsection
