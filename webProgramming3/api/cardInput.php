<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞カート</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>

    <h3>「当サイトは模擬サイトですので、実際のクレジットカード情報は登録しないでください」</h3>
    
<?php 
    $name=$number=$card=$month=$year=$security='';
    if (isset($_SESSION['costomers'])) {
        $name=$_SESSION['costomers']['name'];
        $number=$_SESSION['costomers']['number'];
        $card=$_SESSION['costomers']['card'];
        $month=$_SESSION['costomers']['month'];
        $year=$_SESSION['costomers']['year'];
        $security=$_SESSION['costomers']['security'];
    }

    echo <<< EOT
    <section class="cardPage">
        <h1><span>カード情報登録</span></h1>
        <form action="cardConfirm.php" method="post">
            <p>お名前<span>（必須）</span></p>
            <input type="text" name="name" value="{$name}" required>
            <p>カード番号<span>（必須）</span></p>
            <input type="text" name="number" value="{$number}" required>
            <div class="card">
                <p>カード会社<span>（必須）</span></p>
                <label><input type="radio" name="card" value="{$card}" checked>jcb</label>
                <label><input type="radio" name="card" value="{$card}">visa</label>
                <label><input type="radio" name="card" value="{$card}">mastercard</label>
            </div>
            <div class="expiration">
                <p>有効期限<span>（必須）</span></p>
                <p><input type="text" name="month" value="{$month}" required>月</p>
                <p><input type="text" name="year" value="{$year}" required>年</p>
            </div>
            <p>セキュリティコード<span>（必須）</span></p>
            <input type="text" name="security" value="{$security}" required>
                
            <input type="submit" value="入力確認する">
        </form>
    </section>
    EOT;
?>

<h3>「当サイトは模擬サイトですので、実際のクレジットカード情報は登録しないでください」</h3>

<?php require 'footer.php'; ?>