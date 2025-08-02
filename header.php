<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title):'トップページ';?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="site_logo">
            <img src="./image/logo.png" alt="サイトロゴ" class="logo">
        </div>
        <nav>
            <div class="menu-icon" id="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="menu" id="menu">
                <li><a href="#schedule">スケジュール</a></li>
                <li><a href="#access">アクセス</a></li>
                <li><a href="#reserve">席予約</a></li>
            </ul>
        </nav>
    </header>
    <main>