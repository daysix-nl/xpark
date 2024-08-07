<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- SUBTITEL 1 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container">
      <div class="lg:flex items-start justify-between element-fade-in">
         <div class="w-full lg:w-[860px] xl:w-[920px]">
            <h2 class="text-28 leading-35 md:text-40 md:leading-50 lg:text-36 lg:leading-46 xl:text-40 xl:leading-50 font-semibold text-[#202624]"><?php echo get_field('titel');?></h2>
            <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[15px] lg:mt-[25px]"><?php echo get_field('tekst');?></p>
         </div>
         <?php if (get_field('link')): ?>   
         <a href="<?php echo $link_url; ?>" class="grow-item text-14 leading-20 xl:text-16 xl:leading-24 font-bold px-[18px] xl:px-[20px] h-[41px] xl:h-[44px] flex items-center rounded-[7px] bg-[#64786E] text-white w-fit mt-[25px] lg:mt-[unset]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
               <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)" fill="#fff"/>
            </svg>
         </a>
         <?php endif; ?>
      </div>
   </div>
</section>
<?php endif; ?>
