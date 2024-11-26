<x-layout>
    <x-slot:heading> Job Details </x-slot:heading>
    <x-slot:page_title> {{ $job->title }} </x-slot:page_title>

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left Column (Job Description) -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Job Description</h2>
                <p class="text-gray-700 mb-4"> {{$job->description}} </p>
            </div>

            <!-- Right Column (Job Details) -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Job Details</h2>
                <table class="w-full table-auto border-collapse">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b font-semibold text-gray-800">Job Title:</td>
                            <td class="px-4 py-2 border-b text-gray-700">{{$job->title}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b font-semibold text-gray-800">Organization:</td>
                            <td class="px-4 py-2 border-b text-gray-700">{{$job->employer->name}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b font-semibold text-gray-800">Location:</td>
                            <td class="px-4 py-2 border-b text-gray-700">{{$job->location}}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b font-semibold text-gray-800">Salary:</td>
                            <td class="px-4 py-2 border-b text-gray-700">{{$job->salary}} BDT</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b font-semibold text-gray-800">Employment Type:</td>
                            <td class="px-4 py-2 border-b text-gray-700">Full-Time</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-5">
            <a  href="/jobs/{{$job->id}}/edit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow-sm font-medium transition">
                Edit
            </a>
        </div>
    </div>

</x-layout>
