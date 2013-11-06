<?php get_header(); ?>

    <div class="grid group">

      <section class="article-list grid-2-3 group">

      
      <?php

        $args_static = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'paged' => $paged,
        'orderby' => 'date'
      );

      global $wp_query;
      $args = array_merge( $wp_query->query_vars, $args_static);

      $query = new WP_Query($args);

      while ( $query->have_posts() ) : $query->the_post(); ?>
        <article class="module module-article" id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y - g:i a') ?></time>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">Read Article &rarr;</a>
        </article>
        
      <?php endwhile; ?>

      </section><!-- END section.list -->

      <aside class="grid-1-3 module module-archives">

        <h2>Archives</h2>

        <a href="#" class="archive-link">October 14, 2013</a>
        <a href="#" class="archive-link">October 13, 2013</a>
        <a href="#" class="archive-link">October 12, 2013</a>
        <a href="#" class="archive-link">October 11, 2013</a>
        <a href="#" class="archive-link">October 10, 2013</a>

      </aside><!-- END aside.archives -->

      <aside class="grid-1-3 module module-weather">

        <h2>Weather</h2>

        <img src="<?php bloginfo('template_url'); ?>/images/weather_01s.png" alt="todays weather" width="134" height="150">
        <img src="<?php bloginfo('template_url'); ?>/images/weather_02.png" alt="todays weather" width="192" height="99">

      </aside><!-- END aside.weather -->

</div><?php # END div.grid ?>

<?php get_footer(); ?>