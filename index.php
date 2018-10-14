<?php get_header(); ?>


        <main>
            <section>
                <!-- <article>
                    <div class="articleleft">
                        <h2>Articletitle</h2>
                        <div class="articlecontent">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fugiat explicabo tempora quae pariatur officia sed. Odio eos saepe consectetur. Veniam atque praesentium ratione fugiat eveniet officiis hic, alias quia?</p>
                            <a href="#">Articlelink</a>
                        </div>
                    </div>
                    <div class="articleright">
                        <img src="images/twinings.jpg" alt="articleimg" class="articleicon">
                    </div>
                </article>
                <article>
                    <div class="articleleft">
                        <h2>Articletitle</h2>
                        <div class="articlecontent">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aut voluptatum ratione, quia earum nemo non repudiandae eum temporibus. Accusantium totam tempora consequuntur, ullam quas doloremque maxime eveniet perspiciatis voluptates!</p>
                            <a href="#">Articlelink</a>
                        </div>
                    </div>
                    <div class="articleright">
                        <img src="images/twinings.jpg" alt="articleimg" class="articleicon">
                    </div>
                </article> -->

                <?php if(have_posts()) : while (have_posts()): the_post(); /* the_post() is the magic function that increases the counter, not documented */?>
                    <article>
                        <div class="articleleft">
                            <h2><?php the_title(); ?></h2>
                            <div class="articlecontent">

                                <p><?php the_content(); ?></p>
                                <a href="#">Articlelink</a>
                            </div>
                        </div>
                        <div class="articleright">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumbnail', array('class' => 'articleicon')); ?>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endwhile; ?> 
                <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
                <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
                <?php endif; ?>
            </section>
            <?php get_sidebar( 'primary' ); ?>
        </main>
        <?php get_footer(); ?>
    </div>

</body>

</html>