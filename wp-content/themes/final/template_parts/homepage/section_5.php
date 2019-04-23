<?php $main_title = get_sub_field('main_title'); ?>
<?php $image = get_sub_field('image'); ?>

<section class="home_section_5">

  <?php if (!empty($main_title)): ?>
    <div class="dark-h1">
      <?php print $main_title; ?>
    </div>
  <?php endif; ?>

  <div class="owl-carousel owl-theme">
    <?php
    if (have_rows('carousel')):
      while (have_rows('carousel')) : the_row(); ?>
        <?php $image = get_sub_field('image'); ?>
        <div class="item">
          <div class="wrap_carousel">
            <div class="image">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
            </div>

            <div class="dark-h2">
              <?php the_sub_field('title'); ?>
            </div>

            <div class="description">
              <?php the_sub_field('description'); ?>
            </div>
          </div>

        </div>

      <?php endwhile;
    else :
      echo 'no rows found';
    endif; ?>
  </div>


</section>
