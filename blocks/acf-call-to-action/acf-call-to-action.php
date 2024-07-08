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
<!-- CALL TO ACTION -->
 <section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> lg:pb-[80px] xl:pb-[100px]">
   <div class="w-full lg:w-[1033px] xl:w-[1033px] mx-auto <?php echo get_field('blok_achtergrond');?> lg:rounded-[7px]">
      <div class="md:flex items-center justify-between pt-[75px] md:pt-[45px] lg:pt-[75px] xl:pt-[70px] pb-[75px] md:pb-[55px] lg:pb-[55px] xl:pb-[60px] relative overflow-hidden">
         <div class="z-[2] ml-[calc(50vw-180px)] md:ml-[calc(50vw-354px)] lg:ml-[100px] xl:ml-[112px] md:w-[325px] lg:w-[415px] xl:w-[451px]">
            <h2 class="text-36 leading-48 md:text-33 md:leading-44 lg:text-42 lg:leading-60 xl:text-45 xl:leading-60 font-bold text-[#202624]"><?php echo get_field('titel');?></h2>
            <p class="text-20 leading-30 md:text-18 md:leading-28 lg:text-25 lg:leading-35 xl:text-25 xl:leading-35 font-bold text-[#202624] mt-[15px]"><?php echo get_field('subtitel');?></p>
            <a href="<?php echo $link_url; ?>" class="text-14 leading-20 xl:text-16 xl:leading-24 font-bold px-[18px] xl:px-[20px] h-[41px] xl:h-[44px] flex items-center rounded-[7px] bg-[#202624] text-white w-fit mt-[40px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
         </div>
         <div class="w-[360px] lg:w-[370px] xl:w-[388px] mx-auto md:mx-[unset] grid gap-[40px] md:gap-[45px] lg:gap-[30px]  md:mr-[calc(50vw-354px)] lg:mr-[60px] xl:mr-[50px] pl-[unset] md:pl-[10px] lg:pl-[unset] relative z-[2] mt-[45px] md:mt-[unset] element-fade-in">
            <?php
            if( have_rows('contactpersoon') ):
               while( have_rows('contactpersoon') ) : the_row(); ?>
               <?php
               $image = get_sub_field('afbeelding');
               $image_url = isset($image['url']) ? esc_url($image['url']) : '';
               $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
               ?>
                  <div class="fade-item flex items-center space-x-[20px]">
                     <div class="w-[76px] md:w-[70px] lg:w-[87px] xl:w-[87px] h-[76px] md:h-[70px] lg:h-[87px] xl:h-[87px] rounded-full border-[3px] md:border-[2px] lg:border-[4px] border-[#EDEDED] overflow-hidden">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                     </div>
                     <div class="grid gap-[3px] h-fit">
                        <h3 class="text-15 leading-20 xl:text-16 xl:leading-20 font-bold"><?php echo get_sub_field('naam');?></h3>
                        <p class="text-15 leading-20 xl:text-16 xl:leading-20"><?php echo get_sub_field('functie');?></p>
                        <a href="mailto:<?php echo get_sub_field('e-mail');?>" class="flex items-center space-x-[10px]">
                           <svg id="Group_425" data-name="Group 425" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                           <circle id="Ellipse_32" data-name="Ellipse 32" cx="12" cy="12" r="12"/>
                              <g id="mail" transform="translate(5.067 7.443)">
                                 <g id="Group_312" data-name="Group 312" transform="translate(0 0)">
                                    <path id="Path_624" data-name="Path 624" d="M11.822,76H1.139A1.141,1.141,0,0,0,0,77.139v6.835a1.141,1.141,0,0,0,1.139,1.139H11.822a1.14,1.14,0,0,0,1.139-1.139V77.139A1.14,1.14,0,0,0,11.822,76Zm-.16.759L7.286,81.113a1.139,1.139,0,0,1-1.612,0L1.3,76.759Zm-10.9,7.06V77.294l3.282,3.264Zm.54.534,3.28-3.26.558.555a1.9,1.9,0,0,0,2.684,0l.559-.556,3.28,3.26Zm10.9-.534L8.92,80.559,12.2,77.294Z" transform="translate(0 -76)" fill="#fff"/>
                                 </g>
                              </g>
                           </svg>
                           <p class="text-15 leading-20 underline"><?php echo get_sub_field('e-mail');?></p>
                        </a>
                     </div>
                  </div>
               <?php
               endwhile;
            else :
            endif;
            ?>
         </div>
         <div class="absolute left-[unset] right-[-5px] md:right-[unset] md:left-[calc(50vw-320px)] lg:left-[-5px] bottom-[-5px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="247.322" height="198.171" viewBox="0 0 247.322 198.171">
               <g id="Group_1913" data-name="Group 1913" transform="translate(-202.614 -655.16)">
                  <path id="Path_620" data-name="Path 620" d="M136.548,0,52.324,97.39l84.056,97.39H84.056L0,97.39,84.056,0Z" transform="translate(339.162 849.939) rotate(180)" fill="#fff"/>
                  <path id="Path_621" data-name="Path 621" d="M136.548,0,52.324,97.39l84.056,97.39H84.056L0,97.39,84.056,0Z" transform="translate(449.936 853.33) rotate(180)" fill="#fff"/>
               </g>
            </svg>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
