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
                    'category_name' => 'destaque+solosrj',
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


<!-- Sessão PUBLICACAO -->
<section id="publicacao">
        <div class="row no-gutter">
            <div class="col-12 col-md-4 boxMostra">
                <div class="boxMostraContent"><i class="fa fa-file-text-o"></i>
                    <h4>Pesquisa</h4>
                    <p>Servir como fonte de pesquisa para profissionais que buscam a produção de um espetáculo no formato solo, sejam eles atores, diretores, dramaturgos, figurinistas, cenotécnicos, iluminadores, produtores, entre outros.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 boxMostra">
                <div class="boxMostraContent"><i class="fa fa-bullhorn"></i>
                    <h4>Divulgação</h4>
                    <p>Facilitar a divulgação e a seleção de trabalhos para festivais e/ou contratos de apresentações diversas, além de contribuir para a formação e o desenvolvimento cultural, por meio da compilação de informações que possam ser utilizadas como banco de dados a futuras pesquisas.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 boxMostra">
                <div class="boxMostraContent"><i class="fa fa-fire"></i>
                    <h4>Fomento</h4>
                    <p>Aproximar profissionais do segmento, promovendo o intercâmbio cultural entre as diversas regiões do estado do Rio de Janeiro, ressaltando a importância da diversidade, mediante curadoria dos espetáculos que contemplem diferentes temas, gêneros, localidades e classificações etárias.</p>
                </div>
            </div>
        </div>
    </section>
<!-- Fim Sessão PUBLICACAO -->


<!-- Sessão ESPETACULOS -->
<section id="espetaculos">
        <div class="slider_wrap" data-slider-id="1"><i class="fas fa-theater-masks"></i>
            <div class="banner_slider">

              <!-- Aqui entra o loop Wordpress para mostrar os SLIDERS -->
              <?php

                $args = array(
                  'posts_per_page'=> 100,             // Total de posts
                  'post_type' => 'espetaculo',        // Tipo de post
                  'category_name' => 'solosrj',       // Categoria
                  'meta_key' => 'mostrasolo-numero',  // CPT a ser ordenado
                  'orderby' => 'meta_value',	        // Ordenar pelo CPT escolhido
                  'order' => 'ASC' 						        // Ordem Ascendente
                );

                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ):

                    while ( $loop->have_posts() ): 
                        $loop->the_post();

                        // Carrega o template com os thumbs
                        get_template_part( 'template-parts/content', 'espetaculosSlider');   

                    endwhile;
                    wp_reset_postdata();
                    // Aqui termina o loop Wordpress

                else:
                ?>

                <p>Nada encontrado ainda ...</p>

                <?php
                // Fim do if do loop Wordpress
                endif;
              ?>
            </div>
              <div class="thumbnail_slider_area">
                <div class="container">
                    <div class="row thumbnail_slider">

                        <!-- Aqui entra o loop Wordpress para mostrar os THUMBS -->
                        <?php

                          $args = array(
                            'posts_per_page'=> 100,             // Total de posts
                            'post_type' => 'espetaculo',        // Tipo de post
                            'category_name' => 'solosrj',       // Categoria
                            'meta_key' => 'mostrasolo-numero',  // CPT a ser ordenado
                            'orderby' => 'meta_value',	        // Ordenar pelo CPT escolhido
                            'order' => 'ASC' 						        // Ordem Ascendente
                          );

                          $loop = new WP_Query( $args );

                          if ( $loop->have_posts() ):

                              while ( $loop->have_posts() ): 
                                  $loop->the_post();

                                  // Carrega o template com os thumbs
                                  get_template_part( 'template-parts/content', 'espetaculosThumb');   

                              endwhile;
                              wp_reset_postdata();
                              // Aqui termina o loop Wordpress

                          else:
                          ?>

                          <p>Nada encontrado ainda ...</p>

                          <?php
                          // Fim do if do loop Wordpress
                          endif;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Fim da Sessão ESPETACULOS -->


<!-- Sessão SOLOTV -->
<section id="solotv">
        <div class="tv_slider_wrap"><i class="fa fa-tv"></i>
            <div class="tv_banner_slider">

              <!-- Aqui entra o loop Wordpress para mostrar os SLIDERS -->
              <?php

                $args = array(
                  'posts_per_page'=> 100,               // Total de posts
                  'post_type' => 'espetaculo',          // Tipo de post
                  'category_name' => 'solosrj+solotv',  // Categoria
                  'meta_key' => 'mostrasolo-numero',    // CPT a ser ordenado
                  'orderby' => 'meta_value',	          // Ordenar pelo CPT escolhido
                  'order' => 'ASC' 						          // Ordem Ascendente
                );

                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ):

                    while ( $loop->have_posts() ): 
                        $loop->the_post();

                        // Carrega o template com os thumbs
                        get_template_part( 'template-parts/content', 'espetaculosSliderSOLOTV');   

                    endwhile;
                    wp_reset_postdata();
                    // Aqui termina o loop Wordpress

                else:
                ?>

                <p>Nada encontrado ainda ...</p>

                <?php
                // Fim do if do loop Wordpress
                endif;
              ?>

            </div>
            <div class="tv_thumbnail_slider_area">
                <div class="container">
                    <div class="row tv_thumbnail_slider">

                      <!-- Aqui entra o loop Wordpress para mostrar os THUMBS -->
                      <?php

                        $args = array(
                          'posts_per_page'=> 100,               // Total de posts
                          'post_type' => 'espetaculo',          // Tipo de post
                          'category_name' => 'solosrj+solotv',  // Categoria
                          'meta_key' => 'mostrasolo-numero',    // CPT a ser ordenado
                          'orderby' => 'meta_value',	          // Ordenar pelo CPT escolhido
                          'order' => 'ASC' 						          // Ordem Ascendente
                        );

                        $loop = new WP_Query( $args );

                        if ( $loop->have_posts() ):

                            while ( $loop->have_posts() ): 
                                $loop->the_post();

                                // Carrega o template com os thumbs
                                get_template_part( 'template-parts/content', 'espetaculosThumbSOLOTV');   

                            endwhile;
                            wp_reset_postdata();
                            // Aqui termina o loop Wordpress

                        else:
                        ?>

                        <p>Nada encontrado ainda ...</p>

                        <?php
                        // Fim do if do loop Wordpress
                        endif;
                      ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Fim da Sessão SOLOTV -->

<!-- Carrega o footer -->
<?php get_footer(); ?> 