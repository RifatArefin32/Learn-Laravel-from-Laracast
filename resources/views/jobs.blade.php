<x-layout>
    <x-slot:heading> Jobs </x-slot:heading>
    <x-slot:page_title> All Jobs </x-slot:page_title>
    @php
        // dd($jobs);
    @endphp
    @if (!$jobs->isEmpty())
        {{-- job lists --}}
        <div>
            @foreach ($jobs as $job)
                <div
                    class="border border-gray-300 rounded-lg shadow-sm p-4 my-4 cursor-pointer 
            hover:shadow-lg transition duration-300">
                    <a href="/jobs/{{ $job->id }}">
                        <div class="text-sm text-blue-500">
                            <p> Company: {{ $job->employer->name }} </p>
                        </div>
                        <div class="text-xl mt-2">
                            <p>{{ $job->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{-- paging bar --}}
        <div class="mt-10">
            {{ $jobs->links() }}
        </div>
    @else
        <div class="flex items-center justify-center my-10 text-xl">
            <h1>No jobs available</h1>
        </div>
    @endif

</x-layout>
