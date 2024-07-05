<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER 3 -->
 <section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container grid grid-cols-1 lg:grid-cols-2 mt-[30px] xl:mt-[50px] h-fit gap-y-[16px]">
      <div class="w-full lg:w-[474px] xl:w-[569px] h-fit">
        <h2 class="text-14 leading-14 md:text-16 md:leading-16 lg:text-16 lg:leading-16 xl:text-18 xl:leading-18 tracking-[0.01em] font-semibold uppercase text-[#FF6441]"><?php the_category(); ?></h2>
        <h1 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold mt-[10px]"><?php the_title();?></h1>
        <div class="hidden lg:block">
           <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 text-[#818181] mt-[8px]"><?php the_time('j F Y'); ?></p>
          <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 mt-[15px] text-editor"><?php echo get_field('tekst');?></div>
        </div>
      </div>
      <div class="w-full lg:w-[563px] xl:w-[569px] h-fit">
         <div class="w-full h-[215px] md:h-[269px] lg:h-[341px] xl:h-[304px] rounded-[8px] overflow-hidden">
             <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
         </div>
        <div class="block lg:hidden">
           <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 text-[#818181] mt-[8px]"><?php the_time('j F Y'); ?></p>
          <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 mt-[15px] text-editor"><?php echo get_field('tekst');?></div>
        </div>
      </div>
   </div>
 </section>

<?php endif; ?>
