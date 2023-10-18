<?php get_header() ?>
        <div class="container">
            <div class="main-article">
                <div class="main-article__top">
                    <a href="https://podkast-me.ru/blog/" class="main-article__back">Back to articles</a>
                    <span class="main-article__date"><?php echo get_the_date('M j, Y'); ?></span>
                </div>
                <div class="main-article__info">
                    <a href="#" class="main-article__category">tips & tricks</a>
                    <h1 class="main-article__title"><?php the_title(); ?></h1>
                    <div class="main-article__tags">
                        <?php the_tags( '', ''); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <article class="post">
        <div class="post__thumb">
            <?php the_post_thumbnail( large ); ?>
        </div>
        <div class="container">
            <div class="post-body">
                <?php the_content(); ?>
            </div>
        </div>
    </article>
<?php get_footer() ?>