@extends('layouts.user')
@section('title', 'Profile')
@section('content')

<section class="bg-gray-50 relative top-14 md:top-[65px]">
  <div class="px-4 py-20 mx-auto">
    <div class="w-full px-0 pt-5 pb-6 mx-auto mt-4 mb-0 space-y-4 bg-transparent border-0 border-gray-300 rounded-lg md:px-6 sm:mt-8 sm:mb-5 md:bg-white md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
      <h1 class="mb-5 font-bold text-md sm:text-xl sm:text-center">Profile</h1>
      <form class="pb-1 space-y-4">
        @csrf

        <label class="block text-sm">Full Name
          <input class="block w-full px-3 py-2 text-sm text-gray-500 bg-white border rounded" type="text" name="fullname" placeholder="Full name" readonly value="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}">
        </label>

        <label class="block text-sm">Email
          <input class="block w-full px-3 py-2 text-sm text-gray-500 bg-white border rounded" type="email" name="email" placeholder="Email address" readonly value="{{ auth()->user()->email }}">
        </label>

        <label class="block text-sm">Phone
          <input class="block w-full px-3 py-2 text-sm text-gray-500 bg-white border rounded" type="text" name="phone" placeholder="Phone" readonly value="{{ auth()->user()->phone }}">
        </label>

        <label class="block text-sm">Address
          <input class="block w-full px-3 py-2 text-sm text-gray-500 bg-white border rounded" type="text" name="address" placeholder="Address" readonly value="{{ auth()->user()->address }}">
        </label>

        <label class="block text-sm">Account Number
          <input class="block w-full px-3 py-2 text-sm text-gray-500 bg-white border rounded" type="text" name="account" placeholder="Address" readonly value="123456789">
        </label>

        <label class="block text-sm">Bank Name
          <input class="block w-full px-3 py-2 text-sm text-gray-500 bg-white border rounded" type="text" name="bankname" placeholder="Address" readonly value="Test Bank">
        </label>

        <input type="submit" class="w-full cursor-pointer sm:w-auto mt-5 bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-2 px-6 leading-relaxed sm:mt-0" value="Update">
      </form>
    </div>
  </div>
</section>
@endsection
