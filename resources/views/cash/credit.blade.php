<form action="/your-payment-processing-endpoint" method="post">
    <style>
        input[type="text"],
        input[type="datetime-local"],
        input[type="file"],
        textarea {
            border: 2px solid #DDD;
            /* 薄い境界線 */
            padding: 10px;
            border-radius: 5px;
            /* 角を丸く */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            /* ソフトな影 */
            transition: all 0.3s ease;
            /* なめらかな遷移効果 */
        }

        input[type="text"]:focus,
        input[type="datetime-local"]:focus,
        input[type="file"]:focus,
        textarea:focus {
            border-color: #009688;
            /* フォーカス時の境界線色 */
            box-shadow: 0 0 10px rgba(0, 150, 136, 0.5);
            /* フォーカス時の影 */
        }

        button[type="submit"] {
            background-color: #009688;
            /* ボタンの背景色 */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            /* ホバー時のカーソル */
            transition: all 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #00796B;
            /* ホバー時の背景色 */
        }
    </style>
    @csrf <!-- セキュリティトークン、Laravelの場合 -->

    <div class="payment-form">
        <h2>クレジットカード情報</h2>
        <div class="form-group">
            <label for="card-name">カード名義</label>
            <input type="text" id="card-name" name="card_name" required>
        </div>
        <div class="form-group">
            <label for="card-number">カード番号</label>
            <input type="text" id="card-number" name="card_number" placeholder="1111 2222 3333 4444" required>
        </div>
        <div class="form-group">
            <label for="card-expiry-month">有効期限（月/年）</label>
            <input type="text" id="card-expiry-month" name="card_expiry_month" placeholder="MM / YY" required>
        </div>
        <div class="form-group">
            <label for="card-cvc">CVC</label>
            <input type="text" id="card-cvc" name="card_cvc" placeholder="CVC" required>
        </div>
        <button type="submit" class="submit-button">支払う</button>
    </div>
</form>
