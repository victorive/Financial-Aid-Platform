@extends('layouts.admin')
@section('title', 'Admin')
@section('content')
<section class="bg-gray-50">
    <div class="px-4 py-20 mx-auto">
        <div class="w-full mx-auto px-0 md:px-6 pt-5 pb-6 mt-4 mb-0 sm:mt-8 sm:mb-5 space-y-4 bg-transparent md:bg-white border-0 border-gray-300 rounded-lg md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12">
            <h1 class="mb-5 text-md sm:text-xl font-bold sm:text-center">Admin Dashboard</h1>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mx-auto pt-4 mb-4">
                <div class="w-auto text-center rounded-md bg-[#e1dff7] text-black py-10 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Users</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e1dff7] text-black py-10 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Pending Donation Requests</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e1dff7] text-black py-10 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Approved Donation Requests</p>
                </div>

                <div class="w-auto text-center rounded-md bg-[#e1dff7] text-black py-10 cursor-pointer shadow-md shadow-gray-500/50">
                    <h2 class="">1000</h2>
                    <p class="">Rejected Donation Requests</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection