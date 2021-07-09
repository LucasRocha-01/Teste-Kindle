<body>
        <? get_header(); ?>

    <div class="wrapper-container">
        <div id="destinos">
            <div class="txt-destinos">
                <h2>Destinos</h2>
                <P>Conheça nossos destinos</P>
            </div>    
        </div>
        
        <div class="posts-container">
            <?php if (have_posts()) :?>
                <? $cont = 0 ?>
                <?php while(have_posts() && ($cont < 3) ) : the_post(); ?>
                    <? $cont++ ?>   

                        <div class="post-unico">
                            <img class="img-post-unico" src=<?php the_post_thumbnail(); ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <a href=<?php the_permalink(); ?> class="link-post-unico" >Leia Mais</a>
                        </div>
                    <?php endwhile;?>

            <?php else: ?>
                <p> não tem posts por aqui</p>
            <?php endif; ?>
        </div>

    </div>
    <?    get_footer();    ?>
</body>
</html>