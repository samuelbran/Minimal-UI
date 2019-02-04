<?php get_header(); ?>

<section class="section">
  <div class="container">
    <div class="columns">
      <?php get_sidebar(); ?>

      <div class="column is-offset-1">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="content">
            <h1 class="title is-1"><?php the_title() ?></h1>
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
