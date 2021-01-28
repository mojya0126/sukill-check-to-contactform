<!-- フレームワークなし -->
<?php
session_start();

if (!isset($_SESSION['form'])) {
    header('Location: form.php');
    exit();
} else {
    if(isset($_SESSION['form'])){
    $post = $_SESSION['form'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $to = 'mojya0126@gmail.com';
    $from = $post['email'];
    $name = $post['name'];
    $selectBox = $post['selectBox'];
    $tell = $post['tell'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
名前： {$post['name']}

件名：{$post['selectBox']}

メールアドレス：
{$post['email']}

電話番号：{$post['call']}

内容：
{$post['contact']}
EOT;
    mb_send_mail($to, $subject, $body, "From: {$from}");

    mb_send_mail($from, $subject, $body, "From: {$from}");

    unset($_SESSION['form']);
    header('Location: complete.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せフォーム</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
   
    <div class="container">
        <form action="" method="POST">
            <p>お問い合わせ</p>
            <div class = "all-group">
                <div class="form-group">
                    <label for="selectBox">件名</label>
                    <span class="display_item"><?php echo htmlspecialchars($post['selectBox']); ?></span>
                </div>
                <div class="form-group">
                    <label for="inputName">お名前</label>
                    <span class="display_item"><?php echo htmlspecialchars($post['name']); ?></span>
                </div>
                <div class="form-group">
                    <label for="inputEmail">メールアドレス</label>
                    <span class="display_item"><?php echo htmlspecialchars($post['email']); ?></span>
                </div>
                <div class="form-group">
                    <label for="inputCall">電話番号</label>
                    <span class="display_item"><?php echo htmlspecialchars($post['tell']); ?></span>
                </div>
                <div class="form-group">
                    <label for="inputContent">お問い合わせ内容</label>
                    <span class="display_item"><?php echo nl2br(htmlspecialchars($post['contact'])); ?></span>
                </div>
            </div>
                <a href="form.php">内容を修正する</a>
                <button type="submit">送信する</button>
        </form>
    </div>
</body>
</html>