<div class="max-w-xl mx-auto space-y-4">
    @foreach ($data as $index => $item)
        <div class="border p-4 rounded cursor-pointer">
            
            <!-- Question + Arrow -->
            <div class="flex justify-between items-center"
                 wire:click="toggle({{ $index }})">

                <h2>{{ $item[0] }}</h2>

              <span>
    <i class="fa-solid {{ $openIndex === $index ? 'fa-chevron-up' : 'fa-chevron-down' }}"></i>
</span>
            </div>

            <!-- Answer -->
            @if ($openIndex === $index)
                <p class="mt-2 text-gray-600">
                    {{ $item[1] }}
                </p>
            @endif

        </div>
    @endforeach
</div>