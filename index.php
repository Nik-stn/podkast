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
                <p><?php the_field('first__text', 9); ?></p>
            </div>
            <div class="about-text__col">
                <img class="about-text__img" src="<?php echo PODKAST_IMG_DIR ?>/about-icon-02.svg" alt="">
                <p><?php the_field('second__text', 9); ?></p>
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
            <?php
                    $args = array(
                        'numberposts' => 2,
                    );

                    $result = wp_get_recent_posts( $args );

                    foreach( $result as $p ){
                        $thumbnail = get_the_post_thumbnail( $p['ID'], 'full' );
                        $posttags = get_the_tags($p['ID']);
                        $postcategory = get_the_category($p['ID']);
                        ?>
                        <article class="article__item">
                            <div>
                                <div class="article__thumb">
                                    <?php echo $thumbnail;?>
                                </div>
                                <?php 
                                $links = array_map( function ( $category ) {
                                    return sprintf(
                                        '<a href="%s" class="article__category">%s</a>', // Шаблон вывода ссылки
                                        esc_url( get_category_link( $category ) ), // Ссылка на рубрику
                                        esc_html( $category->name ) // Название рубрики
                                    );
                                }, $postcategory );
                                
                                echo implode( ', ', $links );
                            ?>
                                <h3 class="article__title"><a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a></h3>
                                <?php echo substr($p['post_content'], 0, 0 )?>
                            </div>
                            <div class="article__info">
                                <div class="article__tags">
                                    <?php 
                                        if( $posttags ){
                                            foreach( $posttags as $tag ){
                                                echo '<a href="'.get_tag_link($tag->term_id).'">' . $tag->name . '</a>';
                                            }
                                        }
                                    ?>
                                </div>
                                <span class="article__date"><?php $date = date_i18n('M j, Y', strtotime($p['post_date'])); echo $date; ?></span>
                            </div>
                        </article>
                        <?php
                    }
                ?>
        </div>
        <a href="<?php echo get_permalink(26); ?>" class="btn-primary">browse all</a>
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