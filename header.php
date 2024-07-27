<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/base.css">
    <title>掲示板</title>
</head>
<body>
    <header>
        <h1>掲示板</h1>
        <!-- ハンバーガーメニュー部分 -->
        <div class="p-header__hamburger">
            <button class="c-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- ハンバーガーメニュー部分ここまで -->
        <!-- ナビのメニュー -->
        <nav class="p-header__nav p-nav" id="js-nav">
            <?php session_start(); ?>
            <?php
            if(isset($_SESSION['user'])) {
                echo '<p>'.$_SESSION['user']['hundle_name'].'さん</p>';
                echo '<div class="p-nav__inner">';
                echo '<ul class="p-nav__list">';
                echo '<li class="p-nav__item">';
                echo '<a href="logout-input.php" class="p-nav__link">ログアウト</a>';
                echo '</li>';
                echo '<li class="p-nav__item">';
                echo '<a href="user-input.php" class="p-nav__link">アカウント情報編集</a>';
                echo '</li>';
                echo '<li class="p-nav__item">';
                echo '<a href="bulletin-board.php" class="p-nav__link">掲示板</a>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
            } else {
                echo '<div class="p-nav__inner">';
                echo '<ul class="p-nav__list">';
                echo '<li class="p-nav__item">';
                echo '<a href="login.php" class="p-nav__link">ログイン</a>';
                echo '</li>';
                echo '<li class="p-nav__item">';
                echo '<a href="user-input.php" class="p-nav__link">新規登録</a>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
            }
            ?>
        </nav>
        <!-- ナビのメニューここまで -->
    </header>