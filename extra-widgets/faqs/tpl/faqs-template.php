<?php
$widget_title = wp_kses_post($instance['widget_title']);
$custom_class = wp_kses_post($instance['custom_class']);
$query = siteorigin_widget_post_selector_process_query($instance['posts']);
$the_query = new WP_Query($query);

?>



<?php if ($widget_title) { ?>
    <h3 class="widget-title">
        <span><?php echo $widget_title ?></span>
    </h3>
<?php } ?>


<ul class="accordion <?php echo $custom_class ?>">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li>
            <a> <?php the_title(); ?></a>
            <?php the_content();?>
        </li>
        <?php endwhile; ?>
</ul> <!-- / accordion -->


