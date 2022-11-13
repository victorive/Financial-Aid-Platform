@extends('layouts.app')
@section('title', 'Verify Email')
@section('content')
<section class="bg-gray-50 relative top-14 md:top-[65px]">
    <div class="px-4 py-20 mx-auto">
        <div class="w-full mx-auto px-0 md:px-6 pt-5 pb-6 mt-4 mb-0 sm:mt-8 sm:mb-5 space-y-4 bg-transparent md:bg-white border-0 border-gray-300 rounded-lg md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
            <h1 class="mb-5 text-md sm:text-xl font-bold sm:text-center">Email Verification</h1>
            @if (session('message'))
            <p class="text-sm text-green-600 md:text-center">
                {{ session('message') }}
            </p>
            @endif

            <div class="mb-4 text-sm text-gray-600">
                <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
            </div>

            <div class="flex flex-col items-start justify-between sm:items-center sm:flex-row">
                <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <input type="submit" class="w-full sm:w-auto mt-5 bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-2 px-6 leading-relaxed sm:mt-0" value="Resend Verification Email">
                </form>

                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input type="submit" class="w-full sm:w-auto mt-5 bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-2 px-6 leading-relaxed sm:mt-0" value="Logout">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
