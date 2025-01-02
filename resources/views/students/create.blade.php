
<x-app-layout>
<div class=" mt-16 bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6 ml-4">
        <div class="text-xl font-semibold text-gray-800 mb-4">Student</div>
        <div class="card-body">

            <form action="{{ route('students.store') }}" method="post" class="h-full flex flex-col justify-between">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
                    <input type="text" name="address" id="address" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" value="{{ old('address') }}">
                    @error('address')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="mobile" class="block text-gray-700 font-semibold mb-2">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" value="{{ old('mobile') }}">
                    @error('mobile')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-black text-white font-semibold py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 mt-4">Save</button>
            </form>

        </div>
    </div>
</div>


</x-app-layout>