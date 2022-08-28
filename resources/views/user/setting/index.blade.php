@extends('layouts.user')
@section('title', 'Settings')
@section('content')

<section class="bg-gray-50 relative top-14 md:top-[65px]">
  <div class="px-4 py-20 mx-auto">
    <div class="w-full px-0 pt-5 pb-6 mx-auto mt-4 mb-0 space-y-4 bg-transparent border-0 border-gray-300 rounded-lg md:px-6 sm:mt-8 sm:mb-5 md:bg-white md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
      <h1 class="mb-5 font-bold text-md sm:text-xl sm:text-center">Settings</h1>
      <form action="" method="POST" class="pb-1 space-y-4">
        @csrf

        <label class="block text-sm">Email
            <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500 focus:border-[#24207F] @error('email') border-red-500 @enderror" type="email" name="email" placeholder="Email address" readonly value="{{ auth()->user()->email }}">
            <p class="text-sm text-right hover:text-[#c9c8eb]"><a href="">Edit</a></p>
        </label>

        <label class="block text-sm">Phone
            <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500 focus:border-[#24207F] @error('phone') border-red-500 @enderror" type="text" name="phone" placeholder="Phone" readonly value="{{ auth()->user()->phone }}">
            <p class="text-sm text-right hover:text-[#c9c8eb]"><a href="">Edit</a></p>
        </label>

        <label class="block text-sm">New Password
            <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500 focus:border-[#24207F] @error('password') border-red-500 @enderror" type="text" name="password" placeholder="New Password">
        </label>

        <label class="block text-sm">Confirm New Password
            <input class="w-full bg-white border rounded block text-sm px-3 py-2 text-gray-500 focus:border-[#24207F] @error('password_confirmation') border-red-500 @enderror" type="text" name="password_confirmation" placeholder="Confirm password">
        </label>

        <input type="submit" class="w-full cursor-pointer sm:w-auto mt-5 bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-2 px-6 leading-relaxed sm:mt-0" value="Update">
      </form>
    </div>
  </div>
</section>
@endsection
