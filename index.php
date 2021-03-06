<!-- This document displays blog posts -->

<?php
    get_header();
?>
    
    <section class="archive">
      <div class="archive-container">
        <h1>Thoughts</h1>

        <!-- gets post or page content -->
            <?php
            if (have_posts()) {
            while (have_posts()) {
                the_post();
                
                // gets template part from template-parts.php folder
                get_template_part('template-parts/content', 'archive');
            }
            }
        ?>

            <?php
                the_posts_pagination();
            ?>

            
        </div>
      <!-- /archive-container  -->
    </section>
    <!-- /archive -->

    <div class="sidebar-2">
        <div class="sidebar-2-widgets">

            <?php
                dynamic_sidebar('sidebar-2');
            ?>

        </div>  
        <!-- /sidebar-widgets -->
    </div>
    <!-- /sidebar-2 -->

<?php
  get_footer();
?>