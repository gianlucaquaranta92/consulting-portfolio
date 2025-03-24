<section>
    <div class="page-width">
        <div>
            <h2 class="pb-16 "><?php echo esc_html(get_field('services_block_title')); ?></h2>
            <div class="flex flex-row flex-wrap gap-8 items-center">
                <?php if( have_rows('services_repeater') ): ?>
                    <?php foreach( get_field('services_repeater') as $service ): 
                        $service_title = $service['service_title'];
                        $service_image = $service['service_image']; 
                        $service_link = $service['service_url'];
                    ?>
                        <a href="<?php echo esc_url($service_link); ?>" class="group overflow-hidden  h-[400px] relative rounded-sm w-full max-w-[calc(50%-1rem)] shadow-md p-8 grow flex flex-col  justify-end gap-4">
                            <div class="rounded-sm bg-gradient-to-b from-transparent to-black h-full w-full absolute top-0 left-0 z-0"></div>   
                            <?php if ($service_image): ?>
                                <img class="rounded-sm group-hover:scale-105 duration-300 z-[-1] w-full h-full top-0 left-0 absolute object-cover" src="<?php echo esc_url($service_image); ?>" alt="<?php echo esc_attr($service_title); ?>">
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/building-exterior.webp" alt="project-image">
                            <?php endif; ?>
                            <p class="text-white font-bold text-4xl z-10 group-hover:translate-y-[-20%] translate-y-[100%] group-hover:text-secondary duration-300"><?php echo esc_html($service_title); ?></p>
                           <div class="flex flex-row gap-2">
                                <p class="text-white z-10 text-xl  group-hover:translate-y-[-80%] translate-y-[220%] font-bold duration-300">Read more  <i class="icon-chevron-right text-[17px]  text-white ml-3"></i></p>
                              </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
