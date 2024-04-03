<?php session_start(); ?>
<?php require 'header.php'; ?>

    <section class="topFixed">
        <p class="panNavi">TOP＞会員登録＞会員登録確認画面＞会員登録完了画面</p>
        <p class="user">ようこそ ゲスト様</p>
    </section>
	<section class="customerPage">
        <h1><span>会員登録完了</span></h1>
        <div class="output">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 
	'ccStaff', 'password');
if (isset($_SESSION['customers'])) {
	$id=$_SESSION['customers']['id'];
	$sql=$pdo->prepare('select * from customers where id!=? and mail=?');
	$sql->execute([$id, $_REQUEST['mail']]);
} else {
	$sql=$pdo->prepare('select * from customers where mail=?');
	$sql->execute([$_REQUEST['mail']]);
}
if (empty($sql->fetchAll())) {
	if (isset($_SESSION['customers'])) {
		$sql=$pdo->prepare('update customers set name=?, furigana=?, '.
			'postcode_a=?, postcode_b=?, address=?, mail=?, password=? where id=?');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['furigana'], $_REQUEST['postcode_a'], $_REQUEST['postcode_b'],
			$_REQUEST['address'] ,$_REQUEST['mail'], $_REQUEST['password'], $id]);
		$_SESSION['customers']=[
			'id'=>$id, 'name'=>$_REQUEST['name'], 'furigana'=>$_REQUEST['furigana'],
			'postcode_a'=>$_REQUEST['postcode_a'], 'postcode_b'=>$_REQUEST['postcode_b'],
			'address'=>$_REQUEST['address'], 'mail'=>$_REQUEST['mail'], 
			'password'=>$_REQUEST['password']];
		echo '<p>お客様情報を更新しました。</p>';
	} else {
		$sql=$pdo->prepare('insert into customers values(null,?,?,?,?,?,?,?)');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['furigana'],
			$_REQUEST['postcode_a'], $_REQUEST['postcode_b'],
			$_REQUEST['address'], $_REQUEST['mail'], $_REQUEST['password']]);
		echo '<p>会員登録が完了しました。</p><p>ログインページへお進みください。</p>';
	}
} else {
	echo '<p>メールアドレスが既に使用されていますので、<br>変更してください。</p>';
}
?>
        </div>
        <a href="cardInput.php">クレジットカード登録へ進む</a>
        <a href="#">購入確認ページへ進む</a>
    </section>

<?php require 'footer.php'; ?>
