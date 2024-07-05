<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER 3 -->
 <section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container flex flex-wrap justify-between mt-[30px] xl:mt-[50px]">
      <div class="w-full md:w-[354px] lg:w-[422px] xl:w-[493px] h-fit">
        <h2 class="text-14 leading-14 md:text-16 md:leading-16 lg:text-16 lg:leading-16 xl:text-18 xl:leading-18 tracking-[0.01em] font-semibold uppercase text-[#FF6441]"><?php echo get_field('klant');?></h2>
        <h1 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold mt-[10px]"><?php the_title();?></h1>
        <h3 class="text-20 leading-35 md:text-22 md:leading-35 lg:text-24 lg:leading-36 xl:text-28 xl:leading-40 font-normal mt-[10px]"><?php echo get_field('subtitel');?></h3>
        <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 mt-[15px] text-editor"><?php echo get_field('tekst');?></div>
      </div>
      <div class="w-full md:w-[339px] lg:w-[631px] xl:w-[718px] relative h-[292px] md:h-[299px] lg:h-[427px] xl:h-[470px] mt-[20px] md:mt-[unset]">
         <div class="absolute top-0 right-0 w-full md:w-[339px] lg:w-[550px] xl:w-[606px] h-[292px] md:h-[299px] lg:h-[365px] xl:h-[402px] rounded-[8px] overflow-hidden">
             <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
         </div>
         <div class="absolute left-0 bottom-0 hidden lg:block lg:w-[396px] xl:w-[436px] bg-[#FF6441] rounded-[11px] lg:pb-[35px]">
            <div class="relative w-full h-full">
              <p class="lg:text-12 lg:leading-20 xl:text-15 xl:leading-25 lg:w-[264px] xl:w-[330px] mx-auto text-center text-white lg:pt-[65px] font-normal">"<?php echo get_field('testimonial');?>"</p>
              <p class="lg:text-10 lg:leading-15 xl:text-13 xl:leading-20 lg:w-[180px] xl:w-[234px] mx-auto text-center font-normal mt-[8px]"><?php echo get_field('naam');?> | <?php echo get_field('functie');?></p>
              <div class="lg:w-[396px] xl:w-[436px] absolute left-0 right-0 top-[-46px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="115.152" height="92.18" viewBox="0 0 115.152 92.18" class="mx-auto">
                  <g id="Group_1919" data-name="Group 1919" transform="translate(-799.047 -337.001)">
                    <path id="Path_2565" data-name="Path 2565" d="M64.621,0,24.762,46.09,64.542,92.18H39.779L0,46.09,39.779,0Z" transform="translate(863.669 429.18) rotate(180)" fill="#fff"/>
                    <path id="Path_2566" data-name="Path 2566" d="M64.621,0,24.762,46.09,64.542,92.18H39.779L0,46.09,39.779,0Z" transform="translate(914.199 429.18) rotate(180)" fill="#fff"/>
                  </g>
                </svg>
              </div>
            </div>
         </div>
         <div class="absolute left-[48px] bottom-[70px] md:left-[10px] md:bottom-0 lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="115.152" height="92.18" viewBox="0 0 115.152 92.18" class="mx-auto">
              <g id="Group_1919" data-name="Group 1919" transform="translate(-799.047 -337.001)">
                <path id="Path_2565" data-name="Path 2565" d="M64.621,0,24.762,46.09,64.542,92.18H39.779L0,46.09,39.779,0Z" transform="translate(863.669 429.18) rotate(180)" fill="#fff"/>
                <path id="Path_2566" data-name="Path 2566" d="M64.621,0,24.762,46.09,64.542,92.18H39.779L0,46.09,39.779,0Z" transform="translate(914.199 429.18) rotate(180)" fill="#fff"/>
              </g>
            </svg>
         </div>
      </div>
      <div class="lg:hidden w-[307px] md:w-[708px] mx-auto bg-[#FF6441] rounded-[11px] lg:pb-[35px] mt-[-70px] md:mt-[30px] z-[2]">
            <div class="relative w-full h-full py-[40px]">
              <p class="text-15 leading-25 lg:text-12 lg:leading-20 xl:text-15 xl:leading-25 w-[272px] md:w-[617px] lg:w-[264px] xl:w-[330px] mx-auto text-center text-white lg:pt-[65px] font-normal">"<?php echo get_field('testimonial');?>"</p>
              <p class="text-13 leading-20 lg:text-10 lg:leading-15 xl:text-13 xl:leading-20 w-[234px] md:w-[234px] lg:w-[180px] xl:w-[234px] mx-auto text-center font-normal mt-[8px]"><?php echo get_field('naam');?> | <?php echo get_field('functie');?></p>
            </div>
         </div>
   </div>
 </section>

<?php endif; ?>
