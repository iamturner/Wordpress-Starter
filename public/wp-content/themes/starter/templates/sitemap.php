<?php /* Template Name: Site Map */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col col-md-8 col-sm-12">

            <h1><?php the_title(); ?></h1>
            
            <ul>
                <?php echo wp_list_pages(array(
                    'title_li' => null, 
                    'exclude' => 64
                )); ?>
            </ul>
                
        </div>
    </div>
</div>

<?php get_footer(); ?>
