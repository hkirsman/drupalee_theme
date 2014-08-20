<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <header>
    <div class="container">
      <div class="masthead clearfix">
        <div class="masthead-brand">
          <?php if ($page['header_left']): ?>
            <?php print render($page['header_left']); ?>
          <?php endif; ?>
        </div>
        <?php if ($page['header_right']): ?>
          <?php print render($page['header_right']); ?>
        <?php endif; ?>
      </div>
    </div>

    <?php if ($page['hero']): ?>
      <?php print render($page['hero']); ?>
    <?php endif; ?>

    <?php if (!drupal_is_front_page()): ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
    <?php endif; ?>
  </header>
  <div class="body">
    <div class="container">
      <?php print render($page['content']); ?>

      <div class="row">
        <div class="col-md-8">
          <h4>Uudised</h4>
          <h2>Drupal 8 ilmub 1. juunil 2018</h2>
          <p><strong><small>23. Mai 2014 &mdash; <a href="#">Drupali uudised</a></small></strong></p>
          <p>The number of attendees at this year DrupalCamp is higher than ever in previous years! We have hit the record already some time ago and the number is rising every day. We are proud that Drupal community is growing and developing so quickly.</p>
          <ul class="news">
            <li><span class="badge">03.04</span> <a href="#">Session schedule is closed</a></li>
            <li><span class="badge">01.04</span> <a href="#">Early Bird tickets are now available!</a></li>
            <li><span class="badge">30.02</span> <a href="#">New sessions are out!</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>Üritused</h4>
          <h2>Hackday, sügis 2014</h2>
          <p>Järgmine kogukonna üritus on plaanis korraldada sügisel. Täpne kuupäev ning temaatika on veel lahtised, kuid kõik ettepanekud on oodatud :)</p>
          <p><a href="#" class="btn btn-default">Loe lähemalt</a></p>
          <div class="supporters">
            <h4>Meie toetajad</h4>
            <div class="vspace"><img src="zonelogo.png" /></div>
          </div>
        </div>
      </div>
    </div>

    <div class="community">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Küsi spetsialistidelt</h3>
            <p>Eesti Drupali kasutajate põhiliseks suhtluskanaliks on <strong>Skype grupp, kuhu kuulub hetkel rohkem kui 50 Drupali kasutajat ja spetsialisti</strong>.</p>
            <p>Kui soovid nõu või abi Drupali kasutamisel või sellele arendamisel, siis jäta meile oma Skype nimi, ning me lisame sind meie gruppi.</p>
            <button type="submit" class="btn btn-default">Liitu Skype grupiga</button>
          </div>
          <div class="col-md-4">
            <h3>Liitu kogukonnaga</h3>
            <p>Drupal.ee on Drupal Estonia MTÜ poolt hallatav Eesti Drupali kogukonna ametlik koduleht, mille kaudu saavad kõik huvilised infot kogukonna tegevuste, ürituste ning oluliste uudiste kohta.</p>
            <p>Drupal.ee kaudu on võimalus astuda ka Drupal Estonia MTÜ liikemks ning Drupali arengule Eestis aktiivselt kaasa aidata.</p>
            <button type="submit" class="btn btn-default">Registreeru</button>
          </div>
          <div class="col-md-4">
            <h3>Liitu meilinglistiga</h3>
            <p>Liitudes meie meilinglistiga püsid alati kursis kõikide oluliste kogukonna üritustest ja sündmustega.</p>
            <form class="form">
              <div class="form-group">
                <input type="text" class="form-control" />
              </div>
              <button type="submit" class="btn btn-default">Liitu meilinglistiga</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="small">
              Drupal on Dries Buytaerti poolt registreeritud kaubamärk.
              <br/>
              <b>Drupal Estonia MTÜ</b>
            </div>
          </div>
          <div class="col-md-4">
            <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com/drupalestonia&amp;send=false&amp;layout=&amp;width=200&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font&amp;" scrolling="no" frameborder="0" allowtransparency="true" style="height: 60px"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
