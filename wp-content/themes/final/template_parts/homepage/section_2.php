<?php $text = get_sub_field('description'); ?>
<?php $link = get_sub_field('link'); ?>
<?php $video = get_sub_field('video'); ?>

<section class="home_section_2">

  <div class="content_gorizontal">
    <?php if (!empty($text)): ?>
      <div class="top-description">
        <?php print $text; ?>
      </div>
    <?php endif; ?>

    <div>
      <?php if (!empty($link)): ?>
      <a href="<?php echo $video['url']; ?>" class="btn"> <?php echo $link['title']; ?>
        <?php endif; ?>
      </a>
    </div>
  </div>

</section>