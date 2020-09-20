<?php
session_start();

if(! isset($_SESSION['success'])) {
  header('Location: index.php');
}

$seName = $_SESSION['name'];
$seTelephone = $_SESSION['telephone'];
$seEmail = $_SESSION['email'];
$seCorporateName = isset($_SESSION['corporateName']) ? $_SESSION['corporateName'] : "";
$seMenu = $_SESSION['menu'];
$seContact = $_SESSION['contact'];

if(isset($_POST['submit1'])) {

    // if($_POST['submit'] == "戻る") {
        $_SESSION['reName'] = isset($_POST['name']) ? $_POST['name'] : "";
        $_SESSION['reTelephone'] = isset($_POST['telephone']) ? $_POST['telephone'] : "";
        $_SESSION['reEmail'] = isset($_POST['email']) ? $_POST['email'] : "";
        $_SESSION['reCorporateName'] = isset($_POST['corporateName']) ? $_POST['corporateName'] : "";
        $_SESSION['reMenu'] = isset($_POST['menu']) ? $_POST['menu'] : "";
        $_SESSION['reContact'] = isset($_POST['contact']) ? $_POST['contact'] : "";
        header('Location: index.php');
    // }
}

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/POP3.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/language/phpmailer.lang-ja.php';

use PHPMailer\PHPMailer\PHPMailer;

// if(isset($_POST['submit2'])) {

$name = isset($_POST['name']) ? $_POST['name'] : "";
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$corporateName = isset($_POST['corporateName']) ? $_POST['corporateName'] : "";
$menu = isset($_POST['menu']) ? $_POST['menu'] : "";
$contact = isset($_POST['contact']) ? $_POST['contact'] : "";

$message = '';
$message .= quoted_printable_decode ( $contact ) . "\r\n";
$message .= "\r\n";
$message .= quoted_printable_decode ( '電話番号：'.$telephone ) . "\r\n";
$message .= quoted_printable_decode ( 'メールアドレス：'.$email ) . "\r\n";


if(isset($_POST['submit2'])) {
// if($_POST['submit'] == "送信") {
// コンストラクタ
$mail = new PHPMailer();

// 文字コード
$mail->CharSet = "iso-2022-jp";
$mail->Encoding = "7bit";

// SMTPサーバーを利用する
$mail->IsSMTP();

// デバッグ
// $mail->SMTPDebug = 1;

// SMTPAuthを利用する
$mail->SMTPAuth = true;

// SMTPサーバー
$mail->Host = 'smtp.gmail.com';

// ユーザー名
$mail->Username = 'kakazusoccer@gmail.com';

// パスワード
$mail->Password = 'pwbaydytgmgfvtfp';

// ポート
$mail->Port = 587;

// メールヘッダー文字コード
$mimeheader_encoding = 'JIS';

// 送信者アドレス
$mail->From = 'kakazusoccer@gmail.com';

// 送信者名
$mail->FromName = mb_encode_mimeheader(
    $corporateName.$name.'様 '
    , $mimeheader_encoding
);

// 宛先（企業やお店側のメールアドレスを指定する）
// $mail->addAddress('yoshiaki19980217@icloud.com');
$mail->addAddress('okiu_soccer7@icloud.com');

// メールタイトル
$mail->Subject = mb_encode_mimeheader(
    $menu
    , $mimeheader_encoding
);

// メール本文
$mail->Body = mb_convert_encoding(
    $message
    , $mimeheader_encoding
);

// 添付ファイル
// マルチバイト文字を利用するときは、mb_encode_mimeheader() を使う
// $mail->addAttachment(
//     './test.zip'
//     , mb_encode_mimeheader(
//         '添付ファイル.zip'
//         , $mimeheader_encoding
//     )
// );


    // if (!$mail->send()) {
    //     echo $mail->ErrorInfo;
    // }

    $mail->send();
    header('Location: complete.php');
// }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/test.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body id="confim">
  <section>
    <div class="contact_wrap">
      <h2 class="confim_ttl cmn_contact_ttl">確認画面</h2>
      <ul class="send flex">
        <li>
          <p>入力画面</p>
        </li>
        <li class="color">
          <p>確認画面</p>
        </li>
        <li>
          <p>送信完了</p>
        </li>
      </ul>
      <h3 class="form_ttl">入力内容をご確認ください</h3>
      <form action="confirm.php" method="post">
        <div class="data">
          <dl class="flex data_list">
            <dt>お名前</dt>
            <dd><input class="inputs" type="text" name="name" value="<?php echo $seName; ?>" readonly></dd>
          </dl>
          <dl class="flex data_list">
            <dt>電話番号</dt>
            <dd><input class="inputs" type="text" name="telephone" value="<?php echo $seTelephone; ?>" readonly></dd>
          </dl>
          <dl class="flex data_list">
            <dt>メールアドレス</dt>
            <dd><input class="inputs" type="text" name="email" value="<?php echo $seEmail; ?>" readonly></dd>
          </dl>
          <dl class="flex data_list">
            <dt>会社名または学校名</dt>
            <dd><input class="inputs" type="text" name="corporateName" value="<?php echo $seCorporateName; ?>" readonly></dd>
          </dl>
          <dl class="flex data_list">
            <dt>募集要項</dt>
            <dd><input class="inputs" type="text" name="menu" value="<?php echo $seMenu; ?>" readonly></dd>
          </dl>
          <dl class="flex data_list">
            <dt>お問い合わせ</dt>
            <dd><p class="data_text"><?php echo $seContact; ?></p></dd>
            <div class="hidden">
              <textarea class="inputs" name="contact" cols="30" rows="50" readonly><?php echo $seContact; ?></textarea>
            </div>
          </dl>
        </div>
        <div class="data_btn flex">
          <p>
            <input class="cmn_contact_btn" type="submit" name="submit1" value="修正する">
          </p>
          <p>
            <input class="sendBtn cmn_contact_btn" type="submit" name="submit2" value="送信する">
          </p>
        </div>
      </form>

  </section>
  <script>
  $('.sendBtn').click(function() {
  setTimeout(function(){
    $('.sendBtn').prop('disabled',true);
  }, 1);
  });
  </script>
  <script src="js/cmn.js"></script>
</body>
</html>
