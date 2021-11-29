<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register Car') }}
        </h2>
    </x-slot>

    <div>
            <a href="{{ route('cars.index') }}">Car List</a>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="g-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
        <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data" >
            @csrf


            <div class="w-1/3 my-2">
                <label for="image" class="text-gray-700 select-none font-medium">Car Image</label>
                <input type="file" name="image" id="image" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                @error('image')
                    <span class="my -2 text-red-400" >{{ $message }}</span>
                @enderror
            </div>

            <div class="w-1/3 my-2">
                <label for="brand" class="text-gray-700 select-none font-medium">Car Brand</label>
                <select id="brand" name="brand_id" value="{{ old('brand') }}" >
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
                @error('brand')
                    <span class="my -2 text-red-400" >{{ $message }}</span>
                @enderror
            </div>

            <div class="w-1/3 my-2">
                <label for="name" class="text-gray-700 select-none font-medium">Car Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                @error('name')
                    <span class="my -2 text-red-400" >{{ $message }}</span>
                @enderror
            </div>

            <div class="w-1/3 my-2">
                <label for="bulid" class="text-gray-700 select-none font-medium">Bulid Year</label>
                <input type="number" name="bulid" id="bulid" value="{{ old('bulid') }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                @error('bulid')
                    <span class="my -2 text-red-400" >{{ $message }}</span>
                @enderror
            </div>

            <div class="w-1/3 my-2">
                <label for="price" class="text-gray-700 select-none font-medium">Car Price</label>
                <input type="number" name="price" id="price" value="{{ old('price') }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                @error('price')
                    <span class="my -2 text-red-400" >{{ $message }}</span>
                @enderror
            </div>

            <div class="w-1/3 my-2">
                <label for="type" class="text-gray-700 select-none font-medium">Car Type</label>
                <input type="text" name="type" id="type" value="{{ old('type') }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                @error('type')
                    <span class="my -2 text-red-400" >{{ $message }}</span>
                @enderror
            </div>

            <div class="w-1/3 my-2">
                <label for="style" class="text-gray-700 select-none font-medium">Car Style</label>
                <input type="text" name="style" id="style" value="{{ old('style') }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                @error('style')
                    <span class="my -2 text-red-400" >{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="my-4 px-2 py-2 rounded shadow bg-blue-400" >Regist Car</button>

        </form>
     </div>
    </div>
</div>
</x-app-layout>