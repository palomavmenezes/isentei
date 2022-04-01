<?php get_header(); ?>

<main id="page-blog">

    <?php get_template_part('template_parts/banner-pages'); ?>

    <section id="blog" class="wow fadeInUp">
        <div class="container">

            <form action="/action_page.php" class="input-filter">
                <div class="row filter-blog">
                    <div class="col-md-2 content-align-mid"><p>Filtre as notícias por:</p></div>
                    <div class="col-md-2">
                        <select name="state" id="estado">
                            <option value="selecione">Categorias</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="city" id="cidade">
                            <option value="selecione">Mês</option>
                        </select>
                    </div>
                    <div class="col-md 6"></div>
                </div>
            </form>

            <div class="row content-postblog">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $exclude = Array();
                $recent_articles = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '6', 'paged' => $paged ) );
                if( $recent_articles->have_posts() ): while( $recent_articles->have_posts() ): $recent_articles->the_post();
                $exclude[] = get_the_ID();
            ?>
                <div class="col-md-4">
                    <div class="post no-padding">
                        <div class="img-post no-padding">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="content-post">
                            <h6><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
                            <hr>
                            <p><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_content(), 18 ); ?></a></p>
                        </div>

                        <div class="mais">
                            <a href="<?php the_permalink() ?>" class="btn-mais">+</a>
                        </div>
                    </div>
                </div>

                <?php
                endwhile;
                
                $big = 999999999; // need an unlikely integer
            
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $recent_articles->max_num_pages
                ) );
                
                endif;
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template_parts/cadastre-se'); ?>
    <?php get_template_part('template_parts/instagram'); ?>

</main>

<?php get_footer(); ?>