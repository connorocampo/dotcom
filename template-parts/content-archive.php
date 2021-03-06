<div class="post">

    <a href="<?php the_permalink(); ?>" class="permalink">
      <span class="post-image">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>
      </span>

    </a>
    <div class="post-content">
      <a href="<?php the_permalink(); ?>" class="permalink">
        <h2><?php the_title(); ?></h2>
      </a>
      <span class="post-meta">
        <span class="date"><?php echo get_the_date(); ?></span><?php the_tags('<span class="tag">#', '</span><span class="tag">', '</span>'); ?>
        </span>

      
      <span class="excerpt">
      <?php
          the_excerpt();
      ?>
      </span>
      <a href="<?php the_permalink(); ?>" class="permalink read-more">Read More</a>
    </div>

</div>
<!-- /post -->
