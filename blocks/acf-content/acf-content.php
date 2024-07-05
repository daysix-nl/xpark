<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- CONTENT -->

<?php if (get_field('type_content') == "tweekol"): ?>   
<!-- TWEE KOLOMMEN -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container grid grid-cols-1 lg:grid-cols-2 mt-[30px] xl:mt-[50px] h-fit gap-y-[16px]">
      <div class="text-editor w-full lg:w-[474px] xl:w-[569px] h-fit">
         <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30"><?php echo get_field('tekst_1');?></div>
      </div>
      <div class="text-editor w-full lg:w-[474px] xl:w-[569px] h-fit">
         <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30"><?php echo get_field('tekst_2');?></div>
      </div>
   </div>
</section>
<?php endif; ?>
<?php if (get_field('type_content') == "breed"): ?>   
<!-- EEN KOLOM -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container grid grid-cols-1 lg:grid-cols-2 mt-[30px] xl:mt-[50px] h-fit gap-y-[16px]">
      <div class="text-editor w-full lg:w-[1035px] xl:w-[1201px] h-fit">
         <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30"><?php echo get_field('tekst_1');?></div>
      </div>
   </div>
</section>
<?php endif; ?>
<?php if (get_field('type_content') == "afbrechts"): ?>   
<!-- TWEE KOLOMMEN - AFBEELDING RECHTS-->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container grid grid-cols-1 lg:grid-cols-2 mt-[30px] xl:mt-[50px] h-fit gap-y-[16px]">
      <div class="text-editor w-full lg:w-[474px] xl:w-[569px] h-fit">
         <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30"><?php echo get_field('tekst_1');?></div>
      </div>
      <div class="w-full lg:w-[474px] xl:w-[569px] h-fit">
         <div class="w-full h-[281px] md:h-[430px] lg:h-[350px] xl:h-[388px] rounded-[8px] overflow-hidden">
             <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
<?php if (get_field('type_content') == "afblinks"): ?>   
<!-- TWEE KOLOMMEN - AFBEELDING LINKS-->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container grid grid-cols-1 lg:grid-cols-2 mt-[30px] xl:mt-[50px] h-fit gap-y-[16px]">
      <div class="w-full lg:w-[474px] xl:w-[569px] h-fit order-2 lg:order-1">
         <div class="w-full h-[281px] md:h-[430px] lg:h-[350px] xl:h-[388px] rounded-[8px] overflow-hidden">
             <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
         </div>
      </div>
      <div class="text-editor w-full lg:w-[474px] xl:w-[569px] h-fit order-1 lg:order-2">
         <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30"><?php echo get_field('tekst_1');?></div>
      </div>
   </div>
</section>
<?php endif; ?>

<?php endif; ?>
