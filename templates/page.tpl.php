<div class="wrap">
  <header id="header">
    <div class="container">
      <?php if (!empty($page['header'])): ?>
        <?php print render($page['header']); ?>
      <?php endif; ?>
    </div>
  </header>

  <?php if (!empty($page['preface'])): ?>
    <div id="preface" class="preface">
      <div class="container">
        <?php print render($page['preface']); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="main-container container">
    <div class="row">

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <section<?php print $content_column_class; ?>>
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        <a id="main-content"></a>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($page['help'])): ?>
          <?php print render($page['help']); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </section>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>

    </div>
  </div>
  <div class="push"></div>
</div>
<?php if (!empty($page['footer'])): ?>
  <footer class="footer">
    <div class="container">
      <?php print render($page['footer']); ?>
    </div>
  </footer>
<?php endif; ?>
