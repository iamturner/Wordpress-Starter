<?php /* Template Name: News */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col col-md-12">

        <h1><?php the_title(); ?></h1>

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
        $wp_query = new WP_Query($args);
        while ( have_posts() ) : the_post(); ?>
    
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                Posted on <?php the_date(); ?>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Continue reading</a></p>
                <br />
            </article>
            
        <?php endwhile; ?>

        <br />
            
        <?php next_posts_link( 'Older Entries', $wp_query ->max_num_pages); ?>
        <?php previous_posts_link( 'Newer Entries' ); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>