<?php if ($group && $group[0] === 'about'): ?>
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

  <?php if (get_field('about_young_muslim_service')): ?>
    <section class="about__yms">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <?php if (get_field('about_young_muslim_service_title')) { ?>
            <h2><?php the_field('about_young_muslim_service_title'); ?></h2>
          <?php } else { ?>
            <h2>Young Muslim Service</h2>
          <?php } ?>
        </div>
        <div class="section-content">
          <?php the_field('about_young_muslim_service'); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if (get_field('about_guiding_principles')): ?>
    <section class="about__guiding-principles">
      <div class="wrapper">
        <div class="section-heading heading--underline">
          <?php if (get_field('about_guiding_principles_title')) { ?>
            <h2><?php the_field('about_guiding_principles_title'); ?></h2>
          <?php } else { ?>
            <h2>Guiding Principles</h2>
          <?php } ?>
        </div>
        <div class="section-content">
          <?php the_field('about_guiding_principles'); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>