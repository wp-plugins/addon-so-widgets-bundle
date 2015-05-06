<?php
$widget_title = wp_kses_post($instance['widget_title']);
$spacer = wp_kses_post($instance['spacer']);
$custom_class = wp_kses_post($instance['custom_class']);

?>



<?php if ($widget_title) { ?>
    <h3 class="widget-title">
        <span><?php echo $widget_title ?></span>
    </h3>
<?php } ?>


<div class="spacer <?php echo $custom_class; ?>" style="height: <?php echo $spacer ?>px">
</div>