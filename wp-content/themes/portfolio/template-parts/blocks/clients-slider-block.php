<?php 
$logos = get_field('customers_brands'); 
if ($logos) : ?>
<section>
    <div class="page-width">
        <h2 class="text-center">Our Clients</h2>
        <div class="splide" id="brand-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($logos as $logo) : 
                        $image = $logo['brand_image_url'];  ?>
                        <li class="splide__slide">
                            <img src="<?php echo esc_url($image); ?>" alt="Brand Logo">
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
