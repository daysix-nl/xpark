<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- SUBTITEL 2 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container">
      <div class="w-full md:w-[635px] lg:w-[895px] xl:w-[895px] mx-[auto] text-center">
            <h2 class="text-14 leading-20 md:text-14 md:leading-20 lg:text-13 lg:leading-19 xl:text-15 xl:leading-21 font-bold text-[#202624] border-b-[2px] border-[#FF6441] w-fit mx-auto"><?php echo get_field('titel');?></h2>
            <h3 class="text-25 leading-35 md:text-25 md:leading-35 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold text-[#202624] mt-[20px] lg:mt-[30px]"><?php echo get_field('subtitel');?></h3>
            <p class="text-15 leading-28 md:text-17 md:leading-31 lg:text-15 lg:leading-28 xl:text-17 xl:leading-32 font-normal text-[#000000] mt-[10px] lg:mt-[20px]"><?php echo get_field('tekst');?></p>
      </div>
   </div>
</section>
<?php endif; ?>
