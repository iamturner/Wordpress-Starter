<?php /* Template Name: UI Elements */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col col-md-8 col-sm-12">

            <h1><?php the_title(); ?></h1>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <?php the_content(); ?>
            
            <?php endwhile; endif; ?>
            
            <h2>1. Accordion</h2>
            
            <p class="em">This accordion uses radio buttons to show / hide items. For an accordion that doesn't auto-close items, change radio buttons to checkboxes.</p>
            
            <!-- Accordion -->
            <div class="accordion">
                <div class="accordion-item">
                    <input type="radio" class="accordion-trigger" name="accordion" id="accordion-1" checked />
                    <label class="accordion-header" for="accordion-1">
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
                        <i class="fa fa-plus accordion-icon-closed" aria-hidden="true"></i>
                        <i class="fa fa-minus accordion-icon-open" aria-hidden="true"></i>
                    </label>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!---->
                <div class="accordion-item">
                    <input type="radio" class="accordion-trigger" name="accordion" id="accordion-2" />
                    <label class="accordion-header" for="accordion-2">
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
                        <i class="fa fa-plus accordion-icon-closed" aria-hidden="true"></i>
                        <i class="fa fa-minus accordion-icon-open" aria-hidden="true"></i>
                    </label>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!---->
                <div class="accordion-item">
                    <input type="radio" class="accordion-trigger" name="accordion" id="accordion-3" />
                    <label class="accordion-header" for="accordion-3">
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
                        <i class="fa fa-plus accordion-icon-closed" aria-hidden="true"></i>
                        <i class="fa fa-minus accordion-icon-open" aria-hidden="true"></i>
                    </label>
                    <div class="accordion-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <!-- End -->
			
			<h2>2. Buttons</h2>
			
			<p class="em">A range of basic buttons of various styles.</p>
            
			<div class="buttons-showcase">
			
				<button class="button">Regular Button</button>
				<button class="button button--round">Rounded Button</button>
				<button class="button button--outline">Outline Button</button>
				<button class="button button--clear">Clear Button</button>
				<button class="button button--round button--outline">Rounded Outline Button</button>
				<button class="button button--disabled">Disabled Button</button>
				<button class="button button--raised">Raised Button</button>
				<button class="button button--round button--raised">Rounded Raised Button</button>
				<button class="button button--icon-right">
					Icon Button<i class="icon fa fa-arrow-right"></i>
				</button>
				<button class="button button--round button--icon-left">
					<i class="icon fa fa-arrow-left"></i>Rounded Icon Button
				</button>
				
			</div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>
