<?php
$query = siteorigin_widget_post_selector_process_query($instance['posts']);
$the_query = new WP_Query($query);
$widget_title = wp_kses_post($instance['widget_title']);
$layout = wp_kses_post($instance['layout']);
$custom_class = wp_kses_post($instance['custom_class']);
?>

<?php if ($widget_title) { ?>
    <h3 class="widget-title">
        <span><?php echo $widget_title ?></span>
    </h3>
<?php } ?>

<div class="all_main">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="auto_height <?php echo $layout ?>  <?php echo $custom_class ?>">
            <div class="blog_two_style clearfix">
                <div class="main">
                    <div class="image">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                    </div>

                    <div class="content clearfix">
                        <h4><?php the_title(); ?></h4>
                        <div class="meta">
                        by <?php the_author(); ?> | <?php echo get_the_date(); ?> | <?php the_category(', '); ?>
                        </div>
                        <div class="border"></div>
                        <?php the_excerpt(); ?>
                        <div class="clearfix"></div>
                        <div class="pull-left">
                        <small><a href="<?php the_permalink(); ?>">Read More <span class="glyphicon glyphicon-menu-right"></span></a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php endwhile; ?>

</div>

<div class="clearfix"></div>
