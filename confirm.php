<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']); 
} else { 
    header('Location: contact.php');
} 
?>
<?php $pageTitle = "Kunio's Portfolio｜Confirm"; ?>
<?php require 'common/header.php'; ?>

<section class="confirm">
    <h2>confirm</h2>
    <p>以下の内容で送信してよろしいですか？</p>
    <table>
        <tbody>
            <tr><th>name:</th><td><?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?></td></tr>
            <tr><th>email:</th><td><?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?></td></tr>
            <tr><th>message:</th><td><?php echo nl2br(htmlspecialchars($message,ENT_QUOTES,'UTF-8'));?></td></tr>
        </tbody>
    </table>
    <form method="post" action="complete.php">
        <input type="hidden" name="name" value="<?php echo $name;?>">
	 	<input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="message" value="<?php echo $message;?>">
        <input type="submit" value="send">
        <button type="button" onclick="history.back()">back</button>
    </form>
</section>

<?php require 'common/footer.php'; ?>