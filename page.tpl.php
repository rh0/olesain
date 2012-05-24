<div id="center-col">
  <!--  Main Content Container -->
  <div id="main-wrap">
    <div class="content-wrap">
      <?php if($messages){ print render($messages); } ?>
      <?php print render($page['content']); ?>
    </div>
  </div>
</div>
<!-- Header -->
<div id="meta-header" class="clearfix">
  <div class="header-content">
    <h1 class="logo"><a href="/">
      <span class="name">Ryan Oles</span>
      <span class="name site-name">the<span class="color-orng">oles</span>chool.com</span>
    </a></h1>
    <?php if($tabs){ print render($tabs); } ?>
    <!-- Navigation -->
    <?php if ($main_menu): ?>
      <div id="main-menu" class="top-nav clearfix">
        <?php print $main_menu; ?>
      </div>
    <?php endif; ?>
  </div>
</div>