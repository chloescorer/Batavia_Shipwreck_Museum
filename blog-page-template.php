<?php
/*
Template Name: Blog
*/
?>
<?php require_once('blog_header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section>
            <?php
$args = array(
  'category_name' =>  'BlogPosts',
 // 'posts_per_page'    =>   1
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 <div class="thepost">
<h2 class="postheading"><?php the_title(); ?></h2> 
<?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('thumbnail');
                } ?>
<p><?php the_excerpt(); ?></p>
    <a class="readmore" href="<?php the_permalink(); ?>"> Read More...</a>
</div>    <?php endwhile; ?>
    <!-- end of the loop -->
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</section>
           
     </div>
    </div><!-- container  -->
  </div>  <!-- container fluid -->
<?php get_footer(); ?>