@extends('layouts.app')
@section('title', 'Register')
@section('content')
<section class="bg-gray-50 relative top-14 md:top-[65px]">
  <div class="px-4 py-20 mx-auto">
    <div class="w-full mx-auto px-0 md:px-6 pt-5 pb-6 mt-4 mb-0 sm:mt-8 sm:mb-5 space-y-4 bg-transparent md:bg-white border-0 border-gray-300 rounded-lg md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
      <h1 class="mb-5 text-md sm:text-xl font-bold sm:text-center">Register to ask for donation</h1>
      <form action="{{ route('register') }}" method="POST" class="pb-1 space-y-4">
        @csrf

        <label class="block">
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('firstname') border-red-500 @enderror" type="text" name="firstname" placeholder="First name" value="{{ old('firstname')}}">
        </label>
        @error('firstname')
            <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label class="block">
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('lastname') border-red-500 @enderror" type="text" name="lastname" placeholder="Last name" value="{{ old('lastname')}}">
        </label>
        @error('lastname')
            <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label class="block">
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('email') border-red-500 @enderror" type="email" name="email" placeholder="Email address" value="{{ old('email')}}">
        </label>
        @error('email')
          <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label class="block">
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('phone') border-red-500 @enderror" type="text" name="phone" placeholder="Phone" value="{{ old('phone')}}">
        </label>
        @error('phone')
          <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label class="block">
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('address') border-red-500 @enderror" type="text" name="address" placeholder="Address" value="{{ old('address')}}">
        </label>
        @error('address')
          <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label class="block">
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('password') border-red-500 @enderror" type="password" name="password" placeholder="Password">
        </label>
        @error('password')
          <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label class="block">
          <input class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('password_confirmation') border-red-500 @enderror" type="password" name="password_confirmation" placeholder="Confirm Password">
        </label>
        @error('password_confirmation')
          <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <div class="flex flex-col items-start justify-between sm:items-center sm:flex-row">
          <input type="submit" class="w-full sm:w-auto mt-5 bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-2 px-6 leading-relaxed sm:mt-0" value="Register">
        </div>
      </form>
    </div>

    <p class="my-0 sm:my-5 text-xs font-medium text-center">Already have an account?
      <a href="{{ route('login') }}" class="text-[#24207F]">Login</a>
    </p>
  </div>
</section>
@endsection
