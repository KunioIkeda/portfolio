<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞カート</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>
    <section class="cardPage">
        <h1><span>カード情報登録</span></h1>
        <form action="cardOutput.php" method="post">
            <p>お名前<span>（必須）</span></p>
            <input type="text" name="name">
            <p>カード番号<span>（必須）</span></p>
            <input type="text" name="number">
            <div class="card">
                <p>カード会社<span>（必須）</span></p>
                <label><input type="radio" name="card">jcb</label>
                <label><input type="radio" name="card">visa</label>
                <label><input type="radio" name="card">mastercard</label>
            </div>
            <div class="expiration">
                <p>有効期限<span>（必須）</span></p>
                <p><input type="text" name="month">月</p>
                <p><input type="text" name="days">日</p>
            </div>
            <p>セキュリティコード<span>（必須）</span></p>
            <input type="text" name="security">
                
            <input type="submit" value="入力確認する">
        </form>
    </section>

<?php require 'footer.php'; ?>