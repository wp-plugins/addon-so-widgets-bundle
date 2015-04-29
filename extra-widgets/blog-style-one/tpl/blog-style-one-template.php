<?php
$query = siteorigin_widget_post_selector_process_query($instance['posts']);
$the_query = new WP_Query($query);
$widget_title = wp_kses_post($instance['widget_title']);
$custom_class = wp_kses_post($instance['custom_class']);
?>

<?php if ($widget_title) { ?>
    <h3 class="widget-title">
        <span><?php echo $widget_title ?></span>
    </h3>
<?php } ?>

<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


    <div class="blog_one_style clearfix <?php echo $custom_class ?>">

         <div class="col-md-4 image alpha">
         <?php if(has_post_thumbnail()){
             the_post_thumbnail();
         } ?>
         </div>

        <div class="col-md-8 content">
        <h4><?php the_title(); ?></h4>
        <?php the_excerpt(); ?>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 meta clearfix">
            <div class="pull-left">
            by <?php the_author(); ?> | <?php echo get_the_date(); ?> | <?php the_category(', '); ?>
            </div>
            <div class="pull-right">
            <a href="<?php the_permalink(); ?>">Read More <span class="glyphicon glyphicon-menu-right"></span></a>
            </div>
        </div>
    </div>


<?php endwhile; ?>