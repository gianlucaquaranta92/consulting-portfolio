<section>
    <div class="page-width">
        <div>
            <h2 class="pb-16 text-center"><?php echo esc_html(get_field('services_block_title')); ?></h2>
            <div class="flex flex-row flex-wrap gap-8 items-center">
                <?php if( have_rows('services_repeater') ): ?>
                    <?php foreach( get_field('services_repeater') as $service ): 
                        $service_title = $service['service_title'];
                        $service_description = $service['service_description'];
                        $service_icon = $service['service_icon']; 
                        $service_link = $service['service_url'];
                    ?>
                        <a href="<?php echo esc_url($service_link); ?>" class="group relative rounded-sm max-w-[48%] shadow-md p-8 grow flex flex-col gap-4 items-center text-center hover:hover:translate-y-[-10px] transition-transform duration-300">
                            <div class="background-icons"></div>
                            <?php if ($service_icon): ?>
                                <img class="icon" src="<?php echo esc_url($service_icon); ?>" alt="<?php echo esc_attr($service_title); ?>">
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/award-icon.svg" alt="hero-image">
                            <?php endif; ?>
                            <h4 class="group-hover:text-primary duration-300"><?php echo esc_html($service_title); ?></h4>
                            <p><?php echo esc_html($service_description); ?></p>
                            <p class="group-hover:text-primary group-hover:underline font-bold duration-300">Read more</p>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
