<x-admin.layout>
    <div class="w-full max-w-lg bg-white dark:bg-gray-800 p-6 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm mx-auto mt-6">
        <h1 class="text-xl font-bold text-gray-900 dark:text-white mb-4 border-b border-gray-200 dark:border-gray-700 pb-3">
            {{ $title }}
        </h1>

        <div class="space-y-3 text-sm text-gray-700 dark:text-gray-300">
            <p>{{ $content }}</p>
        </div>
    </div>
</x-admin.layout>
