<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body class="<?php print $body_classes; ?>">

  <!-- Navigation -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
        <?php if ($site_name): ?>
          <a class="brand" href="<?php print $front_page; ?>">
          <?php print $site_name; ?>
          </a>
        <?php endif; ?>
        
        <div class="nav-collapse">
          <?php if (isset($primary_links)) : ?>
            <?php print theme(array('links__system_main_menu', 'links'), $primary_links,
                array(
                  'id' => 'nav',
                  'class' => 'nav',
                ));
              ?>
          <?php endif; ?>
          <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <!-- End navigation -->
  <div class="container">
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>
    <div class="row">
        
      <?php if (!empty($left)): ?>
      <div class="span3">
        <?php print $left; ?>
      </div>
      <?php endif; ?>

      <!--Content Start -->
      <?php if ($left && $right): ?>
      <div class="span6">   
      <?php elseif($left || $right): ?>  
      <div class="span9">
      <?php else: ?>
      <div class="span12">
      <?php endif; ?>
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title ?></h1><?php endif; ?>
        <?php if (!empty($tabs)): ?><div class="tabs-wrapper clearfix"><?php print $tabs; ?></div><?php endif; ?>
        <?php if (!empty($help)): print $help; endif; ?>
        <?php print $content; ?>
      </div>
      <?php if (!empty($right)): ?>
      <div class="span3">
          <?php print $right; ?>
      </div>
      <?php endif; ?>
    </div>

  </div>
</body>
<?php print $closure; ?>
</html>
