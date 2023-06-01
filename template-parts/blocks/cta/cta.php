<?php

$content = get_field('content');
$design = get_field('design');

$heading = $content['heading'];
$buttons = $content['buttons'];

$background_image = $design['background_image'] ?: 115;

?>

<section class="cta block-cta my-16 lg:my-24">
  <div class="container mx-auto relative">

    <div class="flex flex-col lg:flex-row gap-12 lg:gap-32 py-10 lg:pt-20 lg:pb-16 xl:py-24 px-12 lg:px-16 relative z-10 nothed-corner-all bg-cover bg-no-repeat bg-center bg-blend-darken text-tbf-white " style="background-image: url('<?php echo wp_get_attachment_url($background_image) ?>');">

      <div class="bg-overlay absolute inset-0 bg-black bg-opacity-40 z-0 pointer-events-none"></div>

      <div class="w-full lg:w-6/12 flex items-center relative z-10">

        <?php if ($heading) : ?>
          <h2 class="font-erbaum text-3xl leading-[1.7]"><?php echo $heading ?></h2>
        <?php endif; ?>

      </div>


      <div class="w-full lg:w-6/12 flex flex-col justify-center items-center gap-6 relative z-10">
        <?php if (is_array($buttons)) : ?>
          <?php
          foreach ($buttons as $button) :

            $button_link = $button['link'];
            $button_style = $button['style'];

            $possible_button_styles = 'btn-primary btn-secondary'
          ?>
            <a href="<?php echo $button_link['url'] ?>" target="<?php echo $button_link['target']; ?>" class="btn btn-white <?php echo 'btn-' . $button_style; ?>"><?php echo $button_link['title']; ?></a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

    </div>

  </div>
</section>