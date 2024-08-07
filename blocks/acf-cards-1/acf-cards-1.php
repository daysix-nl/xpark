<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- SLIDER MOGELIJKHEDEN -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="lg:w-[1126px] xl:w-[1264px] mx-auto">
      <div class="swiper mySwiperMogelijkheden pl-[calc(50vw-182px)] md:pl-[calc(50vw-354px)] lg:pl-[unset] pr-[25px] md:pr-[25px] lg:pr-[unset]">
         <div class="swiper-wrapper h-full element-fade-in">
            <?php
            if( have_rows('cards') ):
               while( have_rows('cards') ) : the_row(); ?>
               <?php
               $link = get_sub_field('link');
               $link_url = isset($link['url']) ? esc_url($link['url']) : '';
               $link_text = isset($link['title']) ? esc_html($link['title']) : '';
               $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
               ?>
                  <div class="swiper-slide fade-item w-[345px] md:w-[345px] lg:w-[362px] xl:w-[386px] bg-[#EDF0E1] rounded-[8px] h-auto flex justify-center py-[40px] md:py-[50px] lg:py-[55px] xl:py-[50px]">
                     <div class="w-[275px] md:w-[275px] lg:w-[300px] xl:w-[330px]">
                        <h3 class="text-20 leading-20 md:text-22 md:leading-22 xl:text-24 xl:leading-24 tracking-[0.01em] font-bold text-[#000000]"><?php echo get_sub_field('titel');?></h3>
                        <div class="grid mt-[30px] gap-[8px] xl:gap-[10px]">
                           <?php
                           if( have_rows('bullets') ):
                              while( have_rows('bullets') ) : the_row(); ?>
                                  <div class="flex">
                                    <div class="w-[13px] h-[13px] mr-[15px] mt-[5px]">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                          <g id="Group_1911" data-name="Group 1911" transform="translate(-556 -1459)">
                                             <circle id="Ellipse_191" data-name="Ellipse 191" cx="6.5" cy="6.5" r="6.5" transform="translate(556 1459)" fill="#ff6441"/>
                                             <path id="Path_3969" data-name="Path 3969" d="M4.439,0,1.7,3.2l2.733,3.2h-1.7L0,3.2,2.733,0Z" transform="translate(565.369 1468.705) rotate(180)" fill="#fff"/>
                                          </g>
                                       </svg>
                                    </div>
                                    <div class="">
                                       <p class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-25 font-bold"><?php echo get_sub_field('bullet_titel');?></p>
                                       <p class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-25"><?php echo get_sub_field('bullet_tekst');?></p>
                                    </div>
                                 </div>
                              <?php
                              endwhile;
                           else :
                           endif;
                           ?>
                        </div>
                        <?php if (get_sub_field('link')): ?>   
                        <a href="<?php echo $link_url; ?>" class="text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#000000] flex items-center mt-[30px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?> 
                           <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                              <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)"/>
                           </svg>
                        </a>
                        <?php endif; ?>
                     </div>
                  </div>
               <?php
               endwhile;
            else :
            endif;
            ?>
         </div>
         <div class="swiper-pagination-mogelijkheden"></div>
      </div>
   </div>
</section>

<?php endif; ?>
