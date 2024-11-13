<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>あの学習サイト。</title>
    <meta name="description" content="中学生向けの内容を扱った学習サイトです。">
    <?php wp_head(); ?> 
</head>
<body>


<header>
    <div class="header-container">
        <div class="site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="あの学習サイト。タイトルロゴ">
        </div>
        <input type="checkbox" class="hidden" id="menu">
        <label for="menu" class="open"><i class="bi bi-list"></i></label>
        <nav id="nav">
            <label for="menu" class="close"><i class="bi bi-x-lg"></i></label>
            <ul class="sp-menu">
             <li><a href="" class="ikon"><i class="bi bi-search"></i></a></li>
             <li><a href="<?php echo esc_url(home_url('/kokugo')); ?>" class="sub1">国語</a></li>
             <li><a href="subject2.html" class="sub2">数学</a></li>
             <li><a href="subject2.html" class="sub3">理科</a></li>
             <li><a href="subject2.html" class="sub4">社会</a></li>
             <li><a href="subject2.html" class="sub5">英語</a></li>
             <li><a href="subject2.html" class="sub6">テスト対策</a></li>
            </ul>
        </nav>
    </div>
</header>
 
