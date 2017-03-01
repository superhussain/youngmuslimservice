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
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">

      <?php if( get_field('hero_title') ): ?>
        <h2><?php the_field('hero_title'); ?></h2>
      <?php endif; ?>

      <h3>Group: NO GROUP</h3>

      <?php the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yms' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
      <?php edit_post_link( esc_html__( 'Edit', 'yms' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
  </article><!-- #post-## -->
<?php endif; ?>