<?php get_header() ?>
        <div class="container">
            <div class="main">
                <h1 class="main__title">Tags <br><span>Result</span></h1>
                <p class="main__description"><?php single_tag_title( '', true ); ?></p>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </main>
    <section class="page blog">
        <div class="container">
            <div class="acticle">
            <?php 
                $tag_slug = get_query_var('tag'); 
                $tag = get_term_by('slug', $tag_slug, 'post_tag');
                $tag_id = $tag->term_id;
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'tag_id' => $tag_id,
                    'posts_per_page' => '-1',
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
                            <?php 
                                $links = array_map( function ( $category ) {
                                    return sprintf(
                                        '<a href="%s" class="article__category">%s</a>', // Шаблон вывода ссылки
                                        esc_url( get_category_link( $category ) ), // Ссылка на рубрику
                                        esc_html( $category->name ) // Название рубрики
                                    );
                                }, get_the_category() );
                                
                                echo implode( ', ', $links );
                            ?>
                            <h3 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php
                                $content = get_the_content();
                                $trimmed_content = substr($content, 0, 0);
                                echo $trimmed_content;
                            ?>
                        </div>
                        <div class="article__info">
                            <div class="article__tags">
                            <?php 
                                $posttags = get_the_tags();
                                if( $posttags ){
                                    foreach( $posttags as $tag ){
                                        echo '<a href="'.get_tag_link($tag->term_id).'">' . $tag->name . '</a>';
                                    }
                                }
                            ?>
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