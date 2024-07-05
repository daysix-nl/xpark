<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- NIEUWS UIGELICHT -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container">
      <div class="flex flex-col lg:flex-row lg:justify-between element-fade-in">
         <div class="grow-item grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-[25px] md:gap-[25px] lg:gap-[40px] xl:gap-[45px] lg:w-[349px] xl:w-[393px] order-2 lg:order-1">
             <?php
               $loop = new WP_Query( array(
                  'post_type' => 'case',
                  'posts_per_page' => 2,
                  'orderby' => 'date',
                  'order' => 'DECS',
                  'offset' => 1,
               )
               );
               ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
             <a href="<?php the_permalink();?>" class="fade-item">
               <hr class="border-[2px] border-[#000] mb-[20px]">
               <div class="w-full h-[217px] md:h-[217px] lg:h-[213px] xl:h-[230px] overflow-hidden rounded-[10px]">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
               </div>
               <p class="text-17 leading-25 lg:text-15 lg:leading-22 xl:text-17 xl:leading-32 font-bold mt-[15px] text-[#202624]"><?php the_title();?></p>
               <div class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-28 text-[#505050] line-clamp-2 mt-[8px]"><?php the_excerpt();?></div>
               <p class="text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#FF6441] flex items-center mt-[12px]">Lees meer
                  <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                     <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)" fill="#FF6441"/>
                  </svg>
               </p>
            
            </a>
            <?php endwhile; wp_reset_query(); ?>            
         </div>
         <?php
            $loop = new WP_Query( array(
               'post_type' => 'case',
               'posts_per_page' => 1,
               'orderby' => 'date',
               'order' => 'DECS'
            )
            );
            ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
          <a href="<?php the_permalink();?>" class="grow-item w-full lg:w-[738px] xl:w-[828px] order-1 lg:order-2 grid">
           
            <div class="order-2 lg:order-1">
               <hr class="border-[2px] border-[#000] mb-[20px] hidden lg:block">
               <p class="text-12 leading-12 xl:text-14 xl:leading-14 uppercase text-[#64786E] mt-[15px] lg:mt-[unset]">Uitgelicht</p>
               <p class="text-17 leading-25 md:text-29 md:leading-39 xl:text-33 xl:leading-43 font-bold mt-[15px] text-[#202624] lg:max-w-[501px]"><?php the_title();?></p>
               <div class="text-15 leading-25 md:text-22 md:leading-32 xl:text-28 xl:leading-38 text-[#505050] line-clamp-2 mt-[8px] lg:max-w-[501px]"><?php the_excerpt();?></div>
               <p class="text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#FF6441] flex items-center mt-[12px]">Lees meer 
                  <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                     <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)" fill="#FF6441"/>
                  </svg>
               </p>
               <div class="mb-[25px] lg:hidden"></div>
            </div>
            <div class="w-full h-[217px] md:h-[362px] lg:h-[552px] xl:h-[620px] overflow-hidden rounded-[10px] mt-[40px] lg:mt-[15px] order-1 lg:order-2">
               <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div>
         </a>
         <?php endwhile; wp_reset_query(); ?>

      </div>
      <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] md:gap-[25px] lg:gap-[40px] xl:gap-[45px] element-fade-in pb-[40px] md:pb-[60px] lg:pb-[50px] xl:pb-[60px] pt-[25px] md:pt-[25px] lg:pt-[40px] xl:pt-[45px]">
           <?php
               $loop = new WP_Query( array(
                  'post_type' => 'case',
                  'posts_per_page' => 100,
                  'orderby' => 'date',
                  'order' => 'DECS',
                  'offset' => 3,
               )
               );
               ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
             <a href="<?php the_permalink();?>" class="fade-item">
                  <hr class="border-[2px] border-[#000] mb-[20px]">
                  <div class="w-full h-[217px] md:h-[217px] lg:h-[213px] xl:h-[230px] overflow-hidden rounded-[10px]">
                     <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
                  </div>
                  <p class="text-17 leading-25 lg:text-15 lg:leading-22 xl:text-17 xl:leading-32 font-bold mt-[15px] text-[#202624]"><?php the_title();?></p>
                  <div class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-28 text-[#505050] line-clamp-2 mt-[8px]"><?php the_excerpt();?></div>
                  <p class="text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#FF6441] flex items-center mt-[12px]">Lees meer
                     <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                        <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)" fill="#FF6441"/>
                     </svg>
                  </p>
                  
               </a>
            <?php endwhile; wp_reset_query(); ?>    

      </div>
   </div>
</section>
<?php endif; ?>
