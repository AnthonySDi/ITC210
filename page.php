<?php
get_header();
?>
<!--This is where page.php middle +++ STARTS +++-->
<?PHP if(is_404()) {echo 'That page could not be located.   ';} ?>
<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
<main>
<?php the_content(); ?>
</main>
<?php endwhile; endif;?>
<!--This is where page.php middle +++ ENDS +++-->
<?php
get_footer();
?>