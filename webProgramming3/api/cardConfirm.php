<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $furigana = htmlspecialchars($_POST['number']);
    $postcode_a = htmlspecialchars($_POST['card']);
    $postcode_b = htmlspecialchars($_POST['month']);
    $address = htmlspecialchars($_POST['year']);
    $mail = htmlspecialchars($_POST['security']);
} else { 
    header('Location: index.php');
}
?>

<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞会員登録＞会員登録確認画面</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>


    <section class="cardPage">
        <h1><span>入力確認</span></h1>
            <p>お名前</p>
            <span><?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?></span>
            <p>カード番号</p>
            <span><?php echo htmlspecialchars($number,ENT_QUOTES,'UTF-8');?></span>
            <p>カード会社</p>
            <span><?php echo htmlspecialchars($card,ENT_QUOTES,'UTF-8');?></span>
            <div class="expiration">
                <p>有効期限</p>
                <span><?php echo htmlspecialchars($month,ENT_QUOTES,'UTF-8');?></span>
                <span><?php echo htmlspecialchars($year,ENT_QUOTES,'UTF-8');?></span>
            </div>
            <p>セキュリティコード</p>
            <span><?php echo htmlspecialchars($security,ENT_QUOTES,'UTF-8');?></span>


        <form method="post" action="customerOutput.php">
            <input type="hidden" name="name" value="<?php echo $name;?>">
            <input type="hidden" name="number" value="<?php echo $number;?>">
            <input type="hidden" name="card" value="<?php echo $card;?>">
            <input type="hidden" name="month" value="<?php echo $month;?>">
            <input type="hidden" name="year" value="<?php echo $year;?>">
            <input type="hidden" name="security" value="<?php echo $security;?>">
            <input type="submit" value="登録する">
        </form>
    </section>

<?php require 'footer.php'; ?>