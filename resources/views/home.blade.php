@extends('user.master')

@section('menu')
<a class="font-medium text-sm !text-black hover:text-blue-600  dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('login') }}">
    Sign In
</a>
<a class="font-medium text-sm !text-black hover:text-blue-600  dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('register') }}">
    Sign Up
</a>
@endsection

@section('bagianHome')
   <div class="text-center flex flex-col gap-[40px] pt-[300px] xl:pt-[200px] items-center">
    <div class="text-[40px] xl:text-[60px] text-white  flex flex-col gap-[50px] xl:gap-[40px]">
        <p>Welcome to <strong>Cascus.</strong></p>
        <p>Ask Your <strong>Questions</strong>,</p>
     <p>Got Your Answers..</p>
    </div>
   <a href="/login">
    <button class=" w-fit py-[10px] mt-5 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Ask Now
     </button>
   </a> 
   </div>    
   
@endsection
