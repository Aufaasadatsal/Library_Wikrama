@extends('layouts.template')

@section('content')
<div class="px-40 flex flex-1 justify-center py-5">
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
      <div class="flex flex-wrap justify-between gap-3 p-4">
        <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72">Downloads</p>
      </div>
      <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Panduan</h3>
      <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
        <div class="flex items-center gap-4">
          <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-14"
            style='background-image: url("https://cdn.usegalileo.ai/stability/ac67aaad-1087-4c16-9ec8-9caaeec2e456.png");'
          ></div>
          <div class="flex flex-col justify-center">
            <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Cara Meminjam Buku Di Perpustakaan Wikrama</p>
            <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Langkah-langkah Meminjam Buku Di Perpustakaan Wikrama</p>
          </div>
        </div>
        <div class="shrink-0">
          <div class="text-[#111418] flex size-7 items-center justify-center" data-icon="Download" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path
                d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
