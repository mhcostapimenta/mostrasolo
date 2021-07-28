<!-- Se for uma página interna adicionar string da URL de origem -->
<?php
    // Endereço do site principal
    $home_url = get_bloginfo('url');

    if (is_single() || is_search()) {
        $str_url = $home_url.'/100solosrj/';
    } else {
        $str_url = '';
    }
?>

<!-- Topo da página 100 Solos RJ -->
<section id="topoChild">
    <nav class="navbar navbar-light navbar-expand-md text-md-left text-center">
        <div class="container-fluid">
          <a class="navbar-brand scrollSlow" href="<?php echo $str_url;?>#">
          <img src="<?php echo get_template_directory_uri().'/assets/img/btn100SolosRJ.svg'?>">
          </a>
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>"><i class="fas fa-home"></i>HOME</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#publicacao"><i class="fa fa-book"></i>A PUBLICAÇÃO</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#espetaculos"><i class="fas fa-theater-masks"></i>ESPETÁCULOS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#solotv"><i class="fa fa-tv"></i>SOLOTV</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#contatorj"><i class="fa fa-comments-o"></i>CONTATO</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item btnSolosRJ" role="presentation">
                        <!-- Carrega o formulário de pesquisa -->
                        <?php get_search_form(); ?>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
<!-- Fim do Topo da Página 100 Solos RJ -->