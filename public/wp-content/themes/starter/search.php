<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col col-md-8 col-sm-12">

        <?php if ( have_posts() ) : ?>

            <h1><?php printf( __( 'Search Results for: "%s"'), '<span>' . get_search_query() . '</span>' ); ?></h1>

            <p><?php echo $wp_query->found_posts; ?> results:</p>
            
            <ul>
            
            <?php while ( have_posts() ) : the_post(); ?>

                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

            <?php endwhile; ?>

            </ul>
                
        <?php else : ?>

            <h1>No Results Found :(</h1>

        <?php endif; ?>
            
        </div>
    </div>    
</div>    

<?php get_footer(); ?>
