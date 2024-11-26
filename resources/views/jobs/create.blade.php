<x-layout>
    <x-slot:heading>Create Job</x-slot:heading>
    <x-slot:page_title> Create new job </x-slot:page_title>

    {{-- body --}}
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create Job Post</h1>
        <form action="/jobs" method="POST">
            @csrf
            <!-- Job Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Job Title</label>
                <input type="text" id="title" name="title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter job title" required>
            </div>
            <div>
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mb-2"> {{ $message }} </p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter job description" required></textarea>
            </div>

            <!-- Job location -->
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-medium">Job location</label>
                <input type="text" id="location" name="location"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter job location" required>
            </div>

            <!-- Salary -->
            <div class="mb-4">
                <label for="salary" class="block text-gray-700 font-medium">Salary</label>
                <input type="number" id="salary" name="salary"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter salary amount" required>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Create Job Post
                </button>
            </div>
        </form>
    </div>

</x-layout>
