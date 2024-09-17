<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block scroll-always-active xpark relative hamburger-nonactive form-close' ); ?>>
<script rel="preload"  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script rel="preload"  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
<header class="fixed w-screen z-[9999]">
    <section class="h-[75px] md:h-[96px] lg:h-[103px] w-full">
        <div class="h-full container w-full flex items-center justify-between">
            <!-- HAMBURGER -->
            <div class="w-[80px] md:w-[245px] lg:w-[unset] lg:hidden">
                <svg id="hamburger" xmlns="http://www.w3.org/2000/svg" width="35.197" height="23.879" viewBox="0 0 35.197 23.879" class="cursor-pointer">
                    <g id="Group_359" data-name="Group 359" transform="translate(-360 -22)">
                        <line id="Line_21" data-name="Line 21" x2="31.197" transform="translate(362 24)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
                        <line id="Line_22" data-name="Line 22" x2="31.197" transform="translate(362 33.939)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
                        <line id="Line_23" data-name="Line 23" x2="31.197" transform="translate(362 43.879)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
                    </g>
                </svg>
            </div>
            <!-- LOGO -->
            <a href="/" class="scale-[0.8] md:scale-[0.86] lg:scale-[0.89] xl:scale-[1]">
                <svg xmlns="http://www.w3.org/2000/svg" width="140.714" height="27.489" viewBox="0 0 140.714 27.489">
                    <g id="xpark-_fc_" data-name="xpark-[fc]" transform="translate(0 -0.499)">
                        <g id="Group_256" data-name="Group 256" transform="translate(132.547 0.499)">
                        <path id="Path_584" data-name="Path 584" d="M620.066,4.528a4.068,4.068,0,0,1-4.094,4.116A4.027,4.027,0,0,1,611.9,4.572,4.032,4.032,0,0,1,615.994.5,3.952,3.952,0,0,1,620.066,4.528Zm-.433,0a3.65,3.65,0,0,0-7.3.022,3.6,3.6,0,0,0,3.639,3.661A3.634,3.634,0,0,0,619.633,4.528Zm-2.643.693,1.083,1.668h-.628l-1-1.56a1.055,1.055,0,0,1-.26.022h-1.213V6.889h-.607V2.211h1.8c1.148,0,1.841.607,1.841,1.56A1.366,1.366,0,0,1,616.99,5.222Zm.455-1.451c0-.65-.477-1.04-1.3-1.04h-1.17v2.1h1.17C616.969,4.832,617.445,4.442,617.445,3.77Z" transform="translate(-611.9 -0.499)"/>
                        </g>
                        <g id="Group_257" data-name="Group 257" transform="translate(0 2.535)">
                        <path id="Path_585" data-name="Path 585" d="M90.784,20.976c0-5.61-4.181-9.076-10.874-9.076H69.079V36.919h5.784V30.031H79.91C86.6,30.031,90.784,26.543,90.784,20.976ZM74.862,25.309V16.622h4.722c3.531,0,5.329,1.6,5.329,4.354,0,2.708-1.776,4.332-5.329,4.332ZM67.324,11.9,56.515,24.4,67.3,36.9H60.587L49.8,24.4,60.587,11.9Z" transform="translate(-39.013 -11.467)" fill="#ff6441"/>
                        <path id="Path_586" data-name="Path 586" d="M12.715,17.287l-6-6.953H0L9.358,21.186Zm116.518-6.953h-6.715l-10.787,12.5,10.787,12.5h6.715l-10.787-12.5ZM71.007,24.695H59.569V21.121c0-4.246,2.253-6.282,5.719-6.282,3.423,0,5.719,2.036,5.719,6.282Zm20.275-.931H86.56V15.055h4.722c3.531,0,5.329,1.6,5.329,4.354C96.611,22.117,94.834,23.763,91.282,23.763Zm14.687-13.43V34.7h-3.488l-5.155-7.387a8.134,8.134,0,0,0,5.155-7.906c0-5.61-4.181-9.076-10.874-9.076H80.776V34.7H76.79V21.662c0-7.6-4.614-11.762-11.481-11.762S53.829,14.037,53.829,21.662V34.7H37.994v.65H59.569v-6H71.007v6H86.56V28.377h5.329l4.831,6.975h15.011V10.333ZM18.174,34.7H7.278l5.437-6.3L9.358,24.5,0,35.352H18.716Z" transform="translate(0 -9.9)"/>
                        </g>
                    </g>
                </svg>
            </a>
            <!-- MENU -->
            <div class="w-[80px] md:w-[245px] lg:w-[unset] flex justify-end items-center lg:space-x-[64px] xl:space-x-[74px]">
                <?php
                if( have_rows('menu', 'option') ):
                    while( have_rows('menu', 'option') ) : the_row(); ?>
                    <?php
                    $link = get_sub_field('link', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                    <div class="hover-dropdown relative">
                        <a href="<?php echo $link_url; ?>" class="lg:text-14 lg:leading-24 xl:text-16 xl:leading-30 text-[#202624] font-bold hidden lg:block menu-item" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php if (get_sub_field('submenu', 'option')): ?>   
                            <div class="dropdown-menu absolute hidden bg-white pt-[35px]">
                                <ul class="px-[20px] pb-[35px] border-x-[1px] border-b-[1px] border-[#ddd]">
                                    <?php
                                    if( have_rows('submenu', 'option') ):
                                        while( have_rows('submenu', 'option') ) : the_row(); ?>
                                        <?php
                                        $link1 = get_sub_field('submenu_link', 'option');
                                        $link1_url = isset($link1['url']) ? esc_url($link1['url']) : '';
                                        $link1_text = isset($link1['title']) ? esc_html($link1['title']) : '';
                                        $link1_target = isset($link1['target']) ? esc_attr($link1['target']) : '';
                                        ?>
                                        <li class=""><a class="lg:text-14 lg:leading-24 xl:text-16 xl:leading-30 text-[#202624] font-semibold" href="<?php echo $link1_url; ?>" target="<?php echo $link1_target; ?>"><?php echo $link1_text; ?></a></li>
                                        <?php
                                        endwhile;
                                    else :
                                    endif;
                                    ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <!-- BUTTON -->
                <a href="/contact/" class="h-[35px] w-[35px] rounded-full bg-[#64786E] md:hidden flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.248" height="15.414" viewBox="0 0 16.248 15.414">
                        <path id="phone-svgrepo-com" d="M13.957,11.339l-.441-.443h0Zm.38-.377.441.443h0ZM16.35,10.7l-.3.549Zm1.592.865-.3.549Zm.449,2.712.441.443Zm-1.184,1.177-.441-.443Zm-1.1.558.058.622h0ZM7.887,12.478l.441-.443ZM3.877,5l-.624.035h0Zm5.394,1.21.441.443h0ZM9.4,3.994l.5-.374Zm-1.051-1.4-.5.374h0ZM5.759,2.354,6.2,2.8h0Zm-1.308,1.3-.441-.443h0Zm6.141,6.134.441-.443Zm3.8,1.994.38-.377-.881-.886-.379.377Zm1.654-.535,1.592.865.6-1.1-1.592-.865Zm1.9,2.585-1.184,1.177.881.886,1.184-1.177Zm-1.9,1.556c-1.208.113-4.333.012-7.717-3.352l-.881.886c3.693,3.672,7.207,3.851,8.714,3.711ZM8.327,12.035C5.1,8.828,4.568,6.13,4.5,4.96l-1.248.071C3.337,6.5,4,9.493,7.446,12.921ZM9.473,6.886l.239-.238-.881-.886L8.592,6ZM9.9,3.619l-1.051-1.4-1,.749L8.9,4.368ZM5.318,1.911l-1.308,1.3.881.886L6.2,2.8ZM9.033,6.443C8.592,6,8.592,6,8.591,6h0l0,0-.005.005-.011.012-.026.03a1.026,1.026,0,0,0-.063.083,1.272,1.272,0,0,0-.136.265,1.749,1.749,0,0,0-.074.892,5.75,5.75,0,0,0,1.88,2.938l.881-.886A4.663,4.663,0,0,1,9.507,7.1a.522.522,0,0,1,.008-.26c0-.012.006-.013,0,0L9.5,6.855l-.012.014-.008.008,0,0,0,0h0S9.473,6.886,9.033,6.443Zm1.119,3.788A5.791,5.791,0,0,0,13.1,12.1,1.767,1.767,0,0,0,14,12.026a1.28,1.28,0,0,0,.265-.134,1.019,1.019,0,0,0,.084-.062l.03-.026.012-.011.005-.005,0,0h0s0,0-.439-.444-.44-.444-.439-.444h0l0,0,0,0,.008-.008.014-.012.018-.014c.008-.005.006,0-.006,0a.542.542,0,0,1-.266.008,4.7,4.7,0,0,1-2.259-1.519Zm-1.3-8.015a2.354,2.354,0,0,0-3.533-.305L6.2,2.8a1.1,1.1,0,0,1,1.652.168ZM4.5,4.96A1.145,1.145,0,0,1,4.892,4.1l-.881-.886a2.387,2.387,0,0,0-.757,1.82ZM16.766,15.009a1.2,1.2,0,0,1-.721.379l.116,1.244a2.439,2.439,0,0,0,1.486-.737ZM9.712,6.648A2.31,2.31,0,0,0,9.9,3.619l-1,.749a1.061,1.061,0,0,1-.071,1.394Zm7.931,5.464a1.092,1.092,0,0,1,.306,1.72l.881.886a2.341,2.341,0,0,0-.591-3.7ZM14.777,11.4a1.074,1.074,0,0,1,1.274-.158l.6-1.1a2.324,2.324,0,0,0-2.753.37Z" transform="translate(-3.25 -1.249)" fill="#fff"/>
                    </svg>
                </a>
                <a href="/contact/" class="md:text-14 md:leading-24 xl:text-16 xl:leading-30 text-[#fff] font-bold md:h-[40px] lg:h-[41px] xl:h-[44px] px-[32px] bg-[#64786E] items-center rounded-[7px] hidden md:flex">Contact</a>
            </div>
        </div>
</section>
</header>
<div class="h-[75px] md:h-[96px] lg:h-[103px]"></div>


<!-- HAMBURGER OVERLAY -->
 <div id="hb-overlay" class="fixed top-0 bottom-0 w-full h-[100dvh] z-[9999] bg-white">
    <div class="h-[75px] md:h-[96px] w-full flex items-center justify-between border-b-[1px] border-[#ddd] px-[20px]">
        <div class="w-[40px]"></div>
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="121.03" height="23.643" viewBox="0 0 121.03 23.643">
                <g id="xpark-_fc_" data-name="xpark-[fc]" transform="translate(0 -0.499)">
                    <g id="Group_256" data-name="Group 256" transform="translate(114.006 0.499)">
                    <path id="Path_584" data-name="Path 584" d="M618.924,3.965A3.5,3.5,0,0,1,615.4,7.5,3.464,3.464,0,0,1,611.9,4,3.468,3.468,0,0,1,615.421.5,3.4,3.4,0,0,1,618.924,3.965Zm-.373,0a3.139,3.139,0,0,0-6.279.019,3.094,3.094,0,0,0,3.13,3.149A3.126,3.126,0,0,0,618.551,3.965Zm-2.273.6L617.21,6h-.54l-.857-1.341a.908.908,0,0,1-.224.019h-1.043V6h-.522V1.971h1.546c.987,0,1.584.522,1.584,1.341A1.175,1.175,0,0,1,616.278,4.561Zm.391-1.248c0-.559-.41-.894-1.118-.894h-1.006V4.226h1.006C616.26,4.226,616.67,3.89,616.67,3.313Z" transform="translate(-611.9 -0.499)"/>
                    </g>
                    <g id="Group_257" data-name="Group 257" transform="translate(0 2.251)">
                    <path id="Path_585" data-name="Path 585" d="M85.051,19.707c0-4.826-3.6-7.807-9.353-7.807H66.382V33.419h4.975V27.495H75.7C81.455,27.495,85.051,24.495,85.051,19.707ZM71.357,23.433V15.962h4.062c3.037,0,4.583,1.379,4.583,3.745,0,2.329-1.528,3.726-4.583,3.726ZM64.873,11.9l-9.3,10.75L64.854,33.4H59.078L49.8,22.65,59.078,11.9Z" transform="translate(-40.522 -11.527)" fill="#ff6441"/>
                    <path id="Path_586" data-name="Path 586" d="M10.937,16.253,5.776,10.273H0l8.049,9.334Zm100.219-5.981H105.38L96.1,21.023l9.278,10.75h5.776l-9.278-10.75ZM61.074,22.625H51.237V19.551c0-3.652,1.938-5.4,4.919-5.4,2.944,0,4.919,1.751,4.919,5.4Zm17.439-.8H74.451v-7.49h4.062c3.037,0,4.583,1.379,4.583,3.745C83.1,20.408,81.569,21.824,78.513,21.824ZM91.145,10.273v20.96h-3L83.711,24.88a7,7,0,0,0,4.434-6.8c0-4.826-3.6-7.807-9.353-7.807H69.477v20.96H66.049V20.017c0-6.54-3.969-10.117-9.875-10.117S46.3,13.459,46.3,20.017V31.233H32.68v.559H51.237V26.631h9.837v5.161H74.451v-6h4.583l4.155,6H96.1V10.273ZM15.632,31.233H6.26l4.676-5.422L8.049,22.458,0,31.792H16.1Z" transform="translate(0 -9.9)"/>
                    </g>
                </g>
            </svg>
        </div>
        <div class="flex justify-end w-[40px]">
            <div id="close-button" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="12.189" height="11.949" viewBox="0 0 12.189 11.949">
                    <g id="Group_1830" data-name="Group 1830" transform="translate(1.414 1.414)">
                        <line id="Line_21" data-name="Line 21" x2="9.361" y2="8.956" transform="translate(0 0.11)" fill="none" stroke="#202624" stroke-linecap="round" stroke-width="2"/>
                        <line id="Line_23" data-name="Line 23" y1="9.121" x2="9.361" fill="none" stroke="#202624" stroke-linecap="round" stroke-width="2"/>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="grid">
        <?php
        if( have_rows('menu', 'option') ):
            while( have_rows('menu', 'option') ) : the_row(); ?>
            <?php
            $link = get_sub_field('link', 'option');
            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
            ?>
            <div class="h-[75px] border-b-[1px] border-[#ddd] flex items-center">
                <div class="px-[20px] flex justify-between">
                     <a href="<?php echo $link_url; ?>" class="text-14 leading-24 text-[#202624] font-bold " target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                </div>
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
        <div class="h-[75px] border-b-[1px] border-[#ddd] flex items-center">
            <div class="px-[20px] flex justify-between">
                    <a href="/contact" class="text-14 leading-24 text-[#202624] font-bold">Contact</a>
            </div>
        </div>
    </div>
 </div>