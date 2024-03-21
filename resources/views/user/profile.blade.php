@extends('user.master')

@section('bagianHome')
  <p class="text-gray-500 dark:text-gray-400 m-3">
    <em class="font-semibold text-4xl text-white dark:text-gray-200">Edit Profile {{Auth::user()->name}}</em>
  </p>
<hr class="border-gray-500 my-5">

<form action="/profile/{{$profileDetail->id}}" method="POST">
  @csrf
  @method('PUT')

  <div class="flex flex-col gap-[10px]">

    
    <label class="form-label text-white">Email</label>
    <div class="relative mt-3">
      <textarea type="text" id="email" name="email" class="peer text-white @error('email') is-invalid @enderror py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600" placeholder="Enter email" disabled>{{$profileDetail->user->email}}</textarea>
    </div>
    @error('email')
        <span class="invalid-feedback text-red-600" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    <label class="form-label text-white">Bio</label>
    <div class="relative mt-3">
      <textarea type="text" id="bio" name="bio" class="peer text-white @error('bio') is-invalid @enderror py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600" placeholder="Enter Bio">{{$profileDetail->bio}}</textarea>
    </div>
    @error('bio')
        <span class="invalid-feedback text-red-600" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    <label class="form-label text-white">Umur</label>
    <div class="relative mt-3">
      <textarea type="text" id="umur" name="umur" class="peer text-white @error('umur') is-invalid @enderror py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600" placeholder="Enter umur">{{$profileDetail->umur}}</textarea>
    </div>
    @error('umur')
        <span class="invalid-feedback text-red-600" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    <label class="form-label text-white">Alamat</label>
    <div class="relative mt-3">
      <textarea type="text" id="alamat" name="alamat" class="peer text-white @error('alamat') is-invalid @enderror py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600" placeholder="Enter alamat">{{$profileDetail->alamat}}</textarea>
    </div>
    @error('alamat')
        <span class="invalid-feedback text-red-600" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    
    
  </div>

{{-- 
  <div class="relative mt-3">
    <input type="text" class="peer py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600" placeholder="Enter Name">
  </div>

  <div class="relative mt-3">
    <input type="email" class="peer py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600" placeholder="Enter Email">
  </div>
  
  <div class="relative mt-3">
    <input type="password" class="peer py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 dark:focus:border-b-gray-600" placeholder="Enter password">
  </div> --}}

  
  <button type="submit" class="py-[10px] mt-5  px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
    Save
</button>
</form>


@endsection
