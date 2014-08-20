<!DOCTYPE html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <title><?php print $head_title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans' rel='stylesheet' type='text/css'>
    <?php print $head; ?>
    <?php print $styles; ?>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=687218857985229";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    </div>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $scripts; ?>
    <?php print $page_bottom; ?>
  </body>
</html>
