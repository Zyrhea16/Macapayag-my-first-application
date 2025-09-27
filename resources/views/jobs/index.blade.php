<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong class="text-laracasts">{{ $job->employer->name }}:</strong> {{ $job['title']
                    }} pays {{ $job['salary'] }} per year.
                </a>

                <a href="{{ route('jobs.show', $job) }}">{{ $job->title }}</a>

            <div>
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200
                rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong class="text-laracasts">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}
                    per year.
                </div>
                    </a>
                <div class="space-y-4"> @foreach ($jobs as $job) {{-- Your existing job card link --}} @endforeach </div>
                <div class="mt-6"> {{ $jobs->links() }} </div>

                     <div>
        <a href="{{ route('jobs.show', $job) }}">{{ $job->title }}</a>
        <p>{{ $job->salary }}</p>
    </div>
            </li>
        @endforeach

        
    </ul>
</x-layout>