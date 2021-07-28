<?php 

	// Carrega contador de item
	global $primeiroItem;

	// Carrega a URL da imagem fullsize
	$img_url = get_the_post_thumbnail_url(get_the_ID());

 ?>

<!-- Conteúdo do Template -->
<div class="ano">
    <div class="d-flex flex-row justify-content-between align-items-center anoImagem" backimage="<?php  echo $img_url; ?>">
        <h1><?php the_title(); ?></h1><i class="fa fa-arrow-up setaUp"></i><i class="fa fa-arrow-down setaDown"></i>
    </div>
    <div class="anoConteudo">
        <div class="container">
            <div class="row mb-3">
                <div class="col">           
                    <p><?php echo rwmb_meta( 'mostrasolo-texto' ); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 dados mb-md-0 mb-3">
                  <span class="numero"><?php echo rwmb_meta( 'mostrasolo-espetaculos' ); ?></span>
                  <span class="txtNumero">espetáculos</span>
                </div>
                <div class="col-12 col-md-4 dados mb-md-0 mb-3">
                  <span class="numero"><?php echo rwmb_meta( 'mostrasolo-apresentacoes' ); ?></span>
                  <span class="txtNumero">apresentações</span>
                </div>
                <div class="col-12 col-md-4 dados mb-md-0 mb-3">
                  <span class="numero"><?php echo rwmb_meta( 'mostrasolo-publico' ); ?></span>
                  <span class="txtNumero">público</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h4>Programação</h4>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>