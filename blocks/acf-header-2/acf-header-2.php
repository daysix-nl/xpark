<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER 2 -->
 <section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="w-[360px] md:w-[517px] lg:w-[682px] xl:w-[800px] mx-auto text-center">
      <h1 class="text-14 leading-14 md:text-16 md:leading-16 lg:text-16 lg:leading-16 xl:text-18 xl:leading-18 tracking-[0.01em] font-semibold uppercase text-[#FF6441]"><?php the_title();?></h1>
      <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold mt-[10px]"><?php echo get_field('subtitel');?><span class="text-[#FF6441]">.</span></h2>
      <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 mt-[10px] text-editor inside"><?php echo get_field('tekst');?></div>
   </div>
 </section>

<?php endif; ?>
