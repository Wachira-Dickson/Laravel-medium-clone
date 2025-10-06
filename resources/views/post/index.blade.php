<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <x-category-tabs/>
                </div>
            </div>

            <div class="mt-12 text-gray-900">
                <div class="p-6">
                    
                    @forelse ($posts as $post)

                        <x-post-item :post="$post"> </x-post-item>

                    @empty
                        <div>
                            <p class="text-center text-gray-500">No posts found.</p>
                        </div>
                    @endforelse

                </div>
            </div>
            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
</x-app-layout>
