<!-- Start of the blog section -->
<section class="blog__page--section">
  <?php if (!have_posts()) { ?>
    <h1 class="blog__section--title">No Posts Yet</h1>
  <?php } 
 

    while(have_posts()) { 
      the_post(); ?>

      <div class="blog__page--container">
        <h2 class="blog__page--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="metabox metabox__bottom--sm">
          <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
        </div>

        <div class="blog__page--content">
          <?php if (has_excerpt()) {
            echo get_the_excerpt();
          } else {
            echo wp_trim_words(get_the_content(), 18);
          }  ?>
          <p class="blog__page--link"><a href="<?php the_permalink(); ?>">Continue Reading</a></p>
          <br>
          <hr>
        </div>
      </div>

    <?php }

    echo paginate_links(); 
      ?>
  
</section>