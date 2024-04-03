<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞ログイン</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>
    <section class="loginPage">
        <h1><span>ログイン</span></h1>
        <form action="loginOutput.php" method="post">
            <div class="mail">
                <p>メールアドレス</p>
                <input type="text" name="mail">
            </div>
            <div class="pass">
                <p>パスワード</p>
                <input type="password" name="password">
            </div>
            <input type="submit" value="ログインする">
        </form>
        <a href="customerInput.php">会員登録はこちら</a>
    </section>

<?php require 'footer.php'; ?>