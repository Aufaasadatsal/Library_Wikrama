@extends('layouts.template')

@section('content')
<div class="relative flex size-full min-h-screen flex-col bg-[#FBF8EF] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex p-4 @container">
          <div class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between @[520px]:items-center">
            <div class="flex gap-4">
              <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32"
                   style='background-image: url("https://cdn.usegalileo.ai/stability/c1f16476-b870-4ec2-8501-d660d507616a.png");'>
              </div>
              <div class="flex flex-col justify-center">
                <p class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em]">Perpustakaan Wikrama</p>
              </div>
            </div>
          </div>
        </div>

        <div class="pb-3">
          <div class="flex border-b border-[#EFE3C3] px-4 justify-between">
            <a id="sejarahTab" class="tab-link flex flex-col items-center justify-center border-b-[3px] border-b-[#FAC638] text-[#201A09] pb-[13px] pt-4 flex-1" href="#">
              <p class="text-[#201A09] text-sm font-bold leading-normal tracking-[0.015em]">Sejarah</p>
            </a>
            <a id="visiTab" class="tab-link flex flex-col items-center justify-center border-b-[3px] border-b-[#FAC638] text-[#201A09] pb-[13px] pt-4 flex-1" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Visi, Misi &amp; Motto</p>
            </a>
            <a id="strukturTab" class="tab-link flex flex-col items-center justify-center border-b-[3px] border-b-[#FAC638] text-[#A07D1C] pb-[13px] pt-4 flex-1" href="#">
              <p class="text-[#A07D1C] text-sm font-bold leading-normal tracking-[0.015em]">Struktur Organisasi</p>
            </a>
          </div>
        </div>

        <!-- Section Content -->
        <div id="sejarahContent" class="section-content px-4 pb-3 pt-5">
          <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em]">Sejarah</h2>
          <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1">
            Perpustakaan SMK Wikrama Bogor berada di Kampus SMK Wikrama Bogor Kelurahan Sindangsari, Kecamatan Bogor Timur, Kota Bogor  didirikan pada tahun 1996.
            Secara fisik perpustakaan sekolah terletak di lantai 2 (dua) gedung Pajajaran yang merupakan gedung pertama yang dibangun, tepatnya berada di area bangunan seluas 96 m2.
            Lokasi ini berada di pusat kegiatan pembelajaran yang mudah dijangkau oleh peserta didik, pendidik dan tenaga kependidikan. Semenjak didirikan, keberadaan ruang perpustakaan SMK Wikrama Bogor memberikan manfaat bagi sivitas akademik sekolah bahkan masyarakat sekitar sekolah.
          </p>
        </div>

        <div id="visiContent" class="section-content hidden px-4 pb-3 pt-5">
          <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em]">Visi, Misi &amp; Motto</h2>
          @foreach ($visimisis as $visimisi)
          <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
            Visi: {{ $visimisi->visi }}<br>
          </p>
        <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
            Misi:
            <ol>
                @foreach (explode(',', $visimisi->misi) as $misiItem)
                    <li>{{ $misiItem }}</li>
                @endforeach
            </ol>
        </p>
          <p class="text-[#201A09] text-base font-normal leading-normal pb-3 pt-1 px-4">
            Motto: {{ $visimisi->motto }}<br>
          </p>
          @endforeach
        </div>

        <div id="strukturContent" class="section-content hidden px-4 pb-3 pt-5">
          <h2 class="text-[#201A09] text-[22px] font-bold leading-tight tracking-[-0.015em]">Struktur Organisasi</h2>
          <img src="{{ asset('images/image.png') }}" alt="Struktur Organisasi" class="w-full h-auto">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tambahkan JavaScript untuk mengatur tampilan konten -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab-link");
    const sections = document.querySelectorAll(".section-content");

    tabs.forEach((tab, index) => {
      tab.addEventListener("click", (event) => {
        event.preventDefault();

        // Hapus kelas aktif dari semua tab dan tambahkan ke tab yang diklik
        tabs.forEach((t) => t.classList.remove("border-b-[#FAC638]", "text-[#201A09]"));
        tab.classList.add("border-b-[#FAC638]", "text-[#201A09]");

        // Sembunyikan semua konten dan tampilkan konten yang sesuai dengan tab yang diklik
        sections.forEach((section) => section.classList.add("hidden"));
        sections[index].classList.remove("hidden");
      });
    });
  });
</script>
@endsection
