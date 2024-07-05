<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- SUBTITEL 2 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container">
      <div class="w-full">
         <hr class="border-[2px] border-[#000] mb-[20px] w-[275px] md:w-[275px] lg:w-[323px] xl:w-[357px]">
         <h2 class="text-22 leading-32 md:text-22 md:leading-32 lg:text-22 lg:leading-32 xl:text-20 xl:leading-30 font-bold"><?php echo get_field('titel');?></h2>
         <div class="hidden md:block lg:hidden">
            <h3 class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-bold mt-[40px]">Omschrijving</h3>
            <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30"><?php echo get_field('omschrijving_intro');?></p>
         </div>
      </div>
   </div>
   <div class="container grid grid-cols-1 md:grid-cols-2 mt-[30px] xl:mt-[50px] h-fit">
      <div class="text-editor w-[360px] md:w-[336px] lg:w-[474px] xl:w-[569px] h-fit">
         <div class="block md:hidden lg:block h-fit">
            <div class="text-editor">
               <h3 class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-bold">Omschrijving</h3>
               <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30"><?php echo get_field('omschrijving_intro');?></p>
            </div>
         </div>
         <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 hidden md:block h-fit"><?php echo get_field('omschrijving_tekst');?></p>
         <button data-vacature-id="<?php echo get_field('titel');?>" class="open-form text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#FF6441] items-center mt-[12px] hidden md:flex h-fit">Reageer
            <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
               <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)" fill="#FF6441"/>
            </svg>
         </button>
      </div>
      <div class="text-editor w-[360px] md:w-[336px] lg:w-[474px] xl:w-[569px] h-fit">
         <h3 class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-bold hidden md:block"><?php echo get_field('subtitel');?></h3>
         <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 hidden md:block"><?php echo get_field('tekst');?></p>
         <div class="mt-[15px] md:mt-[unset]">
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
      </div>
      <div class="accordion-item mt-[30px] md:hidden"> 
         <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
            <span class="pr-4">Lees meer en reageer</span>
         </button>
         <div class="panel">
            <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                  <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('omschrijving_tekst');?></div>
                  <button data-vacature-id="<?php echo get_field('titel');?>" class="open-form text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#FF6441] items-center mt-[20px] flex h-fit">Reageer
                     <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                        <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)" fill="#FF6441"/>
                     </svg>
                  </button>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
