@extends('layouts.template')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-[#FBF8EF] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex p-4 @container">
          <div class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between @[520px]:items-center">
            <div class="flex gap-4">
              <div
                class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                style='background-image: url("https://cdn.usegalileo.ai/stability/c1f16476-b870-4ec2-8501-d660d507616a.png");'
              ></div>
              <div class="flex flex-col justify-center">
                <p class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em]">The Library</p>
                <p class="text-[#A07D1C] text-base font-normal leading-normal">
                  A public library in the heart of the city, offering a comprehensive collection of books and resources
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="pb-3">
          <div class="flex border-b border-[#EFE3C3] px-4 justify-between">
            <a class="nav-link flex flex-col items-center justify-center border-b-[3px] border-b-[#FAC638] text-[#201A09] pb-[13px] pt-4 flex-1 active" href="#history" data-target="history">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">History</p>
            </a>
            <a class="nav-link flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#vision-mission" data-target="vision-mission">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Vision &amp; Mission</p>
            </a>
            <a class="nav-link flex flex-col items-center justify-center border-b-[3px] border-b-transparent text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#structure" data-target="structure">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Organisational Structure</p>
            </a>
          </div>
        </div>
        <div id="history" class="content-section">
          <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">History</h2>
          <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
            Perpustakaan SMK Wikrama Bogor berada di Kampus SMK Wikrama Bogor Kelurahan Sindangsari, Kecamatan Bogor Timur, Kota Bogor didirikan pada tahun 1996. Secara fisik perpustakaan sekolah terletak di lantai 2 (dua) gedung Pajajaran yang merupakan gedung pertama yang dibangun, tepatnya berada di area bangunan seluas 96 m2. Lokasi ini berada di pusat kegiatan pembelajaran yang mudah dijangkau oleh peserta didik, pendidik dan tenaga kependidikan. Semenjak didirikan, keberadaan ruang perpustakaan SMK Wikrama Bogor memberikan manfaat bagi sivitas akademik sekolah bahkan masyarakat sekitar sekolah
          </p>
        </div>
        <div id="vision-mission" class="content-section hidden">
          <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Vision &amp; Mission</h2>
          @foreach ($visimisis as $visimisi)
          <div class="mb-6 px-4">
            <div class="mb-4">
              <p class="text-[#A07D1C] text-lg font-semibold leading-tight mb-1">Visi:</p>
              <p class="text-[#201A09] text-base font-normal leading-normal">{{ $visimisi->visi }}</p>
            </div>
            <div class="mb-4">
              <p class="text-[#A07D1C] text-lg font-semibold leading-tight mb-1">Misi:</p>
              <p class="text-[#201A09] text-base font-normal leading-normal">{{ $visimisi->misi }}</p>
            </div>
            <div>
              <p class="text-[#A07D1C] text-lg font-semibold leading-tight mb-1">Motto:</p>
              <p class="text-[#201A09] text-base font-normal leading-normal">{{ $visimisi->motto }}</p>
            </div>
          </div>
          @endforeach
        </div>
        <div id="structure" class="content-section hidden">
          <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Organisational Structure</h2>
          <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
            The library is managed by a dedicated team of professionals who ensure the smooth running of all operations and services
          </p>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const navLinks = document.querySelectorAll('.nav-link');
      const sections = document.querySelectorAll('.content-section');

      navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
          event.preventDefault();
          const targetId = this.getAttribute('data-target');

          // Remove active class from all links and reset border color
          navLinks.forEach(link => {
            link.classList.remove('active');
            link.classList.add('text-[#A07D1C]');
            link.classList.remove('text-[#201A09]');
            link.classList.add('border-b-transparent');
            link.classList.remove('border-b-[#FAC638]');
          });

          // Hide all sections
          sections.forEach(section => section.classList.add('hidden'));

          // Show the target section
          document.getElementById(targetId).classList.remove('hidden');

          // Add active class to the clicked link and set border color
          this.classList.add('active');
          this.classList.remove('text-[#A07D1C]');
          this.classList.add('text-[#201A09]');
          this.classList.remove('border-b-transparent');
          this.classList.add('border-b-[#FAC638]');
        });
      });
    });
  </script>
</div>
@endsection
