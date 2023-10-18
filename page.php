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
            <div class="acticle">
                <?php
                    $args = array(
                        'numberposts' => 4,
                    );

                    $result = wp_get_recent_posts( $args );

                    foreach( $result as $p ){
                        $thumbnail = get_the_post_thumbnail( $p['ID'], 'full' );
                        $posttags = get_the_tags($p['ID']);
                        ?>
                        <article class="article__item">
                            <div>
                                <div class="article__thumb">
                                    <?php echo $thumbnail;?>
                                </div>
                                <a href="" class="article__category">podcast</a>
                                <h3 class="article__title"><a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a></h3>
                                <?php echo substr($p['post_content'], 0, 230 )?>
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
            <a href="blog.html" class="btn-primary">Load More</a>
        </div>
    </section>
<?php get_footer() ?>