<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-violet-600 hover:underline">
                    <strong>{{ $job['title'] }}</strong> — Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>