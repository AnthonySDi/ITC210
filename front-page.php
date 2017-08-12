<?php
get_header();
?>
<!--This is where Front-page.php middle starts-->
<!--start protosite content-->
<?php if(have_posts()):while(have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile; endif; ?>
<!--end protosite content-->
<!--This is where Front-page.php middle +++ ENDS ++++ -->
<?php
get_footer();
?>
