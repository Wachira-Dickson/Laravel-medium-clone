    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">

                    <h1 class="text-3xl mb-4">{{ $post->title }}</h1>
                    <div class="flex gap-4">
                        @if ($post->user->image)
                            <img src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->image }}" class="w-12 h-12 rounded-full">
                        @else
                            <img src="https://www.freepik.com/free-vector/mysterious-mafia-man-smoking-cigarette_
                            7074311.htm#fromView=keyword&page=1&position=10&uuid=2921cc04-dff3-40c7-9e93-5be9d789d428&"
                            alt="Dummy Avatar" class="w-12 h-12 rounded-full">
                        @endif

                        <!-- User Avatar -->
                        <div>
                            <div class="flex gap-2">
                                <h3> {{ $post->user->name }} </h3>
                                &middot;
                                <a href="#" class="text-emerald-500">Follow</a>
                            </div>
                            
                            <div class="flex gap-2 text-gray-500 text-sm">

                                {{ $post->readTime() }} min read                               
                                &middot;
                                {{ $post->created_at->format('M d, Y') }}
                                
                            </div>
                        </div>
                        <!-- User Avatar -->

                        <!-- Clap Section -->
                        <x-clap-button />
                        <!-- Clap Section -->

                        <!-- Content Section -->
                        <div class="mt-8">
                            <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">
                            <div class="mt-4">
                                {{ $post->content }}</p>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="mt-8">
                            <span class="px-4 py-2 bg-gray-200 rounded-xl">
                                {{ $post->category->name }}
                            </span>                          
                        </div>

                        <!-- Clap Section -->
                        <x-clap-button />
                        <!-- Clap Section -->

                    </div>

                </div>
            </div>
        </div>
    </x-app-layout>
