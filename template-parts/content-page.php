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
   'pages/home.php'
  );

  foreach ($includes as $page) {
    include_once $page;
  }
?>

<?php if (!$group) : ?>
  <section class="hero">
    <div class="wrapper">
      <div class="hero__heading-container">
        <?php the_title('<h1 class="hero__title">', '</h1>'); ?>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="wrapper">
      <?php the_content(); ?>
    </div>
  </section>
<?php endif; ?>