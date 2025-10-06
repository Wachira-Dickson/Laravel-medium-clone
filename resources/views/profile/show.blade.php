<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                
                <div class="flex">
                    <div class="flex-1 pr-8">
                        <h1 class="text-3xl"> {{ $user->name }} </h1>

                        <div class="mt-8 ">
                            @forelse ($posts as $post)
                                <x-post-item :post="$post"> </x-post-item>

                             @empty
                                <div>
                                    <p class="text-center text-gray-500">No posts found.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="w-[320px] border-l px-8">
                        <x-user-avatar :user="$user" size="w-16 h-16"/>
                        <h3> {{ $user->name }} </h3>
                        <p class="text-gray-500"> 26k followers </p>
                        <p> {{ $user->bio }} </p>
                        <div class="mt-4"> <button class="bg-emerald-600 rounded-full px-4 py-2 text-white">Follow</button> </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</x-app-layout>
