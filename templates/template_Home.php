<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

    <div class="body-container">
            <div class="wrapper-container">
                <div id="destinos">
                    <div class="txt-destinos">
                        <h2>Destinos</h2>
                        <P>Leia Sobre os destinos mais recentes</P>
                    </div>    
                </div>
                
                <div class="posts-container">
                    <?php
                    $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date');
                    $postslist = get_posts( $args );
                    foreach ($postslist as $post) :  setup_postdata($post); ?> 
                    <div class="post-unico">
                        <img class="img-post-unico" src=<?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <a href=<?php the_permalink(); ?> class="link-post-unico" >Leia Mais</a>
                </div>
                <?php endforeach; ?>
            </div>
                    
        </div>
    </div>

<?php get_footer(); ?>