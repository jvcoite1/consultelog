<?php get_header(); ?>
<?php get_template_part('./templates/top'); ?>

<?php
wp_reset_query();
wp_reset_postdata();
// $args = [];
// $args['category_name'] = 'publicacoes';
// $the_query = new WP_Query($args);
if(have_posts()): while(have_posts()):the_post();
?>

<div id="single">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="titulo">
            <span><?php the_title(); ?></span>
            <div class="linha"></div>
          </div>

          <div class="capa"><img class="img-fluid img-center" src="<?php the_post_thumbnail_url(); ?>"></div>

          <div class="conteudo">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>

<?php get_template_part('./templates/rdp'); ?>
<?php get_footer(); ?>