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

                <?php
                    if(have_posts()) :
                        while (have_posts()):
                            the_post();
                            the_content();
                        endwhile;
                    endif;
                ?>
            </section>
            <aside class="sidebar">
                sidebarcontent
            </aside>
        </main>
        <?php get_footer(); ?>
    </div>

</body>

</html>