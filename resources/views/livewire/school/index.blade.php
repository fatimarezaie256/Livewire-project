<x-app-layout>
    <div class="flex gap-4">
    <livewire:dashboard.aside/>
    <div class="w-36 h-36 bg-white ">
        @foreach($schools as $school)
        <h1>{{$school->name}}</h1>
        @endforeach
    </div>
    </div>
</x-app-layout>