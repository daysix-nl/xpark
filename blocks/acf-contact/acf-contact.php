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

<!-- CONTACT -->
<section class="start-car-animtion bg-white <?php echo get_field('padding_top');?> ">
   <div class="container lg:flex lg:justify-between mb-[85px] md:mb-[100px] lg:mb-[95px] xl:mb-[100px]">
      <div class="w-full lg:w-[481px] xl:w-[597px]">
         <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold text-[#202624]"><?php echo get_field('titel');?></h2>
         <p class="text-15 leading-25 md:text-15 md:leading-25 lg:text-13 lg:leading-22 xl:text-15 xl:leading-25 text-[#000000] font-normal mt-[15px] md:w-[506px] lg:w-[428px] xl:w-[550px]"><?php echo get_field('tekst');?></p>
         <div class="xparkform-basis mt-[20px] lg:mt-[30px]">
            <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
         </div>
      </div>
      <div class="w-full lg:w-[524px] xl:w-[568px] md:grid md:grid-cols-2 lg:grid-cols-1 mt-[40px] md:mt-[70px] lg:mt-[unset]">
         <div class="mb-[40px] md:mb-[unset]">
            <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold text-[#202624]">Contactgegevens</h2>
            <a href="" class="text-15 leading-25 md:text-15 md:leading-25 lg:text-13 lg:leading-22 xl:text-15 xl:leading-25 text-[#000000] font-normal mt-[15px] md:w-[506px] lg:w-[428px] xl:w-[550px] block">Telefoon: <span class="text-[#FF6441]">020-7028858</span></a>
            <a href="" class="text-15 leading-25 md:text-15 md:leading-25 lg:text-13 lg:leading-22 xl:text-15 xl:leading-25 text-[#000000] font-normal md:w-[506px] lg:w-[428px] xl:w-[550px] block">E-mail algemeen: <span class="text-[#FF6441]">info@xpark.nl</span></a>
            <div class="w-[181px] grid grid-cols-4 mb-[20px] mt-[20px]">
               <a href="" class="w-[36px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35">
                        <g id="Group_1911" data-name="Group 1911" transform="translate(-1103 -925.939)">
                           <ellipse id="Ellipse_36" data-name="Ellipse 36" cx="18" cy="17.5" rx="18" ry="17.5" transform="translate(1103 925.939)"/>
                           <path id="facebook-svgrepo-com" d="M21.683,5,18.451,5c-3.134,0-5.159,2.076-5.159,5.294v2.439H10.05v4.414h3.243l0,9.36h4.537l0-9.36H21.55l0-4.413H17.83v-2.07c0-1,.236-1.5,1.531-1.5h2.313L21.683,5Z" transform="translate(1105.133 928.336)" fill="#e8f0e1"/>
                        </g>
                  </svg>
               </a>
               <a href="" class="w-[36px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35">
                        <g id="Group_1912" data-name="Group 1912" transform="translate(-1152 -925.939)">
                           <ellipse id="Ellipse_28" data-name="Ellipse 28" cx="18" cy="17.5" rx="18" ry="17.5" transform="translate(1152 925.939)"/>
                           <g id="linkedin-2" transform="translate(1161.801 933.336)">
                           <path id="Path_616" data-name="Path 616" d="M2.251-.668A2.074,2.074,0,1,0,2.2,3.469h.026A2.075,2.075,0,1,0,2.251-.668Zm0,0" transform="translate(0 0.668)" fill="#e8f0e1"/>
                           <path id="Path_617" data-name="Path 617" d="M8.109,198.313h3.979v11.972H8.109Zm0,0" transform="translate(-7.874 -192.541)" fill="#e8f0e1"/>
                           <path id="Path_618" data-name="Path 618" d="M228.78,188.625a4.985,4.985,0,0,0-3.586,2.017v-1.736h-3.979v11.972h3.979v-6.686a2.727,2.727,0,0,1,.131-.971,2.178,2.178,0,0,1,2.042-1.455c1.44,0,2.016,1.1,2.016,2.707v6.4h3.979v-6.864C233.362,190.336,231.4,188.625,228.78,188.625Zm0,0" transform="translate(-214.799 -183.135)" fill="#e8f0e1"/>
                           </g>
                        </g>
                  </svg>
               </a>
               <a href="" class="w-[36px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                        <g id="Group_1913" data-name="Group 1913" transform="translate(-1200 -925.939)">
                           <circle id="Ellipse_29" data-name="Ellipse 29" cx="17.5" cy="17.5" r="17.5" transform="translate(1200 925.939)"/>
                           <g id="instagram-2" transform="translate(1208.555 934.346)">
                           <path id="Path_613" data-name="Path 613" d="M18.1,5.2a6.467,6.467,0,0,0-.411-2.147A4.534,4.534,0,0,0,15.1.467,6.484,6.484,0,0,0,12.952.055C12,.01,11.7,0,9.3,0S6.6.01,5.653.052A6.469,6.469,0,0,0,3.506.463a4.319,4.319,0,0,0-1.57,1.024A4.358,4.358,0,0,0,.916,3.053,6.485,6.485,0,0,0,.5,5.2C.46,6.148.449,6.448.449,8.851S.46,11.555.5,12.5a6.467,6.467,0,0,0,.412,2.147,4.533,4.533,0,0,0,2.59,2.59,6.485,6.485,0,0,0,2.147.411c.944.042,1.245.052,3.648.052s2.7-.01,3.648-.052a6.466,6.466,0,0,0,2.147-.411,4.527,4.527,0,0,0,2.59-2.59,6.489,6.489,0,0,0,.411-2.147c.041-.944.052-1.245.052-3.648S18.142,6.148,18.1,5.2ZM16.506,12.43a4.851,4.851,0,0,1-.3,1.642,2.936,2.936,0,0,1-1.68,1.68,4.868,4.868,0,0,1-1.642.3c-.934.042-1.214.052-3.575.052s-2.645-.01-3.575-.052a4.849,4.849,0,0,1-1.642-.3,2.724,2.724,0,0,1-1.016-.66,2.752,2.752,0,0,1-.66-1.016,4.869,4.869,0,0,1-.3-1.642c-.042-.934-.052-1.214-.052-3.575s.01-2.645.052-3.575a4.849,4.849,0,0,1,.3-1.642,2.69,2.69,0,0,1,.664-1.017,2.748,2.748,0,0,1,1.016-.66,4.872,4.872,0,0,1,1.642-.3c.934-.041,1.214-.052,3.575-.052s2.645.01,3.575.052a4.851,4.851,0,0,1,1.642.3,2.722,2.722,0,0,1,1.016.66,2.751,2.751,0,0,1,.66,1.017,4.871,4.871,0,0,1,.3,1.642c.041.934.052,1.214.052,3.575S16.548,11.5,16.506,12.43Zm0,0" transform="translate(-0.449 0)" fill="#e8f0e1"/>
                           <path id="Path_614" data-name="Path 614" d="M129.5,124.5a4.547,4.547,0,1,0,4.547,4.547A4.548,4.548,0,0,0,129.5,124.5Zm0,7.5a2.949,2.949,0,1,1,2.949-2.949A2.95,2.95,0,0,1,129.5,132Zm0,0" transform="translate(-120.644 -120.195)" fill="#e8f0e1"/>
                           <path id="Path_615" data-name="Path 615" d="M364.572,89.663a1.062,1.062,0,1,1-1.062-1.061A1.062,1.062,0,0,1,364.572,89.663Zm0,0" transform="translate(-349.932 -85.538)" fill="#e8f0e1"/>
                           </g>
                        </g>
                  </svg>
               </a>
               <a href="" class="w-[36px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                        <g id="Group_1914" data-name="Group 1914" transform="translate(-1249 -925.939)">
                           <circle id="Ellipse_30" data-name="Ellipse 30" cx="17.5" cy="17.5" r="17.5" transform="translate(1249 925.939)"/>
                           <g id="tik-tok" transform="translate(1258.91 933.336)">
                           <path id="Path_619" data-name="Path 619" d="M47.009,4.834a4.472,4.472,0,0,1-2.7-.9A4.473,4.473,0,0,1,42.52.39h-2.9V8.309l0,4.338a2.627,2.627,0,1,1-1.8-2.489V7.215a5.7,5.7,0,0,0-.836-.062A5.557,5.557,0,0,0,32.8,9.021a5.446,5.446,0,0,0,.246,7.51,5.653,5.653,0,0,0,.524.457,5.558,5.558,0,0,0,3.406,1.152,5.7,5.7,0,0,0,.836-.061,5.539,5.539,0,0,0,3.094-1.548,5.426,5.426,0,0,0,1.628-3.861l-.015-6.478a7.344,7.344,0,0,0,4.494,1.527V4.834h-.008Z" transform="translate(-31.422 -0.39)" fill="#e8f0e1"/>
                           </g>
                        </g>
                  </svg>
               </a>
            </div>
         </div>
         <div class="w-full h-[281px] md:h-[236px] lg:h-[427px] xl:h-[434px] rounded-[8px] overflow-hidden">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
         </div>
      </div>
   </div>
   <div class="relative h-[34px]">
         <img class="absolute w-auto h-[64px] top-[0px] left-[calc(50vw-181.5px)] md:left-[calc(50vw-354px)] lg:left-[calc(50vw-563px)] xl:left-[calc(50vw-632px)] transform -translate-y-1/2 car-animation max-w-none -z-0 mix-blend-darken" src="/wp-content/themes/xpark/img/icon/car.svg" alt="">
   </div>
</section>
<?php endif; ?>
