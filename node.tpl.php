<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <?php if($display_submitted): ?>
    <div class="meta clearfix">
      <div class="auth"><?php print date('F j, Y',$created); ?></div>
      <div class="created"><?php print date('g:ia',$created); ?></div>
    </div>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php
    if(!$page) {
      print '<h2 class="node-title"><a href="'.$node_url.'">'.$title.'</a></h2>';
    }
    else {
      print '<h2 class="node-title">'.$title.'</h2>';
    }
  ?>
  <?php print render($title_suffix); ?>
  <div class="tags clearfix"><?php print render($content['field_blog_tags']); ?></div>

  <?php hide($content['comments']); ?>
  <?php hide($content['field_tags']); ?>
  <?php hide($content['links']); ?>
  <?php print render($content); ?>

  <?php show($content['links']); ?>
  <div class="meta clearfix">
    <?php print render($content['links']); ?>
  </div>
  <div class="olesain-comments clearfix">
    <?php show($content['comments']); ?>
    <?php print render($content['comments']); ?>
  </div>
</div>