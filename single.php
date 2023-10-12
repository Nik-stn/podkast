<?php get_header() ?>
        <div class="container">
            <div class="main-article">
                <div class="main-article__top">
                    <a href="https://podkast-me.ru/blog/" class="main-article__back">Back to articles</a>
                    <span class="main-article__date">Sep 12, 2021</span>
                </div>
                <div class="main-article__info">
                    <a href="#" class="main-article__category">tips & tricks</a>
                    <h1 class="main-article__title"><?php the_title(); ?></h1>
                    <div class="main-article__tags">
                        <a href="#">art</a>
                        <a href="#">tips and trick</a>
                        <a href="#">creative</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <article class="post">
        <div class="post__thumb">
            <img src="<?php echo PODKAST_IMG_DIR ?>/thumb/cover-post.png" alt="">
        </div>
        <div class="container">
            <div class="post-body">
                <h2>Doodle for our podcast background room</h2>
                <p>Lorem ipsum dolor sit amet, adipiscing <a href="">Aliquam</a> eu sem vitae turpmaximus.posuere in. Contrary to popular belief. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injecthumour, or randomised words which don't look even slightly believable.</p>
                <hr>
                <blockquote>The details are not the details. They make the design.</blockquote>
                <h3>Bullet list example:</h3>
                <ul>
                    <li>Lorem ipsum dolor <strong>sit amet</strong>, consectetur adipiscing elit. Quam pellentesque at bibendum euismod tellus duis curs us dignissim odio. Sit vulputate et integer in.</li>
                    <li>Sit vel, <strong>senectus iaculis morbi</strong>. Amet interdum imperd laoreet morbi tincidunt fermentum, libero. Ante enim ege viverra at porttitor accumsan. <a href="#">Orci non here</a></li>
                    <li>Quis dictum cursus <strong>faucibus mattis dignissim</strong>. Pellent que purus in sed sodales in mauris molestie. Eleifend est consctetur interdum eu in auctor. Gravida leo et.</li>
                </ul>
                <h3>Number list example:</h3>
                <ol>
                    <li>Lorem ipsum dolor <strong>sit amet</strong>, consectetur adipiscing elit. Quam pellentesque at bibendum euismod tellus duis curs us dignissim odio. Sit vulputate et integer in.</li>
                    <li>Sit vel, <strong>senectus iaculis morbi</strong>. Amet interdum imperd laoreet morbi tincidunt fermentum, libero. Ante enim ege viverra at porttitor accumsan. <a href="#">Orci non here</a></li>
                    <li>Quis dictum cursus <strong>faucibus mattis dignissim</strong>. Pellent que purus in sed sodales in mauris molestie. Eleifend est consctetur interdum eu in auctor. Gravida leo et.</li>
                </ol>
                <figure>
                    <img src="<?php echo PODKAST_IMG_DIR ?>/thumb/cover-post.png" alt="">
                </figure>
            </div>
        </div>
    </article>
<?php get_footer() ?>