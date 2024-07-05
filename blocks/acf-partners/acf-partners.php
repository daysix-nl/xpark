<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- PARTNERS -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="md:hidden element-fade-in">
         <div class="swiper mySwiperPartners grow-item">
            <div class="swiper-wrapper">
               <?php
               if( have_rows('partners') ):
                  while( have_rows('partners') ) : the_row(); ?>
                  <?php
                  $image = get_sub_field('afbeelding');
                  $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                  $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                  ?>
                    <div class="swiper-slide w-[289px] h-[204px] border-[1px] border-[#E9EAE8] rounded-[7px] flex justify-center items-center">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-partner">
                     </div>
                  <?php
                  endwhile;
               else :
               endif;
               ?>
            </div>
         </div>
   </div>
   <div class="container grid grid-cols-1 lg:grid-cols-2">
      <div class="hidden md:block">
         <div class="w-full lg:w-[509px] xl:w-[512px] grid grid-cols-1 md:grid-cols-2 gap-[15px] element-fade-in">
            <?php
            if( have_rows('partners') ):
               while( have_rows('partners') ) : the_row(); ?>
                  <?php
                  $image = get_sub_field('afbeelding');
                  $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                  $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                  ?>
                   <div class="h-[204px] md:h-[208px] lg:h-[151px] xl:h-[152px] w-full border-[1px] border-[#E9EAE8] rounded-[7px] fade-item flex justify-center items-center">
                     <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-partner">
                  </div>
               <?php
               endwhile;
            else :
            endif;
            ?>
         </div>
      </div>
      
      <div class="mt-[40px] md:mt-[40px] lg:mt-[unset]">
         <div class="grid gap-[10px] xl:gap-[15px] mt-[15px]">
            <?php
            if( have_rows('bullets') ):
               while( have_rows('bullets') ) : the_row(); ?>
                   <div class="flex">
                     <div class="w-[21px] h-[21px] mr-[30px] mt-[5px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                           <g id="Group_1912" data-name="Group 1912" transform="translate(-704 -4926)">
                              <g id="Group_1911" data-name="Group 1911">
                                 <circle id="Ellipse_25" data-name="Ellipse 25" cx="10.5" cy="10.5" r="10.5" transform="translate(704 4926)" fill="#ff6441"/>
                                 <circle id="Ellipse_46" data-name="Ellipse 46" cx="8.5" cy="8.5" r="8.5" transform="translate(706 4928)" fill="#ff6441"/>
                              </g>
                              <path id="Path_755" data-name="Path 755" d="M5.876,0,2.251,4.191,5.868,8.381H3.617L0,4.191,3.617,0Z" transform="translate(718.26 4940.691) rotate(180)" fill="#fff"/>
                           </g>
                        </svg>
                     </div>
                     <div class="">
                        <p class="text-17 leading-25 lg:text-15 lg:leading-22 xl:text-17 xl:leading-32 font-bold"><?php echo get_sub_field('bullet_titel');?></p>
                        <p class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-28 text-[#818181]"><?php echo get_sub_field('bullet_tekst');?></p>
                     </div>
                  </div>
               <?php
               endwhile;
            else :
            endif;
            ?>
         </div>    
      </div>
   </div>
</section>

<?php endif; ?>
