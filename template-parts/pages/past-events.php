<?php if ($group && $group[0] === 'past-events'): ?>
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

  <section class="gallery">
    <div class="wrapper">
      <div class="gallery__controls">
        <ul class="gallery__list">
          <li class="gallery__item item__lr2016 active"><a href="#">LR2016</a></li>
          <li class="gallery__item item__lr2015"><a href="#">LR2015</a></li>
          <li class="gallery__item item__lr2013"><a href="#">LR2013</a></li>
          <li class="gallery__item item__ic2013"><a href="#">IC2013</a></li>
          <li class="gallery__item item__lr2012"><a href="#">LR2012</a></li>
          <li class="gallery__item item__lr2011"><a href="#">LR2011</a></li>
          <li class="gallery__item item__lr2010"><a href="#">LR2010</a></li>
        </ul>
      </div>
      <div class="gallery__images">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php endif; ?>