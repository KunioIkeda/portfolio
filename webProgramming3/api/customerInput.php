<?php session_start(); ?>
<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞会員登録</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>

<?php 
    $name=$furigana=$postcode_a=$postcode_b=$address=$mail=$password='';
    if (isset($_SESSION['costomers'])) {
        $name=$_SESSION['costomers']['name'];
        $furigana=$_SESSION['costomers']['furigana'];
        $postcode_a=$_SESSION['costomers']['postcode_a'];
        $postcode_b=$_SESSION['costomers']['postcode_b'];
        $addres=$_SESSION['costomers']['address'];
        $mail=$_SESSION['costomers']['mail'];
        $password=$_SESSION['costomers']['password'];
    }
    echo <<< EOT
    <section class="customerPage">
        <h1><span>会員登録</span></h1>
        <form action="customerConfirm.php" method="post">
            <p>お名前<span>（必須）</span></p>
            <input type="text" name="name" value="{$name}" required>
            <p>お名前（フリガナ）<span>（必須）</span></p>
            <input type="text" name="furigana" value="{$furigana}" required>
            <div class="postcode">
                <p>郵便番号<span>（必須）</span></p>
                <input type="text" name="postcode_a" value="{$postcode_a}" required>
                <input type="text" name="postcode_b" value="{$postcode_b}" required>
            </div>
            <p>住所<span>（必須）</span></p>
            <input type="text" name="address" value="{$address}" required>
            <p>メールアドレス<span>（必須）</span></p>
            <input type="text" name="mail" value="{$mail}" required>
            <p>メールアドレス確認用<span>（必須）</span></p>
            <input type="text" name="mail" required>
            <p>パスワード<span>（必須）</span></p>
            <span>半角英数字8文字以上32文字以内で入力してください。※記号の使用はできません</span>
            <input type="text" name="password" value="{$password}" required>
            <p>パスワード確認用<span>（必須）</span></p>
            <input type="text" name="password" required>  
            <input type="submit" value="入力確認する">
        </form>
    </section>
    EOT;
?>
<?php require 'footer.php'; ?>