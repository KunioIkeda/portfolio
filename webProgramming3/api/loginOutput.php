<?php session_start(); ?>

<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞ログイン＞ログイン完了</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>
    <section class="loginComplete">
        <h1><span>ログイン完了</span></h1>
        <div>

<?php
unset($_SESSION['customers']);
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'password');

$sql=$pdo->prepare('select * from customers where mail=? and password=?');
$sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customers']=[
        'id'=>$row['id'], 'name'=>$row['name'], 'postcode_a'=>$row['postcode_a'], 'postcode_b'=>$row['postcode_b'],
        'address'=>$row['address'], 'mail'=>$row['mail'], 'password'=>$row['password']
    ];
}
if (isset($_SESSION['customers'])) {
    echo '<p>ログインが完了しました。</p>
        <p>引き続きお楽しみください。</p>';
} else {
    echo '<p>ログイン名またはパスワードが違います。</p>';
}
?>
        </div>
        <a href="#">購入確認ページへすすむ</a>
        <a href="../index.php">topページへ戻る</a>
    </section>

<?php require 'footer.php'; ?>