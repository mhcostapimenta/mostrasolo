<!-- Carrega o cabeçalho -->
<?php get_header(); ?> 

<!-- Sessão TOPO -->
<div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" id="carousel-1">
            <div class="carousel-inner" role="listbox">

              <!-- Aqui entra o loop Wordpress para mostrar os SLIDERS -->
              <?php

                $args = array(
                    'posts_per_page'=> 8,
                    'post_type' => 'espetaculo',  // Tipo de post
                    'category_name' => 'destaque+solosbrasil',
                    'orderby' => 'publish_date',	// Ordenar pela data de publicacao
                );

                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ):

                    while ( $loop->have_posts() ): 
                        $loop->the_post();

                        // Carrega o template com os thumbs
                        get_template_part( 'template-parts/content', 'sliders');   
                        
                        // Incrementa primeiro item
                	      $primeiroItem++;

                    endwhile;
                    wp_reset_postdata();
                    // Aqui termina o loop Wordpress

                else:
                ?>

                <p>Nada encontrado ainda ...</p>

                <?php
                // Fim do if do loop Wordpress SLIDERS
                endif;
              ?>
            </div>
            <div>
              <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
</section>
<!-- Fim Sessão TOPO -->

<!-- Sessão MOSTRA -->
<section id="mostra">
  <div class="row no-gutter">
      <div class="col-12 col-md-4 boxMostra">
          <div class="boxMostraContent"><i class="fa fa-compass"></i>
              <h4>Objetivo</h4>
              <p>A<strong> Mostra Solo Brasileiro</strong><em> </em>surge, em 2017, da união de alguns atores e produtores residentes na cidade do Rio de Janeiro, buscando criar uma conexão com a realidade cultural e econômica do país. Trata-se de
                  um projeto que tem como intuito apresentar e fomentar a produção de espetáculos solo, nas suas diversas formas, de todo território nacional.&nbsp;<br></p>
          </div>
      </div>
      <div class="col-12 col-md-4 boxMostra">
          <div class="boxMostraContent"><i class="fa fa-handshake-o"></i>
              <h4>Parcerias</h4>
              <p>Esperamos não limitar o projeto na relação público e espectador, ainda que esse seja um ponto relevante. Contudo, também estimamos ampliar o intercâmbio entre os profissionais das diversas regiões do país e fortalecer a troca entre
                  atores, diretores, estudantes da cena teatral brasileira.&nbsp;<br></p>
          </div>
      </div>
      <div class="col-12 col-md-4 boxMostra">
          <div class="boxMostraContent"><i class="fa fa-check"></i>
              <h4>Metas</h4>
              <p>Pretendemos, além de se tornar referência como uma mostra anual no calendário brasileiro, a ampliação das ações do projeto, somando na parte artística a apresentação também de espetáculos infantis, de cenas curtas, intervenções solo
                  urbanas e oficinas contemplando as diversas etapas para construção e desenvolvimento de um espetáculo solo.&nbsp;<br></p>
          </div>
      </div>
  </div>
</section>
<!-- Fim Sessão MOSTRA -->

<!-- Sessão HISTORICO -->
<section id="historico">

  <!-- Aqui entra o loop Wordpress para mostrar os SLIDERS -->
  <?php

    $args = array(
        'posts_per_page'=> 8,
        'post_type' => 'temporada',  // Tipo de post
        'orderby' => 'title',				// Ordenar pelo titulo (ano) da temporada
        'order' => 'DESC' 						// Ordem Descendente
    );

    $loop = new WP_Query( $args );

    if ( $loop->have_posts() ):

        while ( $loop->have_posts() ): 
            $loop->the_post();

            // Carrega o template com os thumbs
            get_template_part( 'template-parts/content', 'temporada');   
            
            // Incrementa primeiro item
            $primeiroItem++;

        endwhile;
        wp_reset_postdata();
        // Aqui termina o loop Wordpress

    else:
    ?>

    <p>Nada encontrado ainda ...</p>

    <?php
    // Fim do if do loop Wordpress SLIDERS
    endif;
  ?>

</section>
<!-- Fim Sessão HISTORICO -->

<!-- Sessão EQUIPE -->
<section id="equipe">
        <div class="row no-gutter">
            <div class="col-12 col-md-4 boxEquipe">
                <div class="boxEquipeContent">
                    <div class="foto" backimage="<?php echo get_template_directory_uri().'/assets/img/fotoFernando.jpg'?>"></div>
                    <div>
                        <h4>Fernando Alax</h4>
                        <h5>Produtor Teatral e Designer</h5>
                        <p>Formado em desenho de produto pela Escola de Belas Artes - UFRJ. No teatro, participou da produção executiva de diversas peças, tais como: “Fiesta” e “Ay LAmor” do grupo italiano Due Mondi; “A descoberta das Américas” com atuação
                            de Julio Adrião; “Pouco amor não é amor” texto de Nelson Rodrigues e direção de Sidnei Cruz; “Urbana” de Glaucy Fragoso; “Utopia D - 500 anos depois” dirigido por Moacir Chaves, entre outros. É idealizador e produtor da Casa136
                            Laranjeiras, inaugurada em maio de 2019<br></p><a href="https://www.facebook.com/fernando.alax" target="_blank"><i class="fa fa-facebook-square"></i></a><a href="https://www.instagram.com/casa136laranjeiras/" target="_blank"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
            <div class="col-12 col-md-4 boxEquipe">
                <div class="boxEquipeContent">
                    <div class="foto" backimage="<?php echo get_template_directory_uri().'/assets/img/fotoJulio.jpg'?>"></div>
                    <div>
                        <h4>Julio Adrião</h4>
                        <h5>Ator, Produtor e Diretor Teatral</h5>
                        <p>Formado pela CAL/RJ em 1987. Trabalhou durante 6 anos na Itália, com foco no treinamento físico do ator. De volta ao Brasil, em 1994, criou e integrou o trio cômico Cia. do Público até 2002. Atuou, produziu e dirigiu espetáculos
                            de teatro e, como ator, participou de diversas produções, em curtas e longa metragens, no cinema e séries na TV. Vencedor do Prêmio Shell/RJ de melhor ator em 2005, com o espetáculo solo “A descoberta das Américas”, texto de
                            Dario Fo.<br></p><a href="https://www.facebook.com/A.Descoberta.das.Americas.JulioAdriao/" target="_blank"><i class="fa fa-facebook-square"></i></a><a href="https://www.instagram.com/adescobertadasamericas/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a
                            href="https://youtube.com/c/ADescobertadasAm%C3%A9ricasJulioAdri%C3%A3o" target="_blank"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 boxEquipe">
                <div class="boxEquipeContent">
                    <div class="foto" backimage="<?php echo get_template_directory_uri().'/assets/img/fotoRoberto.jpg'?>"></div>
                    <div>
                        <h4>Roberto Rodrigues</h4>
                        <h5>Ator, Músico, Palhaço e Criador</h5>
                        <p>Formado em Interpretação - Artes Cênicas (UNIRIO/2007). Fundou e integrou a Cia Teatral Milongas (2003-2020).  Pesquisador teórico-prático sobre as técnicas de comicidade, especialmente dos palhaços, bufões, movimentos da capoeira  e danças populares brasileiras para corpo em cena. Sua trajetória conta com diversos festivais e mostras teatrais nacionais e internacionais, espetáculos de sala, rua e espaços alternativos, obras premiadas e reconhecidas em todo Brasil, além de filmes e seriados para televisão e cinema nacional e internacional.<br></p><a href="https://www.facebook.com/roberto.rodrigues.737" target="_blank"><i class="fa fa-facebook-square"></i></a><a href="https://instagram.com/rodriguesrobertopalito" target="_blank"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </section>
<!-- Fim Sessão EQUIPE -->

<!-- Carrega o footer -->
<?php get_footer(); ?> 