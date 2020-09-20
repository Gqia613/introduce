<?php
session_start();

if(! isset($_SESSION['success'])) {
  header('Location: index.php');
}

session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/test.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="complete">
<section>
    <div class="contact_wrap">
      <h2>完了画面</h2>
      <ul class="send flex">
          <li>
            <p>入力画面</p>
          </li>
          <li>
            <p>確認画面</p>
          </li>
          <li  class="color">
            <p>送信完了</p>
          </li>
        </ul>
        <h3 class="form_ttl">お問い合わせありがとうございました</h3>
        <div class="contact_text">
          <p>
            ご入力いただきましたメールアドレス宛に控えメールを自動返信いたしました。<br>
            この控えメールが届かない場合は、ご入力いただいたメールアドレスに誤りがあるか、インターネット上のなんらかのトラブルの可能性もありますので、お手数ですが弊社までお電話いただくか、もしくは再度お問い合わせいただくようお願い申し上げます。

          </p>
        </div>
        <p class="complete_btn">
          <a href="index.php" class="cmn_contact_btn">TOP</a>
        </p>
  </section>
</body>
</html>
