<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package yms
 */

?>

<?php
  $group = get_field('group');
  $includes = array(
   'pages/home.php',
   'pages/about.php',
   'pages/retreat.php',
   'pages/past-events.php',
  );

  foreach ($includes as $page) {
    include_once $page;
  }
?>

<?php if (!$group) : ?>
  <section class="hero">
    <div class="wrapper">
      <div class="hero__heading-container">
        <?php if (get_field('page_title')) { ?>
          <h1 class="hero__title"><?php the_field('page_title'); ?></h1>
        <?php } else { ?>
          <?php the_title('<h1 class="hero__title">', '</h1>'); ?>
        <?php } ?>
        <?php if (get_field('page_sub_title')) { ?>
          <h2 class="hero__subtitle"><?php the_field('page_sub_title'); ?></h2>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="wrapper">
      <?php the_content(); ?>
    </div>
  </section>
<?php endif; ?>