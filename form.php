<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="高松 恭佑">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

    <form action="./index.php" method="post">
    <div class = "select-box">
        <p>件名</p>
        <select>
            <option value="ご意見">ご意見</option>
            <option value="ご感想">ご感想</option>
            <option value="その他">その他</option>
        </select>
    </div>
    <div>
        <p>名前</p>
        <input>
    </div>
    <div>
        <p>メールアドレス</p>
        <input type="text" name="to">
    </div>
    <div>
        <p>電話番号</p>
        <input type="text" name="phoneNumber">
    </div>
    <div>
        <p>お問い合わせ内容</p>
        <textarea name="content" cols="60" rows="10"></textarea>
    </div>
        <p><input class="form" type="submit" value="送信"></p>
    </form>

</body>
<body>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = $_POST['to'];
  $title = $_POST['title'];
  $message = $_POST['message'];
  $headers = "From: mojya0126@gmail.com";

  if(mb_send_mail($to, $title, $message,$headers))
  {
    echo "メール送信成功です";
  }
  else
  {
    echo "メール送信失敗です";
  }
 ?>
 </body>
</html>