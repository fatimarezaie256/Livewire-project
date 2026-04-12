<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto md::py-10">
    <div class="md:col-span-1 flex flex-col justify-center">
        <h1 class="text-4xl md:text-6xl font-bold text-brand text-justify p-4">
            Frequently Asked Questions
        </h1>
        <p class="text-lg p-4">
            Things you got to know about!
        </p>
    </div>
    <div class="md:col-span-2 space-y-4">

        @foreach ($data as $index => $item)
            
            <div class="bg-white rounded-xl p-5">
                <div class="flex justify-between items-center cursor-pointer" >
                    <h2 class="text-lg md:text-xl font-semibold text-gray-800">
                        {{ $item[0] }}
                    </h2>
                   <i 
    wire:click="toggle({{ $index }})"
    class="fa-solid fa-chevron-down cursor-pointer text-gray-500 transition-transform duration-300
    {{ $openIndex === $index ? 'rotate-180 text-brand' : '' }}">
</i>
                </div>
                @if ($openIndex === $index)
                    <p class="mt-3 text-gray-600 leading-relaxed">
                        {{ $item[1] }}
                    </p>
                @endif

            </div>

        @endforeach

    </div>

</div>