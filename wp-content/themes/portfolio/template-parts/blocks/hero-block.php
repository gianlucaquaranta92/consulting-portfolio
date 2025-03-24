<?php
// Retrieve ACF fields and store them in variables, checking if each field exists and is not empty
$hero_subheading = !empty(get_field('hero_top_title')) ? get_field('hero_top_title') : '';
$hero_heading = !empty(get_field('hero_title')) ? get_field('hero_title') : '';
$hero_description = !empty(get_field('hero_subtitle')) ? get_field('hero_subtitle') : '';
$hero_button_url = !empty(get_field('hero_button_link')) ? get_field('hero_button_link') : '';
$hero_button_text = !empty(get_field('hero_button_text')) ? get_field('hero_button_text') : '';
$hero_image = !empty(get_field('hero_image')) ? get_field('hero_image') : '';
?>

<section class="hero-section bg-light-gray relative">

    <div class="page-width h-full relative">
        <div class="round-gradient"> </div>
        <div class="flex flex-row items-center h-full">
            <div>
                <div class="flex flex-col grow max-w-[90%] relative">
                    <?php if ($hero_subheading): ?>
                        <h4 class="text-primary font-bold"><?php echo esc_html($hero_subheading); ?></h4>
                    <?php endif; ?>
                    <?php if ($hero_heading): ?>
                        <h1><?php echo esc_html($hero_heading); ?></h1>
                    <?php endif; ?>
                    <?php if ($hero_description): ?>
                        <div class="text-xl mt-6"><?php echo esc_html($hero_description); ?></div>
                    <?php endif; ?>
            
                </div>
                <?php if (!empty($hero_button_url) && !empty($hero_button_text)): ?>
                    <div>
                        <a class="button w-max mt-12" href="<?php echo esc_url($hero_button_url); ?>">
                            <?php echo esc_html($hero_button_text); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex justify-end grow">
                <div class="bg-hero-img"></div>
             
                <?php if ($hero_image): ?>
                    <img class="absolute top-auto scale-110" src="<?php echo esc_url($hero_image); ?>" alt="Hero Image">
                <?php endif; ?>
          
            </div>
        </div>
    </div>
</section>
