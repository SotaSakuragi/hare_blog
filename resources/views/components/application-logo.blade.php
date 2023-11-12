{{-- <h1 class="text-lg">Speak Heaven</h1>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>カラフルなタイトル</title>
    <style>
        /* クラスにスタイルを適用する */
        .text-speak {
            color: #00bfff;
            /* 「Speak」の色を設定 */
            font-weight: bold;
            /* 太字にする */
        }

        .text-heaven {
            color: #cc0066;
            /* 「Heaven」の色を設定 */
            font-weight: bold;
            /* 太字にする */
        }
    </style>
</head>

<body>

    <h1 class="text-lg">
        <span class="text-speak">Speak</span>
        <span class="text-heaven">Heaven</span>
    </h1>

</body>

</html> --}}

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>カラフルなタイトル</title>
    <!-- Tailwind CSSのリンクを追加する -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* ここにカスタムスタイルを追加する */
        .text-speak {
            color: #00bfff;
        }

        .text-heaven {
            color: #cc0066;
        }
    </style>
</head>

<body>

    <!-- Flexboxを使って要素を横に並べる -->
    <h1 class="flex items-center space-x-2 text-lg">
        <span class="text-speak font-bold">Speak</span>
        <span class="text-heaven font-bold">Heaven</span>
    </h1>
</body>

</html>
