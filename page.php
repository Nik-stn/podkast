<?php get_header() ?>
        <div class="container">
            <div class="main">
                <h1 class="main__title">Article <br>and <span>News</span></h1>
                <p class="main__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam–quis.</p>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </main>
    <section class="page blog">
        <div class="container">
            <?php echo do_shortcode('[ajax_load_more container_type="div" css_classes="article" post_type="post" posts_per_page="4" scroll="false"]'); ?>
        </div>
    </section>
<?php get_footer() ?>