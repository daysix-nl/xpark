<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header(); ?>
<main>
    <?php the_content();?>
</main>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Controleer of we op een 'case' pagina zijn
    var isCasePage = <?php echo is_singular('case') ? 'true' : 'false'; ?>;

    if (isCasePage) {
        // Zoek de "Cases" menu-item
        var casesMenuItem = document.querySelector('a[href*="/cases/"]');
        
        if (casesMenuItem) {
            casesMenuItem.classList.add('active');
        }
    }
});
</script>
<?php get_footer(); ?>
