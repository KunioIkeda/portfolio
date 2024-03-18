<?php session_start(); ?>

<?php require 'header.php'; ?>

<?php
unset($_SESSION['customers']);
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'password');

$sql=$pdo->prepare('select * from customers where login=? and password=?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customers']=[
        'id'=>$row['id'], 'name'=>$row['name'], 'address'=>$row['address'], 'login'=>$row['login'], 'password'=>$row['password']
    ];
}
if (isset($_SESSION['customers'])) {
    echo 'いらっしゃいませ', $_SESSION['customers']['name'], 'さん';
} else {
    echo 'ログイン名またはパスワードが違います。';
}
?>

<?php require 'footer.php'; ?>