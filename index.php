<?php get_header() ?>
    <div class="container">
        <div class="main">
            <h1 class="main__title"><?php the_field('banner__title'); ?><br><span><?php the_field('banner__title-red'); ?></span></h1>
            <p class="main__description _xs"><?php the_field('banner__text'); ?></p>
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
        <div class="feedback">
            <p class="feedback__text">One of the best daily podcasts that covers every topic on Spotify.</p>
            <div class="feedback-box">
                <img src="<?php echo PODKAST_IMG_DIR ?>/feedback/author.png" alt="">
                <span class="feedback__author">John Smith</span>,
                <span class="feedback__role">Social Community Manager</span>
            </div>
        </div>
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
        <form class="form" action="">
            <div class="form__item">
                <label for="" class="form__label">Full name <span>*</span></label>
                <input type="text" class="form__input" placeholder="Full name">
            </div>
            <div class="form__item">
                <label for="" class="form__label">Email <span>*</span></label>
                <input type="email" class="form__input" placeholder="johndoe@gmail.com">
            </div>
            <div class="form__item">
                <label for="" class="form__label">Phone <span>*</span></label>
                <input type="tel" class="form__input" placeholder="Phone">
            </div>
            <div class="form__item">
                <label for="" class="form__label">Subject <span>*</span></label>
                <input type="tel" class="form__input" placeholder="Subject...">
            </div>
            <div class="form__item _100">
                <label for="" class="form__label">Message <span>*</span></label>
                <textarea class="form__textarea" placeholder="Your message goes here..."></textarea>
            </div>
            <div class="form__btn _100">
                <button class="btn-primary">Send message</button>
            </div>
        </form>
    </div>
</section>
<?php get_footer() ?>