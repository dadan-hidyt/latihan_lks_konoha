<?php
get_header();
?>
<div class="list-news">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <?php  get_template_part( 'entry' ); ?>
<?php
comments_template();
endwhile; endif;
?>
</div>

<?php
get_template_part( 'nav', 'below' );
get_footer();