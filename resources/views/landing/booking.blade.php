<x-guest-layout>

    <div class="w-fit m-auto text-center flex flex-col gap-4 my-10">
        <h1
            class="font-bold tracking-widest text-primary text-2xl before:content-['Boo'] before:bg-lightprimary before:pl-10 before:py-1">
            king Psikolog
        </h1>
        <h1 class="text-4xl font-bold text-display">Lakukan Pemesanan Layanan</h1>
    </div>

    <div class="flex px-4 md:px-20 gap-10 lg:gap-0 my-20 lg:flex-row flex-col">
        <div class="w-full lg:w-1/2 text-center">
            <h1 class="text-2xl font-bold mb-10">Detail Psikolog</h1>
            <div class="md:w-[70%] m-auto rounded-xl shadow-lg bg-white px-10 py-10 flex flex-col gap-7 items-center">
                <div class="relative">
                    <img src="{{ asset('assets/images/psikolog') }}/{{ $psikolog->photo }}" alt="" srcset=""
                        class="rounded-full w-44 h-44 object-cover">
                    <div
                        class="px-2 py-1 w-fit rounded-lg bg-icongreen absolute bottom-0 left-1/2 transform -translate-x-1/2">
                        <h1 class="font-semibold text-white text-sm text-nowrap">{{
                            \Carbon\Carbon::parse($psikolog->start)->format('H:i') }} - {{
                            \Carbon\Carbon::parse($psikolog->end)->format('H:i') }}</h1>
                    </div>
                </div>
                <div class="flex flex-col gap-5 w-full text-center px-6">
                    <h1 class="text-primary font-bold text-2xl">{{ $psikolog->name }} {{ $psikolog->degree }}, Psikolog
                    </h1>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M1 17.2q0-.85.438-1.562T2.6 14.55q1.55-.775 3.15-1.162T9 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T17 17.2v.8q0 .825-.587 1.413T15 20H3q-.825 0-1.412-.587T1 18zM18.45 20q.275-.45.413-.962T19 18v-1q0-1.1-.612-2.113T16.65 13.15q1.275.15 2.4.513t2.1.887q.9.5 1.375 1.112T23 17v1q0 .825-.587 1.413T21 20zM9 12q-1.65 0-2.825-1.175T5 8q0-1.65 1.175-2.825T9 4q1.65 0 2.825 1.175T13 8q0 1.65-1.175 2.825T9 12m10-4q0 1.65-1.175 2.825T15 12q-.275 0-.7-.062t-.7-.138q.675-.8 1.038-1.775T15 8q0-1.05-.362-2.025T13.6 4.2q.35-.125.7-.162T15 4q1.65 0 2.825 1.175T19 8" />
                            </svg>
                        </div>
                        <h1 class="font-semibold text-slate-500 text-lg">{{ $psikolog->session }} Sesi</h1>
                    </div>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4 22q-.825 0-1.412-.587T2 20V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v12q0 .825-.587 1.413T20 22zm6-16h4V4h-4zm1 9v2q0 .425.288.713T12 18q.425 0 .713-.288T13 17v-2h2q.425 0 .713-.288T16 14q0-.425-.288-.712T15 13h-2v-2q0-.425-.288-.712T12 10q-.425 0-.712.288T11 11v2H9q-.425 0-.712.288T8 14q0 .425.288.713T9 15z" />
                            </svg>
                        </div>
                        <h1 class="font-semibold text-slate-500 text-lg text-start">{{ $psikolog->experience }} Tahun Pengalaman
                        </h1>
                    </div>
                    <div class="flex gap-3">
                        <div class="text-icongreen">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M16 3a1 1 0 0 1 1 1v1h2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2V4a1 1 0 0 1 2 0v1h6V4a1 1 0 0 1 1-1M8 7H5v2h14V7h-3zm-3 4v8h14v-8zm2 2a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1m1 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2zm3-2a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H12a1 1 0 0 1-1-1m1 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2zm3-2a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H16a1 1 0 0 1-1-1m1 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2z" />
                                </g>
                            </svg>
                        </div>
                        <div class="text-start text-wrap">
                            <h1 class="font-semibold text-slate-500 text-lg">{{ $psikolog->workdays }}</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full lg:w-1/2 text-center">
            <h1 class="text-2xl font-bold mb-10">Informasi Pemesanan</h1>
            <form action="{{ route('booking-store' , ['id' => $psikolog->id]) }}"
                class="w-full m-auto flex flex-col gap-y-4" method="POST">
                @csrf
                {{-- hidden input to validate id --}}
                <input type="hidden" name="psikolog_id" value="{{ $psikolog->id }}">

                {{-- Nama --}}
                <div>
                    <div
                        class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                        <input type="text" placeholder="Nama" name="name" id="" value="{{ Auth::user()->name ?? '' }}"
                            class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                    </div>
                    @error('name')
                    <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Nomor Handphone --}}
                <div>
                    <div
                        class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                        <input type="text" placeholder="Nomor handphone" name="phone" id="" value="{{ old('phone') }}"
                            class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                    </div>
                    @error('phone')
                    <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Kelamin --}}
                <div>
                    <div class="relative mt-2" x-data="{isOpen: false, selected_id: {{ old('gender') ?? 'null' }}, data: [
                        {id: 1, name: 'Laki-laki'},
                        {id: 2, name: 'Perempuan'},
                    ], getData(id){
                        return this.data.find(item => item.id === id)
                    }}">
                        <input type="text" class="invisible absolute" x-bind:value="selected_id" name="gender">
                        <button type="button" @click.prevent="isOpen = !isOpen"
                            class="relative w-full cursor-default rounded-xl bg-white py-4 pl-3 pr-10 text-left text-gray-900 border border-primary"
                            aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <span class="flex items-center">
                                <span x-show="selected_id != null" class="ml-3 block truncate"
                                    x-text="getData(selected_id).name"></span>
                                <span x-show="selected_id == null" class="ml-3 block truncate text-slate-500">
                                    Pilih Kelamin
                                </span>
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
                                <li x-on:click="selected_id = item.id, isOpen = false"
                                    x-bind:class="selected_id === item.id ? 'bg-indigo-600 text-white' : 'text-gray-900'"
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
                    @error('gender')
                    <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Alamat --}}
                <div class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                    <textarea name="address" id="" class="outline-none border-none w-full h-full focus:outline-none focus:ring-0" placeholder="Alamat"></textarea>
                    @error('address')
                    <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Jenis Konseling --}}
                <div>
                    <div x-data="{isOpen: false, selected_id: {{ old('category') ?? 'null' }}, data: [
                        {id: 1, name: 'Online/Daring'},
                        {id: 2, name: 'Offline/Luring'},
                    ], getData(id){
                        return this.data.find(item => item.id === id)
                    }}" class="flex flex-col gap-y-4">
                        <div class="relative mt-2">
                            <input type="text" class="invisible absolute" x-bind:value="selected_id" name="category">
                            <button type="button" @click.prevent="isOpen = !isOpen"
                                class="relative w-full cursor-default rounded-xl bg-white py-4 pl-3 pr-10 text-left text-gray-900 border border-primary"
                                aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                <span class="flex items-center">
                                    <span x-show="selected_id != null" class="ml-3 block truncate"
                                        x-text="getData(selected_id).name"></span>
                                    <span x-show="selected_id == null" class="ml-3 block truncate text-slate-500">
                                        Pilih Kategori
                                    </span>
                                </span>
                                <span
                                    class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
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
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                aria-activedescendant="listbox-option-3">
                                <template x-for="(item, i) in data" :key="i">
                                    <li x-on:click="selected_id = item.id, isOpen = false"
                                        x-bind:class="selected_id === item.id ? 'bg-indigo-600 text-white' : 'text-gray-900'"
                                        class="hover:bg-indigo-600 hover:text-white relative cursor-default select-none py-2 pl-3 pr-9">

                                        <div class="flex items-center">
                                            <span class="font-normal ml-3 block truncate">
                                                <span x-text="item.name"></span>
                                            </span>
                                        </div>
                                        <span class="text-white absolute inset-y-0 right-0 flex items-center pr-4">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <div class="flex gap-x-3 w-full pl-5" x-show="selected_id === 2">
                            <div class="w-[10%] text-icongreen">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M13.3 20.275q-.3-.3-.3-.7t.3-.7L16.175 16H7q-.825 0-1.412-.587T5 14V5q0-.425.288-.712T6 4q.425 0 .713.288T7 5v9h9.175l-2.9-2.9q-.3-.3-.288-.7t.288-.7q.3-.3.7-.312t.7.287L19.3 14.3q.15.15.212.325t.063.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.3t-.713-.3" />
                                </svg>
                            </div>
                            {{-- Tanggal --}}
                            <div>
                                <div
                                    class="border border-primary relative rounded-xl overflow-hidden w-full ml-auto py-2 px-4 bg-white">
                                    <input type="date" placeholder="Tanggal" name="date" id="" value="{{ old('date') }}"
                                        class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                                </div>
                                @error('date')
                                <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex gap-x-3 w-full pl-5" x-show="selected_id === 2">
                            <div class="w-[10%] text-icongreen">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M13.3 20.275q-.3-.3-.3-.7t.3-.7L16.175 16H7q-.825 0-1.412-.587T5 14V5q0-.425.288-.712T6 4q.425 0 .713.288T7 5v9h9.175l-2.9-2.9q-.3-.3-.288-.7t.288-.7q.3-.3.7-.312t.7.287L19.3 14.3q.15.15.212.325t.063.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.3t-.713-.3" />
                                </svg>
                            </div>
                            {{-- Jam --}}
                            <div>
                                <div
                                    class="border border-primary relative rounded-xl overflow-hidden w-full ml-auto py-2 px-4 bg-white">
                                    <input type="time" placeholder="Jam" name="time" id="" value="{{ old('time') }}"
                                        class="outline-none border-none w-full h-full focus:outline-none focus:ring-0">
                                </div>
                                @error('time')
                                <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    @error('category')
                    <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Deskripsi Masalah --}}
                <div>
                    <div
                        class="border border-primary relative rounded-xl overflow-hidden w-full m-auto py-2 px-4 bg-white">
                        <textarea name="description" id="" cols="30" rows="10" class="outline-none border-none w-full h-full focus:outline-none focus:ring-0" placeholder="Deskripsi Masalah"></textarea>
                    </div>
                    @error('description')
                    <p class="text-red-500 text-sm text-start mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Button --}}
                <button type="submit"
                    class="py-3 w-[30%] mt-2 justify-center ml-auto flex gap-x-3 items-center rounded-lg bg-icongreen text-white font-bold hover:bg-gradient-to-l transition-all">
                    Save
                </button>
            </form>
        </div>
    </div>

</x-guest-layout>