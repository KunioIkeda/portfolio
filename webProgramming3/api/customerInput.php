<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞カート</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>
    <section class="customerPage">
        <h1><span>会員登録</span></h1>
        <form action="customerOutput" method="post">
            <p>お名前<span>（必須）</span></p>
            <input type="text" name="name">
            <p>お名前（フリガナ）<span>（必須）</span></p>
            <input type="text" name="kana">
            <div class="postcode">
                <p>郵便番号<span>（必須）</span></p>
                <input type="text" name="postcode"><input type="text" name="postcode">
            </div>
            <p>住所<span>（必須）</span></p>
            <input type="text" name="address">
            <p>メールアドレス<span>（必須）</span></p>
            <input type="text" name="mail">
            <p>メールアドレス確認用<span>（必須）</span></p>
            <input type="text" name="mail">
            <p>パスワード<span>（必須）</span></p>
            <span>半角英数字8文字以上32文字以内で入力してください。※記号の使用はできません</span>
            <input type="text" name="password">
            <p>パスワード確認用<span>（必須）</span></p>
            <input type="text" name="password">
                
            <input type="submit" value="入力確認する">
        </form>
    </section>

<?php require 'footer.php'; ?>