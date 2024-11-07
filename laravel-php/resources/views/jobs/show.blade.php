<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <h1>{{ $job->title }}</h1><br>
    
    <h2>This job pays {{ $job->salary }} per year.</h2>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Update Job</x-button>
    </p>
    
</x-layout>