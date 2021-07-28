<!-- Carrega o cabeçalho -->
<?php get_header(); ?>

<!-- Conteúdo do Artigo -->
<?php while( have_posts() ): the_post(); ?>

<div class="imagemDestaque" backimage="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="boxImagemDestaque">
            <div><span>#<?php echo rwmb_meta( 'mostrasolo-numero' ); ?></span></div>
            <div>
                <h1><?php the_title(); ?></h1>
                <h4>Diretor(es): <?php echo strip_tags(get_the_term_list( $post->ID, 'diretor', ' ', ', ' )); ?></h4>
                <h4>Ator(es): <?php echo strip_tags(get_the_term_list( $post->ID, 'ator', ' ', ', ' )); ?></h4>
            </div>
        </div>
    </div>
</section>

<!-- POST -->
<section id="post">

  <!-- Conteúdo do POST -->
  <?php the_content(); ?>
  
</section>

<!-- Fim do conteudo do artigo -->
<?php 
    endwhile;
    wp_reset_postdata();
?>

<!-- Carrega o footer -->
<?php get_footer(); ?> 