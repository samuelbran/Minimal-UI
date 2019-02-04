<?php get_header(); ?>

<section class="section">
  <div class="container">
    <h3 class="title is-5">Archive for: 
      <?php
      /* If this is a category archive */
      if (is_category()) {
        echo single_cat_title();
      }
      elseif (is_tag()) {
        echo single_tag_title();
      }
      /* If this is a monthly archive */
      elseif (is_month()) {
        echo the_time('F, Y');
      }
      /* If this is a yearly archive */
      elseif (is_year()) {
        echo the_time('Y');
      } ?>
    </h3>
    <hr>
    <div class="content">
      <?php if (have_posts()) : ?>
        <ul class="posts-list">
          <?php while (have_posts()) : the_post(); ?>
          <li>
            <h2 class="title is-5 is-marginless">
              <a
                href="<?php the_permalink(); ?>"
                title="Permalink to <?php the_title(); ?>"><?php the_title(); ?>
              </a>
            </h2>
          </li>
          <?php endwhile; ?>
        </ul>
      <?php else: ?>
        <h1 class="title is-2"><?php _e('Sorry, nothing found.'); ?></h1>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
