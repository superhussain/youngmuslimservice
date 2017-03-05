<?php if ($group && $group[0] === 'retreat'): ?>
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
          <a href="<?php echo get_permalink(31); ?>" class="button hero__register-button">Register Today!</a>
        <?php } ?>
      </div>
      <?php if (get_field('retreat_video_code')): ?>
        <div class="hero__video">
          <iframe src="https://www.youtube.com/embed/<?php the_field('retreat_video_code'); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="content">
    <div class="wrapper">
      <?php the_content(); ?>
    </div>
  </section>
<?php endif; ?>