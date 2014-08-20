<?php

/**
 * @file
 * Display Suite 1 column template.
 * Add <div class="content"> wrapper to $ds_content so jquery.biggerlink and
 * contextual links would work together. Otherwise the first link
 * in the container is of contextual link and the handbook will direct to
 * node edit if logged in.
 */
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="content">
    <?php print $ds_content; ?>
  </div>
</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
