@extends('layouts.admin')
@section('title', 'Users')
@section('content')

<section class="bg-gray-50 min-h-screen relative top-14 md:top-[65px]">
    <div class="px-4 py-10 mx-auto">
        <div class="w-full mx-auto px-0 md:px-6 pt-5 pb-6 mt-4 mb-0 sm:mt-8 sm:mb-5 space-y-4 bg-transparent md:bg-white border-0 border-gray-300 rounded-lg md:border sm:w-10/12 md:w-10/12 lg:w-6/12 xl:w-4/12">
            <h1 class="mb-5 text-md sm:text-xl font-bold sm:text-center">Users</h1>

            <table class="table-auto w-full bg-transparent md:bg-white leading-normal mt-2 md:shadow-md md:shadow-gray-500/50 flex md:table">
                <thead class="text-sm">
                    <tr class="hidden bg-gray-100 md:table-row">
                        <th class="py-2" scope="col">Name</th>
                        <th class="py-2" scope="col">Address</th>
                        <th class="py-2" scope="col">Phone</th>
                        <th class="py-2" scope="col">Email</th>
                        <th class="py-2" scope="col">Password</th>
                        <th class="py-2" scope="col">Action</th>
                    </tr>
                </thead>

                <tbody class="flex-1">
                    <tr class="p-1 md:p-3 flex flex-col md:table-row w-full flex-wrap mt-2 md:mt-0 bg-[#ecebfc] md:bg-white shadow-md shadow-gray-500/50 md:shadow-none md:border-b md:border-b-gray-200">
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Name:</label>
                            <p class="md:text-center">Test Test</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Address:</label>
                            <p class="md:text-center">1 Test Street, WA</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Phone:</label>
                            <p class="md:text-center">0123456789</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Email:</label>
                            <p class="md:text-center">test@test.com</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Password:</label>
                            <p class="md:text-center">New Password</p>
                        </td>
                        <td class="p-1 md:p-3 flex items-center justify-between md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Action:</label>
                            <button id="crud-button">
                                <div class="h-4 w-4">
                                    <img src="{{ asset('images/options.svg') }}">
                                </div>
                            </button>
                        </td>

                        <div class="relative">
                            <div id="crud-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[190px] md:translate-y-[80px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                                <a href="{{ route('admin.edit-user') }}" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Edit</a>
                                <a onclick="togglemodal()" class="cursor-pointer w-full relative flex items-center font-medium text-sm text-red-500 justify-center py-1 rounded hover:bg-red-200">Delete</a>
                            </div>
                        </div>
                    </tr>

                    <tr class="p-1 md:p-3 flex flex-col md:table-row w-full flex-wrap mt-2 md:mt-0 bg-[#ecebfc] md:bg-white shadow-md shadow-gray-500/50 md:shadow-none md:border-b md:border-b-gray-200">
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Name:</label>
                            <p class="md:text-center">Test Test</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Address:</label>
                            <p class="md:text-center">1 Test Street, WA</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Phone:</label>
                            <p class="md:text-center">0123456789</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Email:</label>
                            <p class="md:text-center">test@test.com</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Password:</label>
                            <p class="md:text-center">New Password</p>
                        </td>
                        <td class="p-1 md:p-3 flex items-center justify-between md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Action:</label>
                            <button id="crud-button">
                                <div class="h-4 w-4">
                                    <img src="{{ asset('images/options.svg') }}">
                                </div>
                            </button>
                        </td>

                        <div class="relative">
                            <div id="crud-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[190px] md:translate-y-[80px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Edit</a>
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Delete</a>
                            </div>
                        </div>
                    </tr>

                    <tr class="p-1 md:p-3 flex flex-col md:table-row w-full flex-wrap mt-2 md:mt-0 bg-[#ecebfc] md:bg-white  shadow-md shadow-gray-500/50 md:shadow-none md:border-b md:border-b-gray-200">
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Name:</label>
                            <p class="md:text-center">Test Test</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Address:</label>
                            <p class="md:text-center">1 Test Street, WA</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Phone:</label>
                            <p class="md:text-center">0123456789</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Email:</label>
                            <p class="md:text-center">test@test.com</p>
                        </td>
                        <td class="p-1 md:p-3 text-sm flex items-center justify-between border-b border-b-gray-200 md:border-b-0 md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Password:</label>
                            <p class="md:text-center">New Password</p>
                        </td>
                        <td class="p-1 md:p-3 flex items-center justify-between md:table-cell">
                            <label class="text-xs text-gray-500 uppercase font-semibold md:hidden">Action:</label>
                            <button id="crud-button">
                                <div class="h-4 w-4">
                                    <img src="{{ asset('images/options.svg') }}">
                                </div>
                            </button>
                        </td>

                        <div class="relative">
                            <div id="crud-menu" class="absolute bg-white hidden flex-col rounded top-0 right-0 bottom-auto left-auto m-0 -translate-x-[20px] translate-y-[190px] md:translate-y-[80px] border-[1px] border-solid border-gray-200 w-24 p-2 z-10 ">
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Edit</a>
                                <a href="javascript:;" class="w-full relative flex items-center font-medium text-sm justify-center py-1 rounded hover:bg-[#e3f5e9]">Delete</a>
                            </div>
                        </div>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div id="modal" class="hidden absolute top-40 right-0 left-0 mx-auto bg-gray-100 border-0 md:border px-2 border-gray-300 rounded-md py-4 w-8/12 sm:w-3/12 shadow-md shadow-gray-500/50">
        <form class="space-y-2">
            <h1 class="text-center mb-2 text-red-500">Delete User!</h1>
            <p class="text-sm text-center">You're about to delete a User.</p>
            <div class="flex justify-between items-center">
                <p onclick="togglemodal()" class="block mx-auto rounded-md text-sm py-2 px-3 cursor-pointer hover:bg-gray-200 font-semibold">Cancel</p>
                <input class="block mx-auto rounded-md text-sm py-2 px-3 text-red-500 font-semibold cursor-pointer hover:bg-red-200" type="submit" name="" value="Delete">
            </div>
        </form>
    </div>
</section>

<script>
    const crudbutton = document.getElementById('crud-button');
    const crudmenu = document.getElementById('crud-menu');
        crudbutton.addEventListener('click', ()=>{
            crudmenu.classList.toggle('hidden');
        });

    function togglemodal() {
        const btn = document.getElementById('modal');
        btn.classList.toggle('hidden');
    }
</script>
@endsection
