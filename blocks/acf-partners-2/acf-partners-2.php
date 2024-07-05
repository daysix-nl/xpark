<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- PARTNERS 2 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container">
      <div class="w-full lg:w-[881px] xl:w-[998px]">
         <h2 class="text-28 leading-35 md:text-40 md:leading-50 lg:text-36 lg:leading-46 xl:text-40 xl:leading-50 font-semibold text-[#202624]"><?php echo get_field('titel');?></h2>
         <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 mt-[15px] lg:mt-[25px]"><?php echo get_field('tekst');?></p>
      </div>
      <div class="lg:flex lg:flex-wrap lg:space-y-[15px] lg:justify-between lg:pl-[30px] lg:pr-[30px] xl:pl-[20px xl:pr-[45px] mt-[30px] md:mt-[35px] lg:mt-[45px] xl:mt-[45px]">
         <?php
         if( have_rows('bullets') ):
            while( have_rows('bullets') ) : the_row(); ?>
               <div class="w-full lg:w-[480px] xl:w-[546px]">
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
                        <p class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-28"><?php echo get_sub_field('bullet_tekst');?></p>
                     </div>
                  </div>
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
      </div>
      <div class="w-full lg:pl-[30px] lg:pr-[30px] xl:pl-[20px xl:pr-[45px] grid grid-cols-2 md:grid-cols-4 gap-[10px] md:gap-[15px] xl:gap-[20px] element-fade-in mt-[40px] md:mt-[40px] lg:mt-[60px] xl:mt-[70px]">
         <?php
         if( have_rows('partners') ):
            while( have_rows('partners') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
            <div class="h-[107px] md:h-[102px] lg:h-[154px] xl:h-[174px] rounded-[7px] bg-[#F8F8F8] border-[1px] border-[#E9EAE8] grow-item flex justify-center items-center">
               <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-partner">
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
