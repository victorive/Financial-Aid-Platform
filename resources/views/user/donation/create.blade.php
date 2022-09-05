@extends('layouts.user')
@section('title', 'Ask for Donation')
@section('content')
<section class="bg-gray-50 relative top-14 md:top-[65px]">
  <div class="px-4 py-20 mx-auto">
    <div class="w-full px-0 pt-5 pb-6 mx-auto mt-4 mb-0 space-y-3 bg-transparent border-0 border-gray-300 rounded-lg md:px-6 sm:mt-8 sm:mb-5 md:bg-white md:border sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-5/12">
      <h1 class="mb-1 text-xl font-bold text-left text-gray-900 sm:text-center">Ask for donation</h1>
      <p class="mb-2 text-sm font-bold text-red-500 md:text-center">NB: All donation requests will be duly verified</p>
      <form action="{{ url('/askfordonation') }}" method="POST" class="pb-1 space-y-4" enctype="multipart/form-data">
        @csrf

        <label for="story" class="block">
            <span class="block mb-1 text-xs font-medium text-gray-700">*What are you seeking donation for? (Keep it short and concise)</span>
            <textarea id="" name="story" class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('story') border-red-500 @enderror" rows="5" placeholder="Tell us your story"></textarea>
        </label>
        @error('story')
            <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label for="amount" class="block">
          <span class="block mb-1 text-xs font-medium text-gray-700">*Amount Needed</span>
          <input name="amount" class="w-full bg-white border rounded block text-sm px-3 py-2 focus:border-[#24207F] @error('amount') border-red-500 @enderror" type="text" name="phone" placeholder="Amount Needed" value="{{ old('phone')}}">
        </label>
        @error('amount')
            <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
        @enderror

        <label for="image" class="block">
          <span class="block mb-1 text-xs font-medium text-gray-700">*Image (will serve as evidence to your claim)</span>
            <div id="image-preview" class="w-full mb-1 border border-dashed rounded h-40 flex items-center justify-center bg-center bg-no-repeat bg-cover @error('image') border-red-500 @enderror" ">
                <span class="text-xs">Upload image (supports .jpeg, .jpg and .png)</span>
            </div>
            @error('image')
                <span class="block mb-1 text-xs font-medium text-red-500">{{ $message }}</span>
            @enderror
            <input type="file" id="image-upload" name="image" class="w-full block text-xs text-slate-500 file:rounded file:border-0 file:py-1 file:px-1 file:bg-[#ddddff] file:text-[#24207f] file:font-semibold" accept="image/*" value="{{ old('image')}}">
        </label>

        <div class="flex items-center justify-center mx-auto text-center">
            <input type="submit" class="w-full sm:w-auto mt-5 bg-[#24207f] rounded-lg text-white text-sm text-center align-middle py-2 px-6 leading-relaxed sm:mt-0" value="Request">
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
