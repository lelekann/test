<?php $main_title = get_sub_field('main_title'); ?>
<?php $main_text = get_sub_field('main_description'); ?>
<?php $link = get_sub_field('link'); ?>
<?php $computer_image = get_sub_field('computer_image'); ?>
<?php $button_1 = get_sub_field('text_button_1'); ?>
<?php $button_2 = get_sub_field('text_button_2'); ?>
<?php $button_3 = get_sub_field('text_button_3'); ?>
<?php $button_4 = get_sub_field('text_button_4'); ?>
<?php $text_1 = get_sub_field('discription_1'); ?>
<?php $text_2 = get_sub_field('discription_2'); ?>
<?php $text_3 = get_sub_field('discription_3'); ?>
<?php $text_4 = get_sub_field('discription_4'); ?>
<?php $image_1 = get_sub_field('image_1'); ?>
<?php $image_2 = get_sub_field('image_2'); ?>
<?php $image_3 = get_sub_field('image_3'); ?>
<?php $image_4 = get_sub_field('image_4'); ?>

<section class="home_section_6">

  <?php if (!empty($main_title)): ?>
    <div class="dark-h1">
      <?php print $main_title; ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($main_text)): ?>
    <div class="dark-description">
      <?php print $main_text; ?>
    </div>
  <?php endif; ?>

  <div class="flex_gorizontal">
    <div class="flex_vertical">
      <div class="btn_1">
        <?php if (!empty($button_1)): ?>
        <div class="btn-section btn-active"> <?php echo $button_1; ?>
          <?php endif; ?>
        </div>
      </div>
      <div  class="btn_2">
        <?php if (!empty($button_2)): ?>
        <div class="btn-section"> <?php echo $button_2; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php
    $size = 'full';
    if (!empty($computer_image)): { ?>
      <div class="bg_image">
        <?php echo wp_get_attachment_image($computer_image, $size); ?>
        <div class="images">
          <div class="image_1 image_active">
            <?php if( !empty($image_1) ): ?>
              <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
            <?php endif; ?>
          </div>
          <div  class="image_2">
            <?php if( !empty($image_2) ): ?>
              <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" />
            <?php endif; ?>
          </div>
          <div  class="image_3">
            <?php if( !empty($image_3) ): ?>
              <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" />
            <?php endif; ?>
          </div>
          <div  class="image_4">
            <?php if( !empty($image_4) ): ?>
              <img src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['alt']; ?>" />
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php
    }
    endif; ?>


    <div class="flex_vertical">
      <div  class="btn_3">
        <?php if (!empty($button_3)): ?>
        <div class="btn-section"> <?php echo $button_3; ?>
          <?php endif; ?>
        </div>
      </div>
      <div  class="btn_4">
        <?php if (!empty($button_4)): ?>
        <div class="btn-section"> <?php echo $button_4; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="detail">
    <div class="detail_header dark-h2">
      <div class="header_1 active_head">
        <?php echo $button_1; ?>
      </div>
      <div class="header_2">
        <?php echo $button_2; ?>
      </div>
      <div class="header_3">
        <?php echo $button_3; ?>
      </div>
      <div class="header_4">
        <?php echo $button_4; ?>
      </div>
    </div>
    <div class="detail_content">
        <div class="text_1 active_text">
          <?php print $text_1; ?>
        </div>
      <div class="text_2">
        <?php print $text_2; ?>
      </div>
      <div class="text_3">
        <?php print $text_3; ?>
      </div>
      <div class="text_4">
        <?php print $text_4; ?>
      </div>
    </div>
  </div>
  <div>
    <?php if (!empty($link)): ?>
    <a href="<?php echo $link['url']; ?>" class="btn"> <?php echo $link['title']; ?>
      <?php endif; ?>
    </a>
  </div>


</section>