<?php 

	// Carrega a URL da imagem fullsize
	$img_url = get_the_post_thumbnail_url(get_the_ID(), 'slider');

 ?>

<!-- Conteúdo do Template -->
<?php
  if (rwmb_meta( 'mostrasolo-urlVideo' )) {
    $video_url = rwmb_meta( 'mostrasolo-urlVideo' );
  } else {
    $video_url = "#";
  }
?>

<div class="conteudo">
    <a href="<?php  echo $video_url; ?>" target="_blank">
        <div class="video" backimage="<?php  echo $img_url; ?>">
        <i class="fa fa-play-circle-o"></i>
      </div>
    </a>
    <div class="legendaVideo">
        <h1>Processo Criativo</h1>
        <h2><?php the_title(); ?></h2>
        <h4 class="d-none d-md-block">Diretor(es):  <?php echo strip_tags(get_the_term_list( $post->ID, 'diretor', ' ', ', ' )); ?></h4>
        <h4 class="d-none d-md-block">Ator(es): <?php echo strip_tags(get_the_term_list( $post->ID, 'ator', ' ', ', ' )); ?></h4>
    </div>
</div>