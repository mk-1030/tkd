<!DOCTYPE html>
<html lang="ja">
<head>

<?php
    $url = (empty($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $root = (empty($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];
?>

<title><?php echo title; ?></title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="description" content="">
<meta name="google" content="nositelinkssearchbox">
<meta name="format-detection" content="email=no,telephone=no,address=no">
<meta name="robots" content="noindex,nofollow">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" integrity="sha512-wbWvHguVvzF+YVRdi8jOHFkXFpg7Pabs9NxwNJjEEOjiaEgjoLn6j5+rPzEqIwIroYUMxQTQahy+te87XQStuA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/assets/css/style.css">
<!--<link rel="stylesheet" href="/assets/css/style.min.css">-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
<script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>

</head>
<body>
