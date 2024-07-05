<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- NIEUWS UIGELICHT -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
   <div class="container">
      <div class="w-full lg:border-b-[4px] border-[#000] mb-[20px] md:mb-[45px] lg:mb-[30px] xl:mb-[45px] lg:pb-[30px] xl:pb-[40px]">
         <h2 class="text-14 leading-14 md:text-16 md:leading-16 lg:text-16 lg:leading-16 xl:text-18 xl:leading-18 tracking-[0.01em] font-semibold uppercase text-[#FF6441]">Overzicht</h2>
         <h1 href="" class="text-25 leading-25 md:text-30 md:leading-30 lg:text-26 lg:leading-26 xl:text-30 xl:leading-30 font-bold text-[#202624] flex items-center mt-[8px]"><?php the_title();?></h1>
      </div>
      <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] md:gap-[25px] lg:gap-[15px] xl:gap-[20px] element-fade-in pb-[40px] md:pb-[60px] lg:pb-[50px] xl:pb-[60px]">
         <?php
            $loop = new WP_Query( array(
               'post_type' => 'post',
               'posts_per_page' => -1,
               'orderby' => 'date',
               'order' => 'DECS'
            )
            );
            ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <a href="<?php the_permalink();?>" class="fade-item">
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
               <hr class="border-[2px] border-[#000] mt-[30px] lg:hidden">
            </a>
         <?php endwhile; wp_reset_query(); ?>
      </div>
   </div>
</section>
<?php endif; ?>
