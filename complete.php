<?php require 'common/header.php'; ?>

<section class="complete">
    <h2>complete</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $to = '※都合により消しています※';
    $subject = 'お問い合わせがありました';
    $body = "名前: $name\nメールアドレス: $email\n\n$message";
    if (mb_send_mail($to, $subject, $body)) {
        $message = 'お問い合わせが送信されました。ありがとうございます。';
    } else {
        $message = 'エラーが発生しました。もう一度お試しください。';
    }
} else {
      header('Location: confirm.php');
    }
?>
        <p><?php echo $message; ?></p>
        <p><a href="index.php">topへ戻る</a></p>
</section>

<?php require 'common/footer.php'; ?>
