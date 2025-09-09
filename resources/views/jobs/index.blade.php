<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <li class="list-none">
                <a href="/jobs/{{ $job['id'] }}" class="x block px-4 py-6 border border-grey-200 rounded-lg">
                    <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
                    <div>
                        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>
            </li>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>
