<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- Carrega os atributos de língua da página -->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Carrega o Header correto -->
    <?php       
        if (is_page('100solosrj') || in_category('solosrj') && !(is_search())) {
            // Favicon da página 100 Solos RJ
        ?>
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'/assets/img/favicon16x16SoloRJ.png'?>">
            <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/img/favicon32x32SoloRJ.png'?>">
        <?php
        } else {
            // Favicon da página principal
        ?>
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'/assets/img/favicon16x16SoloBR.png'?>">
            <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/img/favicon32x32SoloBR.pngg'?>">
        <?php
        }
    ?>
    <?php  wp_head(); ?><!-- carrega todas as nossas funções, folhas de estilo e scripts do functions.php --> 
</head>

<body>

<!-- Carrega o Header correto -->
<?php       
    if (is_page('100solosrj') || in_category('solosrj') && !(is_search())) {
        // Topo da página 100 Solos RJ
        require get_template_directory(). '/inc/100solosrj_header.php';
    } else {
        // Topo da página principal
        require get_template_directory(). '/inc/inicio_header.php';
    }
?>


