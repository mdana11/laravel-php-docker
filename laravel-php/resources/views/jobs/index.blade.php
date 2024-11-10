<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Jobs Available</h1>

    <div class="grid grid-cols-1 gap-6">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job->id}}" class="block p-4 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 border border-gray-200 hover:border-blue-500">
                <div class="text-lg font-semibold text-blue-700 mb-2">
                    {{ $job->employer ? $job->employer->name : 'Employer not assigned' }}
                </div>
                <div class="text-gray-800 font-bold text-xl">
                    {{ $job['title'] }}
                </div>
                <div class="text-gray-600">
                    <span class="font-medium">Salary:</span> ${{ $job['salary'] }} per year
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>
