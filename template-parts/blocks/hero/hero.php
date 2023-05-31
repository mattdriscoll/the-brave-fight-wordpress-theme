<?php

// $heading = "I am the hero";
$hero_content = get_field('hero_content');
$heading = $hero_content['heading'];
$background_image = $hero_content['background_image'];
?>

<div class="hero block-hero py-20">
  <div class="container mx-auto relative">
    <?php
    /**
     * <div class="absolute bg-cover bg-no-repeat bg-top -z-10 top-3 bottom-3 sm:top-12 sm:bottom-12 md:top-16 md:bottom-16 lg:top-20 lg:bottom-20 xl:top-28 xl:bottom-28 left-20 right-20 opacity-20" <?php if (isset($background_image)) : ?>style="background-image: url('<?php echo wp_get_attachment_url($background_image); ?>');" <?php endif; ?>>
     * </div>
     */
    ?>
    <?php echo wp_get_attachment_image($background_image, 'full', false, array('class' => 'absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover object-center opacity-20 z-0')); ?>

    <h1 class="text-center relative z-10"><?php echo $heading; ?></h1>

  </div>
</div>