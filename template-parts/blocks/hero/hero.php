<?php

// $heading = "I am the hero";
$hero_content = get_field('hero_content');
$body = $hero_content['body'];
$background_image = $hero_content['background_image'];
?>

<section class="hero block-hero">
  <div class="container mx-auto relative">
    <div class="grid grid-cols-1 grid-rows-1 items-center py-16 lg:pt-20 lg:pb-10 xl:pt-28 xl:pb-16">

      <?php echo wp_get_attachment_image($background_image, 'full', false, array('class' => 'col-start-1 col-span-1 row-start-1 row-span-1 opacity-20 aspect-[12_/_5] lg:aspect-[11_/_5] z-0 object-cover object-center py-4 lg:py-8 xl:py-16 px-8 lg:px-12 xl:px-16')); ?>

      <span class="text-center relative z-10 col-start-1 col-span-1 row-start-1 row-span-1"><?php echo $body; ?></span>

    </div>
  </div>
</section>