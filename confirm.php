<?php
$page_title = "お問い合わせ内容確認";
include(dirname(__FILE__) . '/header.php');

$name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '';
$seat = isset($_POST['seat']) ? htmlspecialchars($_POST['seat'], ENT_QUOTES, 'UTF-8') : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : '';
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8') : '';
?>

<div class="contents">
    <div class="confirm">
        <h2>お問い合わせ内容確認</h2>
        <div class="confirm_content">
            <p>お名前</p>
            <p><?php echo $name; ?></p>
        </div>
        <div class="confirm_content">
            <p>希望席</p>
            <p><?php echo $seat; ?></p>
        </div>
        <div class="confirm_content">
            <p>メールアドレス</p>
            <p><?php echo $email; ?></p>
        </div>
        <div class="confirm_content">
            <p>電話番号</p>
            <p><?php echo $phone ?: '未入力'; ?></p>
        </div>
        <form class="confirm_form" method="post" action="thanks.php">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="seat" value="<?php echo $seat; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
            <button class="button back" type="button" onclick="history.back()">戻る</button>
            <button class="button" type="submit">送信</button>
        </form>
    </div>
</div>

<?php include(dirname(__FILE__) . '/footer.php'); ?>