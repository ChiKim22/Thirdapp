@if(Route::has('login'))
@auth
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car Info') }}
        </h2>
    </x-slot>

    {{-- <div>
            <a href="{{ route('cars.index') }}">Car List</a>
    </div> --}}

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="g-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <div class="w-1/3 my-2">
                <label for="image" class="text-gray-700 select-none font-medium">Car Image</label>
                <img src="{{ $car->image }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"/>
            </div>

            <div class="w-1/3 my-2">
                <label for="brand" class="text-gray-700 select-none font-medium">Car Brand</label>
                <br>
                <input value="{{ $car->brand->name }}" readonly >
            </div>

            <div class="w-1/3 my-2">
                <label for="name" class="text-gray-700 select-none font-medium">Car Name</label>
                <br>
                <input value="{{ $car->name }}" readonly >
            </div>

            <div class="w-1/3 my-2">
                <label for="bulid" class="text-gray-700 select-none font-medium">Bulid Year</label>
                <br>
                <input value="{{ $car->bulid }}" readonly >
            </div>

            <div class="w-1/3 my-2">
                <label for="price" class="text-gray-700 select-none font-medium">Car Price</label>
                <br>
                <input value="{{ $car->price }}" readonly >
            </div>

            <div class="w-1/3 my-2">
                <label for="type" class="text-gray-700 select-none font-medium">Car Type</label>
                <br>
                <input value="{{ $car->type }}" readonly >
            </div>

            <div class="w-1/3 my-2">
                <label for="style" class="text-gray-700 select-none font-medium">Car Style</label>
                <br>
                <input value="{{ $car->style }}" readonly >
            </div>

                <button class="my-4 px-4 py-2 bg-blue-400 rounded shadow text-white"> 
                    <a href="{{ route('cars.index') }}"> Car List </a>
                </button>

                <button class="my-4 px-4 py-2 bg-green-400 rounded shadow text-white">
                  <a href="{{ route('cars.edit', ['car' => $car->id ]) }}"> Edit Info </a>
                </button>
                <button class="my-4 px-4 py-2 bg-red-400 rounded shadow text-white">
                    <a href="{{ route('cars.destroy', ['car' => $car->id ]) }}"> Delete Car </a>
                </button>
     </div>
    </div>
</div>
</x-app-layout>
@else
<x-guest-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ __('Show') }}
        </div>
    </header>
</x-guest-layout>
{{-- <div>
    <a href="{{ route('cars.index') }}">Car List</a>
</div> --}}

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
<div class="g-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
    <div class="w-1/3 my-2">
        <label for="image" class="text-gray-700 select-none font-medium">Car Image</label>
        <img src="{{ $car->image}}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"/>
    </div>

    <div class="w-1/3 my-2">
        <label for="brand" class="text-gray-700 select-none font-medium">Car Brand</label>
        <br>
        <input value="{{ $car->brand->name }}" readonly >
    </div>

    <div class="w-1/3 my-2">
        <label for="name" class="text-gray-700 select-none font-medium">Car Name</label>
        <br>
        <input value="{{ $car->name }}" readonly >
    </div>

    <div class="w-1/3 my-2">
        <label for="bulid" class="text-gray-700 select-none font-medium">Bulid Year</label>
        <br>
        <input value="{{ $car->bulid }}" readonly >
    </div>

    <div class="w-1/3 my-2">
        <label for="price" class="text-gray-700 select-none font-medium">Car Price</label>
        <br>
        <input value="{{ $car->price }}" readonly >
    </div>

    <div class="w-1/3 my-2">
        <label for="type" class="text-gray-700 select-none font-medium">Car Type</label>
        <br>
        <input value="{{ $car->type }}" readonly >
    </div>

    <div class="w-1/3 my-2">
        <label for="style" class="text-gray-700 select-none font-medium">Car Style</label>
        <br>
        <input value="{{ $car->style }}" readonly >
    </div>

    <button class="my-4 px-4 py-2 bg-blue-400 rounded shadow text-white"> 
        <a href="{{ route('cars.index') }}"> Car List </a>
    </button>

</div>
</div>
</div>
@endauth
@endif