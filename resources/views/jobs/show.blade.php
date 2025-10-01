<x-layout> 
    <x-slot:heading> 
        Job 
    </x-slot:heading> 
    
<h1>{{ $job->title }}</h1>
<p>Salary: {{ $job->salary }}</p>

    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p>
            This job pays {{ $job['salary'] }} per year.
        </p>

    <a href="/jobs/{{ $job->id }}/edit"
   class="inline-block mt-4 text-blue-600">✏️ Edit Job</a>

</x-layout> 
