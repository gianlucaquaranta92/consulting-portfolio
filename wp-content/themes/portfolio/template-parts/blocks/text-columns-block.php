<?php 

$text_columns_title = !empty(get_field('columns_section_title')) ? get_field('columns_section_title') : '';
$text_columns = !empty(get_field('columns_repeater')) ? get_field('columns_repeater') : [];


if ($text_columns): ?>
<section>
    <div class="page-width relative">
    <div style="inset: -10% auto auto 37%; filter: blur(260px);" class="round-gradient"> </div>
        <div>
            <?php if ($text_columns_title): ?>
                <h2 class="text-center relative"><?php echo esc_html($text_columns_title); ?></h2>
            <?php endif; ?>
            <div class="flex flex-row gap-8 mt-16 relative">
                <?php foreach ($text_columns as $column): 
                    $column_title = $column['single_column_title'] ?? '';
                    $column_description = $column['single_column_description'] ?? '';
                ?>
                    <div class="flex flex-col grow max-w-[33%] rounded-md single-text-column p-12 gap-4">
                        <?php if ($column_title): ?>
                            <h4><?php echo esc_html($column_title); ?></h4>
                        <?php endif; ?>
                        <?php if ($column_description): ?>
                            <p><?php echo esc_html($column_description); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
