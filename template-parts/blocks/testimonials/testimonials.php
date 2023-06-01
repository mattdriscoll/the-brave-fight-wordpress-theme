<?php
wp_enqueue_script('splide-script');
wp_enqueue_style('splide-styles');

// $content = get_field('content');
// $design = get_field('design');
$id = 'block-' . $block['id'];

$heading = get_field('heading');
$testimonials = get_field('testimonials');

?>

<section data-block="<?php echo $id; ?>" aria-label=" Testminial Slider" class="testimonials block-testimonials my-20 lg:my-36">
  <div class="container mx-auto relative">

    <div class="splide flex flex-col lg:flex-row gap-4 px-8 lg:px-12 !items-start">

      <div class="testimonial-container bg-tbf-light-taupe px-[1.5%] py-5 flex flex-row lg:flex-col !justify-center !items-start ">

        <ul class="testimonial-nav splide__pagination flex flex-row lg:flex-col !justify-center !items-start "></ul>

      </div>

      <div class="testimonial-contents flex flex-col w-full">
        <div class="heading-container flex border-b-tbf-orange border-b-1">
          <h2 class="w-full lg:w-11/12 lg:ml-auto lg:px-12 font-erbaum text-3xl normal-case"><?php echo $heading; ?></h2>
        </div>

        <?php if (isset($testimonials) && is_array($testimonials)) : ?>
          <div class="slider-container w-full lg:w-11/12 lg:ml-auto lg:px-12 pt-8">
            <div class="splide__track">
              <ul class="testimonial-listing splide__list flex ">
                <?php
                foreach ($testimonials as $testimonial) :
                  $testimonial_body = $testimonial['content'];
                  $testimonial_attribution = $testimonial['attribution'];
                  $testimonial_author = $testimonial_attribution['name'];
                ?>
                  <li class="testimonial-item splide__slide">
                    <?php echo $testimonial_body; ?>

                    <div class="testimonial-attribution mt-8">
                      <p class="text-tbf-light-taupe font-liberator tracking-tbf uppercase"><?php echo $testimonial_author; ?></p>
                    </div>
                  </li>

                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        <?php endif; ?>
      </div>

    </div>

    <?php
    /**
     * <pre class="prose">
     *   <code>
     *     <?php var_dump($heading); ?>
     *   </code>
     * </pre>
     */
    ?>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const testimonialSplide = new Splide('section[data-block="<?php echo $id; ?>"] .splide', {
        perPage: 1,
        perMove: 1,
        arrows: false,
        pagination: true,
      });

      testimonialSplide.on('pagination:mounted', function(data) {
        // You can add your class to the UL element
        data.list.classList.add('splide__pagination--custom');

        // `items` contains all dot items
        data.items.forEach(function(item) {
          item.button.textContent = (item.page + 1).toLocaleString('en-US', {
            minimumIntegerDigits: 2,
            useGrouping: false
          });
        });
      });

      testimonialSplide.mount();

    });
  </script>
</section>