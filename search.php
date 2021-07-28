<!-- Carrega o cabeçalho -->
<?php get_header(); ?> 

</section>
    <section id="busca">
        <div class="container">
            <div class="row">

              <!-- Aqui entra o loop Wordpress para mostrar os resultados da Busca -->
              <?php

                  if (have_posts(  )) {
                      while ( have_posts() ) : the_post();

                        // Carrega o template com os thumbs
                        get_template_part( 'template-parts/content', 'search');

                      endwhile;

                      wp_reset_postdata();

                  } else {
                    ?>
                    <div class="msgBusca">
                      <p>Nenhum item encontrado!</p>
                    </div>
                    <?php
                  }	                    
              ?>
              <!-- Fim do Loop dos resultados da Busca -->

            </div>
        </div>
        
        <!-- PAGINAÇÃO -->
        <div class="row paginacao">
            <div class="col">
                <div class="wp-pagenavi text-center" role="navigation">
                    <!-- Carregar paginação caso haja necessidade -->
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>               
                </div>
            </div>
        </div>
        <!-- FIM DA PAGINAÇÃO -->

    </section>



<!-- Carrega o footer -->
<?php get_footer(); ?> 