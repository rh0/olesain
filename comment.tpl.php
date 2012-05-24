<div class="<?php print $classes . ' ' . $zebra; ?>"<?php print $attributes; ?>>

  <div class="clearfix">
    <span class="meta clearfix">
      <div class="author"><?php print $author; ?></div>
      <div class="created"><?php print($created_date); ?></div>
      <div class="created"><?php print($created_time); ?></div>
      <?php if ($new) : ?>
        <span class="new"><?php print drupal_ucfirst($new) ?></span>
      <?php endif; ?>
    </span>
    <?php print render($title_prefix); ?>
    <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
    <?php print render($title_suffix); ?>

    <div class="content"<?php print $content_attributes; ?>>
      <?php hide($content['links']); print render($content); ?>
      <?php if ($signature): ?>
      <div class="clearfix">
        <div>—</div>
        <?php print $signature ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="meta clearfix">
    <?php print render($content['links']) ?>
  </div>
</div>
