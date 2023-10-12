<?php get_header() ?>
        <div class="container">
            <div class="main">
                <h1 class="main__title">Article <br>and <span>News</span></h1>
                <p class="main__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam–quis.</p>
            </div>
        </div>
        <div class="main-blog__search">
            <form class="form-search">
                <input type="text" placeholder="Search...">
                <button type="search"></button>
            </form>
        </div>
    </main>
    <section class="page blog">
        <div class="container">
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
                            <a href="">art</a>
                            <a href="">tips and trick</a>
                            <a href="">creative</a>
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
                        <h3 class="article__title"><a href="post.html">Doodle Artwork 101</a></h3>
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
                            <img src="<?php echo PODKAST_IMG_DIR ?>/thumb/cover-3.png" alt="">
                        </div>
                        <a href="" class="article__category">podcast</a>
                        <h3 class="article__title"><a href="post.html">Mother Nature Taking Over</a></h3>
                        <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimvel iam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="article__info">
                        <div class="article__tags">
                            <a href="">news</a>
                            <a href="">nature</a>
                        </div>
                        <span class="article__date">Sep 14, 2021</span>
                    </div>
                </article>
                <article class="article__item">
                    <div>
                        <div class="article__thumb">
                            <img src="<?php echo PODKAST_IMG_DIR ?>/thumb/cover-4.png" alt="post.html">
                        </div>
                        <a href="" class="article__category">podcast</a>
                        <h3 class="article__title"><a href="">How to Be Productive</a></h3>
                        <p class="article__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimvel iam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="article__info">
                        <div class="article__tags">
                            <a href="">productivity</a>
                            <a href="">mindset</a>
                        </div>
                        <span class="article__date">Sep 14, 2021</span>
                    </div>
                </article>
            </div>
            <a href="blog.html" class="btn-primary">Load More</a>
        </div>
    </section>
<?php get_footer() ?>