<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>コイン購入画面</title>
    <style>
        .coin-container {
            width: 90%;
            max-width: 400px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        .coin-option {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .coin-option:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .coin-price {
            color: #fff;
            background-color: #4CAF50;
            padding: 5px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .coin-title {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 5px;
        }

        .coin-subtitle {
            font-size: 0.9em;
            color: #666;
        }

        .coin-price-button {
            display: block;
            width: 2cm;
            /* ボタンの横幅を3cmに設定 */
            /* ボタンをブロック要素にする */
            text-align: center;
            text-decoration: none;
            /* テキストの下線を消す */
            color: #fff;
            background-color: #4CAF50;
            padding: 5px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .coin-price-button:hover {
            background-color: #43A047;
            /* ホバー時の色を変更 */
        }
    </style>
</head>

<body>

    <div class="coin-container">
        <h2 class="coin-title">最も人気のあるコイン🔥</h2>
        <div class="coin-option">
            <div>
                <div class="coin-title">2,060</div>
                <div class="coin-subtitle">80コインお得</div>
            </div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥1,980</a>
        </div>
        <div class="coin-option">
            <div>
                <div class="coin-title">10,350</div>
                <div class="coin-subtitle">550コインお得</div>
            </div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥9,800</a>
        </div>

        <!-- 以下、さらにオプションを追加 -->

        <h2 class="coin-title">すべてのコイン</h2>
        <!-- 各コインオプションをここに繰り返し -->
        <div class="coin-option">
            <div class="coin-title">50</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥50</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">100</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥100</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">200</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥200</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">300</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥300</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">500</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥500</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">750</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥750</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">1010</div>
            <div class="coin-subtitle">30コインお得</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥980</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">2060</div>
            <div class="coin-subtitle">80コインお得</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥1980</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">3120</div>
            <div class="coin-subtitle">140コインお得</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥2980</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">5240</div>
            <div class="coin-subtitle">260コインお得</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥4980</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">10350</div>
            <div class="coin-subtitle">550コインお得</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥9800</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">21000</div>
            <div class="coin-subtitle">1200コインお得</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥19800</a>
        </div>
        <div class="coin-option">
            <div class="coin-title">31630</div>
            <div class="coin-subtitle">1830コインお得</div>
            <a href="{{ route('cash.credit') }}" class="coin-price-button">¥29800</a>
        </div>
        <!-- 以降、同様に繰り返し -->
    </div>
    <br>
    <div class="coin-info-container" style="text-align: center; margin-left: auto; margin-right: auto;">
        <div class="coin-subtitle">購入したコインに有効期限はありません</div>
        <div class="coin-subtitle">このコインはwebのSpeak Heavenでのみご利用になれます</div>
        <a href="#" class="text-lg text-gray-600 hover:text-gray-600">資金決済法に基づく表示</a>
        <a href="#" class="text-lg text-gray-600 hover:text-gray-600">特定商取引法の記載</a>
    </div>
</body>

</html>
