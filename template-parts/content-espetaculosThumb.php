<?php 

	// Carrega a URL da imagem fullsize
	$img_url = get_the_post_thumbnail_url(get_the_ID(), 'thumb');

 ?>

<!-- Conteúdo do Template -->
<div class="col"><img src="<?php  echo $img_url; ?>" loading="lazy" alt="#<?php echo rwmb_meta( 'mostrasolo-numero' ); ?>">
  <h5 class="thumbTxt">#<?php echo rwmb_meta( 'mostrasolo-numero' ); ?></h5>
</div>

