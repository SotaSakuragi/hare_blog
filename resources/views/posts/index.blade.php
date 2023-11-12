<x-app-layout>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>画像と名前の表示</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <!-- バナー広告のコンテナ -->
    <div class="banner-ad-container"
        style="position: relative; width: 100%; height: auto; text-align: center; margin-top: 20px;">
        <!-- バナー広告の画像 -->
        <img src="/images/バナー２.jpg" alt="バナー広告" style="width: 100%; height: auto;">
        <!-- バナー広告のテキスト -->
    </div>
    <div class="bg-gray-100">
        <nav class="bg-white border-b border-gray-200">
            <div class="container mx-auto px-4 flex justify-between items-center py-2">
                <!-- タイトル -->
                <div class="text-xl font-bold text-gray-800">
                    今すぐ話せる！！
                </div>

                <!-- ボタンコンテナ -->
                <div class="text-right">
                    <!-- ボタン -->
                    <button onclick="location.href='#'"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        もっと見る
                    </button>
                </div>
            </div>
        </nav>
    </div>
    @foreach ($posts as $post)
        <div class="item-container">
            <a href="{{ route('posts.show', $post) }}" onclick="event.stopPropagation();">
                <img src="{{ $post->image_url }}" class="rounded-img">
                <div class="item-name">{{ $post->user->name }}</div>
            </a>
        </div>
    @endforeach
    <div class="bg-gray-100">
        <nav class="bg-white border-b border-gray-200">
            <div class="container mx-auto px-4 flex justify-between items-center py-2">
                <!-- タイトル -->
                <div class="text-xl font-bold text-gray-800">
                    話題ジャンル一覧
                </div>
            </div>
        </nav>
    </div>
    <div class="item-container">
        <img src="images/雑談.jpg" class="rounded-img">
        <div class="item-name">雑談</div>
    </div>
    <div class="item-container">
        <img src="images/寝落ち.jpg" class="rounded-img">
        <div class="item-name">寝落ち</div>
    </div>
    <div class="item-container">
        <img src="images/悩み.jpg" class="rounded-img">
        <div class="item-name">悩み相談</div>
    </div>
    <div class="item-container">
        <img src="images/オンライン飲み.jpg" class="rounded-img">
        <div class="item-name">飲み</div>
    </div>
    <div class="item-container">
        <img src="images/モーニングコール.jpg" class="rounded-img">
        <div class="item-name">おはよう</div>
    </div>
    <div class="item-container">
        <img src="images/その他.jpg" class="rounded-img">
        <div class="item-name">その他</div>
    </div>
    <div class="item-container">
        <img src="images/グチ.jpg" class="rounded-img">
        <div class="item-name">言いたい！</div>
    </div>
    <div class="item-container">
        <img src="images/恋バナ.jpg" class="rounded-img">
        <div class="item-name">恋愛</div>
    </div>
    <div class="item-container">
        <img src="images/今日のはなし.jpg" class="rounded-img">
        <div class="item-name">きいて！</div>
    </div>
    <div class="item-container">
        <img src="images/仕事.jpg" class="rounded-img">
        <div class="item-name">仕事</div>
    </div>

    <head>
        {{-- その他のヘッダー要素 --}}
        <style>
            .audio-container audio {
                width: 95%;
                /* コンテナの幅いっぱいに広げる */
                /* height: 32px; もし高さを設定したい場合はこちらを使用 */
            }
        </style>
    </head>

    <div class="bg-gray-100">
        <nav class="bg-white border-b border-gray-200">
            <div class="container mx-auto px-4 flex justify-between items-center py-2">
                <!-- タイトル -->
                <div class="text-xl font-bold text-gray-800">
                    Speak Heaven通話出品一覧
                </div>

                <!-- ドロップダウンメニュー -->
                <div class="relative">
                    <button id="dropdownButton"
                        class="text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                        <span>おすすめ順</span>
                        <!-- アイコン -->
                        <svg class="fill-current w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5.9 7.5L10 11.6l4.1-4.1 1.4 1.4-5.5 5.6-5.5-5.6z" />
                        </svg>
                    </button>
                    <!-- ドロップダウンメニューの内容 -->
                    <div id="dropdownMenu" class="absolute hidden text-gray-700 pt-1">
                        <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                            href="#">人気順</a>
                        <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                            href="#">新着順</a>
                        <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                            href="#">評価順</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- index.blade.php -->
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
                                <br>
                                <p class="text-gray-600">{{ $post->datetime}}</p>
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
    <div class="bg-gray-100" style="margin-top: 1cm;">
        <nav class="bg-white border-b border-gray-200">
            <div class="container mx-auto px-4 flex justify-between items-center py-2">
                <!-- タイトル -->
                <div class="text-xl font-bold text-gray-800">
                    低価格ランキング！
                </div>
            </div>
        </nav>
    </div>
    {{-- @foreach ($posts2 as $index => $post)
        <div class="ranking-item {{ $index < 3 ? 'top-rank' : '' }}">
            <div class="rank-number">{{ $index + 1 }}</div>
            <div class="rank-image-container">
                <img src="{{ $post->image_url }}" alt="{{ $post->user->name }}" class="rank-image">
            </div>
            <div class="rank-details">
                <h4 class="rank-name">{{ $post->user->name }}</h4>
                <p class="rank-description">{{ $post->description }}</p>
                <!-- その他の詳細情報 -->
            </div>
        </div>
    @endforeach --}}
    @foreach ($posts2 as $index => $post)
        <a href="{{ route('posts.show', $post) }}" onclick="event.stopPropagation();">
            <div class="ranking-item {{ $index < 3 ? 'top-rank' : '' }}">
                <div class="rank-number">{{ $index + 1 }}</div>
                <div class="rank-image-container">
                    <img src="{{ $post->image_url }}" alt="{{ $post->user->name }}" class="rank-image">
                </div>
                <div class="rank-details">
                    <div class="rank-name-and-coin">
                        <h4 class="rank-name">{{ $post->user->name }}</h4>
                        <span class="rank-coin">{{ $post->coin }}コイン/分</span> <!-- コインの数を表示 -->
                    </div>
                    <p class="rank-description">{{ $post->description }}</p>
                    <!-- その他の詳細情報 -->
                </div>
            </div>
        </a>
    @endforeach


    <!-- フッターセクション -->
    <footer class="footer-section">
        <div class="container mx-auto text-center py-6">
            <!-- フッターコンテンツ -->
            <div class="footer-content">
                <h3 class="text-2xl font-bold mb-2">いつでもそばに「Speak Heaven」</h3>
                <!-- フッターリンク -->
                <ul class="footer-links list-none p-0 inline-flex justify-center gap-4 mb-4">
                    <li><a href="#" class="text-lg text-blue-500 hover:text-blue-700">利用規約</a></li>
                    <li><a href="#" class="text-lg text-blue-500 hover:text-blue-700">プライバシーポリシー</a></li>
                    <li><a href="#" class="text-lg text-blue-500 hover:text-blue-700">特定商取引法の記載</a></li>
                    <li><a href="#" class="text-lg text-blue-500 hover:text-blue-700">Twitter</a></li>
                </ul>
                <!-- 著作権表示 -->
                <p class="text-base text-gray-600">&copy; 2024 Inc.StudioS</p>
            </div>
        </div>
    </footer>

    <script>
        function playAudio(postId) {
            var audio = document.getElementById('audioPlayer' + postId);
            audio.play();
        }

        document.addEventListener('DOMContentLoaded', function() {
            @foreach ($posts as $post)
                var audioPlayer = document.getElementById('audioPlayer{{ $post->id }}');
                var audioDuration = document.getElementById('audioDuration{{ $post->id }}');

                audioPlayer.onloadedmetadata = function() {
                    var minutes = Math.floor(audioPlayer.duration / 60);
                    var seconds = Math.floor(audioPlayer.duration % 60);
                    audioDuration.textContent = minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
                };
            @endforeach
        });
        document.addEventListener('DOMContentLoaded', function() {
            // ドロップダウンボタンの要素を取得
            const dropdownButton = document.getElementById('dropdownButton');

            // ドロップダウンメニューの要素を取得
            const dropdownContent = document.getElementById('dropdownMenu');

            // ボタンのクリックイベントを監視
            dropdownButton.addEventListener('click', function() {
                // ドロップダウンメニューの表示状態をトグル
                dropdownContent.classList.toggle('hidden');
            });
        });
    </script>
</x-app-layout>

{{-- <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

        <x-flash-message :message="session('notice')" />
        <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
            @foreach ($posts as $post)
                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                    <a href="{{ route('posts.show', $post) }}">
                        <h2
                            class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">
                            {{ $post->title }}</h2>
                        <h3>{{ $post->user->name }}</h3> --}}
{{-- <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                            <span
                                class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $post->created_at ? 'NEW' : '' }}</span>
                            {{ $post->created_at }} --}}
{{-- </p>
                        <img class="w-full mb-2" src="{{ $post->image_url }}" alt="">
                        <p class="text-gray-700 text-base">{{ Str::limit($post->body, 50) }}</p> --}}
<!-- 画像コンテナ -->
{{-- <div class="w-32 h-32 overflow-hidden relative mb-2">
                            <!-- 画像がコンテナのサイズにフィットするように設定 -->
                            <img class="object-cover h-full w-full" src="{{ $post->image_url }}" alt="Post image">
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
</x-app-layout> --}}
