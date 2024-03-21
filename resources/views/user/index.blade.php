@extends('user.master')

@section('bagianHome')

<form action="/pertanyaan" method="POST">
  @csrf
  <p class="text-gray-500 dark:text-gray-400 m-3">
    <em class="font-semibold text-white dark:text-gray-200">Post Something</em>
  </p>
  <textarea class="container py-3 px-4 block bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" rows="3" placeholder="This is a textarea placeholder" name="tulisan" id="tulisan"></textarea>
    @error('tulisan')
        <span class="invalid-feedback text-red-600" role="alert">
        <strong>{{ $message }}</strong>
        </span>
    @enderror
    <label for="hs-hidden-select" class="sr-only">Kategori</label>
  <select id="hs-hidden-select" class="py-3 px-4 pe-9 mt-2 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" name="kategori_id" id="kategori_id">
    <option selected disabled>Pilih Kategori</option>
    @forelse ($kategori as $key => $value)
      <option value="{{ $value->id }}">{{ $value->name }}</option>
    @empty
      <option>Kategori Tidak Ada</option>               
    @endforelse
  </select>
    @error('kategori_id')
          <span class="invalid-feedback text-red-600" role="alert">
          <strong>{{ $message }}</strong>
          </span>
    @enderror
  <div class="grid grid-cols-5 gap-3 col-span-2">
    <button type="submit" class="py-2 mt-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      P o s t
    </button>
    <label for="file-input" class="sr-only">Choose file</label>
    <input type="file" name="gambar" class=" text-white col-span-1 w-full border mt-2 border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400">
  </div>
</form>

<hr class="border-gray-500 my-5">


<div class="container mx-auto">
  @include('user.tanyaJawab')
  </div>


@endsection
