<x-layout>


    <section class="py-10">
        <div class="container">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Course List</h1>
                <a href="{{ route('course_create') }}" class="bg-[green] text-white px-4 py-1 rounded-4xl">
                    add new
                </a>
            </div>

            {{-- {{ $courses }} --}}

            <table class="mt-6 w-full text-center">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="p-2 border border-gray-400">ID</th>
                        <th class="p-2 border border-gray-400">Name</th>
                        <th class="p-2 border border-gray-400">Price</th>
                        <th class="p-2 border border-gray-400">Duration</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $c)
                        <tr>
                            <td class="p-2 border border-gray-300">{{ $c->id }}</td>
                            <td class="p-2 border border-gray-300">{{ $c->name }}</td>
                            <td class="p-2 border border-gray-300">Rs.{{ $c->price }}</td>
                            <td class="p-2 border border-gray-300">{{ $c->duration }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</x-layout>
