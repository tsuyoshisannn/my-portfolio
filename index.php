<?php

// 共通変数・関数ファイル読み込み
require('function.php');

// 変数の初期化
$clean = array();
$error = array();

// サニタイズ
if( !empty($_POST) ) {

	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}


// POST送信されていた場合
if(!empty($_POST)){

    // 変数にユーザー情報を代入
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // 未入力チェック
    validRequired($name, 'name');
    validRequired($email, 'email');
    validRequired($comment, 'comment');

    if(empty($err_msg)){

        // email型式チェック
        validEmail($email, 'email');
        // コメントの最大文字数チェック
        validMaxLen($comment, 'comment');

        // サニタイズ
        if( !empty($_POST) ) {

            foreach( $_POST as $key => $value ) {
                $clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
            } 
}
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <!-- レスポンシブデザイン用 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tsuyoshi's Portfolio</title>
        <!-- グーグルフォント -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Slick -->
        <link href="./slick/slick-theme.css" rel="stylesheet">
        <link href="./slick/slick.css" rel="stylesheet">
        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- ヘッダー -->
        <header>
          <section class="l-header u-flex js-float-menu">

            <h1 class="p-header__title"><a href="">Portfolio</a></h1>

            <!-- ハンバーガーメニュー -->
            <div class="p-menu__trigger js-toggle-sp-menu js-float-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- メニュー -->
            <nav class="p-menu">
                <ul class="p-menu__list">
                    <li class="p-menu__item"><a class="p-menu__link js-menu-link" href="#profile">PROFILE</a></li>
                    <li class="p-menu__item"><a class="p-menu__link js-menu-link" href="#skill">SKILL</a></li>
                    <li class="p-menu__item"><a class="p-menu__link js-menu-link" href="#works">WORKS</a></li>
                    <li class="p-menu__item"><a class="p-menu__link js-menu-link" href="#contact">CONTACT</a></li>
                </ul>
            </nav>

          </section>
        </header>

        <main>
            <!-- ヒーローバナーセクション -->
            <section class="p-hero l-container__fluid u-flex js-float-menu-target">
                <h2 class="p-hero__title">Tsuyoshi's<br> Portfolio</h2>
            </section>

            <!-- プロフィールセクション -->
            <section id="profile" class="u-color-bg">
                <div class="l-container js-float-menu-target">
                <h2 class="c-title">PROFILE</h2>
                <div class="l-container__body">
                    <div class="p-profile__group">
                        <div class="p-profile__img">
                            <a href="plofile.html">
                                <img src="./dist/img/prof-img.jpg" alt="Tsuyoshiの画像">
                            </a>
                        </div>
                        <div class="p-profile__introduction">
                            <h5 class="p-profile__name">Tsuyoshi（つよし）</h5>
                            <p class="p-profile__comment">1991年生まれ  28歳</p>
                            <p class="p-profile__comment">
                                高校卒業後、元々アルバイトをしていたコンビニエンスストアにて店長に約10年従事<br>
                                10年務める中でCMや７pay事件などをきっかけにプログラミングに注目。調べていき自己学習をしてみる中でWebサービスの開発に従事したい気持ちが強くなり転職を決意、一念発起し退職した。<br>
                                現在、Javascript,phpを中心にバックエンドもわかるフロントエンドエンジニアになるべく一生懸命学習中
                            </p>
                        
                        </div>
                    </div>
                </div>
                </div>
            </section>

                <!-- Skillセクション -->
                <section id="skill">
                    <div class="l-container u-px0">
                        <h2 class="c-title">SKILL</h2>
                            <div class="l-container__body">
                                <div class="p-skill__group u-flex">
                                <!-- スキルカード１枚目 -->
                                <div class="p-skill__card p-skill__card--padding">
                                    <div class="p-skill__head">
                                        <span>コーディング</span>
                                    </div>
                                    <div class="p-skill__body">
                                        <div class="p-skill__item u-flex">
                                            <div class="p-skill__logo">
                                                <i class="fab fa-html5"></i>
                                            </div>
                                            <p class="p-skill__name">HTML5</p>
                                        </div>
                                        <div class="p-skill__item u-flex">
                                            <div class="p-skill__logo">
                                                <i class="fab fa-css3-alt"></i>
                                            </div>
                                            <p class="p-skill__name">CSS3</p>
                                        </div>
                                    </div>
                                    <div class="p-skill__foot">
                                        <p>自作WEBサービス制作等で基本的なことはできるようになりました。<br>
                                        当ポートフォリオサイトではCSS設計のFLOCSS、レスポンシブデザイン、SCSSを使用し保守性の高いコードを意識しました。</p>
                                    </div>
                                </div>

                                <!-- スキルカード2枚目 -->
                                <div class="p-skill__card p-skill__card--padding">
                                        <div class="p-skill__head">
                                            <span>フロントエンド</span>
                                        </div>
                                        <div class="p-skill__body">
                                            <div class="p-skill__item u-flex">
                                                <div class="p-skill__logo">
                                                    <i class="fab fa-js-square"></i>
                                                </div>
                                                <p class="p-skill__name">Javascript</p>
                                            </div>
                                            <div class="p-skill__item u-flex">
                                                <div class="p-skill__logo">
                                                    <img src="./dist/img/icon-jquery.png" alt="jQuery">
                                                </div>
                                                <p class="p-skill__name">jQuery</p>
                                            </div>
                                        </div>
                                        <div class="p-skill__foot">
                                            <p>JavaScriptはES5を中心に学んでおります。<br>
                                            これからES6とともにフレームワークを学んでいきます。</p>
                                        </div>
                                </div>

                                <!-- スキルカード3枚目 -->
                                <div class="p-skill__card p-skill__card--padding">
                                        <div class="p-skill__head">
                                            <span>バックエンド</span>
                                        </div>
                                        <div class="p-skill__body">
                                            <div class="p-skill__item u-flex">
                                                <div class="p-skill__logo">
                                                    <i class="fab fa-php"></i>
                                                </div>
                                                <p class="p-skill__name">php</p>
                                            </div>
                                            <div class="p-skill__item u-flex">
                                                <div class="p-skill__logo">
                                                    <i class="fas fa-database"></i>
                                                </div>
                                                <p class="p-skill__name">MySQL</p>
                                            </div>
                                        </div>
                                        <div class="p-skill__foot">
                                            <p>phpは基本的なCLUD機能を盛り込んだWEBサービスを作り、その際にMySQLを使用しSQLコマンド・DB設計を学びました。<br>
                                            これから、フレームワークの学習を行っていきます。</p>
                                        </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </section>

            <!-- Workセクション -->
            <section id="works">
                <div class="l-container u-px0 u-pbxl">
                    <h2 class="c-title">WORKS</h2>
                    <div class="l-container__body p-slider">
                        <div class="p-slider__container slider">
                            <!-- スライダー１枚目 -->
                            <div class="p-slider__item">
                                <div class="u-mxl">
                                    <a href="https://movieeeee.herokuapp.com/" class="p-slider__img" target="_blank" rel="noopener">
                                        <img src="./dist/img/movieee-img.png" alt="映画レビューサイトのイメージ">
                                    </a>
                                    <div class="p-slider__body">
                                        <a href="https://movieeeee.herokuapp.com/" class="p-slider__name" target="_blank" rel="noopener">映画レビューサイト</a>
                                        <a href="https://github.com/tsuyoshisannn/movieee" class="p-slider__link" target="_blank" rel="noopener"><i class="fab fa-github"></i></a>
                                        <p><span class="p-slider__sub-name">内容</span><br>
                                        映画レビューサイト</p>
                                        <p><span class="p-slider__sub-name">機能</span><br>
                                            ユーザー登録、ログイン・ログアウト、コンテンツ投稿・編集・一覧表示・詳細表示、お気に入り(Ajax)、5段階評価、レビュー掲示板(1作品につき1コメント)、マイページ、プロフィール編集、パスワード変更、退会、ページネーション、ソート</p>
                                        <p><span class="p-slider__sub-name">使用言語</span><br>
                                        HTML,CSS,php,js,MySQL</p>
                                    </div>
                                </div>
                            </div>
                            <!-- スライダー２枚目 -->
                            <div class="p-slider__item">
                                    <div class="u-mxl">
                                        <a href="https://oketmonster.herokuapp.com/" class="p-slider__img" target="_blank" rel="noopener">
                                            <img src="./dist/img/oketmonster-img.png" alt="○けもんのイメージ">
                                        </a>
                                        <div class="p-slider__body">
                                            <a href="https://oketmonster.herokuapp.com/" class="p-slider__name" target="_blank" rel="noopener">○けもん風対戦ゲーム</a>
                                            <a href="https://github.com/tsuyoshisannn/-oketmonster" class="p-slider__link" target="_blank" rel="noopener"><i class="fab fa-github"></i></a>
                                            <p><span class="p-slider__sub-name">内容</span><br>
                                                バトルゲーム</p>
                                            <p><span class="p-slider__sub-name">機能</span><br>
                                                phpを使いオブジェクト指向を学ぶ為に作成。<br>
                                                アクセス権/カプセル化、継承、オーバーライド、静的メンバ、抽象クラス、インターフェースについてざっくりと学べたと思う</p>
                                            <p><span class="p-slider__sub-name">使用言語</span><br>
                                            HTML,CSS,php,js</p>
                                        </div>
                                    </div>
                                </div>
                            <!-- スライダー３枚目 -->
                            <div class="p-slider__item">
                                    <div class="u-mxl">
                                        <a href="https://oketmonster.herokuapp.com/" class="p-slider__img" target="_blank" rel="noopener">
                                            <img src="./dist/img/my-portfolio-img.png" alt="ポートフォリオのイメージ">
                                        </a>
                                        <div class="p-slider__body">
                                            <a href="https://oketmonster.herokuapp.com/" class="p-slider__name" target="_blank" rel="noopener">ポートフォリオ</a>
                                            <a href="https://github.com/tsuyoshisannn/-oketmonster" class="p-slider__link" target="_blank" rel="noopener"><i class="fab fa-github"></i></a>
                                            <p><span class="p-slider__sub-name">内容</span><br>
                                                自分のポートフォリオサイト</p>
                                            <p><span class="p-slider__sub-name">機能</span><br>
                                                CSS設計にFLOCSSを使用<br>
                                                transitionなどでリッチなアニメーション機能を実装、レスポンシブ対応。Sassを使用し、パッケージ管理にyarnを採用することで保守性を意識しながらの開発を学べた</p>
                                            <p><span class="p-slider__sub-name">使用言語</span><br>
                                            HTML,CSS,php,js,Sass</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- コンタクトセクション -->
            <section id="contact" class="u-color-bg">
                <div class="l-container u-px0">
                    <h2 class="c-title">CONTACT</h2>
                    <div class="l-container__body p-contact">
                        <p class="p-contact__msg">何かありましたら<br>お気軽にご連絡ください！</p>
                        <form method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfX3X3-Mjlj4lO0ec3xohc18mwQc9H0PInvkqlNSW76MFSBTw/formResponse" class="p-contact__form">
                            <!-- 名前 -->
                            <input type="text" class="p-contact__input js-input" name="entry.2005620554" placeholder="お名前（必須）" value="<?php if(!empty($clean['name'])) echo $clean['name']; ?>" required>
                            <!-- メール -->
                            <input type="email" class="p-contact__input js-input" name="entry.1045781291" placeholder="email（必須）" value="<?php if(!empty($clean['email'])) echo $clean['email']; ?>"  required>
                            <!-- お問い合わせ内容 -->
                            <textarea class="p-contact__input p-contact__textarea js-input" name="entry.839337160" placeholder="お問い合わせ内容（必須）" value="<?php if(!empty($clean['comment'])) echo $clean['comment']; ?>"  required></textarea>
                            <!-- 送信 -->
                            <button type="submit" class="c-btn c-btn__l js-form-submit" name="submit">送信</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <section class="l-footer u-flex">
                <p>©︎Copyright Tsuyoshi  <br>2020 All Right Reserved</p>
            </section>
        </footer>
<!-- jQuery -->
<script src="./js/jQuery-3.5.1.min.js" defer></script>
<!-- slick.js -->
<script src="./slick/slick.min.js" defer></script>
<!-- JavaScript -->
<script src="js/app.js" defer></script>

    </body>
</html>