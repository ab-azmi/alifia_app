<div class="w-full overflow-hidden">
    <div class="border-b flex flex-col overflow-y-scroll grow h-full">
    
    {{-- Header --}}
    <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white border-b">
        <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">
            <a href="#" class="shrink-0 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13z" />
                </svg>
            </a>

            {{-- Avatar --}}
            <div class="shrink-0">
                <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
            </div>

            <h6 class="font-bold truncate">
                {{ fake()->name }}
            </h6>
        </div>
    </header>

    {{-- Body --}}
    <main
        class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overscroll-contain overflow-x-hidden w-full my-auto">
        <div @class([ 'max-w-[80%] md:max-w-[78%] flex w-auto gap-2 mt-2' , ])>
            {{-- Avatar --}}
            <div @class([ 'shrink-0' ])>
                <x-avatar />
            </div>

            {{-- Message Body --}}
            <div @class([ 'flex flex-wrap text-[15px] rounded-xl p-2.5 flex-col text-black bg-[#f6f6f8fb]'
                , 'rounded-bl-none border border-gray-200/40'=> false,
                'rounded-br-none bg-primary/80 text-white' => true,
                ])>
                <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, minus doloremque nesciunt iusto
                    nemo dolorum id accusamus nihil mollitia accusantium ipsum eveniet quo dicta, in modi eligendi
                    itaque, beatae blanditiis!
                </p>

                <div class="ml-auto flex gap-2">
                    <p @class([ 'text-xs' , 'text-gray-500'=> false,
                        'text-white' => true,
                        ])>
                        12:00 PM
                    </p>

                    {{-- Message Status, show if message belongs to auth --}}
                    <div>
                        {{-- double tick --}}
                        <span @class([ 'text-gray-500' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m6 17.3l-4.25-4.25q-.3-.3-.288-.7t.313-.7q.3-.275.7-.288t.7.288l3.55 3.55l1.4 1.4l-.725.7q-.3.275-.7.288T6 17.3m5.65 0L7.4 13.05q-.275-.275-.275-.687t.275-.713q.3-.3.713-.3t.712.3l3.525 3.525l8.5-8.5q.3-.3.7-.287t.7.312q.275.3.288.7t-.288.7l-9.2 9.2q-.3.3-.7.3t-.7-.3m.7-4.95l-1.425-1.4l4.25-4.25q.275-.275.688-.275t.712.275q.3.3.3.713t-.3.712z" />
                            </svg>
                        </span>

                        {{-- single tick --}}
                        {{-- <span @class([ 'text-gray-500' ])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m9.55 15.15l8.475-8.475q.3-.3.713-.3t.712.3q.3.3.3.713t-.3.712l-9.2 9.2q-.3.3-.7.3t-.7-.3L4.55 13q-.3-.3-.288-.712t.313-.713q.3-.3.713-.3t.712.3z" />
                            </svg>
                        </span> --}}
                    </div>

                </div>
            </div>
        </div>
    </main>

    {{-- Footer. Send Message --}}
    <footer class="shrink-0 z-10 bg-white inset-x-0">
        <div class="p-2 border-t">
            <form method="POST" autocapitalize="off">
                @csrf

                <input type="hidden" autocomplete="false" style="display: none">

                <div class="grid grid-cols-12">
                    <input type="text" autocomplete="off" autofocus placeholder="Write your message" maxlength="1700"
                        class="col-span-10 bg-gray-100 border-0 outline-0 focus:border-0 focus:ring-0 hover:ring-0 rounded-lg focus:outline-none">
                    <button type="submit" class="col-span-2">
                        Send
                    </button>
                </div>
            </form>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
    </footer>
</div>    

</div>