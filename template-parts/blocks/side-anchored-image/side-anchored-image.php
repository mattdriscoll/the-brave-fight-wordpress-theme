<?php

$content = get_field('content');
$design = get_field('design');

$image = $content['image'];


$position = $design['position'];
$anchor_position = $position['anchor_position'];
$vertical_alignment = $position['vertical_alignment'];

// $possible_vertical_align_classes = '-translate-y-[50%] -translate-y-[40%] -translate-y-[30%] -translate-y-[20%] -translate-y-[10%] translate-y-0 translate-y-[10%] translate-y-[20%] translate-y-[30%] translate-y-[40%] translate-y-[50%]';
$vertical_align_class = '';
switch ($vertical_alignment) {
  case '-80%':
    $vertical_align_class = 'lg:-translate-y-[80%]';
    break;
  case '-70%':
    $vertical_align_class = 'lg:-translate-y-[70%]';
    break;
  case '-60%':
    $vertical_align_class = 'lg:-translate-y-[60%]';
    break;
  case '-50%':
    $vertical_align_class = 'lg:-translate-y-[50%]';
    break;
  case '-40%':
    $vertical_align_class = 'lg:-translate-y-[40%]';
    break;
  case '-30%':
    $vertical_align_class = 'lg:-translate-y-[30%]';
    break;
  case '-20%':
    $vertical_align_class = 'lg:-translate-y-[20%]';
    break;
  case '-10%':
    $vertical_align_class = 'lg:-translate-y-[10%]';
    break;
  case '0%':
    $vertical_align_class = 'lg:translate-y-0';
    break;
  case '10%':
    $vertical_align_class = 'lg:translate-y-[10%]';
    break;
  case '20%':
    $vertical_align_class = 'lg:translate-y-[20%]';
    break;
  case '30%':
    $vertical_align_class = 'lg:translate-y-[30%]';
    break;
  case '40%':
    $vertical_align_class = 'lg:translate-y-[40%]';
    break;
  case '50%':
    $vertical_align_class = 'lg:translate-y-[50%]';
    break;
  case '60%':
    $vertical_align_class = 'lg:translate-y-[60%]';
    break;
  case '70%':
    $vertical_align_class = 'lg:translate-y-[70%]';
    break;
  case '80%':
    $vertical_align_class = 'lg:translate-y-[80%]';
    break;
  default:
    $vertical_align_class = 'lg:translate-y-0';
    break;
}


$image_width = $design['image_width'];
$desktop_width = $image_width['desktop'];
$tablet_width = $image_width['tablet'];
$mobile_width = $image_width['mobile'];

$anchor_position_class = '';

switch ($anchor_position) {
  case 'left':
    $anchor_position_class = 'left-0';
    break;
  case 'right':
    $anchor_position_class = 'right-0';
    break;
  default:
    $anchor_position_class = 'left-0';
    break;
}

// $possible_desktop_widths = 'xl:w-1/12 xl:w-2/12 xl:w-3/12 xl:w-4/12 xl:w-5/12 xl:w-6/12 xl:w-7/12 xl:w-8/12 xl:w-9/12 xl:w-10/12 xl:w-11/12 xl:w-12/12 xl:w-full';
// $possible_tablet_widths = 'lg:w-1/12 lg:w-2/12 lg:w-3/12 lg:w-4/12 lg:w-5/12 lg:w-6/12 lg:w-7/12 lg:w-8/12 lg:w-9/12 lg:w-10/12 lg:w-11/12 lg:w-12/12 lg:w-full';
// $possible_mobile_widths = 'w-1/12 w-2/12 w-3/12 w-4/12 w-5/12 w-6/12 w-7/12 w-8/12 w-9/12 w-10/12 w-11/12 w-12/12 w-full';

$desktop_width_class = '';
$tablet_width_class = '';
$mobile_width_class = '';

switch ($desktop_width) {
  case '1':
    $desktop_width_class = 'xl:w-1/12';
    break;
  case '2':
    $desktop_width_class = 'xl:w-2/12';
    break;
  case '3':
    $desktop_width_class = 'xl:w-3/12';
    break;
  case '4':
    $desktop_width_class = 'xl:w-4/12';
    break;
  case '5':
    $desktop_width_class = 'xl:w-5/12';
    break;
  case '6':
    $desktop_width_class = 'xl:w-6/12';
    break;
  case '7':
    $desktop_width_class = 'xl:w-7/12';
    break;
  case '8':
    $desktop_width_class = 'xl:w-8/12';
    break;
  case '9':
    $desktop_width_class = 'xl:w-9/12';
    break;
  case '10':
    $desktop_width_class = 'xl:w-10/12';
    break;
  case '11':
    $desktop_width_class = 'xl:w-11/12';
    break;
  case '12':
    $desktop_width_class = 'xl:w-full';
    break;
}

switch ($tablet_width) {
  case '1':
    $tablet_width_class = 'lg:w-1/12';
    break;
  case '2':
    $tablet_width_class = 'lg:w-2/12';
    break;
  case '3':
    $tablet_width_class = 'lg:w-3/12';
    break;
  case '4':
    $tablet_width_class = 'lg:w-4/12';
    break;
  case '5':
    $tablet_width_class = 'lg:w-5/12';
    break;
  case '6':
    $tablet_width_class = 'lg:w-6/12';
    break;
  case '7':
    $tablet_width_class = 'lg:w-7/12';
    break;
  case '8':
    $tablet_width_class = 'lg:w-8/12';
    break;
  case '9':
    $tablet_width_class = 'lg:w-9/12';
    break;
  case '10':
    $tablet_width_class = 'lg:w-10/12';
    break;
  case '11':
    $tablet_width_class = 'lg:w-11/12';
    break;
  case '12':
    $tablet_width_class = 'lg:w-full';
    break;
}

switch ($mobile_width) {
  case '1':
    $mobile_width_class = 'w-1/12';
    break;
  case '2':
    $mobile_width_class = 'w-2/12';
    break;
  case '3':
    $mobile_width_class = 'w-3/12';
    break;
  case '4':
    $mobile_width_class = 'w-4/12';
    break;
  case '5':
    $mobile_width_class = 'w-5/12';
    break;
  case '6':
    $mobile_width_class = 'w-6/12';
    break;
  case '7':
    $mobile_width_class = 'w-7/12';
    break;
  case '8':
    $mobile_width_class = 'w-8/12';
    break;
  case '9':
    $mobile_width_class = 'w-9/12';
    break;
  case '10':
    $mobile_width_class = 'w-10/12';
    break;
  case '11':
    $mobile_width_class = 'w-11/12';
    break;
  case '12':
    $mobile_width_class = 'w-full';
    break;
}

$image_settings = $design['image_settings'];
$opacity = $image_settings['opacity'];
// $possible_opacity_classes = 'opacity-0 opacity-10 opacity-20 opacity-30 opacity-40 opacity-50 opacity-60 opacity-70 opacity-80 opacity-90 opacity-100';
$opacity_class = '';

switch ($opacity) {
  case '0%':
    $opacity_class = 'opacity-0';
    break;
  case '10%':
    $opacity_class = 'opacity-10';
    break;
  case '20%':
    $opacity_class = 'opacity-20';
    break;
  case '30%':
    $opacity_class = 'opacity-30';
    break;
  case '40%':
    $opacity_class = 'opacity-40';
    break;
  case '50%':
    $opacity_class = 'opacity-50';
    break;
  case '60%':
    $opacity_class = 'opacity-60';
    break;
  case '70%':
    $opacity_class = 'opacity-70';
    break;
  case '80%':
    $opacity_class = 'opacity-80';
    break;
  case '90%':
    $opacity_class = 'opacity-90';
    break;
  case '100%':
    $opacity_class = 'opacity-100';
    break;
}


$image_classes = join(' ', array($anchor_position_class, $vertical_align_class, $mobile_width_class, $tablet_width_class, $desktop_width_class, $opacity_class));


?>

<section class="side-anchored-image block-side-anchored-image ">

  <div class="container relative w-full md:!absolute 2xl:!relative <?php echo $anchor_position_class; ?>">

    <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'absolute h-auto z-0 xl:max-w-4xl ' . $image_classes)); ?>

  </div>

  <?php
  /**
   * <div class="container mx-auto">
   *   <pre class="prose">
   *     <code>
   *       <?php var_dump($design); ?>
   *     </code>
   *   </pre>
   * </div>
   */
  ?>

</section>