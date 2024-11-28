<x-layout>
    <x-slot:heading>Edit Job</x-slot:heading>
    <x-slot:page_title> Edit job {{ $job->title }} </x-slot:page_title>

    @php
        // var_dump($job);
        // die;
    @endphp

    {{-- body --}}
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Create Job Post</h1>
        <form action="/jobs/{{$job->id}}" method="POST">
            @csrf
            @method('PATCH')
            <!-- Job Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Job Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter job title"
                    value="{{$job->title}}">
            </div>
            <div>
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mb-2"> {{ $message }} </p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter job description" >{{ $job->description }}</textarea>
            </div>

            <!-- Job location -->
            <div class="mb-4">
                <label for="location" class="block text-gray-700 font-medium">Job location</label>
                <input type="text" id="location" name="location"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter job location" 
                    value="{{$job->location}}">
            </div>

            <!-- Salary -->
            <div class="mb-4">
                <label for="salary" class="block text-gray-700 font-medium">Salary</label>
                <input type="number" id="salary" name="salary"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter salary amount" 
                    value="{{$job->salary}}">
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <a  href="/jobs/{{$job->id}}"> Cancel </a>
                <button type="submit" class="text-blue-500 font-bold p-4"> Update </button>
                <button form="delete-form" class="text-red-500 font-bold p-4"> Delete </button>
            </div>
        </form>

        <form action="/jobs/{{$job->id}}" method="post" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>

</x-layout>
