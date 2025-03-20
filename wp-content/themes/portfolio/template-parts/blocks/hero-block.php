<?php
// Retrieve ACF fields and store them in variables, checking if each field exists and is not empty
$hero_subheading = !empty(get_field('hero_top_title')) ? get_field('hero_top_title') : '';
$hero_heading = !empty(get_field('hero_title')) ? get_field('hero_title') : '';
$hero_description = !empty(get_field('hero_subtitle')) ? get_field('hero_subtitle') : '';
$hero_button_url = !empty(get_field('hero_button_link')) ? get_field('hero_button_link') : '';
$hero_button_text = !empty(get_field('hero_button_text')) ? get_field('hero_button_text') : '';
$hero_image = !empty(get_field('hero_image')) ? get_field('hero_image') : '';
$hero_award_text = !empty(get_field('hero_award_text')) ? get_field('hero_award_text') : '';
?>

<section class="hero-section bg-light-gray">
    <div class="page-width h-full">
        <div class="flex flex-row items-center h-full">
            <div class="flex flex-col gap-4 grow max-w-[60%]">
                <?php if ($hero_subheading): ?>
                    <h4 class="text-primary font-bold"><?php echo esc_html($hero_subheading); ?></h4>
                <?php endif; ?>
                <?php if ($hero_heading): ?>
                    <h1><?php echo esc_html($hero_heading); ?></h1>
                <?php endif; ?>
                <?php if ($hero_description): ?>
                    <div class="text-xl"><?php echo esc_html($hero_description); ?></div>
                <?php endif; ?>
                <?php if (!empty($hero_button_url) && !empty($hero_button_text)): ?>
                    <div>
                        <a class="button w-max" href="<?php echo esc_url($hero_button_url); ?>">
                            <?php echo esc_html($hero_button_text); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex justify-end grow">
                <div class="bg-hero-img"></div>
                <?php if ($hero_image): ?>
                    <img class="absolute top-0 scale-110" src="<?php echo esc_url($hero_image); ?>" alt="Hero Image">
                <?php endif; ?>
                <?php if ($hero_award_text): ?>
                    <div class="award-hero">  
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px" width="800px" version="1.1" id="Capa_1" viewBox="0 0 23.376 23.376" xml:space="preserve">
                            <g>
                                <g>
                                    <path style="fill:#030104;" d="M15.554,8.058c0,2.132-1.731,3.861-3.868,3.861c-2.132,0-3.857-1.729-3.857-3.861s1.726-3.865,3.857-3.865C13.823,4.192,15.554,5.926,15.554,8.058z"/>
                                    <path style="fill:#030104;" d="M16.295,12.944l2.516-0.479l-0.608-2.259l1.911-1.508L18.42,6.891l0.917-2.461l-2.566-0.696L16.295,1.13L13.73,2.105L11.863,0l-1.74,1.955L7.477,0.92L6.911,3.507L4.305,4.212l0.827,2.233l-1.87,1.807l1.87,1.608l-0.65,2.324l2.43,0.583l0.23,0.943L4.22,21.921l3.215-0.833l2.432,2.288l1.82-6.589l2.002,6.589l2.169-2.086l3.559,0.148l-3.303-7.767L16.295,12.944z M6.871,8.058c0-2.662,2.16-4.821,4.815-4.821c2.665,0,4.822,2.16,4.822,4.821s-2.157,4.818-4.822,4.818C9.032,12.876,6.871,10.719,6.871,8.058z M9.534,21.726l-1.858-1.924l-2.12,0.743l1.923-5.189l1.196-0.554l0.944-0.381l1.49,1.534L9.534,21.726z M15.702,20.369l-1.621,1.533l-1.793-6.034l1.224-1.27l2.405,0.757l2.361,5.278L15.702,20.369z"/>
                                </g>
                            </g>
                        </svg>
                        <?php echo esc_html($hero_award_text); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
