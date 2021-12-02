
@if (Route::has('login'))
@auth   
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars') }}
        </h2>
    </x-slot>
<div class="container flex flex-wrap content-start space-x-2" style="margin:  0 auto">
    @foreach ($cars as $car)
    <div id="whoobe-3fery" class="m-10 w-auto md:w-64 justify-center items-center bg-white shadow-lg rounded-lg flex flex-col" style="width: 400px; margin:0 auto; margin-top:20px ">
        <img src="{{ $car->image }}" alt="img" title="img" class="w-full h-auto object-cover rounded-t-lg" id="whoobe-ixxe5">
            <div id="whoobe-1okdg" class="w-full p-4 justify-start flex flex-col">
                <h4 class="border-b-2 text-3xl" id="whoobe-3mr7n">{{ $car->brand->name }}</h4>
                <p class="my-4" id="whoobe-950fw">{{ $car->name }}</p>
                <p class="my-4" id="whoobe-950fw">{{ $car->bulid }}</p>
                <a  
                class="my-4 px-4 py-2 text-white hover:bg-blue-700 bg-blue-500" 
                id="whoobe-jkkr2"
                href="{{ route('cars.show', ['car'=>$car->id]) }}">Read more</a>
            </div>
    </div>
    @endforeach
</div>
{{ $cars->links() }}
</x-app-layout>  
@else    
<x-guest-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ __('Cars') }}
        </div>
    </header>
</x-guest-layout>
<div class="container flex flex-wrap content-start space-x-2" style="margin:  0 auto">
    @foreach ($cars as $car)
    <div id="whoobe-3fery" class="m-10 w-auto md:w-64 justify-center items-center bg-white shadow-lg rounded-lg flex flex-col" style="width: 400px; margin:0 auto; margin-top:20px ">
        @if($car->image)
            <img src="{{$car->image}}" alt="img" title="img" class="w-full h-auto object-cover rounded-t-lg" id="whoobe-ixxe5">
        @endif   
            <div id="whoobe-1okdg" class="w-full p-4 justify-start flex flex-col">
                <h4 class="border-b-2 text-3xl" id="whoobe-3mr7n">{{ $car->brand->name }}</h4>
                <p class="my-4" id="whoobe-950fw">{{ $car->name }}</p>
                <p class="my-4" id="whoobe-950fw">{{ $car->bulid }}</p>
                <a  
                class="my-4 px-4 py-2 text-white hover:bg-blue-700 bg-blue-500" 
                id="whoobe-jkkr2"
                href="{{ route('cars.show', ['car'=>$car->id]) }}">Read more</a>
            </div>
    </div>
    @endforeach
</div>
    {{ $cars->links() }}
@endauth
@endif