<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col col-md-8 col-sm-12">

        <h1><?php the_title(); ?></h1>
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            Posted on <?php the_date('F d, Y'); ?>
            
            <?php the_content(); ?>
            
        <?php endwhile; endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>