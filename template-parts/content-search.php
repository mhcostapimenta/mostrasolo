<?php 

	// Carrega a URL da imagem fullsize
	$img_url = get_the_post_thumbnail_url(get_the_ID(), 'thumb');

 ?>

<!-- Conteúdo do Template -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="resultado">
        <a href="<?php echo get_the_permalink(); ?>">
        <div class="resultadoImagem" backimage="<?php  echo $img_url; ?>">
              <span>#<?php echo rwmb_meta( 'mostrasolo-numero' ); ?></span>
            </div>
            <div class="resultadoTexto">
                <h1><?php the_title(); ?></h1>
                <h4>Diretor(es): <?php echo strip_tags(get_the_term_list( $post->ID, 'diretor', ' ', ', ' )); ?></h4>
                <h4>Ator(es): <?php echo strip_tags(get_the_term_list( $post->ID, 'ator', ' ', ', ' )); ?></h4>
                <p><?php the_excerpt(); ?></p>
            </div>
        </a>
    </div>
</div>

