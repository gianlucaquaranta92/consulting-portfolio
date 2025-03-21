<?php

$counters = get_field('counter_repeater');
$button_text = get_field('counter_button_text');
?>


<section style="padding-top:0;" class="mt-0 ">
    <div class="page-width-default relative top-[-2rem] bg-white">
        <div class="shadow-lg rounded-sm p-8">
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
 </div>
    </div>
</section>