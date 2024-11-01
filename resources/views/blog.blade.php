@extends('layouts.template')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-[#fbf9f8] group/design-root overflow-x-hidden" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
<!-- Search Bar -->
<div class="px-4 py-3">
    <form method="GET" action="{{ route('blog') }}">
      <label class="flex flex-col min-w-40 h-12 w-full">
        <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
          <div class="text-[#96684f] flex border-none bg-[#f3ebe8] items-center justify-center pl-4 rounded-l-lg border-r-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
            </svg>
          </div>
          <input
            type="text"
            name="search"
            placeholder="Search for blogs"
            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#1b130e] bg-[#f3ebe8] focus:outline-0 focus:ring-0 border-none h-full px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
            value="{{ request('search') }}">
        </div>
      </label>
    </form>
  </div>


        <!-- Blog Posts -->
        @if($blogs->isEmpty())
          <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center p-6 bg-gray-100 rounded-lg shadow-md">
              <h2 class="text-2xl font-bold text-gray-800">No blogs available.</h2>
              <p class="mt-2 text-gray-600">Check back later or add a new blog post.</p>
          </div>
        @else
          <h2 class="text-[#1b130e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Latest Blogs</h2>
          <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-4 p-4">
            @foreach ($blogs as $blog)
              <div class="flex flex-col gap-3 pb-3 bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <div class="w-full bg-center bg-cover h-60 rounded-t-lg" style="background-image: url('{{ asset('storage/' . $blog->image) }}');"></div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-[#201A09]">{{ $blog->judul }}</h3>
                  <p class="text-gray-600 mt-2">{{ Str::limit($blog->isi, 100) }}</p>
                  <a href="{{ route('show-blog', $blog->id) }}" class="inline-block mt-4 bg-[#A07D1C] text-white px-4 py-2 rounded-lg font-bold hover:bg-[#A07D1C]/80">Read More</a>
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
