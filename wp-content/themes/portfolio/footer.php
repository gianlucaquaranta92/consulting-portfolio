<?php
// Declare all ACF fields at the top of the page
$footer_logo = get_field('footer_logo', 'option');
$quick_links = get_field('footer_quick_links', 'option');
$contact_phone = get_field('contact_phone', 'option');
$contact_email = get_field('contact_mail', 'option');
?>

<footer class="bg-black text-white p-16 group overflow-hidden">

    <div class="page-width relative">
      <div style="inset: -85% auto auto 0%; background:#7ab0ff " class="round-gradient"> </div>
      <div style="inset: 80% auto auto 84%; background:#7ab0ff" class="round-gradient"> </div>
        <div class="footer-columns flex gap-4 justify-between flex-row pb-8">
          <div class="w-full text-center">
            <div class="uppercase text-2xl">Need a developer?</div>
            <h2 style="font-size: 78px" class="group-hover:text-secondary duration-300 font-bold">Let`s work together!</h2>
          </div>

            <!-- Column 1: Logo, Heading, and Opening Hours -->
            
                <?php if (!empty($footer_logo)) : ?>
                  <div class="flex flex-col justify-between">
                    <img class="max-w-[200px]" src="<?php echo esc_url($footer_logo); ?>" alt="Footer Logo">
                  </div>
                <?php endif; ?>
        </div>
        <!-- Footer Copyright Section -->
        <div class="border-primary border-t-2 bg-black pt-8">
          
              <!-- Column 1: Contact Info -->
              <div class="flex flex-col gap-16">
                <div class="flex flex-row justify-between">
                  <div class="flex flex-row gap-8">
                    <?php if (!empty($contact_phone)) : ?>
                      <div class="flex flex-row gap-4 items-center">
                        <i class="icon-phone opacity-70 text-white"></i>
                        <a class="hover:text-secondary  duration-300 font-bold" href="tel:<?php echo esc_attr($contact_phone); ?>"><?php echo esc_attr($contact_phone); ?></a>
                      </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($contact_email)) : ?>
                      <div class="flex flex-row gap-4 items-center">
                        <i class="icon-mail opacity-70 text-white"></i>
                        <a class="hover:text-secondary duration-300  text-white" href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a>
                      </div>
                    <?php endif; ?>
                  
                  </div>
                  <div class="flex flex-row gap-4 ">
                    <a href="#" class="z-10 icon-linkedin text-3xl duration-300 hover:text-secondary text-white"></a>
                    <a href="#" class="z-10 icon-github text-3xl duration-300 hover:text-secondary text-white"></a>
                  </div>
                </div>
              
                <p>&copy; All rights reserved <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
              
                
              </div>
              
          

        </div>
    </div>  
</footer>

<?php wp_footer(); ?>
</body>
</html>
