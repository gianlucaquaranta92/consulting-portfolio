<?php 
$counters = get_field('counter_repeater');
$button_text = get_field('counter_button_text');
$button_url = get_field('counter_button_url');

if (!empty($counters)): ?>
<section>
    <div class="page-width">
        <div class="flex justify-around gap-16">
            <?php foreach ($counters as $counter): 
                $counter_number = $counter['counter_number'];
                $counter_text = $counter['counter_text'];
            ?>
                <div>
                    <div class="counter" data-target="<?php echo esc_attr($counter_number); ?>">0</div>
                    <div class="text-center"><?php echo esc_html($counter_text); ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        <a class="button w-max mx-auto mt-16" href="<?php echo esc_url($button_url); ?>">
            <?php echo esc_html($button_text); ?>
        </a>
    </div>
</section>
<?php endif; ?>
