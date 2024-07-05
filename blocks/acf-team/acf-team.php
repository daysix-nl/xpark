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

<!-- PARTNERS 2 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container grid grid-cols-2 md:grid-cols-4 gap-[20px] lg:gap-[30px] xl:gap-[35px] element-fade-in ">
      <?php
      if( have_rows('team') ):
         while( have_rows('team') ) : the_row(); ?>
         <?php
         $image = get_sub_field('afbeelding');
         $image_url = isset($image['url']) ? esc_url($image['url']) : '';
         $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
         ?>
              <div id="team-member" class="fade-item">
                  <div class="w-full h-[200px] md:h-[189px] lg:h-[300px] xl:h-[338px] rounded-[10px] overflow-hidden relative">
                     <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                     <div id="contact" class="hidden lg:block absolute bottom-0 left-[10px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="107.743" height="84.89" viewBox="0 0 107.743 84.89">
                           <g id="Group_1916" data-name="Group 1916" transform="translate(-653.849 -2886.425)">
                              <path id="Path_3931" data-name="Path 3931" d="M59.511,0,22.8,42.445,59.437,84.89h-22.8L0,42.445,36.633,0Z" transform="translate(713.359 2971.315) rotate(180)" fill="#fff" opacity="0.348"/>
                              <path id="Path_3932" data-name="Path 3932" d="M59.511,0,22.8,42.445,59.437,84.89h-22.8L0,42.445,36.633,0Z" transform="translate(761.592 2971.315) rotate(180)" fill="#fff" opacity="0.348"/>
                           </g>
                        </svg>
                     </div>
                     <div id="contact" class="hidden lg:block absolute bottom-[10px] right-[10px]">
                        <div class="lg:w-[107px] xl:w-[121px] lg:h-[70px] xl:h-[79px] rounded-[10px] bg-[#9EAE8AC2] flex items-center justify-center">
                           <div class="flex lg:space-x-[4px] xl:space-x-[8px]">
                              <a href="mailto:<?php echo get_sub_field('e-mail');?>">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38">
                                    <g id="Group_1917" data-name="Group 1917" transform="translate(-935 -3281)">
                                       <circle id="Ellipse_118" data-name="Ellipse 118" cx="19" cy="19" r="19" transform="translate(935 3281)" fill="#202624"/>
                                       <g id="mail" transform="translate(943.332 3292.538)">
                                          <g id="Group_312" data-name="Group 312" transform="translate(0 0.001)">
                                          <path id="Path_624" data-name="Path 624" d="M18.884,76H1.82A1.822,1.822,0,0,0,0,77.82V88.737a1.822,1.822,0,0,0,1.82,1.82H18.884a1.822,1.822,0,0,0,1.82-1.82V77.82A1.821,1.821,0,0,0,18.884,76Zm-.255,1.213-6.99,6.954a1.82,1.82,0,0,1-2.574,0L2.074,77.213ZM1.213,88.49V78.067l5.242,5.214Zm.862.853,5.24-5.207.892.887a3.033,3.033,0,0,0,4.288,0l.893-.888,5.24,5.207ZM19.49,88.49l-5.242-5.209,5.242-5.214Z" transform="translate(0 -76)" fill="#fff" stroke="#fff" stroke-width="0.5"/>
                                          </g>
                                       </g>
                                    </g>
                                 </svg>
                              </a>
                              <a href="<?php echo get_sub_field('linkedin');?>" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="38" viewBox="0 0 40 38">
                                    <g id="Group_1918" data-name="Group 1918" transform="translate(-978 -3281)">
                                       <ellipse id="Ellipse_119" data-name="Ellipse 119" cx="20" cy="19" rx="20" ry="19" transform="translate(978 3281)" fill="#202624"/>
                                       <g id="linkedin-2" transform="translate(988.854 3288.701)">
                                          <path id="Path_616" data-name="Path 616" d="M2.47-.668A2.275,2.275,0,1,0,2.412,3.87h.028A2.276,2.276,0,1,0,2.47-.668Zm0,0" transform="translate(0 0.669)" fill="#fff"/>
                                          <path id="Path_617" data-name="Path 617" d="M8.109,198.312h4.366v13.134H8.109Zm0,0" transform="translate(-7.851 -191.98)" fill="#fff"/>
                                          <path id="Path_618" data-name="Path 618" d="M229.515,188.625a5.469,5.469,0,0,0-3.934,2.213v-1.9h-4.366v13.134h4.365v-7.335a2.992,2.992,0,0,1,.144-1.065,2.39,2.39,0,0,1,2.24-1.6c1.58,0,2.212,1.2,2.212,2.97v7.026h4.365v-7.531C234.541,190.5,232.387,188.625,229.515,188.625Zm0,0" transform="translate(-214.176 -182.601)" fill="#fff"/>
                                       </g>
                                    </g>
                                 </svg>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="text-center mt-[8px] lg:mt-[15px]">
                     <h3 class="text-13 leading-23 md:text-12 md:leading-22 lg:text-15 lg:leading-25 xl:text-17 xl:leading-27 font-bold"><?php echo get_sub_field('naam');?></h3>
                     <p class="text-13 leading-23 md:text-12 md:leading-22 lg:text-15 lg:leading-25 xl:text-17 xl:leading-27"><?php echo get_sub_field('functie');?></p>
                  </div>
               </div>
         <?php
         endwhile;
      else :
      endif;
      ?>
    

   </div>
   <?php if (get_field('link')): ?>   
   <div class="container">
      <a href="<?php echo $link_url; ?>" class="text-14 leading-20 xl:text-16 xl:leading-24 font-bold px-[18px] xl:px-[20px] h-[41px] xl:h-[44px] flex items-center rounded-[7px] bg-[#202624] text-white w-fit mx-auto mt-[40px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
   </div>
   <?php endif; ?>

</section>

<?php endif; ?>
