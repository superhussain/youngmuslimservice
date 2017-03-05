<?php if ($group && $group[0] === 'home'): ?>
  <section class="hero">
    <div class="hero__backgrounds">
      <?php for($i = 1; $i < 5; ++$i) { ?>
        <?php 
          $image = get_field('home_hero_background_'.$i);
          if (!empty($image)): ?>
            <img src="<?php echo $image['url']; ?>" class="<?php echo ($i === 1) ? 'shown' : ''; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      <?php } ?>
    </div>
    <div class="wrapper">
      <div class="hero__heading-container">
        <?php if (get_field('home_hero_title')) { ?>
          <h1 class="hero__title"><?php the_field('home_hero_title'); ?></h1>
        <?php } else { ?>
          <?php the_title('<h1 class="hero__title">', '</h1>'); ?>
        <?php } ?>
        <?php for($i = 1; $i < 5; ++$i) { ?>
          <?php if (get_field('home_hero_rotating_text_'.$i)): ?>
            <h2 class="hero__subtitle <?php echo ($i === 1) ? 'shown' : ''; ?>"><?php the_field('home_hero_rotating_text_'.$i); ?></h2>
          <?php endif; ?>
        <?php }?>
      </div>
    </div>
  </section>

  <?php if (get_field('home_about_us_lite')): ?>
    <section class="about">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <h2>About Us</h2>
        </div>
        <div class="section-content">
          <?php the_field('home_about_us_lite'); ?>
        </div>
        <div class="section-cta">
          <a href="<?php echo get_permalink(23); ?>" class="button button-cta">Learn More</a>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if (get_field('home_leadership_retreat_lite')): ?>
    <section class="retreat">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <h2>Leadership Retreat</h2>
        </div>
        <div class="section-content">
          <div class="retreat__copy">
            <?php the_field('home_leadership_retreat_lite'); ?>
          </div>
          <?php if (get_field('home_video_code')): ?>
            <div class="retreat__video">
              <iframe src="https://www.youtube.com/embed/<?php the_field('home_video_code'); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          <?php endif; ?>
        </div>
        <div class="section-cta">
          <a href="<?php echo get_permalink(25); ?>" class="button button-cta">Learn More</a>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="register-cta">
    <div class="wrapper">
      <div class="section-content">
        <a href="<?php echo get_permalink(31); ?>" class="button register__button">Register Today!</a>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="wrapper">
      <div class="section-heading heading--underline">
        <h2>Testimonials</h2>
      </div>
      <div class="section-content">
        <?php echo do_shortcode("[hms_testimonials_rotating template='25' seconds='10' show_links='true']"); ?>
      </div>
    </div>
  </section>
<?php endif; ?>