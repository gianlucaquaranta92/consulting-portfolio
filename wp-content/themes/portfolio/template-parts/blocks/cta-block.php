<?php
// Fetch ACF option fields and check if they are not empty
$cta_heading      = !empty(get_field('cta_heading', 'option')) ? get_field('cta_heading', 'option') : '';
$cta_text         = !empty(get_field('cta_text', 'option')) ? get_field('cta_text', 'option') : '';
$cta_button_text  = !empty(get_field('cta_button_text', 'option')) ? get_field('cta_button_text', 'option') : '';
$cta_button_link  = !empty(get_field('cta_button_link', 'option')) ? get_field('cta_button_link', 'option') : '';
$cta_image_background = !empty(get_field('cta_image_background', 'option')) ? get_field('cta_image_background', 'option') : '';
$cta_profile_picture = !empty(get_field('cta_profile_picture', 'option')) ? get_field('cta_profile_picture', 'option') : '';
?>

<section class="cta relative flex bg-black">
    <img class="[transform:rotateY(180deg)] absolute top-0 left-0 w-full h-full object-cover z-0" 
        src="<?php echo esc_html($cta_image_background); ?>" 
        alt="cta-background">
               
    <div class="page-width z-10">
        <div class="flex flex-row gap-8 justify-between items-center">
            <div class="max-w-[55%] flex flex-col justify-center h-full">
          
                    <h2 style="font-size: 60px" class="text-white">
                        <?php echo esc_html($cta_heading); ?>
                    </h2>
            

                    <p class="text-white text-xl mt-4">
                        <?php echo esc_html($cta_text); ?>
                    </p>


                    <a class="z-10 bg-[#0046b7] hover:bg-white hover:text-[#0046b7] button w-max mt-8" href="<?php echo esc_url($cta_button_link); ?>">
                        <?php echo esc_html($cta_button_text); ?>
                    </a>
        
            </div>

            <div class="w-[500px] h-[500px] flex items-center justify-center bg-white rounded-full overflow-hidden relative">
                    <img class="absolute top-0 scale-110" src="<?php echo esc_url($cta_profile_picture); ?>" alt="cta-image">          
            </div>
        </div>
    </div>
</section>
</section>