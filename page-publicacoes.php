<?php get_header(); ?>
<?php get_template_part('./templates/top'); ?>

<div id="publicacoes" class="section">

  <div class="titulo">
    <span>Publicações</span>
    <div class="linha"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="publicacoes">

          <?php
          $args = [];
          $args['category_name'] = 'publicacoes';
          $args['posts_per_page'] = 10;
          $the_query = new WP_Query($args);
          if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();
          ?>
        
          <div class="publicacao">
            <a href="<?php the_permalink(); ?>">
              <?php
              if(has_post_thumbnail()) {
              ?>
              <div class="col-md-4">
                <div class="capa" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center / cover">
                  <!-- <img class="img-fluid img-center" src="<?php //the_post_thumbnail_url(); ?>"> -->
                </div>
              </div>

              <div class="col-md-8">
                <div class="conteudo">
                  <span class="titulo"><?php the_title(); ?></span>
                  <span class="resumo"><?php limitarCaracteres(get_the_excerpt(), 200); ?></span>
                  <div class="saiba-mais"><span>Saiba mais <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></div>
                </div>
              </div>

              <?php
              } else {
              ?>

              <div class="col-md-12">
                
                <div class="conteudo">
                  <span class="titulo"><?php the_title(); ?></span>
                  <span class="resumo"><?php limitarCaracteres(get_the_excerpt(), 200); ?></span>
                  <div class="saiba-mais">Saiba mais</div>
                </div>

              </div>

              <?php
              }
              ?>

            </a>
          </div>

          <?php
          endwhile; endif;
          ?>

        </div>
      </div>
      <div class="col-md-4">
        <h1>Sidebar</h1>
      </div>
    </div>
  </div>

</div>

<?php get_template_part('./templates/rdp'); ?>
<?php get_footer(); ?>