<?php 

	// Carrega contador de item
	global $primeiroItem;

	// Carrega a URL da imagem fullsize
	$img_url = get_the_post_thumbnail_url(get_the_ID());


	// Se for o primeiro item colocar ative na classe do slider
	if ($primeiroItem == 0) {
		$str_active = 'active';
	} else {
		$str_active = '';
	}

 ?>

<!-- Conteúdo do Template -->
<div class="carousel-item <?php echo $str_active; ?> d-flex flex-column justify-content-end" backslide="<?php  echo $img_url; ?>">
	<a href="<?php echo get_the_permalink(); ?>">
		<h1><?php the_title(); ?></h1>
		<p><?php the_excerpt(); ?></p>
	</a>
</div>
