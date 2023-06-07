<?php
/*
Template Name: Home Page
*/
?>
<?php get_header();?>
<!-- Blog Section -->
<section class="container-fluid blogsection">
    <div class="container">
    <h2 class="blogtag"><?php the_field('indexblogtag'); ?></h2><!--  Custom Field for Blog Tagline-->
        <div class="row">
            <!-- Blog Post 1 -->
            <div class="col-md-4">
                <img class="img-fluid blogimages" src="<?php the_field('indexblogimg1'); ?>"  alt="Underwater Image of the Batavia">
                <h3> <?php the_field('indexblogtitle1'); ?> </h3>
                <p class="blogpost"> <?php the_field('indexblogexcerpt1'); ?> </p>
                <p class="dateindex"> <?php the_field('indexblogdate1'); ?></p>
                <a class="readmore" href="<?php the_field('indexreadmore1'); ?>">Read More...</a>
            </div> <!-- Column -->
            
            <!-- Blog Post 2 -->
            <div class="col-md-4">
            <img class="img-fluid blogimages" src="<?php the_field('indexblogimg2'); ?>"  alt="Survivors Monument Batavia">
                <h3> <?php the_field('indexblogtitle2'); ?> </h3>
                <p class="blogpost"><?php the_field('indexblogexcerpt2'); ?> </p>
                <p class="dateindex"><?php the_field('indexblogdate2'); ?></p>
                <a class="readmore" href="<?php the_field('indexreadmore2'); ?>">Read More...</a>
            </div> <!-- Column -->
            
            <!-- Blog Post 3 -->
            <div class="col-md-4">
            <img class="img-fluid blogimages" src="<?php the_field('indexblogimg3'); ?>"  alt="Black and White Image of Fremantle">
                <h3> <?php the_field('indexblogtitle3'); ?> </h3>
                <p class="blogpost"> <?php the_field('indexblogexcerpt3'); ?> </p>
                <p class="dateindex" ><?php the_field('indexblogdate3'); ?></p>
                <a class="readmore" href="<?php the_field('indexreadmore3'); ?>">Read More...</a>
                </div> <!-- Column -->
            </div> <!-- Row -->
        </div> <!-- Container -->
    </section> <!-- Container Fluid -->

<!-- Tour Section -->
<section class="container-fluid toursection" style="background-size: cover; background-image: url(<?php the_field('tourbackgroundimg') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="negmargin">
                <h4 class="tourheading"><?php the_field('indextourheading'); ?></h4>
                <p class="tourpara"><?php the_field('indextourparagraph'); ?></p>
                
                <button type="button" class="btn tourbtn" onclick="window.location.href = 'http://170.187.231.66/~mesh18/contact/';">BUY TICKETS</button>
            </div> <!-- Negative Margin Container -->
            </div> <!-- Column -->
            <div class="col-sm-6">
            </div> <!-- Column -->
        </div> <!-- Row -->
    </div> <!-- Container -->
</section> <!-- Container Fluid -->
<?php get_footer();?>