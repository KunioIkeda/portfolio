<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $furigana = htmlspecialchars($_POST['furigana']);
    $postcode_a = htmlspecialchars($_POST['postcode_a']);
    $postcode_b = htmlspecialchars($_POST['postcode_b']);
    $address = htmlspecialchars($_POST['address']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
} else { 
    header('Location: index.php');
} 
?>

<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞会員登録＞会員登録確認画面</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>


    <section class="customerPage">
        <h1><span>入力確認</span></h1>
            <p>お名前</p>
            <span><?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?></span>
            <p>お名前（フリガナ）</p>
            <span><?php echo htmlspecialchars($furigana,ENT_QUOTES,'UTF-8');?></span>
            <div class="postcode">
                <p>郵便番号</p>
                <span><?php echo htmlspecialchars($postcode_a,ENT_QUOTES,'UTF-8');?></span>
                <span><?php echo htmlspecialchars($postcode_b,ENT_QUOTES,'UTF-8');?></span>
            </div>
            <p>住所</p>
            <span><?php echo htmlspecialchars($address,ENT_QUOTES,'UTF-8');?></span>
            <p>メールアドレス</p>
            <span><?php echo htmlspecialchars($mail,ENT_QUOTES,'UTF-8');?></span>
            <p>メールアドレス確認用</p>
            <span><?php echo htmlspecialchars($mail,ENT_QUOTES,'UTF-8');?></span>
            <p>パスワード</p>
            <span><?php echo htmlspecialchars($password,ENT_QUOTES,'UTF-8');?></span>
            <p>パスワード確認用</p>
            <span><?php echo htmlspecialchars($password,ENT_QUOTES,'UTF-8');?></span>


        <form method="post" action="customerOutput.php">
            <input type="hidden" name="name" value="<?php echo $name;?>">
            <input type="hidden" name="furigana" value="<?php echo $hurigana;?>">
            <input type="hidden" name="postcode_a" value="<?php echo $postcode_a;?>">
            <input type="hidden" name="postcode_b" value="<?php echo $postcode_b;?>">
            <input type="hidden" name="address" value="<?php echo $address;?>">
            <input type="hidden" name="mail" value="<?php echo $mail;?>">
            <input type="hidden" name="password" value="<?php echo $password;?>">
            <input type="submit" value="登録する">
        </form>
    </section>

<?php require 'footer.php'; ?>