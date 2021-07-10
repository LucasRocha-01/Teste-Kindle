<div class="body-container">
    <? get_header(); ?>

    <div class="wrapper-container">
        <div id="destinos">
            <div class="txt-destinos">
                <h2>Blog - Destinos</h2>
                <P>Conheça nossos Historias sobre cada lugar</P>
            </div>    
        </div>
        
        <div class="posts-container">
            <?php if (have_posts()) :?>
                <?php while(have_posts()) : the_post(); ?>

                        <div class="post-unico"> 
                            <img class="img-post-unico" src=<?php the_post_thumbnail() ?>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                                <a href=<?php the_permalink(); ?> class="link-post-unico" >Leia Mais</a>
                        </div>
                    <?php endwhile;?>

            <?php else: ?>
                <p> Não tem posts por aqui</p>
            <?php endif; ?>
        </div>

    </div>
    <?    get_footer();    ?>
</div>
</html>