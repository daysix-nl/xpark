<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('service_link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php
$link2 = get_field('software_link');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
<?php
$link3 = get_field('hardware_link');
$link3_url = isset($link3['url']) ? esc_url($link3['url']) : '';
$link3_text = isset($link3['title']) ? esc_html($link3['title']) : '';
$link3_target = isset($link3['target']) ? esc_attr($link3['target']) : '';
?>
<!-- OPLOSSINGEN -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container relative">
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          

            <!-- SLIDE -->
            <div class="swiper-slide bg-white h-auto">
                <!-- HIER HTML -->
                <div class="flex flex-col lg:flex-row justify-between">
                    <!-- TRIANGLE -->
                    <div id="software" class="w-[336px] md:w-[469px] mx-auto lg:mx-[unset] order-2 lg:order-1 h-[287px] md:h-[unset]">
                        <?php include get_template_directory() . '/img/icon/triangle.svg'; ?>

                    </div>
                    <!-- CONTENT -->
                    <div class="lg:w-[557px] xl:w-[691px] order-1 lg:order-2 mt-[35px] md:mt-[30px] lg:mt-[58px] xl:mt-[60px] bg-white">
                    <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold text-[#202624]"><?php echo get_field('titel');?></h2>
                    <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[115px] text-[#4D4D4D] w-full lg:w-[531px] xl:w-[595px]"><?php echo get_field('software_tekst');?></p>
                    <a href="<?php echo $link2_url; ?>" class="z-[20] relative font-bold text-15 leading-32 md:text-17 md:leading-32 text-[#FF6441] mt-[40px] flex items-center" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="ml-[8px]">
                            <circle id="Ellipse_41" data-name="Ellipse 41" cx="6.5" cy="6.5" r="6.5" fill="#ff6441"/>
                            <path id="Path_628" data-name="Path 628" d="M4.493,0,1.722,3.2l2.766,3.2H2.766L0,3.2,2.766,0Z" transform="translate(9.375 9.706) rotate(180)" fill="#fff"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
            <!-- SLIDE END -->

            <!-- SLIDE -->
            <div class="swiper-slide bg-white h-auto">
                <!-- HIER HTML -->
                <div class="flex flex-col lg:flex-row justify-between">
                    <!-- TRIANGLE -->
                    <div id="hardware" class="w-[336px] md:w-[469px] mx-auto lg:mx-[unset] order-2 lg:order-1 h-[287px] md:h-[unset]">
                        <?php include get_template_directory() . '/img/icon/triangle.svg'; ?>
                    </div>
                    <!-- CONTENT -->
                    <div class="lg:w-[557px] xl:w-[691px] order-1 lg:order-2 mt-[35px] md:mt-[30px] lg:mt-[58px] xl:mt-[60px] bg-white">
                    <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold text-[#202624]"><?php echo get_field('titel');?></h2>
                    <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[115px] text-[#4D4D4D] w-full lg:w-[531px] xl:w-[595px]"><?php echo get_field('hardware_tekst');?></p>
                    <a href="<?php echo $link3_url; ?>" class="z-[20] relative font-bold text-15 leading-32 md:text-17 md:leading-32 text-[#FF6441] mt-[40px] flex items-center" target="<?php echo $link3_target; ?>"><?php echo $link3_text; ?> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="ml-[8px]">
                            <circle id="Ellipse_41" data-name="Ellipse 41" cx="6.5" cy="6.5" r="6.5" fill="#ff6441"/>
                            <path id="Path_628" data-name="Path 628" d="M4.493,0,1.722,3.2l2.766,3.2H2.766L0,3.2,2.766,0Z" transform="translate(9.375 9.706) rotate(180)" fill="#fff"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
            <!-- SLIDE END -->

              <!-- SLIDE -->
            <div class="swiper-slide bg-white h-auto">
                <!-- HIER HTML -->
                <div class="flex flex-col lg:flex-row justify-between">
                    <!-- TRIANGLE -->
                    <div id="service" class="w-[336px] md:w-[469px] mx-auto lg:mx-[unset] order-2 lg:order-1 h-[287px] md:h-[unset] relative">
                       <?php include get_template_directory() . '/img/icon/triangle.svg'; ?>

                        
                    </div>
                    <!-- CONTENT -->
                    <div class="lg:w-[557px] xl:w-[691px] order-1 lg:order-2 mt-[35px] md:mt-[30px] lg:mt-[58px] xl:mt-[60px] bg-white">
                    <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold text-[#202624]"><?php echo get_field('titel');?></h2>
                    <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[115px] text-[#4D4D4D] w-full lg:w-[531px] xl:w-[595px]"><?php echo get_field('service_tekst');?></p>
                    <a href="<?php echo $link_url; ?>" class="z-[20] relative font-bold text-15 leading-32 md:text-17 md:leading-32 text-[#FF6441] mt-[40px] flex items-center" target="<?php echo $link_target; ?>"><?php echo $link_text; ?> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" class="ml-[8px]">
                            <circle id="Ellipse_41" data-name="Ellipse 41" cx="6.5" cy="6.5" r="6.5" fill="#ff6441"/>
                            <path id="Path_628" data-name="Path 628" d="M4.493,0,1.722,3.2l2.766,3.2H2.766L0,3.2,2.766,0Z" transform="translate(9.375 9.706) rotate(180)" fill="#fff"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
            <!-- SLIDE END -->
        </div>
        <div class="absolute top-0 left-0 right-0 botton-0 flex justify-between">
            <div class="w-[469px] hidden lg:block"></div>
            <div class="w-[360px] md:w-[708px] lg:w-[557px] xl:w-[691px] z-[10] mt-[173px] md:mt-[145px] lg:mt-[173px]">
                <div class="w-[360px] md:w-[708px] lg:w-[481px]">
                    <div class="swiper-pagination-triangle flex justify-between"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php endif; ?>
