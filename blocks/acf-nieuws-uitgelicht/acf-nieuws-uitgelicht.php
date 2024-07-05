<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- NIEUWS UIGELICHT -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container">
      <div class="w-full max-w-[1218px] pt-[65px] md:pt-[65px] lg:pt-[80px] xl:pt-[115px] pb-[25px] md:pb-[35px] lg:pb-[30px] xl:pb-[30px] flex justify-between items-end">
         <a href="" class="text-25 leading-25 md:text-30 md:leading-30 lg:text-26 lg:leading-26 xl:text-30 xl:leading-30 font-bold text-[#202624] flex items-center">Nieuws & Blog
            <svg xmlns="http://www.w3.org/2000/svg" width="11.966" height="17.068" viewBox="0 0 11.966 17.068" class="lg:hidden ml-[13px]" >
               <path id="Path_634" data-name="Path 634" d="M11.966,0,4.585,8.534l7.366,8.534H7.366L0,8.534,7.366,0Z" transform="translate(11.966 17.068) rotate(180)"/>
            </svg>
         </a>
         <div class="hidden lg:block">
               <a href="" class="text-14 leading-20 font-bold text-[#000000] flex items-center">Meer info 
               <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                  <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)"/>
               </svg>
            </a>
         </div>
      </div>
      <div class="w-full max-w-[1218px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[35px] md:gap-[25px] lg:gap-[20px] xl:gap-[45px] element-fade-in ">
         <?php
            $loop = new WP_Query( array(
               'post_type' => 'post',
               'posts_per_page' => 4,
               'orderby' => 'date',
               'order' => 'DECS'
            )
            );
            ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
      
         <a href="<?php the_permalink();?>" class="fade-item last-of-type:hidden md:last-of-type:block lg:last-of-type:hidden">
            <div class="w-full h-[217px] md:h-[217px] lg:h-[213px] xl:h-[230px] overflow-hidden rounded-[10px]">
               <img src="<?php the_post_thumbnail();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div>
            <p class="text-17 leading-25 lg:text-15 lg:leading-22 xl:text-17 xl:leading-32 font-bold mt-[15px] text-[#202624]"><?php the_title();?></p>
            <div class="text-15 leading-25 lg:text-14 lg:leading-22 xl:text-15 xl:leading-28 text-[#505050] line-clamp-2 mt-[8px]"><?php the_excerpt();?></div>
            <p class="text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#000000] flex items-center mt-[12px]">Lees meer
               <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                  <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)"/>
               </svg>
            </p>
         </a>
         <?php endwhile; wp_reset_query(); ?>
        
         
      </div>
   </div>
</section>
<?php endif; ?>
