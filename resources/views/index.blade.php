@extends('layouts.template')

@section('content')
    <div class="px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
                <div class="@[480px]:p-4">
                    <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-start justify-end px-4 pb-10 @[480px]:px-10" style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://cdn.usegalileo.ai/sdxl10/f86c42ec-7a1f-476f-a0c4-3e3591a3bd55.png");'>
                        <div class="flex flex-col gap-2 text-left">
                            <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">Selamat Datang Di Web Perpustakaan Wikrama</h1>
                            <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">Kami menyediakan berbagai macam buku dan materi lainnya untuk membantu siswa dan guru dalam penelitian dan kebutuhan membaca.</h2>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4 p-4">
                    @foreach($funfacts as $funfact)
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#d0dbe7]">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Siswa Teraktif</p>
                            <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">{{ $funfact->siswa_teraktif }}</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#d0dbe7]">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Rombel Teraktif</p>
                            <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">{{ $funfact->rombel_teraktif }}</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#d0dbe7]">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Rayon Teraktif</p>
                            <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">{{ $funfact->rayon_teraktif }}</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 border border-[#d0dbe7]">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Buku Terfavorit</p>
                            <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">{{ $funfact->buku_terfavorit }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        <footer class="px-10 py-3 border-t border-solid border-t-[#e7edf3]">
            <div class="flex justify-between items-center">
                <p class="text-sm text-[#0e141b]">© 2023 Perpustakaan Wikrama. All rights reserved.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="text-sm text-[#0e141b]">Privacy Policy</a>
                    <a href="#" class="text-sm text-[#0e141b]">Terms of Service</a>
                </div>
            </div>
        </footer>
    @endsection
