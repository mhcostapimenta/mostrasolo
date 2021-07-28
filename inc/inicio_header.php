<!-- Se for uma página interna adicionar string da URL de origem -->
<?php
    if (is_single() || is_search()) {
        $str_url = get_bloginfo('url').'';
    } else {
        $str_url = ''; 
    }
?>

<!-- Topo da página principal -->
<section id="topo">
    <nav class="navbar navbar-light navbar-expand-md text-md-left text-center">
        <div class="container-fluid">
            <a class="navbar-brand scrollSlow" href="<?php echo $str_url;?>#">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logoSolosHor.svg'?>">
            </a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active scrollSlow" href="<?php echo $str_url;?>#topo">HOME</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#mostra">A MOSTRA</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#historico">HISTÓRICO</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#equipe">EQUIPE</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link scrollSlow" href="<?php echo $str_url;?>#contato">CONTATO</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item btnSolosRJ" role="presentation">
                        <a class="nav-link active" href="<?php echo get_bloginfo('url').'/100solosrj/'?>">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/btn100SolosRJ.svg'?>">
                        </a>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
<!-- Fim do Topo da Página principal -->