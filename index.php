<?php
  if(!defined('_DCHECK')) define('_DCHECK', true);
  include_once 'cache.php';
  include_once 'includes.php';
  require_once 'steamauth/steamauth.php';
?>
<!doctype html>
<!--
 * Rust-Server-Website-Template v2.5 (https://github.com/Mo45/Rust-Server-Website-Template/releases)
 * Copyright 2017-2024 Kirill Krasin
 * Licensed under MIT (https://github.com/Mo45/Rust-Server-Website-Template/blob/master/LICENSE)
-->
<html lang="en">
<head>
<title><?php echo SRV_NAME ;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel='preconnect' href='//fonts.googleapis.com' />
<link rel='preconnect' href='//cdnjs.cloudflare.com' />
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Bootstrap CSS // -->
<meta name="theme-color" content="#c43235">
<meta name="description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="<?php echo SRV_NAME; ?>">
<meta property="og:url" content="<?php echo SITE_URL; ?>" />
<meta property="og:description" content="<?php echo SRV_NAME; ?> &middot; <?php echo SRV_SLOGAN; ?>">
<meta property="og:title" content="<?php echo SRV_NAME; ?>">

<!-- Recomended size for image is 800 x 420 px! -->
<!-- If you want to change favicon or image for social network sharing preview, you need to create at least 2 images with sizes 32x32 and 256x256 pixels -->
<link rel="image_src" href="<?=SITE_URL;?>img/256x256.webp">
<meta property="og:image" content="<?=SITE_URL;?>img/256x256.webp" />
<meta property="og:image:width" content="256" />
<meta property="og:image:height" content="256" />

<meta name="twitter:image" content="<?=SITE_URL;?>img/256x256.webp" />
<meta name="twitter:site" content="@<?php echo SRV_TWITTER; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@Mo_45">

<link rel="icon" href="<?=SITE_URL;?>img/32x32.webp">
<link rel="shortcut icon" href="<?=SITE_URL;?>img/32x32.webp">
<link rel="apple-touch-icon-precomposed" href="<?=SITE_URL;?>img/256x256.webp">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- FontAwesome // -->
<!-- If you want to change main font for your website, you can select one from Google Fonts, and replace Roboto Slab below. Also change font name in css/style.css -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet">
<!-- Core Stylesheet -->
<link rel="stylesheet" href="<?=SITE_URL;?>css/style.css?v=<?php if(DEV_MODE == "ON"){echo rand();}else{echo CSS_VER;};?>">
<!-- Core Stylesheet // -->
</head>
<body>
<?php include_once("template/navbar.php");?>
<?php include_once("template/top.php");?>

<div class="container" data-bs-spy="scroll" data-bs-target="#scroll">
<?php if(MODULE_SERVERS == "ON"){include_once("modules/servers.php");};?>
<?php if(MODULE_COMMUNITY == "ON"){include_once("modules/community.php");};?>
<?php if(MODULE_DISCORD == "ON"){include_once("modules/discord.php");};?>
<?php if(MODULE_STORE == "ON"){include_once("modules/store.php");};?>
<?php if(MODULE_PRICING == "ON"){include_once("modules/pricing.php");};?>
<?php if(MODULE_RULES == "ON"){include_once("modules/rules.php");};?>
<?php if(MODULE_FAQ == "ON"){include_once("modules/faq.php");};?>
<?php if(MODULE_STAFF == "ON"){include_once("modules/staff.php");};?>
<?php if(MODULE_SOCIAL == "ON"){include_once("modules/social.php");};?>
<?php if(MODULE_CONTACT == "ON"){include_once("modules/contact.php");};?>
</div>
<?php include_once("template/footer.php");?>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>
<!-- jQuery // -->
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap JS // -->
<!-- LazyLoad JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.1/lazyload.min.js" integrity="sha512-lVcnjCLGjJTaZU55wD7H3f8SJVi6VV5cQRcmGuYcyIY607N/rzZGEl90lNgsiEhKygATryG/i6e5u2moDFs5kQ==" crossorigin="anonymous"></script>
<!-- LazyLoad JS // -->
<script>$(document).ready(function(){var lazyLoad=new LazyLoad({elements_selector:".lazy",});});</script>
<script>$(function(){$('[data-bs-toggle="tooltip"]').tooltip()});$('.progress-bar').each(function() {var min = $(this).attr('aria-valuemin');var max = $(this).attr('aria-valuemax');var now = $(this).attr('aria-valuenow');var siz = (now-min)*100/(max-min);$(this).css('width', siz+'%');});</script>
</body>
</html>