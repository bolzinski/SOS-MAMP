<nav class="feature-nav" id="feature-nav">
  <?php

        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'paged' => $paged,
        'orderby' => 'date'
      );

      $query = new WP_Query($args);

      while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="article">
        <?php the_post_thumbnail('medium'); ?>
        <h5><?php print sos_truncate_string(the_title("","",false), 90); ?></h5>
        </a>
      <?php endwhile; ?>    
</nav>

<nav class="main-nav" id="main-nav">
  <a href="index.php?cat=6" class="home">
    <span data-icon="k" aria-hidden="true"></span>
    News
  </a>
  <a href="index.php?cat=7" class="sports">
    <span data-icon="9" aria-hidden="true"></span>Sports
  </a>
  <a href="index.php?cat=3" class="business">
    <span data-icon="Q" aria-hidden="true"></span>Business
  </a>
  <a href="index.php?cat=2" class="tech">
    <span data-icon="p" aria-hidden="true"></span>Tech
  </a>
  <a href="index.php?cat=8" class="arts">
    <span data-icon="q" aria-hidden="true"></span>Arts
  </a>
  <a href="index.php?cat=4" class="opinions">
    <span data-icon="ó" aria-hidden="true"></span>Opinions
  </a>
  <a href="index.php?cat=5" class="schools">
    <span data-icon="w" aria-hidden="true"></span>Schools
  </a>
</nav>