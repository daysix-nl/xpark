<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TESTIMONIALS -->
<section class="start-car-animtion <?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> relative">
   <div class="container mb-[30px] md:mb-[45px] lg:mb-[50px] xl:mb-[50px]">
      <h2 class="text-28 leading-35 md:text-40 md:leading-50 lg:text-36 lg:leading-46 xl:text-40 xl:leading-50 font-semibold text-[#202624]"><?php echo get_field('titel');?></h2>
   </div>

   <div class="swiper mySwiperKlanten mb-[85px] md:mb-[100px] lg:mb-[95px] xl:mb-[100px]">
      <div class="swiper-wrapper pl-[calc(50vw-181.5px)] md:pl-[calc(50vw-354px)] lg:pl-[calc(50vw-563px)] xl:pl-[calc(50vw-632px)] element-fade-in">
         <?php
         if( have_rows('testimonials') ):
            while( have_rows('testimonials') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="swiper-slide w-[330px] md:w-[360px] bg-white grow-item px-[20px] py-[30px] lg:px-[30px] lg:py-[35px] rounded-[10px]">
                  <p class="text-12 leading-20 md:text-12 md:leading-20 lg:text-12 lg:leading-20 xl:text-12 xl:leading-20"><?php echo get_sub_field('tekst');?></p>
                  <div class="flex mt-[20px]">
                     <div class="w-[49px] h-[47px] md:w-[54px] md:h-[52px] mr-[15px] overflow-hidden">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                     </div>
                     <div class="">
                        <h3 class="text-12 leading-17 md:text-14 md:leading-20 lg:text-14 lg:leading-20 xl:text-14 xl:leading-20 font-bold"><?php echo get_sub_field('naam');?></h3>
                        <p class="text-10 leading-17 md:text-12 md:leading-20 lg:text-12 lg:leading-20 xl:text-12 xl:leading-20 text-[#575757]"><?php echo get_sub_field('functie');?></p>
                     </div>
                  </div>
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
      </div>
   </div>

   <div class="relative h-[34px]">
         <img class="absolute w-auto h-[64px] top-[0px] left-[calc(50vw-181.5px)] md:left-[calc(50vw-354px)] lg:left-[calc(50vw-563px)] xl:left-[calc(50vw-632px)] transform -translate-y-1/2 car-animation max-w-none -z-0 mix-blend-darken" src="/wp-content/themes/xpark/img/icon/car.svg" alt="">
   </div>
   

</section>

<?php endif; ?>
