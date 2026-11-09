<x-admin.layout>
    <div class="p-4">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">{{ $title }}</h1>
                <p class="text-sm text-gray-500">{{ $subtitle }}</p>
            </div>
        </div>

        <div class="bg-white shadow-md sm:rounded-lg overflow-hidden border border-gray-200">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Name</th>
                        <th scope="col" class="px-4 py-3">Class</th>
                        <th scope="col" class="px-4 py-3">Major</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classrooms as $index => $classroom)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3 font-medium text-gray-900">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">{{ $classroom->name }}</td>
                            <td class="px-4 py-3 font-medium text-gray-900">{{ $classroom->class }}</td>
                            <td class="px-4 py-3">{{ $classroom->major }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
