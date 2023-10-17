<?php get_header() ?>
        <div class="container">
            <div class="main">
                <h1 class="main__title">Search <br><span>Result</span></h1>
                <p class="main__description"><?php the_search_query(); ?></p>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </main>
    <section class="page blog">
        <div class="container">
            <div class="acticle">
            <?php 
                $args = array(
                    'orderby' => 'date',
                    'order' => 'DECS',
                    's' => get_search_query(  ),
                    'posts_per_page' => '4',
                );
                $query = new WP_Query( $args );
            ?>
            <?php if ($query->have_posts()) : ?>
                
                <?php while ($query->have_posts(  )) : $query->the_post(  ); ?>
                    <article class="article__item">
                        <div>
                            <div class="article__thumb">
                                <?php the_post_thumbnail( large ); ?>
                            </div>
                            <a href="" class="article__category">podcast</a>
                            <h3 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php
                                $content = get_the_content();
                                $trimmed_content = substr($content, 0, 230);
                                echo $trimmed_content;
                            ?>
                        </div>
                        <div class="article__info">
                            <div class="article__tags">
                                <a href="">art</a>
                                <a href="">tips and trick</a>
                                <a href="">creative</a>
                            </div>
                            <span class="article__date"><?php  echo get_the_date('M j, Y'); ?></span>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
        <?php else : ?>
                <p>Nothing found</p>
        <?php endif; ?>
    </section>
<?php get_footer() ?>