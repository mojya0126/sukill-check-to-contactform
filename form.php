<!-- フレームワークなし -->
<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if ($post['selectBox'] === 'disabled') {
        $error['selectBox'] = 'blank';
    }
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['tell'] === '') {
        $error['tell'] = 'blank';
    }

    if ($post['contact'] === '') {
        $error['contact'] = 'blank';
    }

    if (count($error) === 0) {
        $_SESSION['form'] = $post;
        header('Location: form-check.php');
        exit();
    }

} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="author" content="高松 恭佑">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class = "form">
    <div class="container">
        <form action="./form.php" method="post" class="container" novalidate>
            <div class = "Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>件名</p>
                 <select id="inputSelectBox"  name="selectBox" class="Form-Item-Input">
                    <option value="disabled" style='display:none;'>-- 選択してください --</option>
                    <option value="ご意見"<?php echo array_key_exists('selectBox', $_POST) && $_POST['selectBox'] == 'ご意見' ? 'selected' : ''; ?>>ご意見</option>
                    <option value="ご感想"<?php echo array_key_exists('selectBox', $_POST) && $_POST['selectBox'] == 'ご感想' ? 'selected' : ''; ?>>ご感想</option>
                    <option value="その他"<?php echo array_key_exists('selectBox', $_POST) && $_POST['selectBox'] == 'その他' ? 'selected' : ''; ?>>その他</option>
                </select>
            </div>
            <div class="Form-error">
                <?php if ($error['selectBox'] === 'blank'): ?>
                        <p class="error_msg">※選択して下さい</p>
                <?php endif; ?>
            </div>   
            <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>名前</p>
                    <input type="text" name="name" id="inputName" class="Form-Item-Input" value="<?php echo htmlspecialchars($post['name']); ?>"required autofocus>             
            </div>
            <div class="Form-error">
                    <?php if ($error['name'] === 'blank'): ?>
                        <p class="error_msg">※お名前をご記入下さい</p>
                    <?php endif; ?>
            </div>
            <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                    <input type="email" name="email" id="inputEmail" class="Form-Item-Input" value="<?php echo htmlspecialchars($post['email']); ?>"required>
            </div>
            <div class="Form-error">
                <?php if ($error['email'] === 'blank'): ?>
                    <p class="error_msg">※メールアドレスをご記入下さい</p>
                <?php endif; ?>
            </div>
            <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                    <input type="tell" name="tell" id="inputTell" class="Form-Item-Input" value="<?php echo htmlspecialchars($post['tell']); ?>"required>
            </div>
            <div class="Form-error">
                <?php if ($error['tell'] === 'blank'): ?>
                    <p class="error_msg">※電話番号をご記入下さい</p>
                <?php endif; ?>
            </div>
            <div class="Form-Item">
                <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                <textarea name="contact" id="inputContent" class="Form-Item-Textarea" required><?php echo htmlspecialchars($post['contact']); ?></textarea>
            </div>
            <div class="Form-error">
                <?php if ($error['contact'] === 'blank'): ?>
                    <p class="error_msg">※お問い合わせ内容をご記入ください</p>
                <?php endif; ?>
            </div>
            <button type="submit" class="Form-Btn">確認画面へ</button>
        </form>
    </div>
</div>
</body>
</html>
