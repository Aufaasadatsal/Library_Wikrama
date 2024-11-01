@extends('layouts.template')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-[#fbf9f8] group/design-root overflow-x-hidden" style='font-family: "Noto Serif", "Noto Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="px-4 py-3">
          <label class="flex flex-col min-w-40 h-12 w-full">
            <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
              <div class="text-[#96684f] flex border-none bg-[#f3ebe8] items-center justify-center pl-4 rounded-l-lg border-r-0">
                <!-- Search Icon -->
                <!-- SVG code remains the same -->
              </div>
              <input
                placeholder="Search for an eBook"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#1b130e] focus:outline-0 focus:ring-0 border-none bg-[#f3ebe8] focus:border-none h-full placeholder:text-[#96684f] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                value=""
              />
            </div>
          </label>
        </div>


        <!-- New Releases Section -->
        <h2 class="text-[#1b130e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Daftar Buku</h2>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
          @foreach($books as $book)
          <div class="flex flex-col gap-3 pb-3">
            <div
              class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg"
              style='background-image: url("{{ $book->gambar ? Storage::url($book->gambar) : asset('default-image.png') }}");'
            ></div>
            <div>
              <p class="text-[#1b130e] text-base font-medium leading-normal">{{ $book->judul }}</p>
              <p class="text-[#96684f] text-sm font-normal leading-normal">{{ $book->penulis }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

