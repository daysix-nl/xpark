<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- SLIDER -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container relative element-fade-in">
         <!-- Swiper -->
      <div class="swiper mySwiperWaarom waarom grow-item">
         <div class="swiper-wrapper">
            <?php
            if( have_rows('slider') ):
               while( have_rows('slider') ) : the_row(); ?>
               <?php
               $image = get_sub_field('afbeelding');
               $image_url = isset($image['url']) ? esc_url($image['url']) : '';
               $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
               ?>
                   <div class="swiper-slide grid gap-[15px] md:gap-[unset] md:flex md:justify-between">
                     <div class="h-[459px] w-[363px] md:h-[506px] md:w-[345px] lg:h-[591px] lg:w-[432px] xl:h-[674px] xl:w-[493px] bg-[#64786E] rounded-[8px] order-2 md:order-1">
                        <div class="w-[299px] md:w-[262px] lg:w-[344px] xl:w-[406px] mx-auto pt-[55px] md:pt-[45px] lg:pt-[60px] xl:pt-[70px]">
                           <p class="h-[265px] md:h-[310px] lg:h-[355px] xl:h-[400px] text-17 leading-35 md:text-16 md:leading-32 lg:text-21 lg:leading-42 xl:text-25 xl:leading-50 font-normal"><?php echo get_sub_field('tekst');?></p>
                           <h3 class="mt-[25px] text-18 leading-30 md:text-19 md:leading-27 lg:text-25 lg:leading-35 xl:text-29 xl:leading-41 font-bold"><?php echo get_sub_field('titel');?></h3>
                        </div>
                     </div>
                     <div class="h-[469px] w-[363px] md:h-[506px] md:w-[354px] lg:h-[591px] lg:w-[662px] xl:h-[674px] xl:w-[752px] bg-[#64786E] rounded-[8px] relative order-1 md:order-2 overflow-hidden">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-full min-w-full object-cover object-center">
                        <div class="absolute bottom-0 right-[20px] md:right-[30px] lg:right-0 scale-75 lg:scale-100 origin-bottom-right">
                           <svg xmlns="http://www.w3.org/2000/svg" width="199.395" height="159.614" viewBox="0 0 199.395 159.614">
                              <g id="Group_1912" data-name="Group 1912" transform="translate(-1160.605 -4423.886)">
                                 <path id="Path_622" data-name="Path 622" d="M111.9,0,42.878,79.807l68.881,79.807H68.881L0,79.807,68.881,0Z" transform="translate(1272.502 4583.5) rotate(180)" fill="#fff"/>
                                 <path id="Path_623" data-name="Path 623" d="M111.9,0,42.878,79.807l68.881,79.807H68.881L0,79.807,68.881,0Z" transform="translate(1360 4583.5) rotate(180)" fill="#fff"/>
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
               <?php
               endwhile;
            else :
            endif;
            ?>
         </div>
         
         <div class="swiper-button-next right-[15px] md:right-[30px] lg:right-[35px] xl:right-[40px] top-[calc(234.5px-15px)] md:top-[calc(50%-15px)]">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.307" height="29.307" viewBox="0 0 29.307 29.307">
               <g id="Group_1911" data-name="Group 1911" transform="translate(-666.512 -5573.383)">
                  <ellipse id="Ellipse_25" data-name="Ellipse 25" cx="14.653" cy="14.653" rx="14.653" ry="14.653" transform="translate(666.512 5573.383)"/>
                  <path id="Path_822" data-name="Path 822" d="M8.656,0,3.317,6.249,8.646,12.5H5.329L0,6.249,5.329,0Z" transform="translate(686.633 5594.414) rotate(180)" fill="#fff"/>
               </g>
            </svg>
         </div>
         <div class="swiper-button-prev left-[15px] md:left-[384px] lg:left-[498px] xl:left-[551px] top-[calc(234.5px-15px)] md:top-[calc(50%-15px)]">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.307" height="29.307" viewBox="0 0 29.307 29.307">
            <g id="Group_418" data-name="Group 418" transform="translate(-456.83 -5555.384)">
               <g id="Group_417" data-name="Group 417" transform="translate(486.137 5584.691) rotate(180)">
                  <ellipse id="Ellipse_25" data-name="Ellipse 25" cx="14.653" cy="14.653" rx="14.653" ry="14.653" transform="translate(0 0)"/>
               </g>
               <path id="Path_823" data-name="Path 823" d="M8.656,0,3.317,6.249,8.646,12.5H5.329L0,6.249,5.329,0Z" transform="translate(466.014 5563.664)" fill="#fff"/>
            </g>
            </svg>
         </div>
         <div class="w-[363px] md:w-[345px] lg:w-[432px] xl:w-[493px]">
            <div class="relative w-[299px] md:w-[262px] lg:w-[344px] xl:w-[406px] mx-auto">
               <div class="swiper-pagination absolute text-left flex"></div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php endif; ?>
