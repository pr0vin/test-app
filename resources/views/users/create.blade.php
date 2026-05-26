<x-app-layout>
    <h2 class="text-2xl font-bold">Mr./Mrs {{ $user->name }}</h2>



    <div class="mt-5">
        <form method="POST" action="{{ route('users.store') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Phone Number
                    </label>

                    <input type="text" name="phone" value="{{ old('phone') }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200"
                        placeholder="Enter phone number">

                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gender -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Gender
                    </label>

                    <select name="gender"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>

                    @error('gender')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Date of Birth -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Date of Birth
                    </label>

                    <input type="date" name="dob" value="{{ old('dob') }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                    @error('dob')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Profile Image
                    </label>

                    <input type="file" name="image"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">

                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <!-- Address -->
            <div class="mt-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Address
                </label>

                <textarea name="address" rows="4"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200" placeholder="Enter address">{{ old('address') }}</textarea>

                @error('address')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">
                    Save User
                </button>
            </div>
        </form>
    </div>



</x-app-layout>
