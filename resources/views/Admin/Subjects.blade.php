<x-admin.layout>

@section('content')
<main class="p-4 md:ml-64 h-auto pt-20 bg-gray-900 min-h-screen text-white">
    <div class="max-w-6xl mx-auto">
        <!-- Judul Halaman -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Subjects</h1>
        </div>

        <!-- Tabel Data Subjects -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-gray-800 border border-gray-700">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs uppercase bg-gray-700 text-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Subject Name</th>
                        <th scope="col" class="px-6 py-3">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $index => $subject)
                    <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium text-white">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-medium text-white">{{ $subject->name }}</td>
                        <td class="px-6 py-4">{{ $subject->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
</x-admin.layout>
