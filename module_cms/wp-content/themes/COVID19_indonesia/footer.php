</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>



<script>
    let menu = document.querySelector("header nav#menu");
    toggle = document.querySelector(".toggle-nav");

    toggle.onclick = function() {
        menu.classList.toggle('show')
    }
</script>



</body>
</html>