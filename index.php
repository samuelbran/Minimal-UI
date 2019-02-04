<?php get_header(); ?>

<section class="section">
  <div class="container">
    <div class="content">
      <div class="posts-list">
        <h1 class="title is-3">Latest Posts</h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="post">
            <a href="<?php the_permalink(); ?>">
              <h2 class="title is-5"><?php the_title(); ?></h2>
            </a>
          </div>
        <?php endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
  </div>
</section>
<?php get_footer(); ?>
