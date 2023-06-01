<?php

$columns = get_field('column');
$design = get_field('design');

$background_color = null;
$background_image = null;
$background_image_position = null;
$notch_corners = null;

if ($design) {
  $background_color = $design['background_color'];
  $background_image = $design['background_image'];
  $background_image_position = $design['background_image_position'];
  $notch_corners = $design['notch_corners'];
}

$possible_bg_classes = 'bg-tbf-pastel-gray';
?>

<section class="columns block-columns">
  <div class="container mx-auto relative">

    <div class=" relative overflow-hidden <?php echo 'bg-tbf-' . $background_color; ?> <?php echo !is_null($notch_corners) && $notch_corners == 'all' ? 'nothed-corner-all' : ''; ?>">
      <?php if (isset($background_image) && !is_null($background_image)) : ?>
        <div class="absolute top-0 bottom-0 right-0 w-full lg:w-6/12 opacity-10 bg-cover bg-no-repeat bg-right z-0" style="background-image: url('<?php echo wp_get_attachment_url($background_image); ?>');"></div>
      <?php endif; ?>

      <div class="flex flex-col lg:flex-row gap-12 lg:gap-32 py-10 lg:pt-20 lg:pb-16 xl:pt-16 xl:pb-20 px-12 lg:px-10 relative z-10">

        <?php if (isset($columns) && is_array($columns)) : ?>
          <?php
          foreach ($columns as $column) :
            $column_content = $column['column_content'];
            $content_blocks = $column_content['content_flex'];

            $column_width = $column['column_width'];
            $column_width_desktop = $column_width['desktop'];
            $column_width_mobile = $column_width['mobile'];

            $possible_widths = 'w-full w-1/12 w-2/12 w-3/12 w-4/12 w-5/12 w-6/12 w-7/12 w-8/12 w-9/12 w-10/12 w-11/12 w-11/12 w-12/12';
            $possible_widths = 'lg:w-full lg:w-1/12 lg:w-2/12 lg:w-3/12 lg:w-4/12 lg:w-5/12 lg:w-6/12 lg:w-7/12 lg:w-8/12 lg:w-9/12 lg:w-10/12 lg:w-11/12 lg:w-11/12 lg:w-12/12';

            $column_width_classes = '';
            if ($column_width_mobile) {
              if ($column_width_mobile == '12') {
                $column_width_classes .= ' w-full';
              } else {
                $column_width_classes .= ' w-' . $column_width_desktop . '/12';
              }
            } else {
              $column_width_classes .= ' w-full';
            }

            if ($column_width_desktop) {
              if ($column_width_desktop == '12') {
                $column_width_classes .= ' lg:w-full';
              } else {
                $column_width_classes .= ' lg:w-' . $column_width_desktop . '/12';
              }
            }
          ?>

            <div class="column <?php echo $column_width_classes; ?>">
              <?php
              foreach ($content_blocks as $content_block) :
                $content_layout = $content_block['acf_fc_layout'];
              ?>


                <?php
                /** TEXT BLOCK: */
                if ($content_layout == 'text') :
                  $content = $content_block['content'];
                  $large_paragraph_font_size = $content_block['large_paragraph_font_size'];

                  $random_block_id = '' . rand(11, 99) . rand(11, 99) . rand(11, 99) . rand(11, 99) . '';
                ?>
                  <div data-block-id="<?php echo $random_block_id; ?>" class="text-block">
                    <?php echo $content; ?>
                  </div>
                  <?php if ($large_paragraph_font_size) : ?>
                    <style>
                      [data-block-id="<?php echo $random_block_id; ?>"] p {
                        font-size: 1.875rem;
                        line-height: 1.5;
                      }
                    </style>
                  <?php endif; ?>


                <?php
                  /** ICON LIST BLOCK */
                elseif ($content_layout == 'icon_list') :
                  $list_items = $content_block['list_item'];
                ?>
                  <ul class="icon-list">
                    <?php
                    foreach ($list_items as $list_item) :
                      $icon = $list_item['icon'];
                      $text = $list_item['list_text'];
                    ?>
                      <li class="flex flex-row items-center py-6 lg:py-8 border-b-1 border-b-tbf-orange last:border-b-0 first:pt-0 last:pb-0">
                        <div class="w-2/12 md:w-3/12 lg:w-2/12 mr-12 lg:mr-14">
                          <?php echo wp_get_attachment_image($icon, 'full', false, array('class' => 'w-24 h-24 object-contain object-center ')); ?>
                        </div>
                        <h3 class="w-10/12 md:w-7/12 lg:w-10/12 font-liberator text-base font-semibold tracking-tbf" style='line-break: loose;'>
                          <?php echo $text; ?>
                        </h3>
                      </li>
                    <?php endforeach; ?>
                  </ul>


                <?php
                  /** BUTTON GROUP BLOCK */
                elseif ($content_layout == 'button_group') :
                  $buttons = $content_block['button'];
                ?>
                  <?php if (isset($buttons) && is_array($buttons)) : ?>
                    <ul class="button-group flex flex-col xl:flex-row items-center mt-10 gap-6 lg:gap-2">
                      <?php foreach ($buttons as $button) :
                        $link = $button['link'];
                        $style = $button['style'] ?: 'primary';
                        $possible_button_style_class = "btn-primary btn-secondary"
                      ?>
                        <li class="button-item">

                          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-<?php echo $style; ?>">
                            <?php echo $link['title']; ?>
                          </a>

                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                <?php
                  /** BULLET LIST LAYOUT */
                elseif ($content_layout == 'bullet_list') :
                  $list_items = $content_block['list_item'];
                  $list_items = $content_block['list_item'];
                ?>

                  <?php if (isset($list_items) && !is_null($list_items)) : ?>
                    <ul class="bullet-list columns-2">
                      <?php foreach ($list_items as $list_item) : ?>
                        <li class="list-item bullet-highlight font-normal mb-2">
                          <?php echo $list_item['text']; ?>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                  <?php /** UNKNOWN LAYOUT */ ?>
                <?php else : ?>

                  <pre class="prose">
                    <code>
                      <?php var_dump($content_block); ?>
                    </code>
                  </pre>
                <?php endif; ?>

              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <?php
      /**
       * <pre class="prose">
       *   <code>
       *     <?php var_dump($columns); ?>
       *   </code>
       * </pre>
       */
      ?>

    </div>

  </div>
</section>