<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">情報登録</h2>

        <x-validation-errors :errors="$errors" />

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="title">
                    タイトル
                </label>
                <input type="text" name="title"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="タイトル" value="{{ old('title') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="body">
                    本文
                </label>
                <textarea name="body" rows="10"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required>{{ old('body') }}</textarea>
            </div>
            <div class="flex items-center mb-4">
                <div class="mr-2">
                    <label class="block text-gray-700 text-sm mb-2" for="title">
                        コイン/分
                    </label>
                    <input type="text" name="coin" style="width: 100%;"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3"
                        required placeholder="コイン/分" value="{{ old('title') }}">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm mb-2" for="datetime">
                        日時
                    </label>
                    <input type="datetime-local" name="datetime"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="image">
                    イメージ画像
                </label>
                <input type="file" name="image" class="border-gray-300">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="image">
                    音声イメージ
                </label>
                <input type="file" name="audio" class="border-gray-300">
            </div>
            <input type="submit" value="登録"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
