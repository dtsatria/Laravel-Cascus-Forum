@extends('layouts.master_auth')

@section('judulPage')
Login
@endsection

@section('judul')
Sign In
@endsection

@section('subjudul')
Sign in to access your account
@endsection

@section('form')

<form method="POST" action="{{ route('login') }}">
    @csrf

<div class="flex flex-col gap-[10px]">
    <div class="form-field ">
        <label class="form-label text-white">Email address</label>
        <div class="form-control">
         <input placeholder="Type here" id="email" type="email" class="input max-w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
       </div>
       @error('email')
       <span class="invalid-feedback text-red-600" role="alert">
       <strong>{{ $message }}</strong>
       </span>
       @enderror
    </div>

    <div class="form-field">
        <label class="form-label text-white">Password</label>
        <div class="form-control">
            <input placeholder="Type here" id="password" type="password" class="input max-w-full @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
        </div>
        @error('password')
        <span class="invalid-feedback text-red-600" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-field mt-[20px]">
        <div class="form-control justify-between">
            <div class="flex gap-2">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                <label class="form-check-label text-white" for="remember">
                    Remember me
                </label>
            </div>
            {{-- @if (Route::has('password.request'))
            <a class="link link-underline-hover link-primary text-sm text-white" href="{{ route('password.request') }}">Forgot your password?</a>
            @endif         --}}
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary w-full mt-[20px]">
        login
    </button>
</div>

</form>
@endsection


@section('buttonText')
<a href="{{ route('register')}}" class="link link-underline-hover link-primary text-sm flex flex-row gap-1"><span>Don't have an account yet?</span><span class="text-white">Sign up.</span></a>
@endsection
