<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
            

            <div>
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200
                rounded-lg">
                
                <div>
                    <strong class="text-laracasts">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }}
                    per year.
                </div>
                    </a>  
            </li>
        @endforeach

    </ul>
    <div class="mt-6"> {{ $jobs->links() }} </div>
</x-layout>