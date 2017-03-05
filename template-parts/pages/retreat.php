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

  <?php if (get_field('retreat_details')): ?>
    <section class="retreat__details">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <?php if (get_field('retreat_details_title')) { ?>
            <h2><?php the_field('retreat_details_title'); ?></h2>
          <?php } else { ?>
            <h2>Details</h2>
          <?php } ?>
        </div>
        <div class="section-content">
          <?php the_field('retreat_details'); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if (get_field('retreat_payment')): ?>
    <section class="retreat__payment">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <?php if (get_field('retreat_payment_title')) { ?>
            <h2><?php the_field('retreat_payment_title'); ?></h2>
          <?php } else { ?>
            <h2>Payments</h2>
          <?php } ?>
        </div>
        <div class="section-content">
          <?php the_field('retreat_payment'); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if (get_field('retreat_faq')): ?>
    <section class="retreat__faq">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <?php if (get_field('retreat_faq_title')) { ?>
            <h2><?php the_field('retreat_faq_title'); ?></h2>
          <?php } else { ?>
            <h2>Frequently Asked Questions</h2>
          <?php } ?>
        </div>
        <div class="section-content">
          <?php the_field('retreat_faq'); ?>
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

  <?php if (get_field('retreat_testimonials_short_code')): ?>
    <section class="testimonials">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <h2>Testimonials</h2>
        </div>
        <div class="section-content">
          <?php
            $testimonials_shortcode = get_field('retreat_testimonials_short_code'); 
            echo do_shortcode($testimonials_shortcode);
          ?>
        </div>
        <div class="section-cta">
          <a href="<?php echo get_permalink(27); ?>" class="button button-cta">Read More</a>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>