<?php 

	// Carrega a URL da imagem fullsize
	$img_url = get_the_post_thumbnail_url(get_the_ID(), 'slider');

 ?>

<!-- Conteúdo do Template -->
<div class="slider">
    <a href="<?php echo get_the_permalink(); ?>">
        <div class="espetaculo" backimage="<?php  echo $img_url; ?>">
            <div class="boxEspetaculo">
                <div><span>#<?php echo rwmb_meta( 'mostrasolo-numero' ); ?></span></div>
                <div>
                    <h1><?php the_title(); ?></h1>
                    <h4>Diretor(es): <?php echo strip_tags(get_the_term_list( $post->ID, 'diretor', ' ', ', ' )); ?></h4>
                    <h4>Ator(es): <?php echo strip_tags(get_the_term_list( $post->ID, 'ator', ' ', ', ' )); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    </a>
</div>