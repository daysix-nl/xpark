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
<!-- AFBEELDING -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="h-[382px] md:h-[408] lg:h-[486px] xl:h-[489px] w-full relative overflow-hidden">
      <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover inner-par2">
      <div class="absolute left-[55px] bottom-[60px] xl:bottom-[65px]">
         <svg xmlns="http://www.w3.org/2000/svg" width="243.322" height="194.78" viewBox="0 0 243.322 194.78">
         <g id="Group_1911" data-name="Group 1911" transform="translate(-53.678 -2778.22)">
            <path id="Path_611" data-name="Path 611" d="M136.548,0,52.324,97.39l84.056,97.39H84.056L0,97.39,84.056,0Z" transform="translate(190.227 2973) rotate(180)" fill="#ff6441"/>
            <path id="Path_612" data-name="Path 612" d="M136.548,0,52.324,97.39l84.056,97.39H84.056L0,97.39,84.056,0Z" transform="translate(297 2973) rotate(180)" fill="#ff6441"/>
         </g>
         </svg>
      </div>
   </div>
   <div class="section-par2"></div>
</section>
<?php endif; ?>
