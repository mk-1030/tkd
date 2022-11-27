<!DOCTYPE html>
<html lang="ja">
<head>

<?php
    $url = (empty($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $root = (empty($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];
?>

<title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?><?php is_front_page() ? bloginfo('description') : ''; ?></title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<meta name="description" content="">
<meta name="google" content="nositelinkssearchbox">
<meta name="format-detection" content="email=no,telephone=no,address=no">

<!-- favicon -->

<?php wp_head();?>

</head>
<body <?php body_class(); ?>>
