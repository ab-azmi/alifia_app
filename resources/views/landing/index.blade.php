<x-guest-layout>
    {{-- Hero Section --}}
    <div class="flex lg:flex-row flex-col gap-8 lg:gap-4 px-4 lg:px-32 m-auto py-10 lg:py-24 justify-between">
        <div class="w-full flex flex-col gap-y-5 md:gap-y-10 items-center lg:items-start text-center lg:text-start">
            <h1 class="text-2xl md:text-4xl lg:text-5xl lg:leading-normal text-display font-black">
                Supporting Mental Health, Building Emotional Well-being
            </h1>
            <h4 class="text-base md:text-lg lg:text-xl lg:max-w-[90%] text-slate-500 font-medium">
                Selamat datang di pusat konseling mahasiswa UNNES! Kami hadir untuk mendukung kesejahteraan anda 
                dalam menemukan konselor berpengalaman dan ruang aman untuk berbicara.
            </h4>
            <a href="#" class="py-2 px-4 flex gap-x-3 items-center rounded-lg bg-gradient-to-r from-primary to-secondary text-white w-fit font-bold hover:bg-gradient-to-l transition-all">
                Konseling sekarang

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m12.2 13l-.9.9q-.275.275-.275.7t.275.7q.275.275.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275q-.275.275-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12q0 .425.288.713T9 13zm-.2 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20m0-8"/></svg>
            </a>
        </div>
        <div class="w-full md:flex hidden items-center justify-center">
            <img src="{{ asset('assets/images/amico.svg') }}" class="lg:w-[80%] w-[60%]"/>
        </div>
    </div>

    {{-- Sesi Aktif --}}
    <div class="mb-20 px-32 flex gap-10">
        <div class="max-w-md shadow-lg rounded-lg overflow-hidden">
            <div class="bg-primary py-3 px-4 text-center">
                <h1 class="text-white font-black text-xl">Konsultasi Berlangsung</h1>
            </div>
            <div class="flex bg-white px-6 py-6 gap-7">
                <div>
                    <img src="{{ asset('assets/images/girl.jpg') }}" alt="" srcset="" class="rounded-full w-32 h-32">
                </div>
                <div class="flex flex-col gap-3">
                    <h1 class="text-primary font-bold text-xl">Marshela M.Psi., Psikolog</h1>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M1 17.2q0-.85.438-1.562T2.6 14.55q1.55-.775 3.15-1.162T9 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T17 17.2v.8q0 .825-.587 1.413T15 20H3q-.825 0-1.412-.587T1 18zM18.45 20q.275-.45.413-.962T19 18v-1q0-1.1-.612-2.113T16.65 13.15q1.275.15 2.4.513t2.1.887q.9.5 1.375 1.112T23 17v1q0 .825-.587 1.413T21 20zM9 12q-1.65 0-2.825-1.175T5 8q0-1.65 1.175-2.825T9 4q1.65 0 2.825 1.175T13 8q0 1.65-1.175 2.825T9 12m10-4q0 1.65-1.175 2.825T15 12q-.275 0-.7-.062t-.7-.138q.675-.8 1.038-1.775T15 8q0-1.05-.362-2.025T13.6 4.2q.35-.125.7-.162T15 4q1.65 0 2.825 1.175T19 8"/></svg>
                        </div>
                        <h1 class="font-semibold text-slate-500">22 Sesi</h1>
                    </div>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M4 22q-.825 0-1.412-.587T2 20V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm6-16h4V4h-4zm1 9v2q0 .425.288.713T12 18q.425 0 .713-.288T13 17v-2h2q.425 0 .713-.288T16 14q0-.425-.288-.712T15 13h-2v-2q0-.425-.288-.712T12 10q-.425 0-.712.288T11 11v2H9q-.425 0-.712.288T8 14q0 .425.288.713T9 15z"/></svg>
                        </div>
                        <h1 class="font-semibold text-slate-500">2 Tahun Pengalaman</h1>
                    </div>
                    <a href="#" class="py-2 mt-2 justify-center w-full flex gap-x-3 items-center rounded-lg bg-gradient-to-r from-primary to-secondary text-white font-bold hover:bg-gradient-to-l transition-all">Kembali</a>
                </div>
            </div>
        </div>
        <div class="max-w-md shadow-lg rounded-lg overflow-hidden">
            <div class="bg-primary py-3 px-4 text-center">
                <h1 class="text-white font-black text-xl">Konsultasi Berlangsung</h1>
            </div>
            <div class="flex bg-white px-6 py-6 gap-7">
                <div>
                    <img src="{{ asset('assets/images/lady.jpg') }}" alt="" srcset="" class="rounded-full w-32 h-32 object-cover">
                </div>
                <div class="flex flex-col gap-3">
                    <h1 class="text-primary font-bold text-xl">Emmely M.Psi., Psikolog</h1>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M1 17.2q0-.85.438-1.562T2.6 14.55q1.55-.775 3.15-1.162T9 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T17 17.2v.8q0 .825-.587 1.413T15 20H3q-.825 0-1.412-.587T1 18zM18.45 20q.275-.45.413-.962T19 18v-1q0-1.1-.612-2.113T16.65 13.15q1.275.15 2.4.513t2.1.887q.9.5 1.375 1.112T23 17v1q0 .825-.587 1.413T21 20zM9 12q-1.65 0-2.825-1.175T5 8q0-1.65 1.175-2.825T9 4q1.65 0 2.825 1.175T13 8q0 1.65-1.175 2.825T9 12m10-4q0 1.65-1.175 2.825T15 12q-.275 0-.7-.062t-.7-.138q.675-.8 1.038-1.775T15 8q0-1.05-.362-2.025T13.6 4.2q.35-.125.7-.162T15 4q1.65 0 2.825 1.175T19 8"/></svg>
                        </div>
                        <h1 class="font-semibold text-slate-500">14 Sesi</h1>
                    </div>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M4 22q-.825 0-1.412-.587T2 20V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm6-16h4V4h-4zm1 9v2q0 .425.288.713T12 18q.425 0 .713-.288T13 17v-2h2q.425 0 .713-.288T16 14q0-.425-.288-.712T15 13h-2v-2q0-.425-.288-.712T12 10q-.425 0-.712.288T11 11v2H9q-.425 0-.712.288T8 14q0 .425.288.713T9 15z"/></svg>
                        </div>
                        <h1 class="font-semibold text-slate-500">1 Tahun Pengalaman</h1>
                    </div>
                    <a href="#" class="py-2 mt-2 justify-center w-full flex gap-x-3 items-center rounded-lg bg-gradient-to-r from-primary to-secondary text-white font-bold hover:bg-gradient-to-l transition-all">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Tentang Kami Section--}}
    <div class="bg-white w-full px-16 pt-20 pb-36 flex flex-col gap-y-20 relative">
        <div class="absolute top-1 left-0">
            <img src="{{ asset('assets/images/dotgrid.svg') }}" alt="" srcset="" class="w-32">
        </div>
        <div class="w-fit m-auto text-center flex flex-col gap-4">
            <h1 class="font-bold text-primary text-2xl before:content-['Ten'] before:bg-lightprimary before:pl-10 before:py-1">tang Kami</h1>
            <h1 class="text-4xl font-black text-display">Kemudahan Dalam Layanan Kami</h1>
        </div>
        <div class="flex gap-12">
            <div class="w-1/3 flex gap-5 items-center text-center flex-col">
                <div class="text-icongreen bg-white rounded-full shadow-lg w-fit outline outline-[1px] outline-icongreen/30 px-6 py-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M3 23q-.425 0-.712-.288T2 22q0-.425.288-.712T3 21h18q.425 0 .713.288T22 22q0 .425-.288.713T21 23zm2-3q-.425 0-.712-.288T4 19v-5q-.825-1.35-1.275-2.863t-.45-3.087q0-1.525.388-3t.912-2.9q.2-.525.65-.837t1-.313Q6 1 6.55 1.525T7 2.775L6.725 5.05q-.15 1.2.213 2.275t1.087 1.887q.725.813 1.75 1.3T12 11q1.5 0 3.013.313t2.637.887q1.125.575 1.738 1.463T20 15.85V19q0 .425-.288.713T19 20h-9v-.925q0-.85.575-1.463T12 17h3q.425 0 .713-.288T16 16q0-.425-.288-.712T15 15h-3q-1.675 0-2.838 1.2T8 19.075V20zm7-10q-1.65 0-2.825-1.175T8 6q0-1.65 1.175-2.825T12 2q1.65 0 2.825 1.175T16 6q0 1.65-1.175 2.825T12 10"/></svg>
                </div>
                <h2 class="text-primary text-2xl font-semibold">Aksesibilitas & Fleksibilitas</h2>
                <p class="text-slate-500 text-lg">Layanan online memberikan akses mahasiswa untuk mendapatkan kesejahteraan tanpa terbatas oleh lokasi dan waktu</p>
            </div>
            <div class="w-1/3 flex gap-5 items-center text-center flex-col">
                <div class="text-icongreen bg-white rounded-full shadow-lg w-fit outline outline-[1px] outline-icongreen/30 px-6 py-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V3q0-.425.288-.712T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.712T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zm7-6q-.425 0-.712-.288T11 13q0-.425.288-.712T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14m-4 0q-.425 0-.712-.288T7 13q0-.425.288-.712T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14m8 0q-.425 0-.712-.288T15 13q0-.425.288-.712T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14m-4 4q-.425 0-.712-.288T11 17q0-.425.288-.712T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18m-4 0q-.425 0-.712-.288T7 17q0-.425.288-.712T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18m8 0q-.425 0-.712-.288T15 17q0-.425.288-.712T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18"/></svg>
                </div>
                <h2 class="text-primary text-2xl font-semibold">Kemudahan Booking</h2>
                <p class="text-slate-500 text-lg">Layanan ini memungkinkan untuk melakukan booking jadwal dan memilih konselor
                    untuk melakukan konseling secara langsung
                </p>
            </div>
            <div class="w-1/3 flex gap-5 items-center text-center flex-col">
                <div class="text-icongreen bg-white rounded-full shadow-lg w-fit outline outline-[1px] outline-icongreen/30 px-6 py-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1q2.075 0 3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15q0-.825-.587-1.412T12 13q-.825 0-1.412.588T10 15q0 .825.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3q-1.25 0-2.125.875T9 6z"/></svg>
                </div>
                <h2 class="text-primary text-2xl font-semibold">Kenyamanan & Privasi</h2>
                <p class="text-slate-500 text-lg">Layanan ini berkomitmen untuk menjaga kerahasiaan dan privasi identitas mahasiswa
                    yang sedang menjalani sesi konseling
                </p>
            </div>
        </div>
        <div class="absolute -bottom-14 right-0">
            <img src="{{ asset('assets/images/dotgrid.svg') }}" alt="" srcset="" class="w-32">
        </div>
    </div>

    {{-- Layanan Konseling --}}
    <div class="py-20 px-16 flex flex-col gap-y-20">
        <div class="w-fit m-auto text-center flex flex-col gap-4">
            <h1 class="font-bold text-primary text-2xl before:content-['Laya'] before:bg-lightprimary before:pl-10 before:py-1">nan Konseling
            </h1>
            <h1 class="text-4xl font-black text-display">Layanan Utama Kami Untuk Anda</h1>
        </div>
        <div class="flex gap-10 justify-center">
            <div class="w-[35%] rounded-lg shadow-lg bg-white px-10 py-10 flex flex-col gap-7 items-center">
                <div>
                    <img src="{{ asset('assets/images/rafiki.svg') }}" alt="" srcset="">
                </div>
                <h1 class="text-primary font-bold text-3xl">Konseling Offline</h1>
                <div class="w-full flex justify-center">
                    <ul class="list-disc list-outside w-[90%] space-y-2">
                        <li>Terapi beragam sesuai kebutuhan anda</li>
                        <li>Lokasi konseling nyaman dan strategis</li>
                        <li>Booking jadwal dan pilih konselor dengan mudah sesuai preferensi anda</li>
                    </ul>
                </div>
                <a href="" class="py-2 px-4 mt-5 flex gap-x-3 items-center rounded-lg bg-gradient-to-r from-primary to-secondary text-white w-fit font-bold hover:bg-gradient-to-l transition-all">Konseling Offline</a>
            </div>
            <div class="w-[35%] rounded-lg shadow-lg bg-white px-10 py-10 flex flex-col gap-7 items-center">
                <div>
                    <img src="{{ asset('assets/images/bro.svg') }}" alt="" srcset="">
                </div>
                <h1 class="text-primary font-bold text-3xl">Konseling Online</h1>
                <div class="w-full flex justify-center">
                    <ul class="list-disc list-outside w-[90%] space-y-2">
                        <li>Konseling melalui chat atau call</li>
                        <li>Pilihan terapi yang beragam</li>
                        <li>Waktu konseling lebih fleksibel</li>
                        <li>Cocok bagi yang terkendala jarak dan waktu</li>
                    </ul>
                </div>
                <a href="" class="py-2 px-4 mt-5 flex gap-x-3 items-center rounded-lg bg-gradient-to-r from-primary to-secondary text-white w-fit font-bold hover:bg-gradient-to-l transition-all">Konseling Online</a>
            </div>
        </div>
    </div>

    {{-- Cari Psikolog --}}
</x-guest-layout>