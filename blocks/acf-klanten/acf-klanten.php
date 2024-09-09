<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
 <!-- KLANTEN SLIDER -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="swiper mySwiperKlanten">
      <div class="swiper-wrapper pl-[calc(50vw-181.5px)] md:pl-[calc(50vw-354px)] lg:pl-[calc(50vw-563px)] xl:pl-[calc(50vw-632px)] element-fade-in">
         <?php
         if( have_rows('klanten') ):
            while( have_rows('klanten') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="swiper-slide h-[91px] w-[160px] md:h-[117px] md:w-[206px] lg:h-[108px] lg:w-[191px] xl:h-[117px] xl:w-[206px] bg-white grow-item flex justify-center items-center">
                  <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-klant">
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
         <?php
         if( have_rows('klanten') ):
            while( have_rows('klanten') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="swiper-slide h-[91px] w-[160px] md:h-[117px] md:w-[206px] lg:h-[108px] lg:w-[191px] xl:h-[117px] xl:w-[206px] bg-white grow-item flex justify-center items-center">
                  <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-klant">
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
         <?php
         if( have_rows('klanten') ):
            while( have_rows('klanten') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="swiper-slide h-[91px] w-[160px] md:h-[117px] md:w-[206px] lg:h-[108px] lg:w-[191px] xl:h-[117px] xl:w-[206px] bg-white grow-item flex justify-center items-center">
                  <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-klant">
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
         <?php
         if( have_rows('klanten') ):
            while( have_rows('klanten') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="swiper-slide h-[91px] w-[160px] md:h-[117px] md:w-[206px] lg:h-[108px] lg:w-[191px] xl:h-[117px] xl:w-[206px] bg-white grow-item flex justify-center items-center">
                  <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-klant">
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
         <?php
         if( have_rows('klanten') ):
            while( have_rows('klanten') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
               <div class="swiper-slide h-[91px] w-[160px] md:h-[117px] md:w-[206px] lg:h-[108px] lg:w-[191px] xl:h-[117px] xl:w-[206px] bg-white grow-item flex justify-center items-center">
                  <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-klant">
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
