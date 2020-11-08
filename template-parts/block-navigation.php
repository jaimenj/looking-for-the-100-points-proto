<?php
$next_post = get_next_post();
$prev_post = get_previous_post();

if ($next_post || $prev_post) {
    $pagination_classes = '';

    if (!$next_post) {
        $pagination_classes = ' only-one only-prev';
    } elseif (!$prev_post) {
        $pagination_classes = ' only-one only-next';
    } ?>

    <nav class="pagination-single section-inner<?php echo esc_attr($pagination_classes); ?>" aria-label="<?php esc_attr_e('Post', 'twentytwenty'); ?>" role="navigation">
        <div class="row">
            <div class="col-md-6">
                <?php
                if ($prev_post) {
                    ?>
                    <a class="previous-post" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                        <span class="icon icon-previous2"></span>
                        <span class="title"><span class="title-inner"><?php echo wp_kses_post(get_the_title($prev_post->ID)); ?></span></span>
                    </a>
                    <?php
                } 
                ?>
            </div>
            <div class="col-md-6 text-right">
                <?php
                if ($next_post) {
                    ?>
                    <a class="next-post" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                        <span class="title"><span class="title-inner"><?php echo wp_kses_post(get_the_title($next_post->ID)); ?></span></span>
                        <span class="icon icon-next2"></span>
                    </a>
                    <?php
                } 
                ?>
            </div>
        </div>
    </nav>

    <?php
}
