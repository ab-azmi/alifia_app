<x-guest-layout>
    <x-top-bar />
    <div class="w-fit m-auto text-center flex flex-col gap-4 my-10">
        <h1
            class="font-bold tracking-widest text-primary text-2xl before:content-['Boo'] before:bg-lightprimary before:pl-10 before:py-1">
            king Psikolog
        </h1>
        <h1 class="text-4xl font-bold text-display">Lakukan Pemesanan Layanan</h1>
    </div>

    <div class="flex px-20 my-20">
        <div class="w-1/2 text-center">
            <h1 class="text-2xl font-bold mb-10">Detail Psikolog</h1>
            <div class="md:w-fit m-auto rounded-xl shadow-lg bg-white px-10 py-10 flex flex-col gap-7 items-center">
                <div>
                    <img src="{{ asset('assets/images/girl1.jpg') }}" alt="" srcset=""
                        class="rounded-full w-44 h-44 object-cover">
                </div>
                <div class="flex flex-col gap-5 w-full text-center px-6">
                    <h1 class="text-primary font-bold text-2xl">Lusiana M.Psi., Psikolog</h1>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M1 17.2q0-.85.438-1.562T2.6 14.55q1.55-.775 3.15-1.162T9 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T17 17.2v.8q0 .825-.587 1.413T15 20H3q-.825 0-1.412-.587T1 18zM18.45 20q.275-.45.413-.962T19 18v-1q0-1.1-.612-2.113T16.65 13.15q1.275.15 2.4.513t2.1.887q.9.5 1.375 1.112T23 17v1q0 .825-.587 1.413T21 20zM9 12q-1.65 0-2.825-1.175T5 8q0-1.65 1.175-2.825T9 4q1.65 0 2.825 1.175T13 8q0 1.65-1.175 2.825T9 12m10-4q0 1.65-1.175 2.825T15 12q-.275 0-.7-.062t-.7-.138q.675-.8 1.038-1.775T15 8q0-1.05-.362-2.025T13.6 4.2q.35-.125.7-.162T15 4q1.65 0 2.825 1.175T19 8" />
                            </svg>
                        </div>
                        <h1 class="font-semibold text-slate-500 text-lg">14 Sesi</h1>
                    </div>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4 22q-.825 0-1.412-.587T2 20V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm6-16h4V4h-4zm1 9v2q0 .425.288.713T12 18q.425 0 .713-.288T13 17v-2h2q.425 0 .713-.288T16 14q0-.425-.288-.712T15 13h-2v-2q0-.425-.288-.712T12 10q-.425 0-.712.288T11 11v2H9q-.425 0-.712.288T8 14q0 .425.288.713T9 15z" />
                            </svg>
                        </div>
                        <h1 class="font-semibold text-slate-500 text-lg">1 Tahun Pengalaman</h1>
                    </div>

                </div>

            </div>
        </div>
        <div class="w-1/2 text-center">
            <h1 class="text-2xl font-bold mb-10">Informasi Pemesanan</h1>
            <form action="/book-test" class="w-full m-auto flex flex-col gap-y-4" method="POST">
                @csrf
                {{-- Nama --}}
                <div class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                    <input type="text" placeholder="Nama" name="nama" id=""
                        class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                </div>
                {{-- Nomor Handphone --}}
                <div class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                    <input type="text" placeholder="Nomor handphone" name="no_hp" id=""
                        class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                </div>
                {{-- Kelamin --}}
                <div>
                    <div class="relative mt-2" x-data="{isOpen: false, selected: {
                        id: 99,
                        name: 'Pilih Kelamin',
                    
                    }, data: [
                        {id: 1, name: 'Laki-laki'},
                        {id: 2, name: 'Perampuan'},
                    ]}">
                        <input type="text" class="invisible absolute" x-bind:value="selected.name" name="kelamin">
                        <button type="button" @click.prevent="isOpen = !isOpen"
                            class="relative w-full cursor-default rounded-xl bg-white py-4 pl-3 pr-10 text-left text-gray-900 border border-primary"
                            aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <span class="flex items-center">
                                <span class="ml-3 block truncate" x-text="selected.name"></span>
                            </span>
                            <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                        <ul x-show="isOpen" x-transition:enter="transition ease-in duration-100"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                            tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                            aria-activedescendant="listbox-option-3">
                            <template x-for="(item, i) in data" :key="i">
                                <li x-on:click="selected = item, isOpen = false"
                                    x-bind:class="selected.id === item.id ? 'bg-indigo-600 text-white' : 'text-gray-900'"
                                    class="hover:bg-indigo-600 hover:text-white relative cursor-default select-none py-2 pl-3 pr-9">

                                    <div class="flex items-center">
                                        <span class="font-normal ml-3 block truncate">
                                            <span x-text="item.name"></span>
                                        </span>
                                    </div>
                                    <span class="text-white absolute inset-y-0 right-0 flex items-center pr-4">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
                {{-- Alamat --}}
                <div class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                    <textarea name="alamat" id=""
                        class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">Alamat    
                    </textarea>
                </div>
                {{-- Jenis Konseling --}}
                <div x-data="{isOpen: false, selected: {
                        id: 99,
                        name: 'Jenis Konseling',
                    
                    }, data: [
                        {id: 1, name: 'Online/Daring'},
                        {id: 2, name: 'Offline/Luring'},
                    ]}" class="flex flex-col gap-y-4">
                    <div class="relative mt-2">
                        <input type="text" class="invisible absolute" x-bind:value="selected.name" name="jenis_konseling">
                        <button type="button" @click.prevent="isOpen = !isOpen"
                            class="relative w-full cursor-default rounded-xl bg-white py-4 pl-3 pr-10 text-left text-gray-900 border border-primary"
                            aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <span class="flex items-center">
                                <span class="ml-3 block truncate" x-text="selected.name"></span>
                            </span>
                            <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                        <ul x-show="isOpen" x-transition:enter="transition ease-in duration-100"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                            tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                            aria-activedescendant="listbox-option-3">
                            <template x-for="(item, i) in data" :key="i">
                                <li x-on:click="selected = item, isOpen = false"
                                    x-bind:class="selected.id === item.id ? 'bg-indigo-600 text-white' : 'text-gray-900'"
                                    class="hover:bg-indigo-600 hover:text-white relative cursor-default select-none py-2 pl-3 pr-9">

                                    <div class="flex items-center">
                                        <span class="font-normal ml-3 block truncate">
                                            <span x-text="item.name"></span>
                                        </span>
                                    </div>
                                    <span class="text-white absolute inset-y-0 right-0 flex items-center pr-4">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </li>
                            </template>
                        </ul>
                    </div>

                    <div class="flex gap-x-3 w-full pl-5" x-show="selected.id === 2">
                        <div class="w-[10%] text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M13.3 20.275q-.3-.3-.3-.7t.3-.7L16.175 16H7q-.825 0-1.412-.587T5 14V5q0-.425.288-.712T6 4q.425 0 .713.288T7 5v9h9.175l-2.9-2.9q-.3-.3-.288-.7t.288-.7q.3-.3.7-.312t.7.287L19.3 14.3q.15.15.212.325t.063.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.3t-.713-.3" />
                            </svg>
                        </div>
                        {{-- Tanggal --}}
                        <div
                            class="border border-primary relative rounded-xl overflow-hidden w-full ml-auto py-2 px-4 bg-white">
                            <input type="date" placeholder="Tanggal" name="tanggal" id=""
                                class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                        </div>
                    </div>
                    <div class="flex gap-x-3 w-full pl-5" x-show="selected.id === 2">
                        <div class="w-[10%] text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M13.3 20.275q-.3-.3-.3-.7t.3-.7L16.175 16H7q-.825 0-1.412-.587T5 14V5q0-.425.288-.712T6 4q.425 0 .713.288T7 5v9h9.175l-2.9-2.9q-.3-.3-.288-.7t.288-.7q.3-.3.7-.312t.7.287L19.3 14.3q.15.15.212.325t.063.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.3t-.713-.3" />
                            </svg>
                        </div>
                        {{-- Jam --}}
                        <div x-show="selected.id === 2"
                            class="border border-primary relative rounded-xl overflow-hidden w-full ml-auto py-2 px-4 bg-white">
                            <input type="time" placeholder="Jam" name="jam" id=""
                                class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                        </div>
                    </div>

                </div>

                {{-- Deskripsi Masalah --}}
                <div class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                    <textarea name="deskripsi" id="" cols="30" rows="10"
                        class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">Deskripsi Masalah    
                    </textarea>
                </div>
                {{-- Button --}}
                <button type="submit"
                    class="py-3 w-[30%] mt-2 justify-center ml-auto flex gap-x-3 items-center rounded-lg bg-icongreen text-white font-bold hover:bg-gradient-to-l transition-all">
                    Save
                </button>
            </form>
        </div>
    </div>
    <x-footer />
</x-guest-layout>