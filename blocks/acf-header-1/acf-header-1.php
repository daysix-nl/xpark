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
<?php
$link = get_field('link_1');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php
$link2 = get_field('link_2');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
<!-- HEADER 1 -->
<section class="<?php echo get_field('achtergrond');?> relative pt-[120px] md:pt-[131px] lg:pt-[113px]">
   <div class="container flex flex-col lg:flex-row lg:items-center justify-between">
      <div class="w-[325px] md:w-[654px] lg:w-[580px] xl:w-[655px] z-[3]">
         <h1 class="font-bold text-[#000000] text-50 leading-60 md:text-60 md:leading-85 lg:text-53 lg:leading-75 xl:text-60 xl:leading-85"><?php echo get_field('titel');?><span class="text-[#FF6441]">.</span></h1>
         <h2 class="text-25 leading-35 md:text-35 md:leading-43 lg:text-31 lg:leading-42 xl:text-35 xl:leading-47 font-normal"><?php echo get_field('subtitel');?></h2>
         <p class="text-15 leading-27 md:text-17 md:leading-30 lg:text-15 lg:leading-25 xl:text-17 xl:leading-30 font-normal mt-[10px] w-full max-w-[311px] md:max-w-[539px] lg:max-w-[460px] xl:max-w-[521px]"><?php echo get_field('tekst');?></p>
         <div class="items-center hidden lg:flex space-x-[40px] xl:space-x-[45px] mt-[30px] lg:pb-[60px] xl:pb-[64px]">
            <a href="<?php echo $link_url; ?>" class="text-14 leading-20 xl:text-16 xl:leading-24 font-bold px-[18px] xl:px-[20px] h-[41px] xl:h-[44px] flex items-center rounded-[7px] bg-[#FF6441] text-white" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
            <?php if (get_field('link_2')): ?>   
            <a href="<?php echo $link2_url; ?>" class="text-14 leading-20 xl:text-16 xl:leading-24 font-bold text-[#000000] flex items-center" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?> 
               <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                  <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)"/>
               </svg>
            </a>
            <?php endif; ?>
         </div>
      </div>
      <div class="w-[363px] md:w-[654px] lg:w-auto z-[2]">
         <div class="h-[409px] md:h-[524px] lg:h-[425px] xl:h-[481px] relative flex items-end justify-end">
            <div class="w-[363px] h-[363px] md:w-[708px] md:h-[467px] lg:w-[465px] lg:h-[393px] xl:w-[522px] xl:h-[441px] rounded-[7px] lg:mr-[9px] xl:mr-[19px] overflow-hidden">
               <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
               <div class="absolute top-[-18px] md:top-0 right-[-45px] md:right-[-70px] lg:right-[-25px] xl:right-[-19px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="199.394" height="159.614" viewBox="0 0 199.394 159.614">
                     <g id="Group_430" data-name="Group 430" transform="translate(-1178.606 -128.61)">
                        <path id="Path_598" data-name="Path 598" d="M111.9,0,42.878,79.807l68.881,79.807H68.881L0,79.807,68.881,0Z" transform="translate(1290.502 288.224) rotate(180)" fill="#fff"/>
                        <path id="Path_599" data-name="Path 599" d="M111.9,0,42.878,79.807l68.881,79.807H68.881L0,79.807,68.881,0Z" transform="translate(1378 288.224) rotate(180)" fill="#fff"/>
                     </g>
                  </svg>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="absolute left-0 right-0 bottom-0 h-[249px] md:h-[222px] lg:h-[60px] xl:h-[64px] bg-white z-[1]"></div>
</section>
<?php endif; ?>
