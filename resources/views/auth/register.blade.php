@extends('layouts.master_auth')

@section('judulPage')
Sign Up
@endsection

@section('judul')
Sign Up
@endsection

@section('subjudul')
Sign Up to create your account
@endsection

@section('form')

<form method="POST" action="{{ route('register') }}">
    @csrf

<div class="flex flex-col gap-[10px]">
    
    <div class="row1 flex flex-col xl:flex-row justify-between gap-[15px]">
        <div class="form-field flex flex-col gap-[5px] w-full">
            <label class="form-label text-white">Username</label>
            <div class="form-control">
                <input  placeholder="Type here" id="name" type="text" class="input max-w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">
            </div>
            @error('name')
            <span class="invalid-feedback text-red-600" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
        </div>
    
        <div class="form-field flex flex-col gap-[5px] w-full">
            <label class="form-label text-white">Email</label>
            <div class="form-control">
                <input placeholder="Type here" id="email" type="email" class="input max-w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
            </div>
            @error('email')
                    <span class="invalid-feedback text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>

    <div class="row2 flex flex-col xl:flex-row justify-between gap-[15px]">
        <div class="form-field flex flex-col gap-[5px] w-full">
            <label class="form-label text-white">Password</label>
            <div class="form-control">
                <input placeholder="Type here" id="password" type="password" class="input max-w-full @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
            </div>
            @error('password')
                    <span class="invalid-feedback text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    
        <div class="form-field flex flex-col gap-[5px] w-full">
            <label class="form-label text-white">Confirm Password</label>
            <div class="form-control">
                <input  placeholder="Type here"  id="password-confirm" type="password" class="input max-w-full" name="password_confirmation" autocomplete="new-password">
            </div>
        </div>

    </div>

    <div class="form-field flex flex-col gap-[5px] w-full">
        <label class="form-label text-white">Bio</label>
        <div class="form-control">
            <input  placeholder="Type here" id="bio" type="text" class="input max-w-full @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') }}" autocomplete="bio">
        </div>
        @error('bio')
        <span class="invalid-feedback text-red-600" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
    </div>

    <div class="form-field flex flex-col gap-[5px] w-full">
        <label class="form-label text-white">Umur</label>
        <div class="form-control">
            <input  placeholder="Type here" id="umur" type="text" class="input max-w-full @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" autocomplete="umur">
        </div>
        @error('umur')
        <span class="invalid-feedback text-red-600" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
    </div>

    <div class="form-field flex flex-col gap-[5px] w-full">
        <label class="form-label text-white">Alamat</label>
        <div class="form-control">
            <input  placeholder="Type here" id="alamat" type="text" class="input max-w-full @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autocomplete="alamat">
        </div>
        @error('alamat')
        <span class="invalid-feedback text-red-600" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
    </div>

   
    <button type="submit" class="btn btn-primary w-full mt-[20px]">
        Register
    </button>

</div>

</form>

@endsection

@section('buttonText')
<a href="{{ route('login')}}" class="link link-underline-hover link-primary text-sm flex flex-row gap-1"> <span>Already have an account ?</span><span class="text-white">Sign in.</span></a>
@endsection

