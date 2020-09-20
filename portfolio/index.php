<?php
session_start();
$count = 0;

$pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

$nameError = '';
$telephoneError = '';
$differentFormat = '';
$emailError = '';
$menuError = '';
$contactError = '';


if(isset($_POST['submit'])) {
  if($_POST['name'] != "") {
    $_SESSION['name'] = $_POST['name'];
  }else {
    $nameError = '*名前を入力してください';
    $count++;
  }

  if($_POST['telephone'] != "") {
    $_SESSION['telephone'] = $_POST['telephone'];
  }else {
    $telephoneError = '*電話番号を入力してください';
    $count++;
  }

  if($_POST['email'] != "") {
    if(preg_match($pattern, $_POST['email'])){
      $_SESSION['email'] = $_POST['email'];
    }else {
      $differentFormat = '*xxxx@xxxxの形式で入力してください';
      $count++;
    }
  }else {
    $emailError = '*メールアドレスを入力してください';
    $count++;
  }

  if($_POST['corporateName'] != "") {
    $_SESSION['corporateName'] = $_POST['corporateName'];
  }

  if(isset($_POST['menu'])) {
    $_SESSION['menu'] = $_POST['menu'];
  }else {
    $menuError = '*内容を選択してください';
    $count++;
  }

  if($_POST['contact'] != "") {
    $_SESSION['contact'] = $_POST['contact'];
  }else {
    $contactError = '*お問い合わせ内容を入力してください';
    $count++;
  }
}

if(isset($_POST['submit'])) {
  if($count == 0) {
    $_SESSION['success'] = 'success';
    header('Location: confirm.php');
  }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our portfolio</title>
    <meta name="google-site-verification" content="VxJbunXQAcjZb0qr3FPp6DDuWu1JgCZ16WGhMhN7iA4" />
    <meta name="description" content="Web制作、Webデザインならお任せください" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cmn.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/lightbox.js"></script>
</head>

<body>
    <div class="shdow"></div>
    <header class="top">
        <div class="wrap header">
            <h1 class="header_ttl">
                <a href="./" class="button"><span>Welcome</span></a>
            </h1>
            <div class="header_inner">
                <nav class="g_nav">
                    <ul>
                        <li><a href="./"><span data-text="TOP">TOP</span></a></li>
                        <li><a href="#concept"><span data-text="CONCEPT">CONCEPT</span></a></li>
                        <li><a href="#service"><span data-text="SERVICE">SERVICE</span></a></li>
                        <li><a href="#portfolio"><span data-text="PORTFOLIO">PORTFOLIO</span></a></li>
                        <li><a href="#profile"><span data-text="PROFILE">PROFILE</span></a></li>
                        <li><a href="#contact"><span data-text="CONTACT">CONTACT</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="sp_h_gnav">
            <div class="sp_gnav_inner flex">
                <h1 class="h_gnav_list h_nav_logo">
                    <a href="./">
                        Welcome
                    </a>
                </h1>
                <div class="sp_menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav class="sp_gnav">
                <ul class="sp_gnav_list">
                    <li><a href="./">TOP</a></li>
                    <li><a href="#concept">CONCEPT</a></li>
                    <li><a href="#service">SERVICE</a></li>
                    <li>
                        <a href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li><a href="#profile">PROFILE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="catch">
        <h2><span>繋</span>がりを大切に<br>日々<span>成長</span>しつずけます</h2>
        <ul id="slider">
            <li class="slide-item"><img src="images/catch_bg01.png" alt=""></li>
            <li class="slide-item"><img src="images/catch_bg02.png" alt=""></li>
            <li class="slide-item"><img src="images/catch_bg03.png" alt=""></li>
        </ul>
    </div>
    <main>
        <section class="concept cmn_sec" id="concept">
            <div class="concept_wrap">
                <h2 class="cmn_ttl">Concept<span>コンセプト</span></h2>
                <h3 class="concept_ttl">人と人との<span>縁</span>を、大切にします。</h3>
                <p class="concept_text">
                    初めまして！沖縄で活動している23歳の2人組です。<br>
                    ゆいまーる精神（助け合い）をモットーにWeb制作であなたのお役に立ちます！！
                </p>
            </div>
        </section>
        <section class="service cmn_sec" id="service">
            <h2 class="cmn_ttl">Service<span>サービス</span></h2>
            <div class="svc_wrap">
                <ul class="flex svc_list">
                    <li>
                        <p class="svc_img flex">
                            <img src="images/sv_img02.png" alt="">
                        </p>
                        <h3 class="svc_ttl">ヒアリング</h3>
                        <p class="svc_text">
                            お客様が理想としているホームページが制作できるまでヒアリングを行い、ご満足いただけるように一生懸命取り組んでまいります。
                        </p>
                    </li>
                    <li>
                        <p class="svc_img flex">
                            <img src="images/sv_img03.png" alt="">
                        </p>
                        <h3 class="svc_ttl">コーディング</h3>
                        <p class="svc_text">
                            PCだけではなくしっかりスマホ対応まで行います。
                            また、SEO対策まで意識したコーディングをさせていただきます。
                        </p>
                    </li>
                    <li>
                        <p class="svc_img flex">
                            <img src="images/sv_img01.png" alt="">
                        </p>
                        <h3 class="svc_ttl">サポート</h3>
                        <p class="svc_text">
                            多数いる制作者さんの中から、私たちに依頼して下っさたお客様との繋がりは大切にしていきたいと思いますので、全力でサポートさせていただきます。
                        </p>
                    </li>
                </ul>
                <div class="question">
                    <h3 class="question_ttl">Q&A</h3>
                    <div class="question_inner">
                        <dl class="data">
                            <dt class="dt1">どういった方にオススメですか？</dt>
                            <dd class="dd1">・HPを作るのが初めての方や、シンプルなHPが欲しい方にオススメです。</dd>
                        </dl>
                        <dl class="data">
                            <dt class="dt2">制作できるページ数・機能は？</dt>
                            <dd class="dd2">・基本的にはLPがメインになりますが3〜4ページのサイトも制作可能です。<br>・jqueryを使ったアンメーションやSNS連携・お問い合わせ機能などを設置します。
                            </dd>
                        </dl>
                        <dl class="data">
                            <dt class="dt3">準備するものはありますか？</dt>
                            <dd class="dd3">・写真はお客様自身でご用意していただきます。写真がない場合はこちらでフリー素材の写真をご用意いいたします。<br>・ドメインとサーバーのご準備もお願いいたします。ご契約方法がわからない場合は、こちらでサポート・代行が可能です。<br>
                                ※料金支払いは代行できません

                            </dd>
                        </dl>
                        <dl class="data">
                            <dt class="dt4">制作後のサポートは？</dt>
                            <dd class="dd4">・制作して終わりではなく、制作後も1ヶ月間は更新・修正など無料で行います。
                            </dd>
                        </dl>
                        <dl class="data">
                            <dt class="dt5">コーディングのみの依頼でもOK？</dt>
                            <dd class="dd5">もともとコーディング専門なのでコーディングのみのご依頼も可能です。</dd>
                        </dl>
                    </div>
                </div>
                <div class="svc_contact">
                    <p>まずはお気軽にご相談ください。</p>
                    <p class="svc_btn">
                        <a href="">CONTACT</a>
                    </p>
                </div>
            </div>
        </section>
        <section class="portfolio cmn_sec" id="portfolio">
            <h2 class="cmn_ttl">Portfolio<span>ポートフォリオ</span></h2>
            <div class="port_wrap">
                <ul class="port_list flex">
                    <li class="port_img">
                        <a href="images/port_01.png" rel="lightbox">
                            <p class="port_text flex"><span>Look at this</span></p>
                        </a>
                    </li>
                    <li class="port_img">
                        <a href="images/port_02.png" rel="lightbox">
                            <p class="port_text flex"><span>Look at this</span></p>
                        </a>
                    </li>
                    <li class="port_img">
                        <a href="images/port_03.png" rel="lightbox">
                            <p class="port_text flex"><span>Look at this</span></p>
                        </a>
                    </li>
                    <li class="port_img">
                        <a href="images/port_04.png" rel="lightbox">
                            <p class="port_text flex"><span>Look at this</span></p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="profile cmn_sec" id="profile">
            <h2 class="cmn_ttl">Profile<span>自己紹介</span></h2>
            <div class="pf_wrap">
                <div class="pf_content">
                    <p>
                        プロフィールをご覧いただきありがとうございます！<br>
                        現在、個人でWeb制作をしており、フリーランス＆現役システムエンジニアのタッグで活動しております。<br>
                        今はWeb制作を中心に活動していますが、今後は沖縄のe-sportsを盛り上げたいと思っており、<br>
                        ゲーム好きが繋がれるコミュニティ・ツールを作っていきたいと考えております。
                    </p>
                </div>
                <ul class="flex pf_list">
                    <li>
                        <p class="pf_img">
                            <img src="images/yoshiaki.JPG" alt="">
                        </p>
                        <p class="pf_name">yoshiaki<span>沖縄国際大学/法学部卒</span></p>
                        <p class="pf_text">
                            大学時代にプログラミングスクールスタートアップカフェコザ（現在の<a href="">SUNABACO</a>）に通い卒業後Web制作会社入社。<br>
                            やりたことができ退職。現在、目標に向かって色々と勉強中。<br>
                            ゆーゆーさんが会いたいとしつこいので、
                            <br>たまに<a href="">Startup Lab Lagoon</a>にいる。
                        </p>
                        <div class="sns flex">
                            <p class="pf_insta"><a href="">
                                    <img src="images/insta.png" alt="Instagram">
                                </a></p>
                            <p class="pf_twi"><a href="">
                                    <img src="images/twitter.png" alt="twitter">
                                </a></p>
                        </div>
                    </li>
                    <li>
                        <p class="pf_img">
                            <img src="images/mitiru.JPG" alt="">
                        </p>
                        <p class="pf_name">関　海知瑠<span>沖縄国際大学/法学部卒</span></p>
                        <p class="pf_text">
                            大学時代にプログラミングスクール<a href="">SUNABACO</a>に通い<br>
                            卒業後システム開発会社入社。<br>
                        </p>
                        <div class="sns flex">
                            <p class="pf_insta"><a href="">
                                    <img src="images/insta.png" alt="Instagram">
                                </a></p>
                            <p class="pf_twi"><a href="">
                                    <img src="images/twitter.png" alt="twitter">
                                </a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="contact cmn_sec" id="contact">
            <h2 class="cmn_ttl">Contact<span>お問い合わせ</span></h2>
            <ul class="send flex">
                <li class="color">
                <p>入力画面</p>
                </li>
                <li>
                <p>確認画面</p>
                </li>
                <li>
                <p>送信完了</p>
                </li>
            </ul>
            <h3 class="form_ttl">お客様情報を入力してください</h3>
            <form class="contact_from" action="index.php" method="post">
                <div class="item">
                    <label class="label flex">お名前<span class="impot">必須<span></label>
                    <div class="from_inner">
                    <p class="erro"><?php echo $nameError; ?></p>
                    <input class="inputs" type="text" name="name" value="<?php echo isset($_SESSION['reName']) ? $_SESSION['reName'] : ""; ?>">
                    </div>
                </div>
                <div class="item">
                    <label class="label flex">電話番号<span class="impot">必須<span></label>
                    <div class="from_inner">
                    <p class="erro"><?php echo $telephoneError; ?></p>
                    <input class="inputs" type="text" name="telephone" value="<?php echo isset($_SESSION['reTelephone']) ? $_SESSION['reTelephone'] : ""; ?>">
                    </div>
                </div>
                <div class="item">
                    <label class="label flex">メールアドレス<span class="impot">必須<span></label>
                    <div class="from_inner">
                    <p class="erro"><?php echo $differentFormat; ?></p>
                    <p class="erro"><?php echo $emailError; ?></p>
                    <input class="inputs" type="text" name="email" value="<?php echo isset($_SESSION['reEmail']) ? $_SESSION['reEmail'] : ""; ?>">
                    </div>
                </div>
                <div class="item">
                    <label class="label">会社名または学校名</label>
                    <div class="from_inner">
                    <input class="inputs" type="text" name="corporateName" value="<?php echo isset($_SESSION['reCorporateName']) ? $_SESSION['reCorporateName'] : ""; ?>">
                    </div>
                </div>
                <div class="item">
                    <p class="label flex">内容<span class="impot">必須<span></p>
                    <div class="from_inner">
                    <p class="erro"><?php echo $menuError; ?></p>
                    <div class="inputs recruit">
                        <div>
                        <input id="cut" type="radio" name="menu" value="業務に関する内容"
                        <?php
                        if(isset($_SESSION['reMenu'])){
                            if($_SESSION['reMenu'] == '業務に関する内容') {
                            echo 'checked';
                            }
                        }
                        ?>
                        >
                        <label for="cut">業務に関する内容</label>
                        </div>
                        <div>
                        <input id="cut-color" type="radio" name="menu" value="求人に関する内容"
                        <?php
                        if(isset($_SESSION['reMenu'])){
                            if($_SESSION['reMenu'] == '求人に関する内容') {
                            echo 'checked';
                            }
                        }
                        ?>
                        >
                        <label for="cut-color">求人に関する内容</label>
                        </div>
                        <div>
                        <input id="headspa" type="radio" name="menu" value="その他"
                        <?php
                        if(isset($_SESSION['reMenu'])){
                            if($_SESSION['reMenu'] == 'その他') {
                            echo 'checked';
                            }
                        }
                        ?>
                        >
                        <label for="headspa">その他</label>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <label class="label flex">お問い合わせ<span class="impot">必須<span></label>
                    <div class="from_inner">
                    <p class="erro"><?php echo $contactError; ?></p>
                    <textarea class="inputs" name="contact"><?php echo isset($_SESSION['reContact']) ? $_SESSION['reContact'] : ""; ?></textarea>
                    </div>
                </div>
                <div class="btn-area">
                <input type="submit" name="submit" value="送信" class="cmn_contact_btn">
                </div>
            </form>
        </section>
    </main>
    <div class="return">
        <p>
            <span></span>
        </p>
    </div>
    <footer>
        <small id="copy">Copyright &copy;
            <script type="text/javascript">
                document.write(new Date().getFullYear())
            </script>&ensp;&ensp;<a href="./">OSS</a>&ensp;&ensp;All Rights Reserved.
        </small>
    </footer>
    <script src="js/cmn.js"></script>
</body>

</html>
