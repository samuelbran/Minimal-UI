<?php
get_header();

global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
  foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
  }
}

$search = new WP_Query($search_query);
?>

<div class="section">
  <div class="container">
    <br>
    <h3 class="title is-5">Search results for: <?php foreach($search_query as $term) { echo $term; } ?></h3>
    <hr>
    <div class="content">
      <?php if (have_posts()) : ?>
        <ul class="posts-list">
          <?php while (have_posts()) : the_post();
            $parentID = wp_get_post_parent_id($post->ID);
            $parent = get_post($parentID);
          ?>
          <li>
            <h2 class="title is-5 is-marginless">
              <a
                href="<?php the_permalink(); ?>"
                title="Permalink to <?php the_title(); ?>">
                <?php the_title(); echo ' - ' ?> <span><?php echo $parent ? $parent->post_title : $post->post_type; ?></span>
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
</div>

<?php get_footer(); ?>
