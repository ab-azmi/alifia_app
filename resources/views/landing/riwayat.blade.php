<x-guest-layout>
    <x-top-bar />
    {{-- <div class="w-full h-screen flex items-center justify-center">
        <div class="w-fit text-center">
            <img src="{{ asset('assets/images/empty.svg') }}" alt="">
            <h1 class="text-darkprimary mt-4 text-3xl font-black">
                Tidak ada riwayat
            </h1>
        </div>
    </div> --}}

    {{-- Title --}}
    <div class="w-fit m-auto text-center flex flex-col gap-4 my-10">
        <h1
            class="font-bold tracking-widest text-primary text-2xl before:content-['Riw'] before:bg-lightprimary before:pl-10 before:py-1">
            ayat Konseling Offline
        </h1>
        <h1 class="text-4xl font-bold text-display">Riwayat Pemesanan Layanan</h1>
    </div>

    {{-- Table --}}
    <table class="w-fit max-w-90 m-auto my-10 rounded-lg overflow-hidden">
        <thead class="bg-primary text-white">
            <tr>
                <th class="text-center px-16 py-4">Dokter</th>
                <th class="text-center px-16 py-4">Jenis Konseling</th>
                <th class="text-center px-16 py-4">Waktu</th>
                <th class="text-center px-16 py-4">Status</th>
                <th class="text-center px-16 py-4">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white shadow-lg">
            <tr>
                <td class="text-center px-16 py-4">Dr. John Doe</td>
                <td class="text-center px-16 py-4">Offline/Luring</td>
                <td class="text-center px-16 py-4">12 Jan 2021 - 13:00</td>
                <td class="text-center px-16 py-4">Sedang berlangsung</td>
                <td class="text-center px-16 py-4">
                    <a href="#" class="text-primary flex gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M13.5 3a8.5 8.5 0 0 1 0 17H13v.99A1.01 1.01 0 0 1 11.989 22c-2.46-.002-4.952-.823-6.843-2.504C3.238 17.798 2.002 15.275 2 12.009V11.5A8.5 8.5 0 0 1 10.5 3zm-5 7a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3m7 0a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3"/></g></svg>
                        Chat
                    </a>
                </td>
            </tr>
            <tr>
                <td class="text-center px-16 py-4">Dr. John Doe</td>
                <td class="text-center px-16 py-4">Offline/Luring</td>
                <td class="text-center px-16 py-4">12 Jan 2021 - 13:00</td>
                <td class="text-center px-16 py-4">Sedang berlangsung</td>
                <td class="text-center px-16 py-4">
                    <a href="#" class="text-primary flex gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M13.5 3a8.5 8.5 0 0 1 0 17H13v.99A1.01 1.01 0 0 1 11.989 22c-2.46-.002-4.952-.823-6.843-2.504C3.238 17.798 2.002 15.275 2 12.009V11.5A8.5 8.5 0 0 1 10.5 3zm-5 7a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3m7 0a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3"/></g></svg>
                        Chat
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    <x-footer />
</x-guest-layout>