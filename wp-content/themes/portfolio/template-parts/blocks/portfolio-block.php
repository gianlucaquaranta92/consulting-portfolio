<section style="padding-bottom: 0">
    <div class="page-width">
        <h2 ><?php echo esc_html(get_field('services_block_title')); ?></h2>
    </div>
</section>

<?php 
$services = get_field('services_repeater'); 

if (!empty($services) && is_array($services)) { 
    foreach ($services as $service) {
        $service_contributes = $service['service_contribute'] ?? 'yolo';
        $service_title = $service['service_title'] ?? ''; 
        $service_image = $service['service_image'] ?? '';
        $phone_image = $service['phone_image'] ?? '';
        $service_link = $service['service_url'] ?? '';
        $service_description = $service['service_description'] ?? '';
        $first = true; 
?>
    <section  class="single-projects flex flex-row items-center">
        <div class="page-width">
            <div class="w-full flex flex-row gap-8 items-center project-content">
                <div class="grow basis-0 flex flex-col ">
                    <div class="flex gap-2">
                        <?php foreach( $service_contributes as $key => $service_contribute ){ ?>
                            <div class="text-xl">
                                <?php 
                                    if (!$first) {
                                        echo "- ";
                                    }
                                 $first = false; 
                                 echo esc_html($service_contribute);
                                ?>
                            </div>
                        <?php } ; ?>
                    </div>    
                <h3><?php echo esc_html($service_title); ?></h3>
                    <p class="pt-4 font-medium"><?php echo esc_html($service_description); ?></p>
                    <a class="button mt-12 w-max" href="<?php echo esc_html($service_link); ?>"><span></span>Visit Website
                     <i class="icon-arrow-up-right ml-4"></i> </a>
                </div>
                <div class="rounded-sm grow basis-0 relative aspect-[16/9]">
                    <?php if (!empty($service_image)): ?>
                        <img class="rounded-sm duration-300 w-full h-full top-0 left-0 absolute object-cover" 
                            src="<?php echo esc_url($service_image); ?>" 
                            alt="<?php echo esc_attr($service_title); ?>">
                    <?php else: ?>
                        <img class="rounded-sm duration-300 w-full h-full top-0 left-0 absolute object-cover" 
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/windows.webp" 
                            alt="Default Image">
                    <?php endif; ?>
                    <img class="absolute h-[60%] bottom-0 phone-screen" src="<?php echo esc_attr($phone_image); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<?php 
    } 
}  
?>
