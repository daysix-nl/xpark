<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>

<!-- HOE WERKT HET -->
<section class="bg-white <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container hidden md:block">
      <div class="w-fit md:h-[379.63px] lg:h-[526.5px] xl:h-[554.21px] mx-auto overflow-hidden">
         <div class="md:scale-[0.685] lg:scale-95 xl:scale-100 origin-top-left">
            <?php include get_template_directory() . '/img/icon/hoe-werkt-het.php'; ?>

         </div>
       </div>
   </div>
   <div class="grid gap-y-[60px] md:gap-y-[30px] lg:gap-y-[60px] xl:gap-y-[70px] mt-[40px] md:mt-[90px] lg:mt-[100px] xl:mt-[90px]">
      <!-- HARDWARE -->
      <div id="hardware" class="container fade-item">
         <div class="md:flex md:justify-between md:items-start">
            <div class="w-[238px] lg:w-[303px] xl:w-[338px] h-fit mx-auto md:mx-[unset] order-1 md:order-1">
               <img src="/wp-content/themes/xpark/img/local/hardware.png" alt="hardware">
            </div>
            <div class="w-full md:w-[413px] lg:w-[724px] xl:w-[807px] order-2 md:order-2 mt-[10px] md:mt-[unset]">
               <h2 class="text-22 leading-32 md:text-23 md:leading-33 lg:text-23 lg:leading-33 xl:text-25 xl:leading-35 font-bold text-[#202624]">Hardware</h2>
               <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[15px] lg:mt-[20px]"><?php echo get_field('hardware_intro');?></p>
               <div class="accordion-item mt-[20px] md:hidden lg:block"> 
                    <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
                        <span class="pr-4 leesmeer"></span>
                    </button>
                    <div class="panel">
                        <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                            <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('hardware_tekst');?></div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="accordion-item mt-[20px] hidden md:block lg:hidden"> 
            <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
               <span class="pr-4 leesmeer"></span>
            </button>
            <div class="panel">
               <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                     <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('hardware_tekst');?></div>
               </div>
            </div>
         </div>
      </div>


      <!-- SOFTWARE -->
      <div id="software" class="container fade-item">
         <div class="md:flex md:justify-between md:items-start">
             <div class="w-[238px] lg:w-[303px] xl:w-[338px] h-fit mx-auto md:mx-[unset] order-1 md:order-2">
               <img src="/wp-content/themes/xpark/img/local/software.png" alt="software">
            </div>
            <div class="w-full md:w-[413px] lg:w-[724px] xl:w-[807px] order-2 md:order-1 mt-[10px] md:mt-[unset]">
               <h2 class="text-22 leading-32 md:text-23 md:leading-33 lg:text-23 lg:leading-33 xl:text-25 xl:leading-35 font-bold text-[#202624]">Software</h2>
               <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[15px] lg:mt-[20px]"><?php echo get_field('software_intro');?></p>
               <div class="accordion-item mt-[20px] md:hidden lg:block"> 
                    <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
                        <span class="pr-4 leesmeer"></span>
                    </button>
                    <div class="panel">
                        <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                            <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('software_tekst');?></div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="accordion-item mt-[20px] hidden md:block lg:hidden"> 
            <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
               <span class="pr-4 leesmeer"></span>
            </button>
            <div class="panel">
               <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                     <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('software_tekst');?></div>
               </div>
            </div>
         </div>
      </div>


       <!-- PARKEERAPP -->
      <div id="parkeerapp" class="container fade-item">
         <div class="md:flex md:justify-between md:items-start">
            <div class="w-[238px] lg:w-[303px] xl:w-[338px] h-fit mx-auto md:mx-[unset] order-1 md:order-1">
               <img src="/wp-content/themes/xpark/img/local/parkeerapp.png" alt="parkeerapp">
            </div>
            <div class="w-full md:w-[413px] lg:w-[724px] xl:w-[807px] order-2 md:order-2 mt-[10px] md:mt-[unset]">
               <h2 class="text-22 leading-32 md:text-23 md:leading-33 lg:text-23 lg:leading-33 xl:text-25 xl:leading-35 font-bold text-[#202624]">Parkeerapp</h2>
               <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[15px] lg:mt-[20px]"><?php echo get_field('parkeerapp_intro');?></p>
               <div class="accordion-item mt-[20px] md:hidden lg:block"> 
                    <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
                        <span class="pr-4 leesmeer"></span>
                    </button>
                    <div class="panel">
                        <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                            <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('parkeerapp_tekst');?></div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="accordion-item mt-[20px] hidden md:block lg:hidden"> 
            <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
               <span class="pr-4 leesmeer"></span>
            </button>
            <div class="panel">
               <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                     <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('parkeerapp_tekst');?></div>
               </div>
            </div>
         </div>
      </div>


      <!-- RAPPORTAGES -->
      <div id="rapportages" class="container fade-item">
         <div class="md:flex md:justify-between md:items-start">
             <div class="w-[238px] lg:w-[303px] xl:w-[338px] h-fit mx-auto md:mx-[unset] order-1 md:order-2">
               <img src="/wp-content/themes/xpark/img/local/rapportages.png" alt="rapportages">
            </div>
            <div class="w-full md:w-[413px] lg:w-[724px] xl:w-[807px] order-2 md:order-1 mt-[10px] md:mt-[unset]">
               <h2 class="text-22 leading-32 md:text-23 md:leading-33 lg:text-23 lg:leading-33 xl:text-25 xl:leading-35 font-bold text-[#202624]">Rapportages</h2>
               <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[15px] lg:mt-[20px]"><?php echo get_field('rapportages_intro');?></p>
               <div class="accordion-item mt-[20px] md:hidden lg:block"> 
                    <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
                        <span class="pr-4 leesmeer"></span>
                    </button>
                    <div class="panel">
                        <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                            <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('rapportages_tekst');?></div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="accordion-item mt-[20px] hidden md:block lg:hidden"> 
            <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
               <span class="pr-4 leesmeer"></span>
            </button>
            <div class="panel">
               <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                     <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('rapportages_tekst');?></div>
               </div>
            </div>
         </div>
      </div>


       <!-- KOPPELINGEN -->
      <div id="koppelingen" class="container fade-item">
         <div class="md:flex md:justify-between md:items-start">
            <div class="w-[238px] lg:w-[303px] xl:w-[338px] h-fit mx-auto md:mx-[unset] order-1 md:order-1">
               <img src="/wp-content/themes/xpark/img/local/koppelingen.png" alt="koppelingen">
            </div>
            <div class="w-full md:w-[413px] lg:w-[724px] xl:w-[807px] order-2 md:order-2 mt-[10px] md:mt-[unset]">
               <h2 class="text-22 leading-32 md:text-23 md:leading-33 lg:text-23 lg:leading-33 xl:text-25 xl:leading-35 font-bold text-[#202624]">Koppelingen</h2>
               <p class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[15px] lg:mt-[20px]"><?php echo get_field('koppelingen_intro');?></p>
               <div class="accordion-item mt-[20px] md:hidden lg:block"> 
                    <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
                        <span class="pr-4 leesmeer"></span>
                    </button>
                    <div class="panel">
                        <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                            <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('koppelingen_tekst');?></div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="accordion-item mt-[20px] hidden md:block lg:hidden"> 
            <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-2">
               <span class="pr-4 leesmeer"></span>
            </button>
            <div class="panel">
               <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                     <div class="text-15 leading-28 md:text-17 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal text-editor"><?php echo get_field('koppelingen_tekst');?></div>
               </div>
            </div>
         </div>
      </div>


   </div>
</section>
<?php endif; ?>
