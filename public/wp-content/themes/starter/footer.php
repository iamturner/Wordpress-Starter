        </main>
        
    </div>
    
    <footer>
        
        <div class="container">
            <div class="row">
                <div class="col col-sm-12 col-md-6">
                    <nav class="footer-nav">
                        <div class="menu">
                            <!-- Use wp_nav_menu or markup below -->
                            <?php //wp_nav_menu( array('menu' => 'Footer') ); ?>
                            <div class="menu-footer-container">
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="#">Link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End -->
                        </div>
                    </nav>
                    <div class="clearfix"></div>
                    <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved. &nbsp;|&nbsp; Built by <a href="http://iamturner.co.uk/" target="_blank">Ian Turner</a></p>
                </div>
                <div class="col col-sm-12 col-md-6">
                    <ul class="social-links">
                        <li><a href="#" target="_blank">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a></li>
                        <li><a href="#" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a></li>
                        <li><a href="#" target="_blank">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </a></li>
                        <li><a href="#" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a></li>
                        <li><a href="#" target="_blank">
                            <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                        </a></li>
                        <li><a href="#" target="_blank">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>

    <? wp_footer(); ?>
    
</body>
    
</html>
