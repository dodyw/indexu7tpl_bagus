<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php print html_head("title"); ?></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="<?php print html_head("meta_keywords"); ?>" />
  <meta name="description" content="<?php print html_head("meta_description"); ?>" />

  <!-- js -->
  
  <script type="text/javascript" src="<?php print URL; ?>lib/js/jquery.js"></script>

  <?php print html_head("css"); ?>
  <?php print html_head("js"); ?>
  <?php print html_head("custom"); ?>

  <?php include TPL_PATH."indexu.js.php"; ?>

  <!-- Google Webfonts -->
  <link href="http://fonts.googleapis.com/css?family=Droid+Sans:r,b" rel="stylesheet" type="text/css" />

  <!-- css -->

  <link href="<?php print TPL_URL; ?>style.css" rel="stylesheet" type="text/css" />
  <link href="<?php print TPL_URL; ?>css/effects.css" rel="stylesheet" type="text/css" />
  <link href="<?php print TPL_URL; ?>functions/css/shortcodes.css" rel="stylesheet" type="text/css" />

  <!-- enable one of the following css for skin selection -->

  <link href="<?php print TPL_URL; ?>styles/default.css" rel="stylesheet" type="text/css" />
  <!-- <link href="<?php print TPL_URL; ?>styles/green.css" rel="stylesheet" type="text/css" /> -->
  <!-- <link href="<?php print TPL_URL; ?>styles/lime.css" rel="stylesheet" type="text/css" /> -->
  <!-- <link href="<?php print TPL_URL; ?>styles/purple.css" rel="stylesheet" type="text/css" /> -->

  <link href="<?php print TPL_URL; ?>indexu.css" rel="stylesheet" type="text/css" />
  <link href="<?php print TPL_URL; ?>custom.css" rel="stylesheet" type="text/css" />



  <!-- google one plus -->
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

  <base href="<?php print URL; ?>" />
</head>

<?php if (SCRIPT_ID=='detail') : ?>
  <body onload="initialize()" class="home blog logged-in admin-bar layout-left-content theme-woostore gecko layout-left-content">
<?php else : ?>
  <body class="home blog logged-in admin-bar layout-left-content theme-woostore gecko layout-left-content">
<?php endif; ?>

<?php
  if ($lep->config['facebook_enable']) $fb->loadJsSDK();
?>

<body >

<div id="wrapper">

  <div id="header" class="col-full">
    <div id="logo" class="col-left">
      <a href="<?php print URL ?>" title="<?php print DIR_NAME; ?>">
        <img src="<?php print TPL_URL; ?>images/logo.png" alt="<?php print DIR_NAME; ?>" />
      </a>
      <h1 class="site-title"><a href="<?php print URL; ?>"><?php print DIR_NAME; ?></a></h1>
      <span class="site-description"><?php print DIR_NAME; ?></span>
    </div><!-- /#logo -->

    <div id="navigation" class="col-right">
      <?php print html_content("menu1"); ?>
    </div><!-- /#navigation -->
  </div><!-- /#header -->

