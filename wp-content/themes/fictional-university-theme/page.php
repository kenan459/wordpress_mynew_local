
<?php

get_header();

while(have_posts()) {
    the_post(); ?>
    <h2>This is a page</h2>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php }

get_footer();

?>
 