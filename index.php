<?php get_header() ?>
    <div class="container">
        <div class="main">
            <h1 class="main__title"><?php the_field('banner__title', 9); ?><br><span><?php the_field('banner__title-red', 9); ?></span></h1>
            <p class="main__description _xs"><?php the_field('banner__text', 9); ?></p>
            <button class="btn-primary">Subscribe</button>
        </div>
        <div class="supported">
            <p class="supported__text">Supported by:</p>
            <div class="supported__list">
                <a href="#" class="supported__link">
                    <img src="<?php echo PODKAST_IMG_DIR ?>/supported/spotify.svg" alt="Spotify">
                </a>
                <a href="#" class="supported__link">
                    <img src="<?php echo PODKAST_IMG_DIR ?>/supported/google-podcast.svg" alt="Google Podcast">
                </a>
                <a href="#" class="supported__link">
                    <img src="<?php echo PODKAST_IMG_DIR ?>/supported/youtube.svg" alt="Youtube">
                </a>
            </div>
        </div>
    </div>
</main>
<section class="page">
    <div class="container about">
        <h2 class="page__title">Talk. Listen. Get inspired by every minute of it.</h2>
        <div class="about-text">
            <div class="about-text__col">
                <img class="about-text__img" src="<?php echo PODKAST_IMG_DIR ?>/about-icon-01.svg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ultrices odio. </p>
            </div>
            <div class="about-text__col">
                <img class="about-text__img" src="<?php echo PODKAST_IMG_DIR ?>/about-icon-02.svg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac ultrices odio. </p>
            </div>
        </div>
        <?php foreach (getFeedBack() as $post): ?> 
        <div class="feedback">
            <p class="feedback__text"><?php echo $post->post_content ?></p>
            <div class="feedback-box">
                <?php the_post_thumbnail();?>
                <span class="feedback__author"><?php echo $post->post_title ?></span>,
                <span class="feedback__role"><?php echo $post->post_excerpt ?></span>
            </div>
        </div>
        <?php endforeach; ?> 
    </div>
</section>
<section class="page page-bg blog">
    <div class="container">
        <h2 class="page__title">Article and News</h2>
        <p class="page__description">News, tips, tricks and more</p>
        <div class="acticle">
            <article class="article__item">
                <div>
                    <div class="article__thumb">
                        <img src="<?php echo PODKAST_IMG_DIR ?>/thumb/cover-1.png" alt="">
                    </div>
                    <a href="" class="article__category">podcast</a>
                    <h3 class="article__title"><a href="post.html">Setup your own podcast</a></h3>
                    <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimvel iam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="article__info">
                    <div class="article__tags">
                        <a href="">business</a>
                        <a href="">startup</a>
                    </div>
                    <span class="article__date">Sep 14, 2021</span>
                </div>
            </article>
            <article class="article__item">
                <div>
                    <div class="article__thumb">
                        <img src="<?php echo PODKAST_IMG_DIR ?>/thumb/cover-2.png" alt="">
                    </div>
                    <a href="" class="article__category">podcast</a>
                    <h3 class="article__title"><a href="post.html">Setup your own podcast</a></h3>
                    <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimvel iam, quis nostrud exercitation ullamco laboris...</p>
                </div>
                <div class="article__info">
                    <div class="article__tags">
                        <a href="">business</a>
                        <a href="">startup</a>
                    </div>
                    <span class="article__date">Sep 14, 2021</span>
                </div>
            </article>
        </div>
        <a href="blog.html" class="btn-primary">browse all</a>
    </div>
</section>
<section class="page">
    <div class="container">
        <h2 class="page__title">Get in touch</h2>
        <p class="page__description">Send your message to us</p>
        <?php echo do_shortcode('[contact-form-7 id="0599aca" title="Форма обратной связи"]'); ?>
    </div>
</section>
<?php get_footer() ?>