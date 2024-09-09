<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CARDS 2 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container lg:flex lg:justify-between">
      <div class="w-full lg:w-[360px] xl:w-[400px]">
         <h2 class="text-28 leading-35 md:text-40 md:leading-49 lg:text-36 lg:leading-50 xl:text-40 xl:leading-50 font-semibold"><?php echo get_field('titel');?></h2>
         <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 mt-[20px] md:mt-[25px] xl:mt-[35px]"><?php echo get_field('tekst');?></p>
      </div>
      <div class="hidden w-full lg:w-[671px] xl:w-[763px]  md:grid md:grid-cols-3 md:gap-[20px] mt-[30px] lg:mt-[unset] element-fade-in">
         <?php
         if( have_rows('cards') ):
            while( have_rows('cards') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="bg-[#9EAE8A] rounded-[8px] px-[20px] pb-[25px] pt-[40px] fade-item">
                  <div class="h-[47px] flex items-end">
                     <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                  </div>
                  <h3 class="text-20 leading-20 md:text-22 md:leading-22 xl:text-24 xl:leading-24 tracking-[0.01em] font-bold text-[#000000] mt-[15px]"><?php echo get_sub_field('titel');?></h3>
                  <p class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-25 mt-[15px]"><?php echo get_sub_field('tekst');?></p>
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
      </div>
   </div>  
   <div class="swiper mySwiperMogelijkheden pl-[calc(50vw-182px)] md:pl-[calc(50vw-354px)] lg:pl-[unset] pr-[25px] md:pr-[25px] lg:pr-[unset] md:hidden mt-[30px]">
      <div class="swiper-wrapper h-full element-fade-in">
         <?php
         if( have_rows('cards') ):
            while( have_rows('cards') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="swiper-slide fade-item w-[300px] bg-[#9EAE8A] rounded-[8px] px-[20px] pb-[25px] pt-[40px]">
                  <div class="h-[47px] flex items-end">
                      <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                  </div>
                  <h3 class="text-20 leading-20 md:text-22 md:leading-22 xl:text-24 xl:leading-24 tracking-[0.01em] font-bold text-[#000000] mt-[15px]"><?php echo get_sub_field('titel');?></h3>
                  <p class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-25 mt-[15px]"><?php echo get_sub_field('tekst');?></p>
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
         
         </div>
      </div> 
</section>
<?php endif; ?>
