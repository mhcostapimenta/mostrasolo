<!-- Carrega o Footer correto -->
<?php 
    if (is_page('100solosrj') || in_category('solosrj') && !(is_search())) {
        // Footer da página 100 Solos RJ
        require get_template_directory(). '/inc/100solosrj_footer.php';
    } else {
        // Footer da página principal
        require get_template_directory(). '/inc/inicio_footer.php';
    }
?>
    <a class="cd-top" href="#">Link</a>
    
    <!-- Carrega todas as funções do Footer -->
    <?php  wp_footer(); ?> 
    
</body>

</html>