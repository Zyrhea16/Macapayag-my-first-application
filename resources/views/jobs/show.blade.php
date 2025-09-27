<x-layout> 
    <x-slot:heading> 
        Job 
    </x-slot:heading> 
 
    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p>
            This job pays {{ $job['salary'] }} per year.
        </p>

    <a href="/jobs/{{ $job->id }}/edit"
   class="inline-block mt-4 text-blue-600">✏️ Edit Job</a>

</x-layout> 
