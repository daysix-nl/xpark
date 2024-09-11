<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- CONTENT SLIDER -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container grid grid-cols-1 lg:grid-cols-2">
      <div class="order-2 lg:order-1 mt-[30px] lg:mt-[unset]">
         <div class="w-full lg:w-[493px] xl:w-[554px] h-[294px] md:h-[299px] lg:h-[431px] xl:h-[484px] rounded-[7px] overflow-hidden">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
         </div>
      </div>
      <div class="h-full flex items-center order-1 lg:order-2">
         <div class="">
            <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold mb-[20px]"><?php echo get_field('titel');?></h2>
            <div class="swiper mySwiperContent relative">
               <div class="swiper-wrapper w-[360px] md:w-[708px] lg:w-[531px] xl:w-[595px]">
                     <div class="swiper-slide h-auto bg-white w-full lg:w-[531px] xl:w-[595px]">
                        <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30  w-full lg:w-[531px] xl:w-[595px] mt-[35px] md:mt-[40px] lg:mt-[36px] xl:mt-[40px] pt-[30px]"><?php echo get_field('waysis_tekst');?></p>
                     </div>
                     <div class="swiper-slide h-auto bg-white w-full lg:w-[531px] xl:w-[595px]">
                        <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 w-full lg:w-[531px] xl:w-[595px] mt-[35px] md:mt-[40px] lg:mt-[36px] xl:mt-[40px] pt-[30px]"><?php echo get_field('xpark_tekst');?></p>
                     </div>
                     <div class="swiper-slide h-auto bg-white w-full lg:w-[531px] xl:w-[595px]">
                        <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 w-full lg:w-[531px] xl:w-[595px] mt-[35px] md:mt-[40px] lg:mt-[36px] xl:mt-[40px] pt-[30px]"><?php echo get_field('brickyard_tekst');?></p>
                     </div>
               </div>
               <div class="absolute top-0 left-0 right-0 botton-0 flex justify-between">
                     <div class="w-[360px] md:w-[708px] lg:w-[557px] xl:w-[691px] z-[10] mt-[35px] md:mt-[40px] lg:mt-[36px] xl:mt-[40px]">
                        <div class="w-[360px] md:w-[708px] lg:w-[481px]">
                           <div class="swiper-pagination-content flex justify-between"></div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
