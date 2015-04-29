<?php
$widget_title =  wp_kses_post($instance['widget_title']);
$layout_selection =  wp_kses_post($instance['layout_selection']);
$grid_selection =  wp_kses_post($instance['grid_selection']);
$query = siteorigin_widget_post_selector_process_query($instance['posts']);
$the_query = new WP_Query($query);
$custom_class = wp_kses_post($instance['custom_class']);
$titan = TitanFramework::getInstance( 'demo_ather' );


?>


<?php if ($widget_title) { ?>
    <h3 class="widget-title">
        <span><?php echo $widget_title ?></span>
    </h3>
<?php } ?>



<div class="clearfix"></div>

<?php if($layout_selection == 'rotator'): ?>
<div class="testimonial_carousel">

        <?php  while ($the_query->have_posts()) : $the_query->the_post(); ?>



        <div class="testimonials_grid <?php echo $custom_class ?>">
            <div class="testimonial_content big-col">
                <p><?php echo the_content(); ?></p>
            </div>
            <h5>
                <a href=" <?php
                $testimonial_url = $titan->getOption( 'testimonial_url', get_the_ID() );
                echo  $testimonial_url;
                ?>">
                    <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive img-circle'));
                    }
                    ?>
                    <?php
                    $testimonial_user = $titan->getOption( 'testimonial_user', get_the_ID() );
                    echo  $testimonial_user;
                    ?>
                </a>
            </h5>
        </div>

    <?php endwhile; ?>
</div>

<?php elseif($layout_selection == 'grid'): ?>
    <?php  while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="<?php echo $grid_selection; ?>">
                <div class="testimonials_grid <?php echo $custom_class ?>">
                    <div class="testimonial_content big-col">
                        <p><?php echo the_content(); ?></p>
                    </div>
                    <h5>
                        <a href=" <?php
                        $testimonial_url = $titan->getOption( 'testimonial_url', get_the_ID() );
                        echo  $testimonial_url;
                        ?>">
                            <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive img-circle'));
                            }
                            ?>
                            <?php
                            $testimonial_user = $titan->getOption( 'testimonial_user', get_the_ID() );
                            echo  $testimonial_user;
                            ?>
                        </a>
                    </h5>
                </div>
        </div>


    <?php endwhile; ?>
<?php endif; ?>


<div class="clearfix"></div>
