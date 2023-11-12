<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($posts as $post)
                <div class="bg-white rounded overflow-hidden shadow-lg">
                    <!-- onclickイベントでstopPropagationを呼び出して、親要素のクリックイベントを止める -->
                    <a href="{{ route('posts.show', $post) }}" onclick="event.stopPropagation();">
                        <div class="w-full h-48 overflow-hidden relative">
                            <img class="object-cover w-full h-full" src="{{ $post->image_url }}" alt="Post image">
                            {{-- <div class="audio-container"
                                style="position: absolute; bottom: 20px; left: 10px; background-color: rgba(255, 255, 255, 0.5); padding: 5px; border-radius: 20px;"
                                onclick="event.stopPropagation();">
                                <audio id="audioPlayer{{ $post->id }}" src="/audios/SDGs.mp3"
                                    preload="metadata"></audio>
                                <button onclick="playAudio(event, {{ $post->id }})"
                                    style="background: none; border: none; outline: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white"
                                        class="bi bi-play-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11.596 8.707 6.803 12.207a1 1 0 0 1-1.596-.807V4.6a1 1 0 0 1 1.596-.807l4.793 3.5a1 1 0 0 1 0 1.414z" />
                                    </svg>
                                </button>
                                <span id="audioDuration{{ $post->id }}"
                                    style="color: white; font-size: 14px;">0:00</span>
                            </div> --}}
                        </div>
                    </a>
                    <!-- コンテンツコンテナ -->
                    <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">{{ $post->title }}</h2>
                        {{-- <p class="text-gray-700 text-base mb-4">{{ Str::limit($post->body, 100) }}</p> --}}
                        <div class="flex items-center justify-between">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">{{ $post->user->name }}</p>
                                <p class="text-gray-600">{{ $post->created_at->format('Y/m/d') }}</p>
                            </div>
                            <div class="text-lg">
                                <p class="text-gray-900">{{ $post->coin }}コイン /分</p>
                            </div>
                        </div>
                        {{-- ここにオーディオプレーヤーを追加 --}}
                        <div class="audio-container my-4">
                            <audio id="audioPlayer{{ $post->id }}" controls>
                                <source src="{{ $post->audio_url }}" type="audio/mp3">
                                お使いのブラウザはオーディオプレーヤーをサポートしていません。
                            </audio>
                        </div>
                        <!-- 星評価 -->
                        {{-- <div class="flex items-center mt-2">
                            <svg class="..." xmlns="http://www.w3.org/2000/svg" ...> ... </svg>
                            <span class="text-gray-600 text-sm ml-1">({{ $post->reviews_count }})</span>
                        </div> --}}
                        <div class="flex items-center mt-2">
                            <!-- 評価の値に応じて星のアイコンを繰り返し表示 -->
                            <!-- 5つの星を表示する例 -->
                            @for ($i = 0; $i < 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.425 8.332 1.208-6.042 5.888 1.426 8.31-7.384-3.884-7.384 3.884 1.426-8.31-6.042-5.888 8.332-1.208z" />
                                </svg>
                            @endfor
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
